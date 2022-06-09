<?php

namespace App\Controller;

use App\Entity\Persona;
use App\Entity\Padron;
use App\Entity\Tramite;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// session_start();

class MesaDeEntradaController extends AbstractController
{
    /**
     * @Route("/", name="mesadeentrada")
     */
    public function index(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();

        $session = $request->getSession();

        if ($request->get('idSigmu')) 
        {
            $idSigmu = $request->get('idSigmu');

            $idUser = $idSigmu; //$em->getRepository(Usuario::class)->find($idSigmu);
            $user = 'el Jefe'; //$em->getRepository(Usuario::class)->find($idSigmu);

            $session->set('username', $user);
            $session->set('userid', $idUser);
        }
        else if (!$session->get('userid'))
        {
            echo '<h1>RAJÁ DE ACÁ WACHÍNN!!!!</h1>';
            $session->clear();
            exit(0);
        }

        $idUsuario = $session->get('userid');
        $userName = $session->get('username');

        /////////////////////////////
        $id = 1;
        /////////////////////////////

        $discapacitado = $em->getRepository(Persona::class)->find($id);


        $discapacidad = $em->getRepository(Padron::class)->find($id);
        $responsables = $discapacidad->getIdresponsable();
        // $tramites = $em->getRepository(Tramite::class)->findAll();
        $tramites = $em->getRepository(Tramite::class)->findBy(['persona' => $id]);

        return $this->render('mesa_de_entrada/index.html.twig', [
            'username' => $userName,
            'userid' => $idUsuario,
            'discapacitado' => $discapacitado,
            'discapacidad' => $discapacidad,
            'responsables' => $responsables,
            'tramites' => $tramites
        ]);
    }
}
