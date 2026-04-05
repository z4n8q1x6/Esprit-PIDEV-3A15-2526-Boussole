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

/* afficher_front_charge/index.html.twig */
class __TwigTemplate_29fc637d8c5eec176f30314721567982 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "afficher_front_charge/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "afficher_front_charge/index.html.twig"));

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

        yield "Boussole - Mes Charges";
        
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
        <h2 class=\"fw-bold text-dark mb-0\">Mes Charges Financières</h2>
        <div class=\"d-flex align-items-center gap-3\">
            <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ajouter_charge");
        yield "\" class=\"btn btn-add-modern\">
                <i class=\"fas fa-plus-circle me-2\"></i> Ajouter une charge
            </a>
        </div>
    </div>

    ";
        // line 18
        yield "    <div class=\"card mb-5 border-0 shadow-sm modern-filter-bar\">
        <div class=\"card-body p-3\">
            <form method=\"get\" action=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficher_front_charge");
        yield "\" class=\"row g-3 align-items-center\">
                <div class=\"col-12 col-md-5\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white border-end-0 py-2\">
                            <i class=\"fas fa-search text-primary\"></i>
                        </span>
                        <input type=\"text\" name=\"q\" class=\"form-control border-start-0 py-2\" placeholder=\"Rechercher (titre, catégorie, statut)...\" value=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 26, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                </div>
                <div class=\"col-6 col-md-3\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white py-2\"><i class=\"fas fa-sort\"></i></span>
                        <select name=\"sort\" class=\"form-select py-2\">
                            <option value=\"id\" ";
        // line 33
        if ((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 33, $this->source); })()), "id")) : ("id")) == "id")) {
            yield "selected";
        }
        yield ">Défaut (ID)</option>
                            <option value=\"montant\" ";
        // line 34
        if ((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 34, $this->source); })()), "id")) : ("id")) == "montant")) {
            yield "selected";
        }
        yield ">Montant</option>
                            <option value=\"date_charge\" ";
        // line 35
        if ((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 35, $this->source); })()), "id")) : ("id")) == "date_charge")) {
            yield "selected";
        }
        yield ">Date</option>
                            <option value=\"titre\" ";
        // line 36
        if ((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 36, $this->source); })()), "id")) : ("id")) == "titre")) {
            yield "selected";
        }
        yield ">Titre</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-6 col-md-2\">
                    <select name=\"dir\" class=\"form-select py-2\">
                        <option value=\"ASC\" ";
        // line 42
        if ((((array_key_exists("dir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 42, $this->source); })()), "ASC")) : ("ASC")) == "ASC")) {
            yield "selected";
        }
        yield ">Croissant</option>
                        <option value=\"DESC\" ";
        // line 43
        if ((((array_key_exists("dir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 43, $this->source); })()), "ASC")) : ("ASC")) == "DESC")) {
            yield "selected";
        }
        yield ">Décroissant</option>
                    </select>
                </div>
                <div class=\"col-12 col-md-2\">
                    <button type=\"submit\" class=\"btn btn-apply-modern w-100 py-2\">Appliquer</button>
                </div>
            </form>
        </div>
    </div>

    ";
        // line 54
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "flashes", ["success"], "method", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 55
            yield "        <div class=\"alert alert-success alert-dismissible fade show mb-4 rounded-pill px-4 shadow-sm\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "
    ";
        // line 62
        yield "    <div class=\"row g-4\">
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["charges"]) || array_key_exists("charges", $context) ? $context["charges"] : (function () { throw new RuntimeError('Variable "charges" does not exist.', 63, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["charge"]) {
            // line 64
            yield "            <div class=\"col-md-4\">
                <div class=\"card h-100 charge-card-modern\">
                    ";
            // line 67
            yield "                    <div class=\"card-header-accent ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "status_validation", [], "any", false, false, false, 67) == "Validé")) {
                yield "bg-success";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "status_validation", [], "any", false, false, false, 67) == "Refusé")) {
                yield "bg-danger";
            } else {
                yield "bg-warning";
            }
            yield "\"></div>
                    
                    <div class=\"card-body p-4\">
                        <div class=\"d-flex justify-content-between align-items-start mb-3\">
                            <div class=\"status-badge\">
                                <span class=\"badge rounded-pill ";
            // line 72
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "status_validation", [], "any", false, false, false, 72) == "Validé")) {
                yield "bg-soft-success";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "status_validation", [], "any", false, false, false, 72) == "Refusé")) {
                yield "bg-soft-danger";
            } else {
                yield "bg-soft-warning";
            }
            yield "\">
                                    ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "status_validation", [], "any", false, false, false, 73), "html", null, true);
            yield "
                                </span>
                            </div>
                            <small class=\"text-muted fw-bold\"><i class=\"far fa-calendar-alt me-1\"></i> ";
            // line 76
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "date_charge", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "date_charge", [], "any", false, false, false, 76), "d/m/Y"), "html", null, true)) : (""));
            yield "</small>
                        </div>
                        
                        <h5 class=\"card-title fw-bold text-dark mb-2\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "titre", [], "any", false, false, false, 79), "html", null, true);
            yield "</h5>
                        <div class=\"amount-display mb-3\">
                            <span class=\"h3 fw-bold text-primary mb-0\">";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "montant", [], "any", false, false, false, 81), 2, ",", " "), "html", null, true);
            yield "</span>
                            <span class=\"text-muted ms-1\">TND</span>
                        </div>
                        
                        <hr class=\"my-3 opacity-10\">
                        
                        <div class=\"charge-meta\">
                            <div class=\"meta-item mb-2\">
                                <i class=\"fas fa-tag text-muted me-2\"></i>
                                <span class=\"small text-secondary\">Catégorie : <strong>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "type", [], "any", false, false, false, 90), "html", null, true);
            yield "</strong></span>
                            </div>
                            <div class=\"meta-item\">
                                <i class=\"fas fa-building text-muted me-2\"></i>
                                <span class=\"small text-secondary\">Franchise : <strong>";
            // line 94
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "franchise_id", [], "any", false, false, false, 94) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "franchise_id", [], "any", false, false, false, 94), "nom", [], "any", false, false, false, 94))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "franchise_id", [], "any", false, false, false, 94), "nom", [], "any", false, false, false, 94), "html", null, true)) : ("Aucune"));
            yield "</strong></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"card-footer bg-white border-0 px-4 pb-4 pt-0 d-flex gap-2\">
                        <a href=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modifier_charge", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "id", [], "any", false, false, false, 100)]), "html", null, true);
            yield "\" class=\"btn btn-outline-warning btn-action flex-grow-1\">
                            <i class=\"fas fa-edit me-1\"></i> Modifier
                        </a>
                        <a href=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_charge_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "id", [], "any", false, false, false, 103)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-outline-danger btn-action flex-grow-1\" 
                           onclick=\"return confirm('Supprimer cette charge ?')\">
                            <i class=\"fas fa-trash-alt me-1\"></i> Supprimer
                        </a>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 111
        if (!$context['_iterated']) {
            // line 112
            yield "            <div class=\"col-12 text-center py-5\">
                <div class=\"empty-state\">
                    <i class=\"fas fa-receipt fa-3x text-muted mb-3 opacity-50\"></i>
                    <p class=\"text-muted fs-5\">Aucune charge financière enregistrée.</p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['charge'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "    </div>

    ";
        // line 122
        yield "    ";
        if (((isset($context["pagesCount"]) || array_key_exists("pagesCount", $context) ? $context["pagesCount"] : (function () { throw new RuntimeError('Variable "pagesCount" does not exist.', 122, $this->source); })()) > 1)) {
            // line 123
            yield "        <nav class=\"mt-5\">
            <ul class=\"pagination justify-content-center modern-pagination\">
                ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["pagesCount"]) || array_key_exists("pagesCount", $context) ? $context["pagesCount"] : (function () { throw new RuntimeError('Variable "pagesCount" does not exist.', 125, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 126
                yield "                    <li class=\"page-item ";
                if (($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 126, $this->source); })()))) {
                    yield "active";
                }
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficher_front_charge", ["page" => $context["i"], "q" => ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 127, $this->source); })()), "")) : ("")), "sort" => ((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 127, $this->source); })()), "id")) : ("id")), "dir" => ((array_key_exists("dir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 127, $this->source); })()), "ASC")) : ("ASC"))]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            yield "            </ul>
        </nav>
    ";
        }
        // line 133
        yield "
    ";
        // line 135
        yield "    <div class=\"mt-5 d-flex justify-content-center\">
        <div class=\"total-counter-front shadow-sm\">
            <span class=\"text\">Montant Total Global :</span>
            <span class=\"number-box\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 138, $this->source); })()), 2, ",", " "), "html", null, true);
        yield " <small>TND</small></span>
        </div>
    </div>
</div>

<style>
/* Variables & Global */
:root {
    --primary-gradient: linear-gradient(135deg, #0d6efd 0%, #0043a8 100%);
    --success-gradient: linear-gradient(135deg, #198754 0%, #20c997 100%);
    --warning-gradient: linear-gradient(135deg, #ffc107 0%, #ff9800 100%);
}

/* Status Badges Soft */
.bg-soft-success { background-color: rgba(25, 135, 84, 0.1); color: #198754; font-weight: 700; }
.bg-soft-danger { background-color: rgba(220, 53, 69, 0.1); color: #dc3545; font-weight: 700; }
.bg-soft-warning { background-color: rgba(255, 193, 7, 0.1); color: #997404; font-weight: 700; }

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
}

/* Cartes Charges */
.charge-card-modern {
    border: none;
    border-radius: 16px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    background: white;
    overflow: hidden;
}
.charge-card-modern:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}
.card-header-accent {
    height: 6px;
}

.btn-action {
    border-radius: 10px;
    font-size: 0.85rem;
    font-weight: 600;
    padding: 10px;
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
    font-size: 1rem;
}
.total-counter-front .number-box {
    background: var(--primary-gradient);
    color: white;
    padding: 6px 18px;
    border-radius: 30px;
    font-weight: 800;
    font-size: 1.2rem;
    box-shadow: 0 4px 10px rgba(13, 110, 253, 0.2);
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
        return "afficher_front_charge/index.html.twig";
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
        return array (  372 => 138,  367 => 135,  364 => 133,  359 => 130,  348 => 127,  341 => 126,  337 => 125,  333 => 123,  330 => 122,  326 => 119,  314 => 112,  312 => 111,  299 => 103,  293 => 100,  284 => 94,  277 => 90,  265 => 81,  260 => 79,  254 => 76,  248 => 73,  238 => 72,  223 => 67,  219 => 64,  214 => 63,  211 => 62,  208 => 60,  198 => 56,  195 => 55,  190 => 54,  175 => 43,  169 => 42,  158 => 36,  152 => 35,  146 => 34,  140 => 33,  130 => 26,  121 => 20,  117 => 18,  108 => 11,  103 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front_base.html.twig' %}

{% block title %}Boussole - Mes Charges{% endblock %}

{% block content %}
<div class=\"container mt-4 pb-5\">
    {# En-tête avec titre + bouton Ajouter #}
    <div class=\"d-flex justify-content-between align-items-center mb-5\">
        <h2 class=\"fw-bold text-dark mb-0\">Mes Charges Financières</h2>
        <div class=\"d-flex align-items-center gap-3\">
            <a href=\"{{ path('app_ajouter_charge') }}\" class=\"btn btn-add-modern\">
                <i class=\"fas fa-plus-circle me-2\"></i> Ajouter une charge
            </a>
        </div>
    </div>

    {# Barre de recherche et de tri #}
    <div class=\"card mb-5 border-0 shadow-sm modern-filter-bar\">
        <div class=\"card-body p-3\">
            <form method=\"get\" action=\"{{ path('app_afficher_front_charge') }}\" class=\"row g-3 align-items-center\">
                <div class=\"col-12 col-md-5\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white border-end-0 py-2\">
                            <i class=\"fas fa-search text-primary\"></i>
                        </span>
                        <input type=\"text\" name=\"q\" class=\"form-control border-start-0 py-2\" placeholder=\"Rechercher (titre, catégorie, statut)...\" value=\"{{ search|default('') }}\">
                    </div>
                </div>
                <div class=\"col-6 col-md-3\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white py-2\"><i class=\"fas fa-sort\"></i></span>
                        <select name=\"sort\" class=\"form-select py-2\">
                            <option value=\"id\" {% if sort|default('id') == 'id' %}selected{% endif %}>Défaut (ID)</option>
                            <option value=\"montant\" {% if sort|default('id') == 'montant' %}selected{% endif %}>Montant</option>
                            <option value=\"date_charge\" {% if sort|default('id') == 'date_charge' %}selected{% endif %}>Date</option>
                            <option value=\"titre\" {% if sort|default('id') == 'titre' %}selected{% endif %}>Titre</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-6 col-md-2\">
                    <select name=\"dir\" class=\"form-select py-2\">
                        <option value=\"ASC\" {% if dir|default('ASC') == 'ASC' %}selected{% endif %}>Croissant</option>
                        <option value=\"DESC\" {% if dir|default('ASC') == 'DESC' %}selected{% endif %}>Décroissant</option>
                    </select>
                </div>
                <div class=\"col-12 col-md-2\">
                    <button type=\"submit\" class=\"btn btn-apply-modern w-100 py-2\">Appliquer</button>
                </div>
            </form>
        </div>
    </div>

    {# Alertes de succès #}
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show mb-4 rounded-pill px-4 shadow-sm\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %}

    {# Grille des charges #}
    <div class=\"row g-4\">
        {% for charge in charges %}
            <div class=\"col-md-4\">
                <div class=\"card h-100 charge-card-modern\">
                    {# Bordure de couleur dynamique selon statut #}
                    <div class=\"card-header-accent {% if charge.status_validation == 'Validé' %}bg-success{% elseif charge.status_validation == 'Refusé' %}bg-danger{% else %}bg-warning{% endif %}\"></div>
                    
                    <div class=\"card-body p-4\">
                        <div class=\"d-flex justify-content-between align-items-start mb-3\">
                            <div class=\"status-badge\">
                                <span class=\"badge rounded-pill {% if charge.status_validation == 'Validé' %}bg-soft-success{% elseif charge.status_validation == 'Refusé' %}bg-soft-danger{% else %}bg-soft-warning{% endif %}\">
                                    {{ charge.status_validation }}
                                </span>
                            </div>
                            <small class=\"text-muted fw-bold\"><i class=\"far fa-calendar-alt me-1\"></i> {{ charge.date_charge ? charge.date_charge|date('d/m/Y') : '' }}</small>
                        </div>
                        
                        <h5 class=\"card-title fw-bold text-dark mb-2\">{{ charge.titre }}</h5>
                        <div class=\"amount-display mb-3\">
                            <span class=\"h3 fw-bold text-primary mb-0\">{{ charge.montant|number_format(2, ',', ' ') }}</span>
                            <span class=\"text-muted ms-1\">TND</span>
                        </div>
                        
                        <hr class=\"my-3 opacity-10\">
                        
                        <div class=\"charge-meta\">
                            <div class=\"meta-item mb-2\">
                                <i class=\"fas fa-tag text-muted me-2\"></i>
                                <span class=\"small text-secondary\">Catégorie : <strong>{{ charge.type }}</strong></span>
                            </div>
                            <div class=\"meta-item\">
                                <i class=\"fas fa-building text-muted me-2\"></i>
                                <span class=\"small text-secondary\">Franchise : <strong>{{ (charge.franchise_id and charge.franchise_id.nom) ? charge.franchise_id.nom : 'Aucune' }}</strong></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"card-footer bg-white border-0 px-4 pb-4 pt-0 d-flex gap-2\">
                        <a href=\"{{ path('app_modifier_charge', {'id': charge.id}) }}\" class=\"btn btn-outline-warning btn-action flex-grow-1\">
                            <i class=\"fas fa-edit me-1\"></i> Modifier
                        </a>
                        <a href=\"{{ path('app_charge_delete', {'id': charge.id}) }}\" 
                           class=\"btn btn-outline-danger btn-action flex-grow-1\" 
                           onclick=\"return confirm('Supprimer cette charge ?')\">
                            <i class=\"fas fa-trash-alt me-1\"></i> Supprimer
                        </a>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center py-5\">
                <div class=\"empty-state\">
                    <i class=\"fas fa-receipt fa-3x text-muted mb-3 opacity-50\"></i>
                    <p class=\"text-muted fs-5\">Aucune charge financière enregistrée.</p>
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
                        <a class=\"page-link\" href=\"{{ path('app_afficher_front_charge', {page: i, q: search|default(''), sort: sort|default('id'), dir: dir|default('ASC')}) }}\">{{ i }}</a>
                    </li>
                {% endfor %}
            </ul>
        </nav>
    {% endif %}

    {# Compteur Total Moderne #}
    <div class=\"mt-5 d-flex justify-content-center\">
        <div class=\"total-counter-front shadow-sm\">
            <span class=\"text\">Montant Total Global :</span>
            <span class=\"number-box\">{{ total|number_format(2, ',', ' ') }} <small>TND</small></span>
        </div>
    </div>
</div>

<style>
/* Variables & Global */
:root {
    --primary-gradient: linear-gradient(135deg, #0d6efd 0%, #0043a8 100%);
    --success-gradient: linear-gradient(135deg, #198754 0%, #20c997 100%);
    --warning-gradient: linear-gradient(135deg, #ffc107 0%, #ff9800 100%);
}

/* Status Badges Soft */
.bg-soft-success { background-color: rgba(25, 135, 84, 0.1); color: #198754; font-weight: 700; }
.bg-soft-danger { background-color: rgba(220, 53, 69, 0.1); color: #dc3545; font-weight: 700; }
.bg-soft-warning { background-color: rgba(255, 193, 7, 0.1); color: #997404; font-weight: 700; }

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
}

/* Cartes Charges */
.charge-card-modern {
    border: none;
    border-radius: 16px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    background: white;
    overflow: hidden;
}
.charge-card-modern:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}
.card-header-accent {
    height: 6px;
}

.btn-action {
    border-radius: 10px;
    font-size: 0.85rem;
    font-weight: 600;
    padding: 10px;
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
    font-size: 1rem;
}
.total-counter-front .number-box {
    background: var(--primary-gradient);
    color: white;
    padding: 6px 18px;
    border-radius: 30px;
    font-weight: 800;
    font-size: 1.2rem;
    box-shadow: 0 4px 10px rgba(13, 110, 253, 0.2);
}
</style>
{% endblock %}", "afficher_front_charge/index.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\afficher_front_charge\\index.html.twig");
    }
}
