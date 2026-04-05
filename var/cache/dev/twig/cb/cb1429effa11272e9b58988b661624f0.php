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
class __TwigTemplate_314d0b1794d984922965adc8e6b748ef extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->load("front_base.html.twig", 1);
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

        yield "Liste des Réclamations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        <div class=\"card-body p-0\">  ";
        // line 29
        yield "            <div class=\"table-responsive\">
                <table class=\"table table-dark-gray align-middle mb-0 table-hover\">  ";
        // line 31
        yield "                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"border-0 rounded-start ps-4\">Sujet</th>
                            <th scope=\"col\" class=\"border-0\">Description</th>
                            <th scope=\"col\" class=\"border-0 text-center\">Statut</th>
                            <th scope=\"col\" class=\"border-0\">Date de création</th>
                            <th scope=\"col\" class=\"border-0 rounded-end text-center\">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 43
            yield "                            <tr>
                                <td class=\"ps-4\">
                                    <h6 class=\"mb-0\">
                                        <a href=\"#\" class=\"text-primary-hover\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "sujet", [], "any", false, false, false, 46), "html", null, true);
            yield "</a>
                                    </h6>
                                </td>

                                <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>  ";
            // line 51
            yield "
                                <td class=\"text-center\">
                                    <span class=\"badge
                                        ";
            // line 54
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 54) == "EN_ATTENTE")) {
                yield " bg-warning text-dark
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 55
$context["reclamation"], "statut", [], "any", false, false, false, 55) == "RESOLUE")) {
                yield " bg-success
                                        ";
            } else {
                // line 56
                yield " bg-secondary
                                        ";
            }
            // line 57
            yield "\">
                                        ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 58), "html", null, true);
            yield "
                                    </span>
                                </td>

                                <td>
                                    ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date_creation", [], "any", false, false, false, 63), "d/m/Y"), "html", null, true);
            yield "
                                    <span class=\"text-muted small d-block\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date_creation", [], "any", false, false, false, 64), "H:i"), "html", null, true);
            yield "</span>
                                </td>

                                <td class=\"text-center\">
                                    <form method=\"post\" action=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ?');\">
                                        <input type=\"hidden\" name=\"token\" value=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-item"), "html", null, true);
            yield "\">
                                        <button type=\"submit\" class=\"btn btn-sm btn-danger-soft mb-0\">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 74
        if (!$context['_iterated']) {
            // line 75
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center py-4\">Aucune réclamation trouvée.</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "                    </tbody>
                </table>
            </div>
        </div>
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
        return array (  238 => 79,  229 => 75,  227 => 74,  217 => 69,  213 => 68,  206 => 64,  202 => 63,  194 => 58,  191 => 57,  187 => 56,  182 => 55,  178 => 54,  173 => 51,  170 => 50,  163 => 46,  158 => 43,  153 => 42,  140 => 31,  137 => 29,  134 => 27,  128 => 26,  118 => 22,  113 => 21,  108 => 20,  104 => 19,  101 => 18,  92 => 11,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
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

        <div class=\"card-body p-0\">  {# ← remove padding so table goes edge to edge #}
            <div class=\"table-responsive\">
                <table class=\"table table-dark-gray align-middle mb-0 table-hover\">  {# ← no explicit widths #}
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"border-0 rounded-start ps-4\">Sujet</th>
                            <th scope=\"col\" class=\"border-0\">Description</th>
                            <th scope=\"col\" class=\"border-0 text-center\">Statut</th>
                            <th scope=\"col\" class=\"border-0\">Date de création</th>
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
{% endblock %}
", "reclamation/index.html.twig", "C:\\Users\\Wael\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\reclamation\\index.html.twig");
    }
}
