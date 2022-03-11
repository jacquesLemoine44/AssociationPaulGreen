<?php

namespace App\Controller;

use App\Entity\Params;
use App\Form\ParamsType;
use App\Form\ParamsPolitiqueType;
use App\Form\ParamsAssosType;
use App\Form\ParamsMastersType;
use App\Repository\ParamsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

/**
 * @Route("/params")
 */
class ParamsController extends AbstractController
{
    /**
     * @Route("/", name="params_index", methods={"GET"})
     */
    public function index(ParamsRepository $paramsRepository): Response
    {
        return $this->render('params/index.html.twig', [
            'params' => $paramsRepository->findAll(),
        ]);
    }

    // === Présentation de l'association ======================================================  

    /**
     * @Route("/{id}/assos", name="assos", methods={"GET"})
     */
    public function assos(Params $param, ParamsRepository $paramsRepository): Response
    {
        return $this->render('params/Assos.html.twig', [
            'params' => $paramsRepository->findAll(),
            'param' => $param,
        ]);
    }

    /**
     * @Route("/{id}/assosshow", name="params_assosshow", methods={"GET"})
     */
    public function assosshow(Params $param): Response
    {
        return $this->render('params/assosShow.html.twig', [
            'param' => $param,
        ]);
    }
 
    /**
     * @Route("/{id}/assosedit", name="params_assosedit", methods={"GET", "POST"})
     */
    public function assosedit(Request $request, Params $param, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(ParamsAssosType::class, $param);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->render('params/assosShow.html.twig', [
                'param' => $param,
            ]);
        }

        return $this->renderForm('params/assosEdit.html.twig', [
            'param' => $param,
            'form' => $form,
        ]);
    }
   
 
    // === Politique de confidentialite =========================================================  

    /**
     * @Route("/{id}/politiques", name="politiques", methods={"GET"})
     */
    public function politiques(Params $param): Response
    {
        return $this->render('politiques/politique.html.twig', [
            // 'param' => $param,
            'params' => $param,
        ]);
    }

    // =========================================================================================

    /**
     * @Route("/{id}/politique", name="params_politiqueShow", methods={"GET"})
     */
    public function politiqueShow(Params $param): Response
    {
        return $this->render('params/politiqueShow.html.twig', [
            'param' => $param,
        ]);
    }

    /**
     * @Route("/{id}/politiqueEdit", name="params_politiqueEdit", methods={"GET", "POST"})
     */
    public function politiqueEdit(Request $request, Params $param, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(ParamsPolitiqueType::class, $param);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->render('params/politiqueShow.html.twig', [
                'param' => $param,
            ]);
        }

        return $this->renderForm('params/politiqueEdit.html.twig', [
            'param' => $param,
            'form' => $form,
        ]);
    }

    // =========================================================================================  

    /**
     * @Route("/new", name="params_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $param = new Params();
        $form = $this->createForm(ParamsType::class, $param);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // ================================= Photo

            $photo = $form->get('photoParam')->getData();
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();
                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $photo->move($this->getParameter('photos_directoryParams'), $newFilename);
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }
                // met à jour la propriété 'photoEleve' pour stocker le nom du fichier PDF au lieu de son contenu
                $param->setPhotoParam($newFilename);
            }

            // =================================    
            
            // ================================= Photo

            $photo = $form->get('logoParam')->getData();
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = 'logo-' . $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();
                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $photo->move($this->getParameter('photos_directoryParams'), $newFilename);
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }
                // met à jour la propriété 'photoEleve' pour stocker le nom du fichier PDF au lieu de son contenu
                $param->setLogoParam($newFilename);
            }

            // =================================  
                        
            $entityManager->persist($param);
            $entityManager->flush();

            return $this->redirectToRoute('params_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('params/new.html.twig', [
            'param' => $param,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="params_show", methods={"GET"})
     */
    public function show(Params $param): Response
    {
        return $this->render('params/show.html.twig', [
            'param' => $param,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="params_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Params $param, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(ParamsType::class, $param);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // ================================= Photo

            $photo = $form->get('photoParam')->getData();
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();
                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $photo->move($this->getParameter('photos_directoryParams'), $newFilename);
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }
                // met à jour la propriété 'photoEleve' pour stocker le nom du fichier PDF au lieu de son contenu
                $param->setPhotoParam($newFilename);
            }

            // =================================

            // ================================= Photo

            $photo = $form->get('logoParam')->getData();
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = 'logo-' . $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();
                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $photo->move($this->getParameter('photos_directoryParams'), $newFilename);
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }
                // met à jour la propriété 'photoEleve' pour stocker le nom du fichier PDF au lieu de son contenu
                $param->setLogoParam($newFilename);
            }

            // =================================             

            $entityManager->flush();

            // return $this->redirectToRoute('params_index', [], Response::HTTP_SEE_OTHER);           
            return $this->render('params/show.html.twig', [
                'param' => $param,
            ]);

        }

        return $this->renderForm('params/edit.html.twig', [
            'param' => $param,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="params_delete", methods={"POST"})
     */
    public function delete(Request $request, Params $param, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$param->getId(), $request->request->get('_token'))) {
            $entityManager->remove($param);
            $entityManager->flush();
        }

        return $this->redirectToRoute('params_index', [], Response::HTTP_SEE_OTHER);
    }

}
