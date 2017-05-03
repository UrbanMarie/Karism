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
        $__internal_01349be71f7229e23159034fd371ed4463948acc9802d344f796077e51532ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01349be71f7229e23159034fd371ed4463948acc9802d344f796077e51532ec8->enter($__internal_01349be71f7229e23159034fd371ed4463948acc9802d344f796077e51532ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_ea63e22156b9094fbccdc3a7babe3e1b2329efe74316526ece4d2e8bc1408e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea63e22156b9094fbccdc3a7babe3e1b2329efe74316526ece4d2e8bc1408e04->enter($__internal_ea63e22156b9094fbccdc3a7babe3e1b2329efe74316526ece4d2e8bc1408e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo "\"/>
    </head>
    <body>
        <nav class=\"navbar navbar-default navbar-static-top nav-pills \">
          <div class=\"container\">
              <div class=\"logo pull-left\"> <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo\"/></div>
              <div class=\"btn-group  pull-right\">
    <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      Name User <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\">
      <li><a href=\"#\">Action</a></li>
      <li><a href=\"#\">Another action</a></li>
      <li><a href=\"#\">Something else here</a></li>
      <li role=\"separator\" class=\"divider\"></li>
      <li><a href=\"#\">Separated link</a></li>
    </ul>
  </div>
          </div>
        </nav>

<div class=\"footer\">
    <div class=\"row\">
        <div class=\"col-md-3\">
        </div>
        <div class=\"col-md-3\">
        </div>
        <div class=\"col-md-3\">
        </div>
        <div class=\"col-md-3\">
        </div>
    </div>
</div>


        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"> </script>
        ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    </body>
</html>
";
        
        $__internal_01349be71f7229e23159034fd371ed4463948acc9802d344f796077e51532ec8->leave($__internal_01349be71f7229e23159034fd371ed4463948acc9802d344f796077e51532ec8_prof);

        
        $__internal_ea63e22156b9094fbccdc3a7babe3e1b2329efe74316526ece4d2e8bc1408e04->leave($__internal_ea63e22156b9094fbccdc3a7babe3e1b2329efe74316526ece4d2e8bc1408e04_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_81b81482f1f881fc585b23b666edff91edbdce41ed43698f11fd94b5337c8a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81b81482f1f881fc585b23b666edff91edbdce41ed43698f11fd94b5337c8a8b->enter($__internal_81b81482f1f881fc585b23b666edff91edbdce41ed43698f11fd94b5337c8a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1785e93c1b6ae2da9f28c0bc3b552ec1aed1da92585c57a282436c7d060480ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1785e93c1b6ae2da9f28c0bc3b552ec1aed1da92585c57a282436c7d060480ac->enter($__internal_1785e93c1b6ae2da9f28c0bc3b552ec1aed1da92585c57a282436c7d060480ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1785e93c1b6ae2da9f28c0bc3b552ec1aed1da92585c57a282436c7d060480ac->leave($__internal_1785e93c1b6ae2da9f28c0bc3b552ec1aed1da92585c57a282436c7d060480ac_prof);

        
        $__internal_81b81482f1f881fc585b23b666edff91edbdce41ed43698f11fd94b5337c8a8b->leave($__internal_81b81482f1f881fc585b23b666edff91edbdce41ed43698f11fd94b5337c8a8b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd859250bd4b09c8d9fd1af83cbe382e389b2f8e42e8d088e30caeb63ea8c643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd859250bd4b09c8d9fd1af83cbe382e389b2f8e42e8d088e30caeb63ea8c643->enter($__internal_dd859250bd4b09c8d9fd1af83cbe382e389b2f8e42e8d088e30caeb63ea8c643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_57abf57a029dbb1b172f0bccdd91fa0e94db7d1f0babaf80f5c95b14f913fbf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57abf57a029dbb1b172f0bccdd91fa0e94db7d1f0babaf80f5c95b14f913fbf2->enter($__internal_57abf57a029dbb1b172f0bccdd91fa0e94db7d1f0babaf80f5c95b14f913fbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_57abf57a029dbb1b172f0bccdd91fa0e94db7d1f0babaf80f5c95b14f913fbf2->leave($__internal_57abf57a029dbb1b172f0bccdd91fa0e94db7d1f0babaf80f5c95b14f913fbf2_prof);

        
        $__internal_dd859250bd4b09c8d9fd1af83cbe382e389b2f8e42e8d088e30caeb63ea8c643->leave($__internal_dd859250bd4b09c8d9fd1af83cbe382e389b2f8e42e8d088e30caeb63ea8c643_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_c803b1eb4cd2c88c5df2b75bc011957352c0dd003cfe01f107fa9a80b8b4ff50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c803b1eb4cd2c88c5df2b75bc011957352c0dd003cfe01f107fa9a80b8b4ff50->enter($__internal_c803b1eb4cd2c88c5df2b75bc011957352c0dd003cfe01f107fa9a80b8b4ff50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b480542201dbec3787d894756cad3acef42566095ebdd4c7ad1e2b966ed125f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b480542201dbec3787d894756cad3acef42566095ebdd4c7ad1e2b966ed125f8->enter($__internal_b480542201dbec3787d894756cad3acef42566095ebdd4c7ad1e2b966ed125f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b480542201dbec3787d894756cad3acef42566095ebdd4c7ad1e2b966ed125f8->leave($__internal_b480542201dbec3787d894756cad3acef42566095ebdd4c7ad1e2b966ed125f8_prof);

        
        $__internal_c803b1eb4cd2c88c5df2b75bc011957352c0dd003cfe01f107fa9a80b8b4ff50->leave($__internal_c803b1eb4cd2c88c5df2b75bc011957352c0dd003cfe01f107fa9a80b8b4ff50_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1614adb26ee3c2cfdf72057f835e9dee8e22b1eaa29b40ee77e5aec92e7dd7f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1614adb26ee3c2cfdf72057f835e9dee8e22b1eaa29b40ee77e5aec92e7dd7f0->enter($__internal_1614adb26ee3c2cfdf72057f835e9dee8e22b1eaa29b40ee77e5aec92e7dd7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ebba79a97a8a63cf06d42e9864790cab1fdd0e2418a82043cf3015d74ca8b276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebba79a97a8a63cf06d42e9864790cab1fdd0e2418a82043cf3015d74ca8b276->enter($__internal_ebba79a97a8a63cf06d42e9864790cab1fdd0e2418a82043cf3015d74ca8b276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ebba79a97a8a63cf06d42e9864790cab1fdd0e2418a82043cf3015d74ca8b276->leave($__internal_ebba79a97a8a63cf06d42e9864790cab1fdd0e2418a82043cf3015d74ca8b276_prof);

        
        $__internal_1614adb26ee3c2cfdf72057f835e9dee8e22b1eaa29b40ee77e5aec92e7dd7f0->leave($__internal_1614adb26ee3c2cfdf72057f835e9dee8e22b1eaa29b40ee77e5aec92e7dd7f0_prof);

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
        return array (  157 => 46,  140 => 43,  123 => 6,  105 => 5,  93 => 47,  91 => 46,  87 => 44,  85 => 43,  52 => 13,  44 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
    </head>
    <body>
        <nav class=\"navbar navbar-default navbar-static-top nav-pills \">
          <div class=\"container\">
              <div class=\"logo pull-left\"> <img src=\"{{asset('img/logo/logo.jpg')}}\" alt=\"logo\"/></div>
              <div class=\"btn-group  pull-right\">
    <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      Name User <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\">
      <li><a href=\"#\">Action</a></li>
      <li><a href=\"#\">Another action</a></li>
      <li><a href=\"#\">Something else here</a></li>
      <li role=\"separator\" class=\"divider\"></li>
      <li><a href=\"#\">Separated link</a></li>
    </ul>
  </div>
          </div>
        </nav>

<div class=\"footer\">
    <div class=\"row\">
        <div class=\"col-md-3\">
        </div>
        <div class=\"col-md-3\">
        </div>
        <div class=\"col-md-3\">
        </div>
        <div class=\"col-md-3\">
        </div>
    </div>
</div>


        {% block body %}{% endblock %}
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"> </script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/Expomaison/exposmaison/app/Resources/views/base.html.twig");
    }
}
