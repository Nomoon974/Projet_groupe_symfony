<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Image;
use App\Entity\Commentary;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private  $userPasswordHasher;

    public function __construct(UserPasswordHasherInterface $userPasswordHasher)
    {
        $this->userPasswordHasher = $userPasswordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $user = new User();
        $user->setEmail('steve@t.fr');
        //$user->setRoles();
        $user->setPassword($this->userPasswordHasher->hashPassword(
            $user,
            "coucou"
          )
        );
        $manager->persist($user);        
        $manager->flush();

        $image = new Image();
        $image->setTitle('Pays');
        $image->setUrl('https://pixabay.com/photos/bridge-night-view-7183945/' ,$user);
        $image->setUserId($user);
        $manager->persist($image);
        $manager->flush();

        $commentary = new Commentary();
        $commentary->setMessage('First commentary',$user ,$image);
        $commentary->setUser($user);
        $commentary->setImage($image);
        $manager->persist($commentary);
        $manager->flush();
    }
}
