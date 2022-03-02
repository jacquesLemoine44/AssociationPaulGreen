<?php

namespace App\Controller;

use App\Entity\GroupingPartners;
use App\Form\GroupingPartnersType;
use App\Repository\GroupingPartnersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/grouping/partners")
 */
class GroupingPartnersController extends AbstractController
{
    /**
     * @Route("/", name="grouping_partners_index", methods={"GET"})
     */
    public function index(GroupingPartnersRepository $groupingPartnersRepository): Response
    {
        return $this->render('grouping_partners/index.html.twig', [
            'grouping_partners' => $groupingPartnersRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="grouping_partners_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $groupingPartner = new GroupingPartners();
        $form = $this->createForm(GroupingPartnersType::class, $groupingPartner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($groupingPartner);
            $entityManager->flush();

            return $this->redirectToRoute('grouping_partners_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('grouping_partners/new.html.twig', [
            'grouping_partner' => $groupingPartner,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="grouping_partners_show", methods={"GET"})
     */
    public function show(GroupingPartners $groupingPartner): Response
    {
        return $this->render('grouping_partners/show.html.twig', [
            'grouping_partner' => $groupingPartner,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="grouping_partners_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, GroupingPartners $groupingPartner, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(GroupingPartnersType::class, $groupingPartner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('grouping_partners_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('grouping_partners/edit.html.twig', [
            'grouping_partner' => $groupingPartner,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="grouping_partners_delete", methods={"POST"})
     */
    public function delete(Request $request, GroupingPartners $groupingPartner, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$groupingPartner->getId(), $request->request->get('_token'))) {
            $entityManager->remove($groupingPartner);
            $entityManager->flush();
        }

        return $this->redirectToRoute('grouping_partners_index', [], Response::HTTP_SEE_OTHER);
    }
}
