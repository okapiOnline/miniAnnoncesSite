<?php

/* AnnoncesBlogBundle:Security:login.html.twig */
class __TwigTemplate_912312a41e77ba60d7111defe40d0b01c4b60976300f4d8b528f7158dfbeb0e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AnnoncesBlogBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <!-- Page Content -->
    <div class=\"container\">

        <!-- Heading Row -->
        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3 well\">

                <!-- copie du code sur hopwork.fr a personnaliser
                <div>
                    <form data-sign-type=\"signup\" name=\"fb_signin\" accept-charset=\"UTF-8\" action=\"/signin/facebook\" class=\"u-mb4\" method=\"POST\">
                        <input type=\"hidden\" name=\"scope\" value=\"email,user_photos,user_birthday\">
                        <button class=\"button full facebook block\" name=\"socialButton\"><i class=\"fa fa-lg fa-facebook\"></i>Inscription avec Facebook</button>
                    </form>
                </div>
                -->

                <!-- copie du code sur hopwork.fr a personnaliser -->
                <form data-sign-type=\"signin\" name=\"fb_signin\" accept-charset=\"UTF-8\" action=\"#\" class=\"u-mb4\" method=\"POST\">
                    <input type=\"hidden\" name=\"scope\" value=\"email,user_photos,user_birthday\">
                    <button class=\"btn btn-block btn-social btn-lg btn-facebook\" name=\"socialButton\">
                        <i class=\"fa fa-lg fa-facebook\"></i>
                        Connexion avec Facebook
                    </button>
                </form>
                <br>

                ";
        // line 29
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 30
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()), "html", null, true);
            echo "</div>
                ";
        }
        // line 32
        echo "
                <!-- copie du code sur hopwork.fr a personnaliser -->
                <form data-sign-type=\"signin\" class=\"u-mb4\" name=\"g_signin\" action=\"#\" method=\"POST\">
                    <button type=\"submit\" class=\"btn btn-block btn-social btn-lg btn-google\" name=\"socialButton\">
                        <i class=\"fa fa-lg fa-google-plus\"></i>
                        Connexion avec Google
                    </button>
                    <input type=\"hidden\" name=\"scope\" value=\"https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/plus.profile.emails.read\">
                </form>
                <br>

                <div class=\"text-center\">
                    <span>-- Ou --</span>
                </div>


                <form action=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" class=\"form-horizontal\" method=\"post\">
                    <fieldset>
                        <div class=\"form-group\">
                            <label for=\"inputEmail\" class=\"col-md-12\">E-mail</label>
                            <div class=\"col-md-12\">
                                <input class=\"form-control\" id=\"inputEmail\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" placeholder=\"Adresse e-mail\" />
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"inputPassword\" class=\"col-md-12\">Mot de passe</label>
                            <div class=\"col-md-12\">
                                <input  class=\"form-control\" id=\"inputPassword\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Mot de passe\" />
                            </div>
                        </div>

                        <div class=\"text-right\">
                            <a href=\"#\" class=\"btn btn-link\">J'ai perdu mon mot de passe</a>
                        </div>
                        <input type=\"hidden\" name=\"_annonces_blog_dashboard\" value=\"/account\" />
                        <div class=\"form-group\">
                            <div class=\"col-md-12\">
                                <button type=\"submit\" class=\"btn btn-block btn-primary\">Se connecter</button>
                            </div>
                        </div>
                    </fieldset>
                </form>


            </div>
        </div>
        <!-- /.row -->

";
    }

    public function getTemplateName()
    {
        return "AnnoncesBlogBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 53,  85 => 48,  67 => 32,  61 => 30,  59 => 29,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AnnoncesBlogBundle:Security:login.html.twig", "E:\\Sites\\teste\\annonces\\src\\Annonces\\BlogBundle/Resources/views/Security/login.html.twig");
    }
}
