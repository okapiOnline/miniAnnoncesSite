<?php
/**
 * Created by PhpStorm.
 * User: becom
 * Date: 11/03/2017
 * Time: 14:18
 */

namespace Annonces\BlogBundle\Controller;


use Annonces\BlogBundle\Form\UserType;
use Annonces\BackendBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class RegistrationController extends Controller{


    public function registerAction(Request $request)
    {
        // 1) build the form
        $user = new User();
        $form = $this->createForm(new UserType(), $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            $role = array('ROLE_USER');
            $user->setRoles($role);
            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('login');
        }

        return $this->render('AnnoncesBlogBundle:Registration:register.html.twig', array('form' => $form->createView()));
    }
} 