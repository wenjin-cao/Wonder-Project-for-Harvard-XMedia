<?php

/* @sitesplat_fltl/event/fltl.html */
class __TwigTemplate_baf7161a9faf2bd30f6cd2330ad3e835b0e6b4509163d2699fb3c6567db87a3e extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "fltl", array()))) {
            // line 2
            echo "<div class=\"row text-center\" id=\"fltl\">
\t";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "fltl", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["fltl"]) {
                // line 4
                echo "\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t<div class=\"panel panel-post\">
\t\t\t\t<div class=\"blog-meta\">
\t\t\t\t <time datetime=\"";
                // line 7
                echo $this->getAttribute($context["fltl"], "TOPIC_YEAR_DIGIT", array());
                echo "-";
                echo $this->getAttribute($context["fltl"], "TOPIC_MONTH_DIGIT", array());
                echo "-";
                echo $this->getAttribute($context["fltl"], "TOPIC_DAY_DIGIT", array());
                echo "\" class=\"entry-date\">
\t\t\t\t\t<span class=\"day\">";
                // line 8
                echo $this->getAttribute($context["fltl"], "TOPIC_DAY", array());
                echo "</span>
\t\t\t\t\t<span class=\"month\">";
                // line 9
                echo $this->getAttribute($context["fltl"], "TOPIC_MONTH", array());
                echo "</span>
\t\t\t\t </time>
\t\t\t\t</div>
\t\t\t\t<div class=\"title\">
\t\t\t\t <header class=\"entry-header\">
\t\t\t\t  <h6 class=\"inverse-font\"><a title=\"\" href=\"";
                // line 14
                echo $this->getAttribute($context["fltl"], "U_TOPIC", array());
                echo "\">";
                echo $this->getAttribute($context["fltl"], "TOPIC_TITLE", array());
                echo "</a></h6>
\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t <span class=\"jp-views\">";
                // line 16
                if ($this->getAttribute($context["fltl"], "AVATAR", array())) {
                    echo $this->getAttribute($context["fltl"], "AVATAR", array());
                } else {
                    echo "<img src=\"";
                    echo ($context["T_THEME_PATH"] ?? null);
                    echo "/images/user4.png\" alt=\"No avatar\">";
                }
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLTL_BY");
                echo $this->getAttribute($context["fltl"], "TOPIC_AUTHOR", array());
                echo "</span>
\t\t\t\t\t</div>
\t\t\t\t </header>
\t\t\t\t</div>
\t\t\t\t<div class=\"content-post\">
\t\t\t\t  <p>";
                // line 21
                echo $this->getAttribute($context["fltl"], "FP_EXCERPT", array());
                echo "</p>  
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-bottom\">
\t\t\t\t <a title=\"\" class=\"btn btn-xs btn-block\" href=\"";
                // line 24
                echo $this->getAttribute($context["fltl"], "U_LAST_POST", array());
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLTL_READ_MORE");
                echo "</a>
\t\t\t\t</div>               
\t\t\t</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fltl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t
</div>

<div id=\"rtbtnrow\" class=\"row text-center\">
\t<div class=\"col-md-12\">
\t  <a class=\"rtbutton btn btn-default btn-block btn-lazy\" href=\"javascript:void(0)\">";
            // line 33
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLTL_VIEW_MORE_TOPICS");
            echo "</a>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@sitesplat_fltl/event/fltl.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  95 => 28,  82 => 24,  76 => 21,  60 => 16,  53 => 14,  45 => 9,  41 => 8,  33 => 7,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@sitesplat_fltl/event/fltl.html", "");
    }
}
