<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tramite
 *
 * @ORM\Table(name="tramite", indexes={@ORM\Index(name="tramiteUsuario_idx", columns={"usuario"}), @ORM\Index(name="seguimientoTipoTramite_idx", columns={"tipoTramite"}), @ORM\Index(name="tramiteEstadoTramite_idx", columns={"estadoTramite"}), @ORM\Index(name="tramitePersona_idx", columns={"persona"})})
 * @ORM\Entity
 */
class Tramite
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
     * @ORM\Column(name="fechaInicio", type="date", nullable=false)
     */
    private $fechainicio;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=100, nullable=false)
     */
    private $observacion;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroExpediente", type="integer", nullable=false)
     */
    private $numeroexpediente;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaResolucion", type="date", nullable=true, options={"default"="NULL"})
     */
    private $fecharesolucion = NULL;

    /**
     * @var Persona
     *
     * @ORM\ManyToOne(targetEntity="Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="persona", referencedColumnName="id")
     * })
     */
    private $persona;

    /**
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario", referencedColumnName="id")
     * })
     */
    private $usuario;

    /**
     * @var EstadoTramite
     *
     * @ORM\ManyToOne(targetEntity="EstadoTramite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estadoTramite", referencedColumnName="id")
     * })
     */
    private $estadotramite;

    /**
     * @var TipoTramite
     *
     * @ORM\ManyToOne(targetEntity="TipoTramite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipoTramite", referencedColumnName="id")
     * })
     */
    private $tipotramite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechainicio(): ?\DateTimeInterface
    {
        return $this->fechainicio;
    }

    public function setFechainicio(\DateTimeInterface $fechainicio): self
    {
        $this->fechainicio = $fechainicio;

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

    public function getNumeroexpediente(): ?int
    {
        return $this->numeroexpediente;
    }

    public function setNumeroexpediente(int $numeroexpediente): self
    {
        $this->numeroexpediente = $numeroexpediente;
        return $this;
    }

    public function getFecharesolucion(): ?\DateTimeInterface
    {
        return $this->fecharesolucion;
    }

    public function setFecharesolucion(?\DateTimeInterface $fecharesolucion): self
    {
        $this->fecharesolucion = $fecharesolucion;

        return $this;
    }

    public function getPersona(): ?Persona
    {
        return $this->persona;
    }

    public function setPersona(?Persona $persona): self
    {
        $this->persona = $persona;

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

    public function getEstadotramite(): ?EstadoTramite
    {
        return $this->estadotramite;
    }

    public function setEstadotramite(?EstadoTramite $estadotramite): self
    {
        $this->estadotramite = $estadotramite;

        return $this;
    }

    public function getTipotramite(): ?TipoTramite
    {
        return $this->tipotramite;
    }

    public function setTipotramite(?TipoTramite $tipotramite): self
    {
        $this->tipotramite = $tipotramite;

        return $this;
    }


}
