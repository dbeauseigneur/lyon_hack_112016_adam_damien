<?php

namespace WCS\LyonGameBundle\Controller;

use WCS\LyonGameBundle\Entity\Trip;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Trip controller.
 *
 */
class TripController extends Controller
{
    /**
     * Lists all trip entities.
     *
     */
    public function indexAction()
	{
		$em = $this->getDoctrine()->getManager();

		$trips = $em->getRepository('WCSLyonGameBundle:Trip')->findAll();

		return $this->render('trip/index.html.twig', array(
			'trips' => $trips,
		));
	}

	public function unescoAction(Trip $trip)
	{
		$em = $this->getDoctrine()->getManager();
		return $this->render('WCSLyonGameBundle:Front:unesco.html.twig', array(
				'trip_unesco' => $em->getRepository('WCSLyonGameBundle:Trip')->getTripUnesco(),
				/*'trip_unesco'=>'test',*/
				'trip_gen' => $trip)
		);
	}

	public function pokemonGoAction()
	{
		$em = $this->getDoctrine()->getManager();
		return $this->render('WCSLyonGameBundle:Front:unesco.html.twig', array(
				'trip_unesco' => $em->getRepository('WCSLyonGameBundle:Trip')->getTripPokemonGo())
		);
	}

	/**
	 * Creates a new trip entity.
	 *
	 */
	public function newAction(Request $request)
	{
		$trip = new Trip();
		$form = $this->createForm('WCS\LyonGameBundle\Form\TripType', $trip);
		$form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trip);
            $em->flush($trip);

            return $this->redirectToRoute('trip_show', array('id' => $trip->getId()));
        }

        return $this->render('trip/new.html.twig', array(
            'trip' => $trip,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a trip entity.
     *
     */
    public function showAction(Trip $trip)
    {
        $deleteForm = $this->createDeleteForm($trip);

        return $this->render('trip/show.html.twig', array(
            'trip' => $trip,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing trip entity.
     *
     */
    public function editAction(Request $request, Trip $trip)
    {
        $deleteForm = $this->createDeleteForm($trip);
        $editForm = $this->createForm('WCS\LyonGameBundle\Form\TripType', $trip);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('trip_edit', array('id' => $trip->getId()));
        }

        return $this->render('trip/edit.html.twig', array(
            'trip' => $trip,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a trip entity.
     *
     */
    public function deleteAction(Request $request, Trip $trip)
    {
        $form = $this->createDeleteForm($trip);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($trip);
            $em->flush($trip);
        }

        return $this->redirectToRoute('trip_index');
    }

    /**
     * Creates a form to delete a trip entity.
     *
     * @param Trip $trip The trip entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Trip $trip)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('trip_delete', array('id' => $trip->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
