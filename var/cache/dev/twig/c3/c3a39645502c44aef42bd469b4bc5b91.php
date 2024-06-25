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

/* shopSection.html.twig */
class __TwigTemplate_0479df8688675a4b717b8f615b645e39 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shopSection.html.twig"));

        // line 1
        yield "



<section id=\"shopSectionId\" data-current-page=\"shopSectionId\">

     ";
        // line 7
        yield from         $this->loadTemplate("nav.html.twig", "shopSection.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "    <section id=\"shopSection\" style=\"\">
        <div id=\"divHiddenMediaQueries\" class=\"childShopSection\"></div>
        <div class=\"childShopSection productPresentation\" style=\"\">
            <p class=\"creepster-regular h2Medusa animated-element\">Medusa</p>


            <div class=\"\">
                <div id=\"diaporama\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <a href=\"\"><img src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/carousel/pistil.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"d-block\"></a>
                        </div>
                        <div class=\"carousel-item\">
                            <a href=\"\"><img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/carousel/LeRecifMedusa.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"d-block\"></a>
                        </div>
                    </div>
                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#diaporama\" data-bs-slide=\"prev\">
                <span class=\"\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-fill\" viewBox=\"0 0 16 16\"><circle cx=\"8\" cy=\"8\" r=\"8\"/>
                </svg></span>
                    </button>
                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#diaporama\" data-bs-slide=\"next\">
                <span class=\"\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-fill\" viewBox=\"0 0 16 16\">
                <circle cx=\"8\" cy=\"8\" r=\"8\"/>
                </svg></span>
                    </button>
                </div>
            </div>


            <div class=\"divOtherProduct\">
                <a><i  class=\"fa-solid fa-bug otherProduct\"></i></a>
                <a><i class=\"fa-solid fa-bug otherProduct\"></i></a>
                <a><i class=\"fa-solid fa-bug otherProduct\"></i></a>
                <a><i class=\"fa-solid fa-bug otherProduct\"></i></a>
                <a><i class=\"fa-solid fa-bug otherProduct\"></i></a>
                <a><i class=\"fa-solid fa-bug otherProduct\"></i></a>
            </div>
        </div>
        <div id=\"txtOfShopSection\" class=\"childShopSection\">


            <div class=\"divBoxContent\">
                <p class=\"boxContent\">Contenu de la boite</p>
                <ul class=\"listOfContentBox\">
                    <li>16 pales médium 3mm<br> medusa couleur lavande</li>
                    <li>16 pales médium 3mm<br> corail couleur océan</li>
                    <li>2 disque médium 3mm brut</li>
                    <li>1 douille E27 avec bague dévissable</li>
                    <li>1 câble 1,5m avec interrupteur</li>
                    <li>1 ampoule LED E27</li>
                </ul>
            </div>
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
        return "shopSection.html.twig";
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
        return array (  69 => 21,  63 => 18,  51 => 8,  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("



<section id=\"shopSectionId\" data-current-page=\"shopSectionId\">

     {% include 'nav.html.twig' %}
    <section id=\"shopSection\" style=\"\">
        <div id=\"divHiddenMediaQueries\" class=\"childShopSection\"></div>
        <div class=\"childShopSection productPresentation\" style=\"\">
            <p class=\"creepster-regular h2Medusa animated-element\">Medusa</p>


            <div class=\"\">
                <div id=\"diaporama\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <a href=\"\"><img src=\"{{ asset('/pictures/carousel/pistil.jpg') }}\" alt=\"\" class=\"d-block\"></a>
                        </div>
                        <div class=\"carousel-item\">
                            <a href=\"\"><img src=\"{{ asset('/pictures/carousel/LeRecifMedusa.jpg') }}\" alt=\"\" class=\"d-block\"></a>
                        </div>
                    </div>
                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#diaporama\" data-bs-slide=\"prev\">
                <span class=\"\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-fill\" viewBox=\"0 0 16 16\"><circle cx=\"8\" cy=\"8\" r=\"8\"/>
                </svg></span>
                    </button>
                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#diaporama\" data-bs-slide=\"next\">
                <span class=\"\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-fill\" viewBox=\"0 0 16 16\">
                <circle cx=\"8\" cy=\"8\" r=\"8\"/>
                </svg></span>
                    </button>
                </div>
            </div>


            <div class=\"divOtherProduct\">
                <a><i  class=\"fa-solid fa-bug otherProduct\"></i></a>
                <a><i class=\"fa-solid fa-bug otherProduct\"></i></a>
                <a><i class=\"fa-solid fa-bug otherProduct\"></i></a>
                <a><i class=\"fa-solid fa-bug otherProduct\"></i></a>
                <a><i class=\"fa-solid fa-bug otherProduct\"></i></a>
                <a><i class=\"fa-solid fa-bug otherProduct\"></i></a>
            </div>
        </div>
        <div id=\"txtOfShopSection\" class=\"childShopSection\">


            <div class=\"divBoxContent\">
                <p class=\"boxContent\">Contenu de la boite</p>
                <ul class=\"listOfContentBox\">
                    <li>16 pales médium 3mm<br> medusa couleur lavande</li>
                    <li>16 pales médium 3mm<br> corail couleur océan</li>
                    <li>2 disque médium 3mm brut</li>
                    <li>1 douille E27 avec bague dévissable</li>
                    <li>1 câble 1,5m avec interrupteur</li>
                    <li>1 ampoule LED E27</li>
                </ul>
            </div>
        </div>
    </section>



</section>

", "shopSection.html.twig", "/home/manu/myProjectSymfony/LeRecifJulienBlatteau/templates/shopSection.html.twig");
    }
}
