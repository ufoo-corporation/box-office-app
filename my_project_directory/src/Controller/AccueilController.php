<?php
// src/Controller/AccueilController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'accueil')]

    public function accueil(): Response
    {

        $connexion = false;

        return $this->render('accueil/accueil.html.twig', [
            'number' => $number,
        ]);
    }
}