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
