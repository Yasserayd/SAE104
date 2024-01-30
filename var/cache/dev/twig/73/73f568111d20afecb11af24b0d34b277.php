<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* plus/plus.html.twig */
class __TwigTemplate_fc34392c406185befc319c69e2856b18 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plus/plus.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plus/plus.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "plus/plus.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "A propos de moi ! ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<body data-aos-easing=\"ease-out-quad\" data-aos-duration=\"700\" data-aos-delay=\"0\">
            
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12 col-md-10 col-lg-8 text-center\">

\t\t\t\t
\t\t\t\t<h1 class=\"display-2 text-black\">
\t\t\t\t\t<u>En Savoir Plus</u>
\t\t\t\t</h1>

\t\t\t\t


\t\t\t\t<!-- Button -->
\t\t\t\t<a href=\"/\" class=\"btn btn-primary lift\">
\t\t\t\t\tRevenir a la page d'acceuil
\t\t\t\t\t<i class=\"fe fe-arrow-right ms-3\"></i>
\t\t\t\t</a>

\t\t\t</div>
\t\t</div>
\t\t<!-- / .row -->
\t</div>
\t<!-- / .container -->

\t\t<!-- / .row -->
\t</div>
\t<!-- / .container -->
</section>
    <!-- ARTICLES -->
<section class=\"pb-8 pt-7 pb-md-11 pt-md-10\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">

                <h2 class=\"mb-0\">
\t\t\t\t\tPassions :
\t\t\t\t</h2>
<p> <strong>
    Football : <br>
</strong>
Le football, ma passion ! Je suis un fan inconditionnel du Real Madrid et je soutiens également l'équipe nationale marocaine. Grâce à mon père,
j'ai découvert cette passion dès mon jeune âge et depuis, elle ne cesse de grandir.<br>
Le football est bien plus qu'un simple sport pour moi, c'est une source d'émotions intenses, de camaraderie et de joie pure.<br>
<hr>
<strong>MMA :</strong><br>
Le MMA, ma passion ! Je suis un fan inconditionnel du combattant Mohamed Ali et je soutiens son talent exceptionnel sur le ring. J'ai découvert le MMA par moi-même en naviguant sur Twitter, et depuis ce moment, je suis fasciné par l'intensité et la technique de ce sport. Le MMA représente pour moi un défi constant, un mélange d'habileté, de courage et de discipline.<br>
Je suis inspiré par les combattants qui repoussent leurs limites et se surpassent dans chaque combat.<br>
<hr>
<strong>Streaming :</strong><br>
Depuis plus de 2 ans j'ai developpé une enorme passion pour le streaming sur Twitch.<br>
Dans ce domaine , j'ai recontré des personnes formidables qui font partie de mon quotidien et j'arrive a subvenir a mes besoins tout seul.<br>
\t</p>
\t<img loading=\"lazy\" width=\"320\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.discordapp.com/attachments/1173939068917260358/1201814017081872384/IMG_1444.jpg?ex=65cb2f86&is=65b8ba86&hm=b291aab2f2c6778320e1cb5350381a61a03a65f901575a5a66318806e4074e5a&"), "html", null, true);
        echo "\" />
\t<img loading=\"lazy\" width=\"700\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.discordapp.com/attachments/1173939068917260358/1201814762359631872/IMG_4029.png?ex=65cb3037&is=65b8bb37&hm=2ff7dfb7903171b0e30a200f2068075b44adb6261416e016a89d60d0925a4d23&"), "html", null, true);
        echo "\" />



\t<!-- / .container -->
</section>
        <!-- SHAPE -->
<div class=\"position-relative\">
\t<div class=\"shape shape-bottom shape-fluid-x svg-shim text-dark\">
\t\t<svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z\" fill=\"currentColor\"></path></svg>
\t</div>
</div>

</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("home"), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "plus/plus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 78,  174 => 77,  149 => 61,  145 => 60,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}A propos de moi ! {% endblock %}

{% block body %}
<body data-aos-easing=\"ease-out-quad\" data-aos-duration=\"700\" data-aos-delay=\"0\">
            
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12 col-md-10 col-lg-8 text-center\">

\t\t\t\t
\t\t\t\t<h1 class=\"display-2 text-black\">
\t\t\t\t\t<u>En Savoir Plus</u>
\t\t\t\t</h1>

\t\t\t\t


\t\t\t\t<!-- Button -->
\t\t\t\t<a href=\"/\" class=\"btn btn-primary lift\">
\t\t\t\t\tRevenir a la page d'acceuil
\t\t\t\t\t<i class=\"fe fe-arrow-right ms-3\"></i>
\t\t\t\t</a>

\t\t\t</div>
\t\t</div>
\t\t<!-- / .row -->
\t</div>
\t<!-- / .container -->

\t\t<!-- / .row -->
\t</div>
\t<!-- / .container -->
</section>
    <!-- ARTICLES -->
<section class=\"pb-8 pt-7 pb-md-11 pt-md-10\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">

                <h2 class=\"mb-0\">
\t\t\t\t\tPassions :
\t\t\t\t</h2>
<p> <strong>
    Football : <br>
</strong>
Le football, ma passion ! Je suis un fan inconditionnel du Real Madrid et je soutiens également l'équipe nationale marocaine. Grâce à mon père,
j'ai découvert cette passion dès mon jeune âge et depuis, elle ne cesse de grandir.<br>
Le football est bien plus qu'un simple sport pour moi, c'est une source d'émotions intenses, de camaraderie et de joie pure.<br>
<hr>
<strong>MMA :</strong><br>
Le MMA, ma passion ! Je suis un fan inconditionnel du combattant Mohamed Ali et je soutiens son talent exceptionnel sur le ring. J'ai découvert le MMA par moi-même en naviguant sur Twitter, et depuis ce moment, je suis fasciné par l'intensité et la technique de ce sport. Le MMA représente pour moi un défi constant, un mélange d'habileté, de courage et de discipline.<br>
Je suis inspiré par les combattants qui repoussent leurs limites et se surpassent dans chaque combat.<br>
<hr>
<strong>Streaming :</strong><br>
Depuis plus de 2 ans j'ai developpé une enorme passion pour le streaming sur Twitch.<br>
Dans ce domaine , j'ai recontré des personnes formidables qui font partie de mon quotidien et j'arrive a subvenir a mes besoins tout seul.<br>
\t</p>
\t<img loading=\"lazy\" width=\"320\" src=\"{{ asset('https://cdn.discordapp.com/attachments/1173939068917260358/1201814017081872384/IMG_1444.jpg?ex=65cb2f86&is=65b8ba86&hm=b291aab2f2c6778320e1cb5350381a61a03a65f901575a5a66318806e4074e5a&') }}\" />
\t<img loading=\"lazy\" width=\"700\" src=\"{{ asset('https://cdn.discordapp.com/attachments/1173939068917260358/1201814762359631872/IMG_4029.png?ex=65cb3037&is=65b8bb37&hm=2ff7dfb7903171b0e30a200f2068075b44adb6261416e016a89d60d0925a4d23&') }}\" />



\t<!-- / .container -->
</section>
        <!-- SHAPE -->
<div class=\"position-relative\">
\t<div class=\"shape shape-bottom shape-fluid-x svg-shim text-dark\">
\t\t<svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z\" fill=\"currentColor\"></path></svg>
\t</div>
</div>

</body>
{% endblock %}

{% block javascripts %}
    {{ encore_entry_script_tags('home') }}
{% endblock %}
", "plus/plus.html.twig", "C:\\Users\\userlocal\\Desktop\\SAE104 Yassir\\templates\\plus\\plus.html.twig");
    }
}
