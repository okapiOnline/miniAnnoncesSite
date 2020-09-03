<?php

/* AnnoncesBlogBundle:Page:index.html.twig */
class __TwigTemplate_99ed8c32d331579d9ef959d99a3974dc742787bb66db36df2a84756b52db0ca6 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_publication($context, array $blocks = array())
    {
        // line 3
        echo "    <a class=\"btn btn-primary btn-lg btn-block\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_register_publication");
        echo "\">Publier une annonce</a>
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayBlock('description', $context, $blocks);
        // line 11
        echo "    <!-- .row .well -->

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
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
    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        // line 7
        echo "        <h2>Description</h2>
        <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!<br><br></p>

    ";
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
        return array (  112 => 7,  109 => 6,  104 => 46,  98 => 45,  89 => 39,  72 => 25,  68 => 24,  57 => 15,  54 => 14,  50 => 13,  46 => 11,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AnnoncesBlogBundle:Page:index.html.twig", "E:\\Sites\\teste\\annonces\\src\\Annonces\\BlogBundle/Resources/views/Page/index.html.twig");
    }
}
