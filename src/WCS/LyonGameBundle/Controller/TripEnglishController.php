<?php

namespace WCS\LyonGameBundle\Controller;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use WCS\LyonGameBundle\Entity\TripEnglish;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WCS\LyonGameBundle\Form\TripEnglishType;

/**
 * Tripenglish controller.
 *
 */
class TripEnglishController extends Controller
{
	/**
	 * Lists all tripEnglish entities.
	 *
	 */
	public function indexAction()
	{
		$em = $this->getDoctrine()->getManager();

		$tripEnglishes = $em->getRepository('WCSLyonGameBundle:TripEnglish')->findAll();

		return $this->render('tripenglish/index.html.twig', array(
			'tripEnglishes' => $tripEnglishes,
		));
	}

	/**
	 * Creates a new tripEnglish entity.
	 *
	 */
	public function newAction(Request $request)
	{
		$tripEnglish = new Tripenglish();
		$form = $this->createForm(TripEnglishType::class, $tripEnglish);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->persist($tripEnglish);
			$em->flush($tripEnglish);

			return $this->redirectToRoute('tripenglish_show', array('id' => $tripEnglish->getId()));
		}

		return $this->render('tripenglish/new.html.twig', array(
			'tripEnglish' => $tripEnglish,
			'form' => $form->createView(),
		));
	}

	/**
	 * Finds and displays a tripEnglish entity.
	 *
	 */
	public function showAction(TripEnglish $tripEnglish)
	{
		$deleteForm = $this->createDeleteForm($tripEnglish);

		return $this->render('tripenglish/show.html.twig', array(
			'tripEnglish' => $tripEnglish,
			'delete_form' => $deleteForm->createView(),
		));
	}

	/**
	 * Displays a form to edit an existing tripEnglish entity.
	 *
	 */
	public function editAction(Request $request, TripEnglish $tripEnglish)
	{
		$deleteForm = $this->createDeleteForm($tripEnglish);
		$editForm = $this->createForm(TripEnglishType::class, $tripEnglish);
		$editForm->handleRequest($request);

		if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->getDoctrine()->getManager()->flush();

			return $this->redirectToRoute('tripenglish_edit', array('id' => $tripEnglish->getId()));
		}

		return $this->render('tripenglish/edit.html.twig', array(
			'tripEnglish' => $tripEnglish,
			'edit_form' => $editForm->createView(),
			'delete_form' => $deleteForm->createView(),
		));
	}

	/**
	 * Deletes a tripEnglish entity.
	 *
	 */
	public function deleteAction(Request $request, TripEnglish $tripEnglish): RedirectResponse
	{
		$form = $this->createDeleteForm($tripEnglish);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->remove($tripEnglish);
			$em->flush($tripEnglish);
		}

		return $this->redirectToRoute('tripenglish_index');
	}

	/**
	 * Creates a form to delete a tripEnglish entity.
	 *
	 * @param TripEnglish $tripEnglish The tripEnglish entity
	 *
	 * @return FormInterface The form
	 */
	private function createDeleteForm(TripEnglish $tripEnglish): FormInterface
	{
		return $this->createFormBuilder()
			->setAction($this->generateUrl('tripenglish_delete', array('id' => $tripEnglish->getId())))
			->setMethod('DELETE')
			->getForm();
	}
}
