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
        $__internal_8a9837d326e93bddedd2ed94c5a4e369f8f893ab4c2007a91cb504f647f6dcce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a9837d326e93bddedd2ed94c5a4e369f8f893ab4c2007a91cb504f647f6dcce->enter($__internal_8a9837d326e93bddedd2ed94c5a4e369f8f893ab4c2007a91cb504f647f6dcce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3089aaa12f0ae30242e8e342bc5862675f573959f7f94920690b203c9ababd21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3089aaa12f0ae30242e8e342bc5862675f573959f7f94920690b203c9ababd21->enter($__internal_3089aaa12f0ae30242e8e342bc5862675f573959f7f94920690b203c9ababd21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a9837d326e93bddedd2ed94c5a4e369f8f893ab4c2007a91cb504f647f6dcce->leave($__internal_8a9837d326e93bddedd2ed94c5a4e369f8f893ab4c2007a91cb504f647f6dcce_prof);

        
        $__internal_3089aaa12f0ae30242e8e342bc5862675f573959f7f94920690b203c9ababd21->leave($__internal_3089aaa12f0ae30242e8e342bc5862675f573959f7f94920690b203c9ababd21_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f9dd25a378e76d3842b5dd6ada4e70198636b29d91f39c738da57e8ada4ae7ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9dd25a378e76d3842b5dd6ada4e70198636b29d91f39c738da57e8ada4ae7ed->enter($__internal_f9dd25a378e76d3842b5dd6ada4e70198636b29d91f39c738da57e8ada4ae7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3fe1bd599624dbc527529a7bf42c8ce5ca5b4066b0633562ce2468b2c4898cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe1bd599624dbc527529a7bf42c8ce5ca5b4066b0633562ce2468b2c4898cc4->enter($__internal_3fe1bd599624dbc527529a7bf42c8ce5ca5b4066b0633562ce2468b2c4898cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3fe1bd599624dbc527529a7bf42c8ce5ca5b4066b0633562ce2468b2c4898cc4->leave($__internal_3fe1bd599624dbc527529a7bf42c8ce5ca5b4066b0633562ce2468b2c4898cc4_prof);

        
        $__internal_f9dd25a378e76d3842b5dd6ada4e70198636b29d91f39c738da57e8ada4ae7ed->leave($__internal_f9dd25a378e76d3842b5dd6ada4e70198636b29d91f39c738da57e8ada4ae7ed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6cd13a64238e4b1dc8af8661ef785bc2b8fe638d7c0ae86632dd4087a9fa78d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd13a64238e4b1dc8af8661ef785bc2b8fe638d7c0ae86632dd4087a9fa78d4->enter($__internal_6cd13a64238e4b1dc8af8661ef785bc2b8fe638d7c0ae86632dd4087a9fa78d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_69569269a21a8618ce1e7c59f528af4f18499546b4abbccb89351586f1479060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69569269a21a8618ce1e7c59f528af4f18499546b4abbccb89351586f1479060->enter($__internal_69569269a21a8618ce1e7c59f528af4f18499546b4abbccb89351586f1479060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_69569269a21a8618ce1e7c59f528af4f18499546b4abbccb89351586f1479060->leave($__internal_69569269a21a8618ce1e7c59f528af4f18499546b4abbccb89351586f1479060_prof);

        
        $__internal_6cd13a64238e4b1dc8af8661ef785bc2b8fe638d7c0ae86632dd4087a9fa78d4->leave($__internal_6cd13a64238e4b1dc8af8661ef785bc2b8fe638d7c0ae86632dd4087a9fa78d4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27f646dbb4859df1122a1ff128fc866f911b633418cae9fcbe5926cbbb11a4a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f646dbb4859df1122a1ff128fc866f911b633418cae9fcbe5926cbbb11a4a7->enter($__internal_27f646dbb4859df1122a1ff128fc866f911b633418cae9fcbe5926cbbb11a4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1659921191a9ba3d4b8588596361a9ccff0caf2baa6e0a248f9a120d8115949a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1659921191a9ba3d4b8588596361a9ccff0caf2baa6e0a248f9a120d8115949a->enter($__internal_1659921191a9ba3d4b8588596361a9ccff0caf2baa6e0a248f9a120d8115949a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1659921191a9ba3d4b8588596361a9ccff0caf2baa6e0a248f9a120d8115949a->leave($__internal_1659921191a9ba3d4b8588596361a9ccff0caf2baa6e0a248f9a120d8115949a_prof);

        
        $__internal_27f646dbb4859df1122a1ff128fc866f911b633418cae9fcbe5926cbbb11a4a7->leave($__internal_27f646dbb4859df1122a1ff128fc866f911b633418cae9fcbe5926cbbb11a4a7_prof);

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
