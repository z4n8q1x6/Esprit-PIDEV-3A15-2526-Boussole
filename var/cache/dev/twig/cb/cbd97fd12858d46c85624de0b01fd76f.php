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
class __TwigTemplate_e10f7301fcec0f1f06a7a3d6cd8e1c02 extends Template
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
            'content' => [$this, 'block_content'],
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
\t<title>Eduport - LMS, Education and Course Theme</title>

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

</head>

<body>

<!-- Header START -->
<header class=\"navbar-light navbar-sticky\">
\t<!-- Logo Nav START -->
\t<nav class=\"navbar navbar-expand-xl\">
\t\t<div class=\"container\">
\t\t\t<!-- Logo START -->
\t\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t\t<img class=\"light-mode-item navbar-brand-item\" src=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        yield "\" alt=\"logo\">
\t\t\t\t<img class=\"dark-mode-item navbar-brand-item\" src=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.svg"), "html", null, true);
        yield "\" alt=\"logo\">
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
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"demoMenu\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Demos</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"demoMenu\">
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index.html\">Home Default</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index-2.html\">Home Education</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index-3.html\">Home Academy</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index-4.html\">Home Course</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index-5.html\">Home University</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index-6.html\">Home Kindergarten</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index-7.html\">Home Landing</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index-8.html\">Home Tutor</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index-9.html\">Home School</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index-10.html\">Home Abroad</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index-11.html\">Home Workshop</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Nav item 2 Pages -->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"pagesMenu\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Pages</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"pagesMenu\">
\t\t\t\t\t\t\t<!-- Dropdown submenu -->
\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">Course</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-categories.html\">Course Categories</a></li>
\t\t\t\t\t\t\t\t\t<li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-grid.html\">Course Grid Classic</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-grid-2.html\">Course Grid Minimal</a></li>
\t\t\t\t\t\t\t\t\t<li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-list.html\">Course List Classic</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-list-2.html\">Course List Minimal</a></li>
\t\t\t\t\t\t\t\t\t<li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-detail.html\">Course Detail Classic</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-detail-min.html\">Course Detail Minimal</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-detail-adv.html\">Course Detail Advance</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-detail-module.html\">Course Detail Module</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-video-player.html\">Course Full Screen Video</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<!-- Dropdown submenu -->
\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">About</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"about.html\">About Us</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"contact-us.html\">Contact Us</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"blog-grid.html\">Blog Grid</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"blog-masonry.html\">Blog Masonry</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"blog-detail.html\">Blog Detail</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"pricing.html\">Pricing</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<!-- Dropdown submenu -->
\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">Hero Banner</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"docs/snippet-hero-12.html\">Hero Form</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"docs/snippet-hero-13.html\">Hero Vector</a></li>
\t\t\t\t\t\t\t\t\t<li> <p class=\"dropdown-item mb-0\">Coming soon....</p></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-list.html\">Instructor List</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-single.html\">Instructor Single</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"become-instructor.html\">Become an Instructor</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"abroad-single.html\">Abroad Single</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"workshop-detail.html\">Workshop Detail</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"event-detail.html\">Event Detail</a></li>

\t\t\t\t\t\t\t<!-- Dropdown submenu -->
\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">Shop</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"shop.html\">Shop grid</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"shop-product-detail.html\">Product detail</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"cart.html\">Cart</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"checkout.html\">Checkout</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"empty-cart.html\">Empty Cart</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"wishlist.html\">Wishlist</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<!-- Dropdown submenu -->
\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">Help</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"help-center.html\">Help Center</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"help-center-detail.html\">Help Center Single</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"faq.html\">FAQs</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<!-- Dropdown submenu -->
\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">Authentication</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"sign-in.html\">Sign In</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"sign-up.html\">Sign Up</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"forgot-password.html\">Forgot Password</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<!-- Dropdown submenu -->
\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">Form</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"request-demo.html\">Request a demo</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"book-class.html\">Book a Class</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"request-access.html\">Free Access</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"university-admission-form.html\">Admission Form</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<!-- Dropdown submenu -->
\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">Specialty</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"error-404.html\">Error 404</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"coming-soon.html\">Coming Soon</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Nav item 3 Account -->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"accounntMenu\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Accounts</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"accounntMenu\">
\t\t\t\t\t\t\t<!-- Dropdown submenu -->
\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\"><i class=\"fas fa-user-tie fa-fw me-1\"></i>Instructor</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-dashboard.html\"><i class=\"bi bi-grid-fill fa-fw me-1\"></i>Dashboard</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-manage-course.html\"><i class=\"bi bi-basket-fill fa-fw me-1\"></i>Courses</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-create-course.html\"><i class=\"bi bi-file-earmark-plus-fill fa-fw me-1\"></i>Create Course</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-added.html\"><i class=\"bi bi-file-check-fill fa-fw me-1\"></i>Course Added</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-quiz.html\"><i class=\"bi bi-question-diamond fa-fw me-1\"></i>Quiz</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-earning.html\"><i class=\"fas fa-chart-line fa-fw me-1\"></i>Earnings</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-studentlist.html\"><i class=\"fas fa-user-graduate fa-fw me-1\"></i>Students</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-order.html\"><i class=\"bi bi-cart-check-fill fa-fw me-1\"></i>Orders</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-review.html\"><i class=\"bi bi-star-fill fa-fw me-1\"></i>Reviews</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-payout.html\"><i class=\"fas fa-wallet fa-fw me-1\"></i>Payout</a> </li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<!-- Dropdown submenu -->
\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\"><i class=\"fas fa-user-graduate fa-fw me-1\"></i>Student</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"student-dashboard.html\"><i class=\"bi bi-grid-fill fa-fw me-1\"></i>Dashboard</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"student-subscription.html\"><i class=\"bi bi-card-checklist fa-fw me-1\"></i>My Subscriptions</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"student-course-list.html\"><i class=\"bi bi-basket-fill fa-fw me-1\"></i>Courses</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"student-course-resume.html\"><i class=\"far fa-fw fa-file-alt me-1\"></i>Course Resume</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"student-quiz.html\"><i class=\"bi bi-question-diamond fa-fw me-1\"></i>Quiz </a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"student-payment-info.html\"><i class=\"bi bi-credit-card-2-front-fill fa-fw me-1\"></i>Payment Info</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"student-bookmark.html\"><i class=\"fas bi-cart-check-fill fa-fw me-1\"></i>Wishlist</a> </li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"admin-dashboard.html\"><i class=\"fas fa-user-cog fa-fw me-1\"></i>Admin</a> </li>
\t\t\t\t\t\t\t<li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-edit-profile.html\"><i class=\"fas fa-fw fa-edit me-1\"></i>Edit Profile</a> </li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-setting.html\"><i class=\"fas fa-fw fa-cog me-1\"></i>Settings</a> </li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-delete-account.html\"><i class=\"fas fa-fw fa-trash-alt me-1\"></i>Delete Profile</a> </li>

\t\t\t\t\t\t\t<li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t<!-- Dropdown Level -->
\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">Dropdown levels</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">

\t\t\t\t\t\t\t\t\t<!-- dropdown submenu open right -->
\t\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">Dropdown (end)</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\">Dropdown item</a> </li>
\t\t\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\">Dropdown item</a> </li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\">Dropdown item</a> </li>

\t\t\t\t\t\t\t\t\t<!-- dropdown submenu open left -->
\t\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropstart\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">Dropdown (start)</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\">Dropdown item</a> </li>
\t\t\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\">Dropdown item</a> </li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\">Dropdown item</a> </li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Nav item 4 Component-->
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"docs/alerts.html\">Components</a></li>

\t\t\t\t\t<!-- Nav item 5 link-->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" id=\"advanceMenu\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-h\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end min-w-auto\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"https://support.webestica.com/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"text-warning fa-fw bi bi-life-preserver me-2\"></i>Support
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"docs/index.html\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"text-danger fa-fw bi bi-card-text me-2\"></i>Documentation
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"rtl/index.html\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"text-info fa-fw bi bi-toggle-off me-2\"></i>RTL demo
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"https://themes.getbootstrap.com/store/webestica/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"text-success fa-fw bi bi-cloud-download-fill me-2\"></i>Buy Eduport!
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"docs/alerts.html\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"text-orange fa-fw bi bi-puzzle-fill me-2\"></i>Components
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
                <a class=\"dropdown-item\" href=\"docs/snippets.html\">
                  <i class=\"text-purple fa-fw bi bi-stickies-fill me-2\"></i>Snippets
                </a>
              </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<!-- Nav Main menu END -->

\t\t\t\t<!-- Nav Search START -->
\t\t\t\t<div class=\"nav my-3 my-xl-0 px-4 flex-nowrap align-items-center\">
\t\t\t\t\t<div class=\"nav-item w-100\">
\t\t\t\t\t\t<form class=\"position-relative\">
\t\t\t\t\t\t\t<input class=\"form-control pe-5 bg-transparent\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t<button class=\"bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-search fs-6 \"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Nav Search END -->
\t\t\t</div>
\t\t\t<!-- Main navbar END -->

\t\t\t<!-- Profile START -->
\t\t\t<div class=\"dropdown ms-1 ms-lg-0\">
\t\t\t<a class=\"avatar avatar-sm p-0\" href=\"#\" id=\"profileDropdown\" role=\"button\" data-bs-auto-close=\"outside\" data-bs-display=\"static\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"";
        // line 382
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
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/01.jpg"), "html", null, true);
        yield "\" alt=\"avatar\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class=\"h6\" href=\"#\">Lori Ferguson</a>
\t\t\t\t\t\t\t\t<p class=\"small m-0\">example@gmail.com</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
          <li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t<!-- Links -->
\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-person fa-fw me-2\"></i>Edit Profile</a></li>
\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-gear fa-fw me-2\"></i>Account Settings</a></li>
\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-info-circle fa-fw me-2\"></i>Help</a></li>
\t\t\t\t\t<li><a class=\"dropdown-item bg-danger-soft-hover\" href=\"#\"><i class=\"bi bi-power fa-fw me-2\"></i>Sign Out</a></li>
\t\t\t\t\t<li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t<!-- Dark mode options START -->
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm mb-0\" data-bs-theme-value=\"light\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-sun fa-fw mode-switch\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t<path d=\"M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z\"/>
\t\t\t\t\t\t\t\t\t<use href=\"#\"></use>
\t\t\t\t\t\t\t\t</svg> Light
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm mb-0\" data-bs-theme-value=\"dark\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-moon-stars fa-fw mode-switch\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t<path d=\"M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z\"/>
\t\t\t\t\t\t\t\t\t<path d=\"M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z\"/>
\t\t\t\t\t\t\t\t\t<use href=\"#\"></use>
\t\t\t\t\t\t\t\t</svg> Dark
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm mb-0 active\" data-bs-theme-value=\"auto\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-half fa-fw mode-switch\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t<path d=\"M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z\"/>
\t\t\t\t\t\t\t\t\t<use href=\"#\"></use>
\t\t\t\t\t\t\t\t</svg> Auto
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- Dark mode options END-->
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

<!-- =======================
Page content START -->
<section class=\"pt-0\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<!-- Main content START -->
\t\t\t<div class=\"col-xl-9\">
            ";
        // line 451
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 454
        yield "
\t\t\t</div>
\t\t\t<!-- Main content END -->
\t\t</div><!-- Row END -->
\t</div>
</section>
<!-- =======================
Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class=\"bg-dark p-3\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<!-- Widget -->
\t\t\t<div class=\"col-md-4 text-center text-md-start mb-3 mb-md-0\">
\t\t\t\t<!-- Logo START -->
\t\t\t\t<a href=\"index.html\"> <img class=\"h-20px\" src=\"";
        // line 474
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.svg"), "html", null, true);
        yield "\" alt=\"logo\"> </a>
\t\t\t</div>

\t\t\t<!-- Widget -->
\t\t\t<div class=\"col-md-4 mb-3 mb-md-0\">
\t\t\t\t<div class=\"text-center text-white text-primary-hover\">
\t\t\t\t\tCopyrights ©2023 Eduport. Build by <a href=\"https://www.webestica.com/\" target=\"_blank\" class=\"text-white\">Webestica</a>.
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Widget -->
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<!-- Rating -->
\t\t\t\t<ul class=\"list-inline mb-0 text-center text-md-end\">
\t\t\t\t\t<li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-facebook\"></i></a></li>
\t\t\t\t\t<li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-instagram\"></i></a></li>
\t\t\t\t\t<li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-linkedin-in\"></i></a></li>
\t\t\t\t\t<li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-twitter\"></i></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<!-- =======================
Footer END -->

<div class=\"back-top\"><i class=\"bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle\"></i></div>

<script src=\"";
        // line 501
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 503
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/purecounterjs/dist/purecounter_vanilla.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 504
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/js/apexcharts.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 506
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/functions.js"), "html", null, true);
        yield "\"></script>

</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 451
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 452
        yield "                    ";
        // line 453
        yield "            ";
        
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
        return array (  618 => 453,  616 => 452,  606 => 451,  593 => 506,  588 => 504,  584 => 503,  579 => 501,  549 => 474,  527 => 454,  525 => 451,  461 => 390,  450 => 382,  167 => 102,  163 => 101,  147 => 88,  141 => 85,  137 => 84,  133 => 83,  122 => 75,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from eduport.webestica.com/instructor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 13:09:24 GMT -->
<head>
\t<title>Eduport - LMS, Education and Course Theme</title>

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

</head>

<body>

<!-- Header START -->
<header class=\"navbar-light navbar-sticky\">
\t<!-- Logo Nav START -->
\t<nav class=\"navbar navbar-expand-xl\">
\t\t<div class=\"container\">
\t\t\t<!-- Logo START -->
\t\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t\t<img class=\"light-mode-item navbar-brand-item\" src=\"{{ asset('assets/images/logo.svg') }}\" alt=\"logo\">
\t\t\t\t<img class=\"dark-mode-item navbar-brand-item\" src=\"{{ asset('assets/images/logo-light.svg') }}\" alt=\"logo\">
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
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"demoMenu\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Demos</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"demoMenu\">
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index.html\">Home Default</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index-2.html\">Home Education</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index-3.html\">Home Academy</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index-4.html\">Home Course</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index-5.html\">Home University</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index-6.html\">Home Kindergarten</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index-7.html\">Home Landing</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index-8.html\">Home Tutor</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index-9.html\">Home School</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index-10.html\">Home Abroad</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"index-11.html\">Home Workshop</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Nav item 2 Pages -->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"pagesMenu\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Pages</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"pagesMenu\">
\t\t\t\t\t\t\t<!-- Dropdown submenu -->
\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">Course</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-categories.html\">Course Categories</a></li>
\t\t\t\t\t\t\t\t\t<li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-grid.html\">Course Grid Classic</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-grid-2.html\">Course Grid Minimal</a></li>
\t\t\t\t\t\t\t\t\t<li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-list.html\">Course List Classic</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-list-2.html\">Course List Minimal</a></li>
\t\t\t\t\t\t\t\t\t<li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-detail.html\">Course Detail Classic</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-detail-min.html\">Course Detail Minimal</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-detail-adv.html\">Course Detail Advance</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-detail-module.html\">Course Detail Module</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-video-player.html\">Course Full Screen Video</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<!-- Dropdown submenu -->
\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">About</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"about.html\">About Us</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"contact-us.html\">Contact Us</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"blog-grid.html\">Blog Grid</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"blog-masonry.html\">Blog Masonry</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"blog-detail.html\">Blog Detail</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"pricing.html\">Pricing</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<!-- Dropdown submenu -->
\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">Hero Banner</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"docs/snippet-hero-12.html\">Hero Form</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"docs/snippet-hero-13.html\">Hero Vector</a></li>
\t\t\t\t\t\t\t\t\t<li> <p class=\"dropdown-item mb-0\">Coming soon....</p></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-list.html\">Instructor List</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-single.html\">Instructor Single</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"become-instructor.html\">Become an Instructor</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"abroad-single.html\">Abroad Single</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"workshop-detail.html\">Workshop Detail</a></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"event-detail.html\">Event Detail</a></li>

\t\t\t\t\t\t\t<!-- Dropdown submenu -->
\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">Shop</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"shop.html\">Shop grid</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"shop-product-detail.html\">Product detail</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"cart.html\">Cart</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"checkout.html\">Checkout</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"empty-cart.html\">Empty Cart</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"wishlist.html\">Wishlist</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<!-- Dropdown submenu -->
\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">Help</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"help-center.html\">Help Center</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"help-center-detail.html\">Help Center Single</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"faq.html\">FAQs</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<!-- Dropdown submenu -->
\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">Authentication</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"sign-in.html\">Sign In</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"sign-up.html\">Sign Up</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"forgot-password.html\">Forgot Password</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<!-- Dropdown submenu -->
\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">Form</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"request-demo.html\">Request a demo</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"book-class.html\">Book a Class</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"request-access.html\">Free Access</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"university-admission-form.html\">Admission Form</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<!-- Dropdown submenu -->
\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">Specialty</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"error-404.html\">Error 404</a></li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"coming-soon.html\">Coming Soon</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Nav item 3 Account -->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"accounntMenu\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Accounts</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"accounntMenu\">
\t\t\t\t\t\t\t<!-- Dropdown submenu -->
\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\"><i class=\"fas fa-user-tie fa-fw me-1\"></i>Instructor</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-dashboard.html\"><i class=\"bi bi-grid-fill fa-fw me-1\"></i>Dashboard</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-manage-course.html\"><i class=\"bi bi-basket-fill fa-fw me-1\"></i>Courses</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-create-course.html\"><i class=\"bi bi-file-earmark-plus-fill fa-fw me-1\"></i>Create Course</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"course-added.html\"><i class=\"bi bi-file-check-fill fa-fw me-1\"></i>Course Added</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-quiz.html\"><i class=\"bi bi-question-diamond fa-fw me-1\"></i>Quiz</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-earning.html\"><i class=\"fas fa-chart-line fa-fw me-1\"></i>Earnings</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-studentlist.html\"><i class=\"fas fa-user-graduate fa-fw me-1\"></i>Students</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-order.html\"><i class=\"bi bi-cart-check-fill fa-fw me-1\"></i>Orders</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-review.html\"><i class=\"bi bi-star-fill fa-fw me-1\"></i>Reviews</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-payout.html\"><i class=\"fas fa-wallet fa-fw me-1\"></i>Payout</a> </li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<!-- Dropdown submenu -->
\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\"><i class=\"fas fa-user-graduate fa-fw me-1\"></i>Student</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"student-dashboard.html\"><i class=\"bi bi-grid-fill fa-fw me-1\"></i>Dashboard</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"student-subscription.html\"><i class=\"bi bi-card-checklist fa-fw me-1\"></i>My Subscriptions</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"student-course-list.html\"><i class=\"bi bi-basket-fill fa-fw me-1\"></i>Courses</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"student-course-resume.html\"><i class=\"far fa-fw fa-file-alt me-1\"></i>Course Resume</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"student-quiz.html\"><i class=\"bi bi-question-diamond fa-fw me-1\"></i>Quiz </a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"student-payment-info.html\"><i class=\"bi bi-credit-card-2-front-fill fa-fw me-1\"></i>Payment Info</a> </li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"student-bookmark.html\"><i class=\"fas bi-cart-check-fill fa-fw me-1\"></i>Wishlist</a> </li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"admin-dashboard.html\"><i class=\"fas fa-user-cog fa-fw me-1\"></i>Admin</a> </li>
\t\t\t\t\t\t\t<li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-edit-profile.html\"><i class=\"fas fa-fw fa-edit me-1\"></i>Edit Profile</a> </li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-setting.html\"><i class=\"fas fa-fw fa-cog me-1\"></i>Settings</a> </li>
\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"instructor-delete-account.html\"><i class=\"fas fa-fw fa-trash-alt me-1\"></i>Delete Profile</a> </li>

\t\t\t\t\t\t\t<li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t<!-- Dropdown Level -->
\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">Dropdown levels</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">

\t\t\t\t\t\t\t\t\t<!-- dropdown submenu open right -->
\t\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropend\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">Dropdown (end)</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\">Dropdown item</a> </li>
\t\t\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\">Dropdown item</a> </li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\">Dropdown item</a> </li>

\t\t\t\t\t\t\t\t\t<!-- dropdown submenu open left -->
\t\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu dropstart\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#\">Dropdown (start)</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\">Dropdown item</a> </li>
\t\t\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\">Dropdown item</a> </li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li> <a class=\"dropdown-item\" href=\"#\">Dropdown item</a> </li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Nav item 4 Component-->
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"docs/alerts.html\">Components</a></li>

\t\t\t\t\t<!-- Nav item 5 link-->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" id=\"advanceMenu\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-h\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end min-w-auto\" data-bs-popper=\"none\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"https://support.webestica.com/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"text-warning fa-fw bi bi-life-preserver me-2\"></i>Support
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"docs/index.html\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"text-danger fa-fw bi bi-card-text me-2\"></i>Documentation
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"rtl/index.html\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"text-info fa-fw bi bi-toggle-off me-2\"></i>RTL demo
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"https://themes.getbootstrap.com/store/webestica/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"text-success fa-fw bi bi-cloud-download-fill me-2\"></i>Buy Eduport!
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"docs/alerts.html\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"text-orange fa-fw bi bi-puzzle-fill me-2\"></i>Components
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
                <a class=\"dropdown-item\" href=\"docs/snippets.html\">
                  <i class=\"text-purple fa-fw bi bi-stickies-fill me-2\"></i>Snippets
                </a>
              </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<!-- Nav Main menu END -->

\t\t\t\t<!-- Nav Search START -->
\t\t\t\t<div class=\"nav my-3 my-xl-0 px-4 flex-nowrap align-items-center\">
\t\t\t\t\t<div class=\"nav-item w-100\">
\t\t\t\t\t\t<form class=\"position-relative\">
\t\t\t\t\t\t\t<input class=\"form-control pe-5 bg-transparent\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t<button class=\"bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-search fs-6 \"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Nav Search END -->
\t\t\t</div>
\t\t\t<!-- Main navbar END -->

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
\t\t\t\t\t\t\t\t<a class=\"h6\" href=\"#\">Lori Ferguson</a>
\t\t\t\t\t\t\t\t<p class=\"small m-0\">example@gmail.com</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
          <li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t<!-- Links -->
\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-person fa-fw me-2\"></i>Edit Profile</a></li>
\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-gear fa-fw me-2\"></i>Account Settings</a></li>
\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-info-circle fa-fw me-2\"></i>Help</a></li>
\t\t\t\t\t<li><a class=\"dropdown-item bg-danger-soft-hover\" href=\"#\"><i class=\"bi bi-power fa-fw me-2\"></i>Sign Out</a></li>
\t\t\t\t\t<li> <hr class=\"dropdown-divider\"></li>
\t\t\t\t\t<!-- Dark mode options START -->
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm mb-0\" data-bs-theme-value=\"light\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-sun fa-fw mode-switch\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t<path d=\"M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z\"/>
\t\t\t\t\t\t\t\t\t<use href=\"#\"></use>
\t\t\t\t\t\t\t\t</svg> Light
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm mb-0\" data-bs-theme-value=\"dark\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-moon-stars fa-fw mode-switch\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t<path d=\"M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z\"/>
\t\t\t\t\t\t\t\t\t<path d=\"M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z\"/>
\t\t\t\t\t\t\t\t\t<use href=\"#\"></use>
\t\t\t\t\t\t\t\t</svg> Dark
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm mb-0 active\" data-bs-theme-value=\"auto\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-half fa-fw mode-switch\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t<path d=\"M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z\"/>
\t\t\t\t\t\t\t\t\t<use href=\"#\"></use>
\t\t\t\t\t\t\t\t</svg> Auto
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- Dark mode options END-->
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

<!-- =======================
Page content START -->
<section class=\"pt-0\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<!-- Main content START -->
\t\t\t<div class=\"col-xl-9\">
            {% block content %}
                    {# el page mte3ek fel block hedha #}
            {% endblock %}

\t\t\t</div>
\t\t\t<!-- Main content END -->
\t\t</div><!-- Row END -->
\t</div>
</section>
<!-- =======================
Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class=\"bg-dark p-3\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<!-- Widget -->
\t\t\t<div class=\"col-md-4 text-center text-md-start mb-3 mb-md-0\">
\t\t\t\t<!-- Logo START -->
\t\t\t\t<a href=\"index.html\"> <img class=\"h-20px\" src=\"{{ asset('assets/images/logo-light.svg') }}\" alt=\"logo\"> </a>
\t\t\t</div>

\t\t\t<!-- Widget -->
\t\t\t<div class=\"col-md-4 mb-3 mb-md-0\">
\t\t\t\t<div class=\"text-center text-white text-primary-hover\">
\t\t\t\t\tCopyrights ©2023 Eduport. Build by <a href=\"https://www.webestica.com/\" target=\"_blank\" class=\"text-white\">Webestica</a>.
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Widget -->
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<!-- Rating -->
\t\t\t\t<ul class=\"list-inline mb-0 text-center text-md-end\">
\t\t\t\t\t<li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-facebook\"></i></a></li>
\t\t\t\t\t<li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-instagram\"></i></a></li>
\t\t\t\t\t<li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-linkedin-in\"></i></a></li>
\t\t\t\t\t<li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-twitter\"></i></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<!-- =======================
Footer END -->

<div class=\"back-top\"><i class=\"bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle\"></i></div>

<script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}\"></script>

<script src=\"{{ asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/apexcharts/js/apexcharts.min.js') }}\"></script>

<script src=\"{{ asset('assets/js/functions.js') }}\"></script>

</body>
</html>
", "front_base.html.twig", "C:\\Users\\Wael\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\front_base.html.twig");
    }
}
