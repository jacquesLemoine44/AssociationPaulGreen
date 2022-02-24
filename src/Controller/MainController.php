<?php

namespace App\Controller;

use App\Repository\ParamsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
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




