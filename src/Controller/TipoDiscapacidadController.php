<?php

namespace App\Controller;

use App\Entity\TipoDiscapacidad;
use App\Form\TipoDiscapacidadType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class TipoDiscapacidadController extends AbstractController
{
    /**
     * @Route("/tipodiscapacidad", name="app_tipo_discapacidad")
     */
    public function index(Request $request): Response
    {
        $tipoDiscapacidad = new TipoDiscapacidad();
        $form = $this->createForm(TipoDiscapacidadType::class, $tipoDiscapacidad);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoDiscapacidad);
            $em->flush();
            $this->addFlash(type: 'exito', message: 'Se ha registrado exitosamente.');
        }
        return $this->render('tipo_discapacidad/index.html.twig', [
            'controller_name' => 'TipoDiscapacidadController',
            'formulario'=>$form->createView()
        ]);
    }
}
