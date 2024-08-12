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

/* header.twig */
class __TwigTemplate_e16c442380a9bc9c742f977cc77fcc0e extends Template
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
        yield "<header class=\"masthead bg-primary text-white text-center\">
    <div class=\"container d-flex align-items-center flex-column\">
        <!-- Masthead Avatar Image-->
        <img class=\"masthead-avatar mb-5\" src=\"/assets/img/fa-img.jpg\" alt=\"fa-photo\" />
        <!-- Masthead Heading-->
        <h1 class=\"masthead-heading text-uppercase mb-0\">Falonne MUYOMBO</h1>
        <!-- Icon Divider-->
        <div class=\"divider-custom divider-light\">
            <div class=\"divider-custom-line\"></div>
            <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
            <div class=\"divider-custom-line\"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class=\"masthead-subheading font-weight-light mb-0\">Développeuse PHP/Symfony</p>
    </div>
</header>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "header.twig";
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
        return new Source("<header class=\"masthead bg-primary text-white text-center\">
    <div class=\"container d-flex align-items-center flex-column\">
        <!-- Masthead Avatar Image-->
        <img class=\"masthead-avatar mb-5\" src=\"/assets/img/fa-img.jpg\" alt=\"fa-photo\" />
        <!-- Masthead Heading-->
        <h1 class=\"masthead-heading text-uppercase mb-0\">Falonne MUYOMBO</h1>
        <!-- Icon Divider-->
        <div class=\"divider-custom divider-light\">
            <div class=\"divider-custom-line\"></div>
            <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
            <div class=\"divider-custom-line\"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class=\"masthead-subheading font-weight-light mb-0\">Développeuse PHP/Symfony</p>
    </div>
</header>

", "header.twig", "C:\\xampp\\htdocs\\premierBlogEnPhp_muyombo_falonne\\views\\header.twig");
    }
}
