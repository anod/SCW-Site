<?php

namespace SCW\SkinsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('SkinsBundle:Default:index.html.twig', array('name' => $name));
    }
}
