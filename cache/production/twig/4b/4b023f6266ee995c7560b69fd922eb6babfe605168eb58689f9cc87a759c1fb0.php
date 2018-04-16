<?php

/* posting_attach_body.html */
class __TwigTemplate_f2d57efc29f4703934d0f1f7d05bc072184e67ae739761d28413ef51242b6bf6 extends Twig_Template
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
        echo "<div class=\"panel-body tab-pane ";
        if (($context["S_SHOW_DRAFTS"] ?? null)) {
            echo "active";
        }
        echo "\" id=\"posting-attach-body-html\">
\t<p>";
        // line 2
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_ATTACHMENT_EXPLAIN");
        echo "<span class=\"hidden\" id=\"drag-n-drop-message\">&nbsp;";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_DRAG_TEXTAREA");
        echo "</span></p>\t
<div class=\"clearfix\" id=\"attach-panel\">
    <fieldset id=\"attach-panel-basic\">
\t<label for=\"fileupload\">";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILENAME");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t <input type=\"file\" name=\"fileupload\" id=\"fileupload\" class=\"inputbox form-control\" /> 
\t <input type=\"submit\" name=\"add_file\" value=\"";
        // line 7
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_FILE");
        echo "\" class=\"btn btn-default\" onclick=\"upload = true;\" />
\t 
\t<label for=\"filecomment\">";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILE_COMMENT");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t <textarea name=\"filecomment\" id=\"filecomment\" rows=\"1\" cols=\"40\" class=\"inputbox form-control\">";
        // line 10
        echo ($context["FILE_COMMENT"] ?? null);
        echo "</textarea>
\t</fieldset>

\t<div id=\"attach-panel-multi\">
\t <button type=\"button\" class=\"btn btn-default\" value=\"";
        // line 14
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_ADD_FILES");
        echo "\" id=\"add_files\"><i class=\"fa fa-cloud-upload\"></i>&nbsp;";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_ADD_FILES");
        echo "</button>
\t";
        // line 15
        // line 16
        echo "\t</div>

\t<div id=\"file-list-container\" class=\"";
        // line 18
        if ( !twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "attach_row", array()))) {
            echo " hidden";
        }
        echo "\">
\t <div id=\"file-list\">
\t\t<div class=\"attach-row panel panel-default panel-body\" id=\"attach-row-tpl\">
\t\t   <button type=\"button\" value=\"";
        // line 21
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_FILE");
        echo "\" class=\"close file-delete\"><i class=\"awe-remove-circle\"></i></button>\t
\t\t\t<div class=\"attach-name\">  
\t\t\t\t<span class=\"pull-left file-name text-overflow\"></span>
\t\t\t\t <span class=\"file-size\"></span>
\t\t\t\t  <span class=\"file-status\"></span>
\t\t\t\t   <button type=\"button\" value=\"";
        // line 26
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PLACE_INLINE");
        echo "\" class=\"btn-link hidden file-inline-bbcode\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PLACE_INLINE");
        echo "</button>
\t\t\t\t<div class=\"attach-comment\">
\t\t\t\t <textarea rows=\"1\" maxlength=\"45\" class=\"inputbox form-control form-plupload\" placeholder=\"";
        // line 28
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_DESCRIPTION");
        echo "\"></textarea>
\t\t\t\t</div>
\t\t    </div>
\t\t\t<span class=\"file-progress progress\">
\t\t\t <span class=\"file-progress-bar progress-bar progress-bar-info progress-bar-striped\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\"></span>
\t\t\t</span>\t\t\t\t
\t\t</div>
\t\t
\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "attach_row", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attach_row"]) {
            // line 37
            echo "\t\t<div class=\"attach-row panel panel-default panel-body\" data-attach-id=\"";
            echo $this->getAttribute($context["attach_row"], "ATTACH_ID", array());
            echo "\">
\t\t   <button type=\"button\" value=\"";
            // line 38
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_FILE");
            echo "\" class=\"close file-delete\"><i class=\"awe-remove-circle\"></i></button>\t
\t\t\t<div class=\"attach-name\">  
\t\t\t\t<span class=\"pull-left file-name text-overflow\"><a href=\"";
            // line 40
            echo $this->getAttribute($context["attach_row"], "U_VIEW_ATTACHMENT", array());
            echo "\">";
            echo $this->getAttribute($context["attach_row"], "FILENAME", array());
            echo "</a></span>
\t\t\t\t <span class=\"file-size\">";
            // line 41
            echo $this->getAttribute($context["attach_row"], "FILESIZE", array());
            echo "</span>
\t\t\t\t  <span class=\"file-status file-uploaded\"></span>
\t\t\t\t  ";
            // line 43
            if (($context["S_INLINE_ATTACHMENT_OPTIONS"] ?? null)) {
                // line 44
                echo "\t\t\t\t   <button type=\"button\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PLACE_INLINE");
                echo "\" class=\"btn-link file-inline-bbcode\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_PLACE_INLINE");
                echo "</button>
\t\t\t\t  ";
            }
            // line 46
            echo "\t\t\t\t<div class=\"attach-comment\">
\t\t\t\t <textarea name=\"comment_list[";
            // line 47
            echo $this->getAttribute($context["attach_row"], "ASSOC_INDEX", array());
            echo "]\" rows=\"1\" class=\"inputbox form-control form-plupload\" placeholder=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_DESCRIPTION");
            echo "\">";
            echo $this->getAttribute($context["attach_row"], "FILE_COMMENT", array());
            echo "</textarea>
\t\t\t     ";
            // line 48
            echo $this->getAttribute($context["attach_row"], "S_HIDDEN", array());
            echo "
\t\t\t\t</div>
\t\t    </div>\t\t\t
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t </div>
\t</div>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "posting_attach_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 53,  148 => 48,  140 => 47,  137 => 46,  129 => 44,  127 => 43,  122 => 41,  116 => 40,  111 => 38,  106 => 37,  102 => 36,  91 => 28,  84 => 26,  76 => 21,  68 => 18,  64 => 16,  63 => 15,  57 => 14,  50 => 10,  45 => 9,  40 => 7,  34 => 5,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "posting_attach_body.html", "");
    }
}
