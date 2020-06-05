<?php
namespace App\DataFixtures;

use App\Entity\Ravioles;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class RaviolesFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $raviole = new Ravioles();
        $raviole->setTitre('Raviole aux comté');
        $raviole->setDescription('Le mélange de raviole avec du fromage jurassien, un délice !!');
        $raviole->setPrix(12);
        $raviole->setQuantiteDispo(100);

        $manager->persist($raviole);
        $manager->flush();

        $raviole = new Ravioles();
        $raviole->setTitre('Raviole aux morilles');
        $raviole->setDescription('Des ravioles couteuses mais délicieuses !!');
        $raviole->setPrix(20);
        $raviole->setQuantiteDispo(50);

        $manager->persist($raviole);
        $manager->flush();

        $raviole = new Ravioles();
        $raviole->setTitre('Raviole nature');
        $raviole->setDescription('Ravioles de base mais qui reste toujours aussi bon !');
        $raviole->setPrix(5);
        $raviole->setQuantiteDispo(200);

        $manager->persist($raviole);
        $manager->flush();
    }
}

