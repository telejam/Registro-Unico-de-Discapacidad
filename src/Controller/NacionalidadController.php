<?php

namespace App\Controller;

use App\Entity\Nacionalidad;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\SessionController;

class NacionalidadController extends AbstractController
{
    /**
     * @Route("/nacionalidad", name="nacionalidad")
     */
    public function index(Request $request, SessionController $validador): Response
    {
        $nacionalidad = new Nacionalidad();
        $idUsuario = $validador->validar($request);
        
        $form = $this->createForm(NacionalidadType::class, $nacionalidad);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em =  $this->getDoctrine()->getManager();
            $em->persist($nacionalidad);
            $em->flush();

            return $this->redirectToRoute('nacionalidad');
        }

        return $this->render('nacionalidad/index.html.twig', [
            'controller_name' => 'NacionalidadController',
            'formulario' => $form->createView()
        ]);
    }
}
