<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Discapacidad
 *
 * @ORM\Table(name="discapacidad", indexes={@ORM\Index(name="discapacidadTipo_idx", columns={"tipo"})})
 * @ORM\Entity
 */
class Discapacidad
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
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=false)
     */
    private $descripcion;

    /**
     * @var bool
     *
     * @ORM\Column(name="vigente", type="boolean", nullable=false)
     */
    private $vigente;

    /**
     * @var \TipoDiscapacidad
     *
     * @ORM\ManyToOne(targetEntity="TipoDiscapacidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo", referencedColumnName="id")
     * })
     */
    private $tipo;

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

    public function getVigente(): ?bool
    {
        return $this->vigente;
    }

    public function setVigente(bool $vigente): self
    {
        $this->vigente = $vigente;

        return $this;
    }

    public function getTipo(): ?TipoDiscapacidad
    {
        return $this->tipo;
    }

    public function setTipo(?TipoDiscapacidad $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }


}
