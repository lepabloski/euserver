<?php

namespace EuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provincia
 *
 * @ORM\Table(name="provincia", indexes={@ORM\Index(name="pais_id", columns={"pais_id"})})
 * @ORM\Entity
 */
class Provincia
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
     * @ORM\Column(name="provincia_nombre", type="string", length=30, nullable=false)
     */
    private $provinciaNombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="provincia_alta", type="integer", nullable=true)
     */
    private $provinciaAlta = '1';

    /**
     * @var \Pais
     *
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
     * })
     */
    private $pais;



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
     * Set provinciaNombre
     *
     * @param string $provinciaNombre
     *
     * @return Provincia
     */
    public function setProvinciaNombre($provinciaNombre)
    {
        $this->provinciaNombre = $provinciaNombre;
    
        return $this;
    }

    /**
     * Get provinciaNombre
     *
     * @return string
     */
    public function getProvinciaNombre()
    {
        return $this->provinciaNombre;
    }

    /**
     * Set provinciaAlta
     *
     * @param integer $provinciaAlta
     *
     * @return Provincia
     */
    public function setProvinciaAlta($provinciaAlta)
    {
        $this->provinciaAlta = $provinciaAlta;
    
        return $this;
    }

    /**
     * Get provinciaAlta
     *
     * @return integer
     */
    public function getProvinciaAlta()
    {
        return $this->provinciaAlta;
    }

    /**
     * Set pais
     *
     * @param \EuBundle\Entity\Pais $pais
     *
     * @return Provincia
     */
    public function setPais(\EuBundle\Entity\Pais $pais = null)
    {
        $this->pais = $pais;
    
        return $this;
    }

    /**
     * Get pais
     *
     * @return \EuBundle\Entity\Pais
     */
    public function getPais()
    {
        return $this->pais;
    }
}
