<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\SessionController;
use Symfony\Component\HttpFoundation\Request;

class CiudadController extends AbstractController
{
    /**
     * @Route("/ciudad", name="app_ciudad")
     */
    public function index(Request $request, SessionController $validador): Response
    {
        $idUsuario = $validador->validar($request);
        
        return $this->render('ciudad/index.html.twig', [
            'controller_name' => 'CiudadController',
        ]);
    }
}
