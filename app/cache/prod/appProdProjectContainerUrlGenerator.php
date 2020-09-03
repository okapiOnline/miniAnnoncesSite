<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'annonces_backend_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Annonces\\BackendBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_backend_dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Annonces\\BackendBundle\\Controller\\DashboardController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dashboard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_category_home' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Annonces\\BackendBundle\\Controller\\CategoryController::indexAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/admin/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_category_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Annonces\\BackendBundle\\Controller\\CategoryController::viewAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_category_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Annonces\\BackendBundle\\Controller\\CategoryController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categorie/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_category_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Annonces\\BackendBundle\\Controller\\CategoryController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/categorie/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_category_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Annonces\\BackendBundle\\Controller\\CategoryController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/categorie/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_post_home' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Annonces\\BackendBundle\\Controller\\PostController::indexAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/admin/article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_post_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Annonces\\BackendBundle\\Controller\\PostController::viewAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_post_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Annonces\\BackendBundle\\Controller\\PostController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/article/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_post_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Annonces\\BackendBundle\\Controller\\PostController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/article/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_post_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Annonces\\BackendBundle\\Controller\\PostController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/article/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_user_home' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Annonces\\BackendBundle\\Controller\\UserController::indexAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/admin/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_user_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Annonces\\BackendBundle\\Controller\\UserController::viewAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_user_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Annonces\\BackendBundle\\Controller\\UserController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Annonces\\BackendBundle\\Controller\\UserController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/user/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Annonces\\BackendBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/user/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Annonces\\BlogBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/connexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_user_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Annonces\\BlogBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_blog_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Annonces\\BlogBundle\\Controller\\PageController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_blog_category_slug' => array (  0 =>   array (    0 => 'id',    1 => 'slug',  ),  1 =>   array (    '_controller' => 'Annonces\\BlogBundle\\Controller\\PageController::postByCategoryAction',    '_format' => 'html',  ),  2 =>   array (    'year' => '\\d{4}',    'format' => 'php|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_blog_view_slug' => array (  0 =>   array (    0 => 'year',    1 => 'id',    2 => 'slug',  ),  1 =>   array (    '_controller' => 'Annonces\\BlogBundle\\Controller\\PageController::viewAction',    '_format' => 'html',  ),  2 =>   array (    'year' => '\\d{4}',    'format' => 'php|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d{4}',      3 => 'year',    ),    3 =>     array (      0 => 'text',      1 => '/article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_register_publication' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Annonces\\BlogBundle\\Controller\\PageController::registerPublicationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription-publication',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_blog_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Annonces\\BlogBundle\\Controller\\PageController::contactAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_blog_dashboard' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Annonces\\BlogBundle\\Controller\\DashboardController::indexAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/tableau-de-bord',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_blog_dashboard_identite' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Annonces\\BlogBundle\\Controller\\DashboardController::identiteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/tableau-de-bord/identite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_blog_dashboard_editmail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Annonces\\BlogBundle\\Controller\\DashboardController::editmailAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/tableau-de-bord/edit-mail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_blog_dashboard_editpassword' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Annonces\\BlogBundle\\Controller\\DashboardController::changePasswordAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/tableau-de-bord/password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
