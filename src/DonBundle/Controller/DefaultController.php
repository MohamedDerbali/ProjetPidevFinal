<?php

namespace DonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //return $this->render('DonBundle:Default:index.html.twig');
    }

    public function donAction()
    {
        return $this->render('@Don/Default/don.html.twig');
    }
}
