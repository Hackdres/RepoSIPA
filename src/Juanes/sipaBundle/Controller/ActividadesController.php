<?php

namespace Juanes\sipaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Juanes\sipaBundle\Entity\Actividades;
use Juanes\sipaBundle\Form\ActividadesType;

/**
 * Actividades controller.
 *
 */
class ActividadesController extends Controller
{
    /**
     * Lists all Actividades entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $actividades = $em->getRepository('JuanessipaBundle:Actividades')->findAll();

        return $this->render('actividades/index.html.twig', array(
            'actividades' => $actividades,
        ));
    }

    /**
     * Creates a new Actividades entity.
     *
     */
    public function newAction(Request $request)
    {
        $actividade = new Actividades();
        $form = $this->createForm('Juanes\sipaBundle\Form\ActividadesType', $actividade);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($actividade);
            $em->flush();

            return $this->redirectToRoute('admin_actividades_show', array('id' => $actividade->getIdactividad()));
        }

        return $this->render('actividades/new.html.twig', array(
            'actividade' => $actividade,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Actividades entity.
     *
     */
    public function showAction(Actividades $actividade)
    {
        $deleteForm = $this->createDeleteForm($actividade);

        return $this->render('actividades/show.html.twig', array(
            'actividade' => $actividade,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Actividades entity.
     *
     */
    public function editAction(Request $request, Actividades $actividade)
    {
        $deleteForm = $this->createDeleteForm($actividade);
        $editForm = $this->createForm('Juanes\sipaBundle\Form\ActividadesType', $actividade);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($actividade);
            $em->flush();

            return $this->redirectToRoute('admin_actividades_edit', array('id' => $actividade->getIdactividad()));
        }

        return $this->render('actividades/edit.html.twig', array(
            'actividade' => $actividade,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Actividades entity.
     *
     */
    public function deleteAction(Request $request, Actividades $actividade)
    {
        $form = $this->createDeleteForm($actividade);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($actividade);
            $em->flush();
        }

        return $this->redirectToRoute('admin_actividades_index');
    }

    /**
     * Creates a form to delete a Actividades entity.
     *
     * @param Actividades $actividade The Actividades entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Actividades $actividade)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_actividades_delete', array('id' => $actividade->getIdactividad())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
