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
        for($i=0; $i<5;$i++){
            $Image = new Image();
        $Image->setTitle('Pays');
        $Image->setUrl('https://www.google.com/search?q=Egypte&tbm=isch&ved=2ahUKEwj8ksnym9r3AhVDYPEDHZYkAO0Q2-cCegQIABAA&oq=Egypte&gs_lcp=CgNpbWcQAzIICAAQgAQQsQMyCAgAEIAEELEDMgUIABCABDIICAAQgAQQsQMyBQgAEIAEMggIABCABBCxAzIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQ6BAgjECc6BggAEAcQHjoECAAQHjoECAAQQzoICAAQsQMQgwE6CwgAEIAEELEDEIMBOgcIIxDqAhAnULsoWKxoYOFraApwAHgAgAHGAogBqgqSAQc4LjEuMS4xmAEAoAEBqgELZ3dzLXdpei1pbWewAQrAAQE&sclient=img&ei=yh99YvyFCcPAxc8PlsmA6A4&bih=888&biw=1863#imgrc=GU8r8y4Shz-akM');
        $manager->persist($Image);
        $manager->flush();
        }
    }
}
