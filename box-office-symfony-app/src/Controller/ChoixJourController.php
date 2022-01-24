<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChoixJourController extends AbstractController
{
    #[Route('/choix-jour', name: 'choix_jour')]
    public function index(): Response
    {
        return $this->render('choix_jour/index.html.twig', [
            'controller_name' => 'ChoixJourController',
        ]);
    }
}
