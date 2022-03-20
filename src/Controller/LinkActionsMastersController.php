<?php

namespace App\Controller;

use App\Entity\LinkActionsMasters;
use App\Form\LinkActionsMastersType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\LinkActionsMastersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/link/actions/masters")
 */
class LinkActionsMastersController extends AbstractController
{
    /**
     * @Route("/", name="app_link_actions_masters_index", methods={"GET"})
     */
    public function index(LinkActionsMastersRepository $linkActionsMastersRepository): Response
    {
        return $this->render('link_actions_masters/index.html.twig', [
            'link_actions_masters' => $linkActionsMastersRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_link_actions_masters_new", methods={"GET", "POST"})
     */
    public function new(Request $request, LinkActionsMastersRepository $linkActionsMastersRepository): Response
    {
        $linkActionsMaster = new LinkActionsMasters();
        $form = $this->createForm(LinkActionsMastersType::class, $linkActionsMaster);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $linkActionsMastersRepository->add($linkActionsMaster);
            return $this->redirectToRoute('app_link_actions_masters_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('link_actions_masters/new.html.twig', [
            'link_actions_master' => $linkActionsMaster,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_link_actions_masters_show", methods={"GET"})
     */
    public function show(LinkActionsMasters $linkActionsMaster): Response
    {
        return $this->render('link_actions_masters/show.html.twig', [
            'link_actions_master' => $linkActionsMaster,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_link_actions_masters_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, LinkActionsMasters $linkActionsMaster, LinkActionsMastersRepository $linkActionsMastersRepository): Response
    {
        $form = $this->createForm(LinkActionsMastersType::class, $linkActionsMaster);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $linkActionsMastersRepository->add($linkActionsMaster);
            return $this->redirectToRoute('app_link_actions_masters_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('link_actions_masters/edit.html.twig', [
            'link_actions_master' => $linkActionsMaster,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_link_actions_masters_delete", methods={"POST"})
     */
    public function delete(Request $request, LinkActionsMasters $linkActionsMaster, LinkActionsMastersRepository $linkActionsMastersRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$linkActionsMaster->getId(), $request->request->get('_token'))) {
            $linkActionsMastersRepository->remove($linkActionsMaster);
        }

        return $this->redirectToRoute('app_link_actions_masters_index', [], Response::HTTP_SEE_OTHER);
    }
}
