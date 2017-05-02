<?php

/* default/index.html.twig */
class __TwigTemplate_404fe22398bc701d4918c8b61edc0d9b21672ac2f88f5150e2d753097770b1e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff4dbcbe12e601c94572bd508fcc0efd7260161df31524b32ec7b70e25bfba70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff4dbcbe12e601c94572bd508fcc0efd7260161df31524b32ec7b70e25bfba70->enter($__internal_ff4dbcbe12e601c94572bd508fcc0efd7260161df31524b32ec7b70e25bfba70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_9030faf0cad6646c86d1d9791a82ca141021a36331ee599df3b137d8b7c595e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9030faf0cad6646c86d1d9791a82ca141021a36331ee599df3b137d8b7c595e3->enter($__internal_9030faf0cad6646c86d1d9791a82ca141021a36331ee599df3b137d8b7c595e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff4dbcbe12e601c94572bd508fcc0efd7260161df31524b32ec7b70e25bfba70->leave($__internal_ff4dbcbe12e601c94572bd508fcc0efd7260161df31524b32ec7b70e25bfba70_prof);

        
        $__internal_9030faf0cad6646c86d1d9791a82ca141021a36331ee599df3b137d8b7c595e3->leave($__internal_9030faf0cad6646c86d1d9791a82ca141021a36331ee599df3b137d8b7c595e3_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cecdb7d6cc09735aa9562bf0eeb85df3f623d4416b0cd10b380e71ba39544da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cecdb7d6cc09735aa9562bf0eeb85df3f623d4416b0cd10b380e71ba39544da8->enter($__internal_cecdb7d6cc09735aa9562bf0eeb85df3f623d4416b0cd10b380e71ba39544da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cdfe3eba2c72d71f5f382b6344108ea1fd7990789f60e6121d3d2ca7b2fdc4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdfe3eba2c72d71f5f382b6344108ea1fd7990789f60e6121d3d2ca7b2fdc4d0->enter($__internal_cdfe3eba2c72d71f5f382b6344108ea1fd7990789f60e6121d3d2ca7b2fdc4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " 
    ";
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/script/slickCarousel/slick.css"), "html", null, true);
        echo "\" />
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no\">

";
        
        $__internal_cdfe3eba2c72d71f5f382b6344108ea1fd7990789f60e6121d3d2ca7b2fdc4d0->leave($__internal_cdfe3eba2c72d71f5f382b6344108ea1fd7990789f60e6121d3d2ca7b2fdc4d0_prof);

        
        $__internal_cecdb7d6cc09735aa9562bf0eeb85df3f623d4416b0cd10b380e71ba39544da8->leave($__internal_cecdb7d6cc09735aa9562bf0eeb85df3f623d4416b0cd10b380e71ba39544da8_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d221a8ba4433b7e6d10c2518f1f83da9cc89ac27acb068965795888b7c25066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d221a8ba4433b7e6d10c2518f1f83da9cc89ac27acb068965795888b7c25066->enter($__internal_1d221a8ba4433b7e6d10c2518f1f83da9cc89ac27acb068965795888b7c25066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ba30a81c6ceeb43a2d0e3b8525cfe7ebdb043db40cfdff78315887dc28d7eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba30a81c6ceeb43a2d0e3b8525cfe7ebdb043db40cfdff78315887dc28d7eae->enter($__internal_1ba30a81c6ceeb43a2d0e3b8525cfe7ebdb043db40cfdff78315887dc28d7eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
    Accueil
";
        
        $__internal_1ba30a81c6ceeb43a2d0e3b8525cfe7ebdb043db40cfdff78315887dc28d7eae->leave($__internal_1ba30a81c6ceeb43a2d0e3b8525cfe7ebdb043db40cfdff78315887dc28d7eae_prof);

        
        $__internal_1d221a8ba4433b7e6d10c2518f1f83da9cc89ac27acb068965795888b7c25066->leave($__internal_1d221a8ba4433b7e6d10c2518f1f83da9cc89ac27acb068965795888b7c25066_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_01d4db94962e6eaa6e4449346dde57ce1d98df822e550d8e2eca290693288d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01d4db94962e6eaa6e4449346dde57ce1d98df822e550d8e2eca290693288d47->enter($__internal_01d4db94962e6eaa6e4449346dde57ce1d98df822e550d8e2eca290693288d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3f44f5a4cb4af93908ab64a2617d4c9f9d299cd79a3db24bdda126cdc20c106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f44f5a4cb4af93908ab64a2617d4c9f9d299cd79a3db24bdda126cdc20c106->enter($__internal_c3f44f5a4cb4af93908ab64a2617d4c9f9d299cd79a3db24bdda126cdc20c106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <header>
        <div class=\" sizeScreen \">
            <div class=\"col-sm-offset-1 col-md-6\">
                <h1>Devenez MÉCÈNE d'un soir</h1>
                <h2>Blablablablabla</h2>
            </div>
        </div>
    </header>
    ";
        // line 26
        echo "    <section class=\"container-fluid\">

        <article>
            <h3>Les Expos de la semaine</h3>
            <div class=\"  your-class\">

                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>


            </div>
        </article>

        <article>
            <h3>Les Expos de la semaine</h3>
            <div class=\"  your-class\">

                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>


            </div>
        </article>

    </section>
    ";
        // line 102
        echo "    <section>

        <h3>Manifestation Kar:ms</h3>
        <div  class=\"sizeScreen video\">


            <iframe class=\"vid col-md-offset-2 col-md-8 col-xs-12\"  src=\"//www.youtube.com/embed/GAQ8PePmN6w\" allowfullscreen=\"\"></iframe>



        </div>
    </section>
    ";
        // line 115
        echo "    <section>
            <h3>Les expo selon nous</h3>
        <div class=\"container-fluid\">
            <div class=\"containerThumb\">
                <div class=\"thumbnail  col-md-4\">
                    <img src=\"https://placeholdit.imgix.net/~text?txtsize=19&txt=200%C3%97250&w=200&h=250\" alt=\"...\">
                    <div class=\"caption\">
                        <h4>Thumbnail label</h4>
                        <p>...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras bibendum congue enim, vitae euimdod ex tincidunt sit amet. Fusce et lorem quis arcu egestas vehicula. </p>

                    </div>
                </div>
                <div class=\"thumbnail  col-md-4\">
                    <img src=\"https://placeholdit.imgix.net/~text?txtsize=19&txt=200%C3%97250&w=200&h=250\" alt=\"...\">
                    <div class=\"caption\">
                        <h4>Thumbnail label</h4>
                        <p>...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras bibendum congue enim, vitae euimdod ex tincidunt sit amet. Fusce et lorem quis arcu egestas vehicula. </p>

                    </div>
                </div>
                <div class=\"thumbnail  col-md-4\">
                    <img src=\"https://placeholdit.imgix.net/~text?txtsize=19&txt=200%C3%97250&w=200&h=250\" alt=\"...\">
                    <div class=\"caption\">
                        <h4>Thumbnail label</h4>
                        <p>...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras bibendum congue enim, vitae euimdod ex tincidunt sit amet. Fusce et lorem quis arcu egestas vehicula. </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_c3f44f5a4cb4af93908ab64a2617d4c9f9d299cd79a3db24bdda126cdc20c106->leave($__internal_c3f44f5a4cb4af93908ab64a2617d4c9f9d299cd79a3db24bdda126cdc20c106_prof);

        
        $__internal_01d4db94962e6eaa6e4449346dde57ce1d98df822e550d8e2eca290693288d47->leave($__internal_01d4db94962e6eaa6e4449346dde57ce1d98df822e550d8e2eca290693288d47_prof);

    }

    // line 147
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1653c8cf29b2e0478ab47668f75daef48fdbf85bb8f6264bc522d140fb318749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1653c8cf29b2e0478ab47668f75daef48fdbf85bb8f6264bc522d140fb318749->enter($__internal_1653c8cf29b2e0478ab47668f75daef48fdbf85bb8f6264bc522d140fb318749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_89920dfbe13fcbfbc6e91b8b21c7492440a5d0249cf204dba7bf8390cf62f894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89920dfbe13fcbfbc6e91b8b21c7492440a5d0249cf204dba7bf8390cf62f894->enter($__internal_89920dfbe13fcbfbc6e91b8b21c7492440a5d0249cf204dba7bf8390cf62f894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "  
    ";
        // line 148
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("script/slickCarousel/slick.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("script/js/home.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_89920dfbe13fcbfbc6e91b8b21c7492440a5d0249cf204dba7bf8390cf62f894->leave($__internal_89920dfbe13fcbfbc6e91b8b21c7492440a5d0249cf204dba7bf8390cf62f894_prof);

        
        $__internal_1653c8cf29b2e0478ab47668f75daef48fdbf85bb8f6264bc522d140fb318749->leave($__internal_1653c8cf29b2e0478ab47668f75daef48fdbf85bb8f6264bc522d140fb318749_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 150,  261 => 149,  257 => 148,  246 => 147,  205 => 115,  191 => 102,  114 => 26,  104 => 17,  95 => 16,  81 => 12,  72 => 11,  57 => 6,  52 => 4,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

   {% block stylesheets %}
    {{parent()}} 
    {#<link rel=\"stylesheet\" href=\"{{ asset('/script/slickCarousel/slick-theme.css') }}\" />#}
    <link rel=\"stylesheet\" href=\"{{ asset('/script/slickCarousel/slick.css') }}\" />
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no\">

{% endblock %}

{% block title %}
    {{parent()}}
    Accueil
{% endblock %}

{% block body %}
    <header>
        <div class=\" sizeScreen \">
            <div class=\"col-sm-offset-1 col-md-6\">
                <h1>Devenez MÉCÈNE d'un soir</h1>
                <h2>Blablablablabla</h2>
            </div>
        </div>
    </header>
    {#    Section catousel#}
    <section class=\"container-fluid\">

        <article>
            <h3>Les Expos de la semaine</h3>
            <div class=\"  your-class\">

                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>


            </div>
        </article>

        <article>
            <h3>Les Expos de la semaine</h3>
            <div class=\"  your-class\">

                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>
                <div class=\"profil\">

                </div>


            </div>
        </article>

    </section>
    {#    Section Video #}
    <section>

        <h3>Manifestation Kar:ms</h3>
        <div  class=\"sizeScreen video\">


            <iframe class=\"vid col-md-offset-2 col-md-8 col-xs-12\"  src=\"//www.youtube.com/embed/GAQ8PePmN6w\" allowfullscreen=\"\"></iframe>



        </div>
    </section>
    {#   Dernier Section:  Les expo selon nous  #}
    <section>
            <h3>Les expo selon nous</h3>
        <div class=\"container-fluid\">
            <div class=\"containerThumb\">
                <div class=\"thumbnail  col-md-4\">
                    <img src=\"https://placeholdit.imgix.net/~text?txtsize=19&txt=200%C3%97250&w=200&h=250\" alt=\"...\">
                    <div class=\"caption\">
                        <h4>Thumbnail label</h4>
                        <p>...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras bibendum congue enim, vitae euimdod ex tincidunt sit amet. Fusce et lorem quis arcu egestas vehicula. </p>

                    </div>
                </div>
                <div class=\"thumbnail  col-md-4\">
                    <img src=\"https://placeholdit.imgix.net/~text?txtsize=19&txt=200%C3%97250&w=200&h=250\" alt=\"...\">
                    <div class=\"caption\">
                        <h4>Thumbnail label</h4>
                        <p>...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras bibendum congue enim, vitae euimdod ex tincidunt sit amet. Fusce et lorem quis arcu egestas vehicula. </p>

                    </div>
                </div>
                <div class=\"thumbnail  col-md-4\">
                    <img src=\"https://placeholdit.imgix.net/~text?txtsize=19&txt=200%C3%97250&w=200&h=250\" alt=\"...\">
                    <div class=\"caption\">
                        <h4>Thumbnail label</h4>
                        <p>...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras bibendum congue enim, vitae euimdod ex tincidunt sit amet. Fusce et lorem quis arcu egestas vehicula. </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
{% block javascripts %}  
    {{ parent() }}
    <script src=\"{{asset('script/slickCarousel/slick.js') }}\"></script>
    <script src=\"{{asset('script/js/home.js')}}\"></script>
{% endblock %}
", "default/index.html.twig", "/var/www/html/Exposmaison/app/Resources/views/default/index.html.twig");
    }
}
