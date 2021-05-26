<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default_homepage")
     */
    public function index(): Response
    {
        return $this->render('default/homepage.html.twig', [
        
        ]);
    }

    /**
     * @Route("/default", name="default")
     */
    public function default(ProduitRepository $produitRepository): Response
    {
        return $this->render('default/index.html.twig', [
            'produits' => $produitRepository->findAll(),
        ]);
    }
}
