<?php

/* GibbonsMasquesCoreBundle:Voir:voir.html.twig */
class __TwigTemplate_e0c65578eb9517df5ea16c4d1ac9ccbcbbde5d112047391078f4b3a853971910 extends Twig_Template
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
        echo "<div class=\"evenement-panel\">
  <img src=\"";
        // line 2
        if ((null === $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo_gibbons.jpg"), "html", null, true);
        } else {
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image"), "getUrl", array(), "method"), "html", null, true);
        }
        echo "\" data-src=\"holder.js/100x80\" alt=\"Image de l'évènement\" class=\"evenement-img\">
            <div class=\"panel panel-informations\">
    <div class=\"panel-heading\">
      <h1 class=\"titre\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "titre"), "html", null, true);
        echo "</h1>
      <h3 class=\"sous-titre\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "sousTitre"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
      <p class=\"resume\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "resume"), "html", null, true);
        echo "</p>

      <span class=\"artistes\">Vous retrouverez pour cet évènement :</span>
      <div class=\"artistes\">
        ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "artistes"), "html", null, true);
        echo "
      </div>
    </div>
    <div class=\"panel-footer\">
      <div class=\"date-lieu-label\">
        <span class=\"date\">";
        // line 19
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "date"), "full", "none")), "html", null, true);
        // line 20
        echo "</span> 
          <br/>
          <span class=\"heure\">";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "date"), "H:i"), "html", null, true);
        echo "</span>
          <hr/>
          <span class=\"lieu\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "lieu"), "html", null, true);
        echo "</span>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "GibbonsMasquesCoreBundle:Voir:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  64 => 22,  60 => 20,  58 => 19,  50 => 14,  43 => 10,  37 => 7,  33 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }
}
