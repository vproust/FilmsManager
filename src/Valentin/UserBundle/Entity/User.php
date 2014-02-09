<?php

namespace Valentin\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Valentin\FilmsManagerBundle\Entity\User as FilmsManagerUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="filmsManager_user")
 */
class User extends BaseUser
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @ORM\OneToOne(targetEntity="Valentin\FilmsManagerBundle\Entity\User", cascade={"persist"})
   */
  protected $filmsManagerUser;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set filmsManagerUser
     *
     * @param \Valentin\FilmsManagerBundle\Entity\User $filmsManagerUser
     * @return User
     */
    public function setFilmsManagerUser(\Valentin\FilmsManagerBundle\Entity\User $filmsManagerUser = null)
    {
        $this->filmsManagerUser = $filmsManagerUser;

        return $this;
    }

    /**
     * Get filmsManagerUser
     *
     * @return \Valentin\FilmsManagerBundle\Entity\User 
     */
    public function getFilmsManagerUser()
    {
    	if($this->filmsManagerUser == null){
    		$filmsManagerUser = new \Valentin\FilmsManagerBundle\Entity\User();
    		$this->setFilmsManagerUser($filmsManagerUser);
    	}
        return $this->filmsManagerUser;
    }
}
