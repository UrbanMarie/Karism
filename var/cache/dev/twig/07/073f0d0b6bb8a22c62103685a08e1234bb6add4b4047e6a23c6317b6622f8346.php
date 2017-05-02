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
        $__internal_2b2001d9580666fe0b15f5c9dee765cce128e5d4abec3a8b353747659a5c69e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b2001d9580666fe0b15f5c9dee765cce128e5d4abec3a8b353747659a5c69e9->enter($__internal_2b2001d9580666fe0b15f5c9dee765cce128e5d4abec3a8b353747659a5c69e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_711e820dd580f506d51f10bb24deb4b7c6d6e6f22b24d8e8b334e6f51a573974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711e820dd580f506d51f10bb24deb4b7c6d6e6f22b24d8e8b334e6f51a573974->enter($__internal_711e820dd580f506d51f10bb24deb4b7c6d6e6f22b24d8e8b334e6f51a573974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2b2001d9580666fe0b15f5c9dee765cce128e5d4abec3a8b353747659a5c69e9->leave($__internal_2b2001d9580666fe0b15f5c9dee765cce128e5d4abec3a8b353747659a5c69e9_prof);

        
        $__internal_711e820dd580f506d51f10bb24deb4b7c6d6e6f22b24d8e8b334e6f51a573974->leave($__internal_711e820dd580f506d51f10bb24deb4b7c6d6e6f22b24d8e8b334e6f51a573974_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6079b9fcede309ccfd81621b204ee3e0b2234c5d080c9890a83f96e28c3d05d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6079b9fcede309ccfd81621b204ee3e0b2234c5d080c9890a83f96e28c3d05d5->enter($__internal_6079b9fcede309ccfd81621b204ee3e0b2234c5d080c9890a83f96e28c3d05d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f5bf48d511c1ef388327a9237b50866ba728b5e805d474a7c440eedf6efd3a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5bf48d511c1ef388327a9237b50866ba728b5e805d474a7c440eedf6efd3a86->enter($__internal_f5bf48d511c1ef388327a9237b50866ba728b5e805d474a7c440eedf6efd3a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f5bf48d511c1ef388327a9237b50866ba728b5e805d474a7c440eedf6efd3a86->leave($__internal_f5bf48d511c1ef388327a9237b50866ba728b5e805d474a7c440eedf6efd3a86_prof);

        
        $__internal_6079b9fcede309ccfd81621b204ee3e0b2234c5d080c9890a83f96e28c3d05d5->leave($__internal_6079b9fcede309ccfd81621b204ee3e0b2234c5d080c9890a83f96e28c3d05d5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_62717f289fc5ff07409abbc3c9be6c0c501fd9d4522bd6e72fcdf904ecb09ca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62717f289fc5ff07409abbc3c9be6c0c501fd9d4522bd6e72fcdf904ecb09ca9->enter($__internal_62717f289fc5ff07409abbc3c9be6c0c501fd9d4522bd6e72fcdf904ecb09ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_eb15386ad318c56b281cc3f45e21d7303cded6dd1a6065c946c14229baaf312d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb15386ad318c56b281cc3f45e21d7303cded6dd1a6065c946c14229baaf312d->enter($__internal_eb15386ad318c56b281cc3f45e21d7303cded6dd1a6065c946c14229baaf312d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eb15386ad318c56b281cc3f45e21d7303cded6dd1a6065c946c14229baaf312d->leave($__internal_eb15386ad318c56b281cc3f45e21d7303cded6dd1a6065c946c14229baaf312d_prof);

        
        $__internal_62717f289fc5ff07409abbc3c9be6c0c501fd9d4522bd6e72fcdf904ecb09ca9->leave($__internal_62717f289fc5ff07409abbc3c9be6c0c501fd9d4522bd6e72fcdf904ecb09ca9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e205ec69524c1df65148f5dcc04e5198f0ad720de9080a7946ecf43b331499d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e205ec69524c1df65148f5dcc04e5198f0ad720de9080a7946ecf43b331499d->enter($__internal_7e205ec69524c1df65148f5dcc04e5198f0ad720de9080a7946ecf43b331499d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_410fcb40a0a87f259c18a3bb2c67c55880d5395d69437d62918db0ead360591a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410fcb40a0a87f259c18a3bb2c67c55880d5395d69437d62918db0ead360591a->enter($__internal_410fcb40a0a87f259c18a3bb2c67c55880d5395d69437d62918db0ead360591a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_410fcb40a0a87f259c18a3bb2c67c55880d5395d69437d62918db0ead360591a->leave($__internal_410fcb40a0a87f259c18a3bb2c67c55880d5395d69437d62918db0ead360591a_prof);

        
        $__internal_7e205ec69524c1df65148f5dcc04e5198f0ad720de9080a7946ecf43b331499d->leave($__internal_7e205ec69524c1df65148f5dcc04e5198f0ad720de9080a7946ecf43b331499d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5a0536f907760b602a4e96c9473e511e998d73c772b84018157f6ce0d656bde5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a0536f907760b602a4e96c9473e511e998d73c772b84018157f6ce0d656bde5->enter($__internal_5a0536f907760b602a4e96c9473e511e998d73c772b84018157f6ce0d656bde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7340fd87ac948ef91bf6a1cb20f8cee1dcf13e9349e13c57764cfe609648b491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7340fd87ac948ef91bf6a1cb20f8cee1dcf13e9349e13c57764cfe609648b491->enter($__internal_7340fd87ac948ef91bf6a1cb20f8cee1dcf13e9349e13c57764cfe609648b491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7340fd87ac948ef91bf6a1cb20f8cee1dcf13e9349e13c57764cfe609648b491->leave($__internal_7340fd87ac948ef91bf6a1cb20f8cee1dcf13e9349e13c57764cfe609648b491_prof);

        
        $__internal_5a0536f907760b602a4e96c9473e511e998d73c772b84018157f6ce0d656bde5->leave($__internal_5a0536f907760b602a4e96c9473e511e998d73c772b84018157f6ce0d656bde5_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Exposmaison/app/Resources/views/base.html.twig");
    }
}
