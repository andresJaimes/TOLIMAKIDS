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
        // line 24
        echo "    </head>
    <body> 

        <div id=\"contaniner\">

                        ";
        // line 29
        echo twig_include($this->env, $context, "::headerindex.html.twig");
        echo "
                        ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 33
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/jquery.cbpFWSlider.min.js"), "html", null, true);
        echo "\"></script>
      


    ";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
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
        return array (  122 => 31,  119 => 30,  110 => 19,  106 => 18,  102 => 17,  98 => 16,  94 => 15,  84 => 11,  80 => 10,  76 => 9,  72 => 8,  67 => 7,  64 => 6,  58 => 5,  46 => 33,  44 => 30,  40 => 29,  33 => 24,  30 => 6,  28 => 5,  22 => 1,  244 => 14,  240 => 13,  236 => 12,  232 => 11,  228 => 10,  224 => 9,  220 => 8,  216 => 7,  211 => 6,  208 => 5,  197 => 112,  187 => 109,  177 => 108,  173 => 106,  170 => 105,  167 => 104,  156 => 101,  153 => 100,  148 => 99,  141 => 97,  136 => 96,  134 => 95,  130 => 93,  126 => 92,  117 => 85,  108 => 83,  105 => 82,  101 => 81,  88 => 12,  77 => 63,  68 => 57,  51 => 43,  37 => 31,  35 => 5,  32 => 4,  29 => 3,);
    }
}
