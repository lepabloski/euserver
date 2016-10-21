<?php

namespace EuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipo
 *
 * @ORM\Table(name="equipo")
 * @ORM\Entity
 */
class Equipo
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
     * @ORM\Column(name="equipo_mac", type="string", length=30, nullable=false)
     */
    private $equipoMac;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="equipo_fec_mod", type="datetime", nullable=false)
     */
    private $equipoFecMod;

    /**
     * @var integer
     *
     * @ORM\Column(name="equipo_alta", type="integer", nullable=false)
     */
    private $equipoAlta;



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
     * Set equipoMac
     *
     * @param string $equipoMac
     *
     * @return Equipo
     */
    public function setEquipoMac($equipoMac)
    {
        $this->equipoMac = $equipoMac;

        return $this;
    }

    /**
     * Get equipoMac
     *
     * @return string
     */
    public function getEquipoMac()
    {
        return $this->equipoMac;
    }

    /**
     * Set equipoFecMod
     *
     * @param \DateTime $equipoFecMod
     *
     * @return Equipo
     */
    public function setEquipoFecMod($equipoFecMod)
    {
        $this->equipoFecMod = $equipoFecMod;

        return $this;
    }

    /**
     * Get equipoFecMod
     *
     * @return \DateTime
     */
    public function getEquipoFecMod()
    {
        return $this->equipoFecMod;
    }

    /**
     * Set equipoAlta
     *
     * @param integer $equipoAlta
     *
     * @return Equipo
     */
    public function setEquipoAlta($equipoAlta)
    {
        $this->equipoAlta = $equipoAlta;

        return $this;
    }

    /**
     * Get equipoAlta
     *
     * @return integer
     */
    public function getEquipoAlta()
    {
        return $this->equipoAlta;
    }
}
