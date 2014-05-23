<?php

namespace ItoSoftware\Components\ModelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ItoModelBundle:Default:index.html.twig', array('name' => $name));
    }
}
