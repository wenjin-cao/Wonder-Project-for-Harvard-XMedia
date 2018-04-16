<?php

/* posting_layout.html */
class __TwigTemplate_4a2fd285d5366025f26214b9e47cac660250e1770024367e694dd6c1fe2e024d extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "posting_layout.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if (($context["TOPIC_TITLE"] ?? null)) {
            // line 4
            echo "\t<h2>";
            echo "<a href=\"";
            echo ($context["U_VIEW_TOPIC"] ?? null);
            echo "\">";
            echo ($context["TOPIC_TITLE"] ?? null);
            echo "</a>";
            echo "</h2>
";
        } else {
            // line 6
            echo "\t<h2><a href=\"";
            echo ($context["U_VIEW_FORUM"] ?? null);
            echo "\">";
            echo ($context["FORUM_NAME"] ?? null);
            echo "</a></h2>
 ";
        }
        // line 8
        echo "
";
        // line 9
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 10
            echo "\t\t<div class=\"alert alert-info fade in\">
\t\t  <button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t";
            // line 12
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</a>";
            } else {
                echo "<strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong>&nbsp;";
                echo ($context["FORUM_RULES"] ?? null);
            }
            // line 13
            echo "\t\t</div>
";
        }
        // line 15
        echo "
<form id=\"postform\" method=\"post\" action=\"";
        // line 16
        echo ($context["S_POST_ACTION"] ?? null);
        echo "\"";
        echo ($context["S_FORM_ENCTYPE"] ?? null);
        echo ">

";
        // line 18
        if (($context["S_DRAFT_LOADED"] ?? null)) {
            // line 19
            echo "\t<div class=\"well\">
\t\t<h3>";
            // line 20
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
            echo "</h3>
\t\t<p>";
            // line 21
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DRAFT_LOADED");
            echo "</p>
\t</div>
";
        }
        // line 24
        echo "
";
        // line 25
        if (($context["S_SHOW_DRAFTS"] ?? null)) {
            $location = "drafts.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("drafts.html", "posting_layout.html", 25)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 26
        echo "
";
        // line 27
        if (($context["S_POST_REVIEW"] ?? null)) {
            $location = "posting_review.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_review.html", "posting_layout.html", 27)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 28
        echo "
";
        // line 29
        if (($context["S_UNGLOBALISE"] ?? null)) {
            // line 30
            echo " <div class=\"clearfix\">
  <div class=\"well\">
  <div class=\"side-segment\"><h3>";
            // line 32
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_DESTINATION_FORUM");
            echo "</h3></div>
   <fieldset>
\t<div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 34
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNGLOBALISE_EXPLAIN");
            echo "</div>
   <label class=\"control-label\" for=\"to_forum_id\">";
            // line 35
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MOVE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
       <div class=\"input-group col-md-4 col-sm-5\">
\t   <select data-container=\"body\" data-width=\"100px\" class=\"selectpicker input-group-btn\" id=\"to_forum_id\" name=\"to_forum_id\">";
            // line 37
            echo ($context["S_FORUM_SELECT"] ?? null);
            echo "</select>
\t\t<span class=\"input-group-btn\">
\t\t<button class=\"btn btn-default\" type=\"submit\" name=\"post\" value=\"";
            // line 39
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM");
            echo "</button>
\t\t<button class=\"btn btn-default\" type=\"submit\" name=\"cancel_unglobalise\" value=\"";
            // line 40
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CANCEL");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CANCEL");
            echo "</button>
\t    </span>
\t   </div>
   </fieldset>
  </div>
 </div>
";
        }
        // line 47
        echo "
";
        // line 48
        if (($context["S_DISPLAY_PREVIEW"] ?? null)) {
            $location = "posting_preview.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_preview.html", "posting_layout.html", 48)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 49
        echo "
<div class=\"clearfix\" id=\"postingbox\">
 <div class=\"well\">
\t <div class=\"side-segment\">
\t\t<h3>";
        // line 53
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_A");
        echo "</h3>
\t </div>
\t
\t";
        // line 56
        $value = 1;
        $context['definition']->set('EXTRA_POSTING_OPTIONS', $value);
        // line 57
        echo "\t";
        $location = "posting_editor.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_editor.html", "posting_layout.html", 57)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 58
        echo "\t </div><!-- panel-body tab-pane posting_editor.html 139 -->
\t";
        // line 59
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t
      ";
        // line 61
        if (($context["S_SHOW_ATTACH_BOX"] ?? null)) {
            $location = "posting_attach_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_attach_body.html", "posting_layout.html", 61)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 62
        echo "\t  ";
        // line 63
        echo "      ";
        if ((($context["S_SHOW_POLL_BOX"] ?? null) || ($context["S_POLL_DELETE"] ?? null))) {
            $location = "posting_poll_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_poll_body.html", "posting_layout.html", 63)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 64
        echo "\t  ";
        // line 65
        echo "

    </div><!-- tab-content panel-content posting_editor.html 137 -->
   </div><!-- panel has-nav-tabs panel-default posting_editor.html 128 -->


 </div><!-- this is the div well at line 51 above -->
</div><!-- this is the div clearfix at line 50 above -->
</form>

    ";
        // line 75
        if (($context["S_DISPLAY_REVIEW"] ?? null)) {
            // line 76
            echo "    <div class=\"panel panel-default\">
\t  <div class=\"panel-body\">
      ";
            // line 78
            $location = "posting_topic_review.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_topic_review.html", "posting_layout.html", 78)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 79
            echo "\t </div>
\t</div>
\t";
        }
        // line 82
        echo "
<div class=\"space10\"></div>

";
        // line 85
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "posting_layout.html", 85)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "posting_layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 85,  308 => 82,  303 => 79,  291 => 78,  287 => 76,  285 => 75,  273 => 65,  271 => 64,  256 => 63,  254 => 62,  240 => 61,  235 => 59,  232 => 58,  219 => 57,  216 => 56,  210 => 53,  204 => 49,  190 => 48,  187 => 47,  175 => 40,  169 => 39,  164 => 37,  158 => 35,  154 => 34,  149 => 32,  145 => 30,  143 => 29,  140 => 28,  126 => 27,  123 => 26,  109 => 25,  106 => 24,  100 => 21,  96 => 20,  93 => 19,  91 => 18,  84 => 16,  81 => 15,  77 => 13,  63 => 12,  59 => 10,  57 => 9,  54 => 8,  46 => 6,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "posting_layout.html", "");
    }
}
