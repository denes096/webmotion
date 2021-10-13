<?php

/* ::base.html.twig */
class __TwigTemplate_e2d21215726556d7a2b9206e83e6061cc251f39bee62896aecdbb35410598892 extends Twig_Template
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
        $__internal_322ffa3201e53d3dedbd7ab16290f9d8ce0f6f76e160159226dc311dd2cacd44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322ffa3201e53d3dedbd7ab16290f9d8ce0f6f76e160159226dc311dd2cacd44->enter($__internal_322ffa3201e53d3dedbd7ab16290f9d8ce0f6f76e160159226dc311dd2cacd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_322ffa3201e53d3dedbd7ab16290f9d8ce0f6f76e160159226dc311dd2cacd44->leave($__internal_322ffa3201e53d3dedbd7ab16290f9d8ce0f6f76e160159226dc311dd2cacd44_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5640afd234c4b5cec0e218cef786c8711ad453c45dd54620511f79b602168ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5640afd234c4b5cec0e218cef786c8711ad453c45dd54620511f79b602168ba3->enter($__internal_5640afd234c4b5cec0e218cef786c8711ad453c45dd54620511f79b602168ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5640afd234c4b5cec0e218cef786c8711ad453c45dd54620511f79b602168ba3->leave($__internal_5640afd234c4b5cec0e218cef786c8711ad453c45dd54620511f79b602168ba3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a33fd33752e4d4da67cf01fdacf57e925f68fd4e690aac74eaa884d3c0369ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33fd33752e4d4da67cf01fdacf57e925f68fd4e690aac74eaa884d3c0369ee3->enter($__internal_a33fd33752e4d4da67cf01fdacf57e925f68fd4e690aac74eaa884d3c0369ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a33fd33752e4d4da67cf01fdacf57e925f68fd4e690aac74eaa884d3c0369ee3->leave($__internal_a33fd33752e4d4da67cf01fdacf57e925f68fd4e690aac74eaa884d3c0369ee3_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_f97339ea4e310e9960cda1c8205843a7a52d957d2663a6519dd9e6fc003ef4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97339ea4e310e9960cda1c8205843a7a52d957d2663a6519dd9e6fc003ef4de->enter($__internal_f97339ea4e310e9960cda1c8205843a7a52d957d2663a6519dd9e6fc003ef4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f97339ea4e310e9960cda1c8205843a7a52d957d2663a6519dd9e6fc003ef4de->leave($__internal_f97339ea4e310e9960cda1c8205843a7a52d957d2663a6519dd9e6fc003ef4de_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f9bf35e9a2f5ca7b49aa3db36619273cd02c46ac3938b9c6912bb914dcd7cc23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9bf35e9a2f5ca7b49aa3db36619273cd02c46ac3938b9c6912bb914dcd7cc23->enter($__internal_f9bf35e9a2f5ca7b49aa3db36619273cd02c46ac3938b9c6912bb914dcd7cc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f9bf35e9a2f5ca7b49aa3db36619273cd02c46ac3938b9c6912bb914dcd7cc23->leave($__internal_f9bf35e9a2f5ca7b49aa3db36619273cd02c46ac3938b9c6912bb914dcd7cc23_prof);

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
        return array (  97 => 15,  86 => 14,  75 => 6,  63 => 5,  54 => 16,  51 => 15,  49 => 14,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/app/Resources/views/base.html.twig");
    }
}
