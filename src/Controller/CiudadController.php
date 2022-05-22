<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CiudadController extends AbstractController
{
    /**
     * @Route("/ciudad", name="app_ciudad")
     */
    public function index(): Response
    {
        return $this->render('ciudad/index.html.twig', [
            'controller_name' => 'CiudadController',
        ]);
    }
}
