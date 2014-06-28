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
        return array (  19 => 1,  136 => 36,  128 => 23,  116 => 20,  112 => 19,  108 => 18,  104 => 17,  100 => 16,  96 => 15,  90 => 12,  86 => 11,  82 => 10,  78 => 9,  74 => 8,  69 => 7,  66 => 6,  60 => 5,  49 => 39,  47 => 36,  43 => 35,  33 => 10,  30 => 6,  28 => 5,  22 => 1,  198 => 15,  194 => 14,  190 => 13,  186 => 12,  182 => 11,  178 => 10,  174 => 9,  170 => 8,  164 => 6,  161 => 5,  148 => 98,  142 => 95,  139 => 37,  137 => 93,  133 => 91,  124 => 22,  120 => 21,  114 => 86,  107 => 84,  87 => 67,  77 => 60,  68 => 54,  52 => 41,  37 => 11,  35 => 5,  32 => 4,  29 => 9,);
    }
}
