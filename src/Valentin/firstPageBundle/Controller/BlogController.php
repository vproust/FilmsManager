<?php
// src/Sdz/BlogBundle/Controller/BlogController.php

namespace Valentin\firstPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;
use Valentin\firstPageBundle\Entity\Article;

class BlogController extends Controller
{
  public function indexAction()
{
  // …

  // Les articles :
  $articles = array(
    array(
      'titre'   => 'Mon weekend a Phi Phi Island !',
      'id'      => 1,
      'auteur'  => 'winzou',
      'contenu' => 'Ce weekend était trop bien. Blabla…',
      'date'    => new \Datetime()),
    array(
      'titre'   => 'Repetition du National Day de Singapour',
      'id'      => 2,
      'auteur' => 'winzou',
      'contenu' => 'Bientôt prêt pour le jour J. Blabla…',
      'date'    => new \Datetime()),
    array(
      'titre'   => 'Chiffre d\'affaire en hausse',
      'id'      => 3, 
      'auteur' => 'M@teo21',
      'contenu' => '+500% sur 1 an, fabuleux. Blabla…',
      'date'    => new \Datetime())
  );
    
  // Puis modifiez la ligne du render comme ceci, pour prendre en compte nos articles :
  return $this->render('ValentinfirstPageBundle:Blog:index.html.twig', array(
    'articles' => $articles
  ));
}
  
  
  public function voirAction($id)
  {
    // Ici, on récupérera l'article correspondant à l'id $idate(format)
    
    return $this->render('ValentinfirstPageBundle:Blog:voir.html.twig', array(
      'id' => $id
    ));
  }
  
  public function ajouterAction()
  {
    // Création de l'entité
    $article = new Article();
    $article->setTitre('Mon dernier weekend');
    $article->setAuteur('Bibi');
    $article->setContenu("C'était vraiment super et on s'est bien amusé.");
    // On peut ne pas définir ni la date ni la publication,
    // car ces attributs sont définis automatiquement dans le constructeur

    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();

    // Étape 1 : On « persiste » l'entité
    $em->persist($article);

    // Étape 2 : On « flush » tout ce qui a été persisté avant
    $em->flush();
    
    // Reste de la méthode qu'on avait déjà écrit
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');
      return $this->redirect( $this->generateUrl('Valentinfirst_Page_voir', array('id' => $article->getId())) );
    }

    return $this->render('ValentinfirstPageBundle:Blog:ajouter.html.twig');
  }
  
  public function modifierAction($id)
  {
    // Ici, on récupérera l'article correspondant à $id

    // Ici, on s'occupera de la création et de la gestion du formulaire

    return $this->render('ValentinfirstPageBundle:Blog:modifier.html.twig');
  }

  public function supprimerAction($id)
  {
    // Ici, on récupérera l'article correspondant à $id

    // Ici, on gérera la suppression de l'article en question

    return $this->render('ValentinfirstPageBundle:Blog:supprimer.html.twig');
  }

  public function menuAction($nombre) // Ici, nouvel argument $nombre, on l'a transmis via le render() depuis la vue
  {
    // On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
    // On pourra récupérer $nombre articles depuis la BDD,
    // avec $nombre un paramètre qu'on peut changer lorsqu'on appelle cette action
    $liste = array(
      array('id' => 2, 'titre' => 'Mon dernier weekend !'),
      array('id' => 5, 'titre' => 'Sortie de Symfony2.1'),
      array('id' => 9, 'titre' => 'Petit test')
    );
    
    return $this->render('ValentinfirstPageBundle:Blog:menu.html.twig', array(
      'liste_articles' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
    ));
	}
}