<?php

namespace App\DataFixtures;

use App\Entity\Commentary;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CommentaryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        // for($i=0; $i<5;$i++){
        //     $Commentary = new Commentary();
        // $Commentary->setMessage('First commentary');
        // $manager->persist($Commentary);
        // $manager->flush();
        // }
    }
}
