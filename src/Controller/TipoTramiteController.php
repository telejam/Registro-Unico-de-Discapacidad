<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TipoTramiteController extends AbstractController
{
    /**
     * @Route("/tipo/tramite", name="app_tipo_tramite")
     */
    public function index(): Response
    {
        return $this->render('tipo_tramite/index.html.twig', [
            'controller_name' => 'TipoTramiteController',
        ]);
    }
}
