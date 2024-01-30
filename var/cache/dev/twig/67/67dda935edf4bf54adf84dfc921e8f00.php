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

/* en/index.html.twig */
class __TwigTemplate_efc7ebaea047bd7d9fee4fb2d08bd550 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "en/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "en/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "en/index.html.twig", 1);
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

        echo "About Me ! ";
        
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
\t
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12 col-md-10 col-lg-8 text-center\">

\t\t\t\t
\t\t\t\t<h1 class=\"display-2 text-black\">
\t\t\t\t\t<u>El Ayadi Yassir</u>
\t\t\t\t</h1>

\t\t\t\t
\t\t\t\t<p class=\"lead text-white-75 mb-6\">
\t\t\t\t\tFirst year of the Bachelor's Degree in Network and Telecommunications (BUT RT). 
\t\t\t\t</p>

\t\t\t\t<!-- Button -->
\t\t\t\t<a href=\"/portfolio\" class=\"btn btn-primary lift\">
\t\t\t\t\tDiscover my portfolio.
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

\t\t\t\t<!-- Heading -->
\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\tPersonal Information:
\t\t\t\t</h2>

\t\t\t\t<!-- Text -->
\t\t\t\t<p class=\"mb-5 text-muted\">
\t\t\t\t\tMy name is Yassir El Ayadi, I am 18 years old, I am originally from Morocco, and I am in my first year of the Bachelor's Degree in Network and Telecommunications (BUT R&T) at the IUT of Roanne.

\t\t\t\t</p>
\t\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
                <h2 class=\"mb-0\">
\t\t\t\t\tBachelor's Degree in Network and Telecommunications :
\t\t\t\t</h2>
<p> The Bachelor's Degree in Network and Telecommunications aims to train intermediate-level professionals over a three-year period who are capable of implementing, configuring, and maintaining information systems and equipment while ensuring their physical and software security.

    The program welcomes students with diverse profiles, regardless of the specialized courses and optional subjects chosen during their general and technological high school studies. It is also open to higher education students wishing to change their career path.
\t</p>

\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t<h2 class=\"mb-0\">
\t\t\tObjectives :
\t\t</h2>

\t\t<p>
            To train higher-level technicians capable of defining, installing, managing, maintaining, and even marketing various types of telecommunications systems and computer networks.<br>

            Network administration<br>
            Connecting businesses and users<br>
            Creating tools and software applications for IT.<br>

\t\t</p>
<!-- Heading -->
\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t
\t\t\t\t</h2>

\t\t\t\t<!-- Text -->
\t\t\t\t<p class=\"mb-5 text-muted\">
\t\t\t\t\t
\t\t\t\t</p>
\t\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
                <h2 class=\"mb-0\">
\t\t\t\t\t
\t\t\t\t</h2>

\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t<div class=\"col-lg-4\">
\t\t\t
\t\t\t<a href=\"/en2\" class=\"btn btn-primary lift\">
\t\t\t\tMore About Me
\t\t\t\t<i class=\"fe fe-arrow-right ms-3\"></i>
\t\t\t</a>
\t\t\t<a href=\"/\" class=\"btn btn-primary lift\">
\t\t\t\tTranslate This Page
\t\t\t\t<i class=\"fe fe-arrow-right ms-3\"></i>
\t\t\t</a>
\t\t
\t\t\t\t\t\t<a class=\"card-meta\" href=\"/actualites/lancement-du-site-internet\">

\t\t\t\t\t\t
\t\t\t\t\t\t\t<hr class=\"card-meta-divider\">

\t\t\t\t\t\t</a>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t\t</div>
\t
        
\t</div>
>
</section>
       
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

    // line 134
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("home"), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "en/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 135,  225 => 134,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}About Me ! {% endblock %}

{% block body %}
<body data-aos-easing=\"ease-out-quad\" data-aos-duration=\"700\" data-aos-delay=\"0\">
\t
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12 col-md-10 col-lg-8 text-center\">

\t\t\t\t
\t\t\t\t<h1 class=\"display-2 text-black\">
\t\t\t\t\t<u>El Ayadi Yassir</u>
\t\t\t\t</h1>

\t\t\t\t
\t\t\t\t<p class=\"lead text-white-75 mb-6\">
\t\t\t\t\tFirst year of the Bachelor's Degree in Network and Telecommunications (BUT RT). 
\t\t\t\t</p>

\t\t\t\t<!-- Button -->
\t\t\t\t<a href=\"/portfolio\" class=\"btn btn-primary lift\">
\t\t\t\t\tDiscover my portfolio.
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

\t\t\t\t<!-- Heading -->
\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\tPersonal Information:
\t\t\t\t</h2>

\t\t\t\t<!-- Text -->
\t\t\t\t<p class=\"mb-5 text-muted\">
\t\t\t\t\tMy name is Yassir El Ayadi, I am 18 years old, I am originally from Morocco, and I am in my first year of the Bachelor's Degree in Network and Telecommunications (BUT R&T) at the IUT of Roanne.

\t\t\t\t</p>
\t\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
                <h2 class=\"mb-0\">
\t\t\t\t\tBachelor's Degree in Network and Telecommunications :
\t\t\t\t</h2>
<p> The Bachelor's Degree in Network and Telecommunications aims to train intermediate-level professionals over a three-year period who are capable of implementing, configuring, and maintaining information systems and equipment while ensuring their physical and software security.

    The program welcomes students with diverse profiles, regardless of the specialized courses and optional subjects chosen during their general and technological high school studies. It is also open to higher education students wishing to change their career path.
\t</p>

\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t<h2 class=\"mb-0\">
\t\t\tObjectives :
\t\t</h2>

\t\t<p>
            To train higher-level technicians capable of defining, installing, managing, maintaining, and even marketing various types of telecommunications systems and computer networks.<br>

            Network administration<br>
            Connecting businesses and users<br>
            Creating tools and software applications for IT.<br>

\t\t</p>
<!-- Heading -->
\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t
\t\t\t\t</h2>

\t\t\t\t<!-- Text -->
\t\t\t\t<p class=\"mb-5 text-muted\">
\t\t\t\t\t
\t\t\t\t</p>
\t\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
                <h2 class=\"mb-0\">
\t\t\t\t\t
\t\t\t\t</h2>

\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t<div class=\"col-lg-4\">
\t\t\t
\t\t\t<a href=\"/en2\" class=\"btn btn-primary lift\">
\t\t\t\tMore About Me
\t\t\t\t<i class=\"fe fe-arrow-right ms-3\"></i>
\t\t\t</a>
\t\t\t<a href=\"/\" class=\"btn btn-primary lift\">
\t\t\t\tTranslate This Page
\t\t\t\t<i class=\"fe fe-arrow-right ms-3\"></i>
\t\t\t</a>
\t\t
\t\t\t\t\t\t<a class=\"card-meta\" href=\"/actualites/lancement-du-site-internet\">

\t\t\t\t\t\t
\t\t\t\t\t\t\t<hr class=\"card-meta-divider\">

\t\t\t\t\t\t</a>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t\t</div>
\t
        
\t</div>
>
</section>
       
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
", "en/index.html.twig", "C:\\Users\\userlocal\\Desktop\\SAE104 Yassir\\templates\\en\\index.html.twig");
    }
}
