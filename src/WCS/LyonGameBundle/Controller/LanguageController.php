<?php

namespace WCS\LyonGameBundle\Controller;

use WCS\LyonGameBundle\Entity\Language;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Language controller.
 *
 */
class LanguageController extends Controller
{
    /**
     * Lists all language entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $languages = $em->getRepository('WCSLyonGameBundle:Language')->findAll();

        return $this->render('language/index.html.twig', array(
            'languages' => $languages,
        ));
    }

    /**
     * Creates a new language entity.
     *
     */
    public function newAction(Request $request)
    {
        $language = new Language();
        $form = $this->createForm('WCS\LyonGameBundle\Form\LanguageType', $language);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($language);
            $em->flush($language);

            return $this->redirectToRoute('language_show', array('id' => $language->getId()));
        }

        return $this->render('language/new.html.twig', array(
            'language' => $language,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a language entity.
     *
     */
    public function showAction(Language $language)
    {
        $deleteForm = $this->createDeleteForm($language);

        return $this->render('language/show.html.twig', array(
            'language' => $language,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing language entity.
     *
     */
    public function editAction(Request $request, Language $language)
    {
        $deleteForm = $this->createDeleteForm($language);
        $editForm = $this->createForm('WCS\LyonGameBundle\Form\LanguageType', $language);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('language_edit', array('id' => $language->getId()));
        }

        return $this->render('language/edit.html.twig', array(
            'language' => $language,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a language entity.
     *
     */
    public function deleteAction(Request $request, Language $language)
    {
        $form = $this->createDeleteForm($language);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($language);
            $em->flush($language);
        }

        return $this->redirectToRoute('language_index');
    }

    /**
     * Creates a form to delete a language entity.
     *
     * @param Language $language The language entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Language $language)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('language_delete', array('id' => $language->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
