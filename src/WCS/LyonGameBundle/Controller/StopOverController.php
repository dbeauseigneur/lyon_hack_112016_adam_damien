<?php

namespace WCS\LyonGameBundle\Controller;

use WCS\LyonGameBundle\Entity\StopOver;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Stopover controller.
 *
 */
class StopOverController extends Controller
{
    /**
     * Lists all stopOver entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $stopOvers = $em->getRepository('WCSLyonGameBundle:StopOver')->findAll();

        return $this->render('stopover/index.html.twig', array(
            'stopOvers' => $stopOvers,
        ));
    }

    /**
     * Creates a new stopOver entity.
     *
     */
    public function newAction(Request $request)
    {
        $stopOver = new Stopover();
        $form = $this->createForm('WCS\LyonGameBundle\Form\StopOverType', $stopOver);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($stopOver);
            $em->flush($stopOver);

            return $this->redirectToRoute('stopover_show', array('id' => $stopOver->getId()));
        }

        return $this->render('stopover/new.html.twig', array(
            'stopOver' => $stopOver,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a stopOver entity.
     *
     */
    public function showAction(StopOver $stopOver)
    {
        $deleteForm = $this->createDeleteForm($stopOver);

        return $this->render('stopover/show.html.twig', array(
            'stopOver' => $stopOver,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing stopOver entity.
     *
     */
    public function editAction(Request $request, StopOver $stopOver)
    {
        $deleteForm = $this->createDeleteForm($stopOver);
        $editForm = $this->createForm('WCS\LyonGameBundle\Form\StopOverType', $stopOver);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('stopover_edit', array('id' => $stopOver->getId()));
        }

        return $this->render('stopover/edit.html.twig', array(
            'stopOver' => $stopOver,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a stopOver entity.
     *
     */
    public function deleteAction(Request $request, StopOver $stopOver)
    {
        $form = $this->createDeleteForm($stopOver);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($stopOver);
            $em->flush($stopOver);
        }

        return $this->redirectToRoute('stopover_index');
    }

    /**
     * Creates a form to delete a stopOver entity.
     *
     * @param StopOver $stopOver The stopOver entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(StopOver $stopOver)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('stopover_delete', array('id' => $stopOver->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
