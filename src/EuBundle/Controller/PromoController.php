<?php

namespace EuBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EuBundle\Entity\Promo;
use EuBundle\Form\PromoType;

/**
 * Promo controller.
 *
 */
class PromoController extends Controller
{
    /**
     * Lists all Promo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $promos = $em->getRepository('EuBundle:Promo')->findAll();

        return $this->render('promo/index.html.twig', array(
            'promos' => $promos,
        ));
    }

    /**
     * Creates a new Promo entity.
     *
     */
    public function newAction(Request $request)
    {
        $promo = new Promo();
        $form = $this->createForm('EuBundle\Form\PromoType', $promo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($promo);
            $em->flush();

            return $this->redirectToRoute('promo_show', array('id' => $promo->getId()));
        }

        return $this->render('promo/new.html.twig', array(
            'promo' => $promo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Promo entity.
     *
     */
    public function showAction(Promo $promo)
    {
        $deleteForm = $this->createDeleteForm($promo);

        return $this->render('promo/show.html.twig', array(
            'promo' => $promo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Promo entity.
     *
     */
    public function editAction(Request $request, Promo $promo)
    {
        $deleteForm = $this->createDeleteForm($promo);
        $editForm = $this->createForm('EuBundle\Form\PromoType', $promo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($promo);
            $em->flush();

            return $this->redirectToRoute('promo_edit', array('id' => $promo->getId()));
        }

        return $this->render('promo/edit.html.twig', array(
            'promo' => $promo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Promo entity.
     *
     */
    public function deleteAction(Request $request, Promo $promo)
    {
        $form = $this->createDeleteForm($promo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($promo);
            $em->flush();
        }

        return $this->redirectToRoute('promo_index');
    }

    /**
     * Creates a form to delete a Promo entity.
     *
     * @param Promo $promo The Promo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Promo $promo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('promo_delete', array('id' => $promo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
