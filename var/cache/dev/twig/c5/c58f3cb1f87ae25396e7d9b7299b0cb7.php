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

/* plus/index.html.twig */
class __TwigTemplate_49eecc1de5a4e9fa722ff9abf83aaf04 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plus/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plus/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "plus/index.html.twig", 1);
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
\t\t\t\t<a href=\"/templates/home/\" class=\"btn btn-primary lift\">
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

    // line 75
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("home"), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "plus/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 76,  166 => 75,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
\t\t\t\t<a href=\"/templates/home/\" class=\"btn btn-primary lift\">
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
", "plus/index.html.twig", "C:\\Users\\userlocal\\Desktop\\SAE104 Yassir\\templates\\plus\\index.html.twig");
    }
}
