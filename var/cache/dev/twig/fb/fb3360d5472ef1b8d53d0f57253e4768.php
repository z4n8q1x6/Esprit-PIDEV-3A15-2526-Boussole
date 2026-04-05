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

/* reclamation/new.html.twig */
class __TwigTemplate_83d9b6dd7e976979cea6aa4f196de6f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/new.html.twig"));

        $this->parent = $this->load("front_base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Ajouter une Réclamation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card border rounded-3\">
            <div class=\"card-header border-bottom bg-transparent\">
                <h3 class=\"card-header-title mb-0\">Ajouter une Réclamation</h3>
            </div>
            <div class=\"card-body\">
                ";
        // line 12
        yield "                ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-4", "id" => "reclamation-form", "novalidate" => "novalidate"]]);
        yield "
                    <div class=\"col-12\">
                        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "sujet", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Sujet de la réclamation"]);
        yield "
                        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "sujet", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Problème de paiement"]]);
        // line 18
        yield "
                        <div class=\"text-danger small error-message\">
                            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "sujet", [], "any", false, false, false, 20), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"col-12\">
                        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description détaillée"]);
        yield "
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "rows" => 6, "placeholder" => "Décrivez votre problème en détail ici..."]]);
        // line 30
        yield "
                        <div class=\"text-danger small error-message\">
                            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"col-12 d-sm-flex justify-content-between align-items-center\">
                        <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index");
        yield "\" class=\"btn btn-sm btn-light mb-0\">Retour à la liste</a>
                        <button type=\"submit\" class=\"btn btn-primary mb-0\">Envoyer la Réclamation</button>
                    </div>
                ";
        // line 40
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // 1. Target the specific form ID
    const form = document.getElementById('reclamation-form');
    if (!form) return;

    // 2. Select inputs more precisely
    const sujetInput = form.querySelector('[id\$=\"_sujet\"]'); // Ends with _sujet
    const descInput = form.querySelector('[id\$=\"_description\"]'); // Ends with _description

    const validateField = (input, fieldName, minLength) => {
        const value = input.value;
        const trimmedValue = value.trim();

        // Check 1: Empty or only spaces
        if (trimmedValue.length === 0) {
            return setInvalid(input, `\${fieldName} ne peut pas être vide ou contenir uniquement des espaces.`);
        }

        // Check 2: Minimum length (after trimming)
        if (trimmedValue.length < minLength) {
            return setInvalid(input, `\${fieldName} doit contenir au moins \${minLength} caractères.`);
        }

        // Check 3: Starts with a number
        if (/^\\d/.test(trimmedValue)) {
            return setInvalid(input, `\${fieldName} ne peut pas commencer par un chiffre.`);
        }

        // Success
        return setValid(input);
    };

    const setInvalid = (input, message) => {
        input.classList.add('is-invalid');
        const container = input.closest('.col-12');
        const errorDiv = container.querySelector('.error-message');
        if (errorDiv) errorDiv.textContent = message;
        return false;
    };

    const setValid = (input) => {
        input.classList.remove('is-invalid');
        const container = input.closest('.col-12');
        const errorDiv = container.querySelector('.error-message');
        if (errorDiv) errorDiv.textContent = '';
        return true;
    };

    form.addEventListener('submit', (e) => {
        const isSujetValid = validateField(sujetInput, 'Le sujet', 3);
        const isDescValid = validateField(descInput, 'La description', 5);

        if (!isSujetValid || !isDescValid) {
            e.preventDefault(); // Stop submission
            console.log(\"Validation failed - Form blocked.\");
        }
    });

    // Clear errors on typing
    [sujetInput, descInput].forEach(input => {
        input.addEventListener('input', () => setValid(input));
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
        return "reclamation/new.html.twig";
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
        return array (  157 => 40,  151 => 37,  143 => 32,  139 => 30,  137 => 26,  133 => 25,  125 => 20,  121 => 18,  119 => 15,  115 => 14,  109 => 12,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front_base.html.twig' %}
{% block title %}Ajouter une Réclamation{% endblock %}
{% block content %}
<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card border rounded-3\">
            <div class=\"card-header border-bottom bg-transparent\">
                <h3 class=\"card-header-title mb-0\">Ajouter une Réclamation</h3>
            </div>
            <div class=\"card-body\">
                {# Added 'id': 'reclamation-form' #}
                {{ form_start(form, {'attr': {'class': 'row g-4', 'id': 'reclamation-form', 'novalidate': 'novalidate'}}) }}
                    <div class=\"col-12\">
                        {{ form_label(form.sujet, \"Sujet de la réclamation\", {label_attr: {class: 'form-label'}}) }}
                        {{ form_widget(form.sujet, {attr: {
                            class: 'form-control',
                            placeholder: 'Ex: Problème de paiement'
                        }}) }}
                        <div class=\"text-danger small error-message\">
                            {{ form_errors(form.sujet) }}
                        </div>
                    </div>

                    <div class=\"col-12\">
                        {{ form_label(form.description, \"Description détaillée\", {label_attr: {class: 'form-label'}}) }}
                        {{ form_widget(form.description, {attr: {
                            class: 'form-control',
                            rows: 6,
                            placeholder: 'Décrivez votre problème en détail ici...'
                        }}) }}
                        <div class=\"text-danger small error-message\">
                            {{ form_errors(form.description) }}
                        </div>
                    </div>

                    <div class=\"col-12 d-sm-flex justify-content-between align-items-center\">
                        <a href=\"{{ path('reclamation_index') }}\" class=\"btn btn-sm btn-light mb-0\">Retour à la liste</a>
                        <button type=\"submit\" class=\"btn btn-primary mb-0\">Envoyer la Réclamation</button>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // 1. Target the specific form ID
    const form = document.getElementById('reclamation-form');
    if (!form) return;

    // 2. Select inputs more precisely
    const sujetInput = form.querySelector('[id\$=\"_sujet\"]'); // Ends with _sujet
    const descInput = form.querySelector('[id\$=\"_description\"]'); // Ends with _description

    const validateField = (input, fieldName, minLength) => {
        const value = input.value;
        const trimmedValue = value.trim();

        // Check 1: Empty or only spaces
        if (trimmedValue.length === 0) {
            return setInvalid(input, `\${fieldName} ne peut pas être vide ou contenir uniquement des espaces.`);
        }

        // Check 2: Minimum length (after trimming)
        if (trimmedValue.length < minLength) {
            return setInvalid(input, `\${fieldName} doit contenir au moins \${minLength} caractères.`);
        }

        // Check 3: Starts with a number
        if (/^\\d/.test(trimmedValue)) {
            return setInvalid(input, `\${fieldName} ne peut pas commencer par un chiffre.`);
        }

        // Success
        return setValid(input);
    };

    const setInvalid = (input, message) => {
        input.classList.add('is-invalid');
        const container = input.closest('.col-12');
        const errorDiv = container.querySelector('.error-message');
        if (errorDiv) errorDiv.textContent = message;
        return false;
    };

    const setValid = (input) => {
        input.classList.remove('is-invalid');
        const container = input.closest('.col-12');
        const errorDiv = container.querySelector('.error-message');
        if (errorDiv) errorDiv.textContent = '';
        return true;
    };

    form.addEventListener('submit', (e) => {
        const isSujetValid = validateField(sujetInput, 'Le sujet', 3);
        const isDescValid = validateField(descInput, 'La description', 5);

        if (!isSujetValid || !isDescValid) {
            e.preventDefault(); // Stop submission
            console.log(\"Validation failed - Form blocked.\");
        }
    });

    // Clear errors on typing
    [sujetInput, descInput].forEach(input => {
        input.addEventListener('input', () => setValid(input));
    });
});
</script>
{% endblock %}
", "reclamation/new.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\reclamation\\new.html.twig");
    }
}
