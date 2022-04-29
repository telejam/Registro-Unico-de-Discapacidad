<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudad
 *
 * @ORM\Table(name="ciudad", indexes={@ORM\Index(name="ciudadProvincia_idx", columns={"idProvincia"})})
 * @ORM\Entity
 */
class Ciudad
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
     * @ORM\Column(name="ciudad", type="string", length=45, nullable=false)
     */
    private $ciudad;

    /**
     * @var Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProvincia", referencedColumnName="id")
     * })
     */
    private $idprovincia;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(string $ciudad): self
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function getIdprovincia(): ?Provincia
    {
        return $this->idprovincia;
    }

    public function setIdprovincia(?Provincia $idprovincia): self
    {
        $this->idprovincia = $idprovincia;

        return $this;
    }


}
