<?php

namespace App\Controller;

use App\Entity\TipoDiscapacidad;
use App\Form\TipoDiscapacidadType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\SessionController;

class TipoDiscapacidadController extends AbstractController
{
    /**
     * @Route("/tipodiscapacidad", name="tipodiscapacidad")
     */
    public function getAll(Request $request, SessionController $validador)
    {
            $em = $this->getDoctrine()->getManager();
            $idUsuario = $validador->validar($request);
            
            $tipoDiscapacidad = $em->getRepository(TipoDiscapacidad::class)->findAll();

            return $this->render('tipo_discapacidad/index.html.twig', [
                'controller_name' => 'TipoDiscapacidadController',
                'tipodiscapacidad' => $tipoDiscapacidad
            ]);
    } 
    
    /**
     * @Route("/tipodiscapacidad/create", name="createtipodiscapacidad")
     */
    public function create(Request $request, SessionController $validador): Response
    {
        $tipoDiscapacidad = new TipoDiscapacidad();
        $idUsuario = $validador->validar($request);

        $form = $this->createForm(TipoDiscapacidadType::class, $tipoDiscapacidad);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoDiscapacidad);
            $em->flush();
     
            return $this->redirectToRoute('createtipodiscapacidad', [
                'success' => '1'
            ]);
        }
        return $this->render('tipo_discapacidad/create.html.twig', [
            'controller_name' => 'TipoDiscapacidadController',
            'formulario'=>$form->createView()
        ]);
    }

     /**
     * @Route("/tipodiscapacidad/edit/{id}", name="edittipodiscapacidad")
     */
    public function edit($id, Request $request, SessionController $validador): Response
    {
        
        $em = $this->getDoctrine()->getManager();
        $idUsuario = $validador->validar($request);

        $tipoDiscapacidad = $em->getRepository(TipoDiscapacidad::class)->find($id);
        $form = $this->createForm(TipoDiscapacidadType::class, $tipoDiscapacidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($tipoDiscapacidad);
            $em->flush();

            return $this->redirectToRoute('edittipodiscapacidad', [
                'id'=>$id,
                'success' => '1'
            ]);
        }

        return $this->render('tipo_discapacidad/edit.html.twig', [
            'controller_name' => 'TipoDiscapacidadController',
            'formulario' => $form->createView()
        ]);
    }

     /**
     * @Route("/tipodiscapacidad/delete/{id}", name="deletetipodiscapacidad")
     */
    public function delete($id, Request $request, SessionController $validador)
    {
            $em = $this->getDoctrine()->getManager();
            $idUsuario = $validador->validar($request);

            $tipoDiscapacidad = $em->getRepository(TipoDiscapacidad::class)->find($id);
            $em->remove($tipoDiscapacidad);
            $em->flush();

            return $this->redirectToRoute('tipodiscapacidad');
    }
}
