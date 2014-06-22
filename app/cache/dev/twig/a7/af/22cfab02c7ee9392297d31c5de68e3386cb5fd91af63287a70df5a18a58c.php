<?php

/* FrontFrontendBundle:Default:index.html.twig */
class __TwigTemplate_a7af22cfab02c7ee9392297d31c5de68e3386cb5fd91af63287a70df5a18a58c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Actividades";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "   
    ";
        // line 6
        $this->displayBlock('javascript', $context, $blocks);
        // line 31
        echo "        <style>
            .gmaps{
               height: 100px ;
               margin: 100px;
               padding: 100px
            }
           .gmaps img {
                 max-width: none;
           }
      </style>
      
      <body onload=\"localize()\"> 
          
       <div id=\"map-canvas\" class=\"gmaps\"></div>
       
      </body>
    

       <input type=\"hidden\" id=\"url_detalle\" value=\"";
        // line 49
        echo $this->env->getExtension('routing')->getUrl("front_frontend_lugar_detalle", array("id" => 0));
        echo "\">
             <form method=\"get\" action=\".\">
                   ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                   <input type=\"submit\" name=\"submit-filter\" value=\"filter\" />
               </form>
       <p><input  id=\"lti\" value=\"\" type=\"hidden\" name=\"latitud\"/></p>
       <p><input  id=\"lgi\" value=\"\" type=\"hidden\" name=\"longitud\"/></p>

                
                ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) ? $context["activities"] : $this->getContext($context, "activities")));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 59
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("front_frontend_actividad_detalle", array("id" => $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "name"), "html", null, true);
            echo "</a>
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                        
                <div id=\"accordion\">
                    <h3>Section 1</h3>
                    <div>
                      ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 67
            echo "                        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "name"), "html", null, true);
            echo " </li>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                    </div>                     
                </div>             
                
     

";
    }

    // line 6
    public function block_javascript($context, array $blocks = array())
    {
        // line 7
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/Gmap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/controller.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/api_calls.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/render.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/main.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/jquery-ui-1.10.3.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css\">
        <script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
        <script src=\"//code.jquery.com/ui/1.10.3/jquery-ui.js\"></script>
        <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">

        <script type=\"text/javascript\">   
            \$(document).ready(function() {

                  LoadMap();
                  cargarPlaces();


              });
 

      </script>
    ";
    }

    public function getTemplateName()
    {
        return "FrontFrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 13,  147 => 12,  143 => 11,  139 => 10,  135 => 9,  131 => 8,  126 => 7,  123 => 6,  114 => 69,  105 => 67,  101 => 66,  95 => 62,  83 => 59,  79 => 58,  69 => 51,  64 => 49,  44 => 31,  42 => 6,  39 => 5,  36 => 4,  30 => 3,);
    }
}
