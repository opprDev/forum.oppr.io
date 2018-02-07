<?php

/* ucp_notifications.html */
class __TwigTemplate_3df7cdb2d78099bc72c386c84710e940aa06ec0d47813575e015c1a4a4677e8c extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_notifications.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo ($context["S_UCP_ACTION"] ?? null);
        echo "\"";
        echo ($context["S_FORM_ENCTYPE"] ?? null);
        echo ">
<div class=\"tab-pane active\">
\t<fieldset class=\"framed-ucp\">
\t <legend>";
        // line 6
        echo ($context["TITLE"] ?? null);
        echo "</legend>
       <p>";
        // line 7
        echo ($context["TITLE_EXPLAIN"] ?? null);
        echo "</p>

\t\t";
        // line 9
        if ((($context["MODE"] ?? null) == "notification_options")) {
            // line 10
            echo "\t\t ";
            // line 11
            echo "\t    <div class=\"panel panel-forum\">
\t     <div class=\"panel-heading\">
\t\t  ";
            // line 13
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATION_TYPE");
            echo "
\t\t </div>
\t\t <div class=\"panel-inner\">
\t\t\t<table class=\"footable table table-striped table-primary table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "notification_methods", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification_methods"]) {
                // line 21
                echo "\t\t\t\t\t\t<th class=\"mark text-center\">";
                echo $this->getAttribute($context["notification_methods"], "NAME", array());
                echo "</th>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_methods'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "notification_types", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification_types"]) {
                // line 27
                echo "\t\t\t\t\t";
                if ($this->getAttribute($context["notification_types"], "GROUP_NAME", array())) {
                    // line 28
                    echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"notification-table-title\" colspan=\"";
                    // line 29
                    echo ($context["NOTIFICATION_TYPES_COLS"] ?? null);
                    echo "\">";
                    echo $this->getAttribute($context["notification_types"], "GROUP_NAME", array());
                    echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                } else {
                    // line 32
                    echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                    // line 34
                    echo $this->getAttribute($context["notification_types"], "NAME", array());
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 35
                    if ($this->getAttribute($context["notification_types"], "EXPLAIN", array())) {
                        echo "<br />&nbsp;&nbsp;";
                        echo $this->getAttribute($context["notification_types"], "EXPLAIN", array());
                    }
                    // line 36
                    echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                    // line 37
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["notification_types"], "notification_methods", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["notification_methods"]) {
                        // line 38
                        echo "\t\t\t\t\t\t\t\t<td class=\"mark text-center\"><input data-notify=\"method";
                        echo $this->getAttribute($context["notification_methods"], "S_ROW_COUNT", array());
                        echo "\" type=\"checkbox\" name=\"";
                        echo $this->getAttribute($context["notification_types"], "TYPE", array());
                        echo "_";
                        echo $this->getAttribute($context["notification_methods"], "METHOD", array());
                        echo "\"";
                        if ($this->getAttribute($context["notification_methods"], "SUBSCRIBED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " /></td>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_methods'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_types'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"form_time\" value=\"";
            // line 45
            echo ($context["FORM_TIME"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t";
            // line 46
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t\t\t\t\t\t";
            // line 47
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 48
            if ((($context["MODE"] ?? null) == "notification_options")) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_READ");
            }
            echo "\" class=\"btn btn-default\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "notification_methods", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification_methods"]) {
                // line 51
                echo "\t\t\t\t\t\t\t<td class=\"mark text-center btn-noti-td\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" onclick=\"\$('#ucp input[data-notify=method";
                // line 53
                echo $this->getAttribute($context["notification_methods"], "S_ROW_COUNT", array());
                echo "]').iCheck('check')\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
                echo "\"><i class=\"fa fa-check-square-o\"></i></a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" onclick=\"\$('#ucp input[data-notify=method";
                // line 54
                echo $this->getAttribute($context["notification_methods"], "S_ROW_COUNT", array());
                echo "]').iCheck('uncheck')\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
                echo "\"><i class=\"fa fa-square-o\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_methods'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t </div>
\t\t</div>\t
\t\t\t
\t\t";
        } else {
            // line 65
            echo "\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "notification_list", array()))) {
                // line 66
                echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t <ul class=\"pagination pagination-sm pull-left\">
\t\t\t  ";
                // line 69
                if (($context["U_MARK_ALL"] ?? null)) {
                    echo "<li><a href=\"";
                    echo ($context["U_MARK_ALL"] ?? null);
                    echo "\" class=\"mark\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS_MARK_ALL_READ");
                    echo "</a></li>";
                }
                // line 70
                echo "\t\t\t </ul>
\t\t\t</div>

\t\t\t<div class=\"col-md-8\"> 
\t\t\t <ul class=\"pagination pagination-sm pull-right\">
\t\t\t\t <li><a>";
                // line 75
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
                echo "&nbsp;";
                echo ($context["TOTAL_COUNT"] ?? null);
                echo "</a></li>
\t\t\t\t";
                // line 76
                if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                    // line 77
                    echo "\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_notifications.html", 77)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 78
                    echo "\t\t\t\t";
                } else {
                    // line 79
                    echo "\t\t\t\t\t<li class=\"active\"><a>";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "</a></li>\t
\t\t\t\t";
                }
                // line 81
                echo "\t\t\t </ul>
\t\t   </div>
\t\t</div>
\t\t
        
\t\t\t<div class=\"clearfix\">
\t\t\t\t";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "notification_list", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["notification_list"]) {
                    // line 88
                    echo "\t\t\t\t<div class=\"media panel panel-default panel-body notification_list\">\t\t\t\t
\t\t\t\t\t<div class=\"notifications\">
\t\t\t\t\t\t\t<div class=\"media-left\">
\t\t\t\t\t\t\t";
                    // line 91
                    if ($this->getAttribute($context["notification_list"], "AVATAR", array())) {
                        echo $this->getAttribute($context["notification_list"], "AVATAR", array());
                    } else {
                        echo "<img class=\"media-object\" src=\"";
                        echo ($context["T_THEME_PATH"] ?? null);
                        echo "/images/no_avatar.gif\" alt=\"\" />";
                    }
                    // line 92
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"media-body ";
                    // line 93
                    if ($this->getAttribute($context["notification_list"], "UNREAD", array())) {
                        echo " noti-unread";
                    } else {
                    }
                    if ($this->getAttribute($context["notification_list"], "STYLING", array())) {
                        echo " ";
                        echo $this->getAttribute($context["notification_list"], "STYLING", array());
                    }
                    echo "\">\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    // line 94
                    if ($this->getAttribute($context["notification_list"], "URL", array())) {
                        echo "<a href=\"";
                        if ($this->getAttribute($context["notification_list"], "UNREAD", array())) {
                            echo $this->getAttribute($context["notification_list"], "U_MARK_READ", array());
                        } else {
                            echo $this->getAttribute($context["notification_list"], "URL", array());
                        }
                        echo "\">";
                    }
                    // line 95
                    echo "\t\t\t\t\t\t\t\t <p class=\"notifications_title\">";
                    echo $this->getAttribute($context["notification_list"], "FORMATTED_TITLE", array());
                    if ($this->getAttribute($context["notification_list"], "REFERENCE", array())) {
                        echo " ";
                        echo $this->getAttribute($context["notification_list"], "REFERENCE", array());
                    }
                    echo "</p>
\t\t\t\t\t\t\t\t ";
                    // line 96
                    if ($this->getAttribute($context["notification_list"], "URL", array())) {
                        echo "</a>";
                    }
                    echo "\t\t\t\t
\t\t\t\t\t\t\t\t ";
                    // line 97
                    if ($this->getAttribute($context["notification_list"], "FORUM", array())) {
                        echo "<p class=\"notifications_forum\">";
                        echo $this->getAttribute($context["notification_list"], "FORUM", array());
                        echo "</p>";
                    }
                    // line 98
                    echo "\t\t\t\t\t\t\t\t ";
                    if ($this->getAttribute($context["notification_list"], "REASON", array())) {
                        echo "<p class=\"notifications_reason\">";
                        echo $this->getAttribute($context["notification_list"], "REASON", array());
                        echo "</p>";
                    }
                    // line 99
                    echo "\t\t\t\t\t\t\t\t <p class=\"notifications_time\">";
                    echo $this->getAttribute($context["notification_list"], "TIME", array());
                    echo "</p>
\t\t\t\t\t\t\t <div class=\"mark pull-right\"><input type=\"checkbox\" name=\"mark[]\" value=\"";
                    // line 100
                    echo $this->getAttribute($context["notification_list"], "NOTIFICATION_ID", array());
                    echo "\"";
                    if ( !$this->getAttribute($context["notification_list"], "UNREAD", array())) {
                        echo " disabled=\"disabled\"";
                    }
                    echo " /></div>
\t\t\t\t\t\t\t</div>
                         
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "\t\t\t\t<div class=\"space10\"></div>
\t\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t";
                // line 111
                if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "notification_list", array()))) {
                    // line 112
                    echo "\t\t\t<div class=\"pull-left\">
\t\t\t\t<input type=\"hidden\" name=\"form_time\" value=\"";
                    // line 113
                    echo ($context["FORM_TIME"] ?? null);
                    echo "\" />
\t\t\t\t";
                    // line 114
                    echo ($context["S_HIDDEN_FIELDS"] ?? null);
                    echo "
\t\t\t\t <input type=\"submit\" name=\"submit\" value=\"";
                    // line 115
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_READ");
                    echo "\" class=\"btn btn-default\" />
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t <a class=\"btn btn-default\" onclick=\"marklist('ucp', 'mark', true)\" title=\"";
                    // line 117
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
                    echo "\"><i class=\"fa fa-check-square-o\"></i></a>
\t\t\t\t <a class=\"btn btn-default\" onclick=\"marklist('ucp', 'mark', false)\" title=\"";
                    // line 118
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
                    echo "\"><i class=\"fa fa-square-o\"></i></a>
\t\t\t\t</div>
\t\t\t\t";
                    // line 120
                    echo ($context["S_FORM_TOKEN"] ?? null);
                    echo "
\t\t\t</div>
\t\t";
                }
                // line 123
                echo "\t\t\t</div>

\t\t\t<div class=\"col-md-8\"> 
\t\t\t <ul class=\"pagination pagination-sm pull-right\">
\t\t\t\t <li><a>";
                // line 127
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
                echo "&nbsp;";
                echo ($context["TOTAL_COUNT"] ?? null);
                echo "</a></li>
\t\t\t\t";
                // line 128
                if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                    // line 129
                    echo "\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_notifications.html", 129)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 130
                    echo "\t\t\t\t";
                } else {
                    // line 131
                    echo "\t\t\t\t\t<li class=\"active\"><a>";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "</a></li>\t
\t\t\t\t";
                }
                // line 133
                echo "\t\t\t </ul>
\t\t   </div>
\t\t</div>

\t\t\t";
            } else {
                // line 138
                echo "\t\t\t<div class=\"alert alert-info fade in\">
\t\t\t <i class=\"fa fa-warning\"></i>&nbsp;<strong>";
                // line 139
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFO_BOX");
                echo "</strong>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_NOTIFICATIONS");
                echo "
\t\t\t</div>
\t\t\t";
            }
            // line 142
            echo "
\t\t";
        }
        // line 144
        echo "</fieldset>
</div>
</form>

";
        // line 148
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_notifications.html", 148)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_notifications.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  467 => 148,  461 => 144,  457 => 142,  449 => 139,  446 => 138,  439 => 133,  433 => 131,  430 => 130,  417 => 129,  415 => 128,  409 => 127,  403 => 123,  397 => 120,  392 => 118,  388 => 117,  383 => 115,  379 => 114,  375 => 113,  372 => 112,  370 => 111,  363 => 106,  347 => 100,  342 => 99,  335 => 98,  329 => 97,  323 => 96,  314 => 95,  304 => 94,  293 => 93,  290 => 92,  282 => 91,  277 => 88,  273 => 87,  265 => 81,  259 => 79,  256 => 78,  243 => 77,  241 => 76,  235 => 75,  228 => 70,  220 => 69,  215 => 66,  212 => 65,  203 => 58,  191 => 54,  185 => 53,  181 => 51,  177 => 50,  168 => 48,  164 => 47,  160 => 46,  156 => 45,  152 => 43,  146 => 42,  142 => 40,  125 => 38,  121 => 37,  118 => 36,  113 => 35,  109 => 34,  105 => 32,  97 => 29,  94 => 28,  91 => 27,  87 => 26,  82 => 23,  73 => 21,  69 => 20,  59 => 13,  55 => 11,  53 => 10,  51 => 9,  46 => 7,  42 => 6,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_notifications.html", "");
    }
}
