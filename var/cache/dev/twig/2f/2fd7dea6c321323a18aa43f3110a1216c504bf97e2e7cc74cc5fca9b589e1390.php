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
        $__internal_dbb0bb8e9adc3111cd3ec4394d1e1abdb232bb1df006d68eb58ae09bd11e84d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb0bb8e9adc3111cd3ec4394d1e1abdb232bb1df006d68eb58ae09bd11e84d4->enter($__internal_dbb0bb8e9adc3111cd3ec4394d1e1abdb232bb1df006d68eb58ae09bd11e84d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_886107d5aafa6d1e0dce88c8b2bee924600af0cc5218e496920173c1ebd336d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886107d5aafa6d1e0dce88c8b2bee924600af0cc5218e496920173c1ebd336d1->enter($__internal_886107d5aafa6d1e0dce88c8b2bee924600af0cc5218e496920173c1ebd336d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbb0bb8e9adc3111cd3ec4394d1e1abdb232bb1df006d68eb58ae09bd11e84d4->leave($__internal_dbb0bb8e9adc3111cd3ec4394d1e1abdb232bb1df006d68eb58ae09bd11e84d4_prof);

        
        $__internal_886107d5aafa6d1e0dce88c8b2bee924600af0cc5218e496920173c1ebd336d1->leave($__internal_886107d5aafa6d1e0dce88c8b2bee924600af0cc5218e496920173c1ebd336d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_092bc77d270269adf00865419b89e351fb89c5b0dbcbd0602a027ceb51af9ed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_092bc77d270269adf00865419b89e351fb89c5b0dbcbd0602a027ceb51af9ed2->enter($__internal_092bc77d270269adf00865419b89e351fb89c5b0dbcbd0602a027ceb51af9ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_778ac15a3f901674f5a51990ad6ce0dd2bf76500aa434a9496ede7a46141b2de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778ac15a3f901674f5a51990ad6ce0dd2bf76500aa434a9496ede7a46141b2de->enter($__internal_778ac15a3f901674f5a51990ad6ce0dd2bf76500aa434a9496ede7a46141b2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_778ac15a3f901674f5a51990ad6ce0dd2bf76500aa434a9496ede7a46141b2de->leave($__internal_778ac15a3f901674f5a51990ad6ce0dd2bf76500aa434a9496ede7a46141b2de_prof);

        
        $__internal_092bc77d270269adf00865419b89e351fb89c5b0dbcbd0602a027ceb51af9ed2->leave($__internal_092bc77d270269adf00865419b89e351fb89c5b0dbcbd0602a027ceb51af9ed2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_498b1fbe945f53a541be568497bac2f08cff7b71cfd750f9578a7e6ae556d7b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498b1fbe945f53a541be568497bac2f08cff7b71cfd750f9578a7e6ae556d7b4->enter($__internal_498b1fbe945f53a541be568497bac2f08cff7b71cfd750f9578a7e6ae556d7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b07fab275f205cf30d4a457da04436f44420673a1fe69835bd0e1efa27e20422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07fab275f205cf30d4a457da04436f44420673a1fe69835bd0e1efa27e20422->enter($__internal_b07fab275f205cf30d4a457da04436f44420673a1fe69835bd0e1efa27e20422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_b07fab275f205cf30d4a457da04436f44420673a1fe69835bd0e1efa27e20422->leave($__internal_b07fab275f205cf30d4a457da04436f44420673a1fe69835bd0e1efa27e20422_prof);

        
        $__internal_498b1fbe945f53a541be568497bac2f08cff7b71cfd750f9578a7e6ae556d7b4->leave($__internal_498b1fbe945f53a541be568497bac2f08cff7b71cfd750f9578a7e6ae556d7b4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_16cdfec8f64121afd7fce5863489365b6152517f807708b8a8c0aa3849528066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16cdfec8f64121afd7fce5863489365b6152517f807708b8a8c0aa3849528066->enter($__internal_16cdfec8f64121afd7fce5863489365b6152517f807708b8a8c0aa3849528066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_042c08b4d88c8f055a14c4110880d8ca67027c6bfd4f84a896fcdb0799cd61b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042c08b4d88c8f055a14c4110880d8ca67027c6bfd4f84a896fcdb0799cd61b1->enter($__internal_042c08b4d88c8f055a14c4110880d8ca67027c6bfd4f84a896fcdb0799cd61b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_042c08b4d88c8f055a14c4110880d8ca67027c6bfd4f84a896fcdb0799cd61b1->leave($__internal_042c08b4d88c8f055a14c4110880d8ca67027c6bfd4f84a896fcdb0799cd61b1_prof);

        
        $__internal_16cdfec8f64121afd7fce5863489365b6152517f807708b8a8c0aa3849528066->leave($__internal_16cdfec8f64121afd7fce5863489365b6152517f807708b8a8c0aa3849528066_prof);

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
