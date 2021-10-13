<?php

/* :default:index.html.twig */
class __TwigTemplate_518b3e9ff83ea9798ee771c9731d396e1dcadce7fb271b66f1bf0d603292300e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e8bc207191913527ec803539210cc97350671b70c2f4ab2167c34467098ede8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8bc207191913527ec803539210cc97350671b70c2f4ab2167c34467098ede8->enter($__internal_0e8bc207191913527ec803539210cc97350671b70c2f4ab2167c34467098ede8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e8bc207191913527ec803539210cc97350671b70c2f4ab2167c34467098ede8->leave($__internal_0e8bc207191913527ec803539210cc97350671b70c2f4ab2167c34467098ede8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cccd13a21b6266058319c6a7ab03b75587c8e1cc17df2e4f44ef9b5652b0f56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cccd13a21b6266058319c6a7ab03b75587c8e1cc17df2e4f44ef9b5652b0f56b->enter($__internal_cccd13a21b6266058319c6a7ab03b75587c8e1cc17df2e4f44ef9b5652b0f56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_cccd13a21b6266058319c6a7ab03b75587c8e1cc17df2e4f44ef9b5652b0f56b->leave($__internal_cccd13a21b6266058319c6a7ab03b75587c8e1cc17df2e4f44ef9b5652b0f56b_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6393c161a114b67dca81aecf14fe19e4dbaf3ed5ac400e92ff160933bb5da506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6393c161a114b67dca81aecf14fe19e4dbaf3ed5ac400e92ff160933bb5da506->enter($__internal_6393c161a114b67dca81aecf14fe19e4dbaf3ed5ac400e92ff160933bb5da506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6393c161a114b67dca81aecf14fe19e4dbaf3ed5ac400e92ff160933bb5da506->leave($__internal_6393c161a114b67dca81aecf14fe19e4dbaf3ed5ac400e92ff160933bb5da506_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ form (form) }}
{% endblock %}

{% block stylesheets %}
{% endblock %}
", ":default:index.html.twig", "/var/www/html/app/Resources/views/default/index.html.twig");
    }
}
