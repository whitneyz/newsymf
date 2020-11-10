<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    /**
     * @Route("/learning", name="learning") //name should always be unique
     */
    public function index(): Response
    {
        return $this->render('learning/index.html.twig', [
            'name' => 'LearningController',
        ]);
    }
    /**
     * @Route("/aboutme", name="aboutme") //name should always be unique
     */
    public function aboutme(): Response
    {
        return $this->render('learning/aboutme.html.twig', [
            'name' => 'LearningController',
        ]);
    }
}
