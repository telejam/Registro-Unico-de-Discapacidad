<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 *
 * @ORM\Table(name="persona", indexes={@ORM\Index(name="personaCiudad_idx", columns={"ciudad"}), @ORM\Index(name="personaNacionalidad_idx", columns={"nacionalidad"}), @ORM\Index(name="personaBarrio_idx", columns={"barrio"}), @ORM\Index(name="personaEstadoCivil_idx", columns={"estadoCivil"}), @ORM\Index(name="personaDNI_idx", columns={"dniTipo"}), @ORM\Index(name="personaProvincia_idx", columns={"provincia"}), @ORM\Index(name="personaUsuario_idx", columns={"usuario"})})
 * @ORM\Entity
 */
class Persona
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
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=100, nullable=false)
     */
    private $apellido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaNacimiento", type="date", nullable=false)
     */
    private $fechanacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=45, nullable=false)
     */
    private $sexo;

    /**
     * @var int
     *
     * @ORM\Column(name="dniTramite", type="integer", nullable=false)
     */
    private $dnitramite;

    /**
     * @var int
     *
     * @ORM\Column(name="dniNumero", type="integer", nullable=false)
     */
    private $dninumero;

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
    private $dpto = NULL;

    /**
     * @var Ciudad
     *
     * @ORM\ManyToOne(targetEntity="Ciudad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ciudad", referencedColumnName="id")
     * })
     */
    private $ciudad;

    /**
     * @var EstadoCivil
     *
     * @ORM\ManyToOne(targetEntity="EstadoCivil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estadoCivil", referencedColumnName="id")
     * })
     */
    private $estadocivil;

    /**
     * @var Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provincia", referencedColumnName="id")
     * })
     */
    private $provincia;

    /**
     * @var Barrio
     *
     * @ORM\ManyToOne(targetEntity="Barrio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="barrio", referencedColumnName="id")
     * })
     */
    private $barrio;

    /**
     * @var TipoDni
     *
     * @ORM\ManyToOne(targetEntity="TipoDni")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dniTipo", referencedColumnName="id")
     * })
     */
    private $dnitipo;

    /**
     * @var Nacionalidad
     *
     * @ORM\ManyToOne(targetEntity="Nacionalidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nacionalidad", referencedColumnName="id")
     * })
     */
    private $nacionalidad;

    /**
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario", referencedColumnName="id")
     * })
     */
    private $usuario;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Padron", inversedBy="idresponsable")
     * @ORM\JoinTable(name="responsable_de",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idResponsable", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idPadron", referencedColumnName="id")
     *   }
     * )
     */
    private $idpadron;

    /**
     * @var bool
     *
     * @ORM\Column(name="vigente", type="boolean", nullable=false, options={"default"="1"})
     */
    private $vigente = true;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idpadron = new \Doctrine\Common\Collections\ArrayCollection();
    }

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

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getFechanacimiento(): ?\DateTimeInterface
    {
        return $this->fechanacimiento;
    }

    public function setFechanacimiento(\DateTimeInterface $fechanacimiento): self
    {
        $this->fechanacimiento = $fechanacimiento;

        return $this;
    }

    public function getSexo(): ?string
    {
        return $this->sexo;
    }

    public function setSexo(string $sexo): self
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function getDnitramite(): ?int
    {
        return $this->dnitramite;
    }

    public function setDnitramite(int $dnitramite): self
    {
        $this->dnitramite = $dnitramite;

        return $this;
    }

    public function getDninumero(): ?int
    {
        return $this->dninumero;
    }

    public function setDninumero(int $dninumero): self
    {
        $this->dninumero = $dninumero;

        return $this;
    }

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

    public function getCiudad(): ?Ciudad
    {
        return $this->ciudad;
    }

    public function setCiudad(?Ciudad $ciudad): self
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function getEstadocivil(): ?EstadoCivil
    {
        return $this->estadocivil;
    }

    public function setEstadocivil(?EstadoCivil $estadocivil): self
    {
        $this->estadocivil = $estadocivil;

        return $this;
    }

    public function getProvincia(): ?Provincia
    {
        return $this->provincia;
    }

    public function setProvincia(?Provincia $provincia): self
    {
        $this->provincia = $provincia;

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

    public function getDnitipo(): ?TipoDni
    {
        return $this->dnitipo;
    }

    public function setDnitipo(?TipoDni $dnitipo): self
    {
        $this->dnitipo = $dnitipo;

        return $this;
    }

    public function getNacionalidad(): ?Nacionalidad
    {
        return $this->nacionalidad;
    }

    public function setNacionalidad(?Nacionalidad $nacionalidad): self
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * @return Collection<int, Padron>
     */
    public function getIdpadron(): Collection
    {
        return $this->idpadron;
    }

    public function addIdpadron(Padron $idpadron): self
    {
        if (!$this->idpadron->contains($idpadron)) {
            $this->idpadron[] = $idpadron;
        }

        return $this;
    }

    public function removeIdpadron(Padron $idpadron): self
    {
        $this->idpadron->removeElement($idpadron);

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
