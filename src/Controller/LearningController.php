<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    #[Route('/about-me', name: 'app_learning')]
    public function aboutMe(): Response
    {
        return $this->render('learning/index.html.twig', [
            'lorem' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, nobis?',
        ]);
    }
    #[Route('/', name: 'greet')]
    public function showMyName(): Response
    {
        return $this->render('home/index.html.twig', [
            'name' => 'unknown',

        ]);
    }

    #[Route('/changemyname', name:'changemyname', methods:'POST')]
    public function changeMyName(Request $request): Response
    {
        $name = $request->query->get("name");

        return $this->render('home/index.html.twig', [
            'name' => $name
        ]);
    }

}
