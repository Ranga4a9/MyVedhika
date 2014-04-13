<?php

namespace Application\MyVedhikaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApplicationMyVedhikaBundle:Default:index.html.twig', array('name' => $name));
    }
}
