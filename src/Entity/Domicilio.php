<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domicilio
 *
 * @ORM\Table(name="domicilio", indexes={@ORM\Index(name="domicilioCiudad_idx", columns={"idCiudad"}), @ORM\Index(name="domicilioBarrio_idx", columns={"barrio"})})
 * @ORM\Entity
 */
class Domicilio
{
    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string", length=45, nullable=false)
     */
    private $calle;

    /**
     * @var int
     *
     * @ORM\Column(name="altura", type="integer", nullable=false)
     */
    private $altura;

    /**
     * @var int|null
     *
     * @ORM\Column(name="piso", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $piso = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dpto", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $dpto = 'NULL';

    /**
     * @var \Ciudad
     *
     * @ORM\ManyToOne(targetEntity="Ciudad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCiudad", referencedColumnName="id")
     * })
     */
    private $idciudad;

    /**
     * @var \Barrio
     *
     * @ORM\ManyToOne(targetEntity="Barrio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="barrio", referencedColumnName="id")
     * })
     */
    private $barrio;

    /**
     * @var \Persona
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPersona", referencedColumnName="id")
     * })
     */
    private $idpersona;

    public function getCalle(): ?string
    {
        return $this->calle;
    }

    public function setCalle(string $calle): self
    {
        $this->calle = $calle;

        return $this;
    }

    public function getAltura(): ?int
    {
        return $this->altura;
    }

    public function setAltura(int $altura): self
    {
        $this->altura = $altura;

        return $this;
    }

    public function getPiso(): ?int
    {
        return $this->piso;
    }

    public function setPiso(?int $piso): self
    {
        $this->piso = $piso;

        return $this;
    }

    public function getDpto(): ?string
    {
        return $this->dpto;
    }

    public function setDpto(?string $dpto): self
    {
        $this->dpto = $dpto;

        return $this;
    }

    public function getIdciudad(): ?Ciudad
    {
        return $this->idciudad;
    }

    public function setIdciudad(?Ciudad $idciudad): self
    {
        $this->idciudad = $idciudad;

        return $this;
    }

    public function getBarrio(): ?Barrio
    {
        return $this->barrio;
    }

    public function setBarrio(?Barrio $barrio): self
    {
        $this->barrio = $barrio;

        return $this;
    }

    public function getIdpersona(): ?Persona
    {
        return $this->idpersona;
    }

    public function setIdpersona(?Persona $idpersona): self
    {
        $this->idpersona = $idpersona;

        return $this;
    }


}
