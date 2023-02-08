<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'default')]
class DefaultController extends AbstractController
{
    public function __invoke(): Response
    {
        return $this->render('default/index.html.twig', [
            'post' => new Post(),
        ]);
    }
}
