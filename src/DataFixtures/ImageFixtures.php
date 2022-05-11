<?php

namespace App\DataFixtures;

use App\Entity\Image;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ImageFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $image = new Image();
        $image->setTitle("Pikachu !")
        ->setUrl("https://resize-gulli.jnsmedia.fr/r/890,__ym__/img//var/jeunesse/storage/images/gulli/chaine-tv/dessins-animes/pokemon/pokemon/pikachu/26571681-1-fre-FR/Pikachu.jpg")
        ->setDateUpload(new DateTime('now'))
        ->setDimension("1920*1080");
        $manager->persist($image);

        $image = new Image();
        $image->setTitle("Pokemon cheloud")
        ->setUrl(" https://www.media.pokekalos.fr/img/jeux/pev/starter2.jpg")
        ->setDateUpload(new DateTime('now'))
        ->setDimension("1920*1080");
        $manager->persist($image);
       
        $image = new Image();
        $image->setTitle("Pokemon DA a vomir")
        ->setUrl("https://media.ouest-france.fr/v1/pictures/MjAyMTExZWNiOGVlMzM5YTVmMjE3MWU0NWRmYTQxNDZmZjlhZTI?width=480&focuspoint=50%2C25&cropresize=1&client_id=bpeditorial&sign=809e88f10605cbbf16420add8c58b812ba740271c2a10b9ee86299265c831fdf
        ")
        ->setDateUpload(new DateTime('now'))
        ->setDimension("1920*1080");
        $manager->persist($image);
        $manager->flush();
    }
}
