<?php

/* flatboots_style.html */
class __TwigTemplate_73b6a8b74b3a64e156adc57f2ea9491973f3f751af51001cb0c486690b3fb230 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "flatboots_style.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<link href=\"//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">

";
        // line 5
        if (($context["S_FLATBOOTS_STYLE_CONFIG"] ?? null)) {
            // line 6
            echo "
  <h1>";
            // line 7
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_STYLE_CONFIG");
            echo "</h1>

  <form method=\"post\" action=\"\">
  \t<fieldset>

\t\t\t<dl>
\t\t\t\t<dt><label for=\"about_us_title\">";
            // line 13
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABOUT_US_TITLE");
            echo "</label><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABOUT_US_TITLE_EXPLAIN");
            echo "</dt>
\t\t\t\t<dd><input type=\"text\" id=\"about_us_title\" name=\"about_us_title\" value=\"";
            // line 14
            echo ($context["ABOUT_US_TITLE"] ?? null);
            echo "\" /></dd>
\t\t\t</dl>

\t\t\t<dl>
\t\t\t\t<dt><label for=\"about_us\">";
            // line 18
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABOUT_US");
            echo ":</label><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABOUT_US_EXPLAIN");
            echo "</dt>
\t\t\t\t<dd><textarea name=\"about_us\" id=\"about_us\" rows=\"5\" cols=\"70\" style=\"width:95%;font-size: 11px;\">";
            // line 19
            echo ($context["ABOUT_US"] ?? null);
            echo "</textarea></dd>
\t\t\t</dl>

      <dl>
        <dt><label for=\"teaser_title\">";
            // line 23
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TEASER_TITLE");
            echo "</label><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TEASER_TITLE_EXPLAIN");
            echo "</dt>
        <dd><input type=\"text\" id=\"teaser_title\" name=\"teaser_title\" value=\"";
            // line 24
            echo ($context["TEASER_TITLE"] ?? null);
            echo "\" size=\"40\" /></dd>
      </dl>

      <dl>
        <dt><label for=\"teaser_text\">";
            // line 28
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TEASER_TEXT");
            echo ":</label><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TEASER_TEXT_EXPLAIN");
            echo "</dt>
        <dd><textarea name=\"teaser_text\" id=\"teaser_text\" rows=\"5\" cols=\"70\" style=\"width:95%;font-size: 11px;\">";
            // line 29
            echo ($context["TEASER_TEXT"] ?? null);
            echo "</textarea></dd>
      </dl>

\t\t\t<dl>
\t\t\t\t<dt><label for=\"google_analytics\">";
            // line 33
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOOGLE_ANALYTICS");
            echo ":</label><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOOGLE_ANALYTICS_EXPLAIN");
            echo "</dt>
\t\t\t\t<dd><textarea name=\"google_analytics\" id=\"google_analytics\" rows=\"5\" cols=\"70\" style=\"width:95%;font-size: 11px;\">";
            // line 34
            echo ($context["GOOGLE_ANALYTICS"] ?? null);
            echo "</textarea></dd>
\t\t\t</dl>

\t\t\t<dl>
\t\t\t\t<dt><label for=\"twitter_screen_name\">";
            // line 38
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TWITTER_SCREEN_NAME");
            echo "</label><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TWITTER_SCREEN_NAME_EXPLAIN");
            echo "</dt>
\t\t\t\t<dd><input type=\"text\" id=\"twitter_screen_name\" name=\"twitter_screen_name\" value=\"";
            // line 39
            echo ($context["TWITTER_SCREEN_NAME"] ?? null);
            echo "\" /></dd>
\t\t\t</dl>

      <dl>
        <dt><label for=\"twitter_id\">";
            // line 43
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TWITTER_ID");
            echo "</label><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TWITTER_ID_EXPLAIN");
            echo "</dt>
        <dd><input type=\"text\" id=\"twitter_id\" name=\"twitter_id\" value=\"";
            // line 44
            echo ($context["TWITTER_ID"] ?? null);
            echo "\" /></dd>
      </dl>

\t\t\t<dl>
\t\t\t\t<dt><label for=\"adsense_header\">";
            // line 48
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADSENSE_HEADER");
            echo ":</label><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADSENSE_HEADER_EXPLAIN");
            echo "</dt>
\t\t\t\t<dd><textarea name=\"adsense_header\" id=\"adsense_header\" rows=\"5\" cols=\"70\" style=\"width:95%;font-size: 11px;\">";
            // line 49
            echo ($context["ADSENSE_HEADER"] ?? null);
            echo "</textarea></dd>
\t\t\t</dl>

\t\t\t<dl>
\t\t\t\t<dt><label for=\"adsense_footer\">";
            // line 53
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADSENSE_FOOTER");
            echo ":</label><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADSENSE_FOOTER_EXPLAIN");
            echo "</dt>
\t\t\t\t<dd><textarea name=\"adsense_footer\" id=\"adsense_footer\" rows=\"5\" cols=\"70\" style=\"width:95%;font-size: 11px;\">";
            // line 54
            echo ($context["ADSENSE_FOOTER"] ?? null);
            echo "</textarea></dd>
\t\t\t</dl>

\t\t\t<dl>
\t\t\t\t<dt><label for=\"adsense_topic\">";
            // line 58
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADSENSE_TOPIC");
            echo ":</label><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADSENSE_TOPIC_EXPLAIN");
            echo "</dt>
\t\t\t\t<dd><textarea name=\"adsense_topic\" id=\"adsense_topic\" rows=\"5\" cols=\"70\" style=\"width:95%;font-size: 11px;\">";
            // line 59
            echo ($context["ADSENSE_TOPIC"] ?? null);
            echo "</textarea></dd>
\t\t\t</dl>

\t\t\t<dl>
\t\t\t\t<dt><label for=\"logo_text\">";
            // line 63
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGO_TEXT");
            echo ":</label><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGO_TEXT_EXPLAIN");
            echo "</dt>
\t\t\t\t<dd><input type=\"text\" id=\"logo_text\" name=\"logo_text\" value=\"";
            // line 64
            echo ($context["LOGO_TEXT"] ?? null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t
\t\t\t<dl>
\t\t\t\t<dt><label for=\"hide_header\">";
            // line 68
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_HEADER");
            echo ":</label><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_HEADER_EXPLAIN");
            echo "</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"hide_header\" value=\"1\"";
            // line 70
            if (($context["HIDE_HEADER"] ?? null)) {
                echo " id=\"hide_header\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"hide_header\" value=\"0\"";
            // line 71
            if ( !($context["HIDE_HEADER"] ?? null)) {
                echo " id=\"hide_header\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t
\t\t\t<dl>
\t\t\t\t<dt><label for=\"hide_footer\">";
            // line 76
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_FOOTER");
            echo ":</label><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_FOOTER_EXPLAIN");
            echo "</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"hide_footer\" value=\"1\"";
            // line 78
            if (($context["HIDE_FOOTER"] ?? null)) {
                echo " id=\"hide_footer\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"hide_footer\" value=\"0\"";
            // line 79
            if ( !($context["HIDE_FOOTER"] ?? null)) {
                echo " id=\"hide_footer\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t
\t\t\t<dl>
\t\t\t\t<dt><label for=\"enable_popup_login\">";
            // line 84
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENABLE_POPUP_LOGIN");
            echo ":</label><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENABLE_POPUP_LOGIN_EXPLAIN");
            echo "</dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_popup_login\" value=\"1\"";
            // line 86
            if (($context["ENABLE_POPUP_LOGIN"] ?? null)) {
                echo " id=\"enable_popup_login\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_popup_login\" value=\"0\"";
            // line 87
            if ( !($context["ENABLE_POPUP_LOGIN"] ?? null)) {
                echo " id=\"enable_popup_login\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl>
  \t\t  <dt><label for=\"flatboots_avatar_effect\">";
            // line 91
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AVATAR_EFFECT");
            echo "</label><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AVATAR_EFFECT_EXPLAIN");
            echo "</dt>
    \t\t<dd>  
          <select name=\"flatboots_avatar_effect\" id=\"flatboots_avatar_effect\">
    \t\t\t\t<option value=\"none\"";
            // line 94
            if ((($context["AVATAR_EFFECT"] ?? null) == "none")) {
                echo " selected";
            }
            echo ">none</option>
    \t\t\t\t<option value=\"img-rounded\"";
            // line 95
            if ((($context["AVATAR_EFFECT"] ?? null) == "img-rounded")) {
                echo " selected";
            }
            echo ">Rounded</option>
    \t\t\t\t<option value=\"img-circle\"";
            // line 96
            if ((($context["AVATAR_EFFECT"] ?? null) == "img-circle")) {
                echo " selected";
            }
            echo ">Circle</option>
    \t\t\t\t<option value=\"img-thumbnail\"";
            // line 97
            if ((($context["AVATAR_EFFECT"] ?? null) == "img-thumbnail")) {
                echo " selected";
            }
            echo ">Polaroid</option>
    \t\t\t</select>                              
  \t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl>
  \t\t  <dt><label for=\"mini_profile_position\">";
            // line 102
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MINI_PROFILE_POSITION");
            echo "</label><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MINI_PROFILE_POSITION_EXPLAIN");
            echo "</dt>
    \t\t<dd>  
          <select name=\"mini_profile_position\" id=\"mini_profile_position\">
    \t\t\t\t<option value=\"left\"";
            // line 105
            if ((($context["MINI_PROFILE_POSITION"] ?? null) == "left")) {
                echo " selected";
            }
            echo ">Left</option>
    \t\t\t\t<option value=\"right\"";
            // line 106
            if ((($context["MINI_PROFILE_POSITION"] ?? null) == "right")) {
                echo " selected";
            }
            echo ">Right</option>
    \t\t\t\t<option value=\"alternate\"";
            // line 107
            if ((($context["MINI_PROFILE_POSITION"] ?? null) == "alternate")) {
                echo " selected";
            }
            echo ">Alternate</option>
    \t\t\t</select>
  \t\t\t</dd>
\t\t\t</dl>

      <dl>
\t\t\t\t<dt><label for=\"call_enabled\">";
            // line 113
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CALL_ENABLED");
            echo ":</label></dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"call_enabled\" value=\"1\"";
            // line 115
            if (($context["CALL_ENABLED"] ?? null)) {
                echo " id=\"call_enabled\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"call_enabled\" value=\"0\"";
            // line 116
            if ( !($context["CALL_ENABLED"] ?? null)) {
                echo " id=\"call_enabled\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label>
\t\t\t\t</dd>
\t\t\t</dl>

      <dl>
\t\t\t\t<dt><label for=\"call_only_registered\">";
            // line 121
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CALL_ONLY_REGISTERED");
            echo ":</label></dt>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"call_only_registered\" value=\"1\"";
            // line 123
            if (($context["CALL_ONLY_REGISTERED"] ?? null)) {
                echo " id=\"call_only_registered\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"call_only_registered\" value=\"0\"";
            // line 124
            if ( !($context["CALL_ONLY_REGISTERED"] ?? null)) {
                echo " id=\"call_only_registered\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label>
\t\t\t\t</dd>
\t\t\t</dl>

      <dl>
\t\t\t\t<dt><label for=\"call_text\">";
            // line 129
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CALL_TEXT");
            echo ":</label></dt>
\t\t\t\t<dd><input type=\"text\" id=\"call_text\" name=\"call_text\" value=\"";
            // line 130
            echo ($context["CALL_TEXT"] ?? null);
            echo "\" /></dd>
\t\t\t</dl>

      <dl>
\t\t\t\t<dt><label for=\"call_button_text\">";
            // line 134
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CALL_BUTTON_TEXT");
            echo ":</label></dt>
\t\t\t\t<dd><input type=\"text\" id=\"call_button_text\" name=\"call_button_text\" value=\"";
            // line 135
            echo ($context["CALL_BUTTON_TEXT"] ?? null);
            echo "\" /></dd>
\t\t\t</dl>

      <dl>
\t\t\t\t<dt><label for=\"call_link\">";
            // line 139
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CALL_LINK");
            echo ":</label></dt>
\t\t\t\t<dd><input type=\"text\" id=\"call_link\" name=\"call_link\" value=\"";
            // line 140
            echo ($context["CALL_LINK"] ?? null);
            echo "\" /></dd>
\t\t\t</dl>

  \t</fieldset>
  \t<p class=\"submit-buttons\"><input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 144
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" /></p>
  \t";
            // line 145
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
  </form>
  
";
        } elseif (        // line 148
($context["S_FLATBOOTS_STYLE_MENU"] ?? null)) {
            // line 149
            echo "      
  ";
            // line 150
            if (($context["S_MENU_BUTTONS_LIST"] ?? null)) {
                // line 151
                echo "  
    <h1>";
                // line 152
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_STYLE_BUTTONS");
                echo "</h1>
    
    <p><strong>";
                // line 154
                echo ($context["S_BUTTONS_NAV"] ?? null);
                echo "</strong></p>
    ";
                // line 155
                if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "buttons", array()))) {
                    echo "  
    \t<table cellspacing=\"2\">
    \t\t<col class=\"row1\" /><col class=\"row2\" />
    \t\t<tbody>
    \t\t";
                    // line 159
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "buttons", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["buttons"]) {
                        // line 160
                        echo "    \t\t\t<tr>
    \t\t\t\t<td>
    \t\t\t\t\t<strong>";
                        // line 162
                        if ( !($context["S_PARENT_ID"] ?? null)) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["buttons"], "U_OPEN", array());
                            echo "\">";
                            echo $this->getAttribute($context["buttons"], "NAME", array());
                            echo "</a>";
                        } else {
                            echo $this->getAttribute($context["buttons"], "NAME", array());
                        }
                        echo "</strong>
    \t\t\t\t\t<br /><span>";
                        // line 163
                        echo $this->getAttribute($context["buttons"], "URL", array());
                        echo "</span>
    \t\t\t\t</td>
    \t\t\t\t<td style=\"width: 10%; text-align: center; white-space: nowrap;\">
      \t\t\t\t";
                        // line 166
                        if (($this->getAttribute($context["buttons"], "S_FIRST_ROW", array()) &&  !$this->getAttribute($context["buttons"], "S_LAST_ROW", array()))) {
                            // line 167
                            echo "    \t\t\t\t\t\t";
                            echo ($context["ICON_MOVE_UP_DISABLED"] ?? null);
                            echo "
    \t\t\t\t\t\t<a href=\"";
                            // line 168
                            echo $this->getAttribute($context["buttons"], "U_MOVE_DOWN", array());
                            echo "\">";
                            echo ($context["ICON_MOVE_DOWN"] ?? null);
                            echo "</a>
    \t\t\t\t\t";
                        } elseif (( !$this->getAttribute(                        // line 169
$context["buttons"], "S_FIRST_ROW", array()) &&  !$this->getAttribute($context["buttons"], "S_LAST_ROW", array()))) {
                            // line 170
                            echo "    \t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["buttons"], "U_MOVE_UP", array());
                            echo "\">";
                            echo ($context["ICON_MOVE_UP"] ?? null);
                            echo "</a>
    \t\t\t\t\t\t<a href=\"";
                            // line 171
                            echo $this->getAttribute($context["buttons"], "U_MOVE_DOWN", array());
                            echo "\">";
                            echo ($context["ICON_MOVE_DOWN"] ?? null);
                            echo "</a>
    \t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 172
$context["buttons"], "S_LAST_ROW", array()) &&  !$this->getAttribute($context["buttons"], "S_FIRST_ROW", array()))) {
                            // line 173
                            echo "    \t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["buttons"], "U_MOVE_UP", array());
                            echo "\">";
                            echo ($context["ICON_MOVE_UP"] ?? null);
                            echo "</a>
    \t\t\t\t\t\t";
                            // line 174
                            echo ($context["ICON_MOVE_DOWN_DISABLED"] ?? null);
                            echo "
    \t\t\t\t\t";
                        } else {
                            // line 176
                            echo "    \t\t\t\t\t\t";
                            echo ($context["ICON_MOVE_UP_DISABLED"] ?? null);
                            echo "
    \t\t\t\t\t\t";
                            // line 177
                            echo ($context["ICON_MOVE_DOWN_DISABLED"] ?? null);
                            echo "
    \t\t\t\t\t";
                        }
                        // line 179
                        echo "    \t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["buttons"], "U_EDIT", array());
                        echo "\">";
                        echo ($context["ICON_EDIT"] ?? null);
                        echo "</a>
    \t\t\t\t\t<a href=\"";
                        // line 180
                        echo $this->getAttribute($context["buttons"], "U_DELETE", array());
                        echo "\">";
                        echo ($context["ICON_DELETE"] ?? null);
                        echo "</a>  
    \t\t\t\t</td>
    \t\t\t</tr>
    \t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['buttons'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 184
                    echo "    \t\t</tbody>
    \t</table>
    ";
                } else {
                    // line 187
                    echo "      <div class=\"errorbox\">";
                    if ( !($context["S_PARENT_ID"] ?? null)) {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_BUTTONS");
                    } else {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_SUBBUTTONS");
                    }
                    echo "</div>
    ";
                }
                // line 188
                echo "        
\t
    <form method=\"post\" action=\"\">    
      <fieldset class=\"quick\">
      \t<input class=\"post\" type=\"text\" id=\"menu_button_name\" name=\"button_name\" value=\"\" />
        <input class=\"button2\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 193
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_STYLE_ADD_BUTTON");
                echo "\" />&nbsp;
        ";
                // line 194
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo " 
      </fieldset>
    </form>
    
\t<form method=\"post\" action=\"\">
    <fieldset>
      <dl>
        <dt><label for=\"enable_custom_links\">";
                // line 201
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENABLE_CUSTOM_LINKS");
                echo ":</label><br />";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENABLE_CUSTOM_LINKS_EXPLAIN");
                echo "</dt>
        <dd>
          <label><input type=\"radio\" class=\"radio\" name=\"enable_custom_links\" value=\"1\"";
                // line 203
                if (($context["ENABLED_CUSTOM_LINKS"] ?? null)) {
                    echo " id=\"enable_custom_links\" checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                echo "</label>
          <label><input type=\"radio\" class=\"radio\" name=\"enable_custom_links\" value=\"0\"";
                // line 204
                if ( !($context["ENABLED_CUSTOM_LINKS"] ?? null)) {
                    echo " id=\"enable_custom_links\" checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                echo "</label>
        </dd>
\t    <dd>
\t\t <p style=\"margin-top:15px;font-size: inherit;\">
\t\t  <input class=\"button1\" type=\"submit\" id=\"set_config\" name=\"set_config\" value=\"";
                // line 208
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" />
         </p>
\t\t</dd>
      </dl>
    </fieldset>
    ";
                // line 213
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
  </form>
\t
  ";
            } elseif ((            // line 216
($context["S_MENU_CREATE_BUTTON"] ?? null) || ($context["S_MENU_EDIT_BUTTON"] ?? null))) {
                // line 217
                echo "  
    <h1>";
                // line 218
                if (($context["S_MENU_EDIT_BUTTON"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_MENU_EDIT_BUTTON");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_STYLE_ADD_BUTTON");
                }
                echo "</h1>

    <form method=\"post\" action=\"\">
      <fieldset>
    \t\t<dl>
    \t\t\t<dt><label for=\"menu_button_name\">";
                // line 223
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_BUTTON_NAME");
                echo "</label><br />";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_BUTTON_NAME_EXPLAIN");
                echo "</dt>
    \t\t\t<dd><input class=\"post\" type=\"text\" size=\"50\" id=\"menu_button_name\" name=\"button_name\" value=\"";
                // line 224
                echo ($context["S_NAME"] ?? null);
                echo "\" /></dd>
    \t\t</dl>
\t\t\t
\t\t<!-- NOT USED IN FLATBOOTS
\t\t\t<dl>
    \t\t\t<dt><label for=\"menu_button_desc\">";
                // line 229
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_BUTTON_DESC");
                echo "</label><br />";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_BUTTON_DESC_EXPLAIN");
                echo "</dt>
    \t\t\t<dd><input class=\"post\" type=\"text\" size=\"50\" id=\"menu_button_desc\" name=\"button_desc\" value=\"";
                // line 230
                echo ($context["S_DESC"] ?? null);
                echo "\" /></dd>
    \t\t</dl>
\t\t NOT USED IN FLATBOOTS -->
\t\t\t
    \t\t<dl>
    \t\t\t<dt><label for=\"menu_button_url\">";
                // line 235
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_BUTTON_URL");
                echo "</label><br />";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_BUTTON_URL_EXPLAIN");
                echo "</dt>
    \t\t\t<dd><input class=\"post\" type=\"text\" size=\"50\" id=\"menu_button_url\" name=\"button_url\" value=\"";
                // line 236
                if ( !($context["S_MENU_EDIT_BUTTON"] ?? null)) {
                    echo "http://";
                }
                echo ($context["S_URL"] ?? null);
                echo "\" /></dd>
    \t\t</dl>
\t\t\t
\t\t\t
\t\t\t\t<dl>
    \t\t\t<dt><label for=\"button_icon\">";
                // line 241
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_ICON");
                echo "</label><br />";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_BUTTON_ICON_EXPLAIN");
                echo "</dt>
    \t\t\t<dd><input class=\"post\" type=\"text\" size=\"50\" id=\"button_icon\" name=\"button_icon\" value=\"";
                // line 242
                echo ($context["S_ICON"] ?? null);
                echo "\" /> <span style=\"margin-top: 2px;\"><i class=\"";
                echo ($context["S_ICON"] ?? null);
                echo "\" style=\"font-size:18px;vertical-align: middle;\"></i></span></dd>
    \t\t</dl>
\t\t\t
    \t\t<dl>
    \t\t  <dt><label for=\"menu_button_parent\">";
                // line 246
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_BUTTON_PARENT");
                echo "</label><br />";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_BUTTON_PARENT_EXPLAIN");
                echo "</dt>
      \t\t<dd>  
            <select name=\"button_parent\" id=\"menu_button_parent\">
           \t\t<option value=\"\"></option>
      \t\t\t\t";
                // line 250
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "parents", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["parents"]) {
                    // line 251
                    echo "      \t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["parents"], "ID", array());
                    echo "\"";
                    if (((($context["S_MENU_EDIT_BUTTON"] ?? null) && ($this->getAttribute($context["parents"], "ID", array()) == ($context["S_PARENT"] ?? null))) || ( !($context["S_MENU_EDIT_BUTTON"] ?? null) && ($this->getAttribute($context["parents"], "ID", array()) == ($context["S_PARENT_ID"] ?? null))))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["parents"], "NAME", array());
                    echo "</option>
      \t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parents'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 253
                echo "      \t\t\t</select>
    \t\t\t</dd>
  \t\t\t</dl>
    \t\t<dl>
    \t\t\t<dt><label for=\"menu_button_external_yes\">";
                // line 257
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_EXTERNAL");
                echo ":</label></dt>
    \t\t\t<dd>
            <input type=\"radio\" class=\"radio\" id=\"menu_button_external_yes\" name=\"button_external\" value=\"1\"";
                // line 259
                if (($context["S_EXTERNAL"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                echo " &nbsp; 
    \t\t\t\t<input type=\"radio\" class=\"radio\" id=\"menu_button_external_no\" name=\"button_external\" value=\"0\"";
                // line 260
                if ( !($context["S_EXTERNAL"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                echo "
          </dd>
    \t\t</dl>
    \t\t<dl>
    \t\t\t<dt><label for=\"menu_button_only_registered_yes\">";
                // line 264
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_ONLY_REGISTERED");
                echo ":</label></dt>
    \t\t\t<dd>
            <input type=\"radio\" class=\"radio\" id=\"menu_button_only_registered_yes\" name=\"button_only_registered\" value=\"1\"";
                // line 266
                if (($context["S_ONLY_REGISTERED"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                echo " &nbsp; 
    \t\t\t\t<input type=\"radio\" class=\"radio\" id=\"menu_button_only_registered_no\" name=\"button_only_registered\" value=\"0\"";
                // line 267
                if ( !($context["S_ONLY_REGISTERED"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                echo "
          </dd>
    \t\t</dl>
    \t\t<dl>
    \t\t\t<dt><label for=\"menu_button_only_guest_yes\">";
                // line 271
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_ONLY_GUEST");
                echo ":</label></dt>
    \t\t\t<dd>
            <input type=\"radio\" class=\"radio\" id=\"menu_button_only_guest_yes\" name=\"button_only_guest\" value=\"1\"";
                // line 273
                if (($context["S_ONLY_GUEST"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                echo " &nbsp; 
    \t\t\t\t<input type=\"radio\" class=\"radio\" id=\"menu_button_only_guest_no\" name=\"button_only_guest\" value=\"0\"";
                // line 274
                if ( !($context["S_ONLY_GUEST"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                echo "
          </dd>
    \t\t</dl>
    \t\t<dl>
    \t\t\t<dt><label for=\"menu_button_display_yes\">";
                // line 278
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_DISPLAY");
                echo ":</label></dt>
    \t\t\t<dd>
            <input type=\"radio\" class=\"radio\" id=\"menu_button_display_yes\" name=\"button_display\" value=\"1\"";
                // line 280
                if ((($context["S_DISPLAY"] ?? null) ||  !($context["S_MENU_EDIT_BUTTON"] ?? null))) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                echo " &nbsp; 
    \t\t\t\t<input type=\"radio\" class=\"radio\" id=\"menu_button_display_no\" name=\"button_display\" value=\"0\"";
                // line 281
                if (( !($context["S_DISPLAY"] ?? null) && ($context["S_MENU_EDIT_BUTTON"] ?? null))) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                echo "
          </dd>
    \t\t</dl>
    \t</fieldset>
      <p class=\"submit-buttons\">
      \t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 286
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" />&nbsp;
      \t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 287
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
                echo "\" />
      </p>
      ";
                // line 289
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
    </form> 
        
  ";
            }
            // line 293
            echo "
";
        } elseif (        // line 294
($context["S_FLATBOOTS_STYLE_UPLOAD"] ?? null)) {
            // line 295
            echo "
  <h1>";
            // line 296
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_STYLE_UPLOAD");
            echo "</h1>

  <form method=\"post\" action=\"\" enctype=\"multipart/form-data\">
  \t<fieldset>

\t\t\t<dl>
\t\t\t\t<dt><label for=\"image\">";
            // line 302
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_IMAGE");
            echo ":</label><br>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IMG_UPLOAD_EXPLAIN");
            echo "</dt>
\t\t\t\t<dd>
\t\t\t\t\t<input type=\"file\" name=\"image\" id=\"image\" /><br>
\t\t\t\t\t<input type=\"checkbox\" name=\"upload_bg\" value=\"1\" /> ";
            // line 305
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHECK_TO_UPLOAD_BG");
            echo "
\t\t\t\t</dd>
\t\t\t</dl>

\t\t\t<p class=\"submit-buttons\"><input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 309
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" /></p>
  \t\t";
            // line 310
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
  \t</fieldset>
  </form>

\t";
            // line 314
            if ((($context["LOGO_IMAGE_EXIST"] ?? null) || ($context["BACKGROUND_IMAGE_EXIST"] ?? null))) {
                // line 315
                echo "\t<style>
\t  .img-bgs dd .bg > img { 
\t    max-width: 80%;
        width: 100%;
\t  }
\t</style>
\t<form method=\"post\" action=\"\" enctype=\"multipart/form-data\">
\t<fieldset class=\"img-bgs\">
\t\t\t";
                // line 323
                if (($context["LOGO_IMAGE_EXIST"] ?? null)) {
                    // line 324
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"delete_logo\">";
                    // line 325
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IMAGE_LOGO");
                    echo ":</label><div style=\"margin-top: 5px;\"><input type=\"checkbox\" name=\"delete_logo\" value=\"1\" /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHECK_TO_DELETE");
                    echo "</div></dt>
\t\t\t\t<dd><span class=\"bg-logo\"><img src=\"";
                    // line 326
                    echo ($context["LOGO_FILENAME"] ?? null);
                    echo "\" alt=\"\" /></span></dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 329
                echo "
\t\t\t";
                // line 330
                if (($context["BACKGROUND_IMAGE_EXIST"] ?? null)) {
                    // line 331
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"delete_bg\">";
                    // line 332
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IMAGE_BG");
                    echo ":</label><div style=\"margin-top: 5px;\"><input type=\"checkbox\" name=\"delete_bg\" value=\"1\" /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHECK_TO_DELETE");
                    echo "</div></dt>
\t\t\t\t<dd><span class=\"bg\"><img src=\"";
                    // line 333
                    echo ($context["BACKGROUND_FILENAME"] ?? null);
                    echo "\" alt=\"\" /></span></dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 336
                echo "
\t\t\t<p class=\"submit-buttons\" style=\"text-align: left;\"><input class=\"button1\" type=\"submit\" id=\"submit\" name=\"delete\" value=\"";
                // line 337
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                echo "\" /></p>
  \t\t";
                // line 338
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
  \t</fieldset>
  </form>
\t";
            }
            // line 342
            echo "
";
        } elseif (        // line 343
($context["S_FLATBOOTS_STYLE_LINKS"] ?? null)) {
            // line 344
            echo "
  ";
            // line 345
            if (($context["S_MENU_BUTTONS_LIST"] ?? null)) {
                // line 346
                echo "
    <h1>";
                // line 347
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_STYLE_LINKS");
                echo "</h1>

    <p><strong>";
                // line 349
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_LINK_NAV");
                echo "</strong></p>
    ";
                // line 350
                if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "links", array()))) {
                    // line 351
                    echo "    \t<table cellspacing=\"2\">
    \t\t<col class=\"row1\" /><col class=\"row2\" />
    \t\t<tbody>
    \t\t";
                    // line 354
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "links", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["links"]) {
                        // line 355
                        echo "    \t\t\t<tr>
    \t\t\t\t<td>
    \t\t\t\t\t<strong>";
                        // line 357
                        echo $this->getAttribute($context["links"], "NAME", array());
                        echo "</strong>
    \t\t\t\t\t<br /><span>";
                        // line 358
                        echo $this->getAttribute($context["links"], "URL", array());
                        echo "</span>
    \t\t\t\t</td>
    \t\t\t\t<td style=\"width: 10%; text-align: center; white-space: nowrap;\">
      \t\t\t\t";
                        // line 361
                        if (($this->getAttribute($context["links"], "S_FIRST_ROW", array()) &&  !$this->getAttribute($context["links"], "S_LAST_ROW", array()))) {
                            // line 362
                            echo "    \t\t\t\t\t\t";
                            echo ($context["ICON_MOVE_UP_DISABLED"] ?? null);
                            echo "
    \t\t\t\t\t\t<a href=\"";
                            // line 363
                            echo $this->getAttribute($context["links"], "U_MOVE_DOWN", array());
                            echo "\">";
                            echo ($context["ICON_MOVE_DOWN"] ?? null);
                            echo "</a>
    \t\t\t\t\t";
                        } elseif (( !$this->getAttribute(                        // line 364
$context["links"], "S_FIRST_ROW", array()) &&  !$this->getAttribute($context["links"], "S_LAST_ROW", array()))) {
                            // line 365
                            echo "    \t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["links"], "U_MOVE_UP", array());
                            echo "\">";
                            echo ($context["ICON_MOVE_UP"] ?? null);
                            echo "</a>
    \t\t\t\t\t\t<a href=\"";
                            // line 366
                            echo $this->getAttribute($context["links"], "U_MOVE_DOWN", array());
                            echo "\">";
                            echo ($context["ICON_MOVE_DOWN"] ?? null);
                            echo "</a>
    \t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 367
$context["links"], "S_LAST_ROW", array()) &&  !$this->getAttribute($context["links"], "S_FIRST_ROW", array()))) {
                            // line 368
                            echo "    \t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["links"], "U_MOVE_UP", array());
                            echo "\">";
                            echo ($context["ICON_MOVE_UP"] ?? null);
                            echo "</a>
    \t\t\t\t\t\t";
                            // line 369
                            echo ($context["ICON_MOVE_DOWN_DISABLED"] ?? null);
                            echo "
    \t\t\t\t\t";
                        } else {
                            // line 371
                            echo "    \t\t\t\t\t\t";
                            echo ($context["ICON_MOVE_UP_DISABLED"] ?? null);
                            echo "
    \t\t\t\t\t\t";
                            // line 372
                            echo ($context["ICON_MOVE_DOWN_DISABLED"] ?? null);
                            echo "
    \t\t\t\t\t";
                        }
                        // line 374
                        echo "    \t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["links"], "U_EDIT", array());
                        echo "\">";
                        echo ($context["ICON_EDIT"] ?? null);
                        echo "</a>
    \t\t\t\t\t<a href=\"";
                        // line 375
                        echo $this->getAttribute($context["links"], "U_DELETE", array());
                        echo "\">";
                        echo ($context["ICON_DELETE"] ?? null);
                        echo "</a>
    \t\t\t\t</td>
    \t\t\t</tr>
    \t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['links'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 379
                    echo "    \t\t</tbody>
    \t</table>
    ";
                } else {
                    // line 382
                    echo "      <div class=\"errorbox\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_LINKS");
                    echo "</div>
    ";
                }
                // line 384
                echo "
    <form method=\"post\" action=\"\">
      <fieldset class=\"quick\">
      \t<input class=\"post\" type=\"text\" id=\"menu_button_name\" name=\"button_name\" value=\"\" />
        <input class=\"button2\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 388
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_STYLE_ADD_LINK");
                echo "\" />&nbsp;
        ";
                // line 389
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
      </fieldset>
    </form>

  ";
            } elseif ((            // line 393
($context["S_MENU_CREATE_BUTTON"] ?? null) || ($context["S_MENU_EDIT_BUTTON"] ?? null))) {
                // line 394
                echo "
    <h1>";
                // line 395
                if (($context["S_MENU_EDIT_BUTTON"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_STYLE_EDIT_LINK");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_STYLE_ADD_LINK");
                }
                echo "</h1>

    <form method=\"post\" action=\"\">
      <fieldset>
    \t\t<dl>
    \t\t\t<dt><label for=\"menu_button_name\">";
                // line 400
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_LINK_NAME");
                echo "</label><br />";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_LINK_NAME_EXPLAIN");
                echo "</dt>
    \t\t\t<dd><input class=\"post\" type=\"text\" size=\"50\" id=\"menu_button_name\" name=\"button_name\" value=\"";
                // line 401
                echo ($context["S_NAME"] ?? null);
                echo "\" /></dd>
    \t\t</dl>
    \t\t<dl>
    \t\t\t<dt><label for=\"menu_button_url\">";
                // line 404
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_LINK_URL");
                echo "</label><br />";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_LINK_URL_EXPLAIN");
                echo "</dt>
    \t\t\t<dd><input class=\"post\" type=\"text\" size=\"50\" id=\"menu_button_url\" name=\"button_url\" value=\"";
                // line 405
                if ( !($context["S_MENU_EDIT_BUTTON"] ?? null)) {
                    echo "http://";
                }
                echo ($context["S_URL"] ?? null);
                echo "\" /></dd>
    \t\t</dl>
\t\t\t\t<dl>
    \t\t\t<dt><label for=\"button_icon\">";
                // line 408
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_LINK_ICON");
                echo "</label></dt>
    \t\t\t<dd><input class=\"post\" type=\"text\" size=\"50\" id=\"button_icon\" name=\"button_icon\" value=\"";
                // line 409
                echo ($context["S_ICON"] ?? null);
                echo "\" /> <span style=\"margin-top: 2px;\"><i class=\"";
                echo ($context["S_ICON"] ?? null);
                echo "\" style=\"font-size:18px;vertical-align: middle;\"></i></span></dd>
    \t\t</dl>
    \t\t<dl>
    \t\t\t<dt><label for=\"menu_button_external_yes\">";
                // line 412
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_LINK_EXTERNAL");
                echo ":</label></dt>
    \t\t\t<dd>
            <input type=\"radio\" class=\"radio\" id=\"menu_button_external_yes\" name=\"button_external\" value=\"1\"";
                // line 414
                if (($context["S_EXTERNAL"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                echo " &nbsp;
    \t\t\t\t<input type=\"radio\" class=\"radio\" id=\"menu_button_external_no\" name=\"button_external\" value=\"0\"";
                // line 415
                if ( !($context["S_EXTERNAL"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                echo "
          </dd>
    \t\t</dl>
    \t\t<dl>
    \t\t\t<dt><label for=\"menu_button_only_registered_yes\">";
                // line 419
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_LINK_ONLY_REGISTERED");
                echo ":</label></dt>
    \t\t\t<dd>
            <input type=\"radio\" class=\"radio\" id=\"menu_button_only_registered_yes\" name=\"button_only_registered\" value=\"1\"";
                // line 421
                if (($context["S_ONLY_REGISTERED"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                echo " &nbsp;
    \t\t\t\t<input type=\"radio\" class=\"radio\" id=\"menu_button_only_registered_no\" name=\"button_only_registered\" value=\"0\"";
                // line 422
                if ( !($context["S_ONLY_REGISTERED"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                echo "
          </dd>
    \t\t</dl>
    \t\t<dl>
    \t\t\t<dt><label for=\"menu_button_only_guest_yes\">";
                // line 426
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_LINK_ONLY_GUEST");
                echo ":</label></dt>
    \t\t\t<dd>
            <input type=\"radio\" class=\"radio\" id=\"menu_button_only_guest_yes\" name=\"button_only_guest\" value=\"1\"";
                // line 428
                if (($context["S_ONLY_GUEST"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                echo " &nbsp;
    \t\t\t\t<input type=\"radio\" class=\"radio\" id=\"menu_button_only_guest_no\" name=\"button_only_guest\" value=\"0\"";
                // line 429
                if ( !($context["S_ONLY_GUEST"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                echo "
          </dd>
    \t\t</dl>
    \t\t<dl>
    \t\t\t<dt><label for=\"menu_button_display_yes\">";
                // line 433
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_LINK_DISPLAY");
                echo ":</label></dt>
    \t\t\t<dd>
            <input type=\"radio\" class=\"radio\" id=\"menu_button_display_yes\" name=\"button_display\" value=\"1\"";
                // line 435
                if ((($context["S_DISPLAY"] ?? null) ||  !($context["S_MENU_EDIT_BUTTON"] ?? null))) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                echo " &nbsp;
    \t\t\t\t<input type=\"radio\" class=\"radio\" id=\"menu_button_display_no\" name=\"button_display\" value=\"0\"";
                // line 436
                if (( !($context["S_DISPLAY"] ?? null) && ($context["S_MENU_EDIT_BUTTON"] ?? null))) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                echo "
          </dd>
    \t\t</dl>
    \t</fieldset>
      <p class=\"submit-buttons\">
      \t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 441
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" />&nbsp;
      \t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 442
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
                echo "\" />
      </p>
      ";
                // line 444
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
    </form>

  ";
            }
            // line 448
            echo "
";
        } elseif (        // line 449
($context["S_FLATBOOTS_STYLE_SOCIAL"] ?? null)) {
            // line 450
            echo "
  ";
            // line 451
            if (($context["S_MENU_BUTTONS_LIST"] ?? null)) {
                // line 452
                echo "
    <h1>";
                // line 453
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_STYLE_SOCIAL");
                echo "</h1>

    <p><strong>";
                // line 455
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_SOCIAL_NAV");
                echo "</strong></p>
    ";
                // line 456
                if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "social", array()))) {
                    // line 457
                    echo "    \t<table cellspacing=\"2\">
    \t\t<col class=\"row1\" /><col class=\"row2\" />
    \t\t<tbody>
    \t\t";
                    // line 460
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "social", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                        // line 461
                        echo "    \t\t\t<tr>
    \t\t\t\t<td>
    \t\t\t\t\t<strong>";
                        // line 463
                        echo $this->getAttribute($context["social"], "NAME", array());
                        echo "</strong>
    \t\t\t\t\t<br /><span>";
                        // line 464
                        echo $this->getAttribute($context["social"], "URL", array());
                        echo "</span>
    \t\t\t\t</td>
    \t\t\t\t<td style=\"width: 10%; text-align: center; white-space: nowrap;\">
      \t\t\t\t";
                        // line 467
                        if (($this->getAttribute($context["social"], "S_FIRST_ROW", array()) &&  !$this->getAttribute($context["social"], "S_LAST_ROW", array()))) {
                            // line 468
                            echo "    \t\t\t\t\t\t";
                            echo ($context["ICON_MOVE_UP_DISABLED"] ?? null);
                            echo "
    \t\t\t\t\t\t<a href=\"";
                            // line 469
                            echo $this->getAttribute($context["social"], "U_MOVE_DOWN", array());
                            echo "\">";
                            echo ($context["ICON_MOVE_DOWN"] ?? null);
                            echo "</a>
    \t\t\t\t\t";
                        } elseif (( !$this->getAttribute(                        // line 470
$context["social"], "S_FIRST_ROW", array()) &&  !$this->getAttribute($context["social"], "S_LAST_ROW", array()))) {
                            // line 471
                            echo "    \t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["social"], "U_MOVE_UP", array());
                            echo "\">";
                            echo ($context["ICON_MOVE_UP"] ?? null);
                            echo "</a>
    \t\t\t\t\t\t<a href=\"";
                            // line 472
                            echo $this->getAttribute($context["social"], "U_MOVE_DOWN", array());
                            echo "\">";
                            echo ($context["ICON_MOVE_DOWN"] ?? null);
                            echo "</a>
    \t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 473
$context["social"], "S_LAST_ROW", array()) &&  !$this->getAttribute($context["social"], "S_FIRST_ROW", array()))) {
                            // line 474
                            echo "    \t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["social"], "U_MOVE_UP", array());
                            echo "\">";
                            echo ($context["ICON_MOVE_UP"] ?? null);
                            echo "</a>
    \t\t\t\t\t\t";
                            // line 475
                            echo ($context["ICON_MOVE_DOWN_DISABLED"] ?? null);
                            echo "
    \t\t\t\t\t";
                        } else {
                            // line 477
                            echo "    \t\t\t\t\t\t";
                            echo ($context["ICON_MOVE_UP_DISABLED"] ?? null);
                            echo "
    \t\t\t\t\t\t";
                            // line 478
                            echo ($context["ICON_MOVE_DOWN_DISABLED"] ?? null);
                            echo "
    \t\t\t\t\t";
                        }
                        // line 480
                        echo "    \t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["social"], "U_EDIT", array());
                        echo "\">";
                        echo ($context["ICON_EDIT"] ?? null);
                        echo "</a>
    \t\t\t\t\t<a href=\"";
                        // line 481
                        echo $this->getAttribute($context["social"], "U_DELETE", array());
                        echo "\">";
                        echo ($context["ICON_DELETE"] ?? null);
                        echo "</a>
    \t\t\t\t</td>
    \t\t\t</tr>
    \t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 485
                    echo "    \t\t</tbody>
    \t</table>
    ";
                } else {
                    // line 488
                    echo "      <div class=\"errorbox\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_SOCIALS");
                    echo "</div>
    ";
                }
                // line 490
                echo "
    <form method=\"post\" action=\"\">
      <fieldset class=\"quick\">
      \t<input class=\"post\" type=\"text\" id=\"menu_button_name\" name=\"button_name\" value=\"\" />
        <input class=\"button2\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 494
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_STYLE_ADD_SOCIAL");
                echo "\" />&nbsp;
        ";
                // line 495
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
      </fieldset>
    </form>

  ";
            } elseif ((            // line 499
($context["S_MENU_CREATE_BUTTON"] ?? null) || ($context["S_MENU_EDIT_BUTTON"] ?? null))) {
                // line 500
                echo "
    <h1>";
                // line 501
                if (($context["S_MENU_EDIT_BUTTON"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_STYLE_EDIT_SOCIAL");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_STYLE_ADD_SOCIAL");
                }
                echo "</h1>

    <form method=\"post\" action=\"\">
      <fieldset>
    \t\t<dl>
    \t\t\t<dt><label for=\"menu_button_name\">";
                // line 506
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_SOCIAL_NAME");
                echo "</label><br />";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_SOCIAL_NAME_EXPLAIN");
                echo "</dt>
    \t\t\t<dd><input class=\"post\" type=\"text\" size=\"50\" id=\"menu_button_name\" name=\"button_name\" value=\"";
                // line 507
                echo ($context["S_NAME"] ?? null);
                echo "\" /></dd>
    \t\t</dl>
    \t\t<dl>
    \t\t\t<dt><label for=\"menu_button_url\">";
                // line 510
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_SOCIAL_URL");
                echo "</label><br />";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_SOCIAL_URL_EXPLAIN");
                echo "</dt>
    \t\t\t<dd><input class=\"post\" type=\"text\" size=\"50\" id=\"menu_button_url\" name=\"button_url\" value=\"";
                // line 511
                if ( !($context["S_MENU_EDIT_BUTTON"] ?? null)) {
                    echo "http://";
                }
                echo ($context["S_URL"] ?? null);
                echo "\" /></dd>
    \t\t</dl>
\t\t\t\t<dl>
    \t\t\t<dt><label for=\"menu_button_icon\">";
                // line 514
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_ICON");
                echo "</label></dt>
    \t\t\t<dd><input class=\"post\" type=\"text\" size=\"50\" id=\"menu_button_icon\" name=\"button_icon\" value=\"";
                // line 515
                echo ($context["S_ICON"] ?? null);
                echo "\" /> <span style=\"margin-top: 2px;\"><i class=\"";
                echo ($context["S_ICON"] ?? null);
                echo "\" style=\"font-size:18px;vertical-align: middle;\"></i></span></dd>
    \t\t</dl>
    \t\t<dl>
    \t\t\t<dt><label for=\"menu_button_only_registered_yes\">";
                // line 518
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_SOCIAL_ONLY_REGISTERED");
                echo ":</label></dt>
    \t\t\t<dd>
            <input type=\"radio\" class=\"radio\" id=\"menu_button_only_registered_yes\" name=\"button_only_registered\" value=\"1\"";
                // line 520
                if (($context["S_ONLY_REGISTERED"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                echo " &nbsp;
    \t\t\t\t<input type=\"radio\" class=\"radio\" id=\"menu_button_only_registered_no\" name=\"button_only_registered\" value=\"0\"";
                // line 521
                if ( !($context["S_ONLY_REGISTERED"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                echo "
          </dd>
    \t\t</dl>
    \t\t<dl>
    \t\t\t<dt><label for=\"menu_button_only_guest_yes\">";
                // line 525
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_SOCIAL_ONLY_GUEST");
                echo ":</label></dt>
    \t\t\t<dd>
            <input type=\"radio\" class=\"radio\" id=\"menu_button_only_guest_yes\" name=\"button_only_guest\" value=\"1\"";
                // line 527
                if (($context["S_ONLY_GUEST"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                echo " &nbsp;
    \t\t\t\t<input type=\"radio\" class=\"radio\" id=\"menu_button_only_guest_no\" name=\"button_only_guest\" value=\"0\"";
                // line 528
                if ( !($context["S_ONLY_GUEST"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                echo "
          </dd>
    \t\t</dl>
    \t\t<dl>
    \t\t\t<dt><label for=\"menu_button_display_yes\">";
                // line 532
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MENU_SOCIAL_DISPLAY");
                echo ":</label></dt>
    \t\t\t<dd>
            <input type=\"radio\" class=\"radio\" id=\"menu_button_display_yes\" name=\"button_display\" value=\"1\"";
                // line 534
                if ((($context["S_DISPLAY"] ?? null) ||  !($context["S_MENU_EDIT_BUTTON"] ?? null))) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                echo " &nbsp;
    \t\t\t\t<input type=\"radio\" class=\"radio\" id=\"menu_button_display_no\" name=\"button_display\" value=\"0\"";
                // line 535
                if (( !($context["S_DISPLAY"] ?? null) && ($context["S_MENU_EDIT_BUTTON"] ?? null))) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                echo "
          </dd>
    \t\t</dl>
    \t</fieldset>
      <p class=\"submit-buttons\">
      \t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 540
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" />&nbsp;
      \t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 541
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
                echo "\" />
      </p>
      ";
                // line 543
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
    </form>

  ";
            }
            // line 547
            echo "
";
        } elseif (        // line 548
($context["S_FLATBOOTS_STYLE_CSS"] ?? null)) {
            // line 549
            echo "
  <h1>";
            // line 550
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_STYLE_CSS");
            echo "</h1>

  <form method=\"post\" action=\"\">
    <fieldset>

      <dl>
        <dt><label for=\"enable_custom_css\">";
            // line 556
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENABLE_CUSTOM_CSS");
            echo ":</label><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENABLE_CUSTOM_CSS_EXPLAIN");
            echo "</dt>
        <dd>
          <label><input type=\"radio\" class=\"radio\" name=\"enable_custom_css\" value=\"1\"";
            // line 558
            if (($context["ENABLED_CUSTOM_CSS"] ?? null)) {
                echo " id=\"enable_custom_css\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
          <label><input type=\"radio\" class=\"radio\" name=\"enable_custom_css\" value=\"0\"";
            // line 559
            if ( !($context["ENABLED_CUSTOM_CSS"] ?? null)) {
                echo " id=\"enable_custom_css\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label>
        </dd>
      </dl>

      <dl>
        <dt><label for=\"css_data\">";
            // line 564
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECTED_FILE");
            echo ":</label><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECTED_FILE_EXPLAIN");
            echo "</dt>
        <dd>custom.css</dd>
      </dl>

      <textarea id=\"css_data\" name=\"css_data\" style=\"font-family:'Courier New', monospace;font-size:9pt;line-height:125%;width:100%;\" cols=\"80\" rows=\"20\">";
            // line 568
            echo ($context["CSS_DATA"] ?? null);
            echo "</textarea>

    </fieldset>
    <p class=\"submit-buttons\"><input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 571
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" /></p>
    ";
            // line 572
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
  </form>

";
        }
        // line 576
        echo "
";
        // line 577
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "flatboots_style.html", 577)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "flatboots_style.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1641 => 577,  1638 => 576,  1631 => 572,  1627 => 571,  1621 => 568,  1612 => 564,  1600 => 559,  1592 => 558,  1585 => 556,  1576 => 550,  1573 => 549,  1571 => 548,  1568 => 547,  1561 => 543,  1556 => 541,  1552 => 540,  1540 => 535,  1532 => 534,  1527 => 532,  1516 => 528,  1508 => 527,  1503 => 525,  1492 => 521,  1484 => 520,  1479 => 518,  1471 => 515,  1467 => 514,  1458 => 511,  1452 => 510,  1446 => 507,  1440 => 506,  1428 => 501,  1425 => 500,  1423 => 499,  1416 => 495,  1412 => 494,  1406 => 490,  1400 => 488,  1395 => 485,  1383 => 481,  1376 => 480,  1371 => 478,  1366 => 477,  1361 => 475,  1354 => 474,  1352 => 473,  1346 => 472,  1339 => 471,  1337 => 470,  1331 => 469,  1326 => 468,  1324 => 467,  1318 => 464,  1314 => 463,  1310 => 461,  1306 => 460,  1301 => 457,  1299 => 456,  1295 => 455,  1290 => 453,  1287 => 452,  1285 => 451,  1282 => 450,  1280 => 449,  1277 => 448,  1270 => 444,  1265 => 442,  1261 => 441,  1249 => 436,  1241 => 435,  1236 => 433,  1225 => 429,  1217 => 428,  1212 => 426,  1201 => 422,  1193 => 421,  1188 => 419,  1177 => 415,  1169 => 414,  1164 => 412,  1156 => 409,  1152 => 408,  1143 => 405,  1137 => 404,  1131 => 401,  1125 => 400,  1113 => 395,  1110 => 394,  1108 => 393,  1101 => 389,  1097 => 388,  1091 => 384,  1085 => 382,  1080 => 379,  1068 => 375,  1061 => 374,  1056 => 372,  1051 => 371,  1046 => 369,  1039 => 368,  1037 => 367,  1031 => 366,  1024 => 365,  1022 => 364,  1016 => 363,  1011 => 362,  1009 => 361,  1003 => 358,  999 => 357,  995 => 355,  991 => 354,  986 => 351,  984 => 350,  980 => 349,  975 => 347,  972 => 346,  970 => 345,  967 => 344,  965 => 343,  962 => 342,  955 => 338,  951 => 337,  948 => 336,  942 => 333,  936 => 332,  933 => 331,  931 => 330,  928 => 329,  922 => 326,  916 => 325,  913 => 324,  911 => 323,  901 => 315,  899 => 314,  892 => 310,  888 => 309,  881 => 305,  873 => 302,  864 => 296,  861 => 295,  859 => 294,  856 => 293,  849 => 289,  844 => 287,  840 => 286,  828 => 281,  820 => 280,  815 => 278,  804 => 274,  796 => 273,  791 => 271,  780 => 267,  772 => 266,  767 => 264,  756 => 260,  748 => 259,  743 => 257,  737 => 253,  722 => 251,  718 => 250,  709 => 246,  700 => 242,  694 => 241,  683 => 236,  677 => 235,  669 => 230,  663 => 229,  655 => 224,  649 => 223,  637 => 218,  634 => 217,  632 => 216,  626 => 213,  618 => 208,  607 => 204,  599 => 203,  592 => 201,  582 => 194,  578 => 193,  571 => 188,  561 => 187,  556 => 184,  544 => 180,  537 => 179,  532 => 177,  527 => 176,  522 => 174,  515 => 173,  513 => 172,  507 => 171,  500 => 170,  498 => 169,  492 => 168,  487 => 167,  485 => 166,  479 => 163,  467 => 162,  463 => 160,  459 => 159,  452 => 155,  448 => 154,  443 => 152,  440 => 151,  438 => 150,  435 => 149,  433 => 148,  427 => 145,  423 => 144,  416 => 140,  412 => 139,  405 => 135,  401 => 134,  394 => 130,  390 => 129,  378 => 124,  370 => 123,  365 => 121,  353 => 116,  345 => 115,  340 => 113,  329 => 107,  323 => 106,  317 => 105,  309 => 102,  299 => 97,  293 => 96,  287 => 95,  281 => 94,  273 => 91,  262 => 87,  254 => 86,  247 => 84,  235 => 79,  227 => 78,  220 => 76,  208 => 71,  200 => 70,  193 => 68,  186 => 64,  180 => 63,  173 => 59,  167 => 58,  160 => 54,  154 => 53,  147 => 49,  141 => 48,  134 => 44,  128 => 43,  121 => 39,  115 => 38,  108 => 34,  102 => 33,  95 => 29,  89 => 28,  82 => 24,  76 => 23,  69 => 19,  63 => 18,  56 => 14,  50 => 13,  41 => 7,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "flatboots_style.html", "");
    }
}
