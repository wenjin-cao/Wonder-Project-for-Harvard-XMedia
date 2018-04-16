<?php

/* faq_body.html */
class __TwigTemplate_24bcf87953ea4a17ee89aa14643e01303565290e26ba42b71efb5e3775c9b5a1 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "faq_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "  <h2>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ_TITLE");
        echo "</h2>
<div class=\"panel-group\" id=\"f";
        // line 3
        echo $this->getAttribute(($context["faq_block"] ?? null), "S_ROW_COUNT", array());
        echo "r";
        echo $this->getAttribute($this->getAttribute(($context["faq_block"] ?? null), "faq_row", array()), "S_ROW_COUNT", array());
        echo "\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "faq_block", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["faq_block"]) {
            // line 5
            echo "<div class=\"space10\"></div>
 <div class=\"space10\"></div>
  <div class=\"space10\"></div>
<div class=\"side-segment\">
<h3>";
            // line 9
            echo $this->getAttribute($context["faq_block"], "BLOCK_TITLE", array());
            echo "</h3>
</div>
";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["faq_block"], "faq_row", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["faq_row"]) {
                // line 12
                echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h4 class=\"panel-title\">
        <a data-toggle=\"collapse\" data-parent=\"f";
                // line 15
                echo $this->getAttribute($context["faq_block"], "S_ROW_COUNT", array());
                echo "r";
                echo $this->getAttribute($context["faq_row"], "S_ROW_COUNT", array());
                echo "\" href=\"#f";
                echo $this->getAttribute($context["faq_block"], "S_ROW_COUNT", array());
                echo "r";
                echo $this->getAttribute($context["faq_row"], "S_ROW_COUNT", array());
                echo "\">
          ";
                // line 16
                echo $this->getAttribute($context["faq_row"], "FAQ_QUESTION", array());
                echo "
        </a>
      </h4>
    </div>
    <div id=\"f";
                // line 20
                echo $this->getAttribute($context["faq_block"], "S_ROW_COUNT", array());
                echo "r";
                echo $this->getAttribute($context["faq_row"], "S_ROW_COUNT", array());
                echo "\" class=\"panel-collapse collapse\">
      <div class=\"panel-body\">
        ";
                // line 22
                echo $this->getAttribute($context["faq_row"], "FAQ_ANSWER", array());
                echo "
      </div>
    </div>
  </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</div>
<div class=\"row\">
<div class=\"col-md-6\">
";
        // line 31
        $location = "jumpbox_options.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox_options.html", "faq_body.html", 31)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 32
        echo "<div class=\"space10\"></div>
</div>
</div>

";
        // line 36
        $location = "jump_links.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jump_links.html", "faq_body.html", 36)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 37
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "faq_body.html", 37)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "faq_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 37,  130 => 36,  124 => 32,  112 => 31,  107 => 28,  101 => 27,  90 => 22,  83 => 20,  76 => 16,  66 => 15,  61 => 12,  57 => 11,  52 => 9,  46 => 5,  42 => 4,  36 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "faq_body.html", "");
    }
}
