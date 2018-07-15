<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // lista_tickets
        if ('/tickets' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\Tarea\\TareaController::indexTarea',  '_route' => 'lista_tickets',);
        }

        // taskinfo
        if (0 === strpos($pathinfo, '/tareas') && preg_match('#^/tareas/(?P<idTarea>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'taskinfo')), array (  '_controller' => 'AppBundle\\Controller\\Tarea\\TareaController::indexTareaInfo',));
        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // lista_usuarios
            if ('/usuario' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\Usuario\\UsuarioController::indexUsuario',  '_route' => 'lista_usuarios',);
            }

            // editar_usuario
            if (preg_match('#^/usuario/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'editar_usuario')), array (  '_controller' => 'AppBundle\\Controller\\Usuario\\UsuarioController::indexEditUsuario',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_editar_usuario;
                }

                return $ret;
            }
            not_editar_usuario:

            // valida_eliminar_usuario
            if (preg_match('#^/usuario/(?P<id>[^/]++)/remove$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'valida_eliminar_usuario')), array (  '_controller' => 'AppBundle\\Controller\\Usuario\\UsuarioController::validDeleteUsuario',));
            }

            // userinfo
            if (preg_match('#^/usuario/(?P<idUsuario>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'userinfo')), array (  '_controller' => 'AppBundle\\Controller\\Usuario\\UsuarioController::indexUsuarioInfo',));
            }

        }

        // crear_usuario
        if ('/crear/usuario' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\Usuario\\UsuarioController::indexNuevoUsuario',  '_route' => 'crear_usuario',);
        }

        if (0 === strpos($pathinfo, '/rest/usuario')) {
            if (0 === strpos($pathinfo, '/rest/usuariog')) {
                // buscar_usuarios
                if ('/rest/usuariog' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\Usuario\\UsuarioController::buscarUsuarios',  '_route' => 'buscar_usuarios',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_buscar_usuarios;
                    }

                    return $ret;
                }
                not_buscar_usuarios:

                // buscar_usuario
                if (preg_match('#^/rest/usuariog/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'buscar_usuario')), array (  '_controller' => 'AppBundle\\Controller\\Usuario\\UsuarioController::buscarUsuario',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_buscar_usuario;
                    }

                    return $ret;
                }
                not_buscar_usuario:

                // guardar_usuario
                if ('/rest/usuariog' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\Usuario\\UsuarioController::guardarUsuario',  '_route' => 'guardar_usuario',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_guardar_usuario;
                    }

                    return $ret;
                }
                not_guardar_usuario:

            }

            // actualizar_usuario
            if (preg_match('#^/rest/usuario/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'actualizar_usuario')), array (  '_controller' => 'AppBundle\\Controller\\Usuario\\UsuarioController::actualizarUsuario',));
                if (!in_array($requestMethod, array('PUT'))) {
                    $allow = array_merge($allow, array('PUT'));
                    goto not_actualizar_usuario;
                }

                return $ret;
            }
            not_actualizar_usuario:

            // eliminar_usuario
            if (preg_match('#^/rest/usuario/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminar_usuario')), array (  '_controller' => 'AppBundle\\Controller\\Usuario\\UsuarioController::indexDeleteUsuario',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_eliminar_usuario;
                }

                return $ret;
            }
            not_eliminar_usuario:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
