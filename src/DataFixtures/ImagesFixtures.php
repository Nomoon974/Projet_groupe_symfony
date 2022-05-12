<?php

namespace App\DataFixtures;

use App\Entity\Image;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ImagesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $image = new Image();
        // $product = new Product();
        // $manager->persist($product);
        $image->setTitle("De Funès");
        $image->setUrl("https://c.tenor.com/y9aExFtmlG4AAAAM/de-fun%C3%A8s-louis-de-fun%C3%A8s.gif");
        $image->setAime(0);
        $image->setPasaimer(0);

        $manager->persist($image);
        $manager->flush();
    }
}
