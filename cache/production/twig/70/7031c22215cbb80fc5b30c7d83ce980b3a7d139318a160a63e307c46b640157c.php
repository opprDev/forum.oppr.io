<?php

/* viewtopic_body.html */
class __TwigTemplate_624408f329542dc61e192c0e1b7951daef7a7d521822fe2dfa559e5beb66399f extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"side-segment\"><h3>";
        // line 3
        echo "<a href=\"";
        echo ($context["U_VIEW_TOPIC"] ?? null);
        echo "\">";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "</a>";
        echo "</h3></div>
<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the topic body -->
";
        // line 5
        if (($context["FORUM_DESC"] ?? null)) {
            echo "<div style=\"display: none;\">";
            echo ($context["FORUM_DESC"] ?? null);
            echo "<br /></div>";
        }
        // line 6
        echo "\t
";
        // line 7
        // line 8
        echo "
";
        // line 9
        if (($context["MODERATORS"] ?? null)) {
            // line 10
            echo "<p>
\t<strong>";
            // line 11
            if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATORS");
            }
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong>&nbsp;";
            echo ($context["MODERATORS"] ?? null);
            echo "
</p>
";
        }
        // line 14
        echo "
";
        // line 15
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 16
            echo "<div class=\"alert alert-info fade in\">
\t<button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t";
            // line 18
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 19
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\"><i class=\"fa fa-link fa-rotate-90\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 20
                echo " 
\t\t<strong>";
                // line 21
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong>&nbsp;";
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 23
            echo "</div>
";
        }
        // line 25
        echo "
<div class=\"row\">
<div class=\"col-md-4 col-xs-6\">
";
        // line 28
        if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
            // line 29
            echo "  <div class=\"pull-left\">
\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 30
            echo ($context["S_SEARCHBOX_ACTION"] ?? null);
            echo "\">
\t <fieldset>
\t<div class=\"input-group input-group-sm\">
      <input type=\"text\" class=\"form-control\" name=\"keywords\" id=\"search_keywords\" value=\"\" placeholder=\"";
            // line 33
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_TOPIC");
            echo "\">
      <div class=\"input-group-btn\">
        <button class=\"btn btn-default\" type=\"submit\" value=\"";
            // line 35
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "\"><span class=\"hidden-xs\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span><i class=\"visible-xs fa fa-search fa-btn-fx\"></i></button>
\t  </div>
    </div>
\t ";
            // line 38
            echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
            echo "
\t</fieldset>
    </form>
   </div>
";
        }
        // line 43
        echo "</div>

<div class=\"col-md-8\">
  <div class=\"pull-right\">\t 
     <ul class=\"pagination pagination-sm hidden-xs\">
\t\t <li class=\"active\"><a>";
        // line 48
        echo ($context["TOTAL_POSTS"] ?? null);
        echo "</a></li>
\t\t ";
        // line 49
        if ((($context["U_VIEW_UNREAD_POST"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            echo "<li><a href=\"";
            echo ($context["U_VIEW_UNREAD_POST"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_UNREAD_POST");
            echo "</a></li>";
        }
        // line 50
        echo "\t\t";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 51
            echo "\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "viewtopic_body.html", 51)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 52
            echo "\t\t";
        } else {
            // line 53
            echo "\t\t\t<li class=\"active\"><a>";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "</a></li>\t
\t\t";
        }
        // line 55
        echo "     </ul>
\t
\t<div class=\"visible-xs\"> 
     <ul class=\"pagination pagination-sm\">
\t";
        // line 59
        if (((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())) || ($context["TOTAL_POSTS"] ?? null)) || ($context["TOTAL_TOPICS"] ?? null))) {
            // line 60
            echo "\t";
            if ((($context["TOTAL_POSTS"] ?? null) &&  !($context["NEWEST_USER"] ?? null))) {
                echo "<li class=\"active\"><a>";
                echo ($context["TOTAL_POSTS"] ?? null);
                echo "</a></li>";
            } elseif ((($context["TOTAL_TOPICS"] ?? null) &&  !($context["NEWEST_USER"] ?? null))) {
                echo "<li class=\"active\"><a>";
                echo ($context["TOTAL_TOPICS"] ?? null);
                echo "</a></li>";
            }
            // line 61
            echo "\t";
        }
        // line 62
        echo "\t</ul>
\t</div>
  </div>
</div> 

</div>

";
        // line 69
        // line 70
        echo "<div class=\"clearfix\">
    <div class=\"pull-left\">
   \t";
        // line 72
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 73
            echo "\t ";
            // line 74
            echo "\t";
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 75
                echo "     <a class=\"btn btn-danger\" href=\"";
                echo ($context["U_POST_REPLY_TOPIC"] ?? null);
                echo "\" role=\"button\"><i class=\"fa fa-lock\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_LOCKED_SHORT");
                echo "</a>
\t";
            } else {
                // line 77
                echo "\t <a class=\"btn btn-default btn-load\" href=\"";
                echo ($context["U_POST_REPLY_TOPIC"] ?? null);
                echo "\" role=\"button\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING");
                echo "&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\"><i class=\"fa fa-plus\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLY");
                echo "</a>
    ";
            }
            // line 79
            echo "\t ";
            // line 80
            echo "\t";
        }
        // line 81
        echo "   </div>
   <div class=\"pull-right\">
    ";
        // line 83
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 83)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 84
        echo "   </div>
</div>
";
        // line 86
        // line 87
        echo "
<div class=\"space10\"></div>
 <div class=\"space10\"></div>

";
        // line 91
        // line 92
        echo " 
";
        // line 93
        if (($context["S_HAS_POLL"] ?? null)) {
            // line 94
            echo "<form method=\"post\" action=\"";
            echo ($context["S_POLL_ACTION"] ?? null);
            echo "\" data-ajax=\"vote_poll\" class=\"topic_poll\">
<fieldset>
<div class=\"panel panel-default panel-poll\">
 <div class=\"panel-heading\">
    <h3>";
            // line 98
            echo ($context["POLL_QUESTION"] ?? null);
            echo "</h3>
\t";
            // line 99
            if ((($context["S_CAN_VOTE"] ?? null) && ($context["L_POLL_LENGTH"] ?? null))) {
                // line 100
                echo "\t<div class=\"alert alert-info fade in\">
     <i class=\"fa fa-bar-chart-o\"></i>&nbsp;";
                // line 101
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_LENGTH");
                echo "
    </div>
\t";
            }
            // line 104
            echo " </div>
<div class=\"panel-body\">
<div class=\"inner\">
";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "poll_option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 108
                // line 109
                echo "<div class=\"clearfix";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo " voted";
                }
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_MOST_VOTES", array())) {
                    echo " most-votes";
                }
                echo "\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo " title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-poll-option-id=\"";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                echo "\">
<div class=\"pull-left\">
";
                // line 111
                if (($context["S_CAN_VOTE"] ?? null)) {
                    // line 112
                    echo " <label for=\"vote_";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\">";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                    echo "</label>
";
                } else {
                    // line 114
                    echo " ";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                    echo "
";
                }
                // line 116
                echo "
<div class=\"poll_option_select pull-left\">
";
                // line 118
                if (($context["S_CAN_VOTE"] ?? null)) {
                    // line 119
                    if (($context["S_IS_MULTI_CHOICE"] ?? null)) {
                        // line 120
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />
";
                    } else {
                        // line 122
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                }
                // line 124
                echo "</div>
</div>
   <div class=\"poll_option_percent";
                // line 126
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo " pull-right\">
    <span class=\"badge";
                // line 127
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo " badge-info";
                }
                echo "\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo " title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo ">";
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array()) == 0)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_VOTES");
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array());
                }
                echo "</span>
   </div>
<div class=\"space-poll\"></div>   
<div class=\"resultbar";
                // line 130
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo " progress progress-fix clearfix\">
 <div role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar progress-bar-striped";
                // line 131
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 20)) {
                    echo " pollbar1 progress-bar-danger";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 40)) {
                    echo " pollbar2 progress-bar-warning";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 60)) {
                    echo " pollbar3 progress-bar-info";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 80)) {
                    echo " pollbar4 progress-bar-primary";
                } else {
                    echo " pollbar5 progress-bar-success active";
                }
                echo "\" style=\"width:";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT", array());
                echo ";min-width:2em;\">";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT", array());
                echo "</div>
</div>
</div>
";
                // line 134
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "</div>
</div>
<div class=\"panel-footer\">
  <div class=\"clearfix\">
    <ul class=\"list-unstyled pull-left\">
\t";
            // line 141
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                // line 142
                echo "    <li class=\"poll_view_results\"><a href=\"";
                echo ($context["U_VIEW_RESULTS"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_RESULTS");
                echo "</a></li>
\t";
            }
            // line 144
            echo "\t<li class=\"poll_total_votes";
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                echo " hidden";
            }
            echo "\">
\t <span class=\"resultbar\">";
            // line 145
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_VOTES");
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "&nbsp;<span class=\"poll_total_vote_cnt\">";
            echo ($context["TOTAL_VOTES"] ?? null);
            echo "</span></span>
\t</li>
\t";
            // line 147
            if (($context["S_CAN_VOTE"] ?? null)) {
                // line 148
                echo "\t<li class=\"poll_max_votes\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAX_VOTES");
                echo "</li>
\t";
            }
            // line 150
            echo "\t</ul>
\t <div class=\"vote-submitted hidden\">&nbsp;<span class=\"label label-success\">";
            // line 151
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VOTE_SUBMITTED");
            echo "</span></div>
\t";
            // line 152
            if (($context["S_CAN_VOTE"] ?? null)) {
                // line 153
                echo "\t<div class=\"poll_vote pull-right\">
\t <div class=\"resultbar\"><input type=\"submit\" name=\"update\" value=\"";
                // line 154
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT_VOTE");
                echo "\" class=\"btn btn-default btn-poll\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CASTING_VOTE");
                echo "\" autocomplete=\"off\" /></div>
\t</div>
\t";
            }
            // line 157
            echo "  </div>
</div>
    ";
            // line 159
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t ";
            // line 160
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
</div>
</fieldset>
</form>
";
        }
        // line 165
        // line 166
        echo "
";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "postrow", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 168
            // line 169
            echo "  ";
            if ($this->getAttribute($context["postrow"], "S_FIRST_UNREAD", array())) {
                // line 170
                echo "   <a id=\"unread\" class=\"anchor\"";
                if (($context["S_UNREAD_VIEW"] ?? null)) {
                    echo " data-url=\"";
                    echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
                    echo "\"";
                }
                echo "></a>
  ";
            }
            // line 172
            echo "<div id=\"p";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\" class=\"clearfix\">\t
    ";
            // line 173
            if ($this->getAttribute($context["postrow"], "S_POST_DELETED", array())) {
                // line 174
                echo "\t <div class=\"ignore alert alert-default\" id=\"post_hidden";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\"";
                if ( !$this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                    echo " style=\"display: none;\"";
                }
                echo ">
\t  ";
                // line 175
                echo $this->getAttribute($context["postrow"], "L_POST_DELETED_MESSAGE", array());
                echo "<br />
\t  <strong>";
                // line 176
                echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                echo "</strong>
\t </div>
\t";
            } elseif ($this->getAttribute(            // line 178
$context["postrow"], "S_IGNORE_POST", array())) {
                // line 179
                echo "\t <div class=\"ignore alert alert-warning\" id=\"post_hidden";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\"";
                if ( !$this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                    echo " style=\"display: none;\"";
                }
                echo ">
\t\t";
                // line 180
                echo $this->getAttribute($context["postrow"], "L_IGNORE_POST", array());
                echo "<br />
\t\t<strong>";
                // line 181
                echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                echo "</strong>
\t </div>
\t";
            }
            // line 184
            echo "\t
 <article ";
            // line 185
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                echo "style=\"display: none;\"";
            }
            echo ">
  <div class=\"panel";
            // line 186
            if (((($context["MINI_PROFILE_POSITION"] ?? null) == "alternate") && ($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 1))) {
                echo " alt-odd";
            }
            echo " forum-answer";
            if ($this->getAttribute($context["postrow"], "S_ONLINE", array())) {
                echo " mobile-online";
            }
            echo "\">
    <div class=\"panel-heading\">
\t <div class=\"clearfix\">
         <div id=\"profile";
            // line 189
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">
\t\t\t<div class=\"avatar-over";
            // line 190
            if (((($context["MINI_PROFILE_POSITION"] ?? null) == "right") || ((($context["MINI_PROFILE_POSITION"] ?? null) == "alternate") && ($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 0)))) {
                echo " pull-right";
            } else {
                echo " pull-left";
            }
            echo "\">
\t\t\t\t";
            // line 191
            if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", array())) {
                // line 192
                echo "\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                    echo "<a href=\"javascript:void(0)\" data-toggle=\"modal\" data-target=\"#mini";
                    echo $this->getAttribute($context["postrow"], "POST_ID", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_MINI_PROFILE");
                    echo "\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    echo "</a>";
                } else {
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                }
                // line 193
                echo "\t\t\t\t";
            } else {
                // line 194
                echo "\t\t\t\t\t<a href=\"javascript:void(0)\" data-toggle=\"modal\" data-target=\"#mini";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_MINI_PROFILE");
                echo "\"><img src=\"";
                echo ($context["T_THEME_PATH"] ?? null);
                echo "/images/no_avatar.gif\" alt=\"\"></a>
\t\t\t\t";
            }
            // line 196
            echo "\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "S_ONLINE", array())) {
                echo "<span class=\"status\"></span>";
            }
            // line 197
            echo "\t\t\t</div>
         </div>
\t\t<div class=\"side-segment\"><h3 style=\"border-bottom: 4px solid #e5e5e5;\">";
            // line 199
            if ($this->getAttribute($context["postrow"], "POST_ICON_IMG", array())) {
                echo "<img class=\"post-icon\" src=\"";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_HEIGHT", array());
                echo "\" alt=\"\"/>";
            }
            echo "<a href=\"#p";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">";
            echo $this->getAttribute($context["postrow"], "POST_SUBJECT", array());
            echo "</a><span class=\"pull-right post-id hidden-xs\"><a href=\"";
            echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST");
            echo "\">&#35;";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "</a></span></h3></div>    
\t\t<div class=\"clearfix\">
\t\t<div class=\"text-muted";
            // line 201
            if (((($context["MINI_PROFILE_POSITION"] ?? null) == "alternate") && ($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 1))) {
                echo " alt-odd-time";
            }
            echo " ";
            if (((($context["MINI_PROFILE_POSITION"] ?? null) == "right") || ((($context["MINI_PROFILE_POSITION"] ?? null) == "alternate") && ($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 0)))) {
                echo " pull-right prof-right";
            } else {
                echo " pull-left";
            }
            echo "\">
\t\t";
            // line 202
            // line 203
            echo "\t\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BY");
            if ( !$this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                echo "&nbsp;";
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            } else {
                echo "&nbsp;";
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            }
            echo "<span class=\"hidden-xs\">&nbsp;&#45;&nbsp;<i class=\"fa fa-clock-o\"></i>&nbsp;";
            echo $this->getAttribute($context["postrow"], "POST_DATE", array());
            echo "</span>\t
\t\t";
            // line 204
            // line 205
            echo "\t\t</div>
\t\t<div class=\"";
            // line 206
            if (((($context["MINI_PROFILE_POSITION"] ?? null) == "right") || ((($context["MINI_PROFILE_POSITION"] ?? null) == "alternate") && ($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 0)))) {
                echo "pull-left";
            } else {
                echo "pull-right";
            }
            echo "\">
\t\t<div role=\"toolbar\" class=\"btn-toolbar\">
\t\t";
            // line 208
            // line 209
            echo "\t\t";
            // line 210
            echo "\t\t 
\t\t    ";
            // line 211
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_REGISTERED_USER"] ?? null))) {
                // line 212
                echo "\t\t\t";
                $value = ((((($this->getAttribute($context["postrow"], "U_EDIT", array()) || $this->getAttribute($context["postrow"], "U_DELETE", array())) || $this->getAttribute($context["postrow"], "U_REPORT", array())) || $this->getAttribute($context["postrow"], "U_WARN", array())) || $this->getAttribute($context["postrow"], "U_INFO", array())) || $this->getAttribute($context["postrow"], "U_QUOTE", array()));
                $context['definition']->set('SHOW_POST_BUTTONS', $value);
                // line 213
                echo "\t\t\t";
                if ($this->getAttribute(($context["definition"] ?? null), "SHOW_POST_BUTTONS", array())) {
                    // line 214
                    echo "                <div class=\"btn-group btn-group-sm\" role=\"group\">
\t\t\t\t  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-cog\"></i>&nbsp;<i class=\"fa fa-level-down\"></i></button>
\t\t\t\t <ul class=\"dropdown-menu";
                    // line 216
                    if (((($context["MINI_PROFILE_POSITION"] ?? null) == "right") || ((($context["MINI_PROFILE_POSITION"] ?? null) == "alternate") && ($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 0)))) {
                        echo " dropdown-menu-left";
                    } else {
                        echo " dropdown-menu-right";
                    }
                    echo "\" role=\"menu\">
\t\t\t\t  ";
                    // line 217
                    // line 218
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_QUOTE", array())) {
                        echo "<li class=\"visible-xs\"><a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_QUOTE", array());
                        echo "\" title=\"\" role=\"button\"><i class=\"fa fa-comments\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUOTE");
                        echo "</a></li>";
                    }
                    // line 219
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_EDIT", array())) {
                        echo "<li><a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_EDIT", array());
                        echo "\" title=\"\" role=\"button\" class=\"qlr-trigger\"><i class=\"fa fa-pencil\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_POST");
                        echo "</a></li>";
                    }
                    // line 220
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_DELETE", array())) {
                        echo "<li><a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_DELETE", array());
                        echo "\" title=\"\" role=\"button\"><i class=\"fa fa-times\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST");
                        echo "</a></li>";
                    }
                    // line 221
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_REPORT", array())) {
                        echo "<li><a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_REPORT", array());
                        echo "\" title=\"\" role=\"button\"><i class=\"fa fa-exclamation-circle\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_POST");
                        echo "</a></li>";
                    }
                    // line 222
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_WARN", array())) {
                        echo "<li><a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_WARN", array());
                        echo "\" title=\"\" role=\"button\"><i class=\"fa fa-minus-circle\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARN_USER");
                        echo "</a></li>";
                    }
                    // line 223
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_INFO", array())) {
                        echo "<li><a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_INFO", array());
                        echo "\" title=\"\" role=\"button\"><i class=\"fa fa-info-circle\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
                        echo "</a></li>";
                    }
                    // line 224
                    echo "\t\t\t\t  ";
                    // line 225
                    echo "\t\t\t\t </ul>
\t\t\t\t</div>
\t\t\t\t";
                    // line 227
                    if ($this->getAttribute($context["postrow"], "U_QUOTE", array())) {
                        // line 228
                        echo "                <div class=\"btn-group btn-group-sm hidden-xs visible-sm visible-md visible-lg\" role=\"group\">
                 <a class=\"btn btn-default btn-sm\" href=\"";
                        // line 229
                        echo $this->getAttribute($context["postrow"], "U_QUOTE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLY_WITH_QUOTE");
                        echo "\" role=\"button\"><i class=\"fa fa-comments\"></i></a>
                </div>
\t\t\t\t";
                    }
                    // line 232
                    echo "\t\t\t";
                }
                // line 233
                echo "\t\t    ";
            }
            // line 234
            echo "\t\t 
\t\t";
            // line 235
            // line 236
            echo "\t\t</div>
\t\t</div>
\t\t</div>  
\t\t
\t </div>
\t</div>
\t\t\t
    <div class=\"panel-body\">
        <div class=\"clearfix\">
\t\t\t<div class=\"postbody\">
                <div id=\"post_content";
            // line 246
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">
\t\t\t\t";
            // line 247
            // line 248
            echo "\t\t\t\t\t <span class=\"post-date pull-left visible-xs\">&#45;&nbsp;<i class=\"fa fa-clock-o\"></i>&nbsp;";
            echo $this->getAttribute($context["postrow"], "POST_DATE", array());
            echo "</span>
\t\t\t\t\t <span class=\"post-id pull-right visible-xs\"><a href=\"";
            // line 249
            echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST");
            echo "\">&#35;";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "</a></span>
\t\t\t\t";
            // line 250
            // line 251
            echo "\t\t        
\t\t\t\t\t";
            // line 252
            if ($this->getAttribute($context["postrow"], "S_POST_UNAPPROVED", array())) {
                // line 253
                echo "\t\t\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t\t\t<div class=\"alert alert-warning fade in\">
\t\t\t\t\t\t\t<button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t\t\t\t\t<i class=\"fa fa-warning\"></i><strong>&nbsp;";
                // line 256
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_UNAPPROVED_ACTION");
                echo "</strong>
\t\t\t\t\t\t\t <input class=\"btn btn-danger btn-sm\" type=\"submit\" value=\"";
                // line 257
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISAPPROVE");
                echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t\t\t <input class=\"btn btn-success btn-sm\" type=\"submit\" value=\"";
                // line 258
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("APPROVE");
                echo "\" name=\"action[approve]\" />
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 259
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" />
\t\t\t\t\t\t\t";
                // line 260
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t";
            } elseif ($this->getAttribute(            // line 263
$context["postrow"], "S_POST_DELETED", array())) {
                // line 264
                echo "\t\t\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t\t\t<div class=\"alert alert-warning fade in\">
\t\t\t\t\t\t\t<button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t\t\t\t\t<i class=\"fa fa-warning\"></i><strong>&nbsp;";
                // line 267
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_DELETED_ACTION");
                echo "</strong>
\t\t\t\t\t\t\t";
                // line 268
                if ($this->getAttribute($context["postrow"], "S_DELETE_PERMANENT", array())) {
                    // line 269
                    echo "\t\t\t\t\t\t\t <input class=\"btn btn-danger btn-sm\" type=\"submit\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                    echo "\" name=\"action[delete]\" />
\t\t\t\t\t\t\t";
                }
                // line 270
                echo " 
\t\t\t\t\t\t\t <input class=\"btn btn-success btn-sm\" type=\"submit\" value=\"";
                // line 271
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE");
                echo "\" name=\"action[restore]\" />
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 272
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" />
\t\t\t\t\t\t\t";
                // line 273
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t";
            }
            // line 277
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 278
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                // line 279
                echo "\t\t\t\t\t<div style=\"margin-top:20px;\" class=\"alert alert-danger fade in\">
\t\t\t\t\t\t<button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t\t\t\t<i class=\"fa fa-warning\"></i>
\t\t\t\t\t\t<a href=\"";
                // line 282
                echo $this->getAttribute($context["postrow"], "U_MCP_REPORT", array());
                echo "\"><strong>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 285
            echo "\t\t\t\t\t
\t\t\t\t\t<span class=\"hidden hook-bfr-message\"></span>
\t\t\t\t\t<div class=\"content\">";
            // line 287
            echo $this->getAttribute($context["postrow"], "MESSAGE", array());
            echo "</div>
\t\t\t\t\t
\t\t\t\t\t";
            // line 289
            if ($this->getAttribute($context["postrow"], "S_HAS_ATTACHMENTS", array())) {
                // line 290
                echo "\t\t\t\t\t\t<div class=\"attachbox\">
\t\t\t\t\t\t  <h5>";
                // line 291
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACHMENTS");
                echo "</h5>
\t\t\t\t\t\t\t";
                // line 292
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 293
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 295
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 296
            // line 297
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "S_DISPLAY_NOTICE", array())) {
                echo "<div class=\"rules\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DOWNLOAD_NOTICE");
                echo "</div>";
            }
            // line 298
            echo "\t\t\t\t\t";
            if ((($this->getAttribute($context["postrow"], "EDITED_MESSAGE", array()) || $this->getAttribute($context["postrow"], "EDIT_REASON", array())) || $this->getAttribute($context["postrow"], "BUMPED_MESSAGE", array()))) {
                // line 299
                echo "\t\t\t\t\t\t<div class=\"notice text-muted\">
\t\t\t\t\t\t <small>";
                // line 300
                echo $this->getAttribute($context["postrow"], "EDITED_MESSAGE", array());
                echo "</small>
\t\t\t\t\t\t ";
                // line 301
                if ($this->getAttribute($context["postrow"], "EDIT_REASON", array())) {
                    echo "<small><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REASON");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong>&nbsp;";
                    echo $this->getAttribute($context["postrow"], "EDIT_REASON", array());
                    echo "</small>";
                }
                // line 302
                echo "\t\t\t\t\t\t <div><small>";
                echo $this->getAttribute($context["postrow"], "BUMPED_MESSAGE", array());
                echo "</small></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 305
            echo "\t\t\t\t\t";
            // line 306
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "SIGNATURE", array())) {
                // line 307
                echo "\t\t\t\t\t <div class=\"clearfix\"></div>
\t\t\t\t\t <p class=\"separator text-center hidden-xs\"><i class=\"fa fa-ellipsis-h fa-2x\"></i></p>
\t\t\t\t\t <div id=\"sig";
                // line 309
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" class=\"hidden-xs post-signature\">";
                echo $this->getAttribute($context["postrow"], "SIGNATURE", array());
                echo "</div>
\t\t\t\t\t";
            }
            // line 310
            echo "\t
                </div>
\t\t\t\t";
            // line 312
            // line 313
            echo "\t\t\t</div>
        </div>
    </div>

\t";
            // line 317
            if (($this->getAttribute($context["postrow"], "S_LAST_ROW", array()) && ($context["S_QUICK_REPLY"] ?? null))) {
                // line 318
                echo "\t <div class=\"panel-footer\">
\t\t <div class=\"clearfix\">
            <div class=\"text-center\">
\t\t\t<div id=\"hidden-div\">
             <button id=\"show_button\" class=\"btn btn-primary btn-sm collapsed\" data-toggle=\"collapse\" data-target=\".quick-reply\"><i class=\"glyphicon glyphicon-edit\"></i> ";
                // line 322
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICKREPLY");
                echo "</a>
            </div>
\t\t\t</div>
            <div class=\"text-center\">
                <div class=\"quick-reply collapse\">
\t\t\t\t\t";
                // line 327
                if (($context["S_SNAPPY"] ?? null)) {
                    $location = "@sitesplat_snappy/snappy_quickreply_editor.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("@sitesplat_snappy/snappy_quickreply_editor.html", "viewtopic_body.html", 327)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                } else {
                    $location = "quickreply_editor.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 327)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                }
                // line 328
                echo "                </div>
            </div>
          </div>
\t </div>
\t ";
            }
            // line 333
            echo "\t ";
            // line 334
            echo "  </div>
  
 </article>
 ";
            // line 337
            echo "\t
 
 <!-- /.MODAL PROFILE POSTER STARTS HERE -->
    <div class=\"modal fade\" id=\"mini";
            // line 340
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t <div class=\"modal-dialog\">
\t  <div class=\"modal-content\">
\t\t<div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t<h4 class=\"modal-title\">";
            // line 345
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_MINI_PROFILE");
            echo "</h4>
\t\t</div>
\t\t<div class=\"modal-body\">
\t\t\t<div class=\"row profile-data\">
\t\t\t<!-- Left Side Start -->
\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-3 col-xs-12 text-center\">
\t\t\t\t    <!-- Profile Avatar Start -->
\t\t\t\t\t<div class=\"profile-avatar\">
\t\t\t\t\t\t";
            // line 353
            // line 354
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", array())) {
                // line 355
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                    echo "\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    echo "</a>";
                } else {
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                }
                // line 356
                echo "\t\t\t\t\t    ";
            } else {
                // line 357
                echo "\t\t\t\t\t\t<img src=\"";
                echo ($context["T_THEME_PATH"] ?? null);
                echo "/images/no_avatar.gif\" alt=\"\">
\t\t\t\t\t\t";
            }
            // line 359
            echo "\t\t\t\t\t\t";
            echo "\t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Profile Avatar End -->  
                ";
            // line 362
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 363
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) && $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                // line 364
                echo "\t\t\t\t\t<div class=\"profile-rank text-center\">";
                echo $this->getAttribute($context["postrow"], "RANK_IMG", array());
                echo "</div>
\t\t\t\t\t";
            }
            // line 365
            echo "\t
\t\t\t\t";
            // line 366
            echo "\t
\t\t\t\t\t";
            // line 367
            if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                // line 368
                echo "\t\t\t\t\t<a class=\"btn btn-sm btn-default\" title=\"\" href=\"";
                echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_MINI_PROFILE_VIEW_FULL");
                echo "</a>
\t\t\t\t\t";
            }
            // line 370
            echo "\t\t\t\t</div>
\t\t\t\t<!-- Left Side End -->
\t\t\t\t<!-- Right Side Start -->
\t\t\t\t<div class=\"col-lg-8 col-md-8 col-sm-9 col-xs-12\">
\t\t\t\t <h3>";
            // line 374
            if ( !$this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            } else {
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            }
            echo "</h3>\t\t\t\t\t\t 
\t\t\t\t\t<ul class=\"icon-list list-unstyled\">
\t\t\t\t\t ";
            // line 376
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) && $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                echo "<li><i class=\"fa fa-sitemap\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "&nbsp;";
                echo $this->getAttribute($context["postrow"], "RANK_TITLE", array());
                echo "</li>";
            }
            // line 377
            echo "\t\t\t\t\t ";
            if (($this->getAttribute($context["postrow"], "POSTER_POSTS", array()) != "")) {
                echo "<li><i class=\"fa fa-comments\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "&nbsp;";
                echo $this->getAttribute($context["postrow"], "POSTER_POSTS", array());
                echo "</li>";
            }
            // line 378
            echo "\t\t\t\t\t ";
            if ($this->getAttribute($context["postrow"], "POSTER_JOINED", array())) {
                echo "<li><i class=\"fa fa-calendar\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "&nbsp;";
                echo $this->getAttribute($context["postrow"], "POSTER_JOINED", array());
                echo "</li>";
            }
            // line 379
            echo "\t\t\t\t\t <li><i class=\"fa fa-retweet\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_STATUS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "&nbsp;";
            if (($this->getAttribute($context["postrow"], "S_ONLINE", array()) &&  !$this->getAttribute($context["postrow"], "S_IGNORE_POST", array()))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLINE");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OFF_LINE");
            }
            echo "</li>
                     ";
            // line 380
            if ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", array())) {
                echo "<li><i class=\"fa fa-bolt\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNINGS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "&nbsp;";
                echo $this->getAttribute($context["postrow"], "POSTER_WARNINGS", array());
                echo "</li>";
            }
            // line 381
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t ";
            // line 382
            if ($this->getAttribute($context["postrow"], "S_PROFILE_FIELD1", array())) {
                // line 383
                echo "\t\t\t\t\t <!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t\t\t <li><i class=\"fa fa-star\"></i> 
\t\t\t\t\t ";
                // line 385
                echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_NAME", array());
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "&nbsp;";
                echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_VALUE", array());
                echo "
\t\t\t\t\t </li>
\t\t\t\t\t ";
            }
            // line 388
            echo "
\t\t\t\t\t";
            // line 389
            // line 390
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 391
                echo "\t\t\t\t\t\t";
                if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                    // line 392
                    echo "\t\t\t\t\t\t <li class=\"profile-custom-field profile-";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_IDENT", array());
                    echo "\"><i class=\"fa fa-star\"></i>&nbsp;";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                    echo "</li>
\t\t\t\t\t\t";
                }
                // line 394
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 395
            echo "\t\t\t\t\t";
            // line 396
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t <!-- Right Side End -->
            </div>
\t\t</div>
\t\t<div class=\"modal-footer\">
\t\t    ";
            // line 402
            // line 403
            echo "\t\t\t ";
            if (( !($context["S_IS_BOT"] ?? null) && twig_length_filter($this->env, $this->getAttribute($context["postrow"], "contact", array())))) {
                // line 404
                echo "\t\t\t<div class=\"clearfix\">
\t\t\t\t<ul class=\"mini-profile-contact\">
\t\t\t\t";
                // line 406
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "contact", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 407
                    echo "\t\t\t\t ";
                    $context["REMAINDER"] = ($this->getAttribute($context["contact"], "S_ROW_COUNT", array()) % 4);
                    // line 408
                    echo "\t\t\t\t";
                    $value = ((($context["REMAINDER"] ?? null) == 3) || ($this->getAttribute($context["contact"], "S_LAST_ROW", array()) && ($this->getAttribute($context["contact"], "S_NUM_ROWS", array()) < 4)));
                    $context['definition']->set('S_LAST_CELL', $value);
                    // line 409
                    echo "\t\t\t\t";
                    if ((($context["REMAINDER"] ?? null) == 0)) {
                        // line 410
                        echo "\t\t\t\t";
                    }
                    // line 411
                    echo "\t\t\t\t<li><a class=\"default-contact\" href=\"";
                    if ($this->getAttribute($context["contact"], "U_CONTACT", array())) {
                        echo $this->getAttribute($context["contact"], "U_CONTACT", array());
                    } else {
                        echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                    }
                    echo "\" title=\"";
                    echo $this->getAttribute($context["contact"], "NAME", array());
                    echo "\"";
                    if (($this->getAttribute($context["contact"], "ID", array()) == "jabber")) {
                        echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                    }
                    echo ">
\t\t\t\t <i class=\"icon-moon-";
                    // line 412
                    echo $this->getAttribute($context["contact"], "ID", array());
                    echo "\"></i>
\t\t\t\t </a>
\t\t\t\t</li>
\t\t\t\t";
                    // line 415
                    if (((($context["REMAINDER"] ?? null) == 3) || $this->getAttribute($context["contact"], "S_LAST_ROW", array()))) {
                        // line 416
                        echo "\t\t\t\t";
                    }
                    // line 417
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 418
                echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
            }
            // line 421
            echo "\t\t\t";
            // line 422
            echo "\t\t</div>
\t   </div><!-- /.modal-content -->
\t </div><!-- /.modal-dialog -->
\t</div><!-- /.modal -->
 <!-- /.MODAL PROFILE POSTER STOPS HERE -->
 
</div>
";
            // line 429
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 431
        echo "

<div class=\"clearfix\">
 ";
        // line 434
        // line 435
        echo "  <div class=\"pull-left\">
   \t";
        // line 436
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 437
            echo "\t ";
            // line 438
            echo "\t";
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 439
                echo "     <a class=\"btn btn-danger\" href=\"";
                echo ($context["U_POST_REPLY_TOPIC"] ?? null);
                echo "\" role=\"button\"><i class=\"fa fa-lock\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_LOCKED_SHORT");
                echo "</a>
\t";
            } else {
                // line 441
                echo "\t <a class=\"btn btn-default btn-load\" href=\"";
                echo ($context["U_POST_REPLY_TOPIC"] ?? null);
                echo "\" role=\"button\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING");
                echo "&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\"><i class=\"fa fa-plus\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLY");
                echo "</a>
    ";
            }
            // line 443
            echo "\t ";
            // line 444
            echo "\t";
        }
        // line 445
        echo "  </div>

 <div class=\"pull-right\">
     <ul class=\"pagination pagination-sm hidden-xs\">
\t ";
        // line 449
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "quickmod", array()))) {
            echo "<li><a title=\"\" href=\"javascript:void(0);\" data-target=\".sorting-topic-mod\" data-toggle=\"collapse\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR_OPTIONS");
            echo "</a></li>";
        }
        // line 450
        echo "\t";
        if (((($context["S_NUM_POSTS"] ?? null) > 1) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())))) {
            echo "<li><a title=\"\" href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
            echo "</a></li>";
        }
        echo "\t\t\t\t
     ";
        // line 451
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 452
            echo "\t  <li class=\"active\"><a>";
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "</a></li>
\t\t\t";
            // line 453
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "viewtopic_body.html", 453)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 454
            echo "\t\t";
        } else {
            // line 455
            echo "\t\t\t<li class=\"active\"><a>";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "</a></li>\t
\t ";
        }
        // line 457
        echo "     </ul>
\t 
\t<div class=\"visible-xs\"> 
\t<ul class=\"pagination pagination-sm\">
\t ";
        // line 461
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "quickmod", array()))) {
            echo "<li><a title=\"\" href=\"javascript:void(0);\" data-target=\".sorting-topic-mod\" data-toggle=\"collapse\"><i class=\"fa fa-gavel\"></i></a></li>";
        }
        // line 462
        echo "\t ";
        if (((($context["S_NUM_POSTS"] ?? null) > 1) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())))) {
            echo "<li><a title=\"\" href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\"><i class=\"fa fa-cog\"></i></a></li>";
        }
        echo "\t\t\t\t
\t <li><a class=\"pagination-trigger\" data-placement=\"top\">";
        // line 463
        echo ($context["PAGE_NUMBER"] ?? null);
        echo "</a></li>
\t <li class=\"active\"><a>";
        // line 464
        echo ($context["TOTAL_POSTS"] ?? null);
        echo "</a></li>
\t</ul>
\t</div>
 </div>
</div>

<div class=\"clearfix\">
   <div class=\"pull-right\">
\t<div class=\"visible-xs\"> 
\t <ul class=\"pagination pagination-sm\">
\t ";
        // line 474
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 475
            echo "\t\t\t";
            $location = "pagination_mobile.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination_mobile.html", "viewtopic_body.html", 475)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 476
            echo "\t\t";
        } else {
            // line 477
            echo "\t\t\t<li class=\"active\"><a>";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "</a></li>\t
\t ";
        }
        // line 479
        echo "\t </ul>
\t</div>
   </div>
</div>

";
        // line 484
        $location = "jump_links.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jump_links.html", "viewtopic_body.html", 484)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 485
        echo "<div class=\"space10\"></div>

\t";
        // line 487
        if ((((($context["S_NUM_POSTS"] ?? null) > 1) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 488
            echo "\t\t<form method=\"post\" action=\"";
            echo ($context["S_TOPIC_ACTION"] ?? null);
            echo "\">
\t\t";
            // line 489
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "viewtopic_body.html", 489)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 490
            echo "\t\t</form>
\t";
        }
        // line 492
        echo "
";
        // line 493
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "quickmod", array()))) {
            // line 494
            echo "\t<div class=\"controls-row\">
       <div class=\"sorting-topic-mod collapse\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-body\">
                   <div class=\"row\">
\t\t\t\t\t    <div class=\"col-md-6 col-sm-6\"> 
                         <label for=\"f\" accesskey=\"j\">";
            // line 500
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
                            <div class=\"control-row\">
                              ";
            // line 502
            $location = "jumpbox_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jumpbox_options.html", "viewtopic_body.html", 502)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 503
            echo "                            </div>
\t\t\t\t\t\t</div>
\t                    <div class=\"col-md-6 col-sm-6\"> 
\t\t\t\t\t\t <label for=\"quick-mod-select\">";
            // line 506
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_MOD");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
                          ";
            // line 507
            $location = "quickmod_tools.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickmod_tools.html", "viewtopic_body.html", 507)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 508
            echo "\t\t\t\t\t\t</div>
                    </div>
                </div>
\t\t\t</div>
\t\t</div>
\t</div> 
";
        }
        // line 515
        echo "
";
        // line 516
        // line 517
        echo "
";
        // line 518
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 519
            echo "<div class=\"row\">
";
            // line 520
            if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
                // line 521
                echo "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
<div class=\"panel panel-forum panel-whois\">
<div class=\"panel-heading\"><i class=\"fa fa-users\"></i> ";
                // line 523
                if (($context["U_VIEWONLINE"] ?? null)) {
                    echo "<a href=\"";
                    echo ($context["U_VIEWONLINE"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                }
                echo "</div>
 <div class=\"panel-body\">
\t<p>";
                // line 525
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "</p>
 </div> 
</div> 
</div> 
";
            }
            // line 530
            echo "
";
            // line 531
            if (($context["S_DISPLAY_POST_INFO"] ?? null)) {
                // line 532
                echo "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
<div class=\"panel panel-forum\">
<div class=\"panel-heading\"><i class=\"fa fa-bar-chart-o\"></i>&nbsp;";
                // line 534
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_PERMISSIONS");
                echo "</div>
  <div class=\"panel-body\">
\t<p>";
                // line 536
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "rules", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                    echo $this->getAttribute($context["rules"], "RULE", array());
                    echo "<br />";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</p>
  </div> 
</div> 
 </div>
";
            }
            // line 541
            echo "</div>
";
        }
        // line 543
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 543)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1741 => 543,  1737 => 541,  1721 => 536,  1716 => 534,  1712 => 532,  1710 => 531,  1707 => 530,  1699 => 525,  1686 => 523,  1682 => 521,  1680 => 520,  1677 => 519,  1675 => 518,  1672 => 517,  1671 => 516,  1668 => 515,  1659 => 508,  1647 => 507,  1642 => 506,  1637 => 503,  1625 => 502,  1619 => 500,  1611 => 494,  1609 => 493,  1606 => 492,  1602 => 490,  1590 => 489,  1585 => 488,  1583 => 487,  1579 => 485,  1567 => 484,  1560 => 479,  1554 => 477,  1551 => 476,  1538 => 475,  1536 => 474,  1523 => 464,  1519 => 463,  1512 => 462,  1508 => 461,  1502 => 457,  1496 => 455,  1493 => 454,  1481 => 453,  1476 => 452,  1474 => 451,  1465 => 450,  1459 => 449,  1453 => 445,  1450 => 444,  1448 => 443,  1438 => 441,  1430 => 439,  1427 => 438,  1425 => 437,  1423 => 436,  1420 => 435,  1419 => 434,  1414 => 431,  1401 => 429,  1392 => 422,  1390 => 421,  1385 => 418,  1379 => 417,  1376 => 416,  1374 => 415,  1368 => 412,  1353 => 411,  1350 => 410,  1347 => 409,  1343 => 408,  1340 => 407,  1336 => 406,  1332 => 404,  1329 => 403,  1328 => 402,  1320 => 396,  1318 => 395,  1312 => 394,  1301 => 392,  1298 => 391,  1293 => 390,  1292 => 389,  1289 => 388,  1280 => 385,  1276 => 383,  1274 => 382,  1271 => 381,  1262 => 380,  1250 => 379,  1240 => 378,  1230 => 377,  1221 => 376,  1212 => 374,  1206 => 370,  1198 => 368,  1196 => 367,  1193 => 366,  1190 => 365,  1184 => 364,  1182 => 363,  1179 => 362,  1173 => 359,  1167 => 357,  1164 => 356,  1153 => 355,  1150 => 354,  1149 => 353,  1138 => 345,  1130 => 340,  1125 => 337,  1120 => 334,  1118 => 333,  1111 => 328,  1085 => 327,  1077 => 322,  1071 => 318,  1069 => 317,  1063 => 313,  1062 => 312,  1058 => 310,  1051 => 309,  1047 => 307,  1044 => 306,  1042 => 305,  1035 => 302,  1026 => 301,  1022 => 300,  1019 => 299,  1016 => 298,  1009 => 297,  1008 => 296,  1005 => 295,  1001 => 293,  992 => 292,  988 => 291,  985 => 290,  983 => 289,  978 => 287,  974 => 285,  966 => 282,  961 => 279,  959 => 278,  956 => 277,  949 => 273,  945 => 272,  941 => 271,  938 => 270,  932 => 269,  930 => 268,  926 => 267,  919 => 264,  917 => 263,  911 => 260,  907 => 259,  903 => 258,  899 => 257,  895 => 256,  888 => 253,  886 => 252,  883 => 251,  882 => 250,  874 => 249,  869 => 248,  868 => 247,  864 => 246,  852 => 236,  851 => 235,  848 => 234,  845 => 233,  842 => 232,  834 => 229,  831 => 228,  829 => 227,  825 => 225,  823 => 224,  814 => 223,  805 => 222,  796 => 221,  787 => 220,  778 => 219,  769 => 218,  768 => 217,  760 => 216,  756 => 214,  753 => 213,  749 => 212,  747 => 211,  744 => 210,  742 => 209,  741 => 208,  732 => 206,  729 => 205,  728 => 204,  714 => 203,  713 => 202,  701 => 201,  677 => 199,  673 => 197,  668 => 196,  658 => 194,  655 => 193,  642 => 192,  640 => 191,  632 => 190,  628 => 189,  616 => 186,  610 => 185,  607 => 184,  601 => 181,  597 => 180,  588 => 179,  586 => 178,  581 => 176,  577 => 175,  568 => 174,  566 => 173,  561 => 172,  551 => 170,  548 => 169,  547 => 168,  530 => 167,  527 => 166,  526 => 165,  518 => 160,  514 => 159,  510 => 157,  502 => 154,  499 => 153,  497 => 152,  493 => 151,  490 => 150,  484 => 148,  482 => 147,  473 => 145,  466 => 144,  458 => 142,  456 => 141,  449 => 136,  444 => 134,  424 => 131,  418 => 130,  398 => 127,  392 => 126,  388 => 124,  376 => 122,  364 => 120,  362 => 119,  360 => 118,  356 => 116,  350 => 114,  342 => 112,  340 => 111,  321 => 109,  320 => 108,  316 => 107,  311 => 104,  305 => 101,  302 => 100,  300 => 99,  296 => 98,  288 => 94,  286 => 93,  283 => 92,  282 => 91,  276 => 87,  275 => 86,  271 => 84,  259 => 83,  255 => 81,  252 => 80,  250 => 79,  240 => 77,  232 => 75,  229 => 74,  227 => 73,  225 => 72,  221 => 70,  220 => 69,  211 => 62,  208 => 61,  197 => 60,  195 => 59,  189 => 55,  183 => 53,  180 => 52,  167 => 51,  164 => 50,  156 => 49,  152 => 48,  145 => 43,  137 => 38,  129 => 35,  124 => 33,  118 => 30,  115 => 29,  113 => 28,  108 => 25,  104 => 23,  96 => 21,  93 => 20,  85 => 19,  83 => 18,  79 => 16,  77 => 15,  74 => 14,  61 => 11,  58 => 10,  56 => 9,  53 => 8,  52 => 7,  49 => 6,  43 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "viewtopic_body.html", "");
    }
}
