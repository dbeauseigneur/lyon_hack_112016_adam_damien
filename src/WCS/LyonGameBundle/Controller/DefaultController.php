<?php

namespace WCS\LyonGameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WCSLyonGameBundle:Default:index.html.twig');
    }
}
