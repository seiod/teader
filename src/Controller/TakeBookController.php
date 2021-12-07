<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TakeBookController extends AbstractController
{
    /**
     * @Route("/take/book", name="take_book")
     */
    public function index(): Response
    {
        return $this->render('take_book/index.html.twig', [
            'controller_name' => 'TakeBookController',
        ]);
    }
}
