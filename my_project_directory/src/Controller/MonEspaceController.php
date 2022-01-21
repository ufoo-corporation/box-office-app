<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MonEspaceController extends AbstractController
{
    /**
   * @Route("/mon_espace")
   */
    public function mon_espace(): Response
    {
        return $this->render('mon_espace/mon_espace.html.twig', [
            'controller_name' => 'MonEspaceController',
        ]);
    }
}
