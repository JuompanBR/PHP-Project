<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Player;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $player = new Player;
        $player->setName("Goummo Bill");
        $player->setPassword('123456');
        $player->setPId('0');

        $manager->persist($player);

        $player = new Player;
        $player->setName("Juompan Boris");
        $player->setPassword('654123');
        $player->setPId('1');

        $manager->persist($player);

        $player = new Player;
        $player->setName("Nsifa Privat");
        $player->setPassword('987456');
        $player->setPId('2');

        $manager->persist($player);

        // Load them into the database table
        $manager->flush();
    }
}
