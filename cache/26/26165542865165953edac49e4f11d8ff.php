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

/* portfolio.twig */
class __TwigTemplate_dc94cc6738e18889fa45655e7fe363f5 extends Template
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
        yield "<section class=\"page-section portfolio\" id=\"portfolio\">
    <div class=\"container\">
        <!-- Portfolio Section Heading -->
        <h2 class=\"page-section-heading text-center text-uppercase text-secondary mb-0\">
        Portfolio
        </h2>
        <!-- Icon Divider -->
        <div class=\"divider-custom\">
            <div class=\"divider-custom-line\"></div>
            <div class=\"divider-custom-icon\">
                <i class=\"fas fa-star\"></i>
            </div>
            <div class=\"divider-custom-line\"></div>
        </div>
        <!-- Portfolio Grid Items -->
        <div class=\"row justify-content-center\">
            <!-- Portfolio Item 1 -->
            <div class=\"col-md-6 col-lg-4 mb-5\">
                <div class=\"portfolio-item mx-auto\"
                data-bs-toggle=\"modal\"
                data-bs-target=\"#portfolioModal1\">
                <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                    <div class=\"portfolio-item-caption-content text-center text-white\">
                    <i class=\"fas fa-plus fa-3x\"></i>
                    </div>
                </div>
                <img class=\"img-fluid\"
                    src=\"assets/img/portfolio/cabin.png\"
                    alt=\"...\" />
                </div>
            </div>
            <!-- Portfolio Item 2 -->
            <div class=\"col-md-6 col-lg-4 mb-5\">
                <div class=\"portfolio-item mx-auto\"
                data-bs-toggle=\"modal\"
                data-bs-target=\"#portfolioModal2\">
                <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                    <div class=\"portfolio-item-caption-content text-center text-white\">
                    <i class=\"fas fa-plus fa-3x\"></i>
                    </div>
                </div>
                <img class=\"img-fluid\"
                    src=\"assets/img/portfolio/cake.png\"
                    alt=\"...\" />
                </div>
            </div>
            <!-- Portfolio Item 3 -->
            <div class=\"col-md-6 col-lg-4 mb-5\">
                <div class=\"portfolio-item mx-auto\"
                    data-bs-toggle=\"modal\"
                    data-bs-target=\"#portfolioModal3\">
                    <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                        <div class=\"portfolio-item-caption-content text-center text-white\">
                        <i class=\"fas fa-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img class=\"img-fluid\"
                        src=\"assets/img/portfolio/circus.png\"
                        alt=\"...\" />
                </div>
            </div>
            <!-- Portfolio Item 4 -->
            <div class=\"col-md-6 col-lg-4 mb-5 mb-lg-0\">
                <div class=\"portfolio-item mx-auto\"
                    data-bs-toggle=\"modal\"
                    data-bs-target=\"#portfolioModal4\">
                    <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                        <div class=\"portfolio-item-caption-content text-center text-white\">
                        <i class=\"fas fa-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img class=\"img-fluid\"
                        src=\"assets/img/portfolio/game.png\"
                        alt=\"...\" />
                </div>
            </div>
            <!-- Portfolio Item 5 -->
            <div class=\"col-md-6 col-lg-4 mb-5 mb-md-0\">
                <div class=\"portfolio-item mx-auto\"
                    data-bs-toggle=\"modal\"
                    data-bs-target=\"#portfolioModal5\">
                    <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                        <div class=\"portfolio-item-caption-content text-center text-white\">
                        <i class=\"fas fa-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img class=\"img-fluid\"
                        src=\"assets/img/portfolio/safe.png\"
                        alt=\"...\" />
                </div>
            </div>
        <!-- Portfolio Item 6 -->
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"portfolio-item mx-auto\"
                    data-bs-toggle=\"modal\"
                    data-bs-target=\"#portfolioModal6\">
                    <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                        <div class=\"portfolio-item-caption-content text-center text-white\">
                        <i class=\"fas fa-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img class=\"img-fluid\"
                        src=\"assets/img/portfolio/submarine.png\"
                        alt=\"...\" />
                </div>
            </div>
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
        return "portfolio.twig";
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
        return new Source("<section class=\"page-section portfolio\" id=\"portfolio\">
    <div class=\"container\">
        <!-- Portfolio Section Heading -->
        <h2 class=\"page-section-heading text-center text-uppercase text-secondary mb-0\">
        Portfolio
        </h2>
        <!-- Icon Divider -->
        <div class=\"divider-custom\">
            <div class=\"divider-custom-line\"></div>
            <div class=\"divider-custom-icon\">
                <i class=\"fas fa-star\"></i>
            </div>
            <div class=\"divider-custom-line\"></div>
        </div>
        <!-- Portfolio Grid Items -->
        <div class=\"row justify-content-center\">
            <!-- Portfolio Item 1 -->
            <div class=\"col-md-6 col-lg-4 mb-5\">
                <div class=\"portfolio-item mx-auto\"
                data-bs-toggle=\"modal\"
                data-bs-target=\"#portfolioModal1\">
                <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                    <div class=\"portfolio-item-caption-content text-center text-white\">
                    <i class=\"fas fa-plus fa-3x\"></i>
                    </div>
                </div>
                <img class=\"img-fluid\"
                    src=\"assets/img/portfolio/cabin.png\"
                    alt=\"...\" />
                </div>
            </div>
            <!-- Portfolio Item 2 -->
            <div class=\"col-md-6 col-lg-4 mb-5\">
                <div class=\"portfolio-item mx-auto\"
                data-bs-toggle=\"modal\"
                data-bs-target=\"#portfolioModal2\">
                <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                    <div class=\"portfolio-item-caption-content text-center text-white\">
                    <i class=\"fas fa-plus fa-3x\"></i>
                    </div>
                </div>
                <img class=\"img-fluid\"
                    src=\"assets/img/portfolio/cake.png\"
                    alt=\"...\" />
                </div>
            </div>
            <!-- Portfolio Item 3 -->
            <div class=\"col-md-6 col-lg-4 mb-5\">
                <div class=\"portfolio-item mx-auto\"
                    data-bs-toggle=\"modal\"
                    data-bs-target=\"#portfolioModal3\">
                    <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                        <div class=\"portfolio-item-caption-content text-center text-white\">
                        <i class=\"fas fa-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img class=\"img-fluid\"
                        src=\"assets/img/portfolio/circus.png\"
                        alt=\"...\" />
                </div>
            </div>
            <!-- Portfolio Item 4 -->
            <div class=\"col-md-6 col-lg-4 mb-5 mb-lg-0\">
                <div class=\"portfolio-item mx-auto\"
                    data-bs-toggle=\"modal\"
                    data-bs-target=\"#portfolioModal4\">
                    <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                        <div class=\"portfolio-item-caption-content text-center text-white\">
                        <i class=\"fas fa-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img class=\"img-fluid\"
                        src=\"assets/img/portfolio/game.png\"
                        alt=\"...\" />
                </div>
            </div>
            <!-- Portfolio Item 5 -->
            <div class=\"col-md-6 col-lg-4 mb-5 mb-md-0\">
                <div class=\"portfolio-item mx-auto\"
                    data-bs-toggle=\"modal\"
                    data-bs-target=\"#portfolioModal5\">
                    <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                        <div class=\"portfolio-item-caption-content text-center text-white\">
                        <i class=\"fas fa-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img class=\"img-fluid\"
                        src=\"assets/img/portfolio/safe.png\"
                        alt=\"...\" />
                </div>
            </div>
        <!-- Portfolio Item 6 -->
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"portfolio-item mx-auto\"
                    data-bs-toggle=\"modal\"
                    data-bs-target=\"#portfolioModal6\">
                    <div class=\"portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100\">
                        <div class=\"portfolio-item-caption-content text-center text-white\">
                        <i class=\"fas fa-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img class=\"img-fluid\"
                        src=\"assets/img/portfolio/submarine.png\"
                        alt=\"...\" />
                </div>
            </div>
        </div>
    </div>
</section>
", "portfolio.twig", "C:\\xampp\\htdocs\\MVC-exemple\\views\\portfolio.twig");
    }
}
