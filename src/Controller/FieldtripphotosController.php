<?php

namespace App\Controller;

use App\Entity\Fieldtripphotos;
use App\Form\FieldtripphotosType;
use App\Repository\FieldtripphotosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/fieldtripphotos")
 */
class FieldtripphotosController extends AbstractController
{
    /**
     * @Route("/", name="app_fieldtripphotos_index", methods={"GET"})
     */
    public function index(FieldtripphotosRepository $fieldtripphotosRepository): Response
    {
        return $this->render('fieldtripphotos/index.html.twig', [
            'fieldtripphotos' => $fieldtripphotosRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_fieldtripphotos_new", methods={"GET", "POST"})
     */
    public function new(Request $request, FieldtripphotosRepository $fieldtripphotosRepository): Response
    {
        $fieldtripphoto = new Fieldtripphotos();
        $form = $this->createForm(FieldtripphotosType::class, $fieldtripphoto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fieldtripphotosRepository->add($fieldtripphoto);
            return $this->redirectToRoute('app_fieldtripphotos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('fieldtripphotos/new.html.twig', [
            'fieldtripphoto' => $fieldtripphoto,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_fieldtripphotos_show", methods={"GET"})
     */
    public function show(Fieldtripphotos $fieldtripphoto): Response
    {
        return $this->render('fieldtripphotos/show.html.twig', [
            'fieldtripphoto' => $fieldtripphoto,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_fieldtripphotos_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Fieldtripphotos $fieldtripphoto, FieldtripphotosRepository $fieldtripphotosRepository): Response
    {
        $form = $this->createForm(FieldtripphotosType::class, $fieldtripphoto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fieldtripphotosRepository->add($fieldtripphoto);
            return $this->redirectToRoute('app_fieldtripphotos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('fieldtripphotos/edit.html.twig', [
            'fieldtripphoto' => $fieldtripphoto,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_fieldtripphotos_delete", methods={"POST"})
     */
    public function delete(Request $request, Fieldtripphotos $fieldtripphoto, FieldtripphotosRepository $fieldtripphotosRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fieldtripphoto->getId(), $request->request->get('_token'))) {
            $fieldtripphotosRepository->remove($fieldtripphoto);
        }

        return $this->redirectToRoute('app_fieldtripphotos_index', [], Response::HTTP_SEE_OTHER);
    }
}
