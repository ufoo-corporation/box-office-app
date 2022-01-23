<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Day;
use App\Entity\Ticket;
use App\Repository\DayRepository;

class ChoixOptionsController extends AbstractController
{
    #[Route('/choix-options/{id}/{type}', name: 'choix_options')]
    public function choix_options(Day $day, int $type): Response
    {
        if(isset($_POST['type']) or isset($_POST['nbplaceAdult']) or isset($_POST['nbplaceChild'])){
            echo nl2br("\n\n\n\n".$_POST['type'].$_POST['nbplaceAdult'].$_POST['nbplaceChild']);
        }

        $date = $day->getId();
        
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

        

        return $this->render('choix_options/choix_options.html.twig', [
            'date' => $day->getDate(),
            'type' => $type,
            'place' => $place,
            'jour' => $date,

        ]);
    }
}
