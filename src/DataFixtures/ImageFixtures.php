<?php

namespace App\DataFixtures;

use App\Entity\Image;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ImageFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        // for($i=0; $i<5;$i++){
        //     $Image = new Image();
        // $Image->setTitle('Pays');
        // $Image->setUrl('https://pixabay.com/photos/bridge-night-view-7183945/');
        // $manager->persist($Image);
        // $manager->flush();
        // }
    }
}
