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

/* nav.html.twig */
class __TwigTemplate_9e166d3ad26cdf48e87c5acdd4ac1ae4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        yield "<nav class=\"navbar\" style=\"\">
    <a href=\"#aboutUs\" class=\"navBorder navElements smooth-scroll\">À propos</a>
    <a href=\"#tutoriel\" class=\"navBorder navElements smooth-scroll\">Tutoriel</a>
    <a href=\"#shopSectionId\" class=\"navBorder navElements smooth-scroll\">Boutique</a>
    <a href=\"#leRecif\" class=\"navBorder navElements smooth-scroll circle-hover\">Le Récif</a>
    <div  class=\"elementsEndNav\" style=\"display: flex; gap: 30px;\">
        <a href=\"#contact\" class=\" smooth-scroll\"><i style=\"font-size: 50px\" class=\"fa-regular fa-envelope\"></i></a>

    </div>
</nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar\" style=\"\">
    <a href=\"#aboutUs\" class=\"navBorder navElements smooth-scroll\">À propos</a>
    <a href=\"#tutoriel\" class=\"navBorder navElements smooth-scroll\">Tutoriel</a>
    <a href=\"#shopSectionId\" class=\"navBorder navElements smooth-scroll\">Boutique</a>
    <a href=\"#leRecif\" class=\"navBorder navElements smooth-scroll circle-hover\">Le Récif</a>
    <div  class=\"elementsEndNav\" style=\"display: flex; gap: 30px;\">
        <a href=\"#contact\" class=\" smooth-scroll\"><i style=\"font-size: 50px\" class=\"fa-regular fa-envelope\"></i></a>

    </div>
</nav>
", "nav.html.twig", "/home/manu/myProjectSymfony/LeRecifJulienBlatteau/templates/nav.html.twig");
    }
}
