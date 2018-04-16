<?php

/* posting_topic_review.html */
class __TwigTemplate_207c34b357a03e59266d8f5825358738b1bb1498a0413f01fed535cb72f53547 extends Twig_Template
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
        echo "<div class=\"clearfix\">
<div class=\"side-segment\"><h3>";
        // line 2
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REVIEW");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "&nbsp;";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "
   <small class=\"pull-right\" id=\"topic-review\">
\t <a data-text-swap=\"";
        // line 4
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPAND_CLOSE");
        echo "\" data-text-original=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPAND_VIEW");
        echo "\" class=\"topic-review-trigger\" href=\"#topic-review\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPAND_VIEW");
        echo "</a>
\t</small></h3></div>
</div>

<div class=\"topicreview-content\">
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "topic_review_row", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["topic_review_row"]) {
            // line 10
            echo "\t";
            if ($this->getAttribute($context["topic_review_row"], "S_IGNORE_POST", array())) {
                // line 11
                echo "\t<div class=\"well post-ignore\">
\t\t<span>";
                // line 12
                echo $this->getAttribute($context["topic_review_row"], "L_IGNORE_POST", array());
                echo "</span>
\t";
            } elseif ($this->getAttribute(            // line 13
$context["topic_review_row"], "S_POST_DELETED", array())) {
                // line 14
                echo "\t\t<div class=\"alert alert-default\">";
                echo $this->getAttribute($context["topic_review_row"], "L_DELETE_POST", array());
                echo "
\t\t <a class=\"btn btn-warning btn-xs pull-right\" data-toggle=\"collapse\" href=\"#pr";
                // line 15
                echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                echo "\" aria-expanded=\"false\" aria-controls=\"pr";
                echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SHOW");
                echo "</a>
\t    </div>
\t\t<div class=\"space10\"></div>
    ";
            } else {
                // line 19
                echo "    ";
            }
            // line 20
            echo "\t<div class=\"panel panel-default panel-body post text-muted ";
            if ($this->getAttribute($context["topic_review_row"], "S_IGNORE_POST", array())) {
                echo "collapse";
            } else {
            }
            echo "\" id=\"pr";
            echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
            echo "\">
\t 
\t";
            // line 22
            if ($this->getAttribute($context["topic_review_row"], "S_POST_PRIVATE", array())) {
                // line 23
                echo "\t\t<div class=\"text-muted pull-left\">
\t\t  ";
                // line 24
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVATE_BY");
                echo "<strong>&nbsp;";
                echo $this->getAttribute($context["topic_review_row"], "POST_AUTHOR_FULL", array());
                echo "</strong>&nbsp;&raquo;&nbsp;";
                echo $this->getAttribute($context["topic_review_row"], "POST_DATE", array());
                echo "
\t\t</div>
    ";
            } else {
                // line 27
                echo "\t <h3><a href=\"#pr";
                echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                echo "\">";
                echo $this->getAttribute($context["topic_review_row"], "POST_SUBJECT", array());
                echo "</a>";
                if (($context["S_IS_BOT"] ?? null)) {
                    echo "<span class=\"pull-right post-id hidden-xs\"><i class=\"fa fa-file\"></i></span>";
                } else {
                    echo "<span class=\"pull-right post-id hidden-xs\"><a href=\"";
                    echo $this->getAttribute($context["topic_review_row"], "U_MINI_POST", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO_POST");
                    echo "\">&#35;";
                    echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                    echo "</a></span>";
                }
                echo "</h3>
\t <div class=\"clearfix\">
\t 
\t    ";
                // line 30
                // line 31
                echo "\t\t<div class=\"text-muted pull-left\">
\t\t  ";
                // line 32
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                echo "<strong>&nbsp;";
                echo $this->getAttribute($context["topic_review_row"], "POST_AUTHOR_FULL", array());
                echo "</strong>&nbsp;&raquo;&nbsp;";
                echo $this->getAttribute($context["topic_review_row"], "POST_DATE", array());
                echo "
\t\t</div>
\t\t";
                // line 34
                // line 35
                echo "\t\t
\t    ";
                // line 36
                if ((($this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array()) && $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array())) || $this->getAttribute($context["topic_review_row"], "U_MCP_DETAILS", array()))) {
                    // line 37
                    echo "\t    <div class=\"pull-right\">
\t\t\t";
                    // line 38
                    if (($this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array()) && $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array()))) {
                        // line 39
                        echo "\t\t\t<a class=\"btn btn-sm btn-default\" href=\"#postingbox\" onclick=\"addquote(";
                        echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                        echo ", '";
                        echo $this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array());
                        echo "', '";
                        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("WROTE"), "js");
                        echo "', {post_id:";
                        echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                        echo ",time:";
                        echo $this->getAttribute($context["topic_review_row"], "POST_TIME", array());
                        echo ",user_id:";
                        echo $this->getAttribute($context["topic_review_row"], "USER_ID", array());
                        echo "});\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUOTE");
                        echo " ";
                        echo $this->getAttribute($context["topic_review_row"], "POST_AUTHOR", array());
                        echo "\"><i class=\"fa fa-comment\"></i></a>
\t\t\t";
                    }
                    // line 41
                    echo "\t\t\t
\t\t\t";
                    // line 42
                    if ($this->getAttribute($context["topic_review_row"], "U_MCP_DETAILS", array())) {
                        // line 43
                        echo "\t\t\t<a class=\"btn btn-sm btn-default\" href=\"";
                        echo $this->getAttribute($context["topic_review_row"], "U_MCP_DETAILS", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_DETAILS");
                        echo "\"><i class=\"fa fa-question-circle\"></i></a>
\t\t\t";
                    }
                    // line 45
                    echo "\t\t</div>
\t    ";
                }
                // line 47
                echo "\t </div>
\t\t
\t    <div class=\"content clearfix\">";
                // line 49
                echo $this->getAttribute($context["topic_review_row"], "MESSAGE", array());
                echo "</div>
\t
\t\t\t";
                // line 51
                if ($this->getAttribute($context["topic_review_row"], "S_HAS_ATTACHMENTS", array())) {
                    // line 52
                    echo "\t\t\t<div class=\"clearfix\">
\t\t\t\t<div class=\"attachbox\">
\t\t\t\t\t<h5>";
                    // line 54
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACHMENTS");
                    echo "</h5>
\t\t\t\t\t";
                    // line 55
                    // line 56
                    echo "\t\t\t\t\t    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topic_review_row"], "attachment", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                        echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    echo "\t\t\t\t\t";
                    // line 58
                    echo "\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t";
                }
                // line 61
                echo "
\t\t\t";
                // line 62
                if (($this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array()) && $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array()))) {
                    // line 63
                    echo "\t\t\t\t<div id=\"message_";
                    echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                    echo "\" style=\"display:none;\">";
                    echo $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array());
                    echo "</div>
\t\t\t";
                }
                // line 65
                echo "\t\t\t
\t";
            }
            // line 66
            echo "<!-- // this is for the private post above at 22 -->\t\t\t
\t</div>
\t
";
            // line 69
            if ($this->getAttribute($context["topic_review_row"], "S_IGNORE_POST", array())) {
                // line 70
                echo "</div>
";
            } else {
            }
            // line 73
            echo "\t\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_review_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
<script>
// some function that depends on bootstrap and jquery
// We use a single ternary operator to check if the swap matches the orignal and perform the right action text swap based on the truthiness
head.ready(function () {
bbcodeEnabled = ";
        // line 80
        echo ($context["S_BBCODE_ALLOWED"] ?? null);
        echo ";
\$('.topic-review-trigger').click(function() {
  var el = \$(this);
    el.text() == el.data(\"text-swap\") ? el.text(el.data(\"text-original\")) : el.text(el.data(\"text-swap\"));
    \$('.topicreview-content').toggleClass('topicreview-expand');
});

});
</script>
</div>
";
    }

    public function getTemplateName()
    {
        return "posting_topic_review.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 80,  258 => 75,  251 => 73,  246 => 70,  244 => 69,  239 => 66,  235 => 65,  227 => 63,  225 => 62,  222 => 61,  217 => 58,  215 => 57,  205 => 56,  204 => 55,  200 => 54,  196 => 52,  194 => 51,  189 => 49,  185 => 47,  181 => 45,  173 => 43,  171 => 42,  168 => 41,  148 => 39,  146 => 38,  143 => 37,  141 => 36,  138 => 35,  137 => 34,  128 => 32,  125 => 31,  124 => 30,  103 => 27,  93 => 24,  90 => 23,  88 => 22,  77 => 20,  74 => 19,  63 => 15,  58 => 14,  56 => 13,  52 => 12,  49 => 11,  46 => 10,  42 => 9,  30 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "posting_topic_review.html", "");
    }
}
