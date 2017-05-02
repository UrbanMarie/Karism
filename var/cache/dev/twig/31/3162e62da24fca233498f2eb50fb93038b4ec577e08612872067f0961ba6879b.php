<?php

/* AppBundle:Landing:index.html.twig */
class __TwigTemplate_3cf4fe7be8847c6919737af6a1bc23679a23a87e3333b688f86f7dd3ea71381d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Landing:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9846f1b3d8eea80c2c2c8ea954ad098bc9e74dddea3539444fb5b2a00ff148d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9846f1b3d8eea80c2c2c8ea954ad098bc9e74dddea3539444fb5b2a00ff148d9->enter($__internal_9846f1b3d8eea80c2c2c8ea954ad098bc9e74dddea3539444fb5b2a00ff148d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Landing:index.html.twig"));

        $__internal_d3b5962370a961c848f870949cda7b7b075262ddcf60a81258a7dfd3bd967c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b5962370a961c848f870949cda7b7b075262ddcf60a81258a7dfd3bd967c68->enter($__internal_d3b5962370a961c848f870949cda7b7b075262ddcf60a81258a7dfd3bd967c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Landing:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9846f1b3d8eea80c2c2c8ea954ad098bc9e74dddea3539444fb5b2a00ff148d9->leave($__internal_9846f1b3d8eea80c2c2c8ea954ad098bc9e74dddea3539444fb5b2a00ff148d9_prof);

        
        $__internal_d3b5962370a961c848f870949cda7b7b075262ddcf60a81258a7dfd3bd967c68->leave($__internal_d3b5962370a961c848f870949cda7b7b075262ddcf60a81258a7dfd3bd967c68_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_c846972e8e45c8297d3590aec271ac3d9c51c5bea142dfd20ecd86a817bf3909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c846972e8e45c8297d3590aec271ac3d9c51c5bea142dfd20ecd86a817bf3909->enter($__internal_c846972e8e45c8297d3590aec271ac3d9c51c5bea142dfd20ecd86a817bf3909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_45c218155f797335152c5bb6f5f593ca885f227d52c9a9a273230ed89dcc70bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c218155f797335152c5bb6f5f593ca885f227d52c9a9a273230ed89dcc70bc->enter($__internal_45c218155f797335152c5bb6f5f593ca885f227d52c9a9a273230ed89dcc70bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Landing:index";
        
        $__internal_45c218155f797335152c5bb6f5f593ca885f227d52c9a9a273230ed89dcc70bc->leave($__internal_45c218155f797335152c5bb6f5f593ca885f227d52c9a9a273230ed89dcc70bc_prof);

        
        $__internal_c846972e8e45c8297d3590aec271ac3d9c51c5bea142dfd20ecd86a817bf3909->leave($__internal_c846972e8e45c8297d3590aec271ac3d9c51c5bea142dfd20ecd86a817bf3909_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_85e9831514ee493f112fa3ed4186b7734335ace75546155d7f850a98060d970f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e9831514ee493f112fa3ed4186b7734335ace75546155d7f850a98060d970f->enter($__internal_85e9831514ee493f112fa3ed4186b7734335ace75546155d7f850a98060d970f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f62457075747c6ed1fe2456ddd1e48ddc743683370a02c3af68cb480356d12c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f62457075747c6ed1fe2456ddd1e48ddc743683370a02c3af68cb480356d12c->enter($__internal_5f62457075747c6ed1fe2456ddd1e48ddc743683370a02c3af68cb480356d12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "

<h1>Welcome to the Landing:index page</h1>


<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
    ";
        // line 8
        $context["imgCount"] = 0;
        // line 9
        echo "
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 12, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 13
            echo "        <li data-target=\"#carousel-example-generic\" data-slide-to=\"";
            echo twig_escape_filter($this->env, (isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"active\"></li>
        ";
            // line 14
            $context["imgCount"] = ((isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 14, $this->getSourceContext()); })()) + 1);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
        ";
        // line 19
        $context["imgCount"] = 0;
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 19, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 20
            echo "        <div class=\"item ";
            if (((isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 20, $this->getSourceContext()); })()) == 0)) {
                echo "active";
            }
            echo "\">
            <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "carousselExpo", array())), "html", null, true);
            echo "\" alt=\"...\">

            <div class=\"carousel-caption\">
                ...
            </div>
        </div>
        ";
            // line 27
            $context["imgCount"] = ((isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 27, $this->getSourceContext()); })()) + 1);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
    </div>

    <!-- Controls -->
    <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
</div>

<div id=\"carouselArtiste\" class=\"carousel slide\" data-ride=\"carousel\">
    ";
        // line 43
        $context["imgCount"] = 0;
        // line 44
        echo "
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 48
            echo "        <li data-target=\"#carouselArtiste\" data-slide-to=\"";
            echo twig_escape_filter($this->env, (isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"active\"></li>
        ";
            // line 49
            $context["imgCount"] = ((isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 49, $this->getSourceContext()); })()) + 1);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
        ";
        // line 54
        $context["imgCount"] = 0;
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 54, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 55
            echo "        <div class=\"item ";
            if (((isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 55, $this->getSourceContext()); })()) == 0)) {
                echo "active";
            }
            echo "\">
            <img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "carousselArtiste", array())), "html", null, true);
            echo "\" alt=\"...\">

            <div class=\"carousel-caption\">
                ...
            </div>
        </div>
        ";
            // line 62
            $context["imgCount"] = ((isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 62, $this->getSourceContext()); })()) + 1);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
    </div>

    <!-- Controls -->
    <a class=\"left carousel-control\" href=\"#carouselArtiste\" role=\"button\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#carouselArtiste\" role=\"button\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
</div>


";
        
        $__internal_5f62457075747c6ed1fe2456ddd1e48ddc743683370a02c3af68cb480356d12c->leave($__internal_5f62457075747c6ed1fe2456ddd1e48ddc743683370a02c3af68cb480356d12c_prof);

        
        $__internal_85e9831514ee493f112fa3ed4186b7734335ace75546155d7f850a98060d970f->leave($__internal_85e9831514ee493f112fa3ed4186b7734335ace75546155d7f850a98060d970f_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf008f7cefb931174038be248678aeeefa7cc1a40a8a712b1ea40f8d6232613b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf008f7cefb931174038be248678aeeefa7cc1a40a8a712b1ea40f8d6232613b->enter($__internal_bf008f7cefb931174038be248678aeeefa7cc1a40a8a712b1ea40f8d6232613b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_83864c4aa7e46f60bc0c7e86b218fbcea3af6c6e16628b0ad5c87a6c860c8bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83864c4aa7e46f60bc0c7e86b218fbcea3af6c6e16628b0ad5c87a6c860c8bf6->enter($__internal_83864c4aa7e46f60bc0c7e86b218fbcea3af6c6e16628b0ad5c87a6c860c8bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "<script type=\"text/javascript\">
    \$().ready(function() {
        \$('#carousel-example-generic').carousel();
        \$('#carousselArtiste').carousel();
    });
</script>
";
        
        $__internal_83864c4aa7e46f60bc0c7e86b218fbcea3af6c6e16628b0ad5c87a6c860c8bf6->leave($__internal_83864c4aa7e46f60bc0c7e86b218fbcea3af6c6e16628b0ad5c87a6c860c8bf6_prof);

        
        $__internal_bf008f7cefb931174038be248678aeeefa7cc1a40a8a712b1ea40f8d6232613b->leave($__internal_bf008f7cefb931174038be248678aeeefa7cc1a40a8a712b1ea40f8d6232613b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Landing:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 79,  233 => 78,  208 => 63,  201 => 62,  192 => 56,  185 => 55,  179 => 54,  173 => 50,  166 => 49,  161 => 48,  157 => 47,  152 => 44,  150 => 43,  133 => 28,  126 => 27,  117 => 21,  110 => 20,  104 => 19,  98 => 15,  91 => 14,  86 => 13,  82 => 12,  77 => 9,  75 => 8,  67 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %} {% block title %}AppBundle:Landing:index{% endblock %} {% block body %}


<h1>Welcome to the Landing:index page</h1>


<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
    {% set imgCount = 0 %}

    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        {% for image in images %}
        <li data-target=\"#carousel-example-generic\" data-slide-to=\"{{ imgCount }}\" class=\"active\"></li>
        {% set imgCount = imgCount + 1 %} {% endfor %}
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
        {% set imgCount = 0 %} {% for image in images %}
        <div class=\"item {% if imgCount == 0 %}active{% endif %}\">
            <img src=\"{{ asset(image.carousselExpo) }}\" alt=\"...\">

            <div class=\"carousel-caption\">
                ...
            </div>
        </div>
        {% set imgCount = imgCount + 1 %} {% endfor %}

    </div>

    <!-- Controls -->
    <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
</div>

<div id=\"carouselArtiste\" class=\"carousel slide\" data-ride=\"carousel\">
    {% set imgCount = 0 %}

    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        {% for image in images %}
        <li data-target=\"#carouselArtiste\" data-slide-to=\"{{ imgCount }}\" class=\"active\"></li>
        {% set imgCount = imgCount + 1 %} {% endfor %}
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
        {% set imgCount = 0 %} {% for image in images %}
        <div class=\"item {% if imgCount == 0 %}active{% endif %}\">
            <img src=\"{{ asset(image.carousselArtiste) }}\" alt=\"...\">

            <div class=\"carousel-caption\">
                ...
            </div>
        </div>
        {% set imgCount = imgCount + 1 %} {% endfor %}

    </div>

    <!-- Controls -->
    <a class=\"left carousel-control\" href=\"#carouselArtiste\" role=\"button\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#carouselArtiste\" role=\"button\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
</div>


{% endblock %} {% block javascripts %}
<script type=\"text/javascript\">
    \$().ready(function() {
        \$('#carousel-example-generic').carousel();
        \$('#carousselArtiste').carousel();
    });
</script>
{% endblock %}
", "AppBundle:Landing:index.html.twig", "/var/www/html/Expomaison/exposmaison/src/AppBundle/Resources/views/Landing/index.html.twig");
    }
}
