<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MatchCategController extends AbstractController
{
    #[Route('/match-categ', name: 'match_categ')]
    public function index(): Response
    {
        return $this->render('match_categ/index.html.twig', [
            'controller_name' => 'MatchCategController',
        ]);
    }
}
