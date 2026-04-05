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

/* produit/edit.html.twig */
class __TwigTemplate_519c21597a9c1fa61375766348b93e09 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/edit.html.twig"));

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

        yield "Modifier Produit";
        
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
            <h1 class=\"h3 mb-2\">Modifier le produit</h1>
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left me-2\"></i>Retour
            </a>
        </div>
    </div>
</div>

<div class=\"card shadow\">
    <div class=\"card-header bg-transparent\">
        <h5 class=\"card-header-title\">Informations produit</h5>
    </div>
    <div class=\"card-body p-4\">
        ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
        yield "
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom"]);
        yield "
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), 'widget');
        yield "
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), 'errors');
        yield "
                </div>
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "reference", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Référence"]);
        yield "
                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "reference", [], "any", false, false, false, 31), 'widget');
        yield "
                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "reference", [], "any", false, false, false, 32), 'errors');
        yield "
                </div>
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "prix_achat", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prix d'achat (DT)"]);
        yield "
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "prix_achat", [], "any", false, false, false, 36), 'widget');
        yield "
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "prix_achat", [], "any", false, false, false, 37), 'errors');
        yield "
                </div>
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "stock_dispo", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Stock disponible"]);
        yield "
                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "stock_dispo", [], "any", false, false, false, 41), 'widget');
        yield "
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "stock_dispo", [], "any", false, false, false, 42), 'errors');
        yield "
                </div>
                <div class=\"col-md-12 mb-3\">
                    ";
        // line 45
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 45, $this->source); })()), "image", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "                        <div class=\"mb-2\">
                            <label class=\"form-label\">Image actuelle</label>
                            <div>
                                <img src=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 49, $this->source); })()), "image", [], "any", false, false, false, 49)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 49, $this->source); })()), "nom", [], "any", false, false, false, 49), "html", null, true);
            yield "\" style=\"width: 100px; height: 100px; object-fit: cover;\" class=\"rounded border\">
                            </div>
                        </div>
                    ";
        }
        // line 53
        yield "                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "imageFile", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Changer d'image (optionnel)"]);
        yield "
                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "imageFile", [], "any", false, false, false, 54), 'widget');
        yield "
                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "imageFile", [], "any", false, false, false, 55), 'errors');
        yield "
                </div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-save me-2\"></i>Modifier
            </button>
        ";
        // line 61
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
        yield "
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
        return "produit/edit.html.twig";
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
        return array (  217 => 61,  208 => 55,  204 => 54,  199 => 53,  190 => 49,  185 => 46,  183 => 45,  177 => 42,  173 => 41,  169 => 40,  163 => 37,  159 => 36,  155 => 35,  149 => 32,  145 => 31,  141 => 30,  135 => 27,  131 => 26,  127 => 25,  121 => 22,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back_base.html.twig' %}

{% block title %}Modifier Produit{% endblock %}

{% block admin_content %}
<div class=\"row\">
    <div class=\"col-12 mb-3\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <h1 class=\"h3 mb-2\">Modifier le produit</h1>
            <a href=\"{{ path('app_produit_index') }}\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left me-2\"></i>Retour
            </a>
        </div>
    </div>
</div>

<div class=\"card shadow\">
    <div class=\"card-header bg-transparent\">
        <h5 class=\"card-header-title\">Informations produit</h5>
    </div>
    <div class=\"card-body p-4\">
        {{ form_start(form) }}
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.nom, 'Nom', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.nom) }}
                    {{ form_errors(form.nom) }}
                </div>
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.reference, 'Référence', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.reference) }}
                    {{ form_errors(form.reference) }}
                </div>
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.prix_achat, 'Prix d\\'achat (DT)', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.prix_achat) }}
                    {{ form_errors(form.prix_achat) }}
                </div>
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.stock_dispo, 'Stock disponible', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.stock_dispo) }}
                    {{ form_errors(form.stock_dispo) }}
                </div>
                <div class=\"col-md-12 mb-3\">
                    {% if produit.image %}
                        <div class=\"mb-2\">
                            <label class=\"form-label\">Image actuelle</label>
                            <div>
                                <img src=\"{{ asset(produit.image) }}\" alt=\"{{ produit.nom }}\" style=\"width: 100px; height: 100px; object-fit: cover;\" class=\"rounded border\">
                            </div>
                        </div>
                    {% endif %}
                    {{ form_label(form.imageFile, 'Changer d\\'image (optionnel)', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.imageFile) }}
                    {{ form_errors(form.imageFile) }}
                </div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-save me-2\"></i>Modifier
            </button>
        {{ form_end(form) }}
    </div>
</div>
{% endblock %}", "produit/edit.html.twig", "C:\\Users\\chips\\Documents\\Boussole\\templates\\produit\\edit.html.twig");
    }
}
