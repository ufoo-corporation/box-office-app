<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\Type\UserType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class DeconnexionController extends AbstractController
{


    #[Route('/deconnexion', name: 'deconnexion')]
    public function index(Request $request): Response
    {       
        $session = $request->getSession();
        $session->clear();
        return $this->render('accueil/accueil.html.twig', [
            
        ]);

        
    }
}
