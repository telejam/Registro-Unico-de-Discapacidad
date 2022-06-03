<?php

namespace App\Controller;

use App\Entity\EstadoCivil;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EstadoCivilController extends AbstractController
{
    /**
     * @Route("/estadocivil", name="app_estado_civil")
     */
    public function index(Request $request): Response
    {
        $estadoCivil = new EstadoCivil();
        $form = $this->createForm(EstadoCivilType::class, $estadoCivil);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em =  $this->getDoctrine()->getManager();
            $em->persist($estadoCivil);
            $em->flush();

            return $this->redirectToRoute('estadocivil');
        }

        return $this->render('estado_civil/index.html.twig', [
            'controller_name' => 'EstadoCivilController',
            'formulario' => $form->createView()
        ]);
    }
}
