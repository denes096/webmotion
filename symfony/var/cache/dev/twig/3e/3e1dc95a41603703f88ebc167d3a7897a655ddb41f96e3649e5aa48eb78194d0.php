<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_e7f1bf453deb2fab0baca680c86f6c8aed7ee34f682bc17ea6818b244e421964 extends Twig_Template
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
        $__internal_2ce9d4361b1514839ff713ad3264ced81cd1378142bcc96f57d0df82cea1bedd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce9d4361b1514839ff713ad3264ced81cd1378142bcc96f57d0df82cea1bedd->enter($__internal_2ce9d4361b1514839ff713ad3264ced81cd1378142bcc96f57d0df82cea1bedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2ce9d4361b1514839ff713ad3264ced81cd1378142bcc96f57d0df82cea1bedd->leave($__internal_2ce9d4361b1514839ff713ad3264ced81cd1378142bcc96f57d0df82cea1bedd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
