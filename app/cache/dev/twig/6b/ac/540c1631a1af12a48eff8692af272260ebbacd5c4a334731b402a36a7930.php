<?php

/* FrontFrontendBundle:Activity:detalle_actividad.html.twig */
class __TwigTemplate_6bac540c1631a1af12a48eff8692af272260ebbacd5c4a334731b402a36a7930 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        $this->displayBlock('javascript', $context, $blocks);
        // line 41
        echo "<input type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "id"), "html", null, true);
        echo "\" id=\"activity_id\"/>
<div class=\"row\">


    <div class=\"curve\">
    ";
        // line 46
        $this->env->loadTemplate("FrontFrontendBundle:Activity:show_map.html.twig")->display($context);
        // line 47
        echo "    </div>
      <div class=\"row actividades\">
          <div class=\"col-md-12 child\"></div><!--child-->
          <div class=\"list_actividad\">
          
      \t\t<div class=\"col-md-8\">
  \t\t\t\t
                <div id=\"cbp-fwslider\" class=\"cbp-fwslider\">
                    <ul>

                              ";
        // line 57
        if (($this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "getGaleryLength") >= 1)) {
            // line 58
            echo "
                                    ";
            // line 59
            if ($this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "getGalery")) {
                echo "    

                        <li><a href=\"#\"> <img src=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "getFoto"), "getWebPathFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "getName"), "html", null, true);
                echo "\" /></a></li>

                                    ";
            }
            // line 64
            echo "

                            ";
        }
        // line 66
        echo " 
                    </ul>
                    
                    
                </div><!--silder detalle-->
       \t\t
            </div>
            
            <div class=\"col-md-4\">
            \t<h1>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "getName"), "html", null, true);
        echo "</h1>
                \t<div>
            \t\t<p>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "getDescription"), "html", null, true);
        echo "</p></div>
                    
                    <div class=\"costo\">
                    <h3>Costos:</h3>
                    <p>Adultos: \$";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "getCosta"), "html", null, true);
        echo "</p>
                    <p>Niños: \$";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "getCost"), "html", null, true);
        echo "</p>
                    </div>
                     <div class=\"calificacion\">
                    <h3>Calificación:</h3>
                    <div class=\"calificar\">
                         <div id=\"star\"></div>
     
                    </div>
            </div>
            <div style=\"clear:both\"></div>
            </div>
      </div> <!--list_actividad-->   

   
 </div> <!--list_actividad--> 

            
";
    }

    // line 3
    public function block_javascript($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
 <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/jquery.cbpFWSlider.min.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/jquery.raty.js"), "html", null, true);
        echo "\"></script>
  <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/css/rating.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
  <script src=\"http://js-kit.com/ratings.js\"></script>

 <script type=\"text/javascript\">
\$( function() {

\$('#star').raty({
  size      : 24,
  starOff   : 'icon_star_ok.png',
  starOn    : 'icon_star.png'
}); 


        //alert(map + \"pru\");
        //alert('sik');
        \$('#cbp-fwslider').cbpFWSlider();
       
       // Detecto la estrella que es presionada
   
        
        
         var element = document.createElement('script'); 
            element.type = \"text/javascript\"; 
            element.async = true;
            element.id = \"406153069523025\"
            element.src = \"//connect.facebook.net/es_ES/all.js#xfbml=1\";
            var s = document.getElementsByTagName('script')[0]; 
            s.parentNode.insertBefore(element, s);
        
            \$('#star1').rating('Score.php', {maxvalue: 5, curvalue:1, id:20});
    });
   
</script>
";
    }

    public function getTemplateName()
    {
        return "FrontFrontendBundle:Activity:detalle_actividad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 7,  140 => 6,  136 => 5,  132 => 4,  129 => 3,  107 => 82,  103 => 81,  96 => 77,  91 => 75,  80 => 66,  75 => 64,  67 => 61,  62 => 59,  59 => 58,  57 => 57,  45 => 47,  43 => 46,  34 => 41,  32 => 3,  29 => 2,);
    }
}
