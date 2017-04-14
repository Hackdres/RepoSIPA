<?php

namespace Juanes\sipaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 */
class User implements UserInterface
{
    /**
     * @var integer
     */
    private $iduser;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $nomuser;
    
    /**
     * @var string
     */
    private $apeuser;

    /**
     * @var integer
     */
    private $docuser;

    /**
     * @var string
     */
    private $password;


    private $jumuser;

    public function __construct()
    {
        $this->jumuser = new ArrayCollection();
    }

    public function __toString()
    {
        return (string) $this->getIduser();
    }
    /**
     * Get iduser
     *
     * @return integer
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set nomuser
     *
     * @param string $nomuser
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get nomuser
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set nomuser
     *
     * @param string $nomuser
     *
     * @return User
     */
    public function setNomuser($nomuser)
    {
        $this->nomuser = $nomuser;

        return $this;
    }

    /**
     * Get nomuser
     *
     * @return string
     */
    public function getNomuser()
    {
        return $this->nomuser;
    }

    /**
     * Set apeuser
     *
     * @param string $apeuser
     *
     * @return User
     */
    public function setApeuser($apeuser)
    {
        $this->apeuser = $apeuser;

        return $this;
    }

    /**
     * Get apeuser
     *
     * @return string
     */
    public function getApeuser()
    {
        return $this->apeuser;
    }

    /**
     * Set docuser
     *
     * @param integer $docuser
     *
     * @return User
     */
    public function setDocuser($docuser)
    {
        $this->docuser = $docuser;

        return $this;
    }

    /**
     * Get docuser
     *
     * @return integer
     */
    public function getDocuser()
    {
        return $this->docuser;
    }

    /**
     * Set passuser
     *
     * @param string $passuser
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_BCRYPT);

        return $this;
    }

    /**
     * Get passuser
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }
    public function getRoles()
    {
        return array('ROLE_USER');
        return array('ROLE_ADMIN');
    }
    public function eraseCredentials()
    {
    }

    // /**
    //  * Constructor
    //  */
    // public function __construct()
    // {
    //     $this->jumuser = new \Doctrine\Common\Collections\ArrayCollection();
    // }

    /**
     * Add jumuser
     *
     * @param \Juanes\sipaBundle\Entity\Registrovisitas $jumuser
     *
     * @return User
     */
    public function addJumuser(\Juanes\sipaBundle\Entity\Registrovisitas $jumuser)
    {
        $this->jumuser[] = $jumuser;

        return $this;
    }

    /**
     * Remove jumuser
     *
     * @param \Juanes\sipaBundle\Entity\Registrovisitas $jumuser
     */
    public function removeJumuser(\Juanes\sipaBundle\Entity\Registrovisitas $jumuser)
    {
        $this->jumuser->removeElement($jumuser);
    }

    /**
     * Get jumuser
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJumuser()
    {
        return $this->jumuser;
    }
}
