<?php

/* jump_links.html */
class __TwigTemplate_3e2c5fe8c189d3b579494e7e18cdf57e402061c9bf78df731f5252cb6a28b851 extends Twig_Template
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
        if (($context["S_VIEWTOPIC"] ?? null)) {
            // line 2
            echo "<div class=\"space10\"></div>
<div class=\"pull-left\">
\t<a href=\"";
            // line 4
            echo ($context["U_VIEW_FORUM"] ?? null);
            echo "\" accesskey=\"r\"><i class=\"fa fa-chevron-left\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_TO_FORUM");
            echo "</a>
</div>
<div class=\"space10\"></div>
";
        } elseif (        // line 7
($context["S_VIEWFORUM"] ?? null)) {
            // line 8
            echo "<div class=\"space10\"></div>
<div class=\"pull-left\">
\t<a href=\"";
            // line 10
            echo ($context["U_INDEX"] ?? null);
            echo "\" accesskey=\"r\"><i class=\"fa fa-chevron-left\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_TO_INDEX");
            echo "</a>
</div>
<div class=\"space10\"></div>
";
        } elseif (        // line 13
($context["SEARCH_TOPIC"] ?? null)) {
            // line 14
            echo "<div class=\"space10\"></div>
<div class=\"pull-left\">
\t<a href=\"";
            // line 16
            echo ($context["U_SEARCH_TOPIC"] ?? null);
            echo "\" accesskey=\"r\"><i class=\"fa fa-chevron-left\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_TO_TOPIC");
            echo "</a>
</div>
<div class=\"space10\"></div>
";
        } elseif (        // line 19
($context["S_SEARCH_ACTION"] ?? null)) {
            // line 20
            echo "<div class=\"space10\"></div>
<div class=\"pull-left\">
\t<a href=\"";
            // line 22
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\" accesskey=\"r\"><i class=\"fa fa-chevron-left\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO_TO_SEARCH_ADV");
            echo "</a>
</div>
<div class=\"space10\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "jump_links.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 22,  63 => 20,  61 => 19,  53 => 16,  49 => 14,  47 => 13,  39 => 10,  35 => 8,  33 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "jump_links.html", "");
    }
}
