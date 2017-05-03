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
        $__internal_458c488826d3e6100f937a3173c0a8bf41cbcd2d12e028c3fd65a43ffe2f8a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_458c488826d3e6100f937a3173c0a8bf41cbcd2d12e028c3fd65a43ffe2f8a23->enter($__internal_458c488826d3e6100f937a3173c0a8bf41cbcd2d12e028c3fd65a43ffe2f8a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3e22a4a5025743838e36ce1edb8f5a7ccbd6bc41fac7f72500a487f143559e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e22a4a5025743838e36ce1edb8f5a7ccbd6bc41fac7f72500a487f143559e68->enter($__internal_3e22a4a5025743838e36ce1edb8f5a7ccbd6bc41fac7f72500a487f143559e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_458c488826d3e6100f937a3173c0a8bf41cbcd2d12e028c3fd65a43ffe2f8a23->leave($__internal_458c488826d3e6100f937a3173c0a8bf41cbcd2d12e028c3fd65a43ffe2f8a23_prof);

        
        $__internal_3e22a4a5025743838e36ce1edb8f5a7ccbd6bc41fac7f72500a487f143559e68->leave($__internal_3e22a4a5025743838e36ce1edb8f5a7ccbd6bc41fac7f72500a487f143559e68_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4396a1c4e1a46ce9d68e4cb782f481cae3fade342b422b9b2c73c05c552c5c90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4396a1c4e1a46ce9d68e4cb782f481cae3fade342b422b9b2c73c05c552c5c90->enter($__internal_4396a1c4e1a46ce9d68e4cb782f481cae3fade342b422b9b2c73c05c552c5c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_379a8ad4aca032fb8682930f519f65023f263db96df0a39e04e71dcd8f82b6e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379a8ad4aca032fb8682930f519f65023f263db96df0a39e04e71dcd8f82b6e1->enter($__internal_379a8ad4aca032fb8682930f519f65023f263db96df0a39e04e71dcd8f82b6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_379a8ad4aca032fb8682930f519f65023f263db96df0a39e04e71dcd8f82b6e1->leave($__internal_379a8ad4aca032fb8682930f519f65023f263db96df0a39e04e71dcd8f82b6e1_prof);

        
        $__internal_4396a1c4e1a46ce9d68e4cb782f481cae3fade342b422b9b2c73c05c552c5c90->leave($__internal_4396a1c4e1a46ce9d68e4cb782f481cae3fade342b422b9b2c73c05c552c5c90_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_800f54c8acafc2ce4d92ef004e1a60f520045aff651f4683c8e24817bf313d80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800f54c8acafc2ce4d92ef004e1a60f520045aff651f4683c8e24817bf313d80->enter($__internal_800f54c8acafc2ce4d92ef004e1a60f520045aff651f4683c8e24817bf313d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5885e2bbc3735a77c3244f2adeca5a4c66f06710eb5c2f80f11bc0375069458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5885e2bbc3735a77c3244f2adeca5a4c66f06710eb5c2f80f11bc0375069458->enter($__internal_c5885e2bbc3735a77c3244f2adeca5a4c66f06710eb5c2f80f11bc0375069458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_c5885e2bbc3735a77c3244f2adeca5a4c66f06710eb5c2f80f11bc0375069458->leave($__internal_c5885e2bbc3735a77c3244f2adeca5a4c66f06710eb5c2f80f11bc0375069458_prof);

        
        $__internal_800f54c8acafc2ce4d92ef004e1a60f520045aff651f4683c8e24817bf313d80->leave($__internal_800f54c8acafc2ce4d92ef004e1a60f520045aff651f4683c8e24817bf313d80_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8aa24db3c42639e2103ee1557693bad2e6f50f27cfa9c14f5e4f4cc60ced450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8aa24db3c42639e2103ee1557693bad2e6f50f27cfa9c14f5e4f4cc60ced450->enter($__internal_b8aa24db3c42639e2103ee1557693bad2e6f50f27cfa9c14f5e4f4cc60ced450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a300bea0d3ad573c05fec03307d13625684f14d711cd70f8b483b13846f04b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a300bea0d3ad573c05fec03307d13625684f14d711cd70f8b483b13846f04b72->enter($__internal_a300bea0d3ad573c05fec03307d13625684f14d711cd70f8b483b13846f04b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a300bea0d3ad573c05fec03307d13625684f14d711cd70f8b483b13846f04b72->leave($__internal_a300bea0d3ad573c05fec03307d13625684f14d711cd70f8b483b13846f04b72_prof);

        
        $__internal_b8aa24db3c42639e2103ee1557693bad2e6f50f27cfa9c14f5e4f4cc60ced450->leave($__internal_b8aa24db3c42639e2103ee1557693bad2e6f50f27cfa9c14f5e4f4cc60ced450_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Expomaison/exposmaison/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
