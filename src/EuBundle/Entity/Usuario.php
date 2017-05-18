<?php

namespace EuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="pers_id", columns={"pers_id"}), @ORM\Index(name="usu_usu_crea", columns={"usu_usu_crea"})})
 * @ORM\Entity
 */
class Usuario
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
     * @var integer
     *
     * @ORM\Column(name="tipo_usuario_id", type="integer", nullable=true)
     */
    private $tipoUsuarioId;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_email", type="string", length=30, nullable=false)
     */
    private $usuEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_clave", type="string", length=70, nullable=false)
     */
    private $usuClave;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_alta", type="integer", nullable=false)
     */
    private $usuAlta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="usu_fec_login", type="datetime", nullable=false)
     */
    private $usuFecLogin = 'CURRENT_TIMESTAMP';

    /**
     * @var \Persona
     *
     * @ORM\ManyToOne(targetEntity="Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pers_id", referencedColumnName="id")
     * })
     */
    private $pers;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usu_usu_crea", referencedColumnName="id")
     * })
     */
    private $usuUsuCrea;



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
     * Set tipoUsuarioId
     *
     * @param integer $tipoUsuarioId
     *
     * @return Usuario
     */
    public function setTipoUsuarioId($tipoUsuarioId)
    {
        $this->tipoUsuarioId = $tipoUsuarioId;
    
        return $this;
    }

    /**
     * Get tipoUsuarioId
     *
     * @return integer
     */
    public function getTipoUsuarioId()
    {
        return $this->tipoUsuarioId;
    }

    /**
     * Set usuEmail
     *
     * @param string $usuEmail
     *
     * @return Usuario
     */
    public function setUsuEmail($usuEmail)
    {
        $this->usuEmail = $usuEmail;
    
        return $this;
    }

    /**
     * Get usuEmail
     *
     * @return string
     */
    public function getUsuEmail()
    {
        return $this->usuEmail;
    }

    /**
     * Set usuClave
     *
     * @param string $usuClave
     *
     * @return Usuario
     */
    public function setUsuClave($usuClave)
    {
        $this->usuClave = $usuClave;
    
        return $this;
    }

    /**
     * Get usuClave
     *
     * @return string
     */
    public function getUsuClave()
    {
        return $this->usuClave;
    }

    /**
     * Set usuAlta
     *
     * @param integer $usuAlta
     *
     * @return Usuario
     */
    public function setUsuAlta($usuAlta)
    {
        $this->usuAlta = $usuAlta;
    
        return $this;
    }

    /**
     * Get usuAlta
     *
     * @return integer
     */
    public function getUsuAlta()
    {
        return $this->usuAlta;
    }

    /**
     * Set usuFecLogin
     *
     * @param \DateTime $usuFecLogin
     *
     * @return Usuario
     */
    public function setUsuFecLogin($usuFecLogin)
    {
        $this->usuFecLogin = $usuFecLogin;
    
        return $this;
    }

    /**
     * Get usuFecLogin
     *
     * @return \DateTime
     */
    public function getUsuFecLogin()
    {
        return $this->usuFecLogin;
    }

    /**
     * Set pers
     *
     * @param \EuBundle\Entity\Persona $pers
     *
     * @return Usuario
     */
    public function setPers(\EuBundle\Entity\Persona $pers = null)
    {
        $this->pers = $pers;
    
        return $this;
    }

    /**
     * Get pers
     *
     * @return \EuBundle\Entity\Persona
     */
    public function getPers()
    {
        return $this->pers;
    }

    /**
     * Set usuUsuCrea
     *
     * @param \EuBundle\Entity\Usuario $usuUsuCrea
     *
     * @return Usuario
     */
    public function setUsuUsuCrea(\EuBundle\Entity\Usuario $usuUsuCrea = null)
    {
        $this->usuUsuCrea = $usuUsuCrea;
    
        return $this;
    }

    /**
     * Get usuUsuCrea
     *
     * @return \EuBundle\Entity\Usuario
     */
    public function getUsuUsuCrea()
    {
        return $this->usuUsuCrea;
    }
}
