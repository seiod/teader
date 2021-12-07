<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ThinkController extends AbstractController
{
    /**
     * @Route("/think", name="think")
     */
    public function index(): Response
    {
        return $this->render('think/index.html.twig', [
            'controller_name' => 'ThinkController',
        ]);
    }
}
