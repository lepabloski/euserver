<?php

namespace EuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Negocio
 *
 * @ORM\Table(name="negocio", indexes={@ORM\Index(name="negocio_sucu_id", columns={"negocio_sucu_id"}), @ORM\Index(name="ciudad_id", columns={"ciudad_id"}), @ORM\Index(name="usu_crea_id", columns={"usu_crea_id"}), @ORM\Index(name="categoria_id", columns={"categoria_id"})})
 * @ORM\Entity
 */
class Negocio
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
     * @ORM\Column(name="negocio_nombre", type="string", length=30, nullable=false)
     */
    private $negocioNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="negocio_domicilio", type="string", length=50, nullable=false)
     */
    private $negocioDomicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="negocio_telefono", type="string", length=30, nullable=true)
     */
    private $negocioTelefono;

    /**
     * @var string
     *
     * @ORM\Column(name="negocio_celular", type="string", length=30, nullable=true)
     */
    private $negocioCelular;

    /**
     * @var string
     *
     * @ORM\Column(name="negocio_email", type="string", length=30, nullable=true)
     */
    private $negocioEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="negocio_nom_duenio", type="string", length=30, nullable=true)
     */
    private $negocioNomDuenio;

    /**
     * @var string
     *
     * @ORM\Column(name="negocio_gps_latitud", type="string", length=50, nullable=true)
     */
    private $negocioGpsLatitud;

    /**
     * @var string
     *
     * @ORM\Column(name="negocio_gps_longitud", type="string", length=50, nullable=true)
     */
    private $negocioGpsLongitud;

    /**
     * @var string
     *
     * @ORM\Column(name="negocio_foto", type="string", length=50, nullable=true)
     */
    private $negocioFoto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="negocio_fec_registro", type="date", nullable=false)
     */
    private $negocioFecRegistro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="negocio_fec_mod", type="datetime", nullable=false)
     */
    private $negocioFecMod;

    /**
     * @var integer
     *
     * @ORM\Column(name="negocio_alta", type="integer", nullable=true)
     */
    private $negocioAlta = '1';

    /**
     * @var \Negocio
     *
     * @ORM\ManyToOne(targetEntity="Negocio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="negocio_sucu_id", referencedColumnName="id")
     * })
     */
    private $negocioSucu;

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
     * @var \Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     * })
     */
    private $categoria;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usu_crea_id", referencedColumnName="id")
     * })
     */
    private $usuCrea;



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
     * Set negocioNombre
     *
     * @param string $negocioNombre
     *
     * @return Negocio
     */
    public function setNegocioNombre($negocioNombre)
    {
        $this->negocioNombre = $negocioNombre;
    
        return $this;
    }

    /**
     * Get negocioNombre
     *
     * @return string
     */
    public function getNegocioNombre()
    {
        return $this->negocioNombre;
    }

    /**
     * Set negocioDomicilio
     *
     * @param string $negocioDomicilio
     *
     * @return Negocio
     */
    public function setNegocioDomicilio($negocioDomicilio)
    {
        $this->negocioDomicilio = $negocioDomicilio;
    
        return $this;
    }

    /**
     * Get negocioDomicilio
     *
     * @return string
     */
    public function getNegocioDomicilio()
    {
        return $this->negocioDomicilio;
    }

    /**
     * Set negocioTelefono
     *
     * @param string $negocioTelefono
     *
     * @return Negocio
     */
    public function setNegocioTelefono($negocioTelefono)
    {
        $this->negocioTelefono = $negocioTelefono;
    
        return $this;
    }

    /**
     * Get negocioTelefono
     *
     * @return string
     */
    public function getNegocioTelefono()
    {
        return $this->negocioTelefono;
    }

    /**
     * Set negocioCelular
     *
     * @param string $negocioCelular
     *
     * @return Negocio
     */
    public function setNegocioCelular($negocioCelular)
    {
        $this->negocioCelular = $negocioCelular;
    
        return $this;
    }

    /**
     * Get negocioCelular
     *
     * @return string
     */
    public function getNegocioCelular()
    {
        return $this->negocioCelular;
    }

    /**
     * Set negocioEmail
     *
     * @param string $negocioEmail
     *
     * @return Negocio
     */
    public function setNegocioEmail($negocioEmail)
    {
        $this->negocioEmail = $negocioEmail;
    
        return $this;
    }

    /**
     * Get negocioEmail
     *
     * @return string
     */
    public function getNegocioEmail()
    {
        return $this->negocioEmail;
    }

    /**
     * Set negocioNomDuenio
     *
     * @param string $negocioNomDuenio
     *
     * @return Negocio
     */
    public function setNegocioNomDuenio($negocioNomDuenio)
    {
        $this->negocioNomDuenio = $negocioNomDuenio;
    
        return $this;
    }

    /**
     * Get negocioNomDuenio
     *
     * @return string
     */
    public function getNegocioNomDuenio()
    {
        return $this->negocioNomDuenio;
    }

    /**
     * Set negocioGpsLatitud
     *
     * @param string $negocioGpsLatitud
     *
     * @return Negocio
     */
    public function setNegocioGpsLatitud($negocioGpsLatitud)
    {
        $this->negocioGpsLatitud = $negocioGpsLatitud;
    
        return $this;
    }

    /**
     * Get negocioGpsLatitud
     *
     * @return string
     */
    public function getNegocioGpsLatitud()
    {
        return $this->negocioGpsLatitud;
    }

    /**
     * Set negocioGpsLongitud
     *
     * @param string $negocioGpsLongitud
     *
     * @return Negocio
     */
    public function setNegocioGpsLongitud($negocioGpsLongitud)
    {
        $this->negocioGpsLongitud = $negocioGpsLongitud;
    
        return $this;
    }

    /**
     * Get negocioGpsLongitud
     *
     * @return string
     */
    public function getNegocioGpsLongitud()
    {
        return $this->negocioGpsLongitud;
    }

    /**
     * Set negocioFoto
     *
     * @param string $negocioFoto
     *
     * @return Negocio
     */
    public function setNegocioFoto($negocioFoto)
    {
        $this->negocioFoto = $negocioFoto;
    
        return $this;
    }

    /**
     * Get negocioFoto
     *
     * @return string
     */
    public function getNegocioFoto()
    {
        return $this->negocioFoto;
    }

    /**
     * Set negocioFecRegistro
     *
     * @param \DateTime $negocioFecRegistro
     *
     * @return Negocio
     */
    public function setNegocioFecRegistro($negocioFecRegistro)
    {
        $this->negocioFecRegistro = $negocioFecRegistro;
    
        return $this;
    }

    /**
     * Get negocioFecRegistro
     *
     * @return \DateTime
     */
    public function getNegocioFecRegistro()
    {
        return $this->negocioFecRegistro;
    }

    /**
     * Set negocioFecMod
     *
     * @param \DateTime $negocioFecMod
     *
     * @return Negocio
     */
    public function setNegocioFecMod($negocioFecMod)
    {
        $this->negocioFecMod = $negocioFecMod;
    
        return $this;
    }

    /**
     * Get negocioFecMod
     *
     * @return \DateTime
     */
    public function getNegocioFecMod()
    {
        return $this->negocioFecMod;
    }

    /**
     * Set negocioAlta
     *
     * @param integer $negocioAlta
     *
     * @return Negocio
     */
    public function setNegocioAlta($negocioAlta)
    {
        $this->negocioAlta = $negocioAlta;
    
        return $this;
    }

    /**
     * Get negocioAlta
     *
     * @return integer
     */
    public function getNegocioAlta()
    {
        return $this->negocioAlta;
    }

    /**
     * Set negocioSucu
     *
     * @param \EuBundle\Entity\Negocio $negocioSucu
     *
     * @return Negocio
     */
    public function setNegocioSucu(\EuBundle\Entity\Negocio $negocioSucu = null)
    {
        $this->negocioSucu = $negocioSucu;
    
        return $this;
    }

    /**
     * Get negocioSucu
     *
     * @return \EuBundle\Entity\Negocio
     */
    public function getNegocioSucu()
    {
        return $this->negocioSucu;
    }

    /**
     * Set ciudad
     *
     * @param \EuBundle\Entity\Ciudad $ciudad
     *
     * @return Negocio
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

    /**
     * Set categoria
     *
     * @param \EuBundle\Entity\Categoria $categoria
     *
     * @return Negocio
     */
    public function setCategoria(\EuBundle\Entity\Categoria $categoria = null)
    {
        $this->categoria = $categoria;
    
        return $this;
    }

    /**
     * Get categoria
     *
     * @return \EuBundle\Entity\Categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set usuCrea
     *
     * @param \EuBundle\Entity\Usuario $usuCrea
     *
     * @return Negocio
     */
    public function setUsuCrea(\EuBundle\Entity\Usuario $usuCrea = null)
    {
        $this->usuCrea = $usuCrea;
    
        return $this;
    }

    /**
     * Get usuCrea
     *
     * @return \EuBundle\Entity\Usuario
     */
    public function getUsuCrea()
    {
        return $this->usuCrea;
    }
}
