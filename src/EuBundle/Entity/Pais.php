<?php

namespace EuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pais
 *
 * @ORM\Table(name="pais")
 * @ORM\Entity
 */
class Pais
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
     * @ORM\Column(name="pais_nombre", type="string", length=25, nullable=false)
     */
    private $paisNombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="pais_alta", type="integer", nullable=true)
     */
    private $paisAlta = '0';



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
     * Set paisNombre
     *
     * @param string $paisNombre
     *
     * @return Pais
     */
    public function setPaisNombre($paisNombre)
    {
        $this->paisNombre = $paisNombre;
    
        return $this;
    }

    /**
     * Get paisNombre
     *
     * @return string
     */
    public function getPaisNombre()
    {
        return $this->paisNombre;
    }

    /**
     * Set paisAlta
     *
     * @param integer $paisAlta
     *
     * @return Pais
     */
    public function setPaisAlta($paisAlta)
    {
        $this->paisAlta = $paisAlta;
    
        return $this;
    }

    /**
     * Get paisAlta
     *
     * @return integer
     */
    public function getPaisAlta()
    {
        return $this->paisAlta;
    }
}
