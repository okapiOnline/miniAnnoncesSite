<?php

/* ::script.html.twig */
class __TwigTemplate_9469366297d79c065534874d6c62843fbbfd11adacca6450c70703a57c986c2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3560674e3ebdcdba0e6d057f17d7cc64ef1e0478911f77574623cc1ee9c93008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3560674e3ebdcdba0e6d057f17d7cc64ef1e0478911f77574623cc1ee9c93008->enter($__internal_3560674e3ebdcdba0e6d057f17d7cc64ef1e0478911f77574623cc1ee9c93008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::script.html.twig"));

        // line 1
        echo "<!-- jQuery -->
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Star -->
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/star/star.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_3560674e3ebdcdba0e6d057f17d7cc64ef1e0478911f77574623cc1ee9c93008->leave($__internal_3560674e3ebdcdba0e6d057f17d7cc64ef1e0478911f77574623cc1ee9c93008_prof);

    }

    public function getTemplateName()
    {
        return "::script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  31 => 5,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- jQuery -->
<script src=\"{{ asset('js/jquery.js') }}\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>

<!-- Star -->
<script src=\"{{ asset('js/star/star.js') }}\"></script>", "::script.html.twig", "E:\\Sites\\teste\\annonces\\app/Resources\\views/script.html.twig");
    }
}
