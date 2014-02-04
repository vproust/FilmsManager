<?php

/* ValentinFilmsManagerBundle::layout.html.twig */
class __TwigTemplate_599c917a5b4b25787b2c4e22089ad8358b704c13b85da9e603a4606b90c6172f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'valentinFilmsManager_body' => array($this, 'block_valentinFilmsManager_body'),
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
        echo "    FilmManager - ";
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
        echo "    <h1>Movies sorted by user</h1>

    <hr>

    ";
        // line 17
        echo "    
    ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "info", 1 => "success", 2 => "error"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 19
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 20
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\">
                ";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    ";
        // line 27
        echo "    ";
        $this->displayBlock('valentinFilmsManager_body', $context, $blocks);
        // line 29
        echo "
";
    }

    // line 27
    public function block_valentinFilmsManager_body($context, array $blocks = array())
    {
        // line 28
        echo "    ";
    }

    public function getTemplateName()
    {
        return "ValentinFilmsManagerBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 28,  95 => 27,  90 => 29,  87 => 27,  78 => 24,  69 => 21,  64 => 20,  59 => 19,  55 => 18,  46 => 10,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  84 => 25,  76 => 20,  65 => 18,  61 => 17,  52 => 17,  48 => 13,  42 => 9,  39 => 7,  32 => 4,  29 => 3,);
    }
}
