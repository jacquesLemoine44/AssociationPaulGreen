<?php

namespace App\Controller;

use App\Entity\PhotosActionsMasters;
use App\Form\PhotosActionsMastersType;
use App\Repository\PhotosActionsMastersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/photos/actions/masters")
 */
class PhotosActionsMastersController extends AbstractController
{
    /**
     * @Route("/", name="app_photos_actions_masters_index", methods={"GET"})
     */
    public function index(PhotosActionsMastersRepository $photosActionsMastersRepository): Response
    {
        return $this->render('photos_actions_masters/index.html.twig', [
            'photos_actions_masters' => $photosActionsMastersRepository->findByTri2createQueryBuilder(),
        ]);
    }

    /**
     * @Route("/new", name="app_photos_actions_masters_new", methods={"GET", "POST"})
     */
    public function new(Request $request, PhotosActionsMastersRepository $photosActionsMastersRepository): Response
    {
        $photosActionsMaster = new PhotosActionsMasters();
        $form = $this->createForm(PhotosActionsMastersType::class, $photosActionsMaster);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photosActionsMastersRepository->add($photosActionsMaster);
            return $this->redirectToRoute('app_photos_actions_masters_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('photos_actions_masters/new.html.twig', [
            'photos_actions_master' => $photosActionsMaster,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_photos_actions_masters_show", methods={"GET"})
     */
    public function show(PhotosActionsMasters $photosActionsMaster): Response
    {
        return $this->render('photos_actions_masters/show.html.twig', [
            'photos_actions_master' => $photosActionsMaster,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_photos_actions_masters_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, PhotosActionsMasters $photosActionsMaster, PhotosActionsMastersRepository $photosActionsMastersRepository): Response
    {
        $form = $this->createForm(PhotosActionsMastersType::class, $photosActionsMaster);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photosActionsMastersRepository->add($photosActionsMaster);
            return $this->redirectToRoute('app_photos_actions_masters_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('photos_actions_masters/edit.html.twig', [
            'photos_actions_master' => $photosActionsMaster,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_photos_actions_masters_delete", methods={"POST"})
     */
    public function delete(Request $request, PhotosActionsMasters $photosActionsMaster, PhotosActionsMastersRepository $photosActionsMastersRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$photosActionsMaster->getId(), $request->request->get('_token'))) {
            $photosActionsMastersRepository->remove($photosActionsMaster);
        }

        return $this->redirectToRoute('app_photos_actions_masters_index', [], Response::HTTP_SEE_OTHER);
    }
}
