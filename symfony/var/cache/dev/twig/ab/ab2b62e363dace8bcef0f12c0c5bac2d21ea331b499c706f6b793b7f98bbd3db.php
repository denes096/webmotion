<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_64180bc5d592cec1aee10e0424950d82cbd57a14a4bdca8402996a233b7bbc00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00f5169ae8679366ebf6a2db95deea787c36ab863d09c842adff24f19173cec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f5169ae8679366ebf6a2db95deea787c36ab863d09c842adff24f19173cec6->enter($__internal_00f5169ae8679366ebf6a2db95deea787c36ab863d09c842adff24f19173cec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00f5169ae8679366ebf6a2db95deea787c36ab863d09c842adff24f19173cec6->leave($__internal_00f5169ae8679366ebf6a2db95deea787c36ab863d09c842adff24f19173cec6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_83448cdd9fedf3f88bdb365bde50affdd20698617c1d9e2ec3d5c9021b21dd1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83448cdd9fedf3f88bdb365bde50affdd20698617c1d9e2ec3d5c9021b21dd1c->enter($__internal_83448cdd9fedf3f88bdb365bde50affdd20698617c1d9e2ec3d5c9021b21dd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_83448cdd9fedf3f88bdb365bde50affdd20698617c1d9e2ec3d5c9021b21dd1c->leave($__internal_83448cdd9fedf3f88bdb365bde50affdd20698617c1d9e2ec3d5c9021b21dd1c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7cd464007ddb489742db463dac2d8889ba5d8706d99a78239171d1935510fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cd464007ddb489742db463dac2d8889ba5d8706d99a78239171d1935510fa5->enter($__internal_e7cd464007ddb489742db463dac2d8889ba5d8706d99a78239171d1935510fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e7cd464007ddb489742db463dac2d8889ba5d8706d99a78239171d1935510fa5->leave($__internal_e7cd464007ddb489742db463dac2d8889ba5d8706d99a78239171d1935510fa5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9dbdc93195f13294e190c63ec6c751ca8bddfc3fd6fc5e050c7ceff4fcde3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9dbdc93195f13294e190c63ec6c751ca8bddfc3fd6fc5e050c7ceff4fcde3bc->enter($__internal_d9dbdc93195f13294e190c63ec6c751ca8bddfc3fd6fc5e050c7ceff4fcde3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d9dbdc93195f13294e190c63ec6c751ca8bddfc3fd6fc5e050c7ceff4fcde3bc->leave($__internal_d9dbdc93195f13294e190c63ec6c751ca8bddfc3fd6fc5e050c7ceff4fcde3bc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
