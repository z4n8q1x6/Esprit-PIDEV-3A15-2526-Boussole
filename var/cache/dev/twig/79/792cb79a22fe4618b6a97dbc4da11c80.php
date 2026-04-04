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

/* ajouter_charge/index.html.twig */
class __TwigTemplate_824142dd533b4875f0d4d221e33332ab extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ajouter_charge/index.html.twig"));

        $this->parent = $this->load("front_base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Boussole - Ajouter une Charge";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card border rounded-3 mt-4\">
            <div class=\"card-header border-bottom\">
                <h3 class=\"mb-0\"><i class=\"fas fa-file-invoice-dollar me-2\"></i>Nouvelle Charge</h3>
            </div>

            <div class=\"card-body\">
                ";
        // line 15
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["success"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            yield "                    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
                ";
        // line 23
        yield "                ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "vars", [], "any", false, false, false, 23), "valid", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "                    <div class=\"alert alert-danger\">
                        Il y a des erreurs dans votre formulaire. Veuillez vérifier les champs ci-dessous.
                    </div>
                ";
        }
        // line 28
        yield "
                ";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-4", "novalidate" => "novalidate"]]);
        yield "
                    <div class=\"col-12\">
                        <label class=\"form-label\">Titre *</label>
                        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "titre", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Facture Internet"]]);
        yield "
                        <div class=\"text-danger small\">";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "titre", [], "any", false, false, false, 33), 'errors');
        yield "</div>
                    </div>

                    <div class=\"col-md-6\">
                        <label class=\"form-label\">Montant (TND) *</label>
                        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "montant", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"text-danger small\">";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "montant", [], "any", false, false, false, 39), 'errors');
        yield "</div>
                    </div>

                    <div class=\"col-md-6\">
                        <label class=\"form-label\">Date *</label>
                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "date_charge", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"text-danger small\">";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "date_charge", [], "any", false, false, false, 45), 'errors');
        yield "</div>
                    </div>

                    <div class=\"col-md-6\">
                        <label class=\"form-label\">Catégorie</label>
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "type", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        <div class=\"text-danger small\">";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "type", [], "any", false, false, false, 51), 'errors');
        yield "</div>
                    </div>

                    <div class=\"col-md-6\">
                        <label class=\"form-label\">Franchise concernée *</label>
                        ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "franchise_id", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-select js-choice"]]);
        yield "
                        <div class=\"text-danger small\">";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "franchise_id", [], "any", false, false, false, 57), 'errors');
        yield "</div>
                    </div>

                    ";
        // line 61
        yield "                    <div class=\"col-md-12\">
                        <label class=\"form-label\">Statut de Validation *</label>
                        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "status_validation", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        <div class=\"text-danger small\">";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "status_validation", [], "any", false, false, false, 64), 'errors');
        yield "</div>
                    </div>

                    <div class=\"col-12\">
                        <label class=\"form-label\">Justificatif (Image)</label>
                        ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "preuve_image", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"text-danger small\">";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "preuve_image", [], "any", false, false, false, 70), 'errors');
        yield "</div>
                    </div>

                    <div class=\"col-12 d-sm-flex justify-content-end\">
                        <button type=\"submit\" class=\"btn btn-primary mb-0\">Enregistrer la charge</button>
                    </div>
                ";
        // line 76
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "ajouter_charge/index.html.twig";
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
        return array (  221 => 76,  212 => 70,  208 => 69,  200 => 64,  196 => 63,  192 => 61,  186 => 57,  182 => 56,  174 => 51,  170 => 50,  162 => 45,  158 => 44,  150 => 39,  146 => 38,  138 => 33,  134 => 32,  128 => 29,  125 => 28,  119 => 24,  116 => 23,  113 => 21,  103 => 17,  100 => 16,  95 => 15,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front_base.html.twig' %}

{% block title %}Boussole - Ajouter une Charge{% endblock %}

{% block content %}
<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card border rounded-3 mt-4\">
            <div class=\"card-header border-bottom\">
                <h3 class=\"mb-0\"><i class=\"fas fa-file-invoice-dollar me-2\"></i>Nouvelle Charge</h3>
            </div>

            <div class=\"card-body\">
                {# Alertes de succès #}
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                        {{ message }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                {% endfor %}

                {# Alertes d'erreurs globales #}
                {% if not form.vars.valid %}
                    <div class=\"alert alert-danger\">
                        Il y a des erreurs dans votre formulaire. Veuillez vérifier les champs ci-dessous.
                    </div>
                {% endif %}

                {{ form_start(form, {'attr': {'class': 'row g-4', 'novalidate': 'novalidate'}}) }}
                    <div class=\"col-12\">
                        <label class=\"form-label\">Titre *</label>
                        {{ form_widget(form.titre, {'attr': {'class': 'form-control', 'placeholder': 'Ex: Facture Internet'}}) }}
                        <div class=\"text-danger small\">{{ form_errors(form.titre) }}</div>
                    </div>

                    <div class=\"col-md-6\">
                        <label class=\"form-label\">Montant (TND) *</label>
                        {{ form_widget(form.montant, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"text-danger small\">{{ form_errors(form.montant) }}</div>
                    </div>

                    <div class=\"col-md-6\">
                        <label class=\"form-label\">Date *</label>
                        {{ form_widget(form.date_charge, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"text-danger small\">{{ form_errors(form.date_charge) }}</div>
                    </div>

                    <div class=\"col-md-6\">
                        <label class=\"form-label\">Catégorie</label>
                        {{ form_widget(form.type, {'attr': {'class': 'form-select'}}) }}
                        <div class=\"text-danger small\">{{ form_errors(form.type) }}</div>
                    </div>

                    <div class=\"col-md-6\">
                        <label class=\"form-label\">Franchise concernée *</label>
                        {{ form_widget(form.franchise_id, {'attr': {'class': 'form-select js-choice'}}) }}
                        <div class=\"text-danger small\">{{ form_errors(form.franchise_id) }}</div>
                    </div>

                    {# AJOUT DU CHAMP STATUT #}
                    <div class=\"col-md-12\">
                        <label class=\"form-label\">Statut de Validation *</label>
                        {{ form_widget(form.status_validation, {'attr': {'class': 'form-select'}}) }}
                        <div class=\"text-danger small\">{{ form_errors(form.status_validation) }}</div>
                    </div>

                    <div class=\"col-12\">
                        <label class=\"form-label\">Justificatif (Image)</label>
                        {{ form_widget(form.preuve_image, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"text-danger small\">{{ form_errors(form.preuve_image) }}</div>
                    </div>

                    <div class=\"col-12 d-sm-flex justify-content-end\">
                        <button type=\"submit\" class=\"btn btn-primary mb-0\">Enregistrer la charge</button>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>
{% endblock %}", "ajouter_charge/index.html.twig", "C:\\Users\\Wael\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\ajouter_charge\\index.html.twig");
    }
}
