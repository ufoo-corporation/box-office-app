<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Day;
use App\Entity\Ticket;
use App\Repository\DayRepository;

class ConfirmationAchatController extends AbstractController
{
    #[Route('/confirmation-achat/{id}/{type}', name: 'confirmation_achat')]
    public function index(Day $day, $type): Response
    {
        $date = $day->getDate();
        

        if($_POST['type'] == 'GP'){
            if($type == 1){

            }
        }
        if($_POST['type'] == 'L'){

        }
        if($_POST['type'] == 'JDS'){

        }
        //$prix = $_POST['nbPlaceAdult']*
        $ticket = new Ticket();
        $ticket->setPrixTotal(1);

        return $this->render('confirmation_achat/index.html.twig', [
            'date' => $date,
            'place' => $type,
        ]);
    }
}
