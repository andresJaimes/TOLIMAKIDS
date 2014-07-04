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
        // line 17
        $this->displayBlock('sonata_user_login', $context, $blocks);
        // line 75
        echo "</div>
</div>

";
    }

    // line 17
    public function block_sonata_user_login($context, array $blocks = array())
    {
        echo "  
<div class=\"row\">


                    ";
        // line 21
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 26
        echo "
                    ";
        // line 27
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 73
        echo "</div>
            ";
    }

    // line 21
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        // line 22
        echo "                        ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 23
            echo "    <div class=\"alert alert-danger alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 25
        echo "                    ";
    }

    // line 27
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        // line 28
        echo "


<form action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"form\"
                          class=\"form-horizontal\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\"/>
        <div class=\"form-group\">

            <div class=\"col-sm-12\">
                <input type=\"email\" class=\"form-control log\" id=\"inputEmail3\"
                       name=\"_username\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\"
                       required=\"required\" placeholder=\"Nombre de usurio o correo electrónico\"/> 
            </div>
        </div>
        <div class=\"form-group\">

            <div class=\"col-sm-7\">
                <input type=\"password\" class=\"form-control log\" id=\"inputPassword3\"
                       name=\"_password\" required=\"required\" placeholder=\"Contraseña\"/>
            </div>
            <div class=\"col-sm-3\">
                <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-info\"
                       value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-12\">
                <div class=\"checkbox remb\">
                    <label>
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                            ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                    </label>
                </div>
            </div>
        </div>
        <p class=\"tc\">¿Crea tu cuenta en Tolima Kids? <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getUrl("fos_user_registration_register");
        echo "\">Registrate</a></p>
        <ul class=\"social_log\" align=\"center\">
            <li><a href=\"#\"></a></li>
            <li class=\"f_icon\"><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontfrontend/images/facebook.jpg"), "html", null, true);
        echo "\"></a></li>
            <li><a href=\"#\"></a></li>
        </ul>

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
        return array (  143 => 66,  137 => 63,  129 => 58,  118 => 50,  103 => 38,  95 => 33,  90 => 31,  85 => 28,  82 => 27,  78 => 25,  72 => 23,  69 => 22,  66 => 21,  61 => 73,  59 => 27,  56 => 26,  54 => 21,  46 => 17,  39 => 75,  37 => 17,  31 => 15,);
    }
}
