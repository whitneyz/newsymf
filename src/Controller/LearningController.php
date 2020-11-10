<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    /**
     * @Route("/", name="learning") //name should always be unique
     */
    public function index(): Response
    {
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
        ]);
    }

    /**
     * @Route("/aboutme", name="aboutme") //name should always be unique
     */
    public function aboutMe(): Response
    {
        return $this->render('learning/aboutme.html.twig', [
            'name' => 'LearningController',
        ]);
    }

    /**
     * @Route("/showmyname", name="showname") //name should always be unique
     */
    public function showName(): Response
    {
        $name = "";
        if (empty($_POST["fname"])) {
            return $this->render('learning/changemyname.html.twig', [
                'name' => 'Unknown',]);
        }
    }
    /**
     * @Route("/changemyname", name="changename") //name should always be unique
     */
    public function changeName(): Response
    {
        if ($name)["fname"]) {
            return $this->render('learning/changemyname.html.twig', [
                'name' => 'Unknown',]);
        $_SESSION["fname"] = $name;
        }
    }

}

   /* /**
     * @Route("/changemyname", name="changename") //name should always be unique

    public
    function changeName(): Response
        $name = ["fname"];

            return $this->render('learning/changemyname.html.twig', [
                'name' => 'LearningController',
            ]);
        }*/

