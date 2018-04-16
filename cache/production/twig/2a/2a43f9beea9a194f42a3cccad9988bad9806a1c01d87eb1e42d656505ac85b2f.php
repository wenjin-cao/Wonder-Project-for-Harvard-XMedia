<?php

/* @sitesplat_flatbootsminicms/event/viewtopic_body_postrow_post_after.html */
class __TwigTemplate_1606010654d926d18f02cfb90329a4325c25a7b0e317de0d37a3ade8cd350d05 extends Twig_Template
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
        if (($this->getAttribute(($context["postrow"] ?? null), "S_FIRST_ROW", array()) && (($context["ADSENSE_TOPIC"] ?? null) != ""))) {
            // line 2
            echo "\t<div class=\"clearfix text-center\">";
            echo ($context["ADSENSE_TOPIC"] ?? null);
            echo "</div>
    <div class=\"space10\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "@sitesplat_flatbootsminicms/event/viewtopic_body_postrow_post_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@sitesplat_flatbootsminicms/event/viewtopic_body_postrow_post_after.html", "");
    }
}
