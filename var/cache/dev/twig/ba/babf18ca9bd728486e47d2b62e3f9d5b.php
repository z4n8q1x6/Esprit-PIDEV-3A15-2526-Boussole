<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* afficher_front_fournisseur/index.html.twig */
class __TwigTemplate_9a00cc1680271fce188115a6131937a2 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "front_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "afficher_front_fournisseur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "afficher_front_fournisseur/index.html.twig"));

        $this->parent = $this->load("front_base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Boussole - Liste des Fournisseurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "<div class=\"container mt-4 pb-5\">
    ";
        // line 8
        yield "    <div class=\"d-flex justify-content-between align-items-center mb-5\">
        <h2 class=\"fw-bold text-dark mb-0\">Nos Partenaires Fournisseurs</h2>
        <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ajouter_fournisseur");
        yield "\" class=\"btn btn-add-modern\">
            <i class=\"fas fa-plus-circle me-2\"></i> Ajouter un fournisseur
        </a>
    </div>

    ";
        // line 16
        yield "    <div class=\"card mb-5 border-0 shadow-sm modern-filter-bar\">
        <div class=\"card-body p-3\">
            <form method=\"get\" action=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficher_front_fournisseur");
        yield "\" class=\"row g-3 align-items-center\">
                <div class=\"col-12 col-md-5\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white border-end-0 py-2\">
                            <i class=\"fas fa-search text-primary\"></i>
                        </span>
                        <input type=\"text\" name=\"search\" class=\"form-control border-start-0 py-2\" placeholder=\"Rechercher un nom ou matricule...\" value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("currentSearch", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentSearch"]) || array_key_exists("currentSearch", $context) ? $context["currentSearch"] : (function () { throw new RuntimeError('Variable "currentSearch" does not exist.', 24, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                </div>
                <div class=\"col-6 col-md-3\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white py-2\"><i class=\"fas fa-sort\"></i></span>
                        <select name=\"sort\" class=\"form-select py-2\">
                            <option value=\"nom\" ";
        // line 31
        if ((((array_key_exists("currentSort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 31, $this->source); })()), "nom")) : ("nom")) == "nom")) {
            yield "selected";
        }
        yield ">Trier par Nom</option>
                            <option value=\"matricule_fiscal\" ";
        // line 32
        if ((((array_key_exists("currentSort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 32, $this->source); })()), "nom")) : ("nom")) == "matricule_fiscal")) {
            yield "selected";
        }
        yield ">Trier par Matricule</option>
                            <option value=\"telephone\" ";
        // line 33
        if ((((array_key_exists("currentSort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 33, $this->source); })()), "nom")) : ("nom")) == "telephone")) {
            yield "selected";
        }
        yield ">Trier par Téléphone</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-6 col-md-2\">
                    <select name=\"direction\" class=\"form-select py-2\">
                        <option value=\"asc\" ";
        // line 39
        if ((((array_key_exists("currentDirection", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentDirection"]) || array_key_exists("currentDirection", $context) ? $context["currentDirection"] : (function () { throw new RuntimeError('Variable "currentDirection" does not exist.', 39, $this->source); })()), "asc")) : ("asc")) == "asc")) {
            yield "selected";
        }
        yield ">Croissant</option>
                        <option value=\"desc\" ";
        // line 40
        if ((((array_key_exists("currentDirection", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentDirection"]) || array_key_exists("currentDirection", $context) ? $context["currentDirection"] : (function () { throw new RuntimeError('Variable "currentDirection" does not exist.', 40, $this->source); })()), "asc")) : ("asc")) == "desc")) {
            yield "selected";
        }
        yield ">Décroissant</option>
                    </select>
                </div>
                <div class=\"col-12 col-md-2\">
                    <button type=\"submit\" class=\"btn btn-apply-modern w-100 py-2\">
                        Appliquer
                    </button>
                </div>
            </form>
        </div>
    </div>

    ";
        // line 53
        yield "    <div class=\"row g-4\">
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fournisseurs"]) || array_key_exists("fournisseurs", $context) ? $context["fournisseurs"] : (function () { throw new RuntimeError('Variable "fournisseurs" does not exist.', 54, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 55
            yield "            <div class=\"col-md-4\">
                <div class=\"card h-100 supplier-card-modern\">
                    <div class=\"card-header-accent\"></div>
                    <div class=\"card-body p-4\">
                        <div class=\"d-flex justify-content-between align-items-start mb-3\">
                            <h5 class=\"card-title fw-bold text-dark mb-0\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "nom", [], "any", false, false, false, 60), "html", null, true);
            yield "</h5>
                            <span class=\"badge bg-soft-primary px-3 py-2 rounded-pill\">Actif</span>
                        </div>
                        <div class=\"supplier-info\">
                            <div class=\"info-item\">
                                <i class=\"fas fa-id-card text-muted me-2\"></i>
                                <span><strong>Matricule :</strong> ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "matriculeFiscal", [], "any", false, false, false, 66), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"info-item\">
                                <i class=\"fas fa-phone text-muted me-2\"></i>
                                <span><strong>Téléphone :</strong> ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "telephone", [], "any", false, false, false, 70), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"info-item\">
                                <i class=\"fas fa-building text-muted me-2\"></i>
                                <span><strong>Franchise :</strong> ";
            // line 74
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["f"], "franchiseId", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["f"], "franchiseId", [], "any", false, false, false, 74), "nom", [], "any", false, false, false, 74), "html", null, true)) : ("Aucune"));
            yield "</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-white border-0 px-4 pb-4 pt-0 d-flex gap-2\">
                        <a href=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modifier_fournisseur", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            yield "\" class=\"btn btn-outline-warning btn-action flex-grow-1\">
                            <i class=\"fas fa-edit me-1\"></i> Modifier
                        </a>
                        <a href=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-outline-danger btn-action flex-grow-1\" 
                           onclick=\"return confirm('Supprimer ce fournisseur ?')\">
                            <i class=\"fas fa-trash-alt me-1\"></i> Supprimer
                        </a>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 90
        if (!$context['_iterated']) {
            // line 91
            yield "            <div class=\"col-12 text-center py-5\">
                <div class=\"empty-state\">
                    <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                    <p class=\"text-muted fs-5\">Aucun fournisseur trouvé pour le moment.</p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['f'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield "    </div>

    ";
        // line 101
        yield "    ";
        if (((isset($context["pagesCount"]) || array_key_exists("pagesCount", $context) ? $context["pagesCount"] : (function () { throw new RuntimeError('Variable "pagesCount" does not exist.', 101, $this->source); })()) > 1)) {
            // line 102
            yield "        <nav class=\"mt-5\">
            <ul class=\"pagination justify-content-center modern-pagination\">
                ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["pagesCount"]) || array_key_exists("pagesCount", $context) ? $context["pagesCount"] : (function () { throw new RuntimeError('Variable "pagesCount" does not exist.', 104, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 105
                yield "                    <li class=\"page-item ";
                if (($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 105, $this->source); })()))) {
                    yield "active";
                }
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficher_front_fournisseur", ["page" => $context["i"], "search" => ((array_key_exists("currentSearch", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentSearch"]) || array_key_exists("currentSearch", $context) ? $context["currentSearch"] : (function () { throw new RuntimeError('Variable "currentSearch" does not exist.', 106, $this->source); })()), "")) : ("")), "sort" => ((array_key_exists("currentSort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 106, $this->source); })()), "nom")) : ("nom")), "direction" => ((array_key_exists("currentDirection", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentDirection"]) || array_key_exists("currentDirection", $context) ? $context["currentDirection"] : (function () { throw new RuntimeError('Variable "currentDirection" does not exist.', 106, $this->source); })()), "asc")) : ("asc"))]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            yield "            </ul>
        </nav>
    ";
        }
        // line 112
        yield "
    ";
        // line 114
        yield "    <div class=\"mt-5 d-flex justify-content-center\">
        <div class=\"total-counter-front shadow-sm\">
            <span class=\"text\">Nombre de partenaires :</span>
            <span class=\"number\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 117, $this->source); })()), "html", null, true);
        yield "</span>
        </div>
    </div>
</div>

<style>
/* Variables & Global */
:root {
    --primary-gradient: linear-gradient(135deg, #0d6efd 0%, #0043a8 100%);
    --success-gradient: linear-gradient(135deg, #198754 0%, #20c997 100%);
}

.bg-soft-primary {
    background-color: rgba(13, 110, 253, 0.1);
    color: #0d6efd;
    font-size: 0.75rem;
    font-weight: 700;
}

/* Boutons Modernes */
.btn-add-modern {
    background: var(--success-gradient);
    color: white !important;
    border: none;
    border-radius: 50px;
    padding: 12px 28px;
    font-weight: 600;
    box-shadow: 0 4px 15px rgba(25, 135, 84, 0.2);
    transition: all 0.3s ease;
}
.btn-add-modern:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(25, 135, 84, 0.3);
    filter: brightness(1.1);
}

.btn-apply-modern {
    background: var(--primary-gradient);
    color: white;
    border: none;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.2s ease;
}
.btn-apply-modern:hover {
    filter: brightness(1.15);
    box-shadow: 0 4px 12px rgba(13, 110, 253, 0.2);
}

/* Barre de filtrage */
.modern-filter-bar {
    border-radius: 15px;
    overflow: hidden;
}

/* Cartes Fournisseurs */
.supplier-card-modern {
    border: none;
    border-radius: 16px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    position: relative;
    overflow: hidden;
    background: white;
}
.supplier-card-modern:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}
.card-header-accent {
    height: 5px;
    background: var(--primary-gradient);
}

.info-item {
    margin-bottom: 12px;
    font-size: 0.95rem;
}
.info-item i {
    width: 20px;
    text-align: center;
}

.btn-action {
    border-radius: 10px;
    font-size: 0.85rem;
    font-weight: 600;
    padding: 8px;
}

/* Pagination Moderne */
.modern-pagination .page-item .page-link {
    border: none;
    margin: 0 3px;
    border-radius: 8px;
    color: #495057;
    font-weight: 600;
}
.modern-pagination .page-item.active .page-link {
    background: var(--primary-gradient);
    box-shadow: 0 4px 10px rgba(13, 110, 253, 0.3);
}

/* Compteur Total */
.total-counter-front {
    display: inline-flex;
    align-items: center;
    background: white;
    padding: 12px 24px;
    border-radius: 50px;
    gap: 15px;
    border: 1px solid #e9ecef;
}
.total-counter-front .text {
    color: #6c757d;
    font-weight: 600;
    font-size: 0.9rem;
}
.total-counter-front .number {
    background: var(--primary-gradient);
    color: white;
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-weight: 800;
    font-size: 1.1rem;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "afficher_front_fournisseur/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  309 => 117,  304 => 114,  301 => 112,  296 => 109,  285 => 106,  278 => 105,  274 => 104,  270 => 102,  267 => 101,  263 => 98,  251 => 91,  249 => 90,  236 => 82,  230 => 79,  222 => 74,  215 => 70,  208 => 66,  199 => 60,  192 => 55,  187 => 54,  184 => 53,  167 => 40,  161 => 39,  150 => 33,  144 => 32,  138 => 31,  128 => 24,  119 => 18,  115 => 16,  107 => 10,  103 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front_base.html.twig' %}

{% block title %}Boussole - Liste des Fournisseurs{% endblock %}

{% block content %}
<div class=\"container mt-4 pb-5\">
    {# En-tête avec titre + bouton Ajouter #}
    <div class=\"d-flex justify-content-between align-items-center mb-5\">
        <h2 class=\"fw-bold text-dark mb-0\">Nos Partenaires Fournisseurs</h2>
        <a href=\"{{ path('app_ajouter_fournisseur') }}\" class=\"btn btn-add-modern\">
            <i class=\"fas fa-plus-circle me-2\"></i> Ajouter un fournisseur
        </a>
    </div>

    {# Barre de recherche et de tri #}
    <div class=\"card mb-5 border-0 shadow-sm modern-filter-bar\">
        <div class=\"card-body p-3\">
            <form method=\"get\" action=\"{{ path('app_afficher_front_fournisseur') }}\" class=\"row g-3 align-items-center\">
                <div class=\"col-12 col-md-5\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white border-end-0 py-2\">
                            <i class=\"fas fa-search text-primary\"></i>
                        </span>
                        <input type=\"text\" name=\"search\" class=\"form-control border-start-0 py-2\" placeholder=\"Rechercher un nom ou matricule...\" value=\"{{ currentSearch|default('') }}\">
                    </div>
                </div>
                <div class=\"col-6 col-md-3\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white py-2\"><i class=\"fas fa-sort\"></i></span>
                        <select name=\"sort\" class=\"form-select py-2\">
                            <option value=\"nom\" {% if currentSort|default('nom') == 'nom' %}selected{% endif %}>Trier par Nom</option>
                            <option value=\"matricule_fiscal\" {% if currentSort|default('nom') == 'matricule_fiscal' %}selected{% endif %}>Trier par Matricule</option>
                            <option value=\"telephone\" {% if currentSort|default('nom') == 'telephone' %}selected{% endif %}>Trier par Téléphone</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-6 col-md-2\">
                    <select name=\"direction\" class=\"form-select py-2\">
                        <option value=\"asc\" {% if currentDirection|default('asc') == 'asc' %}selected{% endif %}>Croissant</option>
                        <option value=\"desc\" {% if currentDirection|default('asc') == 'desc' %}selected{% endif %}>Décroissant</option>
                    </select>
                </div>
                <div class=\"col-12 col-md-2\">
                    <button type=\"submit\" class=\"btn btn-apply-modern w-100 py-2\">
                        Appliquer
                    </button>
                </div>
            </form>
        </div>
    </div>

    {# Grille des fournisseurs #}
    <div class=\"row g-4\">
        {% for f in fournisseurs %}
            <div class=\"col-md-4\">
                <div class=\"card h-100 supplier-card-modern\">
                    <div class=\"card-header-accent\"></div>
                    <div class=\"card-body p-4\">
                        <div class=\"d-flex justify-content-between align-items-start mb-3\">
                            <h5 class=\"card-title fw-bold text-dark mb-0\">{{ f.nom }}</h5>
                            <span class=\"badge bg-soft-primary px-3 py-2 rounded-pill\">Actif</span>
                        </div>
                        <div class=\"supplier-info\">
                            <div class=\"info-item\">
                                <i class=\"fas fa-id-card text-muted me-2\"></i>
                                <span><strong>Matricule :</strong> {{ f.matriculeFiscal }}</span>
                            </div>
                            <div class=\"info-item\">
                                <i class=\"fas fa-phone text-muted me-2\"></i>
                                <span><strong>Téléphone :</strong> {{ f.telephone }}</span>
                            </div>
                            <div class=\"info-item\">
                                <i class=\"fas fa-building text-muted me-2\"></i>
                                <span><strong>Franchise :</strong> {{ f.franchiseId ? f.franchiseId.nom : 'Aucune' }}</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-white border-0 px-4 pb-4 pt-0 d-flex gap-2\">
                        <a href=\"{{ path('app_modifier_fournisseur', {'id': f.id}) }}\" class=\"btn btn-outline-warning btn-action flex-grow-1\">
                            <i class=\"fas fa-edit me-1\"></i> Modifier
                        </a>
                        <a href=\"{{ path('app_fournisseur_delete', {'id': f.id}) }}\" 
                           class=\"btn btn-outline-danger btn-action flex-grow-1\" 
                           onclick=\"return confirm('Supprimer ce fournisseur ?')\">
                            <i class=\"fas fa-trash-alt me-1\"></i> Supprimer
                        </a>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center py-5\">
                <div class=\"empty-state\">
                    <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                    <p class=\"text-muted fs-5\">Aucun fournisseur trouvé pour le moment.</p>
                </div>
            </div>
        {% endfor %}
    </div>

    {# Pagination #}
    {% if pagesCount > 1 %}
        <nav class=\"mt-5\">
            <ul class=\"pagination justify-content-center modern-pagination\">
                {% for i in 1..pagesCount %}
                    <li class=\"page-item {% if i == currentPage %}active{% endif %}\">
                        <a class=\"page-link\" href=\"{{ path('app_afficher_front_fournisseur', {page: i, search: currentSearch|default(''), sort: currentSort|default('nom'), direction: currentDirection|default('asc')}) }}\">{{ i }}</a>
                    </li>
                {% endfor %}
            </ul>
        </nav>
    {% endif %}

    {# Compteur Total #}
    <div class=\"mt-5 d-flex justify-content-center\">
        <div class=\"total-counter-front shadow-sm\">
            <span class=\"text\">Nombre de partenaires :</span>
            <span class=\"number\">{{ total }}</span>
        </div>
    </div>
</div>

<style>
/* Variables & Global */
:root {
    --primary-gradient: linear-gradient(135deg, #0d6efd 0%, #0043a8 100%);
    --success-gradient: linear-gradient(135deg, #198754 0%, #20c997 100%);
}

.bg-soft-primary {
    background-color: rgba(13, 110, 253, 0.1);
    color: #0d6efd;
    font-size: 0.75rem;
    font-weight: 700;
}

/* Boutons Modernes */
.btn-add-modern {
    background: var(--success-gradient);
    color: white !important;
    border: none;
    border-radius: 50px;
    padding: 12px 28px;
    font-weight: 600;
    box-shadow: 0 4px 15px rgba(25, 135, 84, 0.2);
    transition: all 0.3s ease;
}
.btn-add-modern:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(25, 135, 84, 0.3);
    filter: brightness(1.1);
}

.btn-apply-modern {
    background: var(--primary-gradient);
    color: white;
    border: none;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.2s ease;
}
.btn-apply-modern:hover {
    filter: brightness(1.15);
    box-shadow: 0 4px 12px rgba(13, 110, 253, 0.2);
}

/* Barre de filtrage */
.modern-filter-bar {
    border-radius: 15px;
    overflow: hidden;
}

/* Cartes Fournisseurs */
.supplier-card-modern {
    border: none;
    border-radius: 16px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    position: relative;
    overflow: hidden;
    background: white;
}
.supplier-card-modern:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}
.card-header-accent {
    height: 5px;
    background: var(--primary-gradient);
}

.info-item {
    margin-bottom: 12px;
    font-size: 0.95rem;
}
.info-item i {
    width: 20px;
    text-align: center;
}

.btn-action {
    border-radius: 10px;
    font-size: 0.85rem;
    font-weight: 600;
    padding: 8px;
}

/* Pagination Moderne */
.modern-pagination .page-item .page-link {
    border: none;
    margin: 0 3px;
    border-radius: 8px;
    color: #495057;
    font-weight: 600;
}
.modern-pagination .page-item.active .page-link {
    background: var(--primary-gradient);
    box-shadow: 0 4px 10px rgba(13, 110, 253, 0.3);
}

/* Compteur Total */
.total-counter-front {
    display: inline-flex;
    align-items: center;
    background: white;
    padding: 12px 24px;
    border-radius: 50px;
    gap: 15px;
    border: 1px solid #e9ecef;
}
.total-counter-front .text {
    color: #6c757d;
    font-weight: 600;
    font-size: 0.9rem;
}
.total-counter-front .number {
    background: var(--primary-gradient);
    color: white;
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-weight: 800;
    font-size: 1.1rem;
}
</style>
{% endblock %}
", "afficher_front_fournisseur/index.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\afficher_front_fournisseur\\index.html.twig");
    }
}
