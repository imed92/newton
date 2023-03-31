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

/* base.html.twig */
class __TwigTemplate_545f6e055ac5459a9187855632e538b7019fa8f5f30e15156e0502be7e3c05a7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'title' => [$this, 'block_title'],
            'nav_active_home' => [$this, 'block_nav_active_home'],
            'nav_active_movies' => [$this, 'block_nav_active_movies'],
            'nav_active_favorites' => [$this, 'block_nav_active_favorites'],
            'subnav' => [$this, 'block_subnav'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU\" crossorigin=\"anonymous\">
    <!-- Bootstrap icons -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\">
    <!-- Our custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/oflix.css"), "html", null, true);
        echo "\">
    ";
        // line 20
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 21
        echo "    <!-- favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">

    <title>";
        // line 24
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>

<body>

    ";
        // line 30
        echo "    ";
        // line 31
        echo "
    ";
        // line 33
        echo "    ";
        // line 34
        echo "
    <!-- Nav -->
    ";
        // line 37
        echo "    ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "session", [], "any", false, false, false, 37), "get", [0 => "theme"], "method", false, false, false, 37), "allocine"))) {
            // line 38
            echo "    <nav class=\"navbar navbar-expand-lg navbar-light\" style=\"background-color: #fecc00;\">
    ";
        } else {
            // line 40
            echo "    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    ";
        }
        // line 42
        echo "        <div class=\"container-fluid\">
            <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_home");
        echo "\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none header-logo\">
                <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" height=\"24\" alt=\"Logo O'flix\">
                <span class=\"header-logo__title\">O'flix</span>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 54
        $this->displayBlock('nav_active_home', $context, $blocks);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_home");
        echo "\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 57
        $this->displayBlock('nav_active_movies', $context, $blocks);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_movies_list");
        echo "\"><i class=\"bi bi-film\"></i> Films, séries TV</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 60
        $this->displayBlock('nav_active_favorites', $context, $blocks);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favorites_list");
        echo "\"><i class=\"bi bi-bookmark\"></i> Ma liste</a>
                    </li>
                </ul>

                ";
        // line 64
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 65
            echo "
                <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                            data-bs-toggle=\"dropdown\">
                            <span>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "email", [], "any", false, false, false, 70), "html", null, true);
            echo "</span>
                            <i class=\"bi bi-person-square\"></i>
                        </a>
                        <ul class=\"dropdown-menu\">

                            ";
            // line 75
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 76
                echo "                            <li class=\"mb-1\"><span class=\"ms-3 text-muted\">Administrateur</span></li>
                            ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) {
                // line 78
                echo "                            <li class=\"mb-1\"><span class=\"ms-3 text-muted\">Manager</span></li>
                            ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 80
                echo "                            <li class=\"mb-1\"><span class=\"ms-3 text-muted\">Utilisateur</span></li>
                            ";
            }
            // line 82
            echo "
                            ";
            // line 84
            echo "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) {
                // line 85
                echo "                            <li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_movie_index");
                echo "\">Backoffice</a></li>
                            ";
            }
            // line 87
            echo "                            <li>
                                <hr class=\"dropdown-divider\">
                            </li>
                            <li><a class=\"dropdown-item\" href=\"";
            // line 90
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_logout");
            echo "\">Déconnexion</a></li>
                        </ul>
                    </li>
                </ul>

                ";
        } else {
            // line 96
            echo "
                <a href=\"";
            // line 97
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_index");
            echo "\" class=\"btn btn-danger me-2\">Connexion</a>

                ";
        }
        // line 100
        echo "
                <form class=\"d-flex\" action=\"list.html\">
                    <input class=\"form-control form-control-sm me-2\" name=\"search\" type=\"search\"
                        placeholder=\"Rechercher...\">
                    <button class=\"btn btn-outline-danger\" type=\"submit\"><i class=\"bi bi-search\"></i></button>
                </form>
            </div>
        </div>
    </nav>

    ";
        // line 111
        echo "    ";
        // line 112
        echo "    ";
        $this->displayBlock('subnav', $context, $blocks);
        // line 113
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
            ";
        // line 117
        $this->displayBlock('body', $context, $blocks);
        // line 118
        echo "            </div>
        </div>
    </div>

    ";
        // line 123
        echo "    ";
        if (array_key_exists("randomMovie", $context)) {
            // line 124
            echo "    <div class=\"text-center border-top pt-3\">
        <p>Un film au hasard : <a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_movie_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["randomMovie"]) || array_key_exists("randomMovie", $context) ? $context["randomMovie"] : (function () { throw new RuntimeError('Variable "randomMovie" does not exist.', 125, $this->source); })()), "slug", [], "any", false, false, false, 125)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["randomMovie"]) || array_key_exists("randomMovie", $context) ? $context["randomMovie"] : (function () { throw new RuntimeError('Variable "randomMovie" does not exist.', 125, $this->source); })()), "title", [], "any", false, false, false, 125), "html", null, true);
            echo "</a></p>
    </div>
    ";
        }
        // line 128
        echo "
    <!-- footer -->
    <footer class=\"container-fluid py-4 border-top text-center\">
        <span class=\"text-muted\">O'flix made with &hearts; at O'clock !
            <br><small>Thème :
            <a href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_theme_switcher");
        echo "\" class=\"link-secondary text-decoration-none\">
                ";
        // line 135
        echo "                ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "session", [], "any", false, false, false, 135), "get", [0 => "theme", 1 => "netflix"], "method", false, false, false, 135), "netflix"))) {
            // line 136
            echo "                Allociné <i class=\"bi bi-toggle-on mx-1\"></i> Netflix
                ";
        } else {
            // line 138
            echo "                Allociné <i class=\"bi bi-toggle-off mx-1\"></i> Netflix
                ";
        }
        // line 140
        echo "            </a></small>
        </span>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\"
        crossorigin=\"anonymous\"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js\" integrity=\"sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js\" integrity=\"sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/\" crossorigin=\"anonymous\"></script>
    -->
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_nav_active_home($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_active_home"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_active_home"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_nav_active_movies($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_active_movies"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_active_movies"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_nav_active_favorites($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_active_favorites"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_active_favorites"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_subnav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subnav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subnav"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 117,  407 => 112,  389 => 60,  371 => 57,  353 => 54,  335 => 24,  317 => 20,  289 => 140,  285 => 138,  281 => 136,  278 => 135,  274 => 133,  267 => 128,  259 => 125,  256 => 124,  253 => 123,  247 => 118,  245 => 117,  239 => 113,  236 => 112,  234 => 111,  222 => 100,  216 => 97,  213 => 96,  204 => 90,  199 => 87,  193 => 85,  190 => 84,  187 => 82,  183 => 80,  179 => 78,  175 => 76,  173 => 75,  165 => 70,  158 => 65,  156 => 64,  147 => 60,  139 => 57,  131 => 54,  118 => 44,  114 => 43,  111 => 42,  107 => 40,  103 => 38,  100 => 37,  96 => 34,  94 => 33,  91 => 31,  89 => 30,  81 => 24,  76 => 22,  73 => 21,  70 => 20,  66 => 15,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU\" crossorigin=\"anonymous\">
    <!-- Bootstrap icons -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\">
    <!-- Our custom CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/oflix.css') }}\">
    {#
        Si on souhaite un stye spécifique pour une page donnée
        l'enfant pourra créer un bloc et y mettre son style à lui
    #}
    {% block css %}{% endblock %}
    <!-- favicon -->
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.png') }}\" type=\"image/x-icon\">

    <title>{% block title %}{% endblock %}</title>
</head>

<body>

    {# dump dans le HTML #}
    {# {{ dump(app.session.get('theme')) }} #}

    {# dump dans la Web Debug Toolbar #}
    {# {% dump app.session.get('theme') %} #}

    <!-- Nav -->
    {# @todo Gérer \"text-dark\" sur le titre et \"btn-dark\" sur le bouton Connexion #}
    {% if app.session.get('theme') == 'allocine' %}
    <nav class=\"navbar navbar-expand-lg navbar-light\" style=\"background-color: #fecc00;\">
    {% else %}
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    {% endif %}
        <div class=\"container-fluid\">
            <a href=\"{{ path('main_home') }}\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none header-logo\">
                <img src=\"{{ asset('favicon.png') }}\" height=\"24\" alt=\"Logo O'flix\">
                <span class=\"header-logo__title\">O'flix</span>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% block nav_active_home %}{% endblock %}\" href=\"{{ path('main_home') }}\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% block nav_active_movies %}{% endblock %}\" href=\"{{ path('main_movies_list') }}\"><i class=\"bi bi-film\"></i> Films, séries TV</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% block nav_active_favorites %}{% endblock %}\" href=\"{{ path('favorites_list') }}\"><i class=\"bi bi-bookmark\"></i> Ma liste</a>
                    </li>
                </ul>

                {% if is_granted('IS_AUTHENTICATED_FULLY') %}

                <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                            data-bs-toggle=\"dropdown\">
                            <span>{{ app.user.email }}</span>
                            <i class=\"bi bi-person-square\"></i>
                        </a>
                        <ul class=\"dropdown-menu\">

                            {% if is_granted('ROLE_ADMIN') %}
                            <li class=\"mb-1\"><span class=\"ms-3 text-muted\">Administrateur</span></li>
                            {% elseif is_granted('ROLE_MANAGER') %}
                            <li class=\"mb-1\"><span class=\"ms-3 text-muted\">Manager</span></li>
                            {% elseif is_granted('ROLE_USER') %}
                            <li class=\"mb-1\"><span class=\"ms-3 text-muted\">Utilisateur</span></li>
                            {% endif %}

                            {# Avec la hérarchie, MANAGER et ADMIN ont accès au back-office #}
                            {% if is_granted('ROLE_MANAGER') %}
                            <li><a class=\"dropdown-item\" href=\"{{ path('back_movie_index') }}\">Backoffice</a></li>
                            {% endif %}
                            <li>
                                <hr class=\"dropdown-divider\">
                            </li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('login_logout') }}\">Déconnexion</a></li>
                        </ul>
                    </li>
                </ul>

                {% else %}

                <a href=\"{{ path('login_index') }}\" class=\"btn btn-danger me-2\">Connexion</a>

                {% endif %}

                <form class=\"d-flex\" action=\"list.html\">
                    <input class=\"form-control form-control-sm me-2\" name=\"search\" type=\"search\"
                        placeholder=\"Rechercher...\">
                    <button class=\"btn btn-outline-danger\" type=\"submit\"><i class=\"bi bi-search\"></i></button>
                </form>
            </div>
        </div>
    </nav>

    {# @todo mettre la sous-nav dans le body + sous block container BS #}
    {# Block qui peut accueillir une navigation de second niveau #}
    {% block subnav %}{% endblock %}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
            {% block body %}{% endblock %}
            </div>
        </div>
    </div>

    {# Widget \"Un film au hasard\"\" #}
    {% if randomMovie is defined %}
    <div class=\"text-center border-top pt-3\">
        <p>Un film au hasard : <a href=\"{{ path('main_movie_show', {slug: randomMovie.slug}) }}\">{{ randomMovie.title }}</a></p>
    </div>
    {% endif %}

    <!-- footer -->
    <footer class=\"container-fluid py-4 border-top text-center\">
        <span class=\"text-muted\">O'flix made with &hearts; at O'clock !
            <br><small>Thème :
            <a href=\"{{ path('main_theme_switcher') }}\" class=\"link-secondary text-decoration-none\">
                {# Attention avec la sessoin, bien vérifier ce qui se passe la première fois qu'on arrive sur le site #}
                {% if app.session.get('theme', 'netflix') == 'netflix' %}
                Allociné <i class=\"bi bi-toggle-on mx-1\"></i> Netflix
                {% else %}
                Allociné <i class=\"bi bi-toggle-off mx-1\"></i> Netflix
                {% endif %}
            </a></small>
        </span>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\"
        crossorigin=\"anonymous\"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js\" integrity=\"sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js\" integrity=\"sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/\" crossorigin=\"anonymous\"></script>
    -->
</body>

</html>", "base.html.twig", "/var/www/html/promos/newton/symfo-oflix-imed/templates/base.html.twig");
    }
}
