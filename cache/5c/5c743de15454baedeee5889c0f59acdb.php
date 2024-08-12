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

/* dashboard/edit_post.twig */
class __TwigTemplate_bee7ec1b707972eff611235b28487f6a extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "dashboard/edit_post.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "  Editer un post - Mon Blog
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
      ";
        // line 10
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", true, true, false, 10) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 10)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 10), "html", null, true)) : (yield "Créer un nouvel article"));
        yield "
    </h1>
    <form action=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("/dashboard/post/edit?id=" . CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 12)), "html", null, true);
        yield "\" method=\"POST\">
      <div class=\"form-group mb-3\">
        <label for=\"title\">Titre de l'article</label>
        <input type=\"text\"
          class=\"form-control\"
          name=\"title\"
          id=\"title\"
          name=\"title\"
          value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 20), "html", null, true);
        yield "\"
          required />
      </div>
      <div class=\"form-group mb-3\">
        <label for=\"chapo\">chapo</label>
        <textarea name=\"chapo\"
          id=\"chapo\"
          rows=\"4\"
          class=\"form-control\"
          required>
          ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "chapo", [], "any", false, false, false, 30), "html", null, true);
        yield "
        </textarea>
      </div>
      <div class=\"form-group mb-3\">
        <label for=\"content\">Contenu de l'article</label>
        <textarea name=\"content\"
          id=\"content\"
          rows=\"8\"
          class=\"form-control\"
          required>
          ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 40), "html", null, true);
        yield "
        </textarea>
      </div>
      <button type=\"submit\" class=\"btn btn-primary\">
        ";
        // line 44
        yield ((array_key_exists("post", $context)) ? ("Enregistrer les modifications") : ("Enregistrer mon article"));
        // line 46
        yield "
      </button>
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
        return "dashboard/edit_post.twig";
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
        return array (  116 => 46,  114 => 44,  107 => 40,  94 => 30,  81 => 20,  70 => 12,  65 => 10,  61 => 8,  57 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block title %}
  Editer un post - Mon Blog
{% endblock %}

{% block content %}
  <div class=\"container masthead\">
    <h1>
      {{ post.title ?? 'Créer un nouvel article' }}
    </h1>
    <form action=\"{{ '/dashboard/post/edit?id=' ~ post.id }}\" method=\"POST\">
      <div class=\"form-group mb-3\">
        <label for=\"title\">Titre de l'article</label>
        <input type=\"text\"
          class=\"form-control\"
          name=\"title\"
          id=\"title\"
          name=\"title\"
          value=\"{{ post.title }}\"
          required />
      </div>
      <div class=\"form-group mb-3\">
        <label for=\"chapo\">chapo</label>
        <textarea name=\"chapo\"
          id=\"chapo\"
          rows=\"4\"
          class=\"form-control\"
          required>
          {{ post.chapo }}
        </textarea>
      </div>
      <div class=\"form-group mb-3\">
        <label for=\"content\">Contenu de l'article</label>
        <textarea name=\"content\"
          id=\"content\"
          rows=\"8\"
          class=\"form-control\"
          required>
          {{ post.content }}
        </textarea>
      </div>
      <button type=\"submit\" class=\"btn btn-primary\">
        {{ post is defined
          ? 'Enregistrer les modifications'
          : 'Enregistrer mon article' }}
      </button>
    </form>
  </div>
{% endblock %}
", "dashboard/edit_post.twig", "C:\\xampp\\htdocs\\premierBlogEnPhp_muyombo_falonne\\views\\dashboard\\edit_post.twig");
    }
}
