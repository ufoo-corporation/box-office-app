<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConnexionController extends AbstractController
{
    #[Route('/connexion', name: 'connexion')]
    public function connexion(): Response
    {
        return $this->render('connexion/connexion.html.twig', [
            'controller_name' => 'ConnexionController',
        ]);
    }
}
