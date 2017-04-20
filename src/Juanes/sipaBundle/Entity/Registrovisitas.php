<?php

namespace Juanes\sipaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use AncaRebeca\FullCalendarBundle\Model\FullCalendarEvent;

// use AncaRebeca\FullCalendarBundle\Model\EventInterface;
// use Symfony\Component\EventDispatcher\Event as EventDispatcher;
// class Registrovisitas extends EventDispatcher

/**
 * Registrovisitas
 */
class Registrovisitas
{
    /**
     * @var integer
     */
    private $idregvis;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $archivo;

    // /**
    //  * @var \Juanes\sipaBundle\Entity\User
    //  */
    // private $iduser;

    // /**
    //  * @var \Juanes\sipaBundle\Entity\Familias
    //  */
    // private $idflia;


    private $jumregvis;

    private $jumreguse;

    private $jumregfli;

    protected $title;

    protected $allDay = true;
    
    protected $startDate;


    public function __construct()
    {
        $this->jumregvis = new ArrayCollection();
        // $this->jumreguse = new ArrayCollection();
        // $this->jumregfli = new ArrayCollection();
    }

    public function __toString()
    {
        return (string) $this->getIdregvis();
    }

    // public function __toString()
    // {
    //     return $this->idregvis;
    // }
    // esta no tiene el convert to string porque no necesitamos que pase ningun parametro a cadena

    /**
     * Get idregvis
     *
     * @return integer
     */
    public function getIdregvis()
    {
        return $this->idregvis;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Registrovisitas
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set archivo
     *
     * @param string $archivo
     *
     * @return Registrovisitas
     */
    public function setArchivo($archivo)
    {
        $this->archivo = $archivo;

        return $this;
    }

    /**
     * Get archivo
     *
     * @return string
     */
    public function getArchivo()
    {
        return $this->archivo;
    }

    

    /**
     * Get iduser
     *
     * @return \Juanes\sipaBundle\Entity\User
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    

    /**
     * Get idflia
     *
     * @return \Juanes\sipaBundle\Entity\Familias
     */
    public function getIdflia()
    {
        return $this->idflia;
    }

    /**
     * Add jumregvis
     *
     * @param \Juanes\sipaBundle\Entity\Detallevisitas $jumregvis
     *
     * @return Registrovisitas
     */
    public function addJumregvi(\Juanes\sipaBundle\Entity\Detallevisitas $jumregvis)
    {
        $this->jumregvis[] = $jumregvis;

        return $this;
    }

    /**
     * Remove jumregvis
     *
     * @param \Juanes\sipaBundle\Entity\Detallevisitas $jumregvis
     */
    public function removeJumregvi(\Juanes\sipaBundle\Entity\Detallevisitas $jumregvis)
    {
        $this->jumregvis->removeElement($jumregvi);
    }

    /**
     * Get jumregvis
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJumregvis()
    {
        return $this->jumregvis;
    }



    // /**
    //  * Set iduser
    //  *
    //  * @param \Juanes\sipaBundle\Entity\User $iduser
    //  *
    //  * @return Registrovisitas
    //  */
    // public function setIduser(\Juanes\sipaBundle\Entity\User $iduser = null)
    // {
    //     $this->iduser = $iduser;

    //     return $this;
    // }

    // /**
    //  * Set idflia
    //  *
    //  * @param \Juanes\sipaBundle\Entity\Familias $idflia
    //  *
    //  * @return Registrovisitas
    //  */
    // public function setIdflia(\Juanes\sipaBundle\Entity\Familias $idflia = null)
    // {
    //     $this->idflia = $idflia;

    //     return $this;
    // }


    /**
     * Set jumreguse
     *
     * @param \Juanes\sipaBundle\Entity\User $jumreguse
     *
     * @return Registrovisitas
     */
    public function setJumreguse(\Juanes\sipaBundle\Entity\User $jumreguse = null)
    {
        $this->jumreguse = $jumreguse;

        return $this;
    }

    /**
     * Get jumreguse
     *
     * @return \Juanes\sipaBundle\Entity\User
     */
    public function getJumreguse()
    {
        return $this->jumreguse;
    }

    /**
     * Set jumregfli
     *
     * @param \Juanes\sipaBundle\Entity\Familias $jumregfli
     *
     * @return Registrovisitas
     */
    public function setJumregfli(\Juanes\sipaBundle\Entity\Familias $jumregfli = null)
    {
        $this->jumregfli = $jumregfli;

        return $this;
    }

    /**
     * Get jumregfli
     *
     * @return \Juanes\sipaBundle\Entity\Familias
     */
    public function getJumregfli()
    {
        return $this->jumregfli;
    }
}
