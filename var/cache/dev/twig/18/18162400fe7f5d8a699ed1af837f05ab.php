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

/* admin_commande/index.html.twig */
class __TwigTemplate_887388db68bb9cc9e4c371af89a9f213 extends Template
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
            'admin_content' => [$this, 'block_admin_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_commande/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_commande/index.html.twig"));

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

        yield "Gestion des Commandes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_admin_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_content"));

        // line 6
        yield "<div class=\"row\">
    <div class=\"col-12 mb-3\">
        <h1 class=\"h3 mb-2\">Gestion des Commandes</h1>
    </div>
</div>

<!-- Filtres -->
<div class=\"card mb-4\">
    <div class=\"card-body\">
        <div class=\"d-flex gap-2 flex-wrap\">
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_commandes", ["statut" => "tous"]);
        yield "\" class=\"btn ";
        yield ((((isset($context["statutActuel"]) || array_key_exists("statutActuel", $context) ? $context["statutActuel"] : (function () { throw new RuntimeError('Variable "statutActuel" does not exist.', 16, $this->source); })()) == "tous")) ? ("btn-primary") : ("btn-outline-secondary"));
        yield "\">Toutes</a>
            <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_commandes", ["statut" => "EN_ATTENTE"]);
        yield "\" class=\"btn ";
        yield ((((isset($context["statutActuel"]) || array_key_exists("statutActuel", $context) ? $context["statutActuel"] : (function () { throw new RuntimeError('Variable "statutActuel" does not exist.', 17, $this->source); })()) == "EN_ATTENTE")) ? ("btn-warning") : ("btn-outline-warning"));
        yield "\">En attente</a>
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_commandes", ["statut" => "VALIDEE"]);
        yield "\" class=\"btn ";
        yield ((((isset($context["statutActuel"]) || array_key_exists("statutActuel", $context) ? $context["statutActuel"] : (function () { throw new RuntimeError('Variable "statutActuel" does not exist.', 18, $this->source); })()) == "VALIDEE")) ? ("btn-success") : ("btn-outline-success"));
        yield "\">Validées</a>
            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_commandes", ["statut" => "REFUSEE"]);
        yield "\" class=\"btn ";
        yield ((((isset($context["statutActuel"]) || array_key_exists("statutActuel", $context) ? $context["statutActuel"] : (function () { throw new RuntimeError('Variable "statutActuel" does not exist.', 19, $this->source); })()) == "REFUSEE")) ? ("btn-danger") : ("btn-outline-danger"));
        yield "\">Refusées</a>
        </div>
    </div>
</div>

<div class=\"card shadow\">
    <div class=\"card-body p-4\">
        <div class=\"table-responsive\">
            <table class=\"table align-middle\">
                <thead class=\"table-light\">
                    <tr>
                        <th>N° Commande</th>
                        <th>Date</th>
                        <th>Franchise</th>
                        <th>Montant total</th>
                        <th>Statut</th>
                        <th class=\"text-end pe-3\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 40
            yield "                    <tr>
                        <td class=\"fw-bold\">#";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                        <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "date_creation", [], "any", false, false, false, 42), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 44
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "franchise_id", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 45
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "franchise_id", [], "any", false, false, false, 45), "nom", [], "any", false, false, false, 45), "html", null, true);
                yield "
                            ";
            } else {
                // line 47
                yield "                                <span class=\"text-muted\">Non assignée</span>
                            ";
            }
            // line 49
            yield "                        </td>
                        <td class=\"fw-bold\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "montant_total", [], "any", false, false, false, 50), 2, ",", " "), "html", null, true);
            yield " DT</td>
                        <td>
                            ";
            // line 52
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 52) == "EN_ATTENTE")) {
                // line 53
                yield "                                <span class=\"badge bg-warning text-dark\">En attente</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 54
$context["commande"], "statut", [], "any", false, false, false, 54) == "VALIDEE")) {
                // line 55
                yield "                                <span class=\"badge bg-success\">Validée</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 56
$context["commande"], "statut", [], "any", false, false, false, 56) == "REFUSEE")) {
                // line 57
                yield "                                <span class=\"badge bg-danger\">Refusée</span>
                            ";
            }
            // line 59
            yield "                        </td>
                        <td class=\"text-end pe-3\">
                            <div class=\"btn-group\" role=\"group\">
                                <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_commande_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">
                                    <i class=\"fas fa-eye me-1\"></i>Détails
                                </a>
                                ";
            // line 65
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 65) == "EN_ATTENTE")) {
                // line 66
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_commande_valider", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-success\" onclick=\"return confirm('Valider cette commande ?')\">
                                        <i class=\"fas fa-check-circle me-1\"></i>Valider
                                    </a>
                                    <a href=\"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_commande_refuser", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Refuser cette commande ?')\">
                                        <i class=\"fas fa-times-circle me-1\"></i>Refuser
                                    </a>
                                ";
            }
            // line 73
            yield "                            </div>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 76
        if (!$context['_iterated']) {
            // line 77
            yield "                    <tr>
                        <td colspan=\"6\" class=\"text-center\">Aucune commande trouvée</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "                </tbody>
            </table>
        </div>
    </div>
</div>
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
        return "admin_commande/index.html.twig";
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
        return array (  253 => 81,  244 => 77,  242 => 76,  235 => 73,  228 => 69,  221 => 66,  219 => 65,  213 => 62,  208 => 59,  204 => 57,  202 => 56,  199 => 55,  197 => 54,  194 => 53,  192 => 52,  187 => 50,  184 => 49,  180 => 47,  174 => 45,  172 => 44,  167 => 42,  163 => 41,  160 => 40,  155 => 39,  130 => 19,  124 => 18,  118 => 17,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back_base.html.twig' %}

{% block title %}Gestion des Commandes{% endblock %}

{% block admin_content %}
<div class=\"row\">
    <div class=\"col-12 mb-3\">
        <h1 class=\"h3 mb-2\">Gestion des Commandes</h1>
    </div>
</div>

<!-- Filtres -->
<div class=\"card mb-4\">
    <div class=\"card-body\">
        <div class=\"d-flex gap-2 flex-wrap\">
            <a href=\"{{ path('app_admin_commandes', {'statut': 'tous'}) }}\" class=\"btn {{ statutActuel == 'tous' ? 'btn-primary' : 'btn-outline-secondary' }}\">Toutes</a>
            <a href=\"{{ path('app_admin_commandes', {'statut': 'EN_ATTENTE'}) }}\" class=\"btn {{ statutActuel == 'EN_ATTENTE' ? 'btn-warning' : 'btn-outline-warning' }}\">En attente</a>
            <a href=\"{{ path('app_admin_commandes', {'statut': 'VALIDEE'}) }}\" class=\"btn {{ statutActuel == 'VALIDEE' ? 'btn-success' : 'btn-outline-success' }}\">Validées</a>
            <a href=\"{{ path('app_admin_commandes', {'statut': 'REFUSEE'}) }}\" class=\"btn {{ statutActuel == 'REFUSEE' ? 'btn-danger' : 'btn-outline-danger' }}\">Refusées</a>
        </div>
    </div>
</div>

<div class=\"card shadow\">
    <div class=\"card-body p-4\">
        <div class=\"table-responsive\">
            <table class=\"table align-middle\">
                <thead class=\"table-light\">
                    <tr>
                        <th>N° Commande</th>
                        <th>Date</th>
                        <th>Franchise</th>
                        <th>Montant total</th>
                        <th>Statut</th>
                        <th class=\"text-end pe-3\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for commande in commandes %}
                    <tr>
                        <td class=\"fw-bold\">#{{ commande.id }}</td>
                        <td>{{ commande.date_creation|date('d/m/Y H:i') }}</td>
                        <td>
                            {% if commande.franchise_id %}
                                {{ commande.franchise_id.nom }}
                            {% else %}
                                <span class=\"text-muted\">Non assignée</span>
                            {% endif %}
                        </td>
                        <td class=\"fw-bold\">{{ commande.montant_total|number_format(2, ',', ' ') }} DT</td>
                        <td>
                            {% if commande.statut == 'EN_ATTENTE' %}
                                <span class=\"badge bg-warning text-dark\">En attente</span>
                            {% elseif commande.statut == 'VALIDEE' %}
                                <span class=\"badge bg-success\">Validée</span>
                            {% elseif commande.statut == 'REFUSEE' %}
                                <span class=\"badge bg-danger\">Refusée</span>
                            {% endif %}
                        </td>
                        <td class=\"text-end pe-3\">
                            <div class=\"btn-group\" role=\"group\">
                                <a href=\"{{ path('app_admin_commande_detail', {'id': commande.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                                    <i class=\"fas fa-eye me-1\"></i>Détails
                                </a>
                                {% if commande.statut == 'EN_ATTENTE' %}
                                    <a href=\"{{ path('app_admin_commande_valider', {'id': commande.id}) }}\" class=\"btn btn-sm btn-success\" onclick=\"return confirm('Valider cette commande ?')\">
                                        <i class=\"fas fa-check-circle me-1\"></i>Valider
                                    </a>
                                    <a href=\"{{ path('app_admin_commande_refuser', {'id': commande.id}) }}\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Refuser cette commande ?')\">
                                        <i class=\"fas fa-times-circle me-1\"></i>Refuser
                                    </a>
                                {% endif %}
                            </div>
                        </td>
                    </tr>
                    {% else %}
                    <tr>
                        <td colspan=\"6\" class=\"text-center\">Aucune commande trouvée</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}", "admin_commande/index.html.twig", "C:\\Users\\chips\\Documents\\Boussole\\templates\\admin_commande\\index.html.twig");
    }
}
