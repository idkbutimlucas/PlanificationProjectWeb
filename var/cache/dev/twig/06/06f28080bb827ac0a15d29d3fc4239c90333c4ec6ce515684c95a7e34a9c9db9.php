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

/* inscription.html.twig */
class __TwigTemplate_4b9bfbb1df655d8d8353210a9f96a1471715b8f0e9f2e77aaa8162a61082aefe extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\">

  <head>
    <meta charset=\"utf-8\">
    <link rel=\"stylesheet\" href=\"D:\\Universite\\Cours\\UE230 Projet\\AppPlan\\Web\\PlanificationProjectWeb\\public\\styles\\CSS\\login_inscription.css\">
    <title>Inscription</title>
  </head>

  <body class=\"text-center\">
    
    <main class=\"form-signin\">
        <form>
            <h1 class=\"form-title\">S'inscire</h1>


            <div class=\"form-input\">
                <input type=\"name\" class=\"form-control\" placeholder=\"Nom\">
                <input type=\"firstName\" class=\"form-control\" placeholder=\"Prénom\">
            </div>
            <div class=\"form-input\">
                <input type=\"email\" class=\"form-control\" placeholder=\"Adresse email\">
            </div>
            <div class=\"form-input\">
                <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\">
            </div>
            <div class=\"form-input\">
                <input type=\"password\" class=\"form-control\" placeholder=\"Confirmer votre mot de passe\">
            </div>

            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" value=\"newsletters\"> Recevoir des Newsletters
                </label>
            </div>
            <button class=\"btn-lg\" type=\"submit\">S'inscire</button>
        </form>
    </main>
    
  </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inscription.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html lang=\"en\">

  <head>
    <meta charset=\"utf-8\">
    <link rel=\"stylesheet\" href=\"D:\\Universite\\Cours\\UE230 Projet\\AppPlan\\Web\\PlanificationProjectWeb\\public\\styles\\CSS\\login_inscription.css\">
    <title>Inscription</title>
  </head>

  <body class=\"text-center\">
    
    <main class=\"form-signin\">
        <form>
            <h1 class=\"form-title\">S'inscire</h1>


            <div class=\"form-input\">
                <input type=\"name\" class=\"form-control\" placeholder=\"Nom\">
                <input type=\"firstName\" class=\"form-control\" placeholder=\"Prénom\">
            </div>
            <div class=\"form-input\">
                <input type=\"email\" class=\"form-control\" placeholder=\"Adresse email\">
            </div>
            <div class=\"form-input\">
                <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\">
            </div>
            <div class=\"form-input\">
                <input type=\"password\" class=\"form-control\" placeholder=\"Confirmer votre mot de passe\">
            </div>

            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" value=\"newsletters\"> Recevoir des Newsletters
                </label>
            </div>
            <button class=\"btn-lg\" type=\"submit\">S'inscire</button>
        </form>
    </main>
    
  </body>
</html>
", "inscription.html.twig", "D:\\Universite\\Cours\\UE230 Projet\\AppPlan\\Web\\PlanificationProjectWeb\\templates\\inscription.html.twig");
    }
}
