<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home_page/index.html.twig */
class __TwigTemplate_83166b36a8de2018866bedf2b0e3a37c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home_page/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Hello HomePageController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
 <!-- ----------------------------------- first section ---------------------------------------------------------- -->

   ";
        // line 9
        yield from         $this->loadTemplate("home.html.twig", "home_page/index.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "
    <!--  ---------------------------------------------section second-------------------------------------------------- -->

    ";
        // line 13
        yield from         $this->loadTemplate("aboutUs.html.twig", "home_page/index.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "    <!------------------------------------------------- third section ---------------------------------------------------- -->

    ";
        // line 16
        yield from         $this->loadTemplate("shopSection.html.twig", "home_page/index.html.twig", 16)->unwrap()->yield($context);
        // line 17
        yield "
    <!-- ---------------------------------------------- fourth section ---------------------------------------------------  -->

    ";
        // line 20
        yield from         $this->loadTemplate("tutoriel.html.twig", "home_page/index.html.twig", 20)->unwrap()->yield($context);
        // line 21
        yield "
    <!-- ---------------------------------------------- five section ------------------------------------------------------ -->

    ";
        // line 24
        yield from         $this->loadTemplate("contact.html.twig", "home_page/index.html.twig", 24)->unwrap()->yield($context);
        // line 25
        yield "
    <!-- ----------------------------------------------- section six -----------------------------------------------------   -->





 ";
        // line 32
        yield from         $this->loadTemplate("footer.html.twig", "home_page/index.html.twig", 32)->unwrap()->yield($context);
        // line 33
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home_page/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  120 => 33,  118 => 32,  109 => 25,  107 => 24,  102 => 21,  100 => 20,  95 => 17,  93 => 16,  89 => 14,  87 => 13,  82 => 10,  80 => 9,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomePageController!{% endblock %}

{% block body %}

 <!-- ----------------------------------- first section ---------------------------------------------------------- -->

   {% include 'home.html.twig' %}

    <!--  ---------------------------------------------section second-------------------------------------------------- -->

    {% include 'aboutUs.html.twig' %}
    <!------------------------------------------------- third section ---------------------------------------------------- -->

    {% include 'shopSection.html.twig' %}

    <!-- ---------------------------------------------- fourth section ---------------------------------------------------  -->

    {% include 'tutoriel.html.twig' %}

    <!-- ---------------------------------------------- five section ------------------------------------------------------ -->

    {% include 'contact.html.twig' %}

    <!-- ----------------------------------------------- section six -----------------------------------------------------   -->





 {% include 'footer.html.twig' %}

{% endblock %}
", "home_page/index.html.twig", "/home/manu/myProjectSymfony/LeRecifJulienBlatteau/templates/home_page/index.html.twig");
    }
}
