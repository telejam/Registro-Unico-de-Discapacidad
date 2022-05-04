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
            return $this->redirectToRoute('padron');
        }
        return $this->render('padron/create.html.twig', [
            'controller_name' => 'PadronController',
            'formulario'=>$form->createView()
        ]);
    }

    /**
     * @Route("/editpadron/{id}", name="editpadron")
     */
    public function edit(Padron $padron, Request $request): Response
    {
        
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(PadronType::class, $padron);
        $padron = $em->getRepository(Padron::class)->find($padron->getId());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $padron->setCuil($form->get('cuil')->getData());
            $padron->setCud($form->get('cud')->getData());
            $padron->setCudvigencia($form->get('cudvigencia')->getData());
            $padron->setCuddiagnostico($form->get('cuddiagnostico')->getData());
            $padron->setCausa($form->get('causa')->getData());
            $padron->setPension($form->get('pension')->getData());
            $padron->setNivelinstruccion($form->get('nivelinstruccion')->getData());
            $padron->setTipomodalidad($form->get('tipomodalidad')->getData());
            $padron->setExperiencialaboral($form->get('experiencialaboral')->getData());
            $padron->setActividades($form->get('actividades')->getData());
            $padron->setNiveleducacion($form->get('niveleducacion')->getData());
            $padron->setResidencia($form->get('residencia')->getData());
            $padron->setObrasocial($form->get('obrasocial')->getData());
            $padron->setDiscapacidad($form->get('discapacidad')->getData());
            $em->flush();
            $this->addFlash('success', 'Padron Modificado');

            return $this->redirectToRoute('padron', [
                'id'=>$padron->getId()
            ]);
        }

        return $this->render('padron/edit.html.twig', [
            'controller_name' => 'PadronController',
            'formulario' => $form->createView()
        ]);
    }

}
