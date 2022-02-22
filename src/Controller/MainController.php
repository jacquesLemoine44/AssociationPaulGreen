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
    public function indexAdmin(): Response 
    // public function indexAdmin(ParamsRepository $paramsRepository): Response 
    {
        return $this->render('main/indexAdmin.html.twig', [
            'controller_name' => 'MainController',
            // 'params' => $paramsRepository->findAll(),
        ]);
    }


    public function paramRecup(ParamsRepository $paramsRepository): Response
    {
    return $this->render('params/recupParam.html.twig', [
        'params' => $paramsRepository->findAll(),
    ]);
    }




}




