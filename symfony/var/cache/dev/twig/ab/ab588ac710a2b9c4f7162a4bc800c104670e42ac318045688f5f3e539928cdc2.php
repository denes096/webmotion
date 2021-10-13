<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_eafcbdeefd905f8110ae7893e793eec82c3e00d2c70f441e7e14729e66647293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_58b268bf1fb5a442c38585b53cfd2af0102fba7b559678e37b1927151cccf4af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b268bf1fb5a442c38585b53cfd2af0102fba7b559678e37b1927151cccf4af->enter($__internal_58b268bf1fb5a442c38585b53cfd2af0102fba7b559678e37b1927151cccf4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58b268bf1fb5a442c38585b53cfd2af0102fba7b559678e37b1927151cccf4af->leave($__internal_58b268bf1fb5a442c38585b53cfd2af0102fba7b559678e37b1927151cccf4af_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0258dc775ca8dd7aaa3f11d80fce712a65457251f564ec3c937641a90df6e3c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0258dc775ca8dd7aaa3f11d80fce712a65457251f564ec3c937641a90df6e3c6->enter($__internal_0258dc775ca8dd7aaa3f11d80fce712a65457251f564ec3c937641a90df6e3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0258dc775ca8dd7aaa3f11d80fce712a65457251f564ec3c937641a90df6e3c6->leave($__internal_0258dc775ca8dd7aaa3f11d80fce712a65457251f564ec3c937641a90df6e3c6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc389117e4090ea02ea18654f0f64d3e29ce1dea93e608cf8d969f5f63738938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc389117e4090ea02ea18654f0f64d3e29ce1dea93e608cf8d969f5f63738938->enter($__internal_fc389117e4090ea02ea18654f0f64d3e29ce1dea93e608cf8d969f5f63738938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_fc389117e4090ea02ea18654f0f64d3e29ce1dea93e608cf8d969f5f63738938->leave($__internal_fc389117e4090ea02ea18654f0f64d3e29ce1dea93e608cf8d969f5f63738938_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
