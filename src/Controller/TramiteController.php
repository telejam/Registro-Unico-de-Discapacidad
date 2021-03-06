<?php

namespace App\Controller;

use App\Entity\Tramite;
use App\Form\TramiteType;
use App\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\SessionController;

class TramiteController extends AbstractController
{
    /**
     * @Route("/tramite", name="tramite")
     */
    public function getAll(Request $request, SessionController $validador): Response
    {
        $em = $this->getDoctrine()->getManager();
        $idUsuario = $validador->validar($request);

        $tramites = $em->getRepository(Tramite::class)->findAll();

        return $this->render('tramite/index.html.twig', [
            'controller_name' => 'TramiteController',
            'tramite' => $tramites
        ]);
    }

     /**
     * @Route("/tramite/{id}", name="vertramite")
     */
    public function getBy($id, Request $request, SessionController $validador)
    {
            $em = $this->getDoctrine()->getManager();
            $idUsuario = $validador->validar($request);

            $tramite = $em->getRepository(Tramite::class)->find($id); 
            $tipotramite = $tramite->getTipoTramite();
            $estadotramite = $tramite->getEstadotramite();
            $persona = $tramite->getPersona();

            return $this->render('tramite/vertramite.html.twig', [
                'controller_name' => 'TramiteController',
                'tramite' => $tramite, 
                'tipotramite' => $tipotramite,
                'estadotramite' => $estadotramite,
                'persona'=> $persona
            ]);
    }
    
    /**
     * @Route("/createtramite", name="createtramite")
     */
    public function create(Request $request, SessionController $validador): Response
    {
        $tramite = new Tramite();
        
        $idUsuario = $validador->validar($request);
        $usuario = NULL;

        $form = $this->createForm(TramiteType::class, $tramite);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $tramite->setUsuario($usuario);
            $em->persist($tramite);
            $em->flush();
            
            return $this->redirectToRoute('createtramite', [
                'success' => '1'
            ]);
        }
        return $this->render('tramite/create.html.twig', [
            'controller_name' => 'TramiteController',
            'formulario'=>$form->createView()
        ]);     
    }

    /**
     * @Route("/tramite/edit/{id}", name="editTramite")
     */
    public function edit($id, Request $request, SessionController $validador): Response
    {
        
        $em = $this->getDoctrine()->getManager();
        $idUsuario = $validador->validar($request);

        $tramite = $em->getRepository(Tramite::class)->find($id);
        $form = $this->createForm(TramiteType::class, $tramite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            
            $em->persist($tramite);
            $em->flush();

            return $this->redirectToRoute('editTramite', [
                'id'=>$id,
                 'success' => '1']);
        }

        return $this->render('tramite/edit.html.twig', [
            'controller_name' => 'TramiteController',
            'formulario' => $form->createView()
        ]);
    }

    /**
     * @Route("/tramite/delete/{id}", name="deletetramite")
     */
    public function delete($id, Request $request, SessionController $validador)
    {
            $em = $this->getDoctrine()->getManager();
            $idUsuario = $validador->validar($request);

            $tramite = $em->getRepository(Tramite::class)->find($id);
            $em->remove($tramite);
            $em->flush();

            return $this->redirectToRoute('tramite');
    }

}
