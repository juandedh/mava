<?php

namespace MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/{name}", name="my_index")
     */
    public function indexAction($name)
    {
        return $this->render('MyBundle:Default:index.html.twig', ['name' => $name]);
    }
}
