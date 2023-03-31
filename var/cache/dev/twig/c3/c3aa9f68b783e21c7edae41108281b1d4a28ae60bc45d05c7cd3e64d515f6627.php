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

/* front/favorites/list.html.twig */
class __TwigTemplate_b104e48bcfe70ce9e5c31ed85cb7e6f95b03a3366bd17995e5777d6b771e4c97 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'nav_active_favorites' => [$this, 'block_nav_active_favorites'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/favorites/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/favorites/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/favorites/list.html.twig", 1);
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

        echo "Ma liste";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_nav_active_favorites($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_active_favorites"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_active_favorites"));

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
<div class=\"container-xl bg-light p-5 border-top\">

    <div class=\"row mb-2\">

        <h2 class=\"text-muted fw-bold mb-4\">Ma liste</h2>

        ";
        // line 15
        echo twig_include($this->env, $context, "_flash_messages.html.twig");
        echo "

        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "session", [], "any", false, false, false, 17), "get", [0 => "myFavorites"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 18
            echo "
        <div class=\"col-6\">

            <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm bg-white position-relative\">
                <div class=\"col-4 movie__poster\" style=\"background-image: url('";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "poster", [], "any", false, false, false, 22), "html", null, true);
            echo "');\">
                    <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poster-placeholder.png"), "html", null, true);
            echo "\" class=\"img-fluid\">
                </div>
                <div class=\"col-8 p-4 d-flex flex-column position-static\">
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favorite_gestion", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" class=\"movie__favorite fs-1 my-2 mx-3 link-danger\"><i
                            class=\"bi bi-bookmark-x-fill\"></i></a>
                    <strong
                        class=\"d-inline-block mb-2 text-";
            // line 29
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["movie"], "type", [], "any", false, false, false, 29), "Film"))) {
                echo "primary";
            } else {
                echo "success";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "type", [], "any", false, false, false, 29), "html", null, true);
            echo "</strong>
                    <h3 class=\"mb-1\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "</h3>
                    <div class=\"mb-1 text-muted\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "duration", [], "any", false, false, false, 31), "html", null, true);
            echo " min</div>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_movie_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["movie"], "slug", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"fs-1 mt-3 text-danger align-self-start\">
                        <i class=\"bi bi-arrow-right-square\"></i>
                    </a>
                </div>
            </div>

        </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
    </div>

    <div class=\"col\">
        <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favorites_purge");
        echo "\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Vider votre liste de favoris ?');\">Vider la
            liste</a>
    </div>

</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/favorites/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 45,  181 => 41,  166 => 32,  162 => 31,  158 => 30,  148 => 29,  142 => 26,  136 => 23,  132 => 22,  126 => 18,  122 => 17,  117 => 15,  108 => 8,  98 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Ma liste{% endblock %}

{% block nav_active_favorites %}active{% endblock %}

{% block body %}

<div class=\"container-xl bg-light p-5 border-top\">

    <div class=\"row mb-2\">

        <h2 class=\"text-muted fw-bold mb-4\">Ma liste</h2>

        {{ include('_flash_messages.html.twig') }}

        {% for movie in app.session.get('myFavorites') %}

        <div class=\"col-6\">

            <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm bg-white position-relative\">
                <div class=\"col-4 movie__poster\" style=\"background-image: url('{{ movie.poster }}');\">
                    <img src=\"{{ asset('images/poster-placeholder.png') }}\" class=\"img-fluid\">
                </div>
                <div class=\"col-8 p-4 d-flex flex-column position-static\">
                    <a href=\"{{ path('favorite_gestion', {id: movie.id}) }}\" class=\"movie__favorite fs-1 my-2 mx-3 link-danger\"><i
                            class=\"bi bi-bookmark-x-fill\"></i></a>
                    <strong
                        class=\"d-inline-block mb-2 text-{% if movie.type == 'Film' %}primary{% else %}success{% endif %}\">{{ movie.type }}</strong>
                    <h3 class=\"mb-1\">{{ movie.title }}</h3>
                    <div class=\"mb-1 text-muted\">{{ movie.duration }} min</div>
                    <a href=\"{{ path('main_movie_show', {slug: movie.slug}) }}\" class=\"fs-1 mt-3 text-danger align-self-start\">
                        <i class=\"bi bi-arrow-right-square\"></i>
                    </a>
                </div>
            </div>

        </div>

        {% endfor %}

    </div>

    <div class=\"col\">
        <a href=\"{{ path('favorites_purge') }}\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Vider votre liste de favoris ?');\">Vider la
            liste</a>
    </div>

</div>


{% endblock %}", "front/favorites/list.html.twig", "/var/www/html/promos/newton/symfo-oflix-imed/templates/front/favorites/list.html.twig");
    }
}
