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

/* back/movie/index.html.twig */
class __TwigTemplate_1dbf507388e91a1cd03d8513b8f93dcf38d525b0e848ef17fe56a6e62d5a7dd3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/movie/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/movie/index.html.twig"));

        $this->parent = $this->loadTemplate("back/base_back.html.twig", "back/movie/index.html.twig", 1);
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

        echo "Films et séries";
        
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
        echo "
    <h1>Films et séries</h1>

    ";
        // line 9
        echo twig_include($this->env, $context, "_flash_messages.html.twig");
        echo "

    <a class=\"btn btn-success\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_movie_new");
        echo "\">Ajouter un film/série</a>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Type</th>
                <!-- <th>Poster</th> -->
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 25
            echo "            <tr>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_movie_show", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "type", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <!-- <td><img src=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "poster", [], "any", false, false, false, 29), "html", null, true);
            echo "\" height=\"80\"></td> -->
                <td>
                    <a class=\"btn btn-sm btn-primary\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_movie_show", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">show</a>
                    <a class=\"btn btn-sm btn-success\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_movie_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">edit</a>
                    <a class=\"btn btn-sm btn-warning\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_casting_index", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">castings</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "            <tr>
                <td colspan=\"10\">Aucun enregistrement trouvé.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/movie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 41,  158 => 37,  149 => 33,  145 => 32,  141 => 31,  136 => 29,  132 => 28,  126 => 27,  122 => 26,  119 => 25,  114 => 24,  98 => 11,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/base_back.html.twig' %}

{% block title %}Films et séries{% endblock %}

{% block body %}

    <h1>Films et séries</h1>

    {{ include('_flash_messages.html.twig') }}

    <a class=\"btn btn-success\" href=\"{{ path('back_movie_new') }}\">Ajouter un film/série</a>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Type</th>
                <!-- <th>Poster</th> -->
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for movie in movies %}
            <tr>
                <td>{{ movie.id }}</td>
                <td><a href=\"{{ path('back_movie_show', {'id': movie.id}) }}\">{{ movie.title }}</a></td>
                <td>{{ movie.type }}</td>
                <!-- <td><img src=\"{{ movie.poster }}\" height=\"80\"></td> -->
                <td>
                    <a class=\"btn btn-sm btn-primary\" href=\"{{ path('back_movie_show', {'id': movie.id}) }}\">show</a>
                    <a class=\"btn btn-sm btn-success\" href=\"{{ path('back_movie_edit', {'id': movie.id}) }}\">edit</a>
                    <a class=\"btn btn-sm btn-warning\" href=\"{{ path('back_casting_index', {'id': movie.id}) }}\">castings</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"10\">Aucun enregistrement trouvé.</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "back/movie/index.html.twig", "/var/www/html/promos/newton/symfo-oflix-imed/templates/back/movie/index.html.twig");
    }
}
