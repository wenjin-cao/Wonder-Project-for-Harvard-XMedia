<?php

/* @sitesplat_fltl/event/overall_header_head_append.html */
class __TwigTemplate_14a201091040961c71d441b9d26568ecffe2950d9f91997d6f38f7db43df8552 extends Twig_Template
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
var boardurl = '";
        // line 2
        echo ($context["BOARD_URL"] ?? null);
        echo "';
</script>";
    }

    public function getTemplateName()
    {
        return "@sitesplat_fltl/event/overall_header_head_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@sitesplat_fltl/event/overall_header_head_append.html", "");
    }
}
