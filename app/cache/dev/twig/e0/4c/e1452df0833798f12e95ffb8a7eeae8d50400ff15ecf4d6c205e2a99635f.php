<?php

/* SonataUserBundle:Security:base_login.html.twig */
class __TwigTemplate_e04ce1452df0833798f12e95ffb8a7eeae8d50400ff15ecf4d6c205e2a99635f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascript' => array($this, 'block_javascript'),
            'sonata_user_login' => array($this, 'block_sonata_user_login'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        echo "  
";
        // line 16
        $this->displayBlock('javascript', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->env->loadTemplate("::frontend.html.twig")->display($context);
        // line 26
        echo "
    
    <div class=\"col-sm-6\">
      
      
      ";
        // line 31
        $this->displayBlock('sonata_user_login', $context, $blocks);
        // line 107
        echo "    </div>
</div>

";
    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        // line 17
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
<link href=\"css/bootstrap-theme.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"css/bootstrap.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\">
<script type=\"text/javascript\" src=\"js/jquery.js\"></script>
<script type=\"text/javascript\" src=\"js/bootstrap.js\"></script>
";
    }

    // line 31
    public function block_sonata_user_login($context, array $blocks = array())
    {
        echo "  
     
                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
                </div>

                <div class=\"panel-body\">
                   
                    ";
        // line 39
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 44
        echo "
                    ";
        // line 45
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 104
        echo "            </div>
        </div>
            ";
    }

    // line 39
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        // line 40
        echo "                        ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 41
            echo "                    <div class=\"alert alert-danger alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 43
        echo "                    ";
    }

    // line 45
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        // line 46
        echo "                    
                    <form action=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"form\"
                          class=\"form-horizontal\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                        <div class=\"form-group\">
                            <label for=\"username\"
                                   class=\"col-sm-4 control-label\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>

                            <div class=\"col-sm-8\"><input type=\"text\" class=\"form-control\" id=\"username\"
                                                         name=\"_username\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                                                         required=\"required\"/></div>
                        </div>


                        <div class=\"form-group control-group\">
                            <label for=\"password\"
                                   class=\"col-sm-4 control-label\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>

                            <div class=\"col-sm-8\"><input type=\"password\" class=\"form-control\" id=\"password\"
                                                         name=\"_password\" required=\"required\"/></div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-4 col-sm-8\">
                                <div class=\"checkbox control-group\">
                                    <label for=\"remember_me\">
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                            ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group control-group\">
                            <div class=\"controls col-sm-offset-4 col-sm-8\">
                                <a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-4 col-sm-8\">
                                <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\"
                                       value=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                            </div>
                        </div>


                        <div class=\"login\">

                            <a class=\"facebook btn\" href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\">
                                <div class=\"btn-icon fb-icon\"></div>
                                Login with Facebook
                            </a>
                    </form>
                  
                 </div>
                    ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 96,  189 => 89,  177 => 82,  166 => 74,  152 => 63,  142 => 56,  136 => 53,  129 => 49,  124 => 47,  121 => 46,  118 => 45,  114 => 43,  108 => 41,  105 => 40,  102 => 39,  96 => 104,  94 => 45,  91 => 44,  89 => 39,  81 => 34,  74 => 31,  63 => 17,  60 => 16,  53 => 107,  51 => 31,  44 => 26,  42 => 25,  39 => 24,  37 => 16,  32 => 15,);
    }
}
