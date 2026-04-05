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

/* franchise/historique.html.twig */
class __TwigTemplate_8776755b1a090655ad6239ce2db8a50e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "franchise/historique.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "franchise/historique.html.twig"));

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

        yield "Historique des transactions";
        
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
        yield "<div class=\"row mb-4\">
    <div class=\"col-12 d-flex justify-content-between align-items-center\">    
        <div>
            <h1 class=\"h3 mb-0 text-white\">Historique des transactions</h1>   
            <p class=\"text-muted\">Historique des transactions</p>   
        </div>
        <div>
            <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_index");
        yield "\" class=\"btn btn-outline-info\">
                <i class=\"bi bi-arrow-left me-2\"></i>Retour au Dashboard      
            </a>
        </div>
    </div>
</div>

<!-- Main Card -->
<div class=\"card bg-dark border border-secondary shadow mb-4\">
    <div class=\"card-body p-4\">
        <!-- Filtres -->
        <form id=\"filterForm\" method=\"get\" action=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_historique");
        yield "\"> 
            <div class=\"row align-items-end g-3 mb-4\">
                <div class=\"col-md-3\">
                    <label class=\"text-muted small mb-1\">Période</label>   
                    <div class=\"dropdown\">
                        <button class=\"form-select bg-dark text-light border-secondary text-start d-flex justify-content-between align-items-center rounded-pill w-100\" type=\"button\" id=\"periodeDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" style=\"background-color: #12141d !important;\">
                            <span><i class=\"bi bi-calendar3 text-primary me-2\"></i> <span id=\"currentPeriodLabel\">Période : Ce Mois</span></span>        
                            <i class=\"bi bi-chevron-down ms-1\"></i>
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-dark shadow border border-secondary p-3 mt-2\" aria-labelledby=\"periodeDropdown\" style=\"min-width: 320px; background-color: #0b0d14 !important; border-radius: 12px; z-index: 1050;\">
                            <li><a class=\"dropdown-item py-2 px-3 rounded mb-1 period-option ";
        // line 34
        if ((((array_key_exists("currentPeriode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentPeriode"]) || array_key_exists("currentPeriode", $context) ? $context["currentPeriode"] : (function () { throw new RuntimeError('Variable "currentPeriode" does not exist.', 34, $this->source); })()), "this_month")) : ("this_month")) == "this_month")) {
            yield "active";
        }
        yield "\" href=\"#\" data-value=\"this_month\">Ce Mois</a></li>
                            <li><a class=\"dropdown-item py-2 px-3 rounded mb-1 period-option ";
        // line 35
        if ((((array_key_exists("currentPeriode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentPeriode"]) || array_key_exists("currentPeriode", $context) ? $context["currentPeriode"] : (function () { throw new RuntimeError('Variable "currentPeriode" does not exist.', 35, $this->source); })()), "this_month")) : ("this_month")) == "last_month")) {
            yield "active";
        }
        yield "\" href=\"#\" data-value=\"last_month\">Mois Dernier</a></li>       
                            <li><a class=\"dropdown-item py-2 px-3 rounded mb-1 period-option ";
        // line 36
        if ((((array_key_exists("currentPeriode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentPeriode"]) || array_key_exists("currentPeriode", $context) ? $context["currentPeriode"] : (function () { throw new RuntimeError('Variable "currentPeriode" does not exist.', 36, $this->source); })()), "this_month")) : ("this_month")) == "this_year")) {
            yield "active";
        }
        yield "\" href=\"#\" data-value=\"this_year\">Cette Année</a></li>       
                            <li><a class=\"dropdown-item py-2 px-3 rounded mb-2 period-option ";
        // line 37
        if ((((array_key_exists("currentPeriode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentPeriode"]) || array_key_exists("currentPeriode", $context) ? $context["currentPeriode"] : (function () { throw new RuntimeError('Variable "currentPeriode" does not exist.', 37, $this->source); })()), "this_month")) : ("this_month")) == "all")) {
            yield "active";
        }
        yield "\" href=\"#\" data-value=\"all\">Tout</a></li>
                            <li><hr class=\"dropdown-divider border-secondary mb-3\"></li>
                            <li class=\"px-2\">
                                <span class=\"text-muted small fw-bold d-block mb-2\">Plage personnalisée</span>
                                <div class=\"row gx-2\">
                                    <div class=\"col-5\">
                                        <input type=\"date\" class=\"form-control form-control-sm bg-dark text-light border-secondary rounded custom-date-input\" name=\"date_start\" id=\"customDateStart\" value=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("currentStart", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentStart"]) || array_key_exists("currentStart", $context) ? $context["currentStart"] : (function () { throw new RuntimeError('Variable "currentStart" does not exist.', 43, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" style=\"background-color: #12141d !important; color-scheme: dark;\">
                                    </div>
                                    <div class=\"col-5\">
                                        <input type=\"date\" class=\"form-control form-control-sm bg-dark text-light border-secondary rounded custom-date-input\" name=\"date_end\" id=\"customDateEnd\" value=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("currentEnd", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentEnd"]) || array_key_exists("currentEnd", $context) ? $context["currentEnd"] : (function () { throw new RuntimeError('Variable "currentEnd" does not exist.', 46, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" style=\"background-color: #12141d !important; color-scheme: dark;\">
                                    </div>
                                    <div class=\"col-2\">
                                        <button type=\"button\" class=\"btn btn-info w-100 rounded text-center text-dark fw-bold px-0 custom-date-btn\" style=\"background-color: #0dcaf0; border-color: #0dcaf0;\">OK</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <input type=\"hidden\" name=\"periode\" id=\"periodeValue\" value=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("currentPeriode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentPeriode"]) || array_key_exists("currentPeriode", $context) ? $context["currentPeriode"] : (function () { throw new RuntimeError('Variable "currentPeriode" does not exist.', 55, $this->source); })()), "this_month")) : ("this_month")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"text-muted small mb-1\">Type</label>
                    <select name=\"type\" class=\"form-select bg-dark text-light border-secondary rounded-pill\" style=\"background-color: #12141d !important;\" onchange=\"this.form.submit()\">
                        <option value=\"TOUT\" ";
        // line 60
        if ((array_key_exists("currentType", $context) && ((isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 60, $this->source); })()) == "TOUT"))) {
            yield "selected";
        }
        yield ">TOUT</option>
                        <option value=\"RECETTE\" ";
        // line 61
        if ((array_key_exists("currentType", $context) && ((isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 61, $this->source); })()) == "RECETTE"))) {
            yield "selected";
        }
        yield ">RECETTE</option>
                        <option value=\"DEPENSE\" ";
        // line 62
        if ((array_key_exists("currentType", $context) && ((isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 62, $this->source); })()) == "DEPENSE"))) {
            yield "selected";
        }
        yield ">DÉPENSE</option>        
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-transparent border-0 text-muted ps-0\"><i class=\"bi bi-search\"></i></span>
                        <input type=\"text\" name=\"search\" value=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("currentSearch", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentSearch"]) || array_key_exists("currentSearch", $context) ? $context["currentSearch"] : (function () { throw new RuntimeError('Variable "currentSearch" does not exist.', 68, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" class=\"form-control bg-dark text-light border-secondary rounded-pill\" placeholder=\"Rechercher...\" style=\"background-color: #12141d !important;\">
                    </div>
                </div>
                <div class=\"col-md-3 d-flex justify-content-end align-items-center\">
                    <a href=\"#\" id=\"resetFiltersBtn\" class=\"text-muted me-3 text-decoration-none small\">Réinitialiser</a>
                    <button type=\"submit\" class=\"d-none\"></button>
                    <a href=\"#\" class=\"btn btn-primary rounded-pill fw-bold px-4\" style=\"background-color: #0d6efd; color: white; border: none;\">Exporter...</a>
                </div>
            </div>
        </form>

        <!-- Tableau -->
        <div class=\"table-responsive\" style=\"background-color: #12141d !important; border-radius: 12px; padding: 1rem;\">
            <table class=\"table table-dark table-hover table-borderless align-middle mb-0\" style=\"background-color: #12141d !important;\">
                <thead class=\"border-bottom border-secondary\">
                    ";
        // line 83
        $context["qs"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "request", [], "any", false, false, false, 83), "query", [], "any", false, false, false, 83), "all", [], "any", false, false, false, 83);
        // line 84
        yield "                    ";
        $context["dirDate"] = (((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 84, $this->source); })()) == "date") && ((isset($context["currentDirection"]) || array_key_exists("currentDirection", $context) ? $context["currentDirection"] : (function () { throw new RuntimeError('Variable "currentDirection" does not exist.', 84, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC"));
        // line 85
        yield "                    ";
        $context["dirType"] = (((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 85, $this->source); })()) == "type") && ((isset($context["currentDirection"]) || array_key_exists("currentDirection", $context) ? $context["currentDirection"] : (function () { throw new RuntimeError('Variable "currentDirection" does not exist.', 85, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC"));
        // line 86
        yield "                    ";
        $context["dirDesc"] = (((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 86, $this->source); })()) == "description") && ((isset($context["currentDirection"]) || array_key_exists("currentDirection", $context) ? $context["currentDirection"] : (function () { throw new RuntimeError('Variable "currentDirection" does not exist.', 86, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC"));
        // line 87
        yield "                    ";
        $context["dirMontant"] = (((((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 87, $this->source); })()) == "montant") && ((isset($context["currentDirection"]) || array_key_exists("currentDirection", $context) ? $context["currentDirection"] : (function () { throw new RuntimeError('Variable "currentDirection" does not exist.', 87, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC"));
        // line 88
        yield "                    <tr>
                        <th>
                            <a href=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "request", [], "any", false, false, false, 90), "attributes", [], "any", false, false, false, 90), "get", ["_route"], "method", false, false, false, 90), Twig\Extension\CoreExtension::merge((isset($context["qs"]) || array_key_exists("qs", $context) ? $context["qs"] : (function () { throw new RuntimeError('Variable "qs" does not exist.', 90, $this->source); })()), ["sort" => "date", "direction" => (isset($context["dirDate"]) || array_key_exists("dirDate", $context) ? $context["dirDate"] : (function () { throw new RuntimeError('Variable "dirDate" does not exist.', 90, $this->source); })())])), "html", null, true);
        yield "\" class=\"text-muted text-decoration-none\">
                                DATE ";
        // line 91
        if (((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 91, $this->source); })()) == "date")) {
            yield "<i class=\"bi bi-caret-";
            yield ((((isset($context["currentDirection"]) || array_key_exists("currentDirection", $context) ? $context["currentDirection"] : (function () { throw new RuntimeError('Variable "currentDirection" does not exist.', 91, $this->source); })()) == "ASC")) ? ("up") : ("down"));
            yield "-fill text-info\"></i>";
        }
        // line 92
        yield "                            </a>
                        </th>
                        <th>
                            <a href=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95), "attributes", [], "any", false, false, false, 95), "get", ["_route"], "method", false, false, false, 95), Twig\Extension\CoreExtension::merge((isset($context["qs"]) || array_key_exists("qs", $context) ? $context["qs"] : (function () { throw new RuntimeError('Variable "qs" does not exist.', 95, $this->source); })()), ["sort" => "type", "direction" => (isset($context["dirType"]) || array_key_exists("dirType", $context) ? $context["dirType"] : (function () { throw new RuntimeError('Variable "dirType" does not exist.', 95, $this->source); })())])), "html", null, true);
        yield "\" class=\"text-muted text-decoration-none\">
                                TYPE ";
        // line 96
        if (((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 96, $this->source); })()) == "type")) {
            yield "<i class=\"bi bi-caret-";
            yield ((((isset($context["currentDirection"]) || array_key_exists("currentDirection", $context) ? $context["currentDirection"] : (function () { throw new RuntimeError('Variable "currentDirection" does not exist.', 96, $this->source); })()) == "ASC")) ? ("up") : ("down"));
            yield "-fill text-info\"></i>";
        }
        // line 97
        yield "                            </a>
                        </th>
                        <th>
                            <a href=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "request", [], "any", false, false, false, 100), "attributes", [], "any", false, false, false, 100), "get", ["_route"], "method", false, false, false, 100), Twig\Extension\CoreExtension::merge((isset($context["qs"]) || array_key_exists("qs", $context) ? $context["qs"] : (function () { throw new RuntimeError('Variable "qs" does not exist.', 100, $this->source); })()), ["sort" => "description", "direction" => (isset($context["dirDesc"]) || array_key_exists("dirDesc", $context) ? $context["dirDesc"] : (function () { throw new RuntimeError('Variable "dirDesc" does not exist.', 100, $this->source); })())])), "html", null, true);
        yield "\" class=\"text-muted text-decoration-none\">
                                DESCRIPTION ";
        // line 101
        if (((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 101, $this->source); })()) == "description")) {
            yield "<i class=\"bi bi-caret-";
            yield ((((isset($context["currentDirection"]) || array_key_exists("currentDirection", $context) ? $context["currentDirection"] : (function () { throw new RuntimeError('Variable "currentDirection" does not exist.', 101, $this->source); })()) == "ASC")) ? ("up") : ("down"));
            yield "-fill text-info\"></i>";
        }
        // line 102
        yield "                            </a>
                        </th>
                        <th>
                            <a href=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "request", [], "any", false, false, false, 105), "attributes", [], "any", false, false, false, 105), "get", ["_route"], "method", false, false, false, 105), Twig\Extension\CoreExtension::merge((isset($context["qs"]) || array_key_exists("qs", $context) ? $context["qs"] : (function () { throw new RuntimeError('Variable "qs" does not exist.', 105, $this->source); })()), ["sort" => "montant", "direction" => (isset($context["dirMontant"]) || array_key_exists("dirMontant", $context) ? $context["dirMontant"] : (function () { throw new RuntimeError('Variable "dirMontant" does not exist.', 105, $this->source); })())])), "html", null, true);
        yield "\" class=\"text-muted text-decoration-none\">
                                MONTANT (TND) ";
        // line 106
        if (((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 106, $this->source); })()) == "montant")) {
            yield "<i class=\"bi bi-caret-";
            yield ((((isset($context["currentDirection"]) || array_key_exists("currentDirection", $context) ? $context["currentDirection"] : (function () { throw new RuntimeError('Variable "currentDirection" does not exist.', 106, $this->source); })()) == "ASC")) ? ("up") : ("down"));
            yield "-fill text-info\"></i>";
        }
        // line 107
        yield "                            </a>
                        </th>
                        <th class=\"text-muted\" style=\"width: 50px;\"></th>     
                    </tr>
                </thead>
                <tbody id=\"transactionsTableBody\">
                ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 113, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tx"]) {
            // line 114
            yield "                    <tr data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tx"], "id", [], "any", false, false, false, 114), "html", null, true);
            yield "\" class=\"tx-row\">
                        <td class=\"editable-cell\" data-field=\"date\" data-value=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tx"], "date", [], "any", false, false, false, 115), "Y-m-d"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tx"], "date", [], "any", false, false, false, 115), "Y-m-d"), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 117
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tx"], "type", [], "any", false, false, false, 117) == "RECETTE")) {
                // line 118
                yield "                                <span class=\"text-success\"><i class=\"bi bi-arrow-up-right\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tx"], "type", [], "any", false, false, false, 118), "html", null, true);
                yield "</span>
                            ";
            } else {
                // line 120
                yield "                                <span class=\"text-danger\"><i class=\"bi bi-arrow-down-right\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tx"], "type", [], "any", false, false, false, 120), "html", null, true);
                yield "</span>
                            ";
            }
            // line 122
            yield "                        </td>
                        <td class=\"editable-cell\" data-field=\"description\" data-value=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tx"], "description", [], "any", false, false, false, 123), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tx"], "description", [], "any", false, false, false, 123), "html", null, true);
            yield "</td>
                        <td class=\"editable-cell\" data-field=\"montant\" data-value=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tx"], "montant", [], "any", false, false, false, 124), "html", null, true);
            yield "\" style=\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tx"], "type", [], "any", false, false, false, 124) == "RECETTE")) {
                yield "color: #198754";
            } else {
                yield "color: #dc3545";
            }
            yield "; font-weight: bold;\">
                            ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["tx"], "montant", [], "any", false, false, false, 125), 2, ",", " "), "html", null, true);
            yield " TND   
                        </td>
                        <td class=\"text-end\">
                            <span class=\"delete-icon\" title=\"Supprimer\" data-id=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tx"], "id", [], "any", false, false, false, 128), "html", null, true);
            yield "\" style=\"cursor:pointer; opacity:0; transition: opacity 0.2s;\"> 
                                <i class=\"bi bi-trash3 text-danger\"></i>      
                            </span>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 133
        if (!$context['_iterated']) {
            // line 134
            yield "                    <tr id=\"emptyDefaultRow\">
                        <td colspan=\"5\" class=\"text-center text-muted py-4\">Aucune transaction trouvée</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tx'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        yield "                    <tr id=\"emptySearchRow\" style=\"display: none;\">
                        <td colspan=\"5\" class=\"text-center text-muted py-4\">Aucun résultat pour cette recherche.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Les 4 cartes (KPI) du bas -->
<div class=\"row g-4 mb-5\">
    <div class=\"col-md-3\">
        <div class=\"card card-body bg-dark border border-secondary p-3 text-center h-100 shadow\" style=\"background-color: #12141d !important; border-radius: 12px;\">
            <h6 class=\"text-muted mb-2\">Nombre Transactions</h6>
            <h3 id=\"kpi-nb\" class=\"text-info mb-0 fw-bold\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nombreTransactions"]) || array_key_exists("nombreTransactions", $context) ? $context["nombreTransactions"] : (function () { throw new RuntimeError('Variable "nombreTransactions" does not exist.', 152, $this->source); })()), "html", null, true);
        yield "</h3>  
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card card-body bg-dark border border-secondary p-3 text-center h-100 shadow\" style=\"background-color: #12141d !important; border-radius: 12px;\">
            <h6 class=\"text-muted mb-2\">Total Recettes</h6>
            <h3 id=\"kpi-recettes\" class=\"text-success mb-0 fw-bold\">";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalRecettes"]) || array_key_exists("totalRecettes", $context) ? $context["totalRecettes"] : (function () { throw new RuntimeError('Variable "totalRecettes" does not exist.', 158, $this->source); })()), 2, ",", " "), "html", null, true);
        yield " TND</h3>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card card-body bg-dark border border-secondary p-3 text-center h-100 shadow\" style=\"background-color: #12141d !important; border-radius: 12px;\">
            <h6 class=\"text-muted mb-2\">Total Charges</h6>
            <h3 id=\"kpi-charges\" class=\"text-danger mb-0 fw-bold\">";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalCharges"]) || array_key_exists("totalCharges", $context) ? $context["totalCharges"] : (function () { throw new RuntimeError('Variable "totalCharges" does not exist.', 164, $this->source); })()), 2, ",", " "), "html", null, true);
        yield " TND</h3>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card card-body bg-dark border border-secondary p-3 text-center h-100 shadow\" style=\"background-color: #12141d !important; border-radius: 12px;\">
            <h6 class=\"text-muted mb-2\">Solde Filtré</h6>
            <h3 id=\"soldeDisplay\" class=\"";
        // line 170
        if (((isset($context["soldeFiltre"]) || array_key_exists("soldeFiltre", $context) ? $context["soldeFiltre"] : (function () { throw new RuntimeError('Variable "soldeFiltre" does not exist.', 170, $this->source); })()) < 0)) {
            yield "text-danger";
        } else {
            yield "text-info";
        }
        yield " mb-0 fw-bold\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["soldeFiltre"]) || array_key_exists("soldeFiltre", $context) ? $context["soldeFiltre"] : (function () { throw new RuntimeError('Variable "soldeFiltre" does not exist.', 170, $this->source); })()), 2, ",", " "), "html", null, true);
        yield " TND</h3>
        </div>
    </div>
</div>

";
        // line 176
        yield "<div class=\"position-fixed bottom-0 end-0 p-3\" style=\"z-index: 1080\">
    <div id=\"actionToast\" class=\"toast align-items-center border-0\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
        <div class=\"d-flex\">
            <div class=\"toast-body\" id=\"toastMessage\"></div>
            <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
        </div>
    </div>
</div>

";
        // line 186
        yield "<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content bg-dark border border-secondary text-white\">
            <div class=\"modal-body text-center py-4\">
                <i class=\"bi bi-exclamation-triangle-fill text-warning fs-1 mb-3 d-block\"></i>
                <h6 class=\"mb-2\">Supprimer cette transaction ?</h6>
                <p class=\"text-muted small mb-0\">Cette action est irréversible.</p>
            </div>
            <div class=\"modal-footer border-secondary justify-content-center py-2\">
                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-sm btn-danger\" id=\"confirmDeleteBtn\">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<style>
    /* Hover : afficher l'icône de suppression */
    .tx-row:hover .delete-icon { opacity: 1 !important; }

    /* Cellule éditable */
    .editable-cell {
        cursor: pointer;
        position: relative;
        transition: background-color 0.2s ease;
        border-radius: 4px;
    }
    .editable-cell:hover { background-color: rgba(0, 229, 255, 0.08); }       
    .editable-cell:hover::after {
        content: '\\F4CB';
        font-family: 'bootstrap-icons';
        position: absolute;
        right: 6px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 0.7rem;
        color: #00e5ff;
        opacity: 0.7;
    }

    /* Input inline */
    .editable-cell input {
        background: transparent;
        border: 1px solid #00e5ff;
        border-radius: 4px;
        color: #fff;
        padding: 2px 6px;
        width: 100%;
        outline: none;
        font-size: inherit;
    }

    .editable-cell .inline-error {
        position: absolute;
        bottom: -18px;
        left: 0;
        font-size: 0.7rem;
        color: #dc3545;
        white-space: nowrap;
        animation: fadeInError 0.3s ease;
    }
    @keyframes fadeInError {
        from { opacity: 0; transform: translateY(-4px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .tx-row.removing { animation: slideOutLeft 0.4s ease forwards; }
    @keyframes slideOutLeft {
        to { opacity: 0; transform: translateX(-30px); }
    }
    .editable-cell.success-flash { animation: successPulse 0.5s ease; }       
    @keyframes successPulse {
        0% { background-color: rgba(25, 135, 84, 0.3); }
        100% { background-color: transparent; }
    }
    #actionToast.toast-success { background-color: #198754; color: #fff; }    
    #actionToast.toast-error { background-color: #dc3545; color: #fff; }      
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ===== GESTION FILTRE PERIODE =====
    const periodeValue = document.getElementById('periodeValue');
    const label = document.getElementById('currentPeriodLabel');
    const options = document.querySelectorAll('.period-option');
    const form = document.getElementById('filterForm');

    if(periodeValue && label && options && form) {
        const labelsMap = {
            'this_month': 'Ce Mois',
            'last_month': 'Mois Dernier',
            'this_year': 'Cette Année',
            'all': 'Tout',
            'custom': 'Personnalisée'
        };

        const initialVal = periodeValue.value || 'this_month';
        if(initialVal === 'custom') {
            const start = document.getElementById('customDateStart').value;     
            const end = document.getElementById('customDateEnd').value;
            if(start || end) {
                label.innerText = 'Du ' + (start || '...') + ' au ' + (end || '...');
            } else {
                 label.innerText = 'Période : ' + labelsMap[initialVal];       
            }
        } else {
            label.innerText = 'Période : ' + (labelsMap[initialVal] || 'Ce Mois');
        }

        options.forEach(opt => {
            opt.addEventListener('click', function(e) {
                e.preventDefault();
                const val = this.getAttribute('data-value');
                periodeValue.value = val;

                document.getElementById('customDateStart').value = '';
                document.getElementById('customDateEnd').value = '';

                form.submit();
            });
        });

        const customBtn = document.querySelector('.custom-date-btn');
        if(customBtn) {
            customBtn.addEventListener('click', function(e) {
                e.preventDefault();
                periodeValue.value = 'custom';
                form.submit();
            });
        }

        document.querySelectorAll('.custom-date-input, .dropdown-menu').forEach(el => {
             el.addEventListener('click', function(e) {
                 e.stopPropagation();
             });
        });
        
        // BOUTON REINITIALISER
        const resetBtn = document.getElementById('resetFiltersBtn');
        if (resetBtn) {
            resetBtn.addEventListener('click', function(e) {
                e.preventDefault();
                // Afficher TOUTES les transactions par défaut lors de la réinitialisation
                periodeValue.value = 'all';
                // Vider les autres inputs du formulaire form
                const selects = form.querySelectorAll('select');
                selects.forEach(sel => { sel.value = 'TOUT'; });
                const texts = form.querySelectorAll('input[type=\"text\"]');
                texts.forEach(txt => { txt.value = ''; });
                const dates = form.querySelectorAll('input[type=\"date\"]');
                dates.forEach(d => { d.value = ''; });
                
                // Soumettre le formulaire vide/réinitialisé
                form.submit();
            });
        }
    }

    // ===== GESTION RECHERCHE INSTANTANÉE FRONTEND =====
    const searchHistoryInput = document.querySelector('input[name=\"search\"]');
    if (searchHistoryInput) {
        searchHistoryInput.addEventListener('input', function() {
            const filter = this.value.toLowerCase().trim();
            const rows = document.querySelectorAll('.tx-row');
            
            let nb = 0;
            let recettes = 0;
            let charges = 0;

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(filter)) {
                    row.style.setProperty('display', 'table-row', 'important');
                    nb++;
                    
                    const montantStr = row.querySelector('[data-field=\"montant\"]').dataset.value;
                    const typeIsRecette = row.querySelector('span.text-success') !== null;
                    const montant = parseFloat(montantStr);
                    
                    if (typeIsRecette) {
                        recettes += montant;
                    } else {
                        charges += montant;
                    }
                } else {
                    row.style.setProperty('display', 'none', 'important');
                }
            });

            // Mise à jour des KPIs animée (instantanée)
            const solde = recettes - charges;
            
            document.getElementById('kpi-nb').textContent = nb;
            document.getElementById('kpi-recettes').textContent = formatNumber(recettes);
            document.getElementById('kpi-charges').textContent = formatNumber(charges);
            
            updateSolde(solde);
            
            // Masquer la ligne \"Aucune transaction\" par défaut si nb > 0
            const emptySearchRow = document.getElementById('emptySearchRow');
            const emptyDefaultRow = document.getElementById('emptyDefaultRow');
            if(emptyDefaultRow) emptyDefaultRow.style.display = 'none';

            if(emptySearchRow) {
                 if(nb === 0) emptySearchRow.style.display = 'table-row';
                 else emptySearchRow.style.display = 'none';
            }
        });
        
        // Empêcher la soumission du formulaire par touche entrée si on est sur la recherche (car elle est dynamique mtn)
        searchHistoryInput.addEventListener('keydown', function(e) {
            if(e.key === 'Enter') {
                e.preventDefault();
            }
        });
    }

    // ===== GESTION TOAST & UPDATE SOLDE =====
    const toast = document.getElementById('actionToast');
    const toastMessage = document.getElementById('toastMessage');
    const bsToast = new bootstrap.Toast(toast, { delay: 3000 });

    function showToast(message, type) {
        toast.className = 'toast align-items-center border-0 toast-' + type;  
        toastMessage.textContent = message;
        bsToast.show();
    }

    function formatNumber(num) {
        return parseFloat(num).toLocaleString('fr-FR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + ' TND';
    }

    function updateSolde(solde) {
        const el = document.getElementById('soldeDisplay');
        if(el) {
            el.textContent = formatNumber(solde);
            el.className = 'mb-0 fw-bold ' + (solde < 0 ? 'text-danger' : 'text-info');
        }
    }

    // ===== ÉDITION INLINE (double-clic) =====
    document.querySelectorAll('.editable-cell').forEach(function(cell) {      
        cell.addEventListener('dblclick', function() {
            if (cell.querySelector('input')) return;

            const field = cell.dataset.field;
            const oldValue = cell.dataset.value;
            const row = cell.closest('tr');
            const txId = row.dataset.id;
            const originalHTML = cell.innerHTML;

            const oldError = cell.querySelector('.inline-error');
            if (oldError) oldError.remove();

            const input = document.createElement('input');
            input.type = field === 'date' ? 'date' : 'text';
            input.value = oldValue;
            input.setAttribute('data-original', oldValue);

            cell.innerHTML = '';
            cell.appendChild(input);
            input.focus();
            if(input.type === 'text') {
                input.select();
            }

            function saveEdit() {
                const newValue = input.value.trim();

                if (newValue === oldValue) {
                    cancelEdit();
                    return;
                }

                if (field === 'description') {
                    if (newValue === '') { cancelEdit(); showToast('La description est obligatoire.', 'error'); return; }
                    if (newValue.length < 3) { cancelEdit(); showToast('Minimum 3 caractères.', 'error'); return; }
                }
                if (field === 'montant') {
                    const num = parseFloat(newValue.replace(',', '.'));       
                    if (isNaN(num) || num <= 0) { cancelEdit(); showToast('Le montant doit être > 0.', 'error'); return; }
                }

                const payload = {};
                payload[field] = field === 'montant' ? parseFloat(newValue.replace(',', '.')) : newValue;

                fetch('/transaction/' + txId + '/edit', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                    body: JSON.stringify(payload)
                }).then(r => r.json()).then(data => {
                    if (data.success) {
                        cell.dataset.value = field === 'montant' ? data.transaction.montant : newValue;
                        if (field === 'montant') cell.textContent = formatNumber(data.transaction.montant);
                        else if (field === 'date') cell.textContent = data.transaction.date;
                        else cell.textContent = newValue;

                        cell.classList.add('success-flash');
                        setTimeout(() => cell.classList.remove('success-flash'), 500);

                        updateSolde(data.solde);
                        showToast('Modifié avec succès !', 'success');  

                        setTimeout(() => location.reload(), 800);
                    } else {
                        cancelEdit();
                        showToast(data.message || 'Erreur', 'error');
                    }
                }).catch(err => {
                    cancelEdit();
                    showToast('Erreur réseau.', 'error');
                });
            }

            function cancelEdit() { cell.innerHTML = originalHTML; }

            input.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') { e.preventDefault(); saveEdit(); }    
                if (e.key === 'Escape') { cancelEdit(); }
            });

            input.addEventListener('blur', function() {
                setTimeout(function() { if (cell.querySelector('input')) saveEdit(); }, 150);
            });
        });
    });

    // ===== SUPPRESSION =====
    let deleteId = null;
    const deleteModalEl = document.getElementById('deleteModal');
    if(deleteModalEl) {
        const deleteModal = new bootstrap.Modal(deleteModalEl);

        document.querySelectorAll('.delete-icon').forEach(function(icon) {    
            icon.addEventListener('click', function() {
                deleteId = this.dataset.id;
                deleteModal.show();
            });
        });

        document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
            if (!deleteId) return;

            fetch('/transaction/' + deleteId, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' }
            }).then(r => {
                // If it's a GET redirection instead of JSON, we handle it as success
                if(r.redirected || !r.headers.get('content-type')?.includes('application/json')) {
                    return { success: true, solde: 0 };
                }
                return r.json();
            }).then(data => {
                if (data.success || data.solde !== undefined) {
                    const row = document.querySelector('tr[data-id=\"' + deleteId + '\"]');
                    if (row) {
                        row.classList.add('removing');
                        setTimeout(() => row.remove(), 400);
                    }
                    showToast('Transaction supprimée !', 'success');       
                    setTimeout(() => location.reload(), 800);
                } else {
                    showToast('Erreur lors de la suppression.', 'error');     
                }
                deleteModal.hide();
                deleteId = null;
            }).catch(() => {
                showToast('Action effectuée.', 'success');
                setTimeout(() => location.reload(), 800);
                deleteModal.hide();
            });
        });
    }
});
</script>
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
        return "franchise/historique.html.twig";
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
        return array (  458 => 186,  447 => 176,  433 => 170,  424 => 164,  415 => 158,  406 => 152,  390 => 138,  381 => 134,  379 => 133,  369 => 128,  363 => 125,  353 => 124,  347 => 123,  344 => 122,  338 => 120,  332 => 118,  330 => 117,  323 => 115,  318 => 114,  313 => 113,  305 => 107,  299 => 106,  295 => 105,  290 => 102,  284 => 101,  280 => 100,  275 => 97,  269 => 96,  265 => 95,  260 => 92,  254 => 91,  250 => 90,  246 => 88,  243 => 87,  240 => 86,  237 => 85,  234 => 84,  232 => 83,  214 => 68,  203 => 62,  197 => 61,  191 => 60,  183 => 55,  171 => 46,  165 => 43,  154 => 37,  148 => 36,  142 => 35,  136 => 34,  123 => 24,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front_base.html.twig' %}

{% block title %}Historique des transactions{% endblock %}

{% block content %}
<div class=\"row mb-4\">
    <div class=\"col-12 d-flex justify-content-between align-items-center\">    
        <div>
            <h1 class=\"h3 mb-0 text-white\">Historique des transactions</h1>   
            <p class=\"text-muted\">Historique des transactions</p>   
        </div>
        <div>
            <a href=\"{{ path('app_transaction_index') }}\" class=\"btn btn-outline-info\">
                <i class=\"bi bi-arrow-left me-2\"></i>Retour au Dashboard      
            </a>
        </div>
    </div>
</div>

<!-- Main Card -->
<div class=\"card bg-dark border border-secondary shadow mb-4\">
    <div class=\"card-body p-4\">
        <!-- Filtres -->
        <form id=\"filterForm\" method=\"get\" action=\"{{ path('app_transaction_historique') }}\"> 
            <div class=\"row align-items-end g-3 mb-4\">
                <div class=\"col-md-3\">
                    <label class=\"text-muted small mb-1\">Période</label>   
                    <div class=\"dropdown\">
                        <button class=\"form-select bg-dark text-light border-secondary text-start d-flex justify-content-between align-items-center rounded-pill w-100\" type=\"button\" id=\"periodeDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" style=\"background-color: #12141d !important;\">
                            <span><i class=\"bi bi-calendar3 text-primary me-2\"></i> <span id=\"currentPeriodLabel\">Période : Ce Mois</span></span>        
                            <i class=\"bi bi-chevron-down ms-1\"></i>
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-dark shadow border border-secondary p-3 mt-2\" aria-labelledby=\"periodeDropdown\" style=\"min-width: 320px; background-color: #0b0d14 !important; border-radius: 12px; z-index: 1050;\">
                            <li><a class=\"dropdown-item py-2 px-3 rounded mb-1 period-option {% if currentPeriode|default('this_month') == 'this_month' %}active{% endif %}\" href=\"#\" data-value=\"this_month\">Ce Mois</a></li>
                            <li><a class=\"dropdown-item py-2 px-3 rounded mb-1 period-option {% if currentPeriode|default('this_month') == 'last_month' %}active{% endif %}\" href=\"#\" data-value=\"last_month\">Mois Dernier</a></li>       
                            <li><a class=\"dropdown-item py-2 px-3 rounded mb-1 period-option {% if currentPeriode|default('this_month') == 'this_year' %}active{% endif %}\" href=\"#\" data-value=\"this_year\">Cette Année</a></li>       
                            <li><a class=\"dropdown-item py-2 px-3 rounded mb-2 period-option {% if currentPeriode|default('this_month') == 'all' %}active{% endif %}\" href=\"#\" data-value=\"all\">Tout</a></li>
                            <li><hr class=\"dropdown-divider border-secondary mb-3\"></li>
                            <li class=\"px-2\">
                                <span class=\"text-muted small fw-bold d-block mb-2\">Plage personnalisée</span>
                                <div class=\"row gx-2\">
                                    <div class=\"col-5\">
                                        <input type=\"date\" class=\"form-control form-control-sm bg-dark text-light border-secondary rounded custom-date-input\" name=\"date_start\" id=\"customDateStart\" value=\"{{ currentStart|default('') }}\" style=\"background-color: #12141d !important; color-scheme: dark;\">
                                    </div>
                                    <div class=\"col-5\">
                                        <input type=\"date\" class=\"form-control form-control-sm bg-dark text-light border-secondary rounded custom-date-input\" name=\"date_end\" id=\"customDateEnd\" value=\"{{ currentEnd|default('') }}\" style=\"background-color: #12141d !important; color-scheme: dark;\">
                                    </div>
                                    <div class=\"col-2\">
                                        <button type=\"button\" class=\"btn btn-info w-100 rounded text-center text-dark fw-bold px-0 custom-date-btn\" style=\"background-color: #0dcaf0; border-color: #0dcaf0;\">OK</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <input type=\"hidden\" name=\"periode\" id=\"periodeValue\" value=\"{{ currentPeriode|default('this_month') }}\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"text-muted small mb-1\">Type</label>
                    <select name=\"type\" class=\"form-select bg-dark text-light border-secondary rounded-pill\" style=\"background-color: #12141d !important;\" onchange=\"this.form.submit()\">
                        <option value=\"TOUT\" {% if currentType is defined and currentType == 'TOUT' %}selected{% endif %}>TOUT</option>
                        <option value=\"RECETTE\" {% if currentType is defined and currentType == 'RECETTE' %}selected{% endif %}>RECETTE</option>
                        <option value=\"DEPENSE\" {% if currentType is defined and currentType == 'DEPENSE' %}selected{% endif %}>DÉPENSE</option>        
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-transparent border-0 text-muted ps-0\"><i class=\"bi bi-search\"></i></span>
                        <input type=\"text\" name=\"search\" value=\"{{ currentSearch|default('') }}\" class=\"form-control bg-dark text-light border-secondary rounded-pill\" placeholder=\"Rechercher...\" style=\"background-color: #12141d !important;\">
                    </div>
                </div>
                <div class=\"col-md-3 d-flex justify-content-end align-items-center\">
                    <a href=\"#\" id=\"resetFiltersBtn\" class=\"text-muted me-3 text-decoration-none small\">Réinitialiser</a>
                    <button type=\"submit\" class=\"d-none\"></button>
                    <a href=\"#\" class=\"btn btn-primary rounded-pill fw-bold px-4\" style=\"background-color: #0d6efd; color: white; border: none;\">Exporter...</a>
                </div>
            </div>
        </form>

        <!-- Tableau -->
        <div class=\"table-responsive\" style=\"background-color: #12141d !important; border-radius: 12px; padding: 1rem;\">
            <table class=\"table table-dark table-hover table-borderless align-middle mb-0\" style=\"background-color: #12141d !important;\">
                <thead class=\"border-bottom border-secondary\">
                    {% set qs = app.request.query.all %}
                    {% set dirDate = (currentSort == 'date' and currentDirection == 'ASC') ? 'DESC' : 'ASC' %}
                    {% set dirType = (currentSort == 'type' and currentDirection == 'ASC') ? 'DESC' : 'ASC' %}
                    {% set dirDesc = (currentSort == 'description' and currentDirection == 'ASC') ? 'DESC' : 'ASC' %}
                    {% set dirMontant = (currentSort == 'montant' and currentDirection == 'ASC') ? 'DESC' : 'ASC' %}
                    <tr>
                        <th>
                            <a href=\"{{ path(app.request.attributes.get('_route'), qs|merge({'sort': 'date', 'direction': dirDate})) }}\" class=\"text-muted text-decoration-none\">
                                DATE {% if currentSort == 'date' %}<i class=\"bi bi-caret-{{ currentDirection == 'ASC' ? 'up' : 'down' }}-fill text-info\"></i>{% endif %}
                            </a>
                        </th>
                        <th>
                            <a href=\"{{ path(app.request.attributes.get('_route'), qs|merge({'sort': 'type', 'direction': dirType})) }}\" class=\"text-muted text-decoration-none\">
                                TYPE {% if currentSort == 'type' %}<i class=\"bi bi-caret-{{ currentDirection == 'ASC' ? 'up' : 'down' }}-fill text-info\"></i>{% endif %}
                            </a>
                        </th>
                        <th>
                            <a href=\"{{ path(app.request.attributes.get('_route'), qs|merge({'sort': 'description', 'direction': dirDesc})) }}\" class=\"text-muted text-decoration-none\">
                                DESCRIPTION {% if currentSort == 'description' %}<i class=\"bi bi-caret-{{ currentDirection == 'ASC' ? 'up' : 'down' }}-fill text-info\"></i>{% endif %}
                            </a>
                        </th>
                        <th>
                            <a href=\"{{ path(app.request.attributes.get('_route'), qs|merge({'sort': 'montant', 'direction': dirMontant})) }}\" class=\"text-muted text-decoration-none\">
                                MONTANT (TND) {% if currentSort == 'montant' %}<i class=\"bi bi-caret-{{ currentDirection == 'ASC' ? 'up' : 'down' }}-fill text-info\"></i>{% endif %}
                            </a>
                        </th>
                        <th class=\"text-muted\" style=\"width: 50px;\"></th>     
                    </tr>
                </thead>
                <tbody id=\"transactionsTableBody\">
                {% for tx in transactions %}
                    <tr data-id=\"{{ tx.id }}\" class=\"tx-row\">
                        <td class=\"editable-cell\" data-field=\"date\" data-value=\"{{ tx.date|date('Y-m-d') }}\">{{ tx.date|date('Y-m-d') }}</td>
                        <td>
                            {% if tx.type == 'RECETTE' %}
                                <span class=\"text-success\"><i class=\"bi bi-arrow-up-right\"></i> {{ tx.type }}</span>
                            {% else %}
                                <span class=\"text-danger\"><i class=\"bi bi-arrow-down-right\"></i> {{ tx.type }}</span>
                            {% endif %}
                        </td>
                        <td class=\"editable-cell\" data-field=\"description\" data-value=\"{{ tx.description }}\">{{ tx.description }}</td>
                        <td class=\"editable-cell\" data-field=\"montant\" data-value=\"{{ tx.montant }}\" style=\"{% if tx.type == 'RECETTE' %}color: #198754{% else %}color: #dc3545{% endif %}; font-weight: bold;\">
                            {{ tx.montant|number_format(2, ',', ' ') }} TND   
                        </td>
                        <td class=\"text-end\">
                            <span class=\"delete-icon\" title=\"Supprimer\" data-id=\"{{ tx.id }}\" style=\"cursor:pointer; opacity:0; transition: opacity 0.2s;\"> 
                                <i class=\"bi bi-trash3 text-danger\"></i>      
                            </span>
                        </td>
                    </tr>
                {% else %}
                    <tr id=\"emptyDefaultRow\">
                        <td colspan=\"5\" class=\"text-center text-muted py-4\">Aucune transaction trouvée</td>
                    </tr>
                {% endfor %}
                    <tr id=\"emptySearchRow\" style=\"display: none;\">
                        <td colspan=\"5\" class=\"text-center text-muted py-4\">Aucun résultat pour cette recherche.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Les 4 cartes (KPI) du bas -->
<div class=\"row g-4 mb-5\">
    <div class=\"col-md-3\">
        <div class=\"card card-body bg-dark border border-secondary p-3 text-center h-100 shadow\" style=\"background-color: #12141d !important; border-radius: 12px;\">
            <h6 class=\"text-muted mb-2\">Nombre Transactions</h6>
            <h3 id=\"kpi-nb\" class=\"text-info mb-0 fw-bold\">{{ nombreTransactions }}</h3>  
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card card-body bg-dark border border-secondary p-3 text-center h-100 shadow\" style=\"background-color: #12141d !important; border-radius: 12px;\">
            <h6 class=\"text-muted mb-2\">Total Recettes</h6>
            <h3 id=\"kpi-recettes\" class=\"text-success mb-0 fw-bold\">{{ totalRecettes|number_format(2, ',', ' ') }} TND</h3>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card card-body bg-dark border border-secondary p-3 text-center h-100 shadow\" style=\"background-color: #12141d !important; border-radius: 12px;\">
            <h6 class=\"text-muted mb-2\">Total Charges</h6>
            <h3 id=\"kpi-charges\" class=\"text-danger mb-0 fw-bold\">{{ totalCharges|number_format(2, ',', ' ') }} TND</h3>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card card-body bg-dark border border-secondary p-3 text-center h-100 shadow\" style=\"background-color: #12141d !important; border-radius: 12px;\">
            <h6 class=\"text-muted mb-2\">Solde Filtré</h6>
            <h3 id=\"soldeDisplay\" class=\"{% if soldeFiltre < 0 %}text-danger{% else %}text-info{% endif %} mb-0 fw-bold\">{{ soldeFiltre|number_format(2, ',', ' ') }} TND</h3>
        </div>
    </div>
</div>

{# Toast notification pour les actions AJAX #}
<div class=\"position-fixed bottom-0 end-0 p-3\" style=\"z-index: 1080\">
    <div id=\"actionToast\" class=\"toast align-items-center border-0\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
        <div class=\"d-flex\">
            <div class=\"toast-body\" id=\"toastMessage\"></div>
            <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
        </div>
    </div>
</div>

{# Modal de confirmation de suppression #}
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content bg-dark border border-secondary text-white\">
            <div class=\"modal-body text-center py-4\">
                <i class=\"bi bi-exclamation-triangle-fill text-warning fs-1 mb-3 d-block\"></i>
                <h6 class=\"mb-2\">Supprimer cette transaction ?</h6>
                <p class=\"text-muted small mb-0\">Cette action est irréversible.</p>
            </div>
            <div class=\"modal-footer border-secondary justify-content-center py-2\">
                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-sm btn-danger\" id=\"confirmDeleteBtn\">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<style>
    /* Hover : afficher l'icône de suppression */
    .tx-row:hover .delete-icon { opacity: 1 !important; }

    /* Cellule éditable */
    .editable-cell {
        cursor: pointer;
        position: relative;
        transition: background-color 0.2s ease;
        border-radius: 4px;
    }
    .editable-cell:hover { background-color: rgba(0, 229, 255, 0.08); }       
    .editable-cell:hover::after {
        content: '\\F4CB';
        font-family: 'bootstrap-icons';
        position: absolute;
        right: 6px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 0.7rem;
        color: #00e5ff;
        opacity: 0.7;
    }

    /* Input inline */
    .editable-cell input {
        background: transparent;
        border: 1px solid #00e5ff;
        border-radius: 4px;
        color: #fff;
        padding: 2px 6px;
        width: 100%;
        outline: none;
        font-size: inherit;
    }

    .editable-cell .inline-error {
        position: absolute;
        bottom: -18px;
        left: 0;
        font-size: 0.7rem;
        color: #dc3545;
        white-space: nowrap;
        animation: fadeInError 0.3s ease;
    }
    @keyframes fadeInError {
        from { opacity: 0; transform: translateY(-4px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .tx-row.removing { animation: slideOutLeft 0.4s ease forwards; }
    @keyframes slideOutLeft {
        to { opacity: 0; transform: translateX(-30px); }
    }
    .editable-cell.success-flash { animation: successPulse 0.5s ease; }       
    @keyframes successPulse {
        0% { background-color: rgba(25, 135, 84, 0.3); }
        100% { background-color: transparent; }
    }
    #actionToast.toast-success { background-color: #198754; color: #fff; }    
    #actionToast.toast-error { background-color: #dc3545; color: #fff; }      
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ===== GESTION FILTRE PERIODE =====
    const periodeValue = document.getElementById('periodeValue');
    const label = document.getElementById('currentPeriodLabel');
    const options = document.querySelectorAll('.period-option');
    const form = document.getElementById('filterForm');

    if(periodeValue && label && options && form) {
        const labelsMap = {
            'this_month': 'Ce Mois',
            'last_month': 'Mois Dernier',
            'this_year': 'Cette Année',
            'all': 'Tout',
            'custom': 'Personnalisée'
        };

        const initialVal = periodeValue.value || 'this_month';
        if(initialVal === 'custom') {
            const start = document.getElementById('customDateStart').value;     
            const end = document.getElementById('customDateEnd').value;
            if(start || end) {
                label.innerText = 'Du ' + (start || '...') + ' au ' + (end || '...');
            } else {
                 label.innerText = 'Période : ' + labelsMap[initialVal];       
            }
        } else {
            label.innerText = 'Période : ' + (labelsMap[initialVal] || 'Ce Mois');
        }

        options.forEach(opt => {
            opt.addEventListener('click', function(e) {
                e.preventDefault();
                const val = this.getAttribute('data-value');
                periodeValue.value = val;

                document.getElementById('customDateStart').value = '';
                document.getElementById('customDateEnd').value = '';

                form.submit();
            });
        });

        const customBtn = document.querySelector('.custom-date-btn');
        if(customBtn) {
            customBtn.addEventListener('click', function(e) {
                e.preventDefault();
                periodeValue.value = 'custom';
                form.submit();
            });
        }

        document.querySelectorAll('.custom-date-input, .dropdown-menu').forEach(el => {
             el.addEventListener('click', function(e) {
                 e.stopPropagation();
             });
        });
        
        // BOUTON REINITIALISER
        const resetBtn = document.getElementById('resetFiltersBtn');
        if (resetBtn) {
            resetBtn.addEventListener('click', function(e) {
                e.preventDefault();
                // Afficher TOUTES les transactions par défaut lors de la réinitialisation
                periodeValue.value = 'all';
                // Vider les autres inputs du formulaire form
                const selects = form.querySelectorAll('select');
                selects.forEach(sel => { sel.value = 'TOUT'; });
                const texts = form.querySelectorAll('input[type=\"text\"]');
                texts.forEach(txt => { txt.value = ''; });
                const dates = form.querySelectorAll('input[type=\"date\"]');
                dates.forEach(d => { d.value = ''; });
                
                // Soumettre le formulaire vide/réinitialisé
                form.submit();
            });
        }
    }

    // ===== GESTION RECHERCHE INSTANTANÉE FRONTEND =====
    const searchHistoryInput = document.querySelector('input[name=\"search\"]');
    if (searchHistoryInput) {
        searchHistoryInput.addEventListener('input', function() {
            const filter = this.value.toLowerCase().trim();
            const rows = document.querySelectorAll('.tx-row');
            
            let nb = 0;
            let recettes = 0;
            let charges = 0;

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(filter)) {
                    row.style.setProperty('display', 'table-row', 'important');
                    nb++;
                    
                    const montantStr = row.querySelector('[data-field=\"montant\"]').dataset.value;
                    const typeIsRecette = row.querySelector('span.text-success') !== null;
                    const montant = parseFloat(montantStr);
                    
                    if (typeIsRecette) {
                        recettes += montant;
                    } else {
                        charges += montant;
                    }
                } else {
                    row.style.setProperty('display', 'none', 'important');
                }
            });

            // Mise à jour des KPIs animée (instantanée)
            const solde = recettes - charges;
            
            document.getElementById('kpi-nb').textContent = nb;
            document.getElementById('kpi-recettes').textContent = formatNumber(recettes);
            document.getElementById('kpi-charges').textContent = formatNumber(charges);
            
            updateSolde(solde);
            
            // Masquer la ligne \"Aucune transaction\" par défaut si nb > 0
            const emptySearchRow = document.getElementById('emptySearchRow');
            const emptyDefaultRow = document.getElementById('emptyDefaultRow');
            if(emptyDefaultRow) emptyDefaultRow.style.display = 'none';

            if(emptySearchRow) {
                 if(nb === 0) emptySearchRow.style.display = 'table-row';
                 else emptySearchRow.style.display = 'none';
            }
        });
        
        // Empêcher la soumission du formulaire par touche entrée si on est sur la recherche (car elle est dynamique mtn)
        searchHistoryInput.addEventListener('keydown', function(e) {
            if(e.key === 'Enter') {
                e.preventDefault();
            }
        });
    }

    // ===== GESTION TOAST & UPDATE SOLDE =====
    const toast = document.getElementById('actionToast');
    const toastMessage = document.getElementById('toastMessage');
    const bsToast = new bootstrap.Toast(toast, { delay: 3000 });

    function showToast(message, type) {
        toast.className = 'toast align-items-center border-0 toast-' + type;  
        toastMessage.textContent = message;
        bsToast.show();
    }

    function formatNumber(num) {
        return parseFloat(num).toLocaleString('fr-FR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + ' TND';
    }

    function updateSolde(solde) {
        const el = document.getElementById('soldeDisplay');
        if(el) {
            el.textContent = formatNumber(solde);
            el.className = 'mb-0 fw-bold ' + (solde < 0 ? 'text-danger' : 'text-info');
        }
    }

    // ===== ÉDITION INLINE (double-clic) =====
    document.querySelectorAll('.editable-cell').forEach(function(cell) {      
        cell.addEventListener('dblclick', function() {
            if (cell.querySelector('input')) return;

            const field = cell.dataset.field;
            const oldValue = cell.dataset.value;
            const row = cell.closest('tr');
            const txId = row.dataset.id;
            const originalHTML = cell.innerHTML;

            const oldError = cell.querySelector('.inline-error');
            if (oldError) oldError.remove();

            const input = document.createElement('input');
            input.type = field === 'date' ? 'date' : 'text';
            input.value = oldValue;
            input.setAttribute('data-original', oldValue);

            cell.innerHTML = '';
            cell.appendChild(input);
            input.focus();
            if(input.type === 'text') {
                input.select();
            }

            function saveEdit() {
                const newValue = input.value.trim();

                if (newValue === oldValue) {
                    cancelEdit();
                    return;
                }

                if (field === 'description') {
                    if (newValue === '') { cancelEdit(); showToast('La description est obligatoire.', 'error'); return; }
                    if (newValue.length < 3) { cancelEdit(); showToast('Minimum 3 caractères.', 'error'); return; }
                }
                if (field === 'montant') {
                    const num = parseFloat(newValue.replace(',', '.'));       
                    if (isNaN(num) || num <= 0) { cancelEdit(); showToast('Le montant doit être > 0.', 'error'); return; }
                }

                const payload = {};
                payload[field] = field === 'montant' ? parseFloat(newValue.replace(',', '.')) : newValue;

                fetch('/transaction/' + txId + '/edit', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                    body: JSON.stringify(payload)
                }).then(r => r.json()).then(data => {
                    if (data.success) {
                        cell.dataset.value = field === 'montant' ? data.transaction.montant : newValue;
                        if (field === 'montant') cell.textContent = formatNumber(data.transaction.montant);
                        else if (field === 'date') cell.textContent = data.transaction.date;
                        else cell.textContent = newValue;

                        cell.classList.add('success-flash');
                        setTimeout(() => cell.classList.remove('success-flash'), 500);

                        updateSolde(data.solde);
                        showToast('Modifié avec succès !', 'success');  

                        setTimeout(() => location.reload(), 800);
                    } else {
                        cancelEdit();
                        showToast(data.message || 'Erreur', 'error');
                    }
                }).catch(err => {
                    cancelEdit();
                    showToast('Erreur réseau.', 'error');
                });
            }

            function cancelEdit() { cell.innerHTML = originalHTML; }

            input.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') { e.preventDefault(); saveEdit(); }    
                if (e.key === 'Escape') { cancelEdit(); }
            });

            input.addEventListener('blur', function() {
                setTimeout(function() { if (cell.querySelector('input')) saveEdit(); }, 150);
            });
        });
    });

    // ===== SUPPRESSION =====
    let deleteId = null;
    const deleteModalEl = document.getElementById('deleteModal');
    if(deleteModalEl) {
        const deleteModal = new bootstrap.Modal(deleteModalEl);

        document.querySelectorAll('.delete-icon').forEach(function(icon) {    
            icon.addEventListener('click', function() {
                deleteId = this.dataset.id;
                deleteModal.show();
            });
        });

        document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
            if (!deleteId) return;

            fetch('/transaction/' + deleteId, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' }
            }).then(r => {
                // If it's a GET redirection instead of JSON, we handle it as success
                if(r.redirected || !r.headers.get('content-type')?.includes('application/json')) {
                    return { success: true, solde: 0 };
                }
                return r.json();
            }).then(data => {
                if (data.success || data.solde !== undefined) {
                    const row = document.querySelector('tr[data-id=\"' + deleteId + '\"]');
                    if (row) {
                        row.classList.add('removing');
                        setTimeout(() => row.remove(), 400);
                    }
                    showToast('Transaction supprimée !', 'success');       
                    setTimeout(() => location.reload(), 800);
                } else {
                    showToast('Erreur lors de la suppression.', 'error');     
                }
                deleteModal.hide();
                deleteId = null;
            }).catch(() => {
                showToast('Action effectuée.', 'success');
                setTimeout(() => location.reload(), 800);
                deleteModal.hide();
            });
        });
    }
});
</script>
{% endblock %}", "franchise/historique.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\franchise\\historique.html.twig");
    }
}
