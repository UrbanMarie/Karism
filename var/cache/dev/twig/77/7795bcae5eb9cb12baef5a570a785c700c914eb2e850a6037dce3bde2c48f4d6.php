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
        $__internal_608f879c9d21847e0891f00a1ab91d221de552c434f360978c134ad410a49517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_608f879c9d21847e0891f00a1ab91d221de552c434f360978c134ad410a49517->enter($__internal_608f879c9d21847e0891f00a1ab91d221de552c434f360978c134ad410a49517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0313e9c121f76abc0ce28f5660472cc1e4eb12e4284d25d7e13c85d6c4941500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0313e9c121f76abc0ce28f5660472cc1e4eb12e4284d25d7e13c85d6c4941500->enter($__internal_0313e9c121f76abc0ce28f5660472cc1e4eb12e4284d25d7e13c85d6c4941500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_608f879c9d21847e0891f00a1ab91d221de552c434f360978c134ad410a49517->leave($__internal_608f879c9d21847e0891f00a1ab91d221de552c434f360978c134ad410a49517_prof);

        
        $__internal_0313e9c121f76abc0ce28f5660472cc1e4eb12e4284d25d7e13c85d6c4941500->leave($__internal_0313e9c121f76abc0ce28f5660472cc1e4eb12e4284d25d7e13c85d6c4941500_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fe9db410ebabc4f17c06699036d4fe57959b444ff79e6105f2ebf22ef894aa20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9db410ebabc4f17c06699036d4fe57959b444ff79e6105f2ebf22ef894aa20->enter($__internal_fe9db410ebabc4f17c06699036d4fe57959b444ff79e6105f2ebf22ef894aa20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_95535d0d5fb3f15847ecf6fb2f28445ccd614ab9a19c00a031518964cd38440c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95535d0d5fb3f15847ecf6fb2f28445ccd614ab9a19c00a031518964cd38440c->enter($__internal_95535d0d5fb3f15847ecf6fb2f28445ccd614ab9a19c00a031518964cd38440c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_95535d0d5fb3f15847ecf6fb2f28445ccd614ab9a19c00a031518964cd38440c->leave($__internal_95535d0d5fb3f15847ecf6fb2f28445ccd614ab9a19c00a031518964cd38440c_prof);

        
        $__internal_fe9db410ebabc4f17c06699036d4fe57959b444ff79e6105f2ebf22ef894aa20->leave($__internal_fe9db410ebabc4f17c06699036d4fe57959b444ff79e6105f2ebf22ef894aa20_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_12d6b74a6bff94130a4fe0e27076cc4e95a6b0421399d902ff5375a7213023cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12d6b74a6bff94130a4fe0e27076cc4e95a6b0421399d902ff5375a7213023cc->enter($__internal_12d6b74a6bff94130a4fe0e27076cc4e95a6b0421399d902ff5375a7213023cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0c01dc26ae3f4b4ffb2f520f73c806bc1ee0558a69c4d74fb57002970d5aaa17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c01dc26ae3f4b4ffb2f520f73c806bc1ee0558a69c4d74fb57002970d5aaa17->enter($__internal_0c01dc26ae3f4b4ffb2f520f73c806bc1ee0558a69c4d74fb57002970d5aaa17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0c01dc26ae3f4b4ffb2f520f73c806bc1ee0558a69c4d74fb57002970d5aaa17->leave($__internal_0c01dc26ae3f4b4ffb2f520f73c806bc1ee0558a69c4d74fb57002970d5aaa17_prof);

        
        $__internal_12d6b74a6bff94130a4fe0e27076cc4e95a6b0421399d902ff5375a7213023cc->leave($__internal_12d6b74a6bff94130a4fe0e27076cc4e95a6b0421399d902ff5375a7213023cc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b5ac27e6e0ec3e99e8899f7c290216aaecc9056083ba24490bd4aa39ffe3ced9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5ac27e6e0ec3e99e8899f7c290216aaecc9056083ba24490bd4aa39ffe3ced9->enter($__internal_b5ac27e6e0ec3e99e8899f7c290216aaecc9056083ba24490bd4aa39ffe3ced9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0c5d181f3bf74cf600ad30b7380bd809fed676f3ce52e88cc419414c6d815e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5d181f3bf74cf600ad30b7380bd809fed676f3ce52e88cc419414c6d815e1a->enter($__internal_0c5d181f3bf74cf600ad30b7380bd809fed676f3ce52e88cc419414c6d815e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_0c5d181f3bf74cf600ad30b7380bd809fed676f3ce52e88cc419414c6d815e1a->leave($__internal_0c5d181f3bf74cf600ad30b7380bd809fed676f3ce52e88cc419414c6d815e1a_prof);

        
        $__internal_b5ac27e6e0ec3e99e8899f7c290216aaecc9056083ba24490bd4aa39ffe3ced9->leave($__internal_b5ac27e6e0ec3e99e8899f7c290216aaecc9056083ba24490bd4aa39ffe3ced9_prof);

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
