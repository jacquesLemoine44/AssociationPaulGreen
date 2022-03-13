<?php

namespace App\Controller;

use App\Entity\Fieldtrips;
use App\Form\FieldtripsType;
use App\Repository\FieldtripsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

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

            // // On récupère les images transmises
            // $photos = $form->get('newsPhotosNews')->getData();
            // // On boucle sur les images
            // foreach($photos as $photo){
            //     // On génère un nouveau nom de fichier
            //     $fichier = md5(uniqid()).'.'.$photo->guessExtension();
            //     // On copie le fichier dans le dossier uploads
            //     $photo->move(
            //         $this->getParameter('photos_directoryNews'),
            //         $fichier
            //     );                
            //     // On crée l'image dans la base de données
            //     $img = new NewsPhotos();
            //     // $img = new Photos();
            //     $img->setPhotoNewPhoto($fichier);
            //     $news->addNewsPhotosNews($img);
            // }
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

            // // On récupère les images transmises
            // $photos = $form->get('newsPhotosNews')->getData();
            // // On boucle sur les images
            // foreach($photos as $photo){
            //     // On génère un nouveau nom de fichier
            //     $fichier = md5(uniqid()).'.'.$photo->guessExtension();
            //     // On copie le fichier dans le dossier uploads
            //     $photo->move(
            //         $this->getParameter('photos_directoryNews'),
            //         $fichier
            //     );                
            //     // On crée l'image dans la base de données
            //     $img = new NewsPhotos();
            //     // $img = new Photos();
            //     $img->setPhotoNewPhoto($fichier);
            //     $news->addNewsPhotosNews($img);
            // }
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
}
