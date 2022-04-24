<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nacionalidad
 *
 * @ORM\Table(name="nacionalidad")
 * @ORM\Entity
 */
class Nacionalidad
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
     * @ORM\Column(name="pais", type="string", length=45, nullable=false)
     */
    private $pais;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(string $pais): self
    {
        $this->pais = $pais;

        return $this;
    }


}
