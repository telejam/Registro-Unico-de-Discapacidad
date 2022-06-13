<?php

namespace App\Controller;

use App\Entity\TipoDni;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\SessionController;

class TipoDniController extends AbstractController
{
    /**
     * @Route("/tipodni", name="tipodni")
     */
    public function index(Request $request, SessionController $validador): Response
    {
        $tipoDni = new TipoDni();
        $idUsuario = $validador->validar($request);
        
        $form = $this->createForm(PersonaType::class, $tipoDni);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em =  $this->getDoctrine()->getManager();
            $em->persist($tipoDni);
            $em->flush();

            return $this->redirectToRoute('tipodni');
        }

        return $this->render('tipo_dni/index.html.twig', [
            'controller_name' => 'TipoDniController',
        ]);
    }
}
