<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Image;

class ImageFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $image = new Image();
        $image->setTitle("pokemon");
        // $manager->persist($product);

        $manager->flush();
    }
}
