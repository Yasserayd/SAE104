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

/* form/form.html.twig */
class __TwigTemplate_81dc89296fb5c4906e24db31e4e120cc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/form.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <title>Inscription</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    h1 {
      text-align: center;
    }

    form {
      max-width: 500px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-top: 10px;
    }

    input[type=\"text\"], input[type=\"email\"], input[type=\"password\"] {
      width: 100%;
      padding: 5px;
      margin-top: 5px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }

    input[type=\"submit\"] {
      background-color: #000000;
      color: white;
      padding: 8px 15px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      margin-top: 10px;
    }

    #pdf-link {
      display: none;
      margin-top: 20px;
      text-align: center;
    }
  </style>
</head>
<body>
  <h1>Inscription</h1>
  <form id=\"registration-form\">
    <label for=\"email\">Adresse email:</label>
    <input type=\"email\" id=\"email\" required>

    <label for=\"password\">Mot de passe:</label>
    <input type=\"password\" id=\"password\" required>

    <!-- Ajoutez d'autres champs selon vos besoins -->

    <input type=\"submit\" value=\"S'inscrire\">
  </form>

  <div id=\"pdf-link\">
    <a href=\"/pdf\" target=\"_blank\">Accéder au document PDF</a>
  </div>

  <script>
  
    document.getElementById(\"registration-form\").addEventListener(\"submit\", function(event) {
      event.preventDefault(); 
      document.getElementById(\"pdf-link\").style.display = \"block\";
    });
  </script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "form/form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  <title>Inscription</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    h1 {
      text-align: center;
    }

    form {
      max-width: 500px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-top: 10px;
    }

    input[type=\"text\"], input[type=\"email\"], input[type=\"password\"] {
      width: 100%;
      padding: 5px;
      margin-top: 5px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }

    input[type=\"submit\"] {
      background-color: #000000;
      color: white;
      padding: 8px 15px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      margin-top: 10px;
    }

    #pdf-link {
      display: none;
      margin-top: 20px;
      text-align: center;
    }
  </style>
</head>
<body>
  <h1>Inscription</h1>
  <form id=\"registration-form\">
    <label for=\"email\">Adresse email:</label>
    <input type=\"email\" id=\"email\" required>

    <label for=\"password\">Mot de passe:</label>
    <input type=\"password\" id=\"password\" required>

    <!-- Ajoutez d'autres champs selon vos besoins -->

    <input type=\"submit\" value=\"S'inscrire\">
  </form>

  <div id=\"pdf-link\">
    <a href=\"/pdf\" target=\"_blank\">Accéder au document PDF</a>
  </div>

  <script>
  
    document.getElementById(\"registration-form\").addEventListener(\"submit\", function(event) {
      event.preventDefault(); 
      document.getElementById(\"pdf-link\").style.display = \"block\";
    });
  </script>
</body>
</html>", "form/form.html.twig", "C:\\Users\\userlocal\\Desktop\\SAE104 Yassir\\templates\\form\\form.html.twig");
    }
}
