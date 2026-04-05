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

/* panier/index.html.twig */
class __TwigTemplate_43aa418a2671dada12947871efe3aef7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

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

        yield "Mon Panier - Boussole";
        
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
                <h1 class=\"display-5 fw-bold\">Mon Panier</h1>
                <hr class=\"w-25 mx-auto\">
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                ";
        // line 17
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 17, $this->source); })()))) {
            // line 18
            yield "                    <div class=\"text-center py-5\">
                        <i class=\"fas fa-shopping-cart fa-4x text-muted mb-3\"></i>
                        <h4>Votre panier est vide</h4>
                        <a href=\"";
            // line 21
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace");
            yield "\" class=\"btn btn-primary mt-3\">
                            <i class=\"fas fa-shopping-bag me-2\"></i>Découvrir nos produits
                        </a>
                    </div>
                ";
        } else {
            // line 26
            yield "                    <div class=\"card shadow-sm border-0 rounded-4\">
                        <div class=\"card-body p-0\">
                            <div class=\"table-responsive\">
                                <table class=\"table align-middle mb-0\">
                                    <thead class=\"bg-light\">
                                        <tr>
                                            <th class=\"ps-3\">Produit</th>
                                            <th>Prix unitaire</th>
                                            <th>Quantité</th>
                                            <th>Total</th>
                                            <th class=\"text-end pe-3\"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 41
                yield "                                        <tr>
                                            <td class=\"ps-3\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"flex-shrink-0\">
                                                        ";
                // line 45
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 45), "image", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 46
                    yield "                                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 46), "image", [], "any", false, false, false, 46)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 46), "nom", [], "any", false, false, false, 46), "html", null, true);
                    yield "\" style=\"width: 60px; height: 60px; object-fit: cover;\" class=\"rounded\">
                                                        ";
                } else {
                    // line 48
                    yield "                                                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 60px; height: 60px;\">
                                                                <i class=\"fas fa-box fa-2x text-secondary\"></i>
                                                            </div>
                                                        ";
                }
                // line 52
                yield "                                                    </div>
                                                    <div class=\"flex-grow-1 ms-3\">
                                                        <h6 class=\"mb-0 fw-bold\">";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 54), "nom", [], "any", false, false, false, 54), "html", null, true);
                yield "</h6>
                                                        <small class=\"text-muted\">Réf: ";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 55), "reference", [], "any", false, false, false, 55), "html", null, true);
                yield "</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 59), "prixAchat", [], "any", false, false, false, 59), 2, ",", " "), "html", null, true);
                yield " DT</td>
                                            <td>
                                                <div class=\"d-flex align-items-center gap-2\">
                                                    <button class=\"btn btn-sm btn-outline-secondary rounded-circle\" onclick=\"updateQuantity(";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62), "html", null, true);
                yield ", -1)\" style=\"width: 30px; height: 30px;\">
                                                        <i class=\"fas fa-minus fa-xs\"></i>
                                                    </button>
                                                    <span id=\"qty-";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65), "html", null, true);
                yield "\" class=\"fw-bold text-center\" style=\"width: 40px;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 65), "html", null, true);
                yield "</span>
                                                    <button class=\"btn btn-sm btn-outline-secondary rounded-circle\" onclick=\"updateQuantity(";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
                yield ", 1)\" style=\"width: 30px; height: 30px;\">
                                                        <i class=\"fas fa-plus fa-xs\"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td id=\"sous-total-";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71), "html", null, true);
                yield "\" class=\"fw-bold text-primary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "sousTotal", [], "any", false, false, false, 71), 2, ",", " "), "html", null, true);
                yield " DT</td>
                                            <td class=\"text-end pe-3\">
                                                <a href=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-danger rounded-circle\" style=\"width: 32px; height: 32px;\">
                                                    <i class=\"fas fa-trash fa-xs\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "                                    </tbody>
                                    <tfoot class=\"bg-light\">
                                        <tr>
                                            <td colspan=\"3\" class=\"text-end fw-bold ps-3\">Total :</td>
                                            <td id=\"total-panier\" class=\"fw-bold fs-5 text-primary\">";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 83, $this->source); })()), 2, ",", " "), "html", null, true);
            yield " DT</td>
                                            <td class=\"pe-3\"></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class=\"card-footer bg-white border-0 py-3 d-flex justify-content-between\">
                            <a href=\"";
            // line 91
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace");
            yield "\" class=\"btn btn-outline-secondary rounded-pill px-4\">
                                <i class=\"fas fa-arrow-left me-2\"></i>Continuer
                            </a>
                            <div>
                                <a href=\"";
            // line 95
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_vider");
            yield "\" class=\"btn btn-outline-danger rounded-pill px-4 me-2\">
                                    <i class=\"fas fa-trash-alt me-2\"></i>Vider
                                </a>
                                <a href=\"";
            // line 98
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_valider");
            yield "\" class=\"btn btn-success rounded-pill px-4\">
                                    <i class=\"fas fa-check-circle me-2\"></i>Valider
                                </a>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 105
        yield "            </div>
        </div>
    </div>
</section>

<script>
function updateQuantity(productId, change) {
    let quantitySpan = document.getElementById('qty-' + productId);
    let currentQty = parseInt(quantitySpan.innerText);
    let newQty = currentQty + change;
    
    if (newQty < 1) {
        newQty = 1;
    }
    
    fetch('/panier/modifier-ajax/' + productId + '/' + newQty, {
        method: 'POST',
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            quantitySpan.innerText = newQty;
            document.getElementById('sous-total-' + productId).innerText = data.sousTotal + ' DT';
            document.getElementById('total-panier').innerText = data.total + ' DT';
        } else {
            alert(data.message);
        }
    });
}
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
        return "panier/index.html.twig";
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
        return array (  270 => 105,  260 => 98,  254 => 95,  247 => 91,  236 => 83,  230 => 79,  218 => 73,  211 => 71,  203 => 66,  197 => 65,  191 => 62,  185 => 59,  178 => 55,  174 => 54,  170 => 52,  164 => 48,  156 => 46,  154 => 45,  148 => 41,  144 => 40,  128 => 26,  120 => 21,  115 => 18,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front_base.html.twig' %}

{% block title %}Mon Panier - Boussole{% endblock %}

{% block body %}
<section class=\"pt-4 pb-5\">
    <div class=\"container\">
        <div class=\"row mb-4\">
            <div class=\"col-12 text-center\">
                <h1 class=\"display-5 fw-bold\">Mon Panier</h1>
                <hr class=\"w-25 mx-auto\">
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                {% if details is empty %}
                    <div class=\"text-center py-5\">
                        <i class=\"fas fa-shopping-cart fa-4x text-muted mb-3\"></i>
                        <h4>Votre panier est vide</h4>
                        <a href=\"{{ path('app_marketplace') }}\" class=\"btn btn-primary mt-3\">
                            <i class=\"fas fa-shopping-bag me-2\"></i>Découvrir nos produits
                        </a>
                    </div>
                {% else %}
                    <div class=\"card shadow-sm border-0 rounded-4\">
                        <div class=\"card-body p-0\">
                            <div class=\"table-responsive\">
                                <table class=\"table align-middle mb-0\">
                                    <thead class=\"bg-light\">
                                        <tr>
                                            <th class=\"ps-3\">Produit</th>
                                            <th>Prix unitaire</th>
                                            <th>Quantité</th>
                                            <th>Total</th>
                                            <th class=\"text-end pe-3\"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for item in details %}
                                        <tr>
                                            <td class=\"ps-3\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"flex-shrink-0\">
                                                        {% if item.produit.image %}
                                                            <img src=\"{{ asset(item.produit.image) }}\" alt=\"{{ item.produit.nom }}\" style=\"width: 60px; height: 60px; object-fit: cover;\" class=\"rounded\">
                                                        {% else %}
                                                            <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 60px; height: 60px;\">
                                                                <i class=\"fas fa-box fa-2x text-secondary\"></i>
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                    <div class=\"flex-grow-1 ms-3\">
                                                        <h6 class=\"mb-0 fw-bold\">{{ item.produit.nom }}</h6>
                                                        <small class=\"text-muted\">Réf: {{ item.produit.reference }}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ item.produit.prixAchat|number_format(2, ',', ' ') }} DT</td>
                                            <td>
                                                <div class=\"d-flex align-items-center gap-2\">
                                                    <button class=\"btn btn-sm btn-outline-secondary rounded-circle\" onclick=\"updateQuantity({{ item.produit.id }}, -1)\" style=\"width: 30px; height: 30px;\">
                                                        <i class=\"fas fa-minus fa-xs\"></i>
                                                    </button>
                                                    <span id=\"qty-{{ item.produit.id }}\" class=\"fw-bold text-center\" style=\"width: 40px;\">{{ item.quantite }}</span>
                                                    <button class=\"btn btn-sm btn-outline-secondary rounded-circle\" onclick=\"updateQuantity({{ item.produit.id }}, 1)\" style=\"width: 30px; height: 30px;\">
                                                        <i class=\"fas fa-plus fa-xs\"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td id=\"sous-total-{{ item.produit.id }}\" class=\"fw-bold text-primary\">{{ item.sousTotal|number_format(2, ',', ' ') }} DT</td>
                                            <td class=\"text-end pe-3\">
                                                <a href=\"{{ path('app_panier_supprimer', {'id': item.produit.id}) }}\" class=\"btn btn-sm btn-danger rounded-circle\" style=\"width: 32px; height: 32px;\">
                                                    <i class=\"fas fa-trash fa-xs\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        {% endfor %}
                                    </tbody>
                                    <tfoot class=\"bg-light\">
                                        <tr>
                                            <td colspan=\"3\" class=\"text-end fw-bold ps-3\">Total :</td>
                                            <td id=\"total-panier\" class=\"fw-bold fs-5 text-primary\">{{ total|number_format(2, ',', ' ') }} DT</td>
                                            <td class=\"pe-3\"></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class=\"card-footer bg-white border-0 py-3 d-flex justify-content-between\">
                            <a href=\"{{ path('app_marketplace') }}\" class=\"btn btn-outline-secondary rounded-pill px-4\">
                                <i class=\"fas fa-arrow-left me-2\"></i>Continuer
                            </a>
                            <div>
                                <a href=\"{{ path('app_panier_vider') }}\" class=\"btn btn-outline-danger rounded-pill px-4 me-2\">
                                    <i class=\"fas fa-trash-alt me-2\"></i>Vider
                                </a>
                                <a href=\"{{ path('app_panier_valider') }}\" class=\"btn btn-success rounded-pill px-4\">
                                    <i class=\"fas fa-check-circle me-2\"></i>Valider
                                </a>
                            </div>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</section>

<script>
function updateQuantity(productId, change) {
    let quantitySpan = document.getElementById('qty-' + productId);
    let currentQty = parseInt(quantitySpan.innerText);
    let newQty = currentQty + change;
    
    if (newQty < 1) {
        newQty = 1;
    }
    
    fetch('/panier/modifier-ajax/' + productId + '/' + newQty, {
        method: 'POST',
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            quantitySpan.innerText = newQty;
            document.getElementById('sous-total-' + productId).innerText = data.sousTotal + ' DT';
            document.getElementById('total-panier').innerText = data.total + ' DT';
        } else {
            alert(data.message);
        }
    });
}
</script>
{% endblock %}", "panier/index.html.twig", "C:\\Users\\chips\\Documents\\Boussole\\templates\\panier\\index.html.twig");
    }
}
