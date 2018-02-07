<?php

/* test.txt */
class __TwigTemplate_e2857b5598190737e03f4e9c328c75e294d72b1fe9f7dab58f6d338a1d3c625c extends Twig_Template
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
        echo "Subject: phpBB is correctly configured to send emails

Hello ";
        // line 3
        echo ($context["USERNAME"] ?? null);
        echo ",

Congratulations. If you received this email, phpBB is correctly configured to send emails.

In case you require assistance, please visit the phpBB support forums - https://www.phpbb.com/community/

";
        // line 9
        echo ($context["EMAIL_SIG"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "test.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "test.txt", "");
    }
}
