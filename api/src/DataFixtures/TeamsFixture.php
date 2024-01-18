<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\Team;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class TeamsFixture extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $rennes = $manager->getRepository('App\Entity\Premise')->findOneBy(['city' => 'Rennes']);
        $angers = $manager->getRepository('App\Entity\Premise')->findOneBy(['city' => 'Angers']);

        $rennesAI = new Team();
        $rennesAI->name = 'Pôle AI';
        $rennesAI->premise = $rennes;
        $manager->persist($rennesAI);

        $rennesWalker = new Team();
        $rennesWalker->name = 'Pôle Walker';
        $rennesWalker->premise = $rennes;
        $manager->persist($rennesWalker);

        $rennesIT = new Team();
        $rennesIT->name = 'Team IT';
        $rennesIT->premise = $rennes;
        $manager->persist($rennesIT);

        $rennesRocket = new Team();
        $rennesRocket->name = 'Team Rocket';
        $rennesRocket->premise = $rennes;
        $manager->persist($rennesRocket);

        $rennesCousteau = new Team();
        $rennesCousteau->name = 'Pôle Cousteau';
        $rennesCousteau->premise = $rennes;
        $manager->persist($rennesCousteau);

        $rennes86 = new Team();
        $rennes86->name = 'Pôle 8.6';
        $rennes86->premise = $rennes;
        $manager->persist($rennes86);

        $rennesPosition = new Team();
        $rennesPosition->name = 'Pôle Position';
        $rennesPosition->premise = $rennes;
        $manager->persist($rennesPosition);

        $rennesBugBuster = new Team();
        $rennesBugBuster->name = 'Bug Buster';
        $rennesBugBuster->premise = $rennes;
        $manager->persist($rennesBugBuster);

        $rennesElephant = new Team();
        $rennesElephant->name = 'Team Elephant';
        $rennesElephant->premise = $rennes;
        $manager->persist($rennesElephant);

        $rennesEden = new Team();
        $rennesEden->name = 'Team Eden';
        $rennesEden->premise = $rennes;
        $manager->persist($rennesEden);

        $rennesStudioDesign = new Team();
        $rennesStudioDesign->name = 'Studio Design';
        $rennesStudioDesign->premise = $rennes;
        $manager->persist($rennesStudioDesign);

        $rennesDev = new Team();
        $rennesDev->name = 'Team Dev';
        $rennesDev->premise = $rennes;
        $manager->persist($rennesDev);


        $angersPassePartout = new Team();
        $angersPassePartout->name = 'Pôle Passe Partout';
        $angersPassePartout->premise = $angers;
        $manager->persist($angersPassePartout);

        $angersGriffondor = new Team();
        $angersGriffondor->name = 'Pôle Griffondor';
        $angersGriffondor->premise = $angers;
        $manager->persist($angersGriffondor);


        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [PremisesFixture::class];
    }
}
