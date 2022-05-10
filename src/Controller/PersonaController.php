<?php


namespace App\Controller;

use App\Entity\Persona;
use App\Form\PersonaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonaController extends AbstractController
{
    /**
     * @Route("/personas", name="personas")
     */
    public function getAll()
    {
            $em = $this->getDoctrine()->getManager();
            $personas = $em->getRepository(Persona::class)->findAll();

            return $this->render('persona/index.html.twig', [
                'controller_name' => 'PersonaController',
                'personas' => $personas
            ]);
    }

    /**
     * @Route("/persona/{id}", name="persona")
     */
    public function getBy($id)
    {
            $em = $this->getDoctrine()->getManager();
            $persona = $em->getRepository(Persona::class)->find($id);
            $estadoCivil = $persona->getEstadoCivil();
            $dniTipo = $persona->getDniTipo();
            $domicilio = $persona->getDomicilio();
            $barrio = $domicilio->getBarrio();
            $ciudad = $domicilio->getIdciudad();
            $provincia = $ciudad->getIdprovincia();
            $nacionalidad = $persona->getNacionalidad();

            return $this->render('persona/verpersona.html.twig', [
                'controller_name' => 'PersonaController',
                'persona' => $persona,
                'estadocivil' => $estadoCivil,
                'dnitipo' => $dniTipo,
                'domicilio' => $domicilio,
                'barrio' => $barrio,
                'ciudad' => $ciudad,
                'provincia' => $provincia,
                'nacionalidad' => $nacionalidad
            ]);
    }

    /**
     * @Route("/createpersona", name="createpersona")
     */
    public function create(Request $request): Response
    {
        $em =  $this->getDoctrine()->getManager();
        $persona = new Persona();
        $form = $this->createForm(PersonaType::class, $persona);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($persona);
            $em->flush();
            $this->addFlash('success', 'Persona agregada');

            return $this->redirectToRoute('personas');
        }

        return $this->render('persona/create.html.twig', [
            'controller_name' => 'PersonaController',
            'formulario' => $form->createView()
        ]);
    }

    /**
     * @Route("/editpersona/{id}", name="editpersona")
     */
    public function edit(Request $request, $id): Response
    {
        $em =  $this->getDoctrine()->getManager();
        $persona = $em->getRepository(Persona::class)->find($id);
        $domicilio = $persona->getDomicilio();
        $ciudad = $domicilio->getIdciudad();
        $provincia = $ciudad->getIdprovincia();
        $form = $this->createForm(PersonaType::class, $persona);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($persona);
            $em->flush();
            $this->addFlash('success', 'Persona Modificada');

            return $this->redirectToRoute('persona', [
                'id'=>$id]);
        }

        return $this->render('persona/edit.html.twig', [
            'controller_name' => 'PersonaController',
            'formulario' => $form->createView()
        ]);
    }

    /**
     * @Route("/deletepersona/{id}", name="deletepersona")
     */
    public function delete($id)
    {
            $em = $this->getDoctrine()->getManager();
            $persona = $em->getRepository(Persona::class)->find($id);
            $em->remove($persona);
            $em->flush();

            return $this->redirectToRoute('personas');
    }

}
