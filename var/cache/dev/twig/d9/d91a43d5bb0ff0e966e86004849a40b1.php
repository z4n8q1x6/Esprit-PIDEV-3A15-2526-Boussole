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

/* admin_user/new.html.twig */
class __TwigTemplate_f2584fb9b2a00819c29704903e90b30e extends Template
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
        return "back_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_user/new.html.twig"));

        $this->parent = $this->load("back_base.html.twig", 1);
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

        yield "Nouvelle Entreprise";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<style>
    /* Reproducing the requested FXML theme */
    .form-wrapper {
        background-color: #06080F;
        border: 1px solid rgba(0, 229, 204, 0.3);
        border-radius: 15px;
        padding: 40px;
        max-width: 700px;
        margin: 40px auto;
        font-family: 'Inter', sans-serif;
        color: white;
    }
    .form-header {
        margin-bottom: 30px;
    }
    .form-header h1 {
        color: #E8EDF5;
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 5px;
    }
    .form-header p {
        color: #8892A4;
        font-size: 13px;
        margin: 0;
    }
    
    .section-title {
        color: #00E5CC;
        font-weight: 700;
        font-size: 12px;
        margin-top: 20px;
        margin-bottom: 15px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .form-group {
        margin-bottom: 20px;
        flex: 1;
    }
    .form-group label {
        display: block;
        color: #8892A4;
        font-size: 13px;
        margin-bottom: 8px;
    }
    
    .form-row {
        display: flex;
        gap: 15px;
    }

    /* Custom Input Fields */
    .custom-input {
        width: 100%;
        background-color: #0C0F1A;
        color: white;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        padding: 10px 15px;
        font-size: 14px;
        transition: border-color 0.2s;
    }
    .custom-input:focus {
        outline: none;
        border-color: #00E5CC;
    }
    .custom-input::placeholder {
        color: #475569;
    }

    /* specific styling for amounts */
    .input-amount {
        color: #00E5CC !important;
        font-weight: bold;
    }

    /* Photo Button Simulation */
    .btn-photo {
        width: 100%;
        background-color: #1E293B;
        color: #00E5CC;
        border: 1px solid #00E5CC;
        border-radius: 8px;
        padding: 12px;
        font-weight: 700;
        cursor: pointer;
        margin-bottom: 20px;
        text-align: center;
        transition: all 0.2s;
    }
    .btn-photo:hover {
        background-color: rgba(0, 229, 204, 0.1);
    }
    /* Hidden file input */
    .file-upload-invisible {
        display: none;
    }

    /* Checkbox */
    .custom-checkbox-wrapper {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 10px;
    }
    .custom-checkbox-wrapper input[type=\"checkbox\"] {
        accent-color: #00E5CC;
        width: 16px;
        height: 16px;
    }
    .custom-checkbox-wrapper label {
        color: #E8EDF5;
        font-size: 14px;
        margin: 0;
    }

    /* Info Text */
    .info-text {
        color: #3A4258;
        font-style: italic;
        font-size: 12px;
        margin-top: 5px;
    }

    .divider {
        height: 1px;
        background-color: rgba(255, 255, 255, 0.1);
        margin: 30px 0;
    }

    /* Actions Bottom */
    .form-actions {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 15px;
        margin-top: 30px;
    }
    .btn-cancel {
        background: transparent;
        color: #8892A4;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        padding: 10px 20px;
        cursor: pointer;
        text-decoration: none;
        transition: color 0.2s;
    }
    .btn-cancel:hover {
        color: white;
    }
    .btn-submit {
        background-color: #00E5CC;
        color: #06080F;
        border: none;
        border-radius: 8px;
        padding: 10px 40px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.2s;
    }
    .btn-submit:hover {
        background-color: #00c7b1;
    }
</style>

<div class=\"form-wrapper\">
    <div class=\"form-header\">
        <h1>Nouvelle Entreprise</h1>
        <p>Complétez les informations pour créer le compte</p>
    </div>

    ";
        // line 180
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
    
    <div class=\"section-title\">RESPONSABLE DU COMPTE</div>

    <div class=\"form-row\">
        <div class=\"form-group\">
            <label>Nom</label>
            ";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "nom", [], "any", false, false, false, 187), 'widget', ["attr" => ["class" => "custom-input", "placeholder" => "Ex: Ben Ahmed"]]);
        yield "
        </div>
        <div class=\"form-group\">
            <label>Prénom</label>
            ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "prenom", [], "any", false, false, false, 191), 'widget', ["attr" => ["class" => "custom-input", "placeholder" => "Ex: Mohamed"]]);
        yield "
        </div>
    </div>

    <!-- UI for file upload simulated from button -->
    <label class=\"btn-photo\">
        📷 Ajouter une photo (Face ID)
        ";
        // line 198
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "photo", [], "any", false, false, false, 198), 'widget', ["attr" => ["class" => "file-upload-invisible", "accept" => "image/*"]]);
        yield "
    </label>

    <div class=\"form-group\">
        <label>Email</label>
        ";
        // line 203
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "email", [], "any", false, false, false, 203), 'widget', ["attr" => ["class" => "custom-input", "placeholder" => "m.ahmed@entreprise.tn"]]);
        yield "
    </div>

    <div class=\"form-group\">
        <label>Mot de passe</label>
        <div class=\"info-text\">Un mot de passe sécurisé sera généré et envoyé par email.</div>
    </div>

    <div class=\"divider\"></div>

    <div class=\"section-title\">DÉTAILS DE L'ENTREPRISE</div>

    <div class=\"form-group\">
        <label>Nom de l'entreprise</label>
        ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "id_franchise", [], "any", false, false, false, 217), "nom", [], "any", false, false, false, 217), 'widget', ["attr" => ["class" => "custom-input"]]);
        yield "
    </div>

    <div class=\"form-row\">
        <div class=\"form-group\">
            <label>Téléphone</label>
            ";
        // line 223
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "id_franchise", [], "any", false, false, false, 223), "telephone", [], "any", false, false, false, 223), 'widget', ["attr" => ["class" => "custom-input"]]);
        yield "
        </div>
        <div class=\"form-group\">
            <label>Solde initial (DT)</label>
            ";
        // line 227
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), "id_franchise", [], "any", false, false, false, 227), "solde_actuel", [], "any", false, false, false, 227), 'widget', ["attr" => ["class" => "custom-input input-amount"]]);
        yield "
        </div>
    </div>

    <div class=\"form-group\">
        <label>Adresse</label>
        ";
        // line 233
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "id_franchise", [], "any", false, false, false, 233), "adresse", [], "any", false, false, false, 233), 'widget', ["attr" => ["class" => "custom-input"]]);
        yield "
    </div>

    <!-- Hide internal email for franchise since we use responsable's email or default empty it -->
    <div style=\"display: none;\">
        ";
        // line 238
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "id_franchise", [], "any", false, false, false, 238), "email", [], "any", false, false, false, 238), 'widget', ["attr" => ["value" => "temp@email.com"]]);
        yield "
    </div>

    <div class=\"custom-checkbox-wrapper\">
        ";
        // line 242
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "id_franchise", [], "any", false, false, false, 242), "actif", [], "any", false, false, false, 242), 'widget', ["attr" => ["checked" => "checked"]]);
        yield "
        <label for=\"";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "id_franchise", [], "any", false, false, false, 243), "actif", [], "any", false, false, false, 243), "vars", [], "any", false, false, false, 243), "id", [], "any", false, false, false, 243), "html", null, true);
        yield "\">Activer le compte immédiatement</label>
    </div>

    <div class=\"form-actions\">
        <a href=\"";
        // line 247
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user");
        yield "\" class=\"btn-cancel\">Annuler</a>
        <button type=\"submit\" class=\"btn-submit\">CRÉER</button>
    </div>

    ";
        // line 251
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), 'form_end');
        yield "
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
        return "admin_user/new.html.twig";
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
        return array (  371 => 251,  364 => 247,  357 => 243,  353 => 242,  346 => 238,  338 => 233,  329 => 227,  322 => 223,  313 => 217,  296 => 203,  288 => 198,  278 => 191,  271 => 187,  261 => 180,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back_base.html.twig' %}

{% block title %}Nouvelle Entreprise{% endblock %}

{% block body %}
<style>
    /* Reproducing the requested FXML theme */
    .form-wrapper {
        background-color: #06080F;
        border: 1px solid rgba(0, 229, 204, 0.3);
        border-radius: 15px;
        padding: 40px;
        max-width: 700px;
        margin: 40px auto;
        font-family: 'Inter', sans-serif;
        color: white;
    }
    .form-header {
        margin-bottom: 30px;
    }
    .form-header h1 {
        color: #E8EDF5;
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 5px;
    }
    .form-header p {
        color: #8892A4;
        font-size: 13px;
        margin: 0;
    }
    
    .section-title {
        color: #00E5CC;
        font-weight: 700;
        font-size: 12px;
        margin-top: 20px;
        margin-bottom: 15px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .form-group {
        margin-bottom: 20px;
        flex: 1;
    }
    .form-group label {
        display: block;
        color: #8892A4;
        font-size: 13px;
        margin-bottom: 8px;
    }
    
    .form-row {
        display: flex;
        gap: 15px;
    }

    /* Custom Input Fields */
    .custom-input {
        width: 100%;
        background-color: #0C0F1A;
        color: white;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        padding: 10px 15px;
        font-size: 14px;
        transition: border-color 0.2s;
    }
    .custom-input:focus {
        outline: none;
        border-color: #00E5CC;
    }
    .custom-input::placeholder {
        color: #475569;
    }

    /* specific styling for amounts */
    .input-amount {
        color: #00E5CC !important;
        font-weight: bold;
    }

    /* Photo Button Simulation */
    .btn-photo {
        width: 100%;
        background-color: #1E293B;
        color: #00E5CC;
        border: 1px solid #00E5CC;
        border-radius: 8px;
        padding: 12px;
        font-weight: 700;
        cursor: pointer;
        margin-bottom: 20px;
        text-align: center;
        transition: all 0.2s;
    }
    .btn-photo:hover {
        background-color: rgba(0, 229, 204, 0.1);
    }
    /* Hidden file input */
    .file-upload-invisible {
        display: none;
    }

    /* Checkbox */
    .custom-checkbox-wrapper {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 10px;
    }
    .custom-checkbox-wrapper input[type=\"checkbox\"] {
        accent-color: #00E5CC;
        width: 16px;
        height: 16px;
    }
    .custom-checkbox-wrapper label {
        color: #E8EDF5;
        font-size: 14px;
        margin: 0;
    }

    /* Info Text */
    .info-text {
        color: #3A4258;
        font-style: italic;
        font-size: 12px;
        margin-top: 5px;
    }

    .divider {
        height: 1px;
        background-color: rgba(255, 255, 255, 0.1);
        margin: 30px 0;
    }

    /* Actions Bottom */
    .form-actions {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 15px;
        margin-top: 30px;
    }
    .btn-cancel {
        background: transparent;
        color: #8892A4;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        padding: 10px 20px;
        cursor: pointer;
        text-decoration: none;
        transition: color 0.2s;
    }
    .btn-cancel:hover {
        color: white;
    }
    .btn-submit {
        background-color: #00E5CC;
        color: #06080F;
        border: none;
        border-radius: 8px;
        padding: 10px 40px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.2s;
    }
    .btn-submit:hover {
        background-color: #00c7b1;
    }
</style>

<div class=\"form-wrapper\">
    <div class=\"form-header\">
        <h1>Nouvelle Entreprise</h1>
        <p>Complétez les informations pour créer le compte</p>
    </div>

    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    
    <div class=\"section-title\">RESPONSABLE DU COMPTE</div>

    <div class=\"form-row\">
        <div class=\"form-group\">
            <label>Nom</label>
            {{ form_widget(form.nom, {'attr': {'class': 'custom-input', 'placeholder': 'Ex: Ben Ahmed'}}) }}
        </div>
        <div class=\"form-group\">
            <label>Prénom</label>
            {{ form_widget(form.prenom, {'attr': {'class': 'custom-input', 'placeholder': 'Ex: Mohamed'}}) }}
        </div>
    </div>

    <!-- UI for file upload simulated from button -->
    <label class=\"btn-photo\">
        📷 Ajouter une photo (Face ID)
        {{ form_widget(form.photo, {'attr': {'class': 'file-upload-invisible', 'accept': 'image/*'}}) }}
    </label>

    <div class=\"form-group\">
        <label>Email</label>
        {{ form_widget(form.email, {'attr': {'class': 'custom-input', 'placeholder': 'm.ahmed@entreprise.tn'}}) }}
    </div>

    <div class=\"form-group\">
        <label>Mot de passe</label>
        <div class=\"info-text\">Un mot de passe sécurisé sera généré et envoyé par email.</div>
    </div>

    <div class=\"divider\"></div>

    <div class=\"section-title\">DÉTAILS DE L'ENTREPRISE</div>

    <div class=\"form-group\">
        <label>Nom de l'entreprise</label>
        {{ form_widget(form.id_franchise.nom, {'attr': {'class': 'custom-input'}}) }}
    </div>

    <div class=\"form-row\">
        <div class=\"form-group\">
            <label>Téléphone</label>
            {{ form_widget(form.id_franchise.telephone, {'attr': {'class': 'custom-input'}}) }}
        </div>
        <div class=\"form-group\">
            <label>Solde initial (DT)</label>
            {{ form_widget(form.id_franchise.solde_actuel, {'attr': {'class': 'custom-input input-amount'}}) }}
        </div>
    </div>

    <div class=\"form-group\">
        <label>Adresse</label>
        {{ form_widget(form.id_franchise.adresse, {'attr': {'class': 'custom-input'}}) }}
    </div>

    <!-- Hide internal email for franchise since we use responsable's email or default empty it -->
    <div style=\"display: none;\">
        {{ form_widget(form.id_franchise.email, {'attr': {'value': 'temp@email.com'}}) }}
    </div>

    <div class=\"custom-checkbox-wrapper\">
        {{ form_widget(form.id_franchise.actif, {'attr': {'checked': 'checked'}}) }}
        <label for=\"{{ form.id_franchise.actif.vars.id }}\">Activer le compte immédiatement</label>
    </div>

    <div class=\"form-actions\">
        <a href=\"{{ path('app_admin_user') }}\" class=\"btn-cancel\">Annuler</a>
        <button type=\"submit\" class=\"btn-submit\">CRÉER</button>
    </div>

    {{ form_end(form) }}
</div>
{% endblock %}
", "admin_user/new.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\admin_user\\new.html.twig");
    }
}
