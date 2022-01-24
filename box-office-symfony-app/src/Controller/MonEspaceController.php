<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Ticket;
use App\Repository\TicketRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Day;
use App\Repository\DayRepository;


class MonEspaceController extends AbstractController
{
    #[Route('/mon-espace', name: 'mon_espace')]
    public function mon_espace(TicketRepository $ticketRepository, DayRepository $dayRepository, Request $request): Response
    {
        $categories=[];
        $session = $request->getSession();
        $tickets = $ticketRepository->findBy(
            ['user' => $session->get('id')],
            ['day' => 'ASC']
        );
        $days = [];
        foreach ($tickets as $ticket){
            $days[$ticket->getId()] = $dayRepository->find(
                $ticket->getDay()
            );
        }
        foreach ($tickets as $ticket){
            $categories[$ticket->getId()] = $ticket->getType();
        }

        return $this->render('mon_espace/mon_espace.html.twig', [
            'tickets' => $tickets,
            'days' => $days,
            'categories' => $categories,
        ]);
    }
}
