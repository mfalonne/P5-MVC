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

/* dashboard/dashboard.twig */
class __TwigTemplate_737443d3fd8df2e9bd2d8121d2c32e35 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "dashboard/dashboard.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "  Dashboard - Mon Blog
";
        return; yield '';
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "  <header class=\"masthead bg-primary text-white text-center\">
    <div class=\"container d-flex align-items-center flex-column\">
        <!-- Masthead Heading-->
        <h4>Bienvenue dans votre tableau de bord! </h4>   
    </div>
  </header>
  ";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 14), "query", [], "any", false, true, false, 14), "get", ["success"], "method", true, true, false, 14)) {
            // line 15
            yield "    <div class=\"alert alert-success\">
      Vous êtes connecté
    </div>
  ";
        }
        // line 19
        yield "  <div class=\"container\">
    <a href=\"dashboard/post/add\" class=\"btn btn-primary my-3\">
      Créer un nouvel article
    </a>
    <a href=\"dashboard/comments\" class=\"btn btn-primary my-3\">
      Gérer les commentaires
    </a>
    <table class=\"table\">
      <thead>
        <tr>
          <th scope=\"col\">
            #
          </th>
          <th scope=\"col\">
            Titre
          </th>
          <th scope=\"col\">
            Publié le
          </th>
          <th scope=\"col\">
            Actions
          </th>
        </tr>
      </thead>
      <tbody class=\"table-group-divider\">
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 45
            yield "          <tr>
            <th scope=\"row\">
              ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 47), "html", null, true);
            yield "
            </th>
            <td>
              ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 50), "html", null, true);
            yield "
            </td>
            <td>
              ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, false, 53), "html", null, true);
            yield "
            </td>
            <td>
              <a href=\"/dashboard/post/edit?id=";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 56), "html", null, true);
            yield "\"
                class=\"btn btn-warning\">
                Modifier
              </a>
              <form action=\"/dashboard/post/delete\"
                method=\"POST\"
                class=\"d-inline\">
                <input type=\"hidden\" value=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 63), "html", null, true);
            yield "\" name=\"id\" />
                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
              </form>
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "      </tbody>
    </table>
  </div>
  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dashboard/dashboard.twig";
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
        return array (  152 => 69,  140 => 63,  130 => 56,  124 => 53,  118 => 50,  112 => 47,  108 => 45,  104 => 44,  77 => 19,  71 => 15,  69 => 14,  61 => 8,  57 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block title %}
  Dashboard - Mon Blog
{% endblock %}

{% block content %}
  <header class=\"masthead bg-primary text-white text-center\">
    <div class=\"container d-flex align-items-center flex-column\">
        <!-- Masthead Heading-->
        <h4>Bienvenue dans votre tableau de bord! </h4>   
    </div>
  </header>
  {% if app.request.query.get('success') is defined %}
    <div class=\"alert alert-success\">
      Vous êtes connecté
    </div>
  {% endif %}
  <div class=\"container\">
    <a href=\"dashboard/post/add\" class=\"btn btn-primary my-3\">
      Créer un nouvel article
    </a>
    <a href=\"dashboard/comments\" class=\"btn btn-primary my-3\">
      Gérer les commentaires
    </a>
    <table class=\"table\">
      <thead>
        <tr>
          <th scope=\"col\">
            #
          </th>
          <th scope=\"col\">
            Titre
          </th>
          <th scope=\"col\">
            Publié le
          </th>
          <th scope=\"col\">
            Actions
          </th>
        </tr>
      </thead>
      <tbody class=\"table-group-divider\">
        {% for post in posts %}
          <tr>
            <th scope=\"row\">
              {{ post.id }}
            </th>
            <td>
              {{ post.title }}
            </td>
            <td>
              {{ post.created_at }}
            </td>
            <td>
              <a href=\"/dashboard/post/edit?id={{ post.id }}\"
                class=\"btn btn-warning\">
                Modifier
              </a>
              <form action=\"/dashboard/post/delete\"
                method=\"POST\"
                class=\"d-inline\">
                <input type=\"hidden\" value=\"{{ post.id }}\" name=\"id\" />
                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
              </form>
            </td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
  {# <h2 class=\"masthead\">Dashboard</h2>
<p>Bienvenue dans votre tableau de bord.</p>
<a href=\"dashboard/post/add\">Ajouter un nouveau post</a> #}
{% endblock %}
", "dashboard/dashboard.twig", "C:\\xampp\\htdocs\\MVC-exemple\\views\\dashboard\\dashboard.twig");
    }
}
