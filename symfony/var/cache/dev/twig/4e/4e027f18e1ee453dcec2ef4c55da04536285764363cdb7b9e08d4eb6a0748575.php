<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_bd9ecad27b1822341317cb2bb3ceff30dab9e1a151d725f4a642a02d0b47d902 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_914a2d70cfcbd39f721e9800482b3f5b77e15c6ecd02f51f1beb21bd8b9c8518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914a2d70cfcbd39f721e9800482b3f5b77e15c6ecd02f51f1beb21bd8b9c8518->enter($__internal_914a2d70cfcbd39f721e9800482b3f5b77e15c6ecd02f51f1beb21bd8b9c8518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_914a2d70cfcbd39f721e9800482b3f5b77e15c6ecd02f51f1beb21bd8b9c8518->leave($__internal_914a2d70cfcbd39f721e9800482b3f5b77e15c6ecd02f51f1beb21bd8b9c8518_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
