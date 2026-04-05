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

/* ajouter_fournisseur/index.html.twig */
class __TwigTemplate_4a74de53d9f261450101f2a1468bfc42 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ajouter_fournisseur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ajouter_fournisseur/index.html.twig"));

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

        yield "Boussole - Ajouter Fournisseur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow border-0\">
                <div class=\"card-header bg-dark text-white py-3\">
                    <h4 class=\"mb-0\">";
        // line 11
        if ((($tmp = ((array_key_exists("is_edit", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 11, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Modifier le Fournisseur";
        } else {
            yield "Ajouter un Fournisseur";
        }
        yield "</h4>
                </div>
                <div class=\"card-body p-4\">
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["success"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            yield "                        <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "
                    ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Nom</label>
                            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <small class=\"text-danger\">";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'errors');
        yield "</small>
                        </div>

                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold\">Matricule Fiscal</label>
                                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "matricule_fiscal", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                <small class=\"text-danger\">";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "matricule_fiscal", [], "any", false, false, false, 29), 'errors');
        yield "</small>
                            </div>
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold\">Téléphone</label>
                                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "telephone", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                <small class=\"text-danger\">";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "telephone", [], "any", false, false, false, 34), 'errors');
        yield "</small>
                            </div>
                        </div>

                        <div class=\"mb-4\">
                            <label class=\"form-label fw-bold\">Franchise</label>
                            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "franchise_id", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        </div>

                        <div class=\"d-grid\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg\">";
        // line 44
        if ((($tmp = ((array_key_exists("is_edit", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 44, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Enregistrer les modifications";
        } else {
            yield "Enregistrer le Fournisseur";
        }
        yield "</button>
                        </div>
                    ";
        // line 46
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
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
        return "ajouter_fournisseur/index.html.twig";
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
        return array (  192 => 46,  183 => 44,  176 => 40,  167 => 34,  163 => 33,  156 => 29,  152 => 28,  143 => 22,  139 => 21,  133 => 18,  130 => 17,  121 => 15,  117 => 14,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front_base.html.twig' %}

{% block title %}Boussole - Ajouter Fournisseur{% endblock %}

{% block content %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow border-0\">
                <div class=\"card-header bg-dark text-white py-3\">
                    <h4 class=\"mb-0\">{% if is_edit|default(false) %}Modifier le Fournisseur{% else %}Ajouter un Fournisseur{% endif %}</h4>
                </div>
                <div class=\"card-body p-4\">
                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success\">{{ message }}</div>
                    {% endfor %}

                    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Nom</label>
                            {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                            <small class=\"text-danger\">{{ form_errors(form.nom) }}</small>
                        </div>

                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold\">Matricule Fiscal</label>
                                {{ form_widget(form.matricule_fiscal, {'attr': {'class': 'form-control'}}) }}
                                <small class=\"text-danger\">{{ form_errors(form.matricule_fiscal) }}</small>
                            </div>
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold\">Téléphone</label>
                                {{ form_widget(form.telephone, {'attr': {'class': 'form-control'}}) }}
                                <small class=\"text-danger\">{{ form_errors(form.telephone) }}</small>
                            </div>
                        </div>

                        <div class=\"mb-4\">
                            <label class=\"form-label fw-bold\">Franchise</label>
                            {{ form_widget(form.franchise_id, {'attr': {'class': 'form-select'}}) }}
                        </div>

                        <div class=\"d-grid\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg\">{% if is_edit|default(false) %}Enregistrer les modifications{% else %}Enregistrer le Fournisseur{% endif %}</button>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "ajouter_fournisseur/index.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\ajouter_fournisseur\\index.html.twig");
    }
}
