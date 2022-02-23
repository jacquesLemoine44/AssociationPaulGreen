<?php

namespace App\Controller;

use App\Entity\NewsPhotos;
use App\Form\NewsPhotosType;
use App\Repository\NewsPhotosRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/news/photos")
 */
class NewsPhotosController extends AbstractController
{
    /**
     * @Route("/", name="news_photos_index", methods={"GET"})
     */
    public function index(NewsPhotosRepository $newsPhotosRepository): Response
    {
        return $this->render('news_photos/index.html.twig', [
            'news_photos' => $newsPhotosRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="news_photos_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $newsPhoto = new NewsPhotos();
        $form = $this->createForm(NewsPhotosType::class, $newsPhoto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($newsPhoto);
            $entityManager->flush();

            return $this->redirectToRoute('news_photos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('news_photos/new.html.twig', [
            'news_photo' => $newsPhoto,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="news_photos_show", methods={"GET"})
     */
    public function show(NewsPhotos $newsPhoto): Response
    {
        return $this->render('news_photos/show.html.twig', [
            'news_photo' => $newsPhoto,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="news_photos_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, NewsPhotos $newsPhoto, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(NewsPhotosType::class, $newsPhoto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('news_photos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('news_photos/edit.html.twig', [
            'news_photo' => $newsPhoto,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="news_photos_delete", methods={"POST"})
     */
    public function delete(Request $request, NewsPhotos $newsPhoto, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$newsPhoto->getId(), $request->request->get('_token'))) {
            $entityManager->remove($newsPhoto);
            $entityManager->flush();
        }

        return $this->redirectToRoute('news_photos_index', [], Response::HTTP_SEE_OTHER);
    }
}
