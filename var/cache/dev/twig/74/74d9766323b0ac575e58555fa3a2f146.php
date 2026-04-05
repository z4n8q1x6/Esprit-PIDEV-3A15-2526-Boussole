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

/* afficher_back_charge/index.html.twig */
class __TwigTemplate_5989ff66332a4407ff67fa930fd6a9ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "afficher_back_charge/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "afficher_back_charge/index.html.twig"));

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

        yield "Boussole - Administration des Charges";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"container mt-4\">
    ";
        // line 8
        yield "    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h2 class=\"mb-0 fw-bold text-dark\">Gestion des Charges</h2>
        <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ajouter_charge");
        yield "\" class=\"btn btn-add-modern\">
            <i class=\"fas fa-plus-circle me-2\"></i> Ajouter une charge
        </a>
    </div>

    ";
        // line 16
        yield "    <div class=\"card mb-4 border-0 shadow-sm bg-light\">
        <div class=\"card-body py-3\">
            <div class=\"row g-2 align-items-center\">
                <div class=\"col-12 col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white\" style=\"border: 1px solid #ced4da; border-right: none;\">
                            <i class=\"fas fa-search text-primary\"></i>
                        </span>
                        <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Rechercher (titre, type, statut, franchise)...\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 32
        yield "    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table id=\"chargesTable\" class=\"table table-hover align-middle mb-0\" style=\"table-layout: fixed;\">
                    <thead class=\"table-light\">
                        <tr>
                            <th scope=\"col\" style=\"cursor:pointer; width: 7%;\" data-sort=\"id\">ID <i class=\"fas fa-sort ms-1 text-muted\"></i></th>
                            <th scope=\"col\" style=\"cursor:pointer; width: 12%;\" data-sort=\"titre\">Titre <i class=\"fas fa-sort ms-1 text-muted\"></i></th>
                            <th scope=\"col\" style=\"cursor:pointer; width: 8%;\" data-sort=\"montant\">Montant <i class=\"fas fa-sort ms-1 text-muted\"></i></th>
                            <th scope=\"col\" style=\"cursor:pointer; width: 8%;\" data-sort=\"date\">Date <i class=\"fas fa-sort ms-1 text-muted\"></i></th>
                            <th scope=\"col\" style=\"cursor:pointer; width: 14%;\" data-sort=\"type\">Type <i class=\"fas fa-sort ms-1 text-muted\"></i></th>
                            <th scope=\"col\" style=\"cursor:pointer; width: 20%;\" data-sort=\"preuve\">Preuve <i class=\"fas fa-sort ms-1 text-muted\"></i></th>
                            <th scope=\"col\" style=\"cursor:pointer; width: 12%;\" data-sort=\"statut\">Statut <i class=\"fas fa-sort ms-1 text-muted\"></i></th>
                            <th scope=\"col\" style=\"cursor:pointer; width: 11%;\" data-sort=\"franchise\">Franchise <i class=\"fas fa-sort ms-1 text-muted\"></i></th>
                            <th scope=\"col\" class=\"text-center\" style=\"width: 8%;\">Supp</th>
                        </tr>
                    </thead>
                    <tbody id=\"tableBody\">
                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["charges"]) || array_key_exists("charges", $context) ? $context["charges"] : (function () { throw new RuntimeError('Variable "charges" does not exist.', 50, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["charge"]) {
            // line 51
            yield "                        <tr data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "id", [], "any", false, false, false, 51), "html", null, true);
            yield "\">
                            <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "id", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                            <td>
                                <div class=\"editable-cell\" contenteditable=\"true\" data-field=\"titre\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "titre", [], "any", false, false, false, 54), "html", null, true);
            yield "</div>
                            </td>
                            <td>
                                <div class=\"editable-cell fw-bold\" contenteditable=\"true\" data-field=\"montant\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "montant", [], "any", false, false, false, 57), "html", null, true);
            yield "</div>
                            </td>
                            <td>
                                <div class=\"editable-cell\" contenteditable=\"true\" data-field=\"date_charge\">";
            // line 60
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "date_charge", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "date_charge", [], "any", false, false, false, 60), "Y-m-d"), "html", null, true)) : (""));
            yield "</div>
                            </td>
                            <td>
                                <select class=\"form-select form-select-sm editable-select\" data-field=\"type\">
                                    ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 64, $this->source); })()));
            foreach ($context['_seq'] as $context["val"] => $context["label"]) {
                // line 65
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "type", [], "any", false, false, false, 65) == $context["val"])) {
                    yield "selected";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['val'], $context['label'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "                                </select>
                            </td>
                            <td>
                                <div class=\"editable-cell\" contenteditable=\"true\" data-field=\"preuve_image\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "preuve_image", [], "any", false, false, false, 70), "html", null, true);
            yield "</div>
                            </td>
                            <td>
                                <select class=\"form-select form-select-sm editable-select\" data-field=\"status_validation\">
                                    ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuts"]) || array_key_exists("statuts", $context) ? $context["statuts"] : (function () { throw new RuntimeError('Variable "statuts" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["val"] => $context["label"]) {
                // line 75
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "status_validation", [], "any", false, false, false, 75) == $context["val"])) {
                    yield "selected";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['val'], $context['label'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "                                </select>
                            </td>
                            <td>
                                <select class=\"form-select form-select-sm editable-select\" data-field=\"franchise_id\">
                                    ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["franchises"]) || array_key_exists("franchises", $context) ? $context["franchises"] : (function () { throw new RuntimeError('Variable "franchises" does not exist.', 81, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["fr"]) {
                // line 82
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fr"], "id", [], "any", false, false, false, 82), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "franchise_id", [], "any", false, false, false, 82) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "franchise_id", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82) == CoreExtension::getAttribute($this->env, $this->source, $context["fr"], "id", [], "any", false, false, false, 82)))) {
                    yield "selected";
                }
                yield ">
                                            ";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fr"], "nom", [], "any", false, false, false, 83), "html", null, true);
                yield "
                                        </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['fr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            yield "                                </select>
                            </td>
                             <td class=\"text-center\">
                                <button class=\"btn btn-delete-modern btn-sm\" data-id=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "id", [], "any", false, false, false, 89), "html", null, true);
            yield "\" title=\"Supprimer cette charge\">
                                    <i class=\"fas fa-trash-alt\"></i>
                                </button>
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 94
        if (!$context['_iterated']) {
            // line 95
            yield "                        <tr id=\"emptyRow\">
                            <td colspan=\"9\" class=\"text-center py-4\">
                                <p class=\"text-muted mb-0\">Aucune charge enregistrée pour le moment.</p>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['charge'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "                    </tbody>
                </table>
            </div>
        </div>

        ";
        // line 107
        yield "        <div class=\"card-footer bg-white border-top-0 py-3\">
            <div class=\"d-flex justify-content-end\">
                <div class=\"total-badge-modern\">
                    <span class=\"label\">Total Charges</span>
                    <span class=\"count\"><span id=\"totalDisplay\">";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total_charges"]) || array_key_exists("total_charges", $context) ? $context["total_charges"] : (function () { throw new RuntimeError('Variable "total_charges" does not exist.', 111, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</span> TND</span>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 119
        yield "<div id=\"toast\" style=\"
    position: fixed;
    bottom: 30px;
    right: 30px;
    background-color: #198754;
    color: white;
    padding: 12px 24px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    transform: translateY(100px);
    opacity: 0;
    transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    z-index: 9999;
    font-weight: 500;
    font-size: 0.9rem;
\">Modification enregistrée !</div>

<style>
.editable-cell {
    padding: 4px 8px;
    margin: -4px -8px;
    border-radius: 4px;
    transition: all 0.2s ease;
    outline: none;
    min-height: 1.4em;
}
.editable-cell:hover {
    background-color: rgba(13, 110, 253, 0.1);
    cursor: text;
}
.editable-cell:focus {
    background-color: rgba(13, 110, 253, 0.05);
    box-shadow: 0 0 0 2px #0d6efd;
    color: inherit;
}
.editable-select {
    border: none;
    background-color: transparent;
    padding: 2px 4px;
    cursor: pointer;
    font-size: 0.875rem;
    color: inherit;
    border-radius: 4px;
    width: 100%;
}
.editable-select:hover {
    background-color: rgba(13, 110, 253, 0.1);
}
.editable-select:focus {
    background-color: rgba(13, 110, 253, 0.05);
    box-shadow: 0 0 0 2px #0d6efd;
    outline: none;
    color: inherit;
}
th[data-sort]:hover {
    background-color: #e9ecef !important;
}

/* Nouveaux Styles Modernes */
.btn-add-modern {
    background: linear-gradient(135deg, #198754 0%, #20c997 100%);
    color: white !important;
    border: none;
    border-radius: 50px;
    padding: 10px 24px;
    font-weight: 600;
    box-shadow: 0 4px 15px rgba(25, 135, 84, 0.2);
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
}
.btn-add-modern:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(25, 135, 84, 0.3);
    filter: brightness(1.1);
}

.btn-delete-modern {
    color: #dc3545;
    background: transparent;
    border: 1.5px solid #dc3545;
    border-radius: 8px;
    width: 35px;
    height: 35px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
    padding: 0;
}
.btn-delete-modern:hover {
    background-color: #dc3545;
    color: white;
    transform: scale(1.1);
}

.total-badge-modern {
    display: flex;
    align-items: center;
    background: #f8f9fa;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 8px 16px;
    gap: 12px;
    box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);
}
.total-badge-modern .label {
    color: #6c757d;
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.total-badge-modern .count {
    background: linear-gradient(135deg, #0d6efd 0%, #0043a8 100%);
    color: white;
    padding: 2px 14px;
    border-radius: 20px;
    font-weight: 700;
    font-size: 1.1rem;
    box-shadow: 0 2px 5px rgba(13, 110, 253, 0.3);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var searchInput = document.getElementById('searchInput');
    var tableBody   = document.getElementById('tableBody');
    var rows        = tableBody.getElementsByTagName('tr');

    /* ===== 1. RECHERCHE EN TEMPS RÉEL ===== */
    searchInput.addEventListener('keyup', function() {
        var filter = searchInput.value.toLowerCase();
        for (var i = 0; i < rows.length; i++) {
            if (rows[i].id === 'emptyRow') continue;
            var text = rows[i].textContent || rows[i].innerText;
            rows[i].style.display = text.toLowerCase().indexOf(filter) > -1 ? '' : 'none';
        }
    });

    /* ===== 2. TRI PAR COLONNE ===== */
    var getCellValue = function(tr, idx) { return tr.children[idx].innerText || tr.children[idx].textContent; };
    var comparer = function(idx, asc) {
        return function(a, b) {
            var v1 = getCellValue(asc ? a : b, idx);
            var v2 = getCellValue(asc ? b : a, idx);
            if (v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2)) return v1 - v2;
            return v1.toString().localeCompare(v2);
        };
    };

    var sortStates = {};
    document.querySelectorAll('th[data-sort]').forEach(function(th) {
        th.addEventListener('click', function() {
            var key = th.getAttribute('data-sort');
            sortStates[key] = !sortStates[key];
            var asc = sortStates[key];

            var table = th.closest('table');
            var tbody = table.querySelector('tbody');
            Array.from(tbody.querySelectorAll('tr'))
                .filter(function(tr) { return tr.id !== 'emptyRow'; })
                .sort(comparer(Array.from(th.parentNode.children).indexOf(th), asc))
                .forEach(function(tr) { tbody.appendChild(tr); });

            // Mise à jour des icônes
            document.querySelectorAll('th[data-sort] i').forEach(function(i) { i.className = 'fas fa-sort ms-1 text-muted'; });
            th.querySelector('i').className = asc ? 'fas fa-sort-up ms-1 text-primary' : 'fas fa-sort-down ms-1 text-primary';
        });
    });

    /* ===== 3. TOAST ===== */
    function showToast(message, isError) {
        var toast = document.getElementById('toast');
        toast.textContent = message;
        toast.style.backgroundColor = isError ? '#dc3545' : '#198754';
        toast.style.transform = 'translateY(0)';
        toast.style.opacity = '1';
        setTimeout(function() {
            toast.style.transform = 'translateY(100px)';
            toast.style.opacity = '0';
        }, 3000);
    }

    /* ===== 4. ÉDITION EN LIGNE AJAX AVEC CONTROLE DE SAISIE ===== */
    let oldValues = {};

    document.querySelectorAll('.editable-cell').forEach(function(cell) {
        cell.addEventListener('focus', function() {
            oldValues[this.dataset.field + this.closest('tr').dataset.id] = this.innerText.trim();
        });

        cell.addEventListener('blur', function() {
            var field = this.getAttribute('data-field');
            var value = this.innerText.trim();
            var id    = this.closest('tr').getAttribute('data-id');
            var oldValue = oldValues[field + id];

            // Ne rien faire si la valeur n'a pas changé
            if (value === oldValue) return;

            // --- CONTROLE DE SAISIE CLIENT ---
            let errorMsg = null;
            if (field === 'titre' && !/^[a-zA-ZÀ-ÿ\\s]+\$/.test(value)) {
                errorMsg = 'Le titre ne doit contenir que des lettres';
            } else if (field === 'montant') {
                let val = parseFloat(value.replace(',', '.'));
                if (isNaN(val) || val <= 0) {
                    errorMsg = 'Le montant doit être un nombre supérieur à zéro';
                }
            } else if (field === 'date_charge' && isNaN(Date.parse(value))) {
                errorMsg = 'Format de date invalide';
            } else if (field === 'preuve_image' && value === '') {
                errorMsg = 'Le justificatif est obligatoire';
            }

            if (errorMsg) {
                showToast(errorMsg, true);
                this.innerText = oldValue; // Restauration
                return;
            }

            // --- ENVOI AJAX ---
            fetch('/admin/afficher_back_charge/edit/' + id, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                body: JSON.stringify({ field: field, value: value })
            })
            .then(function(r) { return r.json(); })
            .then(function(data) {
                if (data.success) {
                    showToast('Modification enregistrée !', false);
                    oldValues[field + id] = value; // Mise à jour de la valeur de référence
                    if (data.newTotal !== undefined) {
                        document.getElementById('totalDisplay').innerText =
                            Number(data.newTotal).toFixed(2).replace('.', ',').replace(/\\B(?=(\\d{3})+(?!\\d))/g, ' ');
                    }
                } else {
                    showToast('Erreur : ' + data.message, true);
                    this.innerText = oldValue; // Restauration en cas d'erreur serveur
                }
            }.bind(this))
            .catch(function() {
                showToast('Erreur de connexion', true);
                this.innerText = oldValue;
            }.bind(this));
        });

        cell.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') { e.preventDefault(); this.blur(); }
        });
    });

    /* ===== 5. ÉDITION VIA SELECT (ENUMS) ===== */
    document.querySelectorAll('.editable-select').forEach(function(select) {
        select.addEventListener('change', function() {
            var field = this.getAttribute('data-field');
            var value = this.value;
            var id    = this.closest('tr').getAttribute('data-id');

            fetch('/afficher_back_charge/edit/' + id, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                body: JSON.stringify({ field: field, value: value })
            })
            .then(function(r) { return r.json(); })
            .then(function(data) {
                if (data.success) {
                    showToast('Modification enregistrée !', false);
                } else {
                    showToast('Erreur : ' + data.message, true);
                }
            })
            .catch(function() { showToast('Erreur de connexion', true); });
        });
    });

    /* ===== 6. SUPPRESSION AJAX ===== */
    document.querySelectorAll('.btn-delete-modern').forEach(function(btn) {
        btn.addEventListener('click', function() {
            if (!confirm('Voulez-vous vraiment supprimer cette charge ?')) return;

            var id  = this.getAttribute('data-id');
            var row = this.closest('tr');

            fetch('/admin/afficher_back_charge/delete/' + id, {
                method: 'DELETE',
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(function(r) { return r.json(); })
            .then(function(data) {
                if (data.success) {
                    row.remove();
                    showToast('Charge supprimée avec succès !', false);
                    if (tableBody.querySelectorAll('tr').length === 0) {
                        tableBody.innerHTML = '<tr id=\"emptyRow\"><td colspan=\"9\" class=\"text-center py-4\"><p class=\"text-muted mb-0\">Aucune charge enregistrée.</p></td></tr>';
                    }
                } else {
                    showToast('Erreur de suppression', true);
                }
            })
            .catch(function() { showToast('Erreur de connexion', true); });
        });
    });

    /* ===== 7. REDIMENSIONNEMENT DES COLONNES ===== */
    const createResizableTable = function (table) {
        const cols = table.querySelectorAll('th');
        [].forEach.call(cols, function (col) {
            // Recueille le div du resizer
            const resizer = col.querySelector('.resizer');
            if (!resizer) return;

            let x = 0;
            let w = 0;

            const mouseDownHandler = function (e) {
                x = e.clientX;
                const styles = window.getComputedStyle(col);
                w = parseInt(styles.width, 10);

                document.addEventListener('mousemove', mouseMoveHandler);
                document.addEventListener('mouseup', mouseUpHandler);
                resizer.classList.add('resizing');
            };

            const mouseMoveHandler = function (e) {
                const dx = e.clientX - x;
                col.style.width = `\${w + dx}px`;
            };

            const mouseUpHandler = function () {
                document.removeEventListener('mousemove', mouseMoveHandler);
                document.removeEventListener('mouseup', mouseUpHandler);
                resizer.classList.remove('resizing');
            };

            resizer.addEventListener('mousedown', mouseDownHandler);
        });
    };

    createResizableTable(document.getElementById('chargesTable'));
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
        return "afficher_back_charge/index.html.twig";
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
        return array (  315 => 119,  305 => 111,  299 => 107,  292 => 101,  281 => 95,  279 => 94,  269 => 89,  264 => 86,  255 => 83,  246 => 82,  242 => 81,  236 => 77,  221 => 75,  217 => 74,  210 => 70,  205 => 67,  190 => 65,  186 => 64,  179 => 60,  173 => 57,  167 => 54,  162 => 52,  157 => 51,  152 => 50,  132 => 32,  115 => 16,  107 => 10,  103 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back_base.html.twig' %}

{% block title %}Boussole - Administration des Charges{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    {# En-tête avec titre + bouton Ajouter #}
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h2 class=\"mb-0 fw-bold text-dark\">Gestion des Charges</h2>
        <a href=\"{{ path('app_ajouter_charge') }}\" class=\"btn btn-add-modern\">
            <i class=\"fas fa-plus-circle me-2\"></i> Ajouter une charge
        </a>
    </div>

    {# Barre de recherche #}
    <div class=\"card mb-4 border-0 shadow-sm bg-light\">
        <div class=\"card-body py-3\">
            <div class=\"row g-2 align-items-center\">
                <div class=\"col-12 col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white\" style=\"border: 1px solid #ced4da; border-right: none;\">
                            <i class=\"fas fa-search text-primary\"></i>
                        </span>
                        <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Rechercher (titre, type, statut, franchise)...\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {# Tableau des charges #}
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table id=\"chargesTable\" class=\"table table-hover align-middle mb-0\" style=\"table-layout: fixed;\">
                    <thead class=\"table-light\">
                        <tr>
                            <th scope=\"col\" style=\"cursor:pointer; width: 7%;\" data-sort=\"id\">ID <i class=\"fas fa-sort ms-1 text-muted\"></i></th>
                            <th scope=\"col\" style=\"cursor:pointer; width: 12%;\" data-sort=\"titre\">Titre <i class=\"fas fa-sort ms-1 text-muted\"></i></th>
                            <th scope=\"col\" style=\"cursor:pointer; width: 8%;\" data-sort=\"montant\">Montant <i class=\"fas fa-sort ms-1 text-muted\"></i></th>
                            <th scope=\"col\" style=\"cursor:pointer; width: 8%;\" data-sort=\"date\">Date <i class=\"fas fa-sort ms-1 text-muted\"></i></th>
                            <th scope=\"col\" style=\"cursor:pointer; width: 14%;\" data-sort=\"type\">Type <i class=\"fas fa-sort ms-1 text-muted\"></i></th>
                            <th scope=\"col\" style=\"cursor:pointer; width: 20%;\" data-sort=\"preuve\">Preuve <i class=\"fas fa-sort ms-1 text-muted\"></i></th>
                            <th scope=\"col\" style=\"cursor:pointer; width: 12%;\" data-sort=\"statut\">Statut <i class=\"fas fa-sort ms-1 text-muted\"></i></th>
                            <th scope=\"col\" style=\"cursor:pointer; width: 11%;\" data-sort=\"franchise\">Franchise <i class=\"fas fa-sort ms-1 text-muted\"></i></th>
                            <th scope=\"col\" class=\"text-center\" style=\"width: 8%;\">Supp</th>
                        </tr>
                    </thead>
                    <tbody id=\"tableBody\">
                        {% for charge in charges %}
                        <tr data-id=\"{{ charge.id }}\">
                            <td>{{ charge.id }}</td>
                            <td>
                                <div class=\"editable-cell\" contenteditable=\"true\" data-field=\"titre\">{{ charge.titre }}</div>
                            </td>
                            <td>
                                <div class=\"editable-cell fw-bold\" contenteditable=\"true\" data-field=\"montant\">{{ charge.montant }}</div>
                            </td>
                            <td>
                                <div class=\"editable-cell\" contenteditable=\"true\" data-field=\"date_charge\">{{ charge.date_charge ? (charge.date_charge|date('Y-m-d')) : '' }}</div>
                            </td>
                            <td>
                                <select class=\"form-select form-select-sm editable-select\" data-field=\"type\">
                                    {% for val, label in types %}
                                        <option value=\"{{ val }}\" {% if charge.type == val %}selected{% endif %}>{{ label }}</option>
                                    {% endfor %}
                                </select>
                            </td>
                            <td>
                                <div class=\"editable-cell\" contenteditable=\"true\" data-field=\"preuve_image\">{{ charge.preuve_image }}</div>
                            </td>
                            <td>
                                <select class=\"form-select form-select-sm editable-select\" data-field=\"status_validation\">
                                    {% for val, label in statuts %}
                                        <option value=\"{{ val }}\" {% if charge.status_validation == val %}selected{% endif %}>{{ label }}</option>
                                    {% endfor %}
                                </select>
                            </td>
                            <td>
                                <select class=\"form-select form-select-sm editable-select\" data-field=\"franchise_id\">
                                    {% for fr in franchises %}
                                        <option value=\"{{ fr.id }}\" {% if (charge.franchise_id and charge.franchise_id.id == fr.id) %}selected{% endif %}>
                                            {{ fr.nom }}
                                        </option>
                                    {% endfor %}
                                </select>
                            </td>
                             <td class=\"text-center\">
                                <button class=\"btn btn-delete-modern btn-sm\" data-id=\"{{ charge.id }}\" title=\"Supprimer cette charge\">
                                    <i class=\"fas fa-trash-alt\"></i>
                                </button>
                            </td>
                        </tr>
                        {% else %}
                        <tr id=\"emptyRow\">
                            <td colspan=\"9\" class=\"text-center py-4\">
                                <p class=\"text-muted mb-0\">Aucune charge enregistrée pour le moment.</p>
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        {# Footer : Total des charges #}
        <div class=\"card-footer bg-white border-top-0 py-3\">
            <div class=\"d-flex justify-content-end\">
                <div class=\"total-badge-modern\">
                    <span class=\"label\">Total Charges</span>
                    <span class=\"count\"><span id=\"totalDisplay\">{{ total_charges|number_format(2, ',', ' ') }}</span> TND</span>
                </div>
            </div>
        </div>
    </div>
</div>

{# Toast de notification #}
<div id=\"toast\" style=\"
    position: fixed;
    bottom: 30px;
    right: 30px;
    background-color: #198754;
    color: white;
    padding: 12px 24px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    transform: translateY(100px);
    opacity: 0;
    transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    z-index: 9999;
    font-weight: 500;
    font-size: 0.9rem;
\">Modification enregistrée !</div>

<style>
.editable-cell {
    padding: 4px 8px;
    margin: -4px -8px;
    border-radius: 4px;
    transition: all 0.2s ease;
    outline: none;
    min-height: 1.4em;
}
.editable-cell:hover {
    background-color: rgba(13, 110, 253, 0.1);
    cursor: text;
}
.editable-cell:focus {
    background-color: rgba(13, 110, 253, 0.05);
    box-shadow: 0 0 0 2px #0d6efd;
    color: inherit;
}
.editable-select {
    border: none;
    background-color: transparent;
    padding: 2px 4px;
    cursor: pointer;
    font-size: 0.875rem;
    color: inherit;
    border-radius: 4px;
    width: 100%;
}
.editable-select:hover {
    background-color: rgba(13, 110, 253, 0.1);
}
.editable-select:focus {
    background-color: rgba(13, 110, 253, 0.05);
    box-shadow: 0 0 0 2px #0d6efd;
    outline: none;
    color: inherit;
}
th[data-sort]:hover {
    background-color: #e9ecef !important;
}

/* Nouveaux Styles Modernes */
.btn-add-modern {
    background: linear-gradient(135deg, #198754 0%, #20c997 100%);
    color: white !important;
    border: none;
    border-radius: 50px;
    padding: 10px 24px;
    font-weight: 600;
    box-shadow: 0 4px 15px rgba(25, 135, 84, 0.2);
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
}
.btn-add-modern:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(25, 135, 84, 0.3);
    filter: brightness(1.1);
}

.btn-delete-modern {
    color: #dc3545;
    background: transparent;
    border: 1.5px solid #dc3545;
    border-radius: 8px;
    width: 35px;
    height: 35px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
    padding: 0;
}
.btn-delete-modern:hover {
    background-color: #dc3545;
    color: white;
    transform: scale(1.1);
}

.total-badge-modern {
    display: flex;
    align-items: center;
    background: #f8f9fa;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 8px 16px;
    gap: 12px;
    box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);
}
.total-badge-modern .label {
    color: #6c757d;
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.total-badge-modern .count {
    background: linear-gradient(135deg, #0d6efd 0%, #0043a8 100%);
    color: white;
    padding: 2px 14px;
    border-radius: 20px;
    font-weight: 700;
    font-size: 1.1rem;
    box-shadow: 0 2px 5px rgba(13, 110, 253, 0.3);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var searchInput = document.getElementById('searchInput');
    var tableBody   = document.getElementById('tableBody');
    var rows        = tableBody.getElementsByTagName('tr');

    /* ===== 1. RECHERCHE EN TEMPS RÉEL ===== */
    searchInput.addEventListener('keyup', function() {
        var filter = searchInput.value.toLowerCase();
        for (var i = 0; i < rows.length; i++) {
            if (rows[i].id === 'emptyRow') continue;
            var text = rows[i].textContent || rows[i].innerText;
            rows[i].style.display = text.toLowerCase().indexOf(filter) > -1 ? '' : 'none';
        }
    });

    /* ===== 2. TRI PAR COLONNE ===== */
    var getCellValue = function(tr, idx) { return tr.children[idx].innerText || tr.children[idx].textContent; };
    var comparer = function(idx, asc) {
        return function(a, b) {
            var v1 = getCellValue(asc ? a : b, idx);
            var v2 = getCellValue(asc ? b : a, idx);
            if (v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2)) return v1 - v2;
            return v1.toString().localeCompare(v2);
        };
    };

    var sortStates = {};
    document.querySelectorAll('th[data-sort]').forEach(function(th) {
        th.addEventListener('click', function() {
            var key = th.getAttribute('data-sort');
            sortStates[key] = !sortStates[key];
            var asc = sortStates[key];

            var table = th.closest('table');
            var tbody = table.querySelector('tbody');
            Array.from(tbody.querySelectorAll('tr'))
                .filter(function(tr) { return tr.id !== 'emptyRow'; })
                .sort(comparer(Array.from(th.parentNode.children).indexOf(th), asc))
                .forEach(function(tr) { tbody.appendChild(tr); });

            // Mise à jour des icônes
            document.querySelectorAll('th[data-sort] i').forEach(function(i) { i.className = 'fas fa-sort ms-1 text-muted'; });
            th.querySelector('i').className = asc ? 'fas fa-sort-up ms-1 text-primary' : 'fas fa-sort-down ms-1 text-primary';
        });
    });

    /* ===== 3. TOAST ===== */
    function showToast(message, isError) {
        var toast = document.getElementById('toast');
        toast.textContent = message;
        toast.style.backgroundColor = isError ? '#dc3545' : '#198754';
        toast.style.transform = 'translateY(0)';
        toast.style.opacity = '1';
        setTimeout(function() {
            toast.style.transform = 'translateY(100px)';
            toast.style.opacity = '0';
        }, 3000);
    }

    /* ===== 4. ÉDITION EN LIGNE AJAX AVEC CONTROLE DE SAISIE ===== */
    let oldValues = {};

    document.querySelectorAll('.editable-cell').forEach(function(cell) {
        cell.addEventListener('focus', function() {
            oldValues[this.dataset.field + this.closest('tr').dataset.id] = this.innerText.trim();
        });

        cell.addEventListener('blur', function() {
            var field = this.getAttribute('data-field');
            var value = this.innerText.trim();
            var id    = this.closest('tr').getAttribute('data-id');
            var oldValue = oldValues[field + id];

            // Ne rien faire si la valeur n'a pas changé
            if (value === oldValue) return;

            // --- CONTROLE DE SAISIE CLIENT ---
            let errorMsg = null;
            if (field === 'titre' && !/^[a-zA-ZÀ-ÿ\\s]+\$/.test(value)) {
                errorMsg = 'Le titre ne doit contenir que des lettres';
            } else if (field === 'montant') {
                let val = parseFloat(value.replace(',', '.'));
                if (isNaN(val) || val <= 0) {
                    errorMsg = 'Le montant doit être un nombre supérieur à zéro';
                }
            } else if (field === 'date_charge' && isNaN(Date.parse(value))) {
                errorMsg = 'Format de date invalide';
            } else if (field === 'preuve_image' && value === '') {
                errorMsg = 'Le justificatif est obligatoire';
            }

            if (errorMsg) {
                showToast(errorMsg, true);
                this.innerText = oldValue; // Restauration
                return;
            }

            // --- ENVOI AJAX ---
            fetch('/admin/afficher_back_charge/edit/' + id, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                body: JSON.stringify({ field: field, value: value })
            })
            .then(function(r) { return r.json(); })
            .then(function(data) {
                if (data.success) {
                    showToast('Modification enregistrée !', false);
                    oldValues[field + id] = value; // Mise à jour de la valeur de référence
                    if (data.newTotal !== undefined) {
                        document.getElementById('totalDisplay').innerText =
                            Number(data.newTotal).toFixed(2).replace('.', ',').replace(/\\B(?=(\\d{3})+(?!\\d))/g, ' ');
                    }
                } else {
                    showToast('Erreur : ' + data.message, true);
                    this.innerText = oldValue; // Restauration en cas d'erreur serveur
                }
            }.bind(this))
            .catch(function() {
                showToast('Erreur de connexion', true);
                this.innerText = oldValue;
            }.bind(this));
        });

        cell.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') { e.preventDefault(); this.blur(); }
        });
    });

    /* ===== 5. ÉDITION VIA SELECT (ENUMS) ===== */
    document.querySelectorAll('.editable-select').forEach(function(select) {
        select.addEventListener('change', function() {
            var field = this.getAttribute('data-field');
            var value = this.value;
            var id    = this.closest('tr').getAttribute('data-id');

            fetch('/afficher_back_charge/edit/' + id, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                body: JSON.stringify({ field: field, value: value })
            })
            .then(function(r) { return r.json(); })
            .then(function(data) {
                if (data.success) {
                    showToast('Modification enregistrée !', false);
                } else {
                    showToast('Erreur : ' + data.message, true);
                }
            })
            .catch(function() { showToast('Erreur de connexion', true); });
        });
    });

    /* ===== 6. SUPPRESSION AJAX ===== */
    document.querySelectorAll('.btn-delete-modern').forEach(function(btn) {
        btn.addEventListener('click', function() {
            if (!confirm('Voulez-vous vraiment supprimer cette charge ?')) return;

            var id  = this.getAttribute('data-id');
            var row = this.closest('tr');

            fetch('/admin/afficher_back_charge/delete/' + id, {
                method: 'DELETE',
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(function(r) { return r.json(); })
            .then(function(data) {
                if (data.success) {
                    row.remove();
                    showToast('Charge supprimée avec succès !', false);
                    if (tableBody.querySelectorAll('tr').length === 0) {
                        tableBody.innerHTML = '<tr id=\"emptyRow\"><td colspan=\"9\" class=\"text-center py-4\"><p class=\"text-muted mb-0\">Aucune charge enregistrée.</p></td></tr>';
                    }
                } else {
                    showToast('Erreur de suppression', true);
                }
            })
            .catch(function() { showToast('Erreur de connexion', true); });
        });
    });

    /* ===== 7. REDIMENSIONNEMENT DES COLONNES ===== */
    const createResizableTable = function (table) {
        const cols = table.querySelectorAll('th');
        [].forEach.call(cols, function (col) {
            // Recueille le div du resizer
            const resizer = col.querySelector('.resizer');
            if (!resizer) return;

            let x = 0;
            let w = 0;

            const mouseDownHandler = function (e) {
                x = e.clientX;
                const styles = window.getComputedStyle(col);
                w = parseInt(styles.width, 10);

                document.addEventListener('mousemove', mouseMoveHandler);
                document.addEventListener('mouseup', mouseUpHandler);
                resizer.classList.add('resizing');
            };

            const mouseMoveHandler = function (e) {
                const dx = e.clientX - x;
                col.style.width = `\${w + dx}px`;
            };

            const mouseUpHandler = function () {
                document.removeEventListener('mousemove', mouseMoveHandler);
                document.removeEventListener('mouseup', mouseUpHandler);
                resizer.classList.remove('resizing');
            };

            resizer.addEventListener('mousedown', mouseDownHandler);
        });
    };

    createResizableTable(document.getElementById('chargesTable'));
});
</script>
{% endblock %}
", "afficher_back_charge/index.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\afficher_back_charge\\index.html.twig");
    }
}
