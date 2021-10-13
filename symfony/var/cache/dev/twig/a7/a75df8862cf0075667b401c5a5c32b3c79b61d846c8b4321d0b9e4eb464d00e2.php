<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f3790e200452f1dda148a7836cd094520ae8d9d4fd6e140c060e10a4dbe42380 extends Twig_Template
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
        $__internal_547ee8964e222fe1c59cd1c2abed60fdad48f77cbf5f2c6abf12581371745faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547ee8964e222fe1c59cd1c2abed60fdad48f77cbf5f2c6abf12581371745faa->enter($__internal_547ee8964e222fe1c59cd1c2abed60fdad48f77cbf5f2c6abf12581371745faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_547ee8964e222fe1c59cd1c2abed60fdad48f77cbf5f2c6abf12581371745faa->leave($__internal_547ee8964e222fe1c59cd1c2abed60fdad48f77cbf5f2c6abf12581371745faa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
