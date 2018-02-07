<?php

/* @phpbbmodders_adduser/event/acp_overall_footer_after.html */
class __TwigTemplate_a7cff7cb87a96ece415e06d99700036447ba4bded42520a3d24a097d112bb39c extends Twig_Template
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
        if (($context["S_USER_ADD"] ?? null)) {
            // line 2
            echo "<script type=\"text/javascript\">
(function(\$) {  // Avoid conflicts with other libraries
\t'use strict';
\t\$(function() {
\t\tvar selected_option = \$('#group').val();
\t\tif(selected_option == false) {
\t\t\t\$('.default_group').fadeOut('fast');
\t\t}
\t\t\$('#group').change(function() {
\t\t\tvar group = \$(this).val();
\t\t\tif(group == false) {
\t\t\t\t\$('.default_group').fadeOut('fast', function() {
\t\t\t\t\t\$('#group_default').prop('checked',false);
\t\t\t\t});
\t\t\t}
\t\t\telse {
\t\t\t\t\$('.default_group').fadeIn('fast');
\t\t\t}
\t\t});
\t});
})(jQuery);
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbbmodders_adduser/event/acp_overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@phpbbmodders_adduser/event/acp_overall_footer_after.html", "");
    }
}
