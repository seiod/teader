<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BillController extends AbstractController
{
    /**
     * @Route("/bill", name="bill")
     */
    public function index(): Response
    {
        return $this->render('bill/index.html.twig', [
            'controller_name' => 'BillController',
        ]);
    }
}
