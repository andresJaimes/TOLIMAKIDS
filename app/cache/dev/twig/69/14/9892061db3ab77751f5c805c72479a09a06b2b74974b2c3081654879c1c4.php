<?php

/* SonataUserBundle::layout.html.twig */
class __TwigTemplate_69149892061db3ab77751f5c805c72479a09a06b2b74974b2c3081654879c1c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        $this->displayBlock('javascripts', $context, $blocks);
        // line 9
        echo "        
    </head>
    <body class=\"sonata-bc sonata-ba-no-side-menu\">
        
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\" class=\"brand\">
                        ";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("Password Reset", array(), "messages");
        // line 18
        echo "                        
                    </a>
                </div>
            </div>
        </div>
        <div class=\"container-fluid\">
            <div class=\"row-fluid\">
                <div class=\"content span12\">
                    <div class=\"sonata-ba-content\">
                
                    
                        <div>
                            ";
        // line 30
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 31
            echo "                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
                                <a class=\"btn btn-primary\" href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("sonata_user_admin_security_logout");
            echo "\">
                                    ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                </a>
                            ";
        } elseif (false) {
            // line 36
            echo "                                <a class=\"btn btn-primary\" href=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_user_admin_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                            ";
        }
        // line 38
        echo "                        </div>

                        ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashBag"), "all"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 41
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 42
                echo "                                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\">
                                    ";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "FOSUserBundle"), "html", null, true);
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
                        <div>
                            ";
        // line 49
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 51
        echo "                        </div>
                    
                    
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row-fluid footer\">
            <div class=\"span2 offset10 pull-right\">
                <span class=\"label\"><a href=\"http://www.ito-software.com\" rel=\"noreferrer\" target=\"_blank\">Powered by Ito Software</a></span>
            </div>
        </div>
    </body>
</html>";
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        // line 6
        echo "            <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true\"></script>
            <script src=\"/bundles/frontfrontend/js/jquery-1.11.1.js\"></script>
        ";
    }

    // line 49
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 50
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 50,  148 => 49,  142 => 6,  139 => 5,  122 => 51,  120 => 49,  116 => 47,  101 => 43,  96 => 42,  91 => 41,  87 => 40,  69 => 33,  65 => 32,  60 => 31,  58 => 30,  44 => 18,  42 => 17,  38 => 16,  29 => 9,  27 => 5,  21 => 1,  180 => 88,  170 => 81,  158 => 74,  147 => 66,  133 => 55,  123 => 48,  117 => 45,  110 => 46,  105 => 39,  102 => 38,  99 => 37,  95 => 35,  89 => 33,  86 => 32,  83 => 38,  77 => 96,  75 => 36,  72 => 36,  70 => 31,  62 => 26,  55 => 23,  48 => 99,  46 => 23,  39 => 18,  37 => 17,  31 => 15,);
    }
}
