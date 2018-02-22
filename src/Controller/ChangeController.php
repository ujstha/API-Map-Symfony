<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
* Class ChangeController
* @package App\Controller
* @Route("/")
*/

class ChangeController extends Controller
{
    /**
     * @Route("/", name="")
     */
    public function indexAction()
    {
        return $this->render('index.html.twig');
    }

    /**
    * @Route("/edit", name="edit")
    */
    public function editAction()
    {
    	return $this->render('edit/index.html.twig');
    }
}
