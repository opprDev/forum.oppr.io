<?php

/* index_body.html */
class __TwigTemplate_9749b2118926ce4b3fdce64eace4b95fa3b07d16dd54ac712beb1137702bcbf3 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        // line 3
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 3)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 4
        // line 5
        echo "
";
        // line 6
        // line 7
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 8
            echo "<div class=\"panel panel-forum panel-stats\">
 <div class=\"panel-heading\">";
            // line 9
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITESPLAT_STATISTICS");
            echo "</div>
 <div class=\"panel-body\">
    <div class=\"row\">
\t  <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-acqua\">";
            // line 13
            echo ($context["SITESPLAT_CURRENTLY_ONLINE"] ?? null);
            echo "&nbsp;<a data-toggle=\"collapse\" data-target=\".sorting\" href=\"javascript:void(0);\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPAND_VIEW");
            echo "\"><i class=\"fa fa-angle-double-down\"></i></a></span><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITESPLAT_USERS_ONLINE");
            echo "</strong>
\t   </div>
\t   <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-seppia\">";
            // line 16
            echo ($context["SITESPLAT_RECORD_ONLINE"] ?? null);
            echo "</span><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITESPLAT_MOST_USERS_ONLINE");
            echo "</strong>
\t   </div>
\t   <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-melograno\">";
            // line 19
            echo ($context["SITESPLAT_TOTAL_POSTS"] ?? null);
            echo "</span><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITESPLAT_TOTAL_POSTS");
            echo "</strong>
\t   </div>
\t   
\t <div class=\"visible-xs space10\"></div>
\t  <div class=\"visible-xs space10\"></div>
\t  
\t   <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-drank\">";
            // line 26
            echo ($context["SITESPLAT_TOTAL_TOPICS"] ?? null);
            echo "</span><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITESPLAT_TOTAL_TOPICS");
            echo "</strong>
\t   </div>
\t   <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-orange\">";
            // line 29
            echo ($context["SITESPLAT_TOTAL_USERS"] ?? null);
            echo "</span><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITESPLAT_TOTAL_USERS");
            echo "</strong>
\t   </div>
\t   <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-red\">";
            // line 32
            echo ($context["SITESPLAT_NEWEST_USER"] ?? null);
            echo "</span><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITESPLAT_NEWEST_MEMBER");
            echo "</strong>
\t   </div> 
\t</div>
 </div>
 ";
            // line 36
            if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
                // line 37
                echo "\t<div class=\"panel-footer sorting collapse\">
\t <div class=\"row\">
\t ";
                // line 39
                // line 40
                echo "\t   <div class=\"col-md-6\">
\t\t<span class=\"stats-heading\">";
                // line 41
                echo ($context["TOTAL_USERS_ONLINE"] ?? null);
                echo "&nbsp;&#40;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLINE_EXPLAIN");
                echo "&#41;&nbsp;";
                if (($context["U_VIEWONLINE"] ?? null)) {
                    echo "<a href=\"";
                    echo ($context["U_VIEWONLINE"] ?? null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                    echo "\"><i class=\"fa fa-question-circle\"></i></a>";
                }
                echo "</span>
\t\t";
                // line 42
                if (($context["LEGEND"] ?? null)) {
                    // line 43
                    echo "\t\t  <div class=\"space10\"></div>
\t\t <small>";
                    // line 44
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LEGEND");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "&nbsp;";
                    echo ($context["LEGEND"] ?? null);
                    echo "</small>
\t\t";
                }
                // line 46
                echo "\t   </div>
\t   ";
                // line 47
                echo " 
\t   <div class=\"col-md-12\">\t
\t\t";
                // line 49
                // line 50
                echo "\t\t <div class=\"space10\"></div>
\t\t<p>";
                // line 51
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "</p>
\t\t";
                // line 52
                // line 53
                echo "\t 
\t\t";
                // line 54
                if (($context["S_DISPLAY_BIRTHDAY_LIST"] ?? null)) {
                    // line 55
                    echo "\t\t ";
                    // line 56
                    echo "\t\t  ";
                    if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "birthdays", array()))) {
                        echo "<p>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONGRATULATIONS");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo "&nbsp;<strong>";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "birthdays", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                            echo $this->getAttribute($context["birthdays"], "USERNAME", array());
                            if (($this->getAttribute($context["birthdays"], "AGE", array()) !== "")) {
                                echo "&#40;";
                                echo $this->getAttribute($context["birthdays"], "AGE", array());
                                echo "&#41;";
                            }
                            if ( !$this->getAttribute($context["birthdays"], "S_LAST_ROW", array())) {
                                echo "&#44;&nbsp;";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</strong></p>";
                    }
                    // line 57
                    echo "\t\t ";
                    // line 58
                    echo "\t\t";
                }
                // line 59
                echo "\t   </div>
\t  ";
                // line 60
                echo " 
\t </div>
\t</div>
 ";
            }
            // line 64
            echo "</div>
";
        }
        // line 66
        // line 67
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 67)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 68
        echo "
";
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 68,  220 => 67,  219 => 66,  215 => 64,  209 => 60,  206 => 59,  203 => 58,  201 => 57,  176 => 56,  174 => 55,  172 => 54,  169 => 53,  168 => 52,  164 => 51,  161 => 50,  160 => 49,  156 => 47,  153 => 46,  145 => 44,  142 => 43,  140 => 42,  126 => 41,  123 => 40,  122 => 39,  118 => 37,  116 => 36,  107 => 32,  99 => 29,  91 => 26,  79 => 19,  71 => 16,  61 => 13,  54 => 9,  51 => 8,  49 => 7,  48 => 6,  45 => 5,  44 => 4,  32 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index_body.html", "");
    }
}
