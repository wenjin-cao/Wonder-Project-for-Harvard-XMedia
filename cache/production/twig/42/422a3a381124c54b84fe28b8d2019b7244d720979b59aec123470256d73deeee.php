<?php

/* pagination.html */
class __TwigTemplate_aaed74c7ec007674a743797c55a1e5b07dba074c06e75b5d3a40cb4d10c2e582 extends Twig_Template
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
        if ((($context["BASE_URL"] ?? null) && (($context["TOTAL_PAGES"] ?? null) > 6))) {
            // line 2
            echo "<li><a class=\"pagination-trigger\">";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "</a></li>
<li>  
  <!-- Popover pagination hidden content -->
  <div class=\"pagination_content\" style=\"display: none\">
      <div class=\"page-jump-form\">
\t\t<div class=\"input-group input-group-sm\">
\t\t <input type=\"number\" class=\"inputbox form-control\" onkeypress=\"keyPage(this, event)\" title=\"";
            // line 8
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_PAGE");
            echo "\" data-per-page=\"";
            echo ($context["PER_PAGE"] ?? null);
            echo "\" data-base-url=\"";
            echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html_attr");
            echo "\" data-start-name=\"";
            echo ($context["START_NAME"] ?? null);
            echo "\" min=\"1\" max=\"999999\" />
\t\t<div class=\"input-group-btn\">
\t\t <input type=\"button\" class=\"btn btn-default btn-sm\" value=\"";
            // line 10
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
            echo "\" onclick=\"pageJump(\$(this.parentNode.parentNode).find('.inputbox'))\" />
\t\t</div>
\t\t</div>
\t\t</div>\t
  </div>  
  <!-- Popover pagination hidden title -->
  <div class=\"pagination_header\" style=\"display: none\">
     ";
            // line 17
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO_PAGE_NUMBER");
            echo "
  </div> 
</li>
<script>
// some function that depends on bootstrap and jquery
head.ready(function () {
    \$(function(){
    // Enabling Popover pagination - JS (hidden content and title capturing)
    \$(\".pagination-trigger\").popover({
        html : true, 
        content: function() {
          return \$('.pagination_content').html();
        },
        title: function() {
          return \$('.pagination_header').html();
        }
    });
    });
});
</script>
";
        }
        // line 38
        echo "
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "pagination", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
            // line 40
            echo "\t";
            if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                // line 41
                echo "\t<li><a href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                echo "\" rel=\"prev\" role=\"button\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PREVIOUS");
                echo "</a></li>
\t";
            } elseif ($this->getAttribute(            // line 42
$context["pagination"], "S_IS_CURRENT", array())) {
                // line 43
                echo "\t<li class=\"active\"><a>";
                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                echo "</a></li>
\t";
            } elseif ($this->getAttribute(            // line 44
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                // line 45
                echo "\t<li class=\"ellipsis\" role=\"separator\"><a>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                echo "</a></li>
\t";
            } elseif ($this->getAttribute(            // line 46
$context["pagination"], "S_IS_NEXT", array())) {
                // line 47
                echo "\t<li><a href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                echo "\" rel=\"next\" role=\"button\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NEXT");
                echo "</a></li>
\t";
            } else {
                // line 49
                echo "\t<li><a href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                echo "\" role=\"button\">";
                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                echo "</a></li>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
";
    }

    public function getTemplateName()
    {
        return "pagination.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 52,  117 => 49,  109 => 47,  107 => 46,  102 => 45,  100 => 44,  95 => 43,  93 => 42,  86 => 41,  83 => 40,  79 => 39,  76 => 38,  52 => 17,  42 => 10,  31 => 8,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pagination.html", "");
    }
}
