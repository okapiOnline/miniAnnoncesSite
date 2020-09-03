<?php

/* ::header.html.twig */
class __TwigTemplate_615cf87bc04e78c0d0ac33db924caae195b47afd8af66d05094ddc21f4483a44 extends Twig_Template
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
        $__internal_fee535f9161a6d77306ca4c39e1e11e11bfe1b8752b42b51613d2ceb3726652c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee535f9161a6d77306ca4c39e1e11e11bfe1b8752b42b51613d2ceb3726652c->enter($__internal_fee535f9161a6d77306ca4c39e1e11e11bfe1b8752b42b51613d2ceb3726652c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

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
        
        $__internal_fee535f9161a6d77306ca4c39e1e11e11bfe1b8752b42b51613d2ceb3726652c->leave($__internal_fee535f9161a6d77306ca4c39e1e11e11bfe1b8752b42b51613d2ceb3726652c_prof);

    }

    // line 17
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_e94d4eb3046fe21cb1248be5f32adacff5f0dc0d7c59afb464d62daa223c9c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94d4eb3046fe21cb1248be5f32adacff5f0dc0d7c59afb464d62daa223c9c78->enter($__internal_e94d4eb3046fe21cb1248be5f32adacff5f0dc0d7c59afb464d62daa223c9c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 34
            echo "                        <li class=\"dropdown\">
                            <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\" aria-expanded=\"false\">
                                <i class=\"fa fa-user fa-fw\"></i> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <i class=\"fa fa-caret-down\"></i>
                            </a>
                            <ul class=\"dropdown-menu dropdown-user\">
                                <li><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_blog_dashboard", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
        
        $__internal_e94d4eb3046fe21cb1248be5f32adacff5f0dc0d7c59afb464d62daa223c9c78->leave($__internal_e94d4eb3046fe21cb1248be5f32adacff5f0dc0d7c59afb464d62daa223c9c78_prof);

    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 53,  120 => 47,  115 => 44,  109 => 42,  107 => 41,  102 => 39,  96 => 36,  92 => 34,  90 => 33,  87 => 32,  82 => 30,  77 => 29,  75 => 28,  64 => 20,  60 => 18,  54 => 17,  43 => 55,  41 => 17,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse\" role=\"navigation\">
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
            {% block navigation %}
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"{{ path('annonces_blog_homepage') }}\">Annonce liste</a>
                    </li>
                    <li>
                        <a href=\"#\">Annonce</a>
                    </li>
                </ul>

                <ul class=\"nav navbar-nav navbar-right\">
                    {% if not app.user %}
                    <li><a href=\"{{ path('login') }}\">Connexion</a></li>
                    <li><a href=\"{{ path('annonces_user_register') }}\">Inscription</a></li>
                    {% endif %}

                    {% if app.user %}
                        <li class=\"dropdown\">
                            <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\" aria-expanded=\"false\">
                                <i class=\"fa fa-user fa-fw\"></i> {{ app.user.username }} <i class=\"fa fa-caret-down\"></i>
                            </a>
                            <ul class=\"dropdown-menu dropdown-user\">
                                <li><a href=\"{{ path('annonces_blog_dashboard', { 'id' : app.user.id }) }}\"><i class=\"fa fa-user fa-fw\"></i> Tableau de bord</a>
                                </li>
                                {% if is_granted('ROLE_ADMIN') %}
                                <li><a href=\"{{ path('annonces_backend_dashboard') }}\"><i class=\"fa fa-gear fa-fw\"></i> panel admin</a>
                                {% endif %}
                                <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Messages</a>
                                </li>
                                <li class=\"divider\"></li>
                                <li><a href=\"{{ path('logout') }}\"><i class=\"fa fa-sign-out fa-fw\"></i> Déconnexion</a>
                                </li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                    {% endif %}
                </ul>
            {% endblock %}
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>", "::header.html.twig", "E:\\Sites\\teste\\annonces\\app/Resources\\views/header.html.twig");
    }
}
