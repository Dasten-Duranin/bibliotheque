<?php

namespace DashboardBundle\Controller;

use BookcaseBundle\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BookcaseBundle\Form\BooksType;
use BookcaseBundle\Form\AuthorsType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DashboardBundle:Default:index.html.twig');
    }

    public function booksAction()
    {
        return $this->render('DashboardBundle:Default:books.html.twig', array('books', array()));
    }
    
    public function addBookAction(Request $request) {
        $formBuilder=new BooksType();
        $books=new Entity\Books();
        
        $form=$this->createForm($formBuilder, $books, array(
            'method'=>'POST',
            'action'=>$this->generateUrl('dashboard_addBook')
        ));
        $form->add('submit','submit',array('label'=>'VALIDER'));
        
        $form->handleRequest($request);
        
        if($form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->persist($books);
            $em->flush();
            return $this->redirect($this->generateUrl('dashboard_homepage'));
        }
        return $this->render('DashboardBundle:Default:addBook.html.twig', array('monForm'=>$form->createView()));
    }
    
	public function addAuthorAction(Request $request)
	{
        $formBuilder=new AuthorsType();
        $author=new Entity\Authors();
        
        $form=$this->createForm($formBuilder, $author, array(
            'method'=>'POST',
            'action'=>$this->generateUrl('dashboard_addAuthor')
        ));
        $form->add('submit','submit',array('label'=>'VALIDER'));
        
        $form->handleRequest($request);
        
        if($form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->persist($author);
            $em->flush();
            return $this->redirect($this->generateUrl('dashboard_homepage'));
        }
        return $this->render('DashboardBundle:Default:addAuthor.html.twig', array('monForm'=>$form->createView()));
    }
}
