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

/* base.twig */
class __TwigTemplate_91433da7ac7fb1dbd6123a88136104a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <title>
        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 10
        yield "        </title>
        <!-- Favicon -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/favicon.ico\" />
        <!-- Google fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\"
        rel=\"stylesheet\"
        type=\"text/css\" />
        <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\"
        rel=\"stylesheet\"
        type=\"text/css\" />
        <!-- Bootstrap CSS -->
        <link rel=\"stylesheet\"
        href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" />
        <!-- Votre fichier CSS -->
        <link rel=\"stylesheet\" href=\"css/style.css\" />
        <link rel=\"stylesheet\" href=\"css/app.css\" />
    </head>
    <body id=\"page-top\">
        ";
        // line 28
        yield from         $this->loadTemplate("nav.twig", "base.twig", 28)->unwrap()->yield($context);
        // line 29
        yield "        <main>
        ";
        // line 30
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 33
        yield "        </main>

        ";
        // line 35
        yield from         $this->loadTemplate("footer.twig", "base.twig", 35)->unwrap()->yield($context);
        // line 36
        yield "
        <!-- Bootstrap core JS -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
        <!-- Core theme JS -->
        <script src=\"js/scripts.js\"></script>
        <!-- SB Forms JS -->
        <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
        <!-- Font Awesome icons (free version) -->
        <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\"
        crossorigin=\"anonymous\"></script>
    </body>
</html>
";
        return; yield '';
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "            Mon Blog
        ";
        return; yield '';
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "
        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.twig";
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
        return array (  109 => 30,  100 => 7,  83 => 36,  81 => 35,  77 => 33,  75 => 30,  72 => 29,  70 => 28,  50 => 10,  48 => 7,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <title>
        {% block title %}
            Mon Blog
        {% endblock %}
        </title>
        <!-- Favicon -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/favicon.ico\" />
        <!-- Google fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\"
        rel=\"stylesheet\"
        type=\"text/css\" />
        <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\"
        rel=\"stylesheet\"
        type=\"text/css\" />
        <!-- Bootstrap CSS -->
        <link rel=\"stylesheet\"
        href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" />
        <!-- Votre fichier CSS -->
        <link rel=\"stylesheet\" href=\"css/style.css\" />
        <link rel=\"stylesheet\" href=\"css/app.css\" />
    </head>
    <body id=\"page-top\">
        {% include 'nav.twig' %}
        <main>
        {% block content %}

        {% endblock %}
        </main>

        {% include 'footer.twig' %}

        <!-- Bootstrap core JS -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
        <!-- Core theme JS -->
        <script src=\"js/scripts.js\"></script>
        <!-- SB Forms JS -->
        <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
        <!-- Font Awesome icons (free version) -->
        <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\"
        crossorigin=\"anonymous\"></script>
    </body>
</html>
", "base.twig", "C:\\xampp\\htdocs\\MVC-exemple\\views\\base.twig");
    }
}
