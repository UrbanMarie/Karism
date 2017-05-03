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
        $__internal_600e645bd7782dd9c234af7c8b4591e81a4f6ff501b415e35b80f7dcf9134be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_600e645bd7782dd9c234af7c8b4591e81a4f6ff501b415e35b80f7dcf9134be7->enter($__internal_600e645bd7782dd9c234af7c8b4591e81a4f6ff501b415e35b80f7dcf9134be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ac7fd0a28f19e46011d78122410b6aa421bdc8cc3030a31ad5669e6638e3670a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7fd0a28f19e46011d78122410b6aa421bdc8cc3030a31ad5669e6638e3670a->enter($__internal_ac7fd0a28f19e46011d78122410b6aa421bdc8cc3030a31ad5669e6638e3670a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_600e645bd7782dd9c234af7c8b4591e81a4f6ff501b415e35b80f7dcf9134be7->leave($__internal_600e645bd7782dd9c234af7c8b4591e81a4f6ff501b415e35b80f7dcf9134be7_prof);

        
        $__internal_ac7fd0a28f19e46011d78122410b6aa421bdc8cc3030a31ad5669e6638e3670a->leave($__internal_ac7fd0a28f19e46011d78122410b6aa421bdc8cc3030a31ad5669e6638e3670a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3035fd7e63eee11ee0c08f96f4f8884db3d85a39650304514b26070a841416ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3035fd7e63eee11ee0c08f96f4f8884db3d85a39650304514b26070a841416ac->enter($__internal_3035fd7e63eee11ee0c08f96f4f8884db3d85a39650304514b26070a841416ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_22cdc2d7e632071f31708f16d6190511fc8eb66c3f0c6b6391cbae9295458cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22cdc2d7e632071f31708f16d6190511fc8eb66c3f0c6b6391cbae9295458cc9->enter($__internal_22cdc2d7e632071f31708f16d6190511fc8eb66c3f0c6b6391cbae9295458cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_22cdc2d7e632071f31708f16d6190511fc8eb66c3f0c6b6391cbae9295458cc9->leave($__internal_22cdc2d7e632071f31708f16d6190511fc8eb66c3f0c6b6391cbae9295458cc9_prof);

        
        $__internal_3035fd7e63eee11ee0c08f96f4f8884db3d85a39650304514b26070a841416ac->leave($__internal_3035fd7e63eee11ee0c08f96f4f8884db3d85a39650304514b26070a841416ac_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c1800b6076fe1d1be7112c6b9cee84639971366ec723b80d2f783f6c7dd6e059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1800b6076fe1d1be7112c6b9cee84639971366ec723b80d2f783f6c7dd6e059->enter($__internal_c1800b6076fe1d1be7112c6b9cee84639971366ec723b80d2f783f6c7dd6e059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_97c8dc504518ee86ae9cf848162e5529db030629ba2d3487bdeeadb3dc44e0d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c8dc504518ee86ae9cf848162e5529db030629ba2d3487bdeeadb3dc44e0d2->enter($__internal_97c8dc504518ee86ae9cf848162e5529db030629ba2d3487bdeeadb3dc44e0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_97c8dc504518ee86ae9cf848162e5529db030629ba2d3487bdeeadb3dc44e0d2->leave($__internal_97c8dc504518ee86ae9cf848162e5529db030629ba2d3487bdeeadb3dc44e0d2_prof);

        
        $__internal_c1800b6076fe1d1be7112c6b9cee84639971366ec723b80d2f783f6c7dd6e059->leave($__internal_c1800b6076fe1d1be7112c6b9cee84639971366ec723b80d2f783f6c7dd6e059_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0e539517e4f94b215b5de778b17c1e2e0cbd22164b4712a132d4268b1a0873c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e539517e4f94b215b5de778b17c1e2e0cbd22164b4712a132d4268b1a0873c->enter($__internal_a0e539517e4f94b215b5de778b17c1e2e0cbd22164b4712a132d4268b1a0873c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b1c6ed3364ac1096b87afb6e5a70d2521414310c0e5bb2bfc39ec29999c54f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c6ed3364ac1096b87afb6e5a70d2521414310c0e5bb2bfc39ec29999c54f40->enter($__internal_b1c6ed3364ac1096b87afb6e5a70d2521414310c0e5bb2bfc39ec29999c54f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b1c6ed3364ac1096b87afb6e5a70d2521414310c0e5bb2bfc39ec29999c54f40->leave($__internal_b1c6ed3364ac1096b87afb6e5a70d2521414310c0e5bb2bfc39ec29999c54f40_prof);

        
        $__internal_a0e539517e4f94b215b5de778b17c1e2e0cbd22164b4712a132d4268b1a0873c->leave($__internal_a0e539517e4f94b215b5de778b17c1e2e0cbd22164b4712a132d4268b1a0873c_prof);

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
