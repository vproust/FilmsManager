<?php

/* ValentinFilmsManagerBundle:Manager:addFilm.html.twig */
class __TwigTemplate_649989f5160624a3198ec8f467d325b3b115add52b53a809947348c8953eeeff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ValentinFilmsManagerBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'valentinFilmsManager_body' => array($this, 'block_valentinFilmsManager_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ValentinFilmsManagerBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Add a film - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_valentinFilmsManager_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <h2>Add a movie</h2>

  ";
        // line 11
        $this->env->loadTemplate("ValentinFilmsManagerBundle:Manager:form.html.twig")->display($context);
        // line 12
        echo "
  <p>
    You're adding a new movie.
  </p>

";
    }

    public function getTemplateName()
    {
        return "ValentinFilmsManagerBundle:Manager:addFilm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
