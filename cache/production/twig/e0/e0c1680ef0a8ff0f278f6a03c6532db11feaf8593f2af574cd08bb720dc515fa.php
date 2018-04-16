<?php

/* posting_buttons.html */
class __TwigTemplate_bae12ca5f0481b65c04c7ec673c7afc2cfa75627e6d9dccc0629e3a7515c02ef extends Twig_Template
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
        echo "<script>
\tvar form_name = 'postform';
\tvar text_name = ";
        // line 3
        if ($this->getAttribute(($context["definition"] ?? null), "SIG_EDIT", array())) {
            echo "'signature'";
        } else {
            echo "'message'";
        }
        echo ";
\tvar load_draft = false;
\tvar upload = false;

\t// Define the bbCode tags
\tvar bbcode = new Array();
\tvar bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            echo ", ";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_NAME", array());
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");
\tvar imageTag = false;

\t// Helpline messages
\tvar help_line = {
\t\tb: '";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_B_HELP"), "js");
        echo "',
\t\ti: '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_I_HELP"), "js");
        echo "',
\t\tu: '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_U_HELP"), "js");
        echo "',
\t\tq: '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_Q_HELP"), "js");
        echo "',
\t\tc: '";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_C_HELP"), "js");
        echo "',
\t\tl: '";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_L_HELP"), "js");
        echo "',
\t\to: '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_O_HELP"), "js");
        echo "',
\t\tp: '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_P_HELP"), "js");
        echo "',
\t\tw: '";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_W_HELP"), "js");
        echo "',
\t\ta: '";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_A_HELP"), "js");
        echo "',
\t\ts: '";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_S_HELP"), "js");
        echo "',
\t\tf: '";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_F_HELP"), "js");
        echo "',
\t\ty: '";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_Y_HELP"), "js");
        echo "',
\t\td: '";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_D_HELP"), "js");
        echo "'
\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            // line 29
            echo "\t\t\t,cb_";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
            echo ": '";
            echo $this->getAttribute($context["custom_tags"], "A_BBCODE_HELPLINE", array());
            echo "'
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t}

\tfunction change_palette()
\t{
\t\tphpbb.toggleDisplay('colour_palette');
\t\te = document.getElementById('colour_palette');

\t\tif (e.style.display == 'block')
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_COLOR_HIDE"), "js");
        echo "';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_COLOR"), "js");
        echo "';
\t\t}
\t}
</script>
<script src=\"";
        // line 48
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/editor.js\"></script>

";
        // line 50
        if (($context["S_BBCODE_ALLOWED"] ?? null)) {
            // line 51
            echo "<div id=\"colour_palette\" style=\"display: none;\">
\t<label class=\"control-label\">";
            // line 52
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_COLOR");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t<div id=\"color_palette_placeholder\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\"></div>
</div>
<div class=\"space10\"></div>
";
            // line 56
            // line 57
            if ( !($context["S_BBCODEORDER"] ?? null)) {
                // line 58
                echo "<div id=\"imgurAnchor\" class=\"btn-toolbar\" role=\"toolbar\">
    <div class=\"btn-group\">
         <button class=\"btn btn-default\" type=\"button\" accesskey=\"b\" name=\"addbbcode0\" onclick=\"bbstyle(0);\" title=\"";
                // line 60
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_B_HELP");
                echo "\"><i class=\"fa fa-bold\"></i></button>
         <button class=\"btn btn-default\" type=\"button\" accesskey=\"i\" name=\"addbbcode2\" onclick=\"bbstyle(2);\" title=\"";
                // line 61
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_I_HELP");
                echo "\"><i class=\"fa fa-italic\"></i></button>
         <button class=\"btn btn-default\" type=\"button\" accesskey=\"u\" name=\"addbbcode4\" onclick=\"bbstyle(4);\" title=\"";
                // line 62
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_U_HELP");
                echo "\"><i class=\"fa fa-underline\"></i></button>
\t</div>
\t
\t<div class=\"btn-group hidden-xs\">
         <button class=\"btn btn-default\" type=\"button\" accesskey=\"l\" name=\"addbbcode10\" onclick=\"bbstyle(10);\" title=\"";
                // line 66
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_L_HELP");
                echo "\"><i class=\"fa fa-list\"></i></button>
         <button class=\"btn btn-default\" type=\"button\" accesskey=\"o\" name=\"addbbcode12\" onclick=\"bbstyle(12);\" title=\"";
                // line 67
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_O_HELP");
                echo "\"><i class=\"fa fa-list-ol\"></i></button>
         <button class=\"btn btn-default\" type=\"button\" accesskey=\"y\" name=\"addlistitem\" onclick=\"bbstyle(-1);\" title=\"";
                // line 68
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_LISTITEM_HELP");
                echo "\"><i class=\"fa fa-asterisk\"></i></button>
    </div>

\t<div class=\"btn-group\">
\t     <button class=\"btn btn-default\" type=\"button\" accesskey=\"c\" name=\"addbbcode8\" onclick=\"bbstyle(8);\" title=\"";
                // line 72
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_C_HELP");
                echo "\"><i class=\"fa fa-code\"></i></button>
        ";
                // line 73
                if (($context["S_BBCODE_QUOTE"] ?? null)) {
                    // line 74
                    echo "\t     <button class=\"btn btn-default\" type=\"button\" accesskey=\"q\" name=\"addbbcode6\" onclick=\"bbstyle(6);\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_Q_HELP");
                    echo "\"><i class=\"fa fa-comment\"></i></button>
\t    ";
                }
                // line 75
                echo " 
\t\t";
                // line 76
                if (($context["S_BBCODE_IMG"] ?? null)) {
                    // line 77
                    echo "\t     <button class=\"btn btn-default\" type=\"button\" accesskey=\"p\" name=\"addbbcode14\" onclick=\"bbstyle(14);\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_P_HELP");
                    echo "\"><i class=\"fa fa-picture-o\"></i></button>
\t    ";
                }
                // line 79
                echo "\t    ";
                if (($context["S_LINKS_ALLOWED"] ?? null)) {
                    // line 80
                    echo "\t     <button class=\"btn btn-default\" type=\"button\" accesskey=\"w\" name=\"addbbcode16\" onclick=\"bbstyle(16);\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_W_HELP");
                    echo "\"><i class=\"fa fa-link\"></i></button>
\t\t";
                }
                // line 82
                echo "\t</div>
\t
\t<div class=\"btn-group hidden-xs\">
\t    ";
                // line 85
                if (($context["S_BBCODE_FLASH"] ?? null)) {
                    // line 86
                    echo "\t     <button class=\"btn btn-default\" type=\"button\" accesskey=\"d\" name=\"addbbcode18\" onclick=\"bbstyle(18);\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_D_HELP");
                    echo "\"><i class=\"fa fa-font\"></i></button>
\t\t";
                }
                // line 88
                echo "\t\t <button class=\"btn btn-default\" type=\"button\" name=\"bbpalette\" id=\"bbpalette\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_COLOR");
                echo "\" onclick=\"change_palette();\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_S_HELP");
                echo "\"><i class=\"fa fa-tint\"></i></button>
\t
\t";
                // line 90
                // line 91
                echo "\t
\t<!-- BEGIN custom_tags 
\t     <button class=\"btn btn-default\" type=\"button\" name=\"addbbcode";
                // line 93
                echo $this->getAttribute(($context["custom_tags"] ?? null), "BBCODE_ID", array());
                echo "\" value=\"";
                echo $this->getAttribute(($context["custom_tags"] ?? null), "BBCODE_TAG", array());
                echo "\" onclick=\"bbstyle(";
                echo $this->getAttribute(($context["custom_tags"] ?? null), "BBCODE_ID", array());
                echo ");\"  data-original-title=\"";
                echo $this->getAttribute(($context["custom_tags"] ?? null), "BBCODE_HELPLINE", array());
                echo "\" title=\"";
                echo $this->getAttribute(($context["custom_tags"] ?? null), "BBCODE_HELPLINE", array());
                echo "\"><i class=\"fa fa-cog\"></i></button>
\t     END custom_tags -->
\t
\t";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "custom_tags", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                    // line 97
                    echo "\t";
                    if (($this->getAttribute($context["custom_tags"], "BBCODE_TAG", array()) == "youtube")) {
                        // line 98
                        echo "\t <button class=\"btn btn-default\" type=\"button\" name=\"addbbcode";
                        echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                        echo "\" onclick=\"bbstyle(";
                        echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                        echo ");\" title=\"";
                        echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
                        echo "\"><i class=\"fa fa-youtube\"></i></button>
\t";
                    }
                    // line 100
                    echo "\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "\t
\t";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "custom_tags", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                    // line 103
                    echo "\t";
                    if (($this->getAttribute($context["custom_tags"], "BBCODE_TAG", array()) == "c")) {
                        // line 104
                        echo "\t <button class=\"btn btn-default\" type=\"button\" name=\"addbbcode";
                        echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                        echo "\" onclick=\"bbstyle(";
                        echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                        echo ");\" title=\"";
                        echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
                        echo "\"><i class=\"fa fa-text-width\"></i></button>
\t";
                    }
                    // line 106
                    echo "\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "   </div>

\t<select class=\"selectpicker hidden-xs\" data-style=\"btn-default\" data-width=\"auto\" name=\"addbbcode20\" onchange=\"bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;\" title=\"";
                // line 109
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_F_HELP");
                echo "\">
\t\t<option value=\"50\">";
                // line 110
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_TINY");
                echo "</option>
\t\t<option value=\"85\">";
                // line 111
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_SMALL");
                echo "</option>
\t\t<option data-icon=\"fa fa-font\" value=\"100\" selected=\"selected\">";
                // line 112
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_NORMAL");
                echo "</option>
\t\t";
                // line 113
                if (( !($context["MAX_FONT_SIZE"] ?? null) || (($context["MAX_FONT_SIZE"] ?? null) >= 150))) {
                    // line 114
                    echo "\t\t\t<option value=\"150\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_LARGE");
                    echo "</option>
\t\t\t";
                    // line 115
                    if (( !($context["MAX_FONT_SIZE"] ?? null) || (($context["MAX_FONT_SIZE"] ?? null) >= 200))) {
                        // line 116
                        echo "\t\t\t\t<option value=\"200\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_HUGE");
                        echo "</option>
\t\t\t";
                    }
                    // line 118
                    echo "\t\t";
                }
                // line 119
                echo "\t</select>
\t
\t<select class=\"selectpicker hidden-xs\" data-style=\"btn-default\" data-width=\"auto\" name=\"addbbcode_custom\" onchange=\"bbstyle(this.form.addbbcode_custom.options[this.form.addbbcode_custom.selectedIndex].value*1);this.form.addbbcode_custom.selectedIndex = 0;\">
\t  <option data-icon=\"fa fa-cog\" value=\"100\" selected=\"selected\">";
                // line 122
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODES");
                echo "</option>
      ";
                // line 123
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "custom_tags", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                    // line 124
                    echo "      <option value=\"";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_TAG", array());
                    echo "</option>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "   
    </select>
\t
</div>
";
            }
            // line 130
        }
    }

    public function getTemplateName()
    {
        return "posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 130,  388 => 125,  375 => 124,  371 => 123,  367 => 122,  362 => 119,  359 => 118,  353 => 116,  351 => 115,  346 => 114,  344 => 113,  340 => 112,  336 => 111,  332 => 110,  328 => 109,  324 => 107,  318 => 106,  308 => 104,  305 => 103,  301 => 102,  298 => 101,  292 => 100,  282 => 98,  279 => 97,  275 => 96,  261 => 93,  257 => 91,  256 => 90,  248 => 88,  242 => 86,  240 => 85,  235 => 82,  229 => 80,  226 => 79,  220 => 77,  218 => 76,  215 => 75,  209 => 74,  207 => 73,  203 => 72,  196 => 68,  192 => 67,  188 => 66,  181 => 62,  177 => 61,  173 => 60,  169 => 58,  167 => 57,  166 => 56,  158 => 52,  155 => 51,  153 => 50,  148 => 48,  141 => 44,  134 => 40,  123 => 31,  112 => 29,  108 => 28,  104 => 27,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  52 => 14,  36 => 9,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "posting_buttons.html", "");
    }
}
