<?php

/* ucp_agreement.html */
class __TwigTemplate_53ddfed0d7c4f9aaf25acb6ca88db49d5655b32cf767f4f98952eab8a05e0278 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "ucp_agreement.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        if ((($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null))) {
            // line 3
            echo "<div class=\"side-segment\"><h3>";
            echo ($context["SITENAME"] ?? null);
            echo "&nbsp;&#45;&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTRATION");
            echo "</h3></div>
 ";
            // line 4
            if (($context["S_LANG_OPTIONS"] ?? null)) {
                // line 5
                echo "<script>
/* Change language */
\tfunction change_language(lang_iso)
\t{
\t\tdocument.cookie = '";
                // line 9
                echo ($context["COOKIE_NAME"] ?? null);
                echo "_lang=' + lang_iso + '; path=";
                echo ($context["COOKIE_PATH"] ?? null);
                echo "';
\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\tdocument.forms['register'].submit();
\t}
</script>
    <div class=\"language-selection\">
\t <form method=\"post\" action=\"";
                // line 15
                echo ($context["S_UCP_ACTION"] ?? null);
                echo "\" id=\"register\">
\t\t\t<label class=\"sr-only\" for=\"lang\">";
                // line 16
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LANGUAGE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label>
\t\t\t <select class=\"selectpicker\" data-style=\"btn-default btn-sm\" data-container=\"body\" name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" title=\"";
                // line 17
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LANGUAGE");
                echo "\">";
                echo ($context["S_LANG_OPTIONS"] ?? null);
                echo "</select>
\t\t\t";
                // line 18
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t </form>
\t</div>
";
            }
            // line 22
            echo "
 <form method=\"post\" action=\"";
            // line 23
            echo ($context["S_UCP_ACTION"] ?? null);
            echo "\" id=\"agreement\">
\t<div class=\"well\">
\t\t<p>";
            // line 25
            if (($context["S_SHOW_COPPA"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPPA_BIRTHDAY");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TERMS_OF_USE");
            }
            echo "</p>
\t</div>
\t\t<fieldset>
\t\t";
            // line 28
            // line 29
            echo "\t\t\t";
            if (($context["S_SHOW_COPPA"] ?? null)) {
                // line 30
                echo "\t\t\t<a href=\"";
                echo ($context["U_COPPA_NO"] ?? null);
                echo "\" class=\"btn btn-default\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPPA_NO");
                echo "</a>
\t\t\t<a href=\"";
                // line 31
                echo ($context["U_COPPA_YES"] ?? null);
                echo "\" class=\"btn btn-default\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPPA_YES");
                echo "</a>
\t\t\t";
            } else {
                // line 33
                echo "             <button type=\"submit\" class=\"btn btn-block btn-success btn-lg\" name=\"agreed\" id=\"agreed\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AGREE");
                echo "\" autocomplete=\"off\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING");
                echo "<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\"><i class=\"fa fa-check\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AGREE");
                echo "</button>
\t\t\t <button type=\"submit\" class=\"btn btn-block btn-danger btn-lg\" name=\"not_agreed\" value=\"";
                // line 34
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOT_AGREE");
                echo "\" autocomplete=\"off\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CANCELLING");
                echo "<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\"><i class=\"fa fa-times\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOT_AGREE");
                echo "</button>
\t\t\t";
            }
            // line 36
            echo "\t\t";
            // line 37
            echo "\t\t\t";
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t";
            // line 38
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t</fieldset>
\t<div class=\"space10\"></div>
 </form>
";
        } elseif (        // line 42
($context["S_AGREEMENT"] ?? null)) {
            // line 43
            echo "\t <div class=\"side-segment\"><h3>";
            echo ($context["SITENAME"] ?? null);
            echo "&nbsp;&#45;&nbsp;";
            echo ($context["AGREEMENT_TITLE"] ?? null);
            echo "</h3></div>
\t<div class=\"well\">
\t\t<p>";
            // line 45
            echo ($context["AGREEMENT_TEXT"] ?? null);
            echo "</p>
\t\t<hr class=\"dashed\" />
\t\t<p><a href=\"";
            // line 47
            echo ($context["U_BACK"] ?? null);
            echo "\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a></p>
\t</div>
";
        }
        // line 50
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_agreement.html", 50)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_agreement.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 50,  164 => 47,  159 => 45,  151 => 43,  149 => 42,  142 => 38,  137 => 37,  135 => 36,  126 => 34,  117 => 33,  110 => 31,  103 => 30,  100 => 29,  99 => 28,  89 => 25,  84 => 23,  81 => 22,  74 => 18,  68 => 17,  63 => 16,  59 => 15,  48 => 9,  42 => 5,  40 => 4,  33 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_agreement.html", "");
    }
}
