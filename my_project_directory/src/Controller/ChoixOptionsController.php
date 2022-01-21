<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChoixOptionsController extends AbstractController
{
    /**
   * @Route("/choix_options")
   */
    public function choix_options(): Response
    {
        return $this->render('choix_options/choix_options.html.twig', [
            'controller_name' => 'ChoixOptionsController',
        ]);
    }
}
