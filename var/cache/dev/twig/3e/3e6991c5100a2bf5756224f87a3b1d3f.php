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

/* back_base.html.twig */
class __TwigTemplate_45deb525df95a5226358f958dc41e2ad extends Template
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
            'admin_content' => [$this, 'block_admin_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<title>Boussole - Administration</title>

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
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/css/apexcharts.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/overlay-scrollbar/css/overlayscrollbars.min.css"), "html", null, true);
        yield "\">

\t<!-- Theme CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">

</head>

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- Sidebar START -->
<nav class=\"navbar sidebar navbar-expand-xl navbar-dark bg-dark\">

\t<div class=\"d-flex align-items-center\">
\t\t<a class=\"navbar-brand\" href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
\t\t\t<img class=\"navbar-brand-item\" src=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.svg"), "html", null, true);
        yield "\" alt=\"\">
\t\t</a>
\t</div>

\t<div class=\"offcanvas offcanvas-start flex-row custom-scrollbar h-100\" data-bs-backdrop=\"true\" tabindex=\"-1\" id=\"offcanvasSidebar\">
\t\t<div class=\"offcanvas-body sidebar-content d-flex flex-column bg-dark\">

\t\t\t<ul class=\"navbar-nav flex-column\" id=\"navbar-sidebar\">
\t\t\t\t<li class=\"nav-item\"><a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"nav-link active\"><i class=\"bi bi-house fa-fw me-2\"></i>Dashboard</a></li>
\t\t\t\t<li class=\"nav-item ms-2 my-2\">Gestion</li>
\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
        yield "\"><i class=\"fas fa-box fa-fw me-2\"></i>Produits</a></li>
\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_commandes");
        yield "\"><i class=\"fas fa-shopping-cart fa-fw me-2\"></i>Commandes</a></li>
\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"><i class=\"fas fa-store fa-fw me-2\"></i>Franchises</a></li>
\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"><i class=\"fas fa-users fa-fw me-2\"></i>Utilisateurs</a></li>
\t\t\t</ul>

\t\t\t<div class=\"px-3 mt-auto pt-3\">
\t\t\t\t<div class=\"d-flex align-items-center justify-content-between text-primary-hover\">
\t\t\t\t\t<a class=\"h5 mb-0 text-body\" href=\"#\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Settings\">
\t\t\t\t\t\t<i class=\"bi bi-gear-fill\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"h5 mb-0 text-body\" href=\"#\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Sign out\">
\t\t\t\t\t\t<i class=\"bi bi-power\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</nav>
<!-- Sidebar END -->

<!-- Page content START -->
<div class=\"page-content\">

\t<!-- Top bar START -->
\t<nav class=\"navbar top-bar navbar-light border-bottom py-0 py-xl-3\">
\t\t<div class=\"container-fluid p-0\">
\t\t\t<div class=\"d-flex align-items-center w-100\">

\t\t\t\t<div class=\"d-flex align-items-center d-xl-none\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
\t\t\t\t\t\t<img class=\"light-mode-item navbar-brand-item h-30px\" src=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-mobile.svg"), "html", null, true);
        yield "\" alt=\"\">
\t\t\t\t\t\t<img class=\"dark-mode-item navbar-brand-item h-30px\" src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-mobile-light.svg"), "html", null, true);
        yield "\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"navbar-expand-xl sidebar-offcanvas-menu\">
\t\t\t\t\t<button class=\"navbar-toggler me-auto\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-controls=\"offcanvasSidebar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" data-bs-auto-close=\"outside\">
\t\t\t\t\t\t<i class=\"bi bi-text-right fa-fw h2 lh-0 mb-0 rtl-flip\" data-bs-target=\"#offcanvasMenu\"> </i>
\t\t\t\t\t</button>
\t\t\t\t</div>

\t\t\t\t<div class=\"navbar-expand-lg ms-auto ms-xl-0\">
\t\t\t\t\t<button class=\"navbar-toggler ms-auto\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTopContent\" aria-controls=\"navbarTopContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-animation\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</button>

\t\t\t\t\t<div class=\"collapse navbar-collapse w-100\" id=\"navbarTopContent\">
\t\t\t\t\t\t<div class=\"nav my-3 my-xl-0 flex-nowrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"nav-item w-100\">
\t\t\t\t\t\t\t\t<form class=\"position-relative\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control pe-5 bg-secondary bg-opacity-10 border-0\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t\t\t<button class=\"bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y\" type=\"submit\"><i class=\"fas fa-search fs-6 text-primary\"></i></button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"ms-xl-auto\">
\t\t\t\t\t<ul class=\"navbar-nav flex-row align-items-center\">
\t\t\t\t\t\t<li class=\"nav-item ms-2 ms-md-3 dropdown\">
\t\t\t\t\t\t\t<a class=\"btn btn-light btn-round mb-0\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" data-bs-auto-close=\"outside\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-bell fa-fw\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<span class=\"notif-badge animation-blink\"></span>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0\">
\t\t\t\t\t\t\t\t<div class=\"card bg-transparent\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header bg-transparent border-bottom py-4 d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0\">Notifications</h6>
\t\t\t\t\t\t\t\t\t\t<a class=\"small\" href=\"#\">Clear all</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-group list-unstyled list-group-flush\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"list-group-item-action border-0 border-bottom d-flex p-3\">Aucune notification</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"nav-item ms-2 ms-md-3 dropdown\">
\t\t\t\t\t\t\t<a class=\"avatar avatar-sm p-0\" href=\"#\" id=\"profileDropdown\" role=\"button\" data-bs-auto-close=\"outside\" data-bs-display=\"static\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/01.jpg"), "html", null, true);
        yield "\" alt=\"avatar\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3\" aria-labelledby=\"profileDropdown\">
\t\t\t\t\t\t\t\t<li class=\"px-3\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar me-3 mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle shadow\" src=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/01.jpg"), "html", null, true);
        yield "\" alt=\"avatar\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"h6 mt-2 mt-sm-0\" href=\"#\">Admin</a>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"small m-0\">admin@boussole.com</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item bg-danger-soft-hover\" href=\"#\"><i class=\"bi bi-power fa-fw me-2\"></i>Sign Out</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</nav>
\t<!-- Top bar END -->

\t<!-- Page main content START -->
\t<div class=\"page-content-wrapper border\">
\t\t<!-- Flash messages -->
\t\t";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 228, $this->source); })()), "flashes", [], "any", false, false, false, 228));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 229
            yield "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 230
                yield "\t\t\t\t<div class=\"alert alert-";
                yield ((($context["label"] == "success")) ? ("success") : (((($context["label"] == "danger")) ? ("danger") : ("warning"))));
                yield " alert-dismissible fade show m-3\" role=\"alert\">
\t\t\t\t\t";
                // line 231
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            yield "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        yield "\t\t
\t\t";
        // line 237
        yield from $this->unwrap()->yieldBlock('admin_content', $context, $blocks);
        // line 238
        yield "\t</div>
\t<!-- Page main content END -->
</div>
<!-- Page content END -->

</main>

<!-- Back to top -->
<div class=\"back-top\"><i class=\"bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle\"></i></div>

<script src=\"";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/purecounterjs/dist/purecounter_vanilla.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/js/apexcharts.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/functions.js"), "html", null, true);
        yield "\"></script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 237
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_admin_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back_base.html.twig";
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
        return array (  400 => 237,  385 => 251,  381 => 250,  377 => 249,  373 => 248,  361 => 238,  359 => 237,  356 => 236,  350 => 235,  340 => 231,  335 => 230,  330 => 229,  326 => 228,  301 => 206,  292 => 200,  234 => 145,  230 => 144,  226 => 143,  193 => 113,  189 => 112,  184 => 110,  173 => 102,  169 => 101,  153 => 88,  147 => 85,  143 => 84,  139 => 83,  135 => 82,  124 => 74,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<title>Boussole - Administration</title>

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
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/apexcharts/css/apexcharts.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/overlay-scrollbar/css/overlayscrollbars.min.css') }}\">

\t<!-- Theme CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">

</head>

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- Sidebar START -->
<nav class=\"navbar sidebar navbar-expand-xl navbar-dark bg-dark\">

\t<div class=\"d-flex align-items-center\">
\t\t<a class=\"navbar-brand\" href=\"{{ path('app_admin_dashboard') }}\">
\t\t\t<img class=\"navbar-brand-item\" src=\"{{ asset('assets/images/logo-light.svg') }}\" alt=\"\">
\t\t</a>
\t</div>

\t<div class=\"offcanvas offcanvas-start flex-row custom-scrollbar h-100\" data-bs-backdrop=\"true\" tabindex=\"-1\" id=\"offcanvasSidebar\">
\t\t<div class=\"offcanvas-body sidebar-content d-flex flex-column bg-dark\">

\t\t\t<ul class=\"navbar-nav flex-column\" id=\"navbar-sidebar\">
\t\t\t\t<li class=\"nav-item\"><a href=\"{{ path('app_admin_dashboard') }}\" class=\"nav-link active\"><i class=\"bi bi-house fa-fw me-2\"></i>Dashboard</a></li>
\t\t\t\t<li class=\"nav-item ms-2 my-2\">Gestion</li>
\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_produit_index') }}\"><i class=\"fas fa-box fa-fw me-2\"></i>Produits</a></li>
\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_admin_commandes') }}\"><i class=\"fas fa-shopping-cart fa-fw me-2\"></i>Commandes</a></li>
\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"><i class=\"fas fa-store fa-fw me-2\"></i>Franchises</a></li>
\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"><i class=\"fas fa-users fa-fw me-2\"></i>Utilisateurs</a></li>
\t\t\t</ul>

\t\t\t<div class=\"px-3 mt-auto pt-3\">
\t\t\t\t<div class=\"d-flex align-items-center justify-content-between text-primary-hover\">
\t\t\t\t\t<a class=\"h5 mb-0 text-body\" href=\"#\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Settings\">
\t\t\t\t\t\t<i class=\"bi bi-gear-fill\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"h5 mb-0 text-body\" href=\"#\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Sign out\">
\t\t\t\t\t\t<i class=\"bi bi-power\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</nav>
<!-- Sidebar END -->

<!-- Page content START -->
<div class=\"page-content\">

\t<!-- Top bar START -->
\t<nav class=\"navbar top-bar navbar-light border-bottom py-0 py-xl-3\">
\t\t<div class=\"container-fluid p-0\">
\t\t\t<div class=\"d-flex align-items-center w-100\">

\t\t\t\t<div class=\"d-flex align-items-center d-xl-none\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"{{ path('app_admin_dashboard') }}\">
\t\t\t\t\t\t<img class=\"light-mode-item navbar-brand-item h-30px\" src=\"{{ asset('assets/images/logo-mobile.svg') }}\" alt=\"\">
\t\t\t\t\t\t<img class=\"dark-mode-item navbar-brand-item h-30px\" src=\"{{ asset('assets/images/logo-mobile-light.svg') }}\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"navbar-expand-xl sidebar-offcanvas-menu\">
\t\t\t\t\t<button class=\"navbar-toggler me-auto\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-controls=\"offcanvasSidebar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" data-bs-auto-close=\"outside\">
\t\t\t\t\t\t<i class=\"bi bi-text-right fa-fw h2 lh-0 mb-0 rtl-flip\" data-bs-target=\"#offcanvasMenu\"> </i>
\t\t\t\t\t</button>
\t\t\t\t</div>

\t\t\t\t<div class=\"navbar-expand-lg ms-auto ms-xl-0\">
\t\t\t\t\t<button class=\"navbar-toggler ms-auto\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTopContent\" aria-controls=\"navbarTopContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-animation\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</button>

\t\t\t\t\t<div class=\"collapse navbar-collapse w-100\" id=\"navbarTopContent\">
\t\t\t\t\t\t<div class=\"nav my-3 my-xl-0 flex-nowrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"nav-item w-100\">
\t\t\t\t\t\t\t\t<form class=\"position-relative\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control pe-5 bg-secondary bg-opacity-10 border-0\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t\t\t<button class=\"bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y\" type=\"submit\"><i class=\"fas fa-search fs-6 text-primary\"></i></button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"ms-xl-auto\">
\t\t\t\t\t<ul class=\"navbar-nav flex-row align-items-center\">
\t\t\t\t\t\t<li class=\"nav-item ms-2 ms-md-3 dropdown\">
\t\t\t\t\t\t\t<a class=\"btn btn-light btn-round mb-0\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" data-bs-auto-close=\"outside\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-bell fa-fw\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<span class=\"notif-badge animation-blink\"></span>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0\">
\t\t\t\t\t\t\t\t<div class=\"card bg-transparent\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header bg-transparent border-bottom py-4 d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0\">Notifications</h6>
\t\t\t\t\t\t\t\t\t\t<a class=\"small\" href=\"#\">Clear all</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-group list-unstyled list-group-flush\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"list-group-item-action border-0 border-bottom d-flex p-3\">Aucune notification</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"nav-item ms-2 ms-md-3 dropdown\">
\t\t\t\t\t\t\t<a class=\"avatar avatar-sm p-0\" href=\"#\" id=\"profileDropdown\" role=\"button\" data-bs-auto-close=\"outside\" data-bs-display=\"static\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"{{ asset('assets/images/avatar/01.jpg') }}\" alt=\"avatar\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3\" aria-labelledby=\"profileDropdown\">
\t\t\t\t\t\t\t\t<li class=\"px-3\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar me-3 mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle shadow\" src=\"{{ asset('assets/images/avatar/01.jpg') }}\" alt=\"avatar\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"h6 mt-2 mt-sm-0\" href=\"#\">Admin</a>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"small m-0\">admin@boussole.com</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item bg-danger-soft-hover\" href=\"#\"><i class=\"bi bi-power fa-fw me-2\"></i>Sign Out</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</nav>
\t<!-- Top bar END -->

\t<!-- Page main content START -->
\t<div class=\"page-content-wrapper border\">
\t\t<!-- Flash messages -->
\t\t{% for label, messages in app.flashes %}
\t\t\t{% for message in messages %}
\t\t\t\t<div class=\"alert alert-{{ label == 'success' ? 'success' : (label == 'danger' ? 'danger' : 'warning') }} alert-dismissible fade show m-3\" role=\"alert\">
\t\t\t\t\t{{ message }}
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t{% endfor %}
\t\t
\t\t{% block admin_content %}{% endblock %}
\t</div>
\t<!-- Page main content END -->
</div>
<!-- Page content END -->

</main>

<!-- Back to top -->
<div class=\"back-top\"><i class=\"bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle\"></i></div>

<script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/apexcharts/js/apexcharts.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/functions.js') }}\"></script>

</body>
</html>", "back_base.html.twig", "C:\\Users\\chips\\Documents\\Boussole\\templates\\back_base.html.twig");
    }
}
