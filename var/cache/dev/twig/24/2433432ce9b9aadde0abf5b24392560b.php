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
class __TwigTemplate_55e15b4775238f87b3fd1bb7ad19ba7a extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from eduport.webestica.com/instructor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 13:09:24 GMT -->
<head>
\t<title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

\t<!-- Meta Tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<meta name=\"author\" content=\"Webestica.com\">
\t<meta name=\"description\" content=\"Eduport- LMS, Education and Course Theme\">

\t<!-- Dark mode -->
\t<script>
\t\tconst storedTheme = localStorage.getItem('theme')

\t\tconst getPreferredTheme = () => {
\t\t\tif (storedTheme) {
\t\t\t\treturn storedTheme
\t\t\t}
\t\t\treturn window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
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
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        yield "\">

\t<!-- Google Font -->
\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com/\">
\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap\">

\t<!-- Plugins CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/font-awesome/css/all.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/css/apexcharts.css"), "html", null, true);
        yield "\">

\t<!-- Theme CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">

    ";
        // line 90
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 91
        yield "</head>

<body>

<!-- Header START -->
<header class=\"navbar-light navbar-sticky\">
\t<!-- Logo Nav START -->
\t<nav class=\"navbar navbar-expand-xl\">
\t\t<div class=\"container\">
\t\t\t<!-- Logo START -->
\t\t\t<a class=\"navbar-brand d-flex align-items-center\" href=\"#\">
\t\t\t\t<div class=\"header-logo-icon me-3 d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 55px; border-radius: 20px; border: 2px solid #00e5ff !important; box-shadow: 0 0 10px rgba(0, 229, 255, 0.3); background-color: transparent;\">
                    <i class=\"bi bi-phone\" style=\"color: #00e5ff; font-size: 1.1rem;\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0 fw-bold text-body\" style=\"letter-spacing: 0.5px;\">Boussole</h3>
                    <small class=\"mb-0 fw-bold d-block\" style=\"color: #00e5ff; font-size: 0.7rem; letter-spacing: 1.5px; margin-top: -2px;\">ENTREPRISE</small>
                </div>
\t\t\t</a>
\t\t\t<!-- Logo END -->

\t\t\t<!-- Responsive navbar toggler -->
\t\t\t<button class=\"navbar-toggler ms-auto\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-animation\">
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t</span>
\t\t\t</button>

\t\t\t<!-- Main navbar START -->
\t\t\t<div class=\"navbar-collapse w-100 collapse\" id=\"navbarCollapse\">

\t\t\t\t<!-- Nav Main menu START -->
\t\t\t\t<ul class=\"navbar-nav navbar-nav-scroll mx-auto\">
\t\t\t\t\t<!-- Nav item 1 Demos -->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"demoMenu\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Principale</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"demoMenu\">
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-bar-chart fa-fw me-2\"></i>Tableau de bord</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-shop fa-fw me-2\"></i>Marketplace</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-cart3 fa-fw me-2\"></i>Mon panier</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-box-seam fa-fw me-2\"></i>Mes commandes</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Nav item 2 Pages -->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"pagesMenu\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Gestion</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"pagesMenu\">
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-truck fa-fw me-2\"></i>Fournisseur</a> </li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-exclamation-triangle fa-fw me-2\"></i>Alertes</a> </li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-volume-up fa-fw me-2\"></i>Réclamations</a> </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Nav item 3 Account -->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"accounntMenu\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Finances</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"accounntMenu\">
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-money-bill-wave fa-fw me-2\"></i>Charge</a> </li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-calendar3 fa-fw me-2\"></i>Mensualité</a> </li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-university fa-fw me-2\"></i>Prêt</a> </li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-credit-card fa-fw me-2\"></i>Historique des transactions</a> </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Nav item 4 Accounts-->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"accountsDropdownMenu\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Accounts</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"accountsDropdownMenu\">
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-fw fa-edit me-1\"></i>Edit Profile</a> </li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-fw fa-cog me-1\"></i>Settings</a> </li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-fw fa-trash-alt me-1\"></i>Delete Profile</a> </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<!-- Nav Main menu END -->

\t\t\t\t<!-- Nav Search START -->
\t\t\t\t<div class=\"nav my-3 my-xl-0 px-4 flex-nowrap align-items-center\">
\t\t\t\t\t<div class=\"nav-item w-100 position-relative\">
\t\t\t\t\t\t<form class=\"position-relative\">
\t\t\t\t\t\t\t<input class=\"form-control pe-5 bg-transparent\" id=\"front-search-input\" type=\"search\" placeholder=\"Rechercher...\" aria-label=\"Search\" autocomplete=\"off\">
\t\t\t\t\t\t\t<button class=\"bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset\" type=\"submit\" onclick=\"event.preventDefault();\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-search fs-6 \"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<!-- Search Results Box -->
\t\t\t\t\t\t<ul id=\"search-results-box\" class=\"dropdown-menu shadow w-100 mt-2 position-absolute\" style=\"display: none; max-height: 350px; overflow-y: auto; z-index: 1050; border-radius: 8px;\">
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Nav Search END -->
\t\t\t</div>
\t\t\t<!-- Main navbar END -->

\t\t\t<!-- Dark mode START -->
\t\t\t<div class=\"nav-item ms-3 me-3 d-none d-xl-block\">
                <div class=\"bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded\">
                    <button type=\"button\" class=\"btn btn-sm mb-0\" data-bs-theme-value=\"light\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-sun fa-fw mode-switch\" viewBox=\"0 0 16 16\">
                            <path d=\"M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z\"/>
                            <use href=\"#\"></use>
                        </svg> Light
                    </button>
                    <button type=\"button\" class=\"btn btn-sm mb-0\" data-bs-theme-value=\"dark\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-moon-stars fa-fw mode-switch\" viewBox=\"0 0 16 16\">
                            <path d=\"M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z\"/>
                            <path d=\"M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z\"/>
                            <use href=\"#\"></use>
                        </svg> Dark
                    </button>
                    <button type=\"button\" class=\"btn btn-sm mb-0 active\" data-bs-theme-value=\"auto\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-half fa-fw mode-switch\" viewBox=\"0 0 16 16\">
                            <path d=\"M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z\"/>
                            <use href=\"#\"></use>
                        </svg> Auto
                    </button>
                </div>
            </div>
            <!-- Dark mode END -->

\t\t\t<!-- Profile START -->
\t\t\t<div class=\"dropdown ms-1 ms-lg-0\">
\t\t\t<a class=\"avatar avatar-sm p-0\" href=\"#\" id=\"profileDropdown\" role=\"button\" data-bs-auto-close=\"outside\" data-bs-display=\"static\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/01.jpg"), "html", null, true);
        yield "\" alt=\"avatar\">
\t\t\t</a>
\t\t\t\t<ul class=\"dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3\" aria-labelledby=\"profileDropdown\">
\t\t\t\t\t<!-- Profile info -->
\t\t\t\t\t<li class=\"px-3 mb-3\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t<div class=\"avatar me-3\">
\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle shadow\" src=\"";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/01.jpg"), "html", null, true);
        yield "\" alt=\"avatar\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class=\"h6\" href=\"#\">";
        // line 228
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 228, $this->source); })()), "user", [], "any", false, false, false, 228)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 228, $this->source); })()), "user", [], "any", false, false, false, 228), "nom", [], "any", false, false, false, 228) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 228, $this->source); })()), "user", [], "any", false, false, false, 228), "prenom", [], "any", false, false, false, 228)), "html", null, true)) : ("Utilisateur"));
        yield "</a>
\t\t\t\t\t\t\t\t<p class=\"small m-0\">";
        // line 229
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 229, $this->source); })()), "user", [], "any", false, false, false, 229)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 229, $this->source); })()), "user", [], "any", false, false, false, 229), "email", [], "any", false, false, false, 229), "html", null, true)) : (""));
        yield "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
          <li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t<!-- Links -->
\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-person fa-fw me-2\"></i>Edit Profile</a></li>
\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-gear fa-fw me-2\"></i>Account Settings</a></li>
\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-info-circle fa-fw me-2\"></i>Help</a></li>
\t\t\t\t\t<li><a class=\"dropdown-item bg-danger-soft-hover\" href=\"";
        // line 238
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\"><i class=\"bi bi-power fa-fw me-2\"></i>Sign Out</a></li>

\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!-- Profile START -->
\t\t</div>
\t</nav>
\t<!-- Logo Nav END -->
</header>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Page content START -->
<section class=\"pt-0\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<!-- Main content START -->
\t\t\t<div class=\"col-xl-9\">
            ";
        // line 259
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 260
        yield "            ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 261
        yield "\t\t\t</div>
\t\t\t<!-- Main content END -->
\t\t</div><!-- Row END -->
\t</div>
</section>
<!-- =======================
Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<div class=\"back-top\"><i class=\"bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle\"></i></div>

<script src=\"";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/purecounterjs/dist/purecounter_vanilla.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/js/apexcharts.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/functions.js"), "html", null, true);
        yield "\"></script>

<!-- SweetAlert2 pour Notifications Dynamiques et Script de Recherche -->
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    // 1. Système de Notifications (Toasts SweetAlert2 via app.flashes Symfony)
    ";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 284, $this->source); })()), "flashes", [], "any", false, false, false, 284));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 285
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 286
                yield "            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            let iconType = '";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "';
            if (iconType === 'danger') iconType = 'error';

            Toast.fire({
                icon: iconType,
                title: '";
                // line 303
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "js"), "html", null, true);
                yield "'
            });
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 306
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        yield "
    // 2. Système de Recherche (Affichage en direct sous la barre de recherche)
    const searchInput = document.getElementById('front-search-input');
    const resultsBox = document.getElementById('search-results-box');
    const menuItems = document.querySelectorAll('.navbar-nav .dropdown-menu li:not(:has(.dropdown-divider))');

    if (searchInput && resultsBox) {
        searchInput.addEventListener('input', function(e) {
            const filter = searchInput.value.toLowerCase().trim();
            resultsBox.innerHTML = '';

            if (filter.length > 0) {
                let hasMatches = false;

                menuItems.forEach(function(item) {
                    const linkLabel = item.textContent.trim();
                    const linkA = item.querySelector('a');
                    const url = linkA ? linkA.getAttribute('href') : '#';

                    // Si on a un match et que ce n'est pas un lien mort '#'
                    if(linkLabel.toLowerCase().includes(filter) && url && url !== '#') {
                        hasMatches = true;
                        const li = document.createElement('li');
                        li.innerHTML = item.innerHTML; // Copie conforme du lien avec son icone

                        // Ajustement de style
                        const aTag = li.querySelector('a');
                        if(aTag) aTag.classList.add('py-2');

                        resultsBox.appendChild(li);
                    }
                });

                if(!hasMatches) {
                    const li = document.createElement('li');
                    li.innerHTML = '<span class=\"dropdown-item py-2 text-muted\" style=\"cursor: default;\"><i class=\"fas fa-search fs-6 me-2\"></i>Aucun résultat trouvé</span>';
                    resultsBox.appendChild(li);
                }

                resultsBox.style.display = 'block';
            } else {
                resultsBox.style.display = 'none';
            }
        });

        // Hide results when clicking outside
        document.addEventListener('click', function(e) {
            if(!searchInput.contains(e.target) && !resultsBox.contains(e.target)) {
                resultsBox.style.display = 'none';
            }
        });

        // Show results if clicking on input and there is text
        searchInput.addEventListener('click', function() {
            if(searchInput.value.trim().length > 0) {
                resultsBox.style.display = 'block';
            }
        });
    }
});
</script>

";
        // line 369
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 370
        yield "
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Boussole - Dashboard Management";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 259
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 260
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 369
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  576 => 369,  560 => 260,  544 => 259,  528 => 90,  511 => 6,  500 => 370,  498 => 369,  434 => 307,  428 => 306,  419 => 303,  411 => 298,  397 => 286,  392 => 285,  388 => 284,  378 => 277,  374 => 276,  370 => 275,  366 => 274,  351 => 261,  348 => 260,  346 => 259,  322 => 238,  310 => 229,  306 => 228,  300 => 225,  289 => 217,  161 => 91,  159 => 90,  154 => 88,  148 => 85,  144 => 84,  140 => 83,  129 => 75,  57 => 6,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from eduport.webestica.com/instructor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 13:09:24 GMT -->
<head>
\t<title>{% block title %}Boussole - Dashboard Management{% endblock %}</title>

\t<!-- Meta Tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<meta name=\"author\" content=\"Webestica.com\">
\t<meta name=\"description\" content=\"Eduport- LMS, Education and Course Theme\">

\t<!-- Dark mode -->
\t<script>
\t\tconst storedTheme = localStorage.getItem('theme')

\t\tconst getPreferredTheme = () => {
\t\t\tif (storedTheme) {
\t\t\t\treturn storedTheme
\t\t\t}
\t\t\treturn window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/apexcharts/css/apexcharts.css') }}\">

\t<!-- Theme CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/style.css') }}\">

    {% block stylesheets %}{% endblock %}
</head>

<body>

<!-- Header START -->
<header class=\"navbar-light navbar-sticky\">
\t<!-- Logo Nav START -->
\t<nav class=\"navbar navbar-expand-xl\">
\t\t<div class=\"container\">
\t\t\t<!-- Logo START -->
\t\t\t<a class=\"navbar-brand d-flex align-items-center\" href=\"#\">
\t\t\t\t<div class=\"header-logo-icon me-3 d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 55px; border-radius: 20px; border: 2px solid #00e5ff !important; box-shadow: 0 0 10px rgba(0, 229, 255, 0.3); background-color: transparent;\">
                    <i class=\"bi bi-phone\" style=\"color: #00e5ff; font-size: 1.1rem;\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0 fw-bold text-body\" style=\"letter-spacing: 0.5px;\">Boussole</h3>
                    <small class=\"mb-0 fw-bold d-block\" style=\"color: #00e5ff; font-size: 0.7rem; letter-spacing: 1.5px; margin-top: -2px;\">ENTREPRISE</small>
                </div>
\t\t\t</a>
\t\t\t<!-- Logo END -->

\t\t\t<!-- Responsive navbar toggler -->
\t\t\t<button class=\"navbar-toggler ms-auto\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-animation\">
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t</span>
\t\t\t</button>

\t\t\t<!-- Main navbar START -->
\t\t\t<div class=\"navbar-collapse w-100 collapse\" id=\"navbarCollapse\">

\t\t\t\t<!-- Nav Main menu START -->
\t\t\t\t<ul class=\"navbar-nav navbar-nav-scroll mx-auto\">
\t\t\t\t\t<!-- Nav item 1 Demos -->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"demoMenu\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Principale</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"demoMenu\">
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-bar-chart fa-fw me-2\"></i>Tableau de bord</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-shop fa-fw me-2\"></i>Marketplace</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-cart3 fa-fw me-2\"></i>Mon panier</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-box-seam fa-fw me-2\"></i>Mes commandes</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Nav item 2 Pages -->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"pagesMenu\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Gestion</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"pagesMenu\">
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-truck fa-fw me-2\"></i>Fournisseur</a> </li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-exclamation-triangle fa-fw me-2\"></i>Alertes</a> </li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-volume-up fa-fw me-2\"></i>Réclamations</a> </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Nav item 3 Account -->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"accounntMenu\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Finances</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"accounntMenu\">
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-money-bill-wave fa-fw me-2\"></i>Charge</a> </li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-calendar3 fa-fw me-2\"></i>Mensualité</a> </li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-university fa-fw me-2\"></i>Prêt</a> </li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-credit-card fa-fw me-2\"></i>Historique des transactions</a> </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Nav item 4 Accounts-->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"accountsDropdownMenu\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Accounts</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"accountsDropdownMenu\">
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-fw fa-edit me-1\"></i>Edit Profile</a> </li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-fw fa-cog me-1\"></i>Settings</a> </li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-fw fa-trash-alt me-1\"></i>Delete Profile</a> </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<!-- Nav Main menu END -->

\t\t\t\t<!-- Nav Search START -->
\t\t\t\t<div class=\"nav my-3 my-xl-0 px-4 flex-nowrap align-items-center\">
\t\t\t\t\t<div class=\"nav-item w-100 position-relative\">
\t\t\t\t\t\t<form class=\"position-relative\">
\t\t\t\t\t\t\t<input class=\"form-control pe-5 bg-transparent\" id=\"front-search-input\" type=\"search\" placeholder=\"Rechercher...\" aria-label=\"Search\" autocomplete=\"off\">
\t\t\t\t\t\t\t<button class=\"bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset\" type=\"submit\" onclick=\"event.preventDefault();\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-search fs-6 \"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<!-- Search Results Box -->
\t\t\t\t\t\t<ul id=\"search-results-box\" class=\"dropdown-menu shadow w-100 mt-2 position-absolute\" style=\"display: none; max-height: 350px; overflow-y: auto; z-index: 1050; border-radius: 8px;\">
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Nav Search END -->
\t\t\t</div>
\t\t\t<!-- Main navbar END -->

\t\t\t<!-- Dark mode START -->
\t\t\t<div class=\"nav-item ms-3 me-3 d-none d-xl-block\">
                <div class=\"bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded\">
                    <button type=\"button\" class=\"btn btn-sm mb-0\" data-bs-theme-value=\"light\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-sun fa-fw mode-switch\" viewBox=\"0 0 16 16\">
                            <path d=\"M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z\"/>
                            <use href=\"#\"></use>
                        </svg> Light
                    </button>
                    <button type=\"button\" class=\"btn btn-sm mb-0\" data-bs-theme-value=\"dark\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-moon-stars fa-fw mode-switch\" viewBox=\"0 0 16 16\">
                            <path d=\"M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z\"/>
                            <path d=\"M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z\"/>
                            <use href=\"#\"></use>
                        </svg> Dark
                    </button>
                    <button type=\"button\" class=\"btn btn-sm mb-0 active\" data-bs-theme-value=\"auto\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-half fa-fw mode-switch\" viewBox=\"0 0 16 16\">
                            <path d=\"M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z\"/>
                            <use href=\"#\"></use>
                        </svg> Auto
                    </button>
                </div>
            </div>
            <!-- Dark mode END -->

\t\t\t<!-- Profile START -->
\t\t\t<div class=\"dropdown ms-1 ms-lg-0\">
\t\t\t<a class=\"avatar avatar-sm p-0\" href=\"#\" id=\"profileDropdown\" role=\"button\" data-bs-auto-close=\"outside\" data-bs-display=\"static\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"{{ asset('assets/images/avatar/01.jpg') }}\" alt=\"avatar\">
\t\t\t</a>
\t\t\t\t<ul class=\"dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3\" aria-labelledby=\"profileDropdown\">
\t\t\t\t\t<!-- Profile info -->
\t\t\t\t\t<li class=\"px-3 mb-3\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t<div class=\"avatar me-3\">
\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle shadow\" src=\"{{ asset('assets/images/avatar/01.jpg') }}\" alt=\"avatar\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class=\"h6\" href=\"#\">{{ app.user ? app.user.nom ~ ' ' ~ app.user.prenom : 'Utilisateur' }}</a>
\t\t\t\t\t\t\t\t<p class=\"small m-0\">{{ app.user ? app.user.email : '' }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
          <li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t<!-- Links -->
\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-person fa-fw me-2\"></i>Edit Profile</a></li>
\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-gear fa-fw me-2\"></i>Account Settings</a></li>
\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-info-circle fa-fw me-2\"></i>Help</a></li>
\t\t\t\t\t<li><a class=\"dropdown-item bg-danger-soft-hover\" href=\"{{ path('app_logout') }}\"><i class=\"bi bi-power fa-fw me-2\"></i>Sign Out</a></li>

\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!-- Profile START -->
\t\t</div>
\t</nav>
\t<!-- Logo Nav END -->
</header>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Page content START -->
<section class=\"pt-0\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<!-- Main content START -->
\t\t\t<div class=\"col-xl-9\">
            {% block body %}{% endblock %}
            {% block content %}{% endblock %}
\t\t\t</div>
\t\t\t<!-- Main content END -->
\t\t</div><!-- Row END -->
\t</div>
</section>
<!-- =======================
Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<div class=\"back-top\"><i class=\"bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle\"></i></div>

<script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/apexcharts/js/apexcharts.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/functions.js') }}\"></script>

<!-- SweetAlert2 pour Notifications Dynamiques et Script de Recherche -->
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    // 1. Système de Notifications (Toasts SweetAlert2 via app.flashes Symfony)
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            let iconType = '{{ label }}';
            if (iconType === 'danger') iconType = 'error';

            Toast.fire({
                icon: iconType,
                title: '{{ message | escape('js') }}'
            });
        {% endfor %}
    {% endfor %}

    // 2. Système de Recherche (Affichage en direct sous la barre de recherche)
    const searchInput = document.getElementById('front-search-input');
    const resultsBox = document.getElementById('search-results-box');
    const menuItems = document.querySelectorAll('.navbar-nav .dropdown-menu li:not(:has(.dropdown-divider))');

    if (searchInput && resultsBox) {
        searchInput.addEventListener('input', function(e) {
            const filter = searchInput.value.toLowerCase().trim();
            resultsBox.innerHTML = '';

            if (filter.length > 0) {
                let hasMatches = false;

                menuItems.forEach(function(item) {
                    const linkLabel = item.textContent.trim();
                    const linkA = item.querySelector('a');
                    const url = linkA ? linkA.getAttribute('href') : '#';

                    // Si on a un match et que ce n'est pas un lien mort '#'
                    if(linkLabel.toLowerCase().includes(filter) && url && url !== '#') {
                        hasMatches = true;
                        const li = document.createElement('li');
                        li.innerHTML = item.innerHTML; // Copie conforme du lien avec son icone

                        // Ajustement de style
                        const aTag = li.querySelector('a');
                        if(aTag) aTag.classList.add('py-2');

                        resultsBox.appendChild(li);
                    }
                });

                if(!hasMatches) {
                    const li = document.createElement('li');
                    li.innerHTML = '<span class=\"dropdown-item py-2 text-muted\" style=\"cursor: default;\"><i class=\"fas fa-search fs-6 me-2\"></i>Aucun résultat trouvé</span>';
                    resultsBox.appendChild(li);
                }

                resultsBox.style.display = 'block';
            } else {
                resultsBox.style.display = 'none';
            }
        });

        // Hide results when clicking outside
        document.addEventListener('click', function(e) {
            if(!searchInput.contains(e.target) && !resultsBox.contains(e.target)) {
                resultsBox.style.display = 'none';
            }
        });

        // Show results if clicking on input and there is text
        searchInput.addEventListener('click', function() {
            if(searchInput.value.trim().length > 0) {
                resultsBox.style.display = 'block';
            }
        });
    }
});
</script>

{% block javascripts %}{% endblock %}

</body>
</html>
", "front_base.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\front_base.html.twig");
    }
}
