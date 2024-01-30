<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/yassir', name: 'app_yassir')]
    public function moi(): Response
    {
        return $this->render('yassir/yassir.html.twig', [
            'controller_name' => 'YassirController',
        ]);
    }
    #[Route('/portfolio', name: 'app_portfolio')]
    public function po(): Response
    {
        return $this->render('portfolio/portfolio.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('cv/cv.html.twig', [
            'controller_name' => 'CvController',
        ]);
    }
    #[Route('/contact', name: 'app_contact')]
    public function cont(): Response
    {
        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
    #[Route('/passion', name: 'app_plus')]
    public function passion(): Response
    {
        return $this->render('passion/passion.html.twig', [
            'controller_name' => 'PassionController',
        ]);
    }



}
