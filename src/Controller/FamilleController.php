<?php

namespace App\Controller;

use App\Entity\Famille;
use App\Repository\FamilleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FamilleController extends AbstractController
{
    #[Route('/famille', name: 'app_famille')]
    public function index(FamilleRepository $repository): Response
    {
      $familles = $repository->findAll();
        return $this->render('famille/index.html.twig', [
            'familles' => $familles,
        ]);
    }
    #[Route('/famille/{id}', name: 'show_famille')]
    public function show(Famille $famille): Response
    {
        return $this->render('famille/show.html.twig', [
            'famille' => $famille,
        ]);
    }
}
