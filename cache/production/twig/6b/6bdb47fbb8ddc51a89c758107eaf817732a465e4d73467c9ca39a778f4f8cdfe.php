<?php

/* login_body.html */
class __TwigTemplate_c9eee3ce940a03050a5961c2dd71517120bee4a0719f5a03180a8bf41c2c16f1 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "login_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "    ";
        if (($context["LOGIN_EXPLAIN"] ?? null)) {
            // line 3
            echo "        <div class=\"alert alert-info fade in\">
           <i class=\"fa fa-warning\"></i><strong>&nbsp;";
            // line 4
            echo ($context["LOGIN_EXPLAIN"] ?? null);
            echo "</strong>
        </div>
    ";
        }
        // line 7
        echo " 
    ";
        // line 8
        if (($context["LOGIN_ERROR"] ?? null)) {
            // line 9
            echo "         <div class=\"alert alert-danger fade in\">
           <i class=\"fa fa-warning\"></i><strong>&nbsp;";
            // line 10
            echo ($context["LOGIN_ERROR"] ?? null);
            echo "</strong>
         </div>
    ";
        }
        // line 13
        echo "\t
    <div class=\"panel-login panel-w-form login-full\">
            <div class=\"row\">
                ";
        // line 16
        if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !($context["S_ADMIN_AUTH"] ?? null))) {
            // line 17
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
            // line 19
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CREATE_ACCOUNT");
            echo "</span>
\t\t\t\t</div>
                    <p>";
            // line 21
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_INFO");
            echo "</p>
\t\t\t\t    <p><a href=\"";
            // line 22
            echo ($context["U_TERMS_USE"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TERMS_USE");
            echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
            echo ($context["U_PRIVACY"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVACY");
            echo "</a></p>
\t\t\t\t\t<p><a href=\"";
            // line 23
            echo ($context["U_REGISTER"] ?? null);
            echo "\" class=\"btn btn-default btn-reg-login\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
            echo "</a></p>
                </div>
\t\t\t\t";
        } elseif (        // line 25
($context["S_ADMIN_AUTH"] ?? null)) {
            // line 26
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
            // line 28
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADMIN_TIPS");
            echo "</span>
\t\t\t\t</div>
\t\t\t\t    <p>";
            // line 30
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADMIN_TIP_INTRO");
            echo "</p>
                    <ul>
\t\t\t\t\t<li>";
            // line 32
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADMIN_TIP_ONE");
            echo "</li>
\t\t\t\t    <li>";
            // line 33
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADMIN_TIP_TWO");
            echo "</li>
\t\t\t\t\t<li>";
            // line 34
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADMIN_TIP_THREE");
            echo "</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<p>";
            // line 36
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITESPLAT_URL");
            echo "</p>
                </div>
\t\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
            // line 41
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CREATE_ACCOUNT_DISABLED");
            echo "</span>
\t\t\t\t</div>
                    <p>";
            // line 43
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTRATION_DISABLED");
            echo "</p>
\t\t\t\t    <p><a href=\"";
            // line 44
            echo ($context["U_TERMS_USE"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TERMS_USE");
            echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
            echo ($context["U_PRIVACY"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVACY");
            echo "</a></p>
\t\t\t\t\t<p><a href=\"mailto:";
            // line 45
            echo ($context["BOARD_EMAIL"] ?? null);
            echo "?subject=Registrations%20Closed&body=Dear%20Admin,%20%0A%0AI%20Just%20wanted%20to%20let%20you%20know%20that%20the%20board%20registrations%20are%20closed.%20%0A%0AThis%20might%20be%20an%20error%20and%20I%20would%20like%20to%20register.%20%0A%0APlease%20let%20me%20know%20if%20this%20is%20possible.%0A%0AThanks!\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT_WEBMASTER");
            echo "</a></p>
                </div>
\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
        // line 50
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SIGN_IN_ACCOUNT");
        echo "</span>
\t\t\t\t</div>
\t\t\t\t <form action=\"";
        // line 52
        echo ($context["S_LOGIN_ACTION"] ?? null);
        echo "\" method=\"post\" id=\"login\">
\t\t\t\t  <fieldset>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"sr-only\" for=\"";
        // line 55
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t\t<div class=\"form-icon\">
\t\t\t\t\t <input type=\"text\" class=\"form-control input-lg\" tabindex=\"1\" name=\"";
        // line 57
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\" id=\"";
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\" value=\"";
        echo ($context["USERNAME"] ?? null);
        echo "\" placeholder=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo "\">
\t\t\t\t\t <span class=\"fa fa-user login-form-icon\"></span>
\t\t\t\t\t</div> 
\t\t\t\t    </div> 
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t <label class=\"sr-only\" for=\"";
        // line 62
        echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t\t  <div class=\"form-icon\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control input-lg\" tabindex=\"2\" id=\"";
        // line 64
        echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        echo "\" name=\"";
        echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        echo "\" placeholder=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
        echo "\" autocomplete=\"off\">
\t\t\t\t\t\t<span class=\"fa fa-lock login-form-icon\"></span>
\t\t\t\t\t  </div> 
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t ";
        // line 69
        if (($context["S_DISPLAY_FULL_LOGIN"] ?? null)) {
            // line 70
            echo "\t\t\t\t\t";
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 71
                echo "\t\t\t\t\t<div class=\"checkbox pull-right\">                                              
\t\t\t\t\t <label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"4\">";
                // line 72
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_REMEMBER");
                echo "</label>
\t\t\t\t\t <label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"5\">";
                // line 73
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_HIDE_ME");
                echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t ";
        }
        // line 77
        echo "\t\t\t\t\t<button type=\"submit\" class=\"btn btn btn-primary\" tabindex=\"6\" name=\"login\" value=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
        echo "\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING_LOG_IN");
        echo " <i class='fa-spin fa fa-spinner fa-lg'></i>\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_ME_IN");
        echo "</button>
\t\t\t\t
\t\t\t\t  ";
        // line 79
        if ((($context["S_DISPLAY_FULL_LOGIN"] ?? null) && (($context["U_SEND_PASSWORD"] ?? null) || ($context["U_RESEND_ACTIVATION"] ?? null)))) {
            // line 80
            echo "\t\t\t\t    <div class=\"space10\"></div>
\t\t\t\t\t<p>
\t\t\t\t\t\t";
            // line 82
            if (($context["U_SEND_PASSWORD"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_SEND_PASSWORD"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORGOT_PASS");
                echo "</a>";
            }
            // line 83
            echo "\t\t\t\t\t\t";
            if (($context["U_RESEND_ACTIVATION"] ?? null)) {
                echo "&nbsp;&#124;&nbsp;<a href=\"";
                echo ($context["U_RESEND_ACTIVATION"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESEND_ACTIVATION");
                echo "</a>";
            }
            // line 84
            echo "\t                </p>\t\t\t  
\t\t\t\t  ";
        }
        // line 86
        echo "\t\t\t\t  
\t\t\t\t    ";
        // line 87
        if ((($context["CAPTCHA_TEMPLATE"] ?? null) && ($context["S_CONFIRM_CODE"] ?? null))) {
            // line 88
            echo "\t\t\t\t\t\t<div class=\"space10\"></div>
\t\t\t\t\t\t";
            // line 89
            $value = 3;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 90
            echo "\t\t\t\t\t\t";
            $location = (("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . ""), "login_body.html", 90)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 91
            echo "\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t\t
\t\t\t\t  ";
        // line 93
        echo ($context["S_LOGIN_REDIRECT"] ?? null);
        echo "
\t\t\t\t\t";
        // line 94
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "
\t\t\t\t  </fieldset>
\t\t\t\t  </form>
\t\t\t\t";
        // line 97
        // line 98
        echo "\t\t\t\t";
        if (( !($context["S_ADMIN_AUTH"] ?? null) && ($context["PROVIDER_TEMPLATE_FILE"] ?? null))) {
            // line 99
            echo "\t\t\t\t\t";
            $location = (("" . ($context["PROVIDER_TEMPLATE_FILE"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["PROVIDER_TEMPLATE_FILE"] ?? null)) . ""), "login_body.html", 99)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 100
            echo "\t\t\t\t";
        }
        // line 101
        echo "\t\t\t    </div>  
            </div>
    </div>
";
        // line 104
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "login_body.html", 104)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "login_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 104,  335 => 101,  332 => 100,  319 => 99,  316 => 98,  315 => 97,  309 => 94,  305 => 93,  302 => 92,  299 => 91,  286 => 90,  283 => 89,  280 => 88,  278 => 87,  275 => 86,  271 => 84,  262 => 83,  254 => 82,  250 => 80,  248 => 79,  238 => 77,  235 => 76,  229 => 73,  225 => 72,  222 => 71,  219 => 70,  217 => 69,  205 => 64,  197 => 62,  183 => 57,  175 => 55,  169 => 52,  164 => 50,  160 => 48,  152 => 45,  142 => 44,  138 => 43,  133 => 41,  129 => 39,  123 => 36,  118 => 34,  114 => 33,  110 => 32,  105 => 30,  100 => 28,  96 => 26,  94 => 25,  87 => 23,  77 => 22,  73 => 21,  68 => 19,  64 => 17,  62 => 16,  57 => 13,  51 => 10,  48 => 9,  46 => 8,  43 => 7,  37 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login_body.html", "");
    }
}
