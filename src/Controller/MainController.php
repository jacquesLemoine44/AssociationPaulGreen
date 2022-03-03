<?php

namespace App\Controller;

use App\Repository\NewsRepository;
use App\Repository\ParamsRepository;
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
    public function index(ParamsRepository $paramsRepository, SocialNetworksRepository $socialNetworksRepository, NewsRepository $newsRepository, ActionsAssosRepository $actionsAssosRepository): Response
    {
        return $this->render('main/index.html.twig', [
            'params' => $paramsRepository->findAll(),
            'social_networks' => $socialNetworksRepository->findAll(),
            // 'news' => $newsRepository->findAll(),
            'theNews' => $newsRepository->LastFiveNews(),
            'theActionsAssos' => $actionsAssosRepository->LastFiveActionsAssos(),
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


}




