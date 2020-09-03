<?php

/* AnnoncesBlogBundle:Page:createAccountAndPub.html.twig */
class __TwigTemplate_45b783ac36a527e0605c97f2fa78bfb99216ead29936600bbd8a9bbfea112d7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnnoncesBlogBundle::layout.html.twig", "AnnoncesBlogBundle:Page:createAccountAndPub.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-9\">

                <h2>Publier une annonce</h2>
                <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!<br><br></p>

                <div class=\"well\">
                    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                    ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                    <form class=\"form-horizontal\">
                        <fieldset>
                            <legend>Déposer une annonce</legend>
                            <div class=\"form-group\">
                                <label for=\"inputName\" class=\"col-md-4\">Catégorie</label>
                                <div class=\"col-md-8\">
                                    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "categoryId", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"inputName\" class=\"col-md-4\">Titre de l'annonce</label>
                                <div class=\"col-md-8\">
                                    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Titre de l'annonce")));
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"inputFirstname\" class=\"col-md-4\">Texte de l'annonce</label>
                                <div class=\"col-md-8\">
                                    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Texte de l'annonce")));
        echo "
                                </div>
                            </div>

                            <!--
                              <div class=\"form-group\">
                                <div class=\"col-md-8 col-md-offset-4\">
                                  <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                </div>
                              </div>
                             -->
                        </fieldset>
                        ";
        // line 44
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 45
            echo "                        <!-- Partie inscription (seulement si pas identifié) -->
                        <fieldset>
                            <legend>Inscription (à prevoir si on est pas logué / qu'on s'inscrive en même temps)</legend>
                            <div class=\"form-group\">
                                <label for=\"inputName\" class=\"col-md-4\">Nom</label>
                                <div class=\"col-md-8\">
                                    ";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom")));
            echo "
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label for=\"inputFirstname\" class=\"col-md-4\">Prénom</label>
                                <div class=\"col-md-8\">
                                    ";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "lastname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prenom")));
            echo "
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label for=\"inputEmail\" class=\"col-md-4\">E-mail</label>
                                <div class=\"col-md-8\">
                                    ";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Adresse email")));
            echo "
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label for=\"inputPassword\" class=\"col-md-4\">Mot de passe</label>
                                <div class=\"col-md-8\">
                                    ";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Mot de passe")));
            echo "

                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label for=\"inputPassword\" class=\"col-md-4\">Repeter</label>
                                <div class=\"col-md-8\">
                                    ";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "user", array()), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Mot de passe")));
            echo "
                                </div>
                            </div>

                            ";
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'row');
            echo "
                            ";
        }
        // line 86
        echo "
                            <div class=\"form-group\">
                                <div class=\"col-md-8 col-md-offset-4\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Publier l'annonce</button>
                                </div>
                            </div>
                   ";
        // line 92
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

                        </fieldset>
                    </form>
                </div>

            </div><!-- /.col-md-9 -->
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AnnoncesBlogBundle:Page:createAccountAndPub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 92,  152 => 86,  147 => 84,  140 => 80,  129 => 72,  119 => 65,  109 => 58,  99 => 51,  91 => 45,  89 => 44,  74 => 32,  65 => 26,  56 => 20,  46 => 13,  42 => 12,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AnnoncesBlogBundle:Page:createAccountAndPub.html.twig", "E:\\Sites\\teste\\annonces\\src\\Annonces\\BlogBundle/Resources/views/Page/createAccountAndPub.html.twig");
    }
}
