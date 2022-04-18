<?php

namespace App\Controller;

use App\Entity\Equipments;
use App\Form\EquipmentsType;
use App\Repository\EquipmentsRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/equipments")
 * @isGranted("ROLE_ADMIN")
 */
class EquipmentsController extends AbstractController
{
    /**
     * @Route("/", name="app_equipments_index", methods={"GET"})
     */
    public function index(EquipmentsRepository $equipmentsRepository): Response
    {
        return $this->render('equipments/index.html.twig', [
            'equipments' => $equipmentsRepository->findByTri2createQueryBuilder(),
        ]);
    }

    /**
     * @Route("/new", name="app_equipments_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EquipmentsRepository $equipmentsRepository): Response
    {
        $equipment = new Equipments();
        $form = $this->createForm(EquipmentsType::class, $equipment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $equipmentsRepository->add($equipment);
            return $this->redirectToRoute('app_equipments_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('equipments/new.html.twig', [
            'equipment' => $equipment,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_equipments_show", methods={"GET"})
     */
    public function show(Equipments $equipment): Response
    {
        return $this->render('equipments/show.html.twig', [
            'equipment' => $equipment,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_equipments_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Equipments $equipment, EquipmentsRepository $equipmentsRepository): Response
    {
        $form = $this->createForm(EquipmentsType::class, $equipment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $equipmentsRepository->add($equipment);
            return $this->redirectToRoute('app_equipments_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('equipments/edit.html.twig', [
            'equipment' => $equipment,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_equipments_delete", methods={"POST"})
     */
    public function delete(Request $request, Equipments $equipment, EquipmentsRepository $equipmentsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$equipment->getId(), $request->request->get('_token'))) {
            $equipmentsRepository->remove($equipment);
        }

        return $this->redirectToRoute('app_equipments_index', [], Response::HTTP_SEE_OTHER);
    }
}
