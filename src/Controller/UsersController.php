<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\UsersType;
use App\Repository\UsersRepository;
use App\Repository\ParamsRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\SocialNetworksRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @Route("/users")
 */
class UsersController extends AbstractController
{
    /**
     * @Route("/", name="users_index", methods={"GET"})
     */
    public function index(UsersRepository $usersRepository): Response
    {
        return $this->render('users/index.html.twig', [
            'users' => $usersRepository->findByTriUsers(),
        ]);
    }

    /**
     * @Route("/new", name="users_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $user = new Users();
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            // ================================= Photo

            $photo = $form->get('photoLicencie')->getData();
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();
                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $photo->move($this->getParameter('photos_directoryAdherents'), $newFilename);
                } catch (FileException $e) {
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }
                // met à jour la propriété 'photoEleve' pour stocker le nom du fichier PDF au lieu de son contenu
                $user->setPhotoUser($newFilename);
            }

            // =================================

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('users_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('users/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="users_show", methods={"GET"})
     */
    public function show(Users $user): Response
    {
        return $this->render('users/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="users_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Users $user, EntityManagerInterface $entityManager, SluggerInterface $slugger, ParamsRepository $paramsRepository, SocialNetworksRepository $socialNetworksRepository): Response

    {
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // ================================= Photo

            $photo = $form->get('photoUser')->getData();
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // ceci est nécessaire pour inclure en toute sécurité le nom de fichier dans l'URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();
                // Déplacez le fichier dans le répertoire où les brochures sont stockées
                try {
                    $photo->move($this->getParameter('photos_directoryAdherents'), $newFilename);
                } catch (FileException $e) {    
                    // ... gérer l'exception si quelque chose se produit pendant le téléchargement du fichier
                }
                // met à jour la propriété 'photoEleve' pour stocker le nom du fichier PDF au lieu de son contenu
                $user->setPhotoUser($newFilename);
            }

            // =================================  

            $entityManager->flush();

            return $this->redirectToRoute('users_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('users/edit.html.twig', [
            'user' => $user,
            'form' => $form,
            'params' => $paramsRepository->findAll(),
            'social_networks' => $socialNetworksRepository->findAll(),            
        ]);
    }

    /**
     * @Route("/{id}", name="users_delete", methods={"POST"})
     */
    public function delete(Request $request, Users $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('users_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/users/pass/modifier", name="users_pass_modifier")
     */
    public function editPass(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasher, ParamsRepository $paramsRepository, SocialNetworksRepository $socialNetworksRepository): Response
    
    {
        // UserPasswordEncoderInterface

        if($request->isMethod('POST')){

            $user = $this->getUser();

            $plainPassword=$request->get('passOld');
            $checkPass=$userPasswordHasher->isPasswordValid($user, $plainPassword);

            if($checkPass===true){

                // vérifier les 2 mdp identiques
                if($request->request->get('pass') == $request->request->get('pass2')){
        
                    // $encodedPassword = $userPasswordHasher->hashPassword(
                    //     $user,
                    //     $request->request->get('pass')
                    // );
                    // $user->setPassword($encodedPassword);
            
                    $user->setPassword(
                        $userPasswordHasher->hashPassword(
                        $user,
                        $request->request->get('pass'))
                    );
                
                    // dump($encodedPassword);
                    // die;
                    $entityManager->flush();
                
                    $this->addFlash('message','mot de passe mis à jour. reconnecter vous');
                    return $this->redirectToRoute('home');
                
                }else{
                    $this->addFlash('error','Les 2 mots de passes sont différents !!!!!');
                }

            }else{
                $this->addFlash('error','Ancien mot de passe non valide');
            }
        }

        return $this->render('users/editpass.html.twig', [
            'params' => $paramsRepository->findAll(),
            'social_networks' => $socialNetworksRepository->findAll(),
        ]);
    }

}
