<?php

/* FrontFrontendBundle:Plan:crear.html.twig */
class __TwigTemplate_870a98939e80ac0f9f13748ff3281d14626389ef6b52992b7f81cc4fb5a3e4ba extends Twig_Template
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
        $this->displayBlock('javascript', $context, $blocks);
        // line 33
        echo " <form class=\"form-row\" role=\"form\" method=\"POST\">

        <div class=\"curve\">
    ";
        // line 36
        $this->env->loadTemplate("FrontFrontendBundle:Activity:show_map.html.twig")->display($context);
        // line 37
        echo "    </div>
<div class=\"row actividades\">
\t<h1>Plan</h1>
\t\t<div class=\"col-md-12 child\">
 
        </div><!--child-->
      <div class=\"list_actividad\">  
        <div class=\"row activ\">
   
            <div class=\"form-group\">
             <label>Titulo</label><br/>  

            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tittle"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
             
            <div class=\"form-group\">
            <label>Fecha</label><br/>  

            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'widget');
        echo "
            </div>
            
            <div class=\"form-group\">

            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "registrarionDate"), 'widget', array("attr" => array("type" => "date", "hidden" => true)));
        echo "
            </div>
              
            <div class=\"form-group\">
            <label>Estado</label><br/>  

            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "active"), 'widget', array("attr" => array("class" => "inlineCheckbox1", "type" => "checkbox")));
        echo "
            </div>
              
            
        
       </div>
<h2>Acticvidades</h2>
              <div class=\"row activ\">
              
                  ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actividades"]) ? $context["actividades"] : $this->getContext($context, "actividades")));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 76
            echo "                  <li><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")), "name"), "html", null, true);
            echo "</h3></li>
          
                  
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "              </div>
        </div>
        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save"), 'widget', array("label" => "Guardar"));
        echo "
        <div class=\"fb-like\" data-href=\"http://tolimakids.local/\" data-width=\"292\" data-send=\"true\"></div>
      </div> <!--list_actividad--> 
</div><!--content actividades-->

";
        // line 87
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    // line 4
    public function block_javascript($context, array $blocks = array())
    {
        // line 5
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/Gmap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/controller.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/api_calls.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/render.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/main.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/jquery-ui-1.10.3.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/js/check/check.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/css/jquery-ui.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/css/style.css"), "html", null, true);
        echo "\">
    
        <script type=\"text/javascript\">
          \$(function() {
   
            

            var element = document.createElement('script'); 
            element.type = \"text/javascript\"; 
            element.async = true;
            element.id = \"406153069523025\"
            element.src = \"//connect.facebook.net/es_ES/all.js#xfbml=1\";
            var s = document.getElementsByTagName('script')[0]; 
            s.parentNode.insertBefore(element, s);


          });
          </script>
    ";
    }

    public function getTemplateName()
    {
        return "FrontFrontendBundle:Plan:crear.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 14,  162 => 13,  158 => 12,  154 => 11,  150 => 10,  146 => 9,  142 => 8,  138 => 7,  134 => 6,  129 => 5,  126 => 4,  120 => 87,  112 => 82,  108 => 80,  97 => 76,  93 => 75,  81 => 66,  72 => 60,  64 => 55,  55 => 49,  41 => 37,  39 => 36,  34 => 33,  32 => 4,  29 => 3,);
    }
}
