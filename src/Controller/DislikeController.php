<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Image;
use App\Repository\ImageRepository;

#[Route('/image')]
class DislikeController extends AbstractController
{
    #[Route('/dislike/{image}', name: 'app_dislike')]
    public function index(Image $image, ImageRepository $imageRepository): Response
    {
        $image->setPasaimer($image->getPasaimer() + 1);
        $imageRepository->add($image, true);
        return $this->redirectToRoute("app_image");
    }
}
