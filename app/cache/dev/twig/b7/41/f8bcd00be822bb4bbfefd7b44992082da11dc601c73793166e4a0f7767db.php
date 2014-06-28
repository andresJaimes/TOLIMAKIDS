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
         ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    </head>
    <body> 

           


        <div id=\"contaniner\">

                        ";
        // line 35
        echo twig_include($this->env, $context, "::headerindex.html.twig");
        echo "
                        ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "                      ";
        echo twig_include($this->env, $context, "::footer.html.twig");
        echo "
        </div>
    </body>

</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "<title>Tolima Kids</title>﻿";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/css/component.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/css/slider/EstilosACEX.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>                   
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true\"></script>     
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/controller.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/api_calls.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/render.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/main.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/jquery.cbpFWSlider.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/Gmap.js"), "html", null, true);
        echo "\"></script>


    ";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        // line 37
        echo "
                        ";
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
        return array (  136 => 36,  128 => 23,  116 => 20,  112 => 19,  108 => 18,  104 => 17,  100 => 16,  96 => 15,  90 => 12,  86 => 11,  82 => 10,  78 => 9,  74 => 8,  69 => 7,  66 => 6,  60 => 5,  49 => 39,  47 => 36,  43 => 35,  33 => 27,  30 => 6,  28 => 5,  22 => 1,  198 => 15,  194 => 14,  190 => 13,  186 => 12,  182 => 11,  178 => 10,  174 => 9,  170 => 8,  164 => 6,  161 => 5,  148 => 98,  142 => 95,  139 => 37,  137 => 93,  133 => 91,  124 => 22,  120 => 21,  114 => 86,  107 => 84,  87 => 67,  77 => 60,  68 => 54,  52 => 41,  37 => 28,  35 => 5,  32 => 4,  29 => 3,);
    }
}
