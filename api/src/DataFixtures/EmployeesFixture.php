<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

use App\Entity\Employee;

class EmployeesFixture extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $rennesAI = $manager->getRepository('App\Entity\Team')->findOneBy(['name' => 'Pôle AI']);
        $rennesWalker = $manager->getRepository('App\Entity\Team')->findOneBy(['name' => 'Pôle Walker']);
        $rennesIT = $manager->getRepository('App\Entity\Team')->findOneBy(['name' => 'Team IT']);
        $rennesRocket = $manager->getRepository('App\Entity\Team')->findOneBy(['name' => 'Team Rocket']);
        $rennesCousteau = $manager->getRepository('App\Entity\Team')->findOneBy(['name' => 'Pôle Cousteau']);
        $rennes86 = $manager->getRepository('App\Entity\Team')->findOneBy(['name' => 'Pôle 8.6']);
        $rennesPosition = $manager->getRepository('App\Entity\Team')->findOneBy(['name' => 'Pôle Position']);
        $rennesBuster = $manager->getRepository('App\Entity\Team')->findOneBy(['name' => 'Bug Buster']);
        $rennesElephant = $manager->getRepository('App\Entity\Team')->findOneBy(['name' => 'Team Elephant']);
        $rennesEden = $manager->getRepository('App\Entity\Team')->findOneBy(['name' => 'Team Eden']);
        $rennesDesign = $manager->getRepository('App\Entity\Team')->findOneBy(['name' => 'Studio Design']);
        $rennesDev = $manager->getRepository('App\Entity\Team')->findOneBy(['name' => 'Team Dev']);
        $rennesPassePartout = $manager->getRepository('App\Entity\Team')->findOneBy(['name' => 'Pôle Passe Partout']);
        $rennesGriffondor = $manager->getRepository('App\Entity\Team')->findOneBy(['name' => 'Pôle Griffondor']);

        $employee = new Employee();
        $employee->name = 'AHMANE';
        $employee->firstName = 'Hafid';
        $employee->position = 'Développeur';
        $employee->team = $rennesAI;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/AHMANE-Hafid.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/AHMANE-Hafid.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'ANDRES';
        $employee->firstName = 'Frédéric';
        $employee->position = 'Responsable d\'équipe';
        $employee->team = $rennesAI;
        $employee->professionalPicture = 	'https://trombi.6tmphp.fr/images/pro/ANDRES-Frederic.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/ANDRES-Frederic.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'AUBRY';
        $employee->firstName = 'Christophe';
        $employee->position = 'Développeur Senior ';
        $employee->team = $rennesWalker;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'AULNETTE';
        $employee->firstName = 'Philippe';
        $employee->position = 'Directeur Technique ';
        $employee->team = $rennesIT;
        $employee->professionalPicture = 	'https://trombi.6tmphp.fr/images/pro/AULNETTE-Philippe.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/AULNETTE-Philippe.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'AVALIANI';
        $employee->firstName = 'Ketevan';
        $employee->position = 'Assistante administrative';
        $employee->team = $rennesRocket;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'BAUDOT';
        $employee->firstName = 'Tom';
        $employee->position = 'Développeur';
        $employee->team = $rennesCousteau;
        $employee->professionalPicture = 	'https://trombi.6tmphp.fr/images/pro/BAUDOT-Tom.jpg';
        $employee->casualPicture =	'https://trombi.6tmphp.fr/images/fun/BAUDOT-Tom.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'BEAUFILS';
        $employee->firstName = 'Maud';
        $employee->position = 'Product Owner';
        $employee->team = $rennes86;
        $employee->professionalPicture = 		'https://trombi.6tmphp.fr/images/pro/BEAUFILS-Maud.jpg';
        $employee->casualPicture =		'https://trombi.6tmphp.fr/images/fun/BEAUFILS-Maud.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'CANTEPIE';
        $employee->firstName = 'Adrien';
        $employee->position = 'Développeur';
        $employee->team = $rennesCousteau;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/CANTEPIE-Adrien.jpg';
        $employee->casualPicture =	'https://trombi.6tmphp.fr/images/fun/CANTEPIE-Adrien.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'CARNEIRO';
        $employee->firstName = 'Mickael';
        $employee->position = 'RSI';
        $employee->team = $rennesIT;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/CARNEIRO-Mickael.jpg';
        $employee->casualPicture =	'https://trombi.6tmphp.fr/images/fun/CARNEIRO-Mickael.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'CASTEX';
        $employee->firstName = 'David';
        $employee->position = 'Développeur';
        $employee->team = $rennesPosition;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/CASTEX-David.jpg';
        $employee->casualPicture =		'https://trombi.6tmphp.fr/images/fun/CASTEX-David.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'CHAPUIS';
        $employee->firstName = 'Brice';
        $employee->position = 'Développeur';
        $employee->team = $rennesBuster;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'CHEVALIER';
        $employee->firstName = 'Elodie';
        $employee->position = 'Product Owner';
        $employee->team = $rennesPosition;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/CHEVALIER-Elodie.jpg';
        $employee->casualPicture =	'https://trombi.6tmphp.fr/images/fun/CHEVALIER-Elodie.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'CHEVALIER';
        $employee->firstName = 'Benoît';
        $employee->position = 'Développeur';
        $employee->team = $rennesElephant;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'COET';
        $employee->firstName = 'Jean';
        $employee->position = 'Développeur';
        $employee->team = $rennesCousteau;
        $employee->professionalPicture ='https://trombi.6tmphp.fr/images/pro/COET-Jean.jpg';
        $employee->casualPicture ='https://trombi.6tmphp.fr/images/fun/COET-Jean.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'COUTAND';
        $employee->firstName = 'Bastien';
        $employee->position = 'Alternant';
        $employee->team = $rennesIT;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'CRUTEL';
        $employee->firstName = 'Pauline';
        $employee->position = 'Chargée de recrutement';
        $employee->team = $rennesRocket;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/CRUTEL-Pauline.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/CRUTEL-Pauline.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'DANTAN';
        $employee->firstName = 'Remy';
        $employee->position = 'Développeur';
        $employee->team = $rennesEden;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/DANTAN-Remy.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/DANTAN-Remy.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'DE MONCUIT';
        $employee->firstName = 'Gaëtan';
        $employee->position = 'Responsable Marketing ';
        $employee->team = $rennesRocket;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/DE-MONCUIT-Gaetan.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/DE-MONCUIT-Gaetan.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'DELANOE';
        $employee->firstName = 'Julien';
        $employee->position = 'Développeur';
        $employee->team = $rennesBuster;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'DELENTE';
        $employee->firstName = 'Edouard';
        $employee->position = 'Responsable Développement';
        $employee->team = $rennesRocket;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/DELENTE-Edouard.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/DELENTE-Edouard.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'DESGRANGES';
        $employee->firstName = 'Pierre';
        $employee->position = 'Développeur Junior';
        $employee->team = $rennesPosition;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'DIGUET';
        $employee->firstName = 'Lucas';
        $employee->position = 'Développeur';
        $employee->team = $rennes86;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/DIGUET-Lucas.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/DIGUET-Lucas.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'FAILLIE';
        $employee->firstName = 'Michel';
        $employee->position = 'Directeur de l\'agence d\'Angers ';
        $employee->team = $rennesRocket;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/FAILLIE-Michel.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/FAILLIE-Michel.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'GANTOIS';
        $employee->firstName = 'Emilien';
        $employee->position = 'Développeur';
        $employee->team = $rennesCousteau;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/GANTOIS-Emilien.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/GANTOIS-Emilien.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'GAUCHER';
        $employee->firstName = 'Clara';
        $employee->position = 'Chef de Projet';
        $employee->team = $rennesWalker;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'GELEBART';
        $employee->firstName = 'Nicolas';
        $employee->position = 'Business Manager';
        $employee->team = $rennesRocket;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'GINGUENEAU';
        $employee->firstName = 'Pauline';
        $employee->position = 'Assistante Commerciale';
        $employee->team = $rennesRocket;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'GOSSELIN';
        $employee->firstName = 'Antoine';
        $employee->position = 'Développeur Junior';
        $employee->team = $rennesWalker;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'GREFFIER';
        $employee->firstName = 'Jean-Christophe';
        $employee->position = 'Administrateur Système & Réseau';
        $employee->team = $rennesIT;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/GREFFIER-Jean-Christophe.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/GREFFIER-Jean-Christophe.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'GUERIN';
        $employee->firstName = 'Nicolas';
        $employee->position = 'Développeur';
        $employee->team = $rennesWalker;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/GUERIN-Nicolas.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/GUERIN-Nicolas.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'GUILBERT';
        $employee->firstName = 'Antoine';
        $employee->position = 'Chef de Projet';
        $employee->team = $rennesBuster;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/GUILBERT-Antoine.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/GUILBERT-Antoine.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'JEZEQUEL';
        $employee->firstName = 'Vincent';
        $employee->position = 'Responsable Technique';
        $employee->team = $rennesPosition;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/JEZEQUEL-Vincent.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/JEZEQUEL-Vincent.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'JUBLAN';
        $employee->firstName = 'Sandrine';
        $employee->position = 'Assistante administrative';
        $employee->team = $rennesRocket;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/JUBLAN-Sandrine.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/JUBLAN-Sandrine.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'LE COQ';
        $employee->firstName = 'Alexandra';
        $employee->position = 'Comptable';
        $employee->team = $rennesRocket;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/LE-COQ-Alexandra.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/LE-COQ-Alexandra.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'LE GOFF';
        $employee->firstName = 'Sébastien';
        $employee->position = 'Développeur Senior ';
        $employee->team = $rennesBuster;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'LECOLAZET';
        $employee->firstName = 'Aymeric';
        $employee->position = 'Alternant';
        $employee->team = $rennesElephant;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/LECOLAZET-Aymeric.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/LECOLAZET-Aymeric.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'LEGRAND';
        $employee->firstName = 'Thomas';
        $employee->position = 'Responsable d\'Equipe';
        $employee->team = $rennesPosition;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'LEMARIE';
        $employee->firstName = 'Benjamin';
        $employee->position = 'Design Manager';
        $employee->team = $rennesDesign;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/LEMARIE-Benjamin.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/LEMARIE-Benjamin.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'LERAY';
        $employee->firstName = 'Romain';
        $employee->position = 'Développeur';
        $employee->team = $rennesBuster;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/LERAY-Romain.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/LERAY-Romain.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'LESAGE';
        $employee->firstName = 'Olivier';
        $employee->position = 'Développeur Senior ';
        $employee->team = $rennesAI;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/LEVASSEUR-Damien.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/LEVASSEUR-Damien.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'LEVASSEUR';
        $employee->firstName = 'Damien';
        $employee->position = 'Développeur';
        $employee->team = $rennesEden;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'LIDURIN';
        $employee->firstName = 'Maël';
        $employee->position = 'Développeur / Chef de Projet';
        $employee->team = $rennesAI;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/LIDURIN-Mael.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/LIDURIN-Mael.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'LOICHON';
        $employee->firstName = 'Yvan';
        $employee->position = 'Intégrateur';
        $employee->team = $rennesDesign;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/LOICHON-Yvan.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/LOICHON-Yvan.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'LOUSTAU';
        $employee->firstName = 'Quentin';
        $employee->position = 'Développeur';
        $employee->team = $rennesEden;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/LOUSTAU-Quentin.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/LOUSTAU-Quentin.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'LOUVEAU';
        $employee->firstName = 'Bertille';
        $employee->position = 'Chargée de communication ';
        $employee->team = $rennesRocket;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'MADEC';
        $employee->firstName = 'Florian';
        $employee->position = 'Développeur Junior';
        $employee->team = $rennesCousteau;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/MADEC-Florian.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/MADEC-Florian.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'MESLET';
        $employee->firstName = 'Faustine';
        $employee->position = 'Talent Acquisition Specialist';
        $employee->team = $rennesRocket;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/MESLET-Faustine.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/MESLET-Faustine.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'MUSET';
        $employee->firstName = 'Clément';
        $employee->position = 'Développeur';
        $employee->team = $rennesCousteau;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/MUSET-Clement.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/MUSET-Clement.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'OBEE';
        $employee->firstName = 'Boris';
        $employee->position = 'Technicien Support';
        $employee->team = $rennesAI;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/OBEE-Boris.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/OBEE-Boris.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'OZEAU';
        $employee->firstName = 'Morgan';
        $employee->position = 'Développeur Senior';
        $employee->team = $rennes86;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/OZEAU-Morgan.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/OZEAU-Morgan.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'PERCHEREL';
        $employee->firstName = 'Ludovic';
        $employee->position = 'Responsable d\'équipe';
        $employee->team = $rennesBuster;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/PERCHEREL-Ludovic.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/PERCHEREL-Ludovic.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'PERLINSKI';
        $employee->firstName = 'Alix';
        $employee->position = 'Cheffe de projet';
        $employee->team = $rennesElephant;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'POISSON';
        $employee->firstName = 'Florian';
        $employee->position = 'Développeur Junior';
        $employee->team = $rennesPosition;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/POISSON-Florian.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/POISSON-Florian.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'PRUD\'HOMME';
        $employee->firstName = 'Emilie';
        $employee->position = 'Cheffe de projet';
        $employee->team = $rennesCousteau;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'QUENTEL';
        $employee->firstName = 'Thomas';
        $employee->position = 'Développeur';
        $employee->team = $rennesPosition;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/QUENTEL-Thomas.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/QUENTEL-Thomas.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'RAMAUGE';
        $employee->firstName = 'Benjamin';
        $employee->position = 'Développeur';
        $employee->team = $rennesWalker;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/RAMAUGE-Benjamin.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/RAMAUGE-Benjamin.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'RENARD';
        $employee->firstName = 'Valentin';
        $employee->position = 'Développeur';
        $employee->team = $rennesPosition;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/RENARD-Valentin.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/RENARD-Valentin.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'ROUSSEAU';
        $employee->firstName = 'Yoann';
        $employee->position = 'Développeur Junior';
        $employee->team = $rennesBuster;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/ROUSSEAU-Yoann.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/ROUSSEAU-Yoann.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'SAUVE';
        $employee->firstName = 'Christophe';
        $employee->position = 'Chef de projet';
        $employee->team = $rennesCousteau;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/SAUVE-Christophe.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/SAUVE-Christophe.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'SAUVE';
        $employee->firstName = 'Karine';
        $employee->position = 'Directrice Administrative et Financière';
        $employee->team = $rennesRocket;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/SAUVE-Karine.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/SAUVE-Karine.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'SIMON';
        $employee->firstName = 'Thomas';
        $employee->position = 'Responsable d\'équipe';
        $employee->team = $rennesWalker;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/SIMON-Thomas.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/SIMON-Thomas.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'TARLET';
        $employee->firstName = 'Emeline';
        $employee->position = 'Alternant';
        $employee->team = $rennesRocket;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'THOMAS';
        $employee->firstName = 'Pierre-Yves';
        $employee->position = 'Développeur';
        $employee->team = $rennesBuster;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/THOMAS-Pierre-Yves.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/THOMAS-Pierre-Yves.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'TOQUE';
        $employee->firstName = 'Julien';
        $employee->position = 'Business Developer ';
        $employee->team = $rennesRocket;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'TREMIER';
        $employee->firstName = 'Stéphane';
        $employee->position = 'Président';
        $employee->team = $rennesRocket;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/TREMIER-Stephane.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/TREMIER-Stephane.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'VANNIER';
        $employee->firstName = 'Samuel';
        $employee->position = 'Développeur Junior';
        $employee->team = $rennesAI;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/VANNIER-Samuel.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/VANNIER-Samuel.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'VEILLAUX';
        $employee->firstName = 'Pierre';
        $employee->position = 'Business Developer Junior ';
        $employee->team = $rennesRocket;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/VEILLAUX-Pierre.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/VEILLAUX-Pierre.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'VERON';
        $employee->firstName = 'Maël';
        $employee->position = 	'Développeur Junior';
        $employee->team = $rennes86;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/VERON-Mael.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/VERON-Mael.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'AUPIAIS';
        $employee->firstName = 'David';
        $employee->position = 	'Ingénieur Fullstack';
        $employee->team = $rennesPassePartout;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'BIORET';
        $employee->firstName = 'Nicolas';
        $employee->position = 	'Développeur';
        $employee->team = $rennesPassePartout;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'BONTEMPS';
        $employee->firstName = 'Quentin';
        $employee->position = 	'Analyste développeur';
        $employee->team = $rennesPassePartout;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/BONTEMPS-Quentin.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/BONTEMPS-Quentin.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'CHENARD';
        $employee->firstName = 'Renaud';
        $employee->position = 	'Développeur';
        $employee->team = $rennesGriffondor;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/CHENARD-Renaud.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/CHENARD-Renaud.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'DELCROS';
        $employee->firstName = 'Cédric';
        $employee->position = 	'Chef de projet / Responsable d\'équipe';
        $employee->team = $rennesPassePartout;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/DELCROS-Cedric.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/DELCROS-Cedric.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'DELEVALLEZ';
        $employee->firstName = 'Zacharie';
        $employee->position = 	'Développeur Junior';
        $employee->team = $rennesPassePartout;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'DURAND';
        $employee->firstName = 'Guillaume';
        $employee->position = 	'Développeur';
        $employee->team = $rennesGriffondor;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/DURAND-Guillaume.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/DURAND-Guillaume.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'GIRARD';
        $employee->firstName = 'Amaury';
        $employee->position = 	'Développeur';
        $employee->team = $rennesPassePartout;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/GIRARD-Amaury.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/GIRARD-Amaury.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'GARRETA';
        $employee->firstName = 'Antoine';
        $employee->position = 	'Développeur Junior ';
        $employee->team = $rennesPassePartout;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/GARRETA-Antoine.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/GARRETA-Antoine.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'GUERBAA';
        $employee->firstName = 'Ines';
        $employee->position = 	'Développeur';
        $employee->team = $rennesGriffondor;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/GUERBAA-Ines.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/GUERBAA-Ines.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'HAMON';
        $employee->firstName = 'Kévin';
        $employee->position = 	'Développeur';
        $employee->team = $rennesPassePartout;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'JLAIEL';
        $employee->firstName = 'Islem';
        $employee->position = 	'Alternant';
        $employee->team = $rennesPassePartout;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'KOBAA';
        $employee->firstName = 'Marwen';
        $employee->position = 	'Développeur';
        $employee->team = $rennesGriffondor;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'KULESIAK';
        $employee->firstName = 'Laura';
        $employee->position = 	'Chef de projet';
        $employee->team = $rennesPassePartout;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/KULESIAK-Laura.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/KULESIAK-Laura.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'LEBEL';
        $employee->firstName = 'Jérémy';
        $employee->position = 	'Lead Developpeur ';
        $employee->team = $rennesGriffondor;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/LEBEL-Jeremy.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/LEBEL-Jeremy.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'LEMAITRE';
        $employee->firstName = 'Mathieu';
        $employee->position = 	'Chef de projet';
        $employee->team = $rennesGriffondor;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/LEMAITRE-Mathieu.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/LEMAITRE-Mathieu.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'MAISONNEUVE';
        $employee->firstName = 'Emmanuel';
        $employee->position = 	'Directeur artistique';
        $employee->team = $rennesDesign;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/MAISONNEUVE-Emmanuel.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/MAISONNEUVE-Emmanuel.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'MOREAU';
        $employee->firstName = 'Maxime';
        $employee->position = 	'Développeur';
        $employee->team = $rennesPassePartout;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/MOREAU-Maxime.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/MOREAU-Maxime.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'OBLE';
        $employee->firstName = 'Maxime';
        $employee->position = 	'Développeur Junior ';
        $employee->team = $rennesGriffondor;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/OBLE-Maxime.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/OBLE-Maxime.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'PEAN';
        $employee->firstName = 'Emilien';
        $employee->position = 	'Responsable d\'équipe';
        $employee->team = $rennesGriffondor;
        $employee->professionalPicture = 'https://trombi.6tmphp.fr/images/pro/PEAN-Emilien.jpg';
        $employee->casualPicture = 'https://trombi.6tmphp.fr/images/fun/PEAN-Emilien.jpg';

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'BENSI';
        $employee->firstName = 'Louis';
        $employee->position = 	'Développeur Front';
        $employee->team = $rennesDesign;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'DOLLO';
        $employee->firstName = 'Vincent';
        $employee->position = 	'Développeur Mobile';
        $employee->team = $rennesDev;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'LANSONNEUR';
        $employee->firstName = 'Thomas';
        $employee->position = 	'UX/UI Designer';
        $employee->team = $rennesDesign;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'LE GOFF';
        $employee->firstName = 'Jean-Marie';
        $employee->position = 	'Coordinateur de projets';
        $employee->team = $rennesDev;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'LE MEE';
        $employee->firstName = 'Antonin';
        $employee->position = 	'Développeur';
        $employee->team = $rennesDev;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'SACHET';
        $employee->firstName = 'Mathieu';
        $employee->position = 	'Lead Developpeur';
        $employee->team = $rennesDev;

        $manager->persist($employee);

        $employee = new Employee();
        $employee->name = 'TAILLAND';
        $employee->firstName = 'Gaelle';
        $employee->position = 	'Cheffe de projet';
        $employee->team = $rennesDev;

        $manager->persist($employee);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [TeamsFixture::class];
    }
}