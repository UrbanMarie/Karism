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
        $__internal_daeadee132ba1b1511cc91afa0b71f579c03377cea6224ece06d52b78ab8a667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daeadee132ba1b1511cc91afa0b71f579c03377cea6224ece06d52b78ab8a667->enter($__internal_daeadee132ba1b1511cc91afa0b71f579c03377cea6224ece06d52b78ab8a667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a10ff63b692047ba3a2338e1a9326000e77829d649e98f41d7aed96074669a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10ff63b692047ba3a2338e1a9326000e77829d649e98f41d7aed96074669a5d->enter($__internal_a10ff63b692047ba3a2338e1a9326000e77829d649e98f41d7aed96074669a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daeadee132ba1b1511cc91afa0b71f579c03377cea6224ece06d52b78ab8a667->leave($__internal_daeadee132ba1b1511cc91afa0b71f579c03377cea6224ece06d52b78ab8a667_prof);

        
        $__internal_a10ff63b692047ba3a2338e1a9326000e77829d649e98f41d7aed96074669a5d->leave($__internal_a10ff63b692047ba3a2338e1a9326000e77829d649e98f41d7aed96074669a5d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_26a83e796d460c57aa8f20298d86ff19820eb916d748024cee49d7c3cb795983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26a83e796d460c57aa8f20298d86ff19820eb916d748024cee49d7c3cb795983->enter($__internal_26a83e796d460c57aa8f20298d86ff19820eb916d748024cee49d7c3cb795983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fe27842769dfbcb10ac550921cb35235b6ce702e40b5893bb7b27febcd266660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe27842769dfbcb10ac550921cb35235b6ce702e40b5893bb7b27febcd266660->enter($__internal_fe27842769dfbcb10ac550921cb35235b6ce702e40b5893bb7b27febcd266660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fe27842769dfbcb10ac550921cb35235b6ce702e40b5893bb7b27febcd266660->leave($__internal_fe27842769dfbcb10ac550921cb35235b6ce702e40b5893bb7b27febcd266660_prof);

        
        $__internal_26a83e796d460c57aa8f20298d86ff19820eb916d748024cee49d7c3cb795983->leave($__internal_26a83e796d460c57aa8f20298d86ff19820eb916d748024cee49d7c3cb795983_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_73d562b990dc4d755881c95389eae705227e722d97a477738d481b9c59bbcf98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73d562b990dc4d755881c95389eae705227e722d97a477738d481b9c59bbcf98->enter($__internal_73d562b990dc4d755881c95389eae705227e722d97a477738d481b9c59bbcf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ea44ce065feaa7416432cfffdba2dd84796d5526fb6bcf8162602be4673a952e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea44ce065feaa7416432cfffdba2dd84796d5526fb6bcf8162602be4673a952e->enter($__internal_ea44ce065feaa7416432cfffdba2dd84796d5526fb6bcf8162602be4673a952e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ea44ce065feaa7416432cfffdba2dd84796d5526fb6bcf8162602be4673a952e->leave($__internal_ea44ce065feaa7416432cfffdba2dd84796d5526fb6bcf8162602be4673a952e_prof);

        
        $__internal_73d562b990dc4d755881c95389eae705227e722d97a477738d481b9c59bbcf98->leave($__internal_73d562b990dc4d755881c95389eae705227e722d97a477738d481b9c59bbcf98_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1b174904ffb7bda53580652d49120ad8f611428c4a00e58228354a46d1fb3c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b174904ffb7bda53580652d49120ad8f611428c4a00e58228354a46d1fb3c4->enter($__internal_d1b174904ffb7bda53580652d49120ad8f611428c4a00e58228354a46d1fb3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1937d2bc2db49c392045df0db834846ebc97541780c729f2dcb5b14003ba44b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1937d2bc2db49c392045df0db834846ebc97541780c729f2dcb5b14003ba44b8->enter($__internal_1937d2bc2db49c392045df0db834846ebc97541780c729f2dcb5b14003ba44b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1937d2bc2db49c392045df0db834846ebc97541780c729f2dcb5b14003ba44b8->leave($__internal_1937d2bc2db49c392045df0db834846ebc97541780c729f2dcb5b14003ba44b8_prof);

        
        $__internal_d1b174904ffb7bda53580652d49120ad8f611428c4a00e58228354a46d1fb3c4->leave($__internal_d1b174904ffb7bda53580652d49120ad8f611428c4a00e58228354a46d1fb3c4_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Expomaison/exposmaison/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
