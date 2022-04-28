<?php

namespace App\Controller;

use App\Entity\Discapacidad;
use App\Form\DiscapacidadType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class DiscapacidadController extends AbstractController
{
    /**
     * @Route("/discapacidad", name="app_discapacidad")
     */
    public function index(Request $request): Response
    {
        $discapacidad = new Discapacidad();
        $form = $this->createForm(DiscapacidadType::class, $discapacidad);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($discapacidad);
            $em->flush();
            $this->addFlash(type: 'exito', message: 'Se ha registrado exitosamente.');
        }
        return $this->render('discapacidad/index.html.twig', [
            'controller_name' => 'DiscapacidadController',
            'formulario'=>$form->createView()
        ]);
    }
}
