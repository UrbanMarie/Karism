<?php

/* @WebProfiler/Collector/twig.html.twig */
class __TwigTemplate_169854fdec10bf116f578c3454d09600bbbe6dc7c1f35dcbbfb37ea1cc05762d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/twig.html.twig", 1);
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
        $__internal_a6755a58338d0dfeeadf541052f171823706e85dc7ad7d1dc1ccc2daf8bcac26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6755a58338d0dfeeadf541052f171823706e85dc7ad7d1dc1ccc2daf8bcac26->enter($__internal_a6755a58338d0dfeeadf541052f171823706e85dc7ad7d1dc1ccc2daf8bcac26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $__internal_f3b60b7d1501e844cdd4ce5b794c24ded486c034d2be1900a27acf3f6b2cb68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b60b7d1501e844cdd4ce5b794c24ded486c034d2be1900a27acf3f6b2cb68a->enter($__internal_f3b60b7d1501e844cdd4ce5b794c24ded486c034d2be1900a27acf3f6b2cb68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6755a58338d0dfeeadf541052f171823706e85dc7ad7d1dc1ccc2daf8bcac26->leave($__internal_a6755a58338d0dfeeadf541052f171823706e85dc7ad7d1dc1ccc2daf8bcac26_prof);

        
        $__internal_f3b60b7d1501e844cdd4ce5b794c24ded486c034d2be1900a27acf3f6b2cb68a->leave($__internal_f3b60b7d1501e844cdd4ce5b794c24ded486c034d2be1900a27acf3f6b2cb68a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4b73c59adcfae86749e34983a86ec1c4df1ab3fd0656c1abd674ffff2fb9d670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b73c59adcfae86749e34983a86ec1c4df1ab3fd0656c1abd674ffff2fb9d670->enter($__internal_4b73c59adcfae86749e34983a86ec1c4df1ab3fd0656c1abd674ffff2fb9d670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b395e517c6c02db5c48a2eed1389dc2b31dad68168ae4f1347bc6055e04c3ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b395e517c6c02db5c48a2eed1389dc2b31dad68168ae4f1347bc6055e04c3ad1->enter($__internal_b395e517c6c02db5c48a2eed1389dc2b31dad68168ae4f1347bc6055e04c3ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["time"] = ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "templatecount", array())) ? (sprintf("%0.0f", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "time", array()))) : ("n/a"));
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new Twig_Error_Runtime('Variable "time" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new Twig_Error_Runtime('Variable "time" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 18, $this->getSourceContext()); })()), "templatecount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 22, $this->getSourceContext()); })()), "blockcount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 26, $this->getSourceContext()); })()), "macrocount", array()), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 30, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_b395e517c6c02db5c48a2eed1389dc2b31dad68168ae4f1347bc6055e04c3ad1->leave($__internal_b395e517c6c02db5c48a2eed1389dc2b31dad68168ae4f1347bc6055e04c3ad1_prof);

        
        $__internal_4b73c59adcfae86749e34983a86ec1c4df1ab3fd0656c1abd674ffff2fb9d670->leave($__internal_4b73c59adcfae86749e34983a86ec1c4df1ab3fd0656c1abd674ffff2fb9d670_prof);

    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        $__internal_29cead089f4b6a08122f9cd4e16b301f68c5a29659f2d6eb833dd624362fd218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29cead089f4b6a08122f9cd4e16b301f68c5a29659f2d6eb833dd624362fd218->enter($__internal_29cead089f4b6a08122f9cd4e16b301f68c5a29659f2d6eb833dd624362fd218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e4a62998a505486b791d17fe956191b8ef00c46a80b694b558213ae20ef053eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a62998a505486b791d17fe956191b8ef00c46a80b694b558213ae20ef053eb->enter($__internal_e4a62998a505486b791d17fe956191b8ef00c46a80b694b558213ae20ef053eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 34
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 35
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "</span>
        <strong>Twig</strong>
    </span>
";
        
        $__internal_e4a62998a505486b791d17fe956191b8ef00c46a80b694b558213ae20ef053eb->leave($__internal_e4a62998a505486b791d17fe956191b8ef00c46a80b694b558213ae20ef053eb_prof);

        
        $__internal_29cead089f4b6a08122f9cd4e16b301f68c5a29659f2d6eb833dd624362fd218->leave($__internal_29cead089f4b6a08122f9cd4e16b301f68c5a29659f2d6eb833dd624362fd218_prof);

    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7ea55220aca5e86e77b0a74cdf6c7825d5f11b55532926f8de0c0b1c1ec7fbf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea55220aca5e86e77b0a74cdf6c7825d5f11b55532926f8de0c0b1c1ec7fbf1->enter($__internal_7ea55220aca5e86e77b0a74cdf6c7825d5f11b55532926f8de0c0b1c1ec7fbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee6f4781e2f16f06dcb5f7032722046ba6ed26537269f07fb4859d48b6d19bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6f4781e2f16f06dcb5f7032722046ba6ed26537269f07fb4859d48b6d19bee->enter($__internal_ee6f4781e2f16f06dcb5f7032722046ba6ed26537269f07fb4859d48b6d19bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 41, $this->getSourceContext()); })()), "templatecount", array()) == 0)) {
            // line 42
            echo "        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    ";
        } else {
            // line 48
            echo "        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 52
            echo twig_escape_filter($this->env, sprintf("%0.0f", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 52, $this->getSourceContext()); })()), "time", array())), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 57, $this->getSourceContext()); })()), "templatecount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 62, $this->getSourceContext()); })()), "blockcount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 67, $this->getSourceContext()); })()), "macrocount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 86, $this->getSourceContext()); })()), "templates", array()));
            foreach ($context['_seq'] as $context["template"] => $context["count"]) {
                // line 87
                echo "                <tr>
                    <td>";
                // line 88
                echo twig_escape_filter($this->env, $context["template"], "html", null, true);
                echo "</td>
                    <td class=\"font-normal\">";
                // line 89
                echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            ";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 98, $this->getSourceContext()); })()), "htmlcallgraph", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        
        $__internal_ee6f4781e2f16f06dcb5f7032722046ba6ed26537269f07fb4859d48b6d19bee->leave($__internal_ee6f4781e2f16f06dcb5f7032722046ba6ed26537269f07fb4859d48b6d19bee_prof);

        
        $__internal_7ea55220aca5e86e77b0a74cdf6c7825d5f11b55532926f8de0c0b1c1ec7fbf1->leave($__internal_7ea55220aca5e86e77b0a74cdf6c7825d5f11b55532926f8de0c0b1c1ec7fbf1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 98,  237 => 92,  228 => 89,  224 => 88,  221 => 87,  217 => 86,  195 => 67,  187 => 62,  179 => 57,  171 => 52,  165 => 48,  157 => 42,  154 => 41,  145 => 40,  131 => 35,  128 => 34,  119 => 33,  107 => 30,  104 => 29,  98 => 26,  91 => 22,  84 => 18,  77 => 14,  73 => 12,  71 => 11,  68 => 10,  62 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set time = collector.templatecount ? '%0.0f'|format(collector.time) : 'n/a' %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/twig.svg') }}
        <span class=\"sf-toolbar-value\">{{ time }}</span>
        <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>{{ time }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.templatecount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.blockcount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.macrocount }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/twig.svg') }}</span>
        <strong>Twig</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.templatecount == 0 %}
        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    {% else %}
        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.0f'|format(collector.time) }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.templatecount }}</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.blockcount }}</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.macrocount }}</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            {% for template, count in collector.templates %}
                <tr>
                    <td>{{ template }}</td>
                    <td class=\"font-normal\">{{ count }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            {{ collector.htmlcallgraph }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/twig.html.twig", "/var/www/html/Expomaison/exposmaison/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/twig.html.twig");
    }
}
