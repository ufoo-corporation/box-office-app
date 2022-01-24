<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\Type\UserType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;

class ConnexionController extends AbstractController
{

    #[Route('/connexion', name: 'connexion')]
    public function index(Request $request, UserRepository $userRepository): Response
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            
            $user = $form->getData();

            $dbuser = $userRepository->findOneBy(['mail' => $user->getMail()]);
            
            if(password_verify($user->getMdp(), $dbuser->getMdp())){
                $session = $request->getSession();
                $session->set('user', $dbuser->getPrenom());
                $session->set('id', $dbuser->getId());
                $prenom = $session->get('user');
                return $this->redirectToRoute('accueil');
            }
            else{
                
            }
        }
        
        $form = $this->createForm(UserType::class, $user);
        return $this->renderForm('connexion/connexion.html.twig', [
            'form' => $form,
        ]);
    }
}
