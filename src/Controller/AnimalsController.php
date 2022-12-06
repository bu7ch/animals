<?php

namespace App\Controller;

use App\Repository\AnimalRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnimalsController extends AbstractController
{
    #[Route('/animals', name: 'app_animals')]
    public function index(EntityManagerInterface $managerentityManager, AnimalRepository $repository): Response
    {
      $animaux = $repository->findAll();
        return $this->render('animals/index.html.twig', [
            'animaux' => $animaux,
        ]);
    }
}
