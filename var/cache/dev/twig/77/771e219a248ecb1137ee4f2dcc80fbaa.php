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

/* front_base.html.twig */
class __TwigTemplate_9afa3397eb6c9b1cd96af34abac33afe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<title>Boussole - Marketplace</title>

\t<!-- Meta Tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<meta name=\"author\" content=\"Webestica.com\">
\t<meta name=\"description\" content=\"Boussole - Gestion commerciale pour franchises\">

\t<!-- Dark mode -->
\t<script>
\t\tconst storedTheme = localStorage.getItem('theme')

\t\tconst getPreferredTheme = () => {
\t\t\tif (storedTheme) {
\t\t\t\treturn storedTheme
\t\t\t}
\t\t\treturn window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
\t\t}

\t\tconst setTheme = function (theme) {
\t\t\tif (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
\t\t\t\tdocument.documentElement.setAttribute('data-bs-theme', 'dark')
\t\t\t} else {
\t\t\t\tdocument.documentElement.setAttribute('data-bs-theme', theme)
\t\t\t}
\t\t}

\t\tsetTheme(getPreferredTheme())

\t\twindow.addEventListener('DOMContentLoaded', () => {
\t\t    var el = document.querySelector('.theme-icon-active');
\t\t\tif(el != 'undefined' && el != null) {
\t\t\t\tconst showActiveTheme = theme => {
\t\t\t\tconst activeThemeIcon = document.querySelector('.theme-icon-active use')
\t\t\t\tconst btnToActive = document.querySelector(`[data-bs-theme-value=\"\${theme}\"]`)
\t\t\t\tconst svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

\t\t\t\tdocument.querySelectorAll('[data-bs-theme-value]').forEach(element => {
\t\t\t\t\telement.classList.remove('active')
\t\t\t\t})

\t\t\t\tbtnToActive.classList.add('active')
\t\t\t\tactiveThemeIcon.setAttribute('href', svgOfActiveBtn)
\t\t\t}

\t\t\twindow.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
\t\t\t\tif (storedTheme !== 'light' || storedTheme !== 'dark') {
\t\t\t\t\tsetTheme(getPreferredTheme())
\t\t\t\t}
\t\t\t})

\t\t\tshowActiveTheme(getPreferredTheme())

\t\t\tdocument.querySelectorAll('[data-bs-theme-value]')
\t\t\t\t.forEach(toggle => {
\t\t\t\t\ttoggle.addEventListener('click', () => {
\t\t\t\t\t\tconst theme = toggle.getAttribute('data-bs-theme-value')
\t\t\t\t\t\tlocalStorage.setItem('theme', theme)
\t\t\t\t\t\tsetTheme(theme)
\t\t\t\t\t\tshowActiveTheme(theme)
\t\t\t\t\t})
\t\t\t\t})

\t\t\t}
\t\t})

\t</script>

\t<!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        yield "\">

\t<!-- Google Font -->
\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com/\">
\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap\">

\t<!-- Plugins CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/font-awesome/css/all.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\">

\t<!-- Theme CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">

</head>

<body>

<!-- Header START -->
<header class=\"navbar-light navbar-sticky\">
\t<nav class=\"navbar navbar-expand-xl\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace");
        yield "\">
\t\t\t\t<img class=\"light-mode-item navbar-brand-item\" src=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\">
\t\t\t\t<img class=\"dark-mode-item navbar-brand-item\" src=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.svg"), "html", null, true);
        yield "\" alt=\"logo\">
\t\t\t</a>

\t\t\t<button class=\"navbar-toggler ms-auto\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t\t<ul class=\"navbar-nav navbar-nav-scroll mx-auto\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace");
        yield "\">Marketplace</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier");
        yield "\">Panier</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_commandes");
        yield "\">Mes commandes</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>
    ";
        // line 125
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 126
        yield "</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Footer START -->
<footer class=\"bg-dark p-3\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-4 text-center text-md-start mb-3 mb-md-0\">
\t\t\t\t<a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace");
        yield "\"> 
\t\t\t\t\t<img class=\"h-20px\" src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.svg"), "html", null, true);
        yield "\" alt=\"logo\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 mb-3 mb-md-0\">
\t\t\t\t<div class=\"text-center text-white\">
\t\t\t\t\tCopyrights ©2025 Boussole. Tous droits réservés.
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<ul class=\"list-inline mb-0 text-center text-md-end\">
\t\t\t\t\t<li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-facebook\"></i></a></li>
\t\t\t\t\t<li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-instagram\"></i></a></li>
\t\t\t\t\t<li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-linkedin-in\"></i></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<!-- Footer END -->

<div class=\"back-top\"><i class=\"bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle\"></i></div>

<script src=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/functions.js"), "html", null, true);
        yield "\"></script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 125
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front_base.html.twig";
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
        return array (  265 => 125,  250 => 158,  246 => 157,  221 => 135,  217 => 134,  207 => 126,  205 => 125,  191 => 114,  185 => 111,  179 => 108,  166 => 98,  162 => 97,  158 => 96,  145 => 86,  139 => 83,  135 => 82,  124 => 74,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<title>Boussole - Marketplace</title>

\t<!-- Meta Tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<meta name=\"author\" content=\"Webestica.com\">
\t<meta name=\"description\" content=\"Boussole - Gestion commerciale pour franchises\">

\t<!-- Dark mode -->
\t<script>
\t\tconst storedTheme = localStorage.getItem('theme')

\t\tconst getPreferredTheme = () => {
\t\t\tif (storedTheme) {
\t\t\t\treturn storedTheme
\t\t\t}
\t\t\treturn window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
\t\t}

\t\tconst setTheme = function (theme) {
\t\t\tif (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
\t\t\t\tdocument.documentElement.setAttribute('data-bs-theme', 'dark')
\t\t\t} else {
\t\t\t\tdocument.documentElement.setAttribute('data-bs-theme', theme)
\t\t\t}
\t\t}

\t\tsetTheme(getPreferredTheme())

\t\twindow.addEventListener('DOMContentLoaded', () => {
\t\t    var el = document.querySelector('.theme-icon-active');
\t\t\tif(el != 'undefined' && el != null) {
\t\t\t\tconst showActiveTheme = theme => {
\t\t\t\tconst activeThemeIcon = document.querySelector('.theme-icon-active use')
\t\t\t\tconst btnToActive = document.querySelector(`[data-bs-theme-value=\"\${theme}\"]`)
\t\t\t\tconst svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

\t\t\t\tdocument.querySelectorAll('[data-bs-theme-value]').forEach(element => {
\t\t\t\t\telement.classList.remove('active')
\t\t\t\t})

\t\t\t\tbtnToActive.classList.add('active')
\t\t\t\tactiveThemeIcon.setAttribute('href', svgOfActiveBtn)
\t\t\t}

\t\t\twindow.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
\t\t\t\tif (storedTheme !== 'light' || storedTheme !== 'dark') {
\t\t\t\t\tsetTheme(getPreferredTheme())
\t\t\t\t}
\t\t\t})

\t\t\tshowActiveTheme(getPreferredTheme())

\t\t\tdocument.querySelectorAll('[data-bs-theme-value]')
\t\t\t\t.forEach(toggle => {
\t\t\t\t\ttoggle.addEventListener('click', () => {
\t\t\t\t\t\tconst theme = toggle.getAttribute('data-bs-theme-value')
\t\t\t\t\t\tlocalStorage.setItem('theme', theme)
\t\t\t\t\t\tsetTheme(theme)
\t\t\t\t\t\tshowActiveTheme(theme)
\t\t\t\t\t})
\t\t\t\t})

\t\t\t}
\t\t})

\t</script>

\t<!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon.ico') }}\">

\t<!-- Google Font -->
\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com/\">
\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap\">

\t<!-- Plugins CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/font-awesome/css/all.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\">

\t<!-- Theme CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/style.css') }}\">

</head>

<body>

<!-- Header START -->
<header class=\"navbar-light navbar-sticky\">
\t<nav class=\"navbar navbar-expand-xl\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"{{ path('app_marketplace') }}\">
\t\t\t\t<img class=\"light-mode-item navbar-brand-item\" src=\"{{ asset('assets/images/logo.svg') }}\" alt=\"logo\">
\t\t\t\t<img class=\"dark-mode-item navbar-brand-item\" src=\"{{ asset('assets/images/logo-light.svg') }}\" alt=\"logo\">
\t\t\t</a>

\t\t\t<button class=\"navbar-toggler ms-auto\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t\t<ul class=\"navbar-nav navbar-nav-scroll mx-auto\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" href=\"{{ path('app_marketplace') }}\">Marketplace</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_panier') }}\">Panier</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_mes_commandes') }}\">Mes commandes</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>
    {% block body %}{% endblock %}
</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Footer START -->
<footer class=\"bg-dark p-3\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-4 text-center text-md-start mb-3 mb-md-0\">
\t\t\t\t<a href=\"{{ path('app_marketplace') }}\"> 
\t\t\t\t\t<img class=\"h-20px\" src=\"{{ asset('assets/images/logo-light.svg') }}\" alt=\"logo\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 mb-3 mb-md-0\">
\t\t\t\t<div class=\"text-center text-white\">
\t\t\t\t\tCopyrights ©2025 Boussole. Tous droits réservés.
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<ul class=\"list-inline mb-0 text-center text-md-end\">
\t\t\t\t\t<li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-facebook\"></i></a></li>
\t\t\t\t\t<li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-instagram\"></i></a></li>
\t\t\t\t\t<li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-linkedin-in\"></i></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<!-- Footer END -->

<div class=\"back-top\"><i class=\"bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle\"></i></div>

<script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/functions.js') }}\"></script>

</body>
</html>", "front_base.html.twig", "C:\\Users\\chips\\Documents\\Boussole\\templates\\front_base.html.twig");
    }
}
