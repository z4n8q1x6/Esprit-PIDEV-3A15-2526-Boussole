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

/* reclamation/index.html.twig */
class __TwigTemplate_1a3e1a71da7b4f260abb164d384b0d15 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

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

        yield "Liste des Réclamations";
        
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
        yield "<div class=\"page-content-wrapper\">

    <div class=\"row mb-3\">
        <div class=\"col-12 d-sm-flex justify-content-between align-items-center\">
            <h1 class=\"h3 mb-2 mb-sm-0\">Liste des Réclamations</h1>
            <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_new");
        yield "\" class=\"btn btn-sm btn-primary mb-0\">
                <i class=\"bi bi-plus-lg me-2\"></i>Nouvelle Réclamation
            </a>
        </div>
    </div>

    <div class=\"card bg-transparent border w-100\">  ";
        // line 18
        yield "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 20
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 21
                yield "                <div class=\"alert alert-";
                yield ((($context["type"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true)));
                yield " alert-dismissible fade show m-3\" role=\"alert\">
                    ";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
        <div class=\"card-body p-0\">
            <div class=\"mb-3 p-4 pb-0\">
                <input 
                    type=\"text\" 
                    id=\"search-reclamation-user\" 
                    class=\"form-control form-control-sm\" 
                    placeholder=\"Rechercher par sujet...\"
                    aria-label=\"Rechercher dans la table\"
                >
            </div>
            <div class=\"table-responsive\">
                <table id=\"table-reclamation-user\" class=\"table table-dark-gray align-middle mb-0 table-hover\">
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"border-0 rounded-start ps-4\" style=\"cursor: pointer;\">Sujet</th>
                            <th scope=\"col\" class=\"border-0\" style=\"cursor: pointer;\">Description</th>
                            <th scope=\"col\" class=\"border-0 text-center\" style=\"cursor: pointer;\">Statut</th>
                            <th scope=\"col\" class=\"border-0\" style=\"cursor: pointer;\">Date de création</th>
                            <th scope=\"col\" class=\"border-0 rounded-end text-center\">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 52
            yield "                            <tr>
                                <td class=\"ps-4\">
                                    <h6 class=\"mb-0\">
                                        <a href=\"#\" class=\"text-primary-hover\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "sujet", [], "any", false, false, false, 55), "html", null, true);
            yield "</a>
                                    </h6>
                                </td>

                                <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>  ";
            // line 60
            yield "
                                <td class=\"text-center\">
                                    <span class=\"badge
                                        ";
            // line 63
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 63) == "EN_ATTENTE")) {
                yield " bg-warning text-dark
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 64
$context["reclamation"], "statut", [], "any", false, false, false, 64) == "RESOLUE")) {
                yield " bg-success
                                        ";
            } else {
                // line 65
                yield " bg-secondary
                                        ";
            }
            // line 66
            yield "\">
                                        ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 67), "html", null, true);
            yield "
                                    </span>
                                </td>

                                <td>
                                    ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date_creation", [], "any", false, false, false, 72), "d/m/Y"), "html", null, true);
            yield "
                                    <span class=\"text-muted small d-block\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date_creation", [], "any", false, false, false, 73), "H:i"), "html", null, true);
            yield "</span>
                                </td>

                                <td class=\"text-center\">
                                    <form method=\"post\" action=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ?');\">
                                        <input type=\"hidden\" name=\"token\" value=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-item"), "html", null, true);
            yield "\">
                                        <button type=\"submit\" class=\"btn btn-sm btn-danger-soft mb-0\">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 83
        if (!$context['_iterated']) {
            // line 84
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center py-4\">Aucune réclamation trouvée.</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/table-search-sort.js"), "html", null, true);
        yield "\"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        new TableSearchSort({
            tableId: 'table-reclamation-user',
            searchInputSelector: '#search-reclamation-user',
            searchColumnIndex: 0,
            sortableColumns: [0, 1, 2, 3]
        });
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
        return "reclamation/index.html.twig";
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
        return array (  269 => 95,  260 => 88,  251 => 84,  249 => 83,  239 => 78,  235 => 77,  228 => 73,  224 => 72,  216 => 67,  213 => 66,  209 => 65,  204 => 64,  200 => 63,  195 => 60,  192 => 59,  185 => 55,  180 => 52,  175 => 51,  149 => 27,  143 => 26,  133 => 22,  128 => 21,  123 => 20,  119 => 19,  116 => 18,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front_base.html.twig' %}

{% block title %}Liste des Réclamations{% endblock %}

{% block content %}
<div class=\"page-content-wrapper\">

    <div class=\"row mb-3\">
        <div class=\"col-12 d-sm-flex justify-content-between align-items-center\">
            <h1 class=\"h3 mb-2 mb-sm-0\">Liste des Réclamations</h1>
            <a href=\"{{ path('reclamation_new') }}\" class=\"btn btn-sm btn-primary mb-0\">
                <i class=\"bi bi-plus-lg me-2\"></i>Nouvelle Réclamation
            </a>
        </div>
    </div>

    <div class=\"card bg-transparent border w-100\">  {# ← w-100 on the card #}

        {% for type, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ type == 'error' ? 'danger' : type }} alert-dismissible fade show m-3\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}
        {% endfor %}

        <div class=\"card-body p-0\">
            <div class=\"mb-3 p-4 pb-0\">
                <input 
                    type=\"text\" 
                    id=\"search-reclamation-user\" 
                    class=\"form-control form-control-sm\" 
                    placeholder=\"Rechercher par sujet...\"
                    aria-label=\"Rechercher dans la table\"
                >
            </div>
            <div class=\"table-responsive\">
                <table id=\"table-reclamation-user\" class=\"table table-dark-gray align-middle mb-0 table-hover\">
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"border-0 rounded-start ps-4\" style=\"cursor: pointer;\">Sujet</th>
                            <th scope=\"col\" class=\"border-0\" style=\"cursor: pointer;\">Description</th>
                            <th scope=\"col\" class=\"border-0 text-center\" style=\"cursor: pointer;\">Statut</th>
                            <th scope=\"col\" class=\"border-0\" style=\"cursor: pointer;\">Date de création</th>
                            <th scope=\"col\" class=\"border-0 rounded-end text-center\">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        {% for reclamation in reclamations %}
                            <tr>
                                <td class=\"ps-4\">
                                    <h6 class=\"mb-0\">
                                        <a href=\"#\" class=\"text-primary-hover\">{{ reclamation.sujet }}</a>
                                    </h6>
                                </td>

                                <td>{{ reclamation.description }}</td>  {# ← no truncate, let it wrap naturally #}

                                <td class=\"text-center\">
                                    <span class=\"badge
                                        {% if reclamation.statut == 'EN_ATTENTE' %} bg-warning text-dark
                                        {% elseif reclamation.statut == 'RESOLUE' %} bg-success
                                        {% else %} bg-secondary
                                        {% endif %}\">
                                        {{ reclamation.statut }}
                                    </span>
                                </td>

                                <td>
                                    {{ reclamation.date_creation|date('d/m/Y') }}
                                    <span class=\"text-muted small d-block\">{{ reclamation.date_creation|date('H:i') }}</span>
                                </td>

                                <td class=\"text-center\">
                                    <form method=\"post\" action=\"{{ path('reclamation_delete', {'id': reclamation.id}) }}\" onsubmit=\"return confirm('Supprimer ?');\">
                                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-item') }}\">
                                        <button type=\"submit\" class=\"btn btn-sm btn-danger-soft mb-0\">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"5\" class=\"text-center py-4\">Aucune réclamation trouvée.</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src=\"{{ asset('assets/js/table-search-sort.js') }}\"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        new TableSearchSort({
            tableId: 'table-reclamation-user',
            searchInputSelector: '#search-reclamation-user',
            searchColumnIndex: 0,
            sortableColumns: [0, 1, 2, 3]
        });
    });
</script>
{% endblock %}
", "reclamation/index.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\reclamation\\index.html.twig");
    }
}
