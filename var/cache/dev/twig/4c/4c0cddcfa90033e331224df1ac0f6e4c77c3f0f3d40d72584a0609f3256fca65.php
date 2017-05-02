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
        $__internal_ca817f5fe3d94172627caabcde22c14c16a77a5a10d5347c07d5cf7a2cbcb865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca817f5fe3d94172627caabcde22c14c16a77a5a10d5347c07d5cf7a2cbcb865->enter($__internal_ca817f5fe3d94172627caabcde22c14c16a77a5a10d5347c07d5cf7a2cbcb865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_684de7d68212c85b31df334381d8fd8d6c483a0d21444dd04b132adb9d0dcca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684de7d68212c85b31df334381d8fd8d6c483a0d21444dd04b132adb9d0dcca1->enter($__internal_684de7d68212c85b31df334381d8fd8d6c483a0d21444dd04b132adb9d0dcca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca817f5fe3d94172627caabcde22c14c16a77a5a10d5347c07d5cf7a2cbcb865->leave($__internal_ca817f5fe3d94172627caabcde22c14c16a77a5a10d5347c07d5cf7a2cbcb865_prof);

        
        $__internal_684de7d68212c85b31df334381d8fd8d6c483a0d21444dd04b132adb9d0dcca1->leave($__internal_684de7d68212c85b31df334381d8fd8d6c483a0d21444dd04b132adb9d0dcca1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7a38eb31a9859c5ab7cc99b29eec825b38dcd15f33b5844007b7718f2575475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a38eb31a9859c5ab7cc99b29eec825b38dcd15f33b5844007b7718f2575475->enter($__internal_d7a38eb31a9859c5ab7cc99b29eec825b38dcd15f33b5844007b7718f2575475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_93c01f3ade05a42ccb05dd8f7447a9243c956d0da5eed02122d1c1a3622ca2cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c01f3ade05a42ccb05dd8f7447a9243c956d0da5eed02122d1c1a3622ca2cf->enter($__internal_93c01f3ade05a42ccb05dd8f7447a9243c956d0da5eed02122d1c1a3622ca2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_93c01f3ade05a42ccb05dd8f7447a9243c956d0da5eed02122d1c1a3622ca2cf->leave($__internal_93c01f3ade05a42ccb05dd8f7447a9243c956d0da5eed02122d1c1a3622ca2cf_prof);

        
        $__internal_d7a38eb31a9859c5ab7cc99b29eec825b38dcd15f33b5844007b7718f2575475->leave($__internal_d7a38eb31a9859c5ab7cc99b29eec825b38dcd15f33b5844007b7718f2575475_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c945f2876f99bfe15eefa2ac8837ceef4fed0c380a3be089c89c54f4d980915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c945f2876f99bfe15eefa2ac8837ceef4fed0c380a3be089c89c54f4d980915->enter($__internal_9c945f2876f99bfe15eefa2ac8837ceef4fed0c380a3be089c89c54f4d980915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d548e6285229f6c4dd59b5420a1556a26fb38995d0cdbbb048bf592e0bb908c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d548e6285229f6c4dd59b5420a1556a26fb38995d0cdbbb048bf592e0bb908c4->enter($__internal_d548e6285229f6c4dd59b5420a1556a26fb38995d0cdbbb048bf592e0bb908c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d548e6285229f6c4dd59b5420a1556a26fb38995d0cdbbb048bf592e0bb908c4->leave($__internal_d548e6285229f6c4dd59b5420a1556a26fb38995d0cdbbb048bf592e0bb908c4_prof);

        
        $__internal_9c945f2876f99bfe15eefa2ac8837ceef4fed0c380a3be089c89c54f4d980915->leave($__internal_9c945f2876f99bfe15eefa2ac8837ceef4fed0c380a3be089c89c54f4d980915_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_799a6ba489a7225dc35f8ff37be0cbba87d1d94260ae8299eaf517469b535dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_799a6ba489a7225dc35f8ff37be0cbba87d1d94260ae8299eaf517469b535dff->enter($__internal_799a6ba489a7225dc35f8ff37be0cbba87d1d94260ae8299eaf517469b535dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cc742ed741028c1f9c8294eb36dc7f1a2f4b65afc4a1035eb49c947810f8ca24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc742ed741028c1f9c8294eb36dc7f1a2f4b65afc4a1035eb49c947810f8ca24->enter($__internal_cc742ed741028c1f9c8294eb36dc7f1a2f4b65afc4a1035eb49c947810f8ca24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_cc742ed741028c1f9c8294eb36dc7f1a2f4b65afc4a1035eb49c947810f8ca24->leave($__internal_cc742ed741028c1f9c8294eb36dc7f1a2f4b65afc4a1035eb49c947810f8ca24_prof);

        
        $__internal_799a6ba489a7225dc35f8ff37be0cbba87d1d94260ae8299eaf517469b535dff->leave($__internal_799a6ba489a7225dc35f8ff37be0cbba87d1d94260ae8299eaf517469b535dff_prof);

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
