<?php

namespace App\Controller;

use App\Entity\ObraSocial;
use App\Form\ObraSocialType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\SessionController;

class ObraSocialController extends AbstractController
{
    /**
     * @Route("/obrasocial", name="obrasocial")
     */
    public function getAll(Request $request, SessionController $validador)
    {
            $em = $this->getDoctrine()->getManager();
            $idUsuario = $validador->validar($request);
            
            $obrasocial = $em->getRepository(ObraSocial::class)->findAll();

            return $this->render('obra_social/index.html.twig', [
                'controller_name' => 'ObraSocialController',
                'obrasocial' => $obrasocial
            ]);
    }

    /**
     * @Route("/obrasocial/create", name="createobrasocial")
     */
    public function create(Request $request, SessionController $validador): Response
    {
        $obra = new ObraSocial();
        $idUsuario = $validador->validar($request);

        $form = $this->createForm(ObraSocialType::class, $obra);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($obra);
            $em->flush();
            return $this->redirectToRoute('obrasocial');
        }
        return $this->render('obra_social/create.html.twig', [
            'controller_name' => 'ObraSocialController',
            'formulario'=>$form->createView()
        ]);
    }

     /**
     * @Route("/obrasocial/edit/{id}", name="editobrasocial")
     */
    public function edit($id, Request $request, SessionController $validador): Response
    {
        
        $em = $this->getDoctrine()->getManager();
        $idUsuario = $validador->validar($request);

        $obrasocial = $em->getRepository(ObraSocial::class)->find($id);
        $form = $this->createForm(ObraSocialType::class, $obrasocial);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($obrasocial);
            $em->flush();
            $this->addFlash('success', 'Obra Social Modificada');

            return $this->redirectToRoute('obrasocial', [
                'id'=>$id
            ]);
        }

        return $this->render('obra_social/edit.html.twig', [
            'controller_name' => 'ObraSocialController',
            'formulario' => $form->createView()
        ]);
    }

    /**
     * @Route("/obrasocial/delete/{id}", name="deleteobrasocial")
     */
    public function delete($id, Request $request, SessionController $validador)
    {
            $em = $this->getDoctrine()->getManager();
            $idUsuario = $validador->validar($request);

            $obrasocial= $em->getRepository(ObraSocial::class)->find($id);
            $em->remove($obrasocial);
            $em->flush();

            return $this->redirectToRoute('obrasocial');
    }


}
