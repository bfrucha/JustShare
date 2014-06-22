<?php

namespace JustShare\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JustShareTestBundle:Default:index.html.twig', array('name' => $name));
    }
}

?>