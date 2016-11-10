<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 10/11/16
 * Time: 14:39
 */

namespace WCS\LyonGameBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
    public function unescoAction()
    {
        return $this->render('WCSLyonGameBundle:Front:unesco.html.twig');
    }


}