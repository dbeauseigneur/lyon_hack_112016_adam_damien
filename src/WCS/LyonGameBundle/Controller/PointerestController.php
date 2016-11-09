<?php

namespace WCS\LyonGameBundle\Controller;

use WCS\LyonGameBundle\Entity\Pointerest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Pointerest controller.
 *
 */
class PointerestController extends Controller
{
    /**
     * Lists all pointerest entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pointerests = $em->getRepository('WCSLyonGameBundle:Pointerest')->findAll();

        return $this->render('pointerest/index.html.twig', array(
            'pointerests' => $pointerests,
        ));
    }

    /**
     * Finds and displays a pointerest entity.
     *
     */
    public function showAction(Pointerest $pointerest)
    {

        return $this->render('pointerest/show.html.twig', array(
            'pointerest' => $pointerest,
        ));
    }
}
