<?php

/* @sitesplat_flatbootsminicms/event/flatboots_navigation_instead.html */
class __TwigTemplate_1c2647c06823c0173c87f5413ba1f10b6ef52415e34cd088941706385b29f2b1 extends Twig_Template
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
        echo "<!-- Main navigation block -->
<nav class=\"collapse navbar-collapse flat-nav-collapse\" aria-label=\"Primary\">
    ";
        // line 3
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 4
            echo "\t<div class=\"user-login hidden-lg hidden-md hidden-sm\">
\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t<li class=\"dropdown dropdown-avatar\">
\t\t\t\t<a href=\"javascript:void(0)\" data-toggle=\"dropdown\" class=\"user-menu\">
\t\t\t\t ";
            // line 8
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
                echo "&nbsp;";
            }
            echo "&nbsp;<span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WELCOME_INDEX");
            echo "&#44;&nbsp;";
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "<i class=\"caret\"></i></span>
\t\t\t\t</a>
\t\t\t\t<ul class=\"dropdown-menu usermenu\">
\t\t\t\t   <li><a title=\"\" href=\"";
            // line 11
            echo ($context["U_UCP_PREFERENCE"] ?? null);
            echo "\"><i class=\"fa fa-user\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP_PROFILE");
            echo "</a></li>
\t\t\t\t   <li><a title=\"\" href=\"";
            // line 12
            echo ($context["U_PRIVATEMSGS"] ?? null);
            echo "\"><i class=\"fa fa-inbox\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP_MESSAGES");
            echo "&nbsp;&nbsp;<span class=\"badge badge-info\">";
            if ((($context["S_DISPLAY_PM"] ?? null) && ($context["S_USER_UNREAD_PRIVMSG"] ?? null))) {
                echo ($context["S_USER_UNREAD_PRIVMSG"] ?? null);
            } else {
                echo ($context["S_USER_NEW_PRIVMSG"] ?? null);
            }
            echo "</span></a></li>
\t\t\t\t   ";
            // line 13
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                echo "\t
\t\t\t\t\t <li><a title=\"\" href=\"";
                // line 14
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\"><i class=\"fa fa-bell\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
                echo "&nbsp;&nbsp;";
                if ( !twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "notifications", array()))) {
                } else {
                    echo "<span class=\"badge badge-info\">";
                    echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                    echo "</span>";
                }
                echo "</a></li>
\t\t\t\t   ";
            }
            // line 16
            echo "\t\t\t\t   ";
            // line 17
            echo "\t\t\t\t   <li><a title=\"\" href=\"";
            echo ($context["U_UCP_PROFILE_SETTINGS"] ?? null);
            echo "\"><i class=\"fa fa-cog\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP_PROFILE_SETTINGS");
            echo "</a></li>
\t               ";
            // line 18
            if (($context["U_ACP"] ?? null)) {
                echo "<li><a title=\"\" href=\"";
                echo ($context["U_ACP"] ?? null);
                echo "\"><i class=\"fa fa-user-md\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADMIN_PANEL_GENERAL");
                echo "</a></li>";
            }
            // line 19
            echo "\t               ";
            if (($context["U_MCP"] ?? null)) {
                echo "<li><a href=\"";
                echo ($context["U_MCP"] ?? null);
                echo "\"><i class=\"fa fa-legal\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR_PANEL_GENERAL");
                echo "</a></li>";
            }
            // line 20
            echo "\t\t\t\t   ";
            if ((($context["S_REGISTERED_USER"] ?? null) &&  !(($context["U_ACP"] ?? null) || ($context["U_MCP"] ?? null)))) {
                echo "<li><a href=\"";
                echo ($context["U_PROFILE"] ?? null);
                echo "\"><i class=\"fa fa-user\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_PANEL");
                echo "</a></li>";
            }
            // line 21
            echo "\t\t\t\t   ";
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                echo "<li><a href=\"";
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\"><i class=\"fa fa-random\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 22
            echo "\t\t\t\t  <li><a title=\"\" href=\"";
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\"><i class=\"fa fa-power-off\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGOUT");
            echo "</a></li>
\t\t\t\t  ";
            // line 23
            // line 24
            echo "\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
\t</div>
\t";
        }
        // line 29
        echo "
<ul class=\"nav navbar-nav navbar-nav-fancy\">
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 32
            echo "\t\t<li class=\"dropdown\">
\t\t\t";
            // line 33
            if ( !twig_length_filter($this->env, $this->getAttribute($context["menu"], "sub", array()))) {
                // line 34
                echo "\t\t\t <a href=\"";
                echo $this->getAttribute($context["menu"], "URL", array());
                echo "\"";
                if ($this->getAttribute($context["menu"], "EXTERNAL", array())) {
                    echo " target=\"_blank\"";
                }
                echo ">";
                echo $this->getAttribute($context["menu"], "NAME", array());
                echo "</a>
\t\t\t ";
            } else {
                // line 36
                echo "\t\t\t <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                echo $this->getAttribute($context["menu"], "NAME", array());
                echo "&nbsp;<b class=\"caret\"></b></a>
\t\t\t ";
            }
            // line 38
            echo "\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute($context["menu"], "sub", array()))) {
                // line 39
                echo "\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu"], "sub", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                    // line 41
                    echo "\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute($context["sub"], "URL", array());
                    echo "\"";
                    if ($this->getAttribute($context["sub"], "EXTERNAL", array())) {
                        echo " target=\"_blank\"";
                    }
                    echo "><i class=\"";
                    echo $this->getAttribute($context["sub"], "ICON", array());
                    echo " icon-flip-horizontal\"></i>&nbsp;";
                    echo $this->getAttribute($context["sub"], "NAME", array());
                    echo "</a></li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "\t\t\t</ul>
\t\t\t";
            }
            // line 45
            echo "\t\t</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</ul>

<!-- Remove ext links -->
";
        // line 50
        if (($context["S_ALLOW_CUSTOMLINKS"] ?? null)) {
            // line 51
            echo "<ul class=\"nav navbar-nav navbar-nav-fancy extension-links\">
    <li class=\"dropdown\">
      <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 53
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MORE");
            echo "&nbsp;<b class=\"caret\"></b></a>
       <span class=\"dropdown-arrow\"></span>
        <ul class=\"dropdown-menu\">
\t\t\t";
            // line 56
            // line 57
            echo "\t\t\t <li><a href=\"";
            echo ($context["U_FAQ"] ?? null);
            echo "\"><i class=\"fa fa-question-circle\"></i>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ");
            echo "</a></li>
\t\t\t";
            // line 58
            // line 59
            echo "        </ul>
    </li>
</ul>
";
        }
        // line 63
        echo "<!-- Remove ext links -->

";
        // line 65
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 66
            echo "    <ul class=\"nav navbar-nav navbar-right navbar-nav-fancy\">
\t    ";
            // line 67
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["S_REGISTER_ENABLED"] ?? null)) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
                // line 68
                echo "\t\t<li><a href=\"";
                echo ($context["U_REGISTER"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CREATE_ACCOUNT");
                echo "</a></li>
\t   ";
            }
            // line 70
            echo "\t    ";
            if ( !($context["ENABLE_POPUP_LOGIN"] ?? null)) {
                // line 71
                echo "\t\t\t<li><a href=\"";
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
                echo "</a></li>
\t\t";
            } else {
                // line 73
                echo "\t\t\t<li><a href=\"\" data-toggle=\"modal\" data-target=\"#modal-login\" role=\"button\" data-toggle=\"modal\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
                echo "</a></li>
\t\t";
            }
            // line 75
            echo "\t</ul>
\t";
        }
        // line 77
        echo "\t  
\t";
        // line 78
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 79
            echo "\t<div class=\"user-login hidden-xs\">
\t\t<ul class=\"nav navbar-nav navbar-right navbar-nav-fancy\">
\t\t";
            // line 81
            // line 82
            echo "\t\t<li><a class=\"btn-search\" href=\"javascript:void(0)\"><i class=\"fa fa-lightbulb-o\"></i></a></li>
\t\t";
            // line 83
            // line 84
            echo "\t\t";
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                echo "\t
\t\t    <li class=\"dropdown dropdown-avatar dropdown-notification\">
\t\t\t  <a id=\"notification_list_button\" href=\"javascript:void(0)\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i>";
                // line 86
                if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "notifications", array())) && ($context["NOTIFICATIONS_COUNT"] ?? null))) {
                    echo "<em class=\"notifications badge badge-danger\">";
                    echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                    echo "</em>";
                }
                echo "</a>
                <ul class=\"dropdown-menu user-login-drop arrow-up\">
                 <li><a href=\"";
                // line 88
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\" class=\"notification-heading\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
                echo "</a></li>
                   ";
                // line 89
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "@sitesplat_flatbootsminicms/event/flatboots_navigation_instead.html", 89)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 90
                echo "                </ul>
            </li>
\t\t";
            }
            // line 93
            echo "\t\t\t
\t\t\t<li class=\"dropdown dropdown-avatar\">
\t\t\t  <a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
\t\t\t   ";
            // line 96
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
                echo "&nbsp;";
            } else {
                echo "<img src=\"";
                echo ($context["T_THEME_PATH"] ?? null);
                echo "/images/user4.png\" alt=\"No avatar\">";
            }
            echo "&nbsp;<span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WELCOME_INDEX");
            echo "&#44;&nbsp;";
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "<i class=\"caret\"></i></span>
\t\t\t  </a>
                ";
            // line 98
            if (($context["S_USER_NEW_PRIVMSG"] ?? null)) {
                echo "<em class=\"notifications-pm badge badge-warning\">";
                echo ($context["PM_NEW_COUNT_BADGE"] ?? null);
                echo "</em>";
            } elseif (($context["S_USER_UNREAD_PRIVMSG"] ?? null)) {
                echo "<em class=\"notifications-pm badge badge-success\">";
                echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                echo "</em>";
            }
            echo "                   
\t\t\t\t   <ul class=\"dropdown-menu user-login-drop arrow-up\">
                        <li>";
            // line 100
            if (($context["S_USER_NEW_PRIVMSG"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\">";
                echo ($context["PM_NEW_COUNT"] ?? null);
                echo "</a>";
            } elseif (($context["S_USER_UNREAD_PRIVMSG"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\">";
                echo ($context["PM_UNREAD_COUNT"] ?? null);
                echo "</a>";
            } else {
                echo "<a href=\"";
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_PMS_INFO");
                echo "</a>";
            }
            echo "</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"navbar-wrapper\">
                              <div class=\"navbar-content navbar-avatar\">
                                    <div class=\"row\">
                                        <div class=\"col-md-5 col-xs-5\">
                                          ";
            // line 106
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
            } else {
                echo "<img src=\"";
                echo ($context["T_THEME_PATH"] ?? null);
                echo "/images/user4.png\" alt=\"No avatar\">";
            }
            // line 107
            echo "                                            <p class=\"text-center\"><a href=\"";
            echo ($context["U_UCP_PROFILE_AVATAR"] ?? null);
            echo "\">
                                                <small>";
            // line 108
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHANGE_AVATAR");
            echo "</small>
                                            </a></p>
                                        </div>
                                        <div class=\"col-md-7 col-xs-7\"><span>";
            // line 111
            echo ($context["CURRENT_USERNAME_FULL"] ?? null);
            echo "</span>
                                            <p class=\"text-muted small\">";
            // line 112
            echo ($context["USER_EMAIL_MENU"] ?? null);
            echo "</p>
                                             ";
            // line 113
            if (($context["U_ACP"] ?? null)) {
                echo "<a class=\"btn btn-info btn-sm btn-block\" href=\"";
                echo ($context["U_ACP"] ?? null);
                echo "\"><i class=\"fa fa-user-md\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADMIN_PANEL_GENERAL");
                echo "</a>";
            }
            // line 114
            echo "\t                                         ";
            if (($context["U_MCP"] ?? null)) {
                echo "<a class=\"btn btn-warning btn-sm btn-block\" href=\"";
                echo ($context["U_MCP"] ?? null);
                echo "\"><i class=\"fa fa-legal\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR_PANEL_GENERAL");
                echo "</a>";
            }
            // line 115
            echo "                                             ";
            if ((($context["S_REGISTERED_USER"] ?? null) &&  !(($context["U_ACP"] ?? null) || ($context["U_MCP"] ?? null)))) {
                echo "<a class=\"btn btn-success btn-sm btn-block\" href=\"";
                echo ($context["U_PROFILE"] ?? null);
                echo "\"><i class=\"fa fa-user\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_PANEL");
                echo "</a>";
            }
            // line 116
            echo "\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  ";
            // line 119
            // line 120
            echo "\t\t\t\t\t\t\t  <div class=\"navbar-footer\">
                                    <div class=\"navbar-footer-content\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6 col-xs-6\"><a class=\"btn btn-default btn-sm\" href=\"";
            // line 123
            echo ($context["U_UCP_PROFILE_SETTINGS"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHANGE_PASSWORD");
            echo "</a></div>
                                            <div class=\"col-md-6 col-xs-6\"><a class=\"btn btn-default btn-sm pull-right\" href=\"";
            // line 124
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGOUT");
            echo "</a></div>
                                        </div>
                                    </div>
                               </div>
\t\t\t\t\t\t\t</div>
                        </li>
                    </ul>
            </li>
\t\t</ul>
\t</div>
\t";
        }
        // line 135
        echo "</nav>";
    }

    public function getTemplateName()
    {
        return "@sitesplat_flatbootsminicms/event/flatboots_navigation_instead.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 135,  463 => 124,  457 => 123,  452 => 120,  451 => 119,  446 => 116,  437 => 115,  428 => 114,  420 => 113,  416 => 112,  412 => 111,  406 => 108,  401 => 107,  393 => 106,  366 => 100,  353 => 98,  337 => 96,  332 => 93,  327 => 90,  315 => 89,  309 => 88,  300 => 86,  294 => 84,  293 => 83,  290 => 82,  289 => 81,  285 => 79,  283 => 78,  280 => 77,  276 => 75,  270 => 73,  262 => 71,  259 => 70,  251 => 68,  249 => 67,  246 => 66,  244 => 65,  240 => 63,  234 => 59,  233 => 58,  226 => 57,  225 => 56,  219 => 53,  215 => 51,  213 => 50,  208 => 47,  201 => 45,  197 => 43,  180 => 41,  176 => 40,  173 => 39,  170 => 38,  164 => 36,  152 => 34,  150 => 33,  147 => 32,  143 => 31,  139 => 29,  132 => 24,  131 => 23,  124 => 22,  115 => 21,  106 => 20,  97 => 19,  89 => 18,  82 => 17,  80 => 16,  66 => 14,  62 => 13,  50 => 12,  44 => 11,  31 => 8,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@sitesplat_flatbootsminicms/event/flatboots_navigation_instead.html", "");
    }
}
