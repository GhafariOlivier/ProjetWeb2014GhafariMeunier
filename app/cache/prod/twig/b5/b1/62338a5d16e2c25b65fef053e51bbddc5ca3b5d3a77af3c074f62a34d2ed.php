<?php

/* SavannaPlatformBundle::layout.html.twig */
class __TwigTemplate_b5b162338a5d16e2c25b65fef053e51bbddc5ca3b5d3a77af3c074f62a34d2ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'Savannaplatform_body' => array($this, 'block_Savannaplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 10
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 15
        echo "  ";
        $this->displayBlock('Savannaplatform_body', $context, $blocks);
        // line 17
        echo "
";
    }

    // line 15
    public function block_Savannaplatform_body($context, array $blocks = array())
    {
        // line 16
        echo "  ";
    }

    public function getTemplateName()
    {
        return "SavannaPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  68 => 15,  63 => 17,  60 => 15,  54 => 10,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
