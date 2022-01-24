<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Day;
use App\Entity\Ticket;
use App\Repository\DayRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

class ConfirmationAchatController extends AbstractController
{
    #[Route('/confirmation-achat/{id}/{type}', name: 'confirmation_achat')]
    public function index(Day $day, $type, ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();

        $date = $day->getDate();
        $index = $day->getId();

        if(isset($_POST['nbPlaceChild']) == false){
            $_POST['nbPlaceChild'] = 0;
        }

        switch($type){
            case 1:
                $place = 'Loges';
                break;
            case 2:
                $place = 'Catégorie 1';
                break;
            case 3:
                $place = 'Catégorie 2';
                break;
            case 4:
                $place = 'Annexe';
                break;
        
        }

        switch($_POST['type']){
            case 'GP':
                $tarif = 'Grand Public';
                break;
            case 'L':
                $tarif = 'Licence';
                break;
            case 'JDS':
                $tarif = 'Solidarité';
                break;
        
        }

        if($type == 1){
            $prix = $_POST['nbPlaceAdult'] * $this->getParameter('app.loges')[$index];
        }

        if($type == 2){
            $prix = $_POST['nbPlaceAdult'] * $this->getParameter('app.cat1')[$index];
        }

        if($type == 3){
            $prix = $_POST['nbPlaceAdult']*$this->getParameter('app.cat2')[$index] + $_POST['nbPlaceChild']*$this->getParameter('app.enfant')[$index];
            
        }
        
        if($type == 4){

            $prix = $_POST['nbPlaceAdult'] * $this->getParameter('app.annexe');
        }

        if($_POST['type'] == 'L'){
            $prix = $prix*$this->getParameter('app.licence');
        }
        if($_POST['type'] == 'JDS'){
            $prix = $prix*$this->getParameter('app.solidarite');
        }
        
        $session = $request->getSession();

        $ticket = new Ticket();
        $ticket->setPrixTotal($prix);
        $ticket->setType($type);
        $ticket->setNbPlacesAdulte($_POST['nbPlaceAdult']);
        $ticket->setNbPlacesEnfant($_POST['nbPlaceChild']);
        $ticket->setDay($index);
        $ticket->setUser($session->get('id'));

        $entityManager->persist($ticket);

        $entityManager->flush();

        return $this->render('confirmation_achat/index.html.twig', [
            'date' => $date,
            'type' => $type,
            'place' => $place,
            'adulte' => $_POST['nbPlaceAdult'],
            'child' => $_POST['nbPlaceChild'],
            'prix' => $prix,
            'tarif' => $tarif,
        ]);
    }
}
