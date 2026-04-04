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
class __TwigTemplate_0513ce23aac46381a534f79ae4d93200 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "afficher_back_charge/index.html.twig"));

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

        yield "Gestion des Charges - BOUSSOLE";
        
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
        yield "<div class=\"row mb-3 align-items-center justify-content-between\">
    <div class=\"col-md-8\">
        <h1 class=\"h3 mb-0\">Gestion des Charges</h1>
    </div>
    <div class=\"col-md-4 text-md-end\">
        ";
        // line 12
        yield "        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ajouter_charge");
        yield "\" class=\"btn btn-primary-soft mb-0\">
            <i class=\"fas fa-plus me-2\"></i>Nouvelle Charge
        </a>
    </div>
</div>

<div class=\"card shadow\">
    <div class=\"card-header border-bottom\">
        <div class=\"row g-3 align-items-center\">
            <div class=\"col-md-6\">
                <input class=\"form-control\" type=\"search\" id=\"searchInput\" placeholder=\"Rechercher une charge...\" onkeyup=\"searchTable()\">
            </div>
        </div>
    </div>

    <div class=\"card-body p-0\">
        <div class=\"table-responsive border-0\">
            <table class=\"table table-dark-heading align-middle p-4 mb-0 table-hover\" id=\"chargeTable\">
                <thead>
                    <tr>
                        <th scope=\"col\" onclick=\"sortTable(0)\" style=\"cursor:pointer\">Titre <i class=\"fas fa-sort small\"></i></th>
                        <th scope=\"col\" onclick=\"sortTable(1)\" style=\"cursor:pointer\">Montant (TND) <i class=\"fas fa-sort small\"></i></th>
                        <th scope=\"col\" onclick=\"sortTable(2)\" style=\"cursor:pointer\">Date <i class=\"fas fa-sort small\"></i></th>
                        <th scope=\"col\">Catégorie</th>
                        <th scope=\"col\">Franchise</th>
                        <th scope=\"col\">Statut</th>
                        <th scope=\"col\" class=\"text-end\">Action</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["charges"]) || array_key_exists("charges", $context) ? $context["charges"] : (function () { throw new RuntimeError('Variable "charges" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["charge"]) {
            // line 43
            yield "                    <tr>
                        <td contenteditable=\"true\" class=\"fw-bold text-primary\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "titre", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                        <td contenteditable=\"true\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "montant", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                        <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "dateCharge", [], "any", false, false, false, 46), "d/m/Y"), "html", null, true);
            yield "</td>
                        <td><span class=\"badge bg-purple bg-opacity-10 text-purple\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "type", [], "any", false, false, false, 47), "html", null, true);
            yield "</span></td>
                        ";
            // line 49
            yield "                        <td>";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "getFranchiseId", [], "method", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "getFranchiseId", [], "method", false, false, false, 49), "nom", [], "any", false, false, false, 49), "html", null, true)) : ("Sans Franchise"));
            yield "</td>
                        <td>
                            <div class=\"badge bg-orange bg-opacity-10 text-orange\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "statusValidation", [], "any", false, false, false, 51), "html", null, true);
            yield "</div>
                        </td>
                        <td class=\"text-end\">
                            ";
            // line 55
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_charge_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["charge"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-danger-soft btn-round mb-0\" 
                               onclick=\"return confirm('Voulez-vous vraiment supprimer cette charge ?')\">
                                <i class=\"bi bi-trash\"></i>
                            </a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 62
        if (!$context['_iterated']) {
            // line 63
            yield "                    <tr><td colspan=\"7\" class=\"text-center\">Aucune charge trouvée.</td></tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['charge'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "                </tbody>
            </table>
        </div>
    </div>

    <div class=\"card-footer border-top bg-light\">
        <div class=\"d-flex justify-content-end align-items-center\">
            <h5 class=\"mb-0 me-3 text-secondary\">Total des charges :</h5>
            <h4 class=\"mb-0 text-success fw-bold\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 73, $this->source); })()), 3, ".", ","), "html", null, true);
        yield " TND</h4>
        </div>
    </div>
</div>

<script>
function searchTable() {
    let input = document.getElementById(\"searchInput\").value.toUpperCase();
    let rows = document.getElementById(\"chargeTable\").getElementsByTagName(\"tr\");
    for (let i = 1; i < rows.length; i++) {
        let text = rows[i].innerText.toUpperCase();
        rows[i].style.display = text.includes(input) ? \"\" : \"none\";
    }
}

function sortTable(n) {
    let table = document.getElementById(\"chargeTable\");
    let rows, switching = true, i, x, y, shouldSwitch, dir = \"asc\", switchcount = 0;
    while (switching) {
        switching = false;
        rows = table.rows;
        for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            x = rows[i].getElementsByTagName(\"TD\")[n];
            y = rows[i + 1].getElementsByTagName(\"TD\")[n];
            if (dir == \"asc\") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) { shouldSwitch = true; break; }
            } else if (dir == \"desc\") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) { shouldSwitch = true; break; }
            }
        }
        if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            switchcount ++;
        } else {
            if (switchcount == 0 && dir == \"asc\") { dir = \"desc\"; switching = true; }
        }
    }
}
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
        return array (  194 => 73,  184 => 65,  177 => 63,  175 => 62,  162 => 55,  156 => 51,  150 => 49,  146 => 47,  142 => 46,  138 => 45,  134 => 44,  131 => 43,  126 => 42,  92 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back_base.html.twig' %}

{% block title %}Gestion des Charges - BOUSSOLE{% endblock %}

{% block body %}
<div class=\"row mb-3 align-items-center justify-content-between\">
    <div class=\"col-md-8\">
        <h1 class=\"h3 mb-0\">Gestion des Charges</h1>
    </div>
    <div class=\"col-md-4 text-md-end\">
        {# Lien vers ton formulaire d'ajout #}
        <a href=\"{{ path('app_ajouter_charge') }}\" class=\"btn btn-primary-soft mb-0\">
            <i class=\"fas fa-plus me-2\"></i>Nouvelle Charge
        </a>
    </div>
</div>

<div class=\"card shadow\">
    <div class=\"card-header border-bottom\">
        <div class=\"row g-3 align-items-center\">
            <div class=\"col-md-6\">
                <input class=\"form-control\" type=\"search\" id=\"searchInput\" placeholder=\"Rechercher une charge...\" onkeyup=\"searchTable()\">
            </div>
        </div>
    </div>

    <div class=\"card-body p-0\">
        <div class=\"table-responsive border-0\">
            <table class=\"table table-dark-heading align-middle p-4 mb-0 table-hover\" id=\"chargeTable\">
                <thead>
                    <tr>
                        <th scope=\"col\" onclick=\"sortTable(0)\" style=\"cursor:pointer\">Titre <i class=\"fas fa-sort small\"></i></th>
                        <th scope=\"col\" onclick=\"sortTable(1)\" style=\"cursor:pointer\">Montant (TND) <i class=\"fas fa-sort small\"></i></th>
                        <th scope=\"col\" onclick=\"sortTable(2)\" style=\"cursor:pointer\">Date <i class=\"fas fa-sort small\"></i></th>
                        <th scope=\"col\">Catégorie</th>
                        <th scope=\"col\">Franchise</th>
                        <th scope=\"col\">Statut</th>
                        <th scope=\"col\" class=\"text-end\">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {% for charge in charges %}
                    <tr>
                        <td contenteditable=\"true\" class=\"fw-bold text-primary\">{{ charge.titre }}</td>
                        <td contenteditable=\"true\">{{ charge.montant }}</td>
                        <td>{{ charge.dateCharge|date('d/m/Y') }}</td>
                        <td><span class=\"badge bg-purple bg-opacity-10 text-purple\">{{ charge.type }}</span></td>
                        {# SÉCURITÉ : On vérifie si la franchise existe avant d'appeler .nom #}
                        <td>{{ charge.getFranchiseId() ? charge.getFranchiseId().nom : 'Sans Franchise' }}</td>
                        <td>
                            <div class=\"badge bg-orange bg-opacity-10 text-orange\">{{ charge.statusValidation }}</div>
                        </td>
                        <td class=\"text-end\">
                            {# Route de suppression définie dans ton contrôleur #}
                            <a href=\"{{ path('app_charge_delete', {'id': charge.id}) }}\" 
                               class=\"btn btn-danger-soft btn-round mb-0\" 
                               onclick=\"return confirm('Voulez-vous vraiment supprimer cette charge ?')\">
                                <i class=\"bi bi-trash\"></i>
                            </a>
                        </td>
                    </tr>
                    {% else %}
                    <tr><td colspan=\"7\" class=\"text-center\">Aucune charge trouvée.</td></tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

    <div class=\"card-footer border-top bg-light\">
        <div class=\"d-flex justify-content-end align-items-center\">
            <h5 class=\"mb-0 me-3 text-secondary\">Total des charges :</h5>
            <h4 class=\"mb-0 text-success fw-bold\">{{ total|number_format(3, '.', ',') }} TND</h4>
        </div>
    </div>
</div>

<script>
function searchTable() {
    let input = document.getElementById(\"searchInput\").value.toUpperCase();
    let rows = document.getElementById(\"chargeTable\").getElementsByTagName(\"tr\");
    for (let i = 1; i < rows.length; i++) {
        let text = rows[i].innerText.toUpperCase();
        rows[i].style.display = text.includes(input) ? \"\" : \"none\";
    }
}

function sortTable(n) {
    let table = document.getElementById(\"chargeTable\");
    let rows, switching = true, i, x, y, shouldSwitch, dir = \"asc\", switchcount = 0;
    while (switching) {
        switching = false;
        rows = table.rows;
        for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            x = rows[i].getElementsByTagName(\"TD\")[n];
            y = rows[i + 1].getElementsByTagName(\"TD\")[n];
            if (dir == \"asc\") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) { shouldSwitch = true; break; }
            } else if (dir == \"desc\") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) { shouldSwitch = true; break; }
            }
        }
        if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            switchcount ++;
        } else {
            if (switchcount == 0 && dir == \"asc\") { dir = \"desc\"; switching = true; }
        }
    }
}
</script>
{% endblock %}", "afficher_back_charge/index.html.twig", "C:\\Users\\Wael\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\afficher_back_charge\\index.html.twig");
    }
}
