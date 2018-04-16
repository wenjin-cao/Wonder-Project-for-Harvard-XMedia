<?php

/* viewtopic_body.html */
class __TwigTemplate_dd366fde07c9eadd426784968b90f2551c63bed7e07f1ea19b338f6e0ac7a3a0 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "<div class=\"side-segment\"><h3>";
        echo "<a href=\"";
        echo ($context["U_VIEW_TOPIC"] ?? null);
        echo "\">";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "</a>";
        echo "</h3></div>
<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the topic body -->
";
        // line 6
        if (($context["FORUM_DESC"] ?? null)) {
            echo "<div style=\"display: none;\">";
            echo ($context["FORUM_DESC"] ?? null);
            echo "<br /></div>";
        }
        // line 7
        // line 8
        echo "
";
        // line 9
        if (($context["MODERATORS"] ?? null)) {
            // line 10
            echo "<p>
\t<strong>";
            // line 11
            if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATORS");
            }
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong>&nbsp;";
            echo ($context["MODERATORS"] ?? null);
            echo "
</p>
";
        }
        // line 14
        echo "
";
        // line 15
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 16
            echo "<div class=\"alert alert-info fade in\">
\t<button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t";
            // line 18
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 19
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\"><i class=\"fa fa-link fa-rotate-90\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 20
                echo " 
\t\t<strong>";
                // line 21
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong>&nbsp;";
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 23
            echo "</div>
";
        }
        // line 25
        echo "
<div class=\"row\">
<div class=\"col-md-4 col-xs-6\">
";
        // line 28
        if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
            // line 29
            echo "  <div class=\"pull-left\">
\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 30
            echo ($context["S_SEARCHBOX_ACTION"] ?? null);
            echo "\">
\t <fieldset>
\t<div class=\"input-group input-group-sm\">
      <input type=\"text\" class=\"form-control\" name=\"keywords\" id=\"search_keywords\" value=\"\" placeholder=\"";
            // line 33
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_TOPIC");
            echo "\">
      <div class=\"input-group-btn\">
        <button class=\"btn btn-default\" type=\"submit\" value=\"";
            // line 35
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "\"><span class=\"hidden-xs\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span><i class=\"visible-xs fa fa-search fa-btn-fx\"></i></button>
\t  </div>
    </div>
\t ";
            // line 38
            echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
            echo "
\t</fieldset>
    </form>
   </div>
";
        }
        // line 43
        echo "</div>

<div class=\"col-md-8\">
  <div class=\"pull-right\">\t 
     <ul class=\"pagination pagination-sm hidden-xs\">
\t\t <li class=\"active\"><a>";
        // line 48
        echo ($context["TOTAL_POSTS"] ?? null);
        echo "</a></li>
\t\t ";
        // line 49
        if ((($context["U_VIEW_UNREAD_POST"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            echo "<li><a href=\"";
            echo ($context["U_VIEW_UNREAD_POST"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_UNREAD_POST");
            echo "</a></li>";
        }
        // line 50
        echo "\t\t";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 51
            echo "\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "viewtopic_body.html", 51)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 52
            echo "\t\t";
        } else {
            // line 53
            echo "\t\t\t<li class=\"active\"><a>";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "</a></li>\t
\t\t";
        }
        // line 55
        echo "     </ul>
\t
\t<div class=\"visible-xs\"> 
     <ul class=\"pagination pagination-sm\">
\t";
        // line 59
        if (((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())) || ($context["TOTAL_POSTS"] ?? null)) || ($context["TOTAL_TOPICS"] ?? null))) {
            // line 60
            echo "\t";
            if ((($context["TOTAL_POSTS"] ?? null) &&  !($context["NEWEST_USER"] ?? null))) {
                echo "<li class=\"active\"><a>";
                echo ($context["TOTAL_POSTS"] ?? null);
                echo "</a></li>";
            } elseif ((($context["TOTAL_TOPICS"] ?? null) &&  !($context["NEWEST_USER"] ?? null))) {
                echo "<li class=\"active\"><a>";
                echo ($context["TOTAL_TOPICS"] ?? null);
                echo "</a></li>";
            }
            // line 61
            echo "\t";
        }
        // line 62
        echo "\t</ul>
\t</div>
  </div>
</div> 

</div>

";
        // line 69
        // line 70
        echo "<div class=\"clearfix\">
    <div class=\"pull-left\">
   \t";
        // line 72
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 73
            echo "\t ";
            // line 74
            echo "\t";
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 75
                echo "     <a class=\"btn btn-danger\" href=\"";
                echo ($context["U_POST_REPLY_TOPIC"] ?? null);
                echo "\" role=\"button\"><i class=\"fa fa-lock\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_LOCKED_SHORT");
                echo "</a>
\t";
            } else {
                // line 77
                echo "\t <a class=\"btn btn-default btn-load\" href=\"";
                echo ($context["U_POST_REPLY_TOPIC"] ?? null);
                echo "\" role=\"button\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING");
                echo "&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\"><i class=\"fa fa-plus\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLY");
                echo "</a>
    ";
            }
            // line 79
            echo "\t ";
            // line 80
            echo "\t";
        }
        // line 81
        echo "   </div>
   <div class=\"pull-right\">
    ";
        // line 83
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 83)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 84
        echo "   </div>
</div>
";
        // line 86
        // line 87
        echo "
<div class=\"space10\"></div>
 <div class=\"space10\"></div>

";
        // line 91
        // line 92
        echo " 
";
        // line 93
        if (($context["S_HAS_POLL"] ?? null)) {
            // line 94
            echo "<form method=\"post\" action=\"";
            echo ($context["S_POLL_ACTION"] ?? null);
            echo "\" data-ajax=\"vote_poll\" class=\"topic_poll\">
<fieldset>
<div class=\"panel panel-default panel-poll\">
 <div class=\"panel-heading\">
    <h3>";
            // line 98
            echo ($context["POLL_QUESTION"] ?? null);
            echo "</h3>
\t";
            // line 99
            if ((($context["S_CAN_VOTE"] ?? null) && ($context["L_POLL_LENGTH"] ?? null))) {
                // line 100
                echo "\t<div class=\"alert alert-info fade in\">
     <i class=\"fa fa-bar-chart-o\"></i>&nbsp;";
                // line 101
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_LENGTH");
                echo "
    </div>
\t";
            }
            // line 104
            echo " </div>
<div class=\"panel-body\">
<div class=\"inner\">
";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "poll_option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 108
                // line 109
                echo "<div class=\"clearfix";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo " voted";
                }
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_MOST_VOTES", array())) {
                    echo " most-votes";
                }
                echo "\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo " title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-poll-option-id=\"";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                echo "\">
<div class=\"pull-left\">
";
                // line 111
                if (($context["S_CAN_VOTE"] ?? null)) {
                    // line 112
                    echo " <label for=\"vote_";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\">";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                    echo "</label>
";
                } else {
                    // line 114
                    echo " ";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                    echo "
";
                }
                // line 116
                echo "
<div class=\"poll_option_select pull-left\">
";
                // line 118
                if (($context["S_CAN_VOTE"] ?? null)) {
                    // line 119
                    if (($context["S_IS_MULTI_CHOICE"] ?? null)) {
                        // line 120
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />
";
                    } else {
                        // line 122
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                }
                // line 124
                echo "</div>
</div>
   <div class=\"poll_option_percent";
                // line 126
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo " pull-right\">
    <span class=\"badge";
                // line 127
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo " badge-info";
                }
                echo "\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo " title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo ">";
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array()) == 0)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_VOTES");
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array());
                }
                echo "</span>
   </div>
<div class=\"space-poll\"></div>   
<div class=\"resultbar";
                // line 130
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo " progress progress-fix clearfix\">
 <div role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar progress-bar-striped";
                // line 131
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 20)) {
                    echo " pollbar1 progress-bar-danger";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 40)) {
                    echo " pollbar2 progress-bar-warning";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 60)) {
                    echo " pollbar3 progress-bar-info";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 80)) {
                    echo " pollbar4 progress-bar-primary";
                } else {
                    echo " pollbar5 progress-bar-success active";
                }
                echo "\" style=\"width:";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT", array());
                echo ";min-width:2em;\">";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT", array());
                echo "</div>
</div>
</div>
";
                // line 134
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "</div>
</div>
<div class=\"panel-footer\">
  <div class=\"clearfix\">
    <ul class=\"list-unstyled pull-left\">
\t";
            // line 141
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                // line 142
                echo "    <li class=\"poll_view_results\"><a href=\"";
                echo ($context["U_VIEW_RESULTS"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_RESULTS");
                echo "</a></li>
\t";
            }
            // line 144
            echo "\t<li class=\"poll_total_votes";
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                echo " hidden";
            }
            echo "\">
\t <span class=\"resultbar\">";
            // line 145
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_VOTES");
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "&nbsp;<span class=\"poll_total_vote_cnt\">";
            echo ($context["TOTAL_VOTES"] ?? null);
            echo "</span></span>
\t</li>
\t";
            // line 147
            if (($context["S_CAN_VOTE"] ?? null)) {
                // line 148
                echo "\t<li class=\"poll_max_votes\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAX_VOTES");
                echo "</li>
\t";
            }
            // line 150
            echo "\t</ul>
\t <div class=\"vote-submitted hidden\">&nbsp;<span class=\"label label-success\">";
            // line 151
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VOTE_SUBMITTED");
            echo "</span></div>
\t";
            // line 152
            if (($context["S_CAN_VOTE"] ?? null)) {
                // line 153
                echo "\t<div class=\"poll_vote pull-right\">
\t <div class=\"resultbar\"><input type=\"submit\" name=\"update\" value=\"";
                // line 154
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT_VOTE");
                echo "\" class=\"btn btn-default btn-poll\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CASTING_VOTE");
                echo "\" autocomplete=\"off\" /></div>
\t</div>
\t";
            }
            // line 157
            echo "  </div>
</div>
    ";
            // line 159
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t ";
            // line 160
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
</div>
</fieldset>
</form>
";
        }
        // line 165
        // line 166
        echo "
";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "postrow", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 168
            // line 169
            echo "  ";
            if ($this->getAttribute($context["postrow"], "S_FIRST_UNREAD", array())) {
                // line 170
                echo "   <a id=\"unread\" class=\"anchor\"";
                if (($context["S_UNREAD_VIEW"] ?? null)) {
                    echo " data-url=\"";
                    echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
                    echo "\"";
                }
                echo "></a>
  ";
            }
            // line 172
            echo "<div id=\"p";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\" class=\"clearfix\">\t
    ";
            // line 173
            if ($this->getAttribute($context["postrow"], "S_POST_DELETED", array())) {
                // line 174
                echo "\t <div class=\"ignore alert alert-default\" id=\"post_hidden";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\"";
                if ( !$this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                    echo " style=\"display: none;\"";
                }
                echo ">
\t  ";
                // line 175
                echo $this->getAttribute($context["postrow"], "L_POST_DELETED_MESSAGE", array());
                echo "<br />
\t  <strong>";
                // line 176
                echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                echo "</strong>
\t </div>
\t";
            } elseif ($this->getAttribute(            // line 178
$context["postrow"], "S_IGNORE_POST", array())) {
                // line 179
                echo "\t <div class=\"ignore alert alert-warning\" id=\"post_hidden";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\"";
                if ( !$this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                    echo " style=\"display: none;\"";
                }
                echo ">
\t\t";
                // line 180
                echo $this->getAttribute($context["postrow"], "L_IGNORE_POST", array());
                echo "<br />
\t\t<strong>";
                // line 181
                echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                echo "</strong>
\t </div>
\t";
            }
            // line 184
            echo "\t
";
            // line 185
            if ($this->getAttribute($context["postrow"], "S_POST_PRIVATE", array())) {
                // line 186
                echo "\t<div class=\"ignore alert alert-default\">
\t\t<article>
\t\t\t<div class=\"clearfix\">
\t\t\t\t<div id=\"profile";
                // line 189
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\">
\t\t\t\t\t<div class=\"avatar-over pull-left\">
\t\t\t\t\t\t";
                // line 191
                if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", array())) {
                    // line 192
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                        echo "<a href=\"javascript:void(0)\" data-toggle=\"modal\" data-target=\"#mini";
                        echo $this->getAttribute($context["postrow"], "POST_ID", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_MINI_PROFILE");
                        echo "\">";
                        echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                        echo "</a>";
                    } else {
                        echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    }
                    // line 193
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 194
                    echo "\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" data-toggle=\"modal\" data-target=\"#mini";
                    echo $this->getAttribute($context["postrow"], "POST_ID", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_MINI_PROFILE");
                    echo "\"><img src=\"";
                    echo ($context["T_THEME_PATH"] ?? null);
                    echo "/images/no_avatar.gif\" alt=\"\"></a>
\t\t\t\t\t\t";
                }
                // line 196
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "S_ONLINE", array())) {
                    echo "<span class=\"status ";
                    echo $this->getAttribute($context["postrow"], "STATUS_COLOR", array());
                    echo "\"></span>";
                }
                // line 197
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"text-muted pull-left\">
\t\t\t\t\t";
                // line 201
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BY");
                echo "&nbsp;";
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
                echo "<span class=\"hidden-xs\">&nbsp;&#45;&nbsp;<i class=\"fa fa-clock-o\"></i>&nbsp;";
                echo $this->getAttribute($context["postrow"], "POST_DATE", array());
                echo "</span>\t
\t\t\t\t</div>
\t\t\t\t<br /><br /><strong>";
                // line 203
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVATE_POST_NO_CONTENT");
                echo "</strong>
\t\t\t</div>
\t\t</article>
\t</div>
";
            } else {
                // line 208
                echo "\t
 <article ";
                // line 209
                if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                    echo "style=\"display: none;\"";
                }
                echo ">
  <div class=\"panel";
                // line 210
                if (((($context["MINI_PROFILE_POSITION"] ?? null) == "alternate") && ($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 1))) {
                    echo " alt-odd";
                }
                echo " forum-answer";
                if ($this->getAttribute($context["postrow"], "S_ONLINE", array())) {
                    echo " mobile-online";
                }
                echo "\">
    <div class=\"panel-heading\">
\t <div class=\"clearfix\">
         <div id=\"profile";
                // line 213
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\">
\t\t\t<div class=\"avatar-over";
                // line 214
                if (((($context["MINI_PROFILE_POSITION"] ?? null) == "right") || ((($context["MINI_PROFILE_POSITION"] ?? null) == "alternate") && ($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 0)))) {
                    echo " pull-right";
                } else {
                    echo " pull-left";
                }
                echo "\">
\t\t\t\t";
                // line 215
                if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", array())) {
                    // line 216
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                        echo "<a href=\"javascript:void(0)\" data-toggle=\"modal\" data-target=\"#mini";
                        echo $this->getAttribute($context["postrow"], "POST_ID", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_MINI_PROFILE");
                        echo "\">";
                        echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                        echo "</a>";
                    } else {
                        echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    }
                    // line 217
                    echo "\t\t\t\t";
                } else {
                    // line 218
                    echo "\t\t\t\t\t<a href=\"javascript:void(0)\" data-toggle=\"modal\" data-target=\"#mini";
                    echo $this->getAttribute($context["postrow"], "POST_ID", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_MINI_PROFILE");
                    echo "\"><img src=\"";
                    echo ($context["T_THEME_PATH"] ?? null);
                    echo "/images/no_avatar.gif\" alt=\"\"></a>
\t\t\t\t";
                }
                // line 220
                echo "\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "S_ONLINE", array())) {
                    echo "<span class=\"status ";
                    echo $this->getAttribute($context["postrow"], "STATUS_COLOR", array());
                    echo "\"></span>";
                }
                // line 221
                echo "\t\t\t</div>
         </div>
\t\t<div class=\"side-segment\"><h3 style=\"border-bottom: 4px solid #e5e5e5;\">";
                // line 223
                if ($this->getAttribute($context["postrow"], "POST_ICON_IMG", array())) {
                    echo "<img class=\"post-icon\" src=\"";
                    if ( !($context["S_BBEMOJI"] ?? null)) {
                        echo ($context["T_ICONS_PATH"] ?? null);
                    }
                    echo $this->getAttribute($context["postrow"], "POST_ICON_IMG", array());
                    echo "\" width=\"";
                    echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_WIDTH", array());
                    echo "\" height=\"";
                    echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_HEIGHT", array());
                    echo "\" alt=\"\"/>";
                }
                echo "<a href=\"#p";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\">";
                echo $this->getAttribute($context["postrow"], "POST_SUBJECT", array());
                echo "</a><span class=\"pull-right post-id hidden-xs\">";
                echo "<a href=\"";
                echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST");
                echo "\">&#35;";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "</a></span></h3></div>    
\t\t<div class=\"clearfix\">
\t\t<div class=\"text-muted";
                // line 225
                if (((($context["MINI_PROFILE_POSITION"] ?? null) == "alternate") && ($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 1))) {
                    echo " alt-odd-time";
                }
                echo " ";
                if (((($context["MINI_PROFILE_POSITION"] ?? null) == "right") || ((($context["MINI_PROFILE_POSITION"] ?? null) == "alternate") && ($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 0)))) {
                    echo " pull-right prof-right";
                } else {
                    echo " pull-left";
                }
                echo "\">
\t\t";
                // line 226
                // line 227
                echo "\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BY");
                if ( !$this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                    echo "&nbsp;";
                    echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
                } else {
                    echo "&nbsp;";
                    echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
                }
                echo "<span class=\"hidden-xs\">&nbsp;&#45;&nbsp;<i class=\"fa fa-clock-o\"></i>&nbsp;";
                echo $this->getAttribute($context["postrow"], "POST_DATE", array());
                echo "</span>\t
\t\t";
                // line 228
                // line 229
                echo "\t\t</div>
\t\t<div class=\"";
                // line 230
                if (((($context["MINI_PROFILE_POSITION"] ?? null) == "right") || ((($context["MINI_PROFILE_POSITION"] ?? null) == "alternate") && ($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 0)))) {
                    echo "pull-left";
                } else {
                    echo "pull-right";
                }
                echo "\">
\t\t<div role=\"toolbar\" class=\"btn-toolbar\">
\t\t";
                // line 232
                // line 233
                echo "\t\t";
                // line 234
                echo "\t\t 
\t\t    ";
                // line 235
                if (( !($context["S_IS_BOT"] ?? null) && ($context["S_REGISTERED_USER"] ?? null))) {
                    // line 236
                    echo "\t\t\t";
                    $value = ((((($this->getAttribute($context["postrow"], "U_EDIT", array()) || $this->getAttribute($context["postrow"], "U_DELETE", array())) || $this->getAttribute($context["postrow"], "U_REPORT", array())) || $this->getAttribute($context["postrow"], "U_WARN", array())) || $this->getAttribute($context["postrow"], "U_INFO", array())) || $this->getAttribute($context["postrow"], "U_QUOTE", array()));
                    $context['definition']->set('SHOW_POST_BUTTONS', $value);
                    // line 237
                    echo "\t\t\t";
                    if ($this->getAttribute(($context["definition"] ?? null), "SHOW_POST_BUTTONS", array())) {
                        // line 238
                        echo "                <div class=\"btn-group btn-group-sm\" role=\"group\">
\t\t\t\t  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-cog\"></i>&nbsp;<i class=\"fa fa-level-down\"></i></button>
\t\t\t\t <ul class=\"dropdown-menu";
                        // line 240
                        if (((($context["MINI_PROFILE_POSITION"] ?? null) == "right") || ((($context["MINI_PROFILE_POSITION"] ?? null) == "alternate") && ($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 0)))) {
                            echo " dropdown-menu-left";
                        } else {
                            echo " dropdown-menu-right";
                        }
                        echo "\" role=\"menu\">
\t\t\t\t  ";
                        // line 241
                        // line 242
                        echo "\t\t\t\t\t";
                        if ($this->getAttribute($context["postrow"], "U_QUOTE", array())) {
                            echo "<li class=\"visible-xs\"><a href=\"";
                            echo $this->getAttribute($context["postrow"], "U_QUOTE", array());
                            echo "\" title=\"\" role=\"button\"><i class=\"fa fa-comments\"></i>&nbsp;";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUOTE");
                            echo "</a></li>";
                        }
                        // line 243
                        echo "\t\t\t\t\t";
                        if ($this->getAttribute($context["postrow"], "U_EDIT", array())) {
                            echo "<li><a href=\"";
                            echo $this->getAttribute($context["postrow"], "U_EDIT", array());
                            echo "\" title=\"\" role=\"button\" class=\"qlr-trigger\"><i class=\"fa fa-pencil\"></i>&nbsp;";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_POST");
                            echo "</a></li>";
                        }
                        // line 244
                        echo "\t\t\t\t\t";
                        if ($this->getAttribute($context["postrow"], "U_DELETE", array())) {
                            echo "<li><a href=\"";
                            echo $this->getAttribute($context["postrow"], "U_DELETE", array());
                            echo "\" title=\"\" role=\"button\"><i class=\"fa fa-times\"></i>&nbsp;";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST");
                            echo "</a></li>";
                        }
                        // line 245
                        echo "\t\t\t\t\t";
                        if ($this->getAttribute($context["postrow"], "U_REPORT", array())) {
                            echo "<li><a href=\"";
                            echo $this->getAttribute($context["postrow"], "U_REPORT", array());
                            echo "\" title=\"\" role=\"button\"><i class=\"fa fa-exclamation-circle\"></i>&nbsp;";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_POST");
                            echo "</a></li>";
                        }
                        // line 246
                        echo "\t\t\t\t\t";
                        if ($this->getAttribute($context["postrow"], "U_WARN", array())) {
                            echo "<li><a href=\"";
                            echo $this->getAttribute($context["postrow"], "U_WARN", array());
                            echo "\" title=\"\" role=\"button\"><i class=\"fa fa-minus-circle\"></i>&nbsp;";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARN_USER");
                            echo "</a></li>";
                        }
                        // line 247
                        echo "\t\t\t\t\t";
                        if ($this->getAttribute($context["postrow"], "U_INFO", array())) {
                            echo "<li><a href=\"";
                            echo $this->getAttribute($context["postrow"], "U_INFO", array());
                            echo "\" title=\"\" role=\"button\"><i class=\"fa fa-info-circle\"></i>&nbsp;";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
                            echo "</a></li>";
                        }
                        // line 248
                        echo "\t\t\t\t  ";
                        // line 249
                        echo "\t\t\t\t </ul>
\t\t\t\t</div>
\t\t\t\t";
                        // line 251
                        if ($this->getAttribute($context["postrow"], "U_QUOTE", array())) {
                            // line 252
                            echo "                <div class=\"btn-group btn-group-sm hidden-xs visible-sm visible-md visible-lg\" role=\"group\">
                 <a class=\"btn btn-default btn-sm\" href=\"";
                            // line 253
                            echo $this->getAttribute($context["postrow"], "U_QUOTE", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLY_WITH_QUOTE");
                            echo "\" role=\"button\"><i class=\"fa fa-comments\"></i></a>
                </div>
\t\t\t\t";
                        }
                        // line 256
                        echo "\t\t\t";
                    }
                    // line 257
                    echo "\t\t    ";
                }
                // line 258
                echo "\t\t 
\t\t";
                // line 259
                // line 260
                echo "\t\t</div>
\t\t</div>
\t\t</div>  
\t\t
\t </div>
\t</div>
\t\t\t
    <div class=\"panel-body\">
        <div class=\"clearfix\">
\t\t\t<div class=\"postbody\">
                <div id=\"post_content";
                // line 270
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\">
\t\t\t\t";
                // line 271
                // line 272
                echo "\t\t\t\t\t <span class=\"post-date pull-left visible-xs\">&#45;&nbsp;<i class=\"fa fa-clock-o\"></i>&nbsp;";
                echo $this->getAttribute($context["postrow"], "POST_DATE", array());
                echo "</span>
\t\t\t\t\t <span class=\"post-id pull-right visible-xs\"><a href=\"";
                // line 273
                echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST");
                echo "\">&#35;";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "</a></span>
\t\t\t\t";
                // line 274
                // line 275
                echo "\t\t        
\t\t\t\t\t";
                // line 276
                if ($this->getAttribute($context["postrow"], "S_POST_UNAPPROVED", array())) {
                    // line 277
                    echo "\t\t\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                    echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                    echo "\">
\t\t\t\t\t\t<div class=\"alert alert-warning fade in\">
\t\t\t\t\t\t\t<button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t\t\t\t\t<i class=\"fa fa-warning\"></i><strong>&nbsp;";
                    // line 280
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_UNAPPROVED_ACTION");
                    echo "</strong>
\t\t\t\t\t\t\t <input class=\"btn btn-danger btn-sm\" type=\"submit\" value=\"";
                    // line 281
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISAPPROVE");
                    echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t\t\t <input class=\"btn btn-success btn-sm\" type=\"submit\" value=\"";
                    // line 282
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("APPROVE");
                    echo "\" name=\"action[approve]\" />
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                    // line 283
                    echo $this->getAttribute($context["postrow"], "POST_ID", array());
                    echo "\" />
\t\t\t\t\t\t\t";
                    // line 284
                    echo ($context["S_FORM_TOKEN"] ?? null);
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 287
$context["postrow"], "S_POST_DELETED", array())) {
                    // line 288
                    echo "\t\t\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                    echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                    echo "\">
\t\t\t\t\t\t<div class=\"alert alert-warning fade in\">
\t\t\t\t\t\t\t<button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t\t\t\t\t<i class=\"fa fa-warning\"></i><strong>&nbsp;";
                    // line 291
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_DELETED_ACTION");
                    echo "</strong>
\t\t\t\t\t\t\t";
                    // line 292
                    if ($this->getAttribute($context["postrow"], "S_DELETE_PERMANENT", array())) {
                        // line 293
                        echo "\t\t\t\t\t\t\t <input class=\"btn btn-danger btn-sm\" type=\"submit\" value=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                        echo "\" name=\"action[delete]\" />
\t\t\t\t\t\t\t";
                    }
                    // line 294
                    echo " 
\t\t\t\t\t\t\t <input class=\"btn btn-success btn-sm\" type=\"submit\" value=\"";
                    // line 295
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE");
                    echo "\" name=\"action[restore]\" />
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                    // line 296
                    echo $this->getAttribute($context["postrow"], "POST_ID", array());
                    echo "\" />
\t\t\t\t\t\t\t";
                    // line 297
                    echo ($context["S_FORM_TOKEN"] ?? null);
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t";
                }
                // line 301
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 302
                if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                    // line 303
                    echo "\t\t\t\t\t<div style=\"margin-top:20px;\" class=\"alert alert-danger fade in\">
\t\t\t\t\t\t<button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t\t\t\t<i class=\"fa fa-warning\"></i>
\t\t\t\t\t\t<a href=\"";
                    // line 306
                    echo $this->getAttribute($context["postrow"], "U_MCP_REPORT", array());
                    echo "\"><strong>&nbsp;";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPORTED");
                    echo "</strong></a>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 309
                echo "\t\t\t\t\t
\t\t\t\t\t<span class=\"hidden hook-bfr-message\"></span>
\t\t\t\t\t<div class=\"content\">";
                // line 311
                echo $this->getAttribute($context["postrow"], "MESSAGE", array());
                echo "</div>
\t\t\t\t\t
\t\t\t\t\t";
                // line 313
                if ($this->getAttribute($context["postrow"], "S_HAS_ATTACHMENTS", array())) {
                    // line 314
                    echo "\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t";
                    // line 315
                    if ((($context["S_LOAD_BBLIGHTBOX"] ?? null) && ($context["BBLIGHTBOX_PLUGIN"] ?? null))) {
                        // line 316
                        echo "\t\t\t\t\t    ";
                        $location = "@sitesplat_bblightbox/bblightbox_layout.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("@sitesplat_bblightbox/bblightbox_layout.html", "viewtopic_body.html", 316)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 317
                        echo "\t\t\t\t\t";
                    } else {
                        // line 318
                        echo "\t\t\t\t\t\t<div class=\"attachbox\">
\t\t\t\t\t\t  <h5>";
                        // line 319
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACHMENTS");
                        echo "</h5>
\t\t\t\t\t\t\t   ";
                        // line 320
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "attachment", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                            echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 321
                        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 323
                    echo "\t\t\t\t\t</div>\t
\t\t\t\t\t";
                }
                // line 325
                echo "\t\t\t\t\t
\t\t\t\t\t  ";
                // line 326
                // line 327
                echo "\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "S_DISPLAY_NOTICE", array())) {
                    echo "<div class=\"rules\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DOWNLOAD_NOTICE");
                    echo "</div>";
                }
                // line 328
                echo "\t\t\t\t\t";
                if ((($this->getAttribute($context["postrow"], "EDITED_MESSAGE", array()) || $this->getAttribute($context["postrow"], "EDIT_REASON", array())) || $this->getAttribute($context["postrow"], "BUMPED_MESSAGE", array()))) {
                    // line 329
                    echo "\t\t\t\t\t\t<div class=\"notice text-muted\">
\t\t\t\t\t\t <small>";
                    // line 330
                    echo $this->getAttribute($context["postrow"], "EDITED_MESSAGE", array());
                    echo "</small>
\t\t\t\t\t\t ";
                    // line 331
                    if ($this->getAttribute($context["postrow"], "EDIT_REASON", array())) {
                        echo "<small><strong>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REASON");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo "</strong>&nbsp;";
                        echo $this->getAttribute($context["postrow"], "EDIT_REASON", array());
                        echo "</small>";
                    }
                    // line 332
                    echo "\t\t\t\t\t\t <div><small>";
                    echo $this->getAttribute($context["postrow"], "BUMPED_MESSAGE", array());
                    echo "</small></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 335
                echo "\t\t\t\t\t  ";
                // line 336
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["postrow"], "SIGNATURE", array()) || $this->getAttribute($context["postrow"], "STEAM_SIG_ENABLED", array()))) {
                    // line 337
                    echo "\t\t\t\t\t <div class=\"clearfix\"></div>
\t\t\t\t\t <p class=\"separator text-center hidden-xs\"><i class=\"fa fa-ellipsis-h fa-2x\"></i></p>
\t\t\t\t\t <div id=\"sig";
                    // line 339
                    echo $this->getAttribute($context["postrow"], "POST_ID", array());
                    echo "\" class=\"hidden-xs post-signature\">";
                    echo $this->getAttribute($context["postrow"], "SIGNATURE", array());
                    echo "</div>
\t\t\t\t\t  ";
                    // line 340
                    // line 341
                    echo "\t\t\t\t\t";
                }
                // line 342
                echo "                </div>
\t\t\t\t";
                // line 343
                // line 344
                echo "\t\t\t</div>
        </div>
    </div>

\t";
                // line 348
                if (($this->getAttribute($context["postrow"], "S_LAST_ROW", array()) && ($context["S_QUICK_REPLY"] ?? null))) {
                    // line 349
                    echo "\t <div class=\"panel-footer\">
\t\t <div class=\"clearfix\">
            <div class=\"text-center\">
\t\t\t<div id=\"hidden-div\">
             <button id=\"show_button\" class=\"btn btn-primary btn-sm collapsed\" data-toggle=\"collapse\" data-target=\".quick-reply\"><i class=\"glyphicon glyphicon-edit\"></i> ";
                    // line 353
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICKREPLY");
                    echo "</button>
            </div>
\t\t\t</div>
            <div class=\"text-center\">
                <div class=\"quick-reply collapse\">
\t\t\t\t\t";
                    // line 358
                    if (($context["S_SNAPPY"] ?? null)) {
                        $location = "@sitesplat_snappy/snappy_quickreply_editor.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("@sitesplat_snappy/snappy_quickreply_editor.html", "viewtopic_body.html", 358)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                    } else {
                        $location = "quickreply_editor.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 358)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                    }
                    // line 359
                    echo "                </div>
            </div>
          </div>
\t </div>
\t ";
                }
                // line 364
                echo "\t ";
                // line 365
                echo "  </div>
  
 </article>
 ";
                // line 368
                echo "\t
";
            }
            // line 369
            echo "<!-- // this is for the private post above at 185 -->\t
 
 <!-- /.MODAL PROFILE POSTER STARTS HERE -->
    <div class=\"modal fade\" id=\"mini";
            // line 372
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t <div class=\"modal-dialog\">
\t  <div class=\"modal-content\">
\t\t<div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t<h4 class=\"modal-title\">";
            // line 377
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_MINI_PROFILE");
            echo "</h4>
\t\t</div>
\t\t<div class=\"modal-body\">
\t\t\t<div class=\"row profile-data\">
\t\t\t<!-- Left Side Start -->
\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-3 col-xs-12 text-center\">
\t\t\t\t    <!-- Profile Avatar Start -->
\t\t\t\t\t<div class=\"profile-avatar\">
\t\t\t\t\t\t";
            // line 385
            // line 386
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", array())) {
                // line 387
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                    echo "\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    echo "</a>";
                } else {
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                }
                // line 388
                echo "\t\t\t\t\t    ";
            } else {
                // line 389
                echo "\t\t\t\t\t\t<img src=\"";
                echo ($context["T_THEME_PATH"] ?? null);
                echo "/images/no_avatar.gif\" alt=\"\">
\t\t\t\t\t\t";
            }
            // line 391
            echo "\t\t\t\t\t\t";
            echo "\t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Profile Avatar End -->  
                ";
            // line 394
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 395
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) && $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                // line 396
                echo "\t\t\t\t\t<div class=\"profile-rank text-center\">";
                echo $this->getAttribute($context["postrow"], "RANK_IMG", array());
                echo "</div>
\t\t\t\t\t";
            }
            // line 397
            echo "\t
\t\t\t\t";
            // line 398
            echo "\t
\t\t\t\t\t";
            // line 399
            if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                // line 400
                echo "\t\t\t\t\t<a class=\"btn btn-sm btn-default\" title=\"\" href=\"";
                echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_MINI_PROFILE_VIEW_FULL");
                echo "</a>
\t\t\t\t\t";
            }
            // line 402
            echo "\t\t\t\t</div>
\t\t\t\t<!-- Left Side End -->
\t\t\t\t<!-- Right Side Start -->
\t\t\t\t<div class=\"col-lg-8 col-md-8 col-sm-9 col-xs-12\">
\t\t\t\t <h3>";
            // line 406
            if ( !$this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            } else {
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            }
            echo "</h3>\t\t\t\t\t\t 
\t\t\t\t\t<ul class=\"icon-list list-unstyled\">
\t\t\t\t\t ";
            // line 408
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) && $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                echo "<li><i class=\"fa fa-sitemap\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "&nbsp;";
                echo $this->getAttribute($context["postrow"], "RANK_TITLE", array());
                echo "</li>";
            }
            // line 409
            echo "\t\t\t\t\t ";
            if (($this->getAttribute($context["postrow"], "POSTER_POSTS", array()) != "")) {
                echo "<li><i class=\"fa fa-comments\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "&nbsp;";
                echo $this->getAttribute($context["postrow"], "POSTER_POSTS", array());
                echo "</li>";
            }
            // line 410
            echo "\t\t\t\t\t ";
            if ($this->getAttribute($context["postrow"], "POSTER_JOINED", array())) {
                echo "<li><i class=\"fa fa-calendar\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "&nbsp;";
                echo $this->getAttribute($context["postrow"], "POSTER_JOINED", array());
                echo "</li>";
            }
            // line 411
            echo "\t\t\t\t\t <li><i class=\"fa fa-retweet\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_STATUS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "&nbsp;";
            if (($this->getAttribute($context["postrow"], "S_ONLINE", array()) &&  !$this->getAttribute($context["postrow"], "S_IGNORE_POST", array()))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLINE");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OFF_LINE");
            }
            echo "</li>
                     ";
            // line 412
            if ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", array())) {
                echo "<li><i class=\"fa fa-bolt\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNINGS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "&nbsp;";
                echo $this->getAttribute($context["postrow"], "POSTER_WARNINGS", array());
                echo "</li>";
            }
            // line 413
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t ";
            // line 414
            if ($this->getAttribute($context["postrow"], "S_PROFILE_FIELD1", array())) {
                // line 415
                echo "\t\t\t\t\t <!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t\t\t <li><i class=\"fa fa-star\"></i> 
\t\t\t\t\t ";
                // line 417
                echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_NAME", array());
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "&nbsp;";
                echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_VALUE", array());
                echo "
\t\t\t\t\t </li>
\t\t\t\t\t ";
            }
            // line 420
            echo "
\t\t\t\t\t";
            // line 421
            // line 422
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 423
                echo "\t\t\t\t\t\t";
                if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                    // line 424
                    echo "\t\t\t\t\t\t <li class=\"profile-custom-field profile-";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_IDENT", array());
                    echo "\"><i class=\"fa fa-star\"></i>&nbsp;";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                    echo "</li>
\t\t\t\t\t\t";
                }
                // line 426
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 427
            echo "\t\t\t\t\t";
            // line 428
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t <!-- Right Side End -->
            </div>
\t\t</div>
\t\t<div class=\"modal-footer\">
\t\t    ";
            // line 434
            // line 435
            echo "\t\t\t ";
            if (( !($context["S_IS_BOT"] ?? null) && twig_length_filter($this->env, $this->getAttribute($context["postrow"], "contact", array())))) {
                // line 436
                echo "\t\t\t<div class=\"clearfix\">
\t\t\t\t<ul class=\"mini-profile-contact\">
\t\t\t\t";
                // line 438
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "contact", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 439
                    echo "\t\t\t\t ";
                    $context["REMAINDER"] = ($this->getAttribute($context["contact"], "S_ROW_COUNT", array()) % 4);
                    // line 440
                    echo "\t\t\t\t";
                    $value = ((($context["REMAINDER"] ?? null) == 3) || ($this->getAttribute($context["contact"], "S_LAST_ROW", array()) && ($this->getAttribute($context["contact"], "S_NUM_ROWS", array()) < 4)));
                    $context['definition']->set('S_LAST_CELL', $value);
                    // line 441
                    echo "\t\t\t\t";
                    if ((($context["REMAINDER"] ?? null) == 0)) {
                        // line 442
                        echo "\t\t\t\t";
                    }
                    // line 443
                    echo "\t\t\t\t<li><a class=\"default-contact\" href=\"";
                    if ($this->getAttribute($context["contact"], "U_CONTACT", array())) {
                        echo $this->getAttribute($context["contact"], "U_CONTACT", array());
                    } else {
                        echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                    }
                    echo "\" title=\"";
                    echo $this->getAttribute($context["contact"], "NAME", array());
                    echo "\"";
                    if (($this->getAttribute($context["contact"], "ID", array()) == "jabber")) {
                        echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                    }
                    echo ">
\t\t\t\t <i class=\"icon-moon-";
                    // line 444
                    echo $this->getAttribute($context["contact"], "ID", array());
                    echo "\"></i>
\t\t\t\t </a>
\t\t\t\t</li>
\t\t\t\t";
                    // line 447
                    if (((($context["REMAINDER"] ?? null) == 3) || $this->getAttribute($context["contact"], "S_LAST_ROW", array()))) {
                        // line 448
                        echo "\t\t\t\t";
                    }
                    // line 449
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 450
                echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
            }
            // line 453
            echo "\t\t\t";
            // line 454
            echo "\t\t</div>
\t   </div><!-- /.modal-content -->
\t </div><!-- /.modal-dialog -->
\t</div><!-- /.modal -->
 <!-- /.MODAL PROFILE POSTER STOPS HERE -->
 
</div>
";
            // line 461
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sitesplat_flatbootsminicms', '__main__'));
            $this->env->loadTemplate('@sitesplat_flatbootsminicms/event/viewtopic_body_postrow_post_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 463
        echo "

<div class=\"clearfix\">
 ";
        // line 466
        // line 467
        echo "  <div class=\"pull-left\">
   \t";
        // line 468
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 469
            echo "\t ";
            // line 470
            echo "\t";
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 471
                echo "     <a class=\"btn btn-danger\" href=\"";
                echo ($context["U_POST_REPLY_TOPIC"] ?? null);
                echo "\" role=\"button\"><i class=\"fa fa-lock\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_LOCKED_SHORT");
                echo "</a>
\t";
            } else {
                // line 473
                echo "\t <a class=\"btn btn-default btn-load\" href=\"";
                echo ($context["U_POST_REPLY_TOPIC"] ?? null);
                echo "\" role=\"button\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING");
                echo "&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\"><i class=\"fa fa-plus\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLY");
                echo "</a>
    ";
            }
            // line 475
            echo "\t ";
            // line 476
            echo "\t";
        }
        // line 477
        echo "  </div>

 <div class=\"pull-right\">
     <ul class=\"pagination pagination-sm hidden-xs\">
\t ";
        // line 481
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "quickmod", array()))) {
            echo "<li><a title=\"\" href=\"javascript:void(0);\" data-target=\".sorting-topic-mod\" data-toggle=\"collapse\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR_OPTIONS");
            echo "</a></li>";
        }
        // line 482
        echo "\t";
        if (((($context["S_NUM_POSTS"] ?? null) > 1) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())))) {
            echo "<li><a title=\"\" href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
            echo "</a></li>";
        }
        echo "\t\t\t\t
     ";
        // line 483
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 484
            echo "\t  <li class=\"active\"><a>";
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "</a></li>
\t\t\t";
            // line 485
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "viewtopic_body.html", 485)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 486
            echo "\t\t";
        } else {
            // line 487
            echo "\t\t\t<li class=\"active\"><a>";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "</a></li>\t
\t ";
        }
        // line 489
        echo "     </ul>
\t 
\t<div class=\"visible-xs\"> 
\t<ul class=\"pagination pagination-sm\">
\t ";
        // line 493
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "quickmod", array()))) {
            echo "<li><a title=\"\" href=\"javascript:void(0);\" data-target=\".sorting-topic-mod\" data-toggle=\"collapse\"><i class=\"fa fa-gavel\"></i></a></li>";
        }
        // line 494
        echo "\t ";
        if (((($context["S_NUM_POSTS"] ?? null) > 1) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())))) {
            echo "<li><a title=\"\" href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\"><i class=\"fa fa-cog\"></i></a></li>";
        }
        echo "\t\t\t\t
\t <li><a class=\"pagination-trigger\" data-placement=\"top\">";
        // line 495
        echo ($context["PAGE_NUMBER"] ?? null);
        echo "</a></li>
\t <li class=\"active\"><a>";
        // line 496
        echo ($context["TOTAL_POSTS"] ?? null);
        echo "</a></li>
\t</ul>
\t</div>
 </div>
</div>

<div class=\"clearfix\">
   <div class=\"pull-right\">
\t<div class=\"visible-xs\"> 
\t <ul class=\"pagination pagination-sm\">
\t ";
        // line 506
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 507
            echo "\t\t\t";
            $location = "pagination_mobile.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination_mobile.html", "viewtopic_body.html", 507)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 508
            echo "\t\t";
        } else {
            // line 509
            echo "\t\t\t<li class=\"active\"><a>";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "</a></li>\t
\t ";
        }
        // line 511
        echo "\t </ul>
\t</div>
   </div>
</div>

";
        // line 516
        $location = "jump_links.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jump_links.html", "viewtopic_body.html", 516)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 517
        echo "<div class=\"space10\"></div>

\t";
        // line 519
        if ((((($context["S_NUM_POSTS"] ?? null) > 1) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 520
            echo "\t\t";
            $location = "display_options_viewtopic.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options_viewtopic.html", "viewtopic_body.html", 520)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 521
            echo "\t";
        }
        // line 522
        echo "
";
        // line 523
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "quickmod", array()))) {
            // line 524
            echo "\t<div class=\"controls-row\">
       <div class=\"sorting-topic-mod collapse\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-body\">
                   <div class=\"row\">
\t\t\t\t\t    <div class=\"col-md-6 col-sm-6\"> 
                         <label>";
            // line 530
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
                            <div class=\"control-row\">
                              ";
            // line 532
            $location = "jumpbox_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jumpbox_options.html", "viewtopic_body.html", 532)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 533
            echo "                            </div>
\t\t\t\t\t\t</div>
\t                    <div class=\"col-md-6 col-sm-6\"> 
\t\t\t\t\t\t <label>";
            // line 536
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_MOD");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
                          ";
            // line 537
            $location = "quickmod_tools.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickmod_tools.html", "viewtopic_body.html", 537)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 538
            echo "\t\t\t\t\t\t</div>
                    </div>
                </div>
\t\t\t</div>
\t\t</div>
\t</div> 
";
        }
        // line 545
        echo "
";
        // line 546
        // line 547
        echo "
";
        // line 548
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 549
            echo "<div class=\"row\">
";
            // line 550
            if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
                // line 551
                echo "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
<div class=\"panel panel-forum panel-whois\">
<div class=\"panel-heading\"><i class=\"fa fa-users\"></i>&nbsp;<a href=\"";
                // line 553
                echo ($context["U_VIEWONLINE"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                echo "</a></div>
 <div class=\"panel-body\">
\t<p>";
                // line 555
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "</p>
 </div> 
</div> 
</div> 
";
            }
            // line 560
            echo "
";
            // line 561
            if (($context["S_DISPLAY_POST_INFO"] ?? null)) {
                // line 562
                echo "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
<div class=\"panel panel-forum\">
<div class=\"panel-heading\"><i class=\"fa fa-bar-chart-o\"></i>&nbsp;";
                // line 564
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_PERMISSIONS");
                echo "</div>
  <div class=\"panel-body\">
\t<p>";
                // line 566
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "rules", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                    echo $this->getAttribute($context["rules"], "RULE", array());
                    echo "<br />";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</p>
  </div> 
</div> 
 </div>
";
            }
            // line 571
            echo "</div>
";
        }
        // line 573
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 573)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1842 => 573,  1838 => 571,  1822 => 566,  1817 => 564,  1813 => 562,  1811 => 561,  1808 => 560,  1800 => 555,  1793 => 553,  1789 => 551,  1787 => 550,  1784 => 549,  1782 => 548,  1779 => 547,  1778 => 546,  1775 => 545,  1766 => 538,  1754 => 537,  1749 => 536,  1744 => 533,  1732 => 532,  1726 => 530,  1718 => 524,  1716 => 523,  1713 => 522,  1710 => 521,  1697 => 520,  1695 => 519,  1691 => 517,  1679 => 516,  1672 => 511,  1666 => 509,  1663 => 508,  1650 => 507,  1648 => 506,  1635 => 496,  1631 => 495,  1624 => 494,  1620 => 493,  1614 => 489,  1608 => 487,  1605 => 486,  1593 => 485,  1588 => 484,  1586 => 483,  1577 => 482,  1571 => 481,  1565 => 477,  1562 => 476,  1560 => 475,  1550 => 473,  1542 => 471,  1539 => 470,  1537 => 469,  1535 => 468,  1532 => 467,  1531 => 466,  1526 => 463,  1509 => 461,  1500 => 454,  1498 => 453,  1493 => 450,  1487 => 449,  1484 => 448,  1482 => 447,  1476 => 444,  1461 => 443,  1458 => 442,  1455 => 441,  1451 => 440,  1448 => 439,  1444 => 438,  1440 => 436,  1437 => 435,  1436 => 434,  1428 => 428,  1426 => 427,  1420 => 426,  1409 => 424,  1406 => 423,  1401 => 422,  1400 => 421,  1397 => 420,  1388 => 417,  1384 => 415,  1382 => 414,  1379 => 413,  1370 => 412,  1358 => 411,  1348 => 410,  1338 => 409,  1329 => 408,  1320 => 406,  1314 => 402,  1306 => 400,  1304 => 399,  1301 => 398,  1298 => 397,  1292 => 396,  1290 => 395,  1287 => 394,  1281 => 391,  1275 => 389,  1272 => 388,  1261 => 387,  1258 => 386,  1257 => 385,  1246 => 377,  1238 => 372,  1233 => 369,  1229 => 368,  1224 => 365,  1222 => 364,  1215 => 359,  1189 => 358,  1181 => 353,  1175 => 349,  1173 => 348,  1167 => 344,  1166 => 343,  1163 => 342,  1160 => 341,  1159 => 340,  1153 => 339,  1149 => 337,  1146 => 336,  1144 => 335,  1137 => 332,  1128 => 331,  1124 => 330,  1121 => 329,  1118 => 328,  1111 => 327,  1110 => 326,  1107 => 325,  1103 => 323,  1099 => 321,  1090 => 320,  1086 => 319,  1083 => 318,  1080 => 317,  1067 => 316,  1065 => 315,  1062 => 314,  1060 => 313,  1055 => 311,  1051 => 309,  1043 => 306,  1038 => 303,  1036 => 302,  1033 => 301,  1026 => 297,  1022 => 296,  1018 => 295,  1015 => 294,  1009 => 293,  1007 => 292,  1003 => 291,  996 => 288,  994 => 287,  988 => 284,  984 => 283,  980 => 282,  976 => 281,  972 => 280,  965 => 277,  963 => 276,  960 => 275,  959 => 274,  951 => 273,  946 => 272,  945 => 271,  941 => 270,  929 => 260,  928 => 259,  925 => 258,  922 => 257,  919 => 256,  911 => 253,  908 => 252,  906 => 251,  902 => 249,  900 => 248,  891 => 247,  882 => 246,  873 => 245,  864 => 244,  855 => 243,  846 => 242,  845 => 241,  837 => 240,  833 => 238,  830 => 237,  826 => 236,  824 => 235,  821 => 234,  819 => 233,  818 => 232,  809 => 230,  806 => 229,  805 => 228,  791 => 227,  790 => 226,  778 => 225,  751 => 223,  747 => 221,  740 => 220,  730 => 218,  727 => 217,  714 => 216,  712 => 215,  704 => 214,  700 => 213,  688 => 210,  682 => 209,  679 => 208,  671 => 203,  662 => 201,  656 => 197,  649 => 196,  639 => 194,  636 => 193,  623 => 192,  621 => 191,  616 => 189,  611 => 186,  609 => 185,  606 => 184,  600 => 181,  596 => 180,  587 => 179,  585 => 178,  580 => 176,  576 => 175,  567 => 174,  565 => 173,  560 => 172,  550 => 170,  547 => 169,  546 => 168,  529 => 167,  526 => 166,  525 => 165,  517 => 160,  513 => 159,  509 => 157,  501 => 154,  498 => 153,  496 => 152,  492 => 151,  489 => 150,  483 => 148,  481 => 147,  472 => 145,  465 => 144,  457 => 142,  455 => 141,  448 => 136,  443 => 134,  423 => 131,  417 => 130,  397 => 127,  391 => 126,  387 => 124,  375 => 122,  363 => 120,  361 => 119,  359 => 118,  355 => 116,  349 => 114,  341 => 112,  339 => 111,  320 => 109,  319 => 108,  315 => 107,  310 => 104,  304 => 101,  301 => 100,  299 => 99,  295 => 98,  287 => 94,  285 => 93,  282 => 92,  281 => 91,  275 => 87,  274 => 86,  270 => 84,  258 => 83,  254 => 81,  251 => 80,  249 => 79,  239 => 77,  231 => 75,  228 => 74,  226 => 73,  224 => 72,  220 => 70,  219 => 69,  210 => 62,  207 => 61,  196 => 60,  194 => 59,  188 => 55,  182 => 53,  179 => 52,  166 => 51,  163 => 50,  155 => 49,  151 => 48,  144 => 43,  136 => 38,  128 => 35,  123 => 33,  117 => 30,  114 => 29,  112 => 28,  107 => 25,  103 => 23,  95 => 21,  92 => 20,  84 => 19,  82 => 18,  78 => 16,  76 => 15,  73 => 14,  60 => 11,  57 => 10,  55 => 9,  52 => 8,  51 => 7,  45 => 6,  35 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "viewtopic_body.html", "");
    }
}
