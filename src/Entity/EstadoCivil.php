<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadoCivil
 *
 * @ORM\Table(name="estado_civil")
 * @ORM\Entity
 */
class EstadoCivil
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
     * @ORM\Column(name="tipoEstado", type="string", length=45, nullable=false)
     */
    private $tipoestado;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipoestado(): ?string
    {
        return $this->tipoestado;
    }

    public function setTipoestado(string $tipoestado): self
    {
        $this->tipoestado = $tipoestado;

        return $this;
    }


}
