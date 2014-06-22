<?php

/* GibbonsMasquesCoreBundle:Admin:index.html.twig */
class __TwigTemplate_cd33e94de701a366883ee7ce90e557567c74cf7e1aa7b5a916816bcaf555ed05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1\">
    <title>Les (Super) Gibbons Masqués</title>
  </head>

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    
    <body>
      
      ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "
      
      ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "      
    </body>
</html>
";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
      <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
      <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    ";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "        <div class=\"container\">
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h2>Que voulez-vous faire ?</h2>
            </div>
            <div class=\"panel-body\">
              ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "validation"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 24
            echo "                <div class=\"alert alert-success\" style=\"margin:auto\">
                  ";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                </div>
                <br/>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "              
              ";
        // line 30
        if ((!(null === (isset($context["evenements"]) ? $context["evenements"] : $this->getContext($context, "evenements"))))) {
            // line 31
            echo "                <table class=\"table\">
                  ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) ? $context["evenements"] : $this->getContext($context, "evenements")));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 33
                echo "                    <tr>
                      <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "titre"), "html", null, true);
                echo "</td>
                      <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "sousTitre"), "html", null, true);
                echo "</td>
                      <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "date"), "full", "medium"), "html", null, true);
                echo "</td>
                      <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "resume"), 0, 30), "html", null, true);
                echo "...</td>
                      <td>
                        <button class=\"btn btn-info\" onclick='window.location.href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gibbons_masques_core_modifier_evenement", array("id" => $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "id"))), "html", null, true);
                echo "\";'><span class=\"glyphicon glyphicon-edit\"></span></button>
                        <button class=\"btn btn-danger\" onclick='window.location.href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gibbons_masques_core_supprimer_evenement", array("id" => $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "id"))), "html", null, true);
                echo "\";'><span class=\"glyphicon glyphicon-remove\"></span></button>                  
                      </td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                </table>
              ";
        } else {
            // line 46
            echo "                Vous n'avez pour le moment aucun évènement de
                créer. Voulez vous en créer un ?
                <br/>
                <span class=\"text-center\">
                  <button class=\"btn btn-default\">
                    <span class=\"glyphicon glyphicon-plus\"></span>
                    Ajouter un évènement
                  </button>
                </span>
              ";
        }
        // line 56
        echo "            </div>
          </div>
        </div>
      ";
    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        // line 63
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      ";
    }

    public function getTemplateName()
    {
        return "GibbonsMasquesCoreBundle:Admin:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 64,  171 => 63,  168 => 62,  161 => 56,  149 => 46,  145 => 44,  135 => 40,  131 => 39,  126 => 37,  122 => 36,  118 => 35,  114 => 34,  111 => 33,  107 => 32,  104 => 31,  102 => 30,  99 => 29,  89 => 25,  86 => 24,  82 => 23,  74 => 17,  71 => 16,  65 => 11,  61 => 10,  56 => 9,  53 => 8,  46 => 66,  44 => 62,  40 => 60,  38 => 16,  33 => 13,  31 => 8,  22 => 1,);
    }
}
