<?php
/**
 * Created by PhpStorm.
 * User: becom
 * Date: 13/03/2017
 * Time: 14:32
 */

namespace Annonces\BackendBundle\Controller;


use Annonces\BackendBundle\Entity\Category;
use Annonces\BackendBundle\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategoryController extends Controller{

    public function indexAction($page)
    {
        if ($page < 1) {
            throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        $nbPerPage = 15;

        // On récupère notre objet Paginator
        $listCategories = $this->getDoctrine()
            ->getManager()
            ->getRepository('AnnoncesBackendBundle:Category')
            ->getCategories($page, $nbPerPage)
        ;

        // On calcule le nombre total de pages grâce au count($listAdverts) qui retourne le nombre total d'annonces
        $nbPages = ceil(count($listCategories)/$nbPerPage);

        // Si la page n'existe pas, on retourne une 404
        if ($page > $nbPages) {
            throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        // On donne toutes les informations nécessaires à la vue
        return $this->render('AnnoncesBackendBundle:Category:index.html.twig', array(
            'listCategories' => $listCategories,
            'nbPages'     => $nbPages,
            'page'        => $page
        ));
    }

    public function addAction(Request $request)
    {
        $category = new Category();
        $form = $this->createForm(new CategoryType(), $category);

        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
            $request->getSession()->getFlashBag()
                ->add('success', 'Categorie crée avec succès!');
            return $this->redirect($this->generateUrl('annonces_category_home'));
        }


        return $this->render('AnnoncesBackendBundle:Category:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('AnnoncesBackend:Category')->find($id);

        if($category === null){
            throw $this->createNotFoundException("la categorie de l'id ".$id." n'existe pas");
        }
        return $this->render('AnnoncesBackendBundle:Category:view.html.twig', array(
            'category' => $category
        ));
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('AnnoncesBackendBundle:Category')->find($id);
        $form = $this->createForm(new CategoryType(), $category);

        if ($category == null) {
            throw $this->createNotFoundException("La categorie d'id ".$id." n'existe pas.");
        }

        $form->handleRequest($request);

        if ( $form->isValid()) {
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', 'La categorie a bien été modifiée avec succès.');

            return $this->redirect($this->generateUrl('annonces_category_home'));
        }


        return $this->render('AnnoncesBackendBundle:Category:edit.html.twig', array(
            'form' => $form->createView(), 'category' => $category
        ));
    }

    public function deleteAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('AnnoncesBackendBundle:Category')->find($id);
        $form = $this->createForm(new CategoryType(), $category);

        if ($category == null) {
            throw $this->createNotFoundException("La categorie d'id ".$id." n'existe pas.");
        }



        if ($form->handleRequest($request)) {
            $em->remove($category);
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', 'La categorie a bien été supprimée avec succès.');

            return $this->redirect($this->generateUrl('annonces_category_home'));

        }

        return $this->render('AnnoncesBackendBundle:Category:delete.html.twig', array(
            'form' => $form->createView()
        ));
    }
} 