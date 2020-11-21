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

/* employees/new.html.twig */
class __TwigTemplate_b32d8e27dc2efb508f9f1047bf851709b15cbc996d403b0f22fa116e24877eec extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employees/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employees/new.html.twig", 1);
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
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
                                            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 25, $this->source); })()), "first_name", [], "any", false, false, false, 25), 'widget', ["id" => "inputFirstName"]);
        echo "
                                            <div class=\"first-name-error\"></div>
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
                                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 41, $this->source); })()), "last_name", [], "any", false, false, false, 41), 'widget', ["id" => "inputLastName"]);
        echo "
                                            <div class=\"last-name-error\"></div>
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
                                            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 57, $this->source); })()), "dob", [], "any", false, false, false, 57), 'widget', ["id" => "inputDOB"]);
        echo "
                                            <div class=\"dob-error\"></div>
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
                                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 73, $this->source); })()), "email_address", [], "any", false, false, false, 73), 'widget', ["id" => "inputEmail"]);
        echo "
                                            <div class=\"email-address-error\"></div>
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
                                            <button type=\"submit\" class=\"btn button-styles\" id=\"submitEmployee\" name=\"submit\">SUBMIT</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 93, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>  
    </div>       
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "employees/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 93,  154 => 73,  135 => 57,  116 => 41,  97 => 25,  78 => 9,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Employee Table{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                {{ form_start(employeeForm) }}
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
                                            {{form_widget(employeeForm.first_name, {'id': 'inputFirstName'})}}
                                            <div class=\"first-name-error\"></div>
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
                                            {{form_widget(employeeForm.last_name, {'id': 'inputLastName'})}}
                                            <div class=\"last-name-error\"></div>
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
                                            {{form_widget(employeeForm.dob, {'id': 'inputDOB'})}}
                                            <div class=\"dob-error\"></div>
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
                                            {{form_widget(employeeForm.email_address, {'id': 'inputEmail'})}}
                                            <div class=\"email-address-error\"></div>
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
                                            <button type=\"submit\" class=\"btn button-styles\" id=\"submitEmployee\" name=\"submit\">SUBMIT</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {{ form_end(employeeForm) }}
            </div>
        </div>  
    </div>       
{% endblock %}", "employees/new.html.twig", "/Users/cameronconway/Documents/GitHub/employee-database-application/templates/employees/new.html.twig");
    }
}
