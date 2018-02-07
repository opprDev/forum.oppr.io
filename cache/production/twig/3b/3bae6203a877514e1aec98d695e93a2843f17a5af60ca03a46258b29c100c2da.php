<?php

/* display_options.html */
class __TwigTemplate_bf83eaab8debcd1b25f42d4c3446ced5c4d0657f84d72f39a9e325603f997e2b extends Twig_Template
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
        echo "<div class=\"hidden-xs\">
\t<fieldset class=\"controls-row\">
        <div class=\"sorting collapse\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                         <label for=\"bday_day\">";
        // line 8
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
                            <div class=\"control-row\">
                              ";
        // line 10
        echo ($context["S_SELECT_SORT_DAYS"] ?? null);
        echo "
                            </div>
\t\t\t\t\t\t</div>
\t 
\t                    <div class=\"col-md-4 col-sm-4\"> 
                          <label for=\"bday_day\">";
        // line 15
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
        echo "</label>
                            <div class=\"control-row\">
                              ";
        // line 17
        echo ($context["S_SELECT_SORT_KEY"] ?? null);
        echo "
                            </div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                           <label for=\"bday_day\">";
        // line 22
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
        echo "</label>
                            <div class=\"control-row\">
\t\t\t\t\t\t\t<div class=\"input-group\">
                             ";
        // line 25
        echo ($context["S_SELECT_SORT_DIR"] ?? null);
        echo "
\t\t\t\t\t\t\t <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" name=\"sort\" type=\"submit\">";
        // line 27
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
        echo "</button>
\t\t\t\t\t\t\t </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    </div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>
                </div>
\t\t\t</div>
\t\t</div> 
\t</fieldset> 
</div>";
    }

    public function getTemplateName()
    {
        return "display_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 27,  61 => 25,  55 => 22,  47 => 17,  42 => 15,  34 => 10,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display_options.html", "");
    }
}
