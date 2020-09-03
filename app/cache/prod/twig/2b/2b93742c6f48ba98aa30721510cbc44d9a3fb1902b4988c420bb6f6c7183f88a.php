<?php

/* ::header.html.twig */
class __TwigTemplate_00691ebabf90dc2de08fd61308d96cedb03f2374352e6c04dfeee1cac72fa05e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"navbar navbar-inverse\" role=\"navigation\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">
                <img src=\"http://placehold.it/150x30&text=Logo\" class=\"img-responsive\" alt=\"\">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            ";
        // line 17
        $this->displayBlock('navigation', $context, $blocks);
        // line 55
        echo "        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>";
    }

    // line 17
    public function block_navigation($context, array $blocks = array())
    {
        // line 18
        echo "                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_blog_homepage");
        echo "\">Annonce liste</a>
                    </li>
                    <li>
                        <a href=\"#\">Annonce</a>
                    </li>
                </ul>

                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 28
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 29
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Connexion</a></li>
                    <li><a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_user_register");
            echo "\">Inscription</a></li>
                    ";
        }
        // line 32
        echo "
                    ";
        // line 33
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 34
            echo "                        <li class=\"dropdown\">
                            <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\" aria-expanded=\"false\">
                                <i class=\"fa fa-user fa-fw\"></i> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo " <i class=\"fa fa-caret-down\"></i>
                            </a>
                            <ul class=\"dropdown-menu dropdown-user\">
                                <li><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_blog_dashboard", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-user fa-fw\"></i> Tableau de bord</a>
                                </li>
                                ";
            // line 41
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 42
                echo "                                <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_backend_dashboard");
                echo "\"><i class=\"fa fa-gear fa-fw\"></i> panel admin</a>
                                ";
            }
            // line 44
            echo "                                <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Messages</a>
                                </li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"><i class=\"fa fa-sign-out fa-fw\"></i> Déconnexion</a>
                                </li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                    ";
        }
        // line 53
        echo "                </ul>
            ";
    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 53,  111 => 47,  106 => 44,  100 => 42,  98 => 41,  93 => 39,  87 => 36,  83 => 34,  81 => 33,  78 => 32,  73 => 30,  68 => 29,  66 => 28,  55 => 20,  51 => 18,  48 => 17,  40 => 55,  38 => 17,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::header.html.twig", "E:\\Sites\\teste\\annonces\\app/Resources\\views/header.html.twig");
    }
}
