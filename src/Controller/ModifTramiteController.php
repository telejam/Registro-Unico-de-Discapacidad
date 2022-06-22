<?php

namespace App\Controller;

use App\Entity\EstadoTramite;
use App\Entity\ModificacionTramite;
use App\Entity\Tramite;
use App\Entity\Usuario;
use App\Form\ModifTramiteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\SessionController;

class ModifTramiteController extends AbstractController
{
    /**
     * @Route("/seguimientos", name="seguimientos")
     */
    public function getAll(Request $request, SessionController $validador): Response
    {
        $em = $this->getDoctrine()->getManager();
        $idUsuario = $validador->validar($request);

        $seguimientos = $em->getRepository(ModificacionTramite::class)->findAll();

        return $this->render('modif_tramite/index.html.twig', [
            'controller_name' => 'ModifTramiteController',
            'seguimientos' => $seguimientos
        ]);
    }
    
    /**
     * @Route("/createseguimiento", name="createseguimiento")
     */
    public function create(Request $request, SessionController $validador): Response
    {
        $em = $this->getDoctrine()->getManager();
        $idUsuario = $validador->validar($request);
        $usuario = NULL;
        
        $seguimiento = new ModificacionTramite;
        
        $id = $request->query->get('id');
        $tramite = $em->getRepository(Tramite::class)->find($id);
        $numeroexpediente = $tramite->getNumeroexpediente(); //retorna un entero
        
        $historial = $em->getRepository(ModificacionTramite::class)->findBy(['tramite'=>$numeroexpediente]); //se supone que traiga el numeroexpediente 
        //de cada tramite, para así mostrar los seguimientos que tenga un tramite concreto, por eso probamos con el findBy

        $seguimiento->setTramite($tramite);
        $form = $this->createForm(ModifTramiteType::class, $seguimiento);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            if ($form['Finalizar']->getData()) {
                $estadotramite = $em->getRepository(EstadoTramite::class)->find(2); //el 2 es la posición del estado Finalizado
                $tramite->setFecharesolucion($seguimiento->getFechaseguimiento()); //setea en la fecharesolucion la misma fecha que posee fechaseguimiento al momento de darle al checkbox finalizar
                $tramite->setEstadotramite($estadotramite); //setea en el estado tramite el estado finalizado
            }
            $seguimiento->setUsuario($usuario); 
            $em->persist($seguimiento);
            $em->flush();
            return $this->redirectToRoute('seguimientos');
        }
        return $this->render('modif_tramite/create.html.twig', [
            'numeroexpediente'=>$numeroexpediente,
            'seguimientos'=>$historial,
            'formulario'=>$form->createView()
        ]);     
    }
}
