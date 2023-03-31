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

/* front/main/list_template.html.twig */
class __TwigTemplate_d75103f5237140b91c08241ab3241cfee0c7a0af4288768a69656c5de11a5d0e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'sub_title' => [$this, 'block_sub_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/main/list_template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/main/list_template.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/main/list_template.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 6
        $this->displayBlock('header', $context, $blocks);
        // line 7
        echo "
<div class=\"container-xl bg-light p-5 border-top\">

    <div class=\"row mb-2\">

        <div class=\"col-12 col-lg-3\">
            <h2 class=\"text-center text-muted fw-bold mb-4\">Les genres</h2>
            <ul class=\"d-flex flex-column flex-wrap list-unstyled justify-content-center\">
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Action</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Animation</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Aventure</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Comédie</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Dessin animé</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Documentaire</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Drame</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Espionnage</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Famille</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Fantastique</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Historique</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Policier</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Romance</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Science-fiction</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Thriller</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Western</li>
            </ul>
        </div>

        <div class=\"col-12 col-lg-9\">

            <h2 class=\"text-muted fw-bold mb-4\">";
        // line 36
        $this->displayBlock('sub_title', $context, $blocks);
        echo "</h2>

            <!-- movie -->
            ";
        // line 40
        echo "            ";
        // line 41
        echo "            ";
        // line 42
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moviesList"]) || array_key_exists("moviesList", $context) ? $context["moviesList"] : (function () { throw new RuntimeError('Variable "moviesList" does not exist.', 42, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 43
            echo "            <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm bg-white position-relative\">
                <div class=\"col-4 movie__poster\" style=\"background-image: url('";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "poster", [], "any", false, false, false, 44), "html", null, true);
            echo "');\">
                    <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poster-placeholder.png"), "html", null, true);
            echo "\" class=\"img-fluid\">
                </div>
                <div class=\"col-8 p-4 d-flex flex-column position-static\">

                    ";
            // line 49
            echo twig_include($this->env, $context, "front/favorites/_toggle_button.html.twig");
            echo "

                    ";
            // line 52
            echo "                    <strong
                        class=\"d-inline-block mb-2 text-";
            // line 53
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["movie"], "type", [], "any", false, false, false, 53), "Film"))) {
                echo "primary";
            } else {
                echo "success";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 54
$context["movie"], "type", [], "any", false, false, false, 54), "html", null, true);
            echo "</strong>
                    <h3 class=\"mb-1\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 55), "html", null, true);
            echo "</h3>
                    <div class=\"mb-1 text-muted\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "duration", [], "any", false, false, false, 56), "html", null, true);
            echo " min</div>
                    <p><small>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "summary", [], "any", false, false, false, 57), "html", null, true);
            echo "</small>
                    </p>
                    <div class=\"d-flex\" style=\"color: orange;\">
                        <i class=\"bi bi-star-fill\"></i>
                        <i class=\"bi bi-star-fill\"></i>
                        <i class=\"bi bi-star-fill\"></i>
                        <i class=\"bi bi-star-fill\"></i>
                        <i class=\"bi bi-star-half\"></i>
                        <span class=\"ps-1\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "rating", [], "any", false, false, false, 65), "html", null, true);
            echo "</span>
                    </div>
                    <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_movie_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["movie"], "slug", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\"
                        class=\"fs-1 mt-3 text-danger align-self-start\">
                        <i class=\"bi bi-arrow-right-square\"></i>
                    </a>
                </div>
            </div>
            <!-- /movie -->
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
        </div>

        <nav class=\"col-lg-9 offset-lg-3\">
            <ul class=\"pagination\">
                <li class=\"page-item disabled\">
                    <a class=\"page-link\">&laquo;</a>
                </li>
                <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                <li class=\"page-item\" aria-current=\"page\">
                    <a class=\"page-link\" href=\"#\">2</a>


                </li>
                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"#\">&raquo;</a>
                </li>
            </ul>
        </nav>

    </div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/main/list_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 36,  248 => 6,  213 => 75,  191 => 67,  186 => 65,  175 => 57,  171 => 56,  167 => 55,  163 => 54,  156 => 53,  153 => 52,  148 => 49,  141 => 45,  137 => 44,  134 => 43,  116 => 42,  114 => 41,  112 => 40,  106 => 36,  75 => 7,  73 => 6,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}

{# Contient l'en-tête optionnel de la page #}
{% block header %}{% endblock %}

<div class=\"container-xl bg-light p-5 border-top\">

    <div class=\"row mb-2\">

        <div class=\"col-12 col-lg-3\">
            <h2 class=\"text-center text-muted fw-bold mb-4\">Les genres</h2>
            <ul class=\"d-flex flex-column flex-wrap list-unstyled justify-content-center\">
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Action</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Animation</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Aventure</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Comédie</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Dessin animé</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Documentaire</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Drame</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Espionnage</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Famille</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Fantastique</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Historique</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Policier</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Romance</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Science-fiction</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Thriller</li>
                <li class=\"btn btn-sm btn-outline-danger mx-1 mb-2\">Western</li>
            </ul>
        </div>

        <div class=\"col-12 col-lg-9\">

            <h2 class=\"text-muted fw-bold mb-4\">{% block sub_title %}{% endblock %}</h2>

            <!-- movie -->
            {# On boucle avec for..in sur notre liste de films #}
            {# équivaur à foreach (\$moviesList as \$movie) #}
            {# avec les clés : https://twig.symfony.com/doc/3.x/tags/for.html#iterating-over-keys-and-values #}
            {% for movie in moviesList %}
            <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm bg-white position-relative\">
                <div class=\"col-4 movie__poster\" style=\"background-image: url('{{ movie.poster }}');\">
                    <img src=\"{{ asset('images/poster-placeholder.png') }}\" class=\"img-fluid\">
                </div>
                <div class=\"col-8 p-4 d-flex flex-column position-static\">

                    {{ include('front/favorites/_toggle_button.html.twig') }}

                    {# On doit conditionner la classe CSS appliquée sur le type de film #}
                    <strong
                        class=\"d-inline-block mb-2 text-{% if movie.type == 'Film' %}primary{% else %}success{% endif %}\">{{
                        movie.type }}</strong>
                    <h3 class=\"mb-1\">{{ movie.title }}</h3>
                    <div class=\"mb-1 text-muted\">{{ movie.duration }} min</div>
                    <p><small>{{ movie.summary }}</small>
                    </p>
                    <div class=\"d-flex\" style=\"color: orange;\">
                        <i class=\"bi bi-star-fill\"></i>
                        <i class=\"bi bi-star-fill\"></i>
                        <i class=\"bi bi-star-fill\"></i>
                        <i class=\"bi bi-star-fill\"></i>
                        <i class=\"bi bi-star-half\"></i>
                        <span class=\"ps-1\">{{ movie.rating }}</span>
                    </div>
                    <a href=\"{{ path('main_movie_show', {slug: movie.slug}) }}\"
                        class=\"fs-1 mt-3 text-danger align-self-start\">
                        <i class=\"bi bi-arrow-right-square\"></i>
                    </a>
                </div>
            </div>
            <!-- /movie -->
            {% endfor %}

        </div>

        <nav class=\"col-lg-9 offset-lg-3\">
            <ul class=\"pagination\">
                <li class=\"page-item disabled\">
                    <a class=\"page-link\">&laquo;</a>
                </li>
                <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                <li class=\"page-item\" aria-current=\"page\">
                    <a class=\"page-link\" href=\"#\">2</a>


                </li>
                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"#\">&raquo;</a>
                </li>
            </ul>
        </nav>

    </div>

</div>

{% endblock %}", "front/main/list_template.html.twig", "/var/www/html/promos/newton/symfo-oflix-imed/templates/front/main/list_template.html.twig");
    }
}
