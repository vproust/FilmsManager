<?php

/* ValentinFilmsManagerBundle:Manager:index.html.twig */
class __TwigTemplate_8c2998830afffda14c122878f49fa381cce677a7f07bf08dc55d09d2ce94b852 extends Twig_Template
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
        echo "Index - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_valentinFilmsManager_body($context, array $blocks = array())
    {
        // line 9
        echo "<h2>My movies</h2>
";
        // line 10
        if (((isset($context["currentUser"]) ? $context["currentUser"] : $this->getContext($context, "currentUser")) != "anon.")) {
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : $this->getContext($context, "currentUser")), "getFilmsManagerUser", array(), "method"), "films"));
            foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
                // line 12
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "name"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getGenre", array(), "method"), "genreName"), "html", null, true);
                echo "  <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("valentin_films_manager_removeFilm", array("id" => $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "id"))), "html", null, true);
                echo "\">Remove this film</a></li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 15
        echo "
<h2>Movies of other Users</h2>

<ul>
  <ul>
    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "</li>
    <ul>

      ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getFilmsManagerUser", array(), "method"), "films"));
            foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
                // line 25
                echo "      <li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "name"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getGenre", array(), "method"), "genreName"), "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
    </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  </ul>
</ul>

";
    }

    public function getTemplateName()
    {
        return "ValentinFilmsManagerBundle:Manager:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 30,  98 => 27,  87 => 25,  83 => 24,  76 => 21,  72 => 20,  65 => 15,  51 => 12,  47 => 11,  45 => 10,  42 => 9,  39 => 7,  32 => 4,  29 => 3,);
    }
}
