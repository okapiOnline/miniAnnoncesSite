<?php

/* AnnoncesBackendBundle:Dashboard:index.html.twig */
class __TwigTemplate_f1a8beeac9d01f30ddc2a08d72f9aaf4c0e7130ab123aec431d8f8a76980abd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnnoncesBackendBundle::layout.html.twig", "AnnoncesBackendBundle:Dashboard:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnnoncesBackendBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " - Index";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row-fluid\">
        <div class=\"well hero-unit\">
            <h1>Welcome, ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam eget ligula eu lectus lobortis condimentum. Aliquam nonummy auctor massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
            <p><a class=\"btn btn-success btn-large\" href=\"#\">Manage Users &raquo;</a></p>
        </div>
        <div class=\"page-header\">
            <h1>Article en attente <small>Approve or Reject</small></h1>
        </div>
        <table class=\"table table-striped table-bordered table-condensed\">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>En ligne</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Dieu est bon</td>
                <td><span class=\"label label-important\">Hors ligne</span></td>
            </tr>
        </table>
    </div>

    <hr>
    <div class=\"row-fluid\">
        <div class=\"span3\">
            <h3>Total Users</h3>
            <p><a href=\"users.html\" class=\"badge badge-inverse\">10</a></p>
        </div>
        <div class=\"span3\">
            <h3>New Users Today</h3>
            <p><a href=\"users.html\" class=\"badge badge-inverse\">31/03/2016</a></p>
        </div>
        <div class=\"span3\">
            <h3>Pending</h3>
            <p><a href=\"users.html\" class=\"badge badge-inverse\">5</a></p>
        </div>
        <div class=\"span3\">
            <h3>Roles</h3>
            <p><a href=\"roles.html\" class=\"badge badge-inverse\">3</a></p>
        </div>
    </div>
    <br />
    <div class=\"row-fluid\">
        <div class=\"page-header\">
            <h1>Pending Users <small>Approve or Reject</small></h1>
        </div>
        <table class=\"table table-striped table-bordered table-condensed\">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Role</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr class=\"pending-user\">
                <td>1</td>
                <td>Don joe</td>
                <td>contact@site.fr</td>
                <td>admin</td>
                <td><span class=\"label label-important\">Inactive</span></td>
                <td><span class=\"user-actions\"><a href=\"javascript:void(0);\" class=\"label label-success\">Approve</a> <a href=\"javascript:void(0);\" class=\"label label-important\">Reject</a></span></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>

    <hr>
";
    }

    public function getTemplateName()
    {
        return "AnnoncesBackendBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AnnoncesBackendBundle:Dashboard:index.html.twig", "E:\\Sites\\teste\\annonces\\src\\Annonces\\BackendBundle/Resources/views/Dashboard/index.html.twig");
    }
}
