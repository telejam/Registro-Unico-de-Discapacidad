<?php

namespace App\Controller;

use App\Entity\Nacionalidad;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NacionalidadController extends AbstractController
{
    /**
     * @Route("/nacionalidad", name="nacionalidad")
     */
    public function index(Request $request): Response
    {
        $nacionalidad = new Nacionalidad();
        $form = $this->createForm(NacionalidadType::class, $nacionalidad);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em =  $this->getDoctrine()->getManager();
            $em->persist($nacionalidad);
            $em->flush();
            $this->addFlash('success', 'Nacionalidad agregada');

            return $this->redirectToRoute('nacionalidad');
        }

        return $this->render('nacionalidad/index.html.twig', [
            'controller_name' => 'NacionalidadController',
            'formulario' => $form->createView()
        ]);
    }
}
