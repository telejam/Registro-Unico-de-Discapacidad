<?php

namespace App\Controller;

use App\Entity\Tramite;
use App\Form\TramiteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class TramiteController extends AbstractController
{
    /**
     * @Route("/tramite", name="app_tramite")
     */
    public function index(): Response
    {
        return $this->render('tramite/index.html.twig', [
            'controller_name' => 'TramiteController',
        ]);
    }
    
    /**
     * @Route("/createtramite", name="createtramite")
     */
    public function create(Request $request): Response
    {
        $tramite = new Tramite();
        $form = $this->createForm(TramiteType::class, $tramite);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tramite);
            $em->flush();
            $this->addFlash(type: 'exito', message: 'Se ha registrado exitosamente.');
            return $this->redirectToRoute('tramite');
        }
        return $this->render('tramite/create.html.twig', [
            'controller_name' => 'TramiteController',
            'formulario'=>$form->createView()
        ]);     
    }




    

    
}
