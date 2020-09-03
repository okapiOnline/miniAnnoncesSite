<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/admin')) {
            // annonces_backend_login
            if ($pathinfo === '/admin/login') {
                return array (  '_controller' => 'Annonces\\BackendBundle\\Controller\\SecurityController::loginAction',  '_route' => 'annonces_backend_login',);
            }

            // annonces_backend_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Annonces\\BackendBundle\\Controller\\DashboardController::indexAction',  '_route' => 'annonces_backend_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/categorie')) {
                // annonces_category_home
                if (preg_match('#^/admin/categorie(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_category_home')), array (  '_controller' => 'Annonces\\BackendBundle\\Controller\\CategoryController::indexAction',  'page' => 1,));
                }

                // annonces_category_view
                if (preg_match('#^/admin/categorie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_category_view')), array (  '_controller' => 'Annonces\\BackendBundle\\Controller\\CategoryController::viewAction',));
                }

                // annonces_category_add
                if ($pathinfo === '/admin/categorie/add') {
                    return array (  '_controller' => 'Annonces\\BackendBundle\\Controller\\CategoryController::addAction',  '_route' => 'annonces_category_add',);
                }

                // annonces_category_edit
                if (0 === strpos($pathinfo, '/admin/categorie/edit') && preg_match('#^/admin/categorie/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_category_edit')), array (  '_controller' => 'Annonces\\BackendBundle\\Controller\\CategoryController::editAction',));
                }

                // annonces_category_delete
                if (0 === strpos($pathinfo, '/admin/categorie/delete') && preg_match('#^/admin/categorie/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_category_delete')), array (  '_controller' => 'Annonces\\BackendBundle\\Controller\\CategoryController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/article')) {
                // annonces_post_home
                if (preg_match('#^/admin/article(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_post_home')), array (  '_controller' => 'Annonces\\BackendBundle\\Controller\\PostController::indexAction',  'page' => 1,));
                }

                // annonces_post_view
                if (preg_match('#^/admin/article/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_post_view')), array (  '_controller' => 'Annonces\\BackendBundle\\Controller\\PostController::viewAction',));
                }

                // annonces_post_add
                if ($pathinfo === '/admin/article/add') {
                    return array (  '_controller' => 'Annonces\\BackendBundle\\Controller\\PostController::addAction',  '_route' => 'annonces_post_add',);
                }

                // annonces_post_edit
                if (0 === strpos($pathinfo, '/admin/article/edit') && preg_match('#^/admin/article/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_post_edit')), array (  '_controller' => 'Annonces\\BackendBundle\\Controller\\PostController::editAction',));
                }

                // annonces_post_delete
                if (0 === strpos($pathinfo, '/admin/article/delete') && preg_match('#^/admin/article/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_post_delete')), array (  '_controller' => 'Annonces\\BackendBundle\\Controller\\PostController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // annonces_user_home
                if (preg_match('#^/admin/user(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_user_home')), array (  '_controller' => 'Annonces\\BackendBundle\\Controller\\UserController::indexAction',  'page' => 1,));
                }

                // annonces_user_view
                if (preg_match('#^/admin/user/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_user_view')), array (  '_controller' => 'Annonces\\BackendBundle\\Controller\\UserController::viewAction',));
                }

                // annonces_user_add
                if ($pathinfo === '/admin/user/add') {
                    return array (  '_controller' => 'Annonces\\BackendBundle\\Controller\\UserController::registerAction',  '_route' => 'annonces_user_add',);
                }

                // annonces_user_edit
                if (0 === strpos($pathinfo, '/admin/user/edit') && preg_match('#^/admin/user/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_user_edit')), array (  '_controller' => 'Annonces\\BackendBundle\\Controller\\UserController::editAction',));
                }

                // annonces_user_delete
                if (0 === strpos($pathinfo, '/admin/user/delete') && preg_match('#^/admin/user/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_user_delete')), array (  '_controller' => 'Annonces\\BackendBundle\\Controller\\UserController::deleteAction',));
                }

            }

        }

        // login
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'Annonces\\BlogBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // annonces_user_register
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'Annonces\\BlogBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'annonces_user_register',);
        }

        // annonces_blog_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_annonces_blog_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'annonces_blog_homepage');
            }

            return array (  '_controller' => 'Annonces\\BlogBundle\\Controller\\PageController::indexAction',  '_route' => 'annonces_blog_homepage',);
        }
        not_annonces_blog_homepage:

        // annonces_blog_category_slug
        if (0 === strpos($pathinfo, '/categorie') && preg_match('#^/categorie/(?P<id>[^/]++)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_blog_category_slug')), array (  '_controller' => 'Annonces\\BlogBundle\\Controller\\PageController::postByCategoryAction',  '_format' => 'html',));
        }

        // annonces_blog_view_slug
        if (0 === strpos($pathinfo, '/article') && preg_match('#^/article/(?P<year>\\d{4})/(?P<id>[^/]++)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_blog_view_slug')), array (  '_controller' => 'Annonces\\BlogBundle\\Controller\\PageController::viewAction',  '_format' => 'html',));
        }

        // annonces_register_publication
        if ($pathinfo === '/inscription-publication') {
            return array (  '_controller' => 'Annonces\\BlogBundle\\Controller\\PageController::registerPublicationAction',  '_route' => 'annonces_register_publication',);
        }

        // annonces_blog_contact
        if ($pathinfo === '/contact') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_annonces_blog_contact;
            }

            return array (  '_controller' => 'Annonces\\BlogBundle\\Controller\\PageController::contactAction',  '_route' => 'annonces_blog_contact',);
        }
        not_annonces_blog_contact:

        if (0 === strpos($pathinfo, '/tableau-de-bord')) {
            // annonces_blog_dashboard
            if (preg_match('#^/tableau\\-de\\-bord/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_blog_dashboard')), array (  '_controller' => 'Annonces\\BlogBundle\\Controller\\DashboardController::indexAction',));
            }

            // annonces_blog_dashboard_identite
            if (0 === strpos($pathinfo, '/tableau-de-bord/identite') && preg_match('#^/tableau\\-de\\-bord/identite/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_blog_dashboard_identite')), array (  '_controller' => 'Annonces\\BlogBundle\\Controller\\DashboardController::identiteAction',));
            }

            // annonces_blog_dashboard_editmail
            if (0 === strpos($pathinfo, '/tableau-de-bord/edit-mail') && preg_match('#^/tableau\\-de\\-bord/edit\\-mail/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_blog_dashboard_editmail')), array (  '_controller' => 'Annonces\\BlogBundle\\Controller\\DashboardController::editmailAction',));
            }

            // annonces_blog_dashboard_editpassword
            if (0 === strpos($pathinfo, '/tableau-de-bord/password') && preg_match('#^/tableau\\-de\\-bord/password/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_blog_dashboard_editpassword')), array (  '_controller' => 'Annonces\\BlogBundle\\Controller\\DashboardController::changePasswordAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
