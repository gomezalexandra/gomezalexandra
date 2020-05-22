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

/* home.html.twig */
class __TwigTemplate_cff34cdd5a7b5325d19cc3ffa49f2251d9caf5a156e070b785f8ebf0c1388ef3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Accueil ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
 
    <div>
        <div class=\"title\">
            <h1 >
                <ul class=\"text hidden\">
                    <div>
                        <li>J</li>
                        <li class=\"ghost\">e</li>
                        <li class=\"ghost\">a</li>
                        <li class=\"ghost\">n</li>
                    </div>
                    <div>
                        <li class=\"spaced\">F</li>
                        <li class=\"ghost\">o</li>
                        <li class=\"ghost\">r</li>
                        <li class=\"ghost\">t</li>
                        <li class=\"ghost\">e</li>
                        <li class=\"ghost\">r</li>
                        <li class=\"ghost\">o</li>
                        <li class=\"ghost\">c</li>
                        <li class=\"ghost\">h</li>
                        <li class=\"ghost\">e</li>
                        <li class=\"ghost\"><i class=\"fas fa-feather-alt\"> </i> </li>
                    </div>
                </ul> 
            </h1>
        </div>


        <div class=\"subMenu\">
            ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "pseudo"], "method", false, false, false, 36)) {
            // line 37
            echo "                <div class=\"subMenuTab\"><a href=\"../public/index.php?route=logout\">Déconnexion</a></div>
                <div class=\"subMenuTab\"><a href=\"../public/index.php?route=profile\">Profil</a></div>
                
                ";
            // line 40
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "role"], "method", false, false, false, 40), "admin")) {
                // line 41
                echo "                    <div class=\"subMenuTab\"><a href=\"../public/index.php?route=administration\">Administration</a></div>
                ";
            }
            // line 43
            echo "
            ";
        } else {
            // line 45
            echo "
                <div class=\"subMenuTab\"><a href=\"../public/index.php?route=register\">S'inscrire</a></div>
                <div class=\"subMenuTab\"><a href=\"../public/index.php?route=login\">Se connecter</a></div>

            ";
        }
        // line 50
        echo "        </div>

        <div id=\"textPresentation\">
            <p> ";
        // line 53
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["presentation"] ?? null), "content", [], "any", false, false, false, 53);
        echo " ";
        echo "</p> 
        </div>

        <div class=\"lastChapterContainer\">
            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chapters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["chapter"]) {
            echo " 
                <a class=\"bookContainer\" href=\"../public/index.php?route=chapter&chapterId=";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "\">
                    <div class=\"book\">
                        <div class=\"front\">
                            <div class=\"cover\">
                                <p class=\"bookAuthor\">  
                                    <div class=\"lastChapter\">
                                        <p class=\"lastChapterTitle\">Chapitre ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "chapterNumber", [], "any", false, false, false, 64), "html", null, true);
            echo " </p>
                                        <p> ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "title", [], "any", false, false, false, 65), "html", null, true);
            echo " </p>
                                        <p class=\"bottomDate\"> Publié le ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "createdAt", [0 => "d/m/Y"], "method", false, false, false, 66), "html", null, true);
            echo " </p>
                                    </div>             
                                </p>
                            </div>
                        </div>
                        <div class=\"left-side\">
                            <h2>
                                <span>Jean Forteroche</span>
                                <span>2020</span>
                            </h2>
                        </div>
                    </div>
                </a>
            
                <div class=\"lastChapterLink\">
                    <p><a id=\"textWhite\" href=\"../public/index.php?route=chapter&chapterId=";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "id", [], "any", false, false, false, 81), "html", null, true);
            echo "\">Lire le dernier Chapitre</a></p>             
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo " 
        </div>
        
        <div class=\"homeLinks\">
            <div class=\"allChaptersContainer\">
                <a class=\"whiteBlock\" id=\"blockAllChapter\" href=\"../public/index.php?route=allChapters\">
                    <div class=\"allChaptersLink\"> 
                        <h3>Voir les Chapitres <i class=\"fas fa-caret-right\"></i></h3>
                    </div>
                </a>
                <div class=\"blueBlockChapter\"> 
                    <div> 
                        <img class=\"imageHomeChapter\" src=\"../public/img/book.jpg\" alt=\"livre ouvert\"/>                  
                    </div>                
                </div>
            </div>
            
            <div class=\"authorContainer\">
                <a class=\"whiteBlock\" id=\"blockAuthor\" href=\"../public/index.php?route=author\">
                    <div class=\"authorLink\">  
                        <h3>Découvrir l'Auteur <i class=\"fas fa-caret-right\"></i></h3>
                    </div>
                </a>           
                <div class=\"blueBlockAuthor\">
                    <div> 
                        <img class=\"imageHomeAuthor\" src=\"../public/img/person.jpg\" alt=\"personne tenant un stylo\"/>                 
                    </div>        
                </div>           
            </div> 
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 83,  169 => 81,  151 => 66,  147 => 65,  143 => 64,  134 => 58,  128 => 57,  119 => 53,  114 => 50,  107 => 45,  103 => 43,  99 => 41,  97 => 40,  92 => 37,  90 => 36,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Accueil {% endblock %}

{% block content %} 
 
    <div>
        <div class=\"title\">
            <h1 >
                <ul class=\"text hidden\">
                    <div>
                        <li>J</li>
                        <li class=\"ghost\">e</li>
                        <li class=\"ghost\">a</li>
                        <li class=\"ghost\">n</li>
                    </div>
                    <div>
                        <li class=\"spaced\">F</li>
                        <li class=\"ghost\">o</li>
                        <li class=\"ghost\">r</li>
                        <li class=\"ghost\">t</li>
                        <li class=\"ghost\">e</li>
                        <li class=\"ghost\">r</li>
                        <li class=\"ghost\">o</li>
                        <li class=\"ghost\">c</li>
                        <li class=\"ghost\">h</li>
                        <li class=\"ghost\">e</li>
                        <li class=\"ghost\"><i class=\"fas fa-feather-alt\"> </i> </li>
                    </div>
                </ul> 
            </h1>
        </div>


        <div class=\"subMenu\">
            {% if session.get('pseudo') %}
                <div class=\"subMenuTab\"><a href=\"../public/index.php?route=logout\">Déconnexion</a></div>
                <div class=\"subMenuTab\"><a href=\"../public/index.php?route=profile\">Profil</a></div>
                
                {% if session.get('role') == 'admin' %}
                    <div class=\"subMenuTab\"><a href=\"../public/index.php?route=administration\">Administration</a></div>
                {% endif %}

            {% else %}

                <div class=\"subMenuTab\"><a href=\"../public/index.php?route=register\">S'inscrire</a></div>
                <div class=\"subMenuTab\"><a href=\"../public/index.php?route=login\">Se connecter</a></div>

            {% endif %}
        </div>

        <div id=\"textPresentation\">
            <p> {% autoescape 'html' %} {{presentation.content | raw}} {% endautoescape %}</p> 
        </div>

        <div class=\"lastChapterContainer\">
            {% for chapter in chapters %} 
                <a class=\"bookContainer\" href=\"../public/index.php?route=chapter&chapterId={{chapter.id}}\">
                    <div class=\"book\">
                        <div class=\"front\">
                            <div class=\"cover\">
                                <p class=\"bookAuthor\">  
                                    <div class=\"lastChapter\">
                                        <p class=\"lastChapterTitle\">Chapitre {{chapter.chapterNumber}} </p>
                                        <p> {{chapter.title}} </p>
                                        <p class=\"bottomDate\"> Publié le {{chapter.createdAt(\"d/m/Y\")}} </p>
                                    </div>             
                                </p>
                            </div>
                        </div>
                        <div class=\"left-side\">
                            <h2>
                                <span>Jean Forteroche</span>
                                <span>2020</span>
                            </h2>
                        </div>
                    </div>
                </a>
            
                <div class=\"lastChapterLink\">
                    <p><a id=\"textWhite\" href=\"../public/index.php?route=chapter&chapterId={{chapter.id}}\">Lire le dernier Chapitre</a></p>             
                </div>
            {% endfor %} 
        </div>
        
        <div class=\"homeLinks\">
            <div class=\"allChaptersContainer\">
                <a class=\"whiteBlock\" id=\"blockAllChapter\" href=\"../public/index.php?route=allChapters\">
                    <div class=\"allChaptersLink\"> 
                        <h3>Voir les Chapitres <i class=\"fas fa-caret-right\"></i></h3>
                    </div>
                </a>
                <div class=\"blueBlockChapter\"> 
                    <div> 
                        <img class=\"imageHomeChapter\" src=\"../public/img/book.jpg\" alt=\"livre ouvert\"/>                  
                    </div>                
                </div>
            </div>
            
            <div class=\"authorContainer\">
                <a class=\"whiteBlock\" id=\"blockAuthor\" href=\"../public/index.php?route=author\">
                    <div class=\"authorLink\">  
                        <h3>Découvrir l'Auteur <i class=\"fas fa-caret-right\"></i></h3>
                    </div>
                </a>           
                <div class=\"blueBlockAuthor\">
                    <div> 
                        <img class=\"imageHomeAuthor\" src=\"../public/img/person.jpg\" alt=\"personne tenant un stylo\"/>                 
                    </div>        
                </div>           
            </div> 
        </div>

    </div>
{% endblock %}  ", "home.html.twig", "C:\\wamp64\\www\\openclassrooms\\templates\\home.html.twig");
    }
}
