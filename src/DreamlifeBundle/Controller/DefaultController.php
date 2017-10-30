<?php

namespace DreamlifeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DreamlifeBundle:Default:index.html.twig');
    }
}
