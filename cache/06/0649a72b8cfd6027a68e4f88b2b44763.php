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

/* frontoffice/edit_comment.twig */
class __TwigTemplate_bd98f484df29a4f1e93c28565dbb27a7 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "frontoffice/edit_comment.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "  Editer un commentaire - Mon Blog
";
        return; yield '';
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "  <div class=\"container masthead\">
    <h1>
      modifier le commentaire
    </h1>
    <form action=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("/edit-comment/edit?id=" . CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "id", [], "any", false, false, false, 12)), "html", null, true);
        yield "\" method=\"POST\">
      <div class=\"form-group mb-3\">
        <label for=\"content\">Commentaire</label>
        <textarea name=\"content\"
          id=\"content\"
          rows=\"8\"
          class=\"form-control\"
          required>
          ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "content", [], "any", false, false, false, 20), "html", null, true);
        yield "
        </textarea>
      </div>
      <button type=\"submit\" class=\"btn btn-primary\"> Enregistrer le commentaire</button>
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
        return "frontoffice/edit_comment.twig";
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
        return array (  78 => 20,  67 => 12,  61 => 8,  57 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block title %}
  Editer un commentaire - Mon Blog
{% endblock %}

{% block content %}
  <div class=\"container masthead\">
    <h1>
      modifier le commentaire
    </h1>
    <form action=\"{{ '/edit-comment/edit?id=' ~ comment.id }}\" method=\"POST\">
      <div class=\"form-group mb-3\">
        <label for=\"content\">Commentaire</label>
        <textarea name=\"content\"
          id=\"content\"
          rows=\"8\"
          class=\"form-control\"
          required>
          {{ comment.content }}
        </textarea>
      </div>
      <button type=\"submit\" class=\"btn btn-primary\"> Enregistrer le commentaire</button>
    </form>
  </div>
{% endblock %}
", "frontoffice/edit_comment.twig", "C:\\xampp\\htdocs\\MVC-exemple\\views\\frontoffice\\edit_comment.twig");
    }
}
