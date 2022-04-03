<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// ==== Partners
use App\Repository\PartnersRepository;
// ==== Params
use App\Repository\SocialNetworksRepository;
use App\Repository\ParamsRepository;
// ==== Internships = Stages
use App\Entity\Internships;
use App\Repository\InternshipsRepository;
// ==== Fieldtrips = Sorties
use App\Entity\Fieldtrips;
use App\Repository\FieldtripsRepository;
// ==== News
use App\Entity\News;
use App\Repository\NewsRepository;
// ==== Assos
use App\Entity\ActionsAssos;
use App\Repository\ActionsAssosRepository;
// ==== Masters
use App\Entity\ActionsMasters;
use App\Repository\ActionsMastersRepository;
// ==== Contacts
use DateTime;
use App\Entity\Contacts;
use App\Form\ContactsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
// ==== Mail
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;


class MainController extends AbstractController
{
    /**
     * @Route("/", name="home") 
     */
    public function index(
        ParamsRepository $paramsRepository, 
        SocialNetworksRepository $socialNetworksRepository, 
        NewsRepository $newsRepository, 
        ActionsAssosRepository $actionsAssosRepository, 
        ActionsMastersRepository $actionsMastersRepository,
        FieldtripsRepository $fieldtripsRepository,
        PartnersRepository $partnersRepository,
        Request $request, 
        EntityManagerInterface $entityManager,
        MailerInterface $mailer
        ): Response
    {

// =============================
// venu du new Contact
// +++ , Request $request, EntityManagerInterface $entityManager): Response

        $contact = new Contacts();
        $form = $this->createForm(ContactsType::class, $contact);
        $date = new DateTime();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // =====
            $contactFormData = $form->getData();
            // dump($contactFormData);
            // die();

            $Email=$contactFormData->getEmailContact();
            $SubjetContact=$contactFormData->getSubjetContact();
            $ContentContact=$contactFormData->getContentContact();

            $message = (new Email())
                ->from($Email)
                ->to('MonMail@gmail.com')
                ->subject($SubjetContact)
                ->text('Sender : '.$Email.\PHP_EOL.$ContentContact,'text/plain');

            $mailer->send($message);

            $this->addFlash('message', 'Votre message a été envoyé avec succès.');
            // =====

            $contact->setDateContact($date);  
            $entityManager->persist($contact);
            $entityManager->flush();

            return $this->redirectToRoute('home', [], Response::HTTP_SEE_OTHER);
        }

        // return $this->render('main/index.html.twig', [
        return $this->renderForm('main/index.html.twig', [
            'form' => $form,
            'contact' => $contact,
            // =====
            'params' => $paramsRepository->findAll(),
            'social_networks' => $socialNetworksRepository->findAll(),
            'theNews' => $newsRepository->LastFiveNews(),
            'theActionsAssos' => $actionsAssosRepository->LastFiveActionsAssos(),
            'theActionsMasters' => $actionsMastersRepository->LastFiveActionsMasters(),
            'theFieldtrips' => $fieldtripsRepository->LastFiveFieldtrips(),
            'thePartners' => $partnersRepository->findAll(),
            'serveur' => $_SERVER,
            'controller_name' => 'MainController',
        ]);
    }

// ====== ADMIN  =====================

    /**
     * @Route("/admin", name="admin")
     */
     public function indexAdmin(ParamsRepository $paramsRepository): Response 
    {
        return $this->render('main/indexAdmin.html.twig', [
            'params' => $paramsRepository->findAll(),            
            'controller_name' => 'MainController',

        ]);
    }

// ====== Récup. INFO PARAMS  =====================

    public function paramRecup(ParamsRepository $paramsRepository): Response
    {
    return $this->render('params/recupParam.html.twig', [
        'params' => $paramsRepository->findAll(),
    ]);
    }

    public function recupParamId(ParamsRepository $paramsRepository): Response
    {
    return $this->render('params/recupParamId.html.twig', [
        'params' => $paramsRepository->findAll(),
    ]);
    }


// ====== ACTIONS ASSOS  =====================

    /**
     * @Route("/postersAssos/indexPostersActionsAssos", name="posters_actions_assos_index", methods={"GET"})
     */
    public function indexPostersActionsAssos(ParamsRepository $paramsRepository, SocialNetworksRepository $socialNetworksRepository, ActionsAssosRepository $actionsAssosRepository): Response
    {
        return $this->render('postersAssos/indexPostersActionsAssos.html.twig', [
            'params' => $paramsRepository->findAll(),
            'social_networks' => $socialNetworksRepository->findAll(),
            'actions_assos' => $actionsAssosRepository->findAll(),
        ]);
    }

    /**
     * @Route("/postersAssos/showPostersActionsAssos/{id}", name="posters_actions_assos_show", methods={"GET"})
     */
    public function showPostersActionsAssos(ActionsAssos $actionsAsso, ParamsRepository $paramsRepository, SocialNetworksRepository $socialNetworksRepository): Response
    {
        return $this->render('postersAssos/showPostersActionsAssos.html.twig', [
            'params' => $paramsRepository->findAll(),
            'social_networks' => $socialNetworksRepository->findAll(),
            'actions_asso' => $actionsAsso,
        ]);
    }

// =============================================


// ====== ACTIONS MASTERS  =====================

    /**
     * @Route("/postersMasters/indexPostersActionsMasters", name="posters_actions_masters_index", methods={"GET"})
     */
    public function indexPostersActionsMasters(ParamsRepository $paramsRepository, 
                        SocialNetworksRepository $socialNetworksRepository, 
                        ActionsMastersRepository $actionsMastersRepository
                        ): Response
    {
        return $this->render('postersMasters/indexPostersActionsMasters.html.twig', [
            'params' => $paramsRepository->findAll(),
            'social_networks' => $socialNetworksRepository->findAll(),
            'actions_masters' => $actionsMastersRepository->findAll(),
        ]);
    }

    /**
     * @Route("/postersMasters/showPostersActionsMasters/{id}", name="posters_actions_masters_show", methods={"GET"})
     */
    public function showPostersActionsMasters(ActionsMasters $actionsMaster, 
                        ParamsRepository $paramsRepository, 
                        SocialNetworksRepository $socialNetworksRepository
                        ): Response
    {
        return $this->render('postersMasters/showPostersActionsMasters.html.twig', [
            'params' => $paramsRepository->findAll(),
            'social_networks' => $socialNetworksRepository->findAll(),
            'actions_master' => $actionsMaster,
        ]);
    }

// =======================================



// ====== NEWS =============================
    /**
     * @Route("/posterNews/indexPostersNews", name="posters_news_index", methods={"GET"})
     */
    public function indexPostersNews(ParamsRepository $paramsRepository, SocialNetworksRepository $socialNetworksRepository, NewsRepository $newsRepository): Response
    {
        return $this->render('postersNews/indexPostersNews.html.twig', [
            'params' => $paramsRepository->findAll(),
            'social_networks' => $socialNetworksRepository->findAll(),
            'news' => $newsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/postersNews/showPostersNews/{id}", name="posters_news_show", methods={"GET"})
     */
    public function showPostersNews(News $news, ParamsRepository $paramsRepository, SocialNetworksRepository $socialNetworksRepository): Response
    {
        return $this->render('postersNews/showPostersNews.html.twig', [
            'params' => $paramsRepository->findAll(),
            'social_networks' => $socialNetworksRepository->findAll(),
            'news' => $news,
        ]);
    }
// ====== FIELD TRIPS =============================
    /**
     * @Route("/posterFieldtrips/indexPostersFieldtrips", name="posters_fieldtrips_index", methods={"GET"})
     */
    public function indexPostersFiledtrips(ParamsRepository $paramsRepository, SocialNetworksRepository $socialNetworksRepository, FieldtripsRepository $fieldtripsRepository): Response
    {
        return $this->render('postersFieldtrips/indexPostersFieldtrips.html.twig', [
            'params' => $paramsRepository->findAll(),
            'social_networks' => $socialNetworksRepository->findAll(),
            'fieldtrips' => $fieldtripsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/postersFiedltrips/showPostersFiedltrips/{id}", name="posters_fieldtrips_show", methods={"GET"})
     */
    public function showPostersFieldtrips(Fieldtrips $fieldtrips, ParamsRepository $paramsRepository, SocialNetworksRepository $socialNetworksRepository): Response
    {
        return $this->render('postersFieldtrips/showPostersFieldtrips.html.twig', [
            'params' => $paramsRepository->findAll(),
            'social_networks' => $socialNetworksRepository->findAll(),
            'fieldtrips' => $fieldtrips,
        ]);
    }

 // ====== INTERNSHIP =============================
    /**
     * @Route("/postersInternships/indexPostersInternships", name="posters_internships_index", methods={"GET"})
     */
    public function indexPostersInterships(ParamsRepository $paramsRepository, SocialNetworksRepository $socialNetworksRepository, InternshipsRepository $internshipsRepository): Response
    {
        return $this->render('postersInternships/internshipsIndex.html.twig', [
            'params' => $paramsRepository->findAll(),
            'social_networks' => $socialNetworksRepository->findAll(),
            'internships' => $internshipsRepository->findAll(),
        ]);
    }

       /**
     * @Route("/postersInterships/showPostersInternships/{id}", name="posters_internships_show", methods={"GET"})
     */
    public function internshipsShow(Internships $internship, ParamsRepository $paramsRepository, SocialNetworksRepository $socialNetworksRepository): Response
    {
        return $this->render('postersInternships/internshipsShow.html.twig', [
            'params' => $paramsRepository->findAll(),
            'social_networks' => $socialNetworksRepository->findAll(),
            'internships' => $internship,
        ]);
    }
   
// ====== MASTER  =====================



// ====== FIN  =====================


}




