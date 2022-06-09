<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;

class SessionController extends AbstractController
{
    /**
     * @Route("/logout", name="logout")
     */
    public function index()
    {

        /////////////////////////
        $session = new Session();
        $session->start();
        ////////////////////////////////

        echo '<h1>RAJÁ DE ACÁ WACHÍNN!!!!</h1>';
        $session->clear();
        exit(0);
    }
}
