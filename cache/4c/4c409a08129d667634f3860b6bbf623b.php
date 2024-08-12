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

/* portfolio.twig */
class __TwigTemplate_9302dde156eda2e110b85295bd675026 extends Template
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
        yield "
<!-------------------------- portfolio----------------------------------- -->
<section class=\"page-section  mb-0\" id=\"portfolio\">
    <div class=\"container text-center\">
        <h2 class=\"mb-2 text-uppercase page-section-heading\"> Mon Portfolio</h2> 
         <!-- Icon Divider -->
        <div class=\"divider-custom \">
            <div class=\"divider-custom-line\"></div>
            <div class=\"divider-custom-icon\">
                <i class=\"fas fa-star\"></i>
            </div>
            <div class=\"divider-custom-line\"></div>
        </div>
        <p class=\"mb-4 fs-5\">Ci-dessous, quelques exemples de réalisations effectuées durant la formation :
        </p>
        <div class=\" card-group \">
            <div class=\"card border m-1 \">
                <div class=\"card-header bg-transparent \">Un site e-commerce en JavaScript</div>
                <div class=\"card-body text-success p-0\">
                    <img src=\"assets/img/portfolio/kanap.jpg\" class=\"d-block w-100\" alt=\"\">
                </div>
                <div class=\"card-footer bg-transparent \">
                    <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#cours1\">En savoir plus</button>
                </div>
            </div>
            <div class=\"card border m-1 \">
                <div class=\"card-header bg-transparent \">Une API sécurisée pour une application web</div>
                <div class=\"card-body text-success p-0\">
                    <img src=\"assets/img/portfolio/laPiquante.png\" class=\"d-block w-100\" alt=\"\">
                </div>
                <div class=\"card-footer bg-transparent \">
                    <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#cours3\">En savoir plus</button>
                </div>
            </div> 
            <div class=\"card border m-1 \">
                <div class=\"card-header bg-transparent \">Application web avec React</div>
                <div class=\"card-body text-success p-0\">
                    <img src=\"assets/img/portfolio/kasa.png\" class=\"d-block w-100\" alt=\"\">
                </div>
                <div class=\"card-footer bg-transparent \">
                    <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#catalogue\">En savoir plus</button>
                </div>
            </div>    
        </div>
    </div>

    <!------------------------------ Modal1 ------------------------>
    <div class=\"modal fade\" id=\"cours1\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\">Cours JavaScript</h1>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <img src=\"assets/img/portfolio/kanap.jpg\" class=\"d-block w-100\" alt=\"\">
                <p class=\"mt-3\">Projet 5 du parcours DW avec OpenClassrooms.</br> L'objectif est d'intégrer dynamiquement les éléments de l’API dans les pages web avec JavaScript.</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
            </div>
        </div>
    </div>
    <!------------------------------ Modal2 ------------------------>
    <div class=\"modal fade\" id=\"cours3\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\">cas pratique</h1>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <img src=\"assets/img/portfolio/laPiquante.png\" class=\"d-block w-100\" alt=\"\">
                <p class=\"mt-3\">Projet 6 du parcours DW avec OpenClassrooms : \"Construire une API sécurisée pour une appli d'avis gastronomiques\". Compétences évaluées : Implémenter un modèle logique de données conformément à la réglementation, stocker des données de manière sécurisée, mettre en œuvre des opérations CRUD de manière sécurisée.</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
            </div>
        </div>
    </div>
    <!------------------------------ Modal3 ------------------------>
    <div class=\"modal fade\" id=\"catalogue\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\">Cours PHP</h1>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <img src=\"assets/img/portfolio/kasa.png\" class=\"d-block w-100\" alt=\"\">
                <p class=\"mt-3\">Le sujet du projet 7 du parcours Développeur web chez Openclassrooms porte sur la refonte d'une plateforme web de location d'appartements pour Kasa. Le site doit être créé avec React à l'aide des données de location dans un fichier JSON.</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
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
        return "portfolio.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("
<!-------------------------- portfolio----------------------------------- -->
<section class=\"page-section  mb-0\" id=\"portfolio\">
    <div class=\"container text-center\">
        <h2 class=\"mb-2 text-uppercase page-section-heading\"> Mon Portfolio</h2> 
         <!-- Icon Divider -->
        <div class=\"divider-custom \">
            <div class=\"divider-custom-line\"></div>
            <div class=\"divider-custom-icon\">
                <i class=\"fas fa-star\"></i>
            </div>
            <div class=\"divider-custom-line\"></div>
        </div>
        <p class=\"mb-4 fs-5\">Ci-dessous, quelques exemples de réalisations effectuées durant la formation :
        </p>
        <div class=\" card-group \">
            <div class=\"card border m-1 \">
                <div class=\"card-header bg-transparent \">Un site e-commerce en JavaScript</div>
                <div class=\"card-body text-success p-0\">
                    <img src=\"assets/img/portfolio/kanap.jpg\" class=\"d-block w-100\" alt=\"\">
                </div>
                <div class=\"card-footer bg-transparent \">
                    <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#cours1\">En savoir plus</button>
                </div>
            </div>
            <div class=\"card border m-1 \">
                <div class=\"card-header bg-transparent \">Une API sécurisée pour une application web</div>
                <div class=\"card-body text-success p-0\">
                    <img src=\"assets/img/portfolio/laPiquante.png\" class=\"d-block w-100\" alt=\"\">
                </div>
                <div class=\"card-footer bg-transparent \">
                    <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#cours3\">En savoir plus</button>
                </div>
            </div> 
            <div class=\"card border m-1 \">
                <div class=\"card-header bg-transparent \">Application web avec React</div>
                <div class=\"card-body text-success p-0\">
                    <img src=\"assets/img/portfolio/kasa.png\" class=\"d-block w-100\" alt=\"\">
                </div>
                <div class=\"card-footer bg-transparent \">
                    <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#catalogue\">En savoir plus</button>
                </div>
            </div>    
        </div>
    </div>

    <!------------------------------ Modal1 ------------------------>
    <div class=\"modal fade\" id=\"cours1\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\">Cours JavaScript</h1>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <img src=\"assets/img/portfolio/kanap.jpg\" class=\"d-block w-100\" alt=\"\">
                <p class=\"mt-3\">Projet 5 du parcours DW avec OpenClassrooms.</br> L'objectif est d'intégrer dynamiquement les éléments de l’API dans les pages web avec JavaScript.</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
            </div>
        </div>
    </div>
    <!------------------------------ Modal2 ------------------------>
    <div class=\"modal fade\" id=\"cours3\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\">cas pratique</h1>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <img src=\"assets/img/portfolio/laPiquante.png\" class=\"d-block w-100\" alt=\"\">
                <p class=\"mt-3\">Projet 6 du parcours DW avec OpenClassrooms : \"Construire une API sécurisée pour une appli d'avis gastronomiques\". Compétences évaluées : Implémenter un modèle logique de données conformément à la réglementation, stocker des données de manière sécurisée, mettre en œuvre des opérations CRUD de manière sécurisée.</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
            </div>
        </div>
    </div>
    <!------------------------------ Modal3 ------------------------>
    <div class=\"modal fade\" id=\"catalogue\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\">Cours PHP</h1>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <img src=\"assets/img/portfolio/kasa.png\" class=\"d-block w-100\" alt=\"\">
                <p class=\"mt-3\">Le sujet du projet 7 du parcours Développeur web chez Openclassrooms porte sur la refonte d'une plateforme web de location d'appartements pour Kasa. Le site doit être créé avec React à l'aide des données de location dans un fichier JSON.</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
            </div>
        </div>
    </div>
</section>
", "portfolio.twig", "C:\\xampp\\htdocs\\premierBlogEnPhp_muyombo_falonne\\views\\portfolio.twig");
    }
}
