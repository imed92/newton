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

/* back/movie/show.html.twig */
class __TwigTemplate_f8e2f5363025319a1b6e1c053bad54a550a50701cea6ccf3fbb00f3e3c1de2f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "back/base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/movie/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/movie/show.html.twig"));

        $this->parent = $this->loadTemplate("back/base_back.html.twig", "back/movie/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Film/série : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Film/série</h1>

    ";
        // line 8
        echo twig_include($this->env, $context, "_flash_messages.html.twig");
        echo "

    <h2>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h2>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 24, $this->source); })()), "type", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de sortie</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 28, $this->source); })()), "releaseDate", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 28, $this->source); })()), "releaseDate", [], "any", false, false, false, 28), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Durée</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 32, $this->source); })()), "duration", [], "any", false, false, false, 32), "html", null, true);
        echo " min</td>
            </tr>
            <tr>
                <th>Résumé</th>
                ";
        // line 40
        echo "                <td>";
        echo strip_tags(twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 40, $this->source); })()), "summary", [], "any", false, false, false, 40), "<b>");
        echo "</td>
            </tr>
            <tr>
                <th>Synopsis</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 44, $this->source); })()), "synopsis", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Affiche</th>
                <td><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 48, $this->source); })()), "poster", [], "any", false, false, false, 48), "html", null, true);
        echo "\" height=\"250\"></td>
            </tr>
            <tr>
                <th>Note</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 52, $this->source); })()), "rating", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-primary float-end\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_movie_index");
        echo "\">Retour à la liste</a>

    <a class=\"btn btn-success\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_movie_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        echo "\">Modifier</a>

    ";
        // line 61
        echo twig_include($this->env, $context, "back/movie/_delete_form.html.twig");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/movie/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 61,  177 => 59,  172 => 57,  164 => 52,  157 => 48,  150 => 44,  142 => 40,  135 => 32,  128 => 28,  121 => 24,  114 => 20,  107 => 16,  98 => 10,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/base_back.html.twig' %}

{% block title %}Film/série : {{ movie.title }}{% endblock %}

{% block body %}
    <h1>Film/série</h1>

    {{ include('_flash_messages.html.twig') }}

    <h2>{{ movie.title }}</h2>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ movie.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ movie.title }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ movie.type }}</td>
            </tr>
            <tr>
                <th>Date de sortie</th>
                <td>{{ movie.releaseDate ? movie.releaseDate|date('d-m-Y') : '' }}</td>
            </tr>
            <tr>
                <th>Durée</th>
                <td>{{ movie.duration }} min</td>
            </tr>
            <tr>
                <th>Résumé</th>
                {#
                    Si on souhaite afficher du HTML on tulise le filtre raw
                    Bien s'assurer qu'on échappe aussi les balises \"script\" !
                #}
                <td>{{ movie.summary|striptags('<b>')|raw }}</td>
            </tr>
            <tr>
                <th>Synopsis</th>
                <td>{{ movie.synopsis }}</td>
            </tr>
            <tr>
                <th>Affiche</th>
                <td><img src=\"{{ movie.poster }}\" height=\"250\"></td>
            </tr>
            <tr>
                <th>Note</th>
                <td>{{ movie.rating }}</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-primary float-end\" href=\"{{ path('back_movie_index') }}\">Retour à la liste</a>

    <a class=\"btn btn-success\" href=\"{{ path('back_movie_edit', {'id': movie.id}) }}\">Modifier</a>

    {{ include('back/movie/_delete_form.html.twig') }}

{% endblock %}
", "back/movie/show.html.twig", "/var/www/html/promos/newton/symfo-oflix-imed/templates/back/movie/show.html.twig");
    }
}
