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
     * @var \DateTime
     *
     * @ORM\Column(name="fechaSeguimiento", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fechaseguimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=100, nullable=false)
     */
    private $observacion;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario", referencedColumnName="id")
     * })
     */
    private $usuario;

    /**
     * @var \Tramite
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Tramite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="numeroExpediente", referencedColumnName="numeroExpediente")
     * })
     */
    private $numeroexpediente;

    public function getFechaseguimiento(): ?\DateTimeInterface
    {
        return $this->fechaseguimiento;
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

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getNumeroexpediente(): ?Tramite
    {
        return $this->numeroexpediente;
    }

    public function setNumeroexpediente(?Tramite $numeroexpediente): self
    {
        $this->numeroexpediente = $numeroexpediente;

        return $this;
    }


}
