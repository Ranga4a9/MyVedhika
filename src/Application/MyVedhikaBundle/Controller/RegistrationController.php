<?php

namespace Application\MyVedhikaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrationController extends Controller
{
    public function registrationAction()
    {
        return $this->render('ApplicationMyVedhikaBundle:Registration:registration.html.twig');
    }
}
