<?php

/* AnnoncesBlogBundle::layout.html.twig */
class __TwigTemplate_137878d07d4d2620819d8571af724e6dffd37e0c72331152a9a891d0b580ca9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AnnoncesBlogBundle::layout.html.twig", 1);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57b940864959c9a6e0cd5363dbc34d7ad2e3a245fcfa932260ac25427d310c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b940864959c9a6e0cd5363dbc34d7ad2e3a245fcfa932260ac25427d310c08->enter($__internal_57b940864959c9a6e0cd5363dbc34d7ad2e3a245fcfa932260ac25427d310c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnoncesBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57b940864959c9a6e0cd5363dbc34d7ad2e3a245fcfa932260ac25427d310c08->leave($__internal_57b940864959c9a6e0cd5363dbc34d7ad2e3a245fcfa932260ac25427d310c08_prof);

    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_67977885c419b0e7ed8fcdd89419f9c6435f49d9da09c396313d33b8219b9bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67977885c419b0e7ed8fcdd89419f9c6435f49d9da09c396313d33b8219b9bf2->enter($__internal_67977885c419b0e7ed8fcdd89419f9c6435f49d9da09c396313d33b8219b9bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 4
        echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Panel Category</h3>
                    </div>
                    <ul class=\"list-group\">
                        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_blog_category_slug", array("id" => $this->getAttribute($context["category"], "id", array()), "slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\" class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                                <!--<a href=\"#\" class=\"list-group-item active\">Dapibus ac facilisis in</a> -->
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                    </ul>
                </div>
            </div>
        </div>
    ";
        
        $__internal_67977885c419b0e7ed8fcdd89419f9c6435f49d9da09c396313d33b8219b9bf2->leave($__internal_67977885c419b0e7ed8fcdd89419f9c6435f49d9da09c396313d33b8219b9bf2_prof);

    }

    public function getTemplateName()
    {
        return "AnnoncesBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  53 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

    {% block sidebar %}
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Panel Category</h3>
                    </div>
                    <ul class=\"list-group\">
                        {% for category in categories %}
                                <a href=\"{{ path('annonces_blog_category_slug', { 'id': category.id ,'slug': category.slug  }) }}\" class=\"list-group-item\">{{ category.name }}</a>
                                <!--<a href=\"#\" class=\"list-group-item active\">Dapibus ac facilisis in</a> -->
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    {% endblock %}", "AnnoncesBlogBundle::layout.html.twig", "E:\\Sites\\teste\\annonces\\src\\Annonces\\BlogBundle/Resources/views/layout.html.twig");
    }
}
