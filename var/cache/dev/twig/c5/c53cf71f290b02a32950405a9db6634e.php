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

/* login/index.html.twig */
class __TwigTemplate_3eacbbbcbd8b728e367339c199a836dd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Connexion - Boussole</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
        body { 
            position: relative; display: flex; align-items: center; justify-content: center; min-height: 100vh;
            background-color: #0f172a; overflow: hidden;
        }
        
        /* Particles Canvas */
        #particles-canvas {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1; pointer-events: none;
        }

        /* Layout Container */
        .layout-wrapper {
            position: relative; z-index: 2;
            display: flex; width: 1000px; max-width: 95%; min-height: 600px;
            background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(15px);
            border-radius: 20px; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5);
            border: 1px solid rgba(255,255,255,0.1); overflow: hidden;
            animation: fadeIn 0.6s ease-out;
        }
        @keyframes fadeIn { from { opacity: 0; transform: scale(0.95); } to { opacity: 1; transform: scale(1); } }

        /* Left Side: Branding / Logo */
        .branding-section {
            flex: 1; display: flex; flex-direction: column; align-items: center; justify-content: center;
            padding: 40px; text-align: center; color: white;
            background: linear-gradient(135deg, rgba(30, 60, 114, 0.7) 0%, rgba(42, 82, 152, 0.9) 100%);
        }
        .branding-section .logo-placeholder { margin-bottom: 20px; }
        .branding-section h1 { font-size: 36px; font-weight: 700; margin-bottom: 10px; letter-spacing: 1px; }
        .branding-section p { font-size: 16px; color: #e2e8f0; line-height: 1.5; max-width: 300px; }

        /* Right Side: Login form */
        .login-section {
            width: 450px; background: #ffffff; padding: 50px 45px;
            display: flex; flex-direction: column; justify-content: center;
        }
        
        .login-header { margin-bottom: 25px; }
        .login-header h2 { font-size: 26px; font-weight: 700; color: #1e293b; margin-bottom: 5px; }
        .login-header p { font-size: 14px; color: #64748b; }

        .form-group { margin-bottom: 18px; }
        .form-group label { display: block; font-size: 13.5px; font-weight: 600; color: #475569; margin-bottom: 6px; }
        .form-control {
            width: 100%; padding: 12px 15px; font-size: 15px; border: 1.5px solid #e2e8f0;
            border-radius: 8px; transition: all 0.3s ease; color: #1e293b;
        }
        .form-control:focus { outline: none; border-color: #3b82f6; box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15); }
        
        .btn-submit {
            width: 100%; padding: 13px; background: linear-gradient(to right, #1e3c72, #2a5298);
            border: none; border-radius: 8px; color: white; font-size: 15px; font-weight: 600;
            cursor: pointer; transition: transform 0.2s, box-shadow 0.2s; margin-top: 10px;
        }
        .btn-submit:hover { transform: translateY(-2px); box-shadow: 0 8px 15px rgba(30, 60, 114, 0.25); }
        
        .alert { padding: 12px 15px; border-radius: 8px; margin-bottom: 20px; font-size: 14px; }
        .alert-error { background-color: #fee2e2; color: #b91c1c; border: 1px solid #fecaca; }
        
        .forgot-password { display: block; text-align: right; margin-top: 12px; font-size: 13px; color: #3b82f6; text-decoration: none; font-weight: 500; }
        .forgot-password:hover { text-decoration: underline; }
        
        .divider { display: flex; align-items: center; text-align: center; margin: 25px 0; color: #94a3b8; font-size: 13px; font-weight: 500; }
        .divider::before, .divider::after { content: ''; flex: 1; border-bottom: 1px solid #e2e8f0; }
        .divider:not(:empty)::before { margin-right: .5em; }
        .divider:not(:empty)::after { margin-left: .5em; }
        
        .btn-social {
            display: flex; align-items: center; justify-content: center; gap: 10px;
            width: 100%; padding: 12px; margin-bottom: 12px; border-radius: 8px;
            font-size: 14.5px; font-weight: 500; cursor: pointer; transition: all 0.2s ease; text-decoration: none;
        }
        .btn-google { background-color: #fff; color: #475569; border: 1px solid #e2e8f0; }
        .btn-google:hover { background-color: #f8fafc; border-color: #cbd5e1; box-shadow: 0 2px 4px rgba(0,0,0,0.02); }
        .btn-faceid { background-color: #0f172a; color: #fff; border: 1px solid #0f172a; }
        .btn-faceid:hover { background-color: #1e293b; box-shadow: 0 4px 10px rgba(0,0,0,0.15); }
        .btn-social svg { width: 20px; height: 20px; }

        @media screen and (max-width: 800px) {
            .layout-wrapper { flex-direction: column; height: auto; max-width: 450px; }
            .branding-section { padding: 30px; display:none; /* hide on small devices or show small version */ }
            .login-section { width: 100%; padding: 40px 30px; }
        }
    </style>
</head>
<body>

<canvas id=\"particles-canvas\"></canvas>

<div class=\"layout-wrapper\">
    <!-- Section Gauche : Logo et Branding -->
    <div class=\"branding-section\">
        <div class=\"logo-placeholder\">
            <!-- Icône Boussole par défaut (jusqu'à ce que vous mettiez votre vrai logo) -->
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"80\" height=\"80\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                <polygon points=\"16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76\"></polygon>
            </svg>
        </div>
        <h1>Boussole</h1>
        <p>Votre plateforme d'orientation et d'opportunités. Connectez-vous pour explorer de nouveaux horizons.</p>
    </div>

    <!-- Section Droite : Formulaire -->
    <div class=\"login-section\">
        <div class=\"login-header\">
            <h2>Bienvenue</h2>
            <p>Accédez à votre espace personnel</p>
        </div>

        ";
        // line 120
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 120, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 121
            yield "            <div class=\"alert alert-error\">
                ";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 122, $this->source); })()), "messageKey", [], "any", false, false, false, 122), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 122, $this->source); })()), "messageData", [], "any", false, false, false, 122), "security"), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 125
        yield "
        <form method=\"post\">
            <div class=\"form-group\">
                <label for=\"username\">Email</label>
                <input type=\"email\" value=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 129, $this->source); })()), "html", null, true);
        yield "\" name=\"_username\" id=\"username\" class=\"form-control\" autocomplete=\"email\" placeholder=\"exemple@email.com\" required autofocus>
            </div>

            <div class=\"form-group\">
                <label for=\"password\">Mot de passe</label>
                <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" autocomplete=\"current-password\" placeholder=\"••••••••\" required>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("authenticate"), "html", null, true);
        yield "\">

            <button type=\"submit\" class=\"btn-submit\">Se connecter</button>
            
            <a href=\"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password");
        yield "\" class=\"forgot-password\">Mot de passe oublié ?</a>
        </form>

        <div class=\"divider\">ou continuer avec</div>

        <a href=\"#\" class=\"btn-social btn-google\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 48 48\">
                <path fill=\"#FFC107\" d=\"M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z\"/>
                <path fill=\"#FF3D00\" d=\"M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z\"/>
                <path fill=\"#4CAF50\" d=\"M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z\"/>
                <path fill=\"#1976D2\" d=\"M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z\"/>
            </svg>
            S'authentifier avec Google
        </a>

        <a href=\"#\" class=\"btn-social btn-faceid\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <path d=\"M3 7V5a2 2 0 0 1 2-2h2\"></path>
                <path d=\"M17 3h2a2 2 0 0 1 2 2v2\"></path>
                <path d=\"M21 17v2a2 2 0 0 1-2 2h-2\"></path>
                <path d=\"M7 21H5a2 2 0 0 1-2-2v-2\"></path>
                <path d=\"M8 14s1.5 2 4 2 4-2 4-2\"></path>
                <line x1=\"9\" y1=\"9\" x2=\"9.01\" y2=\"9\"></line>
                <line x1=\"15\" y1=\"9\" x2=\"15.01\" y2=\"9\"></line>
            </svg>
            S'authentifier avec FaceID
        </a>
    </div>
</div>

<script>
    // Logic for Floating Particles Background
    const canvas = document.getElementById('particles-canvas');
    const ctx = canvas.getContext('2d');
    
    let particlesArray;

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    window.addEventListener('resize', function() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        init();
    });

    class Particle {
        constructor(x, y, directionX, directionY, size, color) {
            this.x = x;
            this.y = y;
            this.directionX = directionX;
            this.directionY = directionY;
            this.size = size;
            this.color = color;
        }
        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2, false);
            ctx.fillStyle = '#3b82f6';
            ctx.fill();
        }
        update() {
            if (this.x > canvas.width || this.x < 0) {
                this.directionX = -this.directionX;
            }
            if (this.y > canvas.height || this.y < 0) {
                this.directionY = -this.directionY;
            }
            this.x += this.directionX;
            this.y += this.directionY;
            this.draw();
        }
    }

    function init() {
        particlesArray = [];
        let numberOfParticles = (canvas.height * canvas.width) / 9000;
        for (let i = 0; i < numberOfParticles; i++) {
            let size = (Math.random() * 2) + 1;
            let x = (Math.random() * ((innerWidth - size * 2) - (size * 2)) + size * 2);
            let y = (Math.random() * ((innerHeight - size * 2) - (size * 2)) + size * 2);
            let directionX = (Math.random() * 1) - 0.5;
            let directionY = (Math.random() * 1) - 0.5;
            let color = '#3b82f6';
            particlesArray.push(new Particle(x, y, directionX, directionY, size, color));
        }
    }

    function connect() {
        let opacityValue = 1;
        for (let a = 0; a < particlesArray.length; a++) {
            for (let b = a; b < particlesArray.length; b++) {
                let distance = ((particlesArray[a].x - particlesArray[b].x) * (particlesArray[a].x - particlesArray[b].x))
                + ((particlesArray[a].y - particlesArray[b].y) * (particlesArray[a].y - particlesArray[b].y));
                if (distance < (canvas.width / 7) * (canvas.height / 7)) {
                    opacityValue = 1 - (distance / 20000);
                    ctx.strokeStyle = 'rgba(59, 130, 246,' + opacityValue + ')';
                    ctx.lineWidth = 1;
                    ctx.beginPath();
                    ctx.moveTo(particlesArray[a].x, particlesArray[a].y);
                    ctx.lineTo(particlesArray[b].x, particlesArray[b].y);
                    ctx.stroke();
                }
            }
        }
    }

    function animate() {
        requestAnimationFrame(animate);
        ctx.clearRect(0, 0, innerWidth, innerHeight);
        for (let i = 0; i < particlesArray.length; i++) {
            particlesArray[i].update();
        }
        connect();
    }

    init();
    animate();
</script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/index.html.twig";
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
        return array (  201 => 141,  194 => 137,  183 => 129,  177 => 125,  171 => 122,  168 => 121,  166 => 120,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Connexion - Boussole</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
        body { 
            position: relative; display: flex; align-items: center; justify-content: center; min-height: 100vh;
            background-color: #0f172a; overflow: hidden;
        }
        
        /* Particles Canvas */
        #particles-canvas {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1; pointer-events: none;
        }

        /* Layout Container */
        .layout-wrapper {
            position: relative; z-index: 2;
            display: flex; width: 1000px; max-width: 95%; min-height: 600px;
            background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(15px);
            border-radius: 20px; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5);
            border: 1px solid rgba(255,255,255,0.1); overflow: hidden;
            animation: fadeIn 0.6s ease-out;
        }
        @keyframes fadeIn { from { opacity: 0; transform: scale(0.95); } to { opacity: 1; transform: scale(1); } }

        /* Left Side: Branding / Logo */
        .branding-section {
            flex: 1; display: flex; flex-direction: column; align-items: center; justify-content: center;
            padding: 40px; text-align: center; color: white;
            background: linear-gradient(135deg, rgba(30, 60, 114, 0.7) 0%, rgba(42, 82, 152, 0.9) 100%);
        }
        .branding-section .logo-placeholder { margin-bottom: 20px; }
        .branding-section h1 { font-size: 36px; font-weight: 700; margin-bottom: 10px; letter-spacing: 1px; }
        .branding-section p { font-size: 16px; color: #e2e8f0; line-height: 1.5; max-width: 300px; }

        /* Right Side: Login form */
        .login-section {
            width: 450px; background: #ffffff; padding: 50px 45px;
            display: flex; flex-direction: column; justify-content: center;
        }
        
        .login-header { margin-bottom: 25px; }
        .login-header h2 { font-size: 26px; font-weight: 700; color: #1e293b; margin-bottom: 5px; }
        .login-header p { font-size: 14px; color: #64748b; }

        .form-group { margin-bottom: 18px; }
        .form-group label { display: block; font-size: 13.5px; font-weight: 600; color: #475569; margin-bottom: 6px; }
        .form-control {
            width: 100%; padding: 12px 15px; font-size: 15px; border: 1.5px solid #e2e8f0;
            border-radius: 8px; transition: all 0.3s ease; color: #1e293b;
        }
        .form-control:focus { outline: none; border-color: #3b82f6; box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15); }
        
        .btn-submit {
            width: 100%; padding: 13px; background: linear-gradient(to right, #1e3c72, #2a5298);
            border: none; border-radius: 8px; color: white; font-size: 15px; font-weight: 600;
            cursor: pointer; transition: transform 0.2s, box-shadow 0.2s; margin-top: 10px;
        }
        .btn-submit:hover { transform: translateY(-2px); box-shadow: 0 8px 15px rgba(30, 60, 114, 0.25); }
        
        .alert { padding: 12px 15px; border-radius: 8px; margin-bottom: 20px; font-size: 14px; }
        .alert-error { background-color: #fee2e2; color: #b91c1c; border: 1px solid #fecaca; }
        
        .forgot-password { display: block; text-align: right; margin-top: 12px; font-size: 13px; color: #3b82f6; text-decoration: none; font-weight: 500; }
        .forgot-password:hover { text-decoration: underline; }
        
        .divider { display: flex; align-items: center; text-align: center; margin: 25px 0; color: #94a3b8; font-size: 13px; font-weight: 500; }
        .divider::before, .divider::after { content: ''; flex: 1; border-bottom: 1px solid #e2e8f0; }
        .divider:not(:empty)::before { margin-right: .5em; }
        .divider:not(:empty)::after { margin-left: .5em; }
        
        .btn-social {
            display: flex; align-items: center; justify-content: center; gap: 10px;
            width: 100%; padding: 12px; margin-bottom: 12px; border-radius: 8px;
            font-size: 14.5px; font-weight: 500; cursor: pointer; transition: all 0.2s ease; text-decoration: none;
        }
        .btn-google { background-color: #fff; color: #475569; border: 1px solid #e2e8f0; }
        .btn-google:hover { background-color: #f8fafc; border-color: #cbd5e1; box-shadow: 0 2px 4px rgba(0,0,0,0.02); }
        .btn-faceid { background-color: #0f172a; color: #fff; border: 1px solid #0f172a; }
        .btn-faceid:hover { background-color: #1e293b; box-shadow: 0 4px 10px rgba(0,0,0,0.15); }
        .btn-social svg { width: 20px; height: 20px; }

        @media screen and (max-width: 800px) {
            .layout-wrapper { flex-direction: column; height: auto; max-width: 450px; }
            .branding-section { padding: 30px; display:none; /* hide on small devices or show small version */ }
            .login-section { width: 100%; padding: 40px 30px; }
        }
    </style>
</head>
<body>

<canvas id=\"particles-canvas\"></canvas>

<div class=\"layout-wrapper\">
    <!-- Section Gauche : Logo et Branding -->
    <div class=\"branding-section\">
        <div class=\"logo-placeholder\">
            <!-- Icône Boussole par défaut (jusqu'à ce que vous mettiez votre vrai logo) -->
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"80\" height=\"80\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                <polygon points=\"16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76\"></polygon>
            </svg>
        </div>
        <h1>Boussole</h1>
        <p>Votre plateforme d'orientation et d'opportunités. Connectez-vous pour explorer de nouveaux horizons.</p>
    </div>

    <!-- Section Droite : Formulaire -->
    <div class=\"login-section\">
        <div class=\"login-header\">
            <h2>Bienvenue</h2>
            <p>Accédez à votre espace personnel</p>
        </div>

        {% if error %}
            <div class=\"alert alert-error\">
                {{ error.messageKey|trans(error.messageData, 'security') }}
            </div>
        {% endif %}

        <form method=\"post\">
            <div class=\"form-group\">
                <label for=\"username\">Email</label>
                <input type=\"email\" value=\"{{ last_username }}\" name=\"_username\" id=\"username\" class=\"form-control\" autocomplete=\"email\" placeholder=\"exemple@email.com\" required autofocus>
            </div>

            <div class=\"form-group\">
                <label for=\"password\">Mot de passe</label>
                <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" autocomplete=\"current-password\" placeholder=\"••••••••\" required>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

            <button type=\"submit\" class=\"btn-submit\">Se connecter</button>
            
            <a href=\"{{ path('app_forgot_password') }}\" class=\"forgot-password\">Mot de passe oublié ?</a>
        </form>

        <div class=\"divider\">ou continuer avec</div>

        <a href=\"#\" class=\"btn-social btn-google\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 48 48\">
                <path fill=\"#FFC107\" d=\"M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z\"/>
                <path fill=\"#FF3D00\" d=\"M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z\"/>
                <path fill=\"#4CAF50\" d=\"M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z\"/>
                <path fill=\"#1976D2\" d=\"M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z\"/>
            </svg>
            S'authentifier avec Google
        </a>

        <a href=\"#\" class=\"btn-social btn-faceid\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <path d=\"M3 7V5a2 2 0 0 1 2-2h2\"></path>
                <path d=\"M17 3h2a2 2 0 0 1 2 2v2\"></path>
                <path d=\"M21 17v2a2 2 0 0 1-2 2h-2\"></path>
                <path d=\"M7 21H5a2 2 0 0 1-2-2v-2\"></path>
                <path d=\"M8 14s1.5 2 4 2 4-2 4-2\"></path>
                <line x1=\"9\" y1=\"9\" x2=\"9.01\" y2=\"9\"></line>
                <line x1=\"15\" y1=\"9\" x2=\"15.01\" y2=\"9\"></line>
            </svg>
            S'authentifier avec FaceID
        </a>
    </div>
</div>

<script>
    // Logic for Floating Particles Background
    const canvas = document.getElementById('particles-canvas');
    const ctx = canvas.getContext('2d');
    
    let particlesArray;

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    window.addEventListener('resize', function() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        init();
    });

    class Particle {
        constructor(x, y, directionX, directionY, size, color) {
            this.x = x;
            this.y = y;
            this.directionX = directionX;
            this.directionY = directionY;
            this.size = size;
            this.color = color;
        }
        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2, false);
            ctx.fillStyle = '#3b82f6';
            ctx.fill();
        }
        update() {
            if (this.x > canvas.width || this.x < 0) {
                this.directionX = -this.directionX;
            }
            if (this.y > canvas.height || this.y < 0) {
                this.directionY = -this.directionY;
            }
            this.x += this.directionX;
            this.y += this.directionY;
            this.draw();
        }
    }

    function init() {
        particlesArray = [];
        let numberOfParticles = (canvas.height * canvas.width) / 9000;
        for (let i = 0; i < numberOfParticles; i++) {
            let size = (Math.random() * 2) + 1;
            let x = (Math.random() * ((innerWidth - size * 2) - (size * 2)) + size * 2);
            let y = (Math.random() * ((innerHeight - size * 2) - (size * 2)) + size * 2);
            let directionX = (Math.random() * 1) - 0.5;
            let directionY = (Math.random() * 1) - 0.5;
            let color = '#3b82f6';
            particlesArray.push(new Particle(x, y, directionX, directionY, size, color));
        }
    }

    function connect() {
        let opacityValue = 1;
        for (let a = 0; a < particlesArray.length; a++) {
            for (let b = a; b < particlesArray.length; b++) {
                let distance = ((particlesArray[a].x - particlesArray[b].x) * (particlesArray[a].x - particlesArray[b].x))
                + ((particlesArray[a].y - particlesArray[b].y) * (particlesArray[a].y - particlesArray[b].y));
                if (distance < (canvas.width / 7) * (canvas.height / 7)) {
                    opacityValue = 1 - (distance / 20000);
                    ctx.strokeStyle = 'rgba(59, 130, 246,' + opacityValue + ')';
                    ctx.lineWidth = 1;
                    ctx.beginPath();
                    ctx.moveTo(particlesArray[a].x, particlesArray[a].y);
                    ctx.lineTo(particlesArray[b].x, particlesArray[b].y);
                    ctx.stroke();
                }
            }
        }
    }

    function animate() {
        requestAnimationFrame(animate);
        ctx.clearRect(0, 0, innerWidth, innerHeight);
        for (let i = 0; i < particlesArray.length; i++) {
            particlesArray[i].update();
        }
        connect();
    }

    init();
    animate();
</script>
</body>
</html>
", "login/index.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\login\\index.html.twig");
    }
}
