<?php
/**
 * Created by PhpStorm.
 * User: becom
 * Date: 13/03/2017
 * Time: 14:31
 */

namespace Annonces\BackendBundle\Controller;


use Annonces\BackendBundle\Entity\Post;
use Annonces\BackendBundle\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class PostController extends Controller{

    public function indexAction($page)
    {
        if ($page < 1) {
            throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        $nbPerPage = 15;

        $posts = $this->getDoctrine()
            ->getManager()
            ->getRepository('AnnoncesBackendBundle:Post')
            ->getPosts($page, $nbPerPage)
        ;

        // On calcule le nombre total de pages grâce au count($listAdverts) qui retourne le nombre total d'annonces
        $nbPages = ceil(count($posts)/$nbPerPage);

        // Si la page n'existe pas, on retourne une 404
        if ($page > $nbPages) {
            throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        // On donne toutes les informations nécessaires à la vue
        return $this->render('AnnoncesBackendBundle:Post:index.html.twig', array(
            'posts'       => $posts,
            'nbPages'     => $nbPages,
            'page'        => $page
        ));

    }

    public function addAction(Request $request)
    {
        $post = new Post();
        $form = $this->createForm(new PostType(), $post);

        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();
            $request->getSession()->getFlashBag()
                ->add('success', 'Post crée avec succès!');
            return $this->redirect($this->generateUrl('annonces_post_home'));
        }


        return $this->render('AnnoncesBackendBundle:Post:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('AnnoncesBackendBundle:Post')->find($id);
        $posts = $em->getRepository('AnnoncesBackendBundle:Post')->findAll();

        // $catposts = $em->getCategories();
        if($post === null){
            throw $this->createNotFoundException("L'article de l'id ".$id." n'existe pas");
        }
        return $this->render('AnnoncesBackendBundle:Post:view.html.twig', array(
            'post'  => $post,
            'posts' => $posts,
            //   'catposts' => $catposts
        ));
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('AnnoncesBackendBundle:Post')->find($id);
        $form = $this->createForm(new PostType, $post);

        // Si l'annonce n'existe pas, on affiche une erreur 404
        if ($post == null) {
            throw $this->createNotFoundException("L'annonce d'id ".$id." n'existe pas.");
        }

        $form->handleRequest($request);

        if ( $form->isValid()) {
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', 'L\' article a bien été modifié avec succès.');

            return $this->redirect($this->generateUrl('annonces_post_home'));
        }

        return $this->render('AnnoncesBackendBundle:Post:edit.html.twig', array(
            'form' => $form->createView(), 'article' => $post
        ));
    }

    public function deleteAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('AnnoncesBackendBundle:Post')->find($id);
        $form = $this->createForm(new PostType, $post);

        if ($post == null) {
            throw $this->createNotFoundException("L'article d'id ".$id." n'existe pas.");
        }



        if ($form->handleRequest($request)) {
            $em->remove($post);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', 'L\' article a bien été supprimé avec succès.');

            return $this->redirect($this->generateUrl('annonces_post_home'));

        }

        return $this->render('AnnoncesBackendBundle:Post:delete.html.twig', array(
            'form' => $form->createView()
        ));
    }
} 