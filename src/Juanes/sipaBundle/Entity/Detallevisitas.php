<?php

namespace Juanes\sipaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Detallevisitas
 */
class Detallevisitas
{
    /**
     * @var integer
     */
    private $idregactdet;

    /**
     * @var integer
     */
    private $cantidad;

    /**
     * @var integer
     */
    private $estadovis;

    /**
     * @var string
     */
    private $observa;

    /**
     * @var \Juanes\sipaBundle\Entity\Registrovisitas
     */
    private $jumdetreg;

    /**
     * @var \Juanes\sipaBundle\Entity\Actividades
     */
    private $jumdetact;

    /**
     * @var \Juanes\sipaBundle\Entity\Productos
     */
    private $jumdetpro;

    public function __construct()
    {
        $this->jumdetact = new ArrayCollection();
        $this->jumdetpro = new ArrayCollection();
        $this->jumdetreg = new ArrayCollection();
    }

    public function __toString()
    {
        return (string) $this->getIdregactdet();
    }

    /**
     * Get idregactdet
     *
     * @return integer
     */
    public function getIdregactdet()
    {
        return $this->idregactdet;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return Detallevisitas
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set estadovis
     *
     * @param integer $estadovis
     *
     * @return Detallevisitas
     */
    public function setEstadovis($estadovis)
    {
        $this->estadovis = $estadovis;

        return $this;
    }

    /**
     * Get estadovis
     *
     * @return integer
     */
    public function getEstadovis()
    {
        return $this->estadovis;
    }

    /**
     * Set observa
     *
     * @param string $observa
     *
     * @return Detallevisitas
     */
    public function setObserva($observa)
    {
        $this->observa = $observa;

        return $this;
    }

    /**
     * Get observa
     *
     * @return string
     */
    public function getObserva()
    {
        return $this->observa;
    }

    
    
    /**
     * Set jumdetreg
     *
     * @param \Juanes\sipaBundle\Entity\Registrovisitas $jumdetreg
     *
     * @return Detallevisitas
     */
    public function setJumdetreg(\Juanes\sipaBundle\Entity\Registrovisitas $jumdetreg = null)
    {
        $this->jumdetreg = $jumdetreg;

        return $this;
    }

    /**
     * Get jumdetreg
     *
     * @return \Juanes\sipaBundle\Entity\Registrovisitas
     */
    public function getJumdetreg()
    {
        return $this->jumdetreg;
    }

    /**
     * Set jumdetact
     *
     * @param \Juanes\sipaBundle\Entity\Actividades $jumdetact
     *
     * @return Detallevisitas
     */
    public function setJumdetact(\Juanes\sipaBundle\Entity\Actividades $jumdetact = null)
    {
        $this->jumdetact = $jumdetact;

        return $this;
    }

    /**
     * Get jumdetact
     *
     * @return \Juanes\sipaBundle\Entity\Actividades
     */
    public function getJumdetact()
    {
        return $this->jumdetact;
    }

    /**
     * Set jumdetpro
     *
     * @param \Juanes\sipaBundle\Entity\Productos $jumdetpro
     *
     * @return Detallevisitas
     */
    public function setJumdetpro(\Juanes\sipaBundle\Entity\Productos $jumdetpro = null)
    {
        $this->jumdetpro = $jumdetpro;

        return $this;
    }

    /**
     * Get jumdetpro
     *
     * @return \Juanes\sipaBundle\Entity\Productos
     */
    public function getJumdetpro()
    {
        return $this->jumdetpro;
    }
}
