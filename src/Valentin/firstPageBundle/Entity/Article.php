<?php

namespace Valentin\firstPageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Article
{
   /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="date", type="date")
   */
  private $date;

  /**
   * @ORM\Column(name="titre", type="string", length=255)
   */
  private $titre;

  /**
   * @ORM\Column(name="auteur", type="string", length=255)
   */
  private $auteur;

  /**
   * @ORM\Column(name="contenu", type="text")
   */
  private $contenu;

  /**
   * @ORM\OneToOne(targetEntity="Valentin\firstPageBundle\Entity\Image", cascade={"persist"})
   */
  private $image;

  // Et bien sûr les getters/setters :

  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }

  public function setDate($date)
  {
    $this->date = $date;
  }
  public function getDate()
  {
    return $this->date;
  }

  public function setTitre($titre)
  {
    $this->titre = $titre;
  }
  public function getTitre()
  {
    return $this->titre;
  }

  public function setAuteur($auteur)
  {
    $this->auteur = $auteur;
  }
  public function getAuteur()
  {
    return $this->auteur;
  }

  public function setContenu($contenu)
  {
    $this->contenu = $contenu;
  }
  public function getContenu()
  {
    return $this->contenu;
  }

    /**
     * Set image
     *
     * @param \Valentin\firstPageBundle\Entity\Image $image
     * @return Article
     */
    public function setImage(\Valentin\firstPageBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Valentin\firstPageBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }
}
