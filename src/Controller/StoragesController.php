<?php

namespace App\Controller;

use App\Entity\Storages;
use App\Form\StoragesType;
use App\Repository\StoragesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/storages")
 */
class StoragesController extends AbstractController
{
    /**
     * @Route("/", name="app_storages_index", methods={"GET"})
     */
    public function index(StoragesRepository $storagesRepository): Response
    {
        return $this->render('storages/index.html.twig', [
            'storages' => $storagesRepository->findByTri2createQueryBuilder(),
        ]);
    }

    /**
     * @Route("/new", name="app_storages_new", methods={"GET", "POST"})
     */
    public function new(Request $request, StoragesRepository $storagesRepository): Response
    {
        $storage = new Storages();
        $form = $this->createForm(StoragesType::class, $storage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $storagesRepository->add($storage);
            return $this->redirectToRoute('app_storages_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('storages/new.html.twig', [
            'storage' => $storage,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_storages_show", methods={"GET"})
     */
    public function show(Storages $storage): Response
    {
        return $this->render('storages/show.html.twig', [
            'storage' => $storage,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_storages_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Storages $storage, StoragesRepository $storagesRepository): Response
    {
        $form = $this->createForm(StoragesType::class, $storage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $storagesRepository->add($storage);
            return $this->redirectToRoute('app_storages_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('storages/edit.html.twig', [
            'storage' => $storage,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_storages_delete", methods={"POST"})
     */
    public function delete(Request $request, Storages $storage, StoragesRepository $storagesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$storage->getId(), $request->request->get('_token'))) {
            $storagesRepository->remove($storage);
        }

        return $this->redirectToRoute('app_storages_index', [], Response::HTTP_SEE_OTHER);
    }
}
