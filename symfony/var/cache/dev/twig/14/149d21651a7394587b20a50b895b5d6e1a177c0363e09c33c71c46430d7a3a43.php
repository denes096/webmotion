<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_257f8af107cd3dd8b6250e7cc86ac14b28072a6d96f75e9e1a19c0fe43429989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af974f990d3831a41bc29a7be0c52b8014374da5c76e9be215914430e975be7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af974f990d3831a41bc29a7be0c52b8014374da5c76e9be215914430e975be7b->enter($__internal_af974f990d3831a41bc29a7be0c52b8014374da5c76e9be215914430e975be7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_af974f990d3831a41bc29a7be0c52b8014374da5c76e9be215914430e975be7b->leave($__internal_af974f990d3831a41bc29a7be0c52b8014374da5c76e9be215914430e975be7b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_956e38b1064fddd21c8ca834e5453ab5ed4303613dd5b10e6ba2dcad5ba94383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956e38b1064fddd21c8ca834e5453ab5ed4303613dd5b10e6ba2dcad5ba94383->enter($__internal_956e38b1064fddd21c8ca834e5453ab5ed4303613dd5b10e6ba2dcad5ba94383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_956e38b1064fddd21c8ca834e5453ab5ed4303613dd5b10e6ba2dcad5ba94383->leave($__internal_956e38b1064fddd21c8ca834e5453ab5ed4303613dd5b10e6ba2dcad5ba94383_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
