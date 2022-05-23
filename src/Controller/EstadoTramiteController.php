<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EstadoTramiteController extends AbstractController
{
    /**
     * @Route("/estado/tramite", name="app_estado_tramite")
     */
    public function index(): Response
    {
        return $this->render('estado_tramite/index.html.twig', [
            'controller_name' => 'EstadoTramiteController',
        ]);
    }
}
