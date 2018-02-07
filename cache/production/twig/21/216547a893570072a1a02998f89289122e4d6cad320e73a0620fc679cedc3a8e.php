<?php

/* memberlist_search.html */
class __TwigTemplate_4f998b886f096c68fe141fe3625b6d853edc46f5606cf006749bcca34c654cbc extends Twig_Template
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
        echo "<div class=\"side-segment\"><h3>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME");
        echo "</h3></div>
<form method=\"post\" action=\"";
        // line 2
        echo ($context["S_MODE_ACTION"] ?? null);
        echo "\" id=\"search_memberlist\">
<div class=\"clearfix\">
<div class=\"well\">
 <p>";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME_EXPLAIN");
        echo "</p>
";
        // line 6
        // line 7
        echo "\t
<div class=\"row\">
\t<div class=\"col-md-6\">
\t<fieldset>
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"username\">";
        // line 12
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
       <input type=\"text\" class=\"form-control input-sm\"";
        // line 14
        if (($context["U_LIVE_SEARCH"] ?? null)) {
            echo " autocomplete=\"off\" data-filter=\"phpbb.search.filter\" data-ajax=\"member_search\" data-min-length=\"3\" data-url=\"";
            echo ($context["U_LIVE_SEARCH"] ?? null);
            echo "\" data-results=\"#user-search\" data-overlay=\"false\"";
        }
        echo " placeholder=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo "\" name=\"username\" id=\"username\" value=\"";
        echo ($context["USERNAME"] ?? null);
        echo "\">
\t";
        // line 15
        if (($context["U_LIVE_SEARCH"] ?? null)) {
            // line 16
            echo "\t\t<div class=\"dropdown live-search hidden\" id=\"user-search\">
\t\t\t<ul class=\"list-unstyled dropdown-contents search-results\">
\t\t\t\t<li class=\"search-result-tpl\"><span class=\"search-result\"></span></li>
\t\t\t</ul>
\t\t</div>
\t";
        }
        // line 21
        echo "\t\t\t
\t</div> 
\t</div>
\t
\t";
        // line 25
        if (($context["S_EMAIL_SEARCH_ALLOWED"] ?? null)) {
            // line 26
            echo "\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"email\">";
            // line 27
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t<div class=\"controls controls-row\"> 
       <input type=\"text\" class=\"form-control input-sm\" placeholder=\"";
            // line 29
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL");
            echo "\" name=\"email\" id=\"email\" value=\"";
            echo ($context["EMAIL"] ?? null);
            echo "\">
\t</div> 
\t</div>
\t";
        }
        // line 33
        echo "\t
\t";
        // line 34
        if (($context["S_JABBER_ENABLED"] ?? null)) {
            // line 35
            echo "\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"jabber\">";
            // line 36
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JABBER");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t<div class=\"controls controls-row\"> 
       <input type=\"text\" class=\"form-control input-sm\" placeholder=\"\" name=\"jabber\" id=\"jabber\" value=\"";
            // line 38
            echo ($context["JABBER"] ?? null);
            echo "\">
\t</div> 
\t</div>
\t";
        }
        // line 42
        echo "\t
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"joined\">";
        // line 44
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t<div class=\"input-group col-md-12 col-sm-12 col-xs-12\">
\t\t<select class=\"selectpicker\" data-style=\"btn btn-default form-control\" data-width=\"auto\" name=\"joined_select\">";
        // line 46
        echo ($context["S_JOINED_TIME_OPTIONS"] ?? null);
        echo "</select>
\t\t<input type=\"text\" class=\"form-control\" placeholder=\"YYYY-MM-DD, e.g. 2004-02-29\" name=\"joined\" id=\"joined\" value=\"";
        // line 47
        echo ($context["JOINED"] ?? null);
        echo "\">
\t</div>
\t</div>
\t
\t";
        // line 51
        if (($context["S_IP_SEARCH_ALLOWED"] ?? null)) {
            // line 52
            echo "    <div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"ip\">";
            // line 53
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_IP");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t<div class=\"controls controls-row\"> 
       <input type=\"text\" class=\"form-control input-sm\" placeholder=\"216.161.111.33\" name=\"ip\" id=\"ip\" value=\"";
            // line 55
            echo ($context["IP"] ?? null);
            echo "\">
\t</div> 
\t</div>
    ";
        }
        // line 59
        echo "\t
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"search_group_id\">";
        // line 61
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t<div class=\"input-group col-md-12 col-sm-12 col-xs-12\">
      <select class=\"selectpicker\" name=\"search_group_id\" id=\"search_group_id\">";
        // line 63
        echo ($context["S_GROUP_SELECT"] ?? null);
        echo "</select>
\t</div> 
\t</div>
\t
\t</fieldset>
    </div>
\t
\t<div class=\"col-md-6\">
\t<fieldset>
\t
\t";
        // line 73
        if (($context["S_VIEWONLINE"] ?? null)) {
            // line 74
            echo "\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"active\">";
            // line 75
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_ACTIVE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t<div class=\"input-group col-md-12 col-sm-12 col-xs-12\">
\t\t<select class=\"selectpicker\" data-style=\"btn btn-default form-control\" data-width=\"auto\" name=\"active_select\">";
            // line 77
            echo ($context["S_ACTIVE_TIME_OPTIONS"] ?? null);
            echo "</select>
\t\t<input type=\"text\" class=\"form-control input-sm\" placeholder=\"YYYY-MM-DD, e.g. 2004-02-29\" name=\"active\" id=\"active\" value=\"";
            // line 78
            echo ($context["ACTIVE"] ?? null);
            echo "\">
\t</div>
\t</div>
\t";
        }
        // line 82
        echo "
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"count\">";
        // line 84
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t<div class=\"input-group col-md-12 col-sm-12 col-xs-12\">
\t\t<select class=\"selectpicker\" data-style=\"btn btn-default form-control\" data-width=\"auto\" name=\"count_select\">";
        // line 86
        echo ($context["S_COUNT_OPTIONS"] ?? null);
        echo "</select>
\t\t<input type=\"text\" class=\"form-control input-sm\" placeholder=\"e.g. 12\" name=\"count\" id=\"count\" value=\"";
        // line 87
        echo ($context["COUNT"] ?? null);
        echo "\">
\t</div>
\t</div>

\t";
        // line 91
        // line 92
        echo "\t
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"sk\">";
        // line 94
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t<div class=\"input-group col-md-12 col-sm-12 col-xs-12\">
      <select class=\"selectpicker\" data-width=\"auto\" name=\"sk\" id=\"sk\">";
        // line 96
        echo ($context["S_SORT_OPTIONS"] ?? null);
        echo "</select>
\t</div> 
\t</div>
\t
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"sk\">";
        // line 101
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t<div class=\"input-group col-md-12 col-sm-12 col-xs-12\">
      <select class=\"selectpicker\" data-width=\"auto\" name=\"sd\">";
        // line 103
        echo ($context["S_ORDER_SELECT"] ?? null);
        echo "</select>
\t</div> 
\t</div>
\t
\t";
        // line 107
        // line 108
        echo "\t
\t</fieldset>
\t</div>
</div>
\t

</div>
\t<fieldset class=\"form-actions\">
\t\t<button type=\"reset\" value=\"";
        // line 116
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-default\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "</button>
\t\t<button type=\"submit\" name=\"submit\" value=\"";
        // line 117
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
        echo "\" class=\"btn btn-default\" autocomplete=\"off\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCHING");
        echo " <i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
        echo "</button>
\t\t";
        // line 118
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</fieldset>
</div>
</form>
<div class=\"space10\"></div>";
    }

    public function getTemplateName()
    {
        return "memberlist_search.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 118,  271 => 117,  265 => 116,  255 => 108,  254 => 107,  247 => 103,  241 => 101,  233 => 96,  227 => 94,  223 => 92,  222 => 91,  215 => 87,  211 => 86,  205 => 84,  201 => 82,  194 => 78,  190 => 77,  184 => 75,  181 => 74,  179 => 73,  166 => 63,  160 => 61,  156 => 59,  149 => 55,  143 => 53,  140 => 52,  138 => 51,  131 => 47,  127 => 46,  121 => 44,  117 => 42,  110 => 38,  104 => 36,  101 => 35,  99 => 34,  96 => 33,  87 => 29,  81 => 27,  78 => 26,  76 => 25,  70 => 21,  62 => 16,  60 => 15,  48 => 14,  42 => 12,  35 => 7,  34 => 6,  30 => 5,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "memberlist_search.html", "");
    }
}
