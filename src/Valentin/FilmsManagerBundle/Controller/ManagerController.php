<?php

namespace Valentin\FilmsManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;
use Valentin\FilmsManagerBundle\Entity\User;
use Valentin\FilmsManagerBundle\Entity\Film;
use Valentin\FilmsManagerBundle\Form\UserType;
use Valentin\FilmsManagerBundle\Form\FilmType;

class ManagerController extends Controller
{
	public function indexAction()
	{
		$currentUser = $this->get('security.context')->getToken()->getUser();
		// Get the users of the app

		$users = $this->getDoctrine()
		->getManager()
		->getRepository('ValentinUserBundle:User')
		->findAll();



		// Everything go to the view
		return $this->render('ValentinFilmsManagerBundle:Manager:index.html.twig', array(
			'users' => $users,
			'currentUser' => $currentUser
			));
	}
	public function addUserAction()
	{
	  // Creation of a user object
		$user = new User();

		$form = $this->createForm(new UserType, $user);
		
		$request = $this->get('request');

		if ($request->getMethod() == 'POST') {
			$form->bind($request);

      // Checking the validity of the submission
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($user);
				$em->flush();

        // Redirection to the homepage of Bundle
				return $this->redirect($this->generateUrl('valentin_films_manager_index'));
			}
		}
		return $this->render('ValentinFilmsManagerBundle:Manager:addUser.html.twig', array(
			'form' => $form->createView(),
			));
		
	}
	public function addFilmAction()
	{
	  // Creation of a film object
		$film = new Film();

		$form = $this->createForm(new FilmType, $film);
		$request = $this->get('request');

		if ($request->getMethod() == 'POST') {
			$form->bind($request);

			
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$user = new User();
				$repository = $this->getDoctrine()
				->getManager()
				->getRepository('ValentinFilmsManagerBundle:User');

				$user = $this->get('security.context')->getToken()->getUser();
				$user->getFilmsManagerUser()->addFilm($film);
				$em->persist($user);
				$em->flush();

				
				return $this->redirect($this->generateUrl('valentin_films_manager_index'));
			}
		}
		return $this->render('ValentinFilmsManagerBundle:Manager:addFilm.html.twig', array(
			'form' => $form->createView(),
			));

	}
	public function removeFilmAction(Film $film){
		$em = $this->getDoctrine()->getManager();
		$em->remove($film);
		$em->flush();
		
		$this->get('session')->getFlashBag()->add('info', 'Film removed from the list');
		
		return $this->redirect($this->generateUrl('valentin_films_manager_index'));
	}
}
