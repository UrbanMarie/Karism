<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @Route("/artprofil", name="artprofil")
     */
    
    public function indexAction()
    {
        return $this->render('default/ArtProfil.html.twig');
    }



}