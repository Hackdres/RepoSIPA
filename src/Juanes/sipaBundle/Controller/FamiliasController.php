<?php

namespace Juanes\sipaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Juanes\sipaBundle\Entity\Familias;
use Juanes\sipaBundle\Form\FamiliasType;

/**
 * Familias controller.
 *
 */
class FamiliasController extends Controller
{
    /**
     * Lists all Familias entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $familias = $em->getRepository('JuanessipaBundle:Familias')->findAll();

        return $this->render('familias/index.html.twig', array(
            'familias' => $familias,
        ));
    }

    /**
     * Creates a new Familias entity.
     *
     */
    public function newAction(Request $request)
    {
        $familia = new Familias();
        $form = $this->createForm('Juanes\sipaBundle\Form\FamiliasType', $familia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($familia);
            $em->flush();

            return $this->redirectToRoute('admin_familias_show', array('id' => $familia->getIdflia()));
        }

        return $this->render('familias/new.html.twig', array(
            'familia' => $familia,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Familias entity.
     *
     */
    public function showAction(Familias $familia)
    {
        $deleteForm = $this->createDeleteForm($familia);

        return $this->render('familias/show.html.twig', array(
            'familia' => $familia,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Familias entity.
     *
     */
    public function editAction(Request $request, Familias $familia)
    {
        $deleteForm = $this->createDeleteForm($familia);
        $editForm = $this->createForm('Juanes\sipaBundle\Form\FamiliasType', $familia);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($familia);
            $em->flush();

            return $this->redirectToRoute('admin_familias_edit', array('id' => $familia->getIdflia()));
        }

        return $this->render('familias/edit.html.twig', array(
            'familia' => $familia,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Familias entity.
     *
     */
    public function deleteAction(Request $request, Familias $familia)
    {
        $form = $this->createDeleteForm($familia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($familia);
            $em->flush();
        }

        return $this->redirectToRoute('admin_familias_index');
    }

    /**
     * Creates a form to delete a Familias entity.
     *
     * @param Familias $familia The Familias entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Familias $familia)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_familias_delete', array('id' => $familia->getIdflia())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
