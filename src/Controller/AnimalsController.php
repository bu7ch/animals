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
    public function index( AnimalRepository $repository): Response
    {
      $animaux = $repository->findAll();
        return $this->render('animals/index.html.twig', [
            'animaux' => $animaux,
        ]);
    }
    #[Route('/animal/{id}', name: 'animal-show')]
    public function show(AnimalRepository $repository, $id): Response
    {
      $animal = $repository->find($id);
        return $this->render('animals/show.html.twig', [
            'animal' => $animal,
        ]);
    }
    
}
