<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8edf4c7bd80c75d96468d429edbb8cc73d961580ddd9ee269f332f79ca9191c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40c2d71f06c264882656935c39fec15d0f824649de193673649a9ad2a10901a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c2d71f06c264882656935c39fec15d0f824649de193673649a9ad2a10901a4->enter($__internal_40c2d71f06c264882656935c39fec15d0f824649de193673649a9ad2a10901a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0608649513cf9eeab63dd224ed0addf924d7f50a6d43a7b80f758e66b749837c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0608649513cf9eeab63dd224ed0addf924d7f50a6d43a7b80f758e66b749837c->enter($__internal_0608649513cf9eeab63dd224ed0addf924d7f50a6d43a7b80f758e66b749837c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40c2d71f06c264882656935c39fec15d0f824649de193673649a9ad2a10901a4->leave($__internal_40c2d71f06c264882656935c39fec15d0f824649de193673649a9ad2a10901a4_prof);

        
        $__internal_0608649513cf9eeab63dd224ed0addf924d7f50a6d43a7b80f758e66b749837c->leave($__internal_0608649513cf9eeab63dd224ed0addf924d7f50a6d43a7b80f758e66b749837c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fa1b7f347eb6e16e252719321c31ac77514a13a143e7e3e4bc4fefb578bb8f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1b7f347eb6e16e252719321c31ac77514a13a143e7e3e4bc4fefb578bb8f42->enter($__internal_fa1b7f347eb6e16e252719321c31ac77514a13a143e7e3e4bc4fefb578bb8f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e6b26589a22b81aba6aeca96b3cff89b2661040cb9212b008e8a7be31cac7e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b26589a22b81aba6aeca96b3cff89b2661040cb9212b008e8a7be31cac7e2c->enter($__internal_e6b26589a22b81aba6aeca96b3cff89b2661040cb9212b008e8a7be31cac7e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e6b26589a22b81aba6aeca96b3cff89b2661040cb9212b008e8a7be31cac7e2c->leave($__internal_e6b26589a22b81aba6aeca96b3cff89b2661040cb9212b008e8a7be31cac7e2c_prof);

        
        $__internal_fa1b7f347eb6e16e252719321c31ac77514a13a143e7e3e4bc4fefb578bb8f42->leave($__internal_fa1b7f347eb6e16e252719321c31ac77514a13a143e7e3e4bc4fefb578bb8f42_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f589132c61f6ef13fbc49505802fcd391d45d97f1b679f06bafd44e6517ed065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f589132c61f6ef13fbc49505802fcd391d45d97f1b679f06bafd44e6517ed065->enter($__internal_f589132c61f6ef13fbc49505802fcd391d45d97f1b679f06bafd44e6517ed065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a67721cf2cb05c207820144f22e088bf953ab514884658efb8c6fa877a4e8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a67721cf2cb05c207820144f22e088bf953ab514884658efb8c6fa877a4e8f1->enter($__internal_5a67721cf2cb05c207820144f22e088bf953ab514884658efb8c6fa877a4e8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_5a67721cf2cb05c207820144f22e088bf953ab514884658efb8c6fa877a4e8f1->leave($__internal_5a67721cf2cb05c207820144f22e088bf953ab514884658efb8c6fa877a4e8f1_prof);

        
        $__internal_f589132c61f6ef13fbc49505802fcd391d45d97f1b679f06bafd44e6517ed065->leave($__internal_f589132c61f6ef13fbc49505802fcd391d45d97f1b679f06bafd44e6517ed065_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaab39e45b48cfd2caec5b972ecc70549f820ed9f6bd9dff48caa560e6227f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaab39e45b48cfd2caec5b972ecc70549f820ed9f6bd9dff48caa560e6227f5a->enter($__internal_aaab39e45b48cfd2caec5b972ecc70549f820ed9f6bd9dff48caa560e6227f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6748f4d30e3da2480a45e24e2f50e6f3fea85b8427a177217b8b489132bf8bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6748f4d30e3da2480a45e24e2f50e6f3fea85b8427a177217b8b489132bf8bd4->enter($__internal_6748f4d30e3da2480a45e24e2f50e6f3fea85b8427a177217b8b489132bf8bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6748f4d30e3da2480a45e24e2f50e6f3fea85b8427a177217b8b489132bf8bd4->leave($__internal_6748f4d30e3da2480a45e24e2f50e6f3fea85b8427a177217b8b489132bf8bd4_prof);

        
        $__internal_aaab39e45b48cfd2caec5b972ecc70549f820ed9f6bd9dff48caa560e6227f5a->leave($__internal_aaab39e45b48cfd2caec5b972ecc70549f820ed9f6bd9dff48caa560e6227f5a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Exposmaison/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
