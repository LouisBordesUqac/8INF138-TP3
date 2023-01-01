<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: '/admin/utilisateurs', name: 'admin_users_')]

class UsersController extends AbstractController 
{

    #[Route(path: '/', name: 'index')]
    public function index(): Response {
        return $this->render('admin/users/index.html.twig');
    }


    #[Route(path: '/paramètres', name: 'paramètres')]
    public function paramètres(): Response {
        return $this->render('admin/users/paramètres.html.twig');
    }

}