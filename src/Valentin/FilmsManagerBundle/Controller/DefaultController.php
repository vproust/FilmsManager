<?php

namespace Valentin\FilmsManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ValentinFilmsManagerBundle:Default:index.html.twig', array('name' => $name));
    }
}
