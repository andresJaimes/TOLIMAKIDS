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
        // line 40
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 43
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
        echo "        
            <script src=\"/bundles/frontfrontend/js/jquery-1.11.1.js\"></script>  
            <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script>  
            <script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
            <script src=\"//code.jquery.com/ui/1.10.4/jquery-ui.js\"></script>
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfronttend/css/slider/EstilosACEX.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        
            <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/Gmap.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/controller.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/api_calls.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/render.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/main.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfronttend/js/slider/miniSlider.js"), "html", null, true);
        echo "\"></script>
   
        
        <script type=\"text/javascript\">   
            \$(document).ready(function() {

                  LoadMap();
                  cargarPlaces();

              });

              \$(function() {
              \$('#slider').miniSlider();
              });
        </script>
              
      
     
";
    }

    // line 43
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
        return array (  114 => 43,  79 => 18,  71 => 16,  66 => 14,  59 => 9,  56 => 8,  51 => 5,  43 => 43,  36 => 40,  34 => 8,  28 => 5,  22 => 1,  151 => 50,  148 => 49,  142 => 6,  139 => 5,  122 => 51,  120 => 49,  116 => 47,  101 => 43,  96 => 42,  91 => 21,  87 => 20,  69 => 33,  65 => 32,  60 => 31,  58 => 30,  44 => 18,  42 => 17,  38 => 16,  29 => 9,  27 => 5,  21 => 1,  180 => 88,  170 => 81,  158 => 74,  147 => 66,  133 => 55,  123 => 48,  117 => 45,  110 => 46,  105 => 39,  102 => 38,  99 => 37,  95 => 35,  89 => 33,  86 => 32,  83 => 19,  77 => 96,  75 => 17,  72 => 36,  70 => 31,  62 => 26,  55 => 23,  48 => 99,  46 => 23,  39 => 18,  37 => 17,  31 => 15,);
    }
}
