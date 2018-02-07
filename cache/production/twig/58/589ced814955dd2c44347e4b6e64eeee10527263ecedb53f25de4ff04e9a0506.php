<?php

/* simple_footer.html */
class __TwigTemplate_bbc16254ff00637ebd7d573910a97ce4ac488110fb0e09fda430685764b0d561 extends Twig_Template
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
        echo "
   <div class=\"clearfix\">
\t\t<p class=\"debug-output\"><small>
\t\t";
        // line 4
        if (($context["TRANSLATION_INFO"] ?? null)) {
            echo ($context["TRANSLATION_INFO"] ?? null);
        }
        // line 5
        echo "\t\t";
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            echo ($context["DEBUG_OUTPUT"] ?? null);
        }
        // line 6
        echo "\t\t<!-- ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_VERSION");
        echo " -->
\t\t</small></p>
\t</div>

<!-- injected via core and ajax JS for the return confirmation actions -->
    <div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 11
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\">&nbsp;</div>
\t</div>
\t<div id=\"loading_indicator\"></div>

\t<div id=\"phpbb_alert\" class=\"alert alert-default phpbb_alert\" data-l-err=\"";
        // line 16
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"close alert_close\"><span class=\"awe-remove-circle\"></span></a>
\t\t<h3 class=\"alert_title\">&nbsp;</h3>
\t\t <p class=\"alert_text\"></p>
\t</div>
\t
\t<div id=\"phpbb_confirm\" class=\"alert alert-default phpbb_alert\">
\t\t<a href=\"#\" class=\"close alert_close\"><span class=\"awe-remove-circle\"></span></a>
\t\t<div class=\"alert_text\"></div>
\t</div>
<!-- injected via core and ajax JS for the return confirmation actions -->


<!-- injected via a module or an include -->
<script>
// some function that depends on bootstrap and jquery
head.ready(function () {
\t\$('.footable').footable();\$(\".selectpicker\").selectpicker();\$(\".selectpicker\").tooltip(\"disable\");var totop=\$(\"#totop\");totop.click(function(){\$(\"html, body\").stop(true,true).animate({scrollTop:0},500);return false});\$(window).scroll(function(){if(\$(this).scrollTop()>600){totop.fadeIn()}else{totop.fadeOut()}});\$(\"button[data-loading-text]\").click(function(){var e=\$(this);e.button(\"loading\");setTimeout(function(){e.button(\"reset\")},3e3)});jQuery(function(e){e(\"a\").tooltip({html:true,container:\"body\"})});
\t\$(\"input\").iCheck({checkboxClass:\"icheckbox_flat-aero\",radioClass:\"iradio_flat-aero\"});
});
</script>

";
        // line 38
        echo $this->getAttribute(($context["definition"] ?? null), "SCRIPTS", array());
        echo "

";
        // line 40
        // line 41
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "simple_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 41,  90 => 40,  85 => 38,  58 => 16,  42 => 11,  33 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "simple_footer.html", "");
    }
}
