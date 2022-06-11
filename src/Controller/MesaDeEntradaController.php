<?php

namespace App\Controller;

use App\Entity\Persona;
use App\Entity\Padron;
use App\Entity\Tramite;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\SessionController;

class MesaDeEntradaController extends AbstractController
{
    /**
     * @Route("/", name="mesadeentrada")
     */
    public function index(Request $request, SessionController $validador): Response
    {
        $em = $this->getDoctrine()->getManager();

        $idUsuario = $validador->validar($request);

        /////////////////////////////
        $id = 1;
        /////////////////////////////

        $discapacitado = $em->getRepository(Persona::class)->find($id);

        $discapacidad = $em->getRepository(Padron::class)->find($id);
        $responsables = $discapacidad->getIdresponsable();
        // $tramites = $em->getRepository(Tramite::class)->findAll();
        $tramites = $em->getRepository(Tramite::class)->findBy(['persona' => $id]);

        return $this->render('mesa_de_entrada/index.html.twig', [
            'userid' => $idUsuario,
            'discapacitado' => $discapacitado,
            'discapacidad' => $discapacidad,
            'responsables' => $responsables,
            'tramites' => $tramites
        ]);
    }
}
