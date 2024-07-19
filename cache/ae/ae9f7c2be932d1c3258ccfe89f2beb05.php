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

/* about.twig */
class __TwigTemplate_f9a6f47552215986ce6f596eb1b48306 extends Template
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
        yield "<section class=\"page-section bg-primary text-white mb-0\" id=\"apropos\">
    <div class=\"container\">
        <!-- About Section Heading -->
        <h2 class=\"page-section-heading text-center text-uppercase text-white\">
        À PROPOS
        </h2>
        <!-- Icon Divider -->
        <div class=\"divider-custom divider-light\">
            <div class=\"divider-custom-line\"></div>
            <div class=\"divider-custom-icon\">
                <i class=\"fas fa-star\"></i>
            </div>
            <div class=\"divider-custom-line\"></div>
        </div>
        <!-- About Section Content -->
        <div class=\"row\">
            <div class=\"col-lg-4 ms-auto\">
                <p class=\"lead\">
                Je suis Falonne Muyombo Tshibola, une développeuse web passionnée par
                la création d'applications innovantes. Récemment diplômée en
                Développement Web JS/React et actuellement en formation pour devenir
                développeuse/conceptrice d'applications web PHP Symfony, je suis prête
                à relever de nouveaux défis et à contribuer à des projets
                passionnants.
                </p>
            </div>
            <div class=\"col-lg-4 me-auto\">
                <p class=\"lead\">
                Explorez mon site pour découvrir mon portfolio, mes compétences et mes
                projets récents. Que vous cherchiez à collaborer sur un projet, à
                discuter d'opportunités professionnelles ou simplement à en savoir
                plus sur mon parcours, n'hésitez pas à me contacter. Ensemble, nous
                pouvons concrétiser vos idées et créer des solutions web de qualité.
                </p>
            </div>
        </div>
        <!-- About Section Button -->
        <div class=\"text-center mt-4\">
            <a class=\"btn btn-xl btn-outline-light\"
                href=\"assets/pdf/Falonne-cv.pdf\"
                dowload=\"CV-Falonne\"
                target=\"_bank\">
                <i class=\"fas fa-download me-2\"></i>
                Télécharger mon CV
            </a>
        </div>
    </div>
</section>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "about.twig";
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
        return new Source("<section class=\"page-section bg-primary text-white mb-0\" id=\"apropos\">
    <div class=\"container\">
        <!-- About Section Heading -->
        <h2 class=\"page-section-heading text-center text-uppercase text-white\">
        À PROPOS
        </h2>
        <!-- Icon Divider -->
        <div class=\"divider-custom divider-light\">
            <div class=\"divider-custom-line\"></div>
            <div class=\"divider-custom-icon\">
                <i class=\"fas fa-star\"></i>
            </div>
            <div class=\"divider-custom-line\"></div>
        </div>
        <!-- About Section Content -->
        <div class=\"row\">
            <div class=\"col-lg-4 ms-auto\">
                <p class=\"lead\">
                Je suis Falonne Muyombo Tshibola, une développeuse web passionnée par
                la création d'applications innovantes. Récemment diplômée en
                Développement Web JS/React et actuellement en formation pour devenir
                développeuse/conceptrice d'applications web PHP Symfony, je suis prête
                à relever de nouveaux défis et à contribuer à des projets
                passionnants.
                </p>
            </div>
            <div class=\"col-lg-4 me-auto\">
                <p class=\"lead\">
                Explorez mon site pour découvrir mon portfolio, mes compétences et mes
                projets récents. Que vous cherchiez à collaborer sur un projet, à
                discuter d'opportunités professionnelles ou simplement à en savoir
                plus sur mon parcours, n'hésitez pas à me contacter. Ensemble, nous
                pouvons concrétiser vos idées et créer des solutions web de qualité.
                </p>
            </div>
        </div>
        <!-- About Section Button -->
        <div class=\"text-center mt-4\">
            <a class=\"btn btn-xl btn-outline-light\"
                href=\"assets/pdf/Falonne-cv.pdf\"
                dowload=\"CV-Falonne\"
                target=\"_bank\">
                <i class=\"fas fa-download me-2\"></i>
                Télécharger mon CV
            </a>
        </div>
    </div>
</section>
", "about.twig", "C:\\xampp\\htdocs\\MVC-exemple\\views\\about.twig");
    }
}
