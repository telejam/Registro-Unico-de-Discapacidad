<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModifTramiteController extends AbstractController
{
    /**
     * @Route("/modif/tramite", name="app_modif_tramite")
     */
    public function index(): Response
    {
        return $this->render('modif_tramite/index.html.twig', [
            'controller_name' => 'ModifTramiteController',
        ]);
    }
}
