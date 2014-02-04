<?php

/* ValentinFilmsManagerBundle:Manager:addUser.html.twig */
class __TwigTemplate_59f63bc1e83361521451e2e22618a589232a897247170ecad866adf1f26e2a30 extends Twig_Template
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
        echo "  Add a user - ";
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
    Vous ajoutez un nouvel article.
  </p>

";
    }

    public function getTemplateName()
    {
        return "ValentinFilmsManagerBundle:Manager:addUser.html.twig";
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
