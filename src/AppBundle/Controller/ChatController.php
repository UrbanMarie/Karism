<?php

/**
 * ChatController
 *
 * @package Chat Kar:sm
 * @author Emilie Letailleur
 * @copyright 2017 Kar:sm
 *
 */



namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Messages;
use AppBundle\Entity\Expositions;
use AppBundle\Entity\Users;



class ChatController extends Controller
{
    /**
     * @Route("/chat")
     */
      public function listmessageAction() {
            $em = $this->getDoctrine()->getManager();
            $messages = $em->getRepository('AppBundle:Messages')->findAll();

            //Pour chaque message je veux recuperer text auteur et time
            $msgs = [];
            foreach ($messages as $message) {
                $msgs[] = ["text" => $message->getTexte(),
                           "author" => ['username' => $message->getAuthor()->getUsername(),
                                        'profilPicture' => $message->getAuthor()->getprofilPicture()],
                           "time" => date("d/m/o H:i", $message->getTime())];
            }

            $response = new Response(json_encode($msgs));
            $response->headers->set('Content-Type', 'application/json');
            $response->setCharset('UTF-8');
            return $response;
        }

        /**
         * @Route("/chat/{userId}/{message}")
         */
        public function sendmessageAction($userId, $message) {
            $response = new Response();
            $response->headers->set('Content-Type', 'application/json');
            $response->setCharset('UTF-8');

            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('AppBundle:Users')->findOneById(intval($userId));
            if (empty($user) or (!$user->getArtistvalidate() and !$user->getHotevalidate())) {
                $response->setContent(json_encode("ERROR"));
                return $response;
            }

            $message = trim(strip_tags($message));

            $msg = new Messages();
            $msg->setAuthor($user);
            $msg->setText($message);
            $msg->setTime(time());

            $response->setContent(json_encode("OK"));

            try {
                $em->persist($msg);
                $em->flush();
            }
            catch(\Exception $ex) {
                $response->setContent(json_encode("ERROR"));
            }

            $response->headers->set('Content-Type', 'application/json');
            $response->setCharset('UTF-8');
            return $response;
        }

    }
