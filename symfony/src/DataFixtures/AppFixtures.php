<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $c = new Client();
        $c->setNom("toto1");
        $c->setPrenom("toto1");
        $c->setVille("toto1");
        $manager->persist($c);

        $c2 = new Client();
        $c2->setNom("toto2");
        $c2->setPrenom("toto2");
        $c2->setVille("toto2");
        $manager->persist($c2);

        $manager->flush();
    }
}
