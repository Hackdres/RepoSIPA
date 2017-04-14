<?php

namespace Juanes\sipaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Personas
 */
class Personas
{
    /**
     * @var integer
     */
    private $idpersona;

    /**
     * @var integer
     */
    private $docpers;

    /**
     * @var string
     */
    private $nompers;

    /**
     * @var string
     */
    private $apepers;

    private $jumperrep;

    private $jumperfli;

    public function __construct()
    {
        $this->jumperres = new ArrayCollection();
        $this->jumperfli = new ArrayCollection();
    }

    public function __toString()
    {
        return (string) $this->getIdpersona();
    }

    /**
     * Get idpersona
     *
     * @return integer
     */
    public function getIdpersona()
    {
        return $this->idpersona;
    }

    /**
     * Set docpers
     *
     * @param integer $docpers
     *
     * @return Personas
     */
    public function setDocpers($docpers)
    {
        $this->docpers = $docpers;

        return $this;
    }

    /**
     * Get docpers
     *
     * @return integer
     */
    public function getDocpers()
    {
        return $this->docpers;
    }

    /**
     * Set nompers
     *
     * @param string $nompers
     *
     * @return Personas
     */
    public function setNompers($nompers)
    {
        $this->nompers = $nompers;

        return $this;
    }

    /**
     * Get nompers
     *
     * @return string
     */
    public function getNompers()
    {
        return $this->nompers;
    }

    /**
     * Set apepers
     *
     * @param string $apepers
     *
     * @return Personas
     */
    public function setApepers($apepers)
    {
        $this->apepers = $apepers;

        return $this;
    }

    /**
     * Get apepers
     *
     * @return string
     */
    public function getApepers()
    {
        return $this->apepers;
    }

    /**
     * Set jumperfli
     *
     * @param \Juanes\sipaBundle\Entity\Familias $jumperfli
     *
     * @return Personas
     */
    public function setJumperfli(\Juanes\sipaBundle\Entity\Familias $jumperfli = null)
    {
        $this->jumperfli = $jumperfli;

        return $this;
    }

    /**
     * Get jumperfli
     *
     * @return \Juanes\sipaBundle\Entity\Familias
     */
    public function getJumperfli()
    {
        return $this->jumperfli;
    }

    /**
     * Add jumperrep
     *
     * @param \Juanes\sipaBundle\Entity\Responsables $jumperrep
     *
     * @return Personas
     */
    public function addJumperrep(\Juanes\sipaBundle\Entity\Responsables $jumperrep)
    {
        $this->jumperrep[] = $jumperrep;

        return $this;
    }

    /**
     * Remove jumperrep
     *
     * @param \Juanes\sipaBundle\Entity\Responsables $jumperrep
     */
    public function removeJumperrep(\Juanes\sipaBundle\Entity\Responsables $jumperrep)
    {
        $this->jumperrep->removeElement($jumperrep);
    }

    /**
     * Get jumperrep
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJumperrep()
    {
        return $this->jumperrep;
    }
}
