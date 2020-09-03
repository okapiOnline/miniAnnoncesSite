<?php

/* AnnoncesBlogBundle:Page:index.html.twig */
class __TwigTemplate_333bb47cabb8fc51cb713472d11fdc18f392e1ffa497d0fbed56e0f91e148815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnnoncesBlogBundle::layout.html.twig", "AnnoncesBlogBundle:Page:index.html.twig", 1);
        $this->blocks = array(
            'publication' => array($this, 'block_publication'),
            'body' => array($this, 'block_body'),
            'description' => array($this, 'block_description'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnnoncesBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3f2184b0e4400ce81e25171649654b2b8985f364b8ac79d827c1d20645b8fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f2184b0e4400ce81e25171649654b2b8985f364b8ac79d827c1d20645b8fd3->enter($__internal_b3f2184b0e4400ce81e25171649654b2b8985f364b8ac79d827c1d20645b8fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnoncesBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3f2184b0e4400ce81e25171649654b2b8985f364b8ac79d827c1d20645b8fd3->leave($__internal_b3f2184b0e4400ce81e25171649654b2b8985f364b8ac79d827c1d20645b8fd3_prof);

    }

    // line 2
    public function block_publication($context, array $blocks = array())
    {
        $__internal_27c2b4d2c43c002010bb5d26991e3e6f635f3af1afb7dafcd8aeaecaf2be8985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c2b4d2c43c002010bb5d26991e3e6f635f3af1afb7dafcd8aeaecaf2be8985->enter($__internal_27c2b4d2c43c002010bb5d26991e3e6f635f3af1afb7dafcd8aeaecaf2be8985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "publication"));

        // line 3
        echo "    <a class=\"btn btn-primary btn-lg btn-block\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_register_publication");
        echo "\">Publier une annonce</a>
";
        
        $__internal_27c2b4d2c43c002010bb5d26991e3e6f635f3af1afb7dafcd8aeaecaf2be8985->leave($__internal_27c2b4d2c43c002010bb5d26991e3e6f635f3af1afb7dafcd8aeaecaf2be8985_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c655581e3c07bfb60d9397fa46d94a3abaf408313a605e4f59e01af4619fc3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c655581e3c07bfb60d9397fa46d94a3abaf408313a605e4f59e01af4619fc3b->enter($__internal_6c655581e3c07bfb60d9397fa46d94a3abaf408313a605e4f59e01af4619fc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayBlock('description', $context, $blocks);
        // line 11
        echo "    <!-- .row .well -->

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 14
            echo "        ";
            if (($this->getAttribute($context["post"], "online", array()) == 1)) {
                // line 15
                echo "    <div class=\"row well\">
        <div class=\"col-md-12\">
            <div class=\"col-md-3\">
                <img alt=\"\" class=\"img-responsive\" src=\"http://placehold.it/180x180&amp;text=Annonce\">
            </div>

            <div class=\"col-md-9\">
                <div class=\"row\">
                    <div class=\"col-md-9\">
                        <h2 style=\"margin:0;padding:0;\">";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</h2>
                        <h3 style=\"margin-top:0;\"><small>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "categoryId", array()), "name", array()), "html", null, true);
                echo "</small></h3>
                        <div>dddddddddddddddd</div>
                    </div>
                    <div class=\"col-md-3\">
                        <!-- Star
                        <div class=\"lead\">
                            <div id=\"stars-existing\" class=\"starrr\" data-rating='4'></div>-->
                        <!--<span id=\"count-existing\">4</span> étoile(s)-->
                        <!--</div>-->

                    </div>
                </div>
            </div>
            <div class=\"col-md-9\">
                <a class=\"btn btn-default\" href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_blog_view_slug", array("id" => $this->getAttribute($context["post"], "id", array()), "slug" => $this->getAttribute($context["post"], "slug", array()), "year" => twig_date_format_filter($this->env, $this->getAttribute($context["post"], "createdAt", array()), "Y"))), "html", null, true);
                echo "\" role=\"button\">Lire la suite</a>
            </div>
        </div>
    </div><!-- /.row .well -->
    <!-- .row .well-->
        ";
            }
            // line 45
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
";
        
        $__internal_6c655581e3c07bfb60d9397fa46d94a3abaf408313a605e4f59e01af4619fc3b->leave($__internal_6c655581e3c07bfb60d9397fa46d94a3abaf408313a605e4f59e01af4619fc3b_prof);

    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        $__internal_54eb99b7eb9315c862e3e047ada016e4e6b14e46fd3eab81102d861b375166cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54eb99b7eb9315c862e3e047ada016e4e6b14e46fd3eab81102d861b375166cf->enter($__internal_54eb99b7eb9315c862e3e047ada016e4e6b14e46fd3eab81102d861b375166cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 7
        echo "        <h2>Description</h2>
        <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!<br><br></p>

    ";
        
        $__internal_54eb99b7eb9315c862e3e047ada016e4e6b14e46fd3eab81102d861b375166cf->leave($__internal_54eb99b7eb9315c862e3e047ada016e4e6b14e46fd3eab81102d861b375166cf_prof);

    }

    public function getTemplateName()
    {
        return "AnnoncesBlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 7,  127 => 6,  119 => 46,  113 => 45,  104 => 39,  87 => 25,  83 => 24,  72 => 15,  69 => 14,  65 => 13,  61 => 11,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AnnoncesBlogBundle::layout.html.twig' %}
{% block publication %}
    <a class=\"btn btn-primary btn-lg btn-block\" href=\"{{ path('annonces_register_publication') }}\">Publier une annonce</a>
{% endblock %}
{% block body %}
    {% block description %}
        <h2>Description</h2>
        <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!<br><br></p>

    {% endblock %}
    <!-- .row .well -->

    {% for post in posts %}
        {% if post.online == 1 %}
    <div class=\"row well\">
        <div class=\"col-md-12\">
            <div class=\"col-md-3\">
                <img alt=\"\" class=\"img-responsive\" src=\"http://placehold.it/180x180&amp;text=Annonce\">
            </div>

            <div class=\"col-md-9\">
                <div class=\"row\">
                    <div class=\"col-md-9\">
                        <h2 style=\"margin:0;padding:0;\">{{ post.title }}</h2>
                        <h3 style=\"margin-top:0;\"><small>{{ post.categoryId.name }}</small></h3>
                        <div>dddddddddddddddd</div>
                    </div>
                    <div class=\"col-md-3\">
                        <!-- Star
                        <div class=\"lead\">
                            <div id=\"stars-existing\" class=\"starrr\" data-rating='4'></div>-->
                        <!--<span id=\"count-existing\">4</span> étoile(s)-->
                        <!--</div>-->

                    </div>
                </div>
            </div>
            <div class=\"col-md-9\">
                <a class=\"btn btn-default\" href=\"{{ path('annonces_blog_view_slug', { 'id': post.id ,'slug': post.slug, 'year':  post.createdAt|date('Y')  }) }}\" role=\"button\">Lire la suite</a>
            </div>
        </div>
    </div><!-- /.row .well -->
    <!-- .row .well-->
        {% endif %}
    {% endfor %}

{% endblock %}", "AnnoncesBlogBundle:Page:index.html.twig", "E:\\Sites\\teste\\annonces\\src\\Annonces\\BlogBundle/Resources/views/Page/index.html.twig");
    }
}
