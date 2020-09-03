<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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
