<?php

/* FrontFrontendBundle:Places:detalle_lugar.html.twig */
class __TwigTemplate_da117b7c18b6b7bb348ae05a040192500013aece36ba1f67253ac98050bc96ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<input type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")), "id"), "html", null, true);
        echo "\" id=\"places_id\"/>
  
<section class=\"principal\">
    <section class=\"contenido\">
       ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "        </section><!--cierre contenido-->


        <script type=\"text/javascript\">
            \$(document).ready(function() {
                var places_id = \$(\"#places_id\").val();
                cargarPlaces(places_id)
            });
   
            </script>
            
            
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "          
        <section class=\"colocar_contenido\">
            <div id=\"informacion\" class=\"informacion\">
                    ";
        // line 11
        if (((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")) != null)) {
            // line 12
            echo "                    
                    
                    
                    <div class=\"curve\">
                    ";
            // line 16
            $this->env->loadTemplate("FrontFrontendBundle:Places:show_map.html.twig")->display($context);
            // line 17
            echo "                      
                    </div>
                    </div>
                    <div class=\"row actividades\">
                            <h1>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")), "getName"), "html", null, true);
            echo "</h1>
                                    <div class=\"col-md-12 child\">
        
                            </div><!--child-->
                          <div class=\"list_actividad\">
    
                                <div class=\"col-md-12\">
                                    <h1>Detalle</h1>
                                            <div>
                                            <h3>Descripción</h3>    
                                            <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")), "getDescription"), "html", null, true);
            echo "</p></div>
                                            <div>
                                            <h3>Dirección</h3>
                                            <p>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")), "getAddress"), "html", null, true);
            echo "</p></div>

                                        <div class=\"costo\">
                                        <h3>Actividades:</h3>
                                        ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")), "activity"));
            foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
                // line 39
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("front_frontend_actividad_detalle", array("id" => $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "getId"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "name"), "html", null, true);
                echo "</a>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                                        </div>
   
                                </div>
                                <div style=\"clear:both\"></div>
                          </div> <!--list_actividad--> 
                    </div><!--content actividades-->
                    ";
        }
        // line 48
        echo "                    </div>
                </section>
            </section><!--colocar_contenido-->
    ";
    }

    public function getTemplateName()
    {
        return "FrontFrontendBundle:Places:detalle_lugar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 48,  123 => 41,  112 => 39,  108 => 38,  101 => 34,  95 => 31,  82 => 21,  76 => 17,  74 => 16,  68 => 12,  66 => 11,  61 => 8,  58 => 7,  42 => 52,  40 => 7,  32 => 3,  29 => 2,);
    }
}
