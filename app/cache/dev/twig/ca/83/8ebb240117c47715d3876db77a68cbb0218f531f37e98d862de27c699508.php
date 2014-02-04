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
        // line 2
        echo "
";
        // line 5
        echo "
<h3>Add</h3>

";
        // line 9
        echo "<div class=\"well\">
  <form method=\"post\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 11
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
        return array (  34 => 11,  30 => 10,  27 => 9,  22 => 5,  19 => 2,  49 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
