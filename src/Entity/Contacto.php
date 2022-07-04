<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contacto
 *
 * @ORM\Table(name="contacto", indexes={@ORM\Index(name="contactoPersona_idx", columns={"persona"})})
 * @ORM\Entity
 */
class Contacto
{
    /**
     * @var string
     *
     * @ORM\Column(name="contacto", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $contacto;

    /**
     * @var Persona
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="persona", referencedColumnName="id")
     * })
     */
    private $persona;

    /**
     * @var bool
     *
     * @ORM\Column(name="vigente", type="boolean", nullable=false, options={"default"="1"})
     */
    private $vigente = true;

    public function getContacto(): ?string
    {
        return $this->contacto;
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
