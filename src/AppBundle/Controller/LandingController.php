<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LandingController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:Landing:index.html.twig');
    }

    /**
     * @Route("/img", name="img")
     */
    public function getimageAction()
    {
        $images = $this->getDoctrine()
                       ->getManager()
                       ->getRepository('AppBundle\Entity\Landing')
                       ->findAll();

        return $this->render('AppBundle:Landing:index.html.twig', ["images" => $images]);

    }

}
