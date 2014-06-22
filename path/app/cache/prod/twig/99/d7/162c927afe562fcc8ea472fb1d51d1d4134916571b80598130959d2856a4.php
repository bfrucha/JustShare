<?php

/* GibbonsMasquesCoreBundle::layout.html.twig */
class __TwigTemplate_99d7162c927afe562fcc8ea472fb1d51d1d4134916571b80598130959d2856a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1\">
    <title> ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
  </head>
  
  ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
  <body>
    
    <div class=\"navbar navbar-inverse navbar-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("gibbons_masques_core_homepage");
        echo "\">Accueil</a></li>
            <li class=\"divider-vertical\"></li>
            <li><a href=\"#\">Formules</a></li>
            <li class=\"divider-vertical\"></li>
            <li><a href=\"#\">Media</a></li>
            <li class=\"divider-vertical\"></li>
            <li><a href=\"#\">Applications</a></li>
            <li class=\"divider-vertical\"></li>
            <li><a href=\"#\">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "    
    
    <footer>
      <hr/>
      Les Gibbons Masqués
    </footer>
    ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "  </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Les Gibbons Masqués";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "241d7ac_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_241d7ac_0") : $this->env->getExtension('assets')->getAssetUrl("css/241d7ac_bootstrap.min_1.css");
            // line 14
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\">
    ";
            // asset "241d7ac_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_241d7ac_1") : $this->env->getExtension('assets')->getAssetUrl("css/241d7ac_gibbons_2.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\">
    ";
        } else {
            // asset "241d7ac"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_241d7ac") : $this->env->getExtension('assets')->getAssetUrl("css/241d7ac.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\">
    ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "  ";
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
        echo "    ";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f1b5a5a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f1b5a5a_0") : $this->env->getExtension('assets')->getAssetUrl("js/f1b5a5a_jquery.min_1.js");
            // line 59
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
      ";
            // asset "f1b5a5a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f1b5a5a_1") : $this->env->getExtension('assets')->getAssetUrl("js/f1b5a5a_bootstrap.min_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
      ";
        } else {
            // asset "f1b5a5a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f1b5a5a") : $this->env->getExtension('assets')->getAssetUrl("js/f1b5a5a.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
      ";
        }
        unset($context["asset_url"]);
        // line 61
        echo "    ";
    }

    public function getTemplateName()
    {
        return "GibbonsMasquesCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 61,  143 => 59,  138 => 55,  135 => 54,  131 => 47,  128 => 46,  124 => 16,  104 => 14,  99 => 10,  96 => 9,  90 => 6,  84 => 62,  82 => 54,  74 => 48,  72 => 46,  55 => 32,  38 => 17,  30 => 6,  23 => 1,  95 => 50,  92 => 49,  81 => 40,  70 => 32,  59 => 24,  48 => 16,  36 => 9,  32 => 5,  29 => 4,);
    }
}
