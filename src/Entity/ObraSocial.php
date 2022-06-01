<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObraSocial
 *
 * @ORM\Table(name="obra_social")
 * @ORM\Entity
 */
class ObraSocial
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
     * @ORM\Column(name="denominacion", type="string", length=200, nullable=false)
     */
    private $denominacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $nombre = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="domicilio", type="string", length=100, nullable=false)
     */
    private $domicilio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observacion", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $observacion = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefonoNumero", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $telefononumero = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="vigente", type="boolean", nullable=false)
     */
    private $vigente = true;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDenominacion(): ?string
    {
        return $this->denominacion;
    }

    public function setDenominacion(string $denominacion): self
    {
        $this->denominacion = $denominacion;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDomicilio(): ?string
    {
        return $this->domicilio;
    }

    public function setDomicilio(string $domicilio): self
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    public function getObservacion(): ?string
    {
        return $this->observacion;
    }

    public function setObservacion(?string $observacion): self
    {
        $this->observacion = $observacion;

        return $this;
    }

    public function getTelefononumero(): ?string
    {
        return $this->telefononumero;
    }

    public function setTelefononumero(?string $telefononumero): self
    {
        $this->telefononumero = $telefononumero;

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
