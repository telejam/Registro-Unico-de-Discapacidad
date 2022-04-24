<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 *
 * @ORM\Table(name="persona", indexes={@ORM\Index(name="personaEstadoCivil_idx", columns={"estadoCivil"}), @ORM\Index(name="personaDNI_idx", columns={"dniTipo"}), @ORM\Index(name="personaUsuario_idx", columns={"usuario"}), @ORM\Index(name="personaNacionalidad_idx", columns={"nacionalidad"})})
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
     * @var \EstadoCivil
     *
     * @ORM\ManyToOne(targetEntity="EstadoCivil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estadoCivil", referencedColumnName="id")
     * })
     */
    private $estadocivil;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario", referencedColumnName="id")
     * })
     */
    private $usuario;

    /**
     * @var \TipoDni
     *
     * @ORM\ManyToOne(targetEntity="TipoDni")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dniTipo", referencedColumnName="id")
     * })
     */
    private $dnitipo;

    /**
     * @var \Nacionalidad
     *
     * @ORM\ManyToOne(targetEntity="Nacionalidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nacionalidad", referencedColumnName="id")
     * })
     */
    private $nacionalidad;

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

    public function getEstadocivil(): ?EstadoCivil
    {
        return $this->estadocivil;
    }

    public function setEstadocivil(?EstadoCivil $estadocivil): self
    {
        $this->estadocivil = $estadocivil;

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

}
