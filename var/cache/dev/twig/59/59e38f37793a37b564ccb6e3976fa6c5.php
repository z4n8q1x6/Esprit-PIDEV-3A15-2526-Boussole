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

/* mes_commandes/detail.html.twig */
class __TwigTemplate_cde1966b6eec764e1cbb87b4c7c6b16f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mes_commandes/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mes_commandes/detail.html.twig"));

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

        yield "Détail Commande #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        yield " - Boussole";
        
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
            <div class=\"col-12\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <h1 class=\"display-5 fw-bold\">Détail Commande #";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        yield "</h1>
                    <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_commandes");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Retour
                    </a>
                </div>
                <hr>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                <div class=\"card shadow-sm border-0 rounded-4\">
                    <div class=\"card-body p-4\">
                        <!-- Informations commande -->
                        <div class=\"row mb-4\">
                            <div class=\"col-md-4\">
                                <div class=\"bg-light p-3 rounded-3\">
                                    <small class=\"text-muted\">Date de commande</small>
                                    <p class=\"fw-bold mb-0\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 29, $this->source); })()), "date_creation", [], "any", false, false, false, 29), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"bg-light p-3 rounded-3\">
                                    <small class=\"text-muted\">Montant total</small>
                                    <p class=\"fw-bold mb-0 text-primary fs-4\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 35, $this->source); })()), "montant_total", [], "any", false, false, false, 35), 2, ",", " "), "html", null, true);
        yield " DT</p>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"bg-light p-3 rounded-3\">
                                    <small class=\"text-muted\">Statut</small>
                                    <p class=\"mb-0\">
                                        ";
        // line 42
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 42, $this->source); })()), "statut", [], "any", false, false, false, 42) == "EN_ATTENTE")) {
            // line 43
            yield "                                            <span class=\"badge bg-warning text-dark fs-6\">En attente</span>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 44
(isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 44, $this->source); })()), "statut", [], "any", false, false, false, 44) == "VALIDEE")) {
            // line 45
            yield "                                            <span class=\"badge bg-success fs-6\">Validée</span>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 46
(isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 46, $this->source); })()), "statut", [], "any", false, false, false, 46) == "REFUSEE")) {
            // line 47
            yield "                                            <span class=\"badge bg-danger fs-6\">Refusée</span>
                                        ";
        } else {
            // line 49
            yield "                                            <span class=\"badge bg-secondary fs-6\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 49, $this->source); })()), "statut", [], "any", false, false, false, 49), "html", null, true);
            yield "</span>
                                        ";
        }
        // line 51
        yield "                                    </p>
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
        // line 70
        $context["total"] = 0;
        // line 71
        yield "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 71, $this->source); })()), "ligne_commandes", [], "any", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 72
            yield "                                    <tr>
                                        <td>
                                            <div class=\"d-flex align-items-center\">
                                                ";
            // line 75
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "produit_id", [], "any", false, false, false, 75), "image", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 76
                yield "                                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "produit_id", [], "any", false, false, false, 76), "image", [], "any", false, false, false, 76)), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "produit_id", [], "any", false, false, false, 76), "nom", [], "any", false, false, false, 76), "html", null, true);
                yield "\" style=\"width: 50px; height: 50px; object-fit: cover;\" class=\"rounded me-3\">
                                                ";
            } else {
                // line 78
                yield "                                                    <div class=\"bg-light rounded d-flex align-items-center justify-content-center me-3\" style=\"width: 50px; height: 50px;\">
                                                        <i class=\"fas fa-box text-secondary\"></i>
                                                    </div>
                                                ";
            }
            // line 82
            yield "                                                <div>
                                                    <h6 class=\"mb-0\">";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "produit_id", [], "any", false, false, false, 83), "nom", [], "any", false, false, false, 83), "html", null, true);
            yield "</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "produit_id", [], "any", false, false, false, 87), "reference", [], "any", false, false, false, 87), "html", null, true);
            yield "</td>
                                        <td>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "prix_unitaire", [], "any", false, false, false, 88), 2, ",", " "), "html", null, true);
            yield " DT</td>
                                        <td>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 89), "html", null, true);
            yield "</td>
                                        <td class=\"fw-bold\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "prix_unitaire", [], "any", false, false, false, 90) * CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 90)), 2, ",", " "), "html", null, true);
            yield " DT</td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ligne'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "                                </tbody>
                                <tfoot class=\"table-light\">
                                    <tr>
                                        <td colspan=\"4\" class=\"text-end fw-bold\">Total :</td>
                                        <td class=\"fw-bold fs-5 text-primary\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 97, $this->source); })()), "montant_total", [], "any", false, false, false, 97), 2, ",", " "), "html", null, true);
        yield " DT</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <!-- Actions -->
                        <div class=\"mt-4 text-end\">
                            <a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace");
        yield "\" class=\"btn btn-primary rounded-pill px-4\">
                                <i class=\"fas fa-shopping-cart me-2\"></i>Nouvelle commande
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
        return "mes_commandes/detail.html.twig";
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
        return array (  271 => 105,  260 => 97,  254 => 93,  245 => 90,  241 => 89,  237 => 88,  233 => 87,  226 => 83,  223 => 82,  217 => 78,  209 => 76,  207 => 75,  202 => 72,  197 => 71,  195 => 70,  174 => 51,  168 => 49,  164 => 47,  162 => 46,  159 => 45,  157 => 44,  154 => 43,  152 => 42,  142 => 35,  133 => 29,  113 => 12,  109 => 11,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front_base.html.twig' %}

{% block title %}Détail Commande #{{ commande.id }} - Boussole{% endblock %}

{% block body %}
<section class=\"pt-4 pb-5\">
    <div class=\"container\">
        <div class=\"row mb-4\">
            <div class=\"col-12\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <h1 class=\"display-5 fw-bold\">Détail Commande #{{ commande.id }}</h1>
                    <a href=\"{{ path('app_mes_commandes') }}\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Retour
                    </a>
                </div>
                <hr>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                <div class=\"card shadow-sm border-0 rounded-4\">
                    <div class=\"card-body p-4\">
                        <!-- Informations commande -->
                        <div class=\"row mb-4\">
                            <div class=\"col-md-4\">
                                <div class=\"bg-light p-3 rounded-3\">
                                    <small class=\"text-muted\">Date de commande</small>
                                    <p class=\"fw-bold mb-0\">{{ commande.date_creation|date('d/m/Y H:i') }}</p>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"bg-light p-3 rounded-3\">
                                    <small class=\"text-muted\">Montant total</small>
                                    <p class=\"fw-bold mb-0 text-primary fs-4\">{{ commande.montant_total|number_format(2, ',', ' ') }} DT</p>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"bg-light p-3 rounded-3\">
                                    <small class=\"text-muted\">Statut</small>
                                    <p class=\"mb-0\">
                                        {% if commande.statut == 'EN_ATTENTE' %}
                                            <span class=\"badge bg-warning text-dark fs-6\">En attente</span>
                                        {% elseif commande.statut == 'VALIDEE' %}
                                            <span class=\"badge bg-success fs-6\">Validée</span>
                                        {% elseif commande.statut == 'REFUSEE' %}
                                            <span class=\"badge bg-danger fs-6\">Refusée</span>
                                        {% else %}
                                            <span class=\"badge bg-secondary fs-6\">{{ commande.statut }}</span>
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
                                    {% set total = 0 %}
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
                        <div class=\"mt-4 text-end\">
                            <a href=\"{{ path('app_marketplace') }}\" class=\"btn btn-primary rounded-pill px-4\">
                                <i class=\"fas fa-shopping-cart me-2\"></i>Nouvelle commande
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}", "mes_commandes/detail.html.twig", "C:\\Users\\chips\\Documents\\Boussole\\templates\\mes_commandes\\detail.html.twig");
    }
}
