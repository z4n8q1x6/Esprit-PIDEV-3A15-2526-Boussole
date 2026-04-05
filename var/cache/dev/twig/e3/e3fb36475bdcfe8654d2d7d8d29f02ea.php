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

/* bilan/show.html.twig */
class __TwigTemplate_7314056144a082ba292c0ae1b98f106c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan/show.html.twig"));

        // line 1
        yield "<!DOCTYPE html>

<title>Bilan</title>

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
        yield "    <h1>Bilan</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Mois</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 16, $this->source); })()), "mois", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Annee</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 20, $this->source); })()), "annee", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Total_recettes</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 24, $this->source); })()), "totalRecettes", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Total_charges</th>
                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 28, $this->source); })()), "totalCharges", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Resultat_net</th>
                <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 32, $this->source); })()), "resultatNet", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bilan_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bilan_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, "bilan/_delete_form.html.twig");
        yield "
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
        return "bilan/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  139 => 41,  134 => 39,  129 => 37,  121 => 32,  114 => 28,  107 => 24,  100 => 20,  93 => 16,  86 => 12,  78 => 6,  55 => 5,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>

<title>Bilan</title>

{% block body %}
    <h1>Bilan</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ bilan.id }}</td>
            </tr>
            <tr>
                <th>Mois</th>
                <td>{{ bilan.mois }}</td>
            </tr>
            <tr>
                <th>Annee</th>
                <td>{{ bilan.annee }}</td>
            </tr>
            <tr>
                <th>Total_recettes</th>
                <td>{{ bilan.totalRecettes }}</td>
            </tr>
            <tr>
                <th>Total_charges</th>
                <td>{{ bilan.totalCharges }}</td>
            </tr>
            <tr>
                <th>Resultat_net</th>
                <td>{{ bilan.resultatNet }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_bilan_index') }}\">back to list</a>

    <a href=\"{{ path('app_bilan_edit', {'id': bilan.id}) }}\">edit</a>

    {{ include('bilan/_delete_form.html.twig') }}
{% endblock %}
", "bilan/show.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\bilan\\show.html.twig");
    }
}
