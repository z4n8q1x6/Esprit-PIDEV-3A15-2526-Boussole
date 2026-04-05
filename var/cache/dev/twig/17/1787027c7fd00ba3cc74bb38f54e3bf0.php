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

/* marketplace/index.html.twig */
class __TwigTemplate_16d2bda5a2e3195d69cf0c61df5d3eca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/index.html.twig"));

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

        yield "Marketplace - Boussole";
        
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
        <!-- Header -->
        <div class=\"row mb-4\">
            <div class=\"col-12 text-center\">
                <h1 class=\"display-5 fw-bold\">Marketplace</h1>
                <p class=\"lead\">Découvrez notre catalogue de produits</p>
                <hr class=\"w-25 mx-auto\">
            </div>
        </div>

        <!-- Search Bar -->
        <div class=\"row mb-4\">
            <div class=\"col-md-6 mx-auto\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un produit...\" id=\"searchInput\">
                    <button class=\"btn btn-primary\" type=\"button\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class=\"row g-4\" id=\"productsGrid\">
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 32
            yield "            <div class=\"col-md-6 col-lg-4 col-xl-3 product-item\">
                <div class=\"card h-100 shadow-sm border-0 rounded-3\">
                    <!-- Product Image -->
                    <div class=\"position-relative\">
                        ";
            // line 36
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 37
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 37)), "html", null, true);
                yield "\" class=\"card-img-top rounded-top-3\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 37), "html", null, true);
                yield "\" style=\"height: 220px; object-fit: cover;\">
                        ";
            } else {
                // line 39
                yield "                            <div class=\"bg-light d-flex align-items-center justify-content-center rounded-top-3\" style=\"height: 220px;\">
                                <i class=\"fas fa-box fa-4x text-secondary\"></i>
                            </div>
                        ";
            }
            // line 43
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stockDispo", [], "any", false, false, false, 43) <= 0)) {
                // line 44
                yield "                            <span class=\"position-absolute top-0 end-0 badge bg-danger m-2\">Rupture</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 45
$context["produit"], "stockDispo", [], "any", false, false, false, 45) < 10)) {
                // line 46
                yield "                            <span class=\"position-absolute top-0 end-0 badge bg-warning m-2\">Stock faible</span>
                        ";
            } else {
                // line 48
                yield "                            <span class=\"position-absolute top-0 end-0 badge bg-success m-2\">En stock</span>
                        ";
            }
            // line 50
            yield "                    </div>

                    <!-- Product Body -->
                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title fw-bold\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 54), "html", null, true);
            yield "</h5>
                        <p class=\"card-text text-muted small\">Réf: ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "reference", [], "any", false, false, false, 55), "html", null, true);
            yield "</p>
                        <div class=\"d-flex justify-content-center align-items-baseline gap-2 mt-2\">
                            <span class=\"h4 text-primary fw-bold\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prixAchat", [], "any", false, false, false, 57), 2, ",", " "), "html", null, true);
            yield " DT</span>
                        </div>
                    </div>

                    <!-- Product Footer -->
                    <div class=\"card-footer bg-transparent border-0 pb-3\">
                        <a href=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_ajouter", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            yield "\" class=\"btn btn-primary w-100 rounded-pill\"
                            ";
            // line 64
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stockDispo", [], "any", false, false, false, 64) <= 0)) {
                yield "style=\"pointer-events: none; opacity: 0.6;\"";
            }
            yield ">
                            <i class=\"fas fa-shopping-cart me-2\"></i>Ajouter au panier
                        </a>
                    </div>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        // line 70
        if (!$context['_iterated']) {
            // line 71
            yield "            <div class=\"col-12 text-center py-5\">
                <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                <h4>Aucun produit disponible</h4>
                <p class=\"text-muted\">Revenez plus tard pour découvrir nos produits.</p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "        </div>
    </div>
</section>

<script>
document.getElementById('searchInput').addEventListener('keyup', function() {
    let searchText = this.value.toLowerCase();
    let products = document.querySelectorAll('.product-item');
    
    products.forEach(product => {
        let title = product.querySelector('.card-title').innerText.toLowerCase();
        if (title.includes(searchText)) {
            product.style.display = '';
        } else {
            product.style.display = 'none';
        }
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
        return "marketplace/index.html.twig";
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
        return array (  224 => 77,  213 => 71,  211 => 70,  198 => 64,  194 => 63,  185 => 57,  180 => 55,  176 => 54,  170 => 50,  166 => 48,  162 => 46,  160 => 45,  157 => 44,  154 => 43,  148 => 39,  140 => 37,  138 => 36,  132 => 32,  127 => 31,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front_base.html.twig' %}

{% block title %}Marketplace - Boussole{% endblock %}

{% block body %}
<section class=\"pt-4 pb-5\">
    <div class=\"container\">
        <!-- Header -->
        <div class=\"row mb-4\">
            <div class=\"col-12 text-center\">
                <h1 class=\"display-5 fw-bold\">Marketplace</h1>
                <p class=\"lead\">Découvrez notre catalogue de produits</p>
                <hr class=\"w-25 mx-auto\">
            </div>
        </div>

        <!-- Search Bar -->
        <div class=\"row mb-4\">
            <div class=\"col-md-6 mx-auto\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un produit...\" id=\"searchInput\">
                    <button class=\"btn btn-primary\" type=\"button\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class=\"row g-4\" id=\"productsGrid\">
            {% for produit in produits %}
            <div class=\"col-md-6 col-lg-4 col-xl-3 product-item\">
                <div class=\"card h-100 shadow-sm border-0 rounded-3\">
                    <!-- Product Image -->
                    <div class=\"position-relative\">
                        {% if produit.image %}
                            <img src=\"{{ asset(produit.image) }}\" class=\"card-img-top rounded-top-3\" alt=\"{{ produit.nom }}\" style=\"height: 220px; object-fit: cover;\">
                        {% else %}
                            <div class=\"bg-light d-flex align-items-center justify-content-center rounded-top-3\" style=\"height: 220px;\">
                                <i class=\"fas fa-box fa-4x text-secondary\"></i>
                            </div>
                        {% endif %}
                        {% if produit.stockDispo <= 0 %}
                            <span class=\"position-absolute top-0 end-0 badge bg-danger m-2\">Rupture</span>
                        {% elseif produit.stockDispo < 10 %}
                            <span class=\"position-absolute top-0 end-0 badge bg-warning m-2\">Stock faible</span>
                        {% else %}
                            <span class=\"position-absolute top-0 end-0 badge bg-success m-2\">En stock</span>
                        {% endif %}
                    </div>

                    <!-- Product Body -->
                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title fw-bold\">{{ produit.nom }}</h5>
                        <p class=\"card-text text-muted small\">Réf: {{ produit.reference }}</p>
                        <div class=\"d-flex justify-content-center align-items-baseline gap-2 mt-2\">
                            <span class=\"h4 text-primary fw-bold\">{{ produit.prixAchat|number_format(2, ',', ' ') }} DT</span>
                        </div>
                    </div>

                    <!-- Product Footer -->
                    <div class=\"card-footer bg-transparent border-0 pb-3\">
                        <a href=\"{{ path('app_panier_ajouter', {'id': produit.id}) }}\" class=\"btn btn-primary w-100 rounded-pill\"
                            {% if produit.stockDispo <= 0 %}style=\"pointer-events: none; opacity: 0.6;\"{% endif %}>
                            <i class=\"fas fa-shopping-cart me-2\"></i>Ajouter au panier
                        </a>
                    </div>
                </div>
            </div>
            {% else %}
            <div class=\"col-12 text-center py-5\">
                <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                <h4>Aucun produit disponible</h4>
                <p class=\"text-muted\">Revenez plus tard pour découvrir nos produits.</p>
            </div>
            {% endfor %}
        </div>
    </div>
</section>

<script>
document.getElementById('searchInput').addEventListener('keyup', function() {
    let searchText = this.value.toLowerCase();
    let products = document.querySelectorAll('.product-item');
    
    products.forEach(product => {
        let title = product.querySelector('.card-title').innerText.toLowerCase();
        if (title.includes(searchText)) {
            product.style.display = '';
        } else {
            product.style.display = 'none';
        }
    });
});
</script>
{% endblock %}", "marketplace/index.html.twig", "C:\\Users\\chips\\Documents\\Boussole\\templates\\marketplace\\index.html.twig");
    }
}
