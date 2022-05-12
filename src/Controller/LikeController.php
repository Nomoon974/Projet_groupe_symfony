<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Image;
use App\Repository\ImageRepository;

#[Route('/image')]
class LikeController extends AbstractController
{
    #[Route('/like/{image}', name: 'app_like')]
    public function index(Image $image, ImageRepository $imageRepository): Response
    {
        $image->setAime($image->getAime() + 1);
        $imageRepository->add($image, true);
        return $this->redirectToRoute("app_image");
    }
}
