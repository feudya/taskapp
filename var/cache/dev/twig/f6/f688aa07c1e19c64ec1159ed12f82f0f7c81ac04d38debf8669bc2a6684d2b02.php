<?php

/* @App/Ticket/index.html.twig */
class __TwigTemplate_4ffa8ba7519aa88b60a17f97438af2691243c6e01f618158b3a175dca8123507 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Ticket/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Ticket/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Ticket/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo "Informacion de Ticket";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
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

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h1>Informacion de Ticket</h1>
<div class=\"subheader\">
    <a type=\"button\" class=\"btn btn-danger\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lista_tickets");
        echo "\">Volver</a>
</div>
<br />
    <div class=\"panel-heading full-width left\">
        <div class=\"panel-body left\">
            <h5>Asignación: #";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new Twig_Error_Runtime('Variable "ticket" does not exist.', 14, $this->source); })()), "id", array()), "html", null, true);
        echo "</h5>
        </div>
        <div class=\"panel-body left\">
            <h5>Fecha Creado: ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new Twig_Error_Runtime('Variable "ticket" does not exist.', 17, $this->source); })()), "fechaCreado", array()), "m/d/Y"), "html", null, true);
        echo "</h5>
        </div>
        <div class=\"panel-body left\">
            <h5>Fecha Cerrado: ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new Twig_Error_Runtime('Variable "ticket" does not exist.', 20, $this->source); })()), "fechaCompletado", array()), "m/d/Y"), "html", null, true);
        echo "</h5>
        </div>
        <div class=\"panel-body left\">
            <h5>Estado: ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new Twig_Error_Runtime('Variable "ticket" does not exist.', 23, $this->source); })()), "estado", array()), "html", null, true);
        echo "</h5>
        </div>
        <br />
        <div style=\"clear: both;\"></div>
        <div class=\"center\">
            <h4>Asignado A: ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["usuarioasigna"]) || array_key_exists("usuarioasigna", $context) ? $context["usuarioasigna"] : (function () { throw new Twig_Error_Runtime('Variable "usuarioasigna" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "</h4>
        </div>
    </div>
    <br />
    <div class=\"panel-primary\">
        <div class=\"left\">
            <h4>Solicitado Por: ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["usuariocrea"]) || array_key_exists("usuariocrea", $context) ? $context["usuariocrea"] : (function () { throw new Twig_Error_Runtime('Variable "usuariocrea" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "</h4>
        </div>
        <br />
        <div class=\"left\">
            <h4>Descripcion:</h4> <p>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new Twig_Error_Runtime('Variable "ticket" does not exist.', 38, $this->source); })()), "descripcion", array()), "html", null, true);
        echo "</p>
        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/Ticket/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 38,  138 => 34,  129 => 28,  121 => 23,  115 => 20,  109 => 17,  103 => 14,  95 => 9,  91 => 7,  82 => 6,  64 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block titulo %}Informacion de Ticket{% endblock %}
{% block menu_ticket %}class=\"active\"{% endblock %}

{% block body %}
<h1>Informacion de Ticket</h1>
<div class=\"subheader\">
    <a type=\"button\" class=\"btn btn-danger\" href=\"{{ path('lista_tickets') }}\">Volver</a>
</div>
<br />
    <div class=\"panel-heading full-width left\">
        <div class=\"panel-body left\">
            <h5>Asignación: #{{ ticket.id }}</h5>
        </div>
        <div class=\"panel-body left\">
            <h5>Fecha Creado: {{ ticket.fechaCreado|date(\"m/d/Y\") }}</h5>
        </div>
        <div class=\"panel-body left\">
            <h5>Fecha Cerrado: {{ ticket.fechaCompletado|date(\"m/d/Y\") }}</h5>
        </div>
        <div class=\"panel-body left\">
            <h5>Estado: {{ ticket.estado }}</h5>
        </div>
        <br />
        <div style=\"clear: both;\"></div>
        <div class=\"center\">
            <h4>Asignado A: {{ usuarioasigna }}</h4>
        </div>
    </div>
    <br />
    <div class=\"panel-primary\">
        <div class=\"left\">
            <h4>Solicitado Por: {{ usuariocrea }}</h4>
        </div>
        <br />
        <div class=\"left\">
            <h4>Descripcion:</h4> <p>{{ ticket.descripcion }}</p>
        </div>

    </div>

{% endblock %}", "@App/Ticket/index.html.twig", "/var/www/mescyt/taskapp/src/AppBundle/Resources/views/Ticket/index.html.twig");
    }
}
