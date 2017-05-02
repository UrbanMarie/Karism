<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ea1eba626b721d5f2f2b54b1e4a553c84fdc8f20c6305b61e40a9951a6d8df25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_c32ea3105dc8970b602e4de3d40c567261773f47ab01bb817a0b31f2f94637fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c32ea3105dc8970b602e4de3d40c567261773f47ab01bb817a0b31f2f94637fb->enter($__internal_c32ea3105dc8970b602e4de3d40c567261773f47ab01bb817a0b31f2f94637fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e0f3746aa7086eb48569f9ae1a51e9b0307eeaf5f69d3b976df355757a4fd69d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f3746aa7086eb48569f9ae1a51e9b0307eeaf5f69d3b976df355757a4fd69d->enter($__internal_e0f3746aa7086eb48569f9ae1a51e9b0307eeaf5f69d3b976df355757a4fd69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c32ea3105dc8970b602e4de3d40c567261773f47ab01bb817a0b31f2f94637fb->leave($__internal_c32ea3105dc8970b602e4de3d40c567261773f47ab01bb817a0b31f2f94637fb_prof);

        
        $__internal_e0f3746aa7086eb48569f9ae1a51e9b0307eeaf5f69d3b976df355757a4fd69d->leave($__internal_e0f3746aa7086eb48569f9ae1a51e9b0307eeaf5f69d3b976df355757a4fd69d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a32f9315308ff89d4107125a311d0ddfce269b82d83efce0d4b489557907ba11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a32f9315308ff89d4107125a311d0ddfce269b82d83efce0d4b489557907ba11->enter($__internal_a32f9315308ff89d4107125a311d0ddfce269b82d83efce0d4b489557907ba11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3f5380c372430551f93dc30af8f3f1742af201d0ecd0fa64b476e646a206202e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5380c372430551f93dc30af8f3f1742af201d0ecd0fa64b476e646a206202e->enter($__internal_3f5380c372430551f93dc30af8f3f1742af201d0ecd0fa64b476e646a206202e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3f5380c372430551f93dc30af8f3f1742af201d0ecd0fa64b476e646a206202e->leave($__internal_3f5380c372430551f93dc30af8f3f1742af201d0ecd0fa64b476e646a206202e_prof);

        
        $__internal_a32f9315308ff89d4107125a311d0ddfce269b82d83efce0d4b489557907ba11->leave($__internal_a32f9315308ff89d4107125a311d0ddfce269b82d83efce0d4b489557907ba11_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d18f28f0769d02776ceccba8adfc6f05df8ed6e3ffc1c7d32fb2e3fbf99bd2f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d18f28f0769d02776ceccba8adfc6f05df8ed6e3ffc1c7d32fb2e3fbf99bd2f0->enter($__internal_d18f28f0769d02776ceccba8adfc6f05df8ed6e3ffc1c7d32fb2e3fbf99bd2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9d2ab86f5812d704cf70308e36a25fdb71bd27983d4b207eb865a533974d3a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2ab86f5812d704cf70308e36a25fdb71bd27983d4b207eb865a533974d3a99->enter($__internal_9d2ab86f5812d704cf70308e36a25fdb71bd27983d4b207eb865a533974d3a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9d2ab86f5812d704cf70308e36a25fdb71bd27983d4b207eb865a533974d3a99->leave($__internal_9d2ab86f5812d704cf70308e36a25fdb71bd27983d4b207eb865a533974d3a99_prof);

        
        $__internal_d18f28f0769d02776ceccba8adfc6f05df8ed6e3ffc1c7d32fb2e3fbf99bd2f0->leave($__internal_d18f28f0769d02776ceccba8adfc6f05df8ed6e3ffc1c7d32fb2e3fbf99bd2f0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d5cc4877024e04a8f1b78fdad6f27892f9778b0531dcfb05a573cece6d80c1e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5cc4877024e04a8f1b78fdad6f27892f9778b0531dcfb05a573cece6d80c1e1->enter($__internal_d5cc4877024e04a8f1b78fdad6f27892f9778b0531dcfb05a573cece6d80c1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3bb4a6caaef684617fe4633b176fcabc3b6b87a34e8cdcf0e9d92565d70116d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb4a6caaef684617fe4633b176fcabc3b6b87a34e8cdcf0e9d92565d70116d7->enter($__internal_3bb4a6caaef684617fe4633b176fcabc3b6b87a34e8cdcf0e9d92565d70116d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3bb4a6caaef684617fe4633b176fcabc3b6b87a34e8cdcf0e9d92565d70116d7->leave($__internal_3bb4a6caaef684617fe4633b176fcabc3b6b87a34e8cdcf0e9d92565d70116d7_prof);

        
        $__internal_d5cc4877024e04a8f1b78fdad6f27892f9778b0531dcfb05a573cece6d80c1e1->leave($__internal_d5cc4877024e04a8f1b78fdad6f27892f9778b0531dcfb05a573cece6d80c1e1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Exposmaison/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
