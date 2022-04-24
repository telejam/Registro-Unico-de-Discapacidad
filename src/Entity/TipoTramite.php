<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoTramite
 *
 * @ORM\Table(name="tipo_tramite")
 * @ORM\Entity
 */
class TipoTramite
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=45, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=10, nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="intervenciones", type="string", length=45, nullable=false)
     */
    private $intervenciones;

    /**
     * @var bool
     *
     * @ORM\Column(name="vigente", type="boolean", nullable=false)
     */
    private $vigente;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getIntervenciones(): ?string
    {
        return $this->intervenciones;
    }

    public function setIntervenciones(string $intervenciones): self
    {
        $this->intervenciones = $intervenciones;

        return $this;
    }

    public function getVigente(): ?bool
    {
        return $this->vigente;
    }

    public function setVigente(bool $vigente): self
    {
        $this->vigente = $vigente;

        return $this;
    }


}
