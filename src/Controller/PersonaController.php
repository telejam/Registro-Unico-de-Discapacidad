<?php

namespace App\Controller;

use App\Entity\Usuario;
use App\Entity\Persona;
use App\Form\PersonaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\SessionController;
use App\Entity\Padron;
use phpDocumentor\Reflection\Types\Null_;

class PersonaController extends AbstractController
{
    /**
     * @Route("/personas", name="personas")
     */
    public function getAll(Request $request, SessionController $validador): Response
    {
        $em = $this->getDoctrine()->getManager();

        $idUsuario = $validador->validar($request);

        $personas = $em->getRepository(Persona::class)->findAll();

        return $this->render('persona/index.html.twig', [
            'controller_name' => 'PersonaController',
            'personas' => $personas
        ]);
    }

    /**
     * @Route("/persona/{id}", name="persona")
     */
    public function getBy($id, Request $request, SessionController $validador): Response
    {
        $em = $this->getDoctrine()->getManager();

        $idUsuario = $validador->validar($request);

        $persona = $em->getRepository(Persona::class)->find($id);
        $estadoCivil = $persona->getEstadoCivil();
        $dniTipo = $persona->getDniTipo();
        $barrio = $persona->getBarrio();
        $ciudad = $persona->getCiudad();
        $provincia = $persona->getProvincia();
        $nacionalidad = $persona->getNacionalidad();

        return $this->render('persona/verpersona.html.twig', [
            'controller_name' => 'PersonaController',
            'persona' => $persona,
            'estadocivil' => $estadoCivil,
            'dnitipo' => $dniTipo,
            'barrio' => $barrio,
            'ciudad' => $ciudad,
            'provincia' => $provincia,
            'nacionalidad' => $nacionalidad
        ]);
    }

    /**
     * @Route("/createpersona", name="createpersona")
     */
    public function create(Request $request, SessionController $validador): Response
    {
        $em = $this->getDoctrine()->getManager();

        $idUsuario = $validador->validar($request);
        $usuario = NULL;

        $persona = new Persona();
        $form = $this->createForm(PersonaType::class, $persona);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $usuario = $em->getRepository(Usuario::class)->find($idUsuario);
            $persona->setUsuario($usuario);
            $em->persist($persona);
            $em->flush();

            $id = $persona->getId();

            if ($form['discapacidad']->getData()) {
                return $this->redirectToRoute('createpadron', [
                    'id'=>$id,
                    'user'=>$usuario,
                ]);
                
            }

            return $this->redirectToRoute('createpersona', [
                'user'=>$usuario,
                'success' => '1'
            ]);
        }

        return $this->render('persona/create.html.twig', [
            'controller_name' => 'PersonaController',
            'user'=>$usuario,
            'formulario' => $form->createView()
        ]);
    }

    /**
     * @Route("/editpersona/{id}", name="editpersona")
     */
    public function edit($id, Request $request, SessionController $validador): Response
    {
        $em = $this->getDoctrine()->getManager();

        $idUsuario = $validador->validar($request);
        $usuario = NULL;

        $persona = $em->getRepository(Persona::class)->find($id);
        $discapacidad = $em->getRepository(Padron::class)->findOneBy(['persona' => $persona->getId()]);
        $form = $this->createForm(PersonaType::class, $persona);
        if($discapacidad){
            $form['discapacidad']->setData(true);
        }
       

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($persona);
            $em->flush();
            $this->usuario = $em->getRepository(Usuario::class)->find($idUsuario);

            if ($form['discapacidad']->getData()) {
                
                if($discapacidad){
                    return $this->redirectToRoute('editpadron', [
                        'id'=>$discapacidad->getId(),
                        'user'=>$usuario
                    ]);
                }
                return $this->redirectToRoute('createpadron', [
                    'id'=>$id,
                    'user'=>$usuario
                ]);
                
            }
            $this->addFlash('success', 'Persona Modificada');
        
            return $this->redirectToRoute('editpersona', [
                'id'=>$id,
                /*'success' => '1'*/]); //esta linea llama al modal de editado con exito pero lo comentamos porque no nos dejaba redigir a createpadron en caso
                //de que se quisiera añadir una discapacidad
        }

        return $this->render('persona/edit.html.twig', [
            'controller_name' => 'PersonaController',
            'formulario' => $form->createView()
        ]);
    }

    /**
     * @Route("/deletepersona/{id}", name="deletepersona")
     */
    public function delete($id, Request $request, SessionController $validador): Response
    {
        $em = $this->getDoctrine()->getManager();

        $idUsuario = $validador->validar($request);

        $persona = $em->getRepository(Persona::class)->find($id);
        $em->remove($persona);
        $em->flush();

        return $this->redirectToRoute('personas');
    }

}
