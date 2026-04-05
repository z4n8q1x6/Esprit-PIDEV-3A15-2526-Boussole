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

/* bilan/index.html.twig */
class __TwigTemplate_b78f7c2632c725b6245d8eb40212a7cb extends Template
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

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>

<title>Bilan index</title>

";
        // line 5
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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
        yield "    <h1>Bilan index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Mois</th>
                <th>Annee</th>
                <th>Total_recettes</th>
                <th>Total_charges</th>
                <th>Resultat_net</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bilans"]) || array_key_exists("bilans", $context) ? $context["bilans"] : (function () { throw new RuntimeError('Variable "bilans" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bilan"]) {
            // line 22
            yield "            <tr>
                <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "id", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "mois", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "annee", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "totalRecettes", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "totalCharges", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "resultatNet", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bilan_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bilan_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 34
        if (!$context['_iterated']) {
            // line 35
            yield "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['bilan'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bilan_new");
        yield "\">Create new</a>
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
        return "bilan/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  156 => 42,  151 => 39,  142 => 35,  140 => 34,  132 => 31,  128 => 30,  123 => 28,  119 => 27,  115 => 26,  111 => 25,  107 => 24,  103 => 23,  100 => 22,  95 => 21,  78 => 6,  55 => 5,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>

<title>Bilan index</title>

{% block body %}
    <h1>Bilan index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Mois</th>
                <th>Annee</th>
                <th>Total_recettes</th>
                <th>Total_charges</th>
                <th>Resultat_net</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for bilan in bilans %}
            <tr>
                <td>{{ bilan.id }}</td>
                <td>{{ bilan.mois }}</td>
                <td>{{ bilan.annee }}</td>
                <td>{{ bilan.totalRecettes }}</td>
                <td>{{ bilan.totalCharges }}</td>
                <td>{{ bilan.resultatNet }}</td>
                <td>
                    <a href=\"{{ path('app_bilan_show', {'id': bilan.id}) }}\">show</a>
                    <a href=\"{{ path('app_bilan_edit', {'id': bilan.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_bilan_new') }}\">Create new</a>
{% endblock %}
", "bilan/index.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\bilan\\index.html.twig");
    }
}
