<?php

/* base.html.twig */
class __TwigTemplate_70e63a6d646e020e7e7be995abe43af9918f41749187e97e62ebcb24978a4b36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83f68fd193bdec1813432e53e238d095c1cfc3a882a1615fd2f4fff2ab4474e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f68fd193bdec1813432e53e238d095c1cfc3a882a1615fd2f4fff2ab4474e2->enter($__internal_83f68fd193bdec1813432e53e238d095c1cfc3a882a1615fd2f4fff2ab4474e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <style>
            label.required:after {
                content: \" *\";
                color: red;
            }
            input[type=\"number\"]::-webkit-outer-spin-button, input[type=\"number\"]::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            input[type=\"number\"] {
                -moz-appearance: textfield;
            }

            .thead-light {
              background-color: rgba(0,0,0, 0.3);
            }

            .red {
                color: red;
            }
            .blue {
                color: blue;
            }
            .p-5 {
                padding: 15px;
            }
        </style>
    </head>
    <body>
        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "    </body>
</html>
";
        
        $__internal_83f68fd193bdec1813432e53e238d095c1cfc3a882a1615fd2f4fff2ab4474e2->leave($__internal_83f68fd193bdec1813432e53e238d095c1cfc3a882a1615fd2f4fff2ab4474e2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b62455b37c375dfc58abd04e81d8979e68cc5f736038b634d81f0d19ca6988c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62455b37c375dfc58abd04e81d8979e68cc5f736038b634d81f0d19ca6988c4->enter($__internal_b62455b37c375dfc58abd04e81d8979e68cc5f736038b634d81f0d19ca6988c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b62455b37c375dfc58abd04e81d8979e68cc5f736038b634d81f0d19ca6988c4->leave($__internal_b62455b37c375dfc58abd04e81d8979e68cc5f736038b634d81f0d19ca6988c4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_31565bf59c1562fec25785b0ccf53cac26d746dce0f713edf7f244daf4f4cff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31565bf59c1562fec25785b0ccf53cac26d746dce0f713edf7f244daf4f4cff3->enter($__internal_31565bf59c1562fec25785b0ccf53cac26d746dce0f713edf7f244daf4f4cff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_31565bf59c1562fec25785b0ccf53cac26d746dce0f713edf7f244daf4f4cff3->leave($__internal_31565bf59c1562fec25785b0ccf53cac26d746dce0f713edf7f244daf4f4cff3_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_5abc31ad7df6ed0a9952c649bcfa8d933bea392a91f7f2b9998f833c850b13db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5abc31ad7df6ed0a9952c649bcfa8d933bea392a91f7f2b9998f833c850b13db->enter($__internal_5abc31ad7df6ed0a9952c649bcfa8d933bea392a91f7f2b9998f833c850b13db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5abc31ad7df6ed0a9952c649bcfa8d933bea392a91f7f2b9998f833c850b13db->leave($__internal_5abc31ad7df6ed0a9952c649bcfa8d933bea392a91f7f2b9998f833c850b13db_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1bc377776944a8e7497b6b5b1bfd795664dcf2bda0b7bf33b0740ecd5a6d7c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc377776944a8e7497b6b5b1bfd795664dcf2bda0b7bf33b0740ecd5a6d7c3c->enter($__internal_1bc377776944a8e7497b6b5b1bfd795664dcf2bda0b7bf33b0740ecd5a6d7c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1bc377776944a8e7497b6b5b1bfd795664dcf2bda0b7bf33b0740ecd5a6d7c3c->leave($__internal_1bc377776944a8e7497b6b5b1bfd795664dcf2bda0b7bf33b0740ecd5a6d7c3c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 44,  115 => 43,  104 => 6,  92 => 5,  83 => 45,  80 => 44,  78 => 43,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <style>
            label.required:after {
                content: \" *\";
                color: red;
            }
            input[type=\"number\"]::-webkit-outer-spin-button, input[type=\"number\"]::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            input[type=\"number\"] {
                -moz-appearance: textfield;
            }

            .thead-light {
              background-color: rgba(0,0,0, 0.3);
            }

            .red {
                color: red;
            }
            .blue {
                color: blue;
            }
            .p-5 {
                padding: 15px;
            }
        </style>
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/app/Resources/views/base.html.twig");
    }
}
