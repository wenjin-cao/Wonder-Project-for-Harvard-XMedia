<?php

/* @sitesplat_BBCore/event/acp_main_notice_after.html */
class __TwigTemplate_2a271c91dad41b79bbd082710022a60e6ebbe57587250d8522e8d595eb9de0b7 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "sitesplat_themes", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "sitesplat_themes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["sitesplat_themes"]) {
                // line 3
                echo "<div class=\"errorbox notice\">
\t<h3>";
                // line 4
                echo $this->getAttribute($context["sitesplat_themes"], "NEW_BOOTS_VERSION", array());
                echo "</h3>
\t<p>";
                // line 5
                echo $this->getAttribute($context["sitesplat_themes"], "VERSIONNUMBERS", array());
                echo "</p>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitesplat_themes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "@sitesplat_BBCore/event/acp_main_notice_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  28 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@sitesplat_BBCore/event/acp_main_notice_after.html", "");
    }
}
