<?php

/* overall_header.html */
class __TwigTemplate_c887ed7e4e1a7aa3b4471783350c08f99c496afdf731ca4281886202c41b26be extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"designer\" content=\"SiteSplat http://themeforest.net/user/themesplat/portfolio?ref=ThemeSplat\">
<meta content=\"";
        // line 7
        echo ($context["SITENAME"] ?? null);
        echo "\" property=\"og:site_name\">
";
        // line 8
        // line 9
        echo "<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
";
        // line 10
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 11
        if (($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null)) {
            echo "&#40;";
            echo ($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null);
            echo "&#41;&nbsp;";
        }
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo "&nbsp;&#45;&nbsp;";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP");
            echo "&nbsp;&#45;&nbsp;";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        echo "&nbsp;&#45;&nbsp;";
        echo ($context["SITENAME"] ?? null);
        echo "</title>
";
        // line 12
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 13
            echo "\t";
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 14
            echo "\t";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 15
            echo "\t";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 16
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 17
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 18
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forum", array("forum_id" => ($context["S_FORUM_ID"] ?? null)));
                echo "\">";
            }
            // line 19
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topic", array("topic_id" => ($context["S_TOPIC_ID"] ?? null)));
                echo "\">";
            }
            // line 20
        }
        // line 22
        echo "
";
        // line 23
        if (($context["U_CANONICAL"] ?? null)) {
            // line 24
            echo "\t<link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\" />
";
        }
        // line 26
        echo "
<!-- Google free font here -->
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Asap:700' rel='stylesheet' type='text/css'>

<!-- CSS files start here -->
<link href=\"";
        // line 32
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/stylesheet.css\" rel=\"stylesheet\">
";
        // line 33
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 34
            echo "<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/plupload.css\" rel=\"stylesheet\">
";
        }
        // line 36
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('sitesplat_flatbootsminicms', '__main__'));
        $this->env->loadTemplate('@sitesplat_flatbootsminicms/event/overall_header_stylesheets_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 37
        echo "
";
        // line 38
        echo $this->getAttribute(($context["definition"] ?? null), "STYLESHEETS", array());
        echo "

<!-- Remove the conditional below to use the custom CSS without FLATBOOTS Mini CMS Extension -->
";
        // line 41
        if (($context["S_ALLOW_CUSTOMCSS"] ?? null)) {
            // line 42
            echo "<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/custom.css\" rel=\"stylesheet\">
";
        }
        // line 44
        // line 45
        echo "<!-- CSS files stop here -->

";
        // line 47
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('sitesplat_fltl', '__main__'));
        $this->env->loadTemplate('@sitesplat_fltl/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 48
        echo "
<!-- magic dust -->
<script src=\"//cdnjs.cloudflare.com/ajax/libs/headjs/1.0.3/head.load.min.js\"></script>

</head>
<body data-spy=\"scroll\" data-target=\".scrollspy\" id=\"phpbb\" class=\"section-";
        // line 53
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        echo "\">
";
        // line 54
        // line 55
        echo "
 <header id=\"top\" class=\"navbar navbar-inverse navbar-static-top flat-nav\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <button data-target=\".flat-nav-collapse\" data-toggle=\"collapse\" type=\"button\" class=\"nav-tog lines-button x navbar-toggle neutro\">
\t   <span class=\"sr-only sr-nav\">";
        // line 60
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOGGLE_NAV");
        echo "</span>
        <span class=\"lines\"></span>
      </button>
\t  ";
        // line 63
        if (($context["LOGO_IMAGE_EXIST"] ?? null)) {
            // line 64
            echo "      \t<a class=\"navbar-brand\" href=\"";
            if (($context["U_SITE_HOME"] ?? null)) {
                echo ($context["U_SITE_HOME"] ?? null);
            } else {
                echo ($context["U_INDEX"] ?? null);
            }
            echo "\"><img style=\"max-height: 60px; max-width:100%; margin-top: -20px;\" class=\"img-responsive\" src=\"";
            echo ($context["T_IMAGES_PATH"] ?? null);
            echo "../ext/sitesplat/flatbootsminicms/images/logo/";
            echo ($context["LOGO_FILENAME"] ?? null);
            echo "\" alt=\"";
            echo ($context["LOGO_TEXT"] ?? null);
            echo "\" /></a>
      ";
        } elseif (        // line 65
($context["LOGO_TEXT"] ?? null)) {
            // line 66
            echo "\t    <a class=\"navbar-brand\" href=\"";
            if (($context["U_SITE_HOME"] ?? null)) {
                echo ($context["U_SITE_HOME"] ?? null);
            } else {
                echo ($context["U_INDEX"] ?? null);
            }
            echo "\">";
            echo ($context["LOGO_TEXT"] ?? null);
            echo "</a>
\t  ";
        } else {
            // line 68
            echo "      \t<a class=\"navbar-brand\" href=\"";
            if (($context["U_SITE_HOME"] ?? null)) {
                echo ($context["U_SITE_HOME"] ?? null);
            } else {
                echo ($context["U_INDEX"] ?? null);
            }
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS");
            echo "</a>
      ";
        }
        // line 70
        echo "    </div>
\t";
        // line 71
        if (($context["FLATBOOTS_MINI_CMS_ENABLED"] ?? null)) {
            // line 72
            echo "        ";
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sitesplat_flatbootsminicms', '__main__'));
            $this->env->loadTemplate('@sitesplat_flatbootsminicms/event/flatboots_navigation_instead.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 73
            echo "    ";
        } else {
            // line 74
            echo "\t    ";
            $location = "addons/navigation.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/navigation.html", "overall_header.html", 74)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 75
            echo "\t";
        }
        echo "\t
  </div>
 </header>
    <div class=\"search-input search-input-fullscreen hidden-xs\">
\t   <form method=\"get\" id=\"search\" action=\"";
        // line 79
        echo ($context["U_SEARCH"] ?? null);
        echo "\">
\t\t   <fieldset>
\t\t   <input name=\"keywords\" id=\"keywords\" type=\"text\" maxlength=\"128\" title=\"";
        // line 81
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_KEYWORDS");
        echo "\" placeholder=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
        echo "\" value=\"\" autocomplete=\"off\"/>
\t\t   <div class=\"close\">&times;</div>
\t\t   ";
        // line 83
        echo ($context["S_SEARCH_HIDDEN_FIELDS"] ?? null);
        echo "
\t\t   </fieldset> 
        </form> 
    </div>

";
        // line 88
        if ( !($context["HIDE_HEADER"] ?? null)) {
            echo "\t\t
  ";
            // line 89
            if (($context["IN_BADGE"] ?? null)) {
                // line 90
                echo "   ";
                $location = "@sitesplat_badge/header_badge_teaser.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("@sitesplat_badge/header_badge_teaser.html", "overall_header.html", 90)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 91
                echo "  ";
            } else {
                // line 92
                echo "   ";
                $location = "addons/header_teaser_body.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("addons/header_teaser_body.html", "overall_header.html", 92)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 93
                echo "  ";
            }
        } else {
            // line 95
            echo "<div style=\"padding-top:30px;\" class=\"space-teaser\"></div>
";
        }
        // line 97
        echo "  
<div class=\"container\">
  <!-- start content -->
  <div id=\"content-forum\">

    ";
        // line 102
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('sitesplat_flatbootsminicms', '__main__'));
        $this->env->loadTemplate('@sitesplat_flatbootsminicms/event/header_breadcrumb_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 103
        echo "\t<div class=\"breadcrumb-line clearfix\">
\t\t<ul class=\"breadcrumb\">
\t\t<!-- https://developers.google.com/structured-data/testing-tool/ -->
\t\t";
        // line 106
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 107
        echo "
\t\t";
        // line 108
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 109
            echo "\t\t   <li><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\"><span class=\"icon fa fa-home\"></span></a></li>
\t\t   <li ";
            // line 110
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", array());
            echo "><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</span></a></li>
\t\t";
        } else {
            // line 112
            echo "\t\t   <li><a href=\"";
            echo ($context["U_INDEX"] ?? null);
            echo "\"><span class=\"icon fa fa-home\"></span></a></li>
\t\t   ";
            // line 113
            // line 114
            echo "\t\t   <li ";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", array());
            echo "><a href=\"";
            echo ($context["U_INDEX"] ?? null);
            echo "\" data-navbar-reference=\"index\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
            echo "</span></a></li>
\t\t   ";
            // line 115
            echo " 
\t\t";
        }
        // line 117
        echo "
\t\t  ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 119
            echo "\t\t   <li ";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", array());
            echo "><a itemprop=\"url\" href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\"";
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo "><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</span></a></li>\t\t 
\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo " 
\t\t</ul>
\t\t";
        // line 122
        if ((($context["S_USER_LOGGED_IN"] ?? null) && ((($context["SCRIPT_NAME"] ?? null) == "viewforum") || (($context["SCRIPT_NAME"] ?? null) == "viewtopic")))) {
            // line 123
            echo "\t\t<ul class=\"breadcrumb-buttons visible-xxs\">
\t\t    <li>
\t\t\t  <a href=\"#\" title=\"\" data-toggle=\"modal\" data-target=\"#BreadcrumbMap\">
\t\t\t   <i class=\"icon fa fa-sitemap\"></i>
\t\t\t  </a>
\t\t   </li>
\t\t</ul>
\t\t";
        }
        // line 131
        echo "\t\t";
        echo "  
\t</div>
    ";
        // line 133
        // line 134
        echo "\t
\t<div id=\"page-body\">
\t
\t";
        // line 137
        if (((($context["S_BOARD_DISABLED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null)))) {
            // line 138
            echo "\t<div class=\"alert alert-warning fade in\">
\t\t<button data-dismiss=\"alert\" class=\"close\"><span class=\"awe-remove-circle\"></span></button>
\t\t<i class=\"fa fa-info\"></i>&nbsp;<strong>";
            // line 140
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong>&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_DISABLED");
            echo "
\t</div>
\t";
        }
        // line 143
        echo "\t
    ";
        // line 144
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  508 => 144,  505 => 143,  496 => 140,  492 => 138,  490 => 137,  485 => 134,  484 => 133,  479 => 131,  469 => 123,  467 => 122,  463 => 120,  445 => 119,  441 => 118,  438 => 117,  434 => 115,  425 => 114,  424 => 113,  419 => 112,  410 => 110,  405 => 109,  403 => 108,  400 => 107,  397 => 106,  392 => 103,  387 => 102,  380 => 97,  376 => 95,  372 => 93,  359 => 92,  356 => 91,  343 => 90,  341 => 89,  337 => 88,  329 => 83,  322 => 81,  317 => 79,  309 => 75,  296 => 74,  293 => 73,  287 => 72,  285 => 71,  282 => 70,  270 => 68,  258 => 66,  256 => 65,  241 => 64,  239 => 63,  233 => 60,  226 => 55,  225 => 54,  217 => 53,  210 => 48,  205 => 47,  201 => 45,  200 => 44,  194 => 42,  192 => 41,  186 => 38,  183 => 37,  178 => 36,  172 => 34,  170 => 33,  166 => 32,  158 => 26,  152 => 24,  150 => 23,  147 => 22,  145 => 20,  132 => 19,  119 => 18,  108 => 17,  97 => 16,  86 => 15,  75 => 14,  64 => 13,  62 => 12,  44 => 11,  40 => 10,  37 => 9,  36 => 8,  32 => 7,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall_header.html", "");
    }
}
