<?php

/* FrontFrontendBundle:Plan:plan.html.twig */
class __TwigTemplate_d216ee603bb91cb33b2b4d1195c04cae745fb799c2a97c7db5586e1d14a3aaaa extends Twig_Template
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
        // line 30
        echo "    <style>
       .gmaps{
                 height: 360px;

             }

         .gmaps img {
                         max-width: none;
         }
        </style>
        <div class=\"row\">

            <input type=\"hidden\" id=\"url_crear\" value=\"";
        // line 42
        echo $this->env->getExtension('routing')->getUrl("front_frontend_crear");
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
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget', array("attr" => array("class" => "form-control searche")));
        echo "
                            </div>
                            <div class=\"form-group\">

                                <label>Lugares</label><br/> 

                                     ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "places"), 'widget', array("attr" => array("class" => "form-control searche")));
        echo "
                            </div> 

                            <button type=\"submit\" class=\"btn btn-info btn-sm adde\">Buscar Actividad</button>

                            <input  id=\"lti\" type=\"hidden\" name=\"latitud\" value=\"\"/>
                            <input  id=\"lgi\" type=\"hidden\" name=\"longitud\" value=\"\"/>

                            ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                    </div>  
                </div>
            </div>
            <div class=\"curve\"></div>

            <div class=\"row actividades\">
                <h1>Actividades</h1>

            ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actividades"]) ? $context["actividades"] : $this->getContext($context, "actividades")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 81
            echo "                <div class=\"actividad col-md-10\">   
                    <div class=\"col-md-4\">
                    ";
            // line 83
            if (($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "getGaleryLength") >= 1)) {
                // line 84
                echo "                                    ";
                if ($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "getGalery")) {
                    echo "    
                            <img src=\"";
                    // line 85
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "getFoto"), "getWebPathFile"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "getName"), "html", null, true);
                    echo "\" class=\"img-responsive\" />
                                    ";
                } else {
                    // line 87
                    echo "                                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "getGalery"));
                    foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
                        // line 88
                        echo "                            <nav>
                                <img src=\"";
                        // line 89
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")), "getWebPathFile"), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "getName"), "html", null, true);
                        echo "\" class=\"img-responsive\"/>
                            </nav>                                        
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    echo "                                    ";
                }
                // line 93
                echo "                     ";
            }
            // line 94
            echo "
                        </div>

                        <div class=\"col-md-7\"><h3>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "name"), "html", null, true);
            echo "</h3><p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "description"), "html", null, true);
            echo "</p><br>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "cost"), "html", null, true);
            echo " <a href=\"#\">Ver más</a></br></div>
                        <div class=\"col-md-1\"><input class=\"act\" type=\"checkbox\" id=\"inlineCheckbox1\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "id"), "html", null, true);
            echo "\"></div>

                    </div><!--actividad-->
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "     
                </div><!--content actividades-->
                <input type=\"button\" value=\"Registrar Plan\" id=\"buttonClass\"class=\"btn btn-info btn-sm adde\" > 


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
<script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/Gmap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/controller.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/api_calls.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/render.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/main.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/jquery-ui-1.10.3.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/check/check.js"), "html", null, true);
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
        return "FrontFrontendBundle:Plan:plan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 13,  210 => 12,  206 => 11,  202 => 10,  198 => 9,  194 => 8,  190 => 7,  185 => 6,  182 => 5,  171 => 101,  161 => 98,  153 => 97,  148 => 94,  145 => 93,  142 => 92,  131 => 89,  128 => 88,  123 => 87,  116 => 85,  111 => 84,  109 => 83,  105 => 81,  101 => 80,  88 => 70,  77 => 62,  68 => 56,  51 => 42,  37 => 30,  35 => 5,  32 => 4,  29 => 3,);
    }
}
