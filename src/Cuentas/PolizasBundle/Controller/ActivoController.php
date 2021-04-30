<?php

namespace Cuentas\PolizasBundle\Controller;

use Cuentas\PolizasBundle\Entity\Activo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Activo controller.
 *
 */
class ActivoController extends Controller
{
    /**
     * Lists all activo entities.
     *
     */
    public function indexAction($idcliente)
    {
        $em = $this->getDoctrine()->getManager();

        $activos = $em->createQuery('
         SELECT at FROM PolizasBundle:Activo at
         WHERE at.clienteIdcliente = :c
        ')->setParameters(['c' => $idcliente]);

        return $this->render('activo/index.html.twig', array(
            'activos'   => $activos,
            'idcliente' => $idcliente,
        ));
    }

    /**
     * Creates a new activo entity.
     *
     */
    public function newAction(Request $request, $idcliente)
    {
        $activo = new Activo();
        $form = $this->createForm('Cuentas\PolizasBundle\Form\ActivoType', $activo, ['idcliente' => $idcliente]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($activo);
            $em->flush();

            return $this->redirectToRoute('activo_show', array('idactivo' => $activo->getIdactivo()));
        }

        return $this->render('activo/new.html.twig', array(
            'activo' => $activo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a activo entity.
     *
     */
    public function showAction(Activo $activo)
    {
        $deleteForm = $this->createDeleteForm($activo);

        return $this->render('activo/show.html.twig', array(
            'activo' => $activo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing activo entity.
     *
     */
    public function editAction(Request $request, Activo $activo)
    {
        $deleteForm = $this->createDeleteForm($activo);
        $editForm = $this->createForm('Cuentas\PolizasBundle\Form\ActivoType', $activo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('activo_edit', array('idactivo' => $activo->getIdactivo()));
        }

        return $this->render('activo/edit.html.twig', array(
            'activo' => $activo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a activo entity.
     *
     */
    public function deleteAction(Request $request, Activo $activo)
    {
        $form = $this->createDeleteForm($activo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($activo);
            $em->flush();
        }

        return $this->redirectToRoute('activo_index');
    }

    /**
     * Creates a form to delete a activo entity.
     *
     * @param Activo $activo The activo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Activo $activo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('activo_delete', array('idactivo' => $activo->getIdactivo())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
