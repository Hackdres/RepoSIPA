<?php

namespace Juanes\sipaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Juanes\sipaBundle\Entity\Municipios;
use Juanes\sipaBundle\Form\MunicipiosType;

/**
 * Municipios controller.
 *
 */
class MunicipiosController extends Controller
{
    /**
     * Lists all Municipios entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $municipios = $em->getRepository('JuanessipaBundle:Municipios')->findAll();

        return $this->render('municipios/index.html.twig', array(
            'municipios' => $municipios,
        ));
    }

    /**
     * Creates a new Municipios entity.
     *
     */
    public function newAction(Request $request)
    {
        $municipio = new Municipios();
        $form = $this->createForm('Juanes\sipaBundle\Form\MunicipiosType', $municipio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($municipio);
            $em->flush();

            return $this->redirectToRoute('admin_municipios_show', array('id' => $municipio->getIdmunicipio()));
        }

        return $this->render('municipios/new.html.twig', array(
            'municipio' => $municipio,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Municipios entity.
     *
     */
    public function showAction(Municipios $municipio)
    {
        $deleteForm = $this->createDeleteForm($municipio);

        return $this->render('municipios/show.html.twig', array(
            'municipio' => $municipio,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Municipios entity.
     *
     */
    public function editAction(Request $request, Municipios $municipio)
    {
        $deleteForm = $this->createDeleteForm($municipio);
        $editForm = $this->createForm('Juanes\sipaBundle\Form\MunicipiosType', $municipio);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($municipio);
            $em->flush();

            return $this->redirectToRoute('admin_municipios_edit', array('id' => $municipio->getIdmunicipio()));
        }

        return $this->render('municipios/edit.html.twig', array(
            'municipio' => $municipio,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Municipios entity.
     *
     */
    public function deleteAction(Request $request, Municipios $municipio)
    {
        $form = $this->createDeleteForm($municipio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($municipio);
            $em->flush();
        }

        return $this->redirectToRoute('admin_municipios_index');
    }

    /**
     * Creates a form to delete a Municipios entity.
     *
     * @param Municipios $municipio The Municipios entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Municipios $municipio)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_municipios_delete', array('id' => $municipio->getIdmunicipio())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
