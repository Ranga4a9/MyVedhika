<?php

/* base.html.twig */
class __TwigTemplate_376972032c7e202a014eb222dae3368d5d4959f92f1f8d656b7613cb213fd067 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"bg-light-blue\">
    <head>
        <meta charset=\"UTF-8\">
        <title>AdminLTE | Registration Page</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        
        ";
        // line 19
        $this->displayBlock('javascript', $context, $blocks);
        // line 35
        echo "    </head>
    <body class=\"bg-light-blue\">
      ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "
    </body>
</html>";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "        
        <!-- bootstrap 3.0.2 -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationmyvedhika/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- font Awesome -->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationmyvedhika/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Theme style -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationmyvedhika/css/AdminLTE.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        
        ";
    }

    // line 19
    public function block_javascript($context, array $blocks = array())
    {
        // line 20
        echo "        
           <!-- jQuery 2.0.2 -->
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
        <!-- Bootstrap -->
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundlesapplicationmyvedhika/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->
        
        
        ";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "
     ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  101 => 38,  98 => 37,  83 => 24,  77 => 20,  74 => 19,  67 => 15,  62 => 13,  57 => 11,  53 => 9,  50 => 8,  44 => 40,  42 => 37,  38 => 35,  36 => 19,  33 => 18,  31 => 8,  22 => 1,);
    }
}
