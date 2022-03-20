<?php

namespace App\Controller;

use App\Entity\ActionsMasters;
use App\Entity\DocActionsMasters;
use App\Form\DocActionsMastersType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\DocActionsMastersRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/doc/actions/masters")
 */
class DocActionsMastersController extends AbstractController
{
    /**
     * @Route("/", name="app_doc_actions_masters_index", methods={"GET"})
     */
    public function index(DocActionsMastersRepository $docActionsMastersRepository): Response
    {
        return $this->render('doc_actions_masters/index.html.twig', [
            'doc_actions_masters' => $docActionsMastersRepository->findByTri2createQueryBuilder(),
        ]);
    }

     /**
     * @Route("/{idAct}/edit2", name="docactionsmastersindex2", methods={"GET", "POST"})
     */
    public function index2(DocActionsMastersRepository $docActionsMastersRepository): Response
    {
        return $this->render('doc_actions_masters/index.html.twig', [
            // 'doc_actions_masters' => $docActionsMastersRepository->findOneBySomeField(idAct),
            //  'doc_actions_masters' => $docActionsMastersRepository->findOneBySomeField(idAct),

        ]);
    }

    /**
     * @Route("/new", name="app_doc_actions_masters_new", methods={"GET", "POST"})
     */
    public function new(Request $request, DocActionsMastersRepository $docActionsMastersRepository): Response
    {
        $docActionsMaster = new DocActionsMasters();
        $form = $this->createForm(DocActionsMastersType::class, $docActionsMaster);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $docActionsMastersRepository->add($docActionsMaster);
            return $this->redirectToRoute('app_doc_actions_masters_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('doc_actions_masters/new.html.twig', [
            'doc_actions_master' => $docActionsMaster,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/add/{id}", name="add_doc_actions_masters", methods={"GET", "POST"})
     */
    public function addDoc(Request $request, ActionsMasters $actionsMasters, EntityManagerInterface $entityManager): Response
    {
        $docActionsMaster = new DocActionsMasters();
        $form = $this->createForm(DocActionsMastersType::class, $docActionsMaster);
        $form->handleRequest($request);
        // var_dump($actionsMasters->getId());

        // die;
        if ($form->isSubmitted() && $form->isValid()) {
            $docActionsMaster->setDocActions($actionsMasters);
            $entityManager->persist($docActionsMaster);
            $entityManager->flush();

            return $this->redirectToRoute('actions_masters_edit', array('id' => $actionsMasters->getId()));
        }

        return $this->renderForm('doc_actions_masters/new.html.twig', [
            'actionsMasters' => $actionsMasters,
            'doc_actions_master' => $docActionsMaster,
            'form' => $form,
        ]);
    } 

    /**
     * @Route("/{id}", name="app_doc_actions_masters_show", methods={"GET"})
     */
    public function show(DocActionsMasters $docActionsMaster): Response
    {
        return $this->render('doc_actions_masters/show.html.twig', [
            'doc_actions_master' => $docActionsMaster,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_doc_actions_masters_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, DocActionsMasters $docActionsMaster, DocActionsMastersRepository $docActionsMastersRepository): Response
    {
        $form = $this->createForm(DocActionsMastersType::class, $docActionsMaster);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $docActionsMastersRepository->add($docActionsMaster);
            return $this->redirectToRoute('app_doc_actions_masters_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('doc_actions_masters/edit.html.twig', [
            'doc_actions_master' => $docActionsMaster,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_doc_actions_masters_delete", methods={"POST"})
     */
    public function delete(Request $request, DocActionsMasters $docActionsMaster, DocActionsMastersRepository $docActionsMastersRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$docActionsMaster->getId(), $request->request->get('_token'))) {
            $docActionsMastersRepository->remove($docActionsMaster);
        }

        return $this->redirectToRoute('app_doc_actions_masters_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/mod/{id}", name="mod_doc_actions_masters", methods={"GET", "POST"})
     */
    // public function modDoc(Request $request, ActionsMasters $actionsMasters, DocActionsMasters $docActionsMaster, EntityManagerInterface $entityManager): Response
    public function modDoc(Request $request, DocActionsMasters $docActionsMaster, EntityManagerInterface $entityManager): Response
    {
        // $docActionsMaster = new DocActionsMasters();

        $form = $this->createForm(DocActionsMastersType::class, $docActionsMaster);
        $form->handleRequest($request);
        // var_dump($actionsMasters->getId());

        // die;
        if ($form->isSubmitted() && $form->isValid()) {
            // $docActionsMaster->setDocactmaster($actionsMasters);
            $entityManager->persist($docActionsMaster);
            $entityManager->flush();

            return $this->redirectToRoute('actions_masters_edit', array('id' => $docActionsMaster->getDocActions()->getId()));
        }

        return $this->renderForm('doc_actions_masters/edit.html.twig', [
            // 'actionsMasters' => $actionsMasters,
            'doc_actions_master' => $docActionsMaster,
            'form' => $form,
        ]);
    }    


    /**
     * @Route("/del/{id}", name="del_doc_actions_masters", methods={"POST"})
     */
    public function deleteDoc(Request $request, DocActionsMasters $docActionsMaster, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$docActionsMaster->getId(), $request->request->get('_token'))) {
            $entityManager->remove($docActionsMaster);
            $entityManager->flush();
        }
// dump($docActionsMaster);
// die();
        return $this->redirectToRoute('actions_masters_edit', array('id' => $docActionsMaster->getDocActions()->getId()), Response::HTTP_SEE_OTHER);

    }




}
