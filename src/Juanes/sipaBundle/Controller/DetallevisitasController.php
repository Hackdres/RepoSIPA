<?php

namespace Juanes\sipaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Juanes\sipaBundle\Entity\Detallevisitas;
use Juanes\sipaBundle\Entity\Actividades;
use Juanes\sipaBundle\Form\DetallevisitasType;

/**
 * Detallevisitas controller.
 *
 */
class DetallevisitasController extends Controller
{
    /**
     * Lists all Detallevisitas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $detallevisitas = $em->getRepository('JuanessipaBundle:Detallevisitas')->findAll();

        return $this->render('detallevisitas/index.html.twig', array(
            'detallevisitas' => $detallevisitas,
        ));
    }

    /**
     * Creates a new Detallevisitas entity.
     *
     */
    public function newAction(Request $request)
    {
        $detallevisita = new Detallevisitas();
        $form = $this->createForm('Juanes\sipaBundle\Form\DetallevisitasType', $detallevisita);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            // probando que funcione
            // Recogemos el fichero
            $file=$form['archivo']->getData();
             
            // Sacamos la extensión del fichero
            $ext=$file->guessExtension();
             
            // Le ponemos un nombre al fichero
            $file_name=time().".".$ext;
             
            // Guardamos el fichero en el directorio uploads que estará en el directorio /web del framework
            $file->move("uploads", $file_name);
             
            // Establecemos el nombre de fichero en el atributo de la entidad
            $detallevisita->setArchivo($file_name);
            // fin probando que funcione
            $em->persist($detallevisita);
            $em->flush();

            return $this->redirectToRoute('detallevisitas_show', array('id' => $detallevisita->getIdregactdet()));
        }

        return $this->render('detallevisitas/new.html.twig', array(
            'detallevisita' => $detallevisita,
            'form' => $form->createView(),
        ));

    }

    /**
     * Finds and displays a Detallevisitas entity.
     *
     */
    public function showAction(Detallevisitas $detallevisita)
    {
        $deleteForm = $this->createDeleteForm($detallevisita);

        return $this->render('detallevisitas/show.html.twig', array(
            'detallevisita' => $detallevisita,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Detallevisitas entity.
     *
     */
    public function editAction(Request $request, Detallevisitas $detallevisita)
    {
        $deleteForm = $this->createDeleteForm($detallevisita);
        $editForm = $this->createForm('Juanes\sipaBundle\Form\DetallevisitasType', $detallevisita);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($detallevisita);
            $em->flush();

            return $this->redirectToRoute('detallevisitas_edit', array('id' => $detallevisita->getIdregactdet()));
        }

        return $this->render('detallevisitas/edit.html.twig', array(
            'detallevisita' => $detallevisita,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Detallevisitas entity.
     *
     */
    public function deleteAction(Request $request, Detallevisitas $detallevisita)
    {
        $form = $this->createDeleteForm($detallevisita);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($detallevisita);
            $em->flush();
        }

        return $this->redirectToRoute('detallevisitas_index');
    }

    /**
     * Creates a form to delete a Detallevisitas entity.
     *
     * @param Detallevisitas $detallevisita The Detallevisitas entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Detallevisitas $detallevisita)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('detallevisitas_delete', array('id' => $detallevisita->getIdregactdet())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
