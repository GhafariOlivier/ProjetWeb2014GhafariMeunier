<?php

/* SavannaPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_78a7b78d1e11e2f8c6494ab09ff1477da362a6ccf3440a03324de11caf7edbd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("SavannaPlatformBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Savannaplatform_body' => array($this, 'block_Savannaplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SavannaPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_Savannaplatform_body($context, array $blocks = array())
    {
        // line 9
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 12
        echo twig_include($this->env, $context, "SavannaPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Savanna_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
    }

    public function getTemplateName()
    {
        return "SavannaPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 20,  55 => 12,  50 => 9,  47 => 8,  40 => 5,  37 => 4,  11 => 2,);
    }
}
