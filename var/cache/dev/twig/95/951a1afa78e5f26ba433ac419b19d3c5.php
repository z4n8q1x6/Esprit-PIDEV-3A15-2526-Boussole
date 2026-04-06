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

/* mes_commandes/index.html.twig */
class __TwigTemplate_454d0b66be5c315b815cba1add8b1432 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mes_commandes/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mes_commandes/index.html.twig"));

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

        yield "Mes Commandes - Boussole";
        
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
        yield "<section class=\"pt-4 pb-5\">
    <div class=\"container\">
        <div class=\"row mb-4\">
            <div class=\"col-12 text-center\">
                <h1 class=\"display-5 fw-bold\">Mes Commandes</h1>
                <hr class=\"w-25 mx-auto\">
            </div>
        </div>

        <!-- Filtres -->
        <div class=\"row mb-4\">
            <div class=\"col-lg-10 mx-auto\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex gap-2 flex-wrap\">
                            <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_commandes", ["statut" => "tous"]);
        yield "\" class=\"btn ";
        yield ((((isset($context["statutActuel"]) || array_key_exists("statutActuel", $context) ? $context["statutActuel"] : (function () { throw new RuntimeError('Variable "statutActuel" does not exist.', 21, $this->source); })()) == "tous")) ? ("btn-primary") : ("btn-outline-secondary"));
        yield "\">Toutes</a>
                            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_commandes", ["statut" => "EN_ATTENTE"]);
        yield "\" class=\"btn ";
        yield ((((isset($context["statutActuel"]) || array_key_exists("statutActuel", $context) ? $context["statutActuel"] : (function () { throw new RuntimeError('Variable "statutActuel" does not exist.', 22, $this->source); })()) == "EN_ATTENTE")) ? ("btn-warning") : ("btn-outline-warning"));
        yield "\">En attente</a>
                            <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_commandes", ["statut" => "VALIDEE"]);
        yield "\" class=\"btn ";
        yield ((((isset($context["statutActuel"]) || array_key_exists("statutActuel", $context) ? $context["statutActuel"] : (function () { throw new RuntimeError('Variable "statutActuel" does not exist.', 23, $this->source); })()) == "VALIDEE")) ? ("btn-success") : ("btn-outline-success"));
        yield "\">Validées</a>
                            <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_commandes", ["statut" => "REFUSEE"]);
        yield "\" class=\"btn ";
        yield ((((isset($context["statutActuel"]) || array_key_exists("statutActuel", $context) ? $context["statutActuel"] : (function () { throw new RuntimeError('Variable "statutActuel" does not exist.', 24, $this->source); })()) == "REFUSEE")) ? ("btn-danger") : ("btn-outline-danger"));
        yield "\">Refusées</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                ";
        // line 33
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 33, $this->source); })()))) {
            // line 34
            yield "                    <div class=\"text-center py-5\">
                        <i class=\"fas fa-shopping-bag fa-4x text-muted mb-3\"></i>
                        <h4>Aucune commande</h4>
                        <p class=\"text-muted\">Vous n'avez pas encore passé de commande.</p>
                        <a href=\"";
            // line 38
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace");
            yield "\" class=\"btn btn-primary mt-3\">
                            <i class=\"fas fa-shopping-cart me-2\"></i>Commander maintenant
                        </a>
                    </div>
                ";
        } else {
            // line 43
            yield "                    <div class=\"card shadow-sm border-0 rounded-4\">
                        <div class=\"card-body p-0\">
                            <div class=\"table-responsive\">
                                <table class=\"table align-middle mb-0\">
                                    <thead class=\"bg-light\">
                                        <tr>
                                            <th class=\"ps-3\">N° Commande</th>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Statut</th>
                                            <th class=\"text-end pe-3\">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 57, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 58
                yield "                                        <tr>
                                            <td class=\"ps-3 fw-bold\">#";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 59), "html", null, true);
                yield "</td>
                                            <td>";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "date_creation", [], "any", false, false, false, 60), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                                            <td class=\"fw-bold text-primary\">";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "montant_total", [], "any", false, false, false, 61), 2, ",", " "), "html", null, true);
                yield " DT</td>
                                            <td>
                                                ";
                // line 63
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 63) == "EN_ATTENTE")) {
                    // line 64
                    yield "                                                    <span class=\"badge bg-warning text-dark\">En attente</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 65
$context["commande"], "statut", [], "any", false, false, false, 65) == "VALIDEE")) {
                    // line 66
                    yield "                                                    <span class=\"badge bg-success\">Validée</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 67
$context["commande"], "statut", [], "any", false, false, false, 67) == "REFUSEE")) {
                    // line 68
                    yield "                                                    <span class=\"badge bg-danger\">Refusée</span>
                                                ";
                } else {
                    // line 70
                    yield "                                                    <span class=\"badge bg-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 70), "html", null, true);
                    yield "</span>
                                                ";
                }
                // line 72
                yield "                                            </td>
                                            <td class=\"text-end pe-3\">
                                                <a href=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_commandes_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary rounded-pill px-3\">
                                                    <i class=\"fas fa-eye me-1\"></i>Détails
                                                </a>
                                            </td>
                                        </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 86
        yield "            </div>
        </div>
    </div>
</section>
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
        return "mes_commandes/index.html.twig";
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
        return array (  247 => 86,  239 => 80,  227 => 74,  223 => 72,  217 => 70,  213 => 68,  211 => 67,  208 => 66,  206 => 65,  203 => 64,  201 => 63,  196 => 61,  192 => 60,  188 => 59,  185 => 58,  181 => 57,  165 => 43,  157 => 38,  151 => 34,  149 => 33,  135 => 24,  129 => 23,  123 => 22,  117 => 21,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front_base.html.twig' %}

{% block title %}Mes Commandes - Boussole{% endblock %}

{% block body %}
<section class=\"pt-4 pb-5\">
    <div class=\"container\">
        <div class=\"row mb-4\">
            <div class=\"col-12 text-center\">
                <h1 class=\"display-5 fw-bold\">Mes Commandes</h1>
                <hr class=\"w-25 mx-auto\">
            </div>
        </div>

        <!-- Filtres -->
        <div class=\"row mb-4\">
            <div class=\"col-lg-10 mx-auto\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex gap-2 flex-wrap\">
                            <a href=\"{{ path('app_mes_commandes', {'statut': 'tous'}) }}\" class=\"btn {{ statutActuel == 'tous' ? 'btn-primary' : 'btn-outline-secondary' }}\">Toutes</a>
                            <a href=\"{{ path('app_mes_commandes', {'statut': 'EN_ATTENTE'}) }}\" class=\"btn {{ statutActuel == 'EN_ATTENTE' ? 'btn-warning' : 'btn-outline-warning' }}\">En attente</a>
                            <a href=\"{{ path('app_mes_commandes', {'statut': 'VALIDEE'}) }}\" class=\"btn {{ statutActuel == 'VALIDEE' ? 'btn-success' : 'btn-outline-success' }}\">Validées</a>
                            <a href=\"{{ path('app_mes_commandes', {'statut': 'REFUSEE'}) }}\" class=\"btn {{ statutActuel == 'REFUSEE' ? 'btn-danger' : 'btn-outline-danger' }}\">Refusées</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                {% if commandes is empty %}
                    <div class=\"text-center py-5\">
                        <i class=\"fas fa-shopping-bag fa-4x text-muted mb-3\"></i>
                        <h4>Aucune commande</h4>
                        <p class=\"text-muted\">Vous n'avez pas encore passé de commande.</p>
                        <a href=\"{{ path('app_marketplace') }}\" class=\"btn btn-primary mt-3\">
                            <i class=\"fas fa-shopping-cart me-2\"></i>Commander maintenant
                        </a>
                    </div>
                {% else %}
                    <div class=\"card shadow-sm border-0 rounded-4\">
                        <div class=\"card-body p-0\">
                            <div class=\"table-responsive\">
                                <table class=\"table align-middle mb-0\">
                                    <thead class=\"bg-light\">
                                        <tr>
                                            <th class=\"ps-3\">N° Commande</th>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Statut</th>
                                            <th class=\"text-end pe-3\">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for commande in commandes %}
                                        <tr>
                                            <td class=\"ps-3 fw-bold\">#{{ commande.id }}</td>
                                            <td>{{ commande.date_creation|date('d/m/Y H:i') }}</td>
                                            <td class=\"fw-bold text-primary\">{{ commande.montant_total|number_format(2, ',', ' ') }} DT</td>
                                            <td>
                                                {% if commande.statut == 'EN_ATTENTE' %}
                                                    <span class=\"badge bg-warning text-dark\">En attente</span>
                                                {% elseif commande.statut == 'VALIDEE' %}
                                                    <span class=\"badge bg-success\">Validée</span>
                                                {% elseif commande.statut == 'REFUSEE' %}
                                                    <span class=\"badge bg-danger\">Refusée</span>
                                                {% else %}
                                                    <span class=\"badge bg-secondary\">{{ commande.statut }}</span>
                                                {% endif %}
                                            </td>
                                            <td class=\"text-end pe-3\">
                                                <a href=\"{{ path('app_mes_commandes_detail', {'id': commande.id}) }}\" class=\"btn btn-sm btn-outline-primary rounded-pill px-3\">
                                                    <i class=\"fas fa-eye me-1\"></i>Détails
                                                </a>
                                            </td>
                                        </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</section>
{% endblock %}", "mes_commandes/index.html.twig", "C:\\Users\\chips\\Documents\\Boussole\\templates\\mes_commandes\\index.html.twig");
    }
}
