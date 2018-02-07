<?php

/* addons/navigation.html */
class __TwigTemplate_4bda4d960ca2447e6ddd5394a4cb6ddda3f1abf0e18b12c73d0c5ac3d0772ceb extends Twig_Template
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
        echo "<!-- Main navigation block -->
<nav class=\"collapse navbar-collapse flat-nav-collapse\" aria-label=\"Primary\">
    ";
        // line 3
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 4
            echo "\t<div class=\"user-login hidden-lg hidden-md hidden-sm\">
\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t<li class=\"dropdown dropdown-avatar\">
\t\t\t\t<a href=\"javascript:void(0)\" data-toggle=\"dropdown\" class=\"user-menu\">
\t\t\t\t ";
            // line 8
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
                echo "&nbsp;";
            }
            echo "&nbsp;<span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WELCOME_INDEX");
            echo "&#44;&nbsp;";
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "<i class=\"caret\"></i></span>
\t\t\t\t</a>
\t\t\t\t<ul class=\"dropdown-menu usermenu\">
\t\t\t\t   <li><a title=\"\" href=\"";
            // line 11
            echo ($context["U_UCP_PREFERENCE"] ?? null);
            echo "\"><i class=\"fa fa-user\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP_PROFILE");
            echo "</a></li>
\t\t\t\t   <li><a title=\"\" href=\"";
            // line 12
            echo ($context["U_PRIVATEMSGS"] ?? null);
            echo "\"><i class=\"fa fa-inbox\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP_MESSAGES");
            echo "&nbsp;&nbsp;<span class=\"badge badge-info\">";
            if ((($context["S_DISPLAY_PM"] ?? null) && ($context["S_USER_UNREAD_PRIVMSG"] ?? null))) {
                echo ($context["S_USER_UNREAD_PRIVMSG"] ?? null);
            } else {
                echo ($context["S_USER_NEW_PRIVMSG"] ?? null);
            }
            echo "</span></a></li>
\t\t\t\t   ";
            // line 13
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                echo "\t
\t\t\t\t\t <li><a title=\"\" href=\"";
                // line 14
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\"><i class=\"fa fa-bell\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
                echo "&nbsp;&nbsp;";
                if ( !twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "notifications", array()))) {
                } else {
                    echo "<span class=\"badge badge-info\">";
                    echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                    echo "</span>";
                }
                echo "</a></li>
\t\t\t\t   ";
            }
            // line 16
            echo "\t\t\t\t   ";
            // line 17
            echo "\t\t\t\t   <li><a title=\"\" href=\"";
            echo ($context["U_UCP_PROFILE_SETTINGS"] ?? null);
            echo "\"><i class=\"fa fa-cog\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP_PROFILE_SETTINGS");
            echo "</a></li>
\t               ";
            // line 18
            if (($context["U_ACP"] ?? null)) {
                echo "<li><a title=\"\" href=\"";
                echo ($context["U_ACP"] ?? null);
                echo "\"><i class=\"fa fa-user-md\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADMIN_PANEL_GENERAL");
                echo "</a></li>";
            }
            // line 19
            echo "\t               ";
            if (($context["U_MCP"] ?? null)) {
                echo "<li><a href=\"";
                echo ($context["U_MCP"] ?? null);
                echo "\"><i class=\"fa fa-legal\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR_PANEL_GENERAL");
                echo "</a></li>";
            }
            // line 20
            echo "\t\t\t\t   ";
            if ((($context["S_REGISTERED_USER"] ?? null) &&  !(($context["U_ACP"] ?? null) || ($context["U_MCP"] ?? null)))) {
                echo "<li><a href=\"";
                echo ($context["U_PROFILE"] ?? null);
                echo "\"><i class=\"fa fa-user\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_PANEL");
                echo "</a></li>";
            }
            // line 21
            echo "\t\t\t\t   ";
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                echo "<li><a href=\"";
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\"><i class=\"fa fa-random\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 22
            echo "\t\t\t\t  <li><a title=\"\" href=\"";
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\"><i class=\"fa fa-power-off\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGOUT");
            echo "</a></li>
\t\t\t\t  ";
            // line 23
            // line 24
            echo "\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
\t</div>
\t";
        }
        // line 29
        echo "\t
      <ul class=\"nav navbar-nav navbar-nav-fancy\">
        <li class=\"\"><a href=\"";
        // line 31
        echo ($context["U_INDEX"] ?? null);
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HOME");
        echo "</a></li>
        <li class=\"dropdown\">
             <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 33
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAIN_FORUM");
        echo "&nbsp;<b class=\"caret\"></b></a>
             <span class=\"dropdown-arrow\"></span>
            <ul class=\"dropdown-menu\">
                ";
        // line 36
        if ((($context["S_DISPLAY_SEARCH"] ?? null) || (($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null)))) {
            // line 37
            echo "\t\t\t\t<li><a href=\"";
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\"><i class=\"fa fa-search\"></i>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t\t";
            // line 38
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 39
                echo "\t\t\t\t<li><a href=\"";
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\"><i class=\"fa fa-comment\"></i>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNREAD");
                echo "</a></li>
\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 42
                echo "\t\t\t\t<li><a href=\"";
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\"><i class=\"fa fa-thumbs-up\"></i>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_NEW");
                echo "</a></li>
\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t<li><a href=\"";
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\"><i class=\"fa fa-star\"></i>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t";
        if (( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_FORUMS"] ?? null))) {
            // line 47
            echo "\t\t\t   <li><a href=\"";
            echo ($context["U_MARK_FORUMS"] ?? null);
            echo "\"><i class=\"fa fa-check\"></i>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_FORUMS_READ");
            echo "</a></li>
\t           ";
        }
        // line 49
        echo "\t\t\t   ";
        // line 50
        echo "\t\t\t   <li><a href=\"";
        echo ($context["U_FAQ"] ?? null);
        echo "\"><i class=\"fa fa-question-circle\"></i>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ");
        echo "</a></li>
\t\t\t   ";
        // line 51
        // line 52
        echo "\t\t\t   ";
        if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
            echo "<li><a href=\"";
            echo ($context["U_MEMBERLIST"] ?? null);
            echo "\"><i class=\"fa fa-group\"></i>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST");
            echo "</a></li>";
        }
        // line 53
        echo "\t\t\t  ";
        if (($context["U_TEAM"] ?? null)) {
            echo "<li><a href=\"";
            echo ($context["U_TEAM"] ?? null);
            echo "\"><i class=\"fa fa-trophy\"></i>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 54
        echo "            </ul>
        </li>
\t\t
\t\t<li class=\"dropdown\">
             <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 58
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
        echo "&nbsp;<b class=\"caret\"></b></a>
             <span class=\"dropdown-arrow\"></span>
            <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 61
        echo ($context["U_SEARCH"] ?? null);
        echo "\"><i class=\"fa fa-search fa\"></i>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
        echo "</a></li>
                ";
        // line 62
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null))) {
            // line 63
            echo "\t\t\t\t ";
            if (($context["S_DISPLAY_SEARCH"] ?? null)) {
                echo " 
\t\t\t\t<li><a href=\"";
                // line 64
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\"><i class=\"fa fa-comments\"></i>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_SELF");
                echo "</a></li>
\t\t\t\t<li><a href=\"";
                // line 65
                echo ($context["SITESPLAT_SEARCH_LAST_DAY"] ?? null);
                echo "\"><i class=\"fa fa-sort-numeric-asc\"></i>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITESPLAT_SEARCH_LAST_DAY");
                echo "</a></li>
\t\t\t\t<li><a href=\"";
                // line 66
                echo ($context["SITESPLAT_SEARCH_WEEK"] ?? null);
                echo "\"><i class=\"fa fa-sort-alpha-asc\"></i>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITESPLAT_SEARCH_WEEK");
                echo "</a></li>
\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t";
        }
        // line 69
        echo "                <li class=\"divider\"></li>
                <li class=\"dropdown-header\">";
        // line 70
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DEMO_HEADER_MENU");
        echo "</li>
                <li><a href=\"#\">";
        // line 71
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DEMO_LINK");
        echo "</a></li>
                <li><a href=\"#\">";
        // line 72
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DEMO_LINK");
        echo "</a></li>
            </ul>
        </li>
      </ul>
\t  ";
        // line 76
        // line 77
        echo "\t  
\t";
        // line 78
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 79
            echo "    <ul class=\"nav navbar-nav navbar-right navbar-nav-fancy\">
\t    ";
            // line 80
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["S_REGISTER_ENABLED"] ?? null)) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
                // line 81
                echo "\t\t<li><a href=\"";
                echo ($context["U_REGISTER"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CREATE_ACCOUNT");
                echo "</a></li>
\t   ";
            }
            // line 83
            echo "\t    ";
            if ( !($context["ENABLE_POPUP_LOGIN"] ?? null)) {
                // line 84
                echo "\t\t\t<li><a href=\"";
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
                echo "</a></li>
\t\t";
            } else {
                // line 86
                echo "\t\t\t<li><a href=\"\" data-toggle=\"modal\" data-target=\"#modal-login\" role=\"button\" data-toggle=\"modal\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
                echo "</a></li>
\t\t";
            }
            // line 88
            echo "\t</ul>
\t";
        }
        // line 90
        echo "\t  
\t";
        // line 91
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 92
            echo "\t<div class=\"user-login hidden-xs\">
\t\t<ul class=\"nav navbar-nav navbar-right navbar-nav-fancy\">
\t\t";
            // line 94
            // line 95
            echo "\t\t<li><a class=\"btn-search\" href=\"javascript:void(0)\"><i class=\"fa fa-lightbulb-o\"></i></a></li>
\t\t";
            // line 96
            // line 97
            echo "\t\t";
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                echo "\t
\t\t    <li class=\"dropdown dropdown-avatar dropdown-notification\">
\t\t\t  <a id=\"notification_list_button\" href=\"javascript:void(0)\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i>";
                // line 99
                if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "notifications", array())) && ($context["NOTIFICATIONS_COUNT"] ?? null))) {
                    echo "<em class=\"notifications badge badge-danger\">";
                    echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                    echo "</em>";
                }
                echo "</a>
                <ul class=\"dropdown-menu user-login-drop arrow-up\">
                 <li><a href=\"";
                // line 101
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\" class=\"notification-heading\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
                echo "</a></li>
                   ";
                // line 102
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "addons/navigation.html", 102)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 103
                echo "                </ul>
            </li>
\t\t";
            }
            // line 106
            echo "\t\t\t
\t\t\t<li class=\"dropdown dropdown-avatar\">
\t\t\t  <a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
\t\t\t   ";
            // line 109
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
                echo "&nbsp;";
            } else {
                echo "<img src=\"";
                echo ($context["T_THEME_PATH"] ?? null);
                echo "/images/user4.png\" alt=\"No avatar\">";
            }
            echo "&nbsp;<span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WELCOME_INDEX");
            echo "&#44;&nbsp;";
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "<i class=\"caret\"></i></span>
\t\t\t  </a>
                ";
            // line 111
            if (($context["S_USER_NEW_PRIVMSG"] ?? null)) {
                echo "<em class=\"notifications-pm badge badge-warning\">";
                echo ($context["PM_NEW_COUNT_BADGE"] ?? null);
                echo "</em>";
            } elseif (($context["S_USER_UNREAD_PRIVMSG"] ?? null)) {
                echo "<em class=\"notifications-pm badge badge-success\">";
                echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                echo "</em>";
            }
            echo "                   
\t\t\t\t   <ul class=\"dropdown-menu user-login-drop arrow-up\">
                        <li>";
            // line 113
            if (($context["S_USER_NEW_PRIVMSG"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\">";
                echo ($context["PM_NEW_COUNT"] ?? null);
                echo "</a>";
            } elseif (($context["S_USER_UNREAD_PRIVMSG"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\">";
                echo ($context["PM_UNREAD_COUNT"] ?? null);
                echo "</a>";
            } else {
                echo "<a href=\"";
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_PMS_INFO");
                echo "</a>";
            }
            echo "</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"navbar-wrapper\">
                              <div class=\"navbar-content navbar-avatar\">
                                    <div class=\"row\">
                                        <div class=\"col-md-5 col-xs-5\">
                                          ";
            // line 119
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
            } else {
                echo "<img src=\"";
                echo ($context["T_THEME_PATH"] ?? null);
                echo "/images/user4.png\" alt=\"No avatar\">";
            }
            // line 120
            echo "                                            <p class=\"text-center\"><a href=\"";
            echo ($context["U_UCP_PROFILE_AVATAR"] ?? null);
            echo "\">
                                                <small>";
            // line 121
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHANGE_AVATAR");
            echo "</small>
                                            </a></p>
                                        </div>
                                        <div class=\"col-md-7 col-xs-7\"><span>";
            // line 124
            echo ($context["CURRENT_USERNAME_FULL"] ?? null);
            echo "</span>
                                            <p class=\"text-muted small\">";
            // line 125
            echo ($context["USER_EMAIL_MENU"] ?? null);
            echo "</p>
                                             ";
            // line 126
            if (($context["U_ACP"] ?? null)) {
                echo "<a class=\"btn btn-info btn-sm btn-block\" href=\"";
                echo ($context["U_ACP"] ?? null);
                echo "\"><i class=\"fa fa-user-md\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADMIN_PANEL_GENERAL");
                echo "</a>";
            }
            // line 127
            echo "\t                                         ";
            if (($context["U_MCP"] ?? null)) {
                echo "<a class=\"btn btn-warning btn-sm btn-block\" href=\"";
                echo ($context["U_MCP"] ?? null);
                echo "\"><i class=\"fa fa-legal\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR_PANEL_GENERAL");
                echo "</a>";
            }
            // line 128
            echo "                                             ";
            if ((($context["S_REGISTERED_USER"] ?? null) &&  !(($context["U_ACP"] ?? null) || ($context["U_MCP"] ?? null)))) {
                echo "<a class=\"btn btn-success btn-sm btn-block\" href=\"";
                echo ($context["U_PROFILE"] ?? null);
                echo "\"><i class=\"fa fa-user\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_PANEL");
                echo "</a>";
            }
            // line 129
            echo "\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  ";
            // line 132
            // line 133
            echo "\t\t\t\t\t\t\t  <div class=\"navbar-footer\">
                                    <div class=\"navbar-footer-content\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6 col-xs-6\"><a class=\"btn btn-default btn-sm\" href=\"";
            // line 136
            echo ($context["U_UCP_PROFILE_SETTINGS"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHANGE_PASSWORD");
            echo "</a></div>
                                            <div class=\"col-md-6 col-xs-6\"><a class=\"btn btn-default btn-sm pull-right\" href=\"";
            // line 137
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGOUT");
            echo "</a></div>
                                        </div>
                                    </div>
                               </div>
\t\t\t\t\t\t\t</div>
                        </li>
                    </ul>
            </li>
\t\t</ul>
\t</div>
\t";
        }
        // line 148
        echo "</nav>";
    }

    public function getTemplateName()
    {
        return "addons/navigation.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 148,  521 => 137,  515 => 136,  510 => 133,  509 => 132,  504 => 129,  495 => 128,  486 => 127,  478 => 126,  474 => 125,  470 => 124,  464 => 121,  459 => 120,  451 => 119,  424 => 113,  411 => 111,  395 => 109,  390 => 106,  385 => 103,  373 => 102,  367 => 101,  358 => 99,  352 => 97,  351 => 96,  348 => 95,  347 => 94,  343 => 92,  341 => 91,  338 => 90,  334 => 88,  328 => 86,  320 => 84,  317 => 83,  309 => 81,  307 => 80,  304 => 79,  302 => 78,  299 => 77,  298 => 76,  291 => 72,  287 => 71,  283 => 70,  280 => 69,  277 => 68,  270 => 66,  264 => 65,  258 => 64,  253 => 63,  251 => 62,  245 => 61,  239 => 58,  233 => 54,  224 => 53,  215 => 52,  214 => 51,  207 => 50,  205 => 49,  197 => 47,  194 => 46,  186 => 44,  178 => 42,  175 => 41,  167 => 39,  165 => 38,  158 => 37,  156 => 36,  150 => 33,  143 => 31,  139 => 29,  132 => 24,  131 => 23,  124 => 22,  115 => 21,  106 => 20,  97 => 19,  89 => 18,  82 => 17,  80 => 16,  66 => 14,  62 => 13,  50 => 12,  44 => 11,  31 => 8,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "addons/navigation.html", "");
    }
}
