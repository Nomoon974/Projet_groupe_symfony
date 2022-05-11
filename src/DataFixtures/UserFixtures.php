<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use DateTime;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('steve.kaci01@gmail.com');
        $user->setPassword("123456");
        $user->setPseudo("Stevy01");
        $user->setNom("KACI");
        $user->setPrenom("STEVE");
        $user->setDateNaiss(new DateTime("now"));
        $user->setAvatar("https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png");
        $manager->persist($user);

        $manager->flush();
    }
}
