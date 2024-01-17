<?php

namespace App\DataFixtures;

use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

use App\Entity\User;

class TestUsersFixture extends Fixture implements FixtureGroupInterface
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        $admin = new User();
        $admin->setUsername('testAdmin');
        $admin->setPassword($this->hasher->hashPassword($admin, 'admin'));
        $admin->setRoles(['ROLE_ADMIN']);

        $user = new User();
        $user->setUsername('testUser');
        $user->setPassword($this->hasher->hashPassword($user, 'user'));

        $manager->persist($admin);
        $manager->persist($user);
        $manager->flush();
    }

    public static function getGroups(): array
    {
        return ['test'];
    }
}
