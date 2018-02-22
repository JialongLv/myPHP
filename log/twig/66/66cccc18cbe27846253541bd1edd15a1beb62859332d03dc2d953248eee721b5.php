<?php

/* layout.html */
class __TwigTemplate_dec19adddb89911febdbc1a47405dcd3216a5438a68559d32328a8eb40826fb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh-CN\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>留言板</title>
    <link href=\"https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
    <script src=\"https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\">留言板</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"/index/add\">添加留言</a></li>
            </ul>
        </div>
    </div>
</nav>
<content>
    ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 37
        echo "</content>
<footer class=\"footer\">
    <div class=\"container\">
        <p class=\"text-muted\">留言板底部</p>
    </div>
</footer>
<script src=\"https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js\"></script>
<script src=\"https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</body>
<style>
    .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 60px;
        background-color: #f5f5f5;
</style>
</html>";
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        // line 35
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  81 => 35,  78 => 34,  57 => 37,  55 => 34,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html", "C:\\wamp64\\www\\myPHP\\app\\views\\layout.html");
    }
}
