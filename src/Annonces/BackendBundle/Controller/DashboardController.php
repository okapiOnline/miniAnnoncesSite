<?php
/**
 * Created by PhpStorm.
 * User: becom
 * Date: 13/03/2017
 * Time: 10:28
 */

namespace Annonces\BackendBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller{


    public function indexAction()
    {
        //if (false === $this->get('security.context')->isGranted('ROLE_USER')) {
         //   throw new AccessDeniedException();
        //}
        return $this->render('AnnoncesBackendBundle:Dashboard:index.html.twig');
    }
} 