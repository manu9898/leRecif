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

/* tutoriel.html.twig */
class __TwigTemplate_7ef43b8132357696e6bf70230cff8525 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel.html.twig"));

        // line 1
        yield "<section id=\"tutoriel\" class=\"marginSectiontutorial\"  data-current-page=\"tutoriel\">

    ";
        // line 3
        yield from         $this->loadTemplate("nav.html.twig", "tutoriel.html.twig", 3)->unwrap()->yield($context);
        // line 4
        yield "    <section id=\"tutorialSection\">
        <div class=\"tutorielDiv\" style=\"\">
            <p class=\"creepster-regular h2Tutoriel animated-element\">Tutoriels</p>
        </div>
            <div class=\"divList\">
                <ul class=\"ulTutorial\">
                    <li class=\"liSuspension\" style=\"\">tuto suspension</li>
                    <li class=\"liLampe\">tuto lampe</li>
                    <li class=\"applyToWall\">tuto applique murale</li>
                </ul>
            </div>
        <div class=\"divVideo\">
            <video class=\"video\" width=\"500\" height=\"500\" controls>
                <source src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/LeRecifTutoriel.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
                Your browser does not support the video tag.
            </video>
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
        return "tutoriel.html.twig";
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
        return array (  62 => 17,  47 => 4,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"tutoriel\" class=\"marginSectiontutorial\"  data-current-page=\"tutoriel\">

    {% include 'nav.html.twig' %}
    <section id=\"tutorialSection\">
        <div class=\"tutorielDiv\" style=\"\">
            <p class=\"creepster-regular h2Tutoriel animated-element\">Tutoriels</p>
        </div>
            <div class=\"divList\">
                <ul class=\"ulTutorial\">
                    <li class=\"liSuspension\" style=\"\">tuto suspension</li>
                    <li class=\"liLampe\">tuto lampe</li>
                    <li class=\"applyToWall\">tuto applique murale</li>
                </ul>
            </div>
        <div class=\"divVideo\">
            <video class=\"video\" width=\"500\" height=\"500\" controls>
                <source src=\"{{ asset('/pictures/LeRecifTutoriel.mp4') }}\" type=\"video/mp4\">
                Your browser does not support the video tag.
            </video>
        </div>
    </section>
</section>
", "tutoriel.html.twig", "/home/manu/myProjectSymfony/LeRecifJulienBlatteau/templates/tutoriel.html.twig");
    }
}
