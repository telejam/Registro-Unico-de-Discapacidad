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
     * @Route("/persona", name="persona")
     */
    public function index(Request $request): Response
    {
        $persona = new Persona();
        $form = $this->createForm(PersonaType::class, $persona);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em =  $this->getDoctrine()->getManager();
            $em->persist($persona);
            $em->flush();
            $this->addFlash('success', 'Persona agregada');

            return $this->redirectToRoute('persona');
        }

        return $this->render('persona/index.html.twig', [
            'controller_name' => 'PersonaController',
            'formulario' => $form->createView()
        ]);
    }
}
