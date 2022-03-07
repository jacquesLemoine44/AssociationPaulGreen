<?php

namespace App\Controller;

use App\Entity\ActionsAssos;
use App\Repository\NewsRepository;
use App\Repository\ParamsRepository;
use App\Repository\PartnersRepository;
use App\Repository\ActionsAssosRepository;
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

// ====== ACTIONS ASSOS  =====================



// ====== NEWS ASSOS  =====================
    /**
     * @Route("/postersAssos/indexPostersNewsAssos", name="posters_news_assos_index", methods={"GET"})
     */
    public function indexPostersNewsAssos(ParamsRepository $paramsRepository, SocialNetworksRepository $socialNetworksRepository, ActionsAssosRepository $actionsAssosRepository): Response
    {
        return $this->render('postersAssos/indexPostersNewsAssos.html.twig', [
            'params' => $paramsRepository->findAll(),
            'social_networks' => $socialNetworksRepository->findAll(),
            'actions_assos' => $actionsAssosRepository->findAll(),
        ]);
    }

// ====== MASTER  =====================



// ====== FIN  =====================


}




