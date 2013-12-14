<?php

namespace VintageWest\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use VintageWest\FrontBundle\Entity\Cars;
use VintageWest\FrontBundle\Form\CarsType;

/**
 * Cars controller.
 *
 * @Route("/cars")
 */
class CarsController extends Controller
{

    /**
     * Lists all Cars entities.
     *
     * @Route("/", name="cars")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('VintageWestFrontBundle:Cars')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Cars entity.
     *
     * @Route("/", name="cars_create")
     * @Method("POST")
     * @Template("VintageWestFrontBundle:Cars:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Cars();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cars_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Cars entity.
    *
    * @param Cars $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Cars $entity)
    {
        $form = $this->createForm(new CarsType(), $entity, array(
            'action' => $this->generateUrl('cars_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Cars entity.
     *
     * @Route("/new", name="cars_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Cars();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Cars entity.
     *
     * @Route("/{id}", name="cars_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VintageWestFrontBundle:Cars')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cars entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Cars entity.
     *
     * @Route("/{id}/edit", name="cars_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VintageWestFrontBundle:Cars')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cars entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Cars entity.
    *
    * @param Cars $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Cars $entity)
    {
        $form = $this->createForm(new CarsType(), $entity, array(
            'action' => $this->generateUrl('cars_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Cars entity.
     *
     * @Route("/{id}", name="cars_update")
     * @Method("PUT")
     * @Template("VintageWestFrontBundle:Cars:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VintageWestFrontBundle:Cars')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cars entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cars_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Cars entity.
     *
     * @Route("/{id}", name="cars_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VintageWestFrontBundle:Cars')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cars entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cars'));
    }

    /**
     * Creates a form to delete a Cars entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cars_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
