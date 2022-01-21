<?php
// src/Controller/AccueilController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
   /**
   * @Route("/accueil")
   */

    public function accueil(): Response
    {
        ///php

        return $this->render('accueil/accueil.html.twig', [
            ///'number' => $number,
        ]);
    }

    /**
   * @Route("/accueil/test")
   */

    public function test(): Response
    {

        return $this->render('accueil/test.html.twig', [
            
        ]);
    }
}