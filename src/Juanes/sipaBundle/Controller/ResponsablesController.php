<?php

namespace Juanes\sipaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Juanes\sipaBundle\Entity\Responsables;
use Juanes\sipaBundle\Form\ResponsablesType;

/**
 * Responsables controller.
 *
 */
class ResponsablesController extends Controller
{
    /**
     * Lists all Responsables entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $responsables = $em->getRepository('JuanessipaBundle:Responsables')->findAll();

        return $this->render('responsables/index.html.twig', array(
            'responsables' => $responsables,
        ));
    }

    /**
     * Creates a new Responsables entity.
     *
     */
    public function newAction(Request $request)
    {
        $responsable = new Responsables();
        $form = $this->createForm('Juanes\sipaBundle\Form\ResponsablesType', $responsable);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($responsable);
            $em->flush();

            return $this->redirectToRoute('admin_responsables_show', array('id' => $responsable->getIdres()));
        }

        return $this->render('responsables/new.html.twig', array(
            'responsable' => $responsable,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Responsables entity.
     *
     */
    public function showAction(Responsables $responsable)
    {
        $deleteForm = $this->createDeleteForm($responsable);

        return $this->render('responsables/show.html.twig', array(
            'responsable' => $responsable,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Responsables entity.
     *
     */
    public function editAction(Request $request, Responsables $responsable)
    {
        $deleteForm = $this->createDeleteForm($responsable);
        $editForm = $this->createForm('Juanes\sipaBundle\Form\ResponsablesType', $responsable);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($responsable);
            $em->flush();

            return $this->redirectToRoute('admin_responsables_edit', array('id' => $responsable->getIdres()));
        }

        return $this->render('responsables/edit.html.twig', array(
            'responsable' => $responsable,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Responsables entity.
     *
     */
    public function deleteAction(Request $request, Responsables $responsable)
    {
        $form = $this->createDeleteForm($responsable);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($responsable);
            $em->flush();
        }

        return $this->redirectToRoute('admin_responsables_index');
    }

    /**
     * Creates a form to delete a Responsables entity.
     *
     * @param Responsables $responsable The Responsables entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Responsables $responsable)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_responsables_delete', array('id' => $responsable->getIdres())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
