<?php

/* ucp_footer.html */
class __TwigTemplate_1c4b2d009aad3879229d92009d871e03d7e252e379a637179252bfda1c2526e4 extends Twig_Template
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
        echo "\t  </div>
 </div>
<!-- col-md-12 ucp_header
</div>
-->
\t<div class=\"clear\"></div>

\t</div>
\t</div>
</div>
</div>
";
        // line 12
        if (($context["S_COMPOSE_PM"] ?? null)) {
            // line 13
            echo "<div>";
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "</div>
</form>
</div>

</div><!-- closes the panel tabbed container in posting_editor.html - without this the footer will break while composing a PM -->
";
        }
        // line 19
        echo "
";
        // line 20
        $location = "jumpbox_options.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox_options.html", "ucp_footer.html", 20)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 21
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_footer.html", 21)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 22
        echo "
";
        // line 23
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "friends_online", array())) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "friends_offline", array())))) {
            // line 24
            echo "<script>
// lets load and call the function only if there is an user added as a friend
head.load(\"";
            // line 26
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/vendors/jquery.tinyscrollbar.min.js\");
head.ready('jquery.tinyscrollbar.min.js', function() {
    \$(\"#scrollbar-two\").tinyscrollbar();
});
</script>
";
        }
        // line 32
        echo "<script>
 head.load(\"";
        // line 33
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/jupload.min.js\");
</script>
";
    }

    public function getTemplateName()
    {
        return "ucp_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  89 => 32,  80 => 26,  76 => 24,  74 => 23,  71 => 22,  59 => 21,  47 => 20,  44 => 19,  34 => 13,  32 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_footer.html", "");
    }
}
