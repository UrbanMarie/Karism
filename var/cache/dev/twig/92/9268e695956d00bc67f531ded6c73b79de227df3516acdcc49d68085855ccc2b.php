<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_2fb77542c6772bb2529a5ead5e73eec3e4ab666fa172210c3434beea8d68eccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26302299e5b198c266181fcede0a1ada01aba9511c0faf5a94322fe85d7b6744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26302299e5b198c266181fcede0a1ada01aba9511c0faf5a94322fe85d7b6744->enter($__internal_26302299e5b198c266181fcede0a1ada01aba9511c0faf5a94322fe85d7b6744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_ab9dd8dfb0f01bee822ebd366ad8fbc2bc1a57d8469305275ed021fe897766d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab9dd8dfb0f01bee822ebd366ad8fbc2bc1a57d8469305275ed021fe897766d3->enter($__internal_ab9dd8dfb0f01bee822ebd366ad8fbc2bc1a57d8469305275ed021fe897766d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_26302299e5b198c266181fcede0a1ada01aba9511c0faf5a94322fe85d7b6744->leave($__internal_26302299e5b198c266181fcede0a1ada01aba9511c0faf5a94322fe85d7b6744_prof);

        
        $__internal_ab9dd8dfb0f01bee822ebd366ad8fbc2bc1a57d8469305275ed021fe897766d3->leave($__internal_ab9dd8dfb0f01bee822ebd366ad8fbc2bc1a57d8469305275ed021fe897766d3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/html/Expomaison/exposmaison/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
