<?php

namespace WSAD\StaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('StaticBundle:Default:index.html.twig', array('name' => $name));
    }
}
