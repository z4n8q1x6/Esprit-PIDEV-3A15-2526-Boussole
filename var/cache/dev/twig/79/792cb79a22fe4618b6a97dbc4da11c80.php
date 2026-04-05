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

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Boussole - ";
        yield (((($tmp = (isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Ajouter"));
        yield " une Charge";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        yield "<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card border rounded-3 mt-4\">
            <div class=\"card-header border-bottom\">
                <h3 class=\"mb-0\"><i class=\"fas fa-file-invoice-dollar me-2\"></i>";
        // line 9
        yield (((($tmp = (isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 9, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier la Charge") : ("Nouvelle Charge"));
        yield "</h3>
            </div>

            <div class=\"card-body\">
                ";
        // line 14
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["success"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            yield "                    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
                ";
        // line 22
        yield "                ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "vars", [], "any", false, false, false, 22), "valid", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "                    <div class=\"alert alert-danger\">
                        Il y a des erreurs dans votre formulaire. Veuillez vérifier les champs ci-dessous.
                    </div>
                ";
        }
        // line 27
        yield "
                ";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-4", "novalidate" => "novalidate"]]);
        yield "
                    <div class=\"col-12\">
                        <label class=\"form-label\">Titre *</label>
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "titre", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Facture Internet"]]);
        yield "
                        <div class=\"text-danger small\">";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "titre", [], "any", false, false, false, 32), 'errors');
        yield "</div>
                    </div>

                    <div class=\"col-md-6\">
                        <label class=\"form-label\">Montant (TND) *</label>
                        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "montant", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"text-danger small\">";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "montant", [], "any", false, false, false, 38), 'errors');
        yield "</div>
                    </div>

                    <div class=\"col-md-6\">
                        <label class=\"form-label\">Date *</label>
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "date_charge", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"text-danger small\">";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "date_charge", [], "any", false, false, false, 44), 'errors');
        yield "</div>
                    </div>

                    <div class=\"col-md-6\">
                        <label class=\"form-label\">Catégorie</label>
                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "type", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        <div class=\"text-danger small\">";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "type", [], "any", false, false, false, 50), 'errors');
        yield "</div>
                    </div>

                    <div class=\"col-md-6\">
                        <label class=\"form-label\">Franchise concernée *</label>
                        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "franchise_id", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-select js-choice"]]);
        yield "
                        <div class=\"text-danger small\">";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "franchise_id", [], "any", false, false, false, 56), 'errors');
        yield "</div>
                    </div>

                    ";
        // line 60
        yield "                    <div class=\"col-md-12\">
                        <label class=\"form-label\">Statut de Validation *</label>
                        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "status_validation", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        <div class=\"text-danger small\">";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "status_validation", [], "any", false, false, false, 63), 'errors');
        yield "</div>
                    </div>

                    <div class=\"col-12\">
                        <label class=\"form-label\">Justificatif (Image)</label>
                        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "preuve_image", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"text-danger small\">";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "preuve_image", [], "any", false, false, false, 69), 'errors');
        yield "</div>
                    </div>

                    <div class=\"col-12 d-sm-flex justify-content-between\">
                        <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficher_front_charge");
        yield "\" class=\"btn btn-light mb-0\">Retour à la liste</a>
                        <button type=\"submit\" class=\"btn btn-primary mb-0\">";
        // line 74
        yield (((($tmp = (isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 74, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Enregistrer les modifications") : ("Enregistrer la charge"));
        yield "</button>
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
        return array (  233 => 76,  228 => 74,  224 => 73,  217 => 69,  213 => 68,  205 => 63,  201 => 62,  197 => 60,  191 => 56,  187 => 55,  179 => 50,  175 => 49,  167 => 44,  163 => 43,  155 => 38,  151 => 37,  143 => 32,  139 => 31,  133 => 28,  130 => 27,  124 => 23,  121 => 22,  118 => 20,  108 => 16,  105 => 15,  100 => 14,  93 => 9,  87 => 5,  77 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front_base.html.twig' %}
{% block title %}Boussole - {{ is_edit ? 'Modifier' : 'Ajouter' }} une Charge{% endblock %}

{% block content %}
<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card border rounded-3 mt-4\">
            <div class=\"card-header border-bottom\">
                <h3 class=\"mb-0\"><i class=\"fas fa-file-invoice-dollar me-2\"></i>{{ is_edit ? 'Modifier la Charge' : 'Nouvelle Charge' }}</h3>
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

                    <div class=\"col-12 d-sm-flex justify-content-between\">
                        <a href=\"{{ path('app_afficher_front_charge') }}\" class=\"btn btn-light mb-0\">Retour à la liste</a>
                        <button type=\"submit\" class=\"btn btn-primary mb-0\">{{ is_edit ? 'Enregistrer les modifications' : 'Enregistrer la charge' }}</button>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>
{% endblock %}", "ajouter_charge/index.html.twig", "C:\\Users\\Wael\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\ajouter_charge\\index.html.twig");
    }
}
