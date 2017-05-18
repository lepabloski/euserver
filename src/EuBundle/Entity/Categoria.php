<?php

namespace EuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria")
 * @ORM\Entity
 */
class Categoria
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
     * @ORM\Column(name="cat_descripcion", type="string", length=70, nullable=false)
     */
    private $catDescripcion;



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
     * Set catDescripcion
     *
     * @param string $catDescripcion
     *
     * @return Categoria
     */
    public function setCatDescripcion($catDescripcion)
    {
        $this->catDescripcion = $catDescripcion;
    
        return $this;
    }

    /**
     * Get catDescripcion
     *
     * @return string
     */
    public function getCatDescripcion()
    {
        return $this->catDescripcion;
    }
}
