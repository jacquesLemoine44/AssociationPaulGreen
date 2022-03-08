<?php

namespace App\Controller;

use App\Entity\DocActionsAssos;
use App\Form\DocActionsAssosType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\DocActionsAssosRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/doc/actions/assos")
 */
class DocActionsAssosController extends AbstractController
{
    /**
     * @Route("/", name="app_doc_actions_assos_index", methods={"GET"})
     */
    public function index(DocActionsAssosRepository $docActionsAssosRepository): Response
    {
        return $this->render('doc_actions_assos/index.html.twig', [
            'doc_actions_assos' => $docActionsAssosRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_doc_actions_assos_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $docActionsAsso = new DocActionsAssos();
        $form = $this->createForm(DocActionsAssosType::class, $docActionsAsso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($docActionsAsso);
            $entityManager->flush();

            return $this->redirectToRoute('app_doc_actions_assos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('doc_actions_assos/new.html.twig', [
            'doc_actions_asso' => $docActionsAsso,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_doc_actions_assos_show", methods={"GET"})
     */
    public function show(DocActionsAssos $docActionsAsso): Response
    {
        return $this->render('doc_actions_assos/show.html.twig', [
            'doc_actions_asso' => $docActionsAsso,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_doc_actions_assos_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, DocActionsAssos $docActionsAsso, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DocActionsAssosType::class, $docActionsAsso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_doc_actions_assos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('doc_actions_assos/edit.html.twig', [
            'doc_actions_asso' => $docActionsAsso,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_doc_actions_assos_delete", methods={"POST"})
     */
    public function delete(Request $request, DocActionsAssos $docActionsAsso, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$docActionsAsso->getId(), $request->request->get('_token'))) {
            $entityManager->remove($docActionsAsso);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_doc_actions_assos_index', [], Response::HTTP_SEE_OTHER);
    }
}
