<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModificacionTramite
 *
 * @ORM\Table(name="modificacion_tramite", indexes={@ORM\Index(name="modificacionTramite_idx", columns={"numeroExpediente"}), @ORM\Index(name="modificacionUsuario_idx", columns={"usuario"})})
 * @ORM\Entity
 */
class ModificacionTramite
{
    /**
     * @var int
     * 
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaSeguimiento", type="date", nullable=false)
     */
    private $fechaseguimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=100, nullable=false)
     */
    private $observacion;

    /**
     * @var Tramite
     *
     * @ORM\ManyToOne(targetEntity="Tramite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tramite", referencedColumnName="id")
     * })
     */
    private $tramite;

    /**
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario", referencedColumnName="id")
     * })
     */
    private $usuario;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaseguimiento(): ?\DateTimeInterface
    {
        return $this->fechaseguimiento;
    }

    public function setFechaseguimiento(\DateTimeInterface $fechaseguimiento): self
    {
        $this->fechaseguimiento = $fechaseguimiento;

        return $this;
    }

    public function getObservacion(): ?string
    {
        return $this->observacion;
    }

    public function setObservacion(string $observacion): self
    {
        $this->observacion = $observacion;

        return $this;
    }

    public function getTramite(): ?Tramite
    {
        return $this->tramite;
    }

    public function setTramite(?Tramite $tramite): self
    {
        $this->tramite = $tramite;

        return $this;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }


}
