<?php

namespace EuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 *
 * @ORM\Table(name="persona", indexes={@ORM\Index(name="IDX_51E5B69B2D1C5D83", columns={"usu_id"}), @ORM\Index(name="IDX_51E5B69BE8608214", columns={"ciudad_id"})})
 * @ORM\Entity
 */
class Persona
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pers_nombre", type="string", length=30, nullable=false)
     */
    private $persNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="pers_dni", type="string", length=15, nullable=false)
     */
    private $persDni;

    /**
     * @var string
     *
     * @ORM\Column(name="pers_apellido", type="string", length=30, nullable=false)
     */
    private $persApellido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pers_fec_nac", type="date", nullable=false)
     */
    private $persFecNac;

    /**
     * @var string
     *
     * @ORM\Column(name="pers_sexo", type="string", length=10, nullable=false)
     */
    private $persSexo;

    /**
     * @var string
     *
     * @ORM\Column(name="pers_domicilio", type="string", length=60, nullable=false)
     */
    private $persDomicilio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pers_fecha_mod", type="datetime", nullable=false)
     */
    private $persFechaMod;

    /**
     * @var integer
     *
     * @ORM\Column(name="pers_alta", type="integer", nullable=true)
     */
    private $persAlta = '1';

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usu_id", referencedColumnName="id")
     * })
     */
    private $usu;

    /**
     * @var \Ciudad
     *
     * @ORM\ManyToOne(targetEntity="Ciudad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ciudad_id", referencedColumnName="id")
     * })
     */
    private $ciudad;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set persNombre
     *
     * @param string $persNombre
     *
     * @return Persona
     */
    public function setPersNombre($persNombre)
    {
        $this->persNombre = $persNombre;

        return $this;
    }

    /**
     * Get persNombre
     *
     * @return string
     */
    public function getPersNombre()
    {
        return $this->persNombre;
    }

    /**
     * Set persDni
     *
     * @param string $persDni
     *
     * @return Persona
     */
    public function setPersDni($persDni)
    {
        $this->persDni = $persDni;

        return $this;
    }

    /**
     * Get persDni
     *
     * @return string
     */
    public function getPersDni()
    {
        return $this->persDni;
    }

    /**
     * Set persApellido
     *
     * @param string $persApellido
     *
     * @return Persona
     */
    public function setPersApellido($persApellido)
    {
        $this->persApellido = $persApellido;

        return $this;
    }

    /**
     * Get persApellido
     *
     * @return string
     */
    public function getPersApellido()
    {
        return $this->persApellido;
    }

    /**
     * Set persFecNac
     *
     * @param \DateTime $persFecNac
     *
     * @return Persona
     */
    public function setPersFecNac($persFecNac)
    {
        $this->persFecNac = $persFecNac;

        return $this;
    }

    /**
     * Get persFecNac
     *
     * @return \DateTime
     */
    public function getPersFecNac()
    {
        return $this->persFecNac;
    }

    /**
     * Set persSexo
     *
     * @param string $persSexo
     *
     * @return Persona
     */
    public function setPersSexo($persSexo)
    {
        $this->persSexo = $persSexo;

        return $this;
    }

    /**
     * Get persSexo
     *
     * @return string
     */
    public function getPersSexo()
    {
        return $this->persSexo;
    }

    /**
     * Set persDomicilio
     *
     * @param string $persDomicilio
     *
     * @return Persona
     */
    public function setPersDomicilio($persDomicilio)
    {
        $this->persDomicilio = $persDomicilio;

        return $this;
    }

    /**
     * Get persDomicilio
     *
     * @return string
     */
    public function getPersDomicilio()
    {
        return $this->persDomicilio;
    }

    /**
     * Set persFechaMod
     *
     * @param \DateTime $persFechaMod
     *
     * @return Persona
     */
    public function setPersFechaMod($persFechaMod)
    {
        $this->persFechaMod = $persFechaMod;

        return $this;
    }

    /**
     * Get persFechaMod
     *
     * @return \DateTime
     */
    public function getPersFechaMod()
    {
        return $this->persFechaMod;
    }

    /**
     * Set persAlta
     *
     * @param integer $persAlta
     *
     * @return Persona
     */
    public function setPersAlta($persAlta)
    {
        $this->persAlta = $persAlta;

        return $this;
    }

    /**
     * Get persAlta
     *
     * @return integer
     */
    public function getPersAlta()
    {
        return $this->persAlta;
    }

    /**
     * Set usu
     *
     * @param \EuBundle\Entity\Usuario $usu
     *
     * @return Persona
     */
    public function setUsu(\EuBundle\Entity\Usuario $usu = null)
    {
        $this->usu = $usu;

        return $this;
    }

    /**
     * Get usu
     *
     * @return \EuBundle\Entity\Usuario
     */
    public function getUsu()
    {
        return $this->usu;
    }

    /**
     * Set ciudad
     *
     * @param \EuBundle\Entity\Ciudad $ciudad
     *
     * @return Persona
     */
    public function setCiudad(\EuBundle\Entity\Ciudad $ciudad = null)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return \EuBundle\Entity\Ciudad
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }
}
