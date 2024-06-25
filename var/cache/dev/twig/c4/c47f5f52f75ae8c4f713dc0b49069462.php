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

/* contact.html.twig */
class __TwigTemplate_8eef5204b70fed04b3bf24d663989e65 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        // line 1
        yield "<section id=\"contact\" class=\"sectionFive \" data-current-page=\"contact\">

    ";
        // line 3
        yield from         $this->loadTemplate("nav.html.twig", "contact.html.twig", 3)->unwrap()->yield($context);
        // line 4
        yield "    <div class=\"contactDivH2\">
        <p class=\"creepster-regular h2Contact animated-element\">Contact</p>
    </div>
    <div class=\"divContactSection\">
        <div class=\"divPictureContact\">
            <div class=\"coordinate\">
                <p>mail: contact@lerecif.fr</p>
                <p>insta : @lerecif</p>
            </div>
            <img class=\"pelagia\" src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/pelagia.jpg"), "html", null, true);
        yield "\" alt=\"\">
        </div>
    </div>




</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "contact.html.twig";
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
        return array (  58 => 13,  47 => 4,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"contact\" class=\"sectionFive \" data-current-page=\"contact\">

    {% include 'nav.html.twig' %}
    <div class=\"contactDivH2\">
        <p class=\"creepster-regular h2Contact animated-element\">Contact</p>
    </div>
    <div class=\"divContactSection\">
        <div class=\"divPictureContact\">
            <div class=\"coordinate\">
                <p>mail: contact@lerecif.fr</p>
                <p>insta : @lerecif</p>
            </div>
            <img class=\"pelagia\" src=\"{{ asset('/pictures/pelagia.jpg') }}\" alt=\"\">
        </div>
    </div>




</section>
", "contact.html.twig", "/home/manu/myProjectSymfony/LeRecifJulienBlatteau/templates/contact.html.twig");
    }
}
