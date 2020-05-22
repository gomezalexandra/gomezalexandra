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

/* administration.html.twig */
class __TwigTemplate_bb1803957ac7aa0503e099a2e57a9336f77faeb9d1aa2d036863abb4fe7a4f42 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "administration.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Administration ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div class=\"administration\">
   
            <div class=\"sidebar\">
                <div id=\"show\">
                    <a href=\"#anchorChapters\">Les Chapitres <i class=\"fas fa-caret-right\"></i> </a>
                    <a href=\"#anchorDrafts\">Les Brouillons <i class=\"fas fa-caret-right\"></i></a>
                    <a href=\"#anchorComments\">Les Commentaires <i class=\"fas fa-caret-right\"></i> </a>
                    <a href=\"#anchorAuthor\">L'auteur <i class=\"fas fa-caret-right\"></i> </a>
                    <a href=\"#anchorPresentation\">Texte d'Accueil <i class=\"fas fa-caret-right\"></i> </a>
                    <a href=\"#anchorUsers\">Les Utilisateurs <i class=\"fas fa-caret-right\"></i> </a>
                </div>
            </div>  

        <div class=\"administrationContent\">

            <div class=\"title\">
                   <h1>
                        <ul class=\"text hidden\">
                            <div>
                                <li>L'</li>
                            </div>
                            <div>
                                <li class=\"spaced\">A</li>
                                <li class=\"ghost\">d</li>
                                <li class=\"ghost\">m</li>
                                <li class=\"ghost\">i</li>
                                <li class=\"ghost\">n</li>
                                <li class=\"ghost\">i</li>
                                <li class=\"ghost\">s</li>
                                <li class=\"ghost\">t</li>
                                <li class=\"ghost\">r</li>
                                <li class=\"ghost\">a</li>
                                <li class=\"ghost\">t</li>
                                <li class=\"ghost\">i</li>
                                <li class=\"ghost\">o</li>
                                <li class=\"ghost\">n</li>
                                <li class=\"ghost\"><i class=\"fas fa-feather-alt\"> </i> </li>
                            </div>
                        </ul> 
                    </h1>           
            </div>

            <div class=\"administrationChapter\">

                <div id=\"anchorChapters\" class=\"anchor\"></div>
                <div class=\"administrationSubtitle\">
                    <h2 id=\"administrationSubtitleChapter\">Les Chapitres</h2>
                </div>   

                <div class=\"subMenuTab addChapter\">
                    <a href=\"../public/index.php?route=newChapter\">Nouveau chapitre<i class=\"fas fa-plus\"></i></a>
                </div>

                ";
        // line 60
        if (0 === twig_compare(call_user_func_array($this->env->getFilter('blankTable')->getCallable(), [($context["chapters"] ?? null)]), 0)) {
            // line 61
            echo "                
                        <p class=\"empty\"> Il n'y a pas de chapitre publié. </p>
                    
                    ";
        } else {
            // line 65
            echo "                        <table>
                            <tr class=\"tableHead\">
                                <td>Numéro</td>
                                <td>Titre</td>
                                <td class=\"chapterExtract\">Contenu</td>
                                <td class=\"chapterDetails\">Auteur</td>
                                <td class=\"chapterDetails\">Date</td>
                                <td>Actions</td>
                            </tr>

                            ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["chapters"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["chapter"]) {
                // line 76
                echo "                                <tr class=\"tableBody\">
                                    <td><a href=\"../public/index.php?route=chapter&chapterId=";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "id", [], "any", false, false, false, 77), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "chapterNumber", [], "any", false, false, false, 77), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"../public/index.php?route=chapter&chapterId=";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "id", [], "any", false, false, false, 78), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "title", [], "any", false, false, false, 78), "html", null, true);
                echo "</a></td>
                                    <td class=\"chapterExtract\"><a href=\"../public/index.php?route=chapter&chapterId=";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "id", [], "any", false, false, false, 79), "html", null, true);
                echo "\">";
                echo call_user_func_array($this->env->getFilter('extract')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["chapter"], "content", [], "any", false, false, false, 79)]);
                echo "</a></td>
                                    <td class=\"chapterDetails\">";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "author", [], "any", false, false, false, 80), "html", null, true);
                echo "</td>
                                    <td class=\"chapterDetails\">Ecrit le ";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "createdAt", [0 => "d/m/Y"], "method", false, false, false, 81), "html", null, true);
                echo "</td>
                                    <td class=\"tableActions\">
                                        <a href=\"../public/index.php?route=modifyChapter&chapterId=";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "id", [], "any", false, false, false, 83), "html", null, true);
                echo "\">Modifier <i class=\"fas fa-caret-right\"></i></a></br>
                                        <a href=\"../public/index.php?route=deleteChapter&chapterId=";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "id", [], "any", false, false, false, 84), "html", null, true);
                echo "\">Supprimer  <i class=\"fas fa-caret-right\"></i></a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                        </table>
                    ";
        }
        // line 89
        echo "     
                
                <div id=\"anchorDrafts\" class=\"anchor\"></div>
                <div class=\"administrationSubtitle\">
                    <h2>Les Brouillons</h2>
                </div>

                ";
        // line 96
        if (0 === twig_compare(call_user_func_array($this->env->getFilter('blankTable')->getCallable(), [($context["drafts"] ?? null)]), 0)) {
            // line 97
            echo "                
                    <p class=\"empty\"> Il n'y a pas de chapitre mis en brouillon. </p>
                    
                ";
        } else {
            // line 101
            echo "                    <table>
                        <tr class=\"tableHead\">
                            <td>Numéro</td>
                            <td>Titre</td>
                            <td class=\"chapterExtract\">Contenu</td>
                            <td class=\"chapterDetails\">Auteur</td>
                            <td class=\"chapterDetails\">Date</td>
                            <td>Actions</td>
                        </tr>

                        ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["drafts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["draft"]) {
                // line 112
                echo "                            <tr class=\"tableBody\">
                                <td><a href=\"../public/index.php?route=chapter&chapterId=";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["draft"], "id", [], "any", false, false, false, 113), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["draft"], "chapterNumber", [], "any", false, false, false, 113), "html", null, true);
                echo "</a></td>
                                <td><a href=\"../public/index.php?route=chapter&chapterId=";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["draft"], "id", [], "any", false, false, false, 114), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["draft"], "title", [], "any", false, false, false, 114), "html", null, true);
                echo "</a></td>
                                <td class=\"chapterExtract\"><a href=\"../public/index.php?route=chapter&chapterId=";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["draft"], "id", [], "any", false, false, false, 115), "html", null, true);
                echo "\">";
                echo call_user_func_array($this->env->getFilter('extract')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["draft"], "content", [], "any", false, false, false, 115)]);
                echo "</a></td>
                                <td class=\"chapterDetails\">";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["draft"], "author", [], "any", false, false, false, 116), "html", null, true);
                echo "</td>
                                <td class=\"chapterDetails\">Ecrit le ";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["draft"], "createdAt", [0 => "d/m/Y"], "method", false, false, false, 117), "html", null, true);
                echo "</td>
                                <td class=\"tableActions\">
                                    <a href=\"../public/index.php?route=publish&chapterId=";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["draft"], "id", [], "any", false, false, false, 119), "html", null, true);
                echo "\">Publier <i class=\"fas fa-caret-right\"></i></a></br>
                                    <a href=\"../public/index.php?route=modifyChapter&chapterId=";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["draft"], "id", [], "any", false, false, false, 120), "html", null, true);
                echo "\">Modifier  <i class=\"fas fa-caret-right\"></i> </a></br>
                                    <a href=\"../public/index.php?route=deleteChapter&chapterId=";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["draft"], "id", [], "any", false, false, false, 121), "html", null, true);
                echo "\">Supprimer  <i class=\"fas fa-caret-right\"></i> </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['draft'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                    </table>
                ";
        }
        // line 127
        echo " 
            </div>

            <div class=\"administrationComments\">
                <div id=\"anchorComments\" class=\"anchor\"></div>
                <div class=\"administrationSubtitle\">
                    <h2>Les Commentaires signalés</h2>
                </div>
                        
                ";
        // line 136
        if (0 === twig_compare(call_user_func_array($this->env->getFilter('blankTable')->getCallable(), [($context["comments"] ?? null)]), 0)) {
            // line 137
            echo "
                    <p class=\"empty\"> Il n'y a pas de commentaires signalé. </p>
                
                ";
        } else {
            // line 141
            echo "                    <table>
                        <tr class=\"tableHead\">
                            <td>Pseudo</td>
                            <td class=\"commentDetails\">Message</td>
                            <td>Date</td>
                            <td>Actions</td>
                        </tr>

                        ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 150
                echo "                            <tr class=\"tableBody\">
                                <td><a href=\"../public/index.php?route=chapter&chapterId=";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "chapterId", [], "any", false, false, false, 151), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "pseudo", [], "any", false, false, false, 151), "html", null, true);
                echo "</a></td>
                                <td class=\"commentDetails\"><a href=\"../public/index.php?route=chapter&chapterId=";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "chapterId", [], "any", false, false, false, 152), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('extract')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 152)]), "html", null, true);
                echo "</a></td>
                                <td><a href=\"../public/index.php?route=chapter&chapterId=";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "chapterId", [], "any", false, false, false, 153), "html", null, true);
                echo "\">Créé le ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [0 => "d/m/Y à H:i:s"], "method", false, false, false, 153), "html", null, true);
                echo "</a></td>
                                <td class=\"tableActions\">
                                    <a href=\"../public/index.php?route=unflagComment&commentId=";
                // line 155
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 155), "html", null, true);
                echo "\">Désignaler le commentaire  <i class=\"fas fa-caret-right\"></i> </a> </br>
                                    <a href=\"../public/index.php?route=deleteComment&commentId=";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 156), "html", null, true);
                echo "&chapterId=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "chapterId", [], "any", false, false, false, 156), "html", null, true);
                echo "\">Supprimer le commentaire  <i class=\"fas fa-caret-right\"></i> </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "                    </table>
                ";
        }
        // line 162
        echo "      
            </div>

            <div class=\"administrationAuthor\">
                <div id=\"anchorAuthor\" class=\"anchor\"></div>
                <div class=\"administrationSubtitle\">
                    <h2>L'Auteur</h2>
                </div>

                <div class=\"subMenuTab\">
                    <a href=\"../public/index.php?route=modifyAuthor\">Modifier le texte<i class=\"fas fa-pencil-alt\"></i></a>
                </div>
            </div>

             <div class=\"administrationPresentation\">
                <div id=\"anchorPresentation\" class=\"anchor\"></div>
                <div class=\"administrationSubtitle\">
                        <h2>Texte d'Accueil</h2>
                </div>

                <div class=\"subMenuTab\">
                    <a href=\"../public/index.php?route=modifyPresentation\">Modifier le texte<i class=\"fas fa-pencil-alt\"></i></a>
                </div>
            </div>

            <div class=\"administrationUser\">
                <div id=\"anchorUsers\" class=\"anchor\"></div>
                <div class=\"administrationSubtitle\">
                    <h2>Les Utilisateurs</h2>
                </div>

                ";
        // line 193
        if (0 === twig_compare(call_user_func_array($this->env->getFilter('blankTable')->getCallable(), [($context["users"] ?? null)]), 0)) {
            // line 194
            echo "
                    <p class=\"empty\"> Il n'y a pas d'utilisateur enregistré.  </p>
                
                ";
        } else {
            // line 198
            echo "                    <table>
                        <tr class=\"tableHead\">
                            <td>Pseudo</td>
                            <td class=\"userDetails\">Date</td>
                            <td>Rôle</td>
                            <td>Actions</td>
                        </tr>

                        ";
            // line 206
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 207
                echo "                            <tr class=\"tableBody\">
                                <td>";
                // line 208
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "pseudo", [], "any", false, false, false, 208), "html", null, true);
                echo "</td>
                                <td class=\"userDetails\">Créé le ";
                // line 209
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "createdAt", [0 => "d/m/Y à H:i:s"], "method", false, false, false, 209), "html", null, true);
                echo "</td>
                                <td>";
                // line 210
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 210), "html", null, true);
                echo "</td>
                                <td class=\"tableActions\">
                                    ";
                // line 212
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 212), "admin")) {
                    // line 213
                    echo "                                        Suppression impossible   
                                    ";
                } else {
                    // line 215
                    echo "                                        <a href=\"../public/index.php?route=deleteUser&userId=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 215), "html", null, true);
                    echo "\">Supprimer  <i class=\"fas fa-caret-right\"></i> </a>
                                    ";
                }
                // line 217
                echo "                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "                    </table>
                ";
        }
        // line 222
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 222,  437 => 220,  429 => 217,  423 => 215,  419 => 213,  417 => 212,  412 => 210,  408 => 209,  404 => 208,  401 => 207,  397 => 206,  387 => 198,  381 => 194,  379 => 193,  346 => 162,  342 => 160,  330 => 156,  326 => 155,  319 => 153,  313 => 152,  307 => 151,  304 => 150,  300 => 149,  290 => 141,  284 => 137,  282 => 136,  271 => 127,  267 => 125,  257 => 121,  253 => 120,  249 => 119,  244 => 117,  240 => 116,  234 => 115,  228 => 114,  222 => 113,  219 => 112,  215 => 111,  203 => 101,  197 => 97,  195 => 96,  186 => 89,  182 => 88,  172 => 84,  168 => 83,  163 => 81,  159 => 80,  153 => 79,  147 => 78,  141 => 77,  138 => 76,  134 => 75,  122 => 65,  116 => 61,  114 => 60,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Administration {% endblock %}

{% block content %}

    <div class=\"administration\">
   
            <div class=\"sidebar\">
                <div id=\"show\">
                    <a href=\"#anchorChapters\">Les Chapitres <i class=\"fas fa-caret-right\"></i> </a>
                    <a href=\"#anchorDrafts\">Les Brouillons <i class=\"fas fa-caret-right\"></i></a>
                    <a href=\"#anchorComments\">Les Commentaires <i class=\"fas fa-caret-right\"></i> </a>
                    <a href=\"#anchorAuthor\">L'auteur <i class=\"fas fa-caret-right\"></i> </a>
                    <a href=\"#anchorPresentation\">Texte d'Accueil <i class=\"fas fa-caret-right\"></i> </a>
                    <a href=\"#anchorUsers\">Les Utilisateurs <i class=\"fas fa-caret-right\"></i> </a>
                </div>
            </div>  

        <div class=\"administrationContent\">

            <div class=\"title\">
                   <h1>
                        <ul class=\"text hidden\">
                            <div>
                                <li>L'</li>
                            </div>
                            <div>
                                <li class=\"spaced\">A</li>
                                <li class=\"ghost\">d</li>
                                <li class=\"ghost\">m</li>
                                <li class=\"ghost\">i</li>
                                <li class=\"ghost\">n</li>
                                <li class=\"ghost\">i</li>
                                <li class=\"ghost\">s</li>
                                <li class=\"ghost\">t</li>
                                <li class=\"ghost\">r</li>
                                <li class=\"ghost\">a</li>
                                <li class=\"ghost\">t</li>
                                <li class=\"ghost\">i</li>
                                <li class=\"ghost\">o</li>
                                <li class=\"ghost\">n</li>
                                <li class=\"ghost\"><i class=\"fas fa-feather-alt\"> </i> </li>
                            </div>
                        </ul> 
                    </h1>           
            </div>

            <div class=\"administrationChapter\">

                <div id=\"anchorChapters\" class=\"anchor\"></div>
                <div class=\"administrationSubtitle\">
                    <h2 id=\"administrationSubtitleChapter\">Les Chapitres</h2>
                </div>   

                <div class=\"subMenuTab addChapter\">
                    <a href=\"../public/index.php?route=newChapter\">Nouveau chapitre<i class=\"fas fa-plus\"></i></a>
                </div>

                {% if (chapters | blankTable) == 0 %}
                
                        <p class=\"empty\"> Il n'y a pas de chapitre publié. </p>
                    
                    {% else %}
                        <table>
                            <tr class=\"tableHead\">
                                <td>Numéro</td>
                                <td>Titre</td>
                                <td class=\"chapterExtract\">Contenu</td>
                                <td class=\"chapterDetails\">Auteur</td>
                                <td class=\"chapterDetails\">Date</td>
                                <td>Actions</td>
                            </tr>

                            {% for chapter in chapters %}
                                <tr class=\"tableBody\">
                                    <td><a href=\"../public/index.php?route=chapter&chapterId={{chapter.id}}\">{{chapter.chapterNumber}}</a></td>
                                    <td><a href=\"../public/index.php?route=chapter&chapterId={{chapter.id}}\">{{chapter.title}}</a></td>
                                    <td class=\"chapterExtract\"><a href=\"../public/index.php?route=chapter&chapterId={{chapter.id}}\">{% autoescape 'html' %}{{ chapter.content | extract | raw}}{% endautoescape %}</a></td>
                                    <td class=\"chapterDetails\">{{chapter.author}}</td>
                                    <td class=\"chapterDetails\">Ecrit le {{chapter.createdAt(\"d/m/Y\")}}</td>
                                    <td class=\"tableActions\">
                                        <a href=\"../public/index.php?route=modifyChapter&chapterId={{chapter.id}}\">Modifier <i class=\"fas fa-caret-right\"></i></a></br>
                                        <a href=\"../public/index.php?route=deleteChapter&chapterId={{chapter.id}}\">Supprimer  <i class=\"fas fa-caret-right\"></i></a>
                                    </td>
                                </tr>
                            {% endfor %}
                        </table>
                    {% endif %}     
                
                <div id=\"anchorDrafts\" class=\"anchor\"></div>
                <div class=\"administrationSubtitle\">
                    <h2>Les Brouillons</h2>
                </div>

                {% if (drafts | blankTable) == 0 %}
                
                    <p class=\"empty\"> Il n'y a pas de chapitre mis en brouillon. </p>
                    
                {% else %}
                    <table>
                        <tr class=\"tableHead\">
                            <td>Numéro</td>
                            <td>Titre</td>
                            <td class=\"chapterExtract\">Contenu</td>
                            <td class=\"chapterDetails\">Auteur</td>
                            <td class=\"chapterDetails\">Date</td>
                            <td>Actions</td>
                        </tr>

                        {% for draft in drafts %}
                            <tr class=\"tableBody\">
                                <td><a href=\"../public/index.php?route=chapter&chapterId={{draft.id}}\">{{draft.chapterNumber}}</a></td>
                                <td><a href=\"../public/index.php?route=chapter&chapterId={{draft.id}}\">{{draft.title}}</a></td>
                                <td class=\"chapterExtract\"><a href=\"../public/index.php?route=chapter&chapterId={{draft.id}}\">{% autoescape 'html' %}{{ draft.content | extract | raw}}{% endautoescape %}</a></td>
                                <td class=\"chapterDetails\">{{draft.author}}</td>
                                <td class=\"chapterDetails\">Ecrit le {{draft.createdAt(\"d/m/Y\")}}</td>
                                <td class=\"tableActions\">
                                    <a href=\"../public/index.php?route=publish&chapterId={{draft.id}}\">Publier <i class=\"fas fa-caret-right\"></i></a></br>
                                    <a href=\"../public/index.php?route=modifyChapter&chapterId={{draft.id}}\">Modifier  <i class=\"fas fa-caret-right\"></i> </a></br>
                                    <a href=\"../public/index.php?route=deleteChapter&chapterId={{draft.id}}\">Supprimer  <i class=\"fas fa-caret-right\"></i> </a>
                                </td>
                            </tr>
                        {% endfor %}
                    </table>
                {% endif %}
 
            </div>

            <div class=\"administrationComments\">
                <div id=\"anchorComments\" class=\"anchor\"></div>
                <div class=\"administrationSubtitle\">
                    <h2>Les Commentaires signalés</h2>
                </div>
                        
                {% if (comments | blankTable) == 0 %}

                    <p class=\"empty\"> Il n'y a pas de commentaires signalé. </p>
                
                {% else %}
                    <table>
                        <tr class=\"tableHead\">
                            <td>Pseudo</td>
                            <td class=\"commentDetails\">Message</td>
                            <td>Date</td>
                            <td>Actions</td>
                        </tr>

                        {% for comment in comments %}
                            <tr class=\"tableBody\">
                                <td><a href=\"../public/index.php?route=chapter&chapterId={{comment.chapterId}}\">{{comment.pseudo}}</a></td>
                                <td class=\"commentDetails\"><a href=\"../public/index.php?route=chapter&chapterId={{comment.chapterId}}\">{{ comment.content | extract }}</a></td>
                                <td><a href=\"../public/index.php?route=chapter&chapterId={{comment.chapterId}}\">Créé le {{comment.createdAt(\"d/m/Y à H:i:s\")}}</a></td>
                                <td class=\"tableActions\">
                                    <a href=\"../public/index.php?route=unflagComment&commentId={{comment.id}}\">Désignaler le commentaire  <i class=\"fas fa-caret-right\"></i> </a> </br>
                                    <a href=\"../public/index.php?route=deleteComment&commentId={{comment.id}}&chapterId={{comment.chapterId}}\">Supprimer le commentaire  <i class=\"fas fa-caret-right\"></i> </a>
                                </td>
                            </tr>
                        {% endfor %}
                    </table>
                {% endif %}
      
            </div>

            <div class=\"administrationAuthor\">
                <div id=\"anchorAuthor\" class=\"anchor\"></div>
                <div class=\"administrationSubtitle\">
                    <h2>L'Auteur</h2>
                </div>

                <div class=\"subMenuTab\">
                    <a href=\"../public/index.php?route=modifyAuthor\">Modifier le texte<i class=\"fas fa-pencil-alt\"></i></a>
                </div>
            </div>

             <div class=\"administrationPresentation\">
                <div id=\"anchorPresentation\" class=\"anchor\"></div>
                <div class=\"administrationSubtitle\">
                        <h2>Texte d'Accueil</h2>
                </div>

                <div class=\"subMenuTab\">
                    <a href=\"../public/index.php?route=modifyPresentation\">Modifier le texte<i class=\"fas fa-pencil-alt\"></i></a>
                </div>
            </div>

            <div class=\"administrationUser\">
                <div id=\"anchorUsers\" class=\"anchor\"></div>
                <div class=\"administrationSubtitle\">
                    <h2>Les Utilisateurs</h2>
                </div>

                {% if (users | blankTable) == 0 %}

                    <p class=\"empty\"> Il n'y a pas d'utilisateur enregistré.  </p>
                
                {% else %}
                    <table>
                        <tr class=\"tableHead\">
                            <td>Pseudo</td>
                            <td class=\"userDetails\">Date</td>
                            <td>Rôle</td>
                            <td>Actions</td>
                        </tr>

                        {% for user in users %}
                            <tr class=\"tableBody\">
                                <td>{{user.pseudo}}</td>
                                <td class=\"userDetails\">Créé le {{user.createdAt(\"d/m/Y à H:i:s\")}}</td>
                                <td>{{user.role}}</td>
                                <td class=\"tableActions\">
                                    {% if user.role == 'admin' %}
                                        Suppression impossible   
                                    {% else %}
                                        <a href=\"../public/index.php?route=deleteUser&userId={{user.id}}\">Supprimer  <i class=\"fas fa-caret-right\"></i> </a>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                    </table>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %} ", "administration.html.twig", "C:\\wamp64\\www\\openclassrooms\\templates\\administration.html.twig");
    }
}
