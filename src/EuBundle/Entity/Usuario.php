<?php

namespace EuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="pers_id", columns={"pers_id"}), @ORM\Index(name="fos_user", columns={"fos_user"})})
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
     * @var \Persona
     *
     * @ORM\ManyToOne(targetEntity="Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pers_id", referencedColumnName="id")
     * })
     */
    private $pers;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fos_user", referencedColumnName="id")
     * })
     */
    private $fosUser;


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
     * @param \EuBundle\Entity\User $fosUser
     *
     * @return Usuario
     */
    public function setFosUser(\EuBundle\Entity\User $fosUser = null)
    {
        $this->fosUser = $fosUser;

        return $this;
    }

    /**
     * Get fosUser
     *
     * @return \EuBundle\Entity\User
     */
    public function getFosUser()
    {
        return $this->fosUser;
    }   
   
}
