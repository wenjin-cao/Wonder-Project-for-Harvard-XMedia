<?php

/* @sitesplat_flatbootsminicms/event/overall_header_stylesheets_after.html */
class __TwigTemplate_8a2474d02fe2bf884a67ca14cdb63efd4d6096b95a7fcd12bb978c3c8cd8a399 extends Twig_Template
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
        $asset_file = "@sitesplat_flatbootsminicms/minicms.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('5');
        }
        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);        // line 2
        echo "
";
        // line 3
        if (($context["BACKGROUND_IMAGE_EXIST"] ?? null)) {
            // line 4
            echo "\t<style>
\t\tbody {
\t\t\tbackground: url(\"";
            // line 6
            echo ($context["T_IMAGES_PATH"] ?? null);
            echo "../ext/sitesplat/flatbootsminicms/images/bg/";
            echo ($context["BACKGROUND_FILENAME"] ?? null);
            echo "\") repeat scroll 0 0 #999999;
\t\t}
\t</style>
";
        }
        // line 10
        echo "

\t";
        // line 12
        if ((($context["MINI_PROFILE_POSITION"] ?? null) != "left")) {
            // line 13
            echo "\t\t<style>
\t\t\t# ";
            // line 14
            echo ($context["MINI_PROFILE_POSITION"] ?? null);
            echo "
\t\t\t.forum-answer .side-segment {margin-right: 80px;margin-left: 0;}
\t\t\t.avatar-over.pull-right {margin-left: 10px; margin-right: -15px;}
\t\t\t.prof-right {margin-right: 0;}
\t\t</style>
\t";
        }
        // line 20
        echo "
\t";
        // line 21
        if (((($context["MINI_PROFILE_POSITION"] ?? null) == "right") || ((($context["MINI_PROFILE_POSITION"] ?? null) == "alternate") && ($this->getAttribute(($context["postrow"] ?? null), "S_ROW_COUNT", array()) % 2 == 0)))) {
            // line 22
            echo "\t<style>
\t\t\t# ";
            // line 23
            echo ($context["MINI_PROFILE_POSITION"] ?? null);
            echo "
\t\t\t.avatar-over {
\t\t\t\twidth: 70px;
\t\t\t\tmargin-left: 10px;
\t\t\t}
\t\t</style>
\t";
        }
        // line 30
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "@sitesplat_flatbootsminicms/event/overall_header_stylesheets_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 30,  74 => 23,  71 => 22,  69 => 21,  66 => 20,  57 => 14,  54 => 13,  52 => 12,  48 => 10,  39 => 6,  35 => 4,  33 => 3,  30 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@sitesplat_flatbootsminicms/event/overall_header_stylesheets_after.html", "");
    }
}
