<?php

/* ::layout.html.twig */
class __TwigTemplate_ea9abcc56754c237e171268b7cbb570056134ccc3dcc6d15a2a724194cbe134b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "  </head>

  <body>
    <div class=\"container\">
      <div id=\"header\" class=\"hero-unit\">

        <h1>Manage your movies</h1>
        <p>This web application let you manage the movies you've seen</p>
      </div>
      ";
        // line 23
        echo "
";
        // line 24
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 25
            echo "    Loogged on Films Manager as ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo " - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a>
";
        } else {
            // line 27
            echo "    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
";
        }
        // line 29
        echo "
      <div class=\"row\">
        <div id=\"menu\" class=\"span3\">
          <h3>Movies Manager</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("valentin_films_manager_index");
        echo "\">List of movies</a></li>
            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("valentin_films_manager_addUser");
        echo "\">Add a film</a></li>
          </ul>
        </div>
        <div id=\"content\" class=\"span9\">
          ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "        </div>
      </div>

      <hr>

      <footer>
        <p>Valentin Proust 2014</p>
      </footer>
    </div>

  ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "
  </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Film Manager";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "          ";
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        // line 52
        echo "    ";
        // line 53
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 54,  136 => 53,  134 => 52,  131 => 51,  127 => 40,  124 => 39,  117 => 11,  114 => 10,  108 => 8,  102 => 56,  100 => 51,  88 => 41,  86 => 39,  79 => 35,  75 => 34,  68 => 29,  62 => 27,  54 => 25,  52 => 24,  49 => 23,  38 => 13,  36 => 10,  31 => 8,  23 => 2,);
    }
}
