<?php

/* search_body.html */
class __TwigTemplate_bfb50ef87e51015ed805776296f8b33dcbf5dd8ec1ebe260660dccfca3f5a4fb extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "search_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "  <div class=\"side-segment\"><h3>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
        echo "</h3></div>
  
  ";
        // line 4
        // line 5
        echo "
<form role=\"form\" method=\"get\" action=\"";
        // line 6
        echo ($context["S_SEARCH_ACTION"] ?? null);
        echo "\" data-focus=\"keywords\">
 <div class=\"well\">
\t<h3>";
        // line 8
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_QUERY");
        echo "</h3>
\t";
        // line 9
        // line 10
        echo "  <fieldset>
    ";
        // line 11
        // line 12
        echo "\t<div class=\"form-group\">
\t\t <label class=\"control-label\" for=\"keywords\">";
        // line 13
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_KEYWORDS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_KEYWORDS_EXPLAIN");
        echo "</span>
          <div class=\"input-group\">
\t        <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
\t\t    <input class=\"form-control input-sm\" type=\"text\" placeholder=\"";
        // line 16
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_USR_PLACEHOLDER");
        echo "\" name=\"keywords\" id=\"keywords\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_KEYWORDS");
        echo "\"/>
\t\t  </div> 
\t</div>
\t<div class=\"form-group\">
\t  <input type=\"radio\" checked=\"checked\" name=\"terms\" id=\"terms1\" value=\"all\"><label class=\"checkbox-inline\" for=\"terms1\">";
        // line 20
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ALL_TERMS");
        echo "</label>
\t  <input type=\"radio\" name=\"terms\" id=\"terms2\" value=\"any\"><label class=\"checkbox-inline\" for=\"terms2\">";
        // line 21
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ANY_TERMS");
        echo "</label>
\t <div class=\"control-group\"></div>
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"author\">";
        // line 26
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_AUTHOR");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_AUTHOR_EXPLAIN");
        echo "</span>
         <div class=\"input-group\">
\t       <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
\t\t   <input class=\"form-control input-sm\" type=\"text\" placeholder=\"";
        // line 29
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_USR_PLACEHOLDER");
        echo "\" name=\"author\" id=\"author\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_AUTHOR");
        echo "\"/>
\t\t</div> 
\t</div>
\t";
        // line 32
        // line 33
        echo "  </fieldset>
    ";
        // line 34
        // line 35
        echo " </div>


<div class=\"well\">
\t<h3>";
        // line 39
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_OPTIONS");
        echo "</h3>
    ";
        // line 40
        // line 41
        echo "\t<fieldset>
\t";
        // line 42
        // line 43
        echo "\t<div class=\"form-group\">
\t   <label class=\"control-label\" for=\"search_forum\">";
        // line 44
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_FORUMS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_FORUMS_EXPLAIN");
        echo "</span>
       <select class=\"selectpicker\" data-container=\"body\" data-selected-text-format=\"count\" name=\"fid[]\" id=\"search_forum\" multiple=\"multiple\" size=\"8\" title=\"";
        // line 45
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_FORUMS");
        echo "\">";
        echo ($context["S_FORUM_OPTIONS"] ?? null);
        echo "</select>
     <div class=\"control-group\"></div>
\t</div>
\t
\t<div class=\"form-group\">
\t <label class=\"control-label\" for=\"search_child1\">";
        // line 50
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_SUBFORUMS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
      <input type=\"radio\" checked=\"checked\" name=\"sc\" id=\"search_child1\" value=\"1\"><label class=\"radio-inline\" for=\"search_child1\">";
        // line 51
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t  <input type=\"radio\" name=\"sc\" id=\"search_child2\" value=\"0\"><label class=\"radio-inline\" for=\"search_child2\">";
        // line 52
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t<div class=\"control-group\"></div>
\t</div>
\t
\t<div class=\"form-group\">
\t   <label class=\"control-label\" for=\"sf1\">";
        // line 57
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_WITHIN");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
     <input type=\"radio\" checked=\"checked\" name=\"sf\" id=\"sf1\" value=\"all\"><label class=\"radio-inline\" for=\"sf1\">";
        // line 58
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_TITLE_MSG");
        echo "</label>
\t <input type=\"radio\" name=\"sf\" id=\"sf2\" value=\"msgonly\"><label class=\"radio-inline\" for=\"sf2\">";
        // line 59
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_MSG_ONLY");
        echo "</label>
\t <input type=\"radio\" name=\"sf\" id=\"sf3\" value=\"titleonly\"><label class=\"radio-inline\" for=\"sf3\">";
        // line 60
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_TITLE_ONLY");
        echo "</label>
\t <input type=\"radio\" name=\"sf\" id=\"sf4\" value=\"firstpost\"><label class=\"radio-inline\" for=\"sf4\">";
        // line 61
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_FIRST_POST");
        echo "</label>
\t<div class=\"control-group\"></div>
\t</div>
\t
\t<div class=\"form-group\"> 
\t   <label class=\"control-label\" for=\"show_results1\">";
        // line 66
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_RESULTS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
    <input type=\"radio\" checked=\"checked\" name=\"sr\" id=\"show_results1\" value=\"posts\"><label class=\"radio-inline\" for=\"show_results1\">";
        // line 67
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
        echo "</label>
\t<input type=\"radio\" name=\"sr\" id=\"show_results2\" value=\"topics\"><label class=\"radio-inline\" for=\"show_results2\">";
        // line 68
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
        echo "</label>
\t<div class=\"control-group\"></div>
\t</div>
\t
\t<div class=\"form-group\">
\t   <label class=\"control-label\" for=\"sort_result2\">";
        // line 73
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESULT_SORT");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t<div>";
        // line 74
        echo ($context["S_SELECT_SORT_KEY"] ?? null);
        echo "</div> 
\t <div class=\"space10\"></div>
\t<input type=\"radio\" name=\"sd\" id=\"sa\" value=\"a\"> <label class=\"radio-inline\" for=\"sa\">";
        // line 76
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_ASCENDING");
        echo "</label>
\t<input type=\"radio\" name=\"sd\" id=\"sd\" value=\"d\" checked=\"checked\"> <label class=\"radio-inline\" for=\"sd\">";
        // line 77
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_DESCENDING");
        echo "</label>
\t<div class=\"control-group\"></div>
\t</div>
\t
\t<div class=\"form-group\">
\t   <label class=\"control-label\" for=\"\">";
        // line 82
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESULT_DAYS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t<div>";
        // line 83
        echo ($context["S_SELECT_SORT_DAYS"] ?? null);
        echo "</div>
\t<div class=\"control-group\"></div>
\t</div>
   
   
   <div class=\"form-group\">
   <div class=\"row\">
   <div class=\"col-md-3 col-sm-5 col-xs-6\">
   <label class=\"control-label\" for=\"\">";
        // line 91
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_FIRST");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
  <div class=\"input-group\">
     <select class=\"selectpicker input-group-btn\" data-container=\"body\" data-width=\"120px\" name=\"ch\" title=\"";
        // line 93
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_FIRST");
        echo "\">";
        echo ($context["S_CHARACTER_OPTIONS"] ?? null);
        echo "</select>
     <span class=\"input-group-addon\">";
        // line 94
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_CHARACTERS");
        echo "</span>
   </div>
   </div>
   </div>
   </div>
   
   ";
        // line 100
        // line 101
        echo "   
  </fieldset>

</div>

\t<fieldset class=\"form-actions\">
\t\t";
        // line 107
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "
\t\t<button type=\"reset\" value=\"";
        // line 108
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-default\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "</button>
\t\t<button type=\"submit\" name=\"submit\" value=\"";
        // line 109
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
        echo "\" class=\"btn btn-default\" autocomplete=\"off\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCHING");
        echo "<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
        echo "</button>
\t</fieldset>
</form>
";
        // line 112
        // line 113
        echo "<div class=\"space10\"></div>
 
";
        // line 115
        echo " 
";
        // line 116
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "recentsearch", array()))) {
            // line 117
            echo "   <div class=\"panel panel-forum\">
\t<div class=\"panel-heading\">
\t <i class=\"fa fa-tags\"></i>&nbsp;";
            // line 119
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_KEYWORDS");
            echo "
\t</div>
\t<div class=\"panel-inner\">
    <table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t<tr>
\t\t<th colspan=\"2\" class=\"name\">";
            // line 125
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RECENT_SEARCHES");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "recentsearch", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["recentsearch"]) {
                // line 130
                echo "\t\t<tr>
\t\t\t<td><a href=\"";
                // line 131
                echo $this->getAttribute($context["recentsearch"], "U_KEYWORDS", array());
                echo "\">";
                echo $this->getAttribute($context["recentsearch"], "KEYWORDS", array());
                echo "</a></td>
\t\t\t<td class=\"active\"><span>&nbsp;";
                // line 132
                echo $this->getAttribute($context["recentsearch"], "TIME", array());
                echo "</span></td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 135
                echo "\t\t<tr>
\t\t\t<td colspan=\"2\">";
                // line 136
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_RECENT_SEARCHES");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recentsearch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "\t</tbody>
\t</table>
\t</div>
\t</div>
";
        }
        // line 144
        // line 145
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_body.html", 145)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 145,  363 => 144,  356 => 139,  347 => 136,  344 => 135,  336 => 132,  330 => 131,  327 => 130,  322 => 129,  315 => 125,  306 => 119,  302 => 117,  300 => 116,  297 => 115,  293 => 113,  292 => 112,  282 => 109,  276 => 108,  272 => 107,  264 => 101,  263 => 100,  254 => 94,  248 => 93,  242 => 91,  231 => 83,  226 => 82,  218 => 77,  214 => 76,  209 => 74,  204 => 73,  196 => 68,  192 => 67,  187 => 66,  179 => 61,  175 => 60,  171 => 59,  167 => 58,  162 => 57,  154 => 52,  150 => 51,  145 => 50,  135 => 45,  128 => 44,  125 => 43,  124 => 42,  121 => 41,  120 => 40,  116 => 39,  110 => 35,  109 => 34,  106 => 33,  105 => 32,  97 => 29,  88 => 26,  80 => 21,  76 => 20,  67 => 16,  58 => 13,  55 => 12,  54 => 11,  51 => 10,  50 => 9,  46 => 8,  41 => 6,  38 => 5,  37 => 4,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "search_body.html", "");
    }
}
