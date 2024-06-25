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

/* aboutUs.html.twig */
class __TwigTemplate_9550b81140eaf35e166ac78e8a385aeb extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aboutUs.html.twig"));

        // line 1
        yield "<section id=\"aboutUs\" class=\"marginSectionAboutUs\" data-current-page=\"aboutUs\">

    ";
        // line 3
        yield from         $this->loadTemplate("nav.html.twig", "aboutUs.html.twig", 3)->unwrap()->yield($context);
        // line 4
        yield "
    <section id=\"sectionTwo\" style=\"position: relative\">

        <div id=\"conteneur\">
            <div class=\"divTextSecondTwo\" style=\"\">
                <p id=\"aPropos\" style=\"font-size: 96px; margin-bottom: 5px !important; \" class=\"creepster-regular aPropos animated-element\">A propos</p>
                <p class=\"txtSecondDiv truncatedText\" style=\"padding: 0px 50px 50px 50px; font-size:28px; font-style: italic; \">Le Récif est une collection de lampes inspirée par
                    les fonds marins, dessinée et fabriquée par Julien
                    Blatteau, architecte & designer à Marseille.
                    Les lampes sont réalisées à la découpe laser dans
                    les ateliers de MakeIt Marseille, et colorées grâce
                    aux peintures Vacquier, entreprise historique du
                    Vieux-Port depuis 1835.</p>
                <p class=\"moreText\" style=\" font-size: 11px\">Lire la suite</p>
            </div>
            <div class=\"enfant enfant-1\"><img style=\"max-width: 100%\" src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/LeRecifPistilMedusa.jpg"), "html", null, true);
        yield "\" alt=\"\"></div>
            <div class=\"enfant enfant-2\"><img style=\"max-width: 100%\" src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/LeRecif1.jpg"), "html", null, true);
        yield "\" alt=\"\"></div>
            <div class=\"enfant enfant-3\"><img style=\"max-width: 100%\" src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/DpNoaillesPers.jpg"), "html", null, true);
        yield "\" alt=\"\"></div>
        </div>
    </section>


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
        return "aboutUs.html.twig";
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
        return array (  72 => 21,  68 => 20,  64 => 19,  47 => 4,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"aboutUs\" class=\"marginSectionAboutUs\" data-current-page=\"aboutUs\">

    {% include 'nav.html.twig' %}

    <section id=\"sectionTwo\" style=\"position: relative\">

        <div id=\"conteneur\">
            <div class=\"divTextSecondTwo\" style=\"\">
                <p id=\"aPropos\" style=\"font-size: 96px; margin-bottom: 5px !important; \" class=\"creepster-regular aPropos animated-element\">A propos</p>
                <p class=\"txtSecondDiv truncatedText\" style=\"padding: 0px 50px 50px 50px; font-size:28px; font-style: italic; \">Le Récif est une collection de lampes inspirée par
                    les fonds marins, dessinée et fabriquée par Julien
                    Blatteau, architecte & designer à Marseille.
                    Les lampes sont réalisées à la découpe laser dans
                    les ateliers de MakeIt Marseille, et colorées grâce
                    aux peintures Vacquier, entreprise historique du
                    Vieux-Port depuis 1835.</p>
                <p class=\"moreText\" style=\" font-size: 11px\">Lire la suite</p>
            </div>
            <div class=\"enfant enfant-1\"><img style=\"max-width: 100%\" src=\"{{ asset('/pictures/LeRecifPistilMedusa.jpg') }}\" alt=\"\"></div>
            <div class=\"enfant enfant-2\"><img style=\"max-width: 100%\" src=\"{{ asset('/pictures/LeRecif1.jpg') }}\" alt=\"\"></div>
            <div class=\"enfant enfant-3\"><img style=\"max-width: 100%\" src=\"{{ asset('/pictures/DpNoaillesPers.jpg') }}\" alt=\"\"></div>
        </div>
    </section>


</section>
", "aboutUs.html.twig", "/home/manu/myProjectSymfony/LeRecifJulienBlatteau/templates/aboutUs.html.twig");
    }
}
