<?php

namespace uniVideojuegos\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uniVideojuegos\Bundle\Entity\plataforma;
use uniVideojuegos\Bundle\Form\plataformaType;

/**
 * plataforma controller.
 *
 */
class plataformaController extends Controller
{

    /**
     * Lists all plataforma entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniVideojuegosBundle:plataforma')->findAll();

        return $this->render('uniVideojuegosBundle:plataforma:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new plataforma entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new plataforma();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('plataforma_show', array('id' => $entity->getId())));
        }

        return $this->render('uniVideojuegosBundle:plataforma:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a plataforma entity.
     *
     * @param plataforma $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(plataforma $entity)
    {
        $form = $this->createForm(new plataformaType(), $entity, array(
            'action' => $this->generateUrl('plataforma_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new plataforma entity.
     *
     */
    public function newAction()
    {
        $entity = new plataforma();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniVideojuegosBundle:plataforma:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a plataforma entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniVideojuegosBundle:plataforma')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find plataforma entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniVideojuegosBundle:plataforma:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing plataforma entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniVideojuegosBundle:plataforma')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find plataforma entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniVideojuegosBundle:plataforma:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a plataforma entity.
    *
    * @param plataforma $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(plataforma $entity)
    {
        $form = $this->createForm(new plataformaType(), $entity, array(
            'action' => $this->generateUrl('plataforma_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing plataforma entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniVideojuegosBundle:plataforma')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find plataforma entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('plataforma_edit', array('id' => $id)));
        }

        return $this->render('uniVideojuegosBundle:plataforma:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a plataforma entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniVideojuegosBundle:plataforma')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find plataforma entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('plataforma'));
    }

    /**
     * Creates a form to delete a plataforma entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('plataforma_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    public function buscarPlataformaAction()
    {
        
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniVideojuegosBundle:plataforma')->findAll();

        return $this->render('uniVideojuegosBundle:plataforma:buscarPlataforma.html.twig', array(
            'plataforma' => $entities,
        ));
    }

   public function responderPlataformaAction(Request $request)
    {
      //    $nom= $_POST['categoria']; // Coger variables usando php clásico.
         $nom= $request->request->get('nombre'); // Modo symfony2
         
         $em = $this->getDoctrine()->getManager();
        if  ($nom=="Todas")
                $entities = $em->getRepository('uniVideojuegosBundle:plataforma')->findAll();
        else 
            $entities = $em->getRepository('uniVideojuegosBundle:plataforma')->findByNombre($nom);

        return $this->render('uniVideojuegosBundle:plataforma:responderPlataforma.html.twig', array(
            'entities' => $entities,
            'nomPlat'=> $nom,
        ));
    }
}
