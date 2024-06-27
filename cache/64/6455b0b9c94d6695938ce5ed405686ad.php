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
class __TwigTemplate_ac044dd4fb6b0133fcfb97d7aea0913e extends Template
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
        yield "  Inscription - Mon Blog
";
        return; yield '';
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    <div class=\"container masthead\">
        <h2>Inscription</h2>
        <form action=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["BASE_URL"] ?? null), "html", null, true);
        yield "register\" method=\"post\">
            <div class=\"mb-3\">
                <label for=\"username\" class=\"form-label\">Nom d'utilisateur: </label>
                <input type=\"text\" name=\"username\"
                    class=\"form-control\"
                    id=\"username\"/>
            </div>
            <div class=\"mb-3\">
                <label for=\"Password\" class=\"form-label\">Mot de passe : </label>
                <input type=\"password\" name=\"password\" class=\"form-control\" id=\"Password\" />
            </div>
            <div class=\"mb-3 form-check\">
                <input type=\"checkbox\" name=\"is_admin\" class=\"form-check-input\" id=\"is_admin\" />
                <label class=\"form-check-label\" for=\"is_admin\">Admin</label>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
            <div class=\"form-text mt-2\">
                Vous avez déjà un compte? <a href=\"/login\">S'identifier</a>
            </div>
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
        return array (  65 => 10,  61 => 8,  57 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block title %}
  Inscription - Mon Blog
{% endblock %}

{% block content %}
    <div class=\"container masthead\">
        <h2>Inscription</h2>
        <form action=\"{{ BASE_URL }}register\" method=\"post\">
            <div class=\"mb-3\">
                <label for=\"username\" class=\"form-label\">Nom d'utilisateur: </label>
                <input type=\"text\" name=\"username\"
                    class=\"form-control\"
                    id=\"username\"/>
            </div>
            <div class=\"mb-3\">
                <label for=\"Password\" class=\"form-label\">Mot de passe : </label>
                <input type=\"password\" name=\"password\" class=\"form-control\" id=\"Password\" />
            </div>
            <div class=\"mb-3 form-check\">
                <input type=\"checkbox\" name=\"is_admin\" class=\"form-check-input\" id=\"is_admin\" />
                <label class=\"form-check-label\" for=\"is_admin\">Admin</label>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
            <div class=\"form-text mt-2\">
                Vous avez déjà un compte? <a href=\"/login\">S'identifier</a>
            </div>
        </form>
    </div>
{% endblock %}
", "register.twig", "C:\\xampp\\htdocs\\MVC-exemple\\views\\register.twig");
    }
}
