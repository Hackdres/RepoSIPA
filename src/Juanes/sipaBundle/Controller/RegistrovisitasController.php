<?php

namespace Juanes\sipaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Juanes\sipaBundle\Entity\Registrovisitas;
use Juanes\sipaBundle\Form\RegistrovisitasType;

/**
 * Registrovisitas controller.
 *
 */
class RegistrovisitasController extends Controller
{
    /**
     * Lists all Registrovisitas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $registrovisitas = $em->getRepository('JuanessipaBundle:Registrovisitas')->findAll();

        return $this->render('registrovisitas/index.html.twig', array(
            'registrovisitas' => $registrovisitas,
        ));
    }

    /**
     * Creates a new Registrovisitas entity.
     *
     */
    public function newAction(Request $request)
    {
        $registrovisita = new Registrovisitas();
        $form = $this->createForm('Juanes\sipaBundle\Form\RegistrovisitasType', $registrovisita);
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
            $registrovisita->setArchivo($file_name);
            // fin probando que funcione

            $em->persist($registrovisita);
            $em->flush();

            return $this->redirectToRoute('admin_registrovisitas_show', array('id' => $registrovisita->getIdregvis()));
        }

        return $this->render('registrovisitas/new.html.twig', array(
            'registrovisita' => $registrovisita,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Registrovisitas entity.
     *
     */
    public function showAction(Registrovisitas $registrovisita)
    {
        $deleteForm = $this->createDeleteForm($registrovisita);

        return $this->render('registrovisitas/show.html.twig', array(
            'registrovisita' => $registrovisita,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Registrovisitas entity.
     *
     */
    public function editAction(Request $request, Registrovisitas $registrovisita)
    {
        $deleteForm = $this->createDeleteForm($registrovisita);
        $editForm = $this->createForm('Juanes\sipaBundle\Form\RegistrovisitasType', $registrovisita);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($registrovisita);
            $em->flush();

            return $this->redirectToRoute('admin_registrovisitas_edit', array('id' => $registrovisita->getIdregvis()));
        }

        return $this->render('registrovisitas/edit.html.twig', array(
            'registrovisita' => $registrovisita,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Registrovisitas entity.
     *
     */
    public function deleteAction(Request $request, Registrovisitas $registrovisita)
    {
        $form = $this->createDeleteForm($registrovisita);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($registrovisita);
            $em->flush();
        }

        return $this->redirectToRoute('admin_registrovisitas_index');
    }

    /**
     * Creates a form to delete a Registrovisitas entity.
     *
     * @param Registrovisitas $registrovisita The Registrovisitas entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Registrovisitas $registrovisita)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_registrovisitas_delete', array('id' => $registrovisita->getIdregvis())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
