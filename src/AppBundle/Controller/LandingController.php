<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use AppBundle\Entity\Landing;


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
        $images = $em->getRepository('AppBundle\Entity\Landing')->findAll();

        $imgs = [];

        foreach ($images as $image) {
            $imgs[] = $image->getImage();
        }

        return $this->render('AppBundle:Landing:index.html.twig', ["images" => $imgs]);

    }
    /**
     * @Route("/articles", name="art")
     */
    public function getarticleAction() {
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('AppBundle\Entity\Articles')->findAll();

        return $this->render('AppBundle:Landing:lp.html.twig', ["articlelist" => $articles]);
    }

}
