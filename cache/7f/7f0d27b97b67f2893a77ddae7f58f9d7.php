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

/* footer.twig */
class __TwigTemplate_723bbb1fad3c9b51683ad5cbd057eb33 extends Template
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
        yield "<footer class=\"footer text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Footer Location -->
            <div class=\"col-lg-4 mb-5 mb-lg-0\">
                <h4 class=\"text-uppercase mb-4\">
                Localisation
                </h4>
                <p class=\"lead mb-0\">
                Av. Auguste Renoir
                <br />
                74000 Annecy
                </p>
            </div>
            <!-- Footer Social Icons -->
            <div class=\"col-lg-4 mb-5 mb-lg-0\">
                <h4 class=\"text-uppercase mb-4\">
                AUTOUR DU WEB
                </h4>
                <a class=\"btn btn-outline-light btn-social mx-1\"
                href=\"https://github.com/mfalonne\">
                <i class=\"fab fa-fw fa-github\"></i>
                </a>
                <a class=\"btn btn-outline-light btn-social mx-1\"
                href=\"https://www.linkedin.com/in/falonne-muyombo-tshibola/\">
                <i class=\"fab fa-fw fa-linkedin-in\"></i>
                </a>
            </div>
            <!-- Footer About Text -->
            <div class=\"col-lg-4\">
                <h4 class=\"text-uppercase mb-4\">
                About Freelancer
                </h4>
                <p class=\"lead mb-0\">
                Freelance is a free to use, MIT licensed Bootstrap theme created by
                <a href=\"http://startbootstrap.com\">Start Bootstrap</a>
                .
                </p>
            </div>
        </div>
    </div>
    </footer>
    <div class=\"copyright py-4 text-center text-white\">
    <div class=\"container\">
        <small>Copyright &copy; ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " - Falonne - Développeuse Web </small>
    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "footer.twig";
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
        return array (  84 => 45,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Footer Location -->
            <div class=\"col-lg-4 mb-5 mb-lg-0\">
                <h4 class=\"text-uppercase mb-4\">
                Localisation
                </h4>
                <p class=\"lead mb-0\">
                Av. Auguste Renoir
                <br />
                74000 Annecy
                </p>
            </div>
            <!-- Footer Social Icons -->
            <div class=\"col-lg-4 mb-5 mb-lg-0\">
                <h4 class=\"text-uppercase mb-4\">
                AUTOUR DU WEB
                </h4>
                <a class=\"btn btn-outline-light btn-social mx-1\"
                href=\"https://github.com/mfalonne\">
                <i class=\"fab fa-fw fa-github\"></i>
                </a>
                <a class=\"btn btn-outline-light btn-social mx-1\"
                href=\"https://www.linkedin.com/in/falonne-muyombo-tshibola/\">
                <i class=\"fab fa-fw fa-linkedin-in\"></i>
                </a>
            </div>
            <!-- Footer About Text -->
            <div class=\"col-lg-4\">
                <h4 class=\"text-uppercase mb-4\">
                About Freelancer
                </h4>
                <p class=\"lead mb-0\">
                Freelance is a free to use, MIT licensed Bootstrap theme created by
                <a href=\"http://startbootstrap.com\">Start Bootstrap</a>
                .
                </p>
            </div>
        </div>
    </div>
    </footer>
    <div class=\"copyright py-4 text-center text-white\">
    <div class=\"container\">
        <small>Copyright &copy; {{'now' | date('Y')}} - Falonne - Développeuse Web </small>
    </div>
</div>
", "footer.twig", "C:\\xampp\\htdocs\\MVC-exemple\\views\\footer.twig");
    }
}
