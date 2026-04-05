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
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 28
            yield "                    <tr>
                        <td class=\"fw-bold\">#";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                        <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "date_creation", [], "any", false, false, false, 30), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 32
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "franchise_id", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 33
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "franchise_id", [], "any", false, false, false, 33), "nom", [], "any", false, false, false, 33), "html", null, true);
                yield "
                            ";
            } else {
                // line 35
                yield "                                <span class=\"text-muted\">Non assignée</span>
                            ";
            }
            // line 37
            yield "                        </td>
                        <td class=\"fw-bold\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "montant_total", [], "any", false, false, false, 38), 2, ",", " "), "html", null, true);
            yield " DT</td>
                        <td>
                            ";
            // line 40
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 40) == "EN_ATTENTE")) {
                // line 41
                yield "                                <span class=\"badge bg-warning text-dark\">En attente</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 42
$context["commande"], "statut", [], "any", false, false, false, 42) == "VALIDEE")) {
                // line 43
                yield "                                <span class=\"badge bg-success\">Validée</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 44
$context["commande"], "statut", [], "any", false, false, false, 44) == "REFUSEE")) {
                // line 45
                yield "                                <span class=\"badge bg-danger\">Refusée</span>
                            ";
            }
            // line 47
            yield "                        </td>
                        <td class=\"text-end pe-3\">
                            <div class=\"btn-group\" role=\"group\">
                                <a href=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_commande_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">
                                    <i class=\"fas fa-eye me-1\"></i>Détails
                                </a>
                                ";
            // line 53
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 53) == "EN_ATTENTE")) {
                // line 54
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_commande_valider", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-success\" onclick=\"return confirm('Valider cette commande ?')\">
                                        <i class=\"fas fa-check-circle me-1\"></i>Valider
                                    </a>
                                    <a href=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_commande_refuser", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Refuser cette commande ?')\">
                                        <i class=\"fas fa-times-circle me-1\"></i>Refuser
                                    </a>
                                ";
            }
            // line 61
            yield "                            </div>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 64
        if (!$context['_iterated']) {
            // line 65
            yield "                    <tr>
                        <td colspan=\"6\" class=\"text-center\">Aucune commande trouvée</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
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
        return array (  221 => 69,  212 => 65,  210 => 64,  203 => 61,  196 => 57,  189 => 54,  187 => 53,  181 => 50,  176 => 47,  172 => 45,  170 => 44,  167 => 43,  165 => 42,  162 => 41,  160 => 40,  155 => 38,  152 => 37,  148 => 35,  142 => 33,  140 => 32,  135 => 30,  131 => 29,  128 => 28,  123 => 27,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
