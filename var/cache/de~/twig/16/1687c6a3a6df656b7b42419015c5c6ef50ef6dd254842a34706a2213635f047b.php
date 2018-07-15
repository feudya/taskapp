<?php

/* @App/Usuario/editar_usuario.html.twig */
class __TwigTemplate_0c8cc9d19ca62f8152ea29db192817b4d228b28a585e590697488a83e4875bf9 extends Twig_Template
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
    <form>
        <div class=\"form-group\">
            <label for=\"nombre\">Nombre</label>
            <input class=\"form-control\" type=\"text\" id=\"nombre\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new Twig_Error_Runtime('Variable "usuario" does not exist.', 10, $this->source); })()), "nombre", array()), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"username\">Username</label>
            <input class=\"form-control\" type=\"text\" id=\"username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new Twig_Error_Runtime('Variable "usuario" does not exist.', 15, $this->source); })()), "username", array()), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"username\">Email</label>
            <input class=\"form-control\" type=\"text\" id=\"email\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new Twig_Error_Runtime('Variable "usuario" does not exist.', 20, $this->source); })()), "email", array()), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"username\">Password</label>
            <input class=\"form-control\" type=\"text\" id=\"pass\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new Twig_Error_Runtime('Variable "usuario" does not exist.', 25, $this->source); })()), "contrasena", array()), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"username\">Tipo</label>
            <input class=\"form-control\" type=\"text\" id=\"tipo\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new Twig_Error_Runtime('Variable "usuario" does not exist.', 30, $this->source); })()), "tipoUsuario", array()), "html", null, true);
        echo "\">
        </div>
        <input type=\"hidden\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new Twig_Error_Runtime('Variable "usuario" does not exist.', 32, $this->source); })()), "id", array()), "html", null, true);
        echo "\" id=\"id\">
        <button type=\"button\" onclick=\"guardar()\" class=\"btn btn-primary\">Guardar</button>
        <a class=\"btn btn-danger\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lista_usuarios");
        echo "\">Volver</a>
    </form>

    <script>
        function guardar() {
            var id = \$('#id').val();
            var nombre = \$('#nombre').val();
            var username = \$('#username').val();
            var email = \$('#email').val();
            var pass = \$('#pass').val();
            var tipo = \$('#tipo').val();

            var data = {
                nombre: nombre,
                username: username,
                email: email,
                pass: pass,
                tipo: tipo
            };

            \$.ajax({
                dataType: 'json',
                data: JSON.stringify(data),
                url: '/app_dev.php/rest/usuario/' + id,
                type: 'PUT',
                success: function (response) {
//                    console.log(response);
                    window.location='/app_dev.php/usuario';
                }                ,
                error: function (err) {
                    console.log(err);
                }
            });


//            alert(username);

        }
    </script>

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
        return array (  139 => 34,  134 => 32,  129 => 30,  121 => 25,  113 => 20,  105 => 15,  97 => 10,  91 => 6,  82 => 5,  64 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block titulo %}Usuarios{% endblock %}
{% block menu_usuario %}class=\"active\"{% endblock %}
{% block body %}
    <h1>Editando Usuario</h1>
    <form>
        <div class=\"form-group\">
            <label for=\"nombre\">Nombre</label>
            <input class=\"form-control\" type=\"text\" id=\"nombre\" value=\"{{ usuario.nombre }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"username\">Username</label>
            <input class=\"form-control\" type=\"text\" id=\"username\" value=\"{{ usuario.username }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"username\">Email</label>
            <input class=\"form-control\" type=\"text\" id=\"email\" value=\"{{ usuario.email }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"username\">Password</label>
            <input class=\"form-control\" type=\"text\" id=\"pass\" value=\"{{ usuario.contrasena }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"username\">Tipo</label>
            <input class=\"form-control\" type=\"text\" id=\"tipo\" value=\"{{ usuario.tipoUsuario }}\">
        </div>
        <input type=\"hidden\" value=\"{{ usuario.id }}\" id=\"id\">
        <button type=\"button\" onclick=\"guardar()\" class=\"btn btn-primary\">Guardar</button>
        <a class=\"btn btn-danger\" href=\"{{ path('lista_usuarios') }}\">Volver</a>
    </form>

    <script>
        function guardar() {
            var id = \$('#id').val();
            var nombre = \$('#nombre').val();
            var username = \$('#username').val();
            var email = \$('#email').val();
            var pass = \$('#pass').val();
            var tipo = \$('#tipo').val();

            var data = {
                nombre: nombre,
                username: username,
                email: email,
                pass: pass,
                tipo: tipo
            };

            \$.ajax({
                dataType: 'json',
                data: JSON.stringify(data),
                url: '/app_dev.php/rest/usuario/' + id,
                type: 'PUT',
                success: function (response) {
//                    console.log(response);
                    window.location='/app_dev.php/usuario';
                }                ,
                error: function (err) {
                    console.log(err);
                }
            });


//            alert(username);

        }
    </script>

{% endblock %}", "@App/Usuario/editar_usuario.html.twig", "/var/www/mescyt/taskapp/src/AppBundle/Resources/views/Usuario/editar_usuario.html.twig");
    }
}
