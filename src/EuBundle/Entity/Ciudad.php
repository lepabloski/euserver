<?php

namespace EuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudad
 *
 * @ORM\Table(name="ciudad", indexes={@ORM\Index(name="IDX_8E86059E4E7121AF", columns={"provincia_id"})})
 * @ORM\Entity
 */
class Ciudad
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
     * @ORM\Column(name="ciudad_nombre", type="string", length=30, nullable=false)
     */
    private $ciudadNombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="ciudad_alta", type="integer", nullable=true)
     */
    private $ciudadAlta = '1';

    /**
     * @var \Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provincia_id", referencedColumnName="id")
     * })
     */
    private $provincia;



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
     * Set ciudadNombre
     *
     * @param string $ciudadNombre
     *
     * @return Ciudad
     */
    public function setCiudadNombre($ciudadNombre)
    {
        $this->ciudadNombre = $ciudadNombre;

        return $this;
    }

    /**
     * Get ciudadNombre
     *
     * @return string
     */
    public function getCiudadNombre()
    {
        return $this->ciudadNombre;
    }

    /**
     * Set ciudadAlta
     *
     * @param integer $ciudadAlta
     *
     * @return Ciudad
     */
    public function setCiudadAlta($ciudadAlta)
    {
        $this->ciudadAlta = $ciudadAlta;

        return $this;
    }

    /**
     * Get ciudadAlta
     *
     * @return integer
     */
    public function getCiudadAlta()
    {
        return $this->ciudadAlta;
    }

    /**
     * Set provincia
     *
     * @param \EuBundle\Entity\Provincia $provincia
     *
     * @return Ciudad
     */
    public function setProvincia(\EuBundle\Entity\Provincia $provincia = null)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return \EuBundle\Entity\Provincia
     */
    public function getProvincia()
    {
        return $this->provincia;
    }
    
     public function __toString()
    {
        return $this->ciudadNombre;
    }
}
