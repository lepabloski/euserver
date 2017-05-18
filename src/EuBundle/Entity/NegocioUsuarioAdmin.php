<?php

namespace EuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NegocioUsuarioAdmin
 *
 * @ORM\Table(name="negocio_usuario_admin", indexes={@ORM\Index(name="negocio_id", columns={"negocio_id"}), @ORM\Index(name="usuario_id", columns={"usuario_id"})})
 * @ORM\Entity
 */
class NegocioUsuarioAdmin
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
     * @ORM\Column(name="alta", type="integer", nullable=true)
     */
    private $alta = '1';

    /**
     * @var \Negocio
     *
     * @ORM\ManyToOne(targetEntity="Negocio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="negocio_id", referencedColumnName="id")
     * })
     */
    private $negocio;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;



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
     * Set alta
     *
     * @param integer $alta
     *
     * @return NegocioUsuarioAdmin
     */
    public function setAlta($alta)
    {
        $this->alta = $alta;
    
        return $this;
    }

    /**
     * Get alta
     *
     * @return integer
     */
    public function getAlta()
    {
        return $this->alta;
    }

    /**
     * Set negocio
     *
     * @param \EuBundle\Entity\Negocio $negocio
     *
     * @return NegocioUsuarioAdmin
     */
    public function setNegocio(\EuBundle\Entity\Negocio $negocio = null)
    {
        $this->negocio = $negocio;
    
        return $this;
    }

    /**
     * Get negocio
     *
     * @return \EuBundle\Entity\Negocio
     */
    public function getNegocio()
    {
        return $this->negocio;
    }

    /**
     * Set usuario
     *
     * @param \EuBundle\Entity\Usuario $usuario
     *
     * @return NegocioUsuarioAdmin
     */
    public function setUsuario(\EuBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return \EuBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
