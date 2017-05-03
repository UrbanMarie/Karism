<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/user")
     */
    public function indexAction()
    {
        /*POSSIBLE FAIL ?????*/
        /*$request = $this->container->get('request');
        $routeName = $request->get('_route');*/
        return $this->render('UserBundle:Default:index.html.twig');
    }
}
