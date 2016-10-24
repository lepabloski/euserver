<?php

namespace EuBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EuBundle\Entity\Negocio;
use EuBundle\Form\NegocioType;
use EuBundle\Entity\Usuario;
use EuBundle\Entity\User;
use EuBundle\Entity\NegocioUsuarioAdmin;

/**
 * Negocio controller.
 *
 */
class NegocioController extends Controller {

    /**
     * Lists all Negocio entities.
     *
     */
    private $fechaHoy;
    private $usuario;

    public function __construct() {
        $this->fechaHoy = new \DateTime("now");
    }

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $usuario = $em->getRepository('EuBundle:Usuario')->findOneBy(array('fosUser' => $this->getUser()));
        $negocioUsuario = $em->getRepository('EuBundle:NegocioUsuarioAdmin')->findBy(array('usuario' => $usuario));
        $negocios = array();
        if (count($negocioUsuario) != 0) {

            foreach ($negocioUsuario as $negocioUsu) {
                $negocios[] = $em->getRepository('EuBundle:Negocio')->findOneBy(array('id' => $negocioUsu->getNegocio()));
            }
        }


        return $this->render('negocio/index.html.twig', array(
                    'negocios' => $negocios,
        ));
    }

    /**
     * Creates a new Negocio entity.
     *
     */
    public function newAction(Request $request) {

        $session = $request->getSession();

        $negocio = new Negocio();
        $form = $this->createForm(NegocioType::class, $negocio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $negocio->setNegocioFoto('');
            $negocio->setNegocioFecRegistro($this->fechaHoy);
            $negocio->setUsuCreaId($this->getUser());
            $negocio->setNegocioFecMod($this->fechaHoy);
            $negocio->setNegocioAlta(1);
            $em->persist($negocio);

            $userFos = $em->getRepository('EuBundle:User')->findOneBy(array('id' => $this->getUser()));

            $usuario = new Usuario();
            $usuario->setFosUser($userFos);
            $usuario->setTipoUsuarioId(2); //usuario Admin Negocio tipo 2
            $em->persist($usuario);

            $negocioUsuarioAdmin = new NegocioUsuarioAdmin();
            $negocioUsuarioAdmin->setNegocio($negocio);
            $negocioUsuarioAdmin->setUsuario($usuario);
            $em->persist($negocioUsuarioAdmin);

            $em->flush();

            return $this->redirectToRoute('negocio_show', array('id' => $negocio->getId()));
        }

        return $this->render('negocio/new.html.twig', array(
                    'negocio' => $negocio,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Negocio entity.
     *
     */
    public function showAction(Negocio $negocio) {
        $deleteForm = $this->createDeleteForm($negocio);

        return $this->render('negocio/show.html.twig', array(
                    'negocio' => $negocio,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Negocio entity.
     *
     */
    public function editAction(Request $request, Negocio $negocio) {
        $deleteForm = $this->createDeleteForm($negocio);
        $editForm = $this->createForm('EuBundle\Form\NegocioType', $negocio);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($negocio);
            $em->flush();

            return $this->redirectToRoute('negocio_edit', array('id' => $negocio->getId()));
        }

        return $this->render('negocio/edit.html.twig', array(
                    'negocio' => $negocio,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Negocio entity.
     *
     */
    public function deleteAction(Request $request, Negocio $negocio) {
        $form = $this->createDeleteForm($negocio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($negocio);
            $em->flush();
        }

        return $this->redirectToRoute('negocio_index');
    }

    /**
     * Creates a form to delete a Negocio entity.
     *
     * @param Negocio $negocio The Negocio entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Negocio $negocio) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('negocio_delete', array('id' => $negocio->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
