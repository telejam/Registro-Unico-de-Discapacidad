<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Padron
 *
 * @ORM\Table(name="padron", indexes={@ORM\Index(name="padronObraSocial_idx", columns={"obraSocial"}), @ORM\Index(name="padronDiscapacidad_idx", columns={"discapacidad"})})
 * @ORM\Entity
 */
class Padron
{
    /**
     * @var int
     *
     * @ORM\Column(name="cuil", type="integer", nullable=false)
     */
    private $cuil;

    /**
     * @var string
     *
     * @ORM\Column(name="cud", type="string", length=60, nullable=false)
     */
    private $cud;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cudVigencia", type="date", nullable=false)
     */
    private $cudvigencia;

    /**
     * @var string
     *
     * @ORM\Column(name="cudDiagnostico", type="string", length=50, nullable=false)
     */
    private $cuddiagnostico;

    /**
     * @var string
     *
     * @ORM\Column(name="causa", type="string", length=100, nullable=false)
     */
    private $causa;

    /**
     * @var string
     *
     * @ORM\Column(name="pension", type="string", length=100, nullable=false)
     */
    private $pension;

    /**
     * @var string
     *
     * @ORM\Column(name="nivelInstruccion", type="string", length=45, nullable=false)
     */
    private $nivelinstruccion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoModalidad", type="string", length=45, nullable=false)
     */
    private $tipomodalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="experienciaLaboral", type="string", length=100, nullable=false)
     */
    private $experiencialaboral;

    /**
     * @var string
     *
     * @ORM\Column(name="actividades", type="string", length=100, nullable=false)
     */
    private $actividades;

    /**
     * @var string
     *
     * @ORM\Column(name="nivelEducacion", type="string", length=45, nullable=false)
     */
    private $niveleducacion;

    /**
     * @var string
     *
     * @ORM\Column(name="residencia", type="string", length=45, nullable=false)
     */
    private $residencia;

    /**
     * @var ObraSocial
     *
     * @ORM\ManyToOne(targetEntity="ObraSocial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="obraSocial", referencedColumnName="id")
     * })
     */
    private $obrasocial;

    /**
     * @var Discapacidad
     *
     * @ORM\ManyToOne(targetEntity="Discapacidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="discapacidad", referencedColumnName="id")
     * })
     */
    private $discapacidad;

    /**
     * @var Persona
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Persona", mappedBy="idpadron")
     */
    private $idresponsable;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idresponsable = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getCuil(): ?int
    {
        return $this->cuil;
    }

    public function setCuil(int $cuil): self
    {
        $this->cuil = $cuil;

        return $this;
    }

    public function getCud(): ?string
    {
        return $this->cud;
    }

    public function setCud(string $cud): self
    {
        $this->cud = $cud;

        return $this;
    }

    public function getCudvigencia(): ?\DateTimeInterface
    {
        return $this->cudvigencia;
    }

    public function setCudvigencia(\DateTimeInterface $cudvigencia): self
    {
        $this->cudvigencia = $cudvigencia;

        return $this;
    }

    public function getCuddiagnostico(): ?string
    {
        return $this->cuddiagnostico;
    }

    public function setCuddiagnostico(string $cuddiagnostico): self
    {
        $this->cuddiagnostico = $cuddiagnostico;

        return $this;
    }

    public function getCausa(): ?string
    {
        return $this->causa;
    }

    public function setCausa(string $causa): self
    {
        $this->causa = $causa;

        return $this;
    }

    public function getPension(): ?string
    {
        return $this->pension;
    }

    public function setPension(string $pension): self
    {
        $this->pension = $pension;

        return $this;
    }

    public function getNivelinstruccion(): ?string
    {
        return $this->nivelinstruccion;
    }

    public function setNivelinstruccion(string $nivelinstruccion): self
    {
        $this->nivelinstruccion = $nivelinstruccion;

        return $this;
    }

    public function getTipomodalidad(): ?string
    {
        return $this->tipomodalidad;
    }

    public function setTipomodalidad(string $tipomodalidad): self
    {
        $this->tipomodalidad = $tipomodalidad;

        return $this;
    }

    public function getExperiencialaboral(): ?string
    {
        return $this->experiencialaboral;
    }

    public function setExperiencialaboral(string $experiencialaboral): self
    {
        $this->experiencialaboral = $experiencialaboral;

        return $this;
    }

    public function getActividades(): ?string
    {
        return $this->actividades;
    }

    public function setActividades(string $actividades): self
    {
        $this->actividades = $actividades;

        return $this;
    }

    public function getNiveleducacion(): ?string
    {
        return $this->niveleducacion;
    }

    public function setNiveleducacion(string $niveleducacion): self
    {
        $this->niveleducacion = $niveleducacion;

        return $this;
    }

    public function getResidencia(): ?string
    {
        return $this->residencia;
    }

    public function setResidencia(string $residencia): self
    {
        $this->residencia = $residencia;

        return $this;
    }

    public function getObrasocial(): ?ObraSocial
    {
        return $this->obrasocial;
    }

    public function setObrasocial(?ObraSocial $obrasocial): self
    {
        $this->obrasocial = $obrasocial;

        return $this;
    }

    public function getDiscapacidad(): ?Discapacidad
    {
        return $this->discapacidad;
    }

    public function setDiscapacidad(?Discapacidad $discapacidad): self
    {
        $this->discapacidad = $discapacidad;

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

    /**
     * @return Collection<int, Persona>
     */
    public function getIdresponsable(): Collection
    {
        return $this->idresponsable;
    }

    public function addIdresponsable(Persona $idresponsable): self
    {
        if (!$this->idresponsable->contains($idresponsable)) {
            $this->idresponsable[] = $idresponsable;
            $idresponsable->addIdpadron($this);
        }

        return $this;
    }

    public function removeIdresponsable(Persona $idresponsable): self
    {
        if ($this->idresponsable->removeElement($idresponsable)) {
            $idresponsable->removeIdpadron($this);
        }

        return $this;
    }

}
