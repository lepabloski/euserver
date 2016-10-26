<?php

namespace EuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promo
 *
 * @ORM\Table(name="promo", indexes={@ORM\Index(name="negocio_id", columns={"negocio_id"})})
 * @ORM\Entity
 */
class Promo {

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
     * @ORM\Column(name="promo_descrip", type="string", length=140, nullable=false)
     */
    private $promoDescrip;

    /**
     * @var string
     *
     * @ORM\Column(name="promo_titulo", type="string", length=30, nullable=true)
     */
    private $promoTitulo;

    /**
     * @var float
     *
     * @ORM\Column(name="promo_precio", type="float", precision=10, scale=0, nullable=false)
     */
    private $promoPrecio;

    /**
     * @var integer
     *
     * @ORM\Column(name="promo_descuento", type="integer", nullable=true)
     */
    private $promoDescuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="promo_alta", type="integer", nullable=true)
     */
    private $promoAlta = '1';

    /**
     * @var \Negocio
     *
     * @ORM\ManyToOne(targetEntity="Negocio", inversedBy="Promo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="negocio_id", referencedColumnName="id")
     * })
     */
    private $negocio;
    
    

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set promoDescrip
     *
     * @param string $promoDescrip
     *
     * @return Promo
     */
    public function setPromoDescrip($promoDescrip) {
        $this->promoDescrip = $promoDescrip;

        return $this;
    }

    /**
     * Get promoDescrip
     *
     * @return string
     */
    public function getPromoDescrip() {
        return $this->promoDescrip;
    }

    /**
     * Set promoTitulo
     *
     * @param string $promoTitulo
     *
     * @return Promo
     */
    public function setPromoTitulo($promoTitulo) {
        $this->promoTitulo = $promoTitulo;

        return $this;
    }

    /**
     * Get promoTitulo
     *
     * @return string
     */
    public function getPromoTitulo() {
        return $this->promoTitulo;
    }

    /**
     * Set promoPrecio
     *
     * @param float $promoPrecio
     *
     * @return Promo
     */
    public function setPromoPrecio($promoPrecio) {
        $this->promoPrecio = $promoPrecio;

        return $this;
    }

    /**
     * Get promoPrecio
     *
     * @return float
     */
    public function getPromoPrecio() {
        return $this->promoPrecio;
    }

    /**
     * Set promoDescuento
     *
     * @param integer $promoDescuento
     *
     * @return Promo
     */
    public function setPromoDescuento($promoDescuento) {
        $this->promoDescuento = $promoDescuento;

        return $this;
    }

    /**
     * Get promoDescuento
     *
     * @return integer
     */
    public function getPromoDescuento() {
        return $this->promoDescuento;
    }

    /**
     * Set promoAlta
     *
     * @param integer $promoAlta
     *
     * @return Promo
     */
    public function setPromoAlta($promoAlta) {
        $this->promoAlta = $promoAlta;

        return $this;
    }

    /**
     * Get promoAlta
     *
     * @return integer
     */
    public function getPromoAlta() {
        return $this->promoAlta;
    }

    /**
     * Set negocio
     *
     * @param \EuBundle\Entity\Negocio $negocio
     *
     * @return Promo
     */
    public function setNegocio(\EuBundle\Entity\Negocio $negocio = null) {
        $this->negocio = $negocio;

        return $this;
    }

    /**
     * Get negocio
     *
     * @return \EuBundle\Entity\Negocio
     */
    public function getNegocio() {
        return $this->negocio;
    }



}
