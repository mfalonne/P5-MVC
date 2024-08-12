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

/* dashboard/comments.twig */
class __TwigTemplate_bacd7954ec0ea328e0639ca9bc5e8291 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "dashboard/comments.twig", 1);
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
        yield "  <div class=\"container mt-5\">
    <table class=\"table\">
      <thead>
        <tr>
          <th scope=\"col\">#</th>
          <th scope=\"col\">Contenu</th>
          <th scope=\"col\">Actions</th>
        </tr>
      </thead>
      <tbody class=\"table-group-divider\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 30
            yield "          <tr>
            <th scope=\"row\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 31), "html", null, true);
            yield "</th>
            <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
            <td>
              <form action=\"/dashboard/comment/validate\" method=\"POST\" class=\"d-inline\">
                <input type=\"hidden\" value=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield "\" name=\"id\" />
                <button type=\"submit\" class=\"btn btn-warning\">Valider</button>
              </form>
              <form action=\"/dashboard/comment/delete\" method=\"POST\" class=\"d-inline\">
                <input type=\"hidden\" value=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 39), "html", null, true);
            yield "\" name=\"id\" />
                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
              </form>
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "      </tbody>
    </table>
  </div>
  <div class=\"container mb-5 mt-5\">
     <a href=\"/dashboard\" class=\"btn btn-primary my-3\">
      Retourner
    </a>
   </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dashboard/comments.twig";
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
        return array (  125 => 45,  113 => 39,  106 => 35,  100 => 32,  96 => 31,  93 => 30,  89 => 29,  77 => 19,  71 => 15,  69 => 14,  61 => 8,  57 => 7,  48 => 3,  37 => 1,);
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
  <div class=\"container mt-5\">
    <table class=\"table\">
      <thead>
        <tr>
          <th scope=\"col\">#</th>
          <th scope=\"col\">Contenu</th>
          <th scope=\"col\">Actions</th>
        </tr>
      </thead>
      <tbody class=\"table-group-divider\">
        {% for comment in comments %}
          <tr>
            <th scope=\"row\">{{ comment.id }}</th>
            <td>{{ comment.content }}</td>
            <td>
              <form action=\"/dashboard/comment/validate\" method=\"POST\" class=\"d-inline\">
                <input type=\"hidden\" value=\"{{ comment.id }}\" name=\"id\" />
                <button type=\"submit\" class=\"btn btn-warning\">Valider</button>
              </form>
              <form action=\"/dashboard/comment/delete\" method=\"POST\" class=\"d-inline\">
                <input type=\"hidden\" value=\"{{ comment.id }}\" name=\"id\" />
                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
              </form>
            </td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
  <div class=\"container mb-5 mt-5\">
     <a href=\"/dashboard\" class=\"btn btn-primary my-3\">
      Retourner
    </a>
   </div>
{% endblock %}
", "dashboard/comments.twig", "C:\\xampp\\htdocs\\premierBlogEnPhp_muyombo_falonne\\views\\dashboard\\comments.twig");
    }
}
