<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('default/index.html.twig', [
            'produits' => $produitRepository->findAll(),
        ]);
    }
}
