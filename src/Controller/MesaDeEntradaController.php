<?php

namespace App\Controller;

use App\Entity\Persona;
use App\Entity\Padron;
use App\Entity\Tramite;
use App\Form\PersonaType;
use App\Form\PadronType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Length;

class MesaDeEntradaController extends AbstractController
{
    /**
     * @Route("/", name="mesadeentrada")
     */
    public function index(Request $request): Response
    {
        $idSigmu = 1; //_POST()
        $id = 1;
        $em = $this->getDoctrine()->getManager();

        //$idUsuario = $em->getRepository(Usuario::class)->find($idSigmu);
        $discapacitado = $em->getRepository(Persona::class)->find($id);

        $listaIds = $this->findResponsable($em, $id);
        // foreach ($listaIds as $i)
        // {
        //     $responsables[] = $i;//$em->getRepository(Persona::class)->find($listaIds[$i]);
        // }
        $responsables = $em->getRepository(Persona::class)->findAll();
        $tramites = $em->getRepository(Tramite::class)->findAll();
        $discapacidad = $em->getRepository(Padron::class)->find($id);
        $tramite = new Tramite();

        return $this->render('mesa_de_entrada/index.html.twig', [
            'discapacitado' => $discapacitado,
            'discapacidad' => $discapacidad,
            'responsables' => $responsables,
            'tramites' => $tramites
        ]);
    }

    private function findResponsable($em, $id): array
    {
        $conn = $em->getConnection();

        $sql = '
            SELECT r.idResponsable FROM responsable_de r
            WHERE r.idPadron = :id
            ';
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery(['id' => $id]);

        return $resultSet->fetchAllAssociative();
    }
}
