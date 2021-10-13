<?php

/* default/invoices_list.html.twig */
class __TwigTemplate_9776ae6133317754e3ee5044b8b3b928ddc9365a5bcadb72b45b936a8cbd9fe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/invoices_list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15760aaa35f625ccea236f1f63f74739b88c4c69f16ddd7a49f8de3e3ba655fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15760aaa35f625ccea236f1f63f74739b88c4c69f16ddd7a49f8de3e3ba655fe->enter($__internal_15760aaa35f625ccea236f1f63f74739b88c4c69f16ddd7a49f8de3e3ba655fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/invoices_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15760aaa35f625ccea236f1f63f74739b88c4c69f16ddd7a49f8de3e3ba655fe->leave($__internal_15760aaa35f625ccea236f1f63f74739b88c4c69f16ddd7a49f8de3e3ba655fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dd8feeceb7d6baac5cbf7e6a05c242e588067f052acacdc22f823976727233c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd8feeceb7d6baac5cbf7e6a05c242e588067f052acacdc22f823976727233c->enter($__internal_7dd8feeceb7d6baac5cbf7e6a05c242e588067f052acacdc22f823976727233c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a data-toggle=\"tab\" href=\"#menu1\">Számlázási címeim</a></li>
            <li><a data-toggle=\"tab\" href=\"#menu2\">Megrendelés</a></li>
            <li><a data-toggle=\"tab\" href=\"#menu3\">megrendelések listázása</a></li>
        </ul>

        <div class=\"tab-content\">
            <div id=\"menu1\" class=\"tab-pane fade in active\">
                <div class=\"row\">
                    <div class=\"col\">

                    </div>
                </div>

                ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

                    ";
        // line 23
        if ((array_key_exists("editMode", $context) && (($context["editMode"] ?? $this->getContext($context, "editMode")) == true))) {
            // line 24
            echo "                        <div class=\"text-center p-5\">
                            <button class=\"btn btn-success\" type=\"submit\">MÓDOSÍTÁSOK MENTÉSE</button>
                            <a class=\"btn btn-danger btn-cancel\" data-url=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("invoices-list");
            echo "\" type=\"submit\">MÉGSE</a>
                        </div>
                    ";
        } else {
            // line 29
            echo "                        <div class=\"text-center p-5\">
                            <button class=\"btn btn-danger\" type=\"submit\">ÚJ CÍM FELVÉTELE</button>
                        </div>
                    ";
        }
        // line 33
        echo "                ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

                <div class=\"row\">
                    <div class=\"col\">
                        <table class=\"table\">
                            <thead class=\"thead-light\">
                            <tr>
                                <th scope=\"col\">Típus</th>
                                <th scope=\"col\">Név</th>
                                <th scope=\"col\">Telefonszám</th>
                                <th scope=\"col\">Adószám</th>
                                <th scope=\"col\">Ország</th>
                                <th scope=\"col\">Irányítószám</th>
                                <th scope=\"col\">Város</th>
                                <th scope=\"col\">Utca</th>
                                <th scope=\"col\">Műveletek</th>
                            </tr>
                            </thead>
                            <tbody>
                                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["invoices"] ?? $this->getContext($context, "invoices")));
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 53
            echo "                                    <tr>
                                        <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute(($context["types"] ?? $this->getContext($context, "types")), $this->getAttribute($context["invoice"], "type", array()), array(), "array"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["invoice"], "name", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["invoice"], "phoneNumber", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["invoice"], "taxNumber", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["invoice"], "country", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["invoice"], "zipCode", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["invoice"], "city", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["invoice"], "streetAndNumber", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("invoice-edit", array("id" => $this->getAttribute($context["invoice"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-2x fa-pencil blue\"></i></a>
                                            <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("invoice-delete", array("id" => $this->getAttribute($context["invoice"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-2x fa-trash red\"></i></a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                            </tbody>
                        </table>
                    </div>
                </div>



            </div>
            <div id=\"menu2\" class=\"tab-pane fade\">
                <h3>Menu 1</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div id=\"menu3\" class=\"tab-pane fade\">
                <h3>Menu 2</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
        </div>
    </div>
";
        
        $__internal_7dd8feeceb7d6baac5cbf7e6a05c242e588067f052acacdc22f823976727233c->leave($__internal_7dd8feeceb7d6baac5cbf7e6a05c242e588067f052acacdc22f823976727233c_prof);

    }

    // line 88
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3b0c450a0c82a3ff6205248e342c23442a6f974b627ba15e38f6b7e6165f51c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b0c450a0c82a3ff6205248e342c23442a6f974b627ba15e38f6b7e6165f51c7->enter($__internal_3b0c450a0c82a3ff6205248e342c23442a6f974b627ba15e38f6b7e6165f51c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 89
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
        
        $__internal_3b0c450a0c82a3ff6205248e342c23442a6f974b627ba15e38f6b7e6165f51c7->leave($__internal_3b0c450a0c82a3ff6205248e342c23442a6f974b627ba15e38f6b7e6165f51c7_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac0dd9188eeeb83957fc01e08f334820b0a3d1bc9851cdb88eea2478d3b21772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac0dd9188eeeb83957fc01e08f334820b0a3d1bc9851cdb88eea2478d3b21772->enter($__internal_ac0dd9188eeeb83957fc01e08f334820b0a3d1bc9851cdb88eea2478d3b21772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        echo "    <script>
\t\t// A \$( document ).ready() block.
\t\t\$( document ).ready(function() {
            // cancel redirect to its url
\t\t\t\$(\".btn-cancel\").on('click', function (e) {
\t\t\t\te.preventDefault();

\t\t\t\twindow.location.href = \$(this).data(\"url\");
            })

            // check values before form submit
            \$(\"form\").submit(function (e) {
                e.preventDefault();

                //////// check all input value by type ////////
                let typeCheck = true;
                \$('input').each(function () {
                \tlet el = \$(this);
                \tlet required = el.attr('required');
                \tlet val = el.val();
                \tswitch (el.attr('type')) {
                \t\tcase 'number':
                \t\t\tconsole.log(val.length, !isNaN(val))
                \t\t\tif (val.length && !isNaN(val)) {
                \t\t\t\tconsole.log(el)
                                typeCheck = false;
                            }
                \t\t\tbreak;
                    }
                })
console.log(typeCheck)
                // not valid type
                if (!typeCheck) {

                }
            });
\t\t});
    </script>
";
        
        $__internal_ac0dd9188eeeb83957fc01e08f334820b0a3d1bc9851cdb88eea2478d3b21772->leave($__internal_ac0dd9188eeeb83957fc01e08f334820b0a3d1bc9851cdb88eea2478d3b21772_prof);

    }

    public function getTemplateName()
    {
        return "default/invoices_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 102,  212 => 101,  195 => 89,  189 => 88,  164 => 68,  154 => 64,  150 => 63,  145 => 61,  141 => 60,  137 => 59,  133 => 58,  129 => 57,  125 => 56,  121 => 55,  117 => 54,  114 => 53,  110 => 52,  87 => 33,  81 => 29,  75 => 26,  71 => 24,  69 => 23,  64 => 21,  60 => 20,  42 => 4,  36 => 3,  11 => 1,);
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

    <div class=\"container\">
        <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a data-toggle=\"tab\" href=\"#menu1\">Számlázási címeim</a></li>
            <li><a data-toggle=\"tab\" href=\"#menu2\">Megrendelés</a></li>
            <li><a data-toggle=\"tab\" href=\"#menu3\">megrendelések listázása</a></li>
        </ul>

        <div class=\"tab-content\">
            <div id=\"menu1\" class=\"tab-pane fade in active\">
                <div class=\"row\">
                    <div class=\"col\">

                    </div>
                </div>

                {{ form_start(form) }}
                    {{ form_widget(form) }}

                    {% if editMode is defined and editMode == true %}
                        <div class=\"text-center p-5\">
                            <button class=\"btn btn-success\" type=\"submit\">MÓDOSÍTÁSOK MENTÉSE</button>
                            <a class=\"btn btn-danger btn-cancel\" data-url=\"{{ url('invoices-list') }}\" type=\"submit\">MÉGSE</a>
                        </div>
                    {%  else %}
                        <div class=\"text-center p-5\">
                            <button class=\"btn btn-danger\" type=\"submit\">ÚJ CÍM FELVÉTELE</button>
                        </div>
                    {% endif %}
                {{ form_end(form) }}

                <div class=\"row\">
                    <div class=\"col\">
                        <table class=\"table\">
                            <thead class=\"thead-light\">
                            <tr>
                                <th scope=\"col\">Típus</th>
                                <th scope=\"col\">Név</th>
                                <th scope=\"col\">Telefonszám</th>
                                <th scope=\"col\">Adószám</th>
                                <th scope=\"col\">Ország</th>
                                <th scope=\"col\">Irányítószám</th>
                                <th scope=\"col\">Város</th>
                                <th scope=\"col\">Utca</th>
                                <th scope=\"col\">Műveletek</th>
                            </tr>
                            </thead>
                            <tbody>
                                {% for invoice in invoices %}
                                    <tr>
                                        <td>{{ types[invoice.type] }}</td>
                                        <td>{{ invoice.name }}</td>
                                        <td>{{ invoice.phoneNumber }}</td>
                                        <td>{{ invoice.taxNumber }}</td>
                                        <td>{{ invoice.country }}</td>
                                        <td>{{ invoice.zipCode }}</td>
                                        <td>{{ invoice.city }}</td>
                                        <td>{{ invoice.streetAndNumber }}</td>
                                        <td>
                                            <a href=\"{{ url('invoice-edit', {'id': invoice.id} ) }}\"><i class=\"fa fa-2x fa-pencil blue\"></i></a>
                                            <a href=\"{{ url('invoice-delete', {'id': invoice.id} ) }}\"><i class=\"fa fa-2x fa-trash red\"></i></a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>



            </div>
            <div id=\"menu2\" class=\"tab-pane fade\">
                <h3>Menu 1</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div id=\"menu3\" class=\"tab-pane fade\">
                <h3>Menu 2</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
        </div>
    </div>
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

{% block javascripts %}
    <script>
\t\t// A \$( document ).ready() block.
\t\t\$( document ).ready(function() {
            // cancel redirect to its url
\t\t\t\$(\".btn-cancel\").on('click', function (e) {
\t\t\t\te.preventDefault();

\t\t\t\twindow.location.href = \$(this).data(\"url\");
            })

            // check values before form submit
            \$(\"form\").submit(function (e) {
                e.preventDefault();

                //////// check all input value by type ////////
                let typeCheck = true;
                \$('input').each(function () {
                \tlet el = \$(this);
                \tlet required = el.attr('required');
                \tlet val = el.val();
                \tswitch (el.attr('type')) {
                \t\tcase 'number':
                \t\t\tconsole.log(val.length, !isNaN(val))
                \t\t\tif (val.length && !isNaN(val)) {
                \t\t\t\tconsole.log(el)
                                typeCheck = false;
                            }
                \t\t\tbreak;
                    }
                })
console.log(typeCheck)
                // not valid type
                if (!typeCheck) {

                }
            });
\t\t});
    </script>
{% endblock %}
", "default/invoices_list.html.twig", "/var/www/html/app/Resources/views/default/invoices_list.html.twig");
    }
}
