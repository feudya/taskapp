<?php

/* @App/Ticket/lista_tickets.html.twig */
class __TwigTemplate_7c07548fe4cf698993bb5c1ff0878bc51d6fdb6e5bad26c0b61fc50d3a807559 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Ticket/lista_tickets.html.twig", 1);
        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'menu_ticket' => array($this, 'block_menu_ticket'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Ticket/lista_tickets.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Ticket/lista_tickets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo "Tickets";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_menu_ticket($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_ticket"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_ticket"));

        echo "class=\"active\"";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<h1>Lista de Tickets</h1>
\t<div class=\"subheader\">
\t\t<a type=\"button\" class=\"btn btn-primary\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_ticket");
        echo "\">Registrar Nuevo Ticket</a>
\t</div>
\t<div style=\"clear: both;\"></div>
\t<br />
\t<table class=\"table lista\">
\t<tr>
\t\t<td class=\"ticket head\">Ticket</td>
\t\t<td class=\"descripcion head\">Descripcion</td>
\t\t<td class=\"creado head\">Creado</td>
\t\t<td class=\"asignado head\">Completado</td>
\t\t<td class=\"estado head\">Estado</td>
\t\t<td class=\"acciones head\">Acciones</td>
\t\t";
        // line 20
        echo "\t</tr>
\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["ticket"]);
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 22
            echo "\t\t<tr>
\t\t\t<td class=\"ticket\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t<td class=\"descripcion\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "descripcion", array()), "html", null, true);
            echo "</td>
\t\t\t<td class=\"creado\">";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "fechaCreado", array()), "m/d/Y"), "html", null, true);
            echo "</td>
\t\t\t<td class=\"asignado\">
\t\t\t\t";
            // line 27
            if ((twig_get_attribute($this->env, $this->source, $context["ticket"], "estado", array()) != "LISTO")) {
                // line 28
                echo "
\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "fechaCompletado", array()), "m/d/Y"), "html", null, true);
                echo "</td>
\t\t\t\t";
            }
            // line 32
            echo "\t\t\t<td class=\"estado\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "estado", array()), "html", null, true);
            echo "</td>
\t\t\t<td class=\"acciones\">
\t\t\t\t<a type=\"button\" class=\"btn btn-primary\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_info", array("id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", array()))), "html", null, true);
            echo "\">Ver</a>
\t\t\t\t<a type=\"button\" class=\"btn btn-danger\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminar_ticket", array("id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", array()))), "html", null, true);
            echo "\">Eliminar</a>
\t\t\t\t";
            // line 36
            if ((twig_get_attribute($this->env, $this->source, $context["ticket"], "estado", array()) != "LISTO")) {
                // line 37
                echo "\t\t\t\t\t<a type=\"button\" class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("iniciar_ticket", array("id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", array()))), "html", null, true);
                echo "\">Actualizar Ticket</a>
                ";
            }
            // line 39
            echo "\t\t\t\t";
            // line 40
            echo "\t\t\t</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/Ticket/lista_tickets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 43,  169 => 40,  167 => 39,  161 => 37,  159 => 36,  155 => 35,  151 => 34,  145 => 32,  139 => 30,  135 => 28,  133 => 27,  128 => 25,  124 => 24,  120 => 23,  117 => 22,  113 => 21,  110 => 20,  95 => 7,  91 => 5,  82 => 4,  64 => 3,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block titulo %}Tickets{% endblock %}
{% block menu_ticket %}class=\"active\"{% endblock %}
{% block body %}
\t<h1>Lista de Tickets</h1>
\t<div class=\"subheader\">
\t\t<a type=\"button\" class=\"btn btn-primary\" href=\"{{ path('crear_ticket') }}\">Registrar Nuevo Ticket</a>
\t</div>
\t<div style=\"clear: both;\"></div>
\t<br />
\t<table class=\"table lista\">
\t<tr>
\t\t<td class=\"ticket head\">Ticket</td>
\t\t<td class=\"descripcion head\">Descripcion</td>
\t\t<td class=\"creado head\">Creado</td>
\t\t<td class=\"asignado head\">Completado</td>
\t\t<td class=\"estado head\">Estado</td>
\t\t<td class=\"acciones head\">Acciones</td>
\t\t{#<td class=\"acciones head\"></td>#}
\t</tr>
\t{% for ticket in ticket %}
\t\t<tr>
\t\t\t<td class=\"ticket\">{{ticket.id}}</td>
\t\t\t<td class=\"descripcion\">{{ticket.descripcion}}</td>
\t\t\t<td class=\"creado\">{{ ticket.fechaCreado|date(\"m/d/Y\") }}</td>
\t\t\t<td class=\"asignado\">
\t\t\t\t{% if ticket.estado != 'LISTO' %}

\t\t\t\t{% else %}
\t\t\t\t\t{{ ticket.fechaCompletado|date(\"m/d/Y\") }}</td>
\t\t\t\t{% endif %}
\t\t\t<td class=\"estado\">{{ticket.estado}}</td>
\t\t\t<td class=\"acciones\">
\t\t\t\t<a type=\"button\" class=\"btn btn-primary\" href=\"{{ path('ticket_info', { 'id' : ticket.id }) }}\">Ver</a>
\t\t\t\t<a type=\"button\" class=\"btn btn-danger\" href=\"{{ path('eliminar_ticket', { 'id' : ticket.id }) }}\">Eliminar</a>
\t\t\t\t{% if ticket.estado != 'LISTO' %}
\t\t\t\t\t<a type=\"button\" class=\"btn btn-success\" href=\"{{ path('iniciar_ticket', { 'id' : ticket.id }) }}\">Actualizar Ticket</a>
                {% endif %}
\t\t\t\t{#<a type=\"button\" class=\"btn btn-warning\" href=\"{{ path('iniciar_ticket', { 'id' : ticket.id }) }}\">Iniciar</a>#}
\t\t\t</td>
\t\t</tr>
\t{% endfor %}
\t</table>
{% endblock %}", "@App/Ticket/lista_tickets.html.twig", "/var/www/mescyt/taskapp/src/AppBundle/Resources/views/Ticket/lista_tickets.html.twig");
    }
}
