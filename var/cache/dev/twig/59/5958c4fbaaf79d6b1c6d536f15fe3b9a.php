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

/* portfolio/portfolio.html.twig */
class __TwigTemplate_fd55ed3d3f3cb1554dcecb68a5859196 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/portfolio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/portfolio.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/portfolio.html.twig", 1);
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

        echo "Mon Portfolio !";
        
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

\t\t\t\t<!-- Heading -->
\t\t\t\t<h1 class=\"display-2 text-black\">
\t\t\t\t\t<u>Mon Portfolio :</u>
\t\t\t\t</h1>

\t\t\t</div>
\t\t</div>
<style>

.container {
  width: 100%;
}

.skills {
  text-align: right;
  padding-top: 10px;
  padding-bottom: 10px;
  color: rgb(255, 254, 254);
}

.html {width: 100%; background-color: #04AA6D;}
.css {width: 80%; background-color: #2196F3;}
.python {width: 70%; background-color: #04AA6D;}
.c {width: 90%; background-color: #808080;}
.admin {width: 75%; background-color: #e64d19;}
.reseau {width: 60%; background-color: #04AA6D;}
.projet {width: 90%; background-color: #000000;}
.anglais {width: 80%; background-color: #020302;}

</style>
<body>

<h1>Mes compétences :</h1>

<p>Maîtriser les lois fondamentales de l’électricité afin d’intervenir sur des équipements de réseaux et télécommunications
</p>
<div class=\"container\">
  <div class=\"skills css\">75%</div>
</div>


<p> Comprendre les principes et standards du codage de l’information
</p>
<div class=\"container\">
  <div class=\"skills html\">85%</div>
</div>



<p>Configurer les fonctions de base du réseau local
</p>
<div class=\"container\">
  <div class=\"skills python\">50%</div>
</div>

<p>Maîtriser les rôles et les principes fondamentaux des systèmes d’exploitation afin d’interagir avec ceux-ci pour la configuration et
\tadministration des réseaux et services fournis </p>
<div class=\"container\">
  <div class=\"skills c\">60%</div>
</div>

<p>Savoir identifier les dysfonctionnements du réseau local
</p>
<div class=\"container\">
  <div class=\"skills admin\">70%</div>
</div>

<p>Installer un poste client
</p>
<div class=\"container\">
  <div class=\"skills reseau\">50%</div>
</div>

<p> Mesurer et analyser les signaux</p>
<div class=\"container\">
  <div class=\"skills projet\">75%</div>
</div>


<p>Déployer des supports de transmission</p>
<div class=\"container\">
  <div class=\"skills anglais\">100%</div>
</div>
<p> </p>
<p> </p>
<div class=\"container\">
</div>
<p> </p>



  <!-- Meta -->
\t\t\t\t\t\t<a class=\"card-meta\" href=\"\">

\t\t\t\t\t\t\t<!-- Divider -->
\t\t\t\t\t\t</a>

</body>
<a class=\"card-meta\" href=\"/actualites/lancement-du-site-internet\">

\t\t\t\t\t\t\t<!-- Divider -->
\t\t\t\t\t\t\t<hr class=\"card-meta-divider\">

\t\t\t\t\t\t</a>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t<!-- / .row -->
        
\t</div>
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

    // line 136
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("home"), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "portfolio/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 137,  227 => 136,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Portfolio !{% endblock %}

{% block body %}
<body data-aos-easing=\"ease-out-quad\" data-aos-duration=\"700\" data-aos-delay=\"0\">
                        <!-- WELCOME -->
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12 col-md-10 col-lg-8 text-center\">

\t\t\t\t<!-- Heading -->
\t\t\t\t<h1 class=\"display-2 text-black\">
\t\t\t\t\t<u>Mon Portfolio :</u>
\t\t\t\t</h1>

\t\t\t</div>
\t\t</div>
<style>

.container {
  width: 100%;
}

.skills {
  text-align: right;
  padding-top: 10px;
  padding-bottom: 10px;
  color: rgb(255, 254, 254);
}

.html {width: 100%; background-color: #04AA6D;}
.css {width: 80%; background-color: #2196F3;}
.python {width: 70%; background-color: #04AA6D;}
.c {width: 90%; background-color: #808080;}
.admin {width: 75%; background-color: #e64d19;}
.reseau {width: 60%; background-color: #04AA6D;}
.projet {width: 90%; background-color: #000000;}
.anglais {width: 80%; background-color: #020302;}

</style>
<body>

<h1>Mes compétences :</h1>

<p>Maîtriser les lois fondamentales de l’électricité afin d’intervenir sur des équipements de réseaux et télécommunications
</p>
<div class=\"container\">
  <div class=\"skills css\">75%</div>
</div>


<p> Comprendre les principes et standards du codage de l’information
</p>
<div class=\"container\">
  <div class=\"skills html\">85%</div>
</div>



<p>Configurer les fonctions de base du réseau local
</p>
<div class=\"container\">
  <div class=\"skills python\">50%</div>
</div>

<p>Maîtriser les rôles et les principes fondamentaux des systèmes d’exploitation afin d’interagir avec ceux-ci pour la configuration et
\tadministration des réseaux et services fournis </p>
<div class=\"container\">
  <div class=\"skills c\">60%</div>
</div>

<p>Savoir identifier les dysfonctionnements du réseau local
</p>
<div class=\"container\">
  <div class=\"skills admin\">70%</div>
</div>

<p>Installer un poste client
</p>
<div class=\"container\">
  <div class=\"skills reseau\">50%</div>
</div>

<p> Mesurer et analyser les signaux</p>
<div class=\"container\">
  <div class=\"skills projet\">75%</div>
</div>


<p>Déployer des supports de transmission</p>
<div class=\"container\">
  <div class=\"skills anglais\">100%</div>
</div>
<p> </p>
<p> </p>
<div class=\"container\">
</div>
<p> </p>



  <!-- Meta -->
\t\t\t\t\t\t<a class=\"card-meta\" href=\"\">

\t\t\t\t\t\t\t<!-- Divider -->
\t\t\t\t\t\t</a>

</body>
<a class=\"card-meta\" href=\"/actualites/lancement-du-site-internet\">

\t\t\t\t\t\t\t<!-- Divider -->
\t\t\t\t\t\t\t<hr class=\"card-meta-divider\">

\t\t\t\t\t\t</a>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t<!-- / .row -->
        
\t</div>
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
", "portfolio/portfolio.html.twig", "C:\\Users\\userlocal\\Desktop\\SAE104 Yassir\\templates\\portfolio\\portfolio.html.twig");
    }
}
