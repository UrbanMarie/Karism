<?php

/* base.html.twig */
class __TwigTemplate_12a9784906875215e0dff72fbea6a70a80828e4aa3365ff25286dac4ee04c2cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89ae74a113399571dfa8cec57d3f2910d687234964455898cea7db799e251293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ae74a113399571dfa8cec57d3f2910d687234964455898cea7db799e251293->enter($__internal_89ae74a113399571dfa8cec57d3f2910d687234964455898cea7db799e251293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_db1d0381f89c74ad0bc8dc8ab5ff803a1b484f6deb0a2b3b203fbd9d7b99aab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1d0381f89c74ad0bc8dc8ab5ff803a1b484f6deb0a2b3b203fbd9d7b99aab0->enter($__internal_db1d0381f89c74ad0bc8dc8ab5ff803a1b484f6deb0a2b3b203fbd9d7b99aab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
    </head>
    <body>
        <nav class=\"navbar navbar-default navbar-static-top nav-pills \">
          <div class=\"container\">
              <div class=\"logo pull-left\"> <img src=\"img/logo/logo.jpg \" alt=\"logo\"/></div>
            
          </div>
        </nav>



        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"> </script>
        ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>
";
        
        $__internal_89ae74a113399571dfa8cec57d3f2910d687234964455898cea7db799e251293->leave($__internal_89ae74a113399571dfa8cec57d3f2910d687234964455898cea7db799e251293_prof);

        
        $__internal_db1d0381f89c74ad0bc8dc8ab5ff803a1b484f6deb0a2b3b203fbd9d7b99aab0->leave($__internal_db1d0381f89c74ad0bc8dc8ab5ff803a1b484f6deb0a2b3b203fbd9d7b99aab0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_90e0798e73e7c8b46564d2e602945a8e12727911e7e8c451e0d8e7b50c6be4a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90e0798e73e7c8b46564d2e602945a8e12727911e7e8c451e0d8e7b50c6be4a9->enter($__internal_90e0798e73e7c8b46564d2e602945a8e12727911e7e8c451e0d8e7b50c6be4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5dec58813622338d31df6526f9af0634371b21cf6b48e69c77dd045af1972926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dec58813622338d31df6526f9af0634371b21cf6b48e69c77dd045af1972926->enter($__internal_5dec58813622338d31df6526f9af0634371b21cf6b48e69c77dd045af1972926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5dec58813622338d31df6526f9af0634371b21cf6b48e69c77dd045af1972926->leave($__internal_5dec58813622338d31df6526f9af0634371b21cf6b48e69c77dd045af1972926_prof);

        
        $__internal_90e0798e73e7c8b46564d2e602945a8e12727911e7e8c451e0d8e7b50c6be4a9->leave($__internal_90e0798e73e7c8b46564d2e602945a8e12727911e7e8c451e0d8e7b50c6be4a9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f2aeebec76575eb6eee52d6a7396d900205bb003dd16b61aaf77f3ca21e64e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2aeebec76575eb6eee52d6a7396d900205bb003dd16b61aaf77f3ca21e64e45->enter($__internal_f2aeebec76575eb6eee52d6a7396d900205bb003dd16b61aaf77f3ca21e64e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_371a18555d7728e8d28fcf51171b1f55c1d784209e4b9ed65a8ce972495192fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371a18555d7728e8d28fcf51171b1f55c1d784209e4b9ed65a8ce972495192fa->enter($__internal_371a18555d7728e8d28fcf51171b1f55c1d784209e4b9ed65a8ce972495192fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_371a18555d7728e8d28fcf51171b1f55c1d784209e4b9ed65a8ce972495192fa->leave($__internal_371a18555d7728e8d28fcf51171b1f55c1d784209e4b9ed65a8ce972495192fa_prof);

        
        $__internal_f2aeebec76575eb6eee52d6a7396d900205bb003dd16b61aaf77f3ca21e64e45->leave($__internal_f2aeebec76575eb6eee52d6a7396d900205bb003dd16b61aaf77f3ca21e64e45_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_04f9bd16d7e5100b7dbcabd63a34c4d691f51cdccdc2c6df3840f773d374a51c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04f9bd16d7e5100b7dbcabd63a34c4d691f51cdccdc2c6df3840f773d374a51c->enter($__internal_04f9bd16d7e5100b7dbcabd63a34c4d691f51cdccdc2c6df3840f773d374a51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26ef3413be45e2d2d3821503746cb1d596796502d39cc5343a7c493c1890b6a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ef3413be45e2d2d3821503746cb1d596796502d39cc5343a7c493c1890b6a8->enter($__internal_26ef3413be45e2d2d3821503746cb1d596796502d39cc5343a7c493c1890b6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_26ef3413be45e2d2d3821503746cb1d596796502d39cc5343a7c493c1890b6a8->leave($__internal_26ef3413be45e2d2d3821503746cb1d596796502d39cc5343a7c493c1890b6a8_prof);

        
        $__internal_04f9bd16d7e5100b7dbcabd63a34c4d691f51cdccdc2c6df3840f773d374a51c->leave($__internal_04f9bd16d7e5100b7dbcabd63a34c4d691f51cdccdc2c6df3840f773d374a51c_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7dff29b5f90b7085cfad5eba3d5d01bac78cc55c75c9176a6c1524d148f337b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dff29b5f90b7085cfad5eba3d5d01bac78cc55c75c9176a6c1524d148f337b0->enter($__internal_7dff29b5f90b7085cfad5eba3d5d01bac78cc55c75c9176a6c1524d148f337b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_263b80dc3b5fd113aac6bf6dc27b9e0860378ffaf0d34f75b77453c7e3f438c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263b80dc3b5fd113aac6bf6dc27b9e0860378ffaf0d34f75b77453c7e3f438c4->enter($__internal_263b80dc3b5fd113aac6bf6dc27b9e0860378ffaf0d34f75b77453c7e3f438c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_263b80dc3b5fd113aac6bf6dc27b9e0860378ffaf0d34f75b77453c7e3f438c4->leave($__internal_263b80dc3b5fd113aac6bf6dc27b9e0860378ffaf0d34f75b77453c7e3f438c4_prof);

        
        $__internal_7dff29b5f90b7085cfad5eba3d5d01bac78cc55c75c9176a6c1524d148f337b0->leave($__internal_7dff29b5f90b7085cfad5eba3d5d01bac78cc55c75c9176a6c1524d148f337b0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 23,  114 => 20,  97 => 6,  79 => 5,  67 => 24,  65 => 23,  61 => 21,  59 => 20,  44 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\">
    </head>
    <body>
        <nav class=\"navbar navbar-default navbar-static-top nav-pills \">
          <div class=\"container\">
              <div class=\"logo pull-left\"> <img src=\"img/logo/logo.jpg \" alt=\"logo\"/></div>
            
          </div>
        </nav>



        {% block body %}{% endblock %}
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"> </script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Exposmaison/app/Resources/views/base.html.twig");
    }
}
