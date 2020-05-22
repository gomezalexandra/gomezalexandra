<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_d441421c49be45aa3ef98b81d31e37942b0a23290242f83944a1ddddb5dd1e9b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title> ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"../public/css/error.css\"/>
        <link rel=\"stylesheet\" href=\"../public/css/common.css\"/>
        <link rel=\"stylesheet\" href=\"../public/css/form.css\"/>
        <link rel=\"stylesheet\" href=\"../public/css/home.css\"/>
        <link rel=\"stylesheet\" href=\"../public/css/author.css\"/>
        <link rel=\"stylesheet\" href=\"../public/css/profile.css\"/>
        <link rel=\"stylesheet\" href=\"../public/css/singleChapter.css\"/>
        <link rel=\"stylesheet\" href=\"../public/css/allChapters.css\"/>
        <link rel=\"stylesheet\" href=\"../public/css/administration.css\"/>
        <link rel=\"stylesheet\" href=\"../public/fonts/fontawesome-free/css/all.css\"/>
        <script src=\"https://cdn.tiny.cloud/1/cw4q64aokxm6bpoqnqo3ll1stp1bwm7285a3jsoyczyjp3dm/tinymce/5/tinymce.min.js\" referrerpolicy=\"origin\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    </head>

    <body>
        <header>

            <div class=\"menu\">
                <div class=\"menuTab\">
                    <a href=\"../public/index.php\">L'Accueil</a>
                </div>
                <div class=\"menuTab\">
                    <a href=\"../public/index.php?route=allChapters\">Les Chapitres</a>
                </div>

                <a href=\"#\" class=\"logo\"><p>JF</p></a>
                
                <div class=\"menuTab\">
                    <a href=\"../public/index.php?route=author\">L'Auteur</a>
                </div>
                <div id=\"hidenMenu\" class=\"menuTab\">
                    <div><a>Mon Compte</a> </div>
                    
                    <div class=\"hidenMenuTab\">
                        ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "pseudo"], "method", false, false, false, 41)) {
            // line 42
            echo "                            <a class=\"hidden\" href=\"../public/index.php?route=profile\">Profil</a>
                            <a class=\"hidden\" href=\"../public/index.php?route=logout\">Déconnexion</a>

                            ";
            // line 45
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "role"], "method", false, false, false, 45), "admin")) {
                // line 46
                echo "                                <a class=\"hidden\" href=\"../public/index.php?route=administration\">Administration</a>
                            ";
            }
            // line 48
            echo "                        ";
        } else {
            // line 49
            echo "                            <a class=\"hidden\" href=\"../public/index.php?route=register\">S'inscrire</a>
                            <a class=\"hidden\" href=\"../public/index.php?route=login\">Se Connecter</a>
                        ";
        }
        // line 52
        echo "                    </div>
                </div>
            </div>
             
            <h4 class=\"sessionMessage\">
                ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "add_chapter"], "method", false, false, false, 57), "html", null, true);
        echo "
                ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "new_chapter"], "method", false, false, false, 58), "html", null, true);
        echo "
                ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "error_chapter"], "method", false, false, false, 59), "html", null, true);
        echo "
                ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "modify_chapter"], "method", false, false, false, 60), "html", null, true);
        echo "
                ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "publish_chapter"], "method", false, false, false, 61), "html", null, true);
        echo " 
                ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "add_comment"], "method", false, false, false, 62), "html", null, true);
        echo " 
                ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "delete_chapter"], "method", false, false, false, 63), "html", null, true);
        echo " 
                ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "delete_comment"], "method", false, false, false, 64), "html", null, true);
        echo " 
                ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "unflag_comment"], "method", false, false, false, 65), "html", null, true);
        echo " 
                ";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "delete_user"], "method", false, false, false, 66), "html", null, true);
        echo " 
                ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "modify_author"], "method", false, false, false, 67), "html", null, true);
        echo "
                ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "modify_presentation"], "method", false, false, false, 68), "html", null, true);
        echo "
                ";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "flag_comment"], "method", false, false, false, 69), "html", null, true);
        echo " 
                ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "register"], "method", false, false, false, 70), "html", null, true);
        echo " 
                ";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "login"], "method", false, false, false, 71), "html", null, true);
        echo " 
                ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "logout"], "method", false, false, false, 72), "html", null, true);
        echo " 
                ";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "delete_account"], "method", false, false, false, 73), "html", null, true);
        echo " 
                ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "need_login"], "method", false, false, false, 74), "html", null, true);
        echo "
                ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "password"], "method", false, false, false, 75), "html", null, true);
        echo " 
                ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "not_admin"], "method", false, false, false, 76), "html", null, true);
        echo " 
            </h4>
            
        </header>

        
        <div id=\"pageContent\">  
            <div class=\"bottomSpace\">
                ";
        // line 84
        $this->displayBlock('content', $context, $blocks);
        echo "       
            </div>

            <footer>
                <div class=\"footer\">
                    <p>Site réalisé dans le cadre d'une formation OpenClassrooms</br>par Alexandra Gomez.</p>
                </div>
            </footer>
        </div>

        <script src=\"../public/js/main.js\" type=\"text/javascript\"></script>
        
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 84
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 84,  217 => 6,  199 => 84,  188 => 76,  184 => 75,  180 => 74,  176 => 73,  172 => 72,  168 => 71,  164 => 70,  160 => 69,  156 => 68,  152 => 67,  148 => 66,  144 => 65,  140 => 64,  136 => 63,  132 => 62,  128 => 61,  124 => 60,  120 => 59,  116 => 58,  112 => 57,  105 => 52,  100 => 49,  97 => 48,  93 => 46,  91 => 45,  86 => 42,  84 => 41,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title> {% block title %} {% endblock %}</title>
        <link rel=\"stylesheet\" href=\"../public/css/error.css\"/>
        <link rel=\"stylesheet\" href=\"../public/css/common.css\"/>
        <link rel=\"stylesheet\" href=\"../public/css/form.css\"/>
        <link rel=\"stylesheet\" href=\"../public/css/home.css\"/>
        <link rel=\"stylesheet\" href=\"../public/css/author.css\"/>
        <link rel=\"stylesheet\" href=\"../public/css/profile.css\"/>
        <link rel=\"stylesheet\" href=\"../public/css/singleChapter.css\"/>
        <link rel=\"stylesheet\" href=\"../public/css/allChapters.css\"/>
        <link rel=\"stylesheet\" href=\"../public/css/administration.css\"/>
        <link rel=\"stylesheet\" href=\"../public/fonts/fontawesome-free/css/all.css\"/>
        <script src=\"https://cdn.tiny.cloud/1/cw4q64aokxm6bpoqnqo3ll1stp1bwm7285a3jsoyczyjp3dm/tinymce/5/tinymce.min.js\" referrerpolicy=\"origin\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    </head>

    <body>
        <header>

            <div class=\"menu\">
                <div class=\"menuTab\">
                    <a href=\"../public/index.php\">L'Accueil</a>
                </div>
                <div class=\"menuTab\">
                    <a href=\"../public/index.php?route=allChapters\">Les Chapitres</a>
                </div>

                <a href=\"#\" class=\"logo\"><p>JF</p></a>
                
                <div class=\"menuTab\">
                    <a href=\"../public/index.php?route=author\">L'Auteur</a>
                </div>
                <div id=\"hidenMenu\" class=\"menuTab\">
                    <div><a>Mon Compte</a> </div>
                    
                    <div class=\"hidenMenuTab\">
                        {% if session.get('pseudo') %}
                            <a class=\"hidden\" href=\"../public/index.php?route=profile\">Profil</a>
                            <a class=\"hidden\" href=\"../public/index.php?route=logout\">Déconnexion</a>

                            {% if session.get('role') == 'admin' %}
                                <a class=\"hidden\" href=\"../public/index.php?route=administration\">Administration</a>
                            {% endif %}
                        {% else %}
                            <a class=\"hidden\" href=\"../public/index.php?route=register\">S'inscrire</a>
                            <a class=\"hidden\" href=\"../public/index.php?route=login\">Se Connecter</a>
                        {% endif %}
                    </div>
                </div>
            </div>
             
            <h4 class=\"sessionMessage\">
                {{session.show('add_chapter')}}
                {{session.show('new_chapter')}}
                {{session.show('error_chapter')}}
                {{session.show('modify_chapter')}}
                {{session.show('publish_chapter')}} 
                {{session.show('add_comment')}} 
                {{session.show('delete_chapter')}} 
                {{session.show('delete_comment')}} 
                {{session.show('unflag_comment')}} 
                {{session.show('delete_user')}} 
                {{session.show('modify_author')}}
                {{session.show('modify_presentation')}}
                {{session.show('flag_comment')}} 
                {{session.show('register')}} 
                {{session.show('login')}} 
                {{session.show('logout')}} 
                {{session.show('delete_account')}} 
                {{session.show('need_login')}}
                {{session.show('password')}} 
                {{session.show('not_admin')}} 
            </h4>
            
        </header>

        
        <div id=\"pageContent\">  
            <div class=\"bottomSpace\">
                {% block content %} {% endblock %}       
            </div>

            <footer>
                <div class=\"footer\">
                    <p>Site réalisé dans le cadre d'une formation OpenClassrooms</br>par Alexandra Gomez.</p>
                </div>
            </footer>
        </div>

        <script src=\"../public/js/main.js\" type=\"text/javascript\"></script>
        
    </body>
</html>", "base.html.twig", "C:\\wamp64\\www\\openclassrooms\\templates\\base.html.twig");
    }
}
