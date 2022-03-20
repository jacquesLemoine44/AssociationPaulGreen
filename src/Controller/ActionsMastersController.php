<?php

namespace App\Controller;

use App\Entity\ActionsMasters;
use App\Form\ActionsMastersType;
use App\Repository\ActionsMastersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// =====
use App\Entity\Users;
use App\Entity\PhotosActionsMasters;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;



/**
 * @Route("/actions/masters")
 */
class ActionsMastersController extends AbstractController
{
    /**
     * @Route("/", name="app_actions_masters_index", methods={"GET"})
     */
    public function index(ActionsMastersRepository $actionsMastersRepository): Response
    {
        return $this->render('actions_masters/index.html.twig', [
            'actions_masters' => $actionsMastersRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_actions_masters_new", methods={"GET", "POST"})
     */
    public function new(Request $request, 
                    ActionsMastersRepository $actionsMastersRepository, 
                    EntityManagerInterface $entityManager, 
                    SluggerInterface $slugger): Response
    {
        $actionsMaster = new ActionsMasters();
        $form = $this->createForm(ActionsMastersType::class, $actionsMaster);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $photo = $form->get('pictureactionsmaster')->getData();
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();
                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $photo->move($this->getParameter('photos_directoryMasters'), $newFilename);
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }
                // met à jour la propriété 'photoEleve' pour stocker le nom du fichier PDF au lieu de son contenu
                $actionsMaster->setPictureactionsmaster($newFilename);
            }

            // =================================  
            

            // ========================== Photos Multiples

            // On récupère les images transmises
            $photos = $form->get('PhotosActions')->getData();
        
            // On boucle sur les images
            foreach($photos as $photo){
           
                // On génère un nouveau nom de fichier
                $fichier = md5(uniqid()).'.'.$photo->guessExtension();
                // On copie le fichier dans le dossier uploads
                $photo->move(
                    $this->getParameter('photos_directoryMasters'),
                    $fichier
                );                
                // On crée l'image dans la base de données
                $img = new PhotosActionsMasters();
                $img->setPhotoactionsmaster($fichier);
                $actionsMaster->addPhotosAction($img);
            }
            // $entityManager = $this->getDoctrine()->getManager(); ne marche plus

            // =====================================

            $actionsMastersRepository->add($actionsMaster);

            return $this->redirectToRoute('app_actions_masters_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('actions_masters/new.html.twig', [
            'actions_master' => $actionsMaster,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_actions_masters_show", methods={"GET"})
     */
    public function show(ActionsMasters $actionsMaster): Response
    {
        return $this->render('actions_masters/show.html.twig', [
            'actions_master' => $actionsMaster,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_actions_masters_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, 
                            ActionsMasters $actionsMaster, 
                            ActionsMastersRepository $actionsMastersRepository,
                            EntityManagerInterface $entityManager, 
                            SluggerInterface $slugger,                             
                            Users $users ): Response
    {
        $form = $this->createForm(ActionsMastersType::class, $actionsMaster);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $photo = $form->get('pictureactionsmaster')->getData();
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();
                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $photo->move($this->getParameter('photos_directoryMasters'), $newFilename);
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }
                // met à jour la propriété 'photoEleve' pour stocker le nom du fichier PDF au lieu de son contenu
                $actionsMaster->setPictureactionsmaster($newFilename);
            }

            // =================================  
            

            // ========================== Photos Multiples

            // On récupère les images transmises
            $photos = $form->get('PhotosActions')->getData();
        
            // On boucle sur les images
            foreach($photos as $photo){
           
                // On génère un nouveau nom de fichier
                $fichier = md5(uniqid()).'.'.$photo->guessExtension();
                // On copie le fichier dans le dossier uploads
                $photo->move(
                    $this->getParameter('photos_directoryMasters'),
                    $fichier
                );                
                // On crée l'image dans la base de données
                $img = new PhotosActionsMasters();
                $img->setPhotoactionsmaster($fichier);
                $actionsMaster->addPhotosAction($img);
            }
            // $entityManager = $this->getDoctrine()->getManager(); ne marche plus

            // =====================================

            $actionsMastersRepository->add($actionsMaster);
            return $this->redirectToRoute('app_actions_masters_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('actions_masters/edit.html.twig', [
            'actions_master' => $actionsMaster,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_actions_masters_delete", methods={"POST"})
     */
    public function delete(Request $request, ActionsMasters $actionsMaster, 
            ActionsMastersRepository $actionsMastersRepository
            ): Response
    {
        if ($this->isCsrfTokenValid('delete'.$actionsMaster->getId(), $request->request->get('_token'))) {
            $actionsMastersRepository->remove($actionsMaster);
        }

        return $this->redirectToRoute('app_actions_masters_index', [], Response::HTTP_SEE_OTHER);
    }

/**
 * @Route("/supprime/photoMasters/{id}", name="actions_masters_delete_photo", methods={"DELETE"})
 */
public function deleteImage(Request $request, 
                    PhotosActionsMasters $photo, 
                    EntityManagerInterface $entityManager){

    $data = json_decode($request->getContent(), true);

    // On vérifie si le token est valide
    if($this->isCsrfTokenValid('delete'.$photo->getId(), $data['_token'])){
        // On récupère le nom de l'image
        $nom = $photo->getPhotoactionsmaster();
        // On supprime le fichier
        unlink($this->getParameter('photos_directoryMasters').'/'.$nom);

        // On supprime l'entrée de la base
        // $em = $this->getDoctrine()->getManager();
        // $em->remove($photo);
        // $em->flush();
        $entityManager->remove($photo);
        $entityManager->flush();

        // On répond en json
        return new JsonResponse(['success' => 1]);
    }else{
        return new JsonResponse(['error' => 'Token Invalide'], 400);
    }
}


}
