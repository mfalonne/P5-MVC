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

/* frontoffice/post_detail.twig */
class __TwigTemplate_627994de200143a3b94e3be4f470350c extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "frontoffice/post_detail.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Detail de post - Mon Blog";
        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <header class=\" masthead bg-primary text-white text-center\">
        <div class=\"container d-flex align-items-center flex-column\">
           <!-- Masthead Heading-->
           <h2 class=\"masthead-heading mb-0\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 9), "html", null, true);
        yield " </h2>
           <!-- Icon Divider-->
        </div>
    </header>
    <div class=\"container\">
        <div>
            <h1 class=\"mt-3\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 15), "html", null, true);
        yield "</h1>
            <small>Publié le: ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "created_at", [], "any", false, false, false, 16), "html", null, true);
        yield "</small>
            <p>";
        // line 17
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "chapo", [], "any", false, false, false, 17);
        yield "</p>
            <p>";
        // line 18
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 18);
        yield "</p>
        </div>

        <!-- Affichage du message de confirmation ou d'erreur -->
        ";
        // line 22
        if (($context["message"] ?? null)) {
            // line 23
            yield "            <div class=\"alert alert-info\">
                ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 27
        yield "        
        <section>
            <h3>Commentaires</h3>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["comments"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 31
            yield "            <div>
                <strong>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user_name", [], "any", false, false, false, 32), "html", null, true);
            yield "</strong> (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "created_at", [], "any", false, false, false, 32), "html", null, true);
            yield ")
                <p>";
            // line 33
            yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 33);
            yield "</p>
             
            </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            yield "            <p>Aucun commentaire pour l'instant. Soyez le premier à commenter !</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "        </section>
        <section>
            <h3>Laisser un commentaire</h3>
            <form action=\"/add-comment\" method=\"post\">
                <div class=\"form-group\">
                    <label for=\"user_name\">Nom</label>
                    <input type=\"text\" id=\"user_name\" name=\"user_name\" class=\"form-control\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"content\">Commentaire</label>
                    <textarea id=\"content\" name=\"content\" class=\"form-control\" rows=\"5\" required></textarea>
                </div>
                <input type=\"hidden\" name=\"post_id\" value=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 51), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"btn btn-primary m-3\">Enregistrer</button>
            </form>
        </section>   
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "frontoffice/post_detail.twig";
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
        return array (  153 => 51,  139 => 39,  132 => 37,  123 => 33,  117 => 32,  114 => 31,  109 => 30,  104 => 27,  98 => 24,  95 => 23,  93 => 22,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  65 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block title %}Detail de post - Mon Blog{% endblock %}

{% block content %}
    <header class=\" masthead bg-primary text-white text-center\">
        <div class=\"container d-flex align-items-center flex-column\">
           <!-- Masthead Heading-->
           <h2 class=\"masthead-heading mb-0\">{{ post.title }} </h2>
           <!-- Icon Divider-->
        </div>
    </header>
    <div class=\"container\">
        <div>
            <h1 class=\"mt-3\">{{ post.title }}</h1>
            <small>Publié le: {{ post.created_at }}</small>
            <p>{{ post.chapo|raw }}</p>
            <p>{{ post.content|raw }}</p>
        </div>

        <!-- Affichage du message de confirmation ou d'erreur -->
        {% if message %}
            <div class=\"alert alert-info\">
                {{ message }}
            </div>
        {% endif %}
        
        <section>
            <h3>Commentaires</h3>
            {% for comment in comments %}
            <div>
                <strong>{{ comment.user_name }}</strong> ({{ comment.created_at }})
                <p>{{ comment.content | raw }}</p>
             
            </div>
            {% else %}
            <p>Aucun commentaire pour l'instant. Soyez le premier à commenter !</p>
            {% endfor %}
        </section>
        <section>
            <h3>Laisser un commentaire</h3>
            <form action=\"/add-comment\" method=\"post\">
                <div class=\"form-group\">
                    <label for=\"user_name\">Nom</label>
                    <input type=\"text\" id=\"user_name\" name=\"user_name\" class=\"form-control\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"content\">Commentaire</label>
                    <textarea id=\"content\" name=\"content\" class=\"form-control\" rows=\"5\" required></textarea>
                </div>
                <input type=\"hidden\" name=\"post_id\" value=\"{{ post.id }}\">
                <button type=\"submit\" class=\"btn btn-primary m-3\">Enregistrer</button>
            </form>
        </section>   
    </div>
{% endblock %}
", "frontoffice/post_detail.twig", "C:\\xampp\\htdocs\\premierBlogEnPhp_muyombo_falonne\\views\\frontoffice\\post_detail.twig");
    }
}
