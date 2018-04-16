<?php

/* display_options_viewtopic.html */
class __TwigTemplate_5d1bc7e18a14313be9918c727b1c84de5f825c8151307f85e7df5d1dbd1bb2d5 extends Twig_Template
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
        echo "<fieldset class=\"controls-row\">
        <div class=\"sorting collapse\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t <div class=\"row\">
\t\t\t\t\t<form class=\"form-horizontal\" method=\"post\" action=\"";
        // line 6
        echo ($context["S_TOPIC_ACTION"] ?? null);
        echo "\">
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3\"> 
                         <label for=\"st\">";
        // line 8
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
                            <div class=\"control-row\">
                              ";
        // line 10
        echo ($context["S_SELECT_SORT_DAYS"] ?? null);
        echo "
                            </div>
\t\t\t\t\t\t</div>
\t                    <div class=\"col-md-3 col-sm-3\"> 
                          <label for=\"sk\">";
        // line 14
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
                            <div class=\"control-row\">
                              ";
        // line 16
        echo ($context["S_SELECT_SORT_KEY"] ?? null);
        echo "
                            </div>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3\">  
                           <label for=\"sd\">";
        // line 20
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
                            <div class=\"control-row\">
\t\t\t\t\t\t\t<div class=\"input-group\">
                             ";
        // line 23
        echo ($context["S_SELECT_SORT_DIR"] ?? null);
        echo "
\t\t\t\t\t\t\t <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" name=\"sort\" type=\"submit\">";
        // line 25
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
        echo "</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    </div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"col-md-3 col-sm-3\"> 
                      <label accesskey=\"j\">";
        // line 32
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
                       <div class=\"control-row\">
                         ";
        // line 34
        $location = "jumpbox_options.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox_options.html", "display_options_viewtopic.html", 34)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 35
        echo "                       </div>
\t\t\t\t\t</div>
                   </div>
                </div>
\t\t\t</div>
\t\t</div> 
</fieldset> ";
    }

    public function getTemplateName()
    {
        return "display_options_viewtopic.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 35,  85 => 34,  79 => 32,  69 => 25,  64 => 23,  57 => 20,  50 => 16,  44 => 14,  37 => 10,  31 => 8,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display_options_viewtopic.html", "");
    }
}
