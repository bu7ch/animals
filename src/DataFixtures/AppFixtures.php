<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {


      $animal1 = new Animal();
      $animal1->setName('Medor')
              ->setDescription(" C'est un animal domestique très aimé des humains");
      $manager->persist($animal1);

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
