<?php

/* :default:invoices_list.html.twig */
class __TwigTemplate_55ee79f39344a97468978d577ce413e84e424c8851025f6dd92b0e2b9afd7e45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:invoices_list.html.twig", 1);
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
        $__internal_2759dccf8003c219627dd3ccd3cb14c73d0c6f382344b5142346397269fe8c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2759dccf8003c219627dd3ccd3cb14c73d0c6f382344b5142346397269fe8c6d->enter($__internal_2759dccf8003c219627dd3ccd3cb14c73d0c6f382344b5142346397269fe8c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:invoices_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2759dccf8003c219627dd3ccd3cb14c73d0c6f382344b5142346397269fe8c6d->leave($__internal_2759dccf8003c219627dd3ccd3cb14c73d0c6f382344b5142346397269fe8c6d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf66bc446ab0fd7af9f50aeee0816cb7d6ae6372ce0c32e67bf6847eb4e1868e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf66bc446ab0fd7af9f50aeee0816cb7d6ae6372ce0c32e67bf6847eb4e1868e->enter($__internal_cf66bc446ab0fd7af9f50aeee0816cb7d6ae6372ce0c32e67bf6847eb4e1868e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_cf66bc446ab0fd7af9f50aeee0816cb7d6ae6372ce0c32e67bf6847eb4e1868e->leave($__internal_cf66bc446ab0fd7af9f50aeee0816cb7d6ae6372ce0c32e67bf6847eb4e1868e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b51399cc901994b637528fe48c9812705018ce6cf4dbe6f0aec101bdee2b853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b51399cc901994b637528fe48c9812705018ce6cf4dbe6f0aec101bdee2b853->enter($__internal_1b51399cc901994b637528fe48c9812705018ce6cf4dbe6f0aec101bdee2b853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <style>
        input[type=\"number\"]::-webkit-outer-spin-button, input[type=\"number\"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=\"number\"] {
            -moz-appearance: textfield;
        }
    </style>
";
        
        $__internal_1b51399cc901994b637528fe48c9812705018ce6cf4dbe6f0aec101bdee2b853->leave($__internal_1b51399cc901994b637528fe48c9812705018ce6cf4dbe6f0aec101bdee2b853_prof);

    }

    public function getTemplateName()
    {
        return ":default:invoices_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
    <style>
        input[type=\"number\"]::-webkit-outer-spin-button, input[type=\"number\"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=\"number\"] {
            -moz-appearance: textfield;
        }
    </style>
{% endblock %}
", ":default:invoices_list.html.twig", "/var/www/html/app/Resources/views/default/invoices_list.html.twig");
    }
}
