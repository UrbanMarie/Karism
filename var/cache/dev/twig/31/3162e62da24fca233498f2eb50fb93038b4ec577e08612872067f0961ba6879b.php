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
        $__internal_4e241cdbe8894b757e23773340045585a06280a527c44b2711f289f9361c2254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e241cdbe8894b757e23773340045585a06280a527c44b2711f289f9361c2254->enter($__internal_4e241cdbe8894b757e23773340045585a06280a527c44b2711f289f9361c2254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Landing:index.html.twig"));

        $__internal_7508011c71e8a18730f9e26b0a2d806ad66da6feee609858770b9a31a51aada1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7508011c71e8a18730f9e26b0a2d806ad66da6feee609858770b9a31a51aada1->enter($__internal_7508011c71e8a18730f9e26b0a2d806ad66da6feee609858770b9a31a51aada1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Landing:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e241cdbe8894b757e23773340045585a06280a527c44b2711f289f9361c2254->leave($__internal_4e241cdbe8894b757e23773340045585a06280a527c44b2711f289f9361c2254_prof);

        
        $__internal_7508011c71e8a18730f9e26b0a2d806ad66da6feee609858770b9a31a51aada1->leave($__internal_7508011c71e8a18730f9e26b0a2d806ad66da6feee609858770b9a31a51aada1_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_62fdc38c0cb42c1e35f5f575b5b839ed3db22f8395235f2607966d5649b84241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62fdc38c0cb42c1e35f5f575b5b839ed3db22f8395235f2607966d5649b84241->enter($__internal_62fdc38c0cb42c1e35f5f575b5b839ed3db22f8395235f2607966d5649b84241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0ebeba05c22d6c56a3ddcd168f7fa3007f90980ece6a804b171c06209eab5063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebeba05c22d6c56a3ddcd168f7fa3007f90980ece6a804b171c06209eab5063->enter($__internal_0ebeba05c22d6c56a3ddcd168f7fa3007f90980ece6a804b171c06209eab5063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Landing:index";
        
        $__internal_0ebeba05c22d6c56a3ddcd168f7fa3007f90980ece6a804b171c06209eab5063->leave($__internal_0ebeba05c22d6c56a3ddcd168f7fa3007f90980ece6a804b171c06209eab5063_prof);

        
        $__internal_62fdc38c0cb42c1e35f5f575b5b839ed3db22f8395235f2607966d5649b84241->leave($__internal_62fdc38c0cb42c1e35f5f575b5b839ed3db22f8395235f2607966d5649b84241_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_812558911fce799a1329e9eadcdf4622b9f56e77927900b86123a68e1ecea200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812558911fce799a1329e9eadcdf4622b9f56e77927900b86123a68e1ecea200->enter($__internal_812558911fce799a1329e9eadcdf4622b9f56e77927900b86123a68e1ecea200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8fbdbb7a3e083f94515e736feff250c93ee10abd1c3cdf02c16ba538b77a8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8fbdbb7a3e083f94515e736feff250c93ee10abd1c3cdf02c16ba538b77a8ae->enter($__internal_d8fbdbb7a3e083f94515e736feff250c93ee10abd1c3cdf02c16ba538b77a8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 5
        echo "

<div class=\"container-fluid\">
    <div class=\"imgLANDconteneur\">
    <!--  <img id=\"imgLAND\" alt=\"\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/backgroundLAND/fong.jpg"), "html", null, true);
        echo "\"/>  -->
    <a class=\"imgLAND\" href=\"http://placehold.it\"><img src=\"http://placehold.it/2000x800\"></a>
    </div>

     <div id=\"recherche\">
    <form class=\"navbar-form \" role=\"search\">
      <p class=\"navbar-text text-center\"> Je cherche </p>
            <div class=\"btn-group\">
     <button type=\"button\" class=\"btn btn-default\">une expo</button>
     <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
       <span class=\"caret\"></span>
       <span class=\"sr-only\">Toggle Dropdown</span>
     </button>
     <ul class=\"dropdown-menu\">
       <li><a href=\"#\">Action</a></li>
       <li><a href=\"#\">Another action</a></li>
       <li><a href=\"#\">Something else here</a></li>
       <li role=\"separator\" class=\"divider\"></li>
       <li><a href=\"#\">Separated link</a></li>
     </ul>
     <p class=\"navbar-text\"> à </p>
<button type=\"button\" class=\"btn btn-default\">Paris</button>
<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
<span class=\"caret\"></span>
<span class=\"sr-only\">Toggle Dropdown</span>
</button>
<ul class=\"dropdown-menu\">
<li><a href=\"#\">Action</a></li>
<li><a href=\"#\">Another action</a></li>
<li><a href=\"#\">Something else here</a></li>
<li role=\"separator\" class=\"divider\"></li>
<li><a href=\"#\">Separated link</a></li>
</ul>
     <p class=\"navbar-text\"> de </p>
<button type=\"button\" class=\"btn btn-default\">Photo</button>
<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
<span class=\"caret\"></span>
<span class=\"sr-only\">Toggle Dropdown</span>
</button>
<ul class=\"dropdown-menu\">
<li><a href=\"#\">Action</a></li>
<li><a href=\"#\">Another action</a></li>
<li><a href=\"#\">Something else here</a></li>
<li role=\"separator\" class=\"divider\"></li>
<li><a href=\"#\">Separated link</a></li>
</ul>

          <button type=\"submit\" class=\"btn btn-warning\">Submit</button>
        </form>
    </div>
    </div>

<div class=\"carousel\">
<div id=\"carouselExpo\">
    <h2> Les rendez vous de la semaine </h2>
<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
    ";
        // line 65
        $context["imgCount"] = 0;
        // line 66
        echo "
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 69, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 70
            echo "        <li data-target=\"#carousel-example-generic\" data-slide-to=\"";
            echo twig_escape_filter($this->env, (isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 70, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"active\"></li>
        ";
            // line 71
            $context["imgCount"] = ((isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 71, $this->getSourceContext()); })()) + 1);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
        ";
        // line 76
        $context["imgCount"] = 0;
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 76, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 77
            echo "        <div class=\"item ";
            if (((isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 77, $this->getSourceContext()); })()) == 0)) {
                echo "active";
            }
            echo "\">
            <img id=\"imgExpo \"src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "carousselExpo", array())), "html", null, true);
            echo "\" alt=\"...\">

            <div class=\"carousel-caption\">
                ...
            </div>
        </div>
        ";
            // line 84
            $context["imgCount"] = ((isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 84, $this->getSourceContext()); })()) + 1);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
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
        // line 103
        $context["imgCount"] = 0;
        // line 104
        echo "
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 107, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 108
            echo "        <li data-target=\"#carouselArtiste\" data-slide-to=\"";
            echo twig_escape_filter($this->env, (isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 108, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"active\"></li>
        ";
            // line 109
            $context["imgCount"] = ((isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 109, $this->getSourceContext()); })()) + 1);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
        ";
        // line 114
        $context["imgCount"] = 0;
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 114, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 115
            echo "        <div class=\"item ";
            if (((isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 115, $this->getSourceContext()); })()) == 0)) {
                echo "active";
            }
            echo "\">
            <img id=\"imgArtiste\" src=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "carousselArtiste", array())), "html", null, true);
            echo "\" alt=\"...\">

            <div class=\"carousel-caption\">
                ...
            </div>
        </div>
        ";
            // line 122
            $context["imgCount"] = ((isset($context["imgCount"]) || array_key_exists("imgCount", $context) ? $context["imgCount"] : (function () { throw new Twig_Error_Runtime('Variable "imgCount" does not exist.', 122, $this->getSourceContext()); })()) + 1);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
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
</div>



    <!--

        <div class=\"video\">
    <h2 class=\"H2white\"> Manifeste Karism </h2>
    <iframe src=\"//www.youtube.com/embed/GAQ8PePmN6w\" allowfullscreen=\"\"></iframe>

    </div> -->

    <section class=\"video\">
        <h2>Manifestation Kar:ms</h2>
        <div class=\"embed-responsive embed-responsive\">
          <iframe class=\"vid embed-responsive-item\"  src=\"//www.youtube.com/embed/GAQ8PePmN6w\" width=\"300\" height=\"150\"></iframe>
       </div>
   </section>


<div class=\"row laius\">
<h2>Les expos selon nous </h2>
<div class=\"col-md-12\">
  <div class=\"col-md-4\">
    <div class=\"thumbnail\">
      <a href=\"http://placehold.it\"><img src=\"http://placehold.it/150x250\"></a>
      <div class=\"caption\">
        <h2>Transformez votre salon en galerie éphèmère</h2>
        <p>Nis clou ni vis les artistes scénographie leur expo sans toucher a vos murs</p>

      </div>
    </div>
  </div>

  <div class=\"col-md-4\">
    <div class=\"thumbnail\">
      <a href=\"http://placehold.it\"><img src=\"http://placehold.it/150x250\"></a>
      <div class=\"caption\">
        <p><h2> Faites des rencontres</h2></p>
        <p>Les expos à la maison c'est le moment idéal pour faire des rencontres et parler de vos passions.</p>

      </div>
    </div>
</div>

<div class=\"col-md-4\">
  <div class=\"thumbnail\">
    <a href=\"http://placehold.it\"><img src=\"http://placehold.it/150x250\"></a>
    <div class=\"caption\">
      <h2>Vivez un moment hors du temps</h2>
      <p>Pas besoin d'avion pour voyager, laissez vous surprendre à deux pas de chez vous</p>
    </div>
  </div>
</div>
</div>
</div>





</div>
</div>
";
        
        $__internal_d8fbdbb7a3e083f94515e736feff250c93ee10abd1c3cdf02c16ba538b77a8ae->leave($__internal_d8fbdbb7a3e083f94515e736feff250c93ee10abd1c3cdf02c16ba538b77a8ae_prof);

        
        $__internal_812558911fce799a1329e9eadcdf4622b9f56e77927900b86123a68e1ecea200->leave($__internal_812558911fce799a1329e9eadcdf4622b9f56e77927900b86123a68e1ecea200_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_551b84dad59e0db0027fd432636edf37b6e5241162e81aa273b21424e09c5528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_551b84dad59e0db0027fd432636edf37b6e5241162e81aa273b21424e09c5528->enter($__internal_551b84dad59e0db0027fd432636edf37b6e5241162e81aa273b21424e09c5528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9a4cfa127acb0e4899a7a2d25fbf0dc724c055329d79cd96fe3c29137c180406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4cfa127acb0e4899a7a2d25fbf0dc724c055329d79cd96fe3c29137c180406->enter($__internal_9a4cfa127acb0e4899a7a2d25fbf0dc724c055329d79cd96fe3c29137c180406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/CSS/landing.css"), "html", null, true);
        echo "\" media=\"screen\">
";
        
        $__internal_9a4cfa127acb0e4899a7a2d25fbf0dc724c055329d79cd96fe3c29137c180406->leave($__internal_9a4cfa127acb0e4899a7a2d25fbf0dc724c055329d79cd96fe3c29137c180406_prof);

        
        $__internal_551b84dad59e0db0027fd432636edf37b6e5241162e81aa273b21424e09c5528->leave($__internal_551b84dad59e0db0027fd432636edf37b6e5241162e81aa273b21424e09c5528_prof);

    }

    // line 200
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad62855b42f35084608fe19d7f9ad65ea2bedd23ffc3046f3fbb2015f6e7a1e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad62855b42f35084608fe19d7f9ad65ea2bedd23ffc3046f3fbb2015f6e7a1e0->enter($__internal_ad62855b42f35084608fe19d7f9ad65ea2bedd23ffc3046f3fbb2015f6e7a1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fd845ab151c7215c8cd62ab2b5aa5d6d87b0b8203bf154f4727b785e3fc1d09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd845ab151c7215c8cd62ab2b5aa5d6d87b0b8203bf154f4727b785e3fc1d09d->enter($__internal_fd845ab151c7215c8cd62ab2b5aa5d6d87b0b8203bf154f4727b785e3fc1d09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 201
        echo "<script type=\"text/javascript\">
    \$().ready(function() {
        \$('#carousel-example-generic').carousel();
        \$('#carousselArtiste').carousel();
    });
</script>
";
        
        $__internal_fd845ab151c7215c8cd62ab2b5aa5d6d87b0b8203bf154f4727b785e3fc1d09d->leave($__internal_fd845ab151c7215c8cd62ab2b5aa5d6d87b0b8203bf154f4727b785e3fc1d09d_prof);

        
        $__internal_ad62855b42f35084608fe19d7f9ad65ea2bedd23ffc3046f3fbb2015f6e7a1e0->leave($__internal_ad62855b42f35084608fe19d7f9ad65ea2bedd23ffc3046f3fbb2015f6e7a1e0_prof);

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
        return array (  389 => 201,  380 => 200,  367 => 3,  358 => 2,  271 => 123,  264 => 122,  255 => 116,  248 => 115,  242 => 114,  236 => 110,  229 => 109,  224 => 108,  220 => 107,  215 => 104,  213 => 103,  193 => 85,  186 => 84,  177 => 78,  170 => 77,  164 => 76,  158 => 72,  151 => 71,  146 => 70,  142 => 69,  137 => 66,  135 => 65,  76 => 9,  70 => 5,  68 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %} {% block title %}AppBundle:Landing:index{% endblock %} {% block body %}
{% block stylesheets %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/CSS/landing.css')}}\" media=\"screen\">
{% endblock %}


<div class=\"container-fluid\">
    <div class=\"imgLANDconteneur\">
    <!--  <img id=\"imgLAND\" alt=\"\" src=\"{{asset('/img/backgroundLAND/fong.jpg')}}\"/>  -->
    <a class=\"imgLAND\" href=\"http://placehold.it\"><img src=\"http://placehold.it/2000x800\"></a>
    </div>

     <div id=\"recherche\">
    <form class=\"navbar-form \" role=\"search\">
      <p class=\"navbar-text text-center\"> Je cherche </p>
            <div class=\"btn-group\">
     <button type=\"button\" class=\"btn btn-default\">une expo</button>
     <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
       <span class=\"caret\"></span>
       <span class=\"sr-only\">Toggle Dropdown</span>
     </button>
     <ul class=\"dropdown-menu\">
       <li><a href=\"#\">Action</a></li>
       <li><a href=\"#\">Another action</a></li>
       <li><a href=\"#\">Something else here</a></li>
       <li role=\"separator\" class=\"divider\"></li>
       <li><a href=\"#\">Separated link</a></li>
     </ul>
     <p class=\"navbar-text\"> à </p>
<button type=\"button\" class=\"btn btn-default\">Paris</button>
<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
<span class=\"caret\"></span>
<span class=\"sr-only\">Toggle Dropdown</span>
</button>
<ul class=\"dropdown-menu\">
<li><a href=\"#\">Action</a></li>
<li><a href=\"#\">Another action</a></li>
<li><a href=\"#\">Something else here</a></li>
<li role=\"separator\" class=\"divider\"></li>
<li><a href=\"#\">Separated link</a></li>
</ul>
     <p class=\"navbar-text\"> de </p>
<button type=\"button\" class=\"btn btn-default\">Photo</button>
<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
<span class=\"caret\"></span>
<span class=\"sr-only\">Toggle Dropdown</span>
</button>
<ul class=\"dropdown-menu\">
<li><a href=\"#\">Action</a></li>
<li><a href=\"#\">Another action</a></li>
<li><a href=\"#\">Something else here</a></li>
<li role=\"separator\" class=\"divider\"></li>
<li><a href=\"#\">Separated link</a></li>
</ul>

          <button type=\"submit\" class=\"btn btn-warning\">Submit</button>
        </form>
    </div>
    </div>

<div class=\"carousel\">
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
</div>



    <!--

        <div class=\"video\">
    <h2 class=\"H2white\"> Manifeste Karism </h2>
    <iframe src=\"//www.youtube.com/embed/GAQ8PePmN6w\" allowfullscreen=\"\"></iframe>

    </div> -->

    <section class=\"video\">
        <h2>Manifestation Kar:ms</h2>
        <div class=\"embed-responsive embed-responsive\">
          <iframe class=\"vid embed-responsive-item\"  src=\"//www.youtube.com/embed/GAQ8PePmN6w\" width=\"300\" height=\"150\"></iframe>
       </div>
   </section>


<div class=\"row laius\">
<h2>Les expos selon nous </h2>
<div class=\"col-md-12\">
  <div class=\"col-md-4\">
    <div class=\"thumbnail\">
      <a href=\"http://placehold.it\"><img src=\"http://placehold.it/150x250\"></a>
      <div class=\"caption\">
        <h2>Transformez votre salon en galerie éphèmère</h2>
        <p>Nis clou ni vis les artistes scénographie leur expo sans toucher a vos murs</p>

      </div>
    </div>
  </div>

  <div class=\"col-md-4\">
    <div class=\"thumbnail\">
      <a href=\"http://placehold.it\"><img src=\"http://placehold.it/150x250\"></a>
      <div class=\"caption\">
        <p><h2> Faites des rencontres</h2></p>
        <p>Les expos à la maison c'est le moment idéal pour faire des rencontres et parler de vos passions.</p>

      </div>
    </div>
</div>

<div class=\"col-md-4\">
  <div class=\"thumbnail\">
    <a href=\"http://placehold.it\"><img src=\"http://placehold.it/150x250\"></a>
    <div class=\"caption\">
      <h2>Vivez un moment hors du temps</h2>
      <p>Pas besoin d'avion pour voyager, laissez vous surprendre à deux pas de chez vous</p>
    </div>
  </div>
</div>
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
