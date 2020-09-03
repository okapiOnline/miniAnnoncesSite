<?php
/**
 * Created by PhpStorm.
 * User: becom
 * Date: 15/03/2017
 * Time: 15:29
 */

namespace Annonces\BlogBundle\Controller;


use Annonces\BlogBundle\Form\ChangePasswordType;
use Annonces\BlogBundle\Form\EmailEditType;
use Annonces\BlogBundle\Form\IdentityType;
use Annonces\BlogBundle\Form\UserPostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use \Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;

class DashboardController extends Controller{

    public function indexAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AnnoncesBackendBundle:User')->find($id);

        return $this->render('AnnoncesBlogBundle:Dashboard:dashboard.html.twig', array('user' => $user));
    }

    public function identiteAction($id, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AnnoncesBackendBundle:User')->find($id);
        $form = $this->createForm(new IdentityType(), $user);

        if ($user == null) {
            throw $this->createNotFoundException("L'utilisateur d'id ".$id." n'existe pas.");
        }

        $form->handleRequest($request);

        if ( $form->isValid()) {
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', 'L\'utilisateur a bien été modifiée avec succès.');

            //return $this->redirect($this->generateUrl('annonces_user_edit'));
        }


        return $this->render('AnnoncesBlogBundle:Dashboard:identite.html.twig',
                            array('form' => $form->createView(), 'user' => $user));
    }

    public function editmailAction($id, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AnnoncesBackendBundle:User')->find($id);
        $form = $this->createForm(new EmailEditType(), $user);

        if ($user == null) {
            throw $this->createNotFoundException("L'utilisateur d'id ".$id." n'existe pas.");
        }

        $form->handleRequest($request);

        if ( $form->isValid()) {
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', 'L\'email a bien été modifiée avec succès.');

            //return $this->redirect($this->generateUrl('annonces_user_edit'));
        }



        return $this->render('AnnoncesBlogBundle:Dashboard:editmail.html.twig',
                                array('form' => $form->createView(), 'user' => $user));
    }

    public function editpasswordAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AnnoncesBackendBundle:User')->find($id);
        return $this->render('AnnoncesBlogBundle:Dashboard:editpassword.html.twig', array('user' => $user));
    }

    public function changePasswordAction($id ,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AnnoncesBackendBundle:User')->find($id);
        $form = $this->createForm(new ChangePasswordType(), $user);

        $form->handleRequest($request);
        var_dump($form->getData()->getPlainPassword());

        if($form->isValid()) {
            $changePassword = $form->getData();
            var_dump($changePassword);
            //$factory = $this->get('security.encoder_factory');
            $encoder = new BCryptPasswordEncoder(12);
            //$encoder = $factory->getEncoder($changePassword->getPassword());

            var_dump($encoder);
            $password = $encoder->encodePassword($changePassword->getPlainPassword(), $changePassword->getSalt());

            $changePassword->setPassword($password);

            $em->persist($changePassword);
            $em->flush();

           // return $this->redirect($this->generateUrl('change_password_success'));
        }

        return $this->render('AnnoncesBlogBundle:Dashboard:editpassword.html.twig', array('user' => $user,
                        'form' => $form->createView()));
    }
} 