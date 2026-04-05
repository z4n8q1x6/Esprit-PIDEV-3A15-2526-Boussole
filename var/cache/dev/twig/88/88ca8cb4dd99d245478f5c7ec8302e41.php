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

/* admin_commande/detail.html.twig */
class __TwigTemplate_dbd1a79598713b0c68e1d726804d53b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_commande/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_commande/detail.html.twig"));

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

        yield "Détail Commande #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
        <div class=\"d-flex justify-content-between align-items-center\">
            <h1 class=\"h3 mb-2\">Détail Commande #";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_commandes");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left me-2\"></i>Retour
            </a>
        </div>
    </div>
</div>

<div class=\"card shadow\">
    <div class=\"card-body p-4\">
        <!-- Informations commande -->
        <div class=\"row mb-4\">
            <div class=\"col-md-3\">
                <div class=\"bg-light p-3 rounded-3\">
                    <small class=\"text-muted\">Date de commande</small>
                    <p class=\"fw-bold mb-0\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 24, $this->source); })()), "date_creation", [], "any", false, false, false, 24), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"bg-light p-3 rounded-3\">
                    <small class=\"text-muted\">Franchise</small>
                    <p class=\"fw-bold mb-0\">
                        ";
        // line 31
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 31, $this->source); })()), "franchise_id", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 32, $this->source); })()), "franchise_id", [], "any", false, false, false, 32), "nom", [], "any", false, false, false, 32), "html", null, true);
            yield "
                        ";
        } else {
            // line 34
            yield "                            Non assignée
                        ";
        }
        // line 36
        yield "                    </p>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"bg-light p-3 rounded-3\">
                    <small class=\"text-muted\">Montant total</small>
                    <p class=\"fw-bold mb-0 text-primary fs-4\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 42, $this->source); })()), "montant_total", [], "any", false, false, false, 42), 2, ",", " "), "html", null, true);
        yield " DT</p>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"bg-light p-3 rounded-3\">
                    <small class=\"text-muted\">Statut</small>
                    <p class=\"mb-0\">
                        ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 49, $this->source); })()), "statut", [], "any", false, false, false, 49) == "EN_ATTENTE")) {
            // line 50
            yield "                            <span class=\"badge bg-warning text-dark fs-6\">En attente</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 51
(isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 51, $this->source); })()), "statut", [], "any", false, false, false, 51) == "VALIDEE")) {
            // line 52
            yield "                            <span class=\"badge bg-success fs-6\">Validée</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 53
(isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 53, $this->source); })()), "statut", [], "any", false, false, false, 53) == "REFUSEE")) {
            // line 54
            yield "                            <span class=\"badge bg-danger fs-6\">Refusée</span>
                        ";
        }
        // line 56
        yield "                    </p>
                </div>
            </div>
        </div>

        <!-- Liste des produits -->
        <h5 class=\"mb-3\">Produits commandés</h5>
        <div class=\"table-responsive\">
            <table class=\"table align-middle\">
                <thead class=\"table-light\">
                    <tr>
                        <th>Produit</th>
                        <th>Référence</th>
                        <th>Prix unitaire</th>
                        <th>Quantité</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 75, $this->source); })()), "ligne_commandes", [], "any", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 76
            yield "                    <tr>
                        <td>
                            <div class=\"d-flex align-items-center\">
                                ";
            // line 79
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "produit_id", [], "any", false, false, false, 79), "image", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 80
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "produit_id", [], "any", false, false, false, 80), "image", [], "any", false, false, false, 80)), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "produit_id", [], "any", false, false, false, 80), "nom", [], "any", false, false, false, 80), "html", null, true);
                yield "\" style=\"width: 50px; height: 50px; object-fit: cover;\" class=\"rounded me-3\">
                                ";
            } else {
                // line 82
                yield "                                    <div class=\"bg-light rounded d-flex align-items-center justify-content-center me-3\" style=\"width: 50px; height: 50px;\">
                                        <i class=\"fas fa-box text-secondary\"></i>
                                    </div>
                                ";
            }
            // line 86
            yield "                                <div>
                                    <h6 class=\"mb-0\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "produit_id", [], "any", false, false, false, 87), "nom", [], "any", false, false, false, 87), "html", null, true);
            yield "</h6>
                                </div>
                            </div>
                        </td>
                        <td>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "produit_id", [], "any", false, false, false, 91), "reference", [], "any", false, false, false, 91), "html", null, true);
            yield "</td>
                        <td>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "prix_unitaire", [], "any", false, false, false, 92), 2, ",", " "), "html", null, true);
            yield " DT</td>
                        <td>";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 93), "html", null, true);
            yield "</td>
                        <td class=\"fw-bold\">";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "prix_unitaire", [], "any", false, false, false, 94) * CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 94)), 2, ",", " "), "html", null, true);
            yield " DT</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ligne'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "                </tbody>
                <tfoot class=\"table-light\">
                    <tr>
                        <td colspan=\"4\" class=\"text-end fw-bold\">Total :</td>
                        <td class=\"fw-bold fs-5 text-primary\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 101, $this->source); })()), "montant_total", [], "any", false, false, false, 101), 2, ",", " "), "html", null, true);
        yield " DT</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Actions -->
        <div class=\"mt-4\">
            ";
        // line 109
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 109, $this->source); })()), "statut", [], "any", false, false, false, 109) == "EN_ATTENTE")) {
            // line 110
            yield "                <div class=\"btn-group\">
                    <a href=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_commande_valider", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 111, $this->source); })()), "id", [], "any", false, false, false, 111)]), "html", null, true);
            yield "\" class=\"btn btn-success\" onclick=\"return confirm('Valider cette commande ?')\">
                        <i class=\"fas fa-check-circle me-2\"></i>Valider la commande
                    </a>
                    <a href=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_commande_refuser", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 114, $this->source); })()), "id", [], "any", false, false, false, 114)]), "html", null, true);
            yield "\" class=\"btn btn-danger\" onclick=\"return confirm('Refuser cette commande ?')\">
                        <i class=\"fas fa-times-circle me-2\"></i>Refuser la commande
                    </a>
                </div>
            ";
        }
        // line 119
        yield "        </div>
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
        return "admin_commande/detail.html.twig";
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
        return array (  296 => 119,  288 => 114,  282 => 111,  279 => 110,  277 => 109,  266 => 101,  260 => 97,  251 => 94,  247 => 93,  243 => 92,  239 => 91,  232 => 87,  229 => 86,  223 => 82,  215 => 80,  213 => 79,  208 => 76,  204 => 75,  183 => 56,  179 => 54,  177 => 53,  174 => 52,  172 => 51,  169 => 50,  167 => 49,  157 => 42,  149 => 36,  145 => 34,  139 => 32,  137 => 31,  127 => 24,  110 => 10,  106 => 9,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back_base.html.twig' %}

{% block title %}Détail Commande #{{ commande.id }}{% endblock %}

{% block admin_content %}
<div class=\"row\">
    <div class=\"col-12 mb-3\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <h1 class=\"h3 mb-2\">Détail Commande #{{ commande.id }}</h1>
            <a href=\"{{ path('app_admin_commandes') }}\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left me-2\"></i>Retour
            </a>
        </div>
    </div>
</div>

<div class=\"card shadow\">
    <div class=\"card-body p-4\">
        <!-- Informations commande -->
        <div class=\"row mb-4\">
            <div class=\"col-md-3\">
                <div class=\"bg-light p-3 rounded-3\">
                    <small class=\"text-muted\">Date de commande</small>
                    <p class=\"fw-bold mb-0\">{{ commande.date_creation|date('d/m/Y H:i') }}</p>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"bg-light p-3 rounded-3\">
                    <small class=\"text-muted\">Franchise</small>
                    <p class=\"fw-bold mb-0\">
                        {% if commande.franchise_id %}
                            {{ commande.franchise_id.nom }}
                        {% else %}
                            Non assignée
                        {% endif %}
                    </p>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"bg-light p-3 rounded-3\">
                    <small class=\"text-muted\">Montant total</small>
                    <p class=\"fw-bold mb-0 text-primary fs-4\">{{ commande.montant_total|number_format(2, ',', ' ') }} DT</p>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"bg-light p-3 rounded-3\">
                    <small class=\"text-muted\">Statut</small>
                    <p class=\"mb-0\">
                        {% if commande.statut == 'EN_ATTENTE' %}
                            <span class=\"badge bg-warning text-dark fs-6\">En attente</span>
                        {% elseif commande.statut == 'VALIDEE' %}
                            <span class=\"badge bg-success fs-6\">Validée</span>
                        {% elseif commande.statut == 'REFUSEE' %}
                            <span class=\"badge bg-danger fs-6\">Refusée</span>
                        {% endif %}
                    </p>
                </div>
            </div>
        </div>

        <!-- Liste des produits -->
        <h5 class=\"mb-3\">Produits commandés</h5>
        <div class=\"table-responsive\">
            <table class=\"table align-middle\">
                <thead class=\"table-light\">
                    <tr>
                        <th>Produit</th>
                        <th>Référence</th>
                        <th>Prix unitaire</th>
                        <th>Quantité</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    {% for ligne in commande.ligne_commandes %}
                    <tr>
                        <td>
                            <div class=\"d-flex align-items-center\">
                                {% if ligne.produit_id.image %}
                                    <img src=\"{{ asset(ligne.produit_id.image) }}\" alt=\"{{ ligne.produit_id.nom }}\" style=\"width: 50px; height: 50px; object-fit: cover;\" class=\"rounded me-3\">
                                {% else %}
                                    <div class=\"bg-light rounded d-flex align-items-center justify-content-center me-3\" style=\"width: 50px; height: 50px;\">
                                        <i class=\"fas fa-box text-secondary\"></i>
                                    </div>
                                {% endif %}
                                <div>
                                    <h6 class=\"mb-0\">{{ ligne.produit_id.nom }}</h6>
                                </div>
                            </div>
                        </td>
                        <td>{{ ligne.produit_id.reference }}</td>
                        <td>{{ ligne.prix_unitaire|number_format(2, ',', ' ') }} DT</td>
                        <td>{{ ligne.quantite }}</td>
                        <td class=\"fw-bold\">{{ (ligne.prix_unitaire * ligne.quantite)|number_format(2, ',', ' ') }} DT</td>
                    </tr>
                    {% endfor %}
                </tbody>
                <tfoot class=\"table-light\">
                    <tr>
                        <td colspan=\"4\" class=\"text-end fw-bold\">Total :</td>
                        <td class=\"fw-bold fs-5 text-primary\">{{ commande.montant_total|number_format(2, ',', ' ') }} DT</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Actions -->
        <div class=\"mt-4\">
            {% if commande.statut == 'EN_ATTENTE' %}
                <div class=\"btn-group\">
                    <a href=\"{{ path('app_admin_commande_valider', {'id': commande.id}) }}\" class=\"btn btn-success\" onclick=\"return confirm('Valider cette commande ?')\">
                        <i class=\"fas fa-check-circle me-2\"></i>Valider la commande
                    </a>
                    <a href=\"{{ path('app_admin_commande_refuser', {'id': commande.id}) }}\" class=\"btn btn-danger\" onclick=\"return confirm('Refuser cette commande ?')\">
                        <i class=\"fas fa-times-circle me-2\"></i>Refuser la commande
                    </a>
                </div>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}", "admin_commande/detail.html.twig", "C:\\Users\\chips\\Documents\\Boussole\\templates\\admin_commande\\detail.html.twig");
    }
}
