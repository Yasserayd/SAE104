<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class YassirController extends AbstractController
{
    #[Route('/yassir', name: 'app_yassir')]
    public function index(): Response
    {
        return $this->render('yassir/index.html.twig', [
            'controller_name' => 'yassirController',
        ]);
    }
}