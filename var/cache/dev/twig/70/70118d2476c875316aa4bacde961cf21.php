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

/* home/index.html.twig */
class __TwigTemplate_0445a9c2d48d28c4fe44f53f6a172e2b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
\t\t\t\t\t1ère année BUT RT
\t\t\t\t</p>

\t\t\t\t<!-- Button -->
\t\t\t\t<a href=\"/portfolio\" class=\"btn btn-primary lift\">
\t\t\t\t\tDécouvrir mon portfolio
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
\t\t\t\t\tInformations Personnelles :
\t\t\t\t</h2>

\t\t\t\t<!-- Text -->
\t\t\t\t<p class=\"mb-5 text-muted\">
\t\t\t\t\tJe m'appelle Yassir El Ayadi , j'ai 18 ans, je suis originaire du Maroc ,  et je suis en 1ère année de BUT R&T, à l'IUT de Roanne.

\t\t\t\t</p>
\t\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
                <h2 class=\"mb-0\">
\t\t\t\t\tLa Formation BUT R&T :
\t\t\t\t</h2>
<p> Le BUT RT forme en trois ans des cadres intermédiaires capables de mettre en œuvre,
\t configurer et maintenir des équipements et systèmes d’information, 
\t tout en assurant leur sécurité physique et logicielle.
\t La formation peut accueillir des profils variés, quels que soient les enseignements de spécialité et les enseignements optionnels choisis au lycée général et technologique.
\t Elle peut accueillir des étudiants du supérieur souhaitant se réorienter.
\t</p>

\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t<h2 class=\"mb-0\">
\t\t\tObjectifs :
\t\t</h2>

\t\t<p>
\t\t\tFormer des techniciens supérieurs capables de définir, installer, gérer, maintenir, voire commercialiser des systèmes de télécommunications et des réseaux informatiques de touts types.<br>

    \t\t\t- Administrer les réseaux 
    \t\t\t- Connecter les entreprises et les usagers
    \t\t\t- Créer des outils et applications informatiques pour les RT.

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
\t\t\t<a href=\"/passion\" class=\"btn btn-primary lift\">
\t\t\t\tEn Savoir Plus
\t\t\t\t<i class=\"fe fe-arrow-right ms-3\"></i>
\t\t\t</a>
\t\t\t<a href=\"/en\" class=\"btn btn-primary lift\">
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
        return "home/index.html.twig";
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

{% block title %}A propos de moi ! {% endblock %}

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
\t\t\t\t\t1ère année BUT RT
\t\t\t\t</p>

\t\t\t\t<!-- Button -->
\t\t\t\t<a href=\"/portfolio\" class=\"btn btn-primary lift\">
\t\t\t\t\tDécouvrir mon portfolio
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
\t\t\t\t\tInformations Personnelles :
\t\t\t\t</h2>

\t\t\t\t<!-- Text -->
\t\t\t\t<p class=\"mb-5 text-muted\">
\t\t\t\t\tJe m'appelle Yassir El Ayadi , j'ai 18 ans, je suis originaire du Maroc ,  et je suis en 1ère année de BUT R&T, à l'IUT de Roanne.

\t\t\t\t</p>
\t\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
                <h2 class=\"mb-0\">
\t\t\t\t\tLa Formation BUT R&T :
\t\t\t\t</h2>
<p> Le BUT RT forme en trois ans des cadres intermédiaires capables de mettre en œuvre,
\t configurer et maintenir des équipements et systèmes d’information, 
\t tout en assurant leur sécurité physique et logicielle.
\t La formation peut accueillir des profils variés, quels que soient les enseignements de spécialité et les enseignements optionnels choisis au lycée général et technologique.
\t Elle peut accueillir des étudiants du supérieur souhaitant se réorienter.
\t</p>

\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t<h2 class=\"mb-0\">
\t\t\tObjectifs :
\t\t</h2>

\t\t<p>
\t\t\tFormer des techniciens supérieurs capables de définir, installer, gérer, maintenir, voire commercialiser des systèmes de télécommunications et des réseaux informatiques de touts types.<br>

    \t\t\t- Administrer les réseaux 
    \t\t\t- Connecter les entreprises et les usagers
    \t\t\t- Créer des outils et applications informatiques pour les RT.

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
\t\t\t<a href=\"/passion\" class=\"btn btn-primary lift\">
\t\t\t\tEn Savoir Plus
\t\t\t\t<i class=\"fe fe-arrow-right ms-3\"></i>
\t\t\t</a>
\t\t\t<a href=\"/en\" class=\"btn btn-primary lift\">
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
", "home/index.html.twig", "C:\\Users\\userlocal\\Desktop\\SAE104 Yassir\\templates\\home\\index.html.twig");
    }
}
