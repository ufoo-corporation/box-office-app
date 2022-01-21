<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListeMatchsSimpleController extends AbstractController
{
    #[Route('/liste-matchs-simple', name: 'liste_matchs_simple')]
    public function index(): Response
    {
        return $this->render('liste_matchs_simple/index.html.twig', [
            'controller_name' => 'ListeMatchsSimpleController',
        ]);
    }
}
