<?php

/* add.html */
class __TwigTemplate_d9e3a28c7c9ed0e91886d58ce1918d0a6ac72d20884576ded4f1ded60b6a1c28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "add.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<form action=\"/index/save\" method=\"POST\">
    <div class=\"form-group\">
        <label>标题</label>
        <input type=\"text\" class=\"form-control\" name=\"title\" placeholder=\"请输入title\">
    </div>
    <div class=\"form-group\">
        <label>内容</label>
        <textarea class=\"form-control\" name=\"content\" placeholder=\"请输入内容\"></textarea>
    </div>

    <button type=\"submit\" class=\"btn btn-default\">提交</button>
</form>

";
    }

    public function getTemplateName()
    {
        return "add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "add.html", "C:\\wamp64\\www\\myPHP\\app\\views\\add.html");
    }
}
