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

/* bilan/bilan.html.twig */
class __TwigTemplate_28041c17c173be48e406e4bf6a18e6fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan/bilan.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan/bilan.html.twig"));

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

        yield "Reporting Financier";
        
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
    h1 { color: #ffffff; font-weight: 700; font-size: 2.2rem; }
    .subtitle { color: #64748b; font-size: 1rem; margin-bottom: 2rem; }
    
    .dashboard-card { 
        background-color: #121626; 
        border: 1px solid #1e293b; 
        border-radius: 12px;
        padding: 1.5rem;
    }
    
    .filter-label { color: #a0aec0; font-size: 0.9rem; margin-right: 0.5rem; font-weight: 500; }
    .custom-select, .custom-input { 
        background-color: #1a2035; 
        color: #f8fafc; 
        border: 1px solid #2d3748; 
        border-radius: 8px;
        padding: 0.5rem 1rem;
        outline: none;
    }
    .custom-select:focus, .custom-input:focus { border-color: #00d4ff; box-shadow: 0 0 5px rgba(0, 212, 255, 0.2); }
    
    .btn-action { padding: 0.6rem 1.2rem; border: none; border-radius: 20px; font-weight: 600; cursor: pointer; transition: all 0.2s; color: #000; display: inline-flex; align-items: center; gap: 0.5rem; }
    .btn-generate { background-color: #00ffcc; box-shadow: 0 0 10px rgba(0, 255, 204, 0.4); }
    .btn-generate:hover { background-color: #00e6b8; box-shadow: 0 0 15px rgba(0, 255, 204, 0.6); }
    .btn-export { background-color: #3b82f6; color: white; box-shadow: 0 0 10px rgba(59, 130, 246, 0.4); }
    .btn-export:hover { background-color: #2563eb; }
    .btn-email { background-color: #10b981; color: white; box-shadow: 0 0 10px rgba(16, 185, 129, 0.4); }
    .btn-email:hover { background-color: #059669; }

    .hint-text { color: #475569; font-size: 0.8rem; font-style: italic; }

    .table-container { margin-top: 2rem; overflow-x: auto; }
    h4 { color: #ffffff; font-weight: 600; margin-bottom: 1.5rem; }
    .custom-table { width: 100%; border-collapse: collapse; color: #f8fafc; }
    .custom-table th {
        color: #00d4ff;
        font-size: 0.8rem;
        font-weight: 700;
        text-transform: uppercase;
        padding: 1rem;
        border-bottom: 2px solid #1a2035;
        text-align: left;
    }
    .custom-table td {
        padding: 1rem;
        font-size: 0.95rem;
        border-bottom: 1px solid #1e293b;
        vertical-align: middle;
        transition: background-color 0.2s;
    }
    .custom-table tbody tr { transition: background-color 0.2s; cursor: pointer; }
    .custom-table tbody tr:hover { background-color: #161b2e; }
    .custom-table tbody tr.selected { background-color: #1a233a; }
    
    .status-benef { color: #10b981; font-weight: 600; }
    .status-equil { color: #a0aec0; font-weight: 500; }
    .status-defic { color: #ef4444; font-weight: 600; }

    /* Editable cell styling */
    .editable-cell { cursor: text; padding: 4px 8px; border-radius: 6px; border: 1px solid transparent; transition: all 0.2s; display: inline-block; min-width: 80px;}
    .editable-cell:hover { border-color: #2d3748; background-color: rgba(255,255,255,0.02); }
    .editable-input { 
        background: #1a2035; 
        color: white; 
        border: 1px solid #00d4ff; 
        border-radius: 6px; 
        padding: 4px 8px; 
        outline: none; 
        width: 100px;
        box-shadow: 0 0 5px rgba(0, 212, 255, 0.2);
        -moz-appearance: textfield; /* Firefox */
    }
    .editable-input::-webkit-outer-spin-button,
    .editable-input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
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

        // line 90
        yield "<div class=\"container-fluid mt-4 mb-5 px-4\">
    <h1>Reporting Financier</h1>
    <p class=\"subtitle\">Génération et export des bilans mensuels</p>

    <div class=\"dashboard-card\">
        <div class=\"row align-items-center g-3\">
            <div class=\"col-auto d-flex align-items-center\">
                <span class=\"filter-label\">Cible :</span>
                <select id=\"filterCible\" class=\"custom-select\">
                    <option value=\"\">TOUT LE RÉSEAU</option>
                    ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["franchises"]) || array_key_exists("franchises", $context) ? $context["franchises"] : (function () { throw new RuntimeError('Variable "franchises" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 101
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 101), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "nom", [], "any", false, false, false, 101), "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['f'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "                </select>
            </div>
            <div class=\"col-auto d-flex align-items-center\">
                <span class=\"filter-label\">Période :</span>
                ";
        // line 107
        $context["months"] = ["1 - Janvier", "2 - Février", "3 - Mars", "4 - Avril", "5 - Mai", "6 - Juin", "7 - Juillet", "8 - Août", "9 - Septembre", "10 - Octobre", "11 - Novembre", "12 - Décembre"];
        // line 108
        yield "                <select id=\"filterMois\" class=\"custom-select me-2\">
                    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 110
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" ";
            if (($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "n") == $context["i"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["months"]) || array_key_exists("months", $context) ? $context["months"] : (function () { throw new RuntimeError('Variable "months" does not exist.', 110, $this->source); })()), ($context["i"] - 1), [], "array", false, false, false, 110), "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "                </select>
                <select id=\"filterAnnee\" class=\"custom-select\">
                    ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(2024, 2030));
        foreach ($context['_seq'] as $context["_key"] => $context["y"]) {
            // line 115
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["y"], "html", null, true);
            yield "\" ";
            if (($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y") == $context["y"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["y"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['y'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        yield "                </select>
            </div>
            <div class=\"col-auto ms-auto d-flex gap-3 align-items-center\">
                <button id=\"btn-generate\" class=\"btn-action btn-generate\">
                    <i class=\"fas fa-plus\"></i> Générer / Recalculer
                </button>
                <button class=\"btn-action btn-export\">
                    <i class=\"fas fa-arrow-down\"></i> Exporter PDF
                </button>
                <button class=\"btn-action btn-email\">
                    <i class=\"fas fa-envelope\"></i> Envoyer Bilan par Email
                </button>
                <span class=\"hint-text ms-2\">↑ Sélectionnez une ligne puis cliquez</span>
            </div>
        </div>

        <div class=\"table-container mt-5\">
            <h4>Historique des Bilans</h4>
            <table class=\"custom-table\" id=\"bilansTable\">
                <thead>
                    <tr>
                        <th>FRANCHISE</th>
                        <th>MOIS</th>
                        <th>ANNÉE</th>
                        <th>RECETTES (TND)</th>
                        <th>CHARGES (TND)</th>
                        <th>RÉSULTAT NET</th>
                        <th>RENTABILITÉ</th>
                        <th class=\"text-center\" style=\"width: 40px;\"></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bilans"]) || array_key_exists("bilans", $context) ? $context["bilans"] : (function () { throw new RuntimeError('Variable "bilans" does not exist.', 149, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bilan"]) {
            // line 150
            yield "                    <tr data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "id", [], "any", false, false, false, 150), "html", null, true);
            yield "\">
                        <td style=\"color: #cbd5e1;\">
                            ";
            // line 152
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "franchiseId", [], "any", false, false, false, 152)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 153
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "franchiseId", [], "any", false, false, false, 153), "nom", [], "any", false, false, false, 153), "html", null, true);
                yield "
                            ";
            } else {
                // line 155
                yield "                                SIEGE_PRINCIPAL
                            ";
            }
            // line 157
            yield "                        </td>
                        <td>
                            <div class=\"editable-cell\" data-field=\"mois\" title=\"Double-cliquer pour modifier\">
                                <span class=\"value\">";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "mois", [], "any", false, false, false, 160), "html", null, true);
            yield "</span>
                            </div>
                        </td>
                        <td>
                            <div class=\"editable-cell\" data-field=\"annee\" title=\"Double-cliquer pour modifier\">
                                <span class=\"value\">";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "annee", [], "any", false, false, false, 165), "html", null, true);
            yield "</span>
                            </div>
                        </td>
                        
                        <!-- Editable Fields -->
                        <td>
                            <div class=\"editable-cell\" data-field=\"total_recettes\" title=\"Double-cliquer pour modifier\">
                                <span class=\"value\">";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "totalRecettes", [], "any", false, false, false, 172), 2, ".", ""), "html", null, true);
            yield " TND</span>
                            </div>
                        </td>
                        <td>
                            <div class=\"editable-cell\" data-field=\"total_charges\" title=\"Double-cliquer pour modifier\">
                                <span class=\"value\">";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "totalCharges", [], "any", false, false, false, 177), 2, ".", ""), "html", null, true);
            yield " TND</span>
                            </div>
                        </td>
                        
                        <td class=\"result-net\" style=\"color: #cbd5e1;\">
                            ";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "resultatNet", [], "any", false, false, false, 182), 1, ".", ""), "html", null, true);
            yield "
                        </td>
                        <td class=\"rentabilite\">
                            ";
            // line 185
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "resultatNet", [], "any", false, false, false, 185) > 0)) {
                // line 186
                yield "                                <span class=\"status-benef\">✓ Bénéficiaire</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 187
$context["bilan"], "resultatNet", [], "any", false, false, false, 187) < 0)) {
                // line 188
                yield "                                <span class=\"status-defic\">✗ Déficitaire</span>
                            ";
            } else {
                // line 190
                yield "                                <span class=\"status-equil\">— Équilibré</span>
                            ";
            }
            // line 192
            yield "                        </td>
                        <td class=\"text-center align-middle\">
                            <i class=\"fas fa-trash text-muted delete-row-btn\" style=\"cursor: pointer; transition: color 0.2s;\" onmouseover=\"this.style.color='#ef4444';\" onmouseout=\"this.style.color=''\" data-id=\"";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "id", [], "any", false, false, false, 194), "html", null, true);
            yield "\" title=\"Supprimer ce bilan\"></i>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 197
        if (!$context['_iterated']) {
            // line 198
            yield "                    <tr>
                        <td colspan=\"8\" class=\"text-center py-5 text-muted\">Aucun historique disponible.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['bilan'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        yield "                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- SweetAlert2 pour les notifications -->
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {

    const Toast = Swal.mixin({
        toast: true, position: 'top-end', showConfirmButton: false, timer: 3000,
        background: '#1e293b', color: '#fff'
    });

    // 1. GENERER ACTION
    const btnGenerate = document.getElementById('btn-generate');
    if(btnGenerate) {
        btnGenerate.addEventListener('click', async () => {
            const cible = document.getElementById('filterCible').value;
            const mois = document.getElementById('filterMois').value;
            const annee = document.getElementById('filterAnnee').value;

            btnGenerate.disabled = true;
            btnGenerate.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Traitement...';

            try {
                const response = await fetch('/bilan/generate-ajax', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ cible, mois, annee })
                });

                const data = await response.json();

                if (data.success) {
                    await Toast.fire({ icon: 'success', title: data.message });
                    window.location.reload();
                } else {
                    Toast.fire({ icon: 'error', title: data.message || \"Erreur\" });
                }
            } catch (err) {
                console.error(err);
                Toast.fire({ icon: 'error', title: 'Erreur serveur.' });
            } finally {
                btnGenerate.disabled = false;
                btnGenerate.innerHTML = '<i class=\"fas fa-plus\"></i> Générer / Recalculer';
            }
        });
    }

        // DECLARATION COMMUNE POUR DELETE ET EDIT
        const table = document.getElementById('bilansTable');

        if (table) {
            // 2. SUPPRESSION VIA ICONE CORBEILLE (CRUD Delete)
            document.querySelectorAll('.delete-row-btn').forEach(btn => {
                btn.addEventListener('click', async (e) => {
                    e.stopPropagation();
                    const id = btn.dataset.id;
                    const row = btn.closest('tr');

                const confirm = await Swal.fire({
                    title: 'Supprimer ce bilan ?',
                    text: 'Cette action est définitive.',
                    icon: 'warning',
                    background: '#1e293b', color: '#fff',
                    showCancelButton: true,
                    confirmButtonColor: '#ef4444', cancelButtonColor: '#334155',
                    confirmButtonText: 'Oui, supprimer', cancelButtonText: 'Annuler'
                });

                if (confirm.isConfirmed) {
                    try {
                        const res = await fetch('/bilan/' + id + '/delete-ajax', { method: 'POST' });
                        const data = await res.json();
                        if (data.success) {
                            row.style.opacity = '0';
                            row.style.transform = 'translateY(10px) scale(0.98)';
                            row.style.transition = 'all 0.4s';
                            setTimeout(() => {
                                row.remove();
                                if (document.querySelectorAll('#bilansTable tbody tr').length === 0) {
                                  document.querySelector('#bilansTable tbody').innerHTML = '<tr><td colspan=\"8\" class=\"text-center py-5 text-muted\">Aucun historique disponible.</td></tr>';
                                }
                            }, 400);
                            Toast.fire({ icon: 'success', title: 'Bilan supprimé.' });
                        }
                    } catch (err) {
                        Toast.fire({ icon: 'error', title: 'Erreur lors de la suppression.' });
                    }
                }
            });
        });

        // 3. INLINE EDIT (DOUBLE CLICK)
        table.addEventListener('dblclick', (e) => {
            const cell = e.target.closest('.editable-cell');
            if (!cell) return;
            if (cell.querySelector('input')) return; // déjà en édition

            const spanValue = cell.querySelector('.value');
            const field = cell.dataset.field;
            let currentText = spanValue.innerText.replace(' TND', '');
            let currentValue = parseFloat(currentText);
            if(isNaN(currentValue)) currentValue = 0;

            const input = document.createElement('input');
            input.type = 'number';
            
            if (field === 'mois' || field === 'annee') {
                input.step = '1';
                if (field === 'mois') { input.min = '1'; input.max = '12'; }
                else { input.min = '2024'; input.max = '2030'; }
            } else {
                input.step = '0.01';
                input.min = '0';
            }
            
            input.value = currentValue;
            input.className = 'editable-input';

            cell.innerHTML = '';
            cell.appendChild(input);
            input.focus();

            const saveChange = async () => {
                const newValue = input.value.trim();
                const tr = cell.closest('tr');
                
                if (newValue === '') {
                    restoreCell(currentValue);
                    return;
                }
                
                let navVal = parseFloat(newValue);
                if (field === 'mois' && (navVal < 1 || navVal > 12)) {
                    Toast.fire({ icon: 'warning', title: 'Mois invalide (1-12).' });
                    input.focus();
                    return;
                } else if (field === 'annee' && (navVal < 2024 || navVal > 2030)) {
                    Toast.fire({ icon: 'warning', title: 'Année invalide (2024-2030).' });
                    input.focus();
                    return;
                } else if ((field === 'total_recettes' || field === 'total_charges') && navVal < 0) {
                    Toast.fire({ icon: 'warning', title: 'Veuillez entrer un montant positif.' });
                    input.focus();
                    return;
                }
                // Revert si vide ou non changé
                if (newValue === '' || parseFloat(newValue) === currentValue) {
                    restoreCell(currentValue);
                    return;
                }

                try {
                    const payload = {};
                    payload[field] = newValue;

                    const res = await fetch('/bilan/' + tr.dataset.id + '/edit-ajax', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(payload)
                    });

                    const data = await res.json();
                    if (data.success) {
                        restoreCell(parseFloat(newValue));
                        
                        // MàJ Résultat Net
                        const resCell = tr.querySelector('.result-net');
                        const resValue = parseFloat(data.resultat_net);
                        resCell.innerText = resValue.toFixed(1);
                        
                        // MàJ Rentabilité
                        const rentCell = tr.querySelector('.rentabilite');
                        if(resValue > 0) {
                            rentCell.innerHTML = '<span class=\"status-benef\">✓ Bénéficiaire</span>';
                        } else if(resValue < 0) {
                            rentCell.innerHTML = '<span class=\"status-defic\">✗ Déficitaire</span>';
                        } else {
                            rentCell.innerHTML = '<span class=\"status-equil\">— Équilibré</span>';
                        }

                        Toast.fire({ icon: 'success', title: 'Mis à jour !' });
                    } else {
                        restoreCell(currentValue);
                        Toast.fire({ icon: 'error', title: data.message });
                    }
                } catch (err) {
                    restoreCell(currentValue);
                    Toast.fire({ icon: 'error', title: 'Erreur réseau.' });
                }
            };

            function restoreCell(val) {
                if (field === 'mois' || field === 'annee') {
                    cell.innerHTML = '<span class=\"value\">' + parseFloat(val) + '</span>';
                } else {
                    cell.innerHTML = '<span class=\"value\">' + parseFloat(val).toFixed(2) + ' TND</span>';
                }
            }

            // Sur 'blur' (quand on clique ailleurs), on bloque si mal saisi, sinon on sauvegarde
            input.addEventListener('blur', (e) => {
                const navVal = parseFloat(input.value.trim());
                if (input.value.trim() === '') {
                    restoreCell(currentValue);
                    return;
                }
                
                if (field === 'mois' && (navVal >= 1 && navVal <= 12)) { saveChange(); }
                else if (field === 'annee' && (navVal >= 2024 && navVal <= 2030)) { saveChange(); }
                else if ((field === 'total_recettes' || field === 'total_charges') && navVal >= 0) { saveChange(); }
                else { restoreCell(currentValue); } // Sinon on annule silencieusement
            });
            input.addEventListener('keypress', (e) => {
                if (e.key === 'Enter') input.blur();
            });
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
        return "bilan/bilan.html.twig";
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
        return array (  427 => 202,  418 => 198,  416 => 197,  408 => 194,  404 => 192,  400 => 190,  396 => 188,  394 => 187,  391 => 186,  389 => 185,  383 => 182,  375 => 177,  367 => 172,  357 => 165,  349 => 160,  344 => 157,  340 => 155,  334 => 153,  332 => 152,  326 => 150,  321 => 149,  287 => 117,  272 => 115,  268 => 114,  264 => 112,  249 => 110,  245 => 109,  242 => 108,  240 => 107,  234 => 103,  223 => 101,  219 => 100,  207 => 90,  194 => 89,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back_base.html.twig' %}

{% block title %}Reporting Financier{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    body { background-color: #0b0f19; color: #a0aec0; }
    h1 { color: #ffffff; font-weight: 700; font-size: 2.2rem; }
    .subtitle { color: #64748b; font-size: 1rem; margin-bottom: 2rem; }
    
    .dashboard-card { 
        background-color: #121626; 
        border: 1px solid #1e293b; 
        border-radius: 12px;
        padding: 1.5rem;
    }
    
    .filter-label { color: #a0aec0; font-size: 0.9rem; margin-right: 0.5rem; font-weight: 500; }
    .custom-select, .custom-input { 
        background-color: #1a2035; 
        color: #f8fafc; 
        border: 1px solid #2d3748; 
        border-radius: 8px;
        padding: 0.5rem 1rem;
        outline: none;
    }
    .custom-select:focus, .custom-input:focus { border-color: #00d4ff; box-shadow: 0 0 5px rgba(0, 212, 255, 0.2); }
    
    .btn-action { padding: 0.6rem 1.2rem; border: none; border-radius: 20px; font-weight: 600; cursor: pointer; transition: all 0.2s; color: #000; display: inline-flex; align-items: center; gap: 0.5rem; }
    .btn-generate { background-color: #00ffcc; box-shadow: 0 0 10px rgba(0, 255, 204, 0.4); }
    .btn-generate:hover { background-color: #00e6b8; box-shadow: 0 0 15px rgba(0, 255, 204, 0.6); }
    .btn-export { background-color: #3b82f6; color: white; box-shadow: 0 0 10px rgba(59, 130, 246, 0.4); }
    .btn-export:hover { background-color: #2563eb; }
    .btn-email { background-color: #10b981; color: white; box-shadow: 0 0 10px rgba(16, 185, 129, 0.4); }
    .btn-email:hover { background-color: #059669; }

    .hint-text { color: #475569; font-size: 0.8rem; font-style: italic; }

    .table-container { margin-top: 2rem; overflow-x: auto; }
    h4 { color: #ffffff; font-weight: 600; margin-bottom: 1.5rem; }
    .custom-table { width: 100%; border-collapse: collapse; color: #f8fafc; }
    .custom-table th {
        color: #00d4ff;
        font-size: 0.8rem;
        font-weight: 700;
        text-transform: uppercase;
        padding: 1rem;
        border-bottom: 2px solid #1a2035;
        text-align: left;
    }
    .custom-table td {
        padding: 1rem;
        font-size: 0.95rem;
        border-bottom: 1px solid #1e293b;
        vertical-align: middle;
        transition: background-color 0.2s;
    }
    .custom-table tbody tr { transition: background-color 0.2s; cursor: pointer; }
    .custom-table tbody tr:hover { background-color: #161b2e; }
    .custom-table tbody tr.selected { background-color: #1a233a; }
    
    .status-benef { color: #10b981; font-weight: 600; }
    .status-equil { color: #a0aec0; font-weight: 500; }
    .status-defic { color: #ef4444; font-weight: 600; }

    /* Editable cell styling */
    .editable-cell { cursor: text; padding: 4px 8px; border-radius: 6px; border: 1px solid transparent; transition: all 0.2s; display: inline-block; min-width: 80px;}
    .editable-cell:hover { border-color: #2d3748; background-color: rgba(255,255,255,0.02); }
    .editable-input { 
        background: #1a2035; 
        color: white; 
        border: 1px solid #00d4ff; 
        border-radius: 6px; 
        padding: 4px 8px; 
        outline: none; 
        width: 100px;
        box-shadow: 0 0 5px rgba(0, 212, 255, 0.2);
        -moz-appearance: textfield; /* Firefox */
    }
    .editable-input::-webkit-outer-spin-button,
    .editable-input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid mt-4 mb-5 px-4\">
    <h1>Reporting Financier</h1>
    <p class=\"subtitle\">Génération et export des bilans mensuels</p>

    <div class=\"dashboard-card\">
        <div class=\"row align-items-center g-3\">
            <div class=\"col-auto d-flex align-items-center\">
                <span class=\"filter-label\">Cible :</span>
                <select id=\"filterCible\" class=\"custom-select\">
                    <option value=\"\">TOUT LE RÉSEAU</option>
                    {% for f in franchises %}
                        <option value=\"{{ f.id }}\">{{ f.nom }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"col-auto d-flex align-items-center\">
                <span class=\"filter-label\">Période :</span>
                {% set months = ['1 - Janvier','2 - Février','3 - Mars','4 - Avril','5 - Mai','6 - Juin','7 - Juillet','8 - Août','9 - Septembre','10 - Octobre','11 - Novembre','12 - Décembre'] %}
                <select id=\"filterMois\" class=\"custom-select me-2\">
                    {% for i in 1..12 %}
                        <option value=\"{{ i }}\" {% if 'now'|date('n') == i %}selected{% endif %}>{{ months[i-1] }}</option>
                    {% endfor %}
                </select>
                <select id=\"filterAnnee\" class=\"custom-select\">
                    {% for y in 2024..2030 %}
                        <option value=\"{{ y }}\" {% if 'now'|date('Y') == y %}selected{% endif %}>{{ y }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"col-auto ms-auto d-flex gap-3 align-items-center\">
                <button id=\"btn-generate\" class=\"btn-action btn-generate\">
                    <i class=\"fas fa-plus\"></i> Générer / Recalculer
                </button>
                <button class=\"btn-action btn-export\">
                    <i class=\"fas fa-arrow-down\"></i> Exporter PDF
                </button>
                <button class=\"btn-action btn-email\">
                    <i class=\"fas fa-envelope\"></i> Envoyer Bilan par Email
                </button>
                <span class=\"hint-text ms-2\">↑ Sélectionnez une ligne puis cliquez</span>
            </div>
        </div>

        <div class=\"table-container mt-5\">
            <h4>Historique des Bilans</h4>
            <table class=\"custom-table\" id=\"bilansTable\">
                <thead>
                    <tr>
                        <th>FRANCHISE</th>
                        <th>MOIS</th>
                        <th>ANNÉE</th>
                        <th>RECETTES (TND)</th>
                        <th>CHARGES (TND)</th>
                        <th>RÉSULTAT NET</th>
                        <th>RENTABILITÉ</th>
                        <th class=\"text-center\" style=\"width: 40px;\"></th>
                    </tr>
                </thead>
                <tbody>
                {% for bilan in bilans %}
                    <tr data-id=\"{{ bilan.id }}\">
                        <td style=\"color: #cbd5e1;\">
                            {% if bilan.franchiseId %}
                                {{ bilan.franchiseId.nom }}
                            {% else %}
                                SIEGE_PRINCIPAL
                            {% endif %}
                        </td>
                        <td>
                            <div class=\"editable-cell\" data-field=\"mois\" title=\"Double-cliquer pour modifier\">
                                <span class=\"value\">{{ bilan.mois }}</span>
                            </div>
                        </td>
                        <td>
                            <div class=\"editable-cell\" data-field=\"annee\" title=\"Double-cliquer pour modifier\">
                                <span class=\"value\">{{ bilan.annee }}</span>
                            </div>
                        </td>
                        
                        <!-- Editable Fields -->
                        <td>
                            <div class=\"editable-cell\" data-field=\"total_recettes\" title=\"Double-cliquer pour modifier\">
                                <span class=\"value\">{{ bilan.totalRecettes|number_format(2, '.', '') }} TND</span>
                            </div>
                        </td>
                        <td>
                            <div class=\"editable-cell\" data-field=\"total_charges\" title=\"Double-cliquer pour modifier\">
                                <span class=\"value\">{{ bilan.totalCharges|number_format(2, '.', '') }} TND</span>
                            </div>
                        </td>
                        
                        <td class=\"result-net\" style=\"color: #cbd5e1;\">
                            {{ bilan.resultatNet|number_format(1, '.', '') }}
                        </td>
                        <td class=\"rentabilite\">
                            {% if bilan.resultatNet > 0 %}
                                <span class=\"status-benef\">✓ Bénéficiaire</span>
                            {% elseif bilan.resultatNet < 0 %}
                                <span class=\"status-defic\">✗ Déficitaire</span>
                            {% else %}
                                <span class=\"status-equil\">— Équilibré</span>
                            {% endif %}
                        </td>
                        <td class=\"text-center align-middle\">
                            <i class=\"fas fa-trash text-muted delete-row-btn\" style=\"cursor: pointer; transition: color 0.2s;\" onmouseover=\"this.style.color='#ef4444';\" onmouseout=\"this.style.color=''\" data-id=\"{{ bilan.id }}\" title=\"Supprimer ce bilan\"></i>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"8\" class=\"text-center py-5 text-muted\">Aucun historique disponible.</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- SweetAlert2 pour les notifications -->
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {

    const Toast = Swal.mixin({
        toast: true, position: 'top-end', showConfirmButton: false, timer: 3000,
        background: '#1e293b', color: '#fff'
    });

    // 1. GENERER ACTION
    const btnGenerate = document.getElementById('btn-generate');
    if(btnGenerate) {
        btnGenerate.addEventListener('click', async () => {
            const cible = document.getElementById('filterCible').value;
            const mois = document.getElementById('filterMois').value;
            const annee = document.getElementById('filterAnnee').value;

            btnGenerate.disabled = true;
            btnGenerate.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Traitement...';

            try {
                const response = await fetch('/bilan/generate-ajax', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ cible, mois, annee })
                });

                const data = await response.json();

                if (data.success) {
                    await Toast.fire({ icon: 'success', title: data.message });
                    window.location.reload();
                } else {
                    Toast.fire({ icon: 'error', title: data.message || \"Erreur\" });
                }
            } catch (err) {
                console.error(err);
                Toast.fire({ icon: 'error', title: 'Erreur serveur.' });
            } finally {
                btnGenerate.disabled = false;
                btnGenerate.innerHTML = '<i class=\"fas fa-plus\"></i> Générer / Recalculer';
            }
        });
    }

        // DECLARATION COMMUNE POUR DELETE ET EDIT
        const table = document.getElementById('bilansTable');

        if (table) {
            // 2. SUPPRESSION VIA ICONE CORBEILLE (CRUD Delete)
            document.querySelectorAll('.delete-row-btn').forEach(btn => {
                btn.addEventListener('click', async (e) => {
                    e.stopPropagation();
                    const id = btn.dataset.id;
                    const row = btn.closest('tr');

                const confirm = await Swal.fire({
                    title: 'Supprimer ce bilan ?',
                    text: 'Cette action est définitive.',
                    icon: 'warning',
                    background: '#1e293b', color: '#fff',
                    showCancelButton: true,
                    confirmButtonColor: '#ef4444', cancelButtonColor: '#334155',
                    confirmButtonText: 'Oui, supprimer', cancelButtonText: 'Annuler'
                });

                if (confirm.isConfirmed) {
                    try {
                        const res = await fetch('/bilan/' + id + '/delete-ajax', { method: 'POST' });
                        const data = await res.json();
                        if (data.success) {
                            row.style.opacity = '0';
                            row.style.transform = 'translateY(10px) scale(0.98)';
                            row.style.transition = 'all 0.4s';
                            setTimeout(() => {
                                row.remove();
                                if (document.querySelectorAll('#bilansTable tbody tr').length === 0) {
                                  document.querySelector('#bilansTable tbody').innerHTML = '<tr><td colspan=\"8\" class=\"text-center py-5 text-muted\">Aucun historique disponible.</td></tr>';
                                }
                            }, 400);
                            Toast.fire({ icon: 'success', title: 'Bilan supprimé.' });
                        }
                    } catch (err) {
                        Toast.fire({ icon: 'error', title: 'Erreur lors de la suppression.' });
                    }
                }
            });
        });

        // 3. INLINE EDIT (DOUBLE CLICK)
        table.addEventListener('dblclick', (e) => {
            const cell = e.target.closest('.editable-cell');
            if (!cell) return;
            if (cell.querySelector('input')) return; // déjà en édition

            const spanValue = cell.querySelector('.value');
            const field = cell.dataset.field;
            let currentText = spanValue.innerText.replace(' TND', '');
            let currentValue = parseFloat(currentText);
            if(isNaN(currentValue)) currentValue = 0;

            const input = document.createElement('input');
            input.type = 'number';
            
            if (field === 'mois' || field === 'annee') {
                input.step = '1';
                if (field === 'mois') { input.min = '1'; input.max = '12'; }
                else { input.min = '2024'; input.max = '2030'; }
            } else {
                input.step = '0.01';
                input.min = '0';
            }
            
            input.value = currentValue;
            input.className = 'editable-input';

            cell.innerHTML = '';
            cell.appendChild(input);
            input.focus();

            const saveChange = async () => {
                const newValue = input.value.trim();
                const tr = cell.closest('tr');
                
                if (newValue === '') {
                    restoreCell(currentValue);
                    return;
                }
                
                let navVal = parseFloat(newValue);
                if (field === 'mois' && (navVal < 1 || navVal > 12)) {
                    Toast.fire({ icon: 'warning', title: 'Mois invalide (1-12).' });
                    input.focus();
                    return;
                } else if (field === 'annee' && (navVal < 2024 || navVal > 2030)) {
                    Toast.fire({ icon: 'warning', title: 'Année invalide (2024-2030).' });
                    input.focus();
                    return;
                } else if ((field === 'total_recettes' || field === 'total_charges') && navVal < 0) {
                    Toast.fire({ icon: 'warning', title: 'Veuillez entrer un montant positif.' });
                    input.focus();
                    return;
                }
                // Revert si vide ou non changé
                if (newValue === '' || parseFloat(newValue) === currentValue) {
                    restoreCell(currentValue);
                    return;
                }

                try {
                    const payload = {};
                    payload[field] = newValue;

                    const res = await fetch('/bilan/' + tr.dataset.id + '/edit-ajax', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(payload)
                    });

                    const data = await res.json();
                    if (data.success) {
                        restoreCell(parseFloat(newValue));
                        
                        // MàJ Résultat Net
                        const resCell = tr.querySelector('.result-net');
                        const resValue = parseFloat(data.resultat_net);
                        resCell.innerText = resValue.toFixed(1);
                        
                        // MàJ Rentabilité
                        const rentCell = tr.querySelector('.rentabilite');
                        if(resValue > 0) {
                            rentCell.innerHTML = '<span class=\"status-benef\">✓ Bénéficiaire</span>';
                        } else if(resValue < 0) {
                            rentCell.innerHTML = '<span class=\"status-defic\">✗ Déficitaire</span>';
                        } else {
                            rentCell.innerHTML = '<span class=\"status-equil\">— Équilibré</span>';
                        }

                        Toast.fire({ icon: 'success', title: 'Mis à jour !' });
                    } else {
                        restoreCell(currentValue);
                        Toast.fire({ icon: 'error', title: data.message });
                    }
                } catch (err) {
                    restoreCell(currentValue);
                    Toast.fire({ icon: 'error', title: 'Erreur réseau.' });
                }
            };

            function restoreCell(val) {
                if (field === 'mois' || field === 'annee') {
                    cell.innerHTML = '<span class=\"value\">' + parseFloat(val) + '</span>';
                } else {
                    cell.innerHTML = '<span class=\"value\">' + parseFloat(val).toFixed(2) + ' TND</span>';
                }
            }

            // Sur 'blur' (quand on clique ailleurs), on bloque si mal saisi, sinon on sauvegarde
            input.addEventListener('blur', (e) => {
                const navVal = parseFloat(input.value.trim());
                if (input.value.trim() === '') {
                    restoreCell(currentValue);
                    return;
                }
                
                if (field === 'mois' && (navVal >= 1 && navVal <= 12)) { saveChange(); }
                else if (field === 'annee' && (navVal >= 2024 && navVal <= 2030)) { saveChange(); }
                else if ((field === 'total_recettes' || field === 'total_charges') && navVal >= 0) { saveChange(); }
                else { restoreCell(currentValue); } // Sinon on annule silencieusement
            });
            input.addEventListener('keypress', (e) => {
                if (e.key === 'Enter') input.blur();
            });
        });
    }
});
</script>
{% endblock %}", "bilan/bilan.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\bilan\\bilan.html.twig");
    }
}
