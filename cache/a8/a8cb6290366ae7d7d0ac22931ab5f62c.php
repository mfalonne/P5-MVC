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

/* dashboard.twig */
class __TwigTemplate_af463ecbe00e380874415b84d05451fa extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "dashboard.twig", 1);
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
        yield "  ";
        yield from         $this->loadTemplate("headerDashboard.twig", "dashboard.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 9), "query", [], "any", false, true, false, 9), "get", ["success"], "method", true, true, false, 9)) {
            // line 10
            yield "    <div class=\"alert alert-success\">
      Vous êtes connecté
    </div>
  ";
        }
        // line 14
        yield "  <div class=\"container\">
    <a href=\"dashboard/post/add\" class=\"btn btn-primary my-3\">
      Créer un nouvel article
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
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 37
            yield "          <tr>
            <th scope=\"row\">
              ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 39), "html", null, true);
            yield "
            </th>
            <td>
              ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 42), "html", null, true);
            yield "
            </td>
            <td>
              ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, false, 45), "html", null, true);
            yield "
            </td>
            <td>
              <a href=\"/dashboard/post/edit?id=";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 48), "html", null, true);
            yield "\"
                class=\"btn btn-warning\">
                Modifier
              </a>
              <form action=\"/dashboard/post/delete\"
                method=\"POST\"
                class=\"d-inline\">
                <input type=\"hidden\" value=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 55), "html", null, true);
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
        // line 61
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
        return "dashboard.twig";
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
        return array (  145 => 61,  133 => 55,  123 => 48,  117 => 45,  111 => 42,  105 => 39,  101 => 37,  97 => 36,  73 => 14,  67 => 10,  64 => 9,  61 => 8,  57 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block title %}
  Dashboard - Mon Blog
{% endblock %}

{% block content %}
  {% include 'headerDashboard.twig' %}
  {% if app.request.query.get('success') is defined %}
    <div class=\"alert alert-success\">
      Vous êtes connecté
    </div>
  {% endif %}
  <div class=\"container\">
    <a href=\"dashboard/post/add\" class=\"btn btn-primary my-3\">
      Créer un nouvel article
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
", "dashboard.twig", "C:\\xampp\\htdocs\\MVC-exemple\\views\\dashboard.twig");
    }
}
