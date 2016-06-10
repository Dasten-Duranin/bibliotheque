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
       return $this->render('BookcaseBundle:Default:read.html.twig');
	}
}
