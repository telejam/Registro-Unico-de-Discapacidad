<?php

namespace App\Controller;

use App\Entity\Padron;
use App\Form\PadronType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PadronController extends AbstractController
{
    /**
     * @Route("/padron", name="discapacitados")
     */
    public function getAll()
    {
            $em = $this->getDoctrine()->getManager();
            $discapacitados = $em->getRepository(Padron::class)->findAll();

            return $this->render('padron/index.html.twig', [
                'controller_name' => 'PadronController',
                'discapacitados' => $discapacitados
            ]);
    }

    /**
     * @Route("/padron/{id}", name="padron")
     */
    public function getBy($id)
    {
            $em = $this->getDoctrine()->getManager();
            $discapacitado = $em->getRepository(Padron::class)->find($id);

            return $this->render('padron/verpadron.html.twig', [
                'controller_name' => 'PadronController',
                'discapacitado' => $discapacitado
            ]);
    }
    
    /**
     * @Route("/createpadron", name="createpadron")
     */
    public function create(Request $request): Response
    {
        $padron = new Padron();
        $form = $this->createForm(PadronType::class, $padron);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($padron);
            $em->flush();
            $this->addFlash(type: 'exito', message: 'Se ha registrado exitosamente.');
        }
        return $this->render('padron/create.html.twig', [
            'controller_name' => 'PadronController',
            'formulario'=>$form->createView()
        ]);
    }

    /**
     * @Route("/editpadron/{id}", name="editpadron")
     */
    public function edit(Request $request): Response
    {
        $padron = new Padron();
        $form = $this->createForm(PadronType::class, $padron);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em =  $this->getDoctrine()->getManager();
            $em->persist($padron);
            $em->flush();
            $this->addFlash('success', 'Padron Modificado');

            return $this->redirectToRoute('padron');
        }

        return $this->render('padron/edit.html.twig', [
            'controller_name' => 'PadronController',
            'formulario' => $form->createView()
        ]);
    }

}
