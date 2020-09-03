<?php

/* ::footer.html.twig */
class __TwigTemplate_89bb8a8d38fac77b37f3d3bf7086b7b8e11e28e2ad168cfc1e3cff1cd2f2256e extends Twig_Template
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
        // line 1
        echo "<footer>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <p>Copyright &copy; Your Website 2017</p>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "::footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::footer.html.twig", "E:\\Sites\\teste\\annonces\\app/Resources\\views/footer.html.twig");
    }
}
