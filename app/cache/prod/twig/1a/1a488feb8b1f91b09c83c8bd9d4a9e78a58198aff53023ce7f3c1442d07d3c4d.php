<?php

/* ::base.html.twig */
class __TwigTemplate_a55ff30d35a5551c3270d6278f2477ba3c2d767e3e9e5c40ae34e7aee290be6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'publication' => array($this, 'block_publication'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

";
        // line 4
        echo twig_include($this->env, $context, "::csshead.html.twig");
        echo "
<body>

<!-- Navigation -->

";
        // line 9
        echo twig_include($this->env, $context, "::header.html.twig");
        echo "

<!-- Page Content -->
<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-md-9\">
            ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        </div>
        <div class=\"col-md-3\">
            ";
        // line 19
        $this->displayBlock('publication', $context, $blocks);
        // line 21
        echo "            <br><br>

            ";
        // line 23
        $this->displayBlock('sidebar', $context, $blocks);
        // line 26
        echo "        </div>
    </div> <!-- /.container -->
    <br><br>





    <!-- Footer -->
    ";
        // line 35
        $this->displayBlock('footer', $context, $blocks);
        // line 38
        echo "</div>
<!-- /.container -->

";
        // line 41
        echo twig_include($this->env, $context, "::script.html.twig");
        echo "
</body>

</html>
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    // line 19
    public function block_publication($context, array $blocks = array())
    {
        // line 20
        echo "            ";
    }

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
        // line 24
        echo "
            ";
    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        // line 36
        echo "        ";
        echo twig_include($this->env, $context, "::footer.html.twig");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  107 => 35,  102 => 24,  99 => 23,  95 => 20,  92 => 19,  87 => 16,  78 => 41,  73 => 38,  71 => 35,  60 => 26,  58 => 23,  54 => 21,  52 => 19,  48 => 17,  46 => 16,  36 => 9,  28 => 4,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "E:\\Sites\\teste\\annonces\\app/Resources\\views/base.html.twig");
    }
}
