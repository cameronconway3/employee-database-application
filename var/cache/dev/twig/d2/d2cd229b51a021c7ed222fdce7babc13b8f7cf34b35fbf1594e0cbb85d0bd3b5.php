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

/* employees/form.html.twig */
class __TwigTemplate_505edb47857cfccecf2b91ba00ee218e634e67a7cdcfd5bc31a1ac068a650722 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employees/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employees/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Employee Form";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-md-12\">
                <form method=\"POST\">
                    <div class=\"container\">
                        <div class=\"form-group row justify-content-center\">
                            <div class=\"col-md-8 text-center\">
                                <h3>Employees</h3>
                            </div>
                        </div>

                        <div class=\"form-group row justify-content-center\">
                            <div class=\"col-lg-7\">
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 pr-lg-0\">
                                            <label for=\"inputFirstName\" class=\"col-form-label float-lg-right label-styles\">First name:</label>
                                        </div>
                                        <div class=\"col-lg-9 required-asterisk\">
                                            <input type=\"text\" class=\"form-control form-styles\" id=\"inputFirstName\" name=\"first_name\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group row justify-content-center\">
                            <div class=\"col-lg-7\">
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 pr-lg-0\">
                                            <label for=\"inputLastName\" class=\"col-form-label float-lg-right label-styles\">Last name:</label>
                                        </div>
                                        <div class=\"col-lg-9 required-asterisk\">
                                            <input type=\"text\" class=\"form-control form-styles\" id=\"inputLastName\" name=\"last_name\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group row justify-content-center\">
                            <div class=\"col-lg-7\">
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 pr-lg-0\">
                                            <label for=\"inputDOB\" class=\"col-form-label float-lg-right label-styles\">Date of birth:</label>
                                        </div>
                                        <div class=\"col-lg-5 required-asterisk\">
                                            <input type=\"text\" class=\"form-control form-styles\" id=\"inputDOB\" name=\"dob\" placeholder=\"DD/MM/YY\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group row justify-content-center\">
                            <div class=\"col-lg-7\">
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 pr-lg-0\">
                                            <label for=\"inputEmail\" class=\"col-form-label float-lg-right label-styles\">Email address:</label>
                                        </div>
                                        <div class=\"col-lg-9 required-asterisk\">
                                            <input type=\"email\" class=\"form-control form-styles\" id=\"inputEmail\" name=\"email_address\">
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group row justify-content-center\">
                            <div class=\"col-lg-7\">
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-9 offset-lg-3\">
                                            <button type=\"submit\" class=\"btn button-styles\" name=\"submit\">SUBMIT</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "employees/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Employee Form{% endblock %}

{% block body %}
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-md-12\">
                <form method=\"POST\">
                    <div class=\"container\">
                        <div class=\"form-group row justify-content-center\">
                            <div class=\"col-md-8 text-center\">
                                <h3>Employees</h3>
                            </div>
                        </div>

                        <div class=\"form-group row justify-content-center\">
                            <div class=\"col-lg-7\">
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 pr-lg-0\">
                                            <label for=\"inputFirstName\" class=\"col-form-label float-lg-right label-styles\">First name:</label>
                                        </div>
                                        <div class=\"col-lg-9 required-asterisk\">
                                            <input type=\"text\" class=\"form-control form-styles\" id=\"inputFirstName\" name=\"first_name\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group row justify-content-center\">
                            <div class=\"col-lg-7\">
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 pr-lg-0\">
                                            <label for=\"inputLastName\" class=\"col-form-label float-lg-right label-styles\">Last name:</label>
                                        </div>
                                        <div class=\"col-lg-9 required-asterisk\">
                                            <input type=\"text\" class=\"form-control form-styles\" id=\"inputLastName\" name=\"last_name\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group row justify-content-center\">
                            <div class=\"col-lg-7\">
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 pr-lg-0\">
                                            <label for=\"inputDOB\" class=\"col-form-label float-lg-right label-styles\">Date of birth:</label>
                                        </div>
                                        <div class=\"col-lg-5 required-asterisk\">
                                            <input type=\"text\" class=\"form-control form-styles\" id=\"inputDOB\" name=\"dob\" placeholder=\"DD/MM/YY\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group row justify-content-center\">
                            <div class=\"col-lg-7\">
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 pr-lg-0\">
                                            <label for=\"inputEmail\" class=\"col-form-label float-lg-right label-styles\">Email address:</label>
                                        </div>
                                        <div class=\"col-lg-9 required-asterisk\">
                                            <input type=\"email\" class=\"form-control form-styles\" id=\"inputEmail\" name=\"email_address\">
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group row justify-content-center\">
                            <div class=\"col-lg-7\">
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-9 offset-lg-3\">
                                            <button type=\"submit\" class=\"btn button-styles\" name=\"submit\">SUBMIT</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
{% endblock %}", "employees/form.html.twig", "/Users/cameronconway/Documents/GitHub/employee-database-application/templates/employees/form.html.twig");
    }
}
