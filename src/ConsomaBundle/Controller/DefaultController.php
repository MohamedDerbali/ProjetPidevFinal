<?php

namespace ConsomaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ConsomaBundle:Default:index.html.twig');
    }


    public function consomaAction()
    {
        return $this->render('@Consoma/Default/consoma.html.twig');
    }
}
