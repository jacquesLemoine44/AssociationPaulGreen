<?php

namespace App\Controller;

use App\Entity\Partners;
use App\Form\PartnersType;
use App\Repository\PartnersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("/partners")
 */
class PartnersController extends AbstractController
{
    /**
     * @Route("/", name="partners_index", methods={"GET"})
     */
    public function index(PartnersRepository $partnersRepository): Response
    {
        return $this->render('partners/index.html.twig', [
            'partners' => $partnersRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="partners_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $partner = new Partners();
        $form = $this->createForm(PartnersType::class, $partner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // ================================= Photo

            $photo = $form->get('photoPartner')->getData();
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = 'logo-' . $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();
                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $photo->move($this->getParameter('photos_directoryPartners'), $newFilename);
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }
                // met à jour la propriété 'photoEleve' pour stocker le nom du fichier PDF au lieu de son contenu
                $partner->setPhotoPartner($newFilename);
            }

            // =================================

            // ================================= Logo

            $photo = $form->get('logoPartner')->getData();
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = 'logo-' . $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();
                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $photo->move($this->getParameter('photos_directoryPartners'), $newFilename);
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }
                // met à jour la propriété 'photoEleve' pour stocker le nom du fichier PDF au lieu de son contenu
                $partner->setLogoPartner($newFilename);
            }

            // =================================             


            $entityManager->persist($partner);
            $entityManager->flush();

            return $this->redirectToRoute('partners_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('partners/new.html.twig', [
            'partner' => $partner,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="partners_show", methods={"GET"})
     */
    public function show(Partners $partner): Response
    {
        return $this->render('partners/show.html.twig', [
            'partner' => $partner,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="partners_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Partners $partner, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(PartnersType::class, $partner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // ================================= Photo

            $photo = $form->get('photoPartner')->getData();
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = 'logo-' . $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();
                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $photo->move($this->getParameter('photos_directoryPartners'), $newFilename);
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }
                // met à jour la propriété 'photoEleve' pour stocker le nom du fichier PDF au lieu de son contenu
                $partner->setPhotoPartner($newFilename);
            }

            // =================================

            // ================================= Logo

            $photo = $form->get('logoPartner')->getData();
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = 'logo-' . $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();
                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $photo->move($this->getParameter('photos_directoryPartners'), $newFilename);
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }
                // met à jour la propriété 'photoEleve' pour stocker le nom du fichier PDF au lieu de son contenu
                $partner->setLogoPartner($newFilename);
            }

            // =================================             

            $entityManager->flush();

            return $this->redirectToRoute('partners_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('partners/edit.html.twig', [
            'partner' => $partner,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="partners_delete", methods={"POST"})
     */
    public function delete(Request $request, Partners $partner, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$partner->getId(), $request->request->get('_token'))) {
            $entityManager->remove($partner);
            $entityManager->flush();
        }

        return $this->redirectToRoute('partners_index', [], Response::HTTP_SEE_OTHER);
    }
}
