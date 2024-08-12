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

/* dashboard/add_post.twig */
class __TwigTemplate_70f01b2767e439c66c2d6cacdee72ad1 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "dashboard/add_post.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Ajouter un Post - Mon Blog";
        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"container masthead\">
        <h1>";
        // line 7
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", true, true, false, 7) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 7)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true)) : (yield "Créer un nouvel article"));
        yield "</h1>
        <form action=\"/dashboard/post/add\" method=\"POST\">
            <div class=\"form-group mb-3\">
                <label for=\"title\">Titre de l'article</label>
                <input type=\"text\" class=\"form-control\" name=\"title\" id=\"title\" name=\"title\" required>
            </div>
            <div class=\"form-group mb-3\">
                <label for=\"content\">chapo</label>
                <textarea name=\"chapo\" id=\"content\" rows=\"4\" style=\"width: 100%;\"></textarea>
            </div>
            <div class=\"form-group mb-3\">
                <label for=\"content\">Contenu de l'article</label>
                <textarea name=\"content\" id=\"content\" rows=\"8\" style=\"width: 100%;\"></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer mon article</button>
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
        return "dashboard/add_post.twig";
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
        return array (  63 => 7,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block title %}Ajouter un Post - Mon Blog{% endblock %}

{% block content %}
    <div class=\"container masthead\">
        <h1>{{ post.title ?? 'Créer un nouvel article' }}</h1>
        <form action=\"/dashboard/post/add\" method=\"POST\">
            <div class=\"form-group mb-3\">
                <label for=\"title\">Titre de l'article</label>
                <input type=\"text\" class=\"form-control\" name=\"title\" id=\"title\" name=\"title\" required>
            </div>
            <div class=\"form-group mb-3\">
                <label for=\"content\">chapo</label>
                <textarea name=\"chapo\" id=\"content\" rows=\"4\" style=\"width: 100%;\"></textarea>
            </div>
            <div class=\"form-group mb-3\">
                <label for=\"content\">Contenu de l'article</label>
                <textarea name=\"content\" id=\"content\" rows=\"8\" style=\"width: 100%;\"></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer mon article</button>
        </form>
    </div>
{% endblock %}
", "dashboard/add_post.twig", "C:\\xampp\\htdocs\\premierBlogEnPhp_muyombo_falonne\\views\\dashboard\\add_post.twig");
    }
}
