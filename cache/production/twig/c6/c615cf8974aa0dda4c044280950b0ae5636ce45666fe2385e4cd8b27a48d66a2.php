<?php

/* memberlist_team.html */
class __TwigTemplate_ff1258792464ea2ab51e1aea077d4ae38ef63ccb970cc1326f18a579ed149e35 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "memberlist_team.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"side-segment\"><h3>";
        echo ($context["PAGE_TITLE"] ?? null);
        echo "</h3></div>
<form method=\"post\" action=\"";
        // line 3
        echo ($context["S_MODE_ACTION"] ?? null);
        echo "\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "group", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 5
            echo "<div class=\"forumbg forumbg-table\">
\t<div class=\"panel panel-forum\">
\t   <div class=\"panel-heading\">
\t\t<i class=\"fa fa-group\"></i>&nbsp;";
            // line 8
            if ($this->getAttribute($context["group"], "U_GROUP", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["group"], "U_GROUP", array());
                echo "\">";
                echo $this->getAttribute($context["group"], "GROUP_NAME", array());
                echo "</a>";
            } else {
                echo $this->getAttribute($context["group"], "GROUP_NAME", array());
            }
            // line 9
            echo "\t   </div>
\t <div class=\"panel-inner\">
\t<table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t<tr>
\t\t<th data-class=\"expand\" data-dfn=\"";
            // line 14
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERS");
            echo "</th>
\t\t<th class=\"large20\" data-hide=\"phone\">";
            // line 15
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIMARY_GROUP");
            echo "</th>
\t\t<th class=\"large20\" data-hide=\"phone\">";
            // line 16
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK_IMAGE");
            echo "</th>
\t\t";
            // line 17
            if (($context["S_DISPLAY_MODERATOR_FORUMS"] ?? null)) {
                echo "<th class=\"large20\" data-hide=\"phone\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR");
                echo "</th>";
            }
            // line 18
            echo "\t</tr>
\t</thead>
\t<tbody>
";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "user", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 22
                echo "\t<tr>
\t\t<td>";
                // line 23
                echo $this->getAttribute($context["user"], "USERNAME_FULL", array());
                if ($this->getAttribute($context["user"], "S_INACTIVE", array())) {
                    echo "&nbsp;&#40;";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INACTIVE");
                    echo "&#41;";
                }
                if ($this->getAttribute($context["user"], "RANK_TITLE", array())) {
                    echo "&nbsp;&#45;&nbsp;";
                    echo $this->getAttribute($context["user"], "RANK_TITLE", array());
                }
                echo "</td>
\t\t<td>";
                // line 24
                if ($this->getAttribute($context["user"], "U_GROUP", array())) {
                    // line 25
                    echo "\t\t\t<a";
                    if ($this->getAttribute($context["user"], "GROUP_COLOR", array())) {
                        echo " style=\"font-weight: bold; color: #";
                        echo $this->getAttribute($context["user"], "GROUP_COLOR", array());
                        echo "\"";
                    }
                    echo " href=\"";
                    echo $this->getAttribute($context["user"], "U_GROUP", array());
                    echo "\">";
                    echo $this->getAttribute($context["user"], "GROUP_NAME", array());
                    echo "</a>
\t\t\t";
                } else {
                    // line 27
                    echo "\t\t\t\t";
                    echo $this->getAttribute($context["user"], "GROUP_NAME", array());
                    echo "
\t\t\t";
                }
                // line 29
                echo "\t\t</td>
\t\t<td>";
                // line 30
                if ($this->getAttribute($context["user"], "RANK_IMG", array())) {
                    echo "<span class=\"rank-img\">";
                    echo $this->getAttribute($context["user"], "RANK_IMG", array());
                    echo "</span>";
                }
                echo "</td>
\t\t";
                // line 31
                if (($context["S_DISPLAY_MODERATOR_FORUMS"] ?? null)) {
                    // line 32
                    echo "\t\t\t<td>";
                    if ($this->getAttribute($context["user"], "FORUM_OPTIONS", array())) {
                        echo "<select class=\"selectpicker\">";
                        echo $this->getAttribute($context["user"], "FORUMS", array());
                        echo "</select>";
                    } elseif ($this->getAttribute($context["user"], "FORUMS", array())) {
                        echo $this->getAttribute($context["user"], "FORUMS", array());
                    } else {
                        echo "-";
                    }
                    echo "</td>
\t\t";
                }
                // line 34
                echo "\t</tr>
";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 36
                echo "\t<tr>
\t\t<td colspan=\"4\"><strong>";
                // line 37
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_MEMBERS");
                echo "</strong></td>
\t</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t</tbody>
\t</table>
\t</div>
\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</form>

<div class=\"row\">
<div class=\"col-md-4\">
";
        // line 50
        $location = "jumpbox_options.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox_options.html", "memberlist_team.html", 50)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 51
        echo "</div>
</div>
<div class=\"space10\"></div>
";
        // line 54
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_team.html", 54)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_team.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 54,  210 => 51,  198 => 50,  192 => 46,  181 => 40,  172 => 37,  169 => 36,  163 => 34,  149 => 32,  147 => 31,  139 => 30,  136 => 29,  130 => 27,  116 => 25,  114 => 24,  101 => 23,  98 => 22,  93 => 21,  88 => 18,  82 => 17,  78 => 16,  74 => 15,  66 => 14,  59 => 9,  49 => 8,  44 => 5,  40 => 4,  36 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "memberlist_team.html", "");
    }
}
