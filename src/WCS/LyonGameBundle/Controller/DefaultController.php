<?php

namespace WCS\LyonGameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WCSLyonGameBundle:Default:index.html.twig');
    }

    private function getDistanceM($lat1, $lng1, $lat2, $lng2) {
        $earth_radius = 6378137;   // Terre = sphère de 6378km de rayon
        $rlo1 = deg2rad($lng1);
        $rla1 = deg2rad($lat1);
        $rlo2 = deg2rad($lng2);
        $rla2 = deg2rad($lat2);
        $dlo = ($rlo2 - $rlo1) / 2;
        $dla = ($rla2 - $rla1) / 2;
        $a = (sin($dla) * sin($dla)) + cos($rla1) * cos($rla2) * (sin($dlo) * sin($dlo
                ));
        $d = 2 * atan2(sqrt($a), sqrt(1 - $a));
        return ($earth_radius * $d);
    }


    public function testLocAction ()
    {
        if (isset($_REQUEST['lng'])) {
			$longitude = $_REQUEST['lng'];
			$latitude = $_REQUEST['lat'];
			$dist = $this->getDistanceM(45.7542305, 4.8386187, (float)$latitude, (float)$longitude); /*$longitude, $latitude);*/
			if ($dist <= 30) {
				$arrival = "arrived";
			} else {
				$arrival = "not now";
			}
		} else {
			$longitude = "";
			$latitude = "";
			$arrival = "not now";
		}

        return $this->render('front/testloc.html.twig',array(
        'longitude' => $longitude,
        'latitude' => $latitude,
        'arrival' => $arrival));
    }
}
