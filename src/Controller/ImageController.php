<?php

namespace App\Controller;

use App\Repository\ImageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/image')]
class ImageController extends AbstractController
{
    #[Route('/', name: 'app_image')]
    public function index(ImageRepository $imgRepo): Response
    {
        $images = $imgRepo->findAll();

        return $this->render('image/index.html.twig', [
            'controller_name' => 'ImageController',
            "images" => $images
        ]);
    }
}
