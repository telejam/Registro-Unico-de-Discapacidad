<?php

namespace App\Controller;

use App\Entity\Persona;
use App\Entity\Padron;
use App\Entity\Tramite;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;

class MesaDeEntradaController extends AbstractController
{
    /**
     * @Route("/", name="mesadeentrada")
     */
    public function index(Request $request): Response
    {
        $idSigmu = $_POST["idSigmu"];

        $em = $this->getDoctrine()->getManager();

        $idUser = $idSigmu; //$em->getRepository(Usuario::class)->find($idSigmu);
        $user = 'el Jefe'; //$em->getRepository(Usuario::class)->find($idSigmu);

        $_SESSION['userid'] = $idUser;
        $_SESSION['username'] = $user;

        $userName = $_SESSION['username'];
        $idUsuario = $_SESSION['userid'];

        /////////////////////////////
        $id = 1;
        /////////////////////////////

        $discapacitado = $em->getRepository(Persona::class)->find($id);


        $discapacidad = $em->getRepository(Padron::class)->find($id);
        $responsables = $discapacidad->getIdresponsable();
        // $tramites = $em->getRepository(Tramite::class)->findAll();
        $tramites = $em->getRepository(Tramite::class)->findBy(['persona' => $id]);

        return $this->render('mesa_de_entrada/index.html.twig', [
            'username' => $userName,
            'userid' => $idUsuario,
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
