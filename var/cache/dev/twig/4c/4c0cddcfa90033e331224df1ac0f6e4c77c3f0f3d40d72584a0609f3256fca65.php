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
        $__internal_95a3b7c7b7ab6e6f5365e582daf4fc012c8004fb66af008674f521f9c4233ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95a3b7c7b7ab6e6f5365e582daf4fc012c8004fb66af008674f521f9c4233ab2->enter($__internal_95a3b7c7b7ab6e6f5365e582daf4fc012c8004fb66af008674f521f9c4233ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6ba4824ea2987c3c7890f0cc06c7dc337fbb874f55591749e9c22a3ce337bf98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba4824ea2987c3c7890f0cc06c7dc337fbb874f55591749e9c22a3ce337bf98->enter($__internal_6ba4824ea2987c3c7890f0cc06c7dc337fbb874f55591749e9c22a3ce337bf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95a3b7c7b7ab6e6f5365e582daf4fc012c8004fb66af008674f521f9c4233ab2->leave($__internal_95a3b7c7b7ab6e6f5365e582daf4fc012c8004fb66af008674f521f9c4233ab2_prof);

        
        $__internal_6ba4824ea2987c3c7890f0cc06c7dc337fbb874f55591749e9c22a3ce337bf98->leave($__internal_6ba4824ea2987c3c7890f0cc06c7dc337fbb874f55591749e9c22a3ce337bf98_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dae7b42edce73dca6cf93b11a5b7fbcee99fc7e02de8e9d0336a441bb5931d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae7b42edce73dca6cf93b11a5b7fbcee99fc7e02de8e9d0336a441bb5931d75->enter($__internal_dae7b42edce73dca6cf93b11a5b7fbcee99fc7e02de8e9d0336a441bb5931d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6577a7cc988db7d4b649f11ee60822921a90cbf1e6740ccaf4bb3412e0110306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6577a7cc988db7d4b649f11ee60822921a90cbf1e6740ccaf4bb3412e0110306->enter($__internal_6577a7cc988db7d4b649f11ee60822921a90cbf1e6740ccaf4bb3412e0110306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6577a7cc988db7d4b649f11ee60822921a90cbf1e6740ccaf4bb3412e0110306->leave($__internal_6577a7cc988db7d4b649f11ee60822921a90cbf1e6740ccaf4bb3412e0110306_prof);

        
        $__internal_dae7b42edce73dca6cf93b11a5b7fbcee99fc7e02de8e9d0336a441bb5931d75->leave($__internal_dae7b42edce73dca6cf93b11a5b7fbcee99fc7e02de8e9d0336a441bb5931d75_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_787e9e11f9251d07048067084a6283de6670c4ac0666c6b12d948b08fa3a9bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_787e9e11f9251d07048067084a6283de6670c4ac0666c6b12d948b08fa3a9bfb->enter($__internal_787e9e11f9251d07048067084a6283de6670c4ac0666c6b12d948b08fa3a9bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_864e5b1835130293a128619ecaf17940fdc751f5b98b583a7682693b2e115b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864e5b1835130293a128619ecaf17940fdc751f5b98b583a7682693b2e115b4d->enter($__internal_864e5b1835130293a128619ecaf17940fdc751f5b98b583a7682693b2e115b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_864e5b1835130293a128619ecaf17940fdc751f5b98b583a7682693b2e115b4d->leave($__internal_864e5b1835130293a128619ecaf17940fdc751f5b98b583a7682693b2e115b4d_prof);

        
        $__internal_787e9e11f9251d07048067084a6283de6670c4ac0666c6b12d948b08fa3a9bfb->leave($__internal_787e9e11f9251d07048067084a6283de6670c4ac0666c6b12d948b08fa3a9bfb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_abea68a4e2eb8680fe8d04f8bb5112b817f7d001c05f2e960d636adace36b6e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abea68a4e2eb8680fe8d04f8bb5112b817f7d001c05f2e960d636adace36b6e9->enter($__internal_abea68a4e2eb8680fe8d04f8bb5112b817f7d001c05f2e960d636adace36b6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_815b67ad3f2505a274b65bd7bc81187f5125dae82898d974b9b1abdcfa522fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815b67ad3f2505a274b65bd7bc81187f5125dae82898d974b9b1abdcfa522fe7->enter($__internal_815b67ad3f2505a274b65bd7bc81187f5125dae82898d974b9b1abdcfa522fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_815b67ad3f2505a274b65bd7bc81187f5125dae82898d974b9b1abdcfa522fe7->leave($__internal_815b67ad3f2505a274b65bd7bc81187f5125dae82898d974b9b1abdcfa522fe7_prof);

        
        $__internal_abea68a4e2eb8680fe8d04f8bb5112b817f7d001c05f2e960d636adace36b6e9->leave($__internal_abea68a4e2eb8680fe8d04f8bb5112b817f7d001c05f2e960d636adace36b6e9_prof);

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
