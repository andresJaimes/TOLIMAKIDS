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
        // line 35
        echo "<input type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "id"), "html", null, true);
        echo "\" id=\"activity_id\"/>
<div class=\"row\">


    <div class=\"curve\">
    ";
        // line 40
        $this->env->loadTemplate("FrontFrontendBundle:Activity:show_map.html.twig")->display($context);
        // line 41
        echo "    </div>
      <div class=\"row actividades\">
          <div class=\"col-md-12 child\"></div><!--child-->
          <div class=\"list_actividad\">
          
      \t\t<div class=\"col-md-8\">
  \t\t\t\t
                <div id=\"cbp-fwslider\" class=\"cbp-fwslider\">
                    <ul>

                              ";
        // line 51
        if (($this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "getGaleryLength") >= 1)) {
            // line 52
            echo "
                                    ";
            // line 53
            if ($this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "getGalery")) {
                echo "    

                        <li><a href=\"#\"> <img src=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "getFoto"), "getWebPathFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "getName"), "html", null, true);
                echo "\" /></a></li>

                                    ";
            }
            // line 58
            echo "

                            ";
        }
        // line 60
        echo " 
                    </ul>
                    
                    
                </div><!--silder detalle-->
       \t\t
            </div>
            
            <div class=\"col-md-4\">
            \t<h1>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "getName"), "html", null, true);
        echo "</h1>
                \t<div>
            \t\t<p>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "getDescription"), "html", null, true);
        echo "</p></div>
                    
                    <div class=\"costo\">
                    <h3>Costos:</h3>
                    <p>Adultos: \$";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "getCosta"), "html", null, true);
        echo "</p>
                    <p>Niños: \$";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "getCost"), "html", null, true);
        echo "</p>
                    </div>
                     <div class=\"calificacion\">
                    <h3>Calificación:</h3>
                    <div class=\"calificar\">
                         <ul>
                             <div class=\"ffbs_rating_wrapper\">
<div id='rate_2mea1fbv' class='ffbs_rate ffbs_rate_border ffbs_centered' data-label-rating='icon' data-label-views='icon' data-label-votes='icon'>
<!--{[['<img src=\"http://static.graddit.com/img/star_blue.png\"/>']]}--></div>
<div id='stats_2mea1fbv' class='ffbs_stats ffbs_centered'></div>
<div id='share_2mea1fbv' class='ffbs_share ffbs_share_border ffbs_centered'></div></div>
<script type='text/javascript' src='http://www.graddit.com/rate/rus/5/2mea1fbv?id=rate_2mea1fbv&stats=stats_2mea1fbv&info=info&info_delay=2&class_star=ffbs_star_img&class_star_set=ffbs_star_img_set&class_star_vote=ffbs_star_img_vote&views=yes&votes=yes&average=yes&share=share_2mea1fbv'></script>
                         </ul>
                     <div class=\"fb-like\" data-href=\"http://tolimakids.local/\" data-width=\"292\" data-send=\"true\"></div>
                        </div>
                    
                     
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/rating.js"), "html", null, true);
        echo "\"></script>
  <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/css/rating.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
  <script src=\"http://js-kit.com/ratings.js\"></script>

 <script type=\"text/javascript\">
\$( function() {


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
        return array (  154 => 7,  150 => 6,  146 => 5,  142 => 4,  139 => 3,  107 => 76,  103 => 75,  96 => 71,  91 => 69,  80 => 60,  75 => 58,  67 => 55,  62 => 53,  59 => 52,  57 => 51,  45 => 41,  43 => 40,  34 => 35,  32 => 3,  29 => 2,);
    }
}
