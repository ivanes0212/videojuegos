<?php

namespace uniVideojuegos\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('uniVideojuegosBundle:Default:index.html.twig');
    }
}
