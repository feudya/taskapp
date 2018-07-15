<?php

/* @App/Usuario/editar_usuario.html.twig */
class __TwigTemplate_e1a5040ede65db1adb66698559a96e73f1b0d591bb3a2052fe28bd0eac9d781e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Usuario/editar_usuario.html.twig", 1);
        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'menu_usuario' => array($this, 'block_menu_usuario'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Usuario/editar_usuario.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Usuario/editar_usuario.html.twig"));

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

        echo "Usuarios";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_menu_usuario($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_usuario"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_usuario"));

        echo "class=\"active\"";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Editando Usuario</h1>
    <div class=\"subheader\">
        <a type=\"button\" class=\"btn btn-danger\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lista_usuarios");
        echo "\">Volver</a>
    </div>
    <br />
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', array("attr" => array("validate" => "validate")));
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), 'widget');
        echo "
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), 'form_end');
        echo "
    ";
        // line 15
        echo "        ";
        // line 16
        echo "            ";
        // line 17
        echo "            ";
        // line 18
        echo "        ";
        // line 19
        echo "
        ";
        // line 21
        echo "            ";
        // line 22
        echo "            ";
        // line 23
        echo "        ";
        // line 24
        echo "
        ";
        // line 26
        echo "            ";
        // line 27
        echo "            ";
        // line 28
        echo "        ";
        // line 29
        echo "
        ";
        // line 31
        echo "            ";
        // line 32
        echo "            ";
        // line 33
        echo "        ";
        // line 34
        echo "
        ";
        // line 36
        echo "            ";
        // line 37
        echo "            ";
        // line 38
        echo "        ";
        // line 39
        echo "        ";
        // line 40
        echo "        ";
        // line 41
        echo "        ";
        // line 42
        echo "    ";
        // line 43
        echo "
    ";
        // line 45
        echo "        ";
        // line 46
        echo "            ";
        // line 47
        echo "            ";
        // line 48
        echo "            ";
        // line 49
        echo "            ";
        // line 50
        echo "            ";
        // line 51
        echo "            ";
        // line 52
        echo "
            ";
        // line 54
        echo "                ";
        // line 55
        echo "                ";
        // line 56
        echo "                ";
        // line 57
        echo "                ";
        // line 58
        echo "                ";
        // line 59
        echo "            ";
        // line 60
        echo "
            ";
        // line 62
        echo "                ";
        // line 63
        echo "                ";
        // line 64
        echo "                ";
        // line 65
        echo "                ";
        // line 66
        echo "                ";
        // line 68
        echo "                    ";
        // line 69
        echo "                ";
        // line 70
        echo "                ";
        // line 71
        echo "                    ";
        // line 72
        echo "                ";
        // line 73
        echo "            ";
        // line 74
        echo "

";
        // line 77
        echo "
        ";
        // line 79
        echo "    ";
        // line 80
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/Usuario/editar_usuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 80,  229 => 79,  226 => 77,  222 => 74,  220 => 73,  218 => 72,  216 => 71,  214 => 70,  212 => 69,  210 => 68,  208 => 66,  206 => 65,  204 => 64,  202 => 63,  200 => 62,  197 => 60,  195 => 59,  193 => 58,  191 => 57,  189 => 56,  187 => 55,  185 => 54,  182 => 52,  180 => 51,  178 => 50,  176 => 49,  174 => 48,  172 => 47,  170 => 46,  168 => 45,  165 => 43,  163 => 42,  161 => 41,  159 => 40,  157 => 39,  155 => 38,  153 => 37,  151 => 36,  148 => 34,  146 => 33,  144 => 32,  142 => 31,  139 => 29,  137 => 28,  135 => 27,  133 => 26,  130 => 24,  128 => 23,  126 => 22,  124 => 21,  121 => 19,  119 => 18,  117 => 17,  115 => 16,  113 => 15,  109 => 13,  105 => 12,  101 => 11,  95 => 8,  91 => 6,  82 => 5,  64 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block titulo %}Usuarios{% endblock %}
{% block menu_usuario %}class=\"active\"{% endblock %}
{% block body %}
    <h1>Editando Usuario</h1>
    <div class=\"subheader\">
        <a type=\"button\" class=\"btn btn-danger\" href=\"{{ path('lista_usuarios') }}\">Volver</a>
    </div>
    <br />
    {{ form_start(form, {'attr': {'validate': 'validate'}}) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
    {#<form>#}
        {#<div class=\"form-group\">#}
            {#<label for=\"nombre\">Nombre</label>#}
            {#<input class=\"form-control\" type=\"text\" id=\"nombre\" value=\"{{ usuario.nombre }}\">#}
        {#</div>#}

        {#<div class=\"form-group\">#}
            {#<label for=\"username\">Username</label>#}
            {#<input class=\"form-control\" type=\"text\" id=\"username\" value=\"{{ usuario.username }}\">#}
        {#</div>#}

        {#<div class=\"form-group\">#}
            {#<label for=\"username\">Email</label>#}
            {#<input class=\"form-control\" type=\"text\" id=\"email\" value=\"{{ usuario.email }}\">#}
        {#</div>#}

        {#<div class=\"form-group\">#}
            {#<label for=\"username\">Password</label>#}
            {#<input class=\"form-control\" type=\"text\" id=\"pass\" value=\"{{ usuario.contrasena }}\">#}
        {#</div>#}

        {#<div class=\"form-group\">#}
            {#<label for=\"username\">Tipo</label>#}
            {#<input class=\"form-control\" type=\"text\" id=\"tipo\" value=\"{{ usuario.tipoUsuario }}\">#}
        {#</div>#}
        {#<input type=\"hidden\" value=\"{{ usuario.id }}\" id=\"id\">#}
        {#<button type=\"button\" onclick=\"guardar()\" class=\"btn btn-primary\">Guardar</button>#}
        {#<a class=\"btn btn-danger\" href=\"{{ path('lista_usuarios') }}\">Volver</a>#}
    {#</form>#}

    {#<script>#}
        {#function guardar() {#}
            {#var id = \$('#id').val();#}
            {#var nombre = \$('#nombre').val();#}
            {#var username = \$('#username').val();#}
            {#var email = \$('#email').val();#}
            {#var pass = \$('#pass').val();#}
            {#var tipo = \$('#tipo').val();#}

            {#var data = {#}
                {#nombre: nombre,#}
                {#username: username,#}
                {#email: email,#}
                {#pass: pass,#}
                {#tipo: tipo#}
            {#};#}

            {#\$.ajax({#}
                {#dataType: 'json',#}
                {#data: JSON.stringify(data),#}
                {#url: '/app_dev.php/rest/usuario/' + id,#}
                {#type: 'PUT',#}
                {#success: function (response) {#}
{#//                    console.log(response);#}
                    {#window.location='/app_dev.php/usuario';#}
                {#}                ,#}
                {#error: function (err) {#}
                    {#console.log(err);#}
                {#}#}
            {#});#}


{#//            alert(username);#}

        {#}#}
    {#</script>#}

{% endblock %}", "@App/Usuario/editar_usuario.html.twig", "/var/www/mescyt/taskapp/src/AppBundle/Resources/views/Usuario/editar_usuario.html.twig");
    }
}
