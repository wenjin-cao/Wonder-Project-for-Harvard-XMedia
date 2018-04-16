<?php

/* @sitesplat_flatbootsminicms/event/footer_social_instead.html */
class __TwigTemplate_3ac5804f0dd139a5a72e44781478fd8be9bc6a182d3a754ec09fa72c702a4033 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "social", array()))) {
            // line 2
            echo "\t<div class=\"social-network\">
\t\t";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "social", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                // line 4
                echo "\t\t\t<a class=\"";
                echo $this->getAttribute($context["social"], "COLOR", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["social"], "NAME", array());
                echo "\" data-original-title=\"\" href=\"";
                echo $this->getAttribute($context["social"], "URL", array());
                echo "\" target=\"_blank\"><i class=\"";
                echo $this->getAttribute($context["social"], "ICON", array());
                echo "\"></i></a>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@sitesplat_flatbootsminicms/event/footer_social_instead.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@sitesplat_flatbootsminicms/event/footer_social_instead.html", "");
    }
}
