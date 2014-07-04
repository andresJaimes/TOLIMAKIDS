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
        // line 21
        echo "    </head>
    <body> 

        <div id=\"contaniner\">

                        ";
        // line 26
        echo twig_include($this->env, $context, "::headerindex.html.twig");
        echo "
                        ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 30
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

        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/jquery.cbpFWSlider.min.js"), "html", null, true);
        echo "\"></script>


    ";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 28
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
        return array (  116 => 28,  113 => 27,  105 => 17,  101 => 16,  97 => 15,  93 => 14,  88 => 12,  84 => 11,  80 => 10,  76 => 9,  72 => 8,  67 => 7,  64 => 6,  58 => 5,  46 => 30,  44 => 27,  40 => 26,  33 => 21,  30 => 6,  28 => 5,  22 => 1,  194 => 14,  190 => 13,  186 => 12,  182 => 11,  178 => 10,  174 => 9,  170 => 8,  164 => 6,  161 => 5,  148 => 97,  142 => 94,  139 => 93,  137 => 92,  133 => 90,  124 => 87,  120 => 86,  114 => 85,  107 => 83,  87 => 66,  77 => 59,  68 => 53,  52 => 40,  37 => 27,  35 => 5,  32 => 4,  29 => 3,);
    }
}
