<?php

namespace AlmosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AlmosBundle:Default:index.html.twig', array('name' => $name));
    }
}
