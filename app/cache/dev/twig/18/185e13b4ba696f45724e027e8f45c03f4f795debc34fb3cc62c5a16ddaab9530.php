<?php

/* ::footer.html.twig */
class __TwigTemplate_98dc9a9271534cf2d83227868a964fd8114015d4d0ab03708db0bf69effaffe5 extends Twig_Template
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
        $__internal_297940af193d2681e31d82f04a4f8054cf328eaa9e0ead6630311000adfdcbd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297940af193d2681e31d82f04a4f8054cf328eaa9e0ead6630311000adfdcbd3->enter($__internal_297940af193d2681e31d82f04a4f8054cf328eaa9e0ead6630311000adfdcbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::footer.html.twig"));

        // line 1
        echo "<footer>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <p>Copyright &copy; Your Website 2017</p>
        </div>
    </div>
</footer>";
        
        $__internal_297940af193d2681e31d82f04a4f8054cf328eaa9e0ead6630311000adfdcbd3->leave($__internal_297940af193d2681e31d82f04a4f8054cf328eaa9e0ead6630311000adfdcbd3_prof);

    }

    public function getTemplateName()
    {
        return "::footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <p>Copyright &copy; Your Website 2017</p>
        </div>
    </div>
</footer>", "::footer.html.twig", "E:\\Sites\\teste\\annonces\\app/Resources\\views/footer.html.twig");
    }
}
