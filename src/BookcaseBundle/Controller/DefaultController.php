<?php

namespace BookcaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BookcaseBundle\Entity;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BookcaseBundle:Default:index.html.twig');
    }

	public function searchAction()
	{
       return $this->render('BookcaseBundle:Default:search.html.twig');
	}

	public function readAction()
	{
		$em = $this->getDoctrine()->getManager();

		$author = new Entity\author();
		$author->setName('test');
		$author->setFirstname('test');
		$author->setBiography('DSFDSFDSFSDFSD');
		$author->setBirthdate(null);
		$author->setPicture(null);

		$em->persist($author);
		$em->flush();

       return $this->render('BookcaseBundle:Default:read.html.twig');
	}
}
