<?php

/* index.html */
class __TwigTemplate_ef9f728c8353ab2ba5d44e6bf3880e7e7edbe5fb1af989039c395d17a486b915 extends Twig_Template
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
        echo "

<h3>";
        // line 3
        echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
        echo "</h3>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "C:\\wamp64\\www\\myPHP\\app\\views\\index.html");
    }
}
