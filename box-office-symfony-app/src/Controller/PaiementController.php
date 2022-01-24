<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Ticket;
use App\Entity\Day;
use App\Repository\DayRepository;


class PaiementController extends AbstractController
{
    #[Route('/paiement', name: 'paiement')]
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        $session = $request->getSession();
        $ticket = $session->get('ticket');
        $entityManager = $doctrine->getManager();
        $entityManager->persist($ticket);
        $day = $entityManager->getRepository(Day::class)->find($ticket->getDay());
        if($ticket->getType() == 1){
            $day->setPlacesLoges($day->getPlacesLoges() - $ticket->getNbPlacesAdulte());
        }
        if($ticket->getType() == 2){
            $day->setPlacesCat1($day->getPlacesCat1() - $ticket->getNbPlacesAdulte());
        }
        if($ticket->getType() == 3){
            $day->setPlacesCat2($day->getPlacesCat2() - $ticket->getNbPlacesAdulte() - $ticket->getNbPlacesEnfant());
        }
        if($ticket->getType() == 4){
            $day->setPlacesAnnexe($day->getPlacesAnnexe() - $ticket->getNbPlacesAdulte());
        }
        $entityManager->flush();
        

        return $this->render('paiement/index.html.twig', [
            
        ]);
    }
}
