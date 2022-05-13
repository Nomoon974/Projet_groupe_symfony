<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
       
        // for($i=0; $i<5;$i++){
        //     $User = new User();
        // $User->setEmail('t@t.fr');
        // $User->setRoles(['sign up']);
        // $User->setPassword('coucou');
        // $manager->persist($User);
        // $manager->flush();
         // }
    }
}
