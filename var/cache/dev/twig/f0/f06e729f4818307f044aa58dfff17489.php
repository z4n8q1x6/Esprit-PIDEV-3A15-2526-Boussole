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
class __TwigTemplate_eef32aa56845aad7a0c38ef2ac2a1861 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from eduport.webestica.com/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 13:15:29 GMT -->
<head>
\t<title>Boussole - Dashboard Management</title>

\t<!-- Meta Tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<meta name=\"author\" content=\"Webestica.com\">
\t<meta name=\"description\" content=\"Boussole - Gestion Opérationnelle et Tableau de bord\">

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
    <link rel=\"stylesheet\" href=\"";
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
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/css/apexcharts.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/overlay-scrollbar/css/overlayscrollbars.min.css"), "html", null, true);
        yield "\">

\t<!-- Theme CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">


<style>
    /* ===== Sidebar scrollable ===== */
    @media (min-width: 1200px) {
        /* The sidebar nav is fixed, 100vh tall */
        .navbar.sidebar.navbar-expand-xl {
            height: 100vh;
            overflow: hidden;
        }
        /* The offcanvas becomes relative at xl — make it fill remaining height and scroll */
        .navbar.sidebar.navbar-expand-xl .offcanvas {
            flex: 1;
            min-height: 0;
            overflow: hidden;
        }
        .navbar.sidebar.navbar-expand-xl .offcanvas-body.sidebar-content {
            overflow-y: auto !important;
            overflow-x: hidden !important;
            max-height: calc(100vh - 80px); /* 80px = logo header height */
            /* Thin scrollbar */
            scrollbar-width: thin;
            scrollbar-color: rgba(0, 229, 255, 0.3) transparent;
        }
        .navbar.sidebar.navbar-expand-xl .offcanvas-body.sidebar-content::-webkit-scrollbar {
            width: 4px;
        }
        .navbar.sidebar.navbar-expand-xl .offcanvas-body.sidebar-content::-webkit-scrollbar-track {
            background: transparent;
        }
        .navbar.sidebar.navbar-expand-xl .offcanvas-body.sidebar-content::-webkit-scrollbar-thumb {
            background-color: rgba(0, 229, 255, 0.4);
            border-radius: 4px;
        }
    }
</style>

";
        // line 127
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 128
        yield "</head>

<body>


<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- Sidebar START -->
<nav class=\"navbar sidebar navbar-expand-xl navbar-dark bg-dark\">

\t<!-- Navbar brand for xl START -->
<div class=\"d-flex align-items-center mt-2 px-3 pb-2 pt-2 border-bottom border-secondary border-opacity-25\" style=\"background-color: #1a1b24;\">
<a class=\"navbar-brand d-flex align-items-center\" href=\"#\">
<div class=\"header-logo-icon rounded me-3 d-flex align-items-center justify-content-center\" style=\"width: 45px; height: 45px; border: 2px solid #00e5ff !important; box-shadow: 0 0 12px rgba(0, 229, 255, 0.4); background-color: transparent;\">
                <i class=\"bi bi-display text-white fs-4\"></i>
            </div>
            <div>
                <h4 class=\"text-white mb-0 fw-bold\" style=\"letter-spacing: 0.5px;\">Boussole</h4>
                <small class=\"mb-0 fw-bold\" style=\"color: #00e5ff; font-size: 0.65rem; letter-spacing: 1.5px;\">MANAGEMENT</small>
            </div>
</a>
</div>
<!-- Navbar brand for xl END -->

\t<div class=\"offcanvas offcanvas-start flex-row custom-scrollbar h-100\" data-bs-backdrop=\"true\" tabindex=\"-1\" id=\"offcanvasSidebar\">
\t\t<div class=\"offcanvas-body sidebar-content d-flex flex-column bg-dark\" style=\"overflow-y: auto; overflow-x: hidden;\">

\t\t\t<!-- Sidebar menu START -->
\t\t\t<ul class=\"navbar-nav flex-column mt-3\" id=\"navbar-sidebar\" style=\"flex: 1; overflow-y: auto; overflow-x: hidden;\">

\t\t\t\t<!-- Title -->
\t\t\t\t<li class=\"nav-item ms-3 my-2\" style=\"font-size: 0.75rem; letter-spacing: 1px; color: #6c757d; font-weight: bold; text-transform: uppercase;\">Principal</li>

\t\t\t\t<!-- Menu item -->
\t\t\t\t<li class=\"nav-item mb-1\">
                    <a href=\"#\" class=\"nav-link active d-flex align-items-center py-2 px-3\" style=\"background-color: rgba(0, 229, 255, 0.08); color: #00e5ff; border-radius: 8px; margin-left: 10px; margin-right: 10px; border-left: 3px solid #00e5ff;\">
                        <i class=\"bi bi-grid fa-fw me-3\"></i>Vue d'ensemble
                    </a>
                </li>
\t\t\t\t
                <li class=\"nav-item mt-1\"><a class=\"nav-link text-body py-2 px-4\" href=\"#\"><i class=\"bi bi-people fa-fw me-3 fs-6\"></i>Utilisateurs</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-body py-2 px-4\" href=\"#\"><i class=\"bi bi-building fa-fw me-3 fs-6\"></i>Entreprises</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-body py-2 px-4\" href=\"#\"><i class=\"bi bi-bag fa-fw me-3 fs-6\"></i>Gestion catalogue</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-body py-2 px-4\" href=\"#\"><i class=\"bi bi-download fa-fw me-3 fs-6\"></i>Commandes reçues</a></li>

\t\t\t\t<!-- Title -->
\t\t\t\t<li class=\"nav-item ms-3 mt-4 mb-2\" style=\"font-size: 0.75rem; letter-spacing: 1px; color: #6c757d; font-weight: bold; text-transform: uppercase;\">Outils</li>

                <li class=\"nav-item\"><a class=\"nav-link text-body py-2 px-4\" href=\"";
        // line 177
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficher_back_charge");
        yield "\"><i class=\"bi bi-cash fa-fw me-3 fs-6\"></i>Charges</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-body py-2 px-4\" href=\"";
        // line 178
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficher_back_fournisseur");
        yield "\"><i class=\"bi bi-truck fa-fw me-3 fs-6\"></i>Fournisseurs</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-body py-2 px-4\" href=\"#\"><i class=\"bi bi-megaphone fa-fw me-3 fs-6\"></i>Réclamations</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-body py-2 px-4\" href=\"#\"><i class=\"bi bi-robot fa-fw me-3 fs-6\"></i>Alertes IA</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-body py-2 px-4\" href=\"#\"><i class=\"bi bi-globe fa-fw me-3 fs-6\"></i>Carte franchises</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-body py-2 px-4\" href=\"#\"><i class=\"bi bi-bar-chart-line fa-fw me-3 fs-6\"></i>Bilans</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-body py-2 px-4\" href=\"#\"><i class=\"bi bi-piggy-bank fa-fw me-3 fs-6\"></i>Budgets</a></li>

\t\t\t</ul>
\t\t\t<!-- Sidebar menu end -->

\t\t\t<!-- Sidebar footer START -->
\t\t\t<div class=\"px-3 mt-auto pt-3 pb-4\">
                <!-- User profile box -->
\t\t\t\t<div class=\"d-flex align-items-center p-3 mb-3 rounded shadow\" style=\"background-color: #2b2b36;\">
                    <div class=\"avatar avatar-sm me-3 d-flex align-items-center justify-content-center fw-bold\" style=\"background-color: #00e5ff; color: #1a1a24; border-radius: 8px;\">
                        AD
                    </div>
                    <div>
                        <h6 class=\"mb-0 text-white fw-bold\" style=\"font-size: 0.85rem;\">admin@boussole.tn</h6>
                        <small class=\"mb-0\" style=\"color: #00ff88; font-size: 0.75rem;\"><i class=\"bi bi-circle-fill me-1\" style=\"font-size: 0.5rem;\"></i>En ligne</small>
                    </div>
\t\t\t\t</div>
                
                <!-- Logout -->
                <a class=\"h6 mb-0 text-danger d-flex align-items-center ms-1 d-inline-block\" href=\"#\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Déconnexion\" style=\"transition: all 0.3s;\">
                    <i class=\"bi bi-power me-2 text-danger\"></i> Déconnexion
                </a>
\t\t\t</div>
\t\t\t<!-- Sidebar footer END -->

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

\t\t\t\t<!-- Logo START -->
\t\t\t\t<div class=\"d-flex align-items-center d-xl-none\">
\t\t\t\t\t<a class=\"navbar-brand d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t<div class=\"header-logo-icon rounded me-2 d-flex align-items-center justify-content-center\" style=\"width: 30px; height: 30px; border: 2px solid #00e5ff !important; box-shadow: 0 0 10px rgba(0, 229, 255, 0.5); background-color: transparent;\">
                            <i class=\"bi bi-display text-white\" style=\"font-size: 0.8rem;\"></i>
                        </div>
                        <h5 class=\"text-white mb-0 fw-bold ms-2\">Boussole</h5>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<!-- Logo END -->

\t\t\t\t<!-- Toggler for sidebar START -->
\t\t\t\t<div class=\"navbar-expand-xl sidebar-offcanvas-menu\">
\t\t\t\t\t<button class=\"navbar-toggler me-auto\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-controls=\"offcanvasSidebar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" data-bs-auto-close=\"outside\">
\t\t\t\t\t\t<i class=\"bi bi-text-right fa-fw h2 lh-0 mb-0 rtl-flip\" data-bs-target=\"#offcanvasMenu\"> </i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<!-- Toggler for sidebar END -->

\t\t\t\t<!-- Top bar left -->
\t\t\t\t<div class=\"navbar-expand-lg ms-auto ms-xl-0\">

\t\t\t\t\t<!-- Toggler for menubar START -->
\t\t\t\t\t<button class=\"navbar-toggler ms-auto\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTopContent\" aria-controls=\"navbarTopContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-animation\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</button>
\t\t\t\t\t<!-- Toggler for menubar END -->

\t\t\t\t\t<!-- Topbar menu START -->
\t\t\t\t\t<div class=\"collapse navbar-collapse w-100\" id=\"navbarTopContent\">
\t\t\t\t\t\t<!-- Top search START -->
\t\t\t\t\t\t<div class=\"nav my-3 my-xl-0 flex-nowrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"nav-item w-100\">
\t\t\t\t\t\t\t\t<form class=\"position-relative\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control pe-5 bg-secondary bg-opacity-10 border-0\" id=\"back-search-input\" type=\"search\" placeholder=\"Rechercher...\" aria-label=\"Search\">
\t\t\t\t\t\t\t\t\t<button class=\"bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y\" type=\"submit\" onclick=\"event.preventDefault();\"><i class=\"fas fa-search fs-6 text-primary\"></i></button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Top search END -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Topbar menu END -->
\t\t\t\t</div>
\t\t\t\t<!-- Top bar left END -->

\t\t\t\t<!-- Top bar right START -->
\t\t\t\t<div class=\"ms-xl-auto\">
\t\t\t\t\t<ul class=\"navbar-nav flex-row align-items-center\">

\t\t\t\t\t\t<!-- Notification dropdown START -->
\t\t\t\t\t\t<li class=\"nav-item ms-2 ms-md-3 dropdown\">
\t\t\t\t\t\t\t<!-- Notification button -->
\t\t\t\t\t\t\t<a class=\"btn btn-light btn-round mb-0\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" data-bs-auto-close=\"outside\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-bell fa-fw\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Notification dote -->
\t\t\t\t\t\t\t<span class=\"notif-badge animation-blink\"></span>

\t\t\t\t\t\t\t<!-- Notification dropdown menu START -->
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0\">
\t\t\t\t\t\t\t\t<div class=\"card bg-transparent\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header bg-transparent border-bottom py-4 d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0\">Notifications <span class=\"badge bg-danger bg-opacity-10 text-danger ms-2\">2 new</span></h6>
\t\t\t\t\t\t\t\t\t\t<a class=\"small\" href=\"#\">Clear all</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-group list-unstyled list-group-flush\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Notif item -->
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item-action border-0 border-bottom d-flex p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/08.jpg"), "html", null, true);
        yield "\" alt=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-body small m-0\">Congratulate <b>Joan Wallace</b> for graduating from <b>Microverse university</b></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<u class=\"small\">Say congrats</u>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<!-- Notif item -->
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item-action border-0 border-bottom d-flex p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/02.jpg"), "html", null, true);
        yield "\" alt=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Larry Lawson Added a new course</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-body m-0\">What's new! Find out about new features</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<u class=\"small\">View detail</u>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<!-- Notif item -->
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item-action border-0 border-bottom d-flex p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/05.jpg"), "html", null, true);
        yield "\" alt=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">New request to apply for Instructor</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<u class=\"small\">View detail</u>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<!-- Notif item -->
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item-action border-0 border-bottom d-flex p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/03.jpg"), "html", null, true);
        yield "\" alt=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Update v2.3 completed successfully</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-body m-0\">What's new! Find out about new features</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-body\">5 min ago</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t<div class=\"card-footer bg-transparent border-0 py-3 text-center position-relative\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stretched-link\">See all incoming activity</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Notification dropdown menu END -->
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- Notification dropdown END -->
\t\t\t\t\t\t<!-- Dark mode options START -->
\t\t\t\t\t\t<li class=\"nav-item ms-2 ms-md-3\">
\t\t\t\t\t\t\t<div class=\"bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded\">
\t\t\t\t\t\t\t\t<!-- <span>Mode:</span> -->
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm mb-0\" data-bs-theme-value=\"light\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-sun fa-fw mode-switch\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z\"/>
\t\t\t\t\t\t\t\t\t\t<use href=\"#\"></use>
\t\t\t\t\t\t\t\t\t</svg> Light
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm mb-0\" data-bs-theme-value=\"dark\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-moon-stars fa-fw mode-switch\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z\"/>
\t\t\t\t\t\t\t\t\t\t<use href=\"#\"></use>
\t\t\t\t\t\t\t\t\t</svg> Dark
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm mb-0 active\" data-bs-theme-value=\"auto\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-half fa-fw mode-switch\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z\"/>
\t\t\t\t\t\t\t\t\t\t<use href=\"#\"></use>
\t\t\t\t\t\t\t\t\t</svg> Auto
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- Dark mode options END-->

\t\t\t\t\t\t<!-- Profile dropdown START -->
\t\t\t\t\t\t<li class=\"nav-item ms-2 ms-md-3 dropdown\">
\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t<a class=\"avatar avatar-sm p-0\" href=\"#\" id=\"profileDropdown\" role=\"button\" data-bs-auto-close=\"outside\" data-bs-display=\"static\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"";
        // line 395
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/01.jpg"), "html", null, true);
        yield "\" alt=\"avatar\">
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<!-- Profile dropdown START -->
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3\" aria-labelledby=\"profileDropdown\">
\t\t\t\t\t\t\t\t<!-- Profile info -->
\t\t\t\t\t\t\t\t<li class=\"px-3\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t\t<div class=\"avatar me-3 mb-3\">
\t\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle shadow\" src=\"";
        // line 405
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/01.jpg"), "html", null, true);
        yield "\" alt=\"avatar\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"h6 mt-2 mt-sm-0\" href=\"#\">Lori Ferguson</a>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"small m-0\">example@gmail.com</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
                <li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-person fa-fw me-2\"></i>Edit Profile</a></li>
\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-gear fa-fw me-2\"></i>Account Settings</a></li>
\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-info-circle fa-fw me-2\"></i>Help</a></li>
\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item bg-danger-soft-hover\" href=\"#\"><i class=\"bi bi-power fa-fw me-2\"></i>Sign Out</a></li>
\t\t\t\t\t\t\t\t<li> <hr class=\"dropdown-divider\"></li>

\t\t\t\t\t\t\t\t<!-- Dark mode options START -->
\t\t\t\t\t\t\t<!-- Profile dropdown END -->
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- Profile dropdown END -->
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- Top bar right END -->
\t\t\t</div>
\t\t</div>
\t</nav>
\t<!-- Top bar END -->

\t<!-- Page main content START -->
\t\t\t<div class=\"page-content-wrapper border\">
\t\t\t\t";
        // line 435
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 436
        yield "\t\t\t</div>
\t\t<!-- Page main content END -->
</div>
<!-- Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class=\"back-top\"><i class=\"bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle\"></i></div>

<!-- Bootstrap JS -->
<script src=\"";
        // line 448
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

<!-- Vendors -->
<script src=\"";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 453
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/purecounterjs/dist/purecounter_vanilla.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/js/apexcharts.min.js"), "html", null, true);
        yield "\"></script>


<!-- Template Functions -->
<script src=\"";
        // line 458
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/functions.js"), "html", null, true);
        yield "\"></script>

";
        // line 460
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 461
        yield "
<!-- SweetAlert2 pour Notifications Dynamiques et Script de Recherche -->
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    // 1. Système de Notifications (Toasts SweetAlert2 via app.flashes Symfony)
    ";
        // line 467
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 467, $this->source); })()), "flashes", [], "any", false, false, false, 467));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 468
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 469
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
                // line 481
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "';
            if (iconType === 'danger') iconType = 'error';

            Toast.fire({
                icon: iconType,
                title: '";
                // line 486
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "js"), "html", null, true);
                yield "'
            });
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 489
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 490
        yield "
    // 2. Système de Recherche (Filtrage du menu latéral en direct)
    const searchInput = document.getElementById('back-search-input');
    const menuItems = document.querySelectorAll('#navbar-sidebar .nav-item');
    
    if (searchInput) {
        searchInput.addEventListener('keyup', function(e) {
            e.preventDefault();
            const filter = searchInput.value.toLowerCase().trim();
            
            menuItems.forEach(function(item) {
                // Ignore les titres de section (qui on un style différent, souvent contenant 'ms-3')
                if(item.textContent.trim() === 'Principal' || item.textContent.trim() === 'Outils') {
                    return; // ne pas cacher systématiquement les entêtes, bien qu'on puisse les gérer après
                }
                const linkLabel = item.textContent.toLowerCase();
                if(linkLabel.includes(filter)) {
                    item.style.setProperty(\"display\", \"block\", \"important\"); // Afficher
                } else {
                    item.style.setProperty(\"display\", \"none\", \"important\"); // Cacher
                }
            });
        });
    }
});
</script>

</body>

<!-- Mirrored from eduport.webestica.com/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 13:15:39 GMT -->
</html>





";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 127
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

    // line 435
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

    // line 460
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
        return array (  704 => 460,  688 => 435,  672 => 127,  628 => 490,  622 => 489,  613 => 486,  605 => 481,  591 => 469,  586 => 468,  582 => 467,  574 => 461,  572 => 460,  567 => 458,  560 => 454,  556 => 453,  551 => 451,  545 => 448,  531 => 436,  529 => 435,  496 => 405,  483 => 395,  428 => 343,  410 => 328,  391 => 312,  373 => 297,  251 => 178,  247 => 177,  196 => 128,  194 => 127,  153 => 89,  147 => 86,  143 => 85,  139 => 84,  135 => 83,  124 => 75,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from eduport.webestica.com/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 13:15:29 GMT -->
<head>
\t<title>Boussole - Dashboard Management</title>

\t<!-- Meta Tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<meta name=\"author\" content=\"Webestica.com\">
\t<meta name=\"description\" content=\"Boussole - Gestion Opérationnelle et Tableau de bord\">

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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/images/favicon.ico') }}\">

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


<style>
    /* ===== Sidebar scrollable ===== */
    @media (min-width: 1200px) {
        /* The sidebar nav is fixed, 100vh tall */
        .navbar.sidebar.navbar-expand-xl {
            height: 100vh;
            overflow: hidden;
        }
        /* The offcanvas becomes relative at xl — make it fill remaining height and scroll */
        .navbar.sidebar.navbar-expand-xl .offcanvas {
            flex: 1;
            min-height: 0;
            overflow: hidden;
        }
        .navbar.sidebar.navbar-expand-xl .offcanvas-body.sidebar-content {
            overflow-y: auto !important;
            overflow-x: hidden !important;
            max-height: calc(100vh - 80px); /* 80px = logo header height */
            /* Thin scrollbar */
            scrollbar-width: thin;
            scrollbar-color: rgba(0, 229, 255, 0.3) transparent;
        }
        .navbar.sidebar.navbar-expand-xl .offcanvas-body.sidebar-content::-webkit-scrollbar {
            width: 4px;
        }
        .navbar.sidebar.navbar-expand-xl .offcanvas-body.sidebar-content::-webkit-scrollbar-track {
            background: transparent;
        }
        .navbar.sidebar.navbar-expand-xl .offcanvas-body.sidebar-content::-webkit-scrollbar-thumb {
            background-color: rgba(0, 229, 255, 0.4);
            border-radius: 4px;
        }
    }
</style>

{% block stylesheets %}{% endblock %}
</head>

<body>


<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- Sidebar START -->
<nav class=\"navbar sidebar navbar-expand-xl navbar-dark bg-dark\">

\t<!-- Navbar brand for xl START -->
<div class=\"d-flex align-items-center mt-2 px-3 pb-2 pt-2 border-bottom border-secondary border-opacity-25\" style=\"background-color: #1a1b24;\">
<a class=\"navbar-brand d-flex align-items-center\" href=\"#\">
<div class=\"header-logo-icon rounded me-3 d-flex align-items-center justify-content-center\" style=\"width: 45px; height: 45px; border: 2px solid #00e5ff !important; box-shadow: 0 0 12px rgba(0, 229, 255, 0.4); background-color: transparent;\">
                <i class=\"bi bi-display text-white fs-4\"></i>
            </div>
            <div>
                <h4 class=\"text-white mb-0 fw-bold\" style=\"letter-spacing: 0.5px;\">Boussole</h4>
                <small class=\"mb-0 fw-bold\" style=\"color: #00e5ff; font-size: 0.65rem; letter-spacing: 1.5px;\">MANAGEMENT</small>
            </div>
</a>
</div>
<!-- Navbar brand for xl END -->

\t<div class=\"offcanvas offcanvas-start flex-row custom-scrollbar h-100\" data-bs-backdrop=\"true\" tabindex=\"-1\" id=\"offcanvasSidebar\">
\t\t<div class=\"offcanvas-body sidebar-content d-flex flex-column bg-dark\" style=\"overflow-y: auto; overflow-x: hidden;\">

\t\t\t<!-- Sidebar menu START -->
\t\t\t<ul class=\"navbar-nav flex-column mt-3\" id=\"navbar-sidebar\" style=\"flex: 1; overflow-y: auto; overflow-x: hidden;\">

\t\t\t\t<!-- Title -->
\t\t\t\t<li class=\"nav-item ms-3 my-2\" style=\"font-size: 0.75rem; letter-spacing: 1px; color: #6c757d; font-weight: bold; text-transform: uppercase;\">Principal</li>

\t\t\t\t<!-- Menu item -->
\t\t\t\t<li class=\"nav-item mb-1\">
                    <a href=\"#\" class=\"nav-link active d-flex align-items-center py-2 px-3\" style=\"background-color: rgba(0, 229, 255, 0.08); color: #00e5ff; border-radius: 8px; margin-left: 10px; margin-right: 10px; border-left: 3px solid #00e5ff;\">
                        <i class=\"bi bi-grid fa-fw me-3\"></i>Vue d'ensemble
                    </a>
                </li>
\t\t\t\t
                <li class=\"nav-item mt-1\"><a class=\"nav-link text-body py-2 px-4\" href=\"#\"><i class=\"bi bi-people fa-fw me-3 fs-6\"></i>Utilisateurs</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-body py-2 px-4\" href=\"#\"><i class=\"bi bi-building fa-fw me-3 fs-6\"></i>Entreprises</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-body py-2 px-4\" href=\"#\"><i class=\"bi bi-bag fa-fw me-3 fs-6\"></i>Gestion catalogue</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-body py-2 px-4\" href=\"#\"><i class=\"bi bi-download fa-fw me-3 fs-6\"></i>Commandes reçues</a></li>

\t\t\t\t<!-- Title -->
\t\t\t\t<li class=\"nav-item ms-3 mt-4 mb-2\" style=\"font-size: 0.75rem; letter-spacing: 1px; color: #6c757d; font-weight: bold; text-transform: uppercase;\">Outils</li>

                <li class=\"nav-item\"><a class=\"nav-link text-body py-2 px-4\" href=\"{{ path('app_afficher_back_charge') }}\"><i class=\"bi bi-cash fa-fw me-3 fs-6\"></i>Charges</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-body py-2 px-4\" href=\"{{ path('app_afficher_back_fournisseur') }}\"><i class=\"bi bi-truck fa-fw me-3 fs-6\"></i>Fournisseurs</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-body py-2 px-4\" href=\"#\"><i class=\"bi bi-megaphone fa-fw me-3 fs-6\"></i>Réclamations</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-body py-2 px-4\" href=\"#\"><i class=\"bi bi-robot fa-fw me-3 fs-6\"></i>Alertes IA</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-body py-2 px-4\" href=\"#\"><i class=\"bi bi-globe fa-fw me-3 fs-6\"></i>Carte franchises</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-body py-2 px-4\" href=\"#\"><i class=\"bi bi-bar-chart-line fa-fw me-3 fs-6\"></i>Bilans</a></li>
                <li class=\"nav-item\"><a class=\"nav-link text-body py-2 px-4\" href=\"#\"><i class=\"bi bi-piggy-bank fa-fw me-3 fs-6\"></i>Budgets</a></li>

\t\t\t</ul>
\t\t\t<!-- Sidebar menu end -->

\t\t\t<!-- Sidebar footer START -->
\t\t\t<div class=\"px-3 mt-auto pt-3 pb-4\">
                <!-- User profile box -->
\t\t\t\t<div class=\"d-flex align-items-center p-3 mb-3 rounded shadow\" style=\"background-color: #2b2b36;\">
                    <div class=\"avatar avatar-sm me-3 d-flex align-items-center justify-content-center fw-bold\" style=\"background-color: #00e5ff; color: #1a1a24; border-radius: 8px;\">
                        AD
                    </div>
                    <div>
                        <h6 class=\"mb-0 text-white fw-bold\" style=\"font-size: 0.85rem;\">admin@boussole.tn</h6>
                        <small class=\"mb-0\" style=\"color: #00ff88; font-size: 0.75rem;\"><i class=\"bi bi-circle-fill me-1\" style=\"font-size: 0.5rem;\"></i>En ligne</small>
                    </div>
\t\t\t\t</div>
                
                <!-- Logout -->
                <a class=\"h6 mb-0 text-danger d-flex align-items-center ms-1 d-inline-block\" href=\"#\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Déconnexion\" style=\"transition: all 0.3s;\">
                    <i class=\"bi bi-power me-2 text-danger\"></i> Déconnexion
                </a>
\t\t\t</div>
\t\t\t<!-- Sidebar footer END -->

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

\t\t\t\t<!-- Logo START -->
\t\t\t\t<div class=\"d-flex align-items-center d-xl-none\">
\t\t\t\t\t<a class=\"navbar-brand d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t<div class=\"header-logo-icon rounded me-2 d-flex align-items-center justify-content-center\" style=\"width: 30px; height: 30px; border: 2px solid #00e5ff !important; box-shadow: 0 0 10px rgba(0, 229, 255, 0.5); background-color: transparent;\">
                            <i class=\"bi bi-display text-white\" style=\"font-size: 0.8rem;\"></i>
                        </div>
                        <h5 class=\"text-white mb-0 fw-bold ms-2\">Boussole</h5>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<!-- Logo END -->

\t\t\t\t<!-- Toggler for sidebar START -->
\t\t\t\t<div class=\"navbar-expand-xl sidebar-offcanvas-menu\">
\t\t\t\t\t<button class=\"navbar-toggler me-auto\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-controls=\"offcanvasSidebar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" data-bs-auto-close=\"outside\">
\t\t\t\t\t\t<i class=\"bi bi-text-right fa-fw h2 lh-0 mb-0 rtl-flip\" data-bs-target=\"#offcanvasMenu\"> </i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<!-- Toggler for sidebar END -->

\t\t\t\t<!-- Top bar left -->
\t\t\t\t<div class=\"navbar-expand-lg ms-auto ms-xl-0\">

\t\t\t\t\t<!-- Toggler for menubar START -->
\t\t\t\t\t<button class=\"navbar-toggler ms-auto\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTopContent\" aria-controls=\"navbarTopContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-animation\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</button>
\t\t\t\t\t<!-- Toggler for menubar END -->

\t\t\t\t\t<!-- Topbar menu START -->
\t\t\t\t\t<div class=\"collapse navbar-collapse w-100\" id=\"navbarTopContent\">
\t\t\t\t\t\t<!-- Top search START -->
\t\t\t\t\t\t<div class=\"nav my-3 my-xl-0 flex-nowrap align-items-center\">
\t\t\t\t\t\t\t<div class=\"nav-item w-100\">
\t\t\t\t\t\t\t\t<form class=\"position-relative\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control pe-5 bg-secondary bg-opacity-10 border-0\" id=\"back-search-input\" type=\"search\" placeholder=\"Rechercher...\" aria-label=\"Search\">
\t\t\t\t\t\t\t\t\t<button class=\"bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y\" type=\"submit\" onclick=\"event.preventDefault();\"><i class=\"fas fa-search fs-6 text-primary\"></i></button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Top search END -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Topbar menu END -->
\t\t\t\t</div>
\t\t\t\t<!-- Top bar left END -->

\t\t\t\t<!-- Top bar right START -->
\t\t\t\t<div class=\"ms-xl-auto\">
\t\t\t\t\t<ul class=\"navbar-nav flex-row align-items-center\">

\t\t\t\t\t\t<!-- Notification dropdown START -->
\t\t\t\t\t\t<li class=\"nav-item ms-2 ms-md-3 dropdown\">
\t\t\t\t\t\t\t<!-- Notification button -->
\t\t\t\t\t\t\t<a class=\"btn btn-light btn-round mb-0\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" data-bs-auto-close=\"outside\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-bell fa-fw\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Notification dote -->
\t\t\t\t\t\t\t<span class=\"notif-badge animation-blink\"></span>

\t\t\t\t\t\t\t<!-- Notification dropdown menu START -->
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0\">
\t\t\t\t\t\t\t\t<div class=\"card bg-transparent\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header bg-transparent border-bottom py-4 d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0\">Notifications <span class=\"badge bg-danger bg-opacity-10 text-danger ms-2\">2 new</span></h6>
\t\t\t\t\t\t\t\t\t\t<a class=\"small\" href=\"#\">Clear all</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-group list-unstyled list-group-flush\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Notif item -->
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item-action border-0 border-bottom d-flex p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"{{ asset('assets/images/avatar/08.jpg') }}\" alt=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-body small m-0\">Congratulate <b>Joan Wallace</b> for graduating from <b>Microverse university</b></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<u class=\"small\">Say congrats</u>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<!-- Notif item -->
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item-action border-0 border-bottom d-flex p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"{{ asset('assets/images/avatar/02.jpg') }}\" alt=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Larry Lawson Added a new course</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-body m-0\">What's new! Find out about new features</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<u class=\"small\">View detail</u>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<!-- Notif item -->
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item-action border-0 border-bottom d-flex p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"{{ asset('assets/images/avatar/05.jpg') }}\" alt=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">New request to apply for Instructor</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<u class=\"small\">View detail</u>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<!-- Notif item -->
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item-action border-0 border-bottom d-flex p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"{{ asset('assets/images/avatar/03.jpg') }}\" alt=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Update v2.3 completed successfully</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-body m-0\">What's new! Find out about new features</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-body\">5 min ago</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t<div class=\"card-footer bg-transparent border-0 py-3 text-center position-relative\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"stretched-link\">See all incoming activity</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Notification dropdown menu END -->
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- Notification dropdown END -->
\t\t\t\t\t\t<!-- Dark mode options START -->
\t\t\t\t\t\t<li class=\"nav-item ms-2 ms-md-3\">
\t\t\t\t\t\t\t<div class=\"bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded\">
\t\t\t\t\t\t\t\t<!-- <span>Mode:</span> -->
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm mb-0\" data-bs-theme-value=\"light\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-sun fa-fw mode-switch\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z\"/>
\t\t\t\t\t\t\t\t\t\t<use href=\"#\"></use>
\t\t\t\t\t\t\t\t\t</svg> Light
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm mb-0\" data-bs-theme-value=\"dark\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-moon-stars fa-fw mode-switch\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z\"/>
\t\t\t\t\t\t\t\t\t\t<use href=\"#\"></use>
\t\t\t\t\t\t\t\t\t</svg> Dark
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm mb-0 active\" data-bs-theme-value=\"auto\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-half fa-fw mode-switch\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z\"/>
\t\t\t\t\t\t\t\t\t\t<use href=\"#\"></use>
\t\t\t\t\t\t\t\t\t</svg> Auto
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- Dark mode options END-->

\t\t\t\t\t\t<!-- Profile dropdown START -->
\t\t\t\t\t\t<li class=\"nav-item ms-2 ms-md-3 dropdown\">
\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t<a class=\"avatar avatar-sm p-0\" href=\"#\" id=\"profileDropdown\" role=\"button\" data-bs-auto-close=\"outside\" data-bs-display=\"static\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"{{ asset('assets/images/avatar/01.jpg') }}\" alt=\"avatar\">
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<!-- Profile dropdown START -->
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3\" aria-labelledby=\"profileDropdown\">
\t\t\t\t\t\t\t\t<!-- Profile info -->
\t\t\t\t\t\t\t\t<li class=\"px-3\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t\t<div class=\"avatar me-3 mb-3\">
\t\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle shadow\" src=\"{{ asset('assets/images/avatar/01.jpg') }}\" alt=\"avatar\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"h6 mt-2 mt-sm-0\" href=\"#\">Lori Ferguson</a>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"small m-0\">example@gmail.com</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
                <li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-person fa-fw me-2\"></i>Edit Profile</a></li>
\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-gear fa-fw me-2\"></i>Account Settings</a></li>
\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-info-circle fa-fw me-2\"></i>Help</a></li>
\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item bg-danger-soft-hover\" href=\"#\"><i class=\"bi bi-power fa-fw me-2\"></i>Sign Out</a></li>
\t\t\t\t\t\t\t\t<li> <hr class=\"dropdown-divider\"></li>

\t\t\t\t\t\t\t\t<!-- Dark mode options START -->
\t\t\t\t\t\t\t<!-- Profile dropdown END -->
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- Profile dropdown END -->
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- Top bar right END -->
\t\t\t</div>
\t\t</div>
\t</nav>
\t<!-- Top bar END -->

\t<!-- Page main content START -->
\t\t\t<div class=\"page-content-wrapper border\">
\t\t\t\t{% block body %}{% endblock %}
\t\t\t</div>
\t\t<!-- Page main content END -->
</div>
<!-- Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class=\"back-top\"><i class=\"bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle\"></i></div>

<!-- Bootstrap JS -->
<script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}\"></script>

<!-- Vendors -->
<script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}\"></script>

<script src=\"{{ asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/apexcharts/js/apexcharts.min.js') }}\"></script>


<!-- Template Functions -->
<script src=\"{{ asset('assets/js/functions.js') }}\"></script>

{% block javascripts %}{% endblock %}

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

    // 2. Système de Recherche (Filtrage du menu latéral en direct)
    const searchInput = document.getElementById('back-search-input');
    const menuItems = document.querySelectorAll('#navbar-sidebar .nav-item');
    
    if (searchInput) {
        searchInput.addEventListener('keyup', function(e) {
            e.preventDefault();
            const filter = searchInput.value.toLowerCase().trim();
            
            menuItems.forEach(function(item) {
                // Ignore les titres de section (qui on un style différent, souvent contenant 'ms-3')
                if(item.textContent.trim() === 'Principal' || item.textContent.trim() === 'Outils') {
                    return; // ne pas cacher systématiquement les entêtes, bien qu'on puisse les gérer après
                }
                const linkLabel = item.textContent.toLowerCase();
                if(linkLabel.includes(filter)) {
                    item.style.setProperty(\"display\", \"block\", \"important\"); // Afficher
                } else {
                    item.style.setProperty(\"display\", \"none\", \"important\"); // Cacher
                }
            });
        });
    }
});
</script>

</body>

<!-- Mirrored from eduport.webestica.com/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 13:15:39 GMT -->
</html>





", "back_base.html.twig", "C:\\Users\\Wael\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\back_base.html.twig");
    }
}
