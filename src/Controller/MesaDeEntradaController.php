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
        $dni = null;
        $persona = null;
        $discapacidad = null;
        $responsables = null;
        $tramites = null;

        $em = $this->getDoctrine()->getManager();

        $idUsuario = $validador->validar($request);

        if ($request->get('dni')) 
        {
            $dni = $request->get('dni');
            $persona = $em->getRepository(Persona::class)->findOneBy(['dninumero' => $dni]);
            $discapacidad = $em->getRepository(Padron::class)->findOneBy(['persona' => $persona->getId()]);
        }

        if ($discapacidad)
        {
            $responsables = $discapacidad->getIdresponsable();
            $tramites = $em->getRepository(Tramite::class)->findBy(['persona' => $persona->getId()]);
        }

        return $this->render('mesa_de_entrada/index.html.twig', [
            'userid' => $idUsuario,
            'persona' => $persona,
            'discapacidad' => $discapacidad,
            'responsables' => $responsables,
            'tramites' => $tramites
        ]);
    }
}
