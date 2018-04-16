<?php

/* @sitesplat_flatbootsminicms/event/call_to_action_body_instead.html */
class __TwigTemplate_c1f56f3abc23488c2fe5d124fb0ac67dbf40d9863c9bd7455769c2816d764729 extends Twig_Template
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
        if ((($context["CALL_ENABLED"] ?? null) && ((($context["CALL_ONLY_REGISTERED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) ||  !($context["CALL_ONLY_REGISTERED"] ?? null)))) {
            // line 2
            echo "\t<div class=\"mastbottom\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t<p class=\"call-to-action\">";
            // line 6
            echo ($context["CALL_TEXT"] ?? null);
            echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<a href=\"";
            // line 9
            echo ($context["CALL_LINK"] ?? null);
            echo "\" class=\"btn btn-xl btn-danger pull-right\" title=\"\">";
            echo ($context["CALL_BUTTON_TEXT"] ?? null);
            echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>\t\t
";
        }
    }

    public function getTemplateName()
    {
        return "@sitesplat_flatbootsminicms/event/call_to_action_body_instead.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 9,  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@sitesplat_flatbootsminicms/event/call_to_action_body_instead.html", "");
    }
}
