<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Continent;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {


      $a1 = new Animal();
      $a2 = new Animal();
      $a3 = new Animal();
      $a4 = new Animal();

      $a1->setName('Medor')
              ->setDescription(" C'est un animal domestique très aimé des humains");
      $manager->persist($a1);
      $a2->setName('Fripouille')
              ->setDescription("un animal majestieux !!!");
      $manager->persist($a2);
      $a3->setName('Jean-Claude')
              ->setDescription("il se pourrait qu'il aime dormir");
      $manager->persist($a3);
      $a4->setName('Zaza')
              ->setDescription("Si vous en prenez soin elle vous donnera du lait !!");
      $manager->persist($a4);

     $c1 = new Continent();
     $c1->setName("Ameriques")
      ->setDescription("Il y a le Nord et le Sud");
      $manager->persist($c1);
     $c1 = new Continent();
     $c1->setName("Europe")
      ->setDescription("C'est un meltingpot de cultures");
      $manager->persist($c1);
     $c1 = new Continent();
     $c1->setName("Afrique")
      ->setDescription("Toi-meme tu sais.... la moula c'est là!!");
      $manager->persist($c1);
     $c1 = new Continent();
     $c1->setName("Oceanie")
      ->setDescription("beaucoup d'espaces...mais c'est un peu compliqué en terme de couleurs");
      $manager->persist($c1);

        $manager->flush();
    }
}
