<?php

namespace Juanes\sipaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Familias
 */
class Familias
{
    /**
     * @var integer
     */
    private $idflia;

    /**
     * @var string
     */
    private $nomflia;

    /**
     * @var string
     */
    private $vereda;

    /**
     * @var string
     */
    private $finca;

    private $jumflirep;

    private $jumflipf;

    private $jumfliper;

    private $jumflireg;

    public function __construct()
    {
        $this->jumflirep = new ArrayCollection();
        $this->jumflipf = new ArrayCollection();
        $this->jumfliper = new ArrayCollection();
        $this->jumflireg = new ArrayCollection();
    }

    public function __toString()
    {
        return (string) $this->getIdflia();
    }

    /**
     * Get idflia
     *
     * @return integer
     */
    public function getIdflia()
    {
        return $this->idflia;
    }

    /**
     * Set nomflia
     *
     * @param string $nomflia
     *
     * @return Familias
     */
    public function setNomflia($nomflia)
    {
        $this->nomflia = $nomflia;

        return $this;
    }

    /**
     * Get nomflia
     *
     * @return string
     */
    public function getNomflia()
    {
        return $this->nomflia;
    }

    /**
     * Set vereda
     *
     * @param string $vereda
     *
     * @return Familias
     */
    public function setVereda($vereda)
    {
        $this->vereda = $vereda;

        return $this;
    }

    /**
     * Get vereda
     *
     * @return string
     */
    public function getVereda()
    {
        return $this->vereda;
    }

    /**
     * Set finca
     *
     * @param string $finca
     *
     * @return Familias
     */
    public function setFinca($finca)
    {
        $this->finca = $finca;

        return $this;
    }

    /**
     * Get finca
     *
     * @return string
     */
    public function getFinca()
    {
        return $this->finca;
    }

    /**
     * Set idmunicipio
     *
     * @param \Juanes\sipaBundle\Entity\Municipios $idmunicipio
     *
     * @return Familias
     */
    public function setIdmunicipio(\Juanes\sipaBundle\Entity\Municipios $idmunicipio = null)
    {
        $this->idmunicipio = $idmunicipio;

        return $this;
    }

    /**
     * Get idmunicipio
     *
     * @return \Juanes\sipaBundle\Entity\Municipios
     */
    public function getIdmunicipio()
    {
        return $this->idmunicipio;
    }

    /**
     * Add jumflireg
     *
     * @param \Juanes\sipaBundle\Entity\Registrovisitas $jumflireg
     *
     * @return Familias
     */
    public function addJumflireg(\Juanes\sipaBundle\Entity\Registrovisitas $jumflireg)
    {
        $this->jumflireg[] = $jumflireg;

        return $this;
    }

    /**
     * Remove jumflireg
     *
     * @param \Juanes\sipaBundle\Entity\Registrovisitas $jumflireg
     */
    public function removeJumflireg(\Juanes\sipaBundle\Entity\Registrovisitas $jumflireg)
    {
        $this->jumflireg->removeElement($jumflireg);
    }

    /**
     * Get jumflireg
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJumflireg()
    {
        return $this->jumflireg;
    }
    /**
     * @var \Juanes\sipaBundle\Entity\Municipios
     */
    private $jumflimun;

    /**
     * Add jumflipf
     *
     * @param \Juanes\sipaBundle\Entity\Prodflias $jumflipf
     *
     * @return Familias
     */
    public function addJumflipf(\Juanes\sipaBundle\Entity\Prodflias $jumflipf)
    {
        $this->jumflipf[] = $jumflipf;

        return $this;
    }

    /**
     * Remove jumflipf
     *
     * @param \Juanes\sipaBundle\Entity\Prodflias $jumflipf
     */
    public function removeJumflipf(\Juanes\sipaBundle\Entity\Prodflias $jumflipf)
    {
        $this->jumflipf->removeElement($jumflipf);
    }

    /**
     * Get jumflipf
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJumflipf()
    {
        return $this->jumflipf;
    }

    /**
     * Add jumfliper
     *
     * @param \Juanes\sipaBundle\Entity\Personas $jumfliper
     *
     * @return Familias
     */
    public function addJumfliper(\Juanes\sipaBundle\Entity\Personas $jumfliper)
    {
        $this->jumfliper[] = $jumfliper;

        return $this;
    }

    /**
     * Remove jumfliper
     *
     * @param \Juanes\sipaBundle\Entity\Personas $jumfliper
     */
    public function removeJumfliper(\Juanes\sipaBundle\Entity\Personas $jumfliper)
    {
        $this->jumfliper->removeElement($jumfliper);
    }

    /**
     * Get jumfliper
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJumfliper()
    {
        return $this->jumfliper;
    }

    /**
     * Set jumflimun
     *
     * @param \Juanes\sipaBundle\Entity\Municipios $jumflimun
     *
     * @return Familias
     */
    public function setJumflimun(\Juanes\sipaBundle\Entity\Municipios $jumflimun = null)
    {
        $this->jumflimun = $jumflimun;

        return $this;
    }

    /**
     * Get jumflimun
     *
     * @return \Juanes\sipaBundle\Entity\Municipios
     */
    public function getJumflimun()
    {
        return $this->jumflimun;
    }

    /**
     * Add jumflirep
     *
     * @param \Juanes\sipaBundle\Entity\Responsables $jumflirep
     *
     * @return Familias
     */
    public function addJumflirep(\Juanes\sipaBundle\Entity\Responsables $jumflirep)
    {
        $this->jumflirep[] = $jumflirep;

        return $this;
    }

    /**
     * Remove jumflirep
     *
     * @param \Juanes\sipaBundle\Entity\Responsables $jumflirep
     */
    public function removeJumflirep(\Juanes\sipaBundle\Entity\Responsables $jumflirep)
    {
        $this->jumflirep->removeElement($jumflirep);
    }

    /**
     * Get jumflirep
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJumflirep()
    {
        return $this->jumflirep;
    }
}
