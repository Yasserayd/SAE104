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

/* cv/cv.html.twig */
class __TwigTemplate_d6244b873a00200f0bfdb20ffe068521 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv/cv.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv/cv.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cv/cv.html.twig", 1);
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

        echo "Mon CV !";
        
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
            <!-- WELCOME -->
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12 col-md-10 col-lg-8 text-center\">

\t\t\t\t
\t\t\t\t<h1 class=\"display-2 text-black\">
\t\t\t\t\t<u>Mon CV :</u>
\t\t\t\t</h1>

\t\t\t</div>
\t\t</div>

\t</div>

\t\t
\t\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12 col-md-10 col-lg-8 text-center\">

</div>
    <section>
\t<h4><h4>
\t<div class=\"contener\"> 
\t    <div class=\"contener\"> 
 
        <strong><h3>Competences<h3></strong>
        
        <p>
\t\t- Création de site Web<br> 
\t\t- Programmations en C, Python<br> 
\t\t- Création , Géstion d'un réseau<br> 
\t\t- Polyglotte : Exellente maitrise du Français , Anglais , Arabe , Espagnol<br> 
\t\t- Accueils des clients.<br> 
\t\t- Travaille en équipe.<br> 
\t\t</p>
 
    </div>

\t<div class=\"contener\">

        <h3>Experience professionnel </h3>
        <p>- Professeur particulier pour collégiens en Mathematique<br></p>
\t\t
    </div>

        <div class=\"contener\"> 
            <h3> Formations <h3>

            <p>2019-2020 : Brevet des collège mention Trés Bien<br> 
            2022-2023 : Bac Générale au Maroc , spécialité mathématique / Mention Trés Bien<br> 
\t\t\tActuellement : BUT Réseaux et Télécommunication, IUT de Roanne.</p>
        </div>


</div>
    </section>
<style> 
.cas{
width: 7px;
margin: auto;
font-family: 'calibri',sans-serif;
font-size: 2px;
border: 4px solid black;
border-radius: 1px;
padding:24px;
}
.contener{
    text-align: center;
}
 
 h4 , h3 {
    font-size: 25px;
    border-bottom: 4px solid skyblue;
 }
body{
background-repeat: no-repeat;
background-size: 10vw 10vh;
} 
</style>
\t</div>
\t
</section>
<center>
<h2>Accéder au CV</h2>

<p>Cliquez sur le bouton ci-dessous pour acceder au CV :</p>
<a href=\"/form\" class=\"btn btn-primary lift\">
\t<button>S'inscrire</button>
</a>
</center>

\t\t\t\t\t\t<a class=\"card-meta\" href=\"/actualites/lancement-du-site-internet\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<hr class=\"card-meta-divider\">

\t\t\t\t\t\t</a>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t
<div class=\"position-relative\">
\t<div class=\"shape shape-bottom shape-fluid-x svg-shim text-dark\">
\t\t<svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z\" fill=\"currentColor\"></path></svg>
\t</div>

</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 119
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 120
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("home"), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cv/cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 120,  210 => 119,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon CV !{% endblock %}

{% block body %}
<body data-aos-easing=\"ease-out-quad\" data-aos-duration=\"700\" data-aos-delay=\"0\">
            <!-- WELCOME -->
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12 col-md-10 col-lg-8 text-center\">

\t\t\t\t
\t\t\t\t<h1 class=\"display-2 text-black\">
\t\t\t\t\t<u>Mon CV :</u>
\t\t\t\t</h1>

\t\t\t</div>
\t\t</div>

\t</div>

\t\t
\t\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12 col-md-10 col-lg-8 text-center\">

</div>
    <section>
\t<h4><h4>
\t<div class=\"contener\"> 
\t    <div class=\"contener\"> 
 
        <strong><h3>Competences<h3></strong>
        
        <p>
\t\t- Création de site Web<br> 
\t\t- Programmations en C, Python<br> 
\t\t- Création , Géstion d'un réseau<br> 
\t\t- Polyglotte : Exellente maitrise du Français , Anglais , Arabe , Espagnol<br> 
\t\t- Accueils des clients.<br> 
\t\t- Travaille en équipe.<br> 
\t\t</p>
 
    </div>

\t<div class=\"contener\">

        <h3>Experience professionnel </h3>
        <p>- Professeur particulier pour collégiens en Mathematique<br></p>
\t\t
    </div>

        <div class=\"contener\"> 
            <h3> Formations <h3>

            <p>2019-2020 : Brevet des collège mention Trés Bien<br> 
            2022-2023 : Bac Générale au Maroc , spécialité mathématique / Mention Trés Bien<br> 
\t\t\tActuellement : BUT Réseaux et Télécommunication, IUT de Roanne.</p>
        </div>


</div>
    </section>
<style> 
.cas{
width: 7px;
margin: auto;
font-family: 'calibri',sans-serif;
font-size: 2px;
border: 4px solid black;
border-radius: 1px;
padding:24px;
}
.contener{
    text-align: center;
}
 
 h4 , h3 {
    font-size: 25px;
    border-bottom: 4px solid skyblue;
 }
body{
background-repeat: no-repeat;
background-size: 10vw 10vh;
} 
</style>
\t</div>
\t
</section>
<center>
<h2>Accéder au CV</h2>

<p>Cliquez sur le bouton ci-dessous pour acceder au CV :</p>
<a href=\"/form\" class=\"btn btn-primary lift\">
\t<button>S'inscrire</button>
</a>
</center>

\t\t\t\t\t\t<a class=\"card-meta\" href=\"/actualites/lancement-du-site-internet\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<hr class=\"card-meta-divider\">

\t\t\t\t\t\t</a>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t
<div class=\"position-relative\">
\t<div class=\"shape shape-bottom shape-fluid-x svg-shim text-dark\">
\t\t<svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z\" fill=\"currentColor\"></path></svg>
\t</div>

</body>
{% endblock %}

{% block javascripts %}
    {{ encore_entry_script_tags('home') }}
{% endblock %}
", "cv/cv.html.twig", "C:\\Users\\userlocal\\Desktop\\SAE104 Yassir\\templates\\cv\\cv.html.twig");
    }
}
