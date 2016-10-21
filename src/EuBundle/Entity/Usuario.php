<?php

namespace EuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="pers_id", columns={"pers_id"}), @ORM\Index(name="fos_user", columns={"fos_user"}), @ORM\Index(name="usu_usuario_crea", columns={"usu_usuario_crea"})})
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
     * @ORM\Column(name="usu_usuario", type="string", length=25, nullable=false)
     */
    private $usuUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_clave", type="string", length=25, nullable=true)
     */
    private $usuClave;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_email", type="string", length=30, nullable=true)
     */
    private $usuEmail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="usu_fecha_mod", type="datetime", nullable=false)
     */
    private $usuFechaMod;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_alta", type="integer", nullable=true)
     */
    private $usuAlta = '1';

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
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fos_user", referencedColumnName="id")
     * })
     */
    private $fosUser;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usu_usuario_crea", referencedColumnName="id")
     * })
     */
    private $usuUsuarioCrea;



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
     * Set usuUsuario
     *
     * @param string $usuUsuario
     *
     * @return Usuario
     */
    public function setUsuUsuario($usuUsuario)
    {
        $this->usuUsuario = $usuUsuario;

        return $this;
    }

    /**
     * Get usuUsuario
     *
     * @return string
     */
    public function getUsuUsuario()
    {
        return $this->usuUsuario;
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
     * Set usuFechaMod
     *
     * @param \DateTime $usuFechaMod
     *
     * @return Usuario
     */
    public function setUsuFechaMod($usuFechaMod)
    {
        $this->usuFechaMod = $usuFechaMod;

        return $this;
    }

    /**
     * Get usuFechaMod
     *
     * @return \DateTime
     */
    public function getUsuFechaMod()
    {
        return $this->usuFechaMod;
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
     * Set fosUser
     *
     * @param \EuBundle\Entity\FosUser $fosUser
     *
     * @return Usuario
     */
    public function setFosUser(\EuBundle\Entity\FosUser $fosUser = null)
    {
        $this->fosUser = $fosUser;

        return $this;
    }

    /**
     * Get fosUser
     *
     * @return \EuBundle\Entity\FosUser
     */
    public function getFosUser()
    {
        return $this->fosUser;
    }

    /**
     * Set usuUsuarioCrea
     *
     * @param \EuBundle\Entity\Usuario $usuUsuarioCrea
     *
     * @return Usuario
     */
    public function setUsuUsuarioCrea(\EuBundle\Entity\Usuario $usuUsuarioCrea = null)
    {
        $this->usuUsuarioCrea = $usuUsuarioCrea;

        return $this;
    }

    /**
     * Get usuUsuarioCrea
     *
     * @return \EuBundle\Entity\Usuario
     */
    public function getUsuUsuarioCrea()
    {
        return $this->usuUsuarioCrea;
    }
}
