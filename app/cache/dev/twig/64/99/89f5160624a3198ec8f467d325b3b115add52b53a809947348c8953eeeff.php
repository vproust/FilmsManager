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
        return array (  84 => 22,  81 => 21,  53 => 15,  137 => 53,  134 => 52,  127 => 40,  124 => 39,  114 => 10,  100 => 51,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 55,  71 => 19,  67 => 15,  63 => 18,  59 => 14,  38 => 13,  94 => 23,  89 => 20,  85 => 25,  75 => 20,  68 => 29,  56 => 15,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 41,  78 => 21,  46 => 10,  27 => 4,  44 => 12,  31 => 8,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 11,  105 => 40,  91 => 22,  62 => 17,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 35,  72 => 16,  69 => 25,  47 => 11,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 51,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 8,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 21,  66 => 17,  55 => 19,  52 => 14,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 24,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 17,  57 => 11,  54 => 25,  51 => 14,  48 => 14,  45 => 17,  42 => 8,  39 => 7,  36 => 10,  33 => 4,  30 => 3,);
    }
}
