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
     * @Route("/tramite", name="tramite")
     */
    public function getAll(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $tramites = $em->getRepository(Tramite::class)->findAll();

        return $this->render('tramite/index.html.twig', [
            'controller_name' => 'TramiteController',
            'tramite' => $tramites
        ]);
    }

     /**
     * @Route("/tramite/{id}", name="vertramite")
     */
    public function getBy($id)
    {
            $em = $this->getDoctrine()->getManager();
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
    public function create(Request $request): Response
    {
        $tramite = new Tramite();
        $form = $this->createForm(TramiteType::class, $tramite);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
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
    public function edit(Request $request, $id): Response
    {
        
        $em = $this->getDoctrine()->getManager();
        $tramite = $em->getRepository(Tramite::class)->find($id);
        $form = $this->createForm(TramiteType::class, $tramite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($tramite);
            $em->flush();

            return $this->redirectToRoute('tramite', [
                'id'=>$id
            ]);
        }

        return $this->render('tramite/edit.html.twig', [
            'controller_name' => 'TramiteController',
            'formulario' => $form->createView()
        ]);
    }

    /**
     * @Route("/tramite/delete/{id}", name="deletetramite")
     */
    public function delete($id)
    {
            $em = $this->getDoctrine()->getManager();
            $tramite = $em->getRepository(Tramite::class)->find($id);
            $em->remove($tramite);
            $em->flush();

            return $this->redirectToRoute('tramite');
    }

}
