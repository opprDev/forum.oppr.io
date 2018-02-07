<?php

/* viewforum_body.html */
class __TwigTemplate_6ebf62539ab80cb6466c61f4f335f14ed2f3f137588a6b728894bb9e692b391d extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "viewforum_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "<div class=\"side-segment\"><h3>";
        echo "<a href=\"";
        echo ($context["U_VIEW_FORUM"] ?? null);
        echo "\">";
        echo ($context["FORUM_NAME"] ?? null);
        echo "</a>";
        echo "</h3></div> 
";
        // line 5
        // line 6
        echo "
";
        // line 7
        if (((($context["FORUM_DESC"] ?? null) || ($context["MODERATORS"] ?? null)) || ($context["U_MCP"] ?? null))) {
            // line 8
            echo "<div>
\t<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the forum body -->
\t";
            // line 10
            if (($context["FORUM_DESC"] ?? null)) {
                echo "<div style=\"display: none;\">";
                echo ($context["FORUM_DESC"] ?? null);
                echo "<br /></div>";
            }
            // line 11
            echo "\t";
            if (($context["MODERATORS"] ?? null)) {
                echo "<p><strong>";
                if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATORS");
                }
                echo ":</strong> ";
                echo ($context["MODERATORS"] ?? null);
                echo "</p>";
            }
            // line 12
            echo "</div>
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
";
        // line 26
        if (($context["S_HAS_SUBFORUM"] ?? null)) {
            // line 27
            if (( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_FORUMS"] ?? null))) {
                // line 28
                echo "      <ul class=\"pagination pagination-sm pull-right\">
\t    <li><a href=\"";
                // line 29
                echo ($context["U_MARK_FORUMS"] ?? null);
                echo "\" class=\"mark-read\" data-ajax=\"mark_forums_read\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_SUBFORUMS_READ");
                echo "</a></li>
      </ul>
<div class=\"space10\"></div>
";
            }
            // line 33
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 33)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 35
        echo "
";
        // line 36
        if ((((($context["S_DISPLAY_POST_INFO"] ?? null) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) || ($context["TOTAL_POSTS"] ?? null)) || ($context["TOTAL_TOPICS"] ?? null))) {
            // line 37
            echo "<div class=\"row\"> 
   <div class=\"col-md-4 col-xs-7\">
\t";
            // line 39
            if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
                // line 40
                echo "\t<div class=\"pull-left\">
\t\t<form method=\"get\" id=\"topic-search\" action=\"";
                // line 41
                echo ($context["S_SEARCHBOX_ACTION"] ?? null);
                echo "\">
\t\t<fieldset>
\t\t <div class=\"input-group input-group-sm\">
\t\t   <input type=\"text\" class=\"form-control\" name=\"keywords\" id=\"search_keywords\" value=\"\" placeholder=\"";
                // line 44
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_FORUM");
                echo "\"/>
\t\t  <div class=\"input-group-btn\">
\t\t   <button class=\"btn btn-default\" type=\"submit\" value=\"";
                // line 46
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "\"><span class=\"hidden-xs\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "</span><i class=\"visible-xs fa fa-search fa-btn-fx\"></i></button>
\t\t  </div>
\t\t </div>
\t\t ";
                // line 49
                echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t</fieldset>
\t\t</form>
\t</div>
\t";
            }
            // line 54
            echo "  </div>
  
  <div class=\"col-md-8\">
   <div class=\"pull-right\">\t 
     <ul class=\"pagination pagination-sm hidden-xs\">
\t    ";
            // line 59
            if ((($context["U_WATCH_FORUM_LINK"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 60
                echo "\t\t  <li class=\"t-";
                if (($context["S_WATCHING_FORUM"] ?? null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\">
\t\t   <a class=\"t-icon\" href=\"";
                // line 61
                echo ($context["U_WATCH_FORUM_LINK"] ?? null);
                echo "\" title=\"";
                echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"t-";
                if ( !($context["S_WATCHING_FORUM"] ?? null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-url=\"";
                echo ($context["U_WATCH_FORUM_TOGGLE"] ?? null);
                echo "\"></a>
\t\t  </li>
\t\t";
            }
            // line 64
            echo "\t\t";
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", array())))) {
                echo "<li><a href=\"";
                echo ($context["U_MARK_TOPICS"] ?? null);
                echo "\" class=\"mark\" data-ajax=\"mark_topics_read\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_TOPICS_READ");
                echo "</a></li>";
            }
            // line 65
            echo "\t\t <li><a>";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "</a></li>
\t\t";
            // line 66
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 67
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 67)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 68
                echo "\t\t";
            } else {
                // line 69
                echo "\t\t\t<li class=\"active\"><a>";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "</a></li>\t
\t\t";
            }
            // line 71
            echo "     </ul>
\t
\t<div class=\"visible-xs\"> 
     <ul class=\"pagination pagination-sm\">
\t";
            // line 75
            if (((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())) || ($context["TOTAL_POSTS"] ?? null)) || ($context["TOTAL_TOPICS"] ?? null))) {
                // line 76
                echo "\t ";
                if ((($context["TOTAL_POSTS"] ?? null) &&  !($context["NEWEST_USER"] ?? null))) {
                    echo "<li class=\"active\"><a>";
                    echo ($context["TOTAL_POSTS"] ?? null);
                    echo "</a></li>";
                } elseif ((($context["TOTAL_TOPICS"] ?? null) &&  !($context["NEWEST_USER"] ?? null))) {
                    echo "<li class=\"active\"><a>";
                    echo ($context["TOTAL_TOPICS"] ?? null);
                    echo "</a></li>";
                }
                // line 77
                echo "\t";
            }
            // line 78
            echo "\t</ul>
\t</div>
   </div>
   </div>
   
</div>
";
        }
        // line 85
        echo "
";
        // line 86
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
            echo "  
<div class=\"clearfix\">
   <div class=\"pull-left\">
     ";
            // line 89
            // line 90
            echo "   ";
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 91
                echo "    <a href=\"";
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" role=\"button\" class=\"btn btn-danger\"><i class=\"fa fa-lock\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_LOCKED");
                echo "</a>
\t";
            } else {
                // line 93
                echo "\t<a href=\"";
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" role=\"button\" class=\"btn btn-default btn-load\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING");
                echo "&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\"><i class=\"fa fa-plus\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_TOPIC_NEW");
                echo "</a>
    ";
            }
            // line 95
            echo "\t ";
            // line 96
            echo "   </div>
</div>
";
        }
        // line 99
        echo "
   <div class=\"space10\"></div>
    <div class=\"space10\"></div>

";
        // line 103
        if (($context["S_NO_READ_ACCESS"] ?? null)) {
            // line 104
            echo "\t<div class=\"alert alert-danger fade in\">
\t\t<strong>";
            // line 105
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_READ_ACCESS");
            echo "</strong>
\t</div>\t
";
            // line 107
            if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 108
                echo "  <section class=\"panel-login panel-w-form login-full\">
            <div class=\"row\">
                ";
                // line 110
                if (($context["S_REGISTER_ENABLED"] ?? null)) {
                    // line 111
                    echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
                    // line 113
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CREATE_ACCOUNT");
                    echo "</span>
\t\t\t\t</div>
                    <p>";
                    // line 115
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_INFO");
                    echo "</p>
\t\t\t\t    <p><a href=\"";
                    // line 116
                    echo ($context["U_TERMS_USE"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TERMS_USE");
                    echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
                    echo ($context["U_PRIVACY"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVACY");
                    echo "</a></p>
\t\t\t\t\t<p><a href=\"";
                    // line 117
                    echo ($context["U_REGISTER"] ?? null);
                    echo "\" class=\"btn btn-default\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                    echo "</a></p>
                </div>
\t\t\t\t";
                } else {
                    // line 120
                    echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
                    // line 122
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CREATE_ACCOUNT_DISABLED");
                    echo "</span>
\t\t\t\t</div>
                    <p>";
                    // line 124
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTRATION_DISABLED");
                    echo "</p>
\t\t\t\t    <p><a href=\"";
                    // line 125
                    echo ($context["U_TERMS_USE"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TERMS_USE");
                    echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
                    echo ($context["U_PRIVACY"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVACY");
                    echo "</a></p>
\t\t\t\t\t<p><a href=\"mailto:";
                    // line 126
                    echo ($context["BOARD_EMAIL"] ?? null);
                    echo "?subject=Registrations Closed&body=Dear Admin, %0A%0AI Just wanted to let you know that the board registrations are closed. %0A%0AThis might be an error and I would like to register. %0A%0APlease let me know if this is possible.%0A%0AThanks!\" class=\"btn btn-default\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT_WEBMASTER");
                    echo "</a></p>
                </div>
\t\t\t\t";
                }
                // line 129
                echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
                // line 131
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SIGN_IN_ACCOUNT");
                echo "</span>
\t\t\t\t</div>
\t\t\t\t <form role=\"form\" method=\"post\" action=\"";
                // line 133
                echo ($context["S_LOGIN_ACTION"] ?? null);
                echo "\">
\t\t\t\t  <fieldset>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t <label class=\"sr-only\" for=\"username\">";
                // line 136
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label>
\t\t\t\t\t<div class=\"form-icon\">
\t\t\t\t\t <input type=\"text\" class=\"form-control input-lg\" name=\"username\" id=\"username\" placeholder=\"";
                // line 138
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
                echo "\">
\t\t\t\t\t <span class=\"fa fa-user login-form-icon\"></span>
\t\t\t\t\t</div> 
\t\t\t\t    </div> 
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t  <label class=\"sr-only\" for=\"password\">";
                // line 143
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label>
\t\t\t\t\t  <div class=\"form-icon\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control input-lg\" name=\"password\" id=\"password\" placeholder=\"";
                // line 145
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
                echo "\">
\t\t\t\t\t\t<span class=\"fa fa-lock login-form-icon\"></span>
\t\t\t\t\t  </div> 
\t\t\t\t\t</div>
\t\t\t\t <p>
\t\t\t\t    ";
                // line 150
                if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                    // line 151
                    echo "\t\t\t\t\t<div class=\"checkbox pull-right\">
\t\t\t\t\t  <label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\">";
                    // line 152
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_REMEMBER");
                    echo "</label>
\t\t\t\t\t</div>
\t\t\t\t    ";
                }
                // line 155
                echo "\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" name=\"login\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
                echo "\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING_LOG_IN");
                echo " <i class='fa-spin fa fa-spinner fa-lg'></i>\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_ME_IN");
                echo "</button>
\t\t\t\t\t";
                // line 156
                echo ($context["S_LOGIN_REDIRECT"] ?? null);
                echo "
\t\t\t\t  </p>
\t\t\t\t  </fieldset>
\t\t\t\t  </form>
\t\t\t    </div>  
            </div>
    </section>
";
            }
        }
        // line 165
        echo "

";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "topicrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
            // line 168
            echo "\t";
            if (( !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) &&  !$this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()))) {
                // line 169
                echo "\t</table>
\t</div>
\t</div>
\t";
            }
            // line 173
            echo "
\t";
            // line 174
            if (($this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()) ||  !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()))) {
                // line 175
                echo "\t<div class=\"panel panel-forum\">
\t<div class=\"panel-heading\">
\t ";
                // line 177
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTIVE_TOPICS");
                } elseif (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array()) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())))) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ANNOUNCEMENTS");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                }
                // line 178
                echo "\t</div>
\t<div class=\"panel-inner\">
\t<table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th data-class=\"expand\">";
                // line 183
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
                echo "</th>
\t\t\t<th class=\"large110\" data-hide=\"phone\">";
                // line 184
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_POSTS_STATISTICS");
                echo "</th>
\t\t\t<th class=\"large21\" data-hide=\"phone\">";
                // line 185
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "</th>
\t\t</tr>
\t</thead>\t\t
\t<tbody>
\t";
            }
            // line 190
            echo "\t    ";
            // line 191
            echo "\t\t<tr>
\t\t\t<td>
\t\t        ";
            // line 193
            if (($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array()) && ($context["S_TOPIC_ICONS"] ?? null))) {
                // line 194
                echo "\t\t\t\t<i class=\"topic-icon\" style=\"background-image: url(";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array());
                echo "); background-repeat: no-repeat;\" title=\"";
                echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
                echo "\"></i>
\t\t\t\t";
            }
            // line 196
            echo "\t\t\t\t<span class=\"icon-wrapper\">
\t\t\t    <i class=\"row-icon-font icon-moon-default2";
            // line 197
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " icon-moon-voice2";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " icon-moon-podcast2";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " icon-moon-pushpin2";
            }
            if ($this->getAttribute($context["topicrow"], "S_HAS_POLL", array())) {
                echo " icon-moon-poll";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_MOVED", array())) {
                echo " icon-moon-moved";
            }
            if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array())) {
                echo " forum-unread";
            } else {
                echo " forum-read";
            }
            echo "\" title=\"";
            echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
            echo "\"></i>
\t\t\t\t</span>
\t\t\t\t<i class=\"row-icon-font-mini";
            // line 199
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_LOCKED", array())) {
                echo " icon-moon-lock forumview-lock";
            }
            echo "\" title=\"";
            echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
            echo "\"></i>
\t\t\t  <div class=\"desc-wrapper\">
\t\t\t  ";
            // line 201
            // line 202
            echo "\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_FIRST_UNREAD");
                echo "\"><i class=\"topic-newest fa fa-asterisk\"></i></a>";
            }
            echo "<a href=\"";
            echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
            echo "\" class=\"topictitle\">&nbsp;";
            echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
            echo "</a>
\t\t\t\t";
            // line 203
            if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", array()))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_ROW_NOT_APPROVED");
                echo "\">&nbsp;<i class=\"fa fa-question-circle\"></i></a>";
            }
            // line 204
            echo "\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_ROW_REPORTED");
                echo "\">&nbsp;<i class=\"fa fa-exclamation-circle text-danger\"></i></a>";
            }
            // line 205
            echo "\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_DELETED", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_ROW_DELETED");
                echo "\">&nbsp;<i class=\"fa fa-exclamation-circle text-danger\"></i></a>";
            }
            echo "<br />
\t\t\t\t";
            // line 206
            if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", array()))) {
                // line 207
                echo "\t\t\t\t    <ul class=\"pagination pagination-forum pagination-xs pull-right hidden-sm hidden-xs\">
\t\t\t\t\t\t";
                // line 208
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    // line 209
                    echo "\t\t\t\t\t\t ";
                    if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                        // line 210
                        echo "\t\t\t\t\t\t ";
                    } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                        echo "<li class=\"active\">";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</li>
\t\t\t\t\t\t ";
                    } elseif ($this->getAttribute(                    // line 211
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                        echo "<li class=\"ellipsis\"><a>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                        echo "</a></li>
\t\t\t\t\t\t ";
                    } elseif ($this->getAttribute(                    // line 212
$context["pagination"], "S_IS_NEXT", array())) {
                        // line 213
                        echo "\t\t\t\t\t\t";
                    } else {
                        // line 214
                        echo "\t\t\t\t\t\t <li><a href=\"";
                        echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                        echo "\">";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</a></li>
\t\t\t\t\t\t";
                    }
                    // line 216
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 217
                echo "\t\t\t\t\t</ul>\t\t
\t\t\t    ";
            }
            // line 219
            echo "\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                echo "<i class=\"fa fa-paperclip fa-flip-horizontal\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACH_FORUM");
                echo "\"></i>";
            }
            // line 220
            echo "\t\t\t\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo "&nbsp;";
            echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
            echo " 
\t\t\t\t<small>&nbsp;&#45;&nbsp;";
            // line 221
            echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
            echo "</small>
\t\t\t\t";
            // line 222
            if (($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array()) && (($context["FORUM_ID"] ?? null) != $this->getAttribute($context["topicrow"], "FORUM_ID", array())))) {
                echo "<small>&nbsp;&#45;&nbsp;";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "&nbsp;<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "FORUM_NAME", array());
                echo "</a></small>";
            }
            // line 223
            echo "\t\t\t  ";
            echo "\t
\t\t\t  </div>
\t\t\t</td>
\t\t\t<td class=\"stats-col\">
\t\t\t <span class=\"stats-wrapper\">
\t\t\t ";
            // line 228
            echo $this->getAttribute($context["topicrow"], "REPLIES", array());
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
            echo "&nbsp;<br />";
            echo $this->getAttribute($context["topicrow"], "VIEWS", array());
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
            echo "
\t\t\t </span>
\t\t\t</td>
\t\t\t<td> 
\t\t\t<span class=\"last-wrapper text-overflow\">
\t\t\t";
            // line 233
            // line 234
            echo "\t\t\t ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo "&nbsp;";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
            echo "
\t\t\t ";
            // line 235
            if ( !($context["S_IS_BOT"] ?? null)) {
                echo "<a title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUMLIST_LASTPOST");
                echo "\" href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\"><i class=\"mobile-post fa fa-sign-out\"></i></a>";
            }
            // line 236
            echo "\t\t\t <br /><small>";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
            echo "</small>
\t\t\t</span>
\t\t\t</td>
\t\t</tr>
\t    ";
            // line 240
            // line 241
            echo "\t";
            if ($this->getAttribute($context["topicrow"], "S_LAST_ROW", array())) {
                // line 242
                echo "\t </tbody>
\t</table>
\t</div>
    </div>
\t";
            }
            // line 247
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 249
            echo "\t";
            if (($context["S_IS_POSTABLE"] ?? null)) {
                // line 250
                echo "\t<div class=\"well\">
\t\t<strong>";
                // line 251
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_TOPICS");
                echo "</strong>
\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "
";
        // line 256
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", array())) &&  !($context["S_DISPLAY_ACTIVE"] ?? null))) {
            // line 257
            echo "<div class=\"clearfix\">
 <div class=\"pull-left\">
";
            // line 259
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 260
                echo " ";
                // line 261
                if (($context["S_IS_LOCKED"] ?? null)) {
                    // line 262
                    echo "    <a href=\"";
                    echo ($context["U_POST_NEW_TOPIC"] ?? null);
                    echo "\" role=\"button\" class=\"btn btn-danger\"><i class=\"fa fa-lock\"></i>&nbsp;";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_LOCKED");
                    echo "</a>
\t";
                } else {
                    // line 264
                    echo "\t<a href=\"";
                    echo ($context["U_POST_NEW_TOPIC"] ?? null);
                    echo "\" role=\"button\" class=\"btn btn-default btn-load\" data-loading-text=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING");
                    echo "&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\"><i class=\"fa fa-plus\"></i>&nbsp;";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_TOPIC_NEW");
                    echo "</a>
";
                }
                // line 266
                echo " ";
            }
            // line 268
            echo "</div>

 <div class=\"pull-right\">
     <ul class=\"pagination pagination-sm hidden-xs\">
\t  <li><a href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\">";
            // line 272
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
            echo "</a></li>\t\t\t
      <li><a>";
            // line 273
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "</a></li>
\t\t";
            // line 274
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 275
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 275)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 276
                echo "\t\t";
            } else {
                // line 277
                echo "\t\t\t<li class=\"active\"><a>";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "</a></li>\t
\t\t";
            }
            // line 279
            echo "     </ul>
\t 
\t<div class=\"visible-xs\"> 
\t<ul class=\"pagination pagination-sm\">
\t   <li><a href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\"><i class=\"fa fa-cog\"></i></a></li>\t\t\t
       ";
            // line 284
            if ((($context["BASE_URL"] ?? null) && (($context["TOTAL_PAGES"] ?? null) > 6))) {
                // line 285
                echo "       <li><a class=\"pagination-trigger\" data-placement=\"top\">";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "</a></li>
\t   ";
            }
            // line 287
            echo "\t   <li class=\"active\"><a>";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "</a></li>
\t</ul>
\t</div>
 </div>
</div>

<div class=\"clearfix\">
   <div class=\"pull-right\">
\t<div class=\"visible-xs\"> 
\t <ul class=\"pagination pagination-sm\">
\t   ";
            // line 297
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 298
                echo "\t\t\t";
                $location = "pagination_mobile.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination_mobile.html", "viewforum_body.html", 298)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 299
                echo "\t\t";
            } else {
                // line 300
                echo "\t\t\t<li class=\"active\"><a>";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "</a></li>\t
\t\t";
            }
            // line 302
            echo "\t </ul>
\t</div>
   </div>
</div>\t
";
        }
        // line 307
        echo "\t
";
        // line 308
        $location = "jump_links.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jump_links.html", "viewforum_body.html", 308)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 309
        echo "<div class=\"space10\"></div>


    ";
        // line 312
        if ((($context["S_SELECT_SORT_DAYS"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 313
            echo "\t\t\t<form method=\"post\" action=\"";
            echo ($context["S_FORUM_ACTION"] ?? null);
            echo "\">
\t\t\t";
            // line 314
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "viewforum_body.html", 314)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 315
            echo "\t\t\t</form>
\t";
        }
        // line 317
        echo "
";
        // line 318
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 319
            echo "<div class=\"row\">
";
            // line 320
            if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
                // line 321
                echo "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
<div class=\"panel panel-forum panel-whois\">
<div class=\"panel-heading\">";
                // line 323
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
                // line 325
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "</p>
 </div> 
</div> 
</div> 
";
            }
            // line 330
            echo "
<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
<div class=\"panel panel-forum\">
<div class=\"panel-heading\">";
            // line 333
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_PERMISSIONS");
            echo "</div>
  <div class=\"panel-body\">
\t<p>";
            // line 335
            if (($context["S_DISPLAY_POST_INFO"] ?? null)) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "rules", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                    echo $this->getAttribute($context["rules"], "RULE", array());
                    echo "<br />";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOT_AVAILABLE");
            }
            echo "</p>
  </div> 
</div> 
 </div>
</div>
";
        }
        // line 341
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewforum_body.html", 341)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewforum_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1043 => 341,  1022 => 335,  1017 => 333,  1012 => 330,  1004 => 325,  991 => 323,  987 => 321,  985 => 320,  982 => 319,  980 => 318,  977 => 317,  973 => 315,  961 => 314,  956 => 313,  954 => 312,  949 => 309,  937 => 308,  934 => 307,  927 => 302,  921 => 300,  918 => 299,  905 => 298,  903 => 297,  889 => 287,  883 => 285,  881 => 284,  874 => 279,  868 => 277,  865 => 276,  852 => 275,  850 => 274,  846 => 273,  842 => 272,  836 => 268,  833 => 266,  823 => 264,  815 => 262,  813 => 261,  811 => 260,  809 => 259,  805 => 257,  803 => 256,  800 => 255,  790 => 251,  787 => 250,  784 => 249,  778 => 247,  771 => 242,  768 => 241,  767 => 240,  759 => 236,  751 => 235,  744 => 234,  743 => 233,  729 => 228,  721 => 223,  710 => 222,  706 => 221,  699 => 220,  692 => 219,  688 => 217,  682 => 216,  674 => 214,  671 => 213,  669 => 212,  663 => 211,  656 => 210,  653 => 209,  649 => 208,  646 => 207,  644 => 206,  633 => 205,  624 => 204,  616 => 203,  601 => 202,  600 => 201,  591 => 199,  565 => 197,  562 => 196,  553 => 194,  551 => 193,  547 => 191,  545 => 190,  537 => 185,  533 => 184,  529 => 183,  522 => 178,  514 => 177,  510 => 175,  508 => 174,  505 => 173,  499 => 169,  496 => 168,  491 => 167,  487 => 165,  475 => 156,  466 => 155,  460 => 152,  457 => 151,  455 => 150,  447 => 145,  441 => 143,  433 => 138,  427 => 136,  421 => 133,  416 => 131,  412 => 129,  404 => 126,  394 => 125,  390 => 124,  385 => 122,  381 => 120,  373 => 117,  363 => 116,  359 => 115,  354 => 113,  350 => 111,  348 => 110,  344 => 108,  342 => 107,  337 => 105,  334 => 104,  332 => 103,  326 => 99,  321 => 96,  319 => 95,  309 => 93,  301 => 91,  298 => 90,  297 => 89,  291 => 86,  288 => 85,  279 => 78,  276 => 77,  265 => 76,  263 => 75,  257 => 71,  251 => 69,  248 => 68,  235 => 67,  233 => 66,  228 => 65,  219 => 64,  203 => 61,  194 => 60,  192 => 59,  185 => 54,  177 => 49,  169 => 46,  164 => 44,  158 => 41,  155 => 40,  153 => 39,  149 => 37,  147 => 36,  144 => 35,  130 => 33,  121 => 29,  118 => 28,  116 => 27,  114 => 26,  111 => 25,  107 => 23,  99 => 21,  96 => 20,  88 => 19,  86 => 18,  82 => 16,  80 => 15,  77 => 14,  73 => 12,  60 => 11,  54 => 10,  50 => 8,  48 => 7,  45 => 6,  44 => 5,  35 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "viewforum_body.html", "");
    }
}
