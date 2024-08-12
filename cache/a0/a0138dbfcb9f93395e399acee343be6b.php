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

/* frontoffice/blog.twig */
class __TwigTemplate_7898ebbb13de6b0368c378e3180bf16e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.twig", "frontoffice/blog.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    <header class=\"masthead bg-primary text-white text-center\">
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
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8 m-5\">
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 22
            yield "                    <div class=\"card mb-3\">
                        ";
            // line 24
            yield "                        <div class=\"card-body\">
                            <h2>
                                <a href=\"/blog/view?id=";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 26), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 26), "html", null, true);
            yield "</a>
                            </h2>
                            <small class=\"text-bg-primary\">
                                Publié le : ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, false, 29), "html", null, true);
            yield "
                            </small>
                            <p>
                                ";
            // line 32
            yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "chapo", [], "any", false, false, false, 32);
            yield " <!-- Ajout du chapo -->
                            </p>
                            <div class=\"mt-3\">  
                                <a href=\"/blog/view?id=";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                                Lire Plus...
                                </a>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "            </div>
        </div>
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "frontoffice/blog.twig";
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
        return array (  114 => 42,  101 => 35,  95 => 32,  89 => 29,  81 => 26,  77 => 24,  74 => 22,  70 => 21,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block content %}
    <header class=\"masthead bg-primary text-white text-center\">
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
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8 m-5\">
                {% for post in posts %}
                    <div class=\"card mb-3\">
                        {# <img src=\"...\" class=\"card-img-top\" alt=\"...\"> #}
                        <div class=\"card-body\">
                            <h2>
                                <a href=\"/blog/view?id={{ post.id }}\">{{ post.title }}</a>
                            </h2>
                            <small class=\"text-bg-primary\">
                                Publié le : {{ post.created_at }}
                            </small>
                            <p>
                                {{ post.chapo | raw }} <!-- Ajout du chapo -->
                            </p>
                            <div class=\"mt-3\">  
                                <a href=\"/blog/view?id={{ post.id }}\" class=\"btn btn-primary\">
                                Lire Plus...
                                </a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}", "frontoffice/blog.twig", "C:\\xampp\\htdocs\\premierBlogEnPhp_muyombo_falonne\\views\\frontoffice\\blog.twig");
    }
}
