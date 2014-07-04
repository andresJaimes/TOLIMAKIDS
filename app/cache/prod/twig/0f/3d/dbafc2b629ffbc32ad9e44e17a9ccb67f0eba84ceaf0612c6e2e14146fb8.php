<?php

/* ::headerindex.html.twig */
class __TwigTemplate_0f3ddbafc2b629ffbc32ad9e44e17a9ccb67f0eba84ceaf0612c6e2e14146fb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<body>   
    <div class=\"back2\"></div> 
    <div class=\"container\">
     <div class=\"row\">
        <div class=\"col-md-6\"><h1 class=\"tolkid\">Tolima Kids</h1></div>
        <div class=\"col-md-6\">
        \t<ul class=\"list-inline menu\">
            \t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getUrl("front_frontend_homepage");
        echo "\">Inicio</a></li>
                <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("front_frontend_plan");
        echo "\">Crear Plan</a></li>
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("fos_user_security_logout");
        echo "\">Salir</a></li>
            </ul>
        </div>
    </div>

</body>
 
";
    }

    public function getTemplateName()
    {
        return "::headerindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  116 => 28,  113 => 27,  105 => 17,  101 => 16,  97 => 15,  93 => 14,  88 => 12,  84 => 11,  80 => 10,  76 => 9,  72 => 8,  67 => 7,  64 => 6,  58 => 5,  46 => 30,  44 => 27,  40 => 26,  33 => 10,  30 => 6,  28 => 5,  22 => 1,  194 => 14,  190 => 13,  186 => 12,  182 => 11,  178 => 10,  174 => 9,  170 => 8,  164 => 6,  161 => 5,  148 => 97,  142 => 94,  139 => 93,  137 => 92,  133 => 90,  124 => 87,  120 => 86,  114 => 85,  107 => 83,  87 => 66,  77 => 59,  68 => 53,  52 => 40,  37 => 11,  35 => 5,  32 => 4,  29 => 9,);
    }
}
