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
        // line 6
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "  
    </head>
    ";
        // line 36
        echo twig_include($this->env, $context, "::header.html.twig");
        echo "
        
         <style>
      .gmaps{
               height: 360px;
            }

        .gmaps img {
                        max-width: none;
        }
        </style>
         <div class=\"curve\">
         <div class=\"col-md-12\">
             <div class=\"col-md-9 col-md-offset-1 if\">
                 <div id=\"map-canvas\" class=\"gmaps\" ></div>
          </div>
         </div>
        </div>
                
   
    <body>
        
        
  

      <div class=\"container\">
     
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-info\" href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\" class=\"brand\">
                        ";
        // line 67
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cambiar Contraseña", array(), "messages");
        // line 68
        echo "                        
                    </a>
                </div>
            </div>
        </div>
      
          <div class=\"row\">
              <div class=\"col-md-12 bg_log\">
                  <div class=\"col-md-4 col-md-offset-4\">
                      <div class=\"round_log\">
                           <h1 class=\" text-center tit_log\">Ingresar</h1>
                        ";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashBag"), "all"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 80
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 81
                echo "                          <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\">
                                    ";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "FOSUserBundle"), "html", null, true);
                echo "
                              </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
                              <div>
                            ";
        // line 88
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 90
        echo "                                  </div>
                              </div>
                      </div>
                  </div>
          </div>

        ";
        // line 96
        echo twig_include($this->env, $context, "::footer.html.twig");
        echo "
        </div>
       
    </body>
</html>";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>    
        <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/map/map.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/map/controller.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/map/api_calls.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/map/render.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/map/main.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/slider/miniSlider.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>        
        <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script> 
        <script type=\"text/javascript\">
                    \$(document).ready(function() {

                        LoadMap();
                         cargarPlaces();
                    });
            </script>

   ";
    }

    // line 88
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 89
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
        return array (  224 => 89,  221 => 88,  207 => 24,  203 => 23,  199 => 22,  195 => 21,  191 => 20,  187 => 19,  183 => 18,  179 => 17,  174 => 15,  170 => 14,  166 => 13,  162 => 12,  158 => 11,  154 => 10,  150 => 9,  146 => 8,  141 => 7,  138 => 6,  121 => 90,  119 => 88,  115 => 86,  109 => 85,  100 => 82,  86 => 79,  73 => 68,  71 => 67,  67 => 66,  34 => 36,  30 => 34,  28 => 6,  21 => 1,  140 => 66,  129 => 96,  118 => 50,  103 => 38,  95 => 81,  90 => 80,  85 => 28,  82 => 27,  78 => 25,  72 => 23,  69 => 22,  66 => 21,  61 => 73,  59 => 27,  56 => 26,  54 => 21,  46 => 17,  39 => 75,  37 => 17,  31 => 15,);
    }
}
