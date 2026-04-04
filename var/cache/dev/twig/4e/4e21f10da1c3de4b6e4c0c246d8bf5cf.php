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

/* admin_entreprise/index.html.twig */
class __TwigTemplate_989cbe90330840382c978ccd9ac2821a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_entreprise/index.html.twig"));

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

        yield "Gestion des Entreprises";
        
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
    /* Dark Theme Customization based on JavaFX properties */
    .admin-container {
        background-color: #06080F;
        padding: 30px;
        min-height: 100vh;
        font-family: 'Inter', sans-serif;
        color: white;
    }
    
    .admin-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }
    .admin-header h1 {
        color: #E8EDF5;
        font-size: 26px;
        font-weight: 700;
        margin: 0;
    }
    .admin-header p {
        color: #8892A4;
        font-size: 13px;
        margin-top: 5px;
        margin-bottom: 0;
    }

    /* Filters & Search */
    .filter-section {
        display: flex;
        gap: 15px;
        margin-bottom: 25px;
    }
    .filter-select, .search-input {
        background-color: #0C0F1A;
        color: white;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        height: 42px;
        padding: 0 15px;
    }
    .filter-select:focus, .search-input:focus {
        outline: none;
        border-color: #3b82f6;
    }
    .filter-select { width: 180px; }
    .search-input { width: 380px; }

    /* Table */
    .users-table-container {
        border-radius: 10px;
        overflow: hidden;
        background-color: transparent;
    }
    .users-table {
        width: 100%;
        border-collapse: collapse;
    }
    .users-table th {
        background-color: rgba(255, 255, 255, 0.03);
        color: #94A3B8;
        font-size: 13px;
        font-weight: 600;
        text-transform: uppercase;
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    .users-table td {
        padding: 15px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        color: #E2E8F0;
        font-size: 14px;
        vertical-align: middle;
    }
    .users-table tr:hover {
        background-color: rgba(255, 255, 255, 0.02);
    }
    
    /* Actions */
    .action-btn {
        background: none;
        border: none;
        color: #3B82F6;
        cursor: pointer;
        padding: 5px;
        transition: color 0.2s;
    }
    .action-btn:hover { color: #60A5FA; }
    .action-delete { color: #EF4444; }
    .action-delete:hover { color: #F87171; }

    /* Pagination */
    .pagination-container {
        margin-top: 20px;
        color: #3A4258;
        font-size: 11px;
        font-weight: 700;
    }
</style>

<div class=\"admin-container\">
    
    <!-- HEADER -->
    <div class=\"admin-header\">
        <div>
            <h1>Gestion des Entreprises</h1>
            <p>Visualisation et gestion des partenaires enregistrés</p>
        </div>
    </div>

    <!-- SEARCH & FILTER -->
    <div class=\"filter-section\">
        <select class=\"filter-select\">
            <option value=\"\">Tous les statuts</option>
            <option value=\"actifs\">Actifs</option>
            <option value=\"inactifs\">Inactifs</option>
        </select>
        <input type=\"text\" class=\"search-input\" placeholder=\"🔍 Rechercher une entreprise (nom, email...)\">
    </div>

    <!-- TABLE -->
    <div class=\"users-table-container\">
        <table class=\"users-table\">
            <thead>
                <tr>
                    <th>NOM</th>
                    <th>EMAIL</th>
                    <th>TÉLÉPHONE</th>
                    <th>ADRESSE</th>
                    <th>STATUT</th>
                    <th>SOLDE</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 145
        yield "                <tr>
                    <td>Tech Solutions</td>
                    <td>contact@techsolutions.com</td>
                    <td>+33 1 23 45 67 89</td>
                    <td>10 Rue de la Paix, Paris</td>
                    <td><span class=\"badge\" style=\"background-color: #065f46; padding: 5px 10px; border-radius: 5px;\">Actif</span></td>
                    <td>15,000 €</td>
                    <td>
                        <button class=\"action-btn\">👁️ Voir</button>
                        <button class=\"action-btn action-delete\">🗑️ Suppr</button>
                    </td>
                </tr>
                <tr>
                    <td>Global Industries</td>
                    <td>info@globalind.com</td>
                    <td>+33 4 56 78 90 12</td>
                    <td>45 Avenue Jean Jaurès, Lyon</td>
                    <td><span class=\"badge\" style=\"background-color: #7f1d1d; padding: 5px 10px; border-radius: 5px;\">Inactif</span></td>
                    <td>0 €</td>
                    <td>
                        <button class=\"action-btn\">👁️ Voir</button>
                        <button class=\"action-btn action-delete\">🗑️ Suppr</button>
                    </td>
                </tr>
                ";
        // line 170
        yield "            </tbody>
        </table>
    </div>

    <!-- PAGINATION -->
    <div class=\"pagination-container\">
        Page 1 sur 1
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
        return "admin_entreprise/index.html.twig";
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
        return array (  251 => 170,  225 => 145,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back_base.html.twig' %}

{% block title %}Gestion des Entreprises{% endblock %}

{% block body %}
<style>
    /* Dark Theme Customization based on JavaFX properties */
    .admin-container {
        background-color: #06080F;
        padding: 30px;
        min-height: 100vh;
        font-family: 'Inter', sans-serif;
        color: white;
    }
    
    .admin-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }
    .admin-header h1 {
        color: #E8EDF5;
        font-size: 26px;
        font-weight: 700;
        margin: 0;
    }
    .admin-header p {
        color: #8892A4;
        font-size: 13px;
        margin-top: 5px;
        margin-bottom: 0;
    }

    /* Filters & Search */
    .filter-section {
        display: flex;
        gap: 15px;
        margin-bottom: 25px;
    }
    .filter-select, .search-input {
        background-color: #0C0F1A;
        color: white;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        height: 42px;
        padding: 0 15px;
    }
    .filter-select:focus, .search-input:focus {
        outline: none;
        border-color: #3b82f6;
    }
    .filter-select { width: 180px; }
    .search-input { width: 380px; }

    /* Table */
    .users-table-container {
        border-radius: 10px;
        overflow: hidden;
        background-color: transparent;
    }
    .users-table {
        width: 100%;
        border-collapse: collapse;
    }
    .users-table th {
        background-color: rgba(255, 255, 255, 0.03);
        color: #94A3B8;
        font-size: 13px;
        font-weight: 600;
        text-transform: uppercase;
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    .users-table td {
        padding: 15px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        color: #E2E8F0;
        font-size: 14px;
        vertical-align: middle;
    }
    .users-table tr:hover {
        background-color: rgba(255, 255, 255, 0.02);
    }
    
    /* Actions */
    .action-btn {
        background: none;
        border: none;
        color: #3B82F6;
        cursor: pointer;
        padding: 5px;
        transition: color 0.2s;
    }
    .action-btn:hover { color: #60A5FA; }
    .action-delete { color: #EF4444; }
    .action-delete:hover { color: #F87171; }

    /* Pagination */
    .pagination-container {
        margin-top: 20px;
        color: #3A4258;
        font-size: 11px;
        font-weight: 700;
    }
</style>

<div class=\"admin-container\">
    
    <!-- HEADER -->
    <div class=\"admin-header\">
        <div>
            <h1>Gestion des Entreprises</h1>
            <p>Visualisation et gestion des partenaires enregistrés</p>
        </div>
    </div>

    <!-- SEARCH & FILTER -->
    <div class=\"filter-section\">
        <select class=\"filter-select\">
            <option value=\"\">Tous les statuts</option>
            <option value=\"actifs\">Actifs</option>
            <option value=\"inactifs\">Inactifs</option>
        </select>
        <input type=\"text\" class=\"search-input\" placeholder=\"🔍 Rechercher une entreprise (nom, email...)\">
    </div>

    <!-- TABLE -->
    <div class=\"users-table-container\">
        <table class=\"users-table\">
            <thead>
                <tr>
                    <th>NOM</th>
                    <th>EMAIL</th>
                    <th>TÉLÉPHONE</th>
                    <th>ADRESSE</th>
                    <th>STATUT</th>
                    <th>SOLDE</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                {# Exemple de données : La boucle twig (for entreprise in entreprises) viendra ici #}
                <tr>
                    <td>Tech Solutions</td>
                    <td>contact@techsolutions.com</td>
                    <td>+33 1 23 45 67 89</td>
                    <td>10 Rue de la Paix, Paris</td>
                    <td><span class=\"badge\" style=\"background-color: #065f46; padding: 5px 10px; border-radius: 5px;\">Actif</span></td>
                    <td>15,000 €</td>
                    <td>
                        <button class=\"action-btn\">👁️ Voir</button>
                        <button class=\"action-btn action-delete\">🗑️ Suppr</button>
                    </td>
                </tr>
                <tr>
                    <td>Global Industries</td>
                    <td>info@globalind.com</td>
                    <td>+33 4 56 78 90 12</td>
                    <td>45 Avenue Jean Jaurès, Lyon</td>
                    <td><span class=\"badge\" style=\"background-color: #7f1d1d; padding: 5px 10px; border-radius: 5px;\">Inactif</span></td>
                    <td>0 €</td>
                    <td>
                        <button class=\"action-btn\">👁️ Voir</button>
                        <button class=\"action-btn action-delete\">🗑️ Suppr</button>
                    </td>
                </tr>
                {# fin de boucle twig #}
            </tbody>
        </table>
    </div>

    <!-- PAGINATION -->
    <div class=\"pagination-container\">
        Page 1 sur 1
    </div>
</div>
{% endblock %}
", "admin_entreprise/index.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\admin_entreprise\\index.html.twig");
    }
}
