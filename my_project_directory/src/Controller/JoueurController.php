<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Player;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\PlayerRepository;

class JoueurController extends AbstractController
{
    #[Route('/joueur', name: 'creer_joueur')]
    public function creerJoueur(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $joueur = new Player();
        $joueur->setFirstName('FIQUEMO');
        $joueur->setName('Guillaume');
        $joueur->setNationality('Français');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($joueur);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new joueur with id '.$joueur->getId());
    }



    #[Route('/joueur/{id}', name: 'montrer_joueur')]
        public function show(Player $joueur): Response
        {
            return new Response('Check out this great player: '.$joueur->getName());
        }

        #[Route('/joueur/tous', name: 'montrer_tous_joueur')]
        public function getAll(int $id, PlayerRepository $joueurRepository): Response
        {
            $joueurs = $joueurRepository
                ->findAll();
            return $joueurs;
    
        }
  

    #[Route('/joueur/edit/{id}', name: 'maj_joueur')]
    public function update(Player $joueur): Response
    {

        $joueur->setName('Guimleh');
        $entityManager->flush();

        return $this->redirectToRoute('montrer_joueur', [
            'id' => $joueur->getId()
        ]);
    }
}