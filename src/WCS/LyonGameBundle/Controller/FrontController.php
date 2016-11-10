<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 10/11/16
 * Time: 14:39
 */

namespace WCS\LyonGameBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WCS\LyonGameBundle\Repository\TripRepository;

class FrontController extends Controller
{
    public function unescoAction()
    {
        $em = $this->getDoctrine()->getManager();
        return $this->render('WCSLyonGameBundle:Front:unesco.html.twig', array(
           'trip_unesco'=> $em->getRepository('WCSLyonGameBundle:Trip')->getTripUnesco () )
        );
    }

    public function pokemonGoAction()
    {
        $em = $this->getDoctrine()->getManager();
        return $this->render('WCSLyonGameBundle:Front:unesco.html.twig', array(
                'trip_unesco'=> $em->getRepository('WCSLyonGameBundle:Trip')->getTripPokemonGo () )
        );
    }

}