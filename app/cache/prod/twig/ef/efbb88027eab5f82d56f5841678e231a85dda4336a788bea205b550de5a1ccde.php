<?php

/* AnnoncesBackendBundle::layout.html.twig */
class __TwigTemplate_1e4367f4bfa2ed1732c2c9dc4b41a27daa7a4b626392d85782e7f4f7ec0e1b6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Admin panel developed with the Bootstrap from Twitter.\">
    <meta name=\"author\" content=\"okapiNET\">
    <link rel=\"stylesheet\" href = \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/backend/css/bootstrap.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href = \"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/backend/css/site.css"), "html", null, true);
        echo " \" />
    <link rel=\"stylesheet\" href = \"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/backend/css/bootstrap-responsive.css"), "html", null, true);
        echo " \" />
    <link rel=\"stylesheet\" href = \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/backend/jquery-ui/jquery-ui.css"), "html", null, true);
        echo " \" />
    <link rel=\"stylesheet\" href = \"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/backend/timepicker/css/timepicki.css"), "html", null, true);
        echo " \" />
    <style type=\"text/css\">
        .bs-example{
            height: 20px;
        }
    </style>


    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Admin panel developed with the Bootstrap from Twitter.\">
    <meta name=\"author\" content=\"okapi\">

    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
</head>
<body>
<div class=\"navbar navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container-fluid\">
            <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <a class=\"brand\" href=\"#\">panel administration</a>

            <div class=\"btn-group pull-right\">
                <a class=\"btn\" href=\"#\"><i class=\"icon-user\"></i> ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "</a>
                <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                    <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Mon compte</a> </li>
                    <li class=\"divider\"></li>
                    <li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">Se déconnecter</a></li>
                </ul>
            </div>
            <div class=\"nav-collapse\">
                <ul class=\"nav\">
                    <li><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_backend_dashboard");
        echo "\">Home</a></li>
                    <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Users <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_user_add");
        echo "\">Ajouter utilisateur</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\">Manager users</a></li>
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_blog_homepage");
        echo "\">Voir le site</a></li>
                    <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Articles <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_post_home");
        echo "\">Article</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_category_home");
        echo "\">Categorie</a></li>
                        </ul>
                    </li>


                    <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Roles <b class=\"caret\"></b></a>

                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">New Role</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\">Manage Roles</a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\">Stats</a></li>
                </ul>
            </div>
        </div>
    </div>
</div><!--endMenu -->

<!--BiginSidebar -->
<div class=\"container-fluid\">
    <div class=\"row-fluid\">
        <div class=\"span3\">
            <div class=\"well sidebar-nav\">
                <ul class=\"nav nav-list\">
                    <li class=\"nav-header\"><i class=\"icon-wrench\"></i> Administration</li>
                    <li class=\"active\"><a href=\"users.html\">Users</a></li>
                    <li><a href=\"#\">Roles</a></li>
                    <li class=\"nav-header\"><i class=\"icon-signal\"></i> Statistics</li>
                    <li><a href=\"#\">General</a></li>
                    <li><a href=\"#\">Users</a></li>
                    <li><a href=\"#\">Visitors</a></li>
                    <li class=\"nav-header\"><i class=\"icon-user\"></i> Profile</li>
                    <li>Mon profile</li>
                    <li><a href=\"#\">Settings</a></li>
                    <li>Deconnecter</li>
                </ul>
            </div>
        </div>
        <!-- endSideBar -->

        <div class=\"span9\">
            ";
        // line 109
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 110
            echo "                <div class=\"bs-example\">
                    <div class=\"alert alert-success\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                        ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 114
                echo "                            ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                    </div>
                </div>
            ";
        }
        // line 119
        echo "            <div class=\"row-fluid\">
                ";
        // line 120
        $this->displayBlock('body', $context, $blocks);
        // line 123
        echo "
                ";
        // line 124
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 132
        echo "
            </div>
        </div>
    </div>


</div>

<hr>

<footer class=\"well\">
    &copy; Copyright 2016
</footer>

</div>

<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/backend/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/backend/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/backend/jquery-ui/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/backend/timepicker/js/timepicki.js"), "html", null, true);
        echo "\"></script>
<scrip src=\"https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js\"></scrip>
<scrip src=\"https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js\"></scrip>
<script>
    \$(document).ready(function() {
        var theHREF;

        \$( \"#dialog-confirm\" ).dialog({
            resizable: false,
            height:160,
            width:500,
            autoOpen: false,
            modal: true,
            buttons: {
                \"Oui\": function() {
                    \$( this ).dialog( \"close\" );
                    window.location.href = theHREF;
                },
                \"Annuler\": function() {
                    \$( this ).dialog( \"close\" );
                }
            }
        });

        \$(\"a.confirmModal\").click(function(e) {
            e.preventDefault();
            theHREF = \$(this).attr(\"href\");
            \$(\"#dialog-confirm\").dialog(\"open\");
        });

        \$(\".alert-success\").alert();
        window.setTimeout(function() { \$(\".alert-success\").alert('close').fadeIn; }, 2000);
    });

    \$(document).ready(function() {
        \$('.dropdown-menu li a').hover(
                function() {
                    \$(this).children('i').addClass('icon-white');
                },
                function() {
                    \$(this).children('i').removeClass('icon-white');
                });

        if(\$(window).width() > 760)
        {
            \$('tr.list-users td div ul').addClass('pull-right');
        }
    });


    \$('#event_date').datepicker({
        dateFormat: 'dd/mm/yy',
        firstDay: 1
    });

    \$( \"#event_categorie\" ).selectmenu();
    \$( \"#sermon_categorie\" ).selectmenu();
    \$( \"#media_categorie\" ).selectmenu();
    \$( \"#meupf_plateformbundle_article_categorie\" ).selectmenu();
    \$( \"#fos_user_registration_form_roles_0\" ).selectmenu();

    \$(\"#event_heureDebut\").timepicki({
        show_meridian:false,
        min_hour_value:0,
        max_hour_value:23,
        step_size_minutes:1,
        overflow_minutes:true,
        increase_direction:'up',
        disable_keyboard_mobile: true});
    \$(\"#event_heureFin\").timepicki({
        show_meridian:false,
        min_hour_value:0,
        max_hour_value:23,
        step_size_minutes:1,
        overflow_minutes:true,
        increase_direction:'up',
        disable_keyboard_mobile: true});

</script>
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " Backend Annonces ";
    }

    // line 120
    public function block_body($context, array $blocks = array())
    {
        // line 121
        echo "
                ";
    }

    // line 124
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 125
        echo "                    <div id=\"dialog-confirm\" title=\"Confirmation de la suppression\" style=\"display:none;\">
                        <p>
                            <span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>
                            Etes-vous sûr de vouloir supprimer cet élément ?
                        </p>
                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "AnnoncesBackendBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 125,  336 => 124,  331 => 121,  328 => 120,  322 => 5,  236 => 151,  232 => 150,  228 => 149,  224 => 148,  206 => 132,  204 => 124,  201 => 123,  199 => 120,  196 => 119,  191 => 116,  182 => 114,  178 => 113,  173 => 110,  171 => 109,  125 => 66,  120 => 64,  114 => 61,  106 => 56,  100 => 53,  92 => 48,  82 => 41,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AnnoncesBackendBundle::layout.html.twig", "E:\\Sites\\teste\\annonces\\src\\Annonces\\BackendBundle/Resources/views/layout.html.twig");
    }
}
