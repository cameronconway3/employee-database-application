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

/* employees/employeeTable.html.twig */
class __TwigTemplate_b5e786c561ba4355682bc286b30cbeae1cfe75bd8e30553aaaf7b99931a82904 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employees/employeeTable.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employees/employeeTable.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Employee Table";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if ((array_key_exists("employees", $context) &&  !twig_test_empty((isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 6, $this->source); })())))) {
            // line 7
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <table class=\"table table-styles\">
                        <thead>
                            <tr>
                                <th class=\"thead-styles\">First name:</th>
                                <th class=\"thead-styles\">Last name:</th>
                                <th class=\"thead-styles\">Date of birth:</th>
                                <th class=\"thead-styles\">Email address:</th>
                            </tr>
                        <thead>
                        <tbody>
                            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 21
                echo "                                <tr class=\"tbody-row\">
                                    <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "getFirstName", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
                                    <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "getLastName", [], "any", false, false, false, 23), "html", null, true);
                echo "</td>
                                    <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "getDOB", [], "any", false, false, false, 24), "d/m/y"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "getEmailAddress", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 34
            echo "        ";
            // line 35
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"no-employees-container\">
                        <h1 class=\"p-3\">No Employees Found</h1>
                        <a href=\"/new\"><button class=\"btn button-styles\">ADD EMPLOYEE</button></a>  
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 46
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "employees/employeeTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 46,  129 => 35,  127 => 34,  119 => 28,  110 => 25,  106 => 24,  102 => 23,  98 => 22,  95 => 21,  91 => 20,  76 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Employee Table{% endblock %}

{% block body %}
    {% if employees is defined and employees is not empty %}
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <table class=\"table table-styles\">
                        <thead>
                            <tr>
                                <th class=\"thead-styles\">First name:</th>
                                <th class=\"thead-styles\">Last name:</th>
                                <th class=\"thead-styles\">Date of birth:</th>
                                <th class=\"thead-styles\">Email address:</th>
                            </tr>
                        <thead>
                        <tbody>
                            {% for employee in employees %}
                                <tr class=\"tbody-row\">
                                    <td>{{ employee.getFirstName }}</td>
                                    <td>{{ employee.getLastName }}</td>
                                    <td>{{ employee.getDOB | date('d/m/y') }}</td>
                                    <td>{{ employee.getEmailAddress }}</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {% else %}
        {# if there are no employees, then display content below #}
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"no-employees-container\">
                        <h1 class=\"p-3\">No Employees Found</h1>
                        <a href=\"/new\"><button class=\"btn button-styles\">ADD EMPLOYEE</button></a>  
                    </div>
                </div>
            </div>
        </div>
    {% endif %}

{% endblock %}", "employees/employeeTable.html.twig", "/Users/cameronconway/Documents/GitHub/employee-database-application/templates/employees/employeeTable.html.twig");
    }
}
