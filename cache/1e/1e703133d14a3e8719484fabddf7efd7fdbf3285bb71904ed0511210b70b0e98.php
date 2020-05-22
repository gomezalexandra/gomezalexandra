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

/* login.html.twig */
class __TwigTemplate_d5d3a7a3bdf5576dfeb5211dc81157f5ae2e9fd24fcb5304bdcf05d02728e03d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Connexion ";
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
                    <li>C</li>
                    <li class=\"ghost\">o</li>
                    <li class=\"ghost\">n</li>
                    <li class=\"ghost\">n</li>
                    <li class=\"ghost\">e</li>
                    <li class=\"ghost\">c</li>
                    <li class=\"ghost\">t</li>
                    <li class=\"ghost\">i</li>
                    <li class=\"ghost\">o</li>
                    <li class=\"ghost\">n</li> 
                    <li class=\"ghost\"><i class=\"fas fa-feather-alt\"> </i> </li>
                </div>
            </ul> 
        </h1>           
    </div>

    <div class=\"login\">
        <div class=\"formContainer\">
            <form method=\"post\" action=\"../public/index.php?route=login\">
                <label for=\"pseudo\">Pseudo</label><br>
                <input type=\"text\" id=\"pseudo\" name=\"pseudo\"><br>
                <label for=\"password\">Mot de passe</label><br>
                <input type=\"password\" id=\"password\" name=\"password\"><br>
                <div class = \"formError\"> ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "show", [0 => "error_login"], "method", false, false, false, 34), "html", null, true);
        echo " </div>
                <input type=\"submit\" value=\"Connexion\" id=\"submit\" name=\"submit\">
            </form>
        </div>

        <div class=\"notMember\">
            <a href=\"../public/index.php?route=register\">Je n'ai pas de Compte <i class=\"fas fa-caret-right\"></i></a>
        </div>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 34,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Connexion {% endblock %}

{% block content %} 

    <div class=\"title\">
        <h1>
            <ul class=\"text hidden\">
                <div>
                    <li>C</li>
                    <li class=\"ghost\">o</li>
                    <li class=\"ghost\">n</li>
                    <li class=\"ghost\">n</li>
                    <li class=\"ghost\">e</li>
                    <li class=\"ghost\">c</li>
                    <li class=\"ghost\">t</li>
                    <li class=\"ghost\">i</li>
                    <li class=\"ghost\">o</li>
                    <li class=\"ghost\">n</li> 
                    <li class=\"ghost\"><i class=\"fas fa-feather-alt\"> </i> </li>
                </div>
            </ul> 
        </h1>           
    </div>

    <div class=\"login\">
        <div class=\"formContainer\">
            <form method=\"post\" action=\"../public/index.php?route=login\">
                <label for=\"pseudo\">Pseudo</label><br>
                <input type=\"text\" id=\"pseudo\" name=\"pseudo\"><br>
                <label for=\"password\">Mot de passe</label><br>
                <input type=\"password\" id=\"password\" name=\"password\"><br>
                <div class = \"formError\"> {{session.show('error_login')}} </div>
                <input type=\"submit\" value=\"Connexion\" id=\"submit\" name=\"submit\">
            </form>
        </div>

        <div class=\"notMember\">
            <a href=\"../public/index.php?route=register\">Je n'ai pas de Compte <i class=\"fas fa-caret-right\"></i></a>
        </div>
    </div>
    
{% endblock %} ", "login.html.twig", "C:\\wamp64\\www\\openclassrooms\\templates\\login.html.twig");
    }
}
