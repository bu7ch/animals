<?php

namespace App\Controller;

use App\Repository\ContinentRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContinentController extends AbstractController
{
    #[Route('/continent', name: 'app_continent')]
    public function index(ContinentRepository $repository): Response
    {
      $continents = $repository->findAll();
        return $this->render('continent/index.html.twig', [
            'continents' => $continents,
        ]);
    }
}
