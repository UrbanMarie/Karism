<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Landingcarouselexpo;
use AppBundle\Entity\Landingcarouselartiste;

class LandingController extends Controller
{
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/img", name="img")
     */
    public function getimageAction()
    {
        $em = $this->getDoctrine()->getManager();
        $images = $em->getRepository('AppBundle\Entity\Landingcarouselartiste')->findAll();

        $imgs = [];

        foreach ($images as $image) {
            $imgs[] = $image->getImage();
        }

        return $this->render('default/index.html.twig', ["images" => $imgs]);

    }

}
