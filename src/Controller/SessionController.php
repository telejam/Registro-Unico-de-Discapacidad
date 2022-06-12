<?php

namespace App\Controller;

use App\Entity\Usuario;
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
        }
        return $this->redirect('launch.html');
    }

    public function validar(Request $request)
    {
        $session = $request->getSession();

        if ($request->get('idSigmu')) 
        {
            $idSigmu = $request->get('idSigmu');

            $em = $this->getDoctrine()->getManager();

            $usuario = $em->getRepository(Usuario::class)->findOneBy(['idSigmu' => $idSigmu]);
            $userId = $usuario->getId();

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
