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
class __TwigTemplate_a24b5346576c7d5c70c245455875d473 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from eduport.webestica.com/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 13:15:29 GMT -->
<head>
\t<title>Eduport- LMS, Education and Course Theme</title>

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

</head>

<body>


<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- Sidebar START -->
<nav class=\"navbar sidebar navbar-expand-xl navbar-dark bg-dark\">

\t<!-- Navbar brand for xl START -->
\t<div class=\"d-flex align-items-center\">
\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t<img class=\"navbar-brand-item\" src=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.svg"), "html", null, true);
        yield "\" alt=\"\">
\t\t</a>
\t</div>
\t<!-- Navbar brand for xl END -->

\t<div class=\"offcanvas offcanvas-start flex-row custom-scrollbar h-100\" data-bs-backdrop=\"true\" tabindex=\"-1\" id=\"offcanvasSidebar\">
\t\t<div class=\"offcanvas-body sidebar-content d-flex flex-column bg-dark\">

\t\t\t<!-- Sidebar menu START -->
\t\t\t<ul class=\"navbar-nav flex-column\" id=\"navbar-sidebar\">

\t\t\t\t<!-- Menu item 1 -->
\t\t\t\t<li class=\"nav-item\"><a href=\"admin-dashboard.html\" class=\"nav-link active\"><i class=\"bi bi-house fa-fw me-2\"></i>Dashboard</a></li>

\t\t\t\t<!-- Title -->
\t\t\t\t<li class=\"nav-item ms-2 my-2\">Pages</li>

\t\t\t\t<!-- menu item 2 -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#collapsepage\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapsepage\">
\t\t\t\t\t\t<i class=\"bi bi-basket fa-fw me-2\"></i>Courses
\t\t\t\t\t</a>
\t\t\t\t\t<!-- Submenu -->
\t\t\t\t\t<ul class=\"nav collapse flex-column\" id=\"collapsepage\" data-bs-parent=\"#navbar-sidebar\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"admin-course-list.html\">All Courses</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"admin-course-category.html\">Course Category</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"admin-course-detail.html\">Course Detail</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<!-- Menu item 3 -->
\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"admin-student-list.html\"><i class=\"fas fa-user-graduate fa-fw me-2\"></i>Students</a></li>

\t\t\t\t<!-- Menu item 4 -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#collapseinstructors\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseinstructors\">
\t\t\t\t\t\t<i class=\"fas fa-user-tie fa-fw me-2\"></i>Instructors
\t\t\t\t\t</a>
\t\t\t\t\t<!-- Submenu -->
\t\t\t\t\t<ul class=\"nav collapse flex-column\" id=\"collapseinstructors\" data-bs-parent=\"#navbar-sidebar\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"admin-instructor-list.html\">Instructors</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"admin-instructor-detail.html\">Instructor Detail</a></li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"admin-instructor-request.html\">Instructor requests
\t\t\t\t\t\t\t\t<span class=\"badge text-bg-success rounded-circle ms-2\">2</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<!-- Menu item 5 -->
\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"admin-review.html\"><i class=\"far fa-comment-dots fa-fw me-2\"></i>Reviews</a></li>

\t\t\t\t<!-- Menu item 6 -->
\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"admin-earning.html\"><i class=\"far fa-chart-bar fa-fw me-2\"></i>Earnings</a></li>

\t\t\t\t<!-- Menu item 7 -->
\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"admin-setting.html\"><i class=\"fas fa-user-cog fa-fw me-2\"></i>Admin Settings</a></li>

\t\t\t\t<!-- Menu item 8 -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#collapseauthentication\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseauthentication\">
\t\t\t\t\t\t<i class=\"bi bi-lock fa-fw me-2\"></i>Authentication
\t\t\t\t\t</a>
\t\t\t\t\t<!-- Submenu -->
\t\t\t\t\t<ul class=\"nav collapse flex-column\" id=\"collapseauthentication\" data-bs-parent=\"#navbar-sidebar\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"sign-up.html\">Sign Up</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"sign-in.html\">Sign In</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"forgot-password.html\">Forgot Password</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"admin-error-404.html\">Error 404</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<!-- Title -->
\t\t\t\t<li class=\"nav-item ms-2 my-2\">Documentation</li>

\t\t\t\t<!-- Menu item 9 -->
\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"docs/index.html\"><i class=\"far fa-clipboard fa-fw me-2\"></i>Documentation</a></li>

\t\t\t\t<!-- Menu item 10 -->
\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"docs/changelog.html\"><i class=\"fas fa-sitemap fa-fw me-2\"></i>Changelog</a></li>
\t\t\t</ul>
\t\t\t<!-- Sidebar menu end -->

\t\t\t<!-- Sidebar footer START -->
\t\t\t<div class=\"px-3 mt-auto pt-3\">
\t\t\t\t<div class=\"d-flex align-items-center justify-content-between text-primary-hover\">
\t\t\t\t\t\t<a class=\"h5 mb-0 text-body\" href=\"admin-setting.html\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Settings\">
\t\t\t\t\t\t\t<i class=\"bi bi-gear-fill\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"h5 mb-0 text-body\" href=\"index.html\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Home\">
\t\t\t\t\t\t\t<i class=\"bi bi-globe\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"h5 mb-0 text-body\" href=\"sign-in.html\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Sign out\">
\t\t\t\t\t\t\t<i class=\"bi bi-power\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t</div>
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
\t\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t\t\t\t<img class=\"light-mode-item navbar-brand-item h-30px\" src=\"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-mobile.svg"), "html", null, true);
        yield "\" alt=\"\">
\t\t\t\t\t\t<img class=\"dark-mode-item navbar-brand-item h-30px\" src=\"";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-mobile-light.svg"), "html", null, true);
        yield "\" alt=\"\">
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
\t\t\t\t\t\t\t\t\t<input class=\"form-control pe-5 bg-secondary bg-opacity-10 border-0\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t\t\t<button class=\"bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y\" type=\"submit\"><i class=\"fas fa-search fs-6 text-primary\"></i></button>
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
        // line 292
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
        // line 307
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
        // line 323
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
        // line 338
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

\t\t\t\t\t\t<!-- Profile dropdown START -->
\t\t\t\t\t\t<li class=\"nav-item ms-2 ms-md-3 dropdown\">
\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t<a class=\"avatar avatar-sm p-0\" href=\"#\" id=\"profileDropdown\" role=\"button\" data-bs-auto-close=\"outside\" data-bs-display=\"static\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"";
        // line 364
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
        // line 374
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
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2\">
\t\t\t\t\t\t\t\t\t\t<!-- <span>Mode:</span> -->
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm mb-0\" data-bs-theme-value=\"light\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-sun fa-fw mode-switch\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"#\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg> Light
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm mb-0\" data-bs-theme-value=\"dark\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-moon-stars fa-fw mode-switch\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"#\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg> Dark
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm mb-0 active\" data-bs-theme-value=\"auto\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-half fa-fw mode-switch\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"#\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg> Auto
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<!-- Dark mode options END-->
\t\t\t\t\t\t\t</ul>
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
\t<div class=\"page-content-wrapper border\">
\t\t";
        // line 430
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 867
        yield "
\t</div>
\t<!-- Page main content END -->
</div>
<!-- Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class=\"back-top\"><i class=\"bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle\"></i></div>

<!-- Bootstrap JS -->
<script src=\"";
        // line 880
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

<!-- Vendors -->
<script src=\"";
        // line 883
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 885
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/purecounterjs/dist/purecounter_vanilla.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 886
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/js/apexcharts.min.js"), "html", null, true);
        yield "\"></script>


<!-- Template Functions -->
<script src=\"";
        // line 890
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/functions.js"), "html", null, true);
        yield "\"></script>



</body>

<!-- Mirrored from eduport.webestica.com/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 13:15:39 GMT -->
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 430
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 431
        yield "
\t\t<!-- Title -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 mb-3\">
\t\t\t\t<h1 class=\"h3 mb-2 mb-sm-0\">Dashboard</h1>
\t\t\t</div>
\t\t</div>

\t\t<!-- Counter boxes START -->
\t\t<div class=\"row g-4 mb-4\">
\t\t\t<!-- Counter item -->
\t\t\t<div class=\"col-md-6 col-xxl-3\">
\t\t\t\t<div class=\"card card-body bg-warning bg-opacity-15 p-4 h-100\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<!-- Digit -->
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h2 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"1958\" data-purecounter-delay=\"200\">0</h2>
\t\t\t\t\t\t\t<span class=\"mb-0 h6 fw-light\">Completed Courses</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t<div class=\"icon-lg rounded-circle bg-warning text-white mb-0\"><i class=\"fas fa-tv fa-fw\"></i></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Counter item -->
\t\t\t<div class=\"col-md-6 col-xxl-3\">
\t\t\t\t<div class=\"card card-body bg-purple bg-opacity-10 p-4 h-100\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<!-- Digit -->
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h2 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"1600\"\tdata-purecounter-delay=\"200\">0</h2>
\t\t\t\t\t\t\t<span class=\"mb-0 h6 fw-light\">Enrolled Courses</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t<div class=\"icon-lg rounded-circle bg-purple text-white mb-0\"><i class=\"fas fa-user-tie fa-fw\"></i></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Counter item -->
\t\t\t<div class=\"col-md-6 col-xxl-3\">
\t\t\t\t<div class=\"card card-body bg-primary bg-opacity-10 p-4 h-100\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<!-- Digit -->
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h2 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"1235\"\tdata-purecounter-delay=\"200\">0</h2>
\t\t\t\t\t\t\t<span class=\"mb-0 h6 fw-light\">Course In Progress</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t<div class=\"icon-lg rounded-circle bg-primary text-white mb-0\"><i class=\"fas fa-user-graduate fa-fw\"></i></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Counter item -->
\t\t\t<div class=\"col-md-6 col-xxl-3\">
\t\t\t\t<div class=\"card card-body bg-success bg-opacity-10 p-4 h-100\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<!-- Digit -->
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<h2 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"845\"\tdata-purecounter-delay=\"200\">0</h2>
\t\t\t\t\t\t\t\t<span class=\"mb-0 h2 ms-1\">hrs</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"mb-0 h6 fw-light\">Total Watch Time</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t<div class=\"icon-lg rounded-circle bg-success text-white mb-0\"><i class=\"bi bi-stopwatch-fill fa-fw\"></i></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Counter boxes END -->

\t\t<!-- Chart and Ticket START -->
\t\t<div class=\"row g-4 mb-4\">

\t\t\t<!-- Chart START -->
\t\t\t<div class=\"col-xxl-8\">
\t\t\t\t<div class=\"card shadow h-100\">

\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t<div class=\"card-header p-4 border-bottom\">
\t\t\t\t\t\t<h5 class=\"card-header-title\">Earnings</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<!-- Apex chart -->
\t\t\t\t\t\t<div id=\"ChartPayout\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Chart END -->

\t\t\t<!-- Ticket START -->
\t\t\t<div class=\"col-xxl-4\">
\t\t\t\t<div class=\"card shadow h-100\">
\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t<div class=\"card-header border-bottom d-flex justify-content-between align-items-center p-4\">
\t\t\t\t\t\t<h5 class=\"card-header-title\">Support Requests</h5>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link p-0 mb-0\">View all</a>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t<div class=\"card-body p-4\">

\t\t\t\t\t<!-- Ticket item START -->
\t\t\t\t\t<div class=\"d-flex justify-content-between position-relative\">
\t\t\t\t\t\t<div class=\"d-sm-flex\">
\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t<div class=\"avatar avatar-md flex-shrink-0\">
\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"";
        // line 544
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/09.jpg"), "html", null, true);
        yield "\" alt=\"avatar\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">Lori Stevens</a></h6>
\t\t\t\t\t\t\t\t<p class=\"mb-0\">New ticket #759 from Lori Stevens for General Enquiry</p>
\t\t\t\t\t\t\t\t<span class=\"small\">8 hour ago</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Ticket item END -->

\t\t\t\t\t\t<hr><!-- Divider -->

\t\t\t\t\t\t<!-- Ticket item START -->
\t\t\t\t\t\t<div class=\"d-flex justify-content-between position-relative\">
\t\t\t\t\t\t\t<div class=\"d-sm-flex\">
\t\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t\t<div class=\"avatar avatar-md flex-shrink-0\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-img rounded-circle bg-purple bg-opacity-10\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-purple position-absolute top-50 start-50 translate-middle fw-bold\">DB</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">Dennis Barrett</a></h6>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Comment from Billy Vasquez on ticket #659</p>
\t\t\t\t\t\t\t\t\t<span class=\"small\">8 hour ago</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Ticket item END -->

\t\t\t\t\t\t<hr><!-- Divider -->

\t\t\t\t\t\t<!-- Ticket item START -->
\t\t\t\t\t\t<div class=\"d-flex justify-content-between position-relative\">
\t\t\t\t\t\t\t<div class=\"d-sm-flex\">
\t\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t\t<div class=\"avatar avatar-md flex-shrink-0\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-img rounded-circle bg-orange bg-opacity-10\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-orange position-absolute top-50 start-50 translate-middle fw-bold\">WB</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">Dennis Barrett</a></h6>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0\"><b>Webestica</b> assign you a new ticket for <b>Eduport theme</b></p>
\t\t\t\t\t\t\t\t\t<span class=\"small\">5 hour ago</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Ticket item END -->

\t\t\t\t\t\t<hr><!-- Divider -->

\t\t\t\t\t<!-- Ticket item START -->
\t\t\t\t\t<div class=\"d-flex justify-content-between position-relative\">
\t\t\t\t\t\t<div class=\"d-sm-flex\">
\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t<div class=\"avatar avatar-md flex-shrink-0\">
\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"";
        // line 605
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/04.jpg"), "html", null, true);
        yield "\" alt=\"avatar\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">Dennis Barrett</a></h6>
\t\t\t\t\t\t\t\t<p class=\"mb-0\">Thanks for contact us with your issues.</p>
\t\t\t\t\t\t\t\t\t<span class=\"small\">9 hour ago</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Ticket item END -->

\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card body END -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Ticket END -->
\t\t</div>
\t\t<!-- Chart and Ticket END -->

\t\t<!-- Top listed Cards START -->
\t\t<div class=\"row g-4\">

\t\t\t<!-- Top instructors START -->
\t\t\t<div class=\"col-lg-6 col-xxl-4\">
\t\t\t\t<div class=\"card shadow h-100\">

\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t<div class=\"card-header border-bottom d-flex justify-content-between align-items-center p-4\">
\t\t\t\t\t\t<h5 class=\"card-header-title\">Top Instructors</h5>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link p-0 mb-0\">View all</a>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t<div class=\"card-body p-4\">

\t\t\t\t\t\t<!-- Instructor item START -->
\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t<!-- Avatar and info -->
\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center mb-1 mb-sm-0\">
\t\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t\t<div class=\"avatar avatar-md flex-shrink-0\">
\t\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"";
        // line 647
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/03.jpg"), "html", null, true);
        yield "\" alt=\"avatar\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Dennis Barrett</h6>
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline mb-0 small\">
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item fw-light me-2 mb-1 mb-sm-0\"><i class=\"fas fa-book text-purple me-1\"></i>18 Courses</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item fw-light me-2 mb-1 mb-sm-0\"><i class=\"fas fa-star text-warning me-1\"></i>4.5/5.0</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-light mb-0\">View</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Instructor item END -->

\t\t\t\t\t\t<hr><!-- Divider -->

\t\t\t\t\t\t<!-- Instructor item START -->
\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t<!-- Avatar and info -->
\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center mb-1 mb-sm-0\">
\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t<div class=\"avatar avatar-md flex-shrink-0\">
\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"";
        // line 671
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/01.jpg"), "html", null, true);
        yield "\" alt=\"avatar\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Jacqueline Miller<i class=\"bi bi-patch-check-fill text-info small ms-1\"></i></h6>
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline mb-0 small\">
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item fw-light me-2 mb-1 mb-sm-0\"><i class=\"fas fa-book text-purple me-1\"></i>21 Courses</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item fw-light me-2 mb-1 mb-sm-0\"><i class=\"fas fa-star text-warning me-1\"></i>4.8/5.0</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-light mb-0\">View</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Instructor item END -->

\t\t\t\t\t\t<hr><!-- Divider -->

\t\t\t\t\t\t<!-- Instructor item START -->
\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t<!-- Avatar and info -->
\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center mb-1 mb-sm-0\">
\t\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t\t<div class=\"avatar avatar-md flex-shrink-0\">
\t\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"";
        // line 695
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/04.jpg"), "html", null, true);
        yield "\" alt=\"avatar\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Billy Vasquez</h6>
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline mb-0 small\">
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item fw-light me-2 mb-1 mb-sm-0\"><i class=\"fas fa-book text-purple me-1\"></i>15 Courses</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item fw-light me-2 mb-1 mb-sm-0\"><i class=\"fas fa-star text-warning me-1\"></i>4.5/5.0</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-light mb-0\">View</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Instructor item END -->

\t\t\t\t\t\t<hr><!-- Divider -->

\t\t\t\t\t\t<!-- Instructor item START -->
\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t<!-- Avatar and info -->
\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center mb-1 mb-sm-0\">
\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t<div class=\"avatar avatar-md flex-shrink-0\">
\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"";
        // line 719
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/05.jpg"), "html", null, true);
        yield "\" alt=\"avatar\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Amanda Reed<i class=\"bi bi-patch-check-fill text-info small ms-1\"></i></h6>
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline mb-0 small\">
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item fw-light me-2 mb-1 mb-sm-0\"><i class=\"fas fa-book text-purple me-1\"></i>29 Courses</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item fw-light me-2 mb-1 mb-sm-0\"><i class=\"fas fa-star text-warning me-1\"></i>4.5/5.0</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-light mb-0\">View</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Instructor item END -->

\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card body END -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Top instructors END -->

\t\t\t<!-- Notice Board START -->
\t\t\t<div class=\"col-lg-6 col-xxl-4\">
\t\t\t\t<div class=\"card shadow h-100\">
\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t<div class=\"card-header border-bottom p-4\">
\t\t\t\t\t\t<h5 class=\"card-header-title\">Notice board</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t<div class=\"custom-scrollbar h-300px\">

\t\t\t\t\t\t\t<!-- Notice Board item START -->
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between position-relative\">
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-lg bg-purple bg-opacity-10 text-purple rounded-2 flex-shrink-0\"><i class=\"fas fa-user-tie fs-5\"></i></div>
\t\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-3 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">Join New Instructor</a></h6>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Amongst moments do in arrived Fat weddings believed prospect</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"small\">5 min ago</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Notice Board item END -->

\t\t\t\t\t\t\t<hr><!-- Divider -->

\t\t\t\t\t\t\t<!-- Notice Board item START -->
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between position-relative\">
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-lg bg-orange bg-opacity-10 text-orange rounded-2 flex-shrink-0\"><i class=\"fas fa-book-open fs-5\"></i></div>
\t\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-3 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">Update New Course</a></h6>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Arrived Fat weddings believed prospect</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"small\">4 hour ago</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Notice Board item END -->

\t\t\t\t\t\t\t<hr><!-- Divider -->

\t\t\t\t\t\t\t<!-- Notice Board item START -->
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between position-relative\">
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-lg bg-info bg-opacity-10 text-info rounded-2 flex-shrink-0\"><i class=\"fas fa-book fs-5\"></i></div>
\t\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-3 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">Update Syllabus</a></h6>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Arrived Fat weddings believed prospect</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"small\">2 days ago</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Notice Board item END -->

\t\t\t\t\t\t\t<hr><!-- Divider -->

\t\t\t\t\t\t\t<!-- Notice Board item START -->
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between position-relative\">
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-lg bg-danger bg-opacity-10 text-danger rounded-2 flex-shrink-0\"><i class=\"fas fa-globe fs-5\"></i></div>
\t\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-3 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">Update New Feature</a></h6>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Arrived Fat weddings believed prospect</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"small\">3 days ago</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Notice Board item END -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card body END -->

\t\t\t\t\t<!-- Card footer START -->
\t\t\t\t\t<div class=\"card-footer border-top\">
\t\t\t\t\t\t<div class=\"alert alert-success d-flex align-items-center mb-0 py-2\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<small class=\"mb-0\">45 more notices listed</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-success-soft mb-0\" href=\"#!\"> View all </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card footer START -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Notice Board END -->

\t\t\t<!-- Traffic sources START -->
\t\t\t<div class=\"col-lg-6 col-xxl-4\">
\t\t\t\t<div class=\"card shadow h-100\">

\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t<div class=\"card-header border-bottom d-flex justify-content-between align-items-center p-4\">
\t\t\t\t\t\t<h5 class=\"card-header-title\">Traffic Sources</h5>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link p-0 mb-0\">View all</a>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t<!-- Chart -->
\t\t\t\t\t\t<div class=\"col-sm-6 mx-auto\">
\t\t\t\t\t\t\t<div id=\"ChartTrafficViews\"></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t<ul class=\"list-group list-group-borderless mt-3\">
\t\t\t\t\t\t\t<li class=\"list-group-item\"><i class=\"text-primary fas fa-circle me-2\"></i>Create a Design System in Figma</li>
\t\t\t\t\t\t\t<li class=\"list-group-item\"><i class=\"text-success fas fa-circle me-2\"></i>The Complete Digital Marketing Course - 12 Courses in 1</li>
\t\t\t\t\t\t\t<li class=\"list-group-item\"><i class=\"text-warning fas fa-circle me-2\"></i>Google Ads Training: Become a PPC Expert</li>
\t\t\t\t\t\t\t<li class=\"list-group-item\"><i class=\"text-danger fas fa-circle me-2\"></i>Microsoft Excel - Excel from Beginner to Advanced</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Card body END -->
\t\t\t</div>
\t\t\t<!-- Traffic sources END -->

\t\t</div>
\t\t<!-- Top listed Cards END -->
\t\t";
        
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
        return array (  893 => 719,  866 => 695,  839 => 671,  812 => 647,  767 => 605,  703 => 544,  588 => 431,  578 => 430,  561 => 890,  554 => 886,  550 => 885,  545 => 883,  539 => 880,  524 => 867,  522 => 430,  463 => 374,  450 => 364,  421 => 338,  403 => 323,  384 => 307,  366 => 292,  293 => 222,  289 => 221,  170 => 105,  151 => 89,  145 => 86,  141 => 85,  137 => 84,  133 => 83,  122 => 75,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from eduport.webestica.com/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 13:15:29 GMT -->
<head>
\t<title>Eduport- LMS, Education and Course Theme</title>

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

</head>

<body>


<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- Sidebar START -->
<nav class=\"navbar sidebar navbar-expand-xl navbar-dark bg-dark\">

\t<!-- Navbar brand for xl START -->
\t<div class=\"d-flex align-items-center\">
\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t<img class=\"navbar-brand-item\" src=\"{{ asset('assets/images/logo-light.svg') }}\" alt=\"\">
\t\t</a>
\t</div>
\t<!-- Navbar brand for xl END -->

\t<div class=\"offcanvas offcanvas-start flex-row custom-scrollbar h-100\" data-bs-backdrop=\"true\" tabindex=\"-1\" id=\"offcanvasSidebar\">
\t\t<div class=\"offcanvas-body sidebar-content d-flex flex-column bg-dark\">

\t\t\t<!-- Sidebar menu START -->
\t\t\t<ul class=\"navbar-nav flex-column\" id=\"navbar-sidebar\">

\t\t\t\t<!-- Menu item 1 -->
\t\t\t\t<li class=\"nav-item\"><a href=\"admin-dashboard.html\" class=\"nav-link active\"><i class=\"bi bi-house fa-fw me-2\"></i>Dashboard</a></li>

\t\t\t\t<!-- Title -->
\t\t\t\t<li class=\"nav-item ms-2 my-2\">Pages</li>

\t\t\t\t<!-- menu item 2 -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#collapsepage\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapsepage\">
\t\t\t\t\t\t<i class=\"bi bi-basket fa-fw me-2\"></i>Courses
\t\t\t\t\t</a>
\t\t\t\t\t<!-- Submenu -->
\t\t\t\t\t<ul class=\"nav collapse flex-column\" id=\"collapsepage\" data-bs-parent=\"#navbar-sidebar\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"admin-course-list.html\">All Courses</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"admin-course-category.html\">Course Category</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"admin-course-detail.html\">Course Detail</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<!-- Menu item 3 -->
\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"admin-student-list.html\"><i class=\"fas fa-user-graduate fa-fw me-2\"></i>Students</a></li>

\t\t\t\t<!-- Menu item 4 -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#collapseinstructors\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseinstructors\">
\t\t\t\t\t\t<i class=\"fas fa-user-tie fa-fw me-2\"></i>Instructors
\t\t\t\t\t</a>
\t\t\t\t\t<!-- Submenu -->
\t\t\t\t\t<ul class=\"nav collapse flex-column\" id=\"collapseinstructors\" data-bs-parent=\"#navbar-sidebar\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"admin-instructor-list.html\">Instructors</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"admin-instructor-detail.html\">Instructor Detail</a></li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"admin-instructor-request.html\">Instructor requests
\t\t\t\t\t\t\t\t<span class=\"badge text-bg-success rounded-circle ms-2\">2</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<!-- Menu item 5 -->
\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"admin-review.html\"><i class=\"far fa-comment-dots fa-fw me-2\"></i>Reviews</a></li>

\t\t\t\t<!-- Menu item 6 -->
\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"admin-earning.html\"><i class=\"far fa-chart-bar fa-fw me-2\"></i>Earnings</a></li>

\t\t\t\t<!-- Menu item 7 -->
\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"admin-setting.html\"><i class=\"fas fa-user-cog fa-fw me-2\"></i>Admin Settings</a></li>

\t\t\t\t<!-- Menu item 8 -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#collapseauthentication\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseauthentication\">
\t\t\t\t\t\t<i class=\"bi bi-lock fa-fw me-2\"></i>Authentication
\t\t\t\t\t</a>
\t\t\t\t\t<!-- Submenu -->
\t\t\t\t\t<ul class=\"nav collapse flex-column\" id=\"collapseauthentication\" data-bs-parent=\"#navbar-sidebar\">
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"sign-up.html\">Sign Up</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"sign-in.html\">Sign In</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"forgot-password.html\">Forgot Password</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"admin-error-404.html\">Error 404</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<!-- Title -->
\t\t\t\t<li class=\"nav-item ms-2 my-2\">Documentation</li>

\t\t\t\t<!-- Menu item 9 -->
\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"docs/index.html\"><i class=\"far fa-clipboard fa-fw me-2\"></i>Documentation</a></li>

\t\t\t\t<!-- Menu item 10 -->
\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"docs/changelog.html\"><i class=\"fas fa-sitemap fa-fw me-2\"></i>Changelog</a></li>
\t\t\t</ul>
\t\t\t<!-- Sidebar menu end -->

\t\t\t<!-- Sidebar footer START -->
\t\t\t<div class=\"px-3 mt-auto pt-3\">
\t\t\t\t<div class=\"d-flex align-items-center justify-content-between text-primary-hover\">
\t\t\t\t\t\t<a class=\"h5 mb-0 text-body\" href=\"admin-setting.html\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Settings\">
\t\t\t\t\t\t\t<i class=\"bi bi-gear-fill\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"h5 mb-0 text-body\" href=\"index.html\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Home\">
\t\t\t\t\t\t\t<i class=\"bi bi-globe\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"h5 mb-0 text-body\" href=\"sign-in.html\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Sign out\">
\t\t\t\t\t\t\t<i class=\"bi bi-power\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t</div>
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
\t\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t\t\t\t<img class=\"light-mode-item navbar-brand-item h-30px\" src=\"{{ asset('assets/images/logo-mobile.svg') }}\" alt=\"\">
\t\t\t\t\t\t<img class=\"dark-mode-item navbar-brand-item h-30px\" src=\"{{ asset('assets/images/logo-mobile-light.svg') }}\" alt=\"\">
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
\t\t\t\t\t\t\t\t\t<input class=\"form-control pe-5 bg-secondary bg-opacity-10 border-0\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t\t\t<button class=\"bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y\" type=\"submit\"><i class=\"fas fa-search fs-6 text-primary\"></i></button>
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
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2\">
\t\t\t\t\t\t\t\t\t\t<!-- <span>Mode:</span> -->
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm mb-0\" data-bs-theme-value=\"light\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-sun fa-fw mode-switch\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"#\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg> Light
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm mb-0\" data-bs-theme-value=\"dark\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-moon-stars fa-fw mode-switch\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"#\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg> Dark
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm mb-0 active\" data-bs-theme-value=\"auto\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-half fa-fw mode-switch\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<use href=\"#\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg> Auto
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<!-- Dark mode options END-->
\t\t\t\t\t\t\t</ul>
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
\t<div class=\"page-content-wrapper border\">
\t\t{% block body %}

\t\t<!-- Title -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 mb-3\">
\t\t\t\t<h1 class=\"h3 mb-2 mb-sm-0\">Dashboard</h1>
\t\t\t</div>
\t\t</div>

\t\t<!-- Counter boxes START -->
\t\t<div class=\"row g-4 mb-4\">
\t\t\t<!-- Counter item -->
\t\t\t<div class=\"col-md-6 col-xxl-3\">
\t\t\t\t<div class=\"card card-body bg-warning bg-opacity-15 p-4 h-100\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<!-- Digit -->
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h2 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"1958\" data-purecounter-delay=\"200\">0</h2>
\t\t\t\t\t\t\t<span class=\"mb-0 h6 fw-light\">Completed Courses</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t<div class=\"icon-lg rounded-circle bg-warning text-white mb-0\"><i class=\"fas fa-tv fa-fw\"></i></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Counter item -->
\t\t\t<div class=\"col-md-6 col-xxl-3\">
\t\t\t\t<div class=\"card card-body bg-purple bg-opacity-10 p-4 h-100\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<!-- Digit -->
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h2 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"1600\"\tdata-purecounter-delay=\"200\">0</h2>
\t\t\t\t\t\t\t<span class=\"mb-0 h6 fw-light\">Enrolled Courses</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t<div class=\"icon-lg rounded-circle bg-purple text-white mb-0\"><i class=\"fas fa-user-tie fa-fw\"></i></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Counter item -->
\t\t\t<div class=\"col-md-6 col-xxl-3\">
\t\t\t\t<div class=\"card card-body bg-primary bg-opacity-10 p-4 h-100\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<!-- Digit -->
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h2 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"1235\"\tdata-purecounter-delay=\"200\">0</h2>
\t\t\t\t\t\t\t<span class=\"mb-0 h6 fw-light\">Course In Progress</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t<div class=\"icon-lg rounded-circle bg-primary text-white mb-0\"><i class=\"fas fa-user-graduate fa-fw\"></i></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Counter item -->
\t\t\t<div class=\"col-md-6 col-xxl-3\">
\t\t\t\t<div class=\"card card-body bg-success bg-opacity-10 p-4 h-100\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<!-- Digit -->
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<h2 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"845\"\tdata-purecounter-delay=\"200\">0</h2>
\t\t\t\t\t\t\t\t<span class=\"mb-0 h2 ms-1\">hrs</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"mb-0 h6 fw-light\">Total Watch Time</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t<div class=\"icon-lg rounded-circle bg-success text-white mb-0\"><i class=\"bi bi-stopwatch-fill fa-fw\"></i></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Counter boxes END -->

\t\t<!-- Chart and Ticket START -->
\t\t<div class=\"row g-4 mb-4\">

\t\t\t<!-- Chart START -->
\t\t\t<div class=\"col-xxl-8\">
\t\t\t\t<div class=\"card shadow h-100\">

\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t<div class=\"card-header p-4 border-bottom\">
\t\t\t\t\t\t<h5 class=\"card-header-title\">Earnings</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<!-- Apex chart -->
\t\t\t\t\t\t<div id=\"ChartPayout\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Chart END -->

\t\t\t<!-- Ticket START -->
\t\t\t<div class=\"col-xxl-4\">
\t\t\t\t<div class=\"card shadow h-100\">
\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t<div class=\"card-header border-bottom d-flex justify-content-between align-items-center p-4\">
\t\t\t\t\t\t<h5 class=\"card-header-title\">Support Requests</h5>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link p-0 mb-0\">View all</a>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t<div class=\"card-body p-4\">

\t\t\t\t\t<!-- Ticket item START -->
\t\t\t\t\t<div class=\"d-flex justify-content-between position-relative\">
\t\t\t\t\t\t<div class=\"d-sm-flex\">
\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t<div class=\"avatar avatar-md flex-shrink-0\">
\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"{{ asset('assets/images/avatar/09.jpg') }}\" alt=\"avatar\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">Lori Stevens</a></h6>
\t\t\t\t\t\t\t\t<p class=\"mb-0\">New ticket #759 from Lori Stevens for General Enquiry</p>
\t\t\t\t\t\t\t\t<span class=\"small\">8 hour ago</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Ticket item END -->

\t\t\t\t\t\t<hr><!-- Divider -->

\t\t\t\t\t\t<!-- Ticket item START -->
\t\t\t\t\t\t<div class=\"d-flex justify-content-between position-relative\">
\t\t\t\t\t\t\t<div class=\"d-sm-flex\">
\t\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t\t<div class=\"avatar avatar-md flex-shrink-0\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-img rounded-circle bg-purple bg-opacity-10\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-purple position-absolute top-50 start-50 translate-middle fw-bold\">DB</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">Dennis Barrett</a></h6>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Comment from Billy Vasquez on ticket #659</p>
\t\t\t\t\t\t\t\t\t<span class=\"small\">8 hour ago</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Ticket item END -->

\t\t\t\t\t\t<hr><!-- Divider -->

\t\t\t\t\t\t<!-- Ticket item START -->
\t\t\t\t\t\t<div class=\"d-flex justify-content-between position-relative\">
\t\t\t\t\t\t\t<div class=\"d-sm-flex\">
\t\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t\t<div class=\"avatar avatar-md flex-shrink-0\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-img rounded-circle bg-orange bg-opacity-10\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-orange position-absolute top-50 start-50 translate-middle fw-bold\">WB</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">Dennis Barrett</a></h6>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0\"><b>Webestica</b> assign you a new ticket for <b>Eduport theme</b></p>
\t\t\t\t\t\t\t\t\t<span class=\"small\">5 hour ago</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Ticket item END -->

\t\t\t\t\t\t<hr><!-- Divider -->

\t\t\t\t\t<!-- Ticket item START -->
\t\t\t\t\t<div class=\"d-flex justify-content-between position-relative\">
\t\t\t\t\t\t<div class=\"d-sm-flex\">
\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t<div class=\"avatar avatar-md flex-shrink-0\">
\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"{{ asset('assets/images/avatar/04.jpg') }}\" alt=\"avatar\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">Dennis Barrett</a></h6>
\t\t\t\t\t\t\t\t<p class=\"mb-0\">Thanks for contact us with your issues.</p>
\t\t\t\t\t\t\t\t\t<span class=\"small\">9 hour ago</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Ticket item END -->

\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card body END -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Ticket END -->
\t\t</div>
\t\t<!-- Chart and Ticket END -->

\t\t<!-- Top listed Cards START -->
\t\t<div class=\"row g-4\">

\t\t\t<!-- Top instructors START -->
\t\t\t<div class=\"col-lg-6 col-xxl-4\">
\t\t\t\t<div class=\"card shadow h-100\">

\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t<div class=\"card-header border-bottom d-flex justify-content-between align-items-center p-4\">
\t\t\t\t\t\t<h5 class=\"card-header-title\">Top Instructors</h5>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link p-0 mb-0\">View all</a>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t<div class=\"card-body p-4\">

\t\t\t\t\t\t<!-- Instructor item START -->
\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t<!-- Avatar and info -->
\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center mb-1 mb-sm-0\">
\t\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t\t<div class=\"avatar avatar-md flex-shrink-0\">
\t\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"{{ asset('assets/images/avatar/03.jpg') }}\" alt=\"avatar\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Dennis Barrett</h6>
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline mb-0 small\">
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item fw-light me-2 mb-1 mb-sm-0\"><i class=\"fas fa-book text-purple me-1\"></i>18 Courses</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item fw-light me-2 mb-1 mb-sm-0\"><i class=\"fas fa-star text-warning me-1\"></i>4.5/5.0</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-light mb-0\">View</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Instructor item END -->

\t\t\t\t\t\t<hr><!-- Divider -->

\t\t\t\t\t\t<!-- Instructor item START -->
\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t<!-- Avatar and info -->
\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center mb-1 mb-sm-0\">
\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t<div class=\"avatar avatar-md flex-shrink-0\">
\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"{{ asset('assets/images/avatar/01.jpg') }}\" alt=\"avatar\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Jacqueline Miller<i class=\"bi bi-patch-check-fill text-info small ms-1\"></i></h6>
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline mb-0 small\">
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item fw-light me-2 mb-1 mb-sm-0\"><i class=\"fas fa-book text-purple me-1\"></i>21 Courses</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item fw-light me-2 mb-1 mb-sm-0\"><i class=\"fas fa-star text-warning me-1\"></i>4.8/5.0</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-light mb-0\">View</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Instructor item END -->

\t\t\t\t\t\t<hr><!-- Divider -->

\t\t\t\t\t\t<!-- Instructor item START -->
\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t<!-- Avatar and info -->
\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center mb-1 mb-sm-0\">
\t\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t\t<div class=\"avatar avatar-md flex-shrink-0\">
\t\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"{{ asset('assets/images/avatar/04.jpg') }}\" alt=\"avatar\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Billy Vasquez</h6>
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline mb-0 small\">
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item fw-light me-2 mb-1 mb-sm-0\"><i class=\"fas fa-book text-purple me-1\"></i>15 Courses</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item fw-light me-2 mb-1 mb-sm-0\"><i class=\"fas fa-star text-warning me-1\"></i>4.5/5.0</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-light mb-0\">View</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Instructor item END -->

\t\t\t\t\t\t<hr><!-- Divider -->

\t\t\t\t\t\t<!-- Instructor item START -->
\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t<!-- Avatar and info -->
\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center mb-1 mb-sm-0\">
\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t<div class=\"avatar avatar-md flex-shrink-0\">
\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"{{ asset('assets/images/avatar/05.jpg') }}\" alt=\"avatar\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Amanda Reed<i class=\"bi bi-patch-check-fill text-info small ms-1\"></i></h6>
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline mb-0 small\">
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item fw-light me-2 mb-1 mb-sm-0\"><i class=\"fas fa-book text-purple me-1\"></i>29 Courses</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item fw-light me-2 mb-1 mb-sm-0\"><i class=\"fas fa-star text-warning me-1\"></i>4.5/5.0</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-light mb-0\">View</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Instructor item END -->

\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card body END -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Top instructors END -->

\t\t\t<!-- Notice Board START -->
\t\t\t<div class=\"col-lg-6 col-xxl-4\">
\t\t\t\t<div class=\"card shadow h-100\">
\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t<div class=\"card-header border-bottom p-4\">
\t\t\t\t\t\t<h5 class=\"card-header-title\">Notice board</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t<div class=\"custom-scrollbar h-300px\">

\t\t\t\t\t\t\t<!-- Notice Board item START -->
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between position-relative\">
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-lg bg-purple bg-opacity-10 text-purple rounded-2 flex-shrink-0\"><i class=\"fas fa-user-tie fs-5\"></i></div>
\t\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-3 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">Join New Instructor</a></h6>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Amongst moments do in arrived Fat weddings believed prospect</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"small\">5 min ago</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Notice Board item END -->

\t\t\t\t\t\t\t<hr><!-- Divider -->

\t\t\t\t\t\t\t<!-- Notice Board item START -->
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between position-relative\">
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-lg bg-orange bg-opacity-10 text-orange rounded-2 flex-shrink-0\"><i class=\"fas fa-book-open fs-5\"></i></div>
\t\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-3 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">Update New Course</a></h6>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Arrived Fat weddings believed prospect</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"small\">4 hour ago</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Notice Board item END -->

\t\t\t\t\t\t\t<hr><!-- Divider -->

\t\t\t\t\t\t\t<!-- Notice Board item START -->
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between position-relative\">
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-lg bg-info bg-opacity-10 text-info rounded-2 flex-shrink-0\"><i class=\"fas fa-book fs-5\"></i></div>
\t\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-3 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">Update Syllabus</a></h6>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Arrived Fat weddings believed prospect</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"small\">2 days ago</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Notice Board item END -->

\t\t\t\t\t\t\t<hr><!-- Divider -->

\t\t\t\t\t\t\t<!-- Notice Board item START -->
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between position-relative\">
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-lg bg-danger bg-opacity-10 text-danger rounded-2 flex-shrink-0\"><i class=\"fas fa-globe fs-5\"></i></div>
\t\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t\t<div class=\"ms-0 ms-sm-3 mt-2 mt-sm-0\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">Update New Feature</a></h6>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Arrived Fat weddings believed prospect</p>
\t\t\t\t\t\t\t\t\t\t<span class=\"small\">3 days ago</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Notice Board item END -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card body END -->

\t\t\t\t\t<!-- Card footer START -->
\t\t\t\t\t<div class=\"card-footer border-top\">
\t\t\t\t\t\t<div class=\"alert alert-success d-flex align-items-center mb-0 py-2\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<small class=\"mb-0\">45 more notices listed</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-success-soft mb-0\" href=\"#!\"> View all </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card footer START -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Notice Board END -->

\t\t\t<!-- Traffic sources START -->
\t\t\t<div class=\"col-lg-6 col-xxl-4\">
\t\t\t\t<div class=\"card shadow h-100\">

\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t<div class=\"card-header border-bottom d-flex justify-content-between align-items-center p-4\">
\t\t\t\t\t\t<h5 class=\"card-header-title\">Traffic Sources</h5>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link p-0 mb-0\">View all</a>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t<!-- Chart -->
\t\t\t\t\t\t<div class=\"col-sm-6 mx-auto\">
\t\t\t\t\t\t\t<div id=\"ChartTrafficViews\"></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t<ul class=\"list-group list-group-borderless mt-3\">
\t\t\t\t\t\t\t<li class=\"list-group-item\"><i class=\"text-primary fas fa-circle me-2\"></i>Create a Design System in Figma</li>
\t\t\t\t\t\t\t<li class=\"list-group-item\"><i class=\"text-success fas fa-circle me-2\"></i>The Complete Digital Marketing Course - 12 Courses in 1</li>
\t\t\t\t\t\t\t<li class=\"list-group-item\"><i class=\"text-warning fas fa-circle me-2\"></i>Google Ads Training: Become a PPC Expert</li>
\t\t\t\t\t\t\t<li class=\"list-group-item\"><i class=\"text-danger fas fa-circle me-2\"></i>Microsoft Excel - Excel from Beginner to Advanced</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Card body END -->
\t\t\t</div>
\t\t\t<!-- Traffic sources END -->

\t\t</div>
\t\t<!-- Top listed Cards END -->
\t\t{% endblock %}

\t</div>
\t<!-- Page main content END -->
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



</body>

<!-- Mirrored from eduport.webestica.com/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 13:15:39 GMT -->
</html>
", "back_base.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\back_base.html.twig");
    }
}
