<?php

/* @sitesplat_flatbootsminicms/event/call_to_action_before.html */
class __TwigTemplate_904081d1956428cd7aeb5fb80ab6978115b675b669ac42559a2cbafddddf9cba extends Twig_Template
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
        if ((($context["ADSENSE_FOOTER"] ?? null) != "")) {
            echo "<div class=\"clearfix text-center\">";
            echo ($context["ADSENSE_FOOTER"] ?? null);
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "@sitesplat_flatbootsminicms/event/call_to_action_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@sitesplat_flatbootsminicms/event/call_to_action_before.html", "");
    }
}
