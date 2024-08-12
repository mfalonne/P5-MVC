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
class __TwigTemplate_9cb924957f3668e79340026bfb5d40d9 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        ";
        // line 25
        yield "        ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 30
        yield "        ";
        // line 45
        yield "    </head>
    <body id=\"page-top\">
        ";
        // line 47
        yield from         $this->loadTemplate("nav.twig", "base.twig", 47)->unwrap()->yield($context);
        // line 48
        yield "        <main>
        ";
        // line 49
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 52
        yield "        </main>

        ";
        // line 54
        yield from         $this->loadTemplate("footer.twig", "base.twig", 54)->unwrap()->yield($context);
        // line 55
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

    // line 25
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        yield "            <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["BASE_URL"] ?? null), "html", null, true);
        yield "css/app.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["BASE_URL"] ?? null), "html", null, true);
        yield "css/style.css\">
            <!-- Autres fichiers CSS -->
        ";
        return; yield '';
    }

    // line 49
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
        return array (  133 => 49,  125 => 27,  120 => 26,  116 => 25,  107 => 7,  89 => 55,  87 => 54,  83 => 52,  81 => 49,  78 => 48,  76 => 47,  72 => 45,  70 => 30,  67 => 25,  51 => 10,  49 => 7,  41 => 1,);
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
        {# <link rel=\"stylesheet\" href=\"css/style.css\" /> #}
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{BASE_URL}}css/app.css\">
            <link rel=\"stylesheet\" href=\"{{BASE_URL}}css/style.css\">
            <!-- Autres fichiers CSS -->
        {% endblock %}
        {# <script src=\"https://cdn.tiny.cloud/1/mhqlyp4anpjt92xqwarswntguzg0hnpkxwhjfifyy8b1grvq/tinymce/7/tinymce.min.js\" referrerpolicy=\"origin\"></script>
        <script>
            tinymce.init({
                selector: 'textarea#content',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcoàl                                                                                                                                                                                béntents footnotes mergetags autocorrect typography inlinecss markdown',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
                ],
                ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(\"See docs to implement AI Assistant\")),
            });
        </script>  #}
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
", "base.twig", "C:\\xampp\\htdocs\\premierBlogEnPhp_muyombo_falonne\\views\\base.twig");
    }
}
