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
        $__internal_f98e60d45728eb550dac8b217ab80e0781cbc25fb7eea2b3fa8d0bb6f0decb97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f98e60d45728eb550dac8b217ab80e0781cbc25fb7eea2b3fa8d0bb6f0decb97->enter($__internal_f98e60d45728eb550dac8b217ab80e0781cbc25fb7eea2b3fa8d0bb6f0decb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_51538f5c0a7e756c8f58b37bb24015613bb4993726b1211da9005ff5954d3e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51538f5c0a7e756c8f58b37bb24015613bb4993726b1211da9005ff5954d3e98->enter($__internal_51538f5c0a7e756c8f58b37bb24015613bb4993726b1211da9005ff5954d3e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f98e60d45728eb550dac8b217ab80e0781cbc25fb7eea2b3fa8d0bb6f0decb97->leave($__internal_f98e60d45728eb550dac8b217ab80e0781cbc25fb7eea2b3fa8d0bb6f0decb97_prof);

        
        $__internal_51538f5c0a7e756c8f58b37bb24015613bb4993726b1211da9005ff5954d3e98->leave($__internal_51538f5c0a7e756c8f58b37bb24015613bb4993726b1211da9005ff5954d3e98_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1c16ebb0dc4822301744d7dc9435a93a56510839b1d767a5f18ffefbfb30d481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c16ebb0dc4822301744d7dc9435a93a56510839b1d767a5f18ffefbfb30d481->enter($__internal_1c16ebb0dc4822301744d7dc9435a93a56510839b1d767a5f18ffefbfb30d481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f09cce9fc7e23c4bcc206373b73f95a82e9bb0709ddf930c868d2a4eab33a98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09cce9fc7e23c4bcc206373b73f95a82e9bb0709ddf930c868d2a4eab33a98f->enter($__internal_f09cce9fc7e23c4bcc206373b73f95a82e9bb0709ddf930c868d2a4eab33a98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f09cce9fc7e23c4bcc206373b73f95a82e9bb0709ddf930c868d2a4eab33a98f->leave($__internal_f09cce9fc7e23c4bcc206373b73f95a82e9bb0709ddf930c868d2a4eab33a98f_prof);

        
        $__internal_1c16ebb0dc4822301744d7dc9435a93a56510839b1d767a5f18ffefbfb30d481->leave($__internal_1c16ebb0dc4822301744d7dc9435a93a56510839b1d767a5f18ffefbfb30d481_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a14bf050a3e4f4aae39f3cd4de66ad467fed70b8e3f8faeaee5023b71e0edd36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a14bf050a3e4f4aae39f3cd4de66ad467fed70b8e3f8faeaee5023b71e0edd36->enter($__internal_a14bf050a3e4f4aae39f3cd4de66ad467fed70b8e3f8faeaee5023b71e0edd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_24131ab745d49588906a914b0dcead9eeadad1e0b9e6cd01cc0f1fdb06165c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24131ab745d49588906a914b0dcead9eeadad1e0b9e6cd01cc0f1fdb06165c20->enter($__internal_24131ab745d49588906a914b0dcead9eeadad1e0b9e6cd01cc0f1fdb06165c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_24131ab745d49588906a914b0dcead9eeadad1e0b9e6cd01cc0f1fdb06165c20->leave($__internal_24131ab745d49588906a914b0dcead9eeadad1e0b9e6cd01cc0f1fdb06165c20_prof);

        
        $__internal_a14bf050a3e4f4aae39f3cd4de66ad467fed70b8e3f8faeaee5023b71e0edd36->leave($__internal_a14bf050a3e4f4aae39f3cd4de66ad467fed70b8e3f8faeaee5023b71e0edd36_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de9608ee81136bb475e740013a91e3f8e6f1066ca10116c95e62bf72fedf2a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de9608ee81136bb475e740013a91e3f8e6f1066ca10116c95e62bf72fedf2a20->enter($__internal_de9608ee81136bb475e740013a91e3f8e6f1066ca10116c95e62bf72fedf2a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0d4932218d70734c5d86de22414dc871e882a71e37c171db9487840fcc98ca03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4932218d70734c5d86de22414dc871e882a71e37c171db9487840fcc98ca03->enter($__internal_0d4932218d70734c5d86de22414dc871e882a71e37c171db9487840fcc98ca03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_0d4932218d70734c5d86de22414dc871e882a71e37c171db9487840fcc98ca03->leave($__internal_0d4932218d70734c5d86de22414dc871e882a71e37c171db9487840fcc98ca03_prof);

        
        $__internal_de9608ee81136bb475e740013a91e3f8e6f1066ca10116c95e62bf72fedf2a20->leave($__internal_de9608ee81136bb475e740013a91e3f8e6f1066ca10116c95e62bf72fedf2a20_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Expomaison/exposmaison/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
