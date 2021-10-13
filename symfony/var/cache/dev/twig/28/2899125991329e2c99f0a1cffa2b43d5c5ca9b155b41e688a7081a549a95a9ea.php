<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fc7b4ef81e211c161a3f3b5b7edebca1c674b788b08eafee8da1bb1dc265b922 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ae2b932905e597f77e68adb44443caaa77783f92acaa3680bf42fa2fcfe1ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae2b932905e597f77e68adb44443caaa77783f92acaa3680bf42fa2fcfe1ee7->enter($__internal_7ae2b932905e597f77e68adb44443caaa77783f92acaa3680bf42fa2fcfe1ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ae2b932905e597f77e68adb44443caaa77783f92acaa3680bf42fa2fcfe1ee7->leave($__internal_7ae2b932905e597f77e68adb44443caaa77783f92acaa3680bf42fa2fcfe1ee7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6294714fceb97a83c908e1469a03ec47502bbd3548a58b38b7ad52f29c13f0ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6294714fceb97a83c908e1469a03ec47502bbd3548a58b38b7ad52f29c13f0ff->enter($__internal_6294714fceb97a83c908e1469a03ec47502bbd3548a58b38b7ad52f29c13f0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6294714fceb97a83c908e1469a03ec47502bbd3548a58b38b7ad52f29c13f0ff->leave($__internal_6294714fceb97a83c908e1469a03ec47502bbd3548a58b38b7ad52f29c13f0ff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0c5625c3fd6cae550e176fa84944e9783f468a0707acd24a83bdea099db55688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5625c3fd6cae550e176fa84944e9783f468a0707acd24a83bdea099db55688->enter($__internal_0c5625c3fd6cae550e176fa84944e9783f468a0707acd24a83bdea099db55688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0c5625c3fd6cae550e176fa84944e9783f468a0707acd24a83bdea099db55688->leave($__internal_0c5625c3fd6cae550e176fa84944e9783f468a0707acd24a83bdea099db55688_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef9c094311518ed845a43bee4d8008068f2108a97385bcfe5fed4cd196a29492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9c094311518ed845a43bee4d8008068f2108a97385bcfe5fed4cd196a29492->enter($__internal_ef9c094311518ed845a43bee4d8008068f2108a97385bcfe5fed4cd196a29492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ef9c094311518ed845a43bee4d8008068f2108a97385bcfe5fed4cd196a29492->leave($__internal_ef9c094311518ed845a43bee4d8008068f2108a97385bcfe5fed4cd196a29492_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
