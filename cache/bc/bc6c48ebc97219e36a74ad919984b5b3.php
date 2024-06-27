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
class __TwigTemplate_7beaad15e43a0f0f2e6dbfdee234b02a extends Template
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
                <label for=\"content\">Contenu de l'article</label>
                <textarea name=\"content\" id=\"content\" rows=\"8\" ></textarea>
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
                <label for=\"content\">Contenu de l'article</label>
                <textarea name=\"content\" id=\"content\" rows=\"8\" ></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer mon article</button>
        </form>
    </div>
{# <h2 class=\"masthead\">Ajouter un Nouveau Post</h2>
<form action=\"/dashboard/post/add\" method=\"post\">
    <label for=\"title\">Titre:</label>
    <input type=\"text\" id=\"title\" name=\"title\" required>

    <label for=\"content\">Contenu:</label>
    <textarea id=\"content\" name=\"content\" required></textarea>

    <button type=\"submit\">Publier</button>
</form> #}
{% endblock %}
", "dashboard/add_post.twig", "C:\\xampp\\htdocs\\MVC-exemple\\views\\dashboard\\add_post.twig");
    }
}
