<?php

namespace Juanes\sipaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JuanessipaBundle:Default:index.html.twig');
    }
}
