<?php

/* posting_editor.html */
class __TwigTemplate_319fd1c66fb0ef1937ec3356cfb5a8a7fa9f66d9f7d94c70cbf06bb5351f8b32 extends Twig_Template
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
        echo "<fieldset>
\t";
        // line 2
        if (($context["ERROR"] ?? null)) {
            // line 3
            echo "\t<div class=\"space10\"></div>
\t <div class=\"space10\"></div>
\t<div class=\"alert alert-info fade in\">
       ";
            // line 6
            echo ($context["ERROR"] ?? null);
            echo "
    </div>
\t";
        }
        // line 9
        echo "
\t";
        // line 10
        if ((($context["S_SHOW_TOPIC_ICONS"] ?? null) || ($context["S_SHOW_PM_ICONS"] ?? null))) {
            // line 11
            echo "\t<div class=\"hidden-xs\">
\t <div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"icon\">";
            // line 13
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t <div class=\"controls controls-row\"> 
      <div class=\"radio\"><input type=\"radio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" tabindex=\"1\"><label for=\"icon\">";
            // line 15
            if (($context["S_SHOW_TOPIC_ICONS"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_TOPIC_ICON");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_PM_ICON");
            }
            echo "</label></div>
     ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "topic_icon", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                echo "<div class=\"radio\"><input type=\"radio\" name=\"icon\" id=\"icon-";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\" value=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\" ";
                echo $this->getAttribute($context["topic_icon"], "S_ICON_CHECKED", array());
                echo " tabindex=\"1\"><label for=\"icon-";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_HEIGHT", array());
                echo "\" alt=\"\" title=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_NAME", array());
                echo "\" /></label></div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t </div> 
\t </div>
\t</div>
\t";
        }
        // line 21
        echo "
\t";
        // line 22
        if (( !($context["S_PRIVMSGS"] ?? null) && ($context["S_DISPLAY_USERNAME"] ?? null))) {
            // line 23
            echo "\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"username\">";
            // line 24
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t<div class=\"controls controls-row\"> 
\t<div class=\"input-icon left\">
\t  <i class=\"fa fa-user\"></i>
       <input type=\"text\" class=\"form-control input-sm\" placeholder=\"\" tabindex=\"1\" name=\"username\" id=\"username\" value=\"";
            // line 28
            echo ($context["USERNAME"] ?? null);
            echo "\">
\t </div> 
\t</div> 
\t</div>
\t";
        }
        // line 33
        echo "
    ";
        // line 34
        // line 35
        echo "
\t";
        // line 36
        if (((($context["S_POST_ACTION"] ?? null) || ($context["S_PRIVMSGS"] ?? null)) || ($context["S_EDIT_DRAFT"] ?? null))) {
            // line 37
            echo "\t<div class=\"control-group\"> 
\t<label class=\"control-label\" for=\"subject\">";
            // line 38
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t<div class=\"row\">
\t <div class=\"";
            // line 40
            if (($context["S_EDIT_DRAFT"] ?? null)) {
                echo "col-md-12";
            } else {
                echo "col-xs-12 col-lg-8";
            }
            echo "\">
     ";
            // line 41
            echo "  
\t   <input type=\"text\" class=\"form-control input-sm\" placeholder=\"";
            // line 42
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "\" name=\"subject\" id=\"subject\" maxlength=\"";
            if (($context["S_NEW_MESSAGE"] ?? null)) {
                echo "100";
            } else {
                echo "124";
            }
            echo "\" tabindex=\"2\" value=\"";
            echo ($context["SUBJECT"] ?? null);
            echo ($context["DRAFT_SUBJECT"] ?? null);
            echo "\">
\t ";
            // line 43
            // line 44
            echo "\t </div> 
\t </div> 
\t </div>
\t ";
            // line 47
            if ((($context["CAPTCHA_TEMPLATE"] ?? null) && ($context["S_CONFIRM_CODE"] ?? null))) {
                // line 48
                echo "\t\t";
                $value = 3;
                $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
                // line 49
                echo "\t\t";
                $location = (("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . ""), "posting_editor.html", 49)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 50
                echo "\t ";
            }
            // line 51
            echo "\t";
        }
        // line 52
        echo "
    ";
        // line 53
        // line 54
        echo "\t
\t ";
        // line 55
        $location = "posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_buttons.html", "posting_editor.html", 55)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 56
        echo "
\t
\t <div class=\"space10\"></div>

 <div class=\"row\">
\t";
        // line 61
        // line 62
        echo "    <div class=\"";
        if (($context["S_EDIT_DRAFT"] ?? null)) {
            echo "col-md-12";
        } else {
            echo "col-md-8";
        }
        echo "\"> 
      <span id=\"dragNdrop\">
\t   <textarea class=\"form-control\" rows=\"10\" ";
        // line 64
        if (((($context["S_UCP_ACTION"] ?? null) &&  !($context["S_PRIVMSGS"] ?? null)) &&  !($context["S_EDIT_DRAFT"] ?? null))) {
            echo "name=\"signature\" id=\"signature\" ";
        } else {
            echo "name=\"message\" id=\"message\"";
        }
        echo " tabindex=\"4\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" placeholder=\"\" class=\"form-control\">";
        echo ($context["MESSAGE"] ?? null);
        echo ($context["DRAFT_MESSAGE"] ?? null);
        echo ($context["IMGUR_IMAGE"] ?? null);
        echo ($context["SIGNATURE"] ?? null);
        echo "</textarea>
\t  <span> 
\t</div>
\t";
        // line 67
        // line 68
        echo "
\t<div class=\"col-md-4\">
    ";
        // line 70
        echo "\t
\t\t
\t\t";
        // line 72
        if ((($context["S_SMILIES_ALLOWED"] ?? null) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "smiley", array())))) {
            // line 73
            echo "\t\t<strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SMILIES");
            echo "
\t\t  ";
            // line 74
            if ((($context["S_SHOW_SMILEY_LINK"] ?? null) && ($context["S_SMILIES_ALLOWED"] ?? null))) {
                // line 75
                echo "\t\t\t<a class=\"btn-link btn-xs\" href=\"";
                echo ($context["U_MORE_SMILIES"] ?? null);
                echo "\" onclick=\"popup(this.href, 450, 350, '_phpbbsmilies'); return false;\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MORE_SMILIES");
                echo "\"><i class=\"fa fa-plus\"></i></a>
\t\t  ";
            }
            // line 77
            echo "\t\t</strong><br />
\t\t\t";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "smiley", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                // line 79
                echo "\t\t\t\t<a href=\"#\" onclick=\"insert_text('";
                echo $this->getAttribute($context["smiley"], "A_SMILEY_CODE", array());
                echo "', true); return false;\"><img src=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_HEIGHT", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_CODE", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_DESC", array());
                echo "\" /></a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "\t\t";
        }
        // line 82
        echo "\t\t
\t<div class=\"hidden-xs\">\t
    ";
        // line 84
        // line 85
        echo "\t\t";
        if (($context["BBCODE_STATUS"] ?? null)) {
            // line 86
            echo "\t\t";
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "smiley", array()))) {
                echo "<hr />";
            }
            // line 87
            echo "\t\t";
            echo ($context["BBCODE_STATUS"] ?? null);
            echo "<br />
\t\t";
            // line 88
            if (($context["S_BBCODE_ALLOWED"] ?? null)) {
                // line 89
                echo "\t\t\t";
                echo ($context["IMG_STATUS"] ?? null);
                echo "<br />
\t\t\t";
                // line 90
                echo ($context["FLASH_STATUS"] ?? null);
                echo "<br />
\t\t\t";
                // line 91
                echo ($context["URL_STATUS"] ?? null);
                echo "<br />
\t\t";
            }
            // line 93
            echo "\t\t";
            echo ($context["SMILIES_STATUS"] ?? null);
            echo "
\t\t";
        }
        // line 95
        echo "\t\t";
        if ((($context["S_EDIT_DRAFT"] ?? null) || ($context["S_DISPLAY_REVIEW"] ?? null))) {
            // line 96
            echo "\t\t\t";
            if (($context["S_DISPLAY_REVIEW"] ?? null)) {
                echo "<hr />";
            }
            // line 97
            echo "\t\t\t";
            if (($context["S_EDIT_DRAFT"] ?? null)) {
                echo "<strong><a href=\"";
                echo ($context["S_UCP_ACTION"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK_TO_DRAFTS");
                echo "</a></strong>";
            }
            // line 98
            echo "\t\t\t";
            if (($context["S_DISPLAY_REVIEW"] ?? null)) {
                echo "<strong><a href=\"#topic-review\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REVIEW");
                echo "</a></strong>";
            }
            // line 99
            echo "\t\t";
        }
        // line 100
        echo "\t </div>
\t</div>
 </div>
</fieldset>


";
        // line 106
        if (($this->getAttribute(($context["definition"] ?? null), "EXTRA_POSTING_OPTIONS", array()) == 1)) {
            // line 107
            echo "
\t";
            // line 108
            if ( !($context["S_SHOW_DRAFTS"] ?? null)) {
                // line 109
                echo "\t</div>
\t";
            }
            // line 111
            echo "

\t";
            // line 113
            if (( !($context["S_SHOW_DRAFTS"] ?? null) && ( !$this->getAttribute(($context["definition"] ?? null), "SIG_EDIT", array()) == 1))) {
                // line 114
                echo "\t\t<fieldset class=\"form-actions\">
\t\t\t";
                // line 115
                echo ($context["S_HIDDEN_ADDRESS_FIELD"] ?? null);
                echo "
\t\t\t";
                // line 116
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t";
                // line 117
                // line 118
                echo "\t\t\t";
                if (($context["S_HAS_DRAFTS"] ?? null)) {
                    echo "<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING");
                    echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" accesskey=\"d\" tabindex=\"8\" name=\"load\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOAD_DRAFT");
                    echo "\" onclick=\"load_draft = true;\"><span class=\"hidden-xs\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOAD_DRAFT");
                    echo "</span><i class=\"visible-xs glyphicon glyphicon-floppy-open fa-btn-fx\"></i></button>";
                }
                // line 119
                echo "\t\t\t";
                if (($context["S_SAVE_ALLOWED"] ?? null)) {
                    echo "<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SAVING");
                    echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" accesskey=\"k\" tabindex=\"7\" name=\"save\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SAVE_DRAFT");
                    echo "\"><span class=\"hidden-xs\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SAVE_DRAFT");
                    echo "</span><i class=\"visible-xs glyphicon glyphicon-floppy-saved fa-btn-fx\"></i></button>";
                }
                // line 120
                echo "\t\t\t<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING");
                echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" tabindex=\"5\" name=\"preview\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PREVIEW");
                echo "\"";
                if ( !($context["S_PRIVMSGS"] ?? null)) {
                    echo " onclick=\"document.getElementById('postform').action += '#preview';\"";
                }
                echo " >";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PREVIEW");
                echo "</button>
\t\t\t<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                // line 121
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING");
                echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "</button>
\t\t</fieldset>
\t";
            }
            // line 124
            echo "\t
<div class=\"space10\"></div>
";
            // line 126
            if (($context["S_SHOW_ATTACH_BOX"] ?? null)) {
                // line 127
                echo "<script>
function addClass(e,s){e.classList?e.classList.add(s):e.className+=\" \"+s}function removeClass(e,s){e.classList?e.classList.remove(s):e.className=e.className.replace(new RegExp(\"(^|\\\\b)\"+s.split(\" \").join(\"|\")+\"(\\\\b|\$)\",\"gi\"),\" \")}function txtDropClicked(){removeClassesOnFocus(!1),addClass(document.getElementById(\"message\"),\"dropzone-wrap\"),addClass(document.getElementById(\"dragNdrop\"),\"dropzone-content\")}function removeClassesOnFocus(e){var s=e===!1?document.getElementById(\"message\"):e.target;removeClass(s,\"dropzone-wrap\"),removeClass(s.parentNode,\"dropzone-content\")}window.addEventListener(\"load\",function(){document.getElementById(\"ToggleTxTDrop\").addEventListener(\"click\",txtDropClicked),document.getElementById(\"message\").addEventListener(\"focus\",removeClassesOnFocus)});
</script>
";
            }
            // line 131
            echo "\t\t<div class=\"panel has-nav-tabs panel-default\"><!-- panel has-nav-tabs no-border with tab start tag here posting_layout.html -->
\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t<li class=\"";
            // line 133
            if (($context["IMGUR_DELETEHASH"] ?? null)) {
            } else {
                echo "active";
            }
            echo "\"><a data-toggle=\"tab\" href=\"#options-panel-below\"><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
            echo "</span></a></li>
\t\t\t\t";
            // line 134
            if (($context["S_SHOW_ATTACH_BOX"] ?? null)) {
                echo "<li class=\"\"><a data-toggle=\"tab\" href=\"#posting-attach-body-html\" id=\"ToggleTxTDrop\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_ATTACHMENT");
                echo "</span></a></li>";
            }
            // line 135
            echo "\t\t\t\t";
            if (((($context["SCRIPT_NAME"] ?? null) == "posting") && ($context["IN_IMGUR"] ?? null))) {
                echo "<li class=\"";
                if (($context["IMGUR_DELETEHASH"] ?? null)) {
                    echo "active";
                }
                echo "\"><a data-toggle=\"tab\" href=\"#posting-imgur-html\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IMGUR_UPLOAD_TITLE");
                echo "</span></a></li>";
            } else {
            }
            // line 136
            echo "\t\t\t\t";
            if ((($context["S_SHOW_POLL_BOX"] ?? null) || ($context["S_POLL_DELETE"] ?? null))) {
                echo "<li class=\"\"><a data-toggle=\"tab\" href=\"#posting-poll-html\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_POLL");
                echo "</span></a></li>";
            }
            // line 137
            echo "\t\t\t";
            // line 138
            echo "\t\t\t</ul>
\t
    <div class=\"tab-content panel-content\">
\t   ";
            // line 141
            if (( !($context["S_SHOW_DRAFTS"] ?? null) && ( !$this->getAttribute(($context["definition"] ?? null), "SIG_EDIT", array()) == 1))) {
                // line 142
                echo "\t\t<div class=\"panel-body tab-pane";
                if (($context["IMGUR_DELETEHASH"] ?? null)) {
                } else {
                    echo " active";
                }
                echo "\" id=\"options-panel-below\">
\t\t<fieldset>
\t\t";
                // line 144
                // line 145
                echo "\t\t\t";
                if (($context["S_BBCODE_ALLOWED"] ?? null)) {
                    // line 146
                    echo "\t\t\t <input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
                    echo ($context["S_BBCODE_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"disable_bbcode\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_BBCODE");
                    echo "</label>
\t\t\t";
                }
                // line 148
                echo "\t\t\t";
                if (($context["S_SMILIES_ALLOWED"] ?? null)) {
                    // line 149
                    echo "\t\t\t <input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
                    echo ($context["S_SMILIES_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"disable_smilies\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_SMILIES");
                    echo "</label>
\t\t\t";
                }
                // line 151
                echo "\t\t\t";
                if (($context["S_LINKS_ALLOWED"] ?? null)) {
                    // line 152
                    echo "\t\t\t <input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
                    echo ($context["S_MAGIC_URL_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"disable_magic_url\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_MAGIC_URL");
                    echo "</label>
\t\t\t";
                }
                // line 154
                echo "\t\t\t";
                if (($context["S_SIG_ALLOWED"] ?? null)) {
                    // line 155
                    echo "\t\t\t <input type=\"checkbox\" name=\"attach_sig\" id=\"attach_sig\"";
                    echo ($context["S_SIGNATURE_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"attach_sig\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACH_SIG");
                    echo "</label>
\t\t\t";
                }
                // line 157
                echo "\t\t\t";
                if (($context["S_NOTIFY_ALLOWED"] ?? null)) {
                    // line 158
                    echo "\t\t\t <input type=\"checkbox\" name=\"notify\" id=\"notify\"";
                    echo ($context["S_NOTIFY_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"notify\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY_REPLY");
                    echo "</label>
\t\t\t";
                }
                // line 160
                echo "\t\t\t";
                if (($context["S_LOCK_TOPIC_ALLOWED"] ?? null)) {
                    // line 161
                    echo "\t\t\t <input type=\"checkbox\" name=\"lock_topic\" id=\"lock_topic\"";
                    echo ($context["S_LOCK_TOPIC_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"lock_topic\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCK_TOPIC");
                    echo "</label>
\t\t\t";
                }
                // line 163
                echo "\t\t\t";
                if (($context["S_LOCK_POST_ALLOWED"] ?? null)) {
                    // line 164
                    echo "\t\t\t <input type=\"checkbox\" name=\"lock_post\" id=\"lock_post\"";
                    echo ($context["S_LOCK_POST_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"lock_post\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCK_POST");
                    echo "&nbsp;&#91;";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCK_POST_EXPLAIN");
                    echo "&#93;</label>
\t\t\t";
                }
                // line 166
                echo "\t\t\t";
                if (((($context["S_TYPE_TOGGLE"] ?? null) || ($context["S_TOPIC_TYPE_ANNOUNCE"] ?? null)) || ($context["S_TOPIC_TYPE_STICKY"] ?? null))) {
                    // line 167
                    echo "\t\t\t<hr class=\"dashed\" />
\t\t\t";
                }
                // line 169
                echo "\t\t\t";
                if ((($context["S_SOFTDELETE_ALLOWED"] ?? null) || ($context["S_DELETE_ALLOWED"] ?? null))) {
                    // line 170
                    echo "\t\t\t <input type=\"checkbox\" name=\"delete\" id=\"delete\" ";
                    echo ($context["S_SOFTDELETE_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"delete\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST_SOFT");
                    echo "&nbsp;&#91;";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST_SOFT_WARN");
                    echo "&#93;</label>
\t\t\t <input type=\"checkbox\" name=\"delete_permanent\" id=\"delete_permanent\"><label class=\"check-control\" for=\"delete_permanent\">";
                    // line 171
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST_PERMANENT");
                    echo "&nbsp;&#91;";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST_PERMANENT_WARN");
                    echo "&#93;</label>\t
\t\t\t<hr class=\"dashed\" />
\t\t\t";
                }
                // line 174
                echo "\t\t\t
\t\t\t";
                // line 175
                if (($context["S_TYPE_TOGGLE"] ?? null)) {
                    // line 176
                    echo "\t\t    <div class=\"control-group\"> 
\t         <label class=\"control-label\" for=\"topic_type-0\">";
                    // line 177
                    if (($context["S_EDIT_POST"] ?? null)) {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHANGE_TOPIC_TO");
                    } else {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_TOPIC_AS");
                    }
                    echo ":</label>
\t         <div class=\"controls controls-row\"> 
             ";
                    // line 179
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "topic_type", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic_type"]) {
                        // line 180
                        echo "\t\t\t  <input type=\"radio\" name=\"topic_type\" id=\"topic_type-";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\"";
                        echo $this->getAttribute($context["topic_type"], "S_CHECKED", array());
                        echo "><label class=\"radio-inline\" for=\"topic_type-";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\">";
                        echo $this->getAttribute($context["topic_type"], "L_TOPIC_TYPE", array());
                        echo "</label>
\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_type'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 182
                    echo "\t         </div> 
\t\t\t <div class=\"space10\"></div>
\t        </div>
\t\t\t";
                }
                // line 186
                echo "
\t\t\t";
                // line 187
                if ((($context["S_TOPIC_TYPE_ANNOUNCE"] ?? null) || ($context["S_TOPIC_TYPE_STICKY"] ?? null))) {
                    // line 188
                    echo "\t\t\t<div class=\"control-group\"> 
\t         <label class=\"control-label\" for=\"topic_time_limit\">";
                    // line 189
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STICK_TOPIC_FOR");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</label><span class=\"help-block\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STICK_TOPIC_FOR_EXPLAIN");
                    echo "</span>
\t\t\t<div class=\"input-group col-xs-8 col-sm-2 col-md-2\">
\t\t       <input type=\"number\" class=\"form-control input-sm\" min=\"0\" max=\"999\" name=\"topic_time_limit\" id=\"topic_time_limit\" maxlength=\"3\" value=\"";
                    // line 191
                    echo ($context["TOPIC_TIME_LIMIT"] ?? null);
                    echo "\">
\t\t      <span class=\"input-group-addon\">";
                    // line 192
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DAYS");
                    echo "</span>
\t         </div>
\t\t\t <div class=\"space10\"></div>
\t       </div>
\t\t\t";
                }
                // line 197
                echo "\t\t\t
\t\t\t";
                // line 198
                if (($context["S_EDIT_REASON"] ?? null)) {
                    // line 199
                    echo "\t\t\t<div class=\"control-group\"> 
\t         <label class=\"control-label\" for=\"edit_reason\">";
                    // line 200
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_REASON");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</label>
\t        <div class=\"row\"> 
\t\t\t<div class=\"col-xs-8 col-sm-5 col-md-5\"> 
             <input type=\"text\" class=\"form-control input-sm\" placeholder=\"";
                    // line 203
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_LINK_PLACEHOLDER");
                    echo "\" name=\"edit_reason\" id=\"edit_reason\" value=\"";
                    echo ($context["EDIT_REASON"] ?? null);
                    echo "\">
\t        </div>
\t\t\t</div>
\t\t\t</div>
\t\t\t";
                }
                // line 208
                echo "\t\t ";
                echo "\t
\t\t</fieldset>
\t\t";
            }
            // line 211
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "posting_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  721 => 211,  715 => 208,  705 => 203,  698 => 200,  695 => 199,  693 => 198,  690 => 197,  682 => 192,  678 => 191,  670 => 189,  667 => 188,  665 => 187,  662 => 186,  656 => 182,  639 => 180,  635 => 179,  626 => 177,  623 => 176,  621 => 175,  618 => 174,  610 => 171,  601 => 170,  598 => 169,  594 => 167,  591 => 166,  581 => 164,  578 => 163,  570 => 161,  567 => 160,  559 => 158,  556 => 157,  548 => 155,  545 => 154,  537 => 152,  534 => 151,  526 => 149,  523 => 148,  515 => 146,  512 => 145,  511 => 144,  502 => 142,  500 => 141,  495 => 138,  493 => 137,  486 => 136,  474 => 135,  468 => 134,  459 => 133,  455 => 131,  449 => 127,  447 => 126,  443 => 124,  433 => 121,  420 => 120,  409 => 119,  398 => 118,  397 => 117,  393 => 116,  389 => 115,  386 => 114,  384 => 113,  380 => 111,  376 => 109,  374 => 108,  371 => 107,  369 => 106,  361 => 100,  358 => 99,  351 => 98,  342 => 97,  337 => 96,  334 => 95,  328 => 93,  323 => 91,  319 => 90,  314 => 89,  312 => 88,  307 => 87,  302 => 86,  299 => 85,  298 => 84,  294 => 82,  291 => 81,  272 => 79,  268 => 78,  265 => 77,  257 => 75,  255 => 74,  250 => 73,  248 => 72,  244 => 70,  240 => 68,  239 => 67,  224 => 64,  214 => 62,  213 => 61,  206 => 56,  194 => 55,  191 => 54,  190 => 53,  187 => 52,  184 => 51,  181 => 50,  168 => 49,  164 => 48,  162 => 47,  157 => 44,  156 => 43,  142 => 42,  139 => 41,  131 => 40,  125 => 38,  122 => 37,  120 => 36,  117 => 35,  116 => 34,  113 => 33,  105 => 28,  97 => 24,  94 => 23,  92 => 22,  89 => 21,  83 => 17,  58 => 16,  50 => 15,  44 => 13,  40 => 11,  38 => 10,  35 => 9,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "posting_editor.html", "");
    }
}
