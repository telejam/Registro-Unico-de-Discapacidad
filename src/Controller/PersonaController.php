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

        $persona = new Persona();
        $form = $this->createForm(PersonaType::class, $persona);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $usuario = $em->getRepository(Usuario::class)->find($idUsuario);
            $persona->setUsuario($usuario);
            $em->persist($persona);
            $em->flush();

            return $this->redirectToRoute('createpersona', [
                'success' => '1'
            ]);
        }

        return $this->render('persona/create.html.twig', [
            'controller_name' => 'PersonaController',
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

        $persona = $em->getRepository(Persona::class)->find($id);
        $form = $this->createForm(PersonaType::class, $persona);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($persona);
            $em->flush();
            $this->addFlash('success', 'Persona Modificada');

            /*return $this->redirectToRoute('persona', [
                'id'=>$id]);*/
                return $this->redirectToRoute('editpersona', [
                    'id'=>$id,
                    'success' => '1']);
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
