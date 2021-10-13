<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2a18b4b2b7c16996df2b36af5c076ecebfcfe753091073a5fc20d073a0e9a1f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_aebedd3b72f2d8b5be58359c9b0a55f5063a2167e0165b95f24d879349998659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebedd3b72f2d8b5be58359c9b0a55f5063a2167e0165b95f24d879349998659->enter($__internal_aebedd3b72f2d8b5be58359c9b0a55f5063a2167e0165b95f24d879349998659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aebedd3b72f2d8b5be58359c9b0a55f5063a2167e0165b95f24d879349998659->leave($__internal_aebedd3b72f2d8b5be58359c9b0a55f5063a2167e0165b95f24d879349998659_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_706ab20046e913b91b8c9659a3f1bb1513ee261a8bdbfe1150bece2dfc3c39be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706ab20046e913b91b8c9659a3f1bb1513ee261a8bdbfe1150bece2dfc3c39be->enter($__internal_706ab20046e913b91b8c9659a3f1bb1513ee261a8bdbfe1150bece2dfc3c39be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_706ab20046e913b91b8c9659a3f1bb1513ee261a8bdbfe1150bece2dfc3c39be->leave($__internal_706ab20046e913b91b8c9659a3f1bb1513ee261a8bdbfe1150bece2dfc3c39be_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_05d08bd1a729424c6cd248bf2600be69aa967333cb776b4521f5bcd0c5fd8084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d08bd1a729424c6cd248bf2600be69aa967333cb776b4521f5bcd0c5fd8084->enter($__internal_05d08bd1a729424c6cd248bf2600be69aa967333cb776b4521f5bcd0c5fd8084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_05d08bd1a729424c6cd248bf2600be69aa967333cb776b4521f5bcd0c5fd8084->leave($__internal_05d08bd1a729424c6cd248bf2600be69aa967333cb776b4521f5bcd0c5fd8084_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e78321487202a3fc4612933c205a1a466746849bd0f6be7f0398bdf905253b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e78321487202a3fc4612933c205a1a466746849bd0f6be7f0398bdf905253b7->enter($__internal_2e78321487202a3fc4612933c205a1a466746849bd0f6be7f0398bdf905253b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2e78321487202a3fc4612933c205a1a466746849bd0f6be7f0398bdf905253b7->leave($__internal_2e78321487202a3fc4612933c205a1a466746849bd0f6be7f0398bdf905253b7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
