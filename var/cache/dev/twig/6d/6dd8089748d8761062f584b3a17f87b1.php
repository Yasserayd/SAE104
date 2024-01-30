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

/* en2/index.html.twig */
class __TwigTemplate_7f063ee815cb145e0c3f08b0607f7f5d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "en2/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "en2/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "en2/index.html.twig", 1);
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
\t\t\t\t\t<u>More About Me</u>
\t\t\t\t</h1>
\t\t\t
\t\t\t\t


\t\t\t\t
\t\t\t\t<a href=\"/\" class=\"btn btn-primary lift\">
\t\t\t\t\tRevenir a la page d'acceuil
\t\t\t\t\t<i class=\"fe fe-arrow-right ms-3\"></i>
\t\t\t\t</a>

\t\t\t</div>
\t\t</div>
\t\t
\t</div>

\t</div>

</section>
   
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
Football, My Passion! I am an unwavering fan of Real Madrid and I also support the Moroccan national team. Thanks to my father, I discovered this passion at a young age and it has been growing ever since. Football is much more than just a sport to me; it is a source of intense emotions, camaraderie, and pure joy.
<hr>
<strong>MMA :</strong><br>
Mixed Martial Arts (MMA), My Passion! I am an unwavering fan of fighter Mohamed Ali and I support his exceptional talent in the ring. I discovered MMA on my own while browsing Twitter, and since then, I have been fascinated by the intensity and technique of this sport. MMA represents a constant challenge for me, a blend of skill, courage, and discipline. I am inspired by fighters who push their limits and surpass themselves in every battle. 
<hr>
<strong>Streaming :</strong><br>
For over 2 years, I have developed a tremendous passion for streaming on Twitch. In this field, I have met amazing people who have become a part of my daily life, and I am able to support myself independently.
\t</p>
\t<img loading=\"lazy\" width=\"320\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.discordapp.com/attachments/1173939068917260358/1201861221473587290/IMG_1445.jpg?ex=65cb5b7c&is=65b8e67c&hm=47ceb7f59b030ff73c43930df214fbb054018fcac4d2c724cbd3f42c923e2071&"), "html", null, true);
        echo "\" />
\t<img loading=\"lazy\" width=\"600\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.discordapp.com/attachments/1173939068917260358/1201861220869869638/IMG_4029.png?ex=65cb5b7c&is=65b8e67c&hm=10ee854cc36f9d9cfdf585992ca711184171a99fc8f181d6889187e107365c3f&"), "html", null, true);
        echo "\" />
\t<img loading=\"lazy\" width=\"900\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.discordapp.com/attachments/1172187759092445287/1195514743356670022/image.png?ex=65c6b9de&is=65b444de&hm=6e7ecb1502f1a19fd71104b5aac269f461078d7147c7d9cf78860f93fa7a2544&"), "html", null, true);
        echo "\" />



\t
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

    // line 72
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("home"), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "en2/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 73,  172 => 72,  147 => 56,  143 => 55,  139 => 54,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
\t\t\t\t\t<u>More About Me</u>
\t\t\t\t</h1>
\t\t\t
\t\t\t\t


\t\t\t\t
\t\t\t\t<a href=\"/\" class=\"btn btn-primary lift\">
\t\t\t\t\tRevenir a la page d'acceuil
\t\t\t\t\t<i class=\"fe fe-arrow-right ms-3\"></i>
\t\t\t\t</a>

\t\t\t</div>
\t\t</div>
\t\t
\t</div>

\t</div>

</section>
   
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
Football, My Passion! I am an unwavering fan of Real Madrid and I also support the Moroccan national team. Thanks to my father, I discovered this passion at a young age and it has been growing ever since. Football is much more than just a sport to me; it is a source of intense emotions, camaraderie, and pure joy.
<hr>
<strong>MMA :</strong><br>
Mixed Martial Arts (MMA), My Passion! I am an unwavering fan of fighter Mohamed Ali and I support his exceptional talent in the ring. I discovered MMA on my own while browsing Twitter, and since then, I have been fascinated by the intensity and technique of this sport. MMA represents a constant challenge for me, a blend of skill, courage, and discipline. I am inspired by fighters who push their limits and surpass themselves in every battle. 
<hr>
<strong>Streaming :</strong><br>
For over 2 years, I have developed a tremendous passion for streaming on Twitch. In this field, I have met amazing people who have become a part of my daily life, and I am able to support myself independently.
\t</p>
\t<img loading=\"lazy\" width=\"320\" src=\"{{ asset('https://cdn.discordapp.com/attachments/1173939068917260358/1201861221473587290/IMG_1445.jpg?ex=65cb5b7c&is=65b8e67c&hm=47ceb7f59b030ff73c43930df214fbb054018fcac4d2c724cbd3f42c923e2071&') }}\" />
\t<img loading=\"lazy\" width=\"600\" src=\"{{ asset('https://cdn.discordapp.com/attachments/1173939068917260358/1201861220869869638/IMG_4029.png?ex=65cb5b7c&is=65b8e67c&hm=10ee854cc36f9d9cfdf585992ca711184171a99fc8f181d6889187e107365c3f&') }}\" />
\t<img loading=\"lazy\" width=\"900\" src=\"{{ asset('https://cdn.discordapp.com/attachments/1172187759092445287/1195514743356670022/image.png?ex=65c6b9de&is=65b444de&hm=6e7ecb1502f1a19fd71104b5aac269f461078d7147c7d9cf78860f93fa7a2544&') }}\" />



\t
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
", "en2/index.html.twig", "C:\\Users\\userlocal\\Desktop\\SAE104 Yassir\\templates\\en2\\index.html.twig");
    }
}
