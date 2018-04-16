<?php

/* posting_editor.html */
class __TwigTemplate_240d666334de65726134410814334b6ec9c285eb9970ada405d3b659bc0c0c41 extends Twig_Template
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
        echo "<fieldset>
\t";
        // line 2
        if (($context["ERROR"] ?? null)) {
            // line 3
            echo "\t<div class=\"space10\"></div>
\t <div class=\"space10\"></div>
\t<div class=\"alert alert-info fade in\">
       ";
            // line 6
            echo ($context["ERROR"] ?? null);
            echo "
    </div>
\t";
        }
        // line 9
        echo "
\t";
        // line 10
        if ((($context["S_SHOW_TOPIC_ICONS"] ?? null) || ($context["S_SHOW_PM_ICONS"] ?? null))) {
            // line 11
            echo "\t<div class=\"hidden-xs\">
\t <div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"icon\">";
            // line 13
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t <div class=\"controls controls-row\"> 
      <div class=\"radio\"><input type=\"radio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" tabindex=\"1\"><label for=\"icon\">";
            // line 15
            if (($context["S_SHOW_TOPIC_ICONS"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_TOPIC_ICON");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_PM_ICON");
            }
            echo "</label></div>
     ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "topic_icon", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                echo "<div class=\"radio\"><input type=\"radio\" name=\"icon\" id=\"icon-";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\" value=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\" ";
                echo $this->getAttribute($context["topic_icon"], "S_ICON_CHECKED", array());
                echo " tabindex=\"1\"><label for=\"icon-";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_HEIGHT", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_ALT", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_ALT", array());
                echo "\" /></label></div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t </div> 
\t </div>
\t</div>
\t";
        }
        // line 21
        echo "
\t";
        // line 22
        if (( !($context["S_PRIVMSGS"] ?? null) && ($context["S_DISPLAY_USERNAME"] ?? null))) {
            // line 23
            echo "\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"username\">";
            // line 24
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t<div class=\"controls controls-row\"> 
\t<div class=\"input-icon left\">
\t  <i class=\"fa fa-user\"></i>
       <input type=\"text\" class=\"form-control input-sm\" placeholder=\"\" tabindex=\"1\" name=\"username\" id=\"username\" value=\"";
            // line 28
            echo ($context["USERNAME"] ?? null);
            echo "\">
\t </div> 
\t</div> 
\t</div>
\t";
        }
        // line 33
        echo "
    ";
        // line 34
        // line 35
        echo "
\t";
        // line 36
        if (((($context["S_POST_ACTION"] ?? null) || ($context["S_PRIVMSGS"] ?? null)) || ($context["S_EDIT_DRAFT"] ?? null))) {
            // line 37
            echo "\t<div class=\"control-group\"> 
\t<label class=\"control-label\" for=\"subject\">";
            // line 38
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t<div class=\"row\">
\t <div class=\"";
            // line 40
            if (($context["S_EDIT_DRAFT"] ?? null)) {
                echo "col-md-12";
            } else {
                echo "col-xs-12 col-lg-8";
            }
            echo "\">
     ";
            // line 41
            echo "  
\t   <input type=\"text\" class=\"form-control input-sm\" placeholder=\"";
            // line 42
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "\" name=\"subject\" id=\"subject\" maxlength=\"";
            if (($context["S_NEW_MESSAGE"] ?? null)) {
                echo "100";
            } else {
                echo "124";
            }
            echo "\" tabindex=\"2\" value=\"";
            echo ($context["SUBJECT"] ?? null);
            echo ($context["DRAFT_SUBJECT"] ?? null);
            echo "\">
\t ";
            // line 43
            // line 44
            echo "\t </div> 
\t </div> 
\t </div>
\t ";
            // line 47
            if ((($context["CAPTCHA_TEMPLATE"] ?? null) && ($context["S_CONFIRM_CODE"] ?? null))) {
                // line 48
                echo "\t\t";
                $value = 3;
                $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
                // line 49
                echo "\t\t";
                $location = (("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . ""), "posting_editor.html", 49)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 50
                echo "\t ";
            }
            // line 51
            echo "\t";
        }
        // line 52
        echo "
    ";
        // line 53
        // line 54
        echo "\t
\t ";
        // line 55
        $location = "posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_buttons.html", "posting_editor.html", 55)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 56
        echo "
\t <div class=\"space10\"></div>

 <div class=\"row\">
\t";
        // line 60
        // line 61
        echo "    <div class=\"";
        if (($context["S_EDIT_DRAFT"] ?? null)) {
            echo "col-md-12";
        } else {
            echo "col-md-8";
        }
        echo "\"> 
      <span id=\"dragNdrop\">
\t   <textarea class=\"form-control\" rows=\"10\" ";
        // line 63
        if (((($context["S_UCP_ACTION"] ?? null) &&  !($context["S_PRIVMSGS"] ?? null)) &&  !($context["S_EDIT_DRAFT"] ?? null))) {
            echo "name=\"signature\" id=\"signature\" ";
        } else {
            echo "name=\"message\" id=\"message\"";
        }
        echo " tabindex=\"4\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" placeholder=\"\">";
        echo ($context["MESSAGE"] ?? null);
        echo ($context["DRAFT_MESSAGE"] ?? null);
        echo ($context["IMGUR_IMAGE"] ?? null);
        echo ($context["GYAZO_IMAGE"] ?? null);
        echo ($context["SIGNATURE"] ?? null);
        echo "</textarea>
\t  </span> 
\t</div>
\t";
        // line 66
        // line 67
        echo "
\t<div class=\"col-md-4\">
    ";
        // line 69
        echo "\t
\t\t
\t\t";
        // line 71
        if ((($context["S_SMILIES_ALLOWED"] ?? null) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "smiley", array())))) {
            // line 72
            echo "\t\t<strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SMILIES");
            echo "
\t\t  ";
            // line 73
            if ((($context["S_SHOW_SMILEY_LINK"] ?? null) && ($context["S_SMILIES_ALLOWED"] ?? null))) {
                // line 74
                echo "\t\t\t<a class=\"btn-link btn-xs\" href=\"";
                echo ($context["U_MORE_SMILIES"] ?? null);
                echo "\" onclick=\"popup(this.href, 450, 350, '_phpbbsmilies'); return false;\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MORE_SMILIES");
                echo "\"><i class=\"fa fa-plus\"></i></a>
\t\t  ";
            }
            // line 76
            echo "\t\t</strong><br />
\t\t\t";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "smiley", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                // line 78
                echo "\t\t\t\t<a href=\"#\" onclick=\"insert_text('";
                echo $this->getAttribute($context["smiley"], "A_SMILEY_CODE", array());
                echo "', true); return false;\"><img src=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_HEIGHT", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_CODE", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_DESC", array());
                echo "\" /></a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "\t\t";
        }
        // line 81
        echo "\t\t
\t<div class=\"hidden-xs\">\t
    ";
        // line 83
        // line 84
        echo "\t\t";
        if (($context["BBCODE_STATUS"] ?? null)) {
            // line 85
            echo "\t\t";
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "smiley", array()))) {
                echo "<hr />";
            }
            // line 86
            echo "\t\t";
            echo ($context["BBCODE_STATUS"] ?? null);
            echo "<br />
\t\t";
            // line 87
            if (($context["S_BBCODE_ALLOWED"] ?? null)) {
                // line 88
                echo "\t\t\t";
                echo ($context["IMG_STATUS"] ?? null);
                echo "<br />
\t\t\t";
                // line 89
                echo ($context["FLASH_STATUS"] ?? null);
                echo "<br />
\t\t\t";
                // line 90
                echo ($context["URL_STATUS"] ?? null);
                echo "<br />
\t\t";
            }
            // line 92
            echo "\t\t";
            echo ($context["SMILIES_STATUS"] ?? null);
            echo "
\t\t";
        }
        // line 94
        echo "\t\t";
        if ((($context["S_EDIT_DRAFT"] ?? null) || ($context["S_DISPLAY_REVIEW"] ?? null))) {
            // line 95
            echo "\t\t\t";
            if (($context["S_DISPLAY_REVIEW"] ?? null)) {
                echo "<hr />";
            }
            // line 96
            echo "\t\t\t";
            if (($context["S_EDIT_DRAFT"] ?? null)) {
                echo "<strong><a href=\"";
                echo ($context["S_UCP_ACTION"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK_TO_DRAFTS");
                echo "</a></strong>";
            }
            // line 97
            echo "\t\t\t";
            if (($context["S_DISPLAY_REVIEW"] ?? null)) {
                echo "<strong><a href=\"#topic-review\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REVIEW");
                echo "</a></strong>";
            }
            // line 98
            echo "\t\t";
        }
        // line 99
        echo "\t </div>
\t</div>
 </div>
</fieldset>

";
        // line 104
        if (($this->getAttribute(($context["definition"] ?? null), "EXTRA_POSTING_OPTIONS", array()) == 1)) {
            // line 105
            echo "
";
            // line 106
            if (($context["S_COMPOSE_PM"] ?? null)) {
                // line 107
                echo "</div> <!-- // needed for posting_pm_layout.html to close the tabbed panel -->
";
            }
            // line 108
            echo "\t

<div class=\"space10\"></div>

\t";
            // line 112
            if (( !($context["S_SHOW_DRAFTS"] ?? null) && ( !$this->getAttribute(($context["definition"] ?? null), "SIG_EDIT", array()) == 1))) {
                // line 113
                echo "\t\t<fieldset class=\"form-actions\">
\t\t\t";
                // line 114
                echo ($context["S_HIDDEN_ADDRESS_FIELD"] ?? null);
                echo "
\t\t\t";
                // line 115
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t";
                // line 116
                // line 117
                echo "\t\t\t";
                if (($context["S_HAS_DRAFTS"] ?? null)) {
                    echo "<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING");
                    echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" accesskey=\"d\" tabindex=\"8\" name=\"load\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOAD_DRAFT");
                    echo "\" onclick=\"load_draft = true;\"><span class=\"hidden-xs\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOAD_DRAFT");
                    echo "</span><i class=\"visible-xs fa fa-upload fa-btn-fx\"></i></button>";
                }
                // line 118
                echo "\t\t\t";
                if (($context["S_SAVE_ALLOWED"] ?? null)) {
                    echo "<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SAVING");
                    echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" accesskey=\"k\" tabindex=\"7\" name=\"save\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SAVE_DRAFT");
                    echo "\"><span class=\"hidden-xs\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SAVE_DRAFT");
                    echo "</span><i class=\"visible-xs fa fa-floppy-o fa-btn-fx\"></i></button>";
                }
                // line 119
                echo "\t\t\t<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING");
                echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" tabindex=\"5\" name=\"preview\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PREVIEW");
                echo "\"";
                if ( !($context["S_PRIVMSGS"] ?? null)) {
                    echo " onclick=\"document.getElementById('postform').action += '#preview';\"";
                }
                echo " >";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PREVIEW");
                echo "</button>
\t\t\t<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                // line 120
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING");
                echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "</button>
\t\t</fieldset>
\t";
            }
            // line 123
            echo "\t
<div class=\"space10\"></div>

";
            // line 126
            if (($context["S_SHOW_ATTACH_BOX"] ?? null)) {
                // line 127
                echo "<script>
function addClass(e,s){e.classList?e.classList.add(s):e.className+=\" \"+s}function removeClass(e,s){e.classList?e.classList.remove(s):e.className=e.className.replace(new RegExp(\"(^|\\\\b)\"+s.split(\" \").join(\"|\")+\"(\\\\b|\$)\",\"gi\"),\" \")}function txtDropClicked(){removeClassesOnFocus(!1),addClass(document.getElementById(\"message\"),\"dropzone-wrap\"),addClass(document.getElementById(\"dragNdrop\"),\"dropzone-content\")}function removeClassesOnFocus(e){var s=e===!1?document.getElementById(\"message\"):e.target;removeClass(s,\"dropzone-wrap\"),removeClass(s.parentNode,\"dropzone-content\")}window.addEventListener(\"load\",function(){document.getElementById(\"ToggleTxTDrop\").addEventListener(\"click\",txtDropClicked),document.getElementById(\"message\").addEventListener(\"focus\",removeClassesOnFocus)});
</script>
";
            }
            // line 131
            echo "
    <!-- // panel has-nav-tabs no-border with tab start tag here posting_layout.html -->
    <!-- // we also need to hide the tabbed panel if in drafts and the PM attach option is disabled -->
\t<div";
            // line 134
            if ((($context["S_SHOW_DRAFTS"] ?? null) &&  !($context["S_SHOW_ATTACH_BOX"] ?? null))) {
                echo " style=\"display:none;\"";
            }
            echo " class=\"panel has-nav-tabs panel-default\">
\t\t\t<ul class=\"nav nav-tabs\">\t
\t\t\t\t<li ";
            // line 136
            if (($context["S_SHOW_DRAFTS"] ?? null)) {
                echo "style=\"display:none;\"";
            }
            echo " class=\"";
            if ((($context["IMGUR_DELETEHASH"] ?? null) || ($context["GYAZO_DIRECT_LINK"] ?? null))) {
            } else {
                echo "active";
            }
            echo "\"><a data-toggle=\"tab\" href=\"#options-panel-below\"><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
            echo "</span></a></li>
\t\t\t\t";
            // line 137
            if (($context["S_SHOW_ATTACH_BOX"] ?? null)) {
                echo "<li class=\"";
                if (($context["S_SHOW_DRAFTS"] ?? null)) {
                    echo "active";
                }
                echo "\"><a data-toggle=\"tab\" href=\"#posting-attach-body-html\" id=\"ToggleTxTDrop\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_ATTACHMENT");
                echo "</span></a></li>";
            }
            // line 138
            echo "\t\t\t\t";
            if (((($context["SCRIPT_NAME"] ?? null) == "posting") && ($context["IN_IMGUR"] ?? null))) {
                echo "<li class=\"";
                if (($context["IMGUR_DELETEHASH"] ?? null)) {
                    echo "active";
                }
                echo "\"><a data-toggle=\"tab\" href=\"#posting-imgur-html\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IMGUR_UPLOAD_TITLE");
                echo "</span></a></li>";
            } else {
            }
            // line 139
            echo "\t\t\t\t";
            if (((($context["SCRIPT_NAME"] ?? null) == "posting") && ($context["IN_GYAZO"] ?? null))) {
                echo "<li class=\"";
                if (($context["GYAZO_DIRECT_LINK"] ?? null)) {
                    echo "active";
                }
                echo "\"><a data-toggle=\"tab\" href=\"#posting-gyazo-html\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GYAZO_UPLOAD_TITLE");
                echo "</span></a></li>";
            } else {
            }
            // line 140
            echo "\t\t\t\t";
            if ((($context["S_SHOW_POLL_BOX"] ?? null) || ($context["S_POLL_DELETE"] ?? null))) {
                echo "<li class=\"\"><a data-toggle=\"tab\" href=\"#posting-poll-html\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_POLL");
                echo "</span></a></li>";
            }
            // line 141
            echo "\t\t\t";
            // line 142
            echo "\t\t\t</ul>
\t
    <div class=\"tab-content panel-content\">
\t   
\t\t<div class=\"panel-body tab-pane";
            // line 146
            if ((($context["IMGUR_DELETEHASH"] ?? null) || ($context["GYAZO_DIRECT_LINK"] ?? null))) {
            } else {
                echo " active";
            }
            echo "\" id=\"options-panel-below\">
\t\t
\t\t";
            // line 148
            if (( !($context["S_SHOW_DRAFTS"] ?? null) && ( !$this->getAttribute(($context["definition"] ?? null), "SIG_EDIT", array()) == 1))) {
                // line 149
                echo "\t\t<fieldset>
\t\t";
                // line 150
                // line 151
                echo "\t\t\t";
                if (($context["S_BBCODE_ALLOWED"] ?? null)) {
                    // line 152
                    echo "\t\t\t <input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
                    echo ($context["S_BBCODE_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"disable_bbcode\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_BBCODE");
                    echo "</label>
\t\t\t";
                }
                // line 154
                echo "\t\t\t";
                if (($context["S_SMILIES_ALLOWED"] ?? null)) {
                    // line 155
                    echo "\t\t\t <input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
                    echo ($context["S_SMILIES_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"disable_smilies\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_SMILIES");
                    echo "</label>
\t\t\t";
                }
                // line 157
                echo "\t\t\t";
                if (($context["S_LINKS_ALLOWED"] ?? null)) {
                    // line 158
                    echo "\t\t\t <input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
                    echo ($context["S_MAGIC_URL_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"disable_magic_url\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_MAGIC_URL");
                    echo "</label>
\t\t\t";
                }
                // line 160
                echo "\t\t\t";
                if (($context["S_SIG_ALLOWED"] ?? null)) {
                    // line 161
                    echo "\t\t\t <input type=\"checkbox\" name=\"attach_sig\" id=\"attach_sig\"";
                    echo ($context["S_SIGNATURE_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"attach_sig\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACH_SIG");
                    echo "</label>
\t\t\t";
                }
                // line 163
                echo "\t\t\t";
                if (($context["S_NOTIFY_ALLOWED"] ?? null)) {
                    // line 164
                    echo "\t\t\t <input type=\"checkbox\" name=\"notify\" id=\"notify\"";
                    echo ($context["S_NOTIFY_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"notify\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY_REPLY");
                    echo "</label>
\t\t\t";
                }
                // line 166
                echo "\t\t\t";
                if (($context["S_LOCK_TOPIC_ALLOWED"] ?? null)) {
                    // line 167
                    echo "\t\t\t <input type=\"checkbox\" name=\"lock_topic\" id=\"lock_topic\"";
                    echo ($context["S_LOCK_TOPIC_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"lock_topic\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCK_TOPIC");
                    echo "</label>
\t\t\t";
                }
                // line 169
                echo "\t\t\t";
                if (($context["S_LOCK_POST_ALLOWED"] ?? null)) {
                    // line 170
                    echo "\t\t\t <input type=\"checkbox\" name=\"lock_post\" id=\"lock_post\"";
                    echo ($context["S_LOCK_POST_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"lock_post\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCK_POST");
                    echo "&nbsp;&#91;";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCK_POST_EXPLAIN");
                    echo "&#93;</label>
\t\t\t";
                }
                // line 172
                echo "\t\t\t";
                if (((($context["S_TYPE_TOGGLE"] ?? null) || ($context["S_TOPIC_TYPE_ANNOUNCE"] ?? null)) || ($context["S_TOPIC_TYPE_STICKY"] ?? null))) {
                    // line 173
                    echo "\t\t\t<hr class=\"dashed\" />
\t\t\t";
                }
                // line 175
                echo "\t\t\t";
                if ((($context["S_SOFTDELETE_ALLOWED"] ?? null) || ($context["S_DELETE_ALLOWED"] ?? null))) {
                    // line 176
                    echo "\t\t\t <input type=\"checkbox\" name=\"delete\" id=\"delete\" ";
                    echo ($context["S_SOFTDELETE_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"delete\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST_SOFT");
                    echo "&nbsp;&#91;";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST_SOFT_WARN");
                    echo "&#93;</label>
\t\t\t <input type=\"checkbox\" name=\"delete_permanent\" id=\"delete_permanent\"><label class=\"check-control\" for=\"delete_permanent\">";
                    // line 177
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST_PERMANENT");
                    echo "&nbsp;&#91;";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST_PERMANENT_WARN");
                    echo "&#93;</label>\t
\t\t\t<hr class=\"dashed\" />
\t\t\t";
                }
                // line 180
                echo "\t\t\t
\t\t\t";
                // line 181
                if (($context["S_TYPE_TOGGLE"] ?? null)) {
                    // line 182
                    echo "\t\t    <div class=\"control-group\"> 
\t         <label class=\"control-label\" for=\"topic_type-0\">";
                    // line 183
                    if (($context["S_EDIT_POST"] ?? null)) {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHANGE_TOPIC_TO");
                    } else {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_TOPIC_AS");
                    }
                    echo ":</label>
\t         <div class=\"controls controls-row\"> 
             ";
                    // line 185
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "topic_type", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic_type"]) {
                        // line 186
                        echo "\t\t\t  <input type=\"radio\" name=\"topic_type\" id=\"topic_type-";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\"";
                        echo $this->getAttribute($context["topic_type"], "S_CHECKED", array());
                        echo "><label class=\"radio-inline\" for=\"topic_type-";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\">";
                        echo $this->getAttribute($context["topic_type"], "L_TOPIC_TYPE", array());
                        echo "</label>
\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_type'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 188
                    echo "\t         </div> 
\t\t\t <div class=\"space10\"></div>
\t        </div>
\t\t\t";
                }
                // line 192
                echo "
\t\t\t";
                // line 193
                if ((($context["S_TOPIC_TYPE_ANNOUNCE"] ?? null) || ($context["S_TOPIC_TYPE_STICKY"] ?? null))) {
                    // line 194
                    echo "\t\t\t<div class=\"control-group\"> 
\t         <label class=\"control-label\" for=\"topic_time_limit\">";
                    // line 195
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STICK_TOPIC_FOR");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</label><span class=\"help-block\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STICK_TOPIC_FOR_EXPLAIN");
                    echo "</span>
\t\t\t<div class=\"input-group col-xs-8 col-sm-2 col-md-2\">
\t\t       <input type=\"number\" class=\"form-control input-sm\" min=\"0\" max=\"999\" name=\"topic_time_limit\" id=\"topic_time_limit\" value=\"";
                    // line 197
                    echo ($context["TOPIC_TIME_LIMIT"] ?? null);
                    echo "\">
\t\t      <span class=\"input-group-addon\">";
                    // line 198
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DAYS");
                    echo "</span>
\t         </div>
\t\t\t <div class=\"space10\"></div>
\t       </div>
\t\t\t";
                }
                // line 203
                echo "\t\t\t
\t\t\t";
                // line 204
                if (($context["S_EDIT_REASON"] ?? null)) {
                    // line 205
                    echo "\t\t\t<div class=\"control-group\"> 
\t         <label class=\"control-label\" for=\"edit_reason\">";
                    // line 206
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_REASON");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</label>
\t        <div class=\"row\"> 
\t\t\t<div class=\"col-xs-8 col-sm-5 col-md-5\"> 
             <input type=\"text\" class=\"form-control input-sm\" placeholder=\"";
                    // line 209
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_LINK_PLACEHOLDER");
                    echo "\" name=\"edit_reason\" id=\"edit_reason\" value=\"";
                    echo ($context["EDIT_REASON"] ?? null);
                    echo "\">
\t        </div>
\t\t\t</div>
\t\t\t</div>
\t\t\t";
                }
                // line 214
                echo "\t\t ";
                echo "\t
\t\t</fieldset>
\t\t";
            }
            // line 217
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "posting_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  756 => 217,  750 => 214,  740 => 209,  733 => 206,  730 => 205,  728 => 204,  725 => 203,  717 => 198,  713 => 197,  705 => 195,  702 => 194,  700 => 193,  697 => 192,  691 => 188,  674 => 186,  670 => 185,  661 => 183,  658 => 182,  656 => 181,  653 => 180,  645 => 177,  636 => 176,  633 => 175,  629 => 173,  626 => 172,  616 => 170,  613 => 169,  605 => 167,  602 => 166,  594 => 164,  591 => 163,  583 => 161,  580 => 160,  572 => 158,  569 => 157,  561 => 155,  558 => 154,  550 => 152,  547 => 151,  546 => 150,  543 => 149,  541 => 148,  533 => 146,  527 => 142,  525 => 141,  518 => 140,  506 => 139,  494 => 138,  484 => 137,  471 => 136,  464 => 134,  459 => 131,  453 => 127,  451 => 126,  446 => 123,  436 => 120,  423 => 119,  412 => 118,  401 => 117,  400 => 116,  396 => 115,  392 => 114,  389 => 113,  387 => 112,  381 => 108,  377 => 107,  375 => 106,  372 => 105,  370 => 104,  363 => 99,  360 => 98,  353 => 97,  344 => 96,  339 => 95,  336 => 94,  330 => 92,  325 => 90,  321 => 89,  316 => 88,  314 => 87,  309 => 86,  304 => 85,  301 => 84,  300 => 83,  296 => 81,  293 => 80,  274 => 78,  270 => 77,  267 => 76,  259 => 74,  257 => 73,  252 => 72,  250 => 71,  246 => 69,  242 => 67,  241 => 66,  225 => 63,  215 => 61,  214 => 60,  208 => 56,  196 => 55,  193 => 54,  192 => 53,  189 => 52,  186 => 51,  183 => 50,  170 => 49,  166 => 48,  164 => 47,  159 => 44,  158 => 43,  144 => 42,  141 => 41,  133 => 40,  127 => 38,  124 => 37,  122 => 36,  119 => 35,  118 => 34,  115 => 33,  107 => 28,  99 => 24,  96 => 23,  94 => 22,  91 => 21,  85 => 17,  58 => 16,  50 => 15,  44 => 13,  40 => 11,  38 => 10,  35 => 9,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "posting_editor.html", "");
    }
}
