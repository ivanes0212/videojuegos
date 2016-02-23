<?php

namespace uniVideojuegos\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uniVideojuegos\Bundle\Entity\juegos;
use uniVideojuegos\Bundle\Form\juegosType;

/**
 * juegos controller.
 *
 */
class juegosController extends Controller
{

    /**
     * Lists all juegos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniVideojuegosBundle:juegos')->findAll();

        return $this->render('uniVideojuegosBundle:juegos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new juegos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new juegos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('juegos_show', array('id' => $entity->getId())));
        }

        return $this->render('uniVideojuegosBundle:juegos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a juegos entity.
     *
     * @param juegos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(juegos $entity)
    {
        $form = $this->createForm(new juegosType(), $entity, array(
            'action' => $this->generateUrl('juegos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new juegos entity.
     *
     */
    public function newAction()
    {
        $entity = new juegos();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniVideojuegosBundle:juegos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a juegos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniVideojuegosBundle:juegos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find juegos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniVideojuegosBundle:juegos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing juegos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniVideojuegosBundle:juegos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find juegos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniVideojuegosBundle:juegos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a juegos entity.
    *
    * @param juegos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(juegos $entity)
    {
        $form = $this->createForm(new juegosType(), $entity, array(
            'action' => $this->generateUrl('juegos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing juegos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniVideojuegosBundle:juegos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find juegos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('juegos_edit', array('id' => $id)));
        }

        return $this->render('uniVideojuegosBundle:juegos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a juegos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniVideojuegosBundle:juegos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find juegos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('juegos'));
    }

    /**
     * Creates a form to delete a juegos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('juegos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
