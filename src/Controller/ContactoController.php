<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\SessionController;
use Symfony\Component\HttpFoundation\Request;

class ContactoController extends AbstractController
{
    /**
     * @Route("/contacto", name="app_contacto")
     */
    public function index(Request $request, SessionController $validador): Response
    {
        $idUsuario = $validador->validar($request);
        
        return $this->render('contacto/index.html.twig', [
            'controller_name' => 'ContactoController',
        ]);
    }
}
