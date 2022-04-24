<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PadronController extends AbstractController
{
    /**
     * @Route("/padron", name="app_padron")
     */
    public function index(): Response
    {
        return $this->render('padron/index.html.twig', [
            'controller_name' => 'PadronController',
        ]);
    }
}
