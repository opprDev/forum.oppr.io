<?php

/* posting_buttons.html */
class __TwigTemplate_33d6f02a677a5f00cf875b73ed19a096fbe7e3da890533fc269240a6e36ad036 extends Twig_Template
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
        echo "<script>
\tvar form_name = 'postform';
\tvar text_name = ";
        // line 3
        if ($this->getAttribute(($context["definition"] ?? null), "SIG_EDIT", array())) {
            echo "'signature'";
        } else {
            echo "'message'";
        }
        echo ";
\tvar load_draft = false;
\tvar upload = false;

\t// Define the bbCode tags
\tvar bbcode = new Array();
\tvar bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            echo ", ";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_NAME", array());
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");
\tvar imageTag = false;

\t// Helpline messages
\tvar help_line = {
\t\tb: '";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_B_HELP"), "js");
        echo "',
\t\ti: '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_I_HELP"), "js");
        echo "',
\t\tu: '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_U_HELP"), "js");
        echo "',
\t\tq: '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_Q_HELP"), "js");
        echo "',
\t\tc: '";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_C_HELP"), "js");
        echo "',
\t\tl: '";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_L_HELP"), "js");
        echo "',
\t\to: '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_O_HELP"), "js");
        echo "',
\t\tp: '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_P_HELP"), "js");
        echo "',
\t\tw: '";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_W_HELP"), "js");
        echo "',
\t\ta: '";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_A_HELP"), "js");
        echo "',
\t\ts: '";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_S_HELP"), "js");
        echo "',
\t\tf: '";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_F_HELP"), "js");
        echo "',
\t\ty: '";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_Y_HELP"), "js");
        echo "',
\t\td: '";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_D_HELP"), "js");
        echo "'
\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            // line 29
            echo "\t\t\t,cb_";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
            echo ": '";
            echo $this->getAttribute($context["custom_tags"], "A_BBCODE_HELPLINE", array());
            echo "'
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t}

\tfunction change_palette()
\t{
\t\tphpbb.toggleDisplay('colour_palette');
\t\te = document.getElementById('colour_palette');

\t\tif (e.style.display == 'block')
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_COLOR_HIDE"), "js");
        echo "';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_COLOR"), "js");
        echo "';
\t\t}
\t}
</script>
<script src=\"";
        // line 48
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/editor.js\"></script>

";
        // line 50
        if (($context["S_BBCODE_ALLOWED"] ?? null)) {
            // line 51
            echo "<div id=\"colour_palette\" style=\"display: none;\">
\t<label class=\"control-label\">";
            // line 52
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_COLOR");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t<div id=\"color_palette_placeholder\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\"></div>
</div>
<div class=\"space10\"></div>
";
            // line 56
            // line 57
            echo "<div id=\"imgurAnchor\" class=\"btn-toolbar\" role=\"toolbar\">
    <div class=\"btn-group\">
         <a href=\"#\" class=\"btn btn-default\" accesskey=\"b\" name=\"addbbcode0\" onclick=\"bbstyle(0); return false;\" title=\"";
            // line 59
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_B_HELP");
            echo "\"><i class=\"fa fa-bold\"></i></a>
         <a href=\"#\" class=\"btn btn-default\" accesskey=\"i\" name=\"addbbcode2\" onclick=\"bbstyle(2); return false;\" title=\"";
            // line 60
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_I_HELP");
            echo "\"><i class=\"fa fa-italic\"></i></a>
         <a href=\"#\" class=\"btn btn-default\" accesskey=\"u\" name=\"addbbcode4\" onclick=\"bbstyle(4); return false;\" title=\"";
            // line 61
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_U_HELP");
            echo "\"><i class=\"fa fa-underline\"></i></a>
\t</div>
\t
\t<div class=\"btn-group hidden-xs\">
         <a href=\"#\" class=\"btn btn-default\" accesskey=\"l\" name=\"addbbcode10\" onclick=\"bbstyle(10); return false;\" title=\"";
            // line 65
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_L_HELP");
            echo "\"><i class=\"fa fa-list\"></i></a>
         <a href=\"#\" class=\"btn btn-default\" accesskey=\"o\" name=\"addbbcode12\" onclick=\"bbstyle(12); return false;\" title=\"";
            // line 66
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_O_HELP");
            echo "\"><i class=\"fa fa-list-ol\"></i></a>
         <a href=\"#\" class=\"btn btn-default\" accesskey=\"y\" name=\"addlistitem\" onclick=\"bbstyle(-1); return false;\" title=\"";
            // line 67
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_LISTITEM_HELP");
            echo "\"><i class=\"fa fa-asterisk\"></i></a>
    </div>

\t<div class=\"btn-group\">
\t     <a href=\"#\" class=\"btn btn-default\" accesskey=\"c\" name=\"addbbcode8\" onclick=\"bbstyle(8); return false;\" title=\"";
            // line 71
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_C_HELP");
            echo "\"><i class=\"fa fa-code\"></i></a>
        ";
            // line 72
            if (($context["S_BBCODE_QUOTE"] ?? null)) {
                // line 73
                echo "\t     <a href=\"#\" class=\"btn btn-default\" accesskey=\"q\" name=\"addbbcode6\" onclick=\"bbstyle(6); return false;\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_Q_HELP");
                echo "\"><i class=\"fa fa-comment\"></i></a>
\t    ";
            }
            // line 74
            echo " 
\t\t";
            // line 75
            if (($context["S_BBCODE_IMG"] ?? null)) {
                // line 76
                echo "\t     <a href=\"#\" class=\"btn btn-default\" accesskey=\"p\" name=\"addbbcode14\" onclick=\"bbstyle(14); return false;\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_P_HELP");
                echo "\"><i class=\"fa fa-picture-o\"></i></a>
\t    ";
            }
            // line 78
            echo "\t    ";
            if (($context["S_LINKS_ALLOWED"] ?? null)) {
                // line 79
                echo "\t     <a href=\"#\" class=\"btn btn-default\" accesskey=\"w\" name=\"addbbcode16\" onclick=\"bbstyle(16); return false;\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_W_HELP");
                echo "\"><i class=\"fa fa-link\"></i></a>
\t\t";
            }
            // line 81
            echo "\t</div>
\t
\t<div class=\"btn-group hidden-xs\">
\t    ";
            // line 84
            if (($context["S_BBCODE_FLASH"] ?? null)) {
                // line 85
                echo "\t     <a href=\"#\" class=\"btn btn-default\" accesskey=\"d\" name=\"addbbcode18\" onclick=\"bbstyle(18); return false;\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_D_HELP");
                echo "\"><i class=\"fa fa-font\"></i></a>
\t\t";
            }
            // line 87
            echo "\t\t <a href=\"#\" class=\"btn btn-default\" name=\"bbpalette\" id=\"bbpalette\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_COLOR");
            echo "\" onclick=\"change_palette(); return false;\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_S_HELP");
            echo "\"><i class=\"fa fa-tint\"></i></a>
\t
\t";
            // line 89
            // line 90
            echo "\t
\t<!-- BEGIN custom_tags 
\t     <a href=\"#\" class=\"btn btn-default\" name=\"addbbcode";
            // line 92
            echo $this->getAttribute(($context["custom_tags"] ?? null), "BBCODE_ID", array());
            echo "\" value=\"";
            echo $this->getAttribute(($context["custom_tags"] ?? null), "BBCODE_TAG", array());
            echo "\" onclick=\"bbstyle(";
            echo $this->getAttribute(($context["custom_tags"] ?? null), "BBCODE_ID", array());
            echo "); return false;\"  data-original-title=\"";
            echo $this->getAttribute(($context["custom_tags"] ?? null), "BBCODE_HELPLINE", array());
            echo "\" title=\"";
            echo $this->getAttribute(($context["custom_tags"] ?? null), "BBCODE_HELPLINE", array());
            echo "\"><i class=\"fa fa-cog\"></i></a>
\t     END custom_tags -->
\t
\t";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "custom_tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                // line 96
                echo "\t";
                if (($this->getAttribute($context["custom_tags"], "BBCODE_TAG", array()) == "youtube")) {
                    // line 97
                    echo "\t <a href=\"#\" class=\"btn btn-default\" name=\"addbbcode";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                    echo "\" onclick=\"bbstyle(";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                    echo "); return false;\" title=\"";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
                    echo "\"><i class=\"fa fa-youtube\"></i></a>
\t";
                }
                // line 99
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "\t
\t";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "custom_tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                // line 102
                echo "\t";
                if (($this->getAttribute($context["custom_tags"], "BBCODE_TAG", array()) == "c")) {
                    // line 103
                    echo "\t <a href=\"#\" class=\"btn btn-default\" name=\"addbbcode";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                    echo "\" onclick=\"bbstyle(";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                    echo "); return false;\" title=\"";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
                    echo "\"><i class=\"fa fa-text-width\"></i></a>
\t";
                }
                // line 105
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "   </div>

\t<select class=\"selectpicker hidden-xs\" data-style=\"btn-default\" data-width=\"auto\" name=\"addbbcode20\" onchange=\"bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;\" title=\"";
            // line 108
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_F_HELP");
            echo "\">
\t\t<option value=\"50\">";
            // line 109
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_TINY");
            echo "</option>
\t\t<option value=\"85\">";
            // line 110
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_SMALL");
            echo "</option>
\t\t<option data-icon=\"fa fa-font\" value=\"100\" selected=\"selected\">";
            // line 111
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_NORMAL");
            echo "</option>
\t\t";
            // line 112
            if (( !($context["MAX_FONT_SIZE"] ?? null) || (($context["MAX_FONT_SIZE"] ?? null) >= 150))) {
                // line 113
                echo "\t\t\t<option value=\"150\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_LARGE");
                echo "</option>
\t\t\t";
                // line 114
                if (( !($context["MAX_FONT_SIZE"] ?? null) || (($context["MAX_FONT_SIZE"] ?? null) >= 200))) {
                    // line 115
                    echo "\t\t\t\t<option value=\"200\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_HUGE");
                    echo "</option>
\t\t\t";
                }
                // line 117
                echo "\t\t";
            }
            // line 118
            echo "\t</select>
\t
\t<select class=\"selectpicker hidden-xs\" data-style=\"btn-default\" data-width=\"auto\" name=\"addbbcode_custom\" onchange=\"bbstyle(this.form.addbbcode_custom.options[this.form.addbbcode_custom.selectedIndex].value*1);this.form.addbbcode_custom.selectedIndex = 0;\">
\t  <option data-icon=\"fa fa-cog\" value=\"100\" selected=\"selected\">";
            // line 121
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODES");
            echo "</option>
      ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "custom_tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                // line 123
                echo "      <option value=\"";
                echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
                echo "\">";
                echo $this->getAttribute($context["custom_tags"], "BBCODE_TAG", array());
                echo "</option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "   
    </select>
\t
</div>
";
            // line 128
        }
    }

    public function getTemplateName()
    {
        return "posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 128,  386 => 124,  373 => 123,  369 => 122,  365 => 121,  360 => 118,  357 => 117,  351 => 115,  349 => 114,  344 => 113,  342 => 112,  338 => 111,  334 => 110,  330 => 109,  326 => 108,  322 => 106,  316 => 105,  306 => 103,  303 => 102,  299 => 101,  296 => 100,  290 => 99,  280 => 97,  277 => 96,  273 => 95,  259 => 92,  255 => 90,  254 => 89,  246 => 87,  240 => 85,  238 => 84,  233 => 81,  227 => 79,  224 => 78,  218 => 76,  216 => 75,  213 => 74,  207 => 73,  205 => 72,  201 => 71,  194 => 67,  190 => 66,  186 => 65,  179 => 61,  175 => 60,  171 => 59,  167 => 57,  166 => 56,  158 => 52,  155 => 51,  153 => 50,  148 => 48,  141 => 44,  134 => 40,  123 => 31,  112 => 29,  108 => 28,  104 => 27,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  52 => 14,  36 => 9,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "posting_buttons.html", "");
    }
}
