<?php

namespace EuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EuBundle:Default:index.html.twig');
    }
}
