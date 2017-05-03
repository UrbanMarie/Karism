<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Landing;
use AppBundle\Entity\Roles;
use AppBundle\Entity\Permissions;
use AppBundle\Entity\Users;

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
        
