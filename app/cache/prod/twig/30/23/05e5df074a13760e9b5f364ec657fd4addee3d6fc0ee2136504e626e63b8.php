<?php

/* SavannaPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_302305e5df074a13760e9b5f364ec657fd4addee3d6fc0ee2136504e626e63b8 extends Twig_Template
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
        // line 2
        echo "
<h3>Formulaire d'annonce</h3>

<div class=\"well\">
  ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 9
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row');
        echo "

    <div class=\"form-group\">
      ";
        // line 15
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Titre de l'annonce"));
        echo "

      ";
        // line 18
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "

      <div class=\"col-sm-4\">
        ";
        // line 22
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    ";
        // line 27
        echo "    <div class=\"form-group\">
      ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Contenu de l'annonce"));
        echo "
      ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

  \t<div class=\"form-group\">
  \t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Auteur"));
        echo "
      \t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'errors');
        echo "
      \t<div class=\"col-sm-4\">
      \t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

  \t<div class=\"form-group\">
  \t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Publier"));
        echo "
      \t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'errors');
        echo "
      \t<div class=\"col-sm-1\">
      \t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

  ";
        // line 54
        echo "     <div class=\"form-group\">
\t  <div class=\"col-sm-4\">
  \t\t";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  \t  </div>
  </div>

    ";
        // line 61
        echo "  <div class=\"form-group\">
\t  <div class=\"col-sm-4\">
\t  ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t  </div>
  </div>
  
  ";
        // line 68
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "SavannaPlatformBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 68,  131 => 63,  127 => 61,  120 => 56,  116 => 54,  109 => 47,  104 => 45,  100 => 44,  92 => 39,  87 => 37,  83 => 36,  75 => 31,  70 => 29,  66 => 28,  63 => 27,  55 => 22,  48 => 18,  42 => 15,  36 => 11,  30 => 9,  25 => 6,  19 => 2,);
    }
}
