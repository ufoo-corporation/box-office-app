<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Day;
use App\Repository\DayRepository;

class MatchCategController extends AbstractController
{
    #[Route('/match-categ/{id}', name: 'match_categ')]
    public function index(Day $day): Response
    {

        return $this->render('match_categ/index.html.twig', [
            'loges' => $day->getPlacesLoges(),
            'cat1' => $day->getPlacesCat1(),
            'cat2' => $day->getPlacesCat2(),
            'annexe' => $day->getPlacesAnnexe(),
            'date' => $day->getDate(),
            'id' => $day->getId(),

        ]);
    }
}
