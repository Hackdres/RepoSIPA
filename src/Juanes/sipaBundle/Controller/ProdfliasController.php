<?php

namespace Juanes\sipaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Juanes\sipaBundle\Entity\Prodflias;
use Juanes\sipaBundle\Form\ProdfliasType;

/**
 * Prodflias controller.
 *
 */
class ProdfliasController extends Controller
{
    /**
     * Lists all Prodflias entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $prodflias = $em->getRepository('JuanessipaBundle:Prodflias')->findAll();

        return $this->render('prodflias/index.html.twig', array(
            'prodflias' => $prodflias,
        ));
    }

    /**
     * Creates a new Prodflias entity.
     *
     */
    public function newAction(Request $request)
    {
        $prodflia = new Prodflias();
        $form = $this->createForm('Juanes\sipaBundle\Form\ProdfliasType', $prodflia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($prodflia);
            $em->flush();

            return $this->redirectToRoute('admin_prodflias_show', array('id' => $prodflia->getIdprodflia()));
        }

        return $this->render('prodflias/new.html.twig', array(
            'prodflia' => $prodflia,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Prodflias entity.
     *
     */
    public function showAction(Prodflias $prodflia)
    {
        $deleteForm = $this->createDeleteForm($prodflia);

        return $this->render('prodflias/show.html.twig', array(
            'prodflia' => $prodflia,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Prodflias entity.
     *
     */
    public function editAction(Request $request, Prodflias $prodflia)
    {
        $deleteForm = $this->createDeleteForm($prodflia);
        $editForm = $this->createForm('Juanes\sipaBundle\Form\ProdfliasType', $prodflia);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($prodflia);
            $em->flush();

            return $this->redirectToRoute('admin_prodflias_edit', array('id' => $prodflia->getIdprodflia()));
        }

        return $this->render('prodflias/edit.html.twig', array(
            'prodflia' => $prodflia,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Prodflias entity.
     *
     */
    public function deleteAction(Request $request, Prodflias $prodflia)
    {
        $form = $this->createDeleteForm($prodflia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($prodflia);
            $em->flush();
        }

        return $this->redirectToRoute('admin_prodflias_index');
    }

    /**
     * Creates a form to delete a Prodflias entity.
     *
     * @param Prodflias $prodflia The Prodflias entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Prodflias $prodflia)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_prodflias_delete', array('id' => $prodflia->getIdprodflia())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
