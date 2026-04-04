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

/* admin_user/index.html.twig */
class __TwigTemplate_2e8e9df0ab6357becbbe0bb3a59e2463 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_user/index.html.twig"));

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

        yield "Gestion des Utilisateurs";
        
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
    .btn-new-user {
        background-color: #00E5CC;
        color: #06080F;
        font-weight: 700;
        border: none;
        border-radius: 10px;
        padding: 10px 20px;
        cursor: pointer;
        transition: all 0.3s;
    }
    .btn-new-user:hover {
        background-color: #00b3a0;
        transform: translateY(-2px);
    }

    /* Stats Cards */
    .stats-container {
        display: flex;
        gap: 20px;
        margin-bottom: 30px;
    }
    .stat-card {
        flex: 1;
        background-color: #0F1523;
        border-radius: 15px;
        padding: 20px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .stat-card.active-users {
        border-color: rgba(16, 185, 129, 0.2);
    }
    .stat-card.inactive-users {
        border-color: rgba(239, 68, 68, 0.2);
    }
    .stat-card-title {
        font-size: 11px;
        font-weight: 700;
        margin-bottom: 10px;
        color: #64748B;
    }
    .stat-card.active-users .stat-card-title { color: #10B981; }
    .stat-card.inactive-users .stat-card-title { color: #EF4444; }

    .stat-value-row {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .stat-value {
        font-size: 28px;
        font-weight: 700;
        color: white;
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
            <h1>Gestion des Utilisateurs</h1>
            <p>Administration des comptes et permissions</p>
        </div>
        <a href=\"";
        // line 173
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_new");
        yield "\" class=\"btn-new-user text-decoration-none\" style=\"display: inline-block; text-align: center;\">+ Ajouter un membre</a>
    </div>

    <!-- STATISTIQUES CARDS -->
    <div class=\"stats-container\">
        <!-- Card 1 -->
        <div class=\"stat-card\">
            <div class=\"stat-card-title text-muted\">TOTAL UTILISATEURS</div>
            <div class=\"stat-value-row\">
                <span class=\"stat-value\">0</span>
                <span style=\"font-size: 20px;\">👥</span>
            </div>
        </div>

        <!-- Card 2 -->
        <div class=\"stat-card active-users\">
            <div class=\"stat-card-title\">COMPTES ACTIFS</div>
            <div class=\"stat-value-row\">
                <span class=\"stat-value\">0</span>
                <span style=\"font-size: 20px;\">✅</span>
            </div>
        </div>

        <!-- Card 3 -->
        <div class=\"stat-card inactive-users\">
            <div class=\"stat-card-title\">COMPTES INACTIFS</div>
            <div class=\"stat-value-row\">
                <span class=\"stat-value\">0</span>
                <span style=\"font-size: 20px;\">⛔</span>
            </div>
        </div>
    </div>

    <!-- SEARCH & FILTER -->
    <div class=\"filter-section\">
        <select class=\"filter-select\">
            <option value=\"\">Tous les statuts</option>
            <option value=\"actifs\">Actifs</option>
            <option value=\"inactifs\">Inactifs</option>
        </select>
        <input type=\"text\" class=\"search-input\" placeholder=\"Rechercher un utilisateur...\">
    </div>

    <!-- TABLE -->
    <div class=\"users-table-container\">
        <table class=\"users-table\">
            <thead>
                <tr>
                    <th>NOM</th>
                    <th>PRÉNOM</th>
                    <th>EMAIL</th>
                    <th>RÔLE</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 230
        yield "                <tr>
                    <td>Dupont</td>
                    <td>Jean</td>
                    <td>jean.dupont@example.com</td>
                    <td><span class=\"badge\" style=\"background-color: #1e3a8a; padding: 5px 10px; border-radius: 5px;\">ROLE_USER</span></td>
                    <td>
                        <button class=\"action-btn\">✏️ Modifier</button>
                        <button class=\"action-btn action-delete\">🗑️ Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>Martin</td>
                    <td>Sophie</td>
                    <td>sophie.martin@example.com</td>
                    <td><span class=\"badge\" style=\"background-color: #065f46; padding: 5px 10px; border-radius: 5px;\">ROLE_ADMIN</span></td>
                    <td>
                        <button class=\"action-btn\">✏️ Modifier</button>
                        <button class=\"action-btn action-delete\">🗑️ Supprimer</button>
                    </td>
                </tr>
                <!-- fin de boucle twig -->
            </tbody>
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
        return "admin_user/index.html.twig";
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
        return array (  313 => 230,  254 => 173,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back_base.html.twig' %}

{% block title %}Gestion des Utilisateurs{% endblock %}

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
    .btn-new-user {
        background-color: #00E5CC;
        color: #06080F;
        font-weight: 700;
        border: none;
        border-radius: 10px;
        padding: 10px 20px;
        cursor: pointer;
        transition: all 0.3s;
    }
    .btn-new-user:hover {
        background-color: #00b3a0;
        transform: translateY(-2px);
    }

    /* Stats Cards */
    .stats-container {
        display: flex;
        gap: 20px;
        margin-bottom: 30px;
    }
    .stat-card {
        flex: 1;
        background-color: #0F1523;
        border-radius: 15px;
        padding: 20px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .stat-card.active-users {
        border-color: rgba(16, 185, 129, 0.2);
    }
    .stat-card.inactive-users {
        border-color: rgba(239, 68, 68, 0.2);
    }
    .stat-card-title {
        font-size: 11px;
        font-weight: 700;
        margin-bottom: 10px;
        color: #64748B;
    }
    .stat-card.active-users .stat-card-title { color: #10B981; }
    .stat-card.inactive-users .stat-card-title { color: #EF4444; }

    .stat-value-row {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .stat-value {
        font-size: 28px;
        font-weight: 700;
        color: white;
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
            <h1>Gestion des Utilisateurs</h1>
            <p>Administration des comptes et permissions</p>
        </div>
        <a href=\"{{ path('app_admin_user_new') }}\" class=\"btn-new-user text-decoration-none\" style=\"display: inline-block; text-align: center;\">+ Ajouter un membre</a>
    </div>

    <!-- STATISTIQUES CARDS -->
    <div class=\"stats-container\">
        <!-- Card 1 -->
        <div class=\"stat-card\">
            <div class=\"stat-card-title text-muted\">TOTAL UTILISATEURS</div>
            <div class=\"stat-value-row\">
                <span class=\"stat-value\">0</span>
                <span style=\"font-size: 20px;\">👥</span>
            </div>
        </div>

        <!-- Card 2 -->
        <div class=\"stat-card active-users\">
            <div class=\"stat-card-title\">COMPTES ACTIFS</div>
            <div class=\"stat-value-row\">
                <span class=\"stat-value\">0</span>
                <span style=\"font-size: 20px;\">✅</span>
            </div>
        </div>

        <!-- Card 3 -->
        <div class=\"stat-card inactive-users\">
            <div class=\"stat-card-title\">COMPTES INACTIFS</div>
            <div class=\"stat-value-row\">
                <span class=\"stat-value\">0</span>
                <span style=\"font-size: 20px;\">⛔</span>
            </div>
        </div>
    </div>

    <!-- SEARCH & FILTER -->
    <div class=\"filter-section\">
        <select class=\"filter-select\">
            <option value=\"\">Tous les statuts</option>
            <option value=\"actifs\">Actifs</option>
            <option value=\"inactifs\">Inactifs</option>
        </select>
        <input type=\"text\" class=\"search-input\" placeholder=\"Rechercher un utilisateur...\">
    </div>

    <!-- TABLE -->
    <div class=\"users-table-container\">
        <table class=\"users-table\">
            <thead>
                <tr>
                    <th>NOM</th>
                    <th>PRÉNOM</th>
                    <th>EMAIL</th>
                    <th>RÔLE</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                {# Exemple de données : La boucle twig (for user in users) viendra ici #}
                <tr>
                    <td>Dupont</td>
                    <td>Jean</td>
                    <td>jean.dupont@example.com</td>
                    <td><span class=\"badge\" style=\"background-color: #1e3a8a; padding: 5px 10px; border-radius: 5px;\">ROLE_USER</span></td>
                    <td>
                        <button class=\"action-btn\">✏️ Modifier</button>
                        <button class=\"action-btn action-delete\">🗑️ Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>Martin</td>
                    <td>Sophie</td>
                    <td>sophie.martin@example.com</td>
                    <td><span class=\"badge\" style=\"background-color: #065f46; padding: 5px 10px; border-radius: 5px;\">ROLE_ADMIN</span></td>
                    <td>
                        <button class=\"action-btn\">✏️ Modifier</button>
                        <button class=\"action-btn action-delete\">🗑️ Supprimer</button>
                    </td>
                </tr>
                <!-- fin de boucle twig -->
            </tbody>
        </table>
    </div>

    <!-- PAGINATION -->
    <div class=\"pagination-container\">
        Page 1 sur 1
    </div>
</div>
{% endblock %}
", "admin_user/index.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\admin_user\\index.html.twig");
    }
}
