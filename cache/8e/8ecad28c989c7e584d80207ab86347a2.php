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

/* register.twig */
class __TwigTemplate_6611207d951ece1858a3a13aca61dd25 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "register.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Inscription - Mon Blog";
        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container masthead\">
    <h2>Inscription</h2>
    <form action=\"";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
        yield "register\" method=\"post\">
        <label for=\"username\">Nom d'utilisateur:</label>
        <input type=\"text\" id=\"username\" name=\"username\" required>

        <label for=\"password\">Mot de passe:</label>
        <input type=\"password\" id=\"password\" name=\"password\" required>

        <label for=\"is_admin\">Admin:</label>
        <input type=\"checkbox\" id=\"is_admin\" name=\"is_admin\">

        <button type=\"submit\">Inscrire</button>
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
        return "register.twig";
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
        return array (  64 => 8,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block title %}Inscription - Mon Blog{% endblock %}

{% block content %}
<div class=\"container masthead\">
    <h2>Inscription</h2>
    <form action=\"{{ BASE_URL }}register\" method=\"post\">
        <label for=\"username\">Nom d'utilisateur:</label>
        <input type=\"text\" id=\"username\" name=\"username\" required>

        <label for=\"password\">Mot de passe:</label>
        <input type=\"password\" id=\"password\" name=\"password\" required>

        <label for=\"is_admin\">Admin:</label>
        <input type=\"checkbox\" id=\"is_admin\" name=\"is_admin\">

        <button type=\"submit\">Inscrire</button>
    </form>
</div>

{% endblock %}
", "register.twig", "C:\\xampp\\htdocs\\MVC-exemple\\views\\register.twig");
    }
}
