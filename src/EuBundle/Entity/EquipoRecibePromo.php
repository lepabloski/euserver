<?php

namespace EuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquipoRecibePromo
 *
 * @ORM\Table(name="equipo_recibe_promo", indexes={@ORM\Index(name="equipo_id", columns={"equipo_id", "promo_id"}), @ORM\Index(name="promo_id", columns={"promo_id"}), @ORM\Index(name="IDX_CCB0E00C23BFBED", columns={"equipo_id"})})
 * @ORM\Entity
 */
class EquipoRecibePromo
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
     * @var \DateTime
     *
     * @ORM\Column(name="fec_recepcion", type="datetime", nullable=false)
     */
    private $fecRecepcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="alta", type="integer", nullable=false)
     */
    private $alta;

    /**
     * @var \Equipo
     *
     * @ORM\ManyToOne(targetEntity="Equipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipo_id", referencedColumnName="id")
     * })
     */
    private $equipo;

    /**
     * @var \Promo
     *
     * @ORM\ManyToOne(targetEntity="Promo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="promo_id", referencedColumnName="id")
     * })
     */
    private $promo;



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
     * Set fecRecepcion
     *
     * @param \DateTime $fecRecepcion
     *
     * @return EquipoRecibePromo
     */
    public function setFecRecepcion($fecRecepcion)
    {
        $this->fecRecepcion = $fecRecepcion;

        return $this;
    }

    /**
     * Get fecRecepcion
     *
     * @return \DateTime
     */
    public function getFecRecepcion()
    {
        return $this->fecRecepcion;
    }

    /**
     * Set alta
     *
     * @param integer $alta
     *
     * @return EquipoRecibePromo
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
     * Set equipo
     *
     * @param \EuBundle\Entity\Equipo $equipo
     *
     * @return EquipoRecibePromo
     */
    public function setEquipo(\EuBundle\Entity\Equipo $equipo = null)
    {
        $this->equipo = $equipo;

        return $this;
    }

    /**
     * Get equipo
     *
     * @return \EuBundle\Entity\Equipo
     */
    public function getEquipo()
    {
        return $this->equipo;
    }

    /**
     * Set promo
     *
     * @param \EuBundle\Entity\Promo $promo
     *
     * @return EquipoRecibePromo
     */
    public function setPromo(\EuBundle\Entity\Promo $promo = null)
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * Get promo
     *
     * @return \EuBundle\Entity\Promo
     */
    public function getPromo()
    {
        return $this->promo;
    }
}
