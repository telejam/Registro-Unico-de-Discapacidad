<?php

namespace App\Controller;

use App\Entity\EstadoTramite;
use App\Entity\ModificacionTramite;
use App\Entity\Tramite;
use App\Form\ModifTramiteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModifTramiteController extends AbstractController
{
    /**
     * @Route("/seguimientos", name="seguimientos")
     */
    public function getAll(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $seguimientos = $em->getRepository(ModificacionTramite::class)->findAll();

        return $this->render('modif_tramite/index.html.twig', [
            'controller_name' => 'ModifTramiteController',
            'seguimientos' => $seguimientos
        ]);
    }
    
    /**
     * @Route("/createseguimiento", name="createseguimiento")
     */
    public function create(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $seguimiento = new ModificacionTramite;
        $numeroexpediente = $request->query->get('numeroexpediente');
        $tramite = $em->getRepository(Tramite::class)->find($numeroexpediente);
        $seguimiento->setNumeroexpediente($tramite);
        $form = $this->createForm(ModifTramiteType::class, $seguimiento);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            if ($form['Finalizar']->getData()) {
                $estadotramite = $em->getRepository(EstadoTramite::class)->find(3);
                $tramite->setFecharesolucion($seguimiento->getFechaseguimiento()); 
                $tramite->setEstadotramite($estadotramite);
            }

            $em->persist($seguimiento);
            $em->flush();
            $this->addFlash(type: 'exito', message: 'Se ha registrado exitosamente.');
            return $this->redirectToRoute('seguimientos');
        }
        return $this->render('modif_tramite/create.html.twig', [
            'controller_name' => 'ModifTramiteController',
            'formulario'=>$form->createView()
        ]);     
    }
}
