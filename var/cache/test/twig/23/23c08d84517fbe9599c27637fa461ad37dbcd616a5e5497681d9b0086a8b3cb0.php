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

/* front/main/movie_show.html.twig */
class __TwigTemplate_c7d2d11c685f7ddf859128eb0495a1a346ef476075aad21d55391028749dfb0a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'nav_active_movies' => [$this, 'block_nav_active_movies'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/main/movie_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/main/movie_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/main/movie_show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_nav_active_movies($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_active_movies"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_active_movies"));

        echo "active";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"container bg-lighttt pt-5\">

    <div class=\"row mb-2\">

        <div class=\"col\">

            <div
                class=\"row g-0 borderrr rrrounded overflow-hidden flex-md-row align-items-start mb-4 shadow-smmm position-relative\">
                <div class=\"col-4 movie__poster img-thumbnail\"
                    style=\"background-image: url('";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 18, $this->source); })()), "poster", [], "any", false, false, false, 18), "html", null, true);
        echo "');\">
                    <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poster-placeholder.png"), "html", null, true);
        echo "\" class=\"img-fluid\">
                </div>

                <div class=\"col-8 p-4 d-flex flex-column position-static bg-light\">
                    
                    ";
        // line 24
        echo twig_include($this->env, $context, "front/favorites/_toggle_button.html.twig");
        echo "
                    
                    <strong class=\"d-inline-block mb-2 text-";
        // line 26
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 26, $this->source); })()), "type", [], "any", false, false, false, 26), "Film"))) {
            echo "primary";
        } else {
            echo "success";
        }
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 26, $this->source); })()), "type", [], "any", false, false, false, 26), "html", null, true);
        echo "</strong>
                    <h3 class=\"mb-1\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 27, $this->source); })()), "title", [], "any", false, false, false, 27), "html", null, true);
        echo "</h3>
                    <div class=\"mb-1 text-muted\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 28, $this->source); })()), "duration", [], "any", false, false, false, 28), "html", null, true);
        echo " min</div>
                    <p>
                        ";
        // line 31
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 31, $this->source); })()), "genres", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 32
            echo "                        <span class=\"badge bg-warning text-dark\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                    </p>
                    <p>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 35, $this->source); })()), "synopsis", [], "any", false, false, false, 35), "html", null, true);
        echo "</p>

                    ";
        // line 38
        echo "                    ";
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 38, $this->source); })()), "rating", [], "any", false, false, false, 38), 0))) {
            // line 39
            echo "                    <div class=\"d-flex\" style=\"color: orange;\">
                        ";
            // line 40
            $context["k"] = twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 40, $this->source); })()), "rating", [], "any", false, false, false, 40);
            // line 41
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 41, $this->source); })()), "rating", [], "any", false, false, false, 41), 0, "floor")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 42
                echo "                            <i class=\"bi bi-star-fill\"></i>
                            ";
                // line 43
                $context["k"] = ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 43, $this->source); })()) - 1);
                // line 44
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                        ";
            if ((1 === twig_compare((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 45, $this->source); })()), 0))) {
                // line 46
                echo "                        <i class=\"bi bi-star-half\"></i>
                        ";
            }
            // line 48
            echo "                        <span class=\"ps-1\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 48, $this->source); })()), "rating", [], "any", false, false, false, 48), "html", null, true);
            echo "</span>
                    </div>
                    ";
        }
        // line 51
        echo "
                    ";
        // line 53
        echo "                    <div class=\"d-flex\" style=\"color: orange;\">
                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 55
            echo "                        ";
            $context["starClass"] = (((0 <= twig_compare((twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 55, $this->source); })()), "rating", [], "any", false, false, false, 55) - $context["i"]), 1))) ? ("-fill") : ((((0 <= twig_compare((twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 55, $this->source); })()), "rating", [], "any", false, false, false, 55) - $context["i"]), 0.5))) ? ("-half") : (""))));
            // line 56
            echo "                        <span class=\"bi bi-star";
            echo twig_escape_filter($this->env, (isset($context["starClass"]) || array_key_exists("starClass", $context) ? $context["starClass"] : (function () { throw new RuntimeError('Variable "starClass" does not exist.', 56, $this->source); })()), "html", null, true);
            echo "\"></span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                        <span class=\"ps-1\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 58, $this->source); })()), "rating", [], "any", false, false, false, 58), "html", null, true);
        echo "</span>
                    </div>

                    ";
        // line 62
        echo "                    ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 62, $this->source); })()), "type", [], "any", false, false, false, 62), "Série"))) {
            // line 63
            echo "                    <h2>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 63, $this->source); })()), "seasons", [], "any", false, false, false, 63)), "html", null, true);
            echo " Saisons</h2>
                    <ul class=\"list-unstyled\">
                        ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 65, $this->source); })()), "seasons", [], "any", false, false, false, 65));
            foreach ($context['_seq'] as $context["_key"] => $context["season"]) {
                // line 66
                echo "                        <li>
                            <span class=\"badge bg-danger fs-6 mb-2\">Saison ";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["season"], "number", [], "any", false, false, false, 67), "html", null, true);
                echo "</span>
                            <small class=\"ms-1\">(";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["season"], "episodesNumber", [], "any", false, false, false, 68), "html", null, true);
                echo " épisodes)</small>
                        </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['season'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                    </ul>
                    ";
        }
        // line 73
        echo "
                    ";
        // line 75
        echo "                    <dl class=\"row\">
                        <dt class=\"col-sm-12\">Avec</dt>
                        <dd class=\"col-sm-12\">
                            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["castingsList"]) || array_key_exists("castingsList", $context) ? $context["castingsList"] : (function () { throw new RuntimeError('Variable "castingsList" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["casting"]) {
            // line 79
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["casting"], "person", [], "any", false, false, false, 79), "firstname", [], "any", false, false, false, 79), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["casting"], "person", [], "any", false, false, false, 79), "lastname", [], "any", false, false, false, 79), "html", null, true);
            echo " <i>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casting"], "role", [], "any", false, false, false, 79), "html", null, true);
            echo ")</i><br>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['casting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                        </dd>
                        <dt class=\"col-sm-12\">Pays</dt>
                        <dd class=\"col-sm-12\">USA</dd>
                        <dt class=\"col-sm-12\">Année</dt>
                        <dd class=\"col-sm-12\">";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 85, $this->source); })()), "releaseDate", [], "any", false, false, false, 85), "Y"), "html", null, true);
        echo "</dd>
                    </dl>

                    <h2>Critiques</h2>

                    <p><a class=\"btn btn-sm btn-warning\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_movie_review_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90)]), "html", null, true);
        echo "\">Ajouter une critique</a></p>

                </div>
            </div>

        </div>

    </div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/main/movie_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 90,  309 => 85,  303 => 81,  290 => 79,  286 => 78,  281 => 75,  278 => 73,  274 => 71,  265 => 68,  261 => 67,  258 => 66,  254 => 65,  248 => 63,  245 => 62,  238 => 58,  229 => 56,  226 => 55,  222 => 54,  219 => 53,  216 => 51,  209 => 48,  205 => 46,  202 => 45,  196 => 44,  194 => 43,  191 => 42,  186 => 41,  184 => 40,  181 => 39,  178 => 38,  173 => 35,  170 => 34,  161 => 32,  156 => 31,  151 => 28,  147 => 27,  137 => 26,  132 => 24,  124 => 19,  120 => 18,  108 => 8,  98 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{ movie.title }}{% endblock %}

{% block nav_active_movies %}active{% endblock %}

{% block body %}

<div class=\"container bg-lighttt pt-5\">

    <div class=\"row mb-2\">

        <div class=\"col\">

            <div
                class=\"row g-0 borderrr rrrounded overflow-hidden flex-md-row align-items-start mb-4 shadow-smmm position-relative\">
                <div class=\"col-4 movie__poster img-thumbnail\"
                    style=\"background-image: url('{{ movie.poster }}');\">
                    <img src=\"{{ asset('images/poster-placeholder.png') }}\" class=\"img-fluid\">
                </div>

                <div class=\"col-8 p-4 d-flex flex-column position-static bg-light\">
                    
                    {{ include('front/favorites/_toggle_button.html.twig') }}
                    
                    <strong class=\"d-inline-block mb-2 text-{% if movie.type == 'Film' %}primary{% else %}success{% endif %}\">{{ movie.type }}</strong>
                    <h3 class=\"mb-1\">{{ movie.title }}</h3>
                    <div class=\"mb-1 text-muted\">{{ movie.duration }} min</div>
                    <p>
                        {# Les genres #}
                        {% for genre in movie.genres %}
                        <span class=\"badge bg-warning text-dark\">{{ genre.name }}</span>
                        {% endfor %}
                    </p>
                    <p>{{ movie.synopsis }}</p>

                    {# Version de Simon #}
                    {% if movie.rating > 0 %}
                    <div class=\"d-flex\" style=\"color: orange;\">
                        {% set k = movie.rating %}
                        {% for i in range(1, movie.rating|round(0, 'floor')) %}
                            <i class=\"bi bi-star-fill\"></i>
                            {% set k = k-1 %}
                        {% endfor %}
                        {% if k>0 %}
                        <i class=\"bi bi-star-half\"></i>
                        {% endif %}
                        <span class=\"ps-1\">{{ movie.rating }}</span>
                    </div>
                    {% endif %}

                    {# Version de Nicolas #}
                    <div class=\"d-flex\" style=\"color: orange;\">
                    {% for i in range(0, 4) %}
                        {% set starClass = movie.rating - i >= 1 ? '-fill' : (movie.rating - i >= 0.5 ? '-half' : '') %}
                        <span class=\"bi bi-star{{ starClass }}\"></span>
                    {% endfor %}
                        <span class=\"ps-1\">{{ movie.rating }}</span>
                    </div>

                    {# Pour les séries uniquement #}
                    {% if movie.type == 'Série' %}
                    <h2>{{ movie.seasons|length }} Saisons</h2>
                    <ul class=\"list-unstyled\">
                        {% for season in movie.seasons %}
                        <li>
                            <span class=\"badge bg-danger fs-6 mb-2\">Saison {{ season.number }}</span>
                            <small class=\"ms-1\">({{ season.episodesNumber }} épisodes)</small>
                        </li>
                        {% endfor %}
                    </ul>
                    {% endif %}

                    {# Les acteurs #}
                    <dl class=\"row\">
                        <dt class=\"col-sm-12\">Avec</dt>
                        <dd class=\"col-sm-12\">
                            {% for casting in castingsList %}
                            {{ casting.person.firstname }} {{ casting.person.lastname }} <i>({{ casting.role }})</i><br>
                            {% endfor %}
                        </dd>
                        <dt class=\"col-sm-12\">Pays</dt>
                        <dd class=\"col-sm-12\">USA</dd>
                        <dt class=\"col-sm-12\">Année</dt>
                        <dd class=\"col-sm-12\">{{ movie.releaseDate|date('Y') }}</dd>
                    </dl>

                    <h2>Critiques</h2>

                    <p><a class=\"btn btn-sm btn-warning\" href=\"{{ path('main_movie_review_add', {id: movie.id}) }}\">Ajouter une critique</a></p>

                </div>
            </div>

        </div>

    </div>

</div>

{% endblock %}", "front/main/movie_show.html.twig", "/var/www/html/promos/newton/symfo-oflix-imed/templates/front/main/movie_show.html.twig");
    }
}
