<?php

/* quickmod_tools.html */
class __TwigTemplate_2231c8ed01c6e1c5d9956226e1ee32df7fdd1887e9ebfc2cc17f8a7fb43f40f4 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "quickmod", array()))) {
            // line 2
            echo "<div id=\"quickmod\" class=\"dropdown\">
  <button class=\"btn btn-default btn-block dropdown-toggle\" type=\"button\" id=\"quickmod-tools\" data-toggle=\"dropdown\" aria-expanded=\"true\">
   ";
            // line 4
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_MOD");
            echo "
    <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"quickmod-tools\" style=\"width: 100%;\">
  <!-- <li role=\"presentation\" class=\"dropdown-header\">Dropdown header</li> -->
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "quickmod", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                // line 10
                echo "\t ";
                $value = twig_in_filter($this->getAttribute($context["quickmod"], "VALUE", array()), array(0 => "lock", 1 => "unlock", 2 => "delete_topic", 3 => "restore_topic", 4 => "make_normal", 5 => "make_sticky", 6 => "make_announce", 7 => "make_global"));
                $context['definition']->set('QUICKMOD_AJAX', $value);
                // line 11
                echo "\t <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
                echo $this->getAttribute($context["quickmod"], "LINK", array());
                echo "\"";
                if ($this->getAttribute(($context["definition"] ?? null), "QUICKMOD_AJAX", array())) {
                    echo " data-ajax=\"true\" data-refresh=\"true\"";
                }
                echo ">";
                echo $this->getAttribute($context["quickmod"], "TITLE", array());
                echo "</a></li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "  </ul>
</div>\t\t
";
        }
    }

    public function getTemplateName()
    {
        return "quickmod_tools.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  41 => 11,  37 => 10,  33 => 9,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "quickmod_tools.html", "");
    }
}
