<?php

namespace Valentin\firstPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ValentinfirstPageBundle:Default:index.html.twig', array('name' => $name));
    }
}
