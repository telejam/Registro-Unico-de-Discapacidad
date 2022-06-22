<?php

namespace App\Controller;

use App\Entity\Discapacidad;
use App\Form\DiscapacidadType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\SessionController;

class DiscapacidadController extends AbstractController
{
   /**
     * @Route("/discapacidad", name="discapacidad")
     */
    public function getAll(Request $request, SessionController $validador)
    {
        $em = $this->getDoctrine()->getManager();
        $idUsuario = $validador->validar($request);

        $discapacidad = $em->getRepository(Discapacidad::class)->findAll();

        return $this->render('discapacidad/index.html.twig', [
            'controller_name' => 'DiscapacidadController',
            'discapacidad' => $discapacidad
        ]);
    }
    
    /**
     * @Route("/discapacidad/create", name="creatediscapacidad")
     */
    public function create(Request $request, SessionController $validador): Response
    {
        $discapacidad = new Discapacidad();
        $idUsuario = $validador->validar($request);

        $form = $this->createForm(DiscapacidadType::class, $discapacidad);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($discapacidad);
            $em->flush();

            return $this->redirectToRoute('creatediscapacidad', [
                'success' => '1'
            ]);
        }
        return $this->render('discapacidad/create.html.twig', [
            'controller_name' => 'DiscapacidadController',
            'formulario'=>$form->createView()
        ]);
    }

    /**
     * @Route("/discapacidad/edit/{id}", name="editdiscapacidad")
     */
    public function edit($id, Request $request, SessionController $validador): Response
    {
        $em = $this->getDoctrine()->getManager();
        $idUsuario = $validador->validar($request);

        $discapacidad = $em->getRepository(Discapacidad::class)->find($id);
        $form = $this->createForm(DiscapacidadType::class, $discapacidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($discapacidad);
            $em->flush();

            return $this->redirectToRoute('editdiscapacidad', [
                'id'=>$id,
                'success' => '1'
            ]);

        }

        return $this->render('discapacidad/edit.html.twig', [
            'controller_name' => 'DiscapacidadController',
            'formulario' => $form->createView()
        ]);
    }

    /**
     * @Route("/discapacidad/delete/{id}", name="deletediscapacidad")
     */
    public function delete($id, Request $request, SessionController $validador)
    {
        $em = $this->getDoctrine()->getManager();
        $idUsuario = $validador->validar($request);

        $discapacidad = $em->getRepository(Discapacidad::class)->find($id);
        $em->remove($discapacidad);
        $em->flush();

        return $this->redirectToRoute('discapacidad');
    }
}
