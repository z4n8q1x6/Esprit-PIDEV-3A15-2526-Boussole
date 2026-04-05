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

/* admin_dashboard/index.html.twig */
class __TwigTemplate_260e85f2f60e50918a01035a4e443c59 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_dashboard/index.html.twig"));

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

        yield "Dashboard Admin";
        
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
        <h1 class=\"h3 mb-2\">Dashboard Administrateur</h1>
    </div>
</div>

<div class=\"row g-4 mb-4\">
    <div class=\"col-md-3\">
        <div class=\"card card-body bg-primary bg-opacity-10 p-4\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div>
                    <h2 class=\"mb-0 fw-bold\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nbUtilisateurs"]) || array_key_exists("nbUtilisateurs", $context) ? $context["nbUtilisateurs"] : (function () { throw new RuntimeError('Variable "nbUtilisateurs" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "</h2>
                    <span>Utilisateurs</span>
                </div>
                <i class=\"fas fa-users fa-2x text-primary\"></i>
            </div>
        </div>
    </div>

    <div class=\"col-md-3\">
        <div class=\"card card-body bg-success bg-opacity-10 p-4\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div>
                    <h2 class=\"mb-0 fw-bold\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nbFranchises"]) || array_key_exists("nbFranchises", $context) ? $context["nbFranchises"] : (function () { throw new RuntimeError('Variable "nbFranchises" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "</h2>
                    <span>Franchises</span>
                </div>
                <i class=\"fas fa-store fa-2x text-success\"></i>
            </div>
        </div>
    </div>

    <div class=\"col-md-3\">
        <div class=\"card card-body bg-warning bg-opacity-10 p-4\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div>
                    <h2 class=\"mb-0 fw-bold\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nbProduits"]) || array_key_exists("nbProduits", $context) ? $context["nbProduits"] : (function () { throw new RuntimeError('Variable "nbProduits" does not exist.', 41, $this->source); })()), "html", null, true);
        yield "</h2>
                    <span>Produits</span>
                </div>
                <i class=\"fas fa-box fa-2x text-warning\"></i>
            </div>
        </div>
    </div>

    <div class=\"col-md-3\">
        <div class=\"card card-body bg-info bg-opacity-10 p-4\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div>
                    <h2 class=\"mb-0 fw-bold\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nbCommandes"]) || array_key_exists("nbCommandes", $context) ? $context["nbCommandes"] : (function () { throw new RuntimeError('Variable "nbCommandes" does not exist.', 53, $this->source); })()), "html", null, true);
        yield "</h2>
                    <span>Commandes</span>
                </div>
                <i class=\"fas fa-shopping-cart fa-2x text-info\"></i>
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
        return "admin_dashboard/index.html.twig";
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
        return array (  158 => 53,  143 => 41,  128 => 29,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back_base.html.twig' %}

{% block title %}Dashboard Admin{% endblock %}

{% block admin_content %}
<div class=\"row\">
    <div class=\"col-12 mb-3\">
        <h1 class=\"h3 mb-2\">Dashboard Administrateur</h1>
    </div>
</div>

<div class=\"row g-4 mb-4\">
    <div class=\"col-md-3\">
        <div class=\"card card-body bg-primary bg-opacity-10 p-4\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div>
                    <h2 class=\"mb-0 fw-bold\">{{ nbUtilisateurs }}</h2>
                    <span>Utilisateurs</span>
                </div>
                <i class=\"fas fa-users fa-2x text-primary\"></i>
            </div>
        </div>
    </div>

    <div class=\"col-md-3\">
        <div class=\"card card-body bg-success bg-opacity-10 p-4\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div>
                    <h2 class=\"mb-0 fw-bold\">{{ nbFranchises }}</h2>
                    <span>Franchises</span>
                </div>
                <i class=\"fas fa-store fa-2x text-success\"></i>
            </div>
        </div>
    </div>

    <div class=\"col-md-3\">
        <div class=\"card card-body bg-warning bg-opacity-10 p-4\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div>
                    <h2 class=\"mb-0 fw-bold\">{{ nbProduits }}</h2>
                    <span>Produits</span>
                </div>
                <i class=\"fas fa-box fa-2x text-warning\"></i>
            </div>
        </div>
    </div>

    <div class=\"col-md-3\">
        <div class=\"card card-body bg-info bg-opacity-10 p-4\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div>
                    <h2 class=\"mb-0 fw-bold\">{{ nbCommandes }}</h2>
                    <span>Commandes</span>
                </div>
                <i class=\"fas fa-shopping-cart fa-2x text-info\"></i>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin_dashboard/index.html.twig", "C:\\Users\\chips\\Documents\\Boussole\\templates\\admin_dashboard\\index.html.twig");
    }
}
