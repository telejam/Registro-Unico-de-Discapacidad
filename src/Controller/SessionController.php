<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SessionController extends AbstractController
{
    /**
     * @Route("/logout", name="logout")
     */
    public function index(Request $request): Response
    {
        if ($request->hasSession() && ($session = $request->getSession())) 
        {
            $session->clear();
            echo '<h1>GRACIAS POR USAR *RUD*</h1>';
        }
        else 
        {
            echo '<h1>SOLO PERSONAL AUTORIZADO</h1>';
        }
        echo '<p>acá hay que mandarlos de vuelta al Sigmu</p>';
        exit(0);
    }

    public function validar(Request $request)
    {
        $session = $request->getSession();

        if ($request->get('idSigmu')) 
        {
            $idSigmu = $request->get('idSigmu');

            $em = $this->getDoctrine()->getManager();

            //$user = $em->getRepository(Usuario::class)->findOne($idSigmu);
            $userId = $idSigmu;//$user->;
            $userName = 'Boss';

            $session->set('username', $userName);
            $session->set('userid', $userId);
        }
        else if (!$session->get('userid'))
        {
            echo '<h1>SOLO PERSONAL AUTORIZADO</h1>';
            echo '<p>acá hay que mandarlos de vuelta al Sigmu</p>';
            $session->clear();
            exit(0);
        }

        return $session->get('userid');
    }
}
