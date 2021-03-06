<?php

namespace BookcaseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BookcaseBundle\Entity\Authors;
use BookcaseBundle\Form\AuthorsType;

/**
 * Authors controller.
 *
 * @Route("/authors")
 */
class AuthorsController extends Controller
{
    /**
     * Lists all Authors entities.
     *
     * @Route("/", name="authors_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $authors = $em->getRepository('BookcaseBundle:Authors')->findAll();

        return $this->render('authors/index.html.twig', array(
            'authors' => $authors,
        ));
    }

    /**
     * Creates a new Authors entity.
     *
     * @Route("/new", name="authors_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $author = new Authors();
        $form = $this->createForm('BookcaseBundle\Form\AuthorsType', $author);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($author);
            $em->flush();

            return $this->redirectToRoute('authors_show', array('id' => $author->getId()));
        }

        return $this->render('authors/new.html.twig', array(
            'author' => $author,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Authors entity.
     *
     * @Route("/{id}", name="authors_show")
     * @Method("GET")
     */
    public function showAction(Authors $author)
    {
        $deleteForm = $this->createDeleteForm($author);

        return $this->render('authors/show.html.twig', array(
            'author' => $author,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Authors entity.
     *
     * @Route("/{id}/edit", name="authors_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Authors $author)
    {
        $deleteForm = $this->createDeleteForm($author);
        $editForm = $this->createForm('BookcaseBundle\Form\AuthorsType', $author);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($author);
            $em->flush();

            return $this->redirectToRoute('authors_edit', array('id' => $author->getId()));
        }

        return $this->render('authors/edit.html.twig', array(
            'author' => $author,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Authors entity.
     *
     * @Route("/{id}", name="authors_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Authors $author)
    {
        $form = $this->createDeleteForm($author);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($author);
            $em->flush();
        }

        return $this->redirectToRoute('authors_index');
    }

    /**
     * Creates a form to delete a Authors entity.
     *
     * @param Authors $author The Authors entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Authors $author)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('authors_delete', array('id' => $author->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
