<?php

namespace App\Controller;

use App\Entity\Internships;
use App\Form\InternshipsType;
use App\Repository\InternshipsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/internships")
 */
class InternshipsController extends AbstractController
{
    /**
     * @Route("/", name="app_internships_index", methods={"GET"})
     */
    public function index(InternshipsRepository $internshipsRepository): Response
    {
        return $this->render('internships/index.html.twig', [
            'internships' => $internshipsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_internships_new", methods={"GET", "POST"})
     */
    public function new(Request $request, InternshipsRepository $internshipsRepository): Response
    {
        $internship = new Internships();
        $form = $this->createForm(InternshipsType::class, $internship);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $internshipsRepository->add($internship);
            return $this->redirectToRoute('app_internships_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('internships/new.html.twig', [
            'internship' => $internship,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_internships_show", methods={"GET"})
     */
    public function show(Internships $internship): Response
    {
        return $this->render('internships/show.html.twig', [
            'internship' => $internship,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_internships_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Internships $internship, InternshipsRepository $internshipsRepository): Response
    {
        $form = $this->createForm(InternshipsType::class, $internship);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $internshipsRepository->add($internship);
            return $this->redirectToRoute('app_internships_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('internships/edit.html.twig', [
            'internship' => $internship,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_internships_delete", methods={"POST"})
     */
    public function delete(Request $request, Internships $internship, InternshipsRepository $internshipsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$internship->getId(), $request->request->get('_token'))) {
            $internshipsRepository->remove($internship);
        }

        return $this->redirectToRoute('app_internships_index', [], Response::HTTP_SEE_OTHER);
    }
}
