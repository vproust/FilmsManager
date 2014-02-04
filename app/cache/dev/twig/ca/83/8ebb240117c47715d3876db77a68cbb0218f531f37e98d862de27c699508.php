<?php

/* ValentinFilmsManagerBundle:Manager:form.html.twig */
class __TwigTemplate_ca838ebb240117c47715d3876db77a68cbb0218f531f37e98d862de27c699508 extends Twig_Template
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
        echo "<h3>Add</h3>

<div class=\"well\">
  <form method=\"post\" ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
  <input type=\"submit\" class=\"btn btn-primary\" />
</form>
</div>";
    }

    public function getTemplateName()
    {
        return "ValentinFilmsManagerBundle:Manager:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  19 => 1,  137 => 53,  134 => 52,  131 => 51,  127 => 40,  124 => 39,  117 => 11,  114 => 10,  108 => 8,  102 => 55,  100 => 51,  88 => 41,  79 => 35,  68 => 29,  62 => 27,  54 => 25,  49 => 23,  38 => 13,  36 => 10,  31 => 8,  23 => 2,  94 => 23,  91 => 22,  86 => 39,  84 => 22,  81 => 21,  75 => 34,  66 => 17,  61 => 16,  56 => 15,  52 => 24,  46 => 10,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
