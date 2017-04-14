<?php

namespace Juanes\sipaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Municipios
 */
class Municipios
{
    /**
     * @var integer
     */
    private $idmunicipio;

    /**
     * @var string
     */
    private $nommunicipio;

    private $jummunfli;

    public function __construct()
    {
        $this->jummunfli = new ArrayCollection();
    }

    public function __toString()
    {
        return (string) $this->getIdmunicipio();
    }

    /**
     * Get idmunicipio
     *
     * @return integer
     */
    public function getIdmunicipio()
    {
        return $this->idmunicipio;
    }

    /**
     * Set nommunicipio
     *
     * @param string $nommunicipio
     *
     * @return Municipios
     */
    public function setNommunicipio($nommunicipio)
    {
        $this->nommunicipio = $nommunicipio;

        return $this;
    }

    /**
     * Get nommunicipio
     *
     * @return string
     */
    public function getNommunicipio()
    {
        return $this->nommunicipio;
    }

    /**
     * Add jummunfli
     *
     * @param \Juanes\sipaBundle\Entity\Familias $jummunfli
     *
     * @return Municipios
     */
    public function addJummunfli(\Juanes\sipaBundle\Entity\Familias $jummunfli)
    {
        $this->jummunfli[] = $jummunfli;

        return $this;
    }

    /**
     * Remove jummunfli
     *
     * @param \Juanes\sipaBundle\Entity\Familias $jummunfli
     */
    public function removeJummunfli(\Juanes\sipaBundle\Entity\Familias $jummunfli)
    {
        $this->jummunfli->removeElement($jummunfli);
    }

    /**
     * Get jummunfli
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJummunfli()
    {
        return $this->jummunfli;
    }
    // /**
    //  * Constructor
    //  */
    // public function __construct()
    // {
    //     $this->jummunfli = new \Doctrine\Common\Collections\ArrayCollection();
    // }

}
