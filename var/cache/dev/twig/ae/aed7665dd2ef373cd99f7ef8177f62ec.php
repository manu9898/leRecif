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

/* footer.html.twig */
class __TwigTemplate_e64314f0f7c155a2ccb86f0f085b0e04 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        yield "
    <!-- Footer -->
    <footer class=\"bg-dark  text-white \">
        <!-- Grid container -->
        <div class=\"p-5\">

            <section class=\"\">
                <!--Grid row-->
                <div class=\"row\">

                    <div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
                        <h5 class=\"text-uppercase\">Contact</h5>
                        <br>
                        <ul class=\"list-unstyled mb-0\">
                            <li>
                                <p class=\"\">Julien Blatteau</p>
                            </li>
                            <li>
                                <img class=\"smallImage\" src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/icons8-marqueur-50.png"), "html", null, true);
        yield "\" >
                                <a href=\"https://www.google.com/maps/place/1er+Arrondissement,+13001+Marseille/@43.3001795,5.3724632,15z/data=!3m1!4b1!4m6!3m5!1s0x12c9c097ef6938b3:0x50819a5fd9819c0!8m2!3d43.300771!4d5.3821768!16s%2Fm%2F06zqld9?entry=ttu\" target=\"_blank\" class=\"text-white\">Marseille 1er</a>
                            </li>

                            <li>
                                <img class=\"smallImage\" src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/Email.png"), "html", null, true);
        yield "\" >
                                <a href=\"mailto:emmanuel.muscat@laposte.net\" class=\"text-white email\">contact@lerecif.fr</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
                        <h5 class=\"text-center\">Conseils</h5>
                        <br>
                        <ul class=\"list-unstyled mb-0\">
                            <li>
                                <p class=\" text-reduced\">Si vous souhaitez plus amples informations concernant nos lampes, n'hésitez pas à nous contacter à par email. Nous serons ravis de vous aider à trouver la lampe idéale pour votre espace.</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class=\"col-lg-4 col-md-6 mb-4 mb-md-0 text-right\">
                        <h5 class=\"text-uppercase confidentialite\">Confidentialités</h5>
                        <br>
                        <ul class=\"list-unstyled mb-0\">
                            <li  id=\"mentionsLegales\">
                                <a class=\"coordonnee text-white mentionLegales\" >Mentions légales</a>
                            </li>

                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
            © 2020 Copyright:
            <a href=\"https://emmanuel-muscat.vercel.app/\" class=\"text-reset fw-bold\" >Emmanuel Muscat</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "footer.html.twig";
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
        return array (  69 => 24,  61 => 19,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    <!-- Footer -->
    <footer class=\"bg-dark  text-white \">
        <!-- Grid container -->
        <div class=\"p-5\">

            <section class=\"\">
                <!--Grid row-->
                <div class=\"row\">

                    <div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
                        <h5 class=\"text-uppercase\">Contact</h5>
                        <br>
                        <ul class=\"list-unstyled mb-0\">
                            <li>
                                <p class=\"\">Julien Blatteau</p>
                            </li>
                            <li>
                                <img class=\"smallImage\" src=\"{{ asset('pictures/icons8-marqueur-50.png') }}\" >
                                <a href=\"https://www.google.com/maps/place/1er+Arrondissement,+13001+Marseille/@43.3001795,5.3724632,15z/data=!3m1!4b1!4m6!3m5!1s0x12c9c097ef6938b3:0x50819a5fd9819c0!8m2!3d43.300771!4d5.3821768!16s%2Fm%2F06zqld9?entry=ttu\" target=\"_blank\" class=\"text-white\">Marseille 1er</a>
                            </li>

                            <li>
                                <img class=\"smallImage\" src=\"{{ asset('/pictures/Email.png') }}\" >
                                <a href=\"mailto:emmanuel.muscat@laposte.net\" class=\"text-white email\">contact@lerecif.fr</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
                        <h5 class=\"text-center\">Conseils</h5>
                        <br>
                        <ul class=\"list-unstyled mb-0\">
                            <li>
                                <p class=\" text-reduced\">Si vous souhaitez plus amples informations concernant nos lampes, n'hésitez pas à nous contacter à par email. Nous serons ravis de vous aider à trouver la lampe idéale pour votre espace.</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class=\"col-lg-4 col-md-6 mb-4 mb-md-0 text-right\">
                        <h5 class=\"text-uppercase confidentialite\">Confidentialités</h5>
                        <br>
                        <ul class=\"list-unstyled mb-0\">
                            <li  id=\"mentionsLegales\">
                                <a class=\"coordonnee text-white mentionLegales\" >Mentions légales</a>
                            </li>

                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
            © 2020 Copyright:
            <a href=\"https://emmanuel-muscat.vercel.app/\" class=\"text-reset fw-bold\" >Emmanuel Muscat</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
", "footer.html.twig", "/home/manu/myProjectSymfony/LeRecifJulienBlatteau/templates/footer.html.twig");
    }
}
