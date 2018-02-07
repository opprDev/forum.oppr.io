<?php

/* overall_footer.html */
class __TwigTemplate_5cdfeb118efdce2af3476ad4df5962f32e6d199a11461a097f4de697cb87dcd0 extends Twig_Template
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
        // line 2
        echo "
\t</div> <!-- page-body id in header -->
  </div> <!-- content-forum in header -->
 </div> <!-- container in header -->

";
        // line 7
        // line 8
        echo "
";
        // line 9
        if ((( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null)) && (($context["SCRIPT_NAME"] ?? null) == "index"))) {
            // line 10
            echo "    ";
            $location = "addons/sitesplat_login_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/sitesplat_login_body.html", "overall_footer.html", 10)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 12
        echo "
\t<section class=\"section-page\">
        <div id=\"rtblock\" class=\"container\">
            ";
        // line 15
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "fltl", array()))) {
        } else {
            $location = "addons/recent_topics_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/recent_topics_body.html", "overall_footer.html", 15)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 16
        echo "        </div>
    </section>

";
        // line 19
        echo "\t
  ";
        // line 20
        if (($context["FLATBOOTS_MINI_CMS_ENABLED"] ?? null)) {
            // line 21
            echo "     ";
            // line 22
            echo "  ";
        } else {
            echo " 
\t";
            // line 23
            $location = "addons/call_to_action_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/call_to_action_body.html", "overall_footer.html", 23)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 24
            echo "  ";
        }
        // line 25
        echo "  
    
\t<footer class=\"burned-asphalt\"> <!-- Footer block -->
\t\t<div class=\"midnight-\" id=\"sub-footer\">
\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"row bottomLinks\">
\t\t\t\t\t<div class=\"col-sm-6 sm-direction\">
\t\t\t\t\t <nav>
\t\t\t\t\t";
        // line 34
        if (($context["FLATBOOTS_MINI_CMS_ENABLED"] ?? null)) {
            // line 35
            echo "\t\t\t\t\t\t";
            // line 36
            echo "\t\t\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t\t\t<ul class=\"list-inline footer-nav\">
\t\t\t\t\t\t <!--<li><a href=\"http://goo.gl/LvmwlF\" title=\"\">";
            // line 38
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADVERTISE");
            echo "</a></li>-->
\t\t\t\t\t\t <li><a href=\"";
            // line 39
            echo ($context["U_PRIVACY"] ?? null);
            echo "\" title=\"\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVACY");
            echo "</a></li>
\t\t\t\t\t\t <li><a href=\"";
            // line 40
            echo ($context["U_DMCA"] ?? null);
            echo "\" title=\"\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DMCA");
            echo "</a></li>
\t\t\t\t\t\t <li><a href=\"";
            // line 41
            echo ($context["U_TERMS_USE"] ?? null);
            echo "\" title=\"\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TERMS");
            echo "</a></li>
\t\t\t\t\t\t ";
            // line 42
            // line 43
            echo "\t\t\t\t\t\t ";
            if (($context["U_CONTACT_US"] ?? null)) {
                // line 44
                echo "\t\t\t\t\t\t <li><a href=\"";
                echo ($context["U_CONTACT_US"] ?? null);
                echo "\" title=\"\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT_US");
                echo "</a></li>
\t\t\t\t\t\t ";
            }
            // line 46
            echo "\t\t\t\t\t\t ";
            // line 47
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 48
        echo "\t
\t\t\t\t\t </nav>
\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6 sm-direction\">\t
\t\t\t\t\t\t<div class=\"clearfix socialbar\">
\t\t\t\t\t\t";
        // line 54
        if (($context["FLATBOOTS_MINI_CMS_ENABLED"] ?? null)) {
            // line 55
            echo "\t\t\t\t\t\t\t\t";
            // line 56
            echo "\t\t\t\t\t\t";
        } else {
            // line 57
            echo "\t\t\t\t\t\t\t<div class=\"social-network\">
\t\t\t\t\t\t\t\t<!--<a class=\"google-plus-color\" title=\"Google+\" href=\"https://plus.google.com/u/0/100435978342273345264/\"><i class=\"fa fa-google-plus\"></i></a>-->

\t\t\t\t\t\t\t\t<a class=\"github-color\" title=\"Github\" href=\"https://github.com/opprDev\"><i class=\"fa fa-github\"></i></a>

\t\t\t\t\t\t\t\t<a class=\"github-color\" title=\"Github\" href=\"https://github.com/opprGroup\"><i class=\"fa fa-github\"></i></a>

\t\t\t\t\t\t\t\t<a class=\"github-color\" title=\"Github\" href=\"https://github.com/opprEdu\"><i class=\"fa fa-github\"></i></a>

\t\t\t\t\t\t\t\t<!--<a class=\"behance-color\" title=\"Behance\" href=\"#3\"><i class=\"fa fa-behance\"></i></a>-->

\t\t\t\t\t\t\t\t<!-- <a class=\"dropbox-color\" title=\"Dropbox\" href=\"#4\"><i class=\"fa fa-dropbox\"></i></a> -->

\t\t\t\t\t\t\t\t<!-- <a class=\"pinterest-color\" title=\"Pinterest\" href=\"#5\"><i class=\"fa fa-pinterest\"></i></a> -->

\t\t\t\t\t\t\t\t<a class=\"facebook-color\" title=\"Facebook\" href=\"https://www.facebook.com/opprgroup/\"><i class=\"fa fa-facebook\"></i></a>

\t\t\t\t\t\t\t\t<a class=\"twitter-color\" title=\"Twitter\" href=\"https://twitter.com/opprGroup\"><i class=\"fa fa-twitter\"></i></a>

\t\t\t\t\t\t\t\t<!-- <a class=\"bitbucket-color\" title=\"Bitbucket\" href=\"#8\"><i class=\"fa fa-bitbucket\"></i></a> -->

\t\t\t\t\t\t\t\t<!--<a class=\"envato-color\" title=\"Envato\" href=\"http://themeforest.net/user/ThemeSplat/portfolio?ref=ThemeSplat\"><i class=\"icon-moon-envatoleaf\"></i></a>-->

\t\t\t\t\t\t\t\t<a class=\"rss-color hidden-xs\" title=\"rss\" href=\"";
            // line 80
            echo ($context["U_FEED"] ?? null);
            echo "\"><i class=\"fa fa-rss\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 82
        echo "\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t\t
                <div class=\"row\">\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6 sm-direction\">
\t\t\t\t\t <p class=\"copyrights\">
\t\t\t\t\t  ";
        // line 90
        // line 91
        echo "\t\t\t\t\t  <small>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HANDCRAFTED");
        echo "</small>&nbsp;<i class=\"fa fa-heart text-flatboots-red\"></i>&nbsp;<small>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AND");
        echo "</small>&nbsp;<i class=\"fa fa-coffee\"></i>&nbsp;<small>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BY");
        echo "<a href=\"http://www.sitesplat.com/\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITESPLAT");
        echo "\" target=\"_blank\">&nbsp;";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITESPLAT");
        echo "</a>&nbsp;&#45;&nbsp;";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POWERED");
        echo "&nbsp;<a href=\"http://www.phpbb.com/\" title=\"Forum Software &copy; phpBB&reg; Group\" target=\"_blank\">phpBB</a></small>
\t\t\t\t\t  ";
        // line 92
        // line 93
        echo "\t\t\t\t\t </p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6 sm-direction\">
\t\t\t\t\t  <p class=\"debug-output\">
\t\t\t\t\t  ";
        // line 98
        // line 99
        echo "\t\t\t\t\t\t<small>&#45;&nbsp;";
        echo ($context["S_TIMEZONE"] ?? null);
        echo "&nbsp;&#45;</small>
\t\t\t\t\t  ";
        // line 100
        // line 101
        echo "\t\t\t\t\t\t";
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            echo " <small>";
            echo ($context["DEBUG_OUTPUT"] ?? null);
            echo "</small>";
        }
        // line 102
        echo "\t\t\t\t\t\t<!-- ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLATBOOTS_VERSION");
        echo " -->
\t\t\t\t\t  </p>
\t\t\t\t\t</div>
\t\t\t\t</div>\t

\t\t\t</div>
\t\t</div>
\t</footer>

<a id=\"totop\" class=\"top-flat\" href=\"\" onclick=\"return false;\" style=\"display:none;\"></a>

<div class=\"hidden\">";
        // line 113
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        echo "</div> 

<!-- injected via core and ajax JS for the return confirmation actions -->
   <div id=\"page-footer\">
\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 117
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\">&nbsp;</div>
\t</div>

\t<div id=\"phpbb_alert\" class=\"alert alert-default phpbb_alert\" data-l-err=\"";
        // line 121
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<button type=\"button\" class=\"close alert_close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t<h3 class=\"alert_title\">&nbsp;</h3>
\t\t <p class=\"alert_text\"></p>
\t</div>
\t
\t<div id=\"phpbb_confirm\" class=\"alert alert-default phpbb_alert\">
\t\t<button type=\"button\" class=\"close alert_close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t<div class=\"alert_text\"></div>
\t</div>
  </div>\t
<!-- injected via core and ajax JS for the return confirmation actions -->

";
        // line 134
        if ((($context["S_USER_LOGGED_IN"] ?? null) && ((($context["SCRIPT_NAME"] ?? null) == "viewforum") || (($context["SCRIPT_NAME"] ?? null) == "viewtopic")))) {
            // line 135
            echo "\t<div class=\"modal fade\" id=\"BreadcrumbMap\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"BreadcrumbsLabel\">
\t  <div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t  <div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t<h4 class=\"modal-title\" id=\"BreadcrumbsLabel\">";
            // line 140
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NAVIGATION");
            echo "</h4>
\t\t  </div>
\t\t  <div class=\"modal-body file-tree\">
\t\t   <ul>
\t\t\t<li class=\"root\"><a href=\"";
            // line 144
            echo ($context["U_INDEX"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
            echo "</a></li>
\t\t\t";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "navlinks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
                // line 146
                echo "\t\t\t   <li><a href=\"";
                echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "\t\t   </ul>
\t\t    <i class=\"icon-compass fa fa-compass\"></i>
\t\t  </div>
\t\t  <div class=\"modal-footer\">
\t\t  </div>
\t\t</div>
\t  </div>
\t</div>
\t";
        }
        // line 157
        echo "
\t";
        // line 158
        if (($context["ENABLE_POPUP_LOGIN"] ?? null)) {
            // line 159
            echo "\t\t<div class=\"modal fade\" id=\"modal-login\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t\t\t\t<h3 class=\"modal-title\">";
            // line 164
            echo ($context["SITENAME"] ?? null);
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
            echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 167
            echo ($context["S_LOGIN_ACTION"] ?? null);
            echo "\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<label for=\"username\" class=\"control-label\">";
            // line 169
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-icon left\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"username\" id=\"username\" placeholder=\"";
            // line 172
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo "\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<label for=\"password\" class=\"control-label\">";
            // line 175
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-icon left\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-key\"></i>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"password\" id=\"password\" placeholder=\"";
            // line 178
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 180
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 181
                echo "\t\t\t\t\t\t\t\t\t<div class=\"controls controls-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"radio\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin-pop\"><label for=\"autologin-pop\">";
                // line 182
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOG_ME_IN");
                echo "</label></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 185
            echo "\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" id=\"load\" name=\"login\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
            echo "\" data-loading-text=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOADING_LOG_IN");
            echo " <i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
            echo "</button>
\t\t\t\t\t\t\t\t";
            // line 186
            echo ($context["S_LOGIN_REDIRECT"] ?? null);
            echo "
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</form> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t</div>
\t\t\t\t</div><!-- /.modal-content -->
\t\t\t</div><!-- /.modal-dialog -->
\t\t</div><!-- /.modal -->
\t";
        }
        // line 196
        echo "
<script>
// this loads jquery asyncrounously & in parallel
head.load(\"//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js\", \"//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js\", \"";
        // line 199
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/forum_fn.min.js\");
</script>

<!-- we use this event to load the JS scripts properly via the extension system -->
";
        // line 203
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 204
        echo "
<!-- injected via a module or an include -->
<script>
// some function that depends on bootstrap and jquery
head.ready(function () {
\t\$('.footable').footable();\$(\".selectpicker\").selectpicker();\$(\".selectpicker\").tooltip(\"disable\");var totop=\$(\"#totop\");totop.click(function(){\$(\"html, body\").stop(true,true).animate({scrollTop:0},500);return false});\$(window).scroll(function(){if(\$(this).scrollTop()>600){totop.fadeIn()}else{totop.fadeOut()}});\$(\"button[data-loading-text], input[data-loading-text], .btn-load\").click(function(){var e=\$(this);e.button(\"loading\");setTimeout(function(){e.button(\"reset\")},3e3)});
\t\$(\"input\").iCheck({checkboxClass:\"icheckbox_flat-aero\",radioClass:\"iradio_flat-aero\"});\$(\".btn-search\").click(function(){\$(\".search-input\").toggleClass(\"open\").find(\"input\").focus()});\$(\".close\").click(function(){\$(this).prev(\"input\").val(\"\").parents(\".search-input\").removeClass(\"open\")});\$(\".nav-tog\").click(function(){if(\$(this).hasClass(\"neutro\")){\$(this).removeClass(\"neutro\").addClass(\"open\")}else{\$(this).removeClass(\"open\").addClass(\"neutro\")}});
\t\$('input[data-reset-on-edit]').on('keyup', function() {\$(this.getAttribute('data-reset-on-edit')).val('');});
\t\$('a').tooltip({trigger : 'hover',container: 'body'})
    \$('#notification_list_button').click(function(){setTimeout(function(){\$(\".nano\").nanoScroller();},0);});\t
});
// some function that depends on bootstrap and jquery
";
        // line 216
        if ( !($context["HIDE_FOOTER"] ?? null)) {
            // line 217
            echo "head.load(\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/vendors/twitterFetcher.min.js\");
head.ready(\"twitterFetcher.min.js\",function(e){var e={profile:{screenName:\"";
            // line 218
            if (($context["FLATBOOTS_MINI_CMS_ENABLED"] ?? null)) {
                echo ($context["TWITTER_SCREEN_NAME"] ?? null);
            } else {
                echo "sitesplat";
            }
            echo "\"},domId:\"twitter-feed\",maxTweets:1,showUser:!1,showImages:!0,enableLinks:!0};twitterFetcher.fetch(e)});
";
        }
        // line 220
        echo "</script>
<!-- injected via a module or an include -->

";
        // line 223
        echo $this->getAttribute(($context["definition"] ?? null), "SCRIPTS", array());
        echo "

";
        // line 225
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 226
            echo "<!-- // lets load the plupload crap super huge files because... wait for it wait for it. \"swear here\" -->
";
            // line 227
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 227)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 229
        echo "
";
        // line 230
        // line 231
        echo "
<!-- Google Analytics: change UA-XXXXXXXX-X to be your site's ID. -->
";
        // line 233
        echo ($context["GOOGLE_ANALYTICS"] ?? null);
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 233,  521 => 231,  520 => 230,  517 => 229,  504 => 227,  501 => 226,  499 => 225,  494 => 223,  489 => 220,  480 => 218,  475 => 217,  473 => 216,  459 => 204,  454 => 203,  447 => 199,  442 => 196,  429 => 186,  420 => 185,  414 => 182,  411 => 181,  409 => 180,  404 => 178,  397 => 175,  391 => 172,  384 => 169,  379 => 167,  371 => 164,  364 => 159,  362 => 158,  359 => 157,  348 => 148,  337 => 146,  333 => 145,  327 => 144,  320 => 140,  313 => 135,  311 => 134,  293 => 121,  278 => 117,  269 => 113,  254 => 102,  247 => 101,  246 => 100,  241 => 99,  240 => 98,  233 => 93,  232 => 92,  217 => 91,  216 => 90,  206 => 82,  200 => 80,  175 => 57,  172 => 56,  170 => 55,  168 => 54,  160 => 48,  156 => 47,  154 => 46,  146 => 44,  143 => 43,  142 => 42,  136 => 41,  130 => 40,  124 => 39,  120 => 38,  117 => 37,  114 => 36,  112 => 35,  110 => 34,  99 => 25,  96 => 24,  84 => 23,  79 => 22,  77 => 21,  75 => 20,  72 => 19,  67 => 16,  52 => 15,  47 => 12,  33 => 10,  31 => 9,  28 => 8,  27 => 7,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall_footer.html", "");
    }
}
