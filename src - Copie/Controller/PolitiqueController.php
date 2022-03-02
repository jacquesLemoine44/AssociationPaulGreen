<?php

namespace App\Controller;


use App\Repository\ParamsRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\SocialNetworksRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/produits")
 */
class PolitiqueController extends AbstractController
{
    /**
     * @Route("/politique", name="politique_index")
     */
    public function index(ParamsRepository $paramsRepository, SocialNetworksRepository $socialNetworksRepository): Response
    {
 
        return $this->render('politiques/politique.html.twig', [
            'params' => $paramsRepository->findAll(),
            'social_networks' => $socialNetworksRepository->findAll(),
            'controller_name' => 'MainController',
        ]);
    }
}
