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

/* home.html.twig */
class __TwigTemplate_582c59dcfd47925d151b26cb92da412d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        // line 1
        yield "<section id=\"leRecif\" class=\"imageHome\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/LeRecif1.jpg"), "html", null, true);
        yield "');\" data-current-page=\"home\">

    ";
        // line 3
        yield from         $this->loadTemplate("nav.html.twig", "home.html.twig", 3)->unwrap()->yield($context);
        // line 4
        yield "
    <p id=\"titleLeRecif\" class=\"creepster-regular\">Le Récif</p>
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
        return "home.html.twig";
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
        return array (  49 => 4,  47 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"leRecif\" class=\"imageHome\" style=\"background-image: url('{{ asset('pictures/LeRecif1.jpg') }}');\" data-current-page=\"home\">

    {% include 'nav.html.twig' %}

    <p id=\"titleLeRecif\" class=\"creepster-regular\">Le Récif</p>
</section>
", "home.html.twig", "/home/manu/myProjectSymfony/LeRecifJulienBlatteau/templates/home.html.twig");
    }
}
