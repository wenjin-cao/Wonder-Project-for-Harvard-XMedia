<?php

/* @sitesplat_flatbootsminicms/event/ss_overall_footer_scripts_before.html */
class __TwigTemplate_9f977ee48ed82722470cc52933a0b55f0ab091c44c7a2f9ebf59624f5adb78eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($context["ENABLE_POPUP_LOGIN"] ?? null)) {
            // line 2
            echo "\t\t<div class=\"modal fade\" id=\"modal-login\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t\t\t\t<h3 class=\"modal-title\">";
            // line 7
            echo ($context["SITENAME"] ?? null);
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
            echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 10
            echo ($context["S_LOGIN_ACTION"] ?? null);
            echo "\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<label for=\"username\" class=\"control-label\">";
            // line 12
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-icon left\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"username\" id=\"username\" placeholder=\"";
            // line 15
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo "\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<label for=\"password\" class=\"control-label\">";
            // line 18
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-icon left\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-key\"></i>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"password\" id=\"password\" placeholder=\"";
            // line 21
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 23
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 24
                echo "\t\t\t\t\t\t\t\t\t<div class=\"controls controls-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"radio\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin-pop\"><label for=\"autologin-pop\">";
                // line 25
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOG_ME_IN");
                echo "</label></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" id=\"load\" name=\"login\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
            echo "\" data-loading-text=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING_LOG_IN");
            echo " <i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
            echo "</button>
\t\t\t\t\t\t\t\t";
            // line 29
            echo ($context["S_LOGIN_REDIRECT"] ?? null);
            echo "
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</form> 
\t\t\t\t\t\t";
            // line 32
            if (($context["PROVIDER_TEMPLATE_FILE"] ?? null)) {
                // line 33
                echo "\t\t\t\t\t\t<div class=\"panel-login panel-login-modal\">
                            ";
                // line 34
                $location = (("" . ($context["PROVIDER_TEMPLATE_FILE"] ?? null)) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . ($context["PROVIDER_TEMPLATE_FILE"] ?? null)) . ""), "@sitesplat_flatbootsminicms/event/ss_overall_footer_scripts_before.html", 34)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 35
                echo "\t\t\t\t\t\t</div>\t
                        ";
            }
            // line 37
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t</div>
\t\t\t\t</div><!-- /.modal-content -->
\t\t\t</div><!-- /.modal-dialog -->
\t\t</div><!-- /.modal -->
";
        }
    }

    public function getTemplateName()
    {
        return "@sitesplat_flatbootsminicms/event/ss_overall_footer_scripts_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  109 => 35,  97 => 34,  94 => 33,  92 => 32,  86 => 29,  77 => 28,  71 => 25,  68 => 24,  66 => 23,  61 => 21,  54 => 18,  48 => 15,  41 => 12,  36 => 10,  28 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@sitesplat_flatbootsminicms/event/ss_overall_footer_scripts_before.html", "");
    }
}
