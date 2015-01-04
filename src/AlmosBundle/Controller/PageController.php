<?php
// src/Blogger/BlogBundle/Controller/PageController.php

namespace AlmosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('AlmosBundle:Page:index.html.twig');
    }
}