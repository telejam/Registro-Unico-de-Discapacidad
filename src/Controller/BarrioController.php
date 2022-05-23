<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BarrioController extends AbstractController
{
    /**
     * @Route("/barrio", name="app_barrio")
     */
    public function index(): Response
    {
        return $this->render('barrio/index.html.twig', [
            'controller_name' => 'BarrioController',
        ]);
    }
}
