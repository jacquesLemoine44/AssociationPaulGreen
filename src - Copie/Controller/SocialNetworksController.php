<?php

namespace App\Controller;

use App\Entity\SocialNetworks;
use App\Form\SocialNetworksType;
use App\Repository\SocialNetworksRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/social/networks")
 */
class SocialNetworksController extends AbstractController
{
    /**
     * @Route("/", name="social_networks_index", methods={"GET"})
     */
    public function index(SocialNetworksRepository $socialNetworksRepository): Response
    {
        return $this->render('social_networks/index.html.twig', [
            'social_networks' => $socialNetworksRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="social_networks_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $socialNetwork = new SocialNetworks();
        $form = $this->createForm(SocialNetworksType::class, $socialNetwork);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($socialNetwork);
            $entityManager->flush();

            return $this->redirectToRoute('social_networks_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('social_networks/new.html.twig', [
            'social_network' => $socialNetwork,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="social_networks_show", methods={"GET"})
     */
    public function show(SocialNetworks $socialNetwork): Response
    {
        return $this->render('social_networks/show.html.twig', [
            'social_network' => $socialNetwork,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="social_networks_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, SocialNetworks $socialNetwork, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SocialNetworksType::class, $socialNetwork);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('social_networks_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('social_networks/edit.html.twig', [
            'social_network' => $socialNetwork,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="social_networks_delete", methods={"POST"})
     */
    public function delete(Request $request, SocialNetworks $socialNetwork, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$socialNetwork->getId(), $request->request->get('_token'))) {
            $entityManager->remove($socialNetwork);
            $entityManager->flush();
        }

        return $this->redirectToRoute('social_networks_index', [], Response::HTTP_SEE_OTHER);
    }
}
