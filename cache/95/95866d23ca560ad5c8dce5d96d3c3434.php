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

/* blog.twig */
class __TwigTemplate_db670133d41e62ddb210969496340f06 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "blog.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield from         $this->loadTemplate("headerBlog.twig", "blog.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <h1 class=\"m-3\">
                Les derniers articles
                </h1>
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 12
            yield "                    <div class=\"card mb-3\">
                        ";
            // line 14
            yield "                        <div class=\"card-body\">
                            <h2>
                                <a href=\"/blog/view?id=";
            // line 16
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 16), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 16), "html", null, true);
            yield "</a>
                            </h2>
                            <small class=\"text-bg-primary\">
                                Publié le : ";
            // line 19
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, false, 19), "html", null, true);
            yield "
                            </small>
                            <p>
                                ";
            // line 22
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::slice($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 22), 0, 150), "html", null, true);
            yield "...
                            </p>
                            <div class=\"mt-3\">  
                                <a href=\"./posts/";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 25), "html", null, true);
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
        // line 32
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
        return "blog.twig";
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
        return array (  106 => 32,  93 => 25,  87 => 22,  81 => 19,  73 => 16,  69 => 14,  66 => 12,  62 => 11,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block content %}
    {% include 'headerBlog.twig' %}
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <h1 class=\"m-3\">
                Les derniers articles
                </h1>
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
                                {{ post.content|slice(0, 150) }}...
                            </p>
                            <div class=\"mt-3\">  
                                <a href=\"./posts/{{ post.id }}\" class=\"btn btn-primary\">
                                Lire Plus...
                                </a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>

  {# <div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <h1 class=\"m-3\">Les derniers articles</h1>
            <ul>
                {% for post in posts %}
                <li>
                    <h2><a href=\"/blog/view?id={{ post.id }}\">{{ post.title }}</a></h2>
                    <p>{{ post.content | slice(0, 150) }}...</p>
                    <small>Posted on: {{ post.created_at }}</small>
                </li>
                {% endfor %}
            </ul>
        </div>
    </div>
  </div> #}
{% endblock %}
", "blog.twig", "C:\\xampp\\htdocs\\MVC-exemple\\views\\blog.twig");
    }
}
