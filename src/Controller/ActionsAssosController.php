<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\Photos;
use App\Entity\Comments;
use App\Entity\ActionsAssos;
use App\Form\ActionsAssosType;
use App\Entity\DocActionsAssos;
use App\Form\DocActionsAssosType;
use App\Entity\PhotosActionsAssos;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ActionsAssosRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

/**
 * @Route("/actions/assos")
 */
class ActionsAssosController extends AbstractController
{
    /**
     * @Route("/", name="actions_assos_index", methods={"GET"})
     */
    public function index(ActionsAssosRepository $actionsAssosRepository): Response
    {
        return $this->render('actions_assos/index.html.twig', [
            'actions_assos' => $actionsAssosRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="actions_assos_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $actionsAsso = new ActionsAssos();
        $form = $this->createForm(ActionsAssosType::class, $actionsAsso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            // // On récupère le contenu du champ parentid
            // $parentid = $form->get("parentid")->getData();
            // if($parentid != null){
            //     $parent = $em->getRepository(Comments::class)->find($parentid);
            // }
            // On définit le parent
            // $comment->setParent($parent ?? null);            

            // ================================= Photo

            $photo = $form->get('pictureactionsasso')->getData();
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();
                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $photo->move($this->getParameter('photos_directoryAssos'), $newFilename);
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }
                // met à jour la propriété 'photoEleve' pour stocker le nom du fichier PDF au lieu de son contenu
                $actionsAsso->setPictureactionsasso($newFilename);
            }

            // =================================  
            

            // ========================== Photos Multiples

            // On récupère les images transmises
            $photos = $form->get('actionsassosphoto')->getData();
        
            // On boucle sur les images
            foreach($photos as $photo){
           
                // On génère un nouveau nom de fichier
                $fichier = md5(uniqid()).'.'.$photo->guessExtension();
                // On copie le fichier dans le dossier uploads
                $photo->move(
                    $this->getParameter('photos_directoryAssos'),
                    $fichier
                );                
                // On crée l'image dans la base de données
                $img = new PhotosActionsAssos();
                $img->setPhotoactionsasso($fichier);
                $actionsAsso->addActionsassosphoto($img);
            }
            // $entityManager = $this->getDoctrine()->getManager(); ne marche plus

            // =====================================

            $entityManager->persist($actionsAsso);
            $entityManager->flush();

            return $this->redirectToRoute('actions_assos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('actions_assos/new.html.twig', [
            'actions_asso' => $actionsAsso,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="actions_assos_show", methods={"GET"})
     */
    public function show(ActionsAssos $actionsAsso): Response
    {
        return $this->render('actions_assos/show.html.twig', [
            'actions_asso' => $actionsAsso,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="actions_assos_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, 
                                ActionsAssos $actionsAsso, 
                                EntityManagerInterface $entityManager, 
                                SluggerInterface $slugger,                             
                                Users $users ): Response
    {

        // $user = $this->getUser();
        //  dump($user);
        //  die;

        $form = $this->createForm(ActionsAssosType::class, $actionsAsso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // ================================= Photo

            $photo = $form->get('pictureactionsasso')->getData();
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();
                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $photo->move($this->getParameter('photos_directoryAssos'), $newFilename);
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }
                // met à jour la propriété 'photoEleve' pour stocker le nom du fichier PDF au lieu de son contenu
                $actionsAsso->setPictureactionsasso($newFilename);
            }

            // ====================================== 
            

            // ========================== Photos Multiples

            // On récupère les images transmises
            $photos = $form->get('actionsassosphoto')->getData();
          
            // On boucle sur les images
            foreach($photos as $photo){
           
                // On génère un nouveau nom de fichier
                $fichier = md5(uniqid()).'.'.$photo->guessExtension();
                // On copie le fichier dans le dossier uploads
                $photo->move(
                    $this->getParameter('photos_directoryAssos'),
                    $fichier
                );                
                // On crée l'image dans la base de données
                $img = new PhotosActionsAssos();
                $img->setPhotoactionsasso($fichier);
                $actionsAsso->addActionsassosphoto($img);
            }
            // $entityManager = $this->getDoctrine()->getManager(); ne marche plus

            // =====================================

            $actionsAsso->setActionsassosuser($this->getUser());

            $entityManager->flush();

            return $this->redirectToRoute('actions_assos_index', [], Response::HTTP_SEE_OTHER);
        }

// ----------------------
        // Partie commentaires
        // On crée le commentaire "vierge"
        $comment = new DocActionsAssos;
        // On génère le formulaire
        $commentForm = $this->createForm(DocActionsAssosType::class, $comment);
        $commentForm->handleRequest($request);
        // Traitement du formulaire
        if($commentForm->isSubmitted() && $commentForm->isValid()){
        //     // $comment->setCreatedAt(new DateTime());
        //     $comment->setDocactasso($actionsAsso);
             // On récupère le contenu du champ parentid
             $parentid = $commentForm->get("docactasso")->getData();
             // On va chercher le commentaire correspondant
             // $em = $this->getDoctrine()->getManager();
             if($parentid != null){
                 $parent = $entityManager
                    ->getRepository(DocActionsAssosType::class)
                    ->find($parentid);
             }
        //     // On définit le parent
        //     $comment->setDocactasso($parent ?? null);
        //     $entityManager->persist($comment);
        //     $entityManager->flush();
        //     $this->addFlash('message', 'Votre commentaire a bien été envoyé');
        //     return $this->redirectToRoute('annonces_details', ['slug' => $annonce->getSlug()]);
         }
        
// ----------------------


// return $this->renderForm('actions_assos/edit.html.twig', [
//     'actions_asso' => $actionsAsso,
//     'form' => $form->createView(),
// ]);
        return $this->render('actions_assos/edit.html.twig', [
            'actions_asso' => $actionsAsso,
            'form' => $form->createView(),
            'commentForm' => $commentForm->createView()
        ]);
    }

    /**
     * @Route("/{id}", name="actions_assos_delete", methods={"POST"})
     */
    public function delete(Request $request, ActionsAssos $actionsAsso, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$actionsAsso->getId(), $request->request->get('_token'))) {
            $entityManager->remove($actionsAsso);
            $entityManager->flush();
        }

        return $this->redirectToRoute('actions_assos_index', [], Response::HTTP_SEE_OTHER);
    }

/**
 * @Route("/supprime/photo/{id}", name="actions_assos_delete_photo", methods={"DELETE"})
 */
    public function deleteImage(Request $request, PhotosActionsAssos $photo, EntityManagerInterface $entityManager){

        $data = json_decode($request->getContent(), true);

        // On vérifie si le token est valide
        if($this->isCsrfTokenValid('delete'.$photo->getId(), $data['_token'])){
            // On récupère le nom de l'image
            $nom = $photo->getPhotoactionsasso();
            // On supprime le fichier
            unlink($this->getParameter('photos_directoryAssos').'/'.$nom);

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

}


