<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 10/11/16
 * Time: 14:39
 */

namespace WCS\LyonGameBundle\Controller;


class FrontController
{
    public function unescoAction()
    {
        return $this->render('LyonGameBundle:Front:unesco.html.twig');
    }


}