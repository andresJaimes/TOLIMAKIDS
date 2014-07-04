<?php

/* FrontFrontendBundle:Default:index.html.twig */
class __TwigTemplate_a7af22cfab02c7ee9392297d31c5de68e3386cb5fd91af63287a70df5a18a58c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('javascript', $context, $blocks);
        // line 27
        echo "
  
    <style>
      .gmaps{
                height: 360px;

            }

        .gmaps img {
                        max-width: none;
        }
        </style>
        <div class=\"row\">
            <input type=\"hidden\" id=\"url_detalle\" value=\"";
        // line 40
        echo $this->env->getExtension('routing')->getUrl("front_frontend_lugar_detalle", array("id" => 0));
        echo "\">
            <div class=\"col-md-12\">
               <div class=\"col-md-9 col-md-offset-1 if\"><div id=\"map-canvas\" class=\"gmaps\"></div></div>
                    <div class=\"row\">
                          <div class=\"col-md-6 col-md-offset-3 buscar1\">
                              
                            <h1 class=\"text-center\">Buscar Actividad</h1>
                            
                            <form class=\"form-inline\" action=\".\"  method=\"GET\" role=\"form\">
                                    <div class=\"form-group\">
                                        
                                     <label>Actividad</label><br/>  
                                     
                                     ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'widget', array("attr" => array("class" => "form-control searche")));
        echo "
                                     </div>
                                     <div class=\"form-group\">
                                         
                                     <label>Lugares</label><br/> 
                                     
                                     ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "places"), 'widget', array("attr" => array("class" => "form-control searche")));
        echo "
                                    </div> 
                            
                                    <button type=\"submit\" class=\"btn btn-info btn-sm adde\">Buscar Actividad</button>
                                 
                                     <input  id=\"lti\" type=\"hidden\" name=\"latitud\" value=\"\"/>
                                     <input  id=\"lgi\" type=\"hidden\" name=\"longitud\" value=\"\"/>
                            ";
        // line 66
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                          
                                 
                        </div>  
                    </div>
           </div>

          

        <div class=\"curve\"></div>

    <div class=\"row actividades\">
\t<h1>Lista de actividades</h1>
\t\t<div class=\"col-md-12 child\">
      
        </div><!--child-->
        <div class=\"list_actividad\">  
            ";
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actividades"]) ? $context["actividades"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            echo "  
            <div class=\"row activ\">
                <div class=\"col-md-8\"> <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("front_frontend_actividad_detalle", array("id" => $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "getId"))), "html", null, true);
            echo "\"><h4>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "name"), "html", null, true);
            echo "</h4></a></div>
                <div class=\"col-md-4\"><p class=\"text-right fecha\">";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "cost"), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-12\"><p>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : null), "description"), "html", null, true);
            echo "</p></div>
             </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "            
            </div> <!--list_actividad--> 
            ";
        // line 92
        if ((twig_length_filter($this->env, (isset($context["actividades"]) ? $context["actividades"] : null)) > 0)) {
            // line 93
            echo "               <div class=\"paginador\">
                    <a href=\"";
            // line 94
            echo $this->env->getExtension('knp_pagination')->render((isset($context["actividades"]) ? $context["actividades"] : null));
            echo "\"/>      
                </div> 
            ";
        }
        // line 97
        echo "      </div>

       


 
      </div>
           
        
";
    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        // line 6
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
          <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script>    
            <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/map2/Gmap2.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/map2/controller.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/map2/api_calls.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/map2/render.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/map2/main.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/map2/jquery-ui.js"), "html", null, true);
        echo "\"></script>        
            <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/map2/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script> 
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
        return array (  194 => 14,  190 => 13,  186 => 12,  182 => 11,  178 => 10,  174 => 9,  170 => 8,  164 => 6,  161 => 5,  148 => 97,  142 => 94,  139 => 93,  137 => 92,  133 => 90,  124 => 87,  120 => 86,  114 => 85,  107 => 83,  87 => 66,  77 => 59,  68 => 53,  52 => 40,  37 => 27,  35 => 5,  32 => 4,  29 => 3,);
    }
}
