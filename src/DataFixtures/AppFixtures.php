<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Famille;
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


    $c1 = new Continent();
    $c1->setName("Ameriques")
      ->setDescription("Il y a le Nord et le Sud");
    $manager->persist($c1);
    $c2 = new Continent();
    $c2->setName("Europe")
      ->setDescription("C'est un meltingpot de cultures");
    $manager->persist($c2);
    $c3 = new Continent();
    $c3->setName("Afrique")
      ->setDescription("Toi-meme tu sais.... la moula c'est là!!");
    $manager->persist($c3);
    $c4 = new Continent();
    $c4->setName("Oceanie")
      ->setDescription("beaucoup d'espaces...mais c'est un peu compliqué en terme de couleurs");
    $manager->persist($c4);

    $f1 = new Famille();
    $f1->setLibelle('Mammifère')
      ->setDescription("A poil, et pas toujours gentils");
    $manager->persist($f1);
    $f2 = new Famille();
    $f2->setLibelle('Reptile')
      ->setDescription("Joli cuir");
    $manager->persist($f2);
    $f3 = new Famille();
    $f3->setLibelle('Poisson')
      ->setDescription("Ovipare, hum...odeur marine !");
    $manager->persist($f3);
    


    $a1->setName('Medor')
      ->setImage('images/animals/Medor.jpeg')
      ->setDescription(" C'est un animal domestique très aimé des humains")
      ->setDangereux(false)
      ->addContinent($c1)
      ->addContinent($c2)
      ->addContinent($c3)
      ->setFamille($f1);
    $manager->persist($a1);
    $a2->setName('Fripouille')
      ->setImage('images/animals/Fripouille.jpeg')
      ->setDescription("un animal majestieux !!!")
      ->setDangereux(false)
      ->addContinent($c2)
      ->setFamille($f3);
    $manager->persist($a2);
    $a3->setName('Jean-Claude')
      ->setImage('images/animals/Jean-Claude.jpeg')
      ->setDescription("il se pourrait qu'il aime dormir")
      ->setDangereux(true)
      ->addContinent($c1)
      ->addContinent($c2)
      ->addContinent($c3)
      ->setFamille($f2);
    $manager->persist($a3);
    $a4->setName('Zaza')
      ->setImage('images/animals/Zaza.jpeg')
      ->setDescription("Si vous en prenez soin elle vous donnera du lait !!")
      ->setDangereux(true)
      ->addContinent($c4)
      ->setFamille($f2);
    $manager->persist($a4);

   

    $manager->flush();
  }
}
