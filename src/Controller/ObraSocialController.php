<?php

namespace App\Controller;

use App\Entity\ObraSocial;
use App\Form\ObraSocialType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ObraSocialController extends AbstractController
{
    /**
     * @Route("/obrasocial", name="app_obra_social")
     */
    public function index(Request $request): Response
    {
        $obra = new ObraSocial();
        $form = $this->createForm(ObraSocialType::class, $obra);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($obra);
            $em->flush();
            $this->addFlash(type: 'exito', message: 'Se ha registrado exitosamente.');
        }
        return $this->render('obra_social/index.html.twig', [
            'controller_name' => 'ObraSocialController',
            'formulario'=>$form->createView()
        ]);
    }
}
