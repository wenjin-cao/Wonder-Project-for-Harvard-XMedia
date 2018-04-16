<?php

/* plupload.html */
class __TwigTemplate_109ac6b41359ee9b57b7c1e7fbe701703850fb8d62fcf91a6d42459bfe20fc26 extends Twig_Template
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
        echo "<script>
// lets load the plupload crap super huge files because... wait for it wait for it. \"swear here\"
head.ready(function () {
//<![CDATA[
phpbb.plupload = {
\ti18n: {
\t\t'b': '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BYTES_SHORT"), "js");
        echo "',
\t\t'kb': '";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("KB"), "js");
        echo "',
\t\t'mb': '";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("MB"), "js");
        echo "',
\t\t'gb': '";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("GB"), "js");
        echo "',
\t\t'tb': '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("TB"), "js");
        echo "',
\t\t'Add Files': '";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_ADD_FILES"), "js");
        echo "',
\t\t'Add files to the upload queue and click the start button.': '";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_ADD_FILES_TO_QUEUE"), "js");
        echo "',
\t\t'Close': '";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_CLOSE"), "js");
        echo "',
\t\t'Drag files here.': '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_DRAG"), "js");
        echo "',
\t\t'Duplicate file error.': '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_DUPLICATE_ERROR"), "js");
        echo "',
\t\t'File: %s': '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_FILE"), "js");
        echo "',
\t\t'File: %s, size: %d, max file size: %d': '";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_FILE_DETAILS"), "js");
        echo "',
\t\t'File count error.': '";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_ERR_FILE_COUNT"), "js");
        echo "',
\t\t'File extension error.': '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_EXTENSION_ERROR"), "js");
        echo "',
\t\t'File size error.': '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_SIZE_ERROR"), "js");
        echo "',
\t\t'File too large:': '";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_ERR_FILE_TOO_LARGE"), "js");
        echo "',
\t\t'Filename': '";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_FILENAME"), "js");
        echo "',
\t\t'Generic error.': '";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_GENERIC_ERROR"), "js");
        echo "',
\t\t'HTTP Error.': '";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_HTTP_ERROR"), "js");
        echo "',
\t\t'Image format either wrong or not supported.': '";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_IMAGE_FORMAT"), "js");
        echo "',
\t\t'Init error.': '";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_INIT_ERROR"), "js");
        echo "',
\t\t'IO error.': '";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_IO_ERROR"), "js");
        echo "',
\t\t'Invalid file extension:': '";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_ERR_FILE_INVALID_EXT"), "js");
        echo "',
\t\t'N/A': '";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_NOT_APPLICABLE"), "js");
        echo "',
\t\t'Runtime ran out of available memory.': '";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_ERR_RUNTIME_MEMORY"), "js");
        echo "',
\t\t'Security error.': '";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_SECURITY_ERROR"), "js");
        echo "',
\t\t'Select files': '";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_SELECT_FILES"), "js");
        echo "',
\t\t'Size': '";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_SIZE"), "js");
        echo "',
\t\t'Start Upload': '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_START_UPLOAD"), "js");
        echo "',
\t\t'Start uploading queue': '";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_START_CURRENT_UPLOAD"), "js");
        echo "',
\t\t'Status': '";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_STATUS"), "js");
        echo "',
\t\t'Stop Upload': '";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_STOP_UPLOAD"), "js");
        echo "',
\t\t'Stop current upload': '";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_STOP_CURRENT_UPLOAD"), "js");
        echo "',
\t\t\"Upload URL might be wrong or doesn't exist.\": '";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_ERR_UPLOAD_URL"), "js");
        echo "',
\t\t'Uploaded %d/%d files': '";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_UPLOADED"), "js");
        echo "',
\t\t'%d files queued': '";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_FILES_QUEUED"), "js");
        echo "',
\t\t'%s already present in the queue.': '";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_ALREADY_QUEUED"), "js");
        echo "'
\t},
\tconfig: {
\t\truntimes: 'html5',
\t\turl: '";
        // line 47
        echo ($context["S_PLUPLOAD_URL"] ?? null);
        echo "',
\t\tmax_file_size: '";
        // line 48
        echo ($context["FILESIZE"] ?? null);
        echo "b',
\t\tchunk_size: '";
        // line 49
        echo ($context["CHUNK_SIZE"] ?? null);
        echo "b',
\t\tunique_names: true,
\t\tfilters: [";
        // line 51
        echo ($context["FILTERS"] ?? null);
        echo "],
\t\t";
        // line 52
        echo ($context["S_RESIZE"] ?? null);
        echo "
\t\theaders: {'X-PHPBB-USING-PLUPLOAD': '1', 'X-Requested-With': 'XMLHttpRequest'},
\t\tfile_data_name: 'fileupload',
\t\tmultipart_params: {'add_file': '";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_FILE"), "js");
        echo "'},
\t\tform_hook:";
        // line 56
        if (($context["S_SNAPPY"] ?? null)) {
            echo " '#qr_postform'";
        } else {
            echo " '#postform'";
        }
        echo ",
\t\tbrowse_button: 'add_files',
\t\tdrop_element : 'message',
\t},
\tlang: {
\t\tERROR: '";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR"), "js");
        echo "',
\t\tTOO_MANY_ATTACHMENTS: '";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("TOO_MANY_ATTACHMENTS"), "js");
        echo "',
\t},
\torder: '";
        // line 64
        echo ($context["ATTACH_ORDER"] ?? null);
        echo "',
\tmaxFiles: ";
        // line 65
        echo ($context["MAX_ATTACHMENTS"] ?? null);
        echo ",
\tdata: ";
        // line 66
        echo ($context["S_ATTACH_DATA"] ?? null);
        echo ",
}
//]]>
head.load(\"";
        // line 69
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/plupload/plupload.full.min.js\", \"";
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/plupload.min.js\");
});
</script>";
    }

    public function getTemplateName()
    {
        return "plupload.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 69,  234 => 66,  230 => 65,  226 => 64,  221 => 62,  217 => 61,  205 => 56,  201 => 55,  195 => 52,  191 => 51,  186 => 49,  182 => 48,  178 => 47,  171 => 43,  167 => 42,  163 => 41,  159 => 40,  155 => 39,  151 => 38,  147 => 37,  143 => 36,  139 => 35,  135 => 34,  131 => 33,  127 => 32,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  107 => 27,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "plupload.html", "");
    }
}
