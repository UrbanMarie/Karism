<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Tests\Fixtures\User;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use AppBundle\Form\UsersType;
use AppBundle\Entity\Roles;
use AppBundle\Entity\Users;
use AppBundle\Entity\Permissions;

class UsersController extends Controller
{
    /**
     * @Route("/register", name="user_registration")
     */
    public function RegisterAction(Request $request) {
        // 1) build the form
        $users = new Users();
        $form = $this->createForm(UsersType::class, $users);

        $form->add('save', ButtonType::class, array(
        'attr' => array('class' => 'save'),
    ));

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

        // 3) Encode the password (you could also do this via Doctrine listener)
        $password = $this->get('security.password_encoder')
        ->encodePassword($users, $users->getPlainPassword());
        $users->setPassword($password);

        // 4) save the User!
        $em = $this->getDoctrine()->getManager();
        $em->persist($users);
        $em->flush();

            return $this->render('Landing/register.html.twig');
        }

            return $this->render(
                   'AppBundle:Landing:register.html.twig',
                   array('form' => $form->createView())
               );
    }

   /**
    * @Route("/login", name="login")
    */
    public function loginAction(Request $req){

            $users= new Users();
            $form = $this->createForm(UsersType::class, $users);


            $form->add('save', ButtonType::class, array(
            'attr' => array('class' => 'save'),
        ));
            $form->handleRequest($req);

            if ($form->isSubmitted() && $form->isValid()) {
                $users = $form->getData();
                $username->setUsername();
                $email->setEmail();
                $role->getRole();
                $password = $users->getPassword();
                $encoder=$this->container->get('security.password_encoder');
                $password = $encoder->encodePassword($users, $password);
                $users->setPassword($password);

                $em->persist($users);
                $em->flush();

                return $this->render('AppBundle:Landing:login.html.twig',
                array('form' => $form->createView())
                );
            }

        return $this->render('AppBundle:Landing:login.html.twig',
        array('form' => $form->createView())
        );

    }
