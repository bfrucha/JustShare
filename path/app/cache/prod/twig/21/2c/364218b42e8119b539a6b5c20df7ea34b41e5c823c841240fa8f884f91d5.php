<?php

/* GibbonsMasquesCoreBundle:Index:index.html.twig */
class __TwigTemplate_212c364218b42e8119b539a6b5c20df7ea34b41e5c823c841240fa8f884f91d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GibbonsMasquesCoreBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GibbonsMasquesCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"container\"
       id=\"logo-background\"
       style=\"background: black url('";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo_gibbons.jpg"), "html", null, true);
        echo "') no-repeat;
              background-size:60% 100%\">
    
    <div class=\"events\">
      Dates à venir:
      <a href=\"#\" class=\"event\">
        <ul class=\"list-unstyled\">
          <li><span class=\"title\">Titre</span></li>
          <li><span class=\"subtitle\">Sous-titre</span></li>
          <li><span class=\"date\">";
        // line 16
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_localized_date_filter($this->env, "now", "full", "short")), "html", null, true);
        echo "</span></li>
        </ul>
      </a>
      
      <a href=\"#\" class=\"event\">
        <ul class=\"list-unstyled\">
          <li><span class=\"title\">Titre</span></li>
          <li><span class=\"subtitle\">Sous-titre</span></li>
          <li><span class=\"date\">";
        // line 24
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_localized_date_filter($this->env, "now", "full", "short")), "html", null, true);
        echo "</span></li>
        </ul>
      </a>
      
      <a href=\"#\" class=\"event\">
        <ul class=\"list-unstyled\">
          <li><span class=\"title\">Titre</span></li>
          <li><span class=\"subtitle\">Sous-titre</span></li>
          <li><span class=\"date\">";
        // line 32
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_localized_date_filter($this->env, "now", "full", "short")), "html", null, true);
        echo "</span></li>
        </ul>
      </a>
      
      <a href=\"#\" class=\"event\">
        <ul class=\"list-unstyled\">
          <li><span class=\"title\">Titre</span></li>
          <li><span class=\"subtitle\">Sous-titre</span></li>
          <li><span class=\"date\">";
        // line 40
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_localized_date_filter($this->env, "now", "full", "short")), "html", null, true);
        echo "</span></li>
        </ul>
      </a>
      
    </div>
  </div>
";
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        // line 50
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "GibbonsMasquesCoreBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 50,  92 => 49,  81 => 40,  70 => 32,  59 => 24,  48 => 16,  36 => 7,  32 => 5,  29 => 4,);
    }
}
