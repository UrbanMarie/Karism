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
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_806a76c0c58989bfc35be1d3f40b78242c9fda16c1bfe14efe74f8406695613e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_806a76c0c58989bfc35be1d3f40b78242c9fda16c1bfe14efe74f8406695613e->enter($__internal_806a76c0c58989bfc35be1d3f40b78242c9fda16c1bfe14efe74f8406695613e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Landing:index.html.twig"));

        $__internal_0c420f3f2456ce1d40439c3b3b03403208f5cb78b1913cea0a0e4c3472a14141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c420f3f2456ce1d40439c3b3b03403208f5cb78b1913cea0a0e4c3472a14141->enter($__internal_0c420f3f2456ce1d40439c3b3b03403208f5cb78b1913cea0a0e4c3472a14141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Landing:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_806a76c0c58989bfc35be1d3f40b78242c9fda16c1bfe14efe74f8406695613e->leave($__internal_806a76c0c58989bfc35be1d3f40b78242c9fda16c1bfe14efe74f8406695613e_prof);

        
        $__internal_0c420f3f2456ce1d40439c3b3b03403208f5cb78b1913cea0a0e4c3472a14141->leave($__internal_0c420f3f2456ce1d40439c3b3b03403208f5cb78b1913cea0a0e4c3472a14141_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_18123a75f9e232182a57be6480f778bf00fa8429a52a2e9305b4c380b8c49bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18123a75f9e232182a57be6480f778bf00fa8429a52a2e9305b4c380b8c49bd4->enter($__internal_18123a75f9e232182a57be6480f778bf00fa8429a52a2e9305b4c380b8c49bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_89e634eb1bb719c6e6c04c79d7a1a048c89b759526debda7fcebe6c1c2213024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e634eb1bb719c6e6c04c79d7a1a048c89b759526debda7fcebe6c1c2213024->enter($__internal_89e634eb1bb719c6e6c04c79d7a1a048c89b759526debda7fcebe6c1c2213024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Landing:index";
        
        $__internal_89e634eb1bb719c6e6c04c79d7a1a048c89b759526debda7fcebe6c1c2213024->leave($__internal_89e634eb1bb719c6e6c04c79d7a1a048c89b759526debda7fcebe6c1c2213024_prof);

        
        $__internal_18123a75f9e232182a57be6480f778bf00fa8429a52a2e9305b4c380b8c49bd4->leave($__internal_18123a75f9e232182a57be6480f778bf00fa8429a52a2e9305b4c380b8c49bd4_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_4865ccf3f1eb8f50aa7574385b6d7cde110c6ac32ee46fee72f09dcf6f5c3ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4865ccf3f1eb8f50aa7574385b6d7cde110c6ac32ee46fee72f09dcf6f5c3ffa->enter($__internal_4865ccf3f1eb8f50aa7574385b6d7cde110c6ac32ee46fee72f09dcf6f5c3ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21d48baf63f75719db4b96c40ab3378bdc832d8f049cba1abdefa90a87ea278e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d48baf63f75719db4b96c40ab3378bdc832d8f049cba1abdefa90a87ea278e->enter($__internal_21d48baf63f75719db4b96c40ab3378bdc832d8f049cba1abdefa90a87ea278e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 5
        echo "

<div class=\"container-fluid\">
    <div class=\"imgLAND\">
    <!--  <img id=\"imgLAND\" alt=\"\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/backgroundLAND/fong.jpg"), "html", null, true);
        echo "\"/>  -->
    <a href=\"http://placehold.it\"><img src=\"http://placehold.it/1900x450\"></a>
    </div>

    <div id=\"recherche\">

    </div>

<div id=\"carouselExpo\">
    <h2> Les rendez vous de la semaine </h2>
<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
    ";
        // line 20
        $context["imgCount"] = 0;
        // line 21
        echo "
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 24, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 25
            echo "        <li data-target=\"#carousel-example-generic\" data-slide-to=\"";
            echo twig_escape_filter($this->env, (isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"active\"></li>
        ";
            // line 26
            $context["imgCount"] = ((isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 26, $this->getSourceContext()); })()) + 1);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
        ";
        // line 31
        $context["imgCount"] = 0;
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 31, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 32
            echo "        <div class=\"item ";
            if (((isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 32, $this->getSourceContext()); })()) == 0)) {
                echo "active";
            }
            echo "\">
            <img id=\"imgExpo \"src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "carousselExpo", array())), "html", null, true);
            echo "\" alt=\"...\">

            <div class=\"carousel-caption\">
                ...
            </div>
        </div>
        ";
            // line 39
            $context["imgCount"] = ((isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 39, $this->getSourceContext()); })()) + 1);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
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
</div>

<div id=\"carouselArtiste\">
    <h2> Des artistes a découvrir </h2>
<div class=\"carousel slide\" data-ride=\"carousel\">
    ";
        // line 58
        $context["imgCount"] = 0;
        // line 59
        echo "
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 62, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 63
            echo "        <li data-target=\"#carouselArtiste\" data-slide-to=\"";
            echo twig_escape_filter($this->env, (isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 63, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"active\"></li>
        ";
            // line 64
            $context["imgCount"] = ((isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 64, $this->getSourceContext()); })()) + 1);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
        ";
        // line 69
        $context["imgCount"] = 0;
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 69, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 70
            echo "        <div class=\"item ";
            if (((isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 70, $this->getSourceContext()); })()) == 0)) {
                echo "active";
            }
            echo "\">
            <img id=\"imgArtiste\" src=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "carousselArtiste", array())), "html", null, true);
            echo "\" alt=\"...\">

            <div class=\"carousel-caption\">
                ...
            </div>
        </div>
        ";
            // line 77
            $context["imgCount"] = ((isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 77, $this->getSourceContext()); })()) + 1);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
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
</div>




<div>
    <div class=\"row video bli\">
        <h2 class=\"H2white\"> Manifeste Karism </h2>
        <div class=\"video\">
    <iframe class=\"vid col-md-offset-2 col-md-8 col-xs-12\"  src=\"//www.youtube.com/embed/GAQ8PePmN6w\" allowfullscreen=\"\"></iframe>  
        </div>
</div>


</div>
</div>
";
        
        $__internal_21d48baf63f75719db4b96c40ab3378bdc832d8f049cba1abdefa90a87ea278e->leave($__internal_21d48baf63f75719db4b96c40ab3378bdc832d8f049cba1abdefa90a87ea278e_prof);

        
        $__internal_4865ccf3f1eb8f50aa7574385b6d7cde110c6ac32ee46fee72f09dcf6f5c3ffa->leave($__internal_4865ccf3f1eb8f50aa7574385b6d7cde110c6ac32ee46fee72f09dcf6f5c3ffa_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db7a81ab0b7249c7a9f94155c2bd72b7c90c79ec0b978edbd1ddcf8d3220b8f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db7a81ab0b7249c7a9f94155c2bd72b7c90c79ec0b978edbd1ddcf8d3220b8f3->enter($__internal_db7a81ab0b7249c7a9f94155c2bd72b7c90c79ec0b978edbd1ddcf8d3220b8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9bbc05fd125f6839816d007786001590eb5fa4e1f7cefea918342d629208d560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbc05fd125f6839816d007786001590eb5fa4e1f7cefea918342d629208d560->enter($__internal_9bbc05fd125f6839816d007786001590eb5fa4e1f7cefea918342d629208d560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/CSS/landing.css"), "html", null, true);
        echo "\">
";
        
        $__internal_9bbc05fd125f6839816d007786001590eb5fa4e1f7cefea918342d629208d560->leave($__internal_9bbc05fd125f6839816d007786001590eb5fa4e1f7cefea918342d629208d560_prof);

        
        $__internal_db7a81ab0b7249c7a9f94155c2bd72b7c90c79ec0b978edbd1ddcf8d3220b8f3->leave($__internal_db7a81ab0b7249c7a9f94155c2bd72b7c90c79ec0b978edbd1ddcf8d3220b8f3_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d7b383c92d19ff706e324549eb30553830413dc5a78beb99828dfac32efcedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7b383c92d19ff706e324549eb30553830413dc5a78beb99828dfac32efcedd->enter($__internal_4d7b383c92d19ff706e324549eb30553830413dc5a78beb99828dfac32efcedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8ea99b57e20013e8b4c4eca7873fdbd8b0f94f67ef861f255cecda5466782f0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea99b57e20013e8b4c4eca7873fdbd8b0f94f67ef861f255cecda5466782f0f->enter($__internal_8ea99b57e20013e8b4c4eca7873fdbd8b0f94f67ef861f255cecda5466782f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "<script type=\"text/javascript\">
    \$().ready(function() {
        \$('#carousel-example-generic').carousel();
        \$('#carousselArtiste').carousel();
    });
</script>
";
        
        $__internal_8ea99b57e20013e8b4c4eca7873fdbd8b0f94f67ef861f255cecda5466782f0f->leave($__internal_8ea99b57e20013e8b4c4eca7873fdbd8b0f94f67ef861f255cecda5466782f0f_prof);

        
        $__internal_4d7b383c92d19ff706e324549eb30553830413dc5a78beb99828dfac32efcedd->leave($__internal_4d7b383c92d19ff706e324549eb30553830413dc5a78beb99828dfac32efcedd_prof);

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
        return array (  296 => 108,  287 => 107,  274 => 3,  265 => 2,  226 => 78,  219 => 77,  210 => 71,  203 => 70,  197 => 69,  191 => 65,  184 => 64,  179 => 63,  175 => 62,  170 => 59,  168 => 58,  148 => 40,  141 => 39,  132 => 33,  125 => 32,  119 => 31,  113 => 27,  106 => 26,  101 => 25,  97 => 24,  92 => 21,  90 => 20,  76 => 9,  70 => 5,  68 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %} {% block title %}AppBundle:Landing:index{% endblock %} {% block body %}
{% block stylesheets %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/CSS/landing.css')}}\">
{% endblock %}


<div class=\"container-fluid\">
    <div class=\"imgLAND\">
    <!--  <img id=\"imgLAND\" alt=\"\" src=\"{{asset('/img/backgroundLAND/fong.jpg')}}\"/>  -->
    <a href=\"http://placehold.it\"><img src=\"http://placehold.it/1900x450\"></a>
    </div>

    <div id=\"recherche\">

    </div>

<div id=\"carouselExpo\">
    <h2> Les rendez vous de la semaine </h2>
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
            <img id=\"imgExpo \"src=\"{{ asset(image.carousselExpo) }}\" alt=\"...\">

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
</div>

<div id=\"carouselArtiste\">
    <h2> Des artistes a découvrir </h2>
<div class=\"carousel slide\" data-ride=\"carousel\">
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
            <img id=\"imgArtiste\" src=\"{{ asset(image.carousselArtiste) }}\" alt=\"...\">

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
</div>




<div>
    <div class=\"row video bli\">
        <h2 class=\"H2white\"> Manifeste Karism </h2>
        <div class=\"video\">
    <iframe class=\"vid col-md-offset-2 col-md-8 col-xs-12\"  src=\"//www.youtube.com/embed/GAQ8PePmN6w\" allowfullscreen=\"\"></iframe>  
        </div>
</div>


</div>
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
