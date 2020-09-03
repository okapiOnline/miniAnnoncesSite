<?php
/**
 * Created by PhpStorm.
 * User: becom
 * Date: 13/03/2017
 * Time: 18:07
 */

namespace Annonces\BackendBundle\Controller;


use Annonces\BackendBundle\Entity\User;
use Annonces\BackendBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller{

        public function indexAction($page)
        {
            if ($page < 1) {
                throw $this->createNotFoundException("La page ".$page." n'existe pas.");
            }

            $nbPerPage = 15;

            // On récupère notre objet Paginator
            $users = $this->getDoctrine()
                ->getManager()
                ->getRepository('AnnoncesBackendBundle:User')
                ->getUsers($page, $nbPerPage)
            ;


            // On calcule le nombre total de pages grâce au count($listAdverts) qui retourne le nombre total d'annonces
            $nbPages = ceil(count($users)/$nbPerPage);

            // Si la page n'existe pas, on retourne une 404
            if ($page > $nbPages) {
                throw $this->createNotFoundException("La page ".$page." n'existe pas.");
            }

            // On donne toutes les informations nécessaires à la vue
            return $this->render('AnnoncesBackendBundle:User:index.html.twig', array(
                'users'       => $users,
                'nbPages'     => $nbPages,
                'page'        => $page
            ));
        }

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
            // $user->setRole('ROLE_USER');

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('annonces_backend_dashboard');
        }

        return $this->render('AnnoncesBackendBundle:Registration:register.html.twig', array('form' => $form->createView()));
    }
}