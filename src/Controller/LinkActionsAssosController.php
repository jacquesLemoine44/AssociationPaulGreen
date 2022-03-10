<?php

namespace App\Controller;

use App\Entity\LinkActionsAssos;
use App\Form\LinkActionsAssosType;
use App\Repository\LinkActionsAssosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/link/actions/assos")
 */
class LinkActionsAssosController extends AbstractController
{
    /**
     * @Route("/", name="app_link_actions_assos_index", methods={"GET"})
     */
    public function index(LinkActionsAssosRepository $linkActionsAssosRepository): Response
    {
        return $this->render('link_actions_assos/index.html.twig', [
            'link_actions_assos' => $linkActionsAssosRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_link_actions_assos_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $linkActionsAsso = new LinkActionsAssos();
        $form = $this->createForm(LinkActionsAssosType::class, $linkActionsAsso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($linkActionsAsso);
            $entityManager->flush();

            return $this->redirectToRoute('app_link_actions_assos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('link_actions_assos/new.html.twig', [
            'link_actions_asso' => $linkActionsAsso,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_link_actions_assos_show", methods={"GET"})
     */
    public function show(LinkActionsAssos $linkActionsAsso): Response
    {
        return $this->render('link_actions_assos/show.html.twig', [
            'link_actions_asso' => $linkActionsAsso,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_link_actions_assos_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, LinkActionsAssos $linkActionsAsso, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LinkActionsAssosType::class, $linkActionsAsso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_link_actions_assos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('link_actions_assos/edit.html.twig', [
            'link_actions_asso' => $linkActionsAsso,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_link_actions_assos_delete", methods={"POST"})
     */
    public function delete(Request $request, LinkActionsAssos $linkActionsAsso, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$linkActionsAsso->getId(), $request->request->get('_token'))) {
            $entityManager->remove($linkActionsAsso);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_link_actions_assos_index', [], Response::HTTP_SEE_OTHER);
    }
}
