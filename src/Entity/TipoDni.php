<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoDni
 *
 * @ORM\Table(name="tipo_dni")
 * @ORM\Entity
 */
class TipoDni
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
     * @ORM\Column(name="tipo", type="string", length=45, nullable=false)
     */
    private $tipo;

    /**
     * @var bool
     *
     * @ORM\Column(name="vigente", type="boolean", nullable=false, options={"default"="1"})
     */
    private $vigente = true;

    public function getId(): ?int
    {
        return $this->id;
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
