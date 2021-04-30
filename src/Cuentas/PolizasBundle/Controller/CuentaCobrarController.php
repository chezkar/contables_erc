<?php

namespace Cuentas\PolizasBundle\Controller;

use Cuentas\PolizasBundle\Entity\CuentaCobrar;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Cuentacobrar controller.
 *
 */
class CuentaCobrarController extends Controller
{
    /**
     * Lists all cuentaCobrar entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cuentaCobrars = $em->getRepository('PolizasBundle:CuentaCobrar')->findAll();

        return $this->render('cuentacobrar/index.html.twig', array(
            'cuentaCobrars' => $cuentaCobrars,
        ));
    }

    /**
     * Creates a new cuentaCobrar entity.
     *
     */
    public function newAction(Request $request)
    {
        $cuentaCobrar = new Cuentacobrar();
        $form = $this->createForm('Cuentas\PolizasBundle\Form\CuentaCobrarType', $cuentaCobrar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cuentaCobrar);
            $em->flush();

            return $this->redirectToRoute('cuentacobrar_show', array('idcuenta' => $cuentaCobrar->getIdcuenta()));
        }

        return $this->render('cuentacobrar/new.html.twig', array(
            'cuentaCobrar' => $cuentaCobrar,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a cuentaCobrar entity.
     *
     */
    public function showAction(CuentaCobrar $cuentaCobrar)
    {
        $deleteForm = $this->createDeleteForm($cuentaCobrar);

        return $this->render('cuentacobrar/show.html.twig', array(
            'cuentaCobrar' => $cuentaCobrar,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing cuentaCobrar entity.
     *
     */
    public function editAction(Request $request, CuentaCobrar $cuentaCobrar)
    {
        $deleteForm = $this->createDeleteForm($cuentaCobrar);
        $editForm = $this->createForm('Cuentas\PolizasBundle\Form\CuentaCobrarType', $cuentaCobrar);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cuentacobrar_edit', array('idcuenta' => $cuentaCobrar->getIdcuenta()));
        }

        return $this->render('cuentacobrar/edit.html.twig', array(
            'cuentaCobrar' => $cuentaCobrar,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a cuentaCobrar entity.
     *
     */
    public function deleteAction(Request $request, CuentaCobrar $cuentaCobrar)
    {
        $form = $this->createDeleteForm($cuentaCobrar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cuentaCobrar);
            $em->flush();
        }

        return $this->redirectToRoute('cuentacobrar_index');
    }

    /**
     * Creates a form to delete a cuentaCobrar entity.
     *
     * @param CuentaCobrar $cuentaCobrar The cuentaCobrar entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CuentaCobrar $cuentaCobrar)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cuentacobrar_delete', array('idcuenta' => $cuentaCobrar->getIdcuenta())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
