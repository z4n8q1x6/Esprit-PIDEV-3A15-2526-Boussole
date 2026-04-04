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

/* login/forgot_password.html.twig */
class __TwigTemplate_5e94d00c72bcac3a47ee0c3c1313a83f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/forgot_password.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Mot de passe oublié - Boussole</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
        body { 
            position: relative;
            display: flex; align-items: center; justify-content: center; min-height: 100vh;
            background-color: #0f172a; /* Match login page */
            overflow: hidden;
            color: white;
        }

        /* Particles Canvas */
        #particles-canvas {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1; pointer-events: none;
        }

        .forgot-container {
            position: relative; z-index: 2;
            background-color: rgba(17, 24, 39, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 14px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.5), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            padding: 40px;
            width: 100%;
            max-width: 450px;
            text-align: center;
            animation: fadeIn 0.4s ease-out;
            backdrop-filter: blur(15px);
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .icon { font-size: 40px; margin-bottom: 20px; }
        h2 { font-size: 24px; font-weight: 700; margin-bottom: 10px; }
        p { font-size: 14px; color: #94a3b8; margin-bottom: 30px; line-height: 1.5; }
        .form-group { text-align: left; margin-bottom: 25px; }
        label { display: block; font-size: 12px; font-weight: 600; color: #cbd5f5; margin-bottom: 8px; }

        input[type=\"email\"] {
            width: 100%; padding: 12px; font-size: 13px; background-color: #020617;
            border: 1px solid #1e293b; color: white; border-radius: 10px; transition: all 0.3s;
        }
        input[type=\"email\"]::placeholder { color: #475569; }
        input[type=\"email\"]:focus { outline: none; border-color: #0ea5e9; box-shadow: 0 0 0 2px rgba(14, 165, 233, 0.2); }

        .btn-send {
            width: 100%; padding: 12px; background-color: #0ea5e9; color: white;
            border: none; border-radius: 10px; font-size: 14px; font-weight: 700;
            cursor: pointer; transition: background-color 0.2s, transform 0.1s;
        }
        .btn-send:hover { background-color: #0284c7; }
        .btn-send:active { transform: scale(0.98); }

        .link-back { display: inline-block; margin-top: 25px; color: #94a3b8; text-decoration: none; font-size: 13px; transition: color 0.2s; }
        .link-back:hover { color: #e2e8f0; text-decoration: underline; }
    </style>
</head>
<body>

<canvas id=\"particles-canvas\"></canvas>

<div class=\"forgot-container\">
    <div class=\"icon\">🔒</div>
    <h2>Mot de passe oublié ?</h2>
    <p>Entrez votre adresse email et nous vous enverrons un lien pour réinitialiser votre mot de passe.</p>

    <form method=\"post\" action=\"#\">
        <div class=\"form-group\">
            <label for=\"email\">Email</label>
            <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Entrez votre email\" required autofocus>
        </div>

        <button type=\"submit\" class=\"btn-send\">Envoyer le lien</button>
    </form>

    <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"link-back\">← Retour à la connexion</a>
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
        return "login/forgot_password.html.twig";
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
        return array (  131 => 85,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Mot de passe oublié - Boussole</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
        body { 
            position: relative;
            display: flex; align-items: center; justify-content: center; min-height: 100vh;
            background-color: #0f172a; /* Match login page */
            overflow: hidden;
            color: white;
        }

        /* Particles Canvas */
        #particles-canvas {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1; pointer-events: none;
        }

        .forgot-container {
            position: relative; z-index: 2;
            background-color: rgba(17, 24, 39, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 14px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.5), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            padding: 40px;
            width: 100%;
            max-width: 450px;
            text-align: center;
            animation: fadeIn 0.4s ease-out;
            backdrop-filter: blur(15px);
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .icon { font-size: 40px; margin-bottom: 20px; }
        h2 { font-size: 24px; font-weight: 700; margin-bottom: 10px; }
        p { font-size: 14px; color: #94a3b8; margin-bottom: 30px; line-height: 1.5; }
        .form-group { text-align: left; margin-bottom: 25px; }
        label { display: block; font-size: 12px; font-weight: 600; color: #cbd5f5; margin-bottom: 8px; }

        input[type=\"email\"] {
            width: 100%; padding: 12px; font-size: 13px; background-color: #020617;
            border: 1px solid #1e293b; color: white; border-radius: 10px; transition: all 0.3s;
        }
        input[type=\"email\"]::placeholder { color: #475569; }
        input[type=\"email\"]:focus { outline: none; border-color: #0ea5e9; box-shadow: 0 0 0 2px rgba(14, 165, 233, 0.2); }

        .btn-send {
            width: 100%; padding: 12px; background-color: #0ea5e9; color: white;
            border: none; border-radius: 10px; font-size: 14px; font-weight: 700;
            cursor: pointer; transition: background-color 0.2s, transform 0.1s;
        }
        .btn-send:hover { background-color: #0284c7; }
        .btn-send:active { transform: scale(0.98); }

        .link-back { display: inline-block; margin-top: 25px; color: #94a3b8; text-decoration: none; font-size: 13px; transition: color 0.2s; }
        .link-back:hover { color: #e2e8f0; text-decoration: underline; }
    </style>
</head>
<body>

<canvas id=\"particles-canvas\"></canvas>

<div class=\"forgot-container\">
    <div class=\"icon\">🔒</div>
    <h2>Mot de passe oublié ?</h2>
    <p>Entrez votre adresse email et nous vous enverrons un lien pour réinitialiser votre mot de passe.</p>

    <form method=\"post\" action=\"#\">
        <div class=\"form-group\">
            <label for=\"email\">Email</label>
            <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Entrez votre email\" required autofocus>
        </div>

        <button type=\"submit\" class=\"btn-send\">Envoyer le lien</button>
    </form>

    <a href=\"{{ path('app_login') }}\" class=\"link-back\">← Retour à la connexion</a>
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
", "login/forgot_password.html.twig", "C:\\Users\\Technologie\\Desktop\\Esprit-PIDEV-3A15-2526-Boussole\\templates\\login\\forgot_password.html.twig");
    }
}
