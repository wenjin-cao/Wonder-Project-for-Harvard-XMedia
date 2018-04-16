<?php

/* addons/header_teaser_body.html */
class __TwigTemplate_9983ffe34d8b67c6c7975d162113a475ebc4aa8320b16ff80a717a7bd5d38484 extends Twig_Template
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
        echo "<div class=\"flat-header\">
<div class=\"masthead\"></div>
    <div class=\"wrapper-head\">
\t <div class=\"container\">
\t \t";
        // line 5
        if (((($context["TEASER_TITLE"] ?? null) != "") || (($context["TEASER_TEXT"] ?? null) != ""))) {
            // line 6
            echo "\t \t\t<h1>";
            echo ($context["TEASER_TITLE"] ?? null);
            echo "</h1>
       \t\t<p>";
            // line 7
            echo ($context["TEASER_TEXT"] ?? null);
            echo "</p>
\t \t";
        } else {
            // line 9
            echo "\t\t\t<h1>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_INTRO");
            echo "&nbsp;<a class=\"label label-call\" href=\"http://getbootstrap.com/\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOOTSTRAP_VERSION");
            echo "</a></h1>
\t\t\t<p>";
            // line 10
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_EXPLAIN");
            echo "</p>
        ";
        }
        // line 12
        echo "     </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "addons/header_teaser_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  44 => 10,  37 => 9,  32 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "addons/header_teaser_body.html", "");
    }
}
