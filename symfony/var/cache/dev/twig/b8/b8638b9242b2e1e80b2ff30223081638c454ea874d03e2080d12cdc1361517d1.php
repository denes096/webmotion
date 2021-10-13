<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0c06d56bb5ad927f860154cae9330bce134aa21fed6034780e74f5a2d5848db1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_c05d4c9a314fa265c84aecedcc3c11923c3ee3ea476451b1ade7080b8f2eb304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05d4c9a314fa265c84aecedcc3c11923c3ee3ea476451b1ade7080b8f2eb304->enter($__internal_c05d4c9a314fa265c84aecedcc3c11923c3ee3ea476451b1ade7080b8f2eb304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c05d4c9a314fa265c84aecedcc3c11923c3ee3ea476451b1ade7080b8f2eb304->leave($__internal_c05d4c9a314fa265c84aecedcc3c11923c3ee3ea476451b1ade7080b8f2eb304_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d56e99c93708588404e073d7431344e1ba3dff3113a46531f5e89505d1ea8cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56e99c93708588404e073d7431344e1ba3dff3113a46531f5e89505d1ea8cb8->enter($__internal_d56e99c93708588404e073d7431344e1ba3dff3113a46531f5e89505d1ea8cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d56e99c93708588404e073d7431344e1ba3dff3113a46531f5e89505d1ea8cb8->leave($__internal_d56e99c93708588404e073d7431344e1ba3dff3113a46531f5e89505d1ea8cb8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9adeb73e32565269912484e6d347a15c4d98da374acf13f3544442a7eb8743d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9adeb73e32565269912484e6d347a15c4d98da374acf13f3544442a7eb8743d6->enter($__internal_9adeb73e32565269912484e6d347a15c4d98da374acf13f3544442a7eb8743d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9adeb73e32565269912484e6d347a15c4d98da374acf13f3544442a7eb8743d6->leave($__internal_9adeb73e32565269912484e6d347a15c4d98da374acf13f3544442a7eb8743d6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_28473138f0a493023201cd695c4b00fb869ab5437e5a658a646f28293a3381ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28473138f0a493023201cd695c4b00fb869ab5437e5a658a646f28293a3381ff->enter($__internal_28473138f0a493023201cd695c4b00fb869ab5437e5a658a646f28293a3381ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_28473138f0a493023201cd695c4b00fb869ab5437e5a658a646f28293a3381ff->leave($__internal_28473138f0a493023201cd695c4b00fb869ab5437e5a658a646f28293a3381ff_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
