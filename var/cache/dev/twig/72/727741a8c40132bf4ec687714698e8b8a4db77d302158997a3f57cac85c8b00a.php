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

/* inc/navbar.html.twig */
class __TwigTemplate_5e47e06764e26878efd6d968c9732ccdccda611c2823f394ff47ac0b943c58a0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light\">
    <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item pl-4 pr-4\">
            <a class=\"nav-link nav-link-styles\" href=\"/\"><h5>Employees</h5></a>
        </li>
        <li class=\"nav-item pl-4 pr-4\">
            <a class=\"nav-link nav-link-styles\" href=\"/new\"><h5>Add Employee</h5></a>
        </li>
    </ul>
</nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light\">
    <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item pl-4 pr-4\">
            <a class=\"nav-link nav-link-styles\" href=\"/\"><h5>Employees</h5></a>
        </li>
        <li class=\"nav-item pl-4 pr-4\">
            <a class=\"nav-link nav-link-styles\" href=\"/new\"><h5>Add Employee</h5></a>
        </li>
    </ul>
</nav>", "inc/navbar.html.twig", "/Users/cameronconway/Documents/GitHub/employee-database-application/templates/inc/navbar.html.twig");
    }
}
