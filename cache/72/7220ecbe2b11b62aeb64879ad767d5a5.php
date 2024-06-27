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

/* nav.twig */
class __TwigTemplate_a26202c30fd464e80c8398660817b2a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<nav class=\"navbar navbar-expand-lg bg-secondary text-uppercase fixed-top\"
  id=\"mainNav\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 4
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
        yield "\">Falonne MUYOMBO</a>
        <button class=\"navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded\"
        type=\"button\"
        data-bs-toggle=\"collapse\"
        data-bs-target=\"#navbarResponsive\"
        aria-controls=\"navbarResponsive\"
        aria-expanded=\"false\"
        aria-label=\"Toggle navigation\">
        Menu
        <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item mx-0 mx-lg-1\">
                <a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"/\">Accueil</a>
                </li>
                <li class=\"nav-item mx-0 mx-lg-1\">
                <a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"#portfolio\">
                    Portfolio
                </a>
                </li>
                <li class=\"nav-item mx-0 mx-lg-1\">
                <a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"#apropos\">
                    A Propos
                </a>
                </li>
                <li class=\"nav-item mx-0 mx-lg-1\">
                <a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"/contact\">
                    Contact
                </a>
                </li>
                <li class=\"nav-item mx-0 mx-lg-1\">
                <a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"/blog\">Blog</a>
                </li>
                ";
        // line 38
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "user_id", [], "any", false, false, false, 38)) {
            // line 39
            yield "                <li><a href=\"/dashboard\">Dashboard</a></li>
                <li><a href=\"";
            // line 40
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
            yield "logout\">Déconnexion</a></li>
                ";
        } else {
            // line 42
            yield "                <li class=\"nav-item mx-0 mx-lg-1\">
                    <a class=\"nav-link py-3 px-0 px-lg-3 rounded\"
                    href=\"";
            // line 44
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
            yield "login\">
                    Connexion
                    </a>
                </li>
                <li class=\"nav-item mx-0 mx-lg-1\">
                    <a class=\"nav-link py-3 px-0 px-lg-3 rounded\"
                    href=\"";
            // line 50
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
            yield "register\">
                    Inscription
                    </a>
                </li>
                ";
        }
        // line 55
        yield "            </ul>
        </div>
    </div>
</nav>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "nav.twig";
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
        return array (  111 => 55,  103 => 50,  94 => 44,  90 => 42,  85 => 40,  82 => 39,  80 => 38,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg bg-secondary text-uppercase fixed-top\"
  id=\"mainNav\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ BASE_URL }}\">Falonne MUYOMBO</a>
        <button class=\"navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded\"
        type=\"button\"
        data-bs-toggle=\"collapse\"
        data-bs-target=\"#navbarResponsive\"
        aria-controls=\"navbarResponsive\"
        aria-expanded=\"false\"
        aria-label=\"Toggle navigation\">
        Menu
        <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item mx-0 mx-lg-1\">
                <a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"/\">Accueil</a>
                </li>
                <li class=\"nav-item mx-0 mx-lg-1\">
                <a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"#portfolio\">
                    Portfolio
                </a>
                </li>
                <li class=\"nav-item mx-0 mx-lg-1\">
                <a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"#apropos\">
                    A Propos
                </a>
                </li>
                <li class=\"nav-item mx-0 mx-lg-1\">
                <a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"/contact\">
                    Contact
                </a>
                </li>
                <li class=\"nav-item mx-0 mx-lg-1\">
                <a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"/blog\">Blog</a>
                </li>
                {% if session.user_id %}
                <li><a href=\"/dashboard\">Dashboard</a></li>
                <li><a href=\"{{ BASE_URL }}logout\">Déconnexion</a></li>
                {% else %}
                <li class=\"nav-item mx-0 mx-lg-1\">
                    <a class=\"nav-link py-3 px-0 px-lg-3 rounded\"
                    href=\"{{ BASE_URL }}login\">
                    Connexion
                    </a>
                </li>
                <li class=\"nav-item mx-0 mx-lg-1\">
                    <a class=\"nav-link py-3 px-0 px-lg-3 rounded\"
                    href=\"{{ BASE_URL }}register\">
                    Inscription
                    </a>
                </li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>
", "nav.twig", "C:\\xampp\\htdocs\\MVC-exemple\\views\\nav.twig");
    }
}
