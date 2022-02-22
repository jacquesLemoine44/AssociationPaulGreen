<?php

namespace App\Controller;

use App\Entity\Params;
use App\Form\ParamsType;
use App\Repository\ParamsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/params")
 */
class ParamsController extends AbstractController
{
    /**
     * @Route("/", name="params_index", methods={"GET"})
     */
    public function index(ParamsRepository $paramsRepository): Response
    {
        return $this->render('params/index.html.twig', [
            'params' => $paramsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="params_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $param = new Params();
        $form = $this->createForm(ParamsType::class, $param);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($param);
            $entityManager->flush();

            return $this->redirectToRoute('params_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('params/new.html.twig', [
            'param' => $param,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="params_show", methods={"GET"})
     */
    public function show(Params $param): Response
    {
        return $this->render('params/show.html.twig', [
            'param' => $param,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="params_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Params $param, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ParamsType::class, $param);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('params_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('params/edit.html.twig', [
            'param' => $param,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="params_delete", methods={"POST"})
     */
    public function delete(Request $request, Params $param, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$param->getId(), $request->request->get('_token'))) {
            $entityManager->remove($param);
            $entityManager->flush();
        }

        return $this->redirectToRoute('params_index', [], Response::HTTP_SEE_OTHER);
    }
}
