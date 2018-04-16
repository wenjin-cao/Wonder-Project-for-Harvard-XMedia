<?php

/* overall_footer.html */
class __TwigTemplate_ae582ccb1e6ee28dd16ff6c8aabde55e7c79b95b1a5b7a6fc0c62bcb66a76e58 extends Twig_Template
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
        // line 2
        echo "
\t</div> <!-- page-body id in header -->
  </div> <!-- content-forum in header -->
 </div> <!-- container in header -->

";
        // line 7
        // line 8
        echo "
";
        // line 9
        if ((( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null)) && (($context["SCRIPT_NAME"] ?? null) == "index"))) {
            // line 10
            echo "    ";
            $location = "addons/sitesplat_login_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/sitesplat_login_body.html", "overall_footer.html", 10)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 12
        echo "
\t<section class=\"section-page\">
        <div id=\"rtblock\" class=\"container\">
            ";
        // line 15
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "fltl", array()))) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sitesplat_fltl', '__main__'));
            $this->env->loadTemplate('@sitesplat_fltl/event/fltl.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        } else {
            $location = "addons/recent_topics_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/recent_topics_body.html", "overall_footer.html", 15)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 16
        echo "        </div>
    </section>

";
        // line 19
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('sitesplat_flatbootsminicms', '__main__'));
        $this->env->loadTemplate('@sitesplat_flatbootsminicms/event/call_to_action_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        echo "\t
  ";
        // line 20
        if (($context["FLATBOOTS_MINI_CMS_ENABLED"] ?? null)) {
            // line 21
            echo "     ";
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sitesplat_flatbootsminicms', '__main__'));
            $this->env->loadTemplate('@sitesplat_flatbootsminicms/event/call_to_action_body_instead.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 22
            echo "  ";
        } else {
            echo " 
\t";
            // line 23
            $location = "addons/call_to_action_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/call_to_action_body.html", "overall_footer.html", 23)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 24
            echo "  ";
        }
        // line 25
        echo "  
\t
\t";
        // line 27
        if (($context["FLATBOOTS_MINI_CMS_ENABLED"] ?? null)) {
            // line 28
            echo "\t\t";
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sitesplat_flatbootsminicms', '__main__'));
            $this->env->loadTemplate('@sitesplat_flatbootsminicms/event/prefooter_instead.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 29
            echo "\t";
        } else {
            // line 30
            echo "    <section class=\"section-pre-footer\">
\t\t<div class=\"container center\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-5 twitter\">
\t\t\t\t";
            // line 34
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "bbtags", array()))) {
                // line 35
                echo "\t\t\t\t\t ";
                // line 36
                echo "\t\t\t\t";
            } else {
                // line 37
                echo "\t\t\t\t\t<div class=\"thumb\"><i class=\"fa fa-paw\"></i></div>
\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t<h3>";
                // line 39
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_ABOUT_TITLE");
                echo "</h3>
\t\t\t\t\t\t<p>";
                // line 40
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_ABOUT_PART_ONE");
                echo "</p>
\t\t\t\t\t\t<a href=\"#\"><strong>";
                // line 41
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_MORE");
                echo "</strong></a>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 43
            echo "\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-5 col-sm-offset-2 twitter\">
\t\t\t\t\t<div class=\"thumb\"><i class=\"fa fa-twitter\"></i></div>
\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t<h3><a href=\"https://twitter.com/SiteSplat\">";
            // line 48
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOIN_US_TWITTER");
            echo "&nbsp;<small>@SiteSplat</small></a></h3>
\t\t\t\t\t\t <div id=\"twitter-feed\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t <div class=\"section-bg\"></div>
\t</section>
\t";
        }
        // line 57
        echo "    
\t<footer class=\"burned-asphalt\"> <!-- Footer block -->
\t\t<div class=\"midnight-\" id=\"sub-footer\">
\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"row bottomLinks\">
\t\t\t\t\t<div class=\"col-sm-6 sm-direction\">
\t\t\t\t\t <nav>
\t\t\t\t\t";
        // line 65
        if (($context["FLATBOOTS_MINI_CMS_ENABLED"] ?? null)) {
            // line 66
            echo "\t\t\t\t\t\t";
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sitesplat_flatbootsminicms', '__main__'));
            $this->env->loadTemplate('@sitesplat_flatbootsminicms/event/footer_links_instead.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 67
            echo "\t\t\t\t\t";
        } else {
            // line 68
            echo "\t\t\t\t\t\t<ul class=\"list-inline footer-nav\">
\t\t\t\t\t\t <li><a href=\"http://goo.gl/LvmwlF\" title=\"\">";
            // line 69
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADVERTISE");
            echo "</a></li>
\t\t\t\t\t\t <li><a href=\"";
            // line 70
            echo ($context["U_PRIVACY"] ?? null);
            echo "\" title=\"\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVACY");
            echo "</a></li>
\t\t\t\t\t\t <li><a href=\"";
            // line 71
            echo ($context["U_DMCA"] ?? null);
            echo "\" title=\"\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DMCA");
            echo "</a></li>
\t\t\t\t\t\t <li><a href=\"";
            // line 72
            echo ($context["U_TERMS_USE"] ?? null);
            echo "\" title=\"\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TERMS");
            echo "</a></li>
\t\t\t\t\t\t ";
            // line 73
            // line 74
            echo "\t\t\t\t\t\t ";
            if (($context["U_CONTACT_US"] ?? null)) {
                // line 75
                echo "\t\t\t\t\t\t <li><a href=\"";
                echo ($context["U_CONTACT_US"] ?? null);
                echo "\" title=\"\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT_US");
                echo "</a></li>
\t\t\t\t\t\t ";
            }
            // line 77
            echo "\t\t\t\t\t\t ";
            // line 78
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 79
        echo "\t
\t\t\t\t\t </nav>
\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6 sm-direction\">\t
\t\t\t\t\t\t<div class=\"clearfix socialbar\">
\t\t\t\t\t\t";
        // line 85
        if (($context["FLATBOOTS_MINI_CMS_ENABLED"] ?? null)) {
            // line 86
            echo "\t\t\t\t\t\t\t\t";
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sitesplat_flatbootsminicms', '__main__'));
            $this->env->loadTemplate('@sitesplat_flatbootsminicms/event/footer_social_instead.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 87
            echo "\t\t\t\t\t\t";
        } else {
            // line 88
            echo "\t\t\t\t\t\t\t<div class=\"social-network\">
\t\t\t\t\t\t\t\t<a class=\"google-plus-color\" title=\"Google+\" href=\"https://plus.google.com/u/0/100435978342273345264/\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t\t<a class=\"github-color\" title=\"Github\" href=\"#2\"><i class=\"fa fa-github\"></i></a>
\t\t\t\t\t\t\t\t<a class=\"behance-color\" title=\"Behance\" href=\"#3\"><i class=\"fa fa-behance\"></i></a>
\t\t\t\t\t\t\t\t<!-- <a class=\"dropbox-color\" title=\"Dropbox\" href=\"#4\"><i class=\"fa fa-dropbox\"></i></a> -->
\t\t\t\t\t\t\t\t<!-- <a class=\"pinterest-color\" title=\"Pinterest\" href=\"#5\"><i class=\"fa fa-pinterest\"></i></a> -->
\t\t\t\t\t\t\t\t<a class=\"facebook-color\" title=\"Facebook\" href=\"#6\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t<a class=\"twitter-color\" title=\"Twitter\" href=\"https://twitter.com/SiteSplat\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t<!-- <a class=\"bitbucket-color\" title=\"Bitbucket\" href=\"#8\"><i class=\"fa fa-bitbucket\"></i></a> -->
\t\t\t\t\t\t\t\t<a class=\"envato-color\" title=\"Envato\" href=\"http://themeforest.net/user/ThemeSplat/portfolio?ref=ThemeSplat\"><i class=\"icon-moon-envatoleaf\"></i></a>
\t\t\t\t\t\t\t\t<a class=\"rss-color hidden-xs\" title=\"rss\" href=\"";
            // line 98
            echo ($context["U_FEED"] ?? null);
            echo "\"><i class=\"fa fa-rss\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 100
        echo "\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t\t
                <div class=\"row\">\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6 sm-direction\">
\t\t\t\t\t <p class=\"copyrights\">
\t\t\t\t\t  ";
        // line 108
        // line 109
        echo "\t\t\t\t\t  <small>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HANDCRAFTED");
        echo "</small>&nbsp;<i class=\"fa fa-heart text-flatboots-red\"></i>&nbsp;<small>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AND");
        echo "</small>&nbsp;<i class=\"fa fa-coffee\"></i>&nbsp;<small>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BY");
        echo "<a href=\"http://www.sitesplat.com/\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITESPLAT");
        echo "\" target=\"_blank\">&nbsp;";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITESPLAT");
        echo "</a>&nbsp;&#45;&nbsp;";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POWERED");
        echo "&nbsp;<a href=\"http://www.phpbb.com/\" title=\"Forum Software &copy; phpBB&reg; Group\" target=\"_blank\">phpBB</a></small>
\t\t\t\t\t  ";
        // line 110
        // line 111
        echo "\t\t\t\t\t </p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6 sm-direction\">
\t\t\t\t\t  <p class=\"debug-output\">
\t\t\t\t\t  ";
        // line 116
        // line 117
        echo "\t\t\t\t\t\t<small>&#45;&nbsp;";
        echo ($context["S_TIMEZONE"] ?? null);
        echo "&nbsp;&#45;</small>
\t\t\t\t\t  ";
        // line 118
        // line 119
        echo "\t\t\t\t\t\t";
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            echo " <small>";
            echo ($context["DEBUG_OUTPUT"] ?? null);
            echo "</small>";
        }
        // line 120
        echo "\t\t\t\t\t\t<!-- ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_VERSION");
        echo " -->
\t\t\t\t\t  </p>
\t\t\t\t\t</div>
\t\t\t\t</div>\t

\t\t\t</div>
\t\t</div>
\t</footer>

<a id=\"totop\" class=\"top-flat\" href=\"\" onclick=\"return false;\" style=\"display:none;\"></a>

<div class=\"hidden\">";
        // line 131
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        echo "</div> 

<!-- injected via core and ajax JS for the return confirmation actions -->
   <div id=\"page-footer\">
\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 135
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\">&nbsp;</div>
\t</div>

\t<div id=\"phpbb_alert\" class=\"alert alert-default phpbb_alert\" data-l-err=\"";
        // line 139
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<button type=\"button\" class=\"close alert_close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t<h3 class=\"alert_title\">&nbsp;</h3>
\t\t <p class=\"alert_text\"></p>
\t</div>
\t
\t<div id=\"phpbb_confirm\" class=\"alert alert-default phpbb_alert\">
\t\t<button type=\"button\" class=\"close alert_close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t<div class=\"alert_text\"></div>
\t</div>
  </div>\t
<!-- injected via core and ajax JS for the return confirmation actions -->

";
        // line 152
        if ((($context["S_USER_LOGGED_IN"] ?? null) && ((($context["SCRIPT_NAME"] ?? null) == "viewforum") || (($context["SCRIPT_NAME"] ?? null) == "viewtopic")))) {
            // line 153
            echo "\t<div class=\"modal fade\" id=\"BreadcrumbMap\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"BreadcrumbsLabel\">
\t  <div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t  <div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t<h4 class=\"modal-title\" id=\"BreadcrumbsLabel\">";
            // line 158
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NAVIGATION");
            echo "</h4>
\t\t  </div>
\t\t  <div class=\"modal-body file-tree\">
\t\t   <ul>
\t\t\t<li class=\"root\"><a href=\"";
            // line 162
            echo ($context["U_INDEX"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
            echo "</a></li>
\t\t\t";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "navlinks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
                // line 164
                echo "\t\t\t   <li><a href=\"";
                echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "\t\t   </ul>
\t\t    <i class=\"icon-compass fa fa-compass\"></i>
\t\t  </div>
\t\t  <div class=\"modal-footer\">
\t\t  </div>
\t\t</div>
\t  </div>
\t</div>
";
        }
        // line 175
        echo "
";
        // line 176
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('sitesplat_flatbootsminicms', '__main__'));
        $this->env->loadTemplate('@sitesplat_flatbootsminicms/event/ss_overall_footer_scripts_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 177
        echo "
<script>
// this loads jquery asyncrounously & in parallel
head.load(\"//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js\", \"//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js\", \"";
        // line 180
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/forum_fn.min.js\");
</script>

<!-- we use this event to load the JS scripts properly via the extension system -->
";
        // line 184
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('sitesplat_fltl', '__main__'));
        $this->env->loadTemplate('@sitesplat_fltl/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 185
        echo "
<!-- injected via a module or an include -->
<script>
// some function that depends on bootstrap and jquery
head.ready(function () {
\t\$('.footable').footable();\$(\".selectpicker\").selectpicker();\$(\".selectpicker\").tooltip(\"disable\");var totop=\$(\"#totop\");totop.click(function(){\$(\"html, body\").stop(true,true).animate({scrollTop:0},500);return false});\$(window).scroll(function(){if(\$(this).scrollTop()>600){totop.fadeIn()}else{totop.fadeOut()}});\$(\"button[data-loading-text], input[data-loading-text], .btn-load\").click(function(){var e=\$(this);e.button(\"loading\");setTimeout(function(){e.button(\"reset\")},3e3)});
\t\$(\"input\").iCheck({checkboxClass:\"icheckbox_flat-aero\",radioClass:\"iradio_flat-aero\"});\$(\".btn-search\").click(function(){\$(\".search-input\").toggleClass(\"open\").find(\"input\").focus()});\$(\".close\").click(function(){\$(this).prev(\"input\").val(\"\").parents(\".search-input\").removeClass(\"open\")});\$(\".nav-tog\").click(function(){if(\$(this).hasClass(\"neutro\")){\$(this).removeClass(\"neutro\").addClass(\"open\")}else{\$(this).removeClass(\"open\").addClass(\"neutro\")}});
\t\$('input[data-reset-on-edit]').on('keyup', function() {\$(this.getAttribute('data-reset-on-edit')).val('');});
\t\$('a').tooltip({trigger : 'hover',container: 'body'})
    \$('#notification_list_button').click(function(){setTimeout(function(){\$(\".nano\").nanoScroller();},0);});\t
});
";
        // line 196
        if (($context["PROVIDER_TEMPLATE_FILE"] ?? null)) {
            // line 197
            echo "head.ready(function(){!function(n){n(\".oauth-content ul > li\").each(function(){var i=n(this).find(\"a\").text();n(this).find(\"a\").prepend('<i class=\"'+i+'\"></i>')})}(jQuery)});
";
        }
        // line 199
        echo "// some function that depends on bootstrap and jquery
";
        // line 200
        if ( !($context["HIDE_FOOTER"] ?? null)) {
            // line 201
            echo "head.load(\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/vendors/twitterFetcher.min.js\");
head.ready(\"twitterFetcher.min.js\",function(e){var e={profile:{screenName:\"";
            // line 202
            if (($context["FLATBOOTS_MINI_CMS_ENABLED"] ?? null)) {
                echo ($context["TWITTER_SCREEN_NAME"] ?? null);
            } else {
                echo "sitesplat";
            }
            echo "\"},domId:\"twitter-feed\",maxTweets:1,showUser:!1,showImages:!0,enableLinks:!0};twitterFetcher.fetch(e)});
";
        }
        // line 204
        echo "</script>
<!-- injected via a module or an include -->

";
        // line 207
        echo $this->getAttribute(($context["definition"] ?? null), "SCRIPTS", array());
        echo "

";
        // line 209
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 210
            echo "<!-- // lets load the plupload crap super huge files because... wait for it wait for it. \"swear here\" -->
";
            // line 211
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 211)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 213
        echo "
";
        // line 214
        // line 215
        echo "
<!-- Google Analytics: change UA-XXXXXXXX-X to be your site's ID. -->
";
        // line 217
        echo ($context["GOOGLE_ANALYTICS"] ?? null);
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  533 => 217,  529 => 215,  528 => 214,  525 => 213,  512 => 211,  509 => 210,  507 => 209,  502 => 207,  497 => 204,  488 => 202,  483 => 201,  481 => 200,  478 => 199,  474 => 197,  472 => 196,  459 => 185,  450 => 184,  443 => 180,  438 => 177,  433 => 176,  430 => 175,  419 => 166,  408 => 164,  404 => 163,  398 => 162,  391 => 158,  384 => 153,  382 => 152,  364 => 139,  349 => 135,  340 => 131,  325 => 120,  318 => 119,  317 => 118,  312 => 117,  311 => 116,  304 => 111,  303 => 110,  288 => 109,  287 => 108,  277 => 100,  271 => 98,  259 => 88,  256 => 87,  250 => 86,  248 => 85,  240 => 79,  236 => 78,  234 => 77,  226 => 75,  223 => 74,  222 => 73,  216 => 72,  210 => 71,  204 => 70,  200 => 69,  197 => 68,  194 => 67,  188 => 66,  186 => 65,  176 => 57,  164 => 48,  157 => 43,  151 => 41,  147 => 40,  143 => 39,  139 => 37,  136 => 36,  134 => 35,  132 => 34,  126 => 30,  123 => 29,  117 => 28,  115 => 27,  111 => 25,  108 => 24,  96 => 23,  91 => 22,  85 => 21,  83 => 20,  76 => 19,  71 => 16,  52 => 15,  47 => 12,  33 => 10,  31 => 9,  28 => 8,  27 => 7,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall_footer.html", "");
    }
}
