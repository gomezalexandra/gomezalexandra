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

/* author.html.twig */
class __TwigTemplate_e48fe5acc6723a534cd88a99226d2adcd92113e501cc03047e5c926e01464c87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "author.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Author ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 

    <div class=\"title\">
        <h1>
            <ul class=\"text hidden\">
                <div>
                    <li>L'</li>
                </div>
                <div>
                    <li class=\"spaced\">A</li>
                    <li class=\"ghost\">u</li>
                    <li class=\"ghost\">t</li>
                    <li class=\"ghost\">e</li>
                    <li class=\"ghost\">u</li>
                    <li class=\"ghost\">r</li>
                    <li class=\"ghost\"><i class=\"fas fa-feather-alt\"> </i> </li>
                </div>   
            </ul> 
        </h1>           
    </div>

    <div class=\"subMenu\">
        ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "pseudo"], "method", false, false, false, 27)) {
            // line 28
            echo "            <div class=\"subMenuTab\"> <a href=\"../public/index.php?route=logout\">Déconnexion</a></div>
            <div class=\"subMenuTab\"> <a href=\"../public/index.php?route=profile\">Profil</a></div>
            
            ";
            // line 31
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "role"], "method", false, false, false, 31), "admin")) {
                // line 32
                echo "                <div class=\"subMenuTab\"> <a href=\"../public/index.php?route=administration\">Administration</a></div>
            ";
            }
            // line 34
            echo "
        ";
        } else {
            // line 36
            echo "            <div class=\"subMenuTab\"> <a href=\"../public/index.php?route=register\">S'inscrire</a> </div>
            <div class=\"subMenuTab\"> <a href=\"../public/index.php?route=login\">Se connecter</a> </div>

        ";
        }
        // line 40
        echo "    </div>

    <div class=\"author\">
        ";
        // line 43
        echo " <p> ";
        echo twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "content", [], "any", false, false, false, 43);
        echo " </p> ";
        // line 44
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "author.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 44,  109 => 43,  104 => 40,  98 => 36,  94 => 34,  90 => 32,  88 => 31,  83 => 28,  81 => 27,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Author {% endblock %}

{% block content %} 

    <div class=\"title\">
        <h1>
            <ul class=\"text hidden\">
                <div>
                    <li>L'</li>
                </div>
                <div>
                    <li class=\"spaced\">A</li>
                    <li class=\"ghost\">u</li>
                    <li class=\"ghost\">t</li>
                    <li class=\"ghost\">e</li>
                    <li class=\"ghost\">u</li>
                    <li class=\"ghost\">r</li>
                    <li class=\"ghost\"><i class=\"fas fa-feather-alt\"> </i> </li>
                </div>   
            </ul> 
        </h1>           
    </div>

    <div class=\"subMenu\">
        {% if session.get('pseudo') %}
            <div class=\"subMenuTab\"> <a href=\"../public/index.php?route=logout\">Déconnexion</a></div>
            <div class=\"subMenuTab\"> <a href=\"../public/index.php?route=profile\">Profil</a></div>
            
            {% if session.get('role') == 'admin' %}
                <div class=\"subMenuTab\"> <a href=\"../public/index.php?route=administration\">Administration</a></div>
            {% endif %}

        {% else %}
            <div class=\"subMenuTab\"> <a href=\"../public/index.php?route=register\">S'inscrire</a> </div>
            <div class=\"subMenuTab\"> <a href=\"../public/index.php?route=login\">Se connecter</a> </div>

        {% endif %}
    </div>

    <div class=\"author\">
        {% autoescape 'html' %} <p> {{author.content | raw}} </p> {% endautoescape %}
    </div>
{% endblock %} 
", "author.html.twig", "C:\\wamp64\\www\\openclassrooms\\templates\\author.html.twig");
    }
}
