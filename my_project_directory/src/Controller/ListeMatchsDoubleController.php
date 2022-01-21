<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListeMatchsDoubleController extends AbstractController
{
    #[Route('/liste-matchs-double', name: 'liste_matchs_double')]
    public function index(): Response
    {
        return $this->render('liste_matchs_double/index.html.twig', [
            'controller_name' => 'ListeMatchsDoubleController',
        ]);
    }
}
