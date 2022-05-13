<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TramiteController extends AbstractController
{
    /**
     * @Route("/tramite", name="app_tramite")
     */
    public function index(): Response
    {
        return $this->render('tramite/index.html.twig', [
            'controller_name' => 'TramiteController',
        ]);
    }
}
