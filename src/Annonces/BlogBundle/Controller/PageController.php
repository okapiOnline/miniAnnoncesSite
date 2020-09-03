<?php
/**
 * Created by PhpStorm.
 * User: becom
 * Date: 09/03/2017
 * Time: 11:11
 */

namespace Annonces\BlogBundle\Controller;
use Annonces\BackendBundle\Entity\Post;
use Annonces\BackendBundle\Entity\User;
use Annonces\BlogBundle\Entity\Enquiry;
use Annonces\BlogBundle\Form\EnquiryType;
use Annonces\BlogBundle\Form\PostLoggedType;
use Annonces\BlogBundle\Form\PostType;
use Annonces\BlogBundle\Form\UserPostType;
use Annonces\BlogBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller {


    public function indexAction(){
        // On récupère notre objet Paginator
        $em          = $this->getDoctrine()->getManager();
        $posts   = $em->getRepository('AnnoncesBackendBundle:Post')->getPosts();
        $categories    = $em->getRepository('AnnoncesBackendBundle:Category')->getCategory(5);

        return $this->render('AnnoncesBlogBundle:Page:index.html.twig', array(
            'posts'    => $posts,
            'categories' => $categories
        ));
    }

    public function postByCategoryAction($id){
        $em     = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AnnoncesBackendBundle:Post')->getCategories(1, 5, $id);
        $categories    = $em->getRepository('AnnoncesBackendBundle:Category')->getCategory(5);
        $catpostslug    = $em->getRepository('AnnoncesBackendBundle:Category')->find($id);


        return $this->render('AnnoncesBlogBundle:Page:index.html.twig', array(
            'posts' => $posts,
           'categories' => $categories,
            'catpostslug'  => $catpostslug
        ));
    }


    //viewArticle
    public function viewAction($id)
    {
        $em         = $this->getDoctrine()->getManager();
        $post    = $em->getRepository('AnnoncesBackendBundle:Post')->find($id);
        $posts   = $em->getRepository('AnnoncesBackendBundle:Post')->findAll();
        $categories   = $em->getRepository('AnnoncesBackendBundle:Category')->getCategory(5);


        if($post === null){
            throw $this->createNotFoundException("L'article de l'id ".$id." n'existe pas");
        }
        return $this->render('AnnoncesBlogBundle:Page:view.html.twig', array(
            'post'  => $post,
            'posts' => $posts,
            'categories' => $categories
        ));
    }

    public function contactAction()
    {
        $em          = $this->getDoctrine()->getManager();
        $categories    = $em->getRepository('AnnoncesBackendBundle:Category')->getCategory(5);

        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject($enquiry->getSubject())
                    ->setFrom($enquiry->getEmail())
                    ->setTo($this->container->getParameter('annonces_blog.emails.contact_email'))
                    ->setBody($this->renderView('AnnoncesBlogBundle:Page:contactEmail.txt.twig', array('enquiry' => $enquiry)));
                $this->get('mailer')->send($message);

                $this->get('session')->getFlashBag()->Add('notice', 'Votre message a bien été envoyé. Merci!');

                return $this->redirect($this->generateUrl('annonces_blog_contact'));
            }
        }

        return $this->render('AnnoncesBlogBundle:Page:contact.html.twig', array(
            'categories' => $categories,
            'form'       => $form->createView()
        ));
    }


    public function registerPublicationAction(Request $request)
    {
        $em          = $this->getDoctrine()->getManager();
        $categories    = $em->getRepository('AnnoncesBackendBundle:Category')->getCategory(5);
        $post = new Post();

       // $securityContext = $this->container->get('security.authorization_checker');
        if ($this->isGranted('ROLE_USER') == false && $this->isGranted('ROLE_ADMIN') == false) {
            $form = $this->createForm(new PostType(), $post);
            if($form->handleRequest($request)->isValid())
            {
                $password = $this->get('security.password_encoder')
                    ->encodePassword($post->getUser(), $post->getUser()->getPlainPassword());
                $post->getUser()->setPassword($password);
                $role = array('ROLE_USER');
                $post->getUser()->setRoles($role);
                // 4) save the User!
                $em = $this->getDoctrine()->getManager();
                $em->persist($post);
                $em->flush();
                $request->getSession()->getFlashBag()
                    ->add('success', 'Vote compte a été crée avec succès !');
                return $this->redirectToRoute('login');
            }
            return $this->render('AnnoncesBlogBundle:Page:createAccountAndPub.html.twig',
                array('form' => $form->createView(), 'categories' => $categories));
        }else{
            $form1 = $this->createForm(new PostLoggedType(), $post);
            if($form1->handleRequest($request)->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($post);
                $em->flush();
                $request->getSession()->getFlashBag()
                    ->add('success', 'Post crée avec succès!');
                return $this->redirect($this->generateUrl('annonces_blog_homepage'));

            }

            return $this->render('AnnoncesBlogBundle:Page:publication.html.twig',
                array('form' => $form1->createView(), 'categories' => $categories));
        }



    }


} 