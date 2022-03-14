<?php

namespace App\Controller;

use App\Entity\Photos;
use App\Entity\Fieldtrips;
use App\Entity\NewsPhotos;
use App\Form\FieldtripsType;
use App\Entity\Fieldtripphotos;
use App\Repository\FieldtripsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

/**
 * @Route("/fieldtrips")
 */
class FieldtripsController extends AbstractController
{
    /**
     * @Route("/", name="app_fieldtrips_index", methods={"GET"})
     */
    public function index(FieldtripsRepository $fieldtripsRepository): Response
    {
        return $this->render('fieldtrips/index.html.twig', [
            'fieldtrips' => $fieldtripsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_fieldtrips_new", methods={"GET", "POST"})
     */
    public function new(Request $request, FieldtripsRepository $fieldtripsRepository, SluggerInterface $slugger): Response
    {
        $fieldtrip = new Fieldtrips();
        $form = $this->createForm(FieldtripsType::class, $fieldtrip);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // ================================= Photo

            $photo = $form->get('picturefieldtrip')->getData();
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();
                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $photo->move($this->getParameter('photos_directoryFieldtrips'), $newFilename);
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }
                // met à jour la propriété 'photoEleve' pour stocker le nom du fichier PDF au lieu de son contenu
                $fieldtrip->setPicturefieldtrip($newFilename);
            }

            // =================================             

            // ===== Photos Multiples

            // On récupère les images transmises
            $photos = $form->get('connectfieldtrip')->getData();
            // On boucle sur les images
            foreach($photos as $photo){
                // On génère un nouveau nom de fichier
                $fichier = md5(uniqid()).'.'.$photo->guessExtension();
                // On copie le fichier dans le dossier uploads
                $photo->move(
                    $this->getParameter('photos_directoryFieldtrips'),
                    $fichier
                );                
                // On crée l'image dans la base de données
                $img = new Fieldtripphotos();
                // $img = new Photos();
                $img->setFilefieldtripphoto($fichier);
                $fieldtrip->addConnectfieldtrip($img);
            }
            // $entityManager = $this->getDoctrine()->getManager(); ne marche plus

            // =====

            $fieldtripsRepository->add($fieldtrip);
            return $this->redirectToRoute('app_fieldtrips_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('fieldtrips/new.html.twig', [
            'fieldtrip' => $fieldtrip,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_fieldtrips_show", methods={"GET"})
     */
    public function show(Fieldtrips $fieldtrip): Response
    {
        return $this->render('fieldtrips/show.html.twig', [
            'fieldtrip' => $fieldtrip,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_fieldtrips_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Fieldtrips $fieldtrip, FieldtripsRepository $fieldtripsRepository, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(FieldtripsType::class, $fieldtrip);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // ================================= Photo

            $photo = $form->get('picturefieldtrip')->getData();
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();
                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $photo->move($this->getParameter('photos_directoryFieldtrips'), $newFilename);
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }
                // met à jour la propriété 'photoEleve' pour stocker le nom du fichier PDF au lieu de son contenu
                $fieldtrip->setPicturefieldtrip($newFilename);
            }

            // =================================             

            // ===== Photos Multiples

            // On récupère les images transmises
            $photos = $form->get('connectfieldtrip')->getData();
            // On boucle sur les images
            foreach($photos as $photo){
                // On génère un nouveau nom de fichier
                $fichier = md5(uniqid()).'.'.$photo->guessExtension();
                // On copie le fichier dans le dossier uploads
                $photo->move(
                    $this->getParameter('photos_directoryFieldtrips'),
                    $fichier
                );                
                // On crée l'image dans la base de données
                $img = new Fieldtripphotos();
                // $img = new Photos();
                $img->setFilefieldtripphoto($fichier);
                $fieldtrip->addConnectfieldtrip($img);
            }
            // $entityManager = $this->getDoctrine()->getManager(); ne marche plus

            // =====
           
            $fieldtripsRepository->add($fieldtrip);
            return $this->redirectToRoute('app_fieldtrips_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('fieldtrips/edit.html.twig', [
            'fieldtrip' => $fieldtrip,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_fieldtrips_delete", methods={"POST"})
     */
    public function delete(Request $request, Fieldtrips $fieldtrip, FieldtripsRepository $fieldtripsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fieldtrip->getId(), $request->request->get('_token'))) {
            $fieldtripsRepository->remove($fieldtrip);
        }

        return $this->redirectToRoute('app_fieldtrips_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
    * @Route("/supprime/photo/{id}", name="app_fieldtrips_delete_photo", methods={"DELETE"})
    */
    public function deleteImage(Request $request, Fieldtripphotos $photo, EntityManagerInterface $entityManager){
        $data = json_decode($request->getContent(), true);

    // On vérifie si le token est valide
    if($this->isCsrfTokenValid('delete'.$photo->getId(), $data['_token'])){
        // On récupère le nom de l'image
        $nom = $photo->getFilefieldtripphoto();
        // On supprime le fichier
        unlink($this->getParameter('photos_directoryFieldtrips').'/'.$nom);

        // On supprime l'entrée de la base
        // $em = $this->getDoctrine()->getManager();
        // $em->remove($photo);
        // $em->flush();
        $entityManager->remove($photo);
        $entityManager->flush();

        // On répond en json
        return new JsonResponse(['success' => 1]);
    }else{
        return new JsonResponse(['error' => 'Token Invalide'], 400);
    }
}


// /**
//  * Truncates text.
//  *
//  * Cuts a string to the length of $length and replaces the last characters
//  * with the ending if the text is longer than length.
//  *
//  * @param string  $text String to truncate.
//  * @param integer $length Length of returned string, including ellipsis.
//  * @param mixed $ending If string, will be used as Ending and appended to the trimmed string. Can also be an associative array that can contain the last three params of this method.
//  * @param boolean $exact If false, $text will not be cut mid-word
//  * @param boolean $considerHtml If true, HTML tags would be handled correctly
//  * @return string Trimmed string.
//  */
  
// function truncate($text, $length = 100, $ending = '...', $exact = true, $considerHtml = false) {
//     if (is_array($ending)) {
//         extract($ending);
//     }
//     if ($considerHtml) {
//         if (mb_strlen(preg_replace('//', '', $text)) ]*>)?([^<>]*)/', $text, $tags, PREG_SET_ORDER);
//         foreach ($tags as $tag) {
//             if (!preg_match('/img|br|input|hr|area|base|basefont|col|frame|isindex|link|meta|param/s', $tag[2])) {
//                 if (preg_match('/]*>/s', $tag[0])) {
//                     array_unshift($openTags, $tag[2]);
//                 } else if (preg_match('/<\/([\w]+)[^>]*>/s', $tag[0], $closeTag)) {
//                     $pos = array_search($closeTag[1], $openTags);
//                     if ($pos !== false) {
//                         array_splice($openTags, $pos, 1);
//                     }
//                 }
//             }
//             $truncate .= $tag[1];
 
//             $contentLength = mb_strlen(preg_replace('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|&#x[0-9a-f]{1,6};/i', ' ', $tag[3]));
//             if ($contentLength + $totalLength > $length) {
//                 $left = $length - $totalLength;
//                 $entitiesLength = 0;
//                 if (preg_match_all('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|&#x[0-9a-f]{1,6};/i', $tag[3], $entities, PREG_OFFSET_CAPTURE)) {
//                     foreach ($entities[0] as $entity) {
//                         if ($entity[1] + 1 - $entitiesLength = $length) {
//                 break;
//             }
//         }
 
//     } else {
//         if (mb_strlen($text) /', $bits, $droppedTags, PREG_SET_ORDER);
//                 if (!empty($droppedTags)) {
//                     foreach ($droppedTags as $closingTag) {
//                         if (!in_array($closingTag[1], $openTags)) {
//                             array_unshift($openTags, $closingTag[1]);
//                         }
//                     }
//                 }
//             }
//             $truncate = mb_substr($truncate, 0, $spacepos);
//         }
//     }
 
//     $truncate .= $ending;
 
//     if ($considerHtml) {
//         foreach ($openTags as $tag) {
//             $truncate .= '';
//         }
//     }
 
//     return $truncate;
// }


// https://www.babeuloula.fr/blog/couper-une-chaine-en-concervant-les-balises-html.html
// https://codes-sources.commentcamarche.net/forum/affich-478196-tronquer-un-texte-contenant-des-balises-html-avec-substr
// https://alanwhipple.com/2011/05/25/php-truncate-string-preserving-html-tags-words/
// https://www.deefuse.fr/veille-developpeur-php-wordpress-codeigniter-lyon/developpeur-php-tronquer-un-texte-html-de-maniere-propre


}
