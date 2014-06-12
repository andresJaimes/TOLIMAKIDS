<?php

/* ::frontend.html.twig */
class __TwigTemplate_b741f8bcd00be822bb4bbfefd7b44992082da11dc601c73793166e4a0f7767db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

         
        ";
        // line 8
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        echo "     
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "            <script src=\"/bundles/frontfrontend/js/jquery-1.11.1.js\"></script>  
            <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script>
        
           <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/Gmap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/controller.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/api_calls.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/render.js"), "html", null, true);
        echo "\"></script>
          <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/main.js"), "html", null, true);
        echo "\"></script>
        
        <script type=\"text/javascript\">   
            \$(document).ready(function() {

                  LoadMap();
                  cargarPlaces();

              });
      </script>
";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 30,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  64 => 12,  59 => 9,  56 => 8,  51 => 5,  43 => 30,  34 => 8,  28 => 5,  22 => 1,  118 => 12,  114 => 11,  110 => 10,  106 => 9,  102 => 8,  97 => 7,  94 => 6,  89 => 50,  78 => 47,  75 => 46,  71 => 45,  65 => 42,  60 => 40,  44 => 26,  42 => 6,  39 => 5,  36 => 27,  30 => 3,);
    }
}
