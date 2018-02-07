<?php

/* search_results.html */
class __TwigTemplate_653806aef00c39186a2abbbae029e87329f2d4ecbd18fbbda95ca09c32afc1af extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "search_results.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"side-segment\"><h3>";
        if (($context["SEARCH_TITLE"] ?? null)) {
            echo ($context["SEARCH_TITLE"] ?? null);
        } else {
            echo ($context["SEARCH_MATCHES"] ?? null);
        }
        if (($context["SEARCH_WORDS"] ?? null)) {
            echo "&#58;&nbsp;<a href=\"";
            echo ($context["U_SEARCH_WORDS"] ?? null);
            echo "\">";
            echo ($context["SEARCH_WORDS"] ?? null);
            echo "</a>";
        }
        echo "</h3></div>
";
        // line 3
        if (($context["SEARCHED_QUERY"] ?? null)) {
            echo "<p>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCHED_QUERY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "&nbsp;<strong>";
            echo ($context["SEARCHED_QUERY"] ?? null);
            echo "</strong></p>";
        }
        // line 4
        if (($context["IGNORED_WORDS"] ?? null)) {
            echo "<p>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IGNORED_TERMS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "&nbsp;<span class=\"badge badge-important\">";
            echo ($context["IGNORED_WORDS"] ?? null);
            echo "</span></p>";
        }
        // line 5
        if (($context["PHRASE_SEARCH_DISABLED"] ?? null)) {
            echo "<p><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PHRASE_SEARCH_DISABLED");
            echo "</strong></p>";
        }
        // line 6
        echo "
";
        // line 7
        if (($context["SEARCH_TOPIC"] ?? null)) {
            // line 8
            echo "\t<p><i class=\"fa fa-chevron-left\"></i>&nbsp;<a href=\"";
            echo ($context["U_SEARCH_TOPIC"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_TO");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "&nbsp;";
            echo ($context["SEARCH_TOPIC"] ?? null);
            echo "</a></p>
";
        } else {
            // line 10
            echo "\t<p><i class=\"fa fa-chevron-left\"></i>&nbsp;<a href=\"";
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO_TO_SEARCH_ADV");
            echo "</a></p>
";
        }
        // line 12
        echo "
";
        // line 13
        // line 14
        echo "
";
        // line 15
        if ((((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())) || ($context["SEARCH_MATCHES"] ?? null)) || ($context["TOTAL_MATCHES"] ?? null)) || ($context["PAGE_NUMBER"] ?? null))) {
            // line 16
            echo " <div class=\"row\">
\t<div class=\"col-md-4 col-xs-7\">
\t\t";
            // line 18
            if ((($context["TOTAL_MATCHES"] ?? null) > 0)) {
                // line 19
                echo "\t\t<div class=\"pull-left\">
\t\t  <form method=\"post\" action=\"";
                // line 20
                echo ($context["S_SEARCH_ACTION"] ?? null);
                echo "\">
\t\t   <fieldset>
\t\t\t<div class=\"input-group input-group-sm input-icon left\">
\t\t\t  <i class=\"fa fa-search\"></i>
\t\t\t  <input type=\"text\" class=\"form-control\" size=\"\" name=\"add_keywords\" id=\"add_keywords\" placeholder=\"";
                // line 24
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_IN_RESULTS");
                echo "\">
\t\t\t  <div class=\"input-group-btn\">
\t\t\t\t<button class=\"btn btn-default\" type=\"submit\" value=\"";
                // line 26
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "</button>
\t\t\t  </div>
\t\t\t</div>
\t\t   </fieldset>\t
\t\t  </form>
\t\t</div>
\t\t";
            }
            // line 33
            echo "\t</div>
\t
\t<div class=\"col-md-8\">
\t\t<div class=\"pull-right\">
\t\t <ul class=\"pagination pagination-sm hidden-xs\">
\t\t\t <li class=\"active\"><a>";
            // line 38
            echo ($context["SEARCH_MATCHES"] ?? null);
            echo "</a></li>
\t\t\t";
            // line 39
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 40
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 40)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 41
                echo "\t\t\t";
            } else {
                // line 42
                echo "\t\t\t\t<li class=\"active\"><a>";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "</a></li>\t
\t\t\t";
            }
            // line 44
            echo "\t\t\t";
            if (($context["U_MARK_ALL_READ"] ?? null)) {
                // line 45
                echo "\t\t\t\t<li><a href=\"";
                echo ($context["U_MARK_ALL_READ"] ?? null);
                echo "\" class=\"mark-read\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL_READ");
                echo "</a></li>
\t\t\t";
            }
            // line 47
            echo "\t\t </ul>
\t\t
\t\t<div class=\"visible-xs\"> 
\t\t\t  <div class=\"clearfix\"> 
\t\t\t\t<ul class=\"pagination pagination-sm\">
\t\t\t\t <li><a class=\"pagination-trigger\" data-placement=\"top\">";
            // line 52
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "</a></li>
\t\t\t\t <li class=\"active\"><a>";
            // line 53
            echo ($context["SEARCH_MATCHES"] ?? null);
            echo "</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t   </div>
   </div>
 </div>
";
        }
        // line 61
        echo "
";
        // line 62
        if (($context["S_SHOW_TOPICS"] ?? null)) {
            // line 63
            echo "\t";
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "searchresults", array()))) {
                // line 64
                echo "\t<div class=\"panel panel-forum\">
\t<div class=\"panel-heading\">
\t <i class=\"fa fa-bolt\"></i>&nbsp;";
                // line 66
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                echo "
\t</div>
\t<div class=\"panel-inner\">
    <table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th data-class=\"expand\">";
                // line 72
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
                echo "</th>
\t\t\t<th class=\"large110\" data-hide=\"phone\">";
                // line 73
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_POSTS_STATISTICS");
                echo "</th>
\t\t\t<th class=\"large21\" data-hide=\"phone\">";
                // line 74
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "</th>
\t\t</tr>
\t</thead>\t\t
\t<tbody>
\t";
                // line 78
                ob_start();
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_TOPIC_LOCKED");
                $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
                $context['definition']->set('VAR', $value);
                // line 79
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "searchresults", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                    // line 80
                    echo "\t\t";
                    // line 81
                    echo "\t\t<tr>
\t\t\t<td>
\t\t\t";
                    // line 83
                    if (($this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG", array()) && ($context["S_TOPIC_ICONS"] ?? null))) {
                        echo "<i class=\"topic-icon\" style=\"background-image: url(";
                        echo ($context["T_ICONS_PATH"] ?? null);
                        echo $this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG", array());
                        echo "); background-repeat: no-repeat;\" title=\"";
                        echo $this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG_ALT", array());
                        echo "\"></i>";
                    }
                    // line 84
                    echo "\t\t\t<span class=\"icon-wrapper\">
\t\t\t\t<i class=\"row-icon-font icon-moon-default2";
                    // line 85
                    if (($this->getAttribute($context["searchresults"], "S_TOPIC_TYPE", array()) == 2)) {
                        echo " icon-moon-voice2";
                    } elseif (($this->getAttribute($context["searchresults"], "S_TOPIC_TYPE", array()) == 3)) {
                        echo " icon-moon-podcast2";
                    } elseif (($this->getAttribute($context["searchresults"], "S_TOPIC_TYPE", array()) == 1)) {
                        echo " icon-moon-pushpin2";
                    } elseif ($this->getAttribute($context["searchresults"], "S_HAS_POLL", array())) {
                        echo " icon-moon-poll";
                    }
                    if ($this->getAttribute($context["searchresults"], "S_UNREAD_TOPIC", array())) {
                        echo " forum-unread";
                    } else {
                        echo " forum-read";
                    }
                    echo "\" title=\"";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_FOLDER_IMG_ALT", array());
                    echo "\"></i>
\t\t\t</span>
\t\t\t\t<i class=\"row-icon-font-mini";
                    // line 87
                    if (($this->getAttribute($context["searchresults"], "TOPIC_TYPE", array()) == $this->getAttribute(($context["definition"] ?? null), "VAR", array()))) {
                        echo " fa fa-lock forumview-lock";
                    }
                    echo "\" title=\"";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG_ALT", array());
                    echo "\"></i>
\t\t\t<span class=\"desc-wrapper\">\t
\t\t\t";
                    // line 89
                    // line 90
                    echo "\t\t\t\t";
                    if (($this->getAttribute($context["searchresults"], "S_UNREAD_TOPIC", array()) &&  !($context["S_IS_BOT"] ?? null))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_NEWEST_POST", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_FIRST_UNREAD");
                        echo "\"><i class=\"fa fa-asterisk\"></i></a>";
                    }
                    // line 91
                    echo "\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", array());
                    echo "</a> ";
                    if ($this->getAttribute($context["searchresults"], "ATTACH_ICON_IMG", array())) {
                        echo "<i class=\"fa fa-paperclip fa-flip-horizontal\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACH_FORUM");
                        echo "\"></i>";
                    }
                    // line 92
                    echo "\t\t\t\t";
                    if (($this->getAttribute($context["searchresults"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["searchresults"], "S_POSTS_UNAPPROVED", array()))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_QUEUE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_ROW_NOT_APPROVED");
                        echo "\"><i class=\"fa fa-question-circle\"></i></a>";
                    }
                    // line 93
                    echo "\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_TOPIC_DELETED", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_QUEUE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_DELETED");
                        echo "\"><i class=\"fa fa-trash-o text-danger\"></i></a>";
                    }
                    // line 94
                    echo "\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_TOPIC_REPORTED", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_REPORT", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_ROW_REPORTED");
                        echo "\"><i class=\"fa fa-exclamation-circle text-danger\"></i></a>";
                    }
                    echo "<br />
\t\t\t\t
\t\t\t\t";
                    // line 96
                    if (twig_length_filter($this->env, $this->getAttribute($context["searchresults"], "pagination", array()))) {
                        // line 97
                        echo "\t\t\t\t    <ul class=\"pagination pagination-forum pagination-xs pull-right hidden-sm hidden-xs\">
\t\t\t\t\t\t";
                        // line 98
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["searchresults"], "pagination", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                            // line 99
                            echo "\t\t\t\t\t\t ";
                            if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                                // line 100
                                echo "\t\t\t\t\t\t ";
                            } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                                echo "<li class=\"active\">";
                                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                echo "</li>
\t\t\t\t\t\t ";
                            } elseif ($this->getAttribute(                            // line 101
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                                echo "<li class=\"ellipsis\"><a>";
                                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                                echo "</a></li>
\t\t\t\t\t\t ";
                            } elseif ($this->getAttribute(                            // line 102
$context["pagination"], "S_IS_NEXT", array())) {
                                // line 103
                                echo "\t\t\t\t\t\t";
                            } else {
                                // line 104
                                echo "\t\t\t\t\t\t <li><a href=\"";
                                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                                echo "\">";
                                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                echo "</a></li>
\t\t\t\t\t\t";
                            }
                            // line 106
                            echo "\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 107
                        echo "\t\t\t\t\t</ul>\t\t
\t\t\t    ";
                    }
                    // line 109
                    echo "\t\t\t\t";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo "&nbsp;";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_AUTHOR_FULL", array());
                    echo "&nbsp;&#45;&nbsp;<small>";
                    echo $this->getAttribute($context["searchresults"], "FIRST_POST_TIME", array());
                    echo "</small>
\t\t\t\t";
                    // line 110
                    if ( !$this->getAttribute($context["searchresults"], "S_TOPIC_GLOBAL", array())) {
                        echo "<i class=\"fa fa-comments\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                        echo "&nbsp;<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", array());
                        echo "\">";
                        echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", array());
                        echo "</a>";
                    } else {
                        echo "&nbsp;&#40;";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GLOBAL");
                        echo "&#41;";
                    }
                    // line 111
                    echo "\t\t\t";
                    // line 112
                    echo "\t\t\t</span>
\t\t\t</td>
\t\t\t<td class=\"stats-col\"><span class=\"stats-wrapper\">";
                    // line 114
                    echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                    echo "&nbsp;";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                    echo "<br />&nbsp;";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", array());
                    echo "&nbsp;";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
                    echo "</span></td>
\t\t\t<td class=\"center\">";
                    // line 115
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo "&nbsp;";
                    echo $this->getAttribute($context["searchresults"], "LAST_POST_AUTHOR_FULL", array());
                    echo "
\t\t\t";
                    // line 116
                    if ( !($context["S_IS_BOT"] ?? null)) {
                        echo "<a rel=\"tooltip\" data-placement=\"right\" data-original-title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUMLIST_LASTPOST");
                        echo "\" href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_LAST_POST", array());
                        echo "\"><i class=\"mobile-post fa fa-sign-out\"></i></a>";
                    }
                    // line 117
                    echo "\t\t\t<br /><small>";
                    echo $this->getAttribute($context["searchresults"], "LAST_POST_TIME", array());
                    echo "</small>
\t\t\t</td>
\t\t</tr>
\t\t";
                    // line 120
                    // line 121
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "\t\t </tbody>
\t</table>
\t</div>
    </div>
\t
\t";
            } else {
                // line 128
                echo "\t<div class=\"alert alert-info fade in\">
       <button data-dismiss=\"alert\" class=\"close\" type=\"button\" aria-hidden=\"true\"><i class=\"awe-remove-circle\"></i></button>
       <i class=\"fa fa-warning\"></i> <strong>";
                // line 130
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFO_BOX");
                echo "</strong>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_SEARCH_RESULTS");
                echo "
    </div> 
\t";
            }
            // line 133
            echo "
";
        } else {
            // line 135
            echo "
";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "searchresults", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                // line 137
                // line 138
                echo "<div class=\"clearfix\">
\t<div class=\"well well-sm\">
\t";
                // line 140
                if ($this->getAttribute($context["searchresults"], "S_IGNORE_POST", array())) {
                    // line 141
                    echo "\t\t<div class=\"postbody\">
\t\t\t";
                    // line 142
                    echo $this->getAttribute($context["searchresults"], "L_IGNORE_POST", array());
                    echo "
\t\t</div>
\t";
                } else {
                    // line 145
                    echo "\t\t<div class=\"pull-left\">
\t\t\t<h4><a href=\"";
                    // line 146
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "POST_SUBJECT", array());
                    echo "</a></h4>
\t\t";
                    // line 147
                    echo "\t
\t\t   <span class=\"text-muted\"><i class=\"fa fa-user\"></i>&nbsp;";
                    // line 148
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo "&nbsp;";
                    echo $this->getAttribute($context["searchresults"], "POST_AUTHOR_FULL", array());
                    echo "&nbsp;&#166;&nbsp;<i class=\"fa fa-clock-o\"></i>&nbsp;";
                    echo $this->getAttribute($context["searchresults"], "POST_DATE", array());
                    echo "&nbsp;&#166;</span> 
\t\t";
                    // line 149
                    if ($this->getAttribute($context["searchresults"], "FORUM_TITLE", array())) {
                        // line 150
                        echo "           <span class=\"text-muted\"><i class=\"fa fa-folder\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo "&nbsp;<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", array());
                        echo "\">";
                        echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", array());
                        echo "</a>&nbsp;&#166;&nbsp;<i class=\"fa fa-folder-open\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo "&nbsp;<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                        echo "\">";
                        echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", array());
                        echo "</a>&nbsp;&#166;</span> 
\t\t\t";
                    } else {
                        // line 152
                        echo "\t\t\t<span class=\"text-muted\"><i class=\"fa fa-plus\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GLOBAL");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo "&nbsp;<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                        echo "\">";
                        echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", array());
                        echo "</a>&nbsp;&#166;</span> 
\t\t\t";
                    }
                    // line 154
                    echo "\t\t\t<span class=\"text-muted\"><i class=\"fa fa-comments\"></i>&nbsp;";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "&nbsp;<strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                    echo "</strong>&nbsp;&#166;&nbsp;<i class=\"fa fa-eye\"></i>&nbsp;";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "&nbsp;<strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", array());
                    echo "</strong></span> 
\t\t";
                    // line 155
                    // line 156
                    echo "\t\t</div>
\t\t<div class=\"space10\"></div>
\t\t\t<div class=\"content\"><p>";
                    // line 158
                    echo $this->getAttribute($context["searchresults"], "MESSAGE", array());
                    echo "</p></div>
\t";
                }
                // line 160
                echo "
\t";
                // line 161
                if ( !$this->getAttribute($context["searchresults"], "S_IGNORE_POST", array())) {
                    // line 162
                    echo "\t<div class=\"clearfix\">
\t\t<div class=\"pull-right\"><a href=\"";
                    // line 163
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO_POST");
                    echo "</a></div>
\t</div>
\t";
                }
                // line 166
                echo "    </div>
\t</div>
\t";
                // line 168
                // line 169
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 170
                echo "\t<div class=\"alert alert-info fade in\">
       <button data-dismiss=\"alert\" class=\"close\" type=\"button\" aria-hidden=\"true\"><i class=\"awe-remove-circle\"></i></button>
       <i class=\"fa fa-warning\"></i><strong>";
                // line 172
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFO_BOX");
                echo "</strong>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_SEARCH_RESULTS");
                echo "
    </div> 
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 176
        echo "

<div class=\"row\">
";
        // line 179
        if (((((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "searchresults", array()))) || ($context["PAGE_NUMBER"] ?? null)) || ($context["S_SELECT_SORT_KEY"] ?? null)) || ($context["S_SELECT_SORT_DAYS"] ?? null))) {
            echo "  
<div class=\"col-md-8 col-md-push-4\">
  <div class=\"clearfix\"> 
\t    <ul class=\"pagination pagination-sm hidden-xs pull-right\">
\t\t\t";
            // line 183
            if ((($context["S_SELECT_SORT_DAYS"] ?? null) || ($context["S_SELECT_SORT_KEY"] ?? null))) {
                // line 184
                echo "\t\t\t <li><a title=\"\" data-original-title=\"\" href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
                echo "</a></li>
\t\t\t";
            }
            // line 186
            echo "\t\t\t <li class=\"active\"><a>";
            echo ($context["SEARCH_MATCHES"] ?? null);
            echo "</a></li>
\t\t\t";
            // line 187
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 188
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 188)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 189
                echo "\t\t\t";
            } else {
                // line 190
                echo "\t\t\t\t<li class=\"active\"><a>";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "</a></li>\t
\t\t\t";
            }
            // line 192
            echo "\t\t\t";
            if (($context["U_MARK_ALL_READ"] ?? null)) {
                // line 193
                echo "\t\t\t\t<li><a href=\"";
                echo ($context["U_MARK_ALL_READ"] ?? null);
                echo "\" class=\"mark-read\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL_READ");
                echo "</a></li>
\t\t\t";
            }
            // line 195
            echo "\t\t</ul>
\t
\t\t<div class=\"visible-xs pull-right\"> 
\t\t  <div class=\"clearfix\"> 
\t\t\t <ul class=\"pagination pagination-sm\">
\t\t\t\t";
            // line 200
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 201
                echo "\t\t\t\t\t";
                $location = "pagination_mobile.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination_mobile.html", "search_results.html", 201)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 202
                echo "\t\t\t\t";
            } else {
                // line 203
                echo "\t\t\t\t\t<li class=\"active\"><a>";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "</a></li>\t
\t\t\t\t";
            }
            // line 205
            echo "\t\t\t</ul>
\t\t  </div>
\t   </div>
   </div>
 </div>  
";
        }
        // line 211
        echo "
<div class=\"col-md-4 col-md-pull-8\">
";
        // line 213
        $location = "jumpbox_options.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox_options.html", "search_results.html", 213)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 214
        echo "</div>

</div>

";
        // line 218
        $location = "jump_links.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jump_links.html", "search_results.html", 218)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 219
        echo "
";
        // line 220
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "searchresults", array())) && (($context["S_SELECT_SORT_DAYS"] ?? null) || ($context["S_SELECT_SORT_KEY"] ?? null)))) {
            // line 221
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_SEARCH_ACTION"] ?? null);
            echo "\">
\t\t";
            // line 222
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "search_results.html", 222)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 223
            echo "\t</form>
";
        }
        // line 225
        echo "
";
        // line 226
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_results.html", 226)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  792 => 226,  789 => 225,  785 => 223,  773 => 222,  768 => 221,  766 => 220,  763 => 219,  751 => 218,  745 => 214,  733 => 213,  729 => 211,  721 => 205,  715 => 203,  712 => 202,  699 => 201,  697 => 200,  690 => 195,  682 => 193,  679 => 192,  673 => 190,  670 => 189,  657 => 188,  655 => 187,  650 => 186,  644 => 184,  642 => 183,  635 => 179,  630 => 176,  618 => 172,  614 => 170,  609 => 169,  608 => 168,  604 => 166,  596 => 163,  593 => 162,  591 => 161,  588 => 160,  583 => 158,  579 => 156,  578 => 155,  565 => 154,  554 => 152,  536 => 150,  534 => 149,  526 => 148,  523 => 147,  517 => 146,  514 => 145,  508 => 142,  505 => 141,  503 => 140,  499 => 138,  498 => 137,  493 => 136,  490 => 135,  486 => 133,  478 => 130,  474 => 128,  466 => 122,  460 => 121,  459 => 120,  452 => 117,  444 => 116,  438 => 115,  428 => 114,  424 => 112,  422 => 111,  408 => 110,  399 => 109,  395 => 107,  389 => 106,  381 => 104,  378 => 103,  376 => 102,  370 => 101,  363 => 100,  360 => 99,  356 => 98,  353 => 97,  351 => 96,  339 => 94,  330 => 93,  321 => 92,  310 => 91,  301 => 90,  300 => 89,  291 => 87,  271 => 85,  268 => 84,  259 => 83,  255 => 81,  253 => 80,  248 => 79,  243 => 78,  236 => 74,  232 => 73,  228 => 72,  219 => 66,  215 => 64,  212 => 63,  210 => 62,  207 => 61,  196 => 53,  192 => 52,  185 => 47,  177 => 45,  174 => 44,  168 => 42,  165 => 41,  152 => 40,  150 => 39,  146 => 38,  139 => 33,  127 => 26,  122 => 24,  115 => 20,  112 => 19,  110 => 18,  106 => 16,  104 => 15,  101 => 14,  100 => 13,  97 => 12,  87 => 10,  76 => 8,  74 => 7,  71 => 6,  65 => 5,  56 => 4,  47 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "search_results.html", "");
    }
}
