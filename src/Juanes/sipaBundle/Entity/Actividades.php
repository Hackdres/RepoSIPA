<?php

namespace Juanes\sipaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Actividades
 */
class Actividades
{
    /**
     * @var integer 
     */
    private $idactividad;

    /**
     * @var string
     */
    private $nomactividad;

    private $jumacti;

    public function __construct()
    {
        $this->jumacti = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->nomactividad;
        //return (string) $this->getIdactividad();
    }

    /**
     * Get idactividad
     *
     * @return integer
     */
    public function getIdactividad()
    {
        return $this->idactividad;
    }

    /**
     * Set nomactividad
     *
     * @param string $nomactividad
     *
     * @return Actividades
     */
    public function setNomactividad($nomactividad)
    {
        $this->nomactividad = $nomactividad;

        return $this;
    }

    /**
     * Get nomactividad
     *
     * @return string
     */
    public function getNomactividad()
    {
        return $this->nomactividad;
    }

    /**
     * Add jumacti
     *
     * @param \Juanes\sipaBundle\Entity\Detallevisitas $jumacti
     *
     * @return Actividades
     */
    public function addJumacti(\Juanes\sipaBundle\Entity\Detallevisitas $jumacti)
    {
        $this->jumacti[] = $jumacti;

        return $this;
    }

    /**
     * Remove jumacti
     *
     * @param \Juanes\sipaBundle\Entity\Detallevisitas $jumacti
     */
    public function removeJumacti(\Juanes\sipaBundle\Entity\Detallevisitas $jumacti)
    {
        $this->jumacti->removeElement($jumacti);
    }

    /**
     * Get jumacti
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJumacti()
    {
        return $this->jumacti;
    }
}
