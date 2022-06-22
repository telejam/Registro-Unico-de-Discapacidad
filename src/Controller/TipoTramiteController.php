<?php

namespace App\Controller;

use App\Entity\TipoTramite;
use App\Form\TipoTramiteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\SessionController;

class TipoTramiteController extends AbstractController
{
    /**
     * @Route("/tipotramite", name="tipotramite")
     */
    public function getAll(Request $request, SessionController $validador): Response
    {
        $em = $this->getDoctrine()->getManager();
        $idUsuario = $validador->validar($request);
        
        $tipotramite= $em->getRepository(TipoTramite::class)->findAll();

        return $this->render('tipo_tramite/index.html.twig', [
            'controller_name' => 'TipoTramiteController',
            'tipotramite' => $tipotramite
        ]);
    }
    
    /**
     * @Route("/tipotramite/create", name="createtipotramite")
     */
    public function create(Request $request, SessionController $validador): Response
    {
        $tipotramite = new TipoTramite();
        $idUsuario = $validador->validar($request);

        $form = $this->createForm(TipoTramiteType::class, $tipotramite);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipotramite);
            $em->flush();
          
            return $this->redirectToRoute('createtipotramite', [
                'success' => '1'
            ]);
        }
        return $this->render('tipo_tramite/create.html.twig', [
            'controller_name' => 'TipoTramiteController',
            'formulario'=>$form->createView()
        ]);     
    }

    /**
     * @Route("/tipotramite/edit/{id}", name="edittipotramite")
     */
    public function edit($id, Request $request, SessionController $validador): Response
    {
        $em = $this->getDoctrine()->getManager();
        $idUsuario = $validador->validar($request);

        $tipotramite = $em->getRepository(TipoTramite::class)->find($id);
        $form = $this->createForm(TipoTramiteType::class, $tipotramite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($tipotramite);
            $em->flush();

            return $this->redirectToRoute('edittipotramite', [
                'id'=>$id,
                 'success' => '1'
            ]);
        }

        return $this->render('tipo_tramite/edit.html.twig', [
            'controller_name' => 'TipoTramiteController',
            'formulario' => $form->createView()
        ]);
    }

    /**
     * @Route("/tipotramite/delete/{id}", name="deletetipotramite")
     */
    public function delete($id, Request $request, SessionController $validador)
    {
            $em = $this->getDoctrine()->getManager();
            $idUsuario = $validador->validar($request);

            $tipotramite = $em->getRepository(TipoTramite::class)->find($id);
            $em->remove($tipotramite);
            $em->flush();

            return $this->redirectToRoute('tipotramite');
    }
}


