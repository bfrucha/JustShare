<?php

/* GibbonsMasquesCoreBundle:Admin:ajouter_modifier.html.twig */
class __TwigTemplate_4a88e8acb3d35bc045a04c69cbb997241f07b9673fc6ed5124d91be17216d13c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GibbonsMasquesCoreBundle:Admin:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GibbonsMasquesCoreBundle:Admin:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ajouter.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
  <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/evenement.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "  <div class=\"container\">
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo " 
    <div class=\"main-panel\">
      <h1>";
        // line 13
        if ((isset($context["ajouter"]) ? $context["ajouter"] : $this->getContext($context, "ajouter"))) {
            echo "AJOUTER";
        } else {
            echo "MODIFIER";
        }
        echo " UN EVENEMENT</h1>
      
      ";
        // line 15
        if ((isset($context["voir_apercu"]) ? $context["voir_apercu"] : $this->getContext($context, "voir_apercu"))) {
            // line 16
            echo "        <div id=\"apercu\">
          ";
            // line 17
            $this->env->loadTemplate("GibbonsMasquesCoreBundle:Voir:voir.html.twig")->display(array_merge($context, array("evenement" => (isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")))));
            // line 18
            echo "        </div>
      ";
        }
        // line 20
        echo "
      <table class=\"main-table\" cellpadding=\"10\">
        <tr><th></th><th>Informations</th></tr>
        
        <tr><td id=\"first-attr-label\">Titre</td><td id=\"first-attr-widget\">";
        // line 24
        echo         // line 25
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'widget', array("attr" => array("placeholder" => "Titre")));
        echo "</td></tr>
            <tr><td>Sous-titre</td><td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sousTitre"), 'widget', array("attr" => array("placeholder" => "Phrase d'accroche")));
        // line 27
        echo "</td></tr>
                <tr><td>Résumé</td><td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resume"), 'widget', array("attr" => array("placeholder" => "Paragraphe de description")));
        // line 29
        echo "</td></tr>
                    <tr><td>Artistes</td><td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artistes"), 'widget', array("attr" => array("placeholder" => "Personnes participantes")));
        // line 31
        echo "</td></tr>
                        
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        
                        ";
        // line 35
        $context["today"] = twig_date_format_filter($this->env, "now", "d/m/Y");
        // line 36
        echo "                        <tr><td>Date</td><td>
                            <div id=\"datetimepicker\" class=\"input-group date\">
                              ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'widget', array("attr" => array("class" => "form-control", "data-format" => "dd/MM/yyyy
                              hh:mm", "readonly" => "")));
        // line 40
        echo "
                              <span class=\"input-group-addon\">
                                <span class=\"glyphicon glyphicon-calendar\"></span>
                              </span>
                            </div>
                        </td></tr>
                        <tr><td>Lieu</td><td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu"), 'widget', array("attr" => array("placeholder" => "Ex: Cafet' de l'Yvette, 91410 ORSAY")));
        // line 47
        echo "</td></tr>

                            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                            
                            <tr><td>Image *</td><td>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), 'widget');
        echo "</td></tr>            
                            <tr><td id=\"last-attr-label\">Liens</td><td>";
        // line 52
        echo         // line 53
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "liens"), 'widget', array("attr" => array("placeholder" => "Ex: lien1; lien2; lien3... (séparez les liens par \"; \")")));
        // line 54
        echo "</td></tr>
                                
      </table>
      
      <div class=\"buttons btn-group pull-right\">
        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apercu"), 'widget', array("attr" => array("class" => "btn btn-default btn-left")));
        echo "
        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valider"), 'widget', array("attr" => array("class" => "btn btn-success btn-right")));
        echo "
      </div>
      ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>


    <footer>* Le logo sera choisi par défault</footer>

    ";
        // line 68
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "  ";
    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        // line 69
        echo "      ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
      <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.fr.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\">
        \$('#datetimepicker').datetimepicker({ 
        language:'fr',
        useCurrent: true
        });

        // met à jour l'affichage des boutons d'envoi
        // pas trouvé d'autres moyens de le faire...
        document.getElementById(\"gibbonsmasques_corebundle_evenement_apercu\").innerHTML
        = '<span class=\"glyphicon glyphicon-search\"></span> Aperçu';

        document.getElementById(\"gibbonsmasques_corebundle_evenement_valider\").innerHTML
        = '<span class=\"glyphicon glyphicon-ok\"></span> Valider';    
      </script>
    ";
    }

    public function getTemplateName()
    {
        return "GibbonsMasquesCoreBundle:Admin:ajouter_modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 72,  183 => 71,  179 => 70,  174 => 69,  171 => 68,  167 => 88,  165 => 68,  156 => 62,  151 => 60,  147 => 59,  140 => 54,  138 => 53,  137 => 52,  133 => 51,  127 => 47,  125 => 46,  117 => 40,  114 => 38,  110 => 36,  108 => 35,  102 => 31,  100 => 30,  97 => 29,  95 => 28,  92 => 27,  90 => 26,  86 => 25,  85 => 24,  79 => 20,  75 => 18,  73 => 17,  70 => 16,  68 => 15,  59 => 13,  54 => 11,  51 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
