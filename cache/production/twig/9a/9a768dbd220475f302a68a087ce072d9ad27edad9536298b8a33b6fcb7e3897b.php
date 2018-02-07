<?php

/* simple_header_ACP.html */
class __TwigTemplate_add703c3ff783bd40302fc63624763087cc4e781f0b960cc9a083eb304a81a73 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"designer\" content=\"SiteSplat http://themeforest.net/user/themesplat/portfolio?ref=ThemeSplat\">
";
        // line 7
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 8
        echo ($context["SITENAME"] ?? null);
        echo "&nbsp;&bull;&nbsp;";
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo "&nbsp;&bull;&nbsp;";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP");
            echo "&nbsp;&bull;&nbsp;";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        echo "</title>

<!-- Google free font here -->
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Asap:700' rel='stylesheet' type='text/css'>

<!-- CSS files start here-->
<link href=\"";
        // line 15
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
";
        // line 16
        // line 17
        echo $this->getAttribute(($context["definition"] ?? null), "STYLESHEETS", array());
        echo "
";
        // line 18
        // line 19
        echo "<link href=\"";
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/custom.css\" rel=\"stylesheet\">
<!-- CSS files -->

<!-- Scripts start here after the jquery.js -->
<script src=\"//cdnjs.cloudflare.com/ajax/libs/headjs/1.0.3/head.min.js\"></script>
<script>
// this loads jquery asyncrounously & in parallel
head.load(\"//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js\", \"//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js\", \"";
        // line 26
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/forum_fn.min.js\");
</script>

";
        // line 29
        $value = 1;
        $context['definition']->set('POPUP', $value);
        // line 30
        echo "
";
        // line 31
        // line 32
        echo "
";
        // line 33
        echo $this->getAttribute(($context["definition"] ?? null), "STYLESHEETS", array());
        echo "

";
        // line 35
        // line 36
        echo "
</head>

<body id=\"phpbb\" class=\"section-";
        // line 39
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        echo "\">

";
        // line 41
        // line 42
        echo "
<div class=\"dormient\">
<div class=\"container\">
  <!-- start content -->
  <div id=\"content-forum\">
   
   <div id=\"page-body\">
\t <main role=\"main\">";
    }

    public function getTemplateName()
    {
        return "simple_header_ACP.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 42,  112 => 41,  103 => 39,  98 => 36,  97 => 35,  92 => 33,  89 => 32,  88 => 31,  85 => 30,  82 => 29,  76 => 26,  65 => 19,  64 => 18,  60 => 17,  59 => 16,  55 => 15,  36 => 8,  32 => 7,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "simple_header_ACP.html", "");
    }
}
