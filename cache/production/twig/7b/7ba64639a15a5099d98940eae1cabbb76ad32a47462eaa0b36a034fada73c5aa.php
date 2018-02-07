<?php

/* topic_notify.txt */
class __TwigTemplate_4f633e018c42526eb2d70a2b042fd17825b37856c747bbe48a5c49a82130011f extends Twig_Template
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
        echo "Subject: Topic reply notification - \"";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "\"

Hello ";
        // line 3
        echo ($context["USERNAME"] ?? null);
        echo ",

You are receiving this notification because you are watching the topic \"";
        // line 5
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "\" at \"";
        echo ($context["SITENAME"] ?? null);
        echo "\". This topic has received a reply";
        if ((($context["AUTHOR_NAME"] ?? null) != "")) {
            echo " by ";
            echo ($context["AUTHOR_NAME"] ?? null);
        }
        echo " since your last visit. No more notifications will be sent until you visit the topic.

If you want to view the newest post made since your last visit, click the following link:
";
        // line 8
        echo ($context["U_NEWEST_POST"] ?? null);
        echo "

If you want to view the topic, click the following link:
";
        // line 11
        echo ($context["U_TOPIC"] ?? null);
        echo "

If you want to view the forum, click the following link:
";
        // line 14
        echo ($context["U_FORUM"] ?? null);
        echo "

If you no longer wish to watch this topic you can either click the \"Unsubscribe topic\" link found at the bottom of the topic above, or by clicking the following link:
";
        // line 17
        echo ($context["U_STOP_WATCHING_TOPIC"] ?? null);
        echo "

";
        // line 19
        echo ($context["EMAIL_SIG"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "topic_notify.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 19,  61 => 17,  55 => 14,  49 => 11,  43 => 8,  30 => 5,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "topic_notify.txt", "");
    }
}
