<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_0b303feb59a5a62d17341a0a6efd74da8f83985773bd982497b6b6545740c9b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        
        ";
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"/Symfony/web/css/bootstrap.min.css\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"/Symfony/web/css/color.css\" type=\"text/css\"/>
        
        <title>Erreur: ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "</title>
    </head>
    <body>
      <div class=\"container\">
        <div class=\"jumbotron rainbow\">
          <div class=\"text-center\">
            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/404.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo "\"/>
          </div>
          <hr/>
          <div class=\"well well-sm\">
            La page que vous avez demandée est introuvable. <br/>
            S'il vous semble que c'est un problème à signaler,
            veuillez envoyer un mail à l'adresse suivante
            : <a href=\"mailto:";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["email_contact"]) ? $context["email_contact"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["email_contact"]) ? $context["email_contact"] : null), "html", null, true);
        echo "</a>
          </div>
          <div class=\"text-right\">
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("justsharetest_accueil");
        echo "\">
              <button type=\"button\" class=\"btn btn-default btn-sm\">
                <span class=\"glyphicon glyphicon-arrow-left\"></span> 
                Retour à l'accueil
              </button>
            </a>
          </div>
        </div>
      </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 26,  52 => 23,  40 => 16,  31 => 10,  26 => 7,  19 => 1,);
    }
}
