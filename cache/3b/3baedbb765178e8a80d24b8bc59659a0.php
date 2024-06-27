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
class __TwigTemplate_b3969aa72dea79361b2bdb272eff0196 extends Template
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
        yield "    <header class=\"masthead bg-primary text-white text-center\">
        <div class=\"container d-flex align-items-center flex-column\">
           <!-- Masthead Heading-->
           <h1 class=\"masthead-heading  mb-0\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 9), "html", null, true);
        yield " </h1>
           <!-- Icon Divider-->
        </div>
    </header>
    <div class=\"container\">
        <div>
            <h1>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 15), "html", null, true);
        yield "</h1>
            <small>Publié le: ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "created_at", [], "any", false, false, false, 16), "html", null, true);
        yield "</small>
            <p>";
        // line 17
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 17);
        yield "</p>
        </div>
        <section>
            <h3>Commentaires</h3>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["comments"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 22
            yield "            <div>
                <strong>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user_name", [], "any", false, false, false, 23), "html", null, true);
            yield "</strong> (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "created_at", [], "any", false, false, false, 23), "html", null, true);
            yield ")
                <p>";
            // line 24
            yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 24);
            yield "</p>
                <div class=\"d-grid gap-2 d-md-block m-3\">
                    <a href=\"/edit-comment?id=";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 26), "html", null, true);
            yield "\"
                    class=\"btn btn-warning\">
                    Modifier
                    </a>
                    <form action=\"/delete-comment\"
                        method=\"POST\"
                        class=\"d-inline\">
                        <input type=\"hidden\" value=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 33), "html", null, true);
            yield "\" name=\"id\" />
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            yield "            <p>Aucun commentaire pour l'instant. Soyez le premier à commenter !</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 53), "html", null, true);
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
        return array (  150 => 53,  136 => 41,  129 => 39,  118 => 33,  108 => 26,  103 => 24,  97 => 23,  94 => 22,  89 => 21,  82 => 17,  78 => 16,  74 => 15,  65 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block title %}Detail de post - Mon Blog{% endblock %}

{% block content %}
    <header class=\"masthead bg-primary text-white text-center\">
        <div class=\"container d-flex align-items-center flex-column\">
           <!-- Masthead Heading-->
           <h1 class=\"masthead-heading  mb-0\">{{ post.title }} </h1>
           <!-- Icon Divider-->
        </div>
    </header>
    <div class=\"container\">
        <div>
            <h1>{{ post.title }}</h1>
            <small>Publié le: {{ post.created_at }}</small>
            <p>{{ post.content|raw }}</p>
        </div>
        <section>
            <h3>Commentaires</h3>
            {% for comment in comments %}
            <div>
                <strong>{{ comment.user_name }}</strong> ({{ comment.created_at }})
                <p>{{ comment.content | raw }}</p>
                <div class=\"d-grid gap-2 d-md-block m-3\">
                    <a href=\"/edit-comment?id={{ post.id }}\"
                    class=\"btn btn-warning\">
                    Modifier
                    </a>
                    <form action=\"/delete-comment\"
                        method=\"POST\"
                        class=\"d-inline\">
                        <input type=\"hidden\" value=\"{{ post.id }}\" name=\"id\" />
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </div>
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


{# 
{% extends \"base.twig\" %}

{% block title %}Detail de post - Mon Blog{% endblock %}

{% block content %}
    <header class=\"masthead bg-primary text-white text-center\">
        <div class=\"container d-flex align-items-center flex-column\">
           <!-- Masthead Heading-->
           <h1 class=\"masthead-heading  mb-0\">{{ post.title }} </h1>
           <!-- Icon Divider-->
        </div>
    </header>
    <div class=\"container text-center\">
        <div class=\"row justify-content-center m-5\">
            <h1>{{ post.title }}</h1>
            <small>Publié le: {{ post.created_at }}</small>
            <p>{{ post.content }}</p>
        </div>
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
    </div>
{% endblock %} #}", "frontoffice/post_detail.twig", "C:\\xampp\\htdocs\\MVC-exemple\\views\\frontoffice\\post_detail.twig");
    }
}
