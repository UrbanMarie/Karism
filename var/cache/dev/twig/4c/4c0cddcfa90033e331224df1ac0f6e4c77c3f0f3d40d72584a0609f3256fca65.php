<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_48bea09ebd00fb56f2a8703429db06968d6a07e8f872d1042d9213fcdeca6e03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_246e4fb295ed449874de3dd34f0a25fc02e0bb246701a658d3af100da9fbcb77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_246e4fb295ed449874de3dd34f0a25fc02e0bb246701a658d3af100da9fbcb77->enter($__internal_246e4fb295ed449874de3dd34f0a25fc02e0bb246701a658d3af100da9fbcb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9d6262781f2260e49154b0a9cecde29cd4678a43dae5e377b64b23bf35dd5d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6262781f2260e49154b0a9cecde29cd4678a43dae5e377b64b23bf35dd5d3b->enter($__internal_9d6262781f2260e49154b0a9cecde29cd4678a43dae5e377b64b23bf35dd5d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_246e4fb295ed449874de3dd34f0a25fc02e0bb246701a658d3af100da9fbcb77->leave($__internal_246e4fb295ed449874de3dd34f0a25fc02e0bb246701a658d3af100da9fbcb77_prof);

        
        $__internal_9d6262781f2260e49154b0a9cecde29cd4678a43dae5e377b64b23bf35dd5d3b->leave($__internal_9d6262781f2260e49154b0a9cecde29cd4678a43dae5e377b64b23bf35dd5d3b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6d1e6954f3a7ad310b80aa1d54f2fafd66c8198eecc4ce50f07231477a59c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6d1e6954f3a7ad310b80aa1d54f2fafd66c8198eecc4ce50f07231477a59c50->enter($__internal_a6d1e6954f3a7ad310b80aa1d54f2fafd66c8198eecc4ce50f07231477a59c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7d534208b728d7cb8eb1a889009c2377b85be29ca2585fa2b3268ad7754e2e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d534208b728d7cb8eb1a889009c2377b85be29ca2585fa2b3268ad7754e2e7d->enter($__internal_7d534208b728d7cb8eb1a889009c2377b85be29ca2585fa2b3268ad7754e2e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7d534208b728d7cb8eb1a889009c2377b85be29ca2585fa2b3268ad7754e2e7d->leave($__internal_7d534208b728d7cb8eb1a889009c2377b85be29ca2585fa2b3268ad7754e2e7d_prof);

        
        $__internal_a6d1e6954f3a7ad310b80aa1d54f2fafd66c8198eecc4ce50f07231477a59c50->leave($__internal_a6d1e6954f3a7ad310b80aa1d54f2fafd66c8198eecc4ce50f07231477a59c50_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_48d7808f30033a13fe41b78fc047b7828dc29c9845589f0dc1be9636d225c1ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d7808f30033a13fe41b78fc047b7828dc29c9845589f0dc1be9636d225c1ae->enter($__internal_48d7808f30033a13fe41b78fc047b7828dc29c9845589f0dc1be9636d225c1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_119ee89e09b5b903bcf133b797d14e4a41810fe771ddcca607c6baeda0ed68b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119ee89e09b5b903bcf133b797d14e4a41810fe771ddcca607c6baeda0ed68b6->enter($__internal_119ee89e09b5b903bcf133b797d14e4a41810fe771ddcca607c6baeda0ed68b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_119ee89e09b5b903bcf133b797d14e4a41810fe771ddcca607c6baeda0ed68b6->leave($__internal_119ee89e09b5b903bcf133b797d14e4a41810fe771ddcca607c6baeda0ed68b6_prof);

        
        $__internal_48d7808f30033a13fe41b78fc047b7828dc29c9845589f0dc1be9636d225c1ae->leave($__internal_48d7808f30033a13fe41b78fc047b7828dc29c9845589f0dc1be9636d225c1ae_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b3c77519a9ca72e4ca59d364c03711f44afa876f15dfd7f552136fe9eb782cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b3c77519a9ca72e4ca59d364c03711f44afa876f15dfd7f552136fe9eb782cb->enter($__internal_8b3c77519a9ca72e4ca59d364c03711f44afa876f15dfd7f552136fe9eb782cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0ad48eb115fb33242232d2c3f9f596f06e1d0462fb02c411b7a595f8db1c2a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad48eb115fb33242232d2c3f9f596f06e1d0462fb02c411b7a595f8db1c2a59->enter($__internal_0ad48eb115fb33242232d2c3f9f596f06e1d0462fb02c411b7a595f8db1c2a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_0ad48eb115fb33242232d2c3f9f596f06e1d0462fb02c411b7a595f8db1c2a59->leave($__internal_0ad48eb115fb33242232d2c3f9f596f06e1d0462fb02c411b7a595f8db1c2a59_prof);

        
        $__internal_8b3c77519a9ca72e4ca59d364c03711f44afa876f15dfd7f552136fe9eb782cb->leave($__internal_8b3c77519a9ca72e4ca59d364c03711f44afa876f15dfd7f552136fe9eb782cb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Exposmaison/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
