<?php

/* forumlist_body.html */
class __TwigTemplate_e68b45b532fdd5350baecfe6644766c2a3fe1289f38f90a8c3b2ac5362b30d2c extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "forumrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 2
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) &&  !$this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 3
                echo "\t    
\t\t<!-- Table footer not used at the moment
\t\t\t<tfoot>
             <tr>
                <th>Game Name</th>
                <th>Publisher</th>
                <th>Platform</th>
             </tr>
            </tfoot>
\t\tTable footer not used at the moment -->
\t\t\t
\t\t</table>
\t\t</div>
\t\t</div>
\t";
                // line 17
                echo "\t
\t";
            }
            // line 19
            echo "\t
    ";
            // line 20
            // line 21
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) || $this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 22
                echo "\t   <div class=\"panel panel-forum\">
\t     <div class=\"panel-heading\">
\t\t  ";
                // line 24
                if ($this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "</a>";
                } elseif ($this->getAttribute($context["forumrow"], "S_IS_LINK", array())) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LINKS");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                }
                // line 25
                echo "\t\t </div>
\t\t <div class=\"panel-inner\">
\t\t<table class=\"footable table table-striped table-primary table-hover\">
\t\t<thead>
\t\t";
                // line 29
                // line 30
                echo "\t\t\t<tr>
\t\t\t <th data-class=\"expand\">";
                // line 31
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
                echo "</th>
\t\t\t <th class=\"large110\" data-hide=\"phone\">";
                // line 32
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_POSTS_STATISTICS");
                echo "</th>
\t\t\t <th class=\"large21\" data-hide=\"phone\">";
                // line 33
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "</th>
\t\t\t</tr>
\t\t";
                // line 35
                echo "\t
\t\t</thead>
\t<tbody>
\t";
            }
            // line 39
            echo "\t";
            // line 40
            echo "\t
\t";
            // line 41
            if ( !$this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                // line 42
                echo "\t";
                // line 43
                echo "\t    <tr id=\"forum-";
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                echo "\">
\t\t";
                // line 44
                // line 45
                echo "\t\t\t<td title=\"";
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                echo "\">
\t\t\t";
                // line 46
                if ($this->getAttribute($context["forumrow"], "FORUM_IMAGE", array())) {
                    // line 47
                    echo "\t\t\t<span class=\"forum-image\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_IMAGE", array());
                    echo "</span>
\t\t\t";
                } else {
                    // line 49
                    echo "\t\t\t<span class=\"icon-wrapper\">
\t\t\t <i class=\"row-icon-font icon-moon-default";
                    // line 50
                    if ($this->getAttribute($context["forumrow"], "S_IS_LINK", array())) {
                        echo " icon-moon-link2";
                    }
                    if ($this->getAttribute($context["forumrow"], "S_UNREAD_FORUM", array())) {
                        echo " forum-unread";
                    } else {
                        echo " forum-read";
                    }
                    echo "\" title=\"";
                    echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                    echo "\"></i>
\t\t\t</span>
\t\t\t";
                }
                // line 53
                echo "\t\t\t<i class=\"row-icon-font-mini ";
                if ($this->getAttribute($context["forumrow"], "S_LOCKED_FORUM", array())) {
                    echo "icon-moon-lock forum-list-lock";
                }
                echo "\" title=\"";
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                echo "\"></i>
\t\t\t";
                // line 54
                if ((($context["S_ENABLE_FEEDS"] ?? null) && $this->getAttribute($context["forumrow"], "S_FEED_ENABLED", array()))) {
                    echo " <!-- <a class=\"btn-rss pull-right hidden-xs hidden-sm\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "\" href=\"";
                    echo ($context["U_FEED"] ?? null);
                    echo "?f=";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                    echo "\"><i class=\"fa fa-rss rss-color-forum\"></i></a> --> ";
                }
                // line 55
                echo "\t\t\t  <span class=\"desc-wrapper\">
\t\t\t  ";
                // line 56
                // line 57
                echo "\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "\" class=\"forumtitle\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                echo "</a><br />
\t\t\t\t";
                // line 58
                if ($this->getAttribute($context["forumrow"], "FORUM_DESC", array())) {
                    echo "<span class=\"description\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_DESC", array());
                    echo "</span><br />";
                }
                // line 59
                echo "\t\t\t\t";
                if ($this->getAttribute($context["forumrow"], "MODERATORS", array())) {
                    // line 60
                    echo "\t\t\t\t<span class=\"forum-mods\"><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_MODERATOR_STR", array());
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong>&nbsp;";
                    echo $this->getAttribute($context["forumrow"], "MODERATORS", array());
                    echo "</span>
\t\t\t\t";
                }
                // line 62
                echo "\t\t\t\t";
                if (($this->getAttribute($context["forumrow"], "SUBFORUMS", array()) && $this->getAttribute($context["forumrow"], "S_LIST_SUBFORUMS", array()))) {
                    // line 63
                    echo "\t\t\t\t ";
                    // line 64
                    echo "\t\t\t\t <span class=\"subforums\">
\t\t\t\t  <strong>";
                    // line 65
                    echo $this->getAttribute($context["forumrow"], "L_SUBFORUM_STR", array());
                    echo "</strong>
                    ";
                    // line 66
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forumrow"], "subforum", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        echo "\t
                        ";
                        // line 67
                        echo "\t\t\t\t\t
\t\t\t\t             ";
                        // line 68
                        if ($this->getAttribute($context["subforum"], "IS_LINK", array())) {
                            echo "<i class=\"fa fa-external-link-square\"></i>&nbsp;";
                        }
                        echo "<a href=\"";
                        echo $this->getAttribute($context["subforum"], "U_SUBFORUM", array());
                        echo "\" ";
                        if ($this->getAttribute($context["subforum"], "IS_LINK", array())) {
                            echo "target=\"_blank\"";
                        }
                        echo " class=\"subforum";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNREAD_POSTS");
                        } elseif ($this->getAttribute($context["subforum"], "IS_LINK", array())) {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBFORUM_LINK");
                        } else {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">";
                        echo $this->getAttribute($context["subforum"], "SUBFORUM_NAME", array());
                        echo "</a>";
                        if ( !$this->getAttribute($context["subforum"], "S_LAST_ROW", array())) {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
                        }
                        // line 69
                        echo "\t\t\t\t\t    ";
                        // line 70
                        echo "\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " 
\t\t\t\t </span>
\t\t\t\t ";
                    // line 72
                    // line 73
                    echo "\t\t\t\t";
                }
                // line 74
                echo "\t\t\t  </span>
\t\t\t</td>
\t\t\t";
                // line 76
                if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                    // line 77
                    echo "\t\t\t<td colspan=\"2\"><span class=\"stats-wrapper\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_REDIRECTS");
                    echo "&nbsp;";
                    echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                    echo "</span></td>
            ";
                } elseif ($this->getAttribute(                // line 78
$context["forumrow"], "S_IS_LINK", array())) {
                    // line 79
                    echo "\t\t\t<td>&nbsp;</td>\t\t
\t\t\t<td>&nbsp;</td>\t\t\t\t
\t\t\t";
                } elseif ( !$this->getAttribute(                // line 81
$context["forumrow"], "S_IS_LINK", array())) {
                    // line 82
                    echo "\t\t\t<td class=\"stats-col\">
\t\t\t <span class=\"stats-wrapper\">
\t\t\t ";
                    // line 84
                    echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                    echo "&nbsp;";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                    echo "&nbsp;<br />";
                    echo $this->getAttribute($context["forumrow"], "POSTS", array());
                    echo "&nbsp;";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                    echo " 
\t\t\t ";
                    // line 85
                    if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array())) {
                        // line 86
                        echo "\t\t\t  <a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUMLIST_UNAPPROVED");
                        echo "\"><i class=\"fa fa-question-circle\"></i></a>
\t\t\t ";
                    } elseif ($this->getAttribute(                    // line 87
$context["forumrow"], "U_UNAPPROVED_POSTS", array())) {
                        // line 88
                        echo "\t\t\t  <a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_POSTS", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUMLIST_UNAPPROVED_POST");
                        echo "\"><i class=\"fa fa-question-circle\"></i></a>
\t\t\t ";
                    }
                    // line 90
                    echo "\t\t\t ";
                    // line 91
                    echo "\t\t\t </span>
\t\t\t</td>\t
\t\t\t<td>
\t\t\t  <span class=\"last-wrapper text-overflow\">
\t\t\t   ";
                    // line 95
                    // line 96
                    echo "\t\t\t\t";
                    if ($this->getAttribute($context["forumrow"], "S_DISPLAY_SUBJECT", array())) {
                        // line 97
                        echo "\t\t\t\t ";
                        // line 98
                        echo "\t\t\t\t <a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                        echo "\" title=\"\" class=\"lastsubject\">";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", array());
                        echo "</a><br />
\t\t\t\t";
                    }
                    // line 100
                    echo "\t\t\t\t";
                    if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", array())) {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                        echo "&nbsp;";
                        echo $this->getAttribute($context["forumrow"], "LAST_POSTER_FULL", array());
                        echo "
\t\t\t\t";
                        // line 101
                        if ( !($context["S_IS_BOT"] ?? null)) {
                            echo "<a class=\"moderator-item\" href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUMLIST_LASTPOST");
                            echo "\"><i class=\"mobile-post fa fa-sign-out\"></i></a>";
                        }
                        // line 102
                        echo "\t\t\t\t<br /><span class=\"forum-time\">";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", array());
                        echo "</span>";
                    } else {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_POSTS");
                        echo "&nbsp;";
                    }
                    // line 103
                    echo "\t\t\t  </span>
\t\t\t</td>
\t\t\t";
                }
                // line 106
                echo "\t\t";
                echo "\t
\t\t</tr>
\t";
                // line 108
                echo "\t
\t";
            }
            // line 110
            echo "
\t";
            // line 111
            if ($this->getAttribute($context["forumrow"], "S_LAST_ROW", array())) {
                // line 112
                echo "\t </tbody>
\t</table>
\t</div>
\t</div>
\t";
                // line 116
                // line 117
                echo "\t";
            }
            // line 118
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 120
            echo "\t<div class=\"well\">
\t\t<strong>";
            // line 121
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_FORUMS");
            echo "</strong>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 121,  396 => 120,  390 => 118,  387 => 117,  386 => 116,  380 => 112,  378 => 111,  375 => 110,  371 => 108,  366 => 106,  361 => 103,  353 => 102,  345 => 101,  337 => 100,  329 => 98,  327 => 97,  324 => 96,  323 => 95,  317 => 91,  315 => 90,  307 => 88,  305 => 87,  298 => 86,  296 => 85,  286 => 84,  282 => 82,  280 => 81,  276 => 79,  274 => 78,  267 => 77,  265 => 76,  261 => 74,  258 => 73,  257 => 72,  248 => 70,  246 => 69,  216 => 68,  213 => 67,  207 => 66,  203 => 65,  200 => 64,  198 => 63,  195 => 62,  186 => 60,  183 => 59,  177 => 58,  170 => 57,  169 => 56,  166 => 55,  154 => 54,  145 => 53,  130 => 50,  127 => 49,  121 => 47,  119 => 46,  114 => 45,  113 => 44,  108 => 43,  106 => 42,  104 => 41,  101 => 40,  99 => 39,  93 => 35,  88 => 33,  84 => 32,  80 => 31,  77 => 30,  76 => 29,  70 => 25,  58 => 24,  54 => 22,  51 => 21,  50 => 20,  47 => 19,  43 => 17,  27 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forumlist_body.html", "");
    }
}
