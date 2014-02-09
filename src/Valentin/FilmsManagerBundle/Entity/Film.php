<?php

namespace Valentin\FilmsManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Valentin\FilmsManagerBundle\Entity\FilmRepository")
 */
class Film
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Valentin\FilmsManagerBundle\Entity\Genre",cascade={"persist"})
     */
    private $genre;

    /**
     * @ORM\ManyToOne(targetEntity="Valentin\FilmsManagerBundle\Entity\User",inversedBy="films",cascade={"persist"})    
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;


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
     * Set name
     *
     * @param string $name
     * @return Film
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set user
     *
     * @param \Valentin\FilmsManagerBundle\Entity\User $user
     * @return Film
     */
    public function setUser(\Valentin\FilmsManagerBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Valentin\FilmsManagerBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set genre
     *
     * @param \Valentin\FilmsManagerBundle\Entity\Genre $genre
     * @return Film
     */
    public function setGenre(\Valentin\FilmsManagerBundle\Entity\Genre $genre = null)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return \Valentin\FilmsManagerBundle\Entity\Genre 
     */
    public function getGenre()
    {
        return $this->genre;
    }
}
