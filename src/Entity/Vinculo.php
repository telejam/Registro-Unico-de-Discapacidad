<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vinculo
 *
 * @ORM\Table(name="vinculo")
 * @ORM\Entity
 */
class Vinculo
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
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

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

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

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
