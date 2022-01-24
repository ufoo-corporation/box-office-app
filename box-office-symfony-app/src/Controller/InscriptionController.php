<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\Type\UserType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;

class InscriptionController extends AbstractController
{
    #[Route('/inscription', name: 'inscription')]
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $user = $form->getData();
            $user->setMdp(password_hash($user->getMdp(), PASSWORD_BCRYPT));

            $entityManager = $doctrine->getManager();

            // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($user);

            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();
            
        }

        $form = $this->createForm(UserType::class, $user);
        return $this->renderForm('inscription/index.html.twig', [
            'form' => $form,
        ]);
    }


}
