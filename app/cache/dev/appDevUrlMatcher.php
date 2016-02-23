<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/plataforma')) {
            // plataforma
            if (rtrim($pathinfo, '/') === '/plataforma') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'plataforma');
                }

                return array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\plataformaController::indexAction',  '_route' => 'plataforma',);
            }

            // plataforma_show
            if (preg_match('#^/plataforma/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plataforma_show')), array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\plataformaController::showAction',));
            }

            // plataforma_new
            if ($pathinfo === '/plataforma/new') {
                return array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\plataformaController::newAction',  '_route' => 'plataforma_new',);
            }

            // plataforma_create
            if ($pathinfo === '/plataforma/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_plataforma_create;
                }

                return array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\plataformaController::createAction',  '_route' => 'plataforma_create',);
            }
            not_plataforma_create:

            // plataforma_edit
            if (preg_match('#^/plataforma/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plataforma_edit')), array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\plataformaController::editAction',));
            }

            // plataforma_update
            if (preg_match('#^/plataforma/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_plataforma_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plataforma_update')), array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\plataformaController::updateAction',));
            }
            not_plataforma_update:

            // plataforma_delete
            if (preg_match('#^/plataforma/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_plataforma_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plataforma_delete')), array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\plataformaController::deleteAction',));
            }
            not_plataforma_delete:

            // plataforma_buscar_plataforma
            if ($pathinfo === '/plataforma/buscarplataforma') {
                return array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\plataformaController::buscarPlataformaAction',  '_route' => 'plataforma_buscar_plataforma',);
            }

            // plataforma_responder_plataforma
            if ($pathinfo === '/plataforma/responderplataforma') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_plataforma_responder_plataforma;
                }

                return array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\plataformaController::responderPlataformaAction',  '_route' => 'plataforma_responder_plataforma',);
            }
            not_plataforma_responder_plataforma:

        }

        if (0 === strpos($pathinfo, '/tipos')) {
            // tipos
            if (rtrim($pathinfo, '/') === '/tipos') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tipos');
                }

                return array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\tiposController::indexAction',  '_route' => 'tipos',);
            }

            // tipos_show
            if (preg_match('#^/tipos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipos_show')), array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\tiposController::showAction',));
            }

            // tipos_new
            if ($pathinfo === '/tipos/new') {
                return array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\tiposController::newAction',  '_route' => 'tipos_new',);
            }

            // tipos_create
            if ($pathinfo === '/tipos/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tipos_create;
                }

                return array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\tiposController::createAction',  '_route' => 'tipos_create',);
            }
            not_tipos_create:

            // tipos_edit
            if (preg_match('#^/tipos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipos_edit')), array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\tiposController::editAction',));
            }

            // tipos_update
            if (preg_match('#^/tipos/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tipos_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipos_update')), array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\tiposController::updateAction',));
            }
            not_tipos_update:

            // tipos_delete
            if (preg_match('#^/tipos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tipos_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipos_delete')), array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\tiposController::deleteAction',));
            }
            not_tipos_delete:

            // tipos_buscar_tipos
            if ($pathinfo === '/tipos/buscartipos') {
                return array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\tiposController::buscarTiposAction',  '_route' => 'tipos_buscar_tipos',);
            }

            // tipos_responder_tipos
            if ($pathinfo === '/tipos/respondertipos') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tipos_responder_tipos;
                }

                return array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\tiposController::responderTiposAction',  '_route' => 'tipos_responder_tipos',);
            }
            not_tipos_responder_tipos:

        }

        if (0 === strpos($pathinfo, '/juegos')) {
            // juegos
            if (rtrim($pathinfo, '/') === '/juegos') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'juegos');
                }

                return array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\juegosController::indexAction',  '_route' => 'juegos',);
            }

            // juegos_show
            if (preg_match('#^/juegos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'juegos_show')), array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\juegosController::showAction',));
            }

            // juegos_new
            if ($pathinfo === '/juegos/new') {
                return array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\juegosController::newAction',  '_route' => 'juegos_new',);
            }

            // juegos_create
            if ($pathinfo === '/juegos/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_juegos_create;
                }

                return array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\juegosController::createAction',  '_route' => 'juegos_create',);
            }
            not_juegos_create:

            // juegos_edit
            if (preg_match('#^/juegos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'juegos_edit')), array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\juegosController::editAction',));
            }

            // juegos_update
            if (preg_match('#^/juegos/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_juegos_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'juegos_update')), array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\juegosController::updateAction',));
            }
            not_juegos_update:

            // juegos_delete
            if (preg_match('#^/juegos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_juegos_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'juegos_delete')), array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\juegosController::deleteAction',));
            }
            not_juegos_delete:

        }

        // uni_videojuegos_homepage
        if ($pathinfo === '/inicio') {
            return array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\DefaultController::indexAction',  '_route' => 'uni_videojuegos_homepage',);
        }

        if (0 === strpos($pathinfo, '/link')) {
            // linkPlataformas
            if ($pathinfo === '/linkPlataformas') {
                return array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\plataformaController::buscarPlataformaAction',  '_route' => 'linkPlataformas',);
            }

            // linkTipos
            if ($pathinfo === '/linkTipos') {
                return array (  '_controller' => 'uniVideojuegos\\Bundle\\Controller\\tiposController::buscarTipoAction',  '_route' => 'linkTipos',);
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}