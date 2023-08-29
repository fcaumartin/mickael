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
        $c->setNom("toto");
        $c->setPrenom("toto");
        $c->setVille("toto");
        $manager->persist($c);

        $manager->flush();
    }
}
