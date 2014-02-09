<?php

namespace Valentin\FilmsManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Valentin\FilmsManagerBundle\Entity\UserRepository")
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @ORM\OneToMany(targetEntity="Valentin\FilmsManagerBundle\Entity\Film",mappedBy="user",cascade={"persist"})
    */
    private $films; // Ici commentaires prend un « s », car un article a plusieurs commentaires !



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
     * Constructor
     */
    public function __construct()
    {
        $this->films = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add film
     *
     * @param \Valentin\FilmsManagerBundle\Entity\Film $film
     * @return User
     */
    public function addFilm(\Valentin\FilmsManagerBundle\Entity\Film $film)
    {
        $film->setUser($this);
        $this->films[] = $film;
        return $this;
    }

    /**
     * Remove film
     *
     * @param \Valentin\FilmsManagerBundle\Entity\Film $film
     */
    public function removeFilm(\Valentin\FilmsManagerBundle\Entity\Film $film)
    {
        $this->films->removeElement($film);
    }

    /**
     * Get films
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFilms()
    {
        return $this->films;
    }
}
