<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Landing;
use AppBundle\Entity\Roles;
use AppBundle\Entity\Permissions;
use AppBundle\Entity\Users;

class DefaultController extends Controller
{
    /**
     * @Route("/admin")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }
}
