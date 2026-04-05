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

/* alerte_ia/index.html.twig */
class __TwigTemplate_8858ea93c524e9174c5de8fc1a54a059 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "alerte_ia/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "alerte_ia/index.html.twig"));

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

        yield "Liste des Alertes";
        
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
        yield "<div class=\"page-content-wrapper border\">

    <div class=\"row mb-3\">
        <div class=\"col-12 d-sm-flex justify-content-between align-items-center\">
            <h1 class=\"h3 mb-2 mb-sm-0\">Liste des Alertes</h1>
            <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alerte_new");
        yield "\" class=\"btn btn-sm btn-primary mb-0\">
                <i class=\"bi bi-megaphone me-2\"></i>Générer une alerte
            </a>
        </div>
    </div>

    <div class=\"card bg-transparent border\">

        ";
        // line 19
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "            <div class=\"px-4 pt-4\">
                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 22
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 23
                    yield "                        <div class=\"alert alert-";
                    yield ((($context["type"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true)));
                    yield " alert-dismissible fade show\" role=\"alert\">
                            ";
                    // line 24
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                    yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "            </div>
        ";
        }
        // line 31
        yield "
        <div class=\"card-body\">
            <div class=\"mb-3\">
                <input 
                    type=\"text\" 
                    id=\"search-alerte-ia-user\" 
                    class=\"form-control form-control-sm\" 
                    placeholder=\"Rechercher par type d'alerte...\"
                    aria-label=\"Rechercher dans la table\"
                >
            </div>
            <div class=\"table-responsive border-0\">
                <table id=\"table-alerte-ia-user\" class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"border-0 rounded-start\" style=\"cursor: pointer;\">Type</th>
                            <th scope=\"col\" class=\"border-0\" style=\"cursor: pointer;\">Message</th>
                            <th scope=\"col\" class=\"border-0 text-center\" style=\"cursor: pointer;\">Gravité</th>
                            <th scope=\"col\" class=\"border-0 text-center\" style=\"cursor: pointer;\">Date de détection</th>
                            <th scope=\"col\" class=\"border-0 rounded-end text-center\">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["alertes"]) || array_key_exists("alertes", $context) ? $context["alertes"] : (function () { throw new RuntimeError('Variable "alertes" does not exist.', 55, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
            // line 56
            yield "                            <tr>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"icon-sm bg-primary bg-opacity-10 text-primary rounded-circle me-2\">
                                            <i class=\"bi bi-exclamation-triangle\"></i>
                                        </div>
                                        <h6 class=\"mb-0 ms-1\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "type_alerte", [], "any", false, false, false, 62), "html", null, true);
            yield "</h6>
                                    </div>
                                </td>

                                <td class=\"text-muted small\">
                                    <div class=\"text-wrap\" style=\"max-width: 300px;\">
                                        ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "message", [], "any", false, false, false, 68), "html", null, true);
            yield "
                                    </div>
                                </td>

                                <td class=\"text-center\">
                                    ";
            // line 74
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "score_gravite", [], "any", false, false, false, 74) >= 8)) {
                // line 75
                yield "                                        <span class=\"badge bg-danger\">Critique (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "score_gravite", [], "any", false, false, false, 75), "html", null, true);
                yield ")</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 76
$context["alerte"], "score_gravite", [], "any", false, false, false, 76) >= 5)) {
                // line 77
                yield "                                        <span class=\"badge bg-warning text-dark\">Moyenne (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "score_gravite", [], "any", false, false, false, 77), "html", null, true);
                yield ")</span>
                                    ";
            } else {
                // line 79
                yield "                                        <span class=\"badge bg-info\">Faible (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "score_gravite", [], "any", false, false, false, 79), "html", null, true);
                yield ")</span>
                                    ";
            }
            // line 81
            yield "                                </td>

                                <td class=\"text-center small\">
                                    ";
            // line 85
            yield "                                    <span class=\"fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "date_detection", [], "any", false, false, false, 85), "d/m/Y"), "html", null, true);
            yield "</span>
                                    <span class=\"text-muted d-block\" style=\"font-size: 0.75rem;\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "date_detection", [], "any", false, false, false, 86), "H:i"), "html", null, true);
            yield "</span>
                                </td>

                                <td class=\"text-center\">
                                    <form method=\"post\" action=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alerte_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer cette alerte ?');\">
                                        <input type=\"hidden\" name=\"token\" value=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-item"), "html", null, true);
            yield "\">
                                        <button type=\"submit\" class=\"btn btn-sm btn-danger-soft mb-0\">
                                            <i class=\"bi bi-trash\"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 98
        if (!$context['_iterated']) {
            // line 99
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center py-5\">
                                    <div class=\"text-muted\">Aucune alerte trouvée dans le système.</div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['alerte'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        yield "                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"card-footer bg-transparent border-top\">
            <small class=\"text-muted\">Total: ";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["alertes"]) || array_key_exists("alertes", $context) ? $context["alertes"] : (function () { throw new RuntimeError('Variable "alertes" does not exist.', 110, $this->source); })())), "html", null, true);
        yield " alertes détectées.</small>
        </div>
    </div>
</div>

<script src=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/table-search-sort.js"), "html", null, true);
        yield "\"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        new TableSearchSort({
            tableId: 'table-alerte-ia-user',
            searchInputSelector: '#search-alerte-ia-user',
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
        return "alerte_ia/index.html.twig";
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
        return array (  296 => 115,  288 => 110,  281 => 105,  270 => 99,  268 => 98,  256 => 91,  252 => 90,  245 => 86,  240 => 85,  235 => 81,  229 => 79,  223 => 77,  221 => 76,  216 => 75,  213 => 74,  205 => 68,  196 => 62,  188 => 56,  183 => 55,  157 => 31,  153 => 29,  147 => 28,  137 => 24,  132 => 23,  127 => 22,  123 => 21,  120 => 20,  118 => 19,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front_base.html.twig' %}

{% block title %}Liste des Alertes{% endblock %}

{% block content %}
<div class=\"page-content-wrapper border\">

    <div class=\"row mb-3\">
        <div class=\"col-12 d-sm-flex justify-content-between align-items-center\">
            <h1 class=\"h3 mb-2 mb-sm-0\">Liste des Alertes</h1>
            <a href=\"{{ path('alerte_new') }}\" class=\"btn btn-sm btn-primary mb-0\">
                <i class=\"bi bi-megaphone me-2\"></i>Générer une alerte
            </a>
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
                    id=\"search-alerte-ia-user\" 
                    class=\"form-control form-control-sm\" 
                    placeholder=\"Rechercher par type d'alerte...\"
                    aria-label=\"Rechercher dans la table\"
                >
            </div>
            <div class=\"table-responsive border-0\">
                <table id=\"table-alerte-ia-user\" class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"border-0 rounded-start\" style=\"cursor: pointer;\">Type</th>
                            <th scope=\"col\" class=\"border-0\" style=\"cursor: pointer;\">Message</th>
                            <th scope=\"col\" class=\"border-0 text-center\" style=\"cursor: pointer;\">Gravité</th>
                            <th scope=\"col\" class=\"border-0 text-center\" style=\"cursor: pointer;\">Date de détection</th>
                            <th scope=\"col\" class=\"border-0 rounded-end text-center\">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        {% for alerte in alertes %}
                            <tr>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"icon-sm bg-primary bg-opacity-10 text-primary rounded-circle me-2\">
                                            <i class=\"bi bi-exclamation-triangle\"></i>
                                        </div>
                                        <h6 class=\"mb-0 ms-1\">{{ alerte.type_alerte }}</h6>
                                    </div>
                                </td>

                                <td class=\"text-muted small\">
                                    <div class=\"text-wrap\" style=\"max-width: 300px;\">
                                        {{ alerte.message }}
                                    </div>
                                </td>

                                <td class=\"text-center\">
                                    {# FIXED: Changed scoreGravite to score_gravite in the condition #}
                                    {% if alerte.score_gravite >= 8 %}
                                        <span class=\"badge bg-danger\">Critique ({{ alerte.score_gravite }})</span>
                                    {% elseif alerte.score_gravite >= 5 %}
                                        <span class=\"badge bg-warning text-dark\">Moyenne ({{ alerte.score_gravite }})</span>
                                    {% else %}
                                        <span class=\"badge bg-info\">Faible ({{ alerte.score_gravite }})</span>
                                    {% endif %}
                                </td>

                                <td class=\"text-center small\">
                                    {# FIXED: Changed dateDetection to date_detection #}
                                    <span class=\"fw-bold\">{{ alerte.date_detection|date('d/m/Y') }}</span>
                                    <span class=\"text-muted d-block\" style=\"font-size: 0.75rem;\">{{ alerte.date_detection|date('H:i') }}</span>
                                </td>

                                <td class=\"text-center\">
                                    <form method=\"post\" action=\"{{ path('alerte_delete', {'id': alerte.id}) }}\" onsubmit=\"return confirm('Supprimer cette alerte ?');\">
                                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-item') }}\">
                                        <button type=\"submit\" class=\"btn btn-sm btn-danger-soft mb-0\">
                                            <i class=\"bi bi-trash\"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"5\" class=\"text-center py-5\">
                                    <div class=\"text-muted\">Aucune alerte trouvée dans le système.</div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"card-footer bg-transparent border-top\">
            <small class=\"text-muted\">Total: {{ alertes|length }} alertes détectées.</small>
        </div>
    </div>
</div>

<script src=\"{{ asset('assets/js/table-search-sort.js') }}\"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        new TableSearchSort({
            tableId: 'table-alerte-ia-user',
            searchInputSelector: '#search-alerte-ia-user',
            searchColumnIndex: 0,
            sortableColumns: [0, 1, 2, 3]
        });
    });
</script>
{% endblock %}
", "alerte_ia/index.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\alerte_ia\\index.html.twig");
    }
}
