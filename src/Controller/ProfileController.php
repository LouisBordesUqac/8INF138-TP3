<?php

namespace App\Controller;

use App\Controller\ResetPasswordType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/profil', name: 'profile_')]
class ProfileController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(UserRepository $userRepository): Response
    {
       
        #$form = $this->createForm(ResetPasswordType::class , null, [
        #    'action' => $this->generateUrl('profile_password_edit'),
        #    'attr'   => [
        #        'class' => 'mt-3'
        #    ] 
        #]);

        #$user = $userRepository->findAll();
        return $this->render('profile/index.html.twig', [
            'controller_name' => 'Profil de l\'utilisateur',
            'user' => $userRepository->findAll(),
            #'modifyPasswordForm' => $form->createView(),
        ]);
    }

    #[Route('/clients', name: 'clients')]
    public function orders(): Response
    {
        return $this->render('profile/index.html.twig', [
            'controller_name' => 'Liste des clients',
        ]);
    }



    #[Route('/modifierMotDePasse', name: 'password')]
    public function modifPassword(): Response
    {
        
        return $this->render('profile/password.html.twig', [
            'controller_name' => 'Modifier mot de passe',
        ]);
    }
}