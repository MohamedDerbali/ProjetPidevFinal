<?php

namespace SanteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SanteBundle:Default:index.html.twig');
    }

    public function santeAction()
    {
        return $this->render('@Sante/Default/sante.html.twig');
    }
}
