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

/* headerBlog.twig */
class __TwigTemplate_c2c6ae62ba79485c640f0df2068423c9 extends Template
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
        <!-- Masthead Heading-->
        <h1 class=\"masthead-heading  mb-0\">Bienvenue sur mon blog! </h1>
        <!-- Icon Divider-->
        <div class=\"divider-custom divider-light\">
            <div class=\"divider-custom-line\"></div>
            <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
            <div class=\"divider-custom-line\"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class=\"masthead-subheading font-weight-light mb-0\">Découvrez des articles fascinants sur une variété de sujets passionnants.</p>
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
        return "headerBlog.twig";
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
        <!-- Masthead Heading-->
        <h1 class=\"masthead-heading  mb-0\">Bienvenue sur mon blog! </h1>
        <!-- Icon Divider-->
        <div class=\"divider-custom divider-light\">
            <div class=\"divider-custom-line\"></div>
            <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
            <div class=\"divider-custom-line\"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class=\"masthead-subheading font-weight-light mb-0\">Découvrez des articles fascinants sur une variété de sujets passionnants.</p>
    </div>
</header>
", "headerBlog.twig", "C:\\xampp\\htdocs\\MVC-exemple\\views\\headerBlog.twig");
    }
}
