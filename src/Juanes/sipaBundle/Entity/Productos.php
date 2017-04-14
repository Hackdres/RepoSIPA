<?php

namespace Juanes\sipaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Productos
 */
class Productos
{
    /**
     * @var integer
     */
    private $idproducto;

    /**
     * @var string
     */
    private $nomproducto;

    private $jumpro;

    private $jumpropf;

    public function __construct()
    {
        $this->jumpro = new ArrayCollection();
        $this->jumpropf = new ArrayCollection();
    }

    public function __toString()
    {
        return (string) $this->getIdproducto();
    }

    /**
     * Get idproducto
     *
     * @return integer
     */
    public function getIdproducto()
    {
        return $this->idproducto;
    }

    /**
     * Set nomproducto
     *
     * @param string $nomproducto
     *
     * @return Productos
     */
    public function setNomproducto($nomproducto)
    {
        $this->nomproducto = $nomproducto;

        return $this;
    }

    /**
     * Get nomproducto
     *
     * @return string
     */
    public function getNomproducto()
    {
        return $this->nomproducto;
    }
    

    /**
     * Add jumpro
     *
     * @param \Juanes\sipaBundle\Entity\Detallevisitas $jumpro
     *
     * @return Productos
     */
    public function addJumpro(\Juanes\sipaBundle\Entity\Detallevisitas $jumpro)
    {
        $this->jumpro[] = $jumpro;

        return $this;
    }

    /**
     * Remove jumpro
     *
     * @param \Juanes\sipaBundle\Entity\Detallevisitas $jumpro
     */
    public function removeJumpro(\Juanes\sipaBundle\Entity\Detallevisitas $jumpro)
    {
        $this->jumpro->removeElement($jumpro);
    }

    /**
     * Get jumpro
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJumpro()
    {
        return $this->jumpro;
    }

    /**
     * Add jumpropf
     *
     * @param \Juanes\sipaBundle\Entity\Prodflias $jumpropf
     *
     * @return Productos
     */
    public function addJumpropf(\Juanes\sipaBundle\Entity\Prodflias $jumpropf)
    {
        $this->jumpropf[] = $jumpropf;

        return $this;
    }

    /**
     * Remove jumpropf
     *
     * @param \Juanes\sipaBundle\Entity\Prodflias $jumpropf
     */
    public function removeJumpropf(\Juanes\sipaBundle\Entity\Prodflias $jumpropf)
    {
        $this->jumpropf->removeElement($jumpropf);
    }

    /**
     * Get jumpropf
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJumpropf()
    {
        return $this->jumpropf;
    }
}
