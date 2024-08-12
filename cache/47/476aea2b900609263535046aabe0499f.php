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

/* frontoffice/form.twig */
class __TwigTemplate_4465eabc5fd163f1b3cef2b685e1eb93 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "frontoffice/form.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    <section class=\"masthead page-section\" id=\"contact\">
        <div class=\"container\">
            <!-- Contact Section Heading -->
            <h2 class=\"page-section-heading text-center text-uppercase text-secondary mb-0\">
                Contacter Moi
            </h2>
            <!-- Icon Divider -->
            <div class=\"divider-custom\">
                <div class=\"divider-custom-line\"></div>
                <div class=\"divider-custom-icon\">
                <i class=\"fas fa-star\"></i>
                </div>
                <div class=\"divider-custom-line\"></div>
            </div>
            <!-- Contact Section Form -->
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8 col-xl-7\">
                    <!-- Formulaire -->
                    ";
        // line 22
        if (($context["flash_message"] ?? null)) {
            // line 23
            yield "                        ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["flash_message"] ?? null), "success", [], "any", false, false, false, 23)) {
                // line 24
                yield "                            <div class=\"alert alert-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["flash_message"] ?? null), "success", [], "any", false, false, false, 24), "html", null, true);
                yield "</div>
                        ";
            }
            // line 26
            yield "                        ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["flash_message"] ?? null), "error", [], "any", false, false, false, 26)) {
                // line 27
                yield "                            <div class=\"alert alert-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["flash_message"] ?? null), "error", [], "any", false, false, false, 27), "html", null, true);
                yield "</div>
                        ";
            }
            // line 29
            yield "                    ";
        }
        // line 30
        yield "                    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["BASE_URL"] ?? null), "html", null, true);
        yield "contact/send\" method=\"POST\" id=\"contactForm\" data-sb-form-api-token=\"API_TOKEN\">
                        <!-- Name input -->
                        <div class=\"form-floating mb-3\">
                            <input class=\"form-control\"
                                id=\"name\"
                                name=\"name\"
                                type=\"text\"
                                placeholder=\"Enter your name...\"
                                data-sb-validations=\"required\" />
                            <label for=\"name\">Nom</label>
                            <div class=\"invalid-feedback\" data-sb-feedback=\"name:required\">
                                Veuillez entrer un nom.
                            </div>
                        </div>
                        <!-- Email address input -->
                        <div class=\"form-floating mb-3\">
                            <input class=\"form-control\"
                                id=\"email\"
                                name=\"email\"
                                type=\"email\"
                                placeholder=\"name@example.com\"
                                data-sb-validations=\"required,email\" />
                            <label for=\"email\">Adresse e-mail</label>
                            <div class=\"invalid-feedback\" data-sb-feedback=\"email:required\">
                                Veuillez entrer un mail.
                            </div>
                            <div class=\"invalid-feedback\" data-sb-feedback=\"email:email\">
                                L'adresse e-mail n'est pas valide.
                            </div>
                        </div>
                        <!-- Message input -->
                        <div class=\"form-floating mb-3\">
                            <textarea class=\"form-control\"
                                id=\"message\"
                                name=\"message\"
                                type=\"text\"
                                placeholder=\"Enter your message here...\"
                                style=\"height: 10rem\"
                                data-sb-validations=\"required\"></textarea>
                            <label for=\"message\">Message</label>
                            <div class=\"invalid-feedback\" data-sb-feedback=\"message:required\">
                                Un message est requis.
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <button class=\"btn btn-primary btn-xl\"
                        id=\"submitButton\"
                        type=\"submit\">
                        Envoyer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "frontoffice/form.twig";
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
        return array (  94 => 30,  91 => 29,  85 => 27,  82 => 26,  76 => 24,  73 => 23,  71 => 22,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block content %}
    <section class=\"masthead page-section\" id=\"contact\">
        <div class=\"container\">
            <!-- Contact Section Heading -->
            <h2 class=\"page-section-heading text-center text-uppercase text-secondary mb-0\">
                Contacter Moi
            </h2>
            <!-- Icon Divider -->
            <div class=\"divider-custom\">
                <div class=\"divider-custom-line\"></div>
                <div class=\"divider-custom-icon\">
                <i class=\"fas fa-star\"></i>
                </div>
                <div class=\"divider-custom-line\"></div>
            </div>
            <!-- Contact Section Form -->
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8 col-xl-7\">
                    <!-- Formulaire -->
                    {% if flash_message %}
                        {% if flash_message.success %}
                            <div class=\"alert alert-success\">{{ flash_message.success }}</div>
                        {% endif %}
                        {% if flash_message.error %}
                            <div class=\"alert alert-danger\">{{ flash_message.error }}</div>
                        {% endif %}
                    {% endif %}
                    <form action=\"{{ BASE_URL }}contact/send\" method=\"POST\" id=\"contactForm\" data-sb-form-api-token=\"API_TOKEN\">
                        <!-- Name input -->
                        <div class=\"form-floating mb-3\">
                            <input class=\"form-control\"
                                id=\"name\"
                                name=\"name\"
                                type=\"text\"
                                placeholder=\"Enter your name...\"
                                data-sb-validations=\"required\" />
                            <label for=\"name\">Nom</label>
                            <div class=\"invalid-feedback\" data-sb-feedback=\"name:required\">
                                Veuillez entrer un nom.
                            </div>
                        </div>
                        <!-- Email address input -->
                        <div class=\"form-floating mb-3\">
                            <input class=\"form-control\"
                                id=\"email\"
                                name=\"email\"
                                type=\"email\"
                                placeholder=\"name@example.com\"
                                data-sb-validations=\"required,email\" />
                            <label for=\"email\">Adresse e-mail</label>
                            <div class=\"invalid-feedback\" data-sb-feedback=\"email:required\">
                                Veuillez entrer un mail.
                            </div>
                            <div class=\"invalid-feedback\" data-sb-feedback=\"email:email\">
                                L'adresse e-mail n'est pas valide.
                            </div>
                        </div>
                        <!-- Message input -->
                        <div class=\"form-floating mb-3\">
                            <textarea class=\"form-control\"
                                id=\"message\"
                                name=\"message\"
                                type=\"text\"
                                placeholder=\"Enter your message here...\"
                                style=\"height: 10rem\"
                                data-sb-validations=\"required\"></textarea>
                            <label for=\"message\">Message</label>
                            <div class=\"invalid-feedback\" data-sb-feedback=\"message:required\">
                                Un message est requis.
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <button class=\"btn btn-primary btn-xl\"
                        id=\"submitButton\"
                        type=\"submit\">
                        Envoyer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "frontoffice/form.twig", "C:\\xampp\\htdocs\\premierBlogEnPhp_muyombo_falonne\\views\\frontoffice\\form.twig");
    }
}
