<?php

/* memberlist_body.html */
class __TwigTemplate_e025ea83fb07e3af15c11e1fe70a68547cefb81e78b0bc090afdb971bf62eb69 extends Twig_Template
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
        if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
            // line 2
            echo "\t";
            $location = "simple_header_ACP.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_header_ACP.html", "memberlist_body.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 3
            echo "\t";
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 3)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 4
            echo "\t<form method=\"post\" id=\"results\" action=\"";
            echo ($context["S_MODE_ACTION"] ?? null);
            echo "\" onsubmit=\"insert_marked_users('#results', this.user); return false;\" data-form-name=\"";
            echo ($context["S_FORM_NAME"] ?? null);
            echo "\" data-field-name=\"";
            echo ($context["S_FIELD_NAME"] ?? null);
            echo "\">

";
        } elseif (        // line 6
($context["S_SEARCH_USER"] ?? null)) {
            // line 7
            echo "\t";
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "memberlist_body.html", 7)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            echo "\t
\t";
            // line 8
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 8)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 9
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_MODE_ACTION"] ?? null);
            echo "\">

";
        } else {
            // line 12
            echo "\t";
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "memberlist_body.html", 12)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 13
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_MODE_ACTION"] ?? null);
            echo "\">
";
        }
        // line 15
        echo "
\t";
        // line 16
        if (($context["S_SHOW_GROUP"] ?? null)) {
            // line 17
            echo "\t\t<div class=\"side-segment\"><h3";
            if (($context["GROUP_COLOR"] ?? null)) {
                echo " style=\"color:#";
                echo ($context["GROUP_COLOR"] ?? null);
                echo ";\"";
            }
            echo ">";
            echo ($context["GROUP_NAME"] ?? null);
            echo "</h3></div> 
\t\t";
            // line 18
            if (($context["U_MANAGE"] ?? null)) {
                // line 19
                echo "\t\t<p><a class=\"btn btn-sm btn-default\" href=\"";
                echo ($context["U_MANAGE"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MANAGE_GROUP");
                echo "</a></p>
\t\t";
            }
            // line 21
            echo "\t\t<p>";
            echo ($context["GROUP_DESC"] ?? null);
            echo "&nbsp;";
            echo ($context["GROUP_TYPE"] ?? null);
            echo "</p>
\t\t<p>
\t\t\t";
            // line 23
            if (($context["AVATAR_IMG"] ?? null)) {
                echo ($context["AVATAR_IMG"] ?? null);
            }
            // line 24
            echo "\t\t\t";
            if (($context["RANK_IMG"] ?? null)) {
                echo ($context["RANK_IMG"] ?? null);
            }
            // line 25
            echo "\t\t\t";
            if (($context["GROUP_RANK"] ?? null)) {
                echo ($context["GROUP_RANK"] ?? null);
            }
            // line 26
            echo "\t\t</p>
\t";
        } else {
            // line 28
            echo "\t\t<div class=\"side-segment\"><h3>";
            echo ($context["PAGE_TITLE"] ?? null);
            if (($context["SEARCH_WORDS"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "&nbsp;<a href=\"";
                echo ($context["U_SEARCH_WORDS"] ?? null);
                echo "\">";
                echo ($context["SEARCH_WORDS"] ?? null);
                echo "</a>";
            }
            echo "</h3></div> 
    <div class=\"clearfix\">
\t\t<div class=\"pull-left\">
            <ul class=\"pagination pagination-sm members-search\">
\t        ";
            // line 32
            if ((($context["U_FIND_MEMBER"] ?? null) &&  !($context["S_SEARCH_USER"] ?? null))) {
                echo "<li class=\"\"><a href=\"";
                echo ($context["U_FIND_MEMBER"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME");
                echo "</a></li>";
            } elseif (((($context["S_SEARCH_USER"] ?? null) && ($context["U_HIDE_FIND_MEMBER"] ?? null)) &&  !($context["S_IN_SEARCH_POPUP"] ?? null))) {
                echo "<li class=\"\"><a href=\"";
                echo ($context["U_HIDE_FIND_MEMBER"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_MEMBER_SEARCH");
                echo "</a></li>";
            }
            // line 33
            echo "\t        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "first_char", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["first_char"]) {
                // line 34
                echo "\t\t\t\t\t<li class=\"\"><a href=\"";
                echo $this->getAttribute($context["first_char"], "U_SORT", array());
                echo "\">";
                echo $this->getAttribute($context["first_char"], "DESC", array());
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['first_char'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t\t</ul>
\t\t</div> 
\t";
            // line 38
            if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
                // line 39
                echo "\t\t<div class=\"pop-up-search-pagination\">
\t\t\t<ul class=\"pagination pagination-sm pull-right\">
\t\t\t\t <li><a>";
                // line 41
                echo ($context["TOTAL_USERS"] ?? null);
                echo "</a></li>
\t\t\t\t";
                // line 42
                if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                    // line 43
                    echo "\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "memberlist_body.html", 43)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 44
                    echo "\t\t\t\t";
                } else {
                    // line 45
                    echo "\t\t\t\t\t<li class=\"active\"><a>";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "</a></li>\t
\t\t\t\t";
                }
                // line 47
                echo "\t\t\t</ul>
\t\t</div>\t
\t";
            }
            // line 50
            echo "\t<script>
\thead.ready(function () {
\t  \$('.members-search a[href=\"' +location.pathname + location.search +'\"]').closest('li').addClass('active');
\t});
\t</script>
\t</div> \t
\t\t<div class=\"space10\"></div> \t
\t";
        }
        // line 58
        echo "\t
\t";
        // line 59
        if (((($context["S_LEADERS_SET"] ?? null) ||  !($context["S_SHOW_GROUP"] ?? null)) ||  !twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "memberrow", array())))) {
            // line 60
            echo "\t<div class=\"panel panel-forum\">
\t     <div class=\"panel-heading\">
\t\t  <i class=\"fa fa-group\"></i>&nbsp;";
            // line 62
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERS");
            echo "
\t\t </div>
\t\t <div class=\"panel-inner\">
\t\t<table id=\"memberlist\" class=\"footable table table-striped table-primary table-hover\">
\t\t<thead>
\t   <tr>
\t\t<th data-class=\"expand\"><a href=\"";
            // line 68
            echo ($context["U_SORT_USERNAME"] ?? null);
            echo "\">";
            if ((($context["S_SHOW_GROUP"] ?? null) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "memberrow", array())))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_LEADER");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            }
            echo "</a>&#44;<a href=\"";
            echo ($context["U_SORT_RANK"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
            echo "</a></th>
\t\t<th data-hide=\"phone\"><a href=\"";
            // line 69
            echo ($context["U_SORT_POSTS"] ?? null);
            echo "#memberlist\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
            echo "</a></th>
\t\t<th data-hide=\"phone\">";
            // line 70
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OTHER");
            echo "</th>
\t\t<th data-hide=\"phone\"><a href=\"";
            // line 71
            echo ($context["U_SORT_JOINED"] ?? null);
            echo "#memberlist\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
            echo "</a></th>
        ";
            // line 72
            if (($context["U_SORT_ACTIVE"] ?? null)) {
                // line 73
                echo "        <th data-hide=\"phone\"><a href=\"";
                echo ($context["U_SORT_ACTIVE"] ?? null);
                echo "#memberlist\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_ACTIVE");
                echo "</a></th>
\t\t";
            }
            // line 75
            echo "\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t";
        }
        // line 79
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "memberrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["memberrow"]) {
            // line 80
            echo "\t\t";
            if (($context["S_SHOW_GROUP"] ?? null)) {
                // line 81
                echo "\t\t";
                if (( !$this->getAttribute($context["memberrow"], "S_GROUP_LEADER", array()) &&  !$this->getAttribute(($context["definition"] ?? null), "S_MEMBER_HEADER", array()))) {
                    // line 82
                    echo "\t\t";
                    if ((($context["S_LEADERS_SET"] ?? null) && $this->getAttribute($context["memberrow"], "S_FIRST_ROW", array()))) {
                        // line 83
                        echo "\t\t<tr>
\t\t\t<td colspan=\"";
                        // line 84
                        if (($context["U_SORT_ACTIVE"] ?? null)) {
                            echo "5";
                        } else {
                            echo "4";
                        }
                        echo "\">&nbsp;</td>
\t\t</tr>
\t\t";
                    }
                    // line 87
                    if (($context["S_LEADERS_SET"] ?? null)) {
                        // line 88
                        echo "\t\t</tbody>
\t\t</table>
\t\t</div>
    </div>
";
                    }
                    // line 93
                    echo "   <div class=\"panel panel-forum\">
\t     <div class=\"panel-heading\">
\t\t  <i class=\"fa fa-group\"></i>&nbsp;";
                    // line 95
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERS");
                    echo "
\t\t </div>
\t\t <div class=\"panel-inner\">
\t\t<table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t<tr>
\t";
                    // line 101
                    if ( !($context["S_LEADERS_SET"] ?? null)) {
                        // line 102
                        echo "\t\t<th data-class=\"expand\"><a href=\"";
                        echo ($context["U_SORT_USERNAME"] ?? null);
                        echo "\">";
                        if (($context["S_SHOW_GROUP"] ?? null)) {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_MEMBERS");
                        } else {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
                        }
                        echo "</a><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
                        echo "<a href=\"";
                        echo ($context["U_SORT_RANK"] ?? null);
                        echo "\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
                        echo "</a></span></th>
\t\t<th data-hide=\"phone\"><a href=\"";
                        // line 103
                        echo ($context["U_SORT_POSTS"] ?? null);
                        echo "#memberlist\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                        echo "</a></th>
\t\t<th data-hide=\"phone\">";
                        // line 104
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OTHER");
                        echo "</th>
\t    <th data-hide=\"phone\"><a href=\"";
                        // line 105
                        echo ($context["U_SORT_JOINED"] ?? null);
                        echo "#memberlist\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
                        echo "</a></th>
\t\t";
                        // line 106
                        if (($context["U_SORT_ACTIVE"] ?? null)) {
                            // line 107
                            echo "\t\t<th><a href=\"";
                            echo ($context["U_SORT_ACTIVE"] ?? null);
                            echo "#memberlist\">";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_ACTIVE");
                            echo "</a></th>
\t\t";
                        }
                        // line 109
                        echo "\t";
                    } elseif (($context["S_SHOW_GROUP"] ?? null)) {
                        // line 110
                        echo "\t\t<th><i class=\"fa fa-group\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_MEMBERS");
                        echo "</th>
\t\t<th>&nbsp;</th>
\t\t<th>&nbsp;</th>
\t\t<th>&nbsp;</th>
\t\t";
                        // line 114
                        if (($context["U_SORT_ACTIVE"] ?? null)) {
                            echo "<th class=\"active_sort\">&nbsp;</th>";
                        }
                        // line 115
                        echo "\t";
                    }
                    // line 116
                    echo "\t</tr>
\t</thead>
\t<tbody>
\t\t\t";
                    // line 119
                    $value = 1;
                    $context['definition']->set('S_MEMBER_HEADER', $value);
                    // line 120
                    echo "\t\t";
                }
                // line 121
                echo "\t";
            }
            // line 122
            echo "\t<tr>
\t\t<td>";
            // line 123
            if ((($context["S_IN_SEARCH_POPUP"] ?? null) &&  !($context["S_SELECT_SINGLE"] ?? null))) {
                echo "<span><input type=\"checkbox\" name=\"user\" id=\"";
                echo $this->getAttribute($context["memberrow"], "USERNAME", array());
                echo "\" value=\"";
                echo $this->getAttribute($context["memberrow"], "USERNAME", array());
                echo "\"><label for=\"";
                echo $this->getAttribute($context["memberrow"], "USERNAME", array());
                echo "\"></label></span>";
            }
            echo $this->getAttribute($context["memberrow"], "USERNAME_FULL", array());
            if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
                echo "&nbsp;&#91;&nbsp;<a style=\"font-weight:bold;border-bottom: 1px dashed #ccc;\" href=\"#\" onclick=\"insert_single_user('#results', '";
                echo $this->getAttribute($context["memberrow"], "A_USERNAME", array());
                echo "'); return false;\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT");
                echo "</a>&nbsp;&#93;";
            }
            if ($this->getAttribute($context["memberrow"], "S_INACTIVE", array())) {
                echo "&nbsp;&#40;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INACTIVE");
                echo "&#41;";
            }
            echo "<br>";
            if ($this->getAttribute($context["memberrow"], "RANK_IMG", array())) {
                echo "<span class=\"rank-img\">";
                echo $this->getAttribute($context["memberrow"], "RANK_IMG", array());
                echo "</span>";
            } else {
                echo "<small>";
                echo $this->getAttribute($context["memberrow"], "RANK_TITLE", array());
                echo "</small>";
            }
            echo "</td>
\t\t<td>";
            // line 124
            if (($this->getAttribute($context["memberrow"], "POSTS", array()) && ($context["S_DISPLAY_SEARCH"] ?? null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["memberrow"], "U_SEARCH_USER", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_USER_POSTS");
                echo "\">";
                echo $this->getAttribute($context["memberrow"], "POSTS", array());
                echo "</a>";
            } else {
                echo $this->getAttribute($context["memberrow"], "POSTS", array());
            }
            echo "</td>
\t\t<td>
\t\t<ul class=\"list-inline\" style=\"margin-bottom: 0;\">
\t\t";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 128
                echo "            ";
                if ($this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                    // line 129
                    echo "               ";
                    if ($this->getAttribute($context["custom_fields"], "PROFILE_FIELD_CONTACT", array())) {
                        // line 130
                        echo "                <li><a class=\"default-contact\" href=\"";
                        echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_CONTACT", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_DESC", array());
                        echo "\"><i class=\"icon-moon-";
                        echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                        echo "\"></i></a></li>
               ";
                    }
                    // line 131
                    echo "\t\t\t\t
            ";
                }
                // line 133
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "\t\t</ul>
        ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 136
                echo "\t\t ";
                if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                    // line 137
                    echo "            ";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                    echo "&#44;&nbsp;
\t\t ";
                }
                // line 139
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t\t
\t\t</td>
\t\t<td>";
            // line 141
            echo $this->getAttribute($context["memberrow"], "JOINED", array());
            echo "</td>
        ";
            // line 142
            if (($context["S_VIEWONLINE"] ?? null)) {
                // line 143
                echo "        <td>";
                echo $this->getAttribute($context["memberrow"], "LAST_ACTIVE", array());
                echo "</td>
\t    ";
            }
            // line 145
            echo "\t</tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 147
            echo "\t<tr>
\t\t<td colspan=\"";
            // line 148
            if (($context["S_VIEWONLINE"] ?? null)) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_MEMBERS");
            echo "</td>
\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "\t</tbody>
\t</table>
\t </div>
  </div>
";
        // line 155
        if ((($context["S_IN_SEARCH_POPUP"] ?? null) &&  !($context["S_SELECT_SINGLE"] ?? null))) {
            // line 156
            echo "<div class=\"pull-left\">
\t<fieldset>
\t<div class=\"btn-group\">
\t<a href=\"javascript:;\" onclick=\"marklist('results', 'user', true); return false;\" class=\"btn btn-default\" title=\"";
            // line 159
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
            echo "\"><i class=\"fa fa-check-square-o\"></i></a>
\t<a href=\"javascript:;\" onclick=\"marklist('results', 'user', false); return false;\" class=\"btn btn-default\" title=\"";
            // line 160
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
            echo "\"><i class=\"fa fa-square-o\"></i></a>
\t</div>
\t<button class=\"btn btn-default\" type=\"submit\" title=\"";
            // line 162
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_MARKED");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_MARKED");
            echo "</button>
    </fieldset>
</div>
<div class=\"space10\"></div>
<div class=\"space10\"></div>
";
        }
        // line 168
        echo "
";
        // line 169
        if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
            // line 170
            echo "</form>
<form method=\"post\" id=\"sort-results\" action=\"";
            // line 171
            echo ($context["S_MODE_ACTION"] ?? null);
            echo "\">
";
        }
        // line 173
        echo "
";
        // line 174
        if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
            // line 175
            echo "<div class=\"clearfix\">
\t<div class=\"pull-left\">
\t<label class=\"sr-only\" for=\"sk\">";
            // line 177
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_SORT_METHOD");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label> 
\t\t<div class=\"control-row\">
\t\t <div class=\"input-group\">
\t\t\t<select class=\"selectpicker\" data-container=\"body\" data-width=\"auto\" data-style=\"btn btn-default form-control\" name=\"sk\" id=\"sk\">";
            // line 180
            echo ($context["S_MODE_SELECT"] ?? null);
            echo "</select>
\t\t\t<select class=\"selectpicker\" data-container=\"body\" data-width=\"auto\" data-style=\"btn btn-default form-control\" name=\"sd\" id=\"sd\">";
            // line 181
            echo ($context["S_ORDER_SELECT"] ?? null);
            echo "</select> 
\t\t   <div class=\"input-group-btn\">\t
\t\t\t<button type=\"submit\" name=\"sort\" value=\"";
            // line 183
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "</button>
\t\t   </div>
\t\t </div>\t
\t\t</div>
\t</div>
\t<div class=\"pop-up-search-pagination\">
\t\t<ul class=\"pagination pagination-sm pull-right\">
\t\t\t    <li><a>";
            // line 190
            echo ($context["TOTAL_USERS"] ?? null);
            echo "</a></li>
\t\t\t";
            // line 191
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 192
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "memberlist_body.html", 192)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 193
                echo "\t\t\t";
            } else {
                // line 194
                echo "\t\t\t\t<li class=\"active\"><a>";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "</a></li>\t
\t\t\t";
            }
            // line 196
            echo "\t\t</ul>
\t</div>
</div>\t\t
";
        }
        // line 200
        echo "
</form>


";
        // line 204
        if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
            // line 205
            echo "\t";
            $location = "simple_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_footer.html", "memberlist_body.html", 205)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 207
            echo "<div class=\"row\">
<div class=\"col-md-4\">
";
            // line 209
            $location = "jumpbox_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jumpbox_options.html", "memberlist_body.html", 209)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 210
            echo "</div>

<div class=\"col-md-8\">
    <ul class=\"pagination pagination-sm pull-right\">
\t\t <li><a>";
            // line 214
            echo ($context["TOTAL_USERS"] ?? null);
            echo "</a></li>
\t\t";
            // line 215
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 216
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "memberlist_body.html", 216)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 217
                echo "\t\t";
            } else {
                // line 218
                echo "\t\t\t<li class=\"active\"><a>";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "</a></li>\t
\t\t";
            }
            // line 220
            echo "    </ul>
</div>\t
</div>

";
            // line 224
            $location = "jump_links.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jump_links.html", "memberlist_body.html", 224)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 225
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "memberlist_body.html", 225)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "memberlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  806 => 225,  794 => 224,  788 => 220,  782 => 218,  779 => 217,  766 => 216,  764 => 215,  760 => 214,  754 => 210,  742 => 209,  738 => 207,  724 => 205,  722 => 204,  716 => 200,  710 => 196,  704 => 194,  701 => 193,  688 => 192,  686 => 191,  682 => 190,  670 => 183,  665 => 181,  661 => 180,  654 => 177,  650 => 175,  648 => 174,  645 => 173,  640 => 171,  637 => 170,  635 => 169,  632 => 168,  621 => 162,  616 => 160,  612 => 159,  607 => 156,  605 => 155,  599 => 151,  584 => 148,  581 => 147,  575 => 145,  569 => 143,  567 => 142,  563 => 141,  554 => 139,  548 => 137,  545 => 136,  541 => 135,  538 => 134,  532 => 133,  528 => 131,  518 => 130,  515 => 129,  512 => 128,  508 => 127,  492 => 124,  457 => 123,  454 => 122,  451 => 121,  448 => 120,  445 => 119,  440 => 116,  437 => 115,  433 => 114,  425 => 110,  422 => 109,  414 => 107,  412 => 106,  406 => 105,  402 => 104,  396 => 103,  379 => 102,  377 => 101,  368 => 95,  364 => 93,  357 => 88,  355 => 87,  345 => 84,  342 => 83,  339 => 82,  336 => 81,  333 => 80,  327 => 79,  321 => 75,  313 => 73,  311 => 72,  305 => 71,  301 => 70,  295 => 69,  281 => 68,  272 => 62,  268 => 60,  266 => 59,  263 => 58,  253 => 50,  248 => 47,  242 => 45,  239 => 44,  226 => 43,  224 => 42,  220 => 41,  216 => 39,  214 => 38,  210 => 36,  199 => 34,  194 => 33,  180 => 32,  164 => 28,  160 => 26,  155 => 25,  150 => 24,  146 => 23,  138 => 21,  130 => 19,  128 => 18,  117 => 17,  115 => 16,  112 => 15,  106 => 13,  93 => 12,  86 => 9,  74 => 8,  59 => 7,  57 => 6,  47 => 4,  34 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "memberlist_body.html", "");
    }
}
