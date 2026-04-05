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
class __TwigTemplate_5fc46d8cf5f82c13713d9dfbcb2835a3 extends Template
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
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "<style>
    /* CSS - Modern Dark SaaS Theme */
    .admin-container {
        padding: 20px 30px;
        font-family: 'Inter', sans-serif;
        color: #e2e8f0;
    }
    
    .admin-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 35px;
    }
    .admin-header h1 {
        color: #ffffff;
        font-size: 28px;
        font-weight: 700;
        margin: 0 0 8px 0;
        letter-spacing: -0.5px;
    }
    .admin-header p {
        color: #94a3b8;
        font-size: 14px;
        margin: 0;
    }
    .btn-new-user {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        color: #fff;
        font-weight: 600;
        font-size: 14px;
        border: none;
        border-radius: 12px;
        padding: 12px 24px;
        cursor: pointer;
        transition: all 0.2s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
    }
    .btn-new-user:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(37, 99, 235, 0.3);
        color: #ffffff;
    }

    /* Stats Cards */
    .stats-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        margin-bottom: 35px;
    }
    .stat-card {
        background: rgba(30, 41, 59, 0.7);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 16px;
        padding: 24px;
        display: flex;
        align-items: center;
        gap: 20px;
        transition: transform 0.2s;
    }
    .stat-card:hover { transform: translateY(-3px); }
    
    .stat-icon {
        width: 56px;
        height: 56px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
    }
    .icon-blue { background: rgba(59, 130, 246, 0.1); color: #3b82f6; }
    .icon-green { background: rgba(16, 185, 129, 0.1); color: #10b981; }
    .icon-red { background: rgba(239, 68, 68, 0.1); color: #ef4444; }

    .stat-details h3 {
        font-size: 13px;
        font-weight: 600;
        color: #94a3b8;
        text-transform: uppercase;
        margin-bottom: 6px;
        letter-spacing: 0.5px;
    }
    .stat-details .stat-value {
        font-size: 28px;
        font-weight: 800;
        color: #ffffff;
    }

    /* Table Container */
    .users-table-container {
        background: #1e293b;
        border-radius: 16px;
        border: 1px solid rgba(255,255,255,0.05);
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .table-toolbar {
        padding: 20px 24px;
        border-bottom: 1px solid rgba(255,255,255,0.05);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .search-wrapper {
        position: relative;
        width: 300px;
    }
    .search-wrapper i {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #64748b;
    }
    .search-input {
        width: 100%;
        background: rgba(15, 23, 42, 0.6);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 10px;
        color: #fff;
        padding: 10px 15px 10px 40px;
        transition: all 0.2s;
    }
    .search-input:focus {
        outline: none;
        border-color: #3b82f6;
        background: rgba(15, 23, 42, 0.8);
    }

    .users-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
    }
    .users-table th {
        background: rgba(15, 23, 42, 0.4);
        padding: 15px 24px;
        color: #94a3b8;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border-bottom: 1px solid rgba(255,255,255,0.05);
    }
    .users-table td {
        padding: 18px 24px;
        border-bottom: 1px solid rgba(255,255,255,0.03);
        font-size: 14px;
        color: #e2e8f0;
        transition: background 0.2s;
    }
    
    /* Editable Cells */
    .editable-cell, .editable-status {
        cursor: pointer;
        position: relative;
        padding: 8px 12px !important; 
        border-radius: 6px;
        border: 1px solid transparent;
        transition: all 0.2s;
    }
    .editable-cell:hover, .editable-status:hover {
        background: rgba(255,255,255,0.05);
        border-color: rgba(255,255,255,0.1);
    }
    .editable-cell::after, .editable-status::after {
        content: '✎';
        position: absolute;
        right: 8px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 12px;
        color: #94a3b8;
        opacity: 0;
        transition: opacity 0.2s;
    }
    .editable-cell:hover::after, .editable-status:hover::after {
        opacity: 1;
    }

    .inline-edit-input {
        width: 100%;
        background: #0f172a;
        border: 1px solid #3b82f6;
        color: #fff;
        padding: 6px 10px;
        border-radius: 6px;
        font-size: 14px;
        outline: none;
        box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2);
    }

    /* Badges */
    .role-badge {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.3px;
        display: inline-block;
    }
    .badge-admin { background: rgba(16, 185, 129, 0.15); color: #34d399; }
    .badge-franchise { background: rgba(59, 130, 246, 0.15); color: #60a5fa; }
    .badge-user { background: rgba(148, 163, 184, 0.15); color: #cbd5e1; }
    .badge-inactive { background: rgba(239, 68, 68, 0.15); color: #ef4444; }

    /* Actions */
    .btn-action {
        background: rgba(239, 68, 68, 0.1);
        color: #ef4444;
        border: none;
        height: 34px;
        width: 34px;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.2s;
    }
    .btn-action:hover {
        background: #ef4444;
        color: #fff;
    }

    /* Toast Notification */
    #toast-notification {
        position: fixed;
        bottom: 30px;
        right: 30px;
        background: #10b981;
        color: #fff;
        padding: 12px 24px;
        border-radius: 8px;
        font-weight: 500;
        box-shadow: 0 10px 25px rgba(16, 185, 129, 0.3);
        transform: translateY(100px);
        opacity: 0;
        transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        z-index: 9999;
    }
    #toast-notification.show {
        transform: translateY(0);
        opacity: 1;
    }

    /* Delete Modal */
    .modal-overlay {
        position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(4px); display: none; align-items: center; justify-content: center; z-index: 9999; opacity: 0; transition: opacity 0.3s;
    }
    .modal-overlay.show { display: flex; opacity: 1; }
    .custom-modal {
        background: #1e293b; border-radius: 16px; padding: 30px; width: 400px; max-width: 90%; border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5); transform: translateY(-20px); transition: transform 0.3s;
    }
    .modal-overlay.show .custom-modal { transform: translateY(0); }
    .modal-icon { width: 60px; height: 60px; border-radius: 50%; background: rgba(239, 68, 68, 0.1); color: #ef4444; display: flex; align-items: center; justify-content: center; font-size: 28px; margin: 0 auto 20px; }
    .modal-title { color: #fff; font-size: 20px; font-weight: 700; text-align: center; margin-bottom: 10px; }
    .modal-text { color: #94a3b8; font-size: 14px; text-align: center; margin-bottom: 30px; line-height: 1.6; }
    .modal-actions { display: flex; gap: 15px; }
    .btn-cancel { flex: 1; padding: 12px; border-radius: 10px; background: rgba(255,255,255,0.05); color: #e2e8f0; font-weight: 600; border: 1px solid rgba(255,255,255,0.1); cursor: pointer; transition: all 0.2s; }
    .btn-cancel:hover { background: rgba(255,255,255,0.1); }
    .btn-confirm-delete { flex: 1; padding: 12px; border-radius: 10px; background: #ef4444; color: #fff; font-weight: 600; border: none; cursor: pointer; transition: all 0.2s; box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3); }
    .btn-confirm-delete:hover { background: #dc2626; transform: translateY(-2px); }

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 282
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 283
        yield "<div class=\"admin-container\">
    
    <!-- HEADER -->
    <div class=\"admin-header\">
        <div>
            <h1>Utilisateurs</h1>
            <p>Gérez vos utilisateurs. <b class=\"text-primary\">Double-cliquez</b> sur un champ ou un état pour le modifier.</p>
        </div>
        <div style=\"display: flex; gap: 12px;\">
            <button id=\"btn-export-pdf\" class=\"btn-new-user\" style=\"background: linear-gradient(135deg, #10b981 0%, #059669 100%);\">
                <i class=\"fas fa-file-pdf\"></i> Exporter PDF
            </button>
            <a href=\"";
        // line 295
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_new");
        yield "\" class=\"btn-new-user\">
                <i class=\"fas fa-plus\"></i> Ajouter un membre
            </a>
        </div>
    </div>

    <!-- STATS -->
    <div class=\"stats-container\">
        <div class=\"stat-card\">
            <div class=\"stat-icon icon-blue\">
                <i class=\"fas fa-users\"></i>
            </div>
            <div class=\"stat-details\">
                <h3>Total Utilisateurs</h3>
                <div class=\"stat-value\" id=\"stat-total\">";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 309, $this->source); })())), "html", null, true);
        yield "</div>
            </div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-icon icon-green\">
                <i class=\"fas fa-check-circle\"></i>
            </div>
            <div class=\"stat-details\">
                <h3>Actifs</h3>
                <div class=\"stat-value\" id=\"stat-active\">
                    ";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 320, $this->source); })()), function ($__u__) use ($context, $macros) { $context["u"] = $__u__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 320, $this->source); })()), "actif", [], "any", false, false, false, 320); })), "html", null, true);
        yield "
                </div>
            </div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-icon icon-red\">
                <i class=\"fas fa-ban\"></i>
            </div>
            <div class=\"stat-details\">
                <h3>Inactifs</h3>
                <div class=\"stat-value\" id=\"stat-inactive\">
                    ";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 332, $this->source); })()), function ($__u__) use ($context, $macros) { $context["u"] = $__u__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 332, $this->source); })()), "actif", [], "any", false, false, false, 332); })), "html", null, true);
        yield "
                </div>
            </div>
        </div>
    </div>

    <!-- TABLE AREA -->
    <div class=\"users-table-container\">
        <div class=\"table-toolbar\">
            <div style=\"display: flex; gap: 15px;\">
                <select id=\"status-filter\" class=\"search-input\" style=\"width: 180px; padding: 10px 15px;\">
                    <option value=\"all\">Tous les états</option>
                    <option value=\"1\">Actifs</option>
                    <option value=\"0\">Inactifs</option>
                </select>
            </div>
            <div class=\"search-wrapper\">
                <i class=\"fas fa-search\"></i>
                <input type=\"text\" id=\"search-input\" class=\"search-input\" placeholder=\"Rechercher...\">
            </div>
        </div>

        <table class=\"users-table\">
            <thead>
                <tr>
                    <th width=\"20%\">Nom</th>
                    <th width=\"20%\">Prénom</th>
                    <th width=\"30%\">Email</th>
                    <th width=\"10%\">Rôle</th>
                    <th width=\"10%\">État</th>
                    <th width=\"10%\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 366
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 366, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 367
            yield "                <tr data-user-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id_user", [], "any", false, false, false, 367), "html", null, true);
            yield "\">
                    <td class=\"editable-cell\" data-field=\"nom\" title=\"Double-cliquez pour modifier\">
                        <div class=\"cell-content\">";
            // line 369
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 369), "html", null, true);
            yield "</div>
                    </td>
                    <td class=\"editable-cell\" data-field=\"prenom\" title=\"Double-cliquez pour modifier\">
                        <div class=\"cell-content\">";
            // line 372
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 372), "html", null, true);
            yield "</div>
                    </td>
                    <td class=\"editable-cell\" data-field=\"email\" title=\"Double-cliquez pour modifier\">
                        <div class=\"cell-content\">";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 375), "html", null, true);
            yield "</div>
                    </td>
                    <td>
                        ";
            // line 378
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 378))) {
                // line 379
                yield "                            <span class=\"role-badge badge-admin\">Administrateur</span>
                        ";
            } elseif ((CoreExtension::inFilter("ROLE_FRANCHISE", CoreExtension::getAttribute($this->env, $this->source,             // line 380
$context["user"], "roles", [], "any", false, false, false, 380)) || CoreExtension::inFilter("ROLE_ENTREPRISE", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 380)))) {
                // line 381
                yield "                            <span class=\"role-badge badge-franchise\">Entreprise</span>
                        ";
            } else {
                // line 383
                yield "                            <span class=\"role-badge badge-user\">Utilisateur</span>
                        ";
            }
            // line 385
            yield "                    </td>
                    <td class=\"editable-status\" data-field=\"actif\" data-status=\"";
            // line 386
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "actif", [], "any", false, false, false, 386)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\" title=\"Double-cliquez pour basculer l'état\">
                        <div class=\"cell-content\">
                            <span class=\"role-badge ";
            // line 388
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "actif", [], "any", false, false, false, 388)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("badge-admin") : ("badge-inactive"));
            yield "\">
                                ";
            // line 389
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "actif", [], "any", false, false, false, 389)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                            </span>
                        </div>
                    </td>
                    <td>
                        <button class=\"btn-action btn-delete-user\" data-id=\"";
            // line 394
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id_user", [], "any", false, false, false, 394), "html", null, true);
            yield "\" title=\"Supprimer\">
                            <i class=\"fas fa-trash-alt\"></i>
                        </button>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 399
        if (!$context['_iterated']) {
            // line 400
            yield "                <tr>
                    <td colspan=\"6\" style=\"text-align: center; padding: 40px; color: #64748b;\">
                        Aucun utilisateur trouvé.
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 406
        yield "            </tbody>
        </table>
    </div>
</div>

<!-- TOAST -->
<div id=\"toast-notification\">
    <i class=\"fas fa-check-circle me-2\"></i> Modification enregistrée
</div>

<!-- DELETE MODAL -->
<div class=\"modal-overlay\" id=\"delete-modal\">
    <div class=\"custom-modal\">
        <div class=\"modal-icon\"><i class=\"fas fa-exclamation-triangle\"></i></div>
        <h3 class=\"modal-title\">Confirmer la suppression</h3>
        <p class=\"modal-text\">Êtes-vous sûr de vouloir supprimer cet utilisateur ? Cette action est irréversible et toutes les données associées seront perdues.</p>
        <div class=\"modal-actions\">
            <button class=\"btn-cancel\" id=\"btn-cancel-delete\">Annuler</button>
            <button class=\"btn-confirm-delete\" id=\"btn-confirm-delete\">Oui, supprimer</button>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 431
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 432
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.31/jspdf.plugin.autotable.min.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const editableCells = document.querySelectorAll('.editable-cell');
    const editableStatuses = document.querySelectorAll('.editable-status');

    // 1. TEXT EDITING
    editableCells.forEach(cell => {
        // Double-click to edit text
        cell.addEventListener('dblclick', function() {
            if (this.querySelector('input')) return; // Already editing
            
            const contentDiv = this.querySelector('.cell-content');
            const originalValue = contentDiv.innerText.trim();
            const tdElement = this;

            // Hide content, show input
            contentDiv.style.display = 'none';
            
            const input = document.createElement('input');
            input.type = 'text';
            input.className = 'inline-edit-input';
            input.value = originalValue;
            
            tdElement.appendChild(input);
            input.focus();
            
            // Move cursor to end
            input.setSelectionRange(input.value.length, input.value.length);

            // Handle Save
            const saveEdit = async () => {
                const newValue = input.value.trim();
                
                // Remove input, show content
                input.remove();
                contentDiv.style.display = 'block';

                if (newValue !== originalValue && newValue !== '') {
                    contentDiv.innerText = newValue; // Optimistic UI update
                    
                    const userId = tdElement.closest('tr').getAttribute('data-user-id');
                    const field = tdElement.getAttribute('data-field');
                    
                    try {
                        const response = await fetch(`/admin/user/\${userId}/edit-inline`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest'
                            },
                            body: JSON.stringify({ field: field, value: newValue })
                        });
                        
                        const data = await response.json();
                        
                        if (data.success) {
                            showToast('Modification enregistrée avec succès');
                        } else {
                            // Revert on failure
                            contentDiv.innerText = originalValue;
                            showToast('Erreur lors de la modification', true);
                        }
                    } catch (error) {
                        contentDiv.innerText = originalValue;
                        showToast('Erreur serveur', true);
                    }
                } else {
                    // Revert if empty or no change
                    contentDiv.innerText = originalValue;
                }
            };

            // Commit on Enter, Cancel on Escape, Commit on Blur
            input.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    saveEdit();
                } else if (e.key === 'Escape') {
                    input.remove();
                    contentDiv.style.display = 'block';
                }
            });
            
            input.addEventListener('blur', saveEdit);
        });
    });

    // 2. STATUS TOGGLE
    editableStatuses.forEach(cell => {
        cell.addEventListener('dblclick', async function() {
            const tdElement = this;
            const contentDiv = tdElement.querySelector('.cell-content');
            const userId = tdElement.closest('tr').getAttribute('data-user-id');
            const field = 'actif'; // or tdElement.getAttribute('data-field')
            
            const currentStatus = tdElement.getAttribute('data-status') === '1';
            const newStatus = !currentStatus; // Toggle
            
            tdElement.style.opacity = '0.5';

            try {
                const response = await fetch(`/admin/user/\${userId}/edit-inline`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                    body: JSON.stringify({ field: field, value: newStatus })
                });
                
                const data = await response.json();
                
                if (data.success) {
                    tdElement.setAttribute('data-status', newStatus ? '1' : '0');
                    if (newStatus) {
                        contentDiv.innerHTML = '<span class=\"role-badge badge-admin\">Actif</span>';
                        document.getElementById('stat-active').innerText = parseInt(document.getElementById('stat-active').innerText) + 1;
                        document.getElementById('stat-inactive').innerText = parseInt(document.getElementById('stat-inactive').innerText) - 1;
                    } else {
                        contentDiv.innerHTML = '<span class=\"role-badge badge-inactive\">Inactif</span>';
                        document.getElementById('stat-active').innerText = parseInt(document.getElementById('stat-active').innerText) - 1;
                        document.getElementById('stat-inactive').innerText = parseInt(document.getElementById('stat-inactive').innerText) + 1;
                    }
                    showToast('Statut mis à jour avec succès');
                    filterTable(); // Apply current filters to newly toggled state
                } else {
                    showToast('Erreur lors de la mise à jour', true);
                }
            } catch (error) {
                showToast('Erreur serveur', true);
            } finally {
                tdElement.style.opacity = '1';
            }
        });
    });

    // 3. SEARCH AND FILTER
    const searchInput = document.getElementById('search-input');
    const statusFilter = document.getElementById('status-filter');
    const tableRows = document.querySelectorAll('.users-table tbody tr[data-user-id]');

    function filterTable() {
        const searchTerm = searchInput.value.toLowerCase();
        const statusValue = statusFilter.value;

        tableRows.forEach(row => {
            const textContent = row.innerText.toLowerCase();
            const statusCell = row.querySelector('.editable-status');
            const rowStatus = statusCell ? statusCell.getAttribute('data-status') : null;
            
            const matchesSearch = textContent.includes(searchTerm);
            const matchesStatus = statusValue === 'all' || rowStatus === statusValue;
            
            if (matchesSearch && matchesStatus) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    searchInput.addEventListener('input', filterTable);
    statusFilter.addEventListener('change', filterTable);

    // 4. DELETE LOGIC & MODAL
    const deleteModal = document.getElementById('delete-modal');
    const deleteButtons = document.querySelectorAll('.btn-delete-user');
    const btnCancelDelete = document.getElementById('btn-cancel-delete');
    const btnConfirmDelete = document.getElementById('btn-confirm-delete');
    let userToDeleteId = null;
    let rowToDelete = null;

    deleteButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            userToDeleteId = this.getAttribute('data-id');
            rowToDelete = this.closest('tr');
            
            deleteModal.style.display = 'flex';
            setTimeout(() => { deleteModal.classList.add('show'); }, 10);
        });
    });

    const closeModal = () => {
        deleteModal.classList.remove('show');
        setTimeout(() => { deleteModal.style.display = 'none'; }, 300);
        userToDeleteId = null;
        rowToDelete = null;
    };

    btnCancelDelete.addEventListener('click', closeModal);
    
    deleteModal.addEventListener('click', function(e) {
        if (e.target === deleteModal) closeModal();
    });

    btnConfirmDelete.addEventListener('click', async function() {
        if (!userToDeleteId) return;
        
        btnConfirmDelete.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Suppression...';
        btnConfirmDelete.disabled = true;

        try {
            const response = await fetch(`/admin/user/\${userToDeleteId}/delete`, {
                method: 'DELETE',
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            });
            
            const data = await response.json();
            
            if (data.success) {
                // Update stats
                const statusCell = rowToDelete.querySelector('.editable-status');
                if (statusCell) {
                    if (statusCell.getAttribute('data-status') === '1') {
                        document.getElementById('stat-active').innerText = parseInt(document.getElementById('stat-active').innerText) - 1;
                    } else {
                        document.getElementById('stat-inactive').innerText = parseInt(document.getElementById('stat-inactive').innerText) - 1;
                    }
                }
                document.getElementById('stat-total').innerText = parseInt(document.getElementById('stat-total').innerText) - 1;

                // Instant removal without TR transition to fix whitespace bug
                rowToDelete.remove();
                
                // Check if table is empty, show empty state
                const tbody = document.querySelector('.users-table tbody');
                if (tbody.querySelectorAll('tr[data-user-id]').length === 0) {
                    tbody.innerHTML = '<tr><td colspan=\"6\" style=\"text-align: center; padding: 40px; color: #64748b;\">Aucun utilisateur trouvé.</td></tr>';
                }

                showToast('Utilisateur supprimé avec succès');
                closeModal();
            } else {
                showToast('Erreur lors de la suppression', true);
            }
        } catch (error) {
            showToast('Erreur serveur', true);
        } finally {
            btnConfirmDelete.innerHTML = 'Oui, supprimer';
            btnConfirmDelete.disabled = false;
        }
    });

    // Toast logic
    function showToast(message, isError = false) {
        const toast = document.getElementById('toast-notification');
        toast.innerHTML = isError ? `<i class=\"fas fa-exclamation-circle me-2\"></i> \${message}` : `<i class=\"fas fa-check-circle me-2\"></i> \${message}`;
        toast.style.background = isError ? '#ef4444' : '#10b981';
        
        toast.classList.add('show');
        
        setTimeout(() => {
            toast.classList.remove('show');
        }, 3000);
    }

    // 5. PDF EXPORT
    document.getElementById('btn-export-pdf').addEventListener('click', function() {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();
        
        doc.setFontSize(18);
        doc.text(\"Rapport des Utilisateurs - Boussole\", 14, 20);
        
        const rows = [];
        const displayedRows = document.querySelectorAll('.users-table tbody tr[data-user-id]');
        
        displayedRows.forEach(row => {
            if (row.style.display !== 'none') {
                const nom = row.cells[0].innerText.trim();
                const prenom = row.cells[1].innerText.trim();
                const email = row.cells[2].innerText.trim();
                const role = row.cells[3].innerText.trim();
                const status = row.cells[4].innerText.trim();
                rows.push([nom, prenom, email, role, status]);
            }
        });

        doc.autoTable({
            head: [['Nom', 'Prénom', 'Email', 'Rôle', 'État']],
            body: rows,
            startY: 30,
            styles: { font: 'helvetica', fontSize: 10 },
            headStyles: { fillColor: [59, 130, 246] }
        });

        doc.save('Utilisateurs_Boussole.pdf');
    });
});
</script>
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
        return array (  604 => 432,  594 => 431,  563 => 406,  552 => 400,  550 => 399,  540 => 394,  532 => 389,  528 => 388,  523 => 386,  520 => 385,  516 => 383,  512 => 381,  510 => 380,  507 => 379,  505 => 378,  499 => 375,  493 => 372,  487 => 369,  481 => 367,  476 => 366,  439 => 332,  424 => 320,  410 => 309,  393 => 295,  379 => 283,  369 => 282,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back_base.html.twig' %}

{% block title %}Gestion des Utilisateurs{% endblock %}

{% block stylesheets %}
<style>
    /* CSS - Modern Dark SaaS Theme */
    .admin-container {
        padding: 20px 30px;
        font-family: 'Inter', sans-serif;
        color: #e2e8f0;
    }
    
    .admin-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 35px;
    }
    .admin-header h1 {
        color: #ffffff;
        font-size: 28px;
        font-weight: 700;
        margin: 0 0 8px 0;
        letter-spacing: -0.5px;
    }
    .admin-header p {
        color: #94a3b8;
        font-size: 14px;
        margin: 0;
    }
    .btn-new-user {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        color: #fff;
        font-weight: 600;
        font-size: 14px;
        border: none;
        border-radius: 12px;
        padding: 12px 24px;
        cursor: pointer;
        transition: all 0.2s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
    }
    .btn-new-user:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(37, 99, 235, 0.3);
        color: #ffffff;
    }

    /* Stats Cards */
    .stats-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        margin-bottom: 35px;
    }
    .stat-card {
        background: rgba(30, 41, 59, 0.7);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 16px;
        padding: 24px;
        display: flex;
        align-items: center;
        gap: 20px;
        transition: transform 0.2s;
    }
    .stat-card:hover { transform: translateY(-3px); }
    
    .stat-icon {
        width: 56px;
        height: 56px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
    }
    .icon-blue { background: rgba(59, 130, 246, 0.1); color: #3b82f6; }
    .icon-green { background: rgba(16, 185, 129, 0.1); color: #10b981; }
    .icon-red { background: rgba(239, 68, 68, 0.1); color: #ef4444; }

    .stat-details h3 {
        font-size: 13px;
        font-weight: 600;
        color: #94a3b8;
        text-transform: uppercase;
        margin-bottom: 6px;
        letter-spacing: 0.5px;
    }
    .stat-details .stat-value {
        font-size: 28px;
        font-weight: 800;
        color: #ffffff;
    }

    /* Table Container */
    .users-table-container {
        background: #1e293b;
        border-radius: 16px;
        border: 1px solid rgba(255,255,255,0.05);
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .table-toolbar {
        padding: 20px 24px;
        border-bottom: 1px solid rgba(255,255,255,0.05);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .search-wrapper {
        position: relative;
        width: 300px;
    }
    .search-wrapper i {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #64748b;
    }
    .search-input {
        width: 100%;
        background: rgba(15, 23, 42, 0.6);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 10px;
        color: #fff;
        padding: 10px 15px 10px 40px;
        transition: all 0.2s;
    }
    .search-input:focus {
        outline: none;
        border-color: #3b82f6;
        background: rgba(15, 23, 42, 0.8);
    }

    .users-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
    }
    .users-table th {
        background: rgba(15, 23, 42, 0.4);
        padding: 15px 24px;
        color: #94a3b8;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border-bottom: 1px solid rgba(255,255,255,0.05);
    }
    .users-table td {
        padding: 18px 24px;
        border-bottom: 1px solid rgba(255,255,255,0.03);
        font-size: 14px;
        color: #e2e8f0;
        transition: background 0.2s;
    }
    
    /* Editable Cells */
    .editable-cell, .editable-status {
        cursor: pointer;
        position: relative;
        padding: 8px 12px !important; 
        border-radius: 6px;
        border: 1px solid transparent;
        transition: all 0.2s;
    }
    .editable-cell:hover, .editable-status:hover {
        background: rgba(255,255,255,0.05);
        border-color: rgba(255,255,255,0.1);
    }
    .editable-cell::after, .editable-status::after {
        content: '✎';
        position: absolute;
        right: 8px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 12px;
        color: #94a3b8;
        opacity: 0;
        transition: opacity 0.2s;
    }
    .editable-cell:hover::after, .editable-status:hover::after {
        opacity: 1;
    }

    .inline-edit-input {
        width: 100%;
        background: #0f172a;
        border: 1px solid #3b82f6;
        color: #fff;
        padding: 6px 10px;
        border-radius: 6px;
        font-size: 14px;
        outline: none;
        box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2);
    }

    /* Badges */
    .role-badge {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.3px;
        display: inline-block;
    }
    .badge-admin { background: rgba(16, 185, 129, 0.15); color: #34d399; }
    .badge-franchise { background: rgba(59, 130, 246, 0.15); color: #60a5fa; }
    .badge-user { background: rgba(148, 163, 184, 0.15); color: #cbd5e1; }
    .badge-inactive { background: rgba(239, 68, 68, 0.15); color: #ef4444; }

    /* Actions */
    .btn-action {
        background: rgba(239, 68, 68, 0.1);
        color: #ef4444;
        border: none;
        height: 34px;
        width: 34px;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.2s;
    }
    .btn-action:hover {
        background: #ef4444;
        color: #fff;
    }

    /* Toast Notification */
    #toast-notification {
        position: fixed;
        bottom: 30px;
        right: 30px;
        background: #10b981;
        color: #fff;
        padding: 12px 24px;
        border-radius: 8px;
        font-weight: 500;
        box-shadow: 0 10px 25px rgba(16, 185, 129, 0.3);
        transform: translateY(100px);
        opacity: 0;
        transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        z-index: 9999;
    }
    #toast-notification.show {
        transform: translateY(0);
        opacity: 1;
    }

    /* Delete Modal */
    .modal-overlay {
        position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(4px); display: none; align-items: center; justify-content: center; z-index: 9999; opacity: 0; transition: opacity 0.3s;
    }
    .modal-overlay.show { display: flex; opacity: 1; }
    .custom-modal {
        background: #1e293b; border-radius: 16px; padding: 30px; width: 400px; max-width: 90%; border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5); transform: translateY(-20px); transition: transform 0.3s;
    }
    .modal-overlay.show .custom-modal { transform: translateY(0); }
    .modal-icon { width: 60px; height: 60px; border-radius: 50%; background: rgba(239, 68, 68, 0.1); color: #ef4444; display: flex; align-items: center; justify-content: center; font-size: 28px; margin: 0 auto 20px; }
    .modal-title { color: #fff; font-size: 20px; font-weight: 700; text-align: center; margin-bottom: 10px; }
    .modal-text { color: #94a3b8; font-size: 14px; text-align: center; margin-bottom: 30px; line-height: 1.6; }
    .modal-actions { display: flex; gap: 15px; }
    .btn-cancel { flex: 1; padding: 12px; border-radius: 10px; background: rgba(255,255,255,0.05); color: #e2e8f0; font-weight: 600; border: 1px solid rgba(255,255,255,0.1); cursor: pointer; transition: all 0.2s; }
    .btn-cancel:hover { background: rgba(255,255,255,0.1); }
    .btn-confirm-delete { flex: 1; padding: 12px; border-radius: 10px; background: #ef4444; color: #fff; font-weight: 600; border: none; cursor: pointer; transition: all 0.2s; box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3); }
    .btn-confirm-delete:hover { background: #dc2626; transform: translateY(-2px); }

</style>
{% endblock %}

{% block body %}
<div class=\"admin-container\">
    
    <!-- HEADER -->
    <div class=\"admin-header\">
        <div>
            <h1>Utilisateurs</h1>
            <p>Gérez vos utilisateurs. <b class=\"text-primary\">Double-cliquez</b> sur un champ ou un état pour le modifier.</p>
        </div>
        <div style=\"display: flex; gap: 12px;\">
            <button id=\"btn-export-pdf\" class=\"btn-new-user\" style=\"background: linear-gradient(135deg, #10b981 0%, #059669 100%);\">
                <i class=\"fas fa-file-pdf\"></i> Exporter PDF
            </button>
            <a href=\"{{ path('app_admin_user_new') }}\" class=\"btn-new-user\">
                <i class=\"fas fa-plus\"></i> Ajouter un membre
            </a>
        </div>
    </div>

    <!-- STATS -->
    <div class=\"stats-container\">
        <div class=\"stat-card\">
            <div class=\"stat-icon icon-blue\">
                <i class=\"fas fa-users\"></i>
            </div>
            <div class=\"stat-details\">
                <h3>Total Utilisateurs</h3>
                <div class=\"stat-value\" id=\"stat-total\">{{ users|length }}</div>
            </div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-icon icon-green\">
                <i class=\"fas fa-check-circle\"></i>
            </div>
            <div class=\"stat-details\">
                <h3>Actifs</h3>
                <div class=\"stat-value\" id=\"stat-active\">
                    {{ users|filter(u => u.actif)|length }}
                </div>
            </div>
        </div>

        <div class=\"stat-card\">
            <div class=\"stat-icon icon-red\">
                <i class=\"fas fa-ban\"></i>
            </div>
            <div class=\"stat-details\">
                <h3>Inactifs</h3>
                <div class=\"stat-value\" id=\"stat-inactive\">
                    {{ users|filter(u => not u.actif)|length }}
                </div>
            </div>
        </div>
    </div>

    <!-- TABLE AREA -->
    <div class=\"users-table-container\">
        <div class=\"table-toolbar\">
            <div style=\"display: flex; gap: 15px;\">
                <select id=\"status-filter\" class=\"search-input\" style=\"width: 180px; padding: 10px 15px;\">
                    <option value=\"all\">Tous les états</option>
                    <option value=\"1\">Actifs</option>
                    <option value=\"0\">Inactifs</option>
                </select>
            </div>
            <div class=\"search-wrapper\">
                <i class=\"fas fa-search\"></i>
                <input type=\"text\" id=\"search-input\" class=\"search-input\" placeholder=\"Rechercher...\">
            </div>
        </div>

        <table class=\"users-table\">
            <thead>
                <tr>
                    <th width=\"20%\">Nom</th>
                    <th width=\"20%\">Prénom</th>
                    <th width=\"30%\">Email</th>
                    <th width=\"10%\">Rôle</th>
                    <th width=\"10%\">État</th>
                    <th width=\"10%\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for user in users %}
                <tr data-user-id=\"{{ user.id_user }}\">
                    <td class=\"editable-cell\" data-field=\"nom\" title=\"Double-cliquez pour modifier\">
                        <div class=\"cell-content\">{{ user.nom }}</div>
                    </td>
                    <td class=\"editable-cell\" data-field=\"prenom\" title=\"Double-cliquez pour modifier\">
                        <div class=\"cell-content\">{{ user.prenom }}</div>
                    </td>
                    <td class=\"editable-cell\" data-field=\"email\" title=\"Double-cliquez pour modifier\">
                        <div class=\"cell-content\">{{ user.email }}</div>
                    </td>
                    <td>
                        {% if 'ROLE_ADMIN' in user.roles %}
                            <span class=\"role-badge badge-admin\">Administrateur</span>
                        {% elseif 'ROLE_FRANCHISE' in user.roles or 'ROLE_ENTREPRISE' in user.roles %}
                            <span class=\"role-badge badge-franchise\">Entreprise</span>
                        {% else %}
                            <span class=\"role-badge badge-user\">Utilisateur</span>
                        {% endif %}
                    </td>
                    <td class=\"editable-status\" data-field=\"actif\" data-status=\"{{ user.actif ? '1' : '0' }}\" title=\"Double-cliquez pour basculer l'état\">
                        <div class=\"cell-content\">
                            <span class=\"role-badge {{ user.actif ? 'badge-admin' : 'badge-inactive' }}\">
                                {{ user.actif ? 'Actif' : 'Inactif' }}
                            </span>
                        </div>
                    </td>
                    <td>
                        <button class=\"btn-action btn-delete-user\" data-id=\"{{ user.id_user }}\" title=\"Supprimer\">
                            <i class=\"fas fa-trash-alt\"></i>
                        </button>
                    </td>
                </tr>
                {% else %}
                <tr>
                    <td colspan=\"6\" style=\"text-align: center; padding: 40px; color: #64748b;\">
                        Aucun utilisateur trouvé.
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>

<!-- TOAST -->
<div id=\"toast-notification\">
    <i class=\"fas fa-check-circle me-2\"></i> Modification enregistrée
</div>

<!-- DELETE MODAL -->
<div class=\"modal-overlay\" id=\"delete-modal\">
    <div class=\"custom-modal\">
        <div class=\"modal-icon\"><i class=\"fas fa-exclamation-triangle\"></i></div>
        <h3 class=\"modal-title\">Confirmer la suppression</h3>
        <p class=\"modal-text\">Êtes-vous sûr de vouloir supprimer cet utilisateur ? Cette action est irréversible et toutes les données associées seront perdues.</p>
        <div class=\"modal-actions\">
            <button class=\"btn-cancel\" id=\"btn-cancel-delete\">Annuler</button>
            <button class=\"btn-confirm-delete\" id=\"btn-confirm-delete\">Oui, supprimer</button>
        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.31/jspdf.plugin.autotable.min.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const editableCells = document.querySelectorAll('.editable-cell');
    const editableStatuses = document.querySelectorAll('.editable-status');

    // 1. TEXT EDITING
    editableCells.forEach(cell => {
        // Double-click to edit text
        cell.addEventListener('dblclick', function() {
            if (this.querySelector('input')) return; // Already editing
            
            const contentDiv = this.querySelector('.cell-content');
            const originalValue = contentDiv.innerText.trim();
            const tdElement = this;

            // Hide content, show input
            contentDiv.style.display = 'none';
            
            const input = document.createElement('input');
            input.type = 'text';
            input.className = 'inline-edit-input';
            input.value = originalValue;
            
            tdElement.appendChild(input);
            input.focus();
            
            // Move cursor to end
            input.setSelectionRange(input.value.length, input.value.length);

            // Handle Save
            const saveEdit = async () => {
                const newValue = input.value.trim();
                
                // Remove input, show content
                input.remove();
                contentDiv.style.display = 'block';

                if (newValue !== originalValue && newValue !== '') {
                    contentDiv.innerText = newValue; // Optimistic UI update
                    
                    const userId = tdElement.closest('tr').getAttribute('data-user-id');
                    const field = tdElement.getAttribute('data-field');
                    
                    try {
                        const response = await fetch(`/admin/user/\${userId}/edit-inline`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest'
                            },
                            body: JSON.stringify({ field: field, value: newValue })
                        });
                        
                        const data = await response.json();
                        
                        if (data.success) {
                            showToast('Modification enregistrée avec succès');
                        } else {
                            // Revert on failure
                            contentDiv.innerText = originalValue;
                            showToast('Erreur lors de la modification', true);
                        }
                    } catch (error) {
                        contentDiv.innerText = originalValue;
                        showToast('Erreur serveur', true);
                    }
                } else {
                    // Revert if empty or no change
                    contentDiv.innerText = originalValue;
                }
            };

            // Commit on Enter, Cancel on Escape, Commit on Blur
            input.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    saveEdit();
                } else if (e.key === 'Escape') {
                    input.remove();
                    contentDiv.style.display = 'block';
                }
            });
            
            input.addEventListener('blur', saveEdit);
        });
    });

    // 2. STATUS TOGGLE
    editableStatuses.forEach(cell => {
        cell.addEventListener('dblclick', async function() {
            const tdElement = this;
            const contentDiv = tdElement.querySelector('.cell-content');
            const userId = tdElement.closest('tr').getAttribute('data-user-id');
            const field = 'actif'; // or tdElement.getAttribute('data-field')
            
            const currentStatus = tdElement.getAttribute('data-status') === '1';
            const newStatus = !currentStatus; // Toggle
            
            tdElement.style.opacity = '0.5';

            try {
                const response = await fetch(`/admin/user/\${userId}/edit-inline`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                    body: JSON.stringify({ field: field, value: newStatus })
                });
                
                const data = await response.json();
                
                if (data.success) {
                    tdElement.setAttribute('data-status', newStatus ? '1' : '0');
                    if (newStatus) {
                        contentDiv.innerHTML = '<span class=\"role-badge badge-admin\">Actif</span>';
                        document.getElementById('stat-active').innerText = parseInt(document.getElementById('stat-active').innerText) + 1;
                        document.getElementById('stat-inactive').innerText = parseInt(document.getElementById('stat-inactive').innerText) - 1;
                    } else {
                        contentDiv.innerHTML = '<span class=\"role-badge badge-inactive\">Inactif</span>';
                        document.getElementById('stat-active').innerText = parseInt(document.getElementById('stat-active').innerText) - 1;
                        document.getElementById('stat-inactive').innerText = parseInt(document.getElementById('stat-inactive').innerText) + 1;
                    }
                    showToast('Statut mis à jour avec succès');
                    filterTable(); // Apply current filters to newly toggled state
                } else {
                    showToast('Erreur lors de la mise à jour', true);
                }
            } catch (error) {
                showToast('Erreur serveur', true);
            } finally {
                tdElement.style.opacity = '1';
            }
        });
    });

    // 3. SEARCH AND FILTER
    const searchInput = document.getElementById('search-input');
    const statusFilter = document.getElementById('status-filter');
    const tableRows = document.querySelectorAll('.users-table tbody tr[data-user-id]');

    function filterTable() {
        const searchTerm = searchInput.value.toLowerCase();
        const statusValue = statusFilter.value;

        tableRows.forEach(row => {
            const textContent = row.innerText.toLowerCase();
            const statusCell = row.querySelector('.editable-status');
            const rowStatus = statusCell ? statusCell.getAttribute('data-status') : null;
            
            const matchesSearch = textContent.includes(searchTerm);
            const matchesStatus = statusValue === 'all' || rowStatus === statusValue;
            
            if (matchesSearch && matchesStatus) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    searchInput.addEventListener('input', filterTable);
    statusFilter.addEventListener('change', filterTable);

    // 4. DELETE LOGIC & MODAL
    const deleteModal = document.getElementById('delete-modal');
    const deleteButtons = document.querySelectorAll('.btn-delete-user');
    const btnCancelDelete = document.getElementById('btn-cancel-delete');
    const btnConfirmDelete = document.getElementById('btn-confirm-delete');
    let userToDeleteId = null;
    let rowToDelete = null;

    deleteButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            userToDeleteId = this.getAttribute('data-id');
            rowToDelete = this.closest('tr');
            
            deleteModal.style.display = 'flex';
            setTimeout(() => { deleteModal.classList.add('show'); }, 10);
        });
    });

    const closeModal = () => {
        deleteModal.classList.remove('show');
        setTimeout(() => { deleteModal.style.display = 'none'; }, 300);
        userToDeleteId = null;
        rowToDelete = null;
    };

    btnCancelDelete.addEventListener('click', closeModal);
    
    deleteModal.addEventListener('click', function(e) {
        if (e.target === deleteModal) closeModal();
    });

    btnConfirmDelete.addEventListener('click', async function() {
        if (!userToDeleteId) return;
        
        btnConfirmDelete.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Suppression...';
        btnConfirmDelete.disabled = true;

        try {
            const response = await fetch(`/admin/user/\${userToDeleteId}/delete`, {
                method: 'DELETE',
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            });
            
            const data = await response.json();
            
            if (data.success) {
                // Update stats
                const statusCell = rowToDelete.querySelector('.editable-status');
                if (statusCell) {
                    if (statusCell.getAttribute('data-status') === '1') {
                        document.getElementById('stat-active').innerText = parseInt(document.getElementById('stat-active').innerText) - 1;
                    } else {
                        document.getElementById('stat-inactive').innerText = parseInt(document.getElementById('stat-inactive').innerText) - 1;
                    }
                }
                document.getElementById('stat-total').innerText = parseInt(document.getElementById('stat-total').innerText) - 1;

                // Instant removal without TR transition to fix whitespace bug
                rowToDelete.remove();
                
                // Check if table is empty, show empty state
                const tbody = document.querySelector('.users-table tbody');
                if (tbody.querySelectorAll('tr[data-user-id]').length === 0) {
                    tbody.innerHTML = '<tr><td colspan=\"6\" style=\"text-align: center; padding: 40px; color: #64748b;\">Aucun utilisateur trouvé.</td></tr>';
                }

                showToast('Utilisateur supprimé avec succès');
                closeModal();
            } else {
                showToast('Erreur lors de la suppression', true);
            }
        } catch (error) {
            showToast('Erreur serveur', true);
        } finally {
            btnConfirmDelete.innerHTML = 'Oui, supprimer';
            btnConfirmDelete.disabled = false;
        }
    });

    // Toast logic
    function showToast(message, isError = false) {
        const toast = document.getElementById('toast-notification');
        toast.innerHTML = isError ? `<i class=\"fas fa-exclamation-circle me-2\"></i> \${message}` : `<i class=\"fas fa-check-circle me-2\"></i> \${message}`;
        toast.style.background = isError ? '#ef4444' : '#10b981';
        
        toast.classList.add('show');
        
        setTimeout(() => {
            toast.classList.remove('show');
        }, 3000);
    }

    // 5. PDF EXPORT
    document.getElementById('btn-export-pdf').addEventListener('click', function() {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();
        
        doc.setFontSize(18);
        doc.text(\"Rapport des Utilisateurs - Boussole\", 14, 20);
        
        const rows = [];
        const displayedRows = document.querySelectorAll('.users-table tbody tr[data-user-id]');
        
        displayedRows.forEach(row => {
            if (row.style.display !== 'none') {
                const nom = row.cells[0].innerText.trim();
                const prenom = row.cells[1].innerText.trim();
                const email = row.cells[2].innerText.trim();
                const role = row.cells[3].innerText.trim();
                const status = row.cells[4].innerText.trim();
                rows.push([nom, prenom, email, role, status]);
            }
        });

        doc.autoTable({
            head: [['Nom', 'Prénom', 'Email', 'Rôle', 'État']],
            body: rows,
            startY: 30,
            styles: { font: 'helvetica', fontSize: 10 },
            headStyles: { fillColor: [59, 130, 246] }
        });

        doc.save('Utilisateurs_Boussole.pdf');
    });
});
</script>
{% endblock %}
", "admin_user/index.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\admin_user\\index.html.twig");
    }
}
