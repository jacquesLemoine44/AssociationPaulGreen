<?php

namespace App\Controller;

use App\Entity\ActionsAssos;
use App\Form\ActionsAssosType;
use App\Repository\ActionsAssosRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $actionsAsso = new ActionsAssos();
        $form = $this->createForm(ActionsAssosType::class, $actionsAsso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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
    public function edit(Request $request, ActionsAssos $actionsAsso, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ActionsAssosType::class, $actionsAsso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('actions_assos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('actions_assos/edit.html.twig', [
            'actions_asso' => $actionsAsso,
            'form' => $form,
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
}
