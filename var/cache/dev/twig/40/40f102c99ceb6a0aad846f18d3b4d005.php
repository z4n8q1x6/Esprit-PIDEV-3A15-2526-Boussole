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

/* admin_alerte_ia/pdf.html.twig */
class __TwigTemplate_dfc6892ac1b5abbe91a55446062df272 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_alerte_ia/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_alerte_ia/pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Boussole - Rapport d'Alertes</title>
    <style>
        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            font-size: 11px;
            color: #222;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #2c3e50;
            color: #ffffff;
            padding: 20px;
            text-align: left;
        }

        .header h1 {
            margin: 0;
            font-size: 22px;
            letter-spacing: 1px;
        }

        .header p {
            margin: 5px 0 0;
            font-size: 10px;
            opacity: 0.8;
        }

        .meta-info {
            padding: 15px 20px;
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            margin-bottom: 20px;
        }

        table {
            width: 95%;
            margin: 0 auto;
            border-collapse: collapse;
            table-layout: fixed; /* ← forces columns to respect their widths */
        }

        th {
            background-color: #f1f4f6;
            color: #2c3e50;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 10px;
            border-bottom: 2px solid #2c3e50;
            padding: 10px 8px;
            text-align: left;
        }

        td {
            border-bottom: 1px solid #eeeeee;
            padding: 12px 8px;
            vertical-align: middle; /* ← vertically center all cells */
            word-wrap: break-word;  /* ← prevent overflow */
            overflow: hidden;
        }

        .badge {
            padding: 4px 8px;
            border-radius: 3px;
            font-weight: bold;
            color: white;
            display: inline-block;
            white-space: nowrap; /* ← keep badge on one line */
        }
        .bg-danger  { background-color: #d9534f; }
        .bg-warning { background-color: #f0ad4e; }
        .bg-info    { background-color: #5bc0de; }

        .footer {
            position: fixed;
            bottom: 20px;
            width: 100%;
            text-align: center;
            font-size: 9px;
            color: #999;
        }
/* Meta Information */
.meta-info {
    padding: 15px 20px;
    background-color: #f8f9fa;
    border-bottom: 1px solid #dee2e6;
    margin-bottom: 20px;
}

.meta-info table {
    width: auto;
    margin: 0;
    border-collapse: collapse;
    table-layout: auto;
}

.meta-info td {
    border: none;
    padding: 2px 0;
}

.meta-info .label {
    font-weight: bold;
    padding-right: 12px;  /* ← space between label and value */
    white-space: nowrap;
}

/* Badge — consistent size */
.badge {
    padding: 4px 8px;
    border-radius: 3px;
    font-weight: bold;
    color: white;
    display: inline-block;
    white-space: nowrap;
    min-width: 110px;        /* ← all badges same width */
    text-align: center;
}
    </style>
</head>

<body>

    <div class=\"header\">
        <h1>BOUSSOLE</h1>
        <p>Rapport de Surveillance des Alertes Financières</p>
    </div>

<div class=\"meta-info\">
    <table>
        <tr>
            <td class=\"label\">Date du rapport :</td>
            <td>";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <td class=\"label\">Nombre d'incidents :</td>
            <td>";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["alertes"]) || array_key_exists("alertes", $context) ? $context["alertes"] : (function () { throw new RuntimeError('Variable "alertes" does not exist.', 142, $this->source); })())), "html", null, true);
        yield "</td>
        </tr>
    </table>
</div>

    <table>
        <thead>
            <tr>
                <th style=\"width: 18%\">Type</th>
                <th style=\"width: 42%\">Message</th>
                <th style=\"width: 22%\">Gravité</th>  ";
        // line 153
        yield "                <th style=\"width: 18%\">Détection</th>
            </tr>
        </thead>

        <tbody>
        ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["alertes"]) || array_key_exists("alertes", $context) ? $context["alertes"] : (function () { throw new RuntimeError('Variable "alertes" does not exist.', 158, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
            // line 159
            yield "            <tr>
                <td style=\"font-weight: bold; color: #2c3e50;\">
                    ";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "type_alerte", [], "any", false, false, false, 161)), "html", null, true);
            yield "
                </td>
                <td style=\"color: #555;\">
                    ";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "message", [], "any", false, false, false, 164), "html", null, true);
            yield "
                </td>
                <td>
                    ";
            // line 167
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "score_gravite", [], "any", false, false, false, 167) >= 8)) {
                // line 168
                yield "                        <span class=\"badge bg-danger\">CRITIQUE (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "score_gravite", [], "any", false, false, false, 168), "html", null, true);
                yield ")</span>
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 169
$context["alerte"], "score_gravite", [], "any", false, false, false, 169) >= 5)) {
                // line 170
                yield "                        <span class=\"badge bg-warning\">MOYENNE (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "score_gravite", [], "any", false, false, false, 170), "html", null, true);
                yield ")</span>
                    ";
            } else {
                // line 172
                yield "                        <span class=\"badge bg-info\">FAIBLE (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "score_gravite", [], "any", false, false, false, 172), "html", null, true);
                yield ")</span>
                    ";
            }
            // line 174
            yield "                </td>
                <td style=\"font-size: 10px;\">
                    ";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "date_detection", [], "any", false, false, false, 176), "d/m/Y"), "html", null, true);
            yield "<br>
                    <span style=\"color: #999;\">";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "date_detection", [], "any", false, false, false, 177), "H:i"), "html", null, true);
            yield "</span>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 180
        if (!$context['_iterated']) {
            // line 181
            yield "            <tr>
                <td colspan=\"4\" style=\"text-align: center; padding: 30px;\">
                    Aucune alerte n'a été enregistrée pour cette période.
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['alerte'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        yield "        </tbody>
    </table>


</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin_alerte_ia/pdf.html.twig";
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
        return array (  285 => 187,  274 => 181,  272 => 180,  264 => 177,  260 => 176,  256 => 174,  250 => 172,  244 => 170,  242 => 169,  237 => 168,  235 => 167,  229 => 164,  223 => 161,  219 => 159,  214 => 158,  207 => 153,  194 => 142,  187 => 138,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Boussole - Rapport d'Alertes</title>
    <style>
        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            font-size: 11px;
            color: #222;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #2c3e50;
            color: #ffffff;
            padding: 20px;
            text-align: left;
        }

        .header h1 {
            margin: 0;
            font-size: 22px;
            letter-spacing: 1px;
        }

        .header p {
            margin: 5px 0 0;
            font-size: 10px;
            opacity: 0.8;
        }

        .meta-info {
            padding: 15px 20px;
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            margin-bottom: 20px;
        }

        table {
            width: 95%;
            margin: 0 auto;
            border-collapse: collapse;
            table-layout: fixed; /* ← forces columns to respect their widths */
        }

        th {
            background-color: #f1f4f6;
            color: #2c3e50;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 10px;
            border-bottom: 2px solid #2c3e50;
            padding: 10px 8px;
            text-align: left;
        }

        td {
            border-bottom: 1px solid #eeeeee;
            padding: 12px 8px;
            vertical-align: middle; /* ← vertically center all cells */
            word-wrap: break-word;  /* ← prevent overflow */
            overflow: hidden;
        }

        .badge {
            padding: 4px 8px;
            border-radius: 3px;
            font-weight: bold;
            color: white;
            display: inline-block;
            white-space: nowrap; /* ← keep badge on one line */
        }
        .bg-danger  { background-color: #d9534f; }
        .bg-warning { background-color: #f0ad4e; }
        .bg-info    { background-color: #5bc0de; }

        .footer {
            position: fixed;
            bottom: 20px;
            width: 100%;
            text-align: center;
            font-size: 9px;
            color: #999;
        }
/* Meta Information */
.meta-info {
    padding: 15px 20px;
    background-color: #f8f9fa;
    border-bottom: 1px solid #dee2e6;
    margin-bottom: 20px;
}

.meta-info table {
    width: auto;
    margin: 0;
    border-collapse: collapse;
    table-layout: auto;
}

.meta-info td {
    border: none;
    padding: 2px 0;
}

.meta-info .label {
    font-weight: bold;
    padding-right: 12px;  /* ← space between label and value */
    white-space: nowrap;
}

/* Badge — consistent size */
.badge {
    padding: 4px 8px;
    border-radius: 3px;
    font-weight: bold;
    color: white;
    display: inline-block;
    white-space: nowrap;
    min-width: 110px;        /* ← all badges same width */
    text-align: center;
}
    </style>
</head>

<body>

    <div class=\"header\">
        <h1>BOUSSOLE</h1>
        <p>Rapport de Surveillance des Alertes Financières</p>
    </div>

<div class=\"meta-info\">
    <table>
        <tr>
            <td class=\"label\">Date du rapport :</td>
            <td>{{ \"now\"|date(\"d/m/Y H:i\") }}</td>
        </tr>
        <tr>
            <td class=\"label\">Nombre d'incidents :</td>
            <td>{{ alertes|length }}</td>
        </tr>
    </table>
</div>

    <table>
        <thead>
            <tr>
                <th style=\"width: 18%\">Type</th>
                <th style=\"width: 42%\">Message</th>
                <th style=\"width: 22%\">Gravité</th>  {# ← wider so badge fits #}
                <th style=\"width: 18%\">Détection</th>
            </tr>
        </thead>

        <tbody>
        {% for alerte in alertes %}
            <tr>
                <td style=\"font-weight: bold; color: #2c3e50;\">
                    {{ alerte.type_alerte|upper }}
                </td>
                <td style=\"color: #555;\">
                    {{ alerte.message }}
                </td>
                <td>
                    {% if alerte.score_gravite >= 8 %}
                        <span class=\"badge bg-danger\">CRITIQUE ({{ alerte.score_gravite }})</span>
                    {% elseif alerte.score_gravite >= 5 %}
                        <span class=\"badge bg-warning\">MOYENNE ({{ alerte.score_gravite }})</span>
                    {% else %}
                        <span class=\"badge bg-info\">FAIBLE ({{ alerte.score_gravite }})</span>
                    {% endif %}
                </td>
                <td style=\"font-size: 10px;\">
                    {{ alerte.date_detection|date('d/m/Y') }}<br>
                    <span style=\"color: #999;\">{{ alerte.date_detection|date('H:i') }}</span>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\" style=\"text-align: center; padding: 30px;\">
                    Aucune alerte n'a été enregistrée pour cette période.
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


</body>
</html>
", "admin_alerte_ia/pdf.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\admin_alerte_ia\\pdf.html.twig");
    }
}
