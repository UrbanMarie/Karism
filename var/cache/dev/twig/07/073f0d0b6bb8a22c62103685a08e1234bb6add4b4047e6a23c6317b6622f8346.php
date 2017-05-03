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
        $__internal_726d371c7050b41628238511a7290f711e9ca7142a43698cc029947950317a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_726d371c7050b41628238511a7290f711e9ca7142a43698cc029947950317a68->enter($__internal_726d371c7050b41628238511a7290f711e9ca7142a43698cc029947950317a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_cace40dc1284dde07d267de46578d5eea66f78ba7bc3dc85795377b1acaa7aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cace40dc1284dde07d267de46578d5eea66f78ba7bc3dc85795377b1acaa7aa5->enter($__internal_cace40dc1284dde07d267de46578d5eea66f78ba7bc3dc85795377b1acaa7aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/CSS/template.css"), "html", null, true);
        echo "\" media=\"screen\">
        <script src=\"https://use.fontawesome.com/720a2db289.js\"></script>
    </head>
    <body>
        <nav class=\"navbar navbar-default navbar-static-top nav-pills \">
          <div class=\"container\">
              <div class=\"logo pull-left\"> <img src=\"";
        // line 15
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


        <footer class=\"footerr pull-left\">
            <div class=\"row footerr\">
                <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                    <h5>  A propos </h5><br><p class=\"footerr\">  Les EXPOS à la MAISON est une plateforme de mise en relation entre artistes et particuliers qui s’articule autour d’une galerie d’art en ligne.</p>
                </div>
                <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                    <h5> En savoir plus </h5><br>
                    <p class=\"footerr\">     Charte <br> FAQ <br> </p>
                </div>
                <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                    <h5> Contact </h5><br>
                        <i class=\"fa fa-phone\" aria-hidden=\"true\">      07 81 02 72 15  </i>
                        <br>
                       <i class=\"fa fa-envelope-o\" aria-hidden=\"true\">      contact@karism.fr  </i>
                    </p>
                </div>
                <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                    <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("script/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"45%\">
                    <br>
                    <br>
                    <div class=\"Icon\">
                        <i class=\"fa fa-facebook-square fa-3x pad\" aria-hidden=\"true\"></i>

                        <i class=\"fa fa-instagram fa-3x pad\" aria-hidden=\"true\"></i>

                        <i class=\"fa fa-twitter-square fa-3x orange\" aria-hidden=\"true\"></i>
                    </div>
                </div>
            </div>
        </footer>


        ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"> </script>
        ";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "    </body>
</html>
";
        
        $__internal_726d371c7050b41628238511a7290f711e9ca7142a43698cc029947950317a68->leave($__internal_726d371c7050b41628238511a7290f711e9ca7142a43698cc029947950317a68_prof);

        
        $__internal_cace40dc1284dde07d267de46578d5eea66f78ba7bc3dc85795377b1acaa7aa5->leave($__internal_cace40dc1284dde07d267de46578d5eea66f78ba7bc3dc85795377b1acaa7aa5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa913b7313aa3d248fa6eeb02542d5619f5bfb3f64deb05987b5a4bb1a160904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa913b7313aa3d248fa6eeb02542d5619f5bfb3f64deb05987b5a4bb1a160904->enter($__internal_aa913b7313aa3d248fa6eeb02542d5619f5bfb3f64deb05987b5a4bb1a160904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c350e8d6697cb4b23f4f4fab01cd24636f82840318837c702dbc40b64176b0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c350e8d6697cb4b23f4f4fab01cd24636f82840318837c702dbc40b64176b0ed->enter($__internal_c350e8d6697cb4b23f4f4fab01cd24636f82840318837c702dbc40b64176b0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c350e8d6697cb4b23f4f4fab01cd24636f82840318837c702dbc40b64176b0ed->leave($__internal_c350e8d6697cb4b23f4f4fab01cd24636f82840318837c702dbc40b64176b0ed_prof);

        
        $__internal_aa913b7313aa3d248fa6eeb02542d5619f5bfb3f64deb05987b5a4bb1a160904->leave($__internal_aa913b7313aa3d248fa6eeb02542d5619f5bfb3f64deb05987b5a4bb1a160904_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_542ddf7fde3830f44ff530efc7670fd23ced7a6a0f3a098f1ec5496bfdd9f65d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_542ddf7fde3830f44ff530efc7670fd23ced7a6a0f3a098f1ec5496bfdd9f65d->enter($__internal_542ddf7fde3830f44ff530efc7670fd23ced7a6a0f3a098f1ec5496bfdd9f65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ff742ae9feca8539f38ac45668ac2eded53e1292638c1dda7f7473973a4c168b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff742ae9feca8539f38ac45668ac2eded53e1292638c1dda7f7473973a4c168b->enter($__internal_ff742ae9feca8539f38ac45668ac2eded53e1292638c1dda7f7473973a4c168b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ff742ae9feca8539f38ac45668ac2eded53e1292638c1dda7f7473973a4c168b->leave($__internal_ff742ae9feca8539f38ac45668ac2eded53e1292638c1dda7f7473973a4c168b_prof);

        
        $__internal_542ddf7fde3830f44ff530efc7670fd23ced7a6a0f3a098f1ec5496bfdd9f65d->leave($__internal_542ddf7fde3830f44ff530efc7670fd23ced7a6a0f3a098f1ec5496bfdd9f65d_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_5092c78a2a2348a2753aa3c8afd2b0592795e8f664b5656feafaa2f6603b9160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5092c78a2a2348a2753aa3c8afd2b0592795e8f664b5656feafaa2f6603b9160->enter($__internal_5092c78a2a2348a2753aa3c8afd2b0592795e8f664b5656feafaa2f6603b9160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb52e921f76550f1e94a0c3264138f4a6dd370f33140f2dfb847d07b0fd323d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb52e921f76550f1e94a0c3264138f4a6dd370f33140f2dfb847d07b0fd323d0->enter($__internal_bb52e921f76550f1e94a0c3264138f4a6dd370f33140f2dfb847d07b0fd323d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bb52e921f76550f1e94a0c3264138f4a6dd370f33140f2dfb847d07b0fd323d0->leave($__internal_bb52e921f76550f1e94a0c3264138f4a6dd370f33140f2dfb847d07b0fd323d0_prof);

        
        $__internal_5092c78a2a2348a2753aa3c8afd2b0592795e8f664b5656feafaa2f6603b9160->leave($__internal_5092c78a2a2348a2753aa3c8afd2b0592795e8f664b5656feafaa2f6603b9160_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f00ccb57ce2b0919cfbebbe1dfd80ef98452a792f8d2b8e9740e56dfdcbb6c25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f00ccb57ce2b0919cfbebbe1dfd80ef98452a792f8d2b8e9740e56dfdcbb6c25->enter($__internal_f00ccb57ce2b0919cfbebbe1dfd80ef98452a792f8d2b8e9740e56dfdcbb6c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_59bc18180421d4042c865e9470209fd85f0fabefbaf4792035d3df0afa50e41f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59bc18180421d4042c865e9470209fd85f0fabefbaf4792035d3df0afa50e41f->enter($__internal_59bc18180421d4042c865e9470209fd85f0fabefbaf4792035d3df0afa50e41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_59bc18180421d4042c865e9470209fd85f0fabefbaf4792035d3df0afa50e41f->leave($__internal_59bc18180421d4042c865e9470209fd85f0fabefbaf4792035d3df0afa50e41f_prof);

        
        $__internal_f00ccb57ce2b0919cfbebbe1dfd80ef98452a792f8d2b8e9740e56dfdcbb6c25->leave($__internal_f00ccb57ce2b0919cfbebbe1dfd80ef98452a792f8d2b8e9740e56dfdcbb6c25_prof);

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
        return array (  184 => 67,  167 => 64,  150 => 6,  132 => 5,  120 => 68,  118 => 67,  114 => 65,  112 => 64,  94 => 49,  57 => 15,  48 => 9,  44 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/CSS/template.css')}}\" media=\"screen\">
        <script src=\"https://use.fontawesome.com/720a2db289.js\"></script>
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


        <footer class=\"footerr pull-left\">
            <div class=\"row footerr\">
                <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                    <h5>  A propos </h5><br><p class=\"footerr\">  Les EXPOS à la MAISON est une plateforme de mise en relation entre artistes et particuliers qui s’articule autour d’une galerie d’art en ligne.</p>
                </div>
                <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                    <h5> En savoir plus </h5><br>
                    <p class=\"footerr\">     Charte <br> FAQ <br> </p>
                </div>
                <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                    <h5> Contact </h5><br>
                        <i class=\"fa fa-phone\" aria-hidden=\"true\">      07 81 02 72 15  </i>
                        <br>
                       <i class=\"fa fa-envelope-o\" aria-hidden=\"true\">      contact@karism.fr  </i>
                    </p>
                </div>
                <div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">
                    <img src=\"{{ asset('script/img/logo.png') }}\" alt=\"logo\" width=\"45%\">
                    <br>
                    <br>
                    <div class=\"Icon\">
                        <i class=\"fa fa-facebook-square fa-3x pad\" aria-hidden=\"true\"></i>

                        <i class=\"fa fa-instagram fa-3x pad\" aria-hidden=\"true\"></i>

                        <i class=\"fa fa-twitter-square fa-3x orange\" aria-hidden=\"true\"></i>
                    </div>
                </div>
            </div>
        </footer>


        {% block body %}{% endblock %}
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"> </script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/Expomaison/exposmaison/app/Resources/views/base.html.twig");
    }
}
