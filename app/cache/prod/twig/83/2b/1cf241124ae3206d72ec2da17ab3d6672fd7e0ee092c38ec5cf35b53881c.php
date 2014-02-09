<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_832b1cf241124ae3206d72ec2da17ab3d6672fd7e0ee092c38ec5cf35b53881c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  70 => 15,  76 => 21,  65 => 17,  84 => 22,  81 => 21,  74 => 21,  53 => 15,  118 => 10,  104 => 52,  90 => 40,  83 => 24,  23 => 4,  52 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 40,  111 => 37,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 52,  131 => 41,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 10,  38 => 8,  94 => 23,  89 => 20,  85 => 25,  79 => 35,  75 => 20,  68 => 29,  56 => 15,  50 => 10,  29 => 5,  87 => 25,  72 => 20,  55 => 19,  21 => 2,  26 => 12,  98 => 27,  93 => 28,  88 => 6,  78 => 21,  46 => 10,  27 => 4,  40 => 7,  44 => 9,  35 => 7,  31 => 6,  43 => 8,  41 => 9,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 53,  136 => 56,  123 => 47,  121 => 11,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 22,  69 => 25,  66 => 17,  62 => 17,  49 => 12,  24 => 7,  32 => 6,  25 => 3,  22 => 2,  19 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 54,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 8,  109 => 34,  106 => 30,  103 => 32,  99 => 31,  95 => 28,  92 => 42,  86 => 24,  82 => 22,  80 => 19,  73 => 16,  64 => 17,  60 => 14,  57 => 11,  54 => 25,  51 => 12,  48 => 12,  45 => 10,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
