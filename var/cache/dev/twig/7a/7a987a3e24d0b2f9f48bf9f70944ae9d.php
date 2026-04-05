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

/* admin_reclamation/index.html.twig */
class __TwigTemplate_69e39e509470c79af445b32247913eeb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_reclamation/index.html.twig"));

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

        yield "Liste des Réclamations";
        
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
        yield "<div class=\"page-content-wrapper border\">

    <div class=\"row mb-3\">
        <div class=\"col-12\">
            <h1 class=\"h3 mb-2 mb-sm-0\">Liste des Réclamations</h1>
        </div>
    </div>

    <div class=\"card bg-transparent border\">

        ";
        // line 16
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "            <div class=\"px-4 pt-4\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 19
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 20
                    yield "                        <div class=\"alert alert-";
                    yield ((($context["type"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true)));
                    yield " alert-dismissible fade show\" role=\"alert\">
                            ";
                    // line 21
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                    yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "            </div>
        ";
        }
        // line 28
        yield "
        <div class=\"card-body\">
            <div class=\"mb-3\">
                <input
                    type=\"text\"
                    id=\"search-reclamation-admin\"
                    class=\"form-control form-control-sm\"
                    placeholder=\"Rechercher par sujet...\"
                    aria-label=\"Rechercher dans la table\"
                >
            </div>
            <div class=\"table-responsive border-0\">
                <table id=\"table-reclamation-admin\" class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"border-0 rounded-start\" style=\"cursor: pointer;\">Sujet</th>
                            <th scope=\"col\" class=\"border-0\" style=\"cursor: pointer;\">Description</th>
                            <th scope=\"col\" class=\"border-0\" style=\"cursor: pointer;\">Statut</th>
                            <th scope=\"col\" class=\"border-0 text-center\" style=\"cursor: pointer;\">Date de création</th>
                            <th scope=\"col\" class=\"border-0 rounded-end text-center\">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 52, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 53
            yield "                            <tr>
                                <td>
                                    <h6 class=\"table-responsive-title mb-0\">
                                        <span class=\"text-primary\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "sujet", [], "any", false, false, false, 56), "html", null, true);
            yield "</span>
                                    </h6>
                                </td>

                                <td class=\"text-muted small\">
                                    <div class=\"text-wrap\" style=\"max-width: 250px;\">
                                        ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 62), "html", null, true);
            yield "
                                    </div>
                                </td>

                                <td>
                                    <form method=\"post\" action=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            yield "\" class=\"d-flex align-items-center\">
                                        <input type=\"hidden\" name=\"token\" value=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("edit-item"), "html", null, true);
            yield "\">

                                        ";
            // line 71
            yield "                                        <select name=\"statut\" class=\"form-select form-select-sm me-2\" style=\"width: auto;\">
                                            <option value=\"EN_ATTENTE\" ";
            // line 72
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 72) == "EN_ATTENTE")) ? ("selected") : (""));
            yield ">EN_ATTENTE</option>
                                            <option value=\"EN_COURS\" ";
            // line 73
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 73) == "EN_COURS")) ? ("selected") : (""));
            yield ">EN_COURS</option>
                                            <option value=\"RESOLU\" ";
            // line 74
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 74) == "RESOLU")) ? ("selected") : (""));
            yield ">RESOLU</option>
                                        </select>

                                        <button type=\"submit\" class=\"btn btn-sm btn-light mb-0 shadow-none\">
                                            <i class=\"bi bi-check-lg\"></i>
                                        </button>
                                    </form>
                                </td>

                                <td class=\"text-center small\">
                                    <span class=\"fw-bold\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date_creation", [], "any", false, false, false, 84), "d/m/Y"), "html", null, true);
            yield "</span>
                                    <span class=\"text-muted d-block\" style=\"font-size: 0.75rem;\">";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date_creation", [], "any", false, false, false, 85), "H:i"), "html", null, true);
            yield "</span>
                                </td>

                                <td class=\"text-center\">
                                    <form method=\"post\" action=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer cette réclamation ?');\">
                                        <input type=\"hidden\" name=\"token\" value=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-item"), "html", null, true);
            yield "\">
                                        <button type=\"submit\" class=\"btn btn-sm btn-danger-soft mb-0\">
                                            <i class=\"bi bi-trash\"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 97
        if (!$context['_iterated']) {
            // line 98
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center py-5\">
                                    <div class=\"text-muted\">Aucune réclamation trouvée.</div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "                    </tbody>
                </table>
            </div>
            </div>
        <div class=\"card-footer bg-transparent border-top\">
            <small class=\"text-muted\">Total: ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 109, $this->source); })())), "html", null, true);
        yield " réclamations enregistrées.</small>
        </div>
    </div>
</div>

<script src=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/table-search-sort.js"), "html", null, true);
        yield "\"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        new TableSearchSort({
            tableId: 'table-reclamation-admin',
            searchInputSelector: '#search-reclamation-admin',
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
        return "admin_reclamation/index.html.twig";
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
        return array (  292 => 114,  284 => 109,  277 => 104,  266 => 98,  264 => 97,  252 => 90,  248 => 89,  241 => 85,  237 => 84,  224 => 74,  220 => 73,  216 => 72,  213 => 71,  208 => 68,  204 => 67,  196 => 62,  187 => 56,  182 => 53,  177 => 52,  151 => 28,  147 => 26,  141 => 25,  131 => 21,  126 => 20,  121 => 19,  117 => 18,  114 => 17,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back_base.html.twig' %}

{% block title %}Liste des Réclamations{% endblock %}

{% block body %}
<div class=\"page-content-wrapper border\">

    <div class=\"row mb-3\">
        <div class=\"col-12\">
            <h1 class=\"h3 mb-2 mb-sm-0\">Liste des Réclamations</h1>
        </div>
    </div>

    <div class=\"card bg-transparent border\">

        {% if app.flashes %}
            <div class=\"px-4 pt-4\">
                {% for type, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ type == 'error' ? 'danger' : type }} alert-dismissible fade show\" role=\"alert\">
                            {{ message }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    {% endfor %}
                {% endfor %}
            </div>
        {% endif %}

        <div class=\"card-body\">
            <div class=\"mb-3\">
                <input
                    type=\"text\"
                    id=\"search-reclamation-admin\"
                    class=\"form-control form-control-sm\"
                    placeholder=\"Rechercher par sujet...\"
                    aria-label=\"Rechercher dans la table\"
                >
            </div>
            <div class=\"table-responsive border-0\">
                <table id=\"table-reclamation-admin\" class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"border-0 rounded-start\" style=\"cursor: pointer;\">Sujet</th>
                            <th scope=\"col\" class=\"border-0\" style=\"cursor: pointer;\">Description</th>
                            <th scope=\"col\" class=\"border-0\" style=\"cursor: pointer;\">Statut</th>
                            <th scope=\"col\" class=\"border-0 text-center\" style=\"cursor: pointer;\">Date de création</th>
                            <th scope=\"col\" class=\"border-0 rounded-end text-center\">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        {% for reclamation in reclamations %}
                            <tr>
                                <td>
                                    <h6 class=\"table-responsive-title mb-0\">
                                        <span class=\"text-primary\">{{ reclamation.sujet }}</span>
                                    </h6>
                                </td>

                                <td class=\"text-muted small\">
                                    <div class=\"text-wrap\" style=\"max-width: 250px;\">
                                        {{ reclamation.description }}
                                    </div>
                                </td>

                                <td>
                                    <form method=\"post\" action=\"{{ path('admin_reclamation_edit', {'id': reclamation.id}) }}\" class=\"d-flex align-items-center\">
                                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('edit-item') }}\">

                                        {# Match the variable case: reclamation.statut #}
                                        <select name=\"statut\" class=\"form-select form-select-sm me-2\" style=\"width: auto;\">
                                            <option value=\"EN_ATTENTE\" {{ reclamation.statut == 'EN_ATTENTE' ? 'selected' }}>EN_ATTENTE</option>
                                            <option value=\"EN_COURS\" {{ reclamation.statut == 'EN_COURS' ? 'selected' }}>EN_COURS</option>
                                            <option value=\"RESOLU\" {{ reclamation.statut == 'RESOLU' ? 'selected' }}>RESOLU</option>
                                        </select>

                                        <button type=\"submit\" class=\"btn btn-sm btn-light mb-0 shadow-none\">
                                            <i class=\"bi bi-check-lg\"></i>
                                        </button>
                                    </form>
                                </td>

                                <td class=\"text-center small\">
                                    <span class=\"fw-bold\">{{ reclamation.date_creation|date('d/m/Y') }}</span>
                                    <span class=\"text-muted d-block\" style=\"font-size: 0.75rem;\">{{ reclamation.date_creation|date('H:i') }}</span>
                                </td>

                                <td class=\"text-center\">
                                    <form method=\"post\" action=\"{{ path('admin_reclamation_delete', {'id': reclamation.id}) }}\" onsubmit=\"return confirm('Supprimer cette réclamation ?');\">
                                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-item') }}\">
                                        <button type=\"submit\" class=\"btn btn-sm btn-danger-soft mb-0\">
                                            <i class=\"bi bi-trash\"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"5\" class=\"text-center py-5\">
                                    <div class=\"text-muted\">Aucune réclamation trouvée.</div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            </div>
        <div class=\"card-footer bg-transparent border-top\">
            <small class=\"text-muted\">Total: {{ reclamations|length }} réclamations enregistrées.</small>
        </div>
    </div>
</div>

<script src=\"{{ asset('assets/js/table-search-sort.js') }}\"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        new TableSearchSort({
            tableId: 'table-reclamation-admin',
            searchInputSelector: '#search-reclamation-admin',
            searchColumnIndex: 0,
            sortableColumns: [0, 1, 2, 3]
        });
    });
</script>
{% endblock %}
", "admin_reclamation/index.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\admin_reclamation\\index.html.twig");
    }
}
