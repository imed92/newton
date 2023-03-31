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

/* front/favorites/_toggle_button.html.twig */
class __TwigTemplate_a2f6e4dc8e752667b7d4ad2b72d7cb4f5ee7a067363d64a7ce611604c67bf069 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/favorites/_toggle_button.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/favorites/_toggle_button.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favorite_gestion", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" class=\"movie__favorite fs-1 my-2 mx-3 link-danger\">
    ";
        // line 3
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 3), "get", [0 => "myFavorites"], "method", false, true, false, 3), twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), [], "array", true, true, false, 3)) {
            // line 4
            echo "    ";
            // line 5
            echo "    <i class=\"bi bi-bookmark-x-fill\"></i>
    ";
        } else {
            // line 7
            echo "    ";
            // line 8
            echo "    <i class=\"bi bi-bookmark-plus\"></i>
    ";
        }
        // line 10
        echo "</a>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/favorites/_toggle_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  59 => 8,  57 => 7,  53 => 5,  51 => 4,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"{{ path('favorite_gestion', {id: movie.id}) }}\" class=\"movie__favorite fs-1 my-2 mx-3 link-danger\">
    {# Si l'id du film est présent dans les favoris en session #}
    {% if app.session.get('myFavorites')[movie.id] is defined %}
    {# Bouton suppr. #}
    <i class=\"bi bi-bookmark-x-fill\"></i>
    {% else %}
    {# Bouton ajouter #}
    <i class=\"bi bi-bookmark-plus\"></i>
    {% endif %}
</a>", "front/favorites/_toggle_button.html.twig", "/var/www/html/promos/newton/symfo-oflix-imed/templates/front/favorites/_toggle_button.html.twig");
    }
}
