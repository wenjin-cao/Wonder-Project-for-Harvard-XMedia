<?php

/* @sitesplat_flatbootsminicms/event/header_breadcrumb_before.html */
class __TwigTemplate_00d8b3cd222fe36f7fc7154d8ab3984a04c279f59e49ffd4b88c7125b0733873 extends Twig_Template
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
        if ((($context["ADSENSE_HEADER"] ?? null) != "")) {
            echo "<div class=\"clearfix text-center\">";
            echo ($context["ADSENSE_HEADER"] ?? null);
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "@sitesplat_flatbootsminicms/event/header_breadcrumb_before.html";
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
        return new Twig_Source("", "@sitesplat_flatbootsminicms/event/header_breadcrumb_before.html", "");
    }
}
