<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contacto
 *
 * @ORM\Table(name="contacto")
 * @ORM\Entity
 */
class Contacto
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $email = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="tipoTelefono", type="string", length=10, nullable=false)
     */
    private $tipotelefono;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroTelefono", type="string", length=10, nullable=false)
     */
    private $numerotelefono;

    /**
     * @var \Persona
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTipotelefono(): ?string
    {
        return $this->tipotelefono;
    }

    public function setTipotelefono(string $tipotelefono): self
    {
        $this->tipotelefono = $tipotelefono;

        return $this;
    }

    public function getNumerotelefono(): ?string
    {
        return $this->numerotelefono;
    }

    public function setNumerotelefono(string $numerotelefono): self
    {
        $this->numerotelefono = $numerotelefono;

        return $this;
    }

    public function getId(): ?Persona
    {
        return $this->id;
    }

    public function setId(?Persona $id): self
    {
        $this->id = $id;

        return $this;
    }


}
