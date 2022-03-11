<?php

namespace App\Controller;

use App\Entity\PhotosActionsAssos;
use App\Form\PhotosActionsAssosType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PhotosActionsAssosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/photos/actions/assos")
 */
class PhotosActionsAssosController extends AbstractController
{
    /**
     * @Route("/", name="app_photos_actions_assos_index", methods={"GET"})
     */
    public function index(PhotosActionsAssosRepository $photosActionsAssosRepository): Response
    {
        return $this->render('photos_actions_assos/index.html.twig', [
            'photos_actions_assos' => $photosActionsAssosRepository->findByTri2createQueryBuilder(),
        ]);
    }

    /**
     * @Route("/new", name="app_photos_actions_assos_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $photosActionsAsso = new PhotosActionsAssos();
        $form = $this->createForm(PhotosActionsAssosType::class, $photosActionsAsso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($photosActionsAsso);
            $entityManager->flush();

            return $this->redirectToRoute('app_photos_actions_assos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('photos_actions_assos/new.html.twig', [
            'photos_actions_asso' => $photosActionsAsso,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_photos_actions_assos_show", methods={"GET"})
     */
    public function show(PhotosActionsAssos $photosActionsAsso): Response
    {
        return $this->render('photos_actions_assos/show.html.twig', [
            'photos_actions_asso' => $photosActionsAsso,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_photos_actions_assos_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PhotosActionsAssos $photosActionsAsso, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PhotosActionsAssosType::class, $photosActionsAsso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_photos_actions_assos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('photos_actions_assos/edit.html.twig', [
            'photos_actions_asso' => $photosActionsAsso,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_photos_actions_assos_delete", methods={"POST"})
     */
    public function delete(Request $request, PhotosActionsAssos $photosActionsAsso, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$photosActionsAsso->getId(), $request->request->get('_token'))) {
            $entityManager->remove($photosActionsAsso);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_photos_actions_assos_index', [], Response::HTTP_SEE_OTHER);
    }
}
