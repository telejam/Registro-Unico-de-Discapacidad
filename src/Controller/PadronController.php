<?php

namespace App\Controller;

use App\Entity\Padron;
use App\Form\PadronType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PadronController extends AbstractController
{
    /**
     * @Route("/padron", name="app_padron")
     */
    public function index(Request $request): Response
    {
        $padron = new Padron();
        $form = $this->createForm(PadronType::class, $padron);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($padron);
            $em->flush();
            $this->addFlash(type: 'exito', message: 'Se ha registrado exitosamente.');
        }
        return $this->render('padron/index.html.twig', [
            'controller_name' => 'PadronController',
            'formulario'=>$form->createView()
        ]);
    }
}
