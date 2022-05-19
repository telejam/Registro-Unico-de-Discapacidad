<?php

namespace App\Controller;

use App\Entity\Persona;
use App\Entity\Padron;
use App\Entity\Tramite;
use App\Form\PersonaType;
use App\Form\PadronType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MesaDeEntradaController extends AbstractController
{
    /**
     * @Route("/", name="mesadeentrada")
     */
    public function index(Request $request): Response
    {
        $idSigmu = 1; //_POST()
        $id = 1;
        $em = $this->getDoctrine()->getManager();
        
        $discapacitado = $em->getRepository(Persona::class)->find($id);
        $responsable = new Persona();
        $discapacidad = $em->getRepository(Padron::class)->find($id);
        $tramite = new Tramite();

        return $this->render('mesa_de_entrada/index.html.twig', [
            'discapacitado' => $discapacitado,
            'discapacidad' => $discapacidad
        ]);
    }
}
