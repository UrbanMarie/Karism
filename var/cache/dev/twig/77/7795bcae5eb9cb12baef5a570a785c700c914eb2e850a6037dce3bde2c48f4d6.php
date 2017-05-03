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
        $__internal_c5b04a830c702cee5337c7857c852dd737751e81f32aa5901e085249228a56ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b04a830c702cee5337c7857c852dd737751e81f32aa5901e085249228a56ac->enter($__internal_c5b04a830c702cee5337c7857c852dd737751e81f32aa5901e085249228a56ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_23f05574493363f92db1357caa0398b5dff73f316a0aaf26ef4f5ed78c01cf28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f05574493363f92db1357caa0398b5dff73f316a0aaf26ef4f5ed78c01cf28->enter($__internal_23f05574493363f92db1357caa0398b5dff73f316a0aaf26ef4f5ed78c01cf28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5b04a830c702cee5337c7857c852dd737751e81f32aa5901e085249228a56ac->leave($__internal_c5b04a830c702cee5337c7857c852dd737751e81f32aa5901e085249228a56ac_prof);

        
        $__internal_23f05574493363f92db1357caa0398b5dff73f316a0aaf26ef4f5ed78c01cf28->leave($__internal_23f05574493363f92db1357caa0398b5dff73f316a0aaf26ef4f5ed78c01cf28_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_763d6386fac96cf57185448cfce6a18453fc62733ddd3172f6e5e3cf6a663a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763d6386fac96cf57185448cfce6a18453fc62733ddd3172f6e5e3cf6a663a7e->enter($__internal_763d6386fac96cf57185448cfce6a18453fc62733ddd3172f6e5e3cf6a663a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c397e8644f483efcd185b1567dbb0af25d4575ebaadf1a4cb289f3a1bc9fc72c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c397e8644f483efcd185b1567dbb0af25d4575ebaadf1a4cb289f3a1bc9fc72c->enter($__internal_c397e8644f483efcd185b1567dbb0af25d4575ebaadf1a4cb289f3a1bc9fc72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c397e8644f483efcd185b1567dbb0af25d4575ebaadf1a4cb289f3a1bc9fc72c->leave($__internal_c397e8644f483efcd185b1567dbb0af25d4575ebaadf1a4cb289f3a1bc9fc72c_prof);

        
        $__internal_763d6386fac96cf57185448cfce6a18453fc62733ddd3172f6e5e3cf6a663a7e->leave($__internal_763d6386fac96cf57185448cfce6a18453fc62733ddd3172f6e5e3cf6a663a7e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d68f4d740ee2a4ffd0fb4b8bb58bc40086ea5d43ed44f6e80bd1c41581aed05e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d68f4d740ee2a4ffd0fb4b8bb58bc40086ea5d43ed44f6e80bd1c41581aed05e->enter($__internal_d68f4d740ee2a4ffd0fb4b8bb58bc40086ea5d43ed44f6e80bd1c41581aed05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_36ae6cc3dfd28f3ce0319103da0e00973ee8366dfb2165153deb75a04d38ede7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ae6cc3dfd28f3ce0319103da0e00973ee8366dfb2165153deb75a04d38ede7->enter($__internal_36ae6cc3dfd28f3ce0319103da0e00973ee8366dfb2165153deb75a04d38ede7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_36ae6cc3dfd28f3ce0319103da0e00973ee8366dfb2165153deb75a04d38ede7->leave($__internal_36ae6cc3dfd28f3ce0319103da0e00973ee8366dfb2165153deb75a04d38ede7_prof);

        
        $__internal_d68f4d740ee2a4ffd0fb4b8bb58bc40086ea5d43ed44f6e80bd1c41581aed05e->leave($__internal_d68f4d740ee2a4ffd0fb4b8bb58bc40086ea5d43ed44f6e80bd1c41581aed05e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_484c6e2ee99af143cea31e08ec84278689398874096c51f55e1fb402e66b9980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_484c6e2ee99af143cea31e08ec84278689398874096c51f55e1fb402e66b9980->enter($__internal_484c6e2ee99af143cea31e08ec84278689398874096c51f55e1fb402e66b9980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7fefab1ecf72e098a6dbdc9bc596146ccc27eb7564b007dd011b36e33a729306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fefab1ecf72e098a6dbdc9bc596146ccc27eb7564b007dd011b36e33a729306->enter($__internal_7fefab1ecf72e098a6dbdc9bc596146ccc27eb7564b007dd011b36e33a729306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7fefab1ecf72e098a6dbdc9bc596146ccc27eb7564b007dd011b36e33a729306->leave($__internal_7fefab1ecf72e098a6dbdc9bc596146ccc27eb7564b007dd011b36e33a729306_prof);

        
        $__internal_484c6e2ee99af143cea31e08ec84278689398874096c51f55e1fb402e66b9980->leave($__internal_484c6e2ee99af143cea31e08ec84278689398874096c51f55e1fb402e66b9980_prof);

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
