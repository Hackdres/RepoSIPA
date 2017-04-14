<?php

namespace Juanes\sipaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Responsables
 */
class Responsables
{
    /**
     * @var integer
     */
    private $idres;

    /**
     * @var integer
     */
    private $estadores;

    /**
     * @var \DateTime
     */
    private $fechares;

    private $jumresfli;

    private $jumresper;

    public function __construct()
    {
        $this->jumresfli = new ArrayCollection();
        $this->jumresper = new ArrayCollection();
    }

    public function __toString()
    {
        return (string) $this->getIdres();
    }
    /**
     * Get idres
     *
     * @return integer
     */
    public function getIdres()
    {
        return $this->idres;
    }

    /**
     * Set estadores
     *
     * @param integer $estadores
     *
     * @return Responsables
     */
    public function setEstadores($estadores)
    {
        $this->estadores = $estadores;

        return $this;
    }

    /**
     * Get estadores
     *
     * @return integer
     */
    public function getEstadores()
    {
        return $this->estadores;
    }

    /**
     * Set fechares
     *
     * @param \DateTime $fechares
     *
     * @return Responsables
     */
    public function setFechares($fechares)
    {
        $this->fechares = $fechares;

        return $this;
    }

    /**
     * Get fechares
     *
     * @return \DateTime
     */
    public function getFechares()
    {
        return $this->fechares;
    }


    /**
     * Set jumresfli
     *
     * @param \Juanes\sipaBundle\Entity\Familias $jumresfli
     *
     * @return Responsables
     */
    public function setJumresfli(\Juanes\sipaBundle\Entity\Familias $jumresfli = null)
    {
        $this->jumresfli = $jumresfli;

        return $this;
    }

    /**
     * Get jumresfli
     *
     * @return \Juanes\sipaBundle\Entity\Familias
     */
    public function getJumresfli()
    {
        return $this->jumresfli;
    }

    /**
     * Set jumresper
     *
     * @param \Juanes\sipaBundle\Entity\Personas $jumresper
     *
     * @return Responsables
     */
    public function setJumresper(\Juanes\sipaBundle\Entity\Personas $jumresper = null)
    {
        $this->jumresper = $jumresper;

        return $this;
    }

    /**
     * Get jumresper
     *
     * @return \Juanes\sipaBundle\Entity\Personas
     */
    public function getJumresper()
    {
        return $this->jumresper;
    }
}
