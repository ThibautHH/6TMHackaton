<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\Premise;

class PremisesFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $rennes = new Premise();
        $rennes->city = 'Rennes';

        $angers = new Premise();
        $angers->city = 'Angers';

        $manager->persist($rennes);
        $manager->persist($angers);
        $manager->flush();
    }
}
