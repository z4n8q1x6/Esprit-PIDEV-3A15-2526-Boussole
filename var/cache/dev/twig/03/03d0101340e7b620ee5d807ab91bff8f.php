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

/* budget/budget.html.twig */
class __TwigTemplate_6de01339ebf97df374ec7be346ae7769 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "budget/budget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "budget/budget.html.twig"));

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

        yield "Stratégie Budgétaire";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    body { background-color: #0b0f19; color: #a0aec0; }
    h2, h4 { color: #ffffff; font-weight: 700; }
    .subtitle { color: #64748b; font-size: 0.95rem; }
    
    .dashboard-card { 
        background-color: #121626; 
        border: 1px solid #1e293b; 
        border-radius: 12px;
        padding: 1.5rem;
    }
    
    .form-label { color: #e2e8f0; font-size: 0.85rem; margin-bottom: 0.25rem; }
    .form-control, .form-select { 
        background-color: #1a2035; 
        color: #f8fafc; 
        border: 1px solid #2d3748; 
        border-radius: 8px;
    }
    .form-control:focus, .form-select:focus { 
        background-color: #1a2035; 
        color: #fff; 
        border-color: #00d4ff; 
        box-shadow: 0 0 5px rgba(0, 212, 255, 0.2); 
    }
    .invalid-feedback { color: #ef4444; font-size: 0.8rem; margin-top: 4px; display: block; }
    
    .table-container { overflow-x: auto; }
    .custom-table { width: 100%; border-collapse: separate; border-spacing: 0; color: #f8fafc; }
    .custom-table th {
        color: #00d4ff;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        padding: 1rem;
        border-bottom: 1px solid #00d4ff;
    }
    .custom-table td {
        padding: 1rem;
        font-size: 0.9rem;
        border-bottom: 1px solid #1e293b;
        vertical-align: middle;
    }
    .custom-table tbody tr:hover { background-color: rgba(255,255,255,0.02); }
    
    .status-dot {
        display: inline-block;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        margin-right: 6px;
    }
    .status-limite { color: #ef4444; }
    .status-limite .status-dot { background-color: #ef4444; box-shadow: 0 0 5px #ef4444; }
    .status-objectif { color: #10b981; }
    .status-objectif .status-dot { background-color: #10b981; box-shadow: 0 0 5px #10b981; }

    /* Inline Edit */
    .editable-cell { cursor: pointer; transition: background-color 0.2s; border-radius: 4px; padding: 4px; margin: -4px;}
    .editable-cell:hover { background-color: rgba(255,255,255,0.05); outline: 1px dashed #00d4ff; }
    .editing-input { width: 100%; padding: 4px; background: #1a2035; color: white; border: 1px solid #00d4ff; border-radius: 4px; outline: none; font-family: monospace;}
    input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button { -webkit-appearance: none; margin: 0; }
    input[type=number] { -moz-appearance: textfield; }
    .toast-container { position: fixed; top: 20px; right: 20px; z-index: 1055; }
    
    /* Subtle delete */
    .delete-row-btn { cursor: pointer; opacity: 0.5; transition: opacity 0.2s, color 0.2s; }
    .delete-row-btn:hover { opacity: 1; color: #ef4444 !important; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 78
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

        // line 79
        yield "<div class=\"container-fluid mt-4 mb-5\">
    
    <div class=\"mb-4 d-flex justify-content-between align-items-center\">
        <div>
            <h2>Stratégie Budgétaire</h2>
            <p class=\"subtitle\">Stratégie Budgétaire</p>
        </div>
    </div>
    
    ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "flashes", ["success"], "method", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 89
            yield "        <div class=\"alert alert-success border-0 shadow\" style=\"background-color: #10b981; color: #fff;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "
    <div class=\"row g-4\">
        <!-- Formulaire Unifié avec validation HTML5 intégrée -->
        <div class=\"col-12 col-lg-4\">
            <div class=\"dashboard-card h-100\">
                <h4 class=\"mb-4 text-white\">Nouveau Budget</h4>
                
                ";
        // line 98
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), 'form_start', ["attr" => ["class" => "d-flex flex-column gap-3", "id" => "budget-form", "novalidate" => "novalidate"]]);
        yield "
                    <div class=\"row g-3\">
                        <div class=\"col-md-5\">
                            ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "mois", [], "any", false, false, false, 101), 'label');
        yield "
                            ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "mois", [], "any", false, false, false, 102), 'widget');
        yield "
                            ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "mois", [], "any", false, false, false, 103), 'errors');
        yield "
                        </div>
                        <div class=\"col-md-7\">
                            ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "annee", [], "any", false, false, false, 106), 'label');
        yield "
                            ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "annee", [], "any", false, false, false, 107), 'widget');
        yield "
                            ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "annee", [], "any", false, false, false, 108), 'errors');
        yield "
                        </div>
                    </div>
                    
                    <div>
                        ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "type_budget", [], "any", false, false, false, 113), 'label');
        yield "
                        ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "type_budget", [], "any", false, false, false, 114), 'widget');
        yield "
                        ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "type_budget", [], "any", false, false, false, 115), 'errors');
        yield "
                    </div>
                    
                    
                    
                    <div>
                        ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "categorie", [], "any", false, false, false, 121), 'label');
        yield "
                        ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "categorie", [], "any", false, false, false, 122), 'widget');
        yield "
                        ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "categorie", [], "any", false, false, false, 123), 'errors');
        yield "
                    </div>
                    
                    <div>
                        ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "montant_cible", [], "any", false, false, false, 127), 'label');
        yield "
                        <div class=\"input-group\">
                            ";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "montant_cible", [], "any", false, false, false, 129), 'widget');
        yield "
                            <span class=\"input-group-text\" style=\"background-color: #1a2035; border-color: #2d3748; color: #a0aec0;\">DT</span>
                        </div>
                        ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "montant_cible", [], "any", false, false, false, 132), 'errors');
        yield "
                    </div>
                    
                    <div>
                        ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "franchise_id", [], "any", false, false, false, 136), 'label');
        yield "
                        ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "franchise_id", [], "any", false, false, false, 137), 'widget');
        yield "
                        ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "franchise_id", [], "any", false, false, false, 138), 'errors');
        yield "
                        <small class=\"text-muted d-block mt-1\"><i class=\"fas fa-info-circle me-1\"></i> Laissez vide pour appliquer à tout le réseau.</small>
                    </div>
                    
                    <div class=\"d-flex justify-content-between align-items-center mt-4\">
                        <button type=\"reset\" class=\"btn btn-outline-secondary rounded-pill px-4 text-light border-secondary\">Effacer</button>
                        <button type=\"submit\" class=\"btn btn-info rounded-pill px-5 fw-bold\" style=\"background-color: #00d4ff; border: none; box-shadow: 0 0 15px rgba(0, 212, 255, 0.4); color: #000;\">ENREGISTRER</button>
                    </div>
                ";
        // line 146
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>

        <!-- Table avec Ã‰dition et Suppression inline -->
        <div class=\"col-12 col-lg-8\">
            <div class=\"dashboard-card h-100 table-container\">
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h4 class=\"mb-0 text-white\">Budgets Configurés</h4>
                </div>
                
                <table class=\"custom-table\" id=\"budget-table\">
                    <thead>
                        <tr>
                            <th>FRANCHISE</th>
                            <th>MOIS / ANNÉE</th>
                            <th>TYPE</th>
                            <th>CATÉGORIE</th>
                            <th>MONTANT</th>
                            <th class=\"text-center\" style=\"width:40px;\"></th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["budgets"]) || array_key_exists("budgets", $context) ? $context["budgets"] : (function () { throw new RuntimeError('Variable "budgets" does not exist.', 169, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 170
            yield "                        <tr id=\"row-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 170), "html", null, true);
            yield "\">
                            <td>";
            // line 171
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["b"], "franchiseId", [], "any", false, false, false, 171)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["b"], "franchiseId", [], "any", false, false, false, 171), "nom", [], "any", false, false, false, 171), "html", null, true)) : ("<span class=\"badge bg-secondary text-dark\">Réseau Global</span>"));
            yield "</td>
                            <td>
                                <div class=\"editable-cell d-inline-block fw-bold text-white\" data-id=\"";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 173), "html", null, true);
            yield "\" data-field=\"mois\" title=\"Double-cliquez pour modifier le mois\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%02d", CoreExtension::getAttribute($this->env, $this->source, $context["b"], "mois", [], "any", false, false, false, 173)), "html", null, true);
            yield "</div> /
                                <div class=\"editable-cell d-inline-block fw-bold text-white\" data-id=\"";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 174), "html", null, true);
            yield "\" data-field=\"annee\" title=\"Double-cliquez pour modifier l'année\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "annee", [], "any", false, false, false, 174), "html", null, true);
            yield "</div>
                            </td>
                            <td>
                                ";
            // line 177
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["b"], "typeBudget", [], "any", false, false, false, 177) == "OBJECTIF_REVENU")) {
                // line 178
                yield "                                    <span class=\"status-objectif fw-bold\"><span class=\"status-dot\"></span>Objectif</span>
                                ";
            } else {
                // line 180
                yield "                                    <span class=\"status-limite fw-bold\"><span class=\"status-dot\"></span>Limite</span>
                                ";
            }
            // line 182
            yield "                            </td>
                            <td>
                                <div class=\"editable-cell\" data-id=\"";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 184), "html", null, true);
            yield "\" data-field=\"categorie\" title=\"Double-cliquez pour modifier la catégorie\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "categorie", [], "any", false, false, false, 184), "html", null, true);
            yield "</div>
                            </td>
                            <td>
                                <div class=\"editable-cell fw-bold\" style=\"font-family: monospace; color: #e2e8f0;\" data-id=\"";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 187), "html", null, true);
            yield "\" data-field=\"montant_cible\" title=\"Double-cliquez pour modifier le montant\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "montantCible", [], "any", false, false, false, 187), 2, ".", " "), "html", null, true);
            yield " DT</div>
                            </td>
                            <td class=\"text-center align-middle\">
                                <i class=\"fas fa-trash text-muted delete-row-btn\" data-id=\"";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 190), "html", null, true);
            yield "\" title=\"Supprimer ce budget\"></i>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 193
        if (!$context['_iterated']) {
            // line 194
            yield "                        <tr>
                            <td colspan=\"6\" class=\"text-center py-5 text-muted\">Aucun budget défini. Modifiez le formulaire à gauche pour en ajouter un.</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['b'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Toast Notification -->
<div class=\"toast-container\" style=\"position: fixed; bottom: 20px; right: 20px; top: auto; z-index: 1055;\">
    <div id=\"statusToast\" class=\"toast align-items-center text-white border-0 shadow-lg\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
        <div class=\"d-flex\">
            <div class=\"toast-body fw-bold\" id=\"toastMessage\"></div>
            <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 216
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 217
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {

    const toastEl = document.getElementById('statusToast');
    const toast = new bootstrap.Toast(toastEl, { delay: 3000 });
    
    function showToast(message, isSuccess = true) {
        document.getElementById('toastMessage').textContent = message;
        toastEl.className = isSuccess ? 'toast align-items-center text-white bg-success border-0 shadow-lg' : 'toast align-items-center text-white bg-danger border-0 shadow-lg';
        toast.show();
    }

    // --- Inline Double-Click Editing ---
    document.querySelectorAll('.editable-cell').forEach(cell => {
        let isEditing = false;

        cell.addEventListener('dblclick', function() {
            if (isEditing) return;
            isEditing = true;
            
            // Extract raw numerical value for amount
            let originalValue = this.innerText.trim();
            if (this.dataset.field === 'montant_cible') {
                originalValue = originalValue.replace(' DT', '').replace(/\\s/g, ''); // Remove DT and space thousands separators
            }

            const field = this.dataset.field;
            const id = this.dataset.id;
            
                        const input = document.createElement(field === 'categorie' ? 'select' : 'input');
            
            if (field === 'categorie') {
                const options = ['CHARGES_EXPLOITATIONS', 'CHARGES_FINANCIERES', 'CHARGES_EXCEPTIONNELLES'];
                options.forEach(opt => {
                    const optEl = document.createElement('option');
                    optEl.value = opt;
                    optEl.innerText = opt;
                    if (opt === originalValue) optEl.selected = true;
                    input.appendChild(optEl);
                });
            } else {
                input.type = field === 'mois' || field === 'annee' || field === 'montant_cible' ? 'number' : 'text';
                if (field === 'montant_cible') input.step = '0.01';
                input.value = originalValue;
                input.style.width = Math.max(70, originalValue.length * 10 + 20) + 'px';
            }
            
            input.className = 'editing-input form-select bg-dark text-light border-info';
            
            this.innerText = '';
            this.appendChild(input);
            input.focus();
            input.select();
            
            const finishEdit = async () => {
                if(!isEditing) return; // Prevent double execution from blur+enter
                isEditing = false;
                
                const newValue = input.value.trim();
                
                if (newValue === originalValue || newValue === '') {
                    restoreCell(this, originalValue, field);
                    return;
                }

                try {
                    input.disabled = true; // prevent interacting
                    const response = await fetch('/admin/budget/' + id + '/edit-ajax', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: JSON.stringify({ [field]: newValue })
                    });
                    
                    const data = await response.json();
                    
                    if (data.success) {
                        restoreCell(this, newValue, field);
                        showToast('Mise à jour effectuée.', true);
                    } else {
                        restoreCell(this, originalValue, field);
                        showToast(data.message || 'Erreur (vérifiez la saisie)', false);
                    }
                } catch (error) {
                    restoreCell(this, originalValue, field);
                    showToast('Erreur réseau.', false);
                }
            };

            input.addEventListener('blur', finishEdit);
            input.addEventListener('keydown', (e) => {
                if (e.key === 'Enter') finishEdit();
                if (e.key === 'Escape') {
                    isEditing = false;
                    restoreCell(this, originalValue, field);
                }
            });
        });
    });

    function formatNumberThousand(num) {
        return parseFloat(num).toFixed(2).replace(/\\B(?=(\\d{3})+(?!\\d))/g, \" \");
    }

    function restoreCell(cell, value, field) {
        if (field === 'montant_cible') {
            cell.innerHTML = formatNumberThousand(value) + ' DT';
        } else if (field === 'mois') {
            cell.innerHTML = value.toString().padStart(2, '0');
        } else {
            cell.innerHTML = value;
        }
    }

    // --- Inline Deletion (AJAX) ---
    document.querySelectorAll('.delete-row-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            if(!confirm('Êtes-vous sûr de vouloir supprimer cette ligne budgétaire ?')) return;
            
            const id = this.dataset.id;
            const row = document.getElementById('row-' + id);
            
            fetch('/admin/budget/' + id + '/delete-ajax', {
                method: 'POST',
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    row.style.transition = 'all 0.4s';
                    row.style.opacity = '0';
                    row.style.transform = 'translateY(10px) scale(0.98)';
                    setTimeout(() => row.remove(), 400);
                    showToast('Ligne supprimée avec succès.', true);
                } else {
                    showToast('Erreur lors de la suppression.', false);
                }
            })
            .catch(error => {
                showToast('Erreur réseau.', false);
            });
        });
    });

    // --- Form Custom Javascript Validation ---
    const form = document.getElementById('budget-form');
    if (form) {
        // Validation visuelle Ã  la soumission
        form.addEventListener('submit', function(e) {
            let isValid = true;
            
            // clear old errors
            form.querySelectorAll('.custom-invalid-msg').forEach(el => el.remove());
            form.querySelectorAll('.form-control, .form-select').forEach(el => {
                el.style.borderColor = '';
            });

            // validate category
            const cat = document.getElementById('budget_previsionnel_categorie');
            if(cat && cat.value.trim() === '') {
                isValid = false;
                cat.style.borderColor = '#ef4444';
                cat.insertAdjacentHTML('afterend', '<div class=\"custom-invalid-msg text-danger mt-1\" style=\"font-size: 0.8rem;\">La catégorie est obligatoire.</div>');
            }

            // validate montant
            const mnt = document.getElementById('budget_previsionnel_montant_cible');
            if(mnt && (mnt.value.trim() === '' || isNaN(mnt.value) || parseFloat(mnt.value) <= 0)) {
                isValid = false;
                mnt.style.borderColor = '#ef4444';
                mnt.parentNode.insertAdjacentHTML('afterend', '<div class=\"custom-invalid-msg text-danger mt-1\" style=\"font-size: 0.8rem;\">Veuillez entrer un montant valide (> 0).</div>');
            }

            // validate mois
            const mois = document.getElementById('budget_previsionnel_mois');
            if(mois && (mois.value < 1 || mois.value > 12)) {
                isValid = false;
                mois.style.borderColor = '#ef4444';
            }

            if (!isValid) {
                e.preventDefault();
                showToast('Veuillez vérifier les champs en rouge.', false);
            }
        });
    }

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
        return "budget/budget.html.twig";
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
        return array (  479 => 217,  466 => 216,  439 => 198,  430 => 194,  428 => 193,  420 => 190,  412 => 187,  404 => 184,  400 => 182,  396 => 180,  392 => 178,  390 => 177,  382 => 174,  376 => 173,  371 => 171,  366 => 170,  361 => 169,  335 => 146,  324 => 138,  320 => 137,  316 => 136,  309 => 132,  303 => 129,  298 => 127,  291 => 123,  287 => 122,  283 => 121,  274 => 115,  270 => 114,  266 => 113,  258 => 108,  254 => 107,  250 => 106,  244 => 103,  240 => 102,  236 => 101,  230 => 98,  221 => 91,  212 => 89,  208 => 88,  197 => 79,  184 => 78,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back_base.html.twig' %}

{% block title %}Stratégie Budgétaire{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    body { background-color: #0b0f19; color: #a0aec0; }
    h2, h4 { color: #ffffff; font-weight: 700; }
    .subtitle { color: #64748b; font-size: 0.95rem; }
    
    .dashboard-card { 
        background-color: #121626; 
        border: 1px solid #1e293b; 
        border-radius: 12px;
        padding: 1.5rem;
    }
    
    .form-label { color: #e2e8f0; font-size: 0.85rem; margin-bottom: 0.25rem; }
    .form-control, .form-select { 
        background-color: #1a2035; 
        color: #f8fafc; 
        border: 1px solid #2d3748; 
        border-radius: 8px;
    }
    .form-control:focus, .form-select:focus { 
        background-color: #1a2035; 
        color: #fff; 
        border-color: #00d4ff; 
        box-shadow: 0 0 5px rgba(0, 212, 255, 0.2); 
    }
    .invalid-feedback { color: #ef4444; font-size: 0.8rem; margin-top: 4px; display: block; }
    
    .table-container { overflow-x: auto; }
    .custom-table { width: 100%; border-collapse: separate; border-spacing: 0; color: #f8fafc; }
    .custom-table th {
        color: #00d4ff;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        padding: 1rem;
        border-bottom: 1px solid #00d4ff;
    }
    .custom-table td {
        padding: 1rem;
        font-size: 0.9rem;
        border-bottom: 1px solid #1e293b;
        vertical-align: middle;
    }
    .custom-table tbody tr:hover { background-color: rgba(255,255,255,0.02); }
    
    .status-dot {
        display: inline-block;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        margin-right: 6px;
    }
    .status-limite { color: #ef4444; }
    .status-limite .status-dot { background-color: #ef4444; box-shadow: 0 0 5px #ef4444; }
    .status-objectif { color: #10b981; }
    .status-objectif .status-dot { background-color: #10b981; box-shadow: 0 0 5px #10b981; }

    /* Inline Edit */
    .editable-cell { cursor: pointer; transition: background-color 0.2s; border-radius: 4px; padding: 4px; margin: -4px;}
    .editable-cell:hover { background-color: rgba(255,255,255,0.05); outline: 1px dashed #00d4ff; }
    .editing-input { width: 100%; padding: 4px; background: #1a2035; color: white; border: 1px solid #00d4ff; border-radius: 4px; outline: none; font-family: monospace;}
    input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button { -webkit-appearance: none; margin: 0; }
    input[type=number] { -moz-appearance: textfield; }
    .toast-container { position: fixed; top: 20px; right: 20px; z-index: 1055; }
    
    /* Subtle delete */
    .delete-row-btn { cursor: pointer; opacity: 0.5; transition: opacity 0.2s, color 0.2s; }
    .delete-row-btn:hover { opacity: 1; color: #ef4444 !important; }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid mt-4 mb-5\">
    
    <div class=\"mb-4 d-flex justify-content-between align-items-center\">
        <div>
            <h2>Stratégie Budgétaire</h2>
            <p class=\"subtitle\">Stratégie Budgétaire</p>
        </div>
    </div>
    
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success border-0 shadow\" style=\"background-color: #10b981; color: #fff;\">{{ message }}</div>
    {% endfor %}

    <div class=\"row g-4\">
        <!-- Formulaire Unifié avec validation HTML5 intégrée -->
        <div class=\"col-12 col-lg-4\">
            <div class=\"dashboard-card h-100\">
                <h4 class=\"mb-4 text-white\">Nouveau Budget</h4>
                
                {{ form_start(form, {'attr': {'class': 'd-flex flex-column gap-3', 'id': 'budget-form', 'novalidate': 'novalidate'}}) }}
                    <div class=\"row g-3\">
                        <div class=\"col-md-5\">
                            {{ form_label(form.mois) }}
                            {{ form_widget(form.mois) }}
                            {{ form_errors(form.mois) }}
                        </div>
                        <div class=\"col-md-7\">
                            {{ form_label(form.annee) }}
                            {{ form_widget(form.annee) }}
                            {{ form_errors(form.annee) }}
                        </div>
                    </div>
                    
                    <div>
                        {{ form_label(form.type_budget) }}
                        {{ form_widget(form.type_budget) }}
                        {{ form_errors(form.type_budget) }}
                    </div>
                    
                    
                    
                    <div>
                        {{ form_label(form.categorie) }}
                        {{ form_widget(form.categorie) }}
                        {{ form_errors(form.categorie) }}
                    </div>
                    
                    <div>
                        {{ form_label(form.montant_cible) }}
                        <div class=\"input-group\">
                            {{ form_widget(form.montant_cible) }}
                            <span class=\"input-group-text\" style=\"background-color: #1a2035; border-color: #2d3748; color: #a0aec0;\">DT</span>
                        </div>
                        {{ form_errors(form.montant_cible) }}
                    </div>
                    
                    <div>
                        {{ form_label(form.franchise_id) }}
                        {{ form_widget(form.franchise_id) }}
                        {{ form_errors(form.franchise_id) }}
                        <small class=\"text-muted d-block mt-1\"><i class=\"fas fa-info-circle me-1\"></i> Laissez vide pour appliquer à tout le réseau.</small>
                    </div>
                    
                    <div class=\"d-flex justify-content-between align-items-center mt-4\">
                        <button type=\"reset\" class=\"btn btn-outline-secondary rounded-pill px-4 text-light border-secondary\">Effacer</button>
                        <button type=\"submit\" class=\"btn btn-info rounded-pill px-5 fw-bold\" style=\"background-color: #00d4ff; border: none; box-shadow: 0 0 15px rgba(0, 212, 255, 0.4); color: #000;\">ENREGISTRER</button>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>

        <!-- Table avec Ã‰dition et Suppression inline -->
        <div class=\"col-12 col-lg-8\">
            <div class=\"dashboard-card h-100 table-container\">
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h4 class=\"mb-0 text-white\">Budgets Configurés</h4>
                </div>
                
                <table class=\"custom-table\" id=\"budget-table\">
                    <thead>
                        <tr>
                            <th>FRANCHISE</th>
                            <th>MOIS / ANNÉE</th>
                            <th>TYPE</th>
                            <th>CATÉGORIE</th>
                            <th>MONTANT</th>
                            <th class=\"text-center\" style=\"width:40px;\"></th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for b in budgets %}
                        <tr id=\"row-{{ b.id }}\">
                            <td>{{ b.franchiseId ? b.franchiseId.nom : '<span class=\"badge bg-secondary text-dark\">Réseau Global</span>'|raw }}</td>
                            <td>
                                <div class=\"editable-cell d-inline-block fw-bold text-white\" data-id=\"{{ b.id }}\" data-field=\"mois\" title=\"Double-cliquez pour modifier le mois\">{{ \"%02d\"|format(b.mois) }}</div> /
                                <div class=\"editable-cell d-inline-block fw-bold text-white\" data-id=\"{{ b.id }}\" data-field=\"annee\" title=\"Double-cliquez pour modifier l'année\">{{ b.annee }}</div>
                            </td>
                            <td>
                                {% if b.typeBudget == 'OBJECTIF_REVENU' %}
                                    <span class=\"status-objectif fw-bold\"><span class=\"status-dot\"></span>Objectif</span>
                                {% else %}
                                    <span class=\"status-limite fw-bold\"><span class=\"status-dot\"></span>Limite</span>
                                {% endif %}
                            </td>
                            <td>
                                <div class=\"editable-cell\" data-id=\"{{ b.id }}\" data-field=\"categorie\" title=\"Double-cliquez pour modifier la catégorie\">{{ b.categorie }}</div>
                            </td>
                            <td>
                                <div class=\"editable-cell fw-bold\" style=\"font-family: monospace; color: #e2e8f0;\" data-id=\"{{ b.id }}\" data-field=\"montant_cible\" title=\"Double-cliquez pour modifier le montant\">{{ b.montantCible|number_format(2, '.', ' ') }} DT</div>
                            </td>
                            <td class=\"text-center align-middle\">
                                <i class=\"fas fa-trash text-muted delete-row-btn\" data-id=\"{{ b.id }}\" title=\"Supprimer ce budget\"></i>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"6\" class=\"text-center py-5 text-muted\">Aucun budget défini. Modifiez le formulaire à gauche pour en ajouter un.</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Toast Notification -->
<div class=\"toast-container\" style=\"position: fixed; bottom: 20px; right: 20px; top: auto; z-index: 1055;\">
    <div id=\"statusToast\" class=\"toast align-items-center text-white border-0 shadow-lg\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
        <div class=\"d-flex\">
            <div class=\"toast-body fw-bold\" id=\"toastMessage\"></div>
            <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {

    const toastEl = document.getElementById('statusToast');
    const toast = new bootstrap.Toast(toastEl, { delay: 3000 });
    
    function showToast(message, isSuccess = true) {
        document.getElementById('toastMessage').textContent = message;
        toastEl.className = isSuccess ? 'toast align-items-center text-white bg-success border-0 shadow-lg' : 'toast align-items-center text-white bg-danger border-0 shadow-lg';
        toast.show();
    }

    // --- Inline Double-Click Editing ---
    document.querySelectorAll('.editable-cell').forEach(cell => {
        let isEditing = false;

        cell.addEventListener('dblclick', function() {
            if (isEditing) return;
            isEditing = true;
            
            // Extract raw numerical value for amount
            let originalValue = this.innerText.trim();
            if (this.dataset.field === 'montant_cible') {
                originalValue = originalValue.replace(' DT', '').replace(/\\s/g, ''); // Remove DT and space thousands separators
            }

            const field = this.dataset.field;
            const id = this.dataset.id;
            
                        const input = document.createElement(field === 'categorie' ? 'select' : 'input');
            
            if (field === 'categorie') {
                const options = ['CHARGES_EXPLOITATIONS', 'CHARGES_FINANCIERES', 'CHARGES_EXCEPTIONNELLES'];
                options.forEach(opt => {
                    const optEl = document.createElement('option');
                    optEl.value = opt;
                    optEl.innerText = opt;
                    if (opt === originalValue) optEl.selected = true;
                    input.appendChild(optEl);
                });
            } else {
                input.type = field === 'mois' || field === 'annee' || field === 'montant_cible' ? 'number' : 'text';
                if (field === 'montant_cible') input.step = '0.01';
                input.value = originalValue;
                input.style.width = Math.max(70, originalValue.length * 10 + 20) + 'px';
            }
            
            input.className = 'editing-input form-select bg-dark text-light border-info';
            
            this.innerText = '';
            this.appendChild(input);
            input.focus();
            input.select();
            
            const finishEdit = async () => {
                if(!isEditing) return; // Prevent double execution from blur+enter
                isEditing = false;
                
                const newValue = input.value.trim();
                
                if (newValue === originalValue || newValue === '') {
                    restoreCell(this, originalValue, field);
                    return;
                }

                try {
                    input.disabled = true; // prevent interacting
                    const response = await fetch('/admin/budget/' + id + '/edit-ajax', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: JSON.stringify({ [field]: newValue })
                    });
                    
                    const data = await response.json();
                    
                    if (data.success) {
                        restoreCell(this, newValue, field);
                        showToast('Mise à jour effectuée.', true);
                    } else {
                        restoreCell(this, originalValue, field);
                        showToast(data.message || 'Erreur (vérifiez la saisie)', false);
                    }
                } catch (error) {
                    restoreCell(this, originalValue, field);
                    showToast('Erreur réseau.', false);
                }
            };

            input.addEventListener('blur', finishEdit);
            input.addEventListener('keydown', (e) => {
                if (e.key === 'Enter') finishEdit();
                if (e.key === 'Escape') {
                    isEditing = false;
                    restoreCell(this, originalValue, field);
                }
            });
        });
    });

    function formatNumberThousand(num) {
        return parseFloat(num).toFixed(2).replace(/\\B(?=(\\d{3})+(?!\\d))/g, \" \");
    }

    function restoreCell(cell, value, field) {
        if (field === 'montant_cible') {
            cell.innerHTML = formatNumberThousand(value) + ' DT';
        } else if (field === 'mois') {
            cell.innerHTML = value.toString().padStart(2, '0');
        } else {
            cell.innerHTML = value;
        }
    }

    // --- Inline Deletion (AJAX) ---
    document.querySelectorAll('.delete-row-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            if(!confirm('Êtes-vous sûr de vouloir supprimer cette ligne budgétaire ?')) return;
            
            const id = this.dataset.id;
            const row = document.getElementById('row-' + id);
            
            fetch('/admin/budget/' + id + '/delete-ajax', {
                method: 'POST',
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    row.style.transition = 'all 0.4s';
                    row.style.opacity = '0';
                    row.style.transform = 'translateY(10px) scale(0.98)';
                    setTimeout(() => row.remove(), 400);
                    showToast('Ligne supprimée avec succès.', true);
                } else {
                    showToast('Erreur lors de la suppression.', false);
                }
            })
            .catch(error => {
                showToast('Erreur réseau.', false);
            });
        });
    });

    // --- Form Custom Javascript Validation ---
    const form = document.getElementById('budget-form');
    if (form) {
        // Validation visuelle Ã  la soumission
        form.addEventListener('submit', function(e) {
            let isValid = true;
            
            // clear old errors
            form.querySelectorAll('.custom-invalid-msg').forEach(el => el.remove());
            form.querySelectorAll('.form-control, .form-select').forEach(el => {
                el.style.borderColor = '';
            });

            // validate category
            const cat = document.getElementById('budget_previsionnel_categorie');
            if(cat && cat.value.trim() === '') {
                isValid = false;
                cat.style.borderColor = '#ef4444';
                cat.insertAdjacentHTML('afterend', '<div class=\"custom-invalid-msg text-danger mt-1\" style=\"font-size: 0.8rem;\">La catégorie est obligatoire.</div>');
            }

            // validate montant
            const mnt = document.getElementById('budget_previsionnel_montant_cible');
            if(mnt && (mnt.value.trim() === '' || isNaN(mnt.value) || parseFloat(mnt.value) <= 0)) {
                isValid = false;
                mnt.style.borderColor = '#ef4444';
                mnt.parentNode.insertAdjacentHTML('afterend', '<div class=\"custom-invalid-msg text-danger mt-1\" style=\"font-size: 0.8rem;\">Veuillez entrer un montant valide (> 0).</div>');
            }

            // validate mois
            const mois = document.getElementById('budget_previsionnel_mois');
            if(mois && (mois.value < 1 || mois.value > 12)) {
                isValid = false;
                mois.style.borderColor = '#ef4444';
            }

            if (!isValid) {
                e.preventDefault();
                showToast('Veuillez vérifier les champs en rouge.', false);
            }
        });
    }

});
</script>
{% endblock %}", "budget/budget.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\budget\\budget.html.twig");
    }
}
