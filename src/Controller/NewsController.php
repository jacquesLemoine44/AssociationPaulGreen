<?php

namespace App\Controller;

use App\Entity\News;
use App\Entity\Photos;
use App\Form\NewsType;
use App\Entity\NewsPhotos;
use App\Repository\NewsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

/**
 * @Route("/news")
 */
class NewsController extends AbstractController
{
    /**
     * @Route("/", name="news_index", methods={"GET"})
     */
    public function index(NewsRepository $newsRepository): Response
    {
        return $this->render('news/index.html.twig', [
            'news' => $newsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="news_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $news = new News();
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // ================================= Photo

            $photo = $form->get('pictureNew')->getData();
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();
                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $photo->move($this->getParameter('photos_directoryNews'), $newFilename);
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }
                // met à jour la propriété 'photoEleve' pour stocker le nom du fichier PDF au lieu de son contenu
                $news->setPictureNew($newFilename);
            }

            // =================================             

// ===== Photos
            // On récupère les images transmises
            $photos = $form->get('newsPhotosNews')->getData();
            // On boucle sur les images
            foreach($photos as $photo){
                // On génère un nouveau nom de fichier
                $fichier = md5(uniqid()).'.'.$photo->guessExtension();
                // On copie le fichier dans le dossier uploads
                $photo->move(
                    $this->getParameter('photos_directoryNews'),
                    $fichier
                );                
                // On crée l'image dans la base de données
                $img = new NewsPhotos();
                // $img = new Photos();
                $img->setPhotoNewPhoto($fichier);
                $news->addNewsPhotosNews($img);
            }
            // $entityManager = $this->getDoctrine()->getManager(); ne marche plus
// ===

            $entityManager->persist($news);
            $entityManager->flush();

            return $this->redirectToRoute('news_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('news/new.html.twig', [
            'news' => $news,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="news_show", methods={"GET"})
     */
    public function show(News $news): Response
    {
        return $this->render('news/show.html.twig', [
            'news' => $news,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="news_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, News $news, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // ================================= Photo

            $photo = $form->get('pictureNew')->getData();
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();
                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $photo->move($this->getParameter('photos_directoryNews'), $newFilename);
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }
                // met à jour la propriété 'photoEleve' pour stocker le nom du fichier PDF au lieu de son contenu
                $news->setPictureNew($newFilename);
            }

            // =================================   



// ===== Photos
            // On récupère les images transmises
            $photos = $form->get('newsPhotosNews')->getData();
            // On boucle sur les images
            foreach($photos as $photo){
                // On génère un nouveau nom de fichier
                $fichier = md5(uniqid()).'.'.$photo->guessExtension();
                // On copie le fichier dans le dossier uploads
                $photo->move(
                    $this->getParameter('photos_directoryNews'),
                    $fichier
                );                
                // On crée l'image dans la base de données
                $img = new NewsPhotos();
                // $img = new Photos();
                $img->setPhotoNewPhoto($fichier);
                $news->addNewsPhotosNews($img);
            }
            // $entityManager = $this->getDoctrine()->getManager(); ne marche plus
// ===

            $entityManager->flush();

            return $this->redirectToRoute('news_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('news/edit.html.twig', [
            'news' => $news,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="news_delete", methods={"POST"})
     */
    public function delete(Request $request, News $news, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$news->getId(), $request->request->get('_token'))) {
            $entityManager->remove($news);
            $entityManager->flush();
        }

        return $this->redirectToRoute('news_index', [], Response::HTTP_SEE_OTHER);
    }
}
