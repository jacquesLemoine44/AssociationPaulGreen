<?php

namespace App\Controller;


use Doctrine\ORM\EntityManagerInterface;
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
    public function index(): Response
    {
        return $this->render('politiques/politique.html.twig', [
        ]);
    }
}
