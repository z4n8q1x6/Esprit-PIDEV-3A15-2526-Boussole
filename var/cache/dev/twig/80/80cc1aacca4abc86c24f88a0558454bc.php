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

/* dashboard_siege/index.html.twig */
class __TwigTemplate_f6a5a4d720126a8ef6e09275bd981aaa extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "back_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard_siege/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard_siege/index.html.twig"));

        $this->parent = $this->load("back_base.html.twig", 1);
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

        yield "Vue d'ensemble - Boussole Management";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"row mb-4 align-items-center\">
    <div class=\"col-md-6\">
        <h1 class=\"h3 mb-0 fw-bold\">Vue d'ensemble</h1>
        <p class=\"text-muted\">Bienvenue sur votre espace d'administration</p>
    </div>
    <div class=\"col-md-6 text-md-end\">
        ";
        // line 13
        yield "    </div>
</div>

<!-- KPI (Statistiques globales du réseau) -->
<div class=\"row g-4 mb-4\">
    <!-- CARTE SOLDE TOTAL -->
    <div class=\"col-md-4\">
        <div class=\"card card-body border p-4 h-100 shadow\" style=\"border-radius: 12px;\">
            <h6 class=\"text-muted mb-2 text-uppercase font-weight-bold\" style=\"font-size: 0.75rem; letter-spacing: 1px;\">SOLDE TOTAL</h6>
            <h2 class=\"mb-0 fw-bold\" style=\"color: #00e5ff;\">
                ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 23, $this->source); })()), 2, ",", " "), "html", null, true);
        yield " TND
            </h2>
        </div>
    </div>
    
    <!-- CARTE REVENUS -->
    <div class=\"col-md-4\">
        <div class=\"card card-body border p-4 h-100 shadow\" style=\"border-radius: 12px;\">
            <h6 class=\"text-muted mb-2 text-uppercase font-weight-bold\" style=\"font-size: 0.75rem; letter-spacing: 1px;\">REVENUS</h6>
            <h2 class=\"mb-0 fw-bold\" style=\"color: #00ff88;\">
                ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["revenus"]) || array_key_exists("revenus", $context) ? $context["revenus"] : (function () { throw new RuntimeError('Variable "revenus" does not exist.', 33, $this->source); })()), 2, ",", " "), "html", null, true);
        yield " TND
            </h2>
            <div class=\"mt-2\">
                <span class=\"badge bg-success bg-opacity-25 text-success border border-success\" style=\"font-size: 0.8rem;\">
                    ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["taux_revenus"]) || array_key_exists("taux_revenus", $context) ? $context["taux_revenus"] : (function () { throw new RuntimeError('Variable "taux_revenus" does not exist.', 37, $this->source); })()), 1, ",", " "), "html", null, true);
        yield "% de l'objectif global
                </span>
            </div>
        </div>
    </div>

    <!-- CARTE DÉPENSES -->
    <div class=\"col-md-4\">
        <div class=\"card card-body border p-4 h-100 shadow\" style=\"border-radius: 12px;\">
            <h6 class=\"text-muted mb-2 text-uppercase font-weight-bold\" style=\"font-size: 0.75rem; letter-spacing: 1px;\">DÉPENSES</h6>
            <h2 class=\"mb-0 fw-bold text-danger\">
                ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["depenses"]) || array_key_exists("depenses", $context) ? $context["depenses"] : (function () { throw new RuntimeError('Variable "depenses" does not exist.', 48, $this->source); })()), 2, ",", " "), "html", null, true);
        yield " TND
            </h2>
            <div class=\"mt-2\">
                ";
        // line 51
        if (((isset($context["taux_depenses"]) || array_key_exists("taux_depenses", $context) ? $context["taux_depenses"] : (function () { throw new RuntimeError('Variable "taux_depenses" does not exist.', 51, $this->source); })()) >= 90)) {
            // line 52
            yield "                    <span class=\"badge bg-danger bg-opacity-25 text-danger border border-danger\" style=\"font-size: 0.8rem;\">
                        ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["taux_depenses"]) || array_key_exists("taux_depenses", $context) ? $context["taux_depenses"] : (function () { throw new RuntimeError('Variable "taux_depenses" does not exist.', 53, $this->source); })()), 1, ",", " "), "html", null, true);
            yield "% de la limite consommée ⚠ Critique
                    </span>
                ";
        } elseif ((        // line 55
(isset($context["taux_depenses"]) || array_key_exists("taux_depenses", $context) ? $context["taux_depenses"] : (function () { throw new RuntimeError('Variable "taux_depenses" does not exist.', 55, $this->source); })()) >= 80)) {
            // line 56
            yield "                    <span class=\"badge bg-danger bg-opacity-25 border border-danger\" style=\"font-size: 0.8rem; color: #ff4d4d;\">
                        ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["taux_depenses"]) || array_key_exists("taux_depenses", $context) ? $context["taux_depenses"] : (function () { throw new RuntimeError('Variable "taux_depenses" does not exist.', 57, $this->source); })()), 1, ",", " "), "html", null, true);
            yield "% de la limite consommée ⚠ Attention
                    </span>
                ";
        } else {
            // line 60
            yield "                    <span class=\"badge bg-danger bg-opacity-25 border border-danger\" style=\"font-size: 0.8rem; color: #ff4d4d;\">
                        ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["taux_depenses"]) || array_key_exists("taux_depenses", $context) ? $context["taux_depenses"] : (function () { throw new RuntimeError('Variable "taux_depenses" does not exist.', 61, $this->source); })()), 1, ",", " "), "html", null, true);
            yield "% de la limite consommée
                    </span>
                ";
        }
        // line 64
        yield "            </div>
        </div>
    </div>
</div>

<!-- TABS (Statistiques Globales / Radar) -->
<ul class=\"nav nav-tabs nav-bottom-line nav-responsive border-0 mb-4\" role=\"tablist\">
    <li class=\"nav-item\" role=\"presentation\">
        <a class=\"nav-link active pb-3\" data-bs-toggle=\"tab\" href=\"#tab-stats\" role=\"tab\" style=\"color: #00e5ff; border-bottom: 2px solid #00e5ff; background: transparent;\">
            Statistiques Globales
        </a>
    </li>
    <li class=\"nav-item\" role=\"presentation\">
        <a class=\"nav-link text-muted pb-3\" data-bs-toggle=\"tab\" href=\"#tab-radar\" role=\"tab\" style=\"border: none; background: transparent;\">
            Radar de Performance
        </a>
    </li>
</ul>

<!-- Cible pour le contenu des onglets -->
<div class=\"tab-content\">
    <div class=\"tab-pane fade show active\" id=\"tab-stats\" role=\"tabpanel\">
        <div class=\"card border shadow\" style=\"border-radius: 12px;\">
            <div class=\"card-body p-4\">
                <h5 class=\"mb-1\">Réel vs Budget – Réseau Global (3 derniers mois)</h5>
                <p class=\"text-muted small mb-4\">Comparaison entre les montants réels (transactions) et les budgets prévisionnels de toutes les franchises</p>
                
                <div style=\"height: 350px;\">
                    <canvas id=\"budgetChart\"></canvas>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"tab-pane fade\" id=\"tab-radar\" role=\"tabpanel\">
        <div class=\"card border shadow\" style=\"border-radius: 12px;\">
            <div class=\"card-body p-4 text-center\">
                <p class=\"text-muted mb-0 py-5\">Radar de performance en cours de développement...</p>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 110
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Récupération des données passées par Symfony
    const chartData = ";
        // line 115
        yield (isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 115, $this->source); })());
        yield ";
    
    // Inversion pour afficher du mois le plus ancien au plus récent (gauche à droite)
    const labels = chartData.labels.reverse();
    const reelData = chartData.reel.reverse();
    const budgetData = chartData.budget.reverse();

    const ctx = document.getElementById('budgetChart').getContext('2d');
    
    // Configuration globale de Chart.js pour le thème sombre
    Chart.defaults.color = '#a1a1a8';
    Chart.defaults.font.family = \"'Inter', sans-serif\";

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Réel (Transactions)',
                    data: reelData,
                    backgroundColor: '#00e5ff', 
                    borderRadius: 4,
                    barPercentage: 0.6,
                    categoryPercentage: 0.8
                },
                {
                    label: 'Budget Prévu',
                    data: budgetData,
                    backgroundColor: '#ff9800', // Orange style
                    borderRadius: 4,
                    barPercentage: 0.6,
                    categoryPercentage: 0.8
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        usePointStyle: true,
                        padding: 20,
                        color: '#a1a1a8'
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    titleColor: '#fff',
                    bodyColor: '#fff',
                    padding: 12,
                    borderColor: '#333',
                    borderWidth: 1,
                    callbacks: {
                        label: function(context) {
                            let label = context.dataset.label || '';
                            if (label) {
                                label += ': ';
                            }
                            if (context.parsed.y !== null) {
                                label += new Intl.NumberFormat('fr-FR', { style: 'currency', currency: 'TND' }).format(context.parsed.y);
                            }
                            return label;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: '#333333',
                        drawBorder: false
                    },
                    ticks: {
                        callback: function(value) {
                            return value.toLocaleString('fr-FR');
                        }
                    },
                    title: {
                        display: true,
                        text: 'Montant (TND)'
                    }
                },
                x: {
                    grid: {
                        display: false,
                        drawBorder: false
                    },
                    title: {
                        display: true,
                        text: 'Période'
                    }
                }
            }
        }
    });

    // Gestion propre des onglets custom (couleur et soulignement quand sélectionné)
    const tabLinks = document.querySelectorAll('.nav-tabs .nav-link');
    tabLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Remise à zéro
            tabLinks.forEach(t => {
                t.style.color = '';
                t.style.borderBottom = 'none';
                t.classList.remove('active');
                if(!t.classList.contains('text-muted')) t.classList.add('text-muted');
            });
            // Activation
            this.classList.remove('text-muted');
            this.classList.add('active');
            this.style.color = '#00e5ff';
            this.style.borderBottom = '2px solid #00e5ff';
        });
    });
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
        return "dashboard_siege/index.html.twig";
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
        return array (  266 => 115,  258 => 110,  245 => 109,  191 => 64,  185 => 61,  182 => 60,  176 => 57,  173 => 56,  171 => 55,  166 => 53,  163 => 52,  161 => 51,  155 => 48,  141 => 37,  134 => 33,  121 => 23,  109 => 13,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back_base.html.twig' %}

{% block title %}Vue d'ensemble - Boussole Management{% endblock %}

{% block body %}
<div class=\"row mb-4 align-items-center\">
    <div class=\"col-md-6\">
        <h1 class=\"h3 mb-0 fw-bold\">Vue d'ensemble</h1>
        <p class=\"text-muted\">Bienvenue sur votre espace d'administration</p>
    </div>
    <div class=\"col-md-6 text-md-end\">
        {# Espace pour la barre de recherche globale de l'interface admin, si existante dans le template #}
    </div>
</div>

<!-- KPI (Statistiques globales du réseau) -->
<div class=\"row g-4 mb-4\">
    <!-- CARTE SOLDE TOTAL -->
    <div class=\"col-md-4\">
        <div class=\"card card-body border p-4 h-100 shadow\" style=\"border-radius: 12px;\">
            <h6 class=\"text-muted mb-2 text-uppercase font-weight-bold\" style=\"font-size: 0.75rem; letter-spacing: 1px;\">SOLDE TOTAL</h6>
            <h2 class=\"mb-0 fw-bold\" style=\"color: #00e5ff;\">
                {{ solde|number_format(2, ',', ' ') }} TND
            </h2>
        </div>
    </div>
    
    <!-- CARTE REVENUS -->
    <div class=\"col-md-4\">
        <div class=\"card card-body border p-4 h-100 shadow\" style=\"border-radius: 12px;\">
            <h6 class=\"text-muted mb-2 text-uppercase font-weight-bold\" style=\"font-size: 0.75rem; letter-spacing: 1px;\">REVENUS</h6>
            <h2 class=\"mb-0 fw-bold\" style=\"color: #00ff88;\">
                {{ revenus|number_format(2, ',', ' ') }} TND
            </h2>
            <div class=\"mt-2\">
                <span class=\"badge bg-success bg-opacity-25 text-success border border-success\" style=\"font-size: 0.8rem;\">
                    {{ taux_revenus|number_format(1, ',', ' ') }}% de l'objectif global
                </span>
            </div>
        </div>
    </div>

    <!-- CARTE DÉPENSES -->
    <div class=\"col-md-4\">
        <div class=\"card card-body border p-4 h-100 shadow\" style=\"border-radius: 12px;\">
            <h6 class=\"text-muted mb-2 text-uppercase font-weight-bold\" style=\"font-size: 0.75rem; letter-spacing: 1px;\">DÉPENSES</h6>
            <h2 class=\"mb-0 fw-bold text-danger\">
                {{ depenses|number_format(2, ',', ' ') }} TND
            </h2>
            <div class=\"mt-2\">
                {% if taux_depenses >= 90 %}
                    <span class=\"badge bg-danger bg-opacity-25 text-danger border border-danger\" style=\"font-size: 0.8rem;\">
                        {{ taux_depenses|number_format(1, ',', ' ') }}% de la limite consommée ⚠ Critique
                    </span>
                {% elseif taux_depenses >= 80 %}
                    <span class=\"badge bg-danger bg-opacity-25 border border-danger\" style=\"font-size: 0.8rem; color: #ff4d4d;\">
                        {{ taux_depenses|number_format(1, ',', ' ') }}% de la limite consommée ⚠ Attention
                    </span>
                {% else %}
                    <span class=\"badge bg-danger bg-opacity-25 border border-danger\" style=\"font-size: 0.8rem; color: #ff4d4d;\">
                        {{ taux_depenses|number_format(1, ',', ' ') }}% de la limite consommée
                    </span>
                {% endif %}
            </div>
        </div>
    </div>
</div>

<!-- TABS (Statistiques Globales / Radar) -->
<ul class=\"nav nav-tabs nav-bottom-line nav-responsive border-0 mb-4\" role=\"tablist\">
    <li class=\"nav-item\" role=\"presentation\">
        <a class=\"nav-link active pb-3\" data-bs-toggle=\"tab\" href=\"#tab-stats\" role=\"tab\" style=\"color: #00e5ff; border-bottom: 2px solid #00e5ff; background: transparent;\">
            Statistiques Globales
        </a>
    </li>
    <li class=\"nav-item\" role=\"presentation\">
        <a class=\"nav-link text-muted pb-3\" data-bs-toggle=\"tab\" href=\"#tab-radar\" role=\"tab\" style=\"border: none; background: transparent;\">
            Radar de Performance
        </a>
    </li>
</ul>

<!-- Cible pour le contenu des onglets -->
<div class=\"tab-content\">
    <div class=\"tab-pane fade show active\" id=\"tab-stats\" role=\"tabpanel\">
        <div class=\"card border shadow\" style=\"border-radius: 12px;\">
            <div class=\"card-body p-4\">
                <h5 class=\"mb-1\">Réel vs Budget – Réseau Global (3 derniers mois)</h5>
                <p class=\"text-muted small mb-4\">Comparaison entre les montants réels (transactions) et les budgets prévisionnels de toutes les franchises</p>
                
                <div style=\"height: 350px;\">
                    <canvas id=\"budgetChart\"></canvas>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"tab-pane fade\" id=\"tab-radar\" role=\"tabpanel\">
        <div class=\"card border shadow\" style=\"border-radius: 12px;\">
            <div class=\"card-body p-4 text-center\">
                <p class=\"text-muted mb-0 py-5\">Radar de performance en cours de développement...</p>
            </div>
        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Récupération des données passées par Symfony
    const chartData = {{ chartData|raw }};
    
    // Inversion pour afficher du mois le plus ancien au plus récent (gauche à droite)
    const labels = chartData.labels.reverse();
    const reelData = chartData.reel.reverse();
    const budgetData = chartData.budget.reverse();

    const ctx = document.getElementById('budgetChart').getContext('2d');
    
    // Configuration globale de Chart.js pour le thème sombre
    Chart.defaults.color = '#a1a1a8';
    Chart.defaults.font.family = \"'Inter', sans-serif\";

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Réel (Transactions)',
                    data: reelData,
                    backgroundColor: '#00e5ff', 
                    borderRadius: 4,
                    barPercentage: 0.6,
                    categoryPercentage: 0.8
                },
                {
                    label: 'Budget Prévu',
                    data: budgetData,
                    backgroundColor: '#ff9800', // Orange style
                    borderRadius: 4,
                    barPercentage: 0.6,
                    categoryPercentage: 0.8
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        usePointStyle: true,
                        padding: 20,
                        color: '#a1a1a8'
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    titleColor: '#fff',
                    bodyColor: '#fff',
                    padding: 12,
                    borderColor: '#333',
                    borderWidth: 1,
                    callbacks: {
                        label: function(context) {
                            let label = context.dataset.label || '';
                            if (label) {
                                label += ': ';
                            }
                            if (context.parsed.y !== null) {
                                label += new Intl.NumberFormat('fr-FR', { style: 'currency', currency: 'TND' }).format(context.parsed.y);
                            }
                            return label;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: '#333333',
                        drawBorder: false
                    },
                    ticks: {
                        callback: function(value) {
                            return value.toLocaleString('fr-FR');
                        }
                    },
                    title: {
                        display: true,
                        text: 'Montant (TND)'
                    }
                },
                x: {
                    grid: {
                        display: false,
                        drawBorder: false
                    },
                    title: {
                        display: true,
                        text: 'Période'
                    }
                }
            }
        }
    });

    // Gestion propre des onglets custom (couleur et soulignement quand sélectionné)
    const tabLinks = document.querySelectorAll('.nav-tabs .nav-link');
    tabLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Remise à zéro
            tabLinks.forEach(t => {
                t.style.color = '';
                t.style.borderBottom = 'none';
                t.classList.remove('active');
                if(!t.classList.contains('text-muted')) t.classList.add('text-muted');
            });
            // Activation
            this.classList.remove('text-muted');
            this.classList.add('active');
            this.style.color = '#00e5ff';
            this.style.borderBottom = '2px solid #00e5ff';
        });
    });
});
</script>
{% endblock %}
", "dashboard_siege/index.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\dashboard_siege\\index.html.twig");
    }
}
