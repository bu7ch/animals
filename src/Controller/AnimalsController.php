<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnimalsController extends AbstractController
{
    #[Route('/animals', name: 'app_animals')]
    public function index(): Response
    {
        return $this->render('animals/index.html.twig', [
            'controller_name' => 'AnimalsController',
        ]);
    }
}
