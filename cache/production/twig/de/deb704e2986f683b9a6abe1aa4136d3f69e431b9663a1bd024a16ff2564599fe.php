<?php

/* @sitesplat_BBCore/event/acp_ext_list_enabled_title_after.html */
class __TwigTemplate_de0dea9d9335488363734f2bbea81566bd9f1fef617f96ec9e64787232b75392 extends Twig_Template
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
        echo "<span style=\"float:right;\">
   <a style=\"color: blue; font-weight: bold; margin-right: 158px;\" href=\"";
        // line 2
        echo ($context["DISABLE_ALL"] ?? null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SS_RAPID_DISABLE_TLT");
        echo "\">&#187; ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SS_RAPID_DISABLE");
        echo " &#171;</a>
</span>";
    }

    public function getTemplateName()
    {
        return "@sitesplat_BBCore/event/acp_ext_list_enabled_title_after.html";
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
        return new Twig_Source("", "@sitesplat_BBCore/event/acp_ext_list_enabled_title_after.html", "");
    }
}
