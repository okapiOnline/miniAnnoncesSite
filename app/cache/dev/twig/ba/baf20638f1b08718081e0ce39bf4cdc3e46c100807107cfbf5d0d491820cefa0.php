<?php

/* ::base.html.twig */
class __TwigTemplate_a904b6224e55bff751cf6ea307d13c5180346dd0633dd4f53a31f4aff19f4c11 extends Twig_Template
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
        $__internal_ad9578710427787f5dfcf6c173fe149dff526e3cd9b4fb85ccfa725f34506a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9578710427787f5dfcf6c173fe149dff526e3cd9b4fb85ccfa725f34506a8a->enter($__internal_ad9578710427787f5dfcf6c173fe149dff526e3cd9b4fb85ccfa725f34506a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_ad9578710427787f5dfcf6c173fe149dff526e3cd9b4fb85ccfa725f34506a8a->leave($__internal_ad9578710427787f5dfcf6c173fe149dff526e3cd9b4fb85ccfa725f34506a8a_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_b73a0c38bf82ae8a2ac17644ee8529adf0ddbc490fc5da1b4480c003bbd1c706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b73a0c38bf82ae8a2ac17644ee8529adf0ddbc490fc5da1b4480c003bbd1c706->enter($__internal_b73a0c38bf82ae8a2ac17644ee8529adf0ddbc490fc5da1b4480c003bbd1c706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b73a0c38bf82ae8a2ac17644ee8529adf0ddbc490fc5da1b4480c003bbd1c706->leave($__internal_b73a0c38bf82ae8a2ac17644ee8529adf0ddbc490fc5da1b4480c003bbd1c706_prof);

    }

    // line 19
    public function block_publication($context, array $blocks = array())
    {
        $__internal_c31e6e2ea9fe7237a4a0c2a080e516aafd79e4a29c67ad20cf9778108941dadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31e6e2ea9fe7237a4a0c2a080e516aafd79e4a29c67ad20cf9778108941dadc->enter($__internal_c31e6e2ea9fe7237a4a0c2a080e516aafd79e4a29c67ad20cf9778108941dadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "publication"));

        // line 20
        echo "            ";
        
        $__internal_c31e6e2ea9fe7237a4a0c2a080e516aafd79e4a29c67ad20cf9778108941dadc->leave($__internal_c31e6e2ea9fe7237a4a0c2a080e516aafd79e4a29c67ad20cf9778108941dadc_prof);

    }

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_682681142041f84be4a53b8988ba9cc3444cdbf23d28cf70795ca3461a5a7f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682681142041f84be4a53b8988ba9cc3444cdbf23d28cf70795ca3461a5a7f95->enter($__internal_682681142041f84be4a53b8988ba9cc3444cdbf23d28cf70795ca3461a5a7f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 24
        echo "
            ";
        
        $__internal_682681142041f84be4a53b8988ba9cc3444cdbf23d28cf70795ca3461a5a7f95->leave($__internal_682681142041f84be4a53b8988ba9cc3444cdbf23d28cf70795ca3461a5a7f95_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7768c5005acf32a310e29cfd468a41098fd384b7b7456ac143c331a37230946c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7768c5005acf32a310e29cfd468a41098fd384b7b7456ac143c331a37230946c->enter($__internal_7768c5005acf32a310e29cfd468a41098fd384b7b7456ac143c331a37230946c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 36
        echo "        ";
        echo twig_include($this->env, $context, "::footer.html.twig");
        echo "
    ";
        
        $__internal_7768c5005acf32a310e29cfd468a41098fd384b7b7456ac143c331a37230946c->leave($__internal_7768c5005acf32a310e29cfd468a41098fd384b7b7456ac143c331a37230946c_prof);

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
        return array (  137 => 36,  131 => 35,  123 => 24,  117 => 23,  110 => 20,  104 => 19,  93 => 16,  81 => 41,  76 => 38,  74 => 35,  63 => 26,  61 => 23,  57 => 21,  55 => 19,  51 => 17,  49 => 16,  39 => 9,  31 => 4,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

{{ include(\"::csshead.html.twig\") }}
<body>

<!-- Navigation -->

{{ include(\"::header.html.twig\") }}

<!-- Page Content -->
<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-md-9\">
            {% block body%}{% endblock %}
        </div>
        <div class=\"col-md-3\">
            {% block publication %}
            {% endblock %}
            <br><br>

            {% block sidebar %}

            {% endblock %}
        </div>
    </div> <!-- /.container -->
    <br><br>





    <!-- Footer -->
    {% block footer %}
        {{ include(\"::footer.html.twig\") }}
    {% endblock %}
</div>
<!-- /.container -->

{{ include('::script.html.twig') }}
</body>

</html>
", "::base.html.twig", "E:\\Sites\\teste\\annonces\\app/Resources\\views/base.html.twig");
    }
}
