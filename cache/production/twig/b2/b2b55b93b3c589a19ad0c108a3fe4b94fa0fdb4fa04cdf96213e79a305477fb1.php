<?php

/* quickreply_editor.html */
class __TwigTemplate_3f0f8ebc00fe9e8b0478b3cf142493fc7deb2ffb899e78273419dadd7b004474 extends Twig_Template
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
        echo "<form method=\"post\" action=\"";
        echo ($context["U_QR_ACTION"] ?? null);
        echo "\" id=\"qr_postform\">
";
        // line 2
        // line 3
        echo "    <div class=\"widget-content\">\t\t\t
\t <div class=\"space10\"></div>
\t ";
        // line 5
        // line 6
        echo "\t\t<label class=\"sr-only\" for=\"subject\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBJECT");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
        <div class=\"form-group\">
         <input class=\"form-control input-sm\" type=\"text\" name=\"subject\" id=\"subject\" value=\"";
        // line 8
        echo ($context["SUBJECT"] ?? null);
        echo "\"/>
        </div> 
         <label class=\"sr-only\" for=\"message\">";
        // line 10
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t    ";
        // line 11
        // line 12
        echo "\t\t<div class=\"form-group\">
\t\t <textarea class=\"form-control ccount\" name=\"message\" id=\"message\" rows=\"3\" placeholder=\"";
        // line 13
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_ENTER_PLACEHOLDER");
        echo "\"></textarea>
        </div>
\t\t";
        // line 15
        // line 16
        echo "    </div>
    <div class=\"widget-footer\"> 
\t  <div class=\"form-group\">
\t\t";
        // line 19
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t\t";
        // line 20
        echo ($context["QR_HIDDEN_FIELDS"] ?? null);
        echo "
\t\t<button type=\"submit\" class=\"btn btn-default\" tabindex=\"7\" name=\"post\" value=\"";
        // line 21
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" autocomplete=\"off\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING");
        echo "<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "</button>
\t\t<button type=\"submit\" class=\"btn btn-default\" tabindex=\"6\" name=\"preview\" value=\"";
        // line 22
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FULL_EDITOR");
        echo "\" id=\"qr_full_editor\" autocomplete=\"off\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING");
        echo "<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FULL_EDITOR");
        echo "</button>
     </div>
\t</div>
";
        // line 25
        // line 26
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "quickreply_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 26,  88 => 25,  78 => 22,  70 => 21,  66 => 20,  62 => 19,  57 => 16,  56 => 15,  51 => 13,  48 => 12,  47 => 11,  42 => 10,  37 => 8,  30 => 6,  29 => 5,  25 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "quickreply_editor.html", "");
    }
}
