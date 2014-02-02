<?php

namespace Valentin\FilmsManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;
use Valentin\FilmsManagerBundle\Entity\User;
use Valentin\FilmsManagerBundle\Entity\Film;
use Valentin\FilmsManagerBundle\Form\UserType;

class ManagerController extends Controller
{
	public function indexAction()
	{
		// Get the users of the app
		$users = $this->getDoctrine()
		->getManager()
		->getRepository('ValentinFilmsManagerBundle:User')
		->findAll();
		// Everything go to the view
		return $this->render('ValentinFilmsManagerBundle:Manager:index.html.twig', array(
		'users' => $users
		));
	}
	public function addUserAction()
	{
	  // Creation of a user object
	  $user = new User();

	  // On ajoute les champs de l'entité que l'on veut à notre formulaire
	  $form = $this->createForm(new UserType, $user);
	   // On récupère la requête
    $request = $this->get('request');

    // On vérifie qu'elle est de type POST
    if ($request->getMethod() == 'POST') {
      // On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
      $form->bind($request);

      // On vérifie que les valeurs entrées sont correctes
      // (Nous verrons la validation des objets en détail dans le prochain chapitre)
      if ($form->isValid()) {
      	$em = $this->getDoctrine()->getManager();
      	$em->persist($user);
        $em->flush();

        // On redirige vers la page de visualisation de l'article nouvellement créé
        return $this->redirect($this->generateUrl('valentin_films_manager_index'));
      }
  }
	  // On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
	  return $this->render('ValentinFilmsManagerBundle:Manager:addUser.html.twig', array(
	    'form' => $form->createView(),
	  ));
		
	}
	public function addUserManuallyAction()
	{
	  // Creation of a user object
	  $user = new User();
	  $user->setName('Valentin');
	  $user->setFirstName('Proust');
	  $film = new Film();
	  $film->setName('roi');
	  $film->setGenre('fd');
	  $user->addFilm($film);
	  $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        return $this->redirect($this->generateUrl('valentin_films_manager_index'));

    }
}
