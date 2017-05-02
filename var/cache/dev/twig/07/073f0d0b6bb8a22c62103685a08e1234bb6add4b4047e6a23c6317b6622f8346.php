<?php

/* ::base.html.twig */
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
        $__internal_d84c370b86c0347a69a5a5f8dbafd01e45a7a538d3cbd7aac9b7aec163b3e8f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d84c370b86c0347a69a5a5f8dbafd01e45a7a538d3cbd7aac9b7aec163b3e8f9->enter($__internal_d84c370b86c0347a69a5a5f8dbafd01e45a7a538d3cbd7aac9b7aec163b3e8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_39a3d9d8ad477de91ca499074a7815ed116d590eb03357a66b1030462622533c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a3d9d8ad477de91ca499074a7815ed116d590eb03357a66b1030462622533c->enter($__internal_39a3d9d8ad477de91ca499074a7815ed116d590eb03357a66b1030462622533c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d84c370b86c0347a69a5a5f8dbafd01e45a7a538d3cbd7aac9b7aec163b3e8f9->leave($__internal_d84c370b86c0347a69a5a5f8dbafd01e45a7a538d3cbd7aac9b7aec163b3e8f9_prof);

        
        $__internal_39a3d9d8ad477de91ca499074a7815ed116d590eb03357a66b1030462622533c->leave($__internal_39a3d9d8ad477de91ca499074a7815ed116d590eb03357a66b1030462622533c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd918d0d21a31b3216e8fd12654c6edeaae83379afcd6f571fa773c47684d7e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd918d0d21a31b3216e8fd12654c6edeaae83379afcd6f571fa773c47684d7e2->enter($__internal_fd918d0d21a31b3216e8fd12654c6edeaae83379afcd6f571fa773c47684d7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b959f4eeb3b60a2c4f7d3084c8fc98c51208ec9493321fb56f9cea6b69329450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b959f4eeb3b60a2c4f7d3084c8fc98c51208ec9493321fb56f9cea6b69329450->enter($__internal_b959f4eeb3b60a2c4f7d3084c8fc98c51208ec9493321fb56f9cea6b69329450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b959f4eeb3b60a2c4f7d3084c8fc98c51208ec9493321fb56f9cea6b69329450->leave($__internal_b959f4eeb3b60a2c4f7d3084c8fc98c51208ec9493321fb56f9cea6b69329450_prof);

        
        $__internal_fd918d0d21a31b3216e8fd12654c6edeaae83379afcd6f571fa773c47684d7e2->leave($__internal_fd918d0d21a31b3216e8fd12654c6edeaae83379afcd6f571fa773c47684d7e2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd649f89bd31e2de316066eab3524e9ab545e2f9be77bc6d60ced488e2431ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd649f89bd31e2de316066eab3524e9ab545e2f9be77bc6d60ced488e2431ae6->enter($__internal_bd649f89bd31e2de316066eab3524e9ab545e2f9be77bc6d60ced488e2431ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cb635dfc7ed7c8472d93c38276150b0b52654a79a5a839acd2f6d27d3911b414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb635dfc7ed7c8472d93c38276150b0b52654a79a5a839acd2f6d27d3911b414->enter($__internal_cb635dfc7ed7c8472d93c38276150b0b52654a79a5a839acd2f6d27d3911b414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cb635dfc7ed7c8472d93c38276150b0b52654a79a5a839acd2f6d27d3911b414->leave($__internal_cb635dfc7ed7c8472d93c38276150b0b52654a79a5a839acd2f6d27d3911b414_prof);

        
        $__internal_bd649f89bd31e2de316066eab3524e9ab545e2f9be77bc6d60ced488e2431ae6->leave($__internal_bd649f89bd31e2de316066eab3524e9ab545e2f9be77bc6d60ced488e2431ae6_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf3a1900a0ad7508e879338945db8bc75cd3d7f4be113fdc2dfad88991f98216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf3a1900a0ad7508e879338945db8bc75cd3d7f4be113fdc2dfad88991f98216->enter($__internal_cf3a1900a0ad7508e879338945db8bc75cd3d7f4be113fdc2dfad88991f98216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ac0eaca81e823bc1f73d52ccecdcddcf8bcd15d1d9286c6e931bd93c76e8a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac0eaca81e823bc1f73d52ccecdcddcf8bcd15d1d9286c6e931bd93c76e8a93->enter($__internal_9ac0eaca81e823bc1f73d52ccecdcddcf8bcd15d1d9286c6e931bd93c76e8a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9ac0eaca81e823bc1f73d52ccecdcddcf8bcd15d1d9286c6e931bd93c76e8a93->leave($__internal_9ac0eaca81e823bc1f73d52ccecdcddcf8bcd15d1d9286c6e931bd93c76e8a93_prof);

        
        $__internal_cf3a1900a0ad7508e879338945db8bc75cd3d7f4be113fdc2dfad88991f98216->leave($__internal_cf3a1900a0ad7508e879338945db8bc75cd3d7f4be113fdc2dfad88991f98216_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2af2912abf9675879202f4ea119cb99b2851563cea91c2ee2e6471f5464cc539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af2912abf9675879202f4ea119cb99b2851563cea91c2ee2e6471f5464cc539->enter($__internal_2af2912abf9675879202f4ea119cb99b2851563cea91c2ee2e6471f5464cc539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5f3c45eb8e2a47a9554d9fca0fd8ba74c1db7e429d5a7b44dfba4aa71bf85a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3c45eb8e2a47a9554d9fca0fd8ba74c1db7e429d5a7b44dfba4aa71bf85a60->enter($__internal_5f3c45eb8e2a47a9554d9fca0fd8ba74c1db7e429d5a7b44dfba4aa71bf85a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5f3c45eb8e2a47a9554d9fca0fd8ba74c1db7e429d5a7b44dfba4aa71bf85a60->leave($__internal_5f3c45eb8e2a47a9554d9fca0fd8ba74c1db7e429d5a7b44dfba4aa71bf85a60_prof);

        
        $__internal_2af2912abf9675879202f4ea119cb99b2851563cea91c2ee2e6471f5464cc539->leave($__internal_2af2912abf9675879202f4ea119cb99b2851563cea91c2ee2e6471f5464cc539_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "/var/www/html/Expomaison/exposmaison/app/Resources/views/base.html.twig");
    }
}
