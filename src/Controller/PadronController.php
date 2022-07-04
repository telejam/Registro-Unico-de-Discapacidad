<?php

namespace App\Controller;

use App\Entity\Padron;
use App\Form\PadronType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\SessionController;
use App\Entity\Persona;

class PadronController extends AbstractController
{
    /**
     * @Route("/padron", name="padrongral")
     */
    public function getAll(Request $request, SessionController $validador)
    {
            $em = $this->getDoctrine()->getManager();
            $idUsuario = $validador->validar($request);

            $discapacitados = $em->getRepository(Padron::class)->findAll();

            return $this->render('padron/index.html.twig', [
                'controller_name' => 'PadronController',
                'discapacitados' => $discapacitados
            ]);
    }

    /**
     * @Route("/padron/{id}", name="padronindiv")
     */
    public function getBy($id, Request $request, SessionController $validador)
    {
            $em = $this->getDoctrine()->getManager();
            $idUsuario = $validador->validar($request);

            $discapacitado = $em->getRepository(Padron::class)->find($id); 
            $discapacidad = $discapacitado->getDiscapacidad();          
            $obrasocial = $discapacitado->getObrasocial();

            return $this->render('padron/verpadron.html.twig', [
                'controller_name' => 'PadronController',
                'discapacitado' => $discapacitado,
                'discapacidad' => $discapacidad,
                'obrasocial' => $obrasocial
            ]);
    }
    
    /**
     * @Route("/createpadron/{id}", name="createpadron")
     */
    public function create($id, Request $request, SessionController $validador): Response
    {
        $padron = new Padron();
        $em = $this->getDoctrine()->getManager();
        $persona =  $em->getRepository(Persona::class)->find($id);
        $idUsuario = $validador->validar($request);
        $dni = $persona->getDninumero();
        $nombre = $persona->getNombre();
        $apellido = $persona->getApellido();
        $nombreCompleto = $nombre." ".$apellido;

        $form = $this->createForm(PadronType::class, $padron);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $padron->setPersona($persona);
            $em->persist($padron);
            $em->flush();

            return $this->redirectToRoute('createpadron', [
                'id'=>$id,
                'success' => '1'
            ]);
        }
        return $this->render('padron/create.html.twig', [
            'id'=>$id,
            'dni'=>$dni,
            'nombrecompleto'=>$nombreCompleto,
            'formulario'=>$form->createView()
        ]);
    }

    /**
     * @Route("/padron/edit/{id}", name="editpadron")
     */
    public function edit($id, Request $request, SessionController $validador): Response
    {
        $em = $this->getDoctrine()->getManager();
        $idUsuario = $validador->validar($request);

        $padron = $em->getRepository(Padron::class)->find($id);
        $form = $this->createForm(PadronType::class, $padron);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($padron);
            $em->flush();
            
            return $this->redirectToRoute('editpadron', [
                'id'=>$id,
                'success' => '1'
            ]);
        }

        return $this->render('padron/edit.html.twig', [
            'controller_name' => 'PadronController',
            'formulario' => $form->createView()
        ]);
    }

     /**
     * @Route("/padron/delete/{id}", name="deletepadron")
     */
    public function delete($id, Request $request, SessionController $validador)
    {
            $em = $this->getDoctrine()->getManager();
            $idUsuario = $validador->validar($request);

            $padron = $em->getRepository(Padron::class)->find($id);
            $em->remove($padron);
            $em->flush();

            return $this->redirectToRoute('padrongral');
    }

}
