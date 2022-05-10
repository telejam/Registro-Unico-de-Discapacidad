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
            $cudvigencia = $discapacitado->getCudvigencia();
            $cuddiagnostico = $discapacitado->getCuddiagnostico();
            $discapacidad = $discapacitado->getDiscapacidad();
            $causa = $discapacitado->getCausa();
            $pension = $discapacitado->getPension();
            $obrasocial = $discapacitado->getObrasocial();
            $nivelinstruccion = $discapacitado->getNivelinstruccion();
            $tipomodalidad = $discapacitado->getTipomodalidad();
            $experiencialaboral = $discapacitado->getExperiencialaboral();
            $actividades = $discapacitado->getActividades();
            $niveleducacion = $discapacitado->getNiveleducacion();
            $residencia = $discapacitado->getResidencia();

            return $this->render('padron/verpadron.html.twig', [
                'controller_name' => 'PadronController',
                'discapacitado' => $discapacitado,
                'cudvigencia' => $cudvigencia,
                'cuddiagnostico' => $cuddiagnostico,
                'discapacidad' => $discapacidad,
                'causa'=> $causa,
                'pension'=> $pension,
                'obrasocial' => $obrasocial,
                'nivelinstruccion' => $nivelinstruccion,
                'tipomodalidad' => $tipomodalidad,
                'experiencialaboral' => $experiencialaboral,
                'actividades' => $actividades,
                'niveleducacion' => $niveleducacion,
                'residencia' => $residencia,

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
    public function edit(Padron $padron, Request $request, $id): Response
    {
        
        $em = $this->getDoctrine()->getManager();
        $padron = $em->getRepository(Padron::class)->find($id);
        $form = $this->createForm(PadronType::class, $padron);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($padron);
            $em->flush();
            $this->addFlash('success', 'Padron Modificado');

            return $this->redirectToRoute('padron', [
                'id'=>$id
            ]);
        }

        return $this->render('padron/edit.html.twig', [
            'controller_name' => 'PadronController',
            'formulario' => $form->createView()
        ]);
    }

}
