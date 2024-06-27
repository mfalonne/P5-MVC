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

/* frontoffice/login.twig */
class __TwigTemplate_4e178e8b6636a57d431f43c3ca8c5dcd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "frontoffice/login.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Connexion - Mon Blog";
        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <div class=\"container masthead\">
        <h1>Se connecter</h1>
        <p>Pas encore inscrit ? <a href=\"/register\">Inscrivez-vous ici</a>.</p>
        <form action=\"/login\" method=\"POST\">
            <div class=\"for-group mb-3\">
                <label for=\"username\">Nom d'utilisateur</label>
                <input type=\"text\" class=\"form-control\" name=\"username\" id=\"username\">
            </div>
            <div class=\"for-group mb-3\">
                <label for=\"password\">Mot de passe </label>
                <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
        </form>
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "frontoffice/login.twig";
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
        return array (  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block title %}Connexion - Mon Blog{% endblock %}

{% block content %}
    <div class=\"container masthead\">
        <h1>Se connecter</h1>
        <p>Pas encore inscrit ? <a href=\"/register\">Inscrivez-vous ici</a>.</p>
        <form action=\"/login\" method=\"POST\">
            <div class=\"for-group mb-3\">
                <label for=\"username\">Nom d'utilisateur</label>
                <input type=\"text\" class=\"form-control\" name=\"username\" id=\"username\">
            </div>
            <div class=\"for-group mb-3\">
                <label for=\"password\">Mot de passe </label>
                <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
        </form>
    </div>
{% endblock %}
{# <p>Pas encore inscrit ? <a href=\"/register\">Inscrivez-vous ici</a>.</p>

<form action=\"/login\" method=\"post\">
    <label for=\"username\">Nom d'utilisateur:</label>
    <input type=\"text\" id=\"username\" name=\"username\" required>

    <label for=\"password\">Mot de passe:</label>
    <input type=\"password\" id=\"password\" name=\"password\" required>

    <button type=\"submit\">Connexion</button>
</form> #}

", "frontoffice/login.twig", "C:\\xampp\\htdocs\\MVC-exemple\\views\\frontoffice\\login.twig");
    }
}
