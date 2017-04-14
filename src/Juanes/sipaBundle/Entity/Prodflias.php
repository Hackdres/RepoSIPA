<?php

namespace Juanes\sipaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Prodflias
 */
class Prodflias
{
    /**
     * @var integer
     */
    private $idprodflia;

    private $jumpfpro;

    private $jumpffli;

    public function __construct()
    {
        $this->jumpfpro = new ArrayCollection();
        $this->jumpffli = new ArrayCollection();
    }

    public function __toString()
    {
        return (string) $this->getIdprodflia();
    }
    /**
     * Get idprodflia
     *
     * @return integer
     */
    public function getIdprodflia()
    {
        return $this->idprodflia;
    }


    /**
     * Set jumpfpro
     *
     * @param \Juanes\sipaBundle\Entity\Productos $jumpfpro
     *
     * @return Prodflias
     */
    public function setJumpfpro(\Juanes\sipaBundle\Entity\Productos $jumpfpro = null)
    {
        $this->jumpfpro = $jumpfpro;

        return $this;
    }

    /**
     * Get jumpfpro
     *
     * @return \Juanes\sipaBundle\Entity\Productos
     */
    public function getJumpfpro()
    {
        return $this->jumpfpro;
    }

    /**
     * Set jumpffli
     *
     * @param \Juanes\sipaBundle\Entity\Familias $jumpffli
     *
     * @return Prodflias
     */
    public function setJumpffli(\Juanes\sipaBundle\Entity\Familias $jumpffli = null)
    {
        $this->jumpffli = $jumpffli;

        return $this;
    }

    /**
     * Get jumpffli
     *
     * @return \Juanes\sipaBundle\Entity\Familias
     */
    public function getJumpffli()
    {
        return $this->jumpffli;
    }
}
