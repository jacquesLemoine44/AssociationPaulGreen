<?php

namespace App\Controller;

use App\Entity\News;
use App\Entity\Internships;
use App\Entity\ActionsAssos;
use App\Entity\Fieldtrips;
use App\Repository\NewsRepository;
use App\Repository\ParamsRepository;
use App\Repository\PartnersRepository;
use App\Repository\InternshipsRepository;
use App\Repository\ActionsAssosRepository;
use App\Repository\FieldtripsRepository;
use App\Repository\SocialNetworksRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ParamsRepository $paramsRepository, SocialNetworksRepository $socialNetworksRepository, NewsRepository $newsRepository, ActionsAssosRepository $actionsAssosRepository, PartnersRepository $partnersRepository): Response
    {
        return $this->render('main/index.html.twig', [
            'params' => $paramsRepository->findAll(),
            'social_networks' => $socialNetworksRepository->findAll(),
            'theNews' => $newsRepository->LastFiveNews(),
            'theActionsAssos' => $actionsAssosRepository->LastFiveActionsAssos(),
            'thePartners' => $partnersRepository->findAll(),
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
        return $this->render('postersNews/showPostersNews.html.twig', [
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




