<?php

/* addons/sitesplat_login_body.html */
class __TwigTemplate_56924c673ce9f18b0e31742c846f4ee84c5d7a1f74ff691529a2a1d8f0dbf1c9 extends Twig_Template
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
        echo "<div class=\"panel-login panel-w-form\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 4
        if (($context["S_REGISTER_ENABLED"] ?? null)) {
            // line 5
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
            // line 7
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CREATE_ACCOUNT");
            echo "</span>
\t\t\t\t</div>
                    <p>";
            // line 9
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_INFO");
            echo "</p>
\t\t\t\t    <p><a href=\"";
            // line 10
            echo ($context["U_TERMS_USE"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TERMS_USE");
            echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
            echo ($context["U_PRIVACY"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVACY");
            echo "</a></p>
\t\t\t\t\t<p><a href=\"";
            // line 11
            echo ($context["U_REGISTER"] ?? null);
            echo "\" class=\"btn btn-default btn-reg-login\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
            echo "</a></p>
                </div>
\t\t\t\t";
        } else {
            // line 14
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
            // line 16
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CREATE_ACCOUNT_DISABLED");
            echo "</span>
\t\t\t\t</div>
                    <p>";
            // line 18
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTRATION_DISABLED");
            echo "</p>
\t\t\t\t    <p><a href=\"";
            // line 19
            echo ($context["U_TERMS_USE"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TERMS_USE");
            echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
            echo ($context["U_PRIVACY"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVACY");
            echo "</a></p>
\t\t\t\t\t<p><a href=\"mailto:";
            // line 20
            echo ($context["BOARD_EMAIL"] ?? null);
            echo "?subject=Registrations%20Closed&body=Dear%20Admin,%20%0A%0AI%20Just%20wanted%20to%20let%20you%20know%20that%20the%20board%20registrations%20are%20closed.%20%0A%0AThis%20might%20be%20an%20error%20and%20I%20would%20like%20to%20register.%20%0A%0APlease%20let%20me%20know%20if%20this%20is%20possible.%0A%0AThanks!\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT_WEBMASTER");
            echo "</a></p>
                </div>
\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
        // line 25
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SIGN_IN_ACCOUNT");
        echo "</span>
\t\t\t\t</div>
\t\t\t\t";
        // line 27
        // line 28
        echo "\t\t\t\t <form method=\"post\" action=\"";
        echo ($context["S_LOGIN_ACTION"] ?? null);
        echo "\">
\t\t\t\t  <fieldset>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t <label class=\"sr-only\" for=\"username\">";
        // line 31
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t\t<div class=\"form-icon\">
\t\t\t\t\t <input type=\"text\" class=\"form-control input-lg\" name=\"username\" id=\"username\" placeholder=\"";
        // line 33
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo "\">
\t\t\t\t\t <span class=\"fa fa-user login-form-icon\"></span>
\t\t\t\t\t</div> 
\t\t\t\t    </div> 
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t  <label class=\"sr-only\" for=\"password\">";
        // line 38
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t\t  <div class=\"form-icon\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control input-lg\" name=\"password\" id=\"password\" placeholder=\"";
        // line 40
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
        echo "\" autocomplete=\"off\">
\t\t\t\t\t\t<span class=\"fa fa-lock login-form-icon\"></span>
\t\t\t\t\t  </div> 
\t\t\t\t\t</div>
\t\t\t\t    ";
        // line 44
        if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
            // line 45
            echo "\t\t\t\t\t<div class=\"checkbox pull-right\">
\t\t\t\t\t  <label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\">";
            // line 46
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_REMEMBER");
            echo "</label>
\t\t\t\t\t</div>
\t\t\t\t    ";
        }
        // line 49
        echo "\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" name=\"login\" value=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
        echo "\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING_LOG_IN");
        echo "<i class='fa-spin fa fa-spinner fa-lg'></i>\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_ME_IN");
        echo "</button>
\t\t\t\t\t";
        // line 50
        echo ($context["S_LOGIN_REDIRECT"] ?? null);
        echo "
\t\t\t\t  </fieldset>
\t\t\t\t  </form>
\t\t\t\t  ";
        // line 53
        // line 54
        echo "\t\t\t\t";
        // line 55
        echo "\t\t\t    </div>  
            </div>
        </div>
</div>";
    }

    public function getTemplateName()
    {
        return "addons/sitesplat_login_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 55,  159 => 54,  158 => 53,  152 => 50,  143 => 49,  137 => 46,  134 => 45,  132 => 44,  125 => 40,  119 => 38,  111 => 33,  105 => 31,  98 => 28,  97 => 27,  92 => 25,  88 => 23,  80 => 20,  70 => 19,  66 => 18,  61 => 16,  57 => 14,  49 => 11,  39 => 10,  35 => 9,  30 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "addons/sitesplat_login_body.html", "");
    }
}
