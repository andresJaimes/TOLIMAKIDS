<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_680226ad14a9b0f334b0ba3ae494dbca5ba78659c821c56a508af94f031e5da0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_security_roles_widget' => array($this, 'block_sonata_security_roles_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"editable\">
        <h4>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_editable", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4>
        ";
        // line 5
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    </div>
    ";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["read_only_choices"]) ? $context["read_only_choices"] : null)) > 0)) {
            // line 8
            echo "    <div class=\"readonly\">
        <h4>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_readonly", array(), "SonataUserBundle"), "html", null, true);
            echo "</h4>
        <ul>
        ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["read_only_choices"]) ? $context["read_only_choices"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 12
                echo "            <li>";
                echo twig_escape_filter($this->env, (isset($context["choice"]) ? $context["choice"] : null), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  54 => 12,  50 => 11,  45 => 9,  42 => 8,  31 => 4,  26 => 2,  20 => 1,  19 => 1,  116 => 28,  113 => 27,  105 => 17,  101 => 16,  97 => 15,  93 => 14,  88 => 12,  84 => 11,  80 => 10,  76 => 9,  72 => 8,  67 => 7,  64 => 6,  58 => 5,  46 => 30,  44 => 27,  40 => 7,  33 => 10,  30 => 6,  28 => 3,  22 => 1,  194 => 14,  190 => 13,  186 => 12,  182 => 11,  178 => 10,  174 => 9,  170 => 8,  164 => 6,  161 => 5,  148 => 97,  142 => 94,  139 => 93,  137 => 92,  133 => 90,  124 => 87,  120 => 86,  114 => 85,  107 => 83,  87 => 66,  77 => 59,  68 => 53,  52 => 40,  37 => 11,  35 => 5,  32 => 4,  29 => 9,);
    }
}
