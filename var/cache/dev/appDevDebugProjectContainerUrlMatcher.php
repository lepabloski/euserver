<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/negocio')) {
            // negocio_index
            if (rtrim($pathinfo, '/') === '/negocio') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_negocio_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'negocio_index');
                }

                return array (  '_controller' => 'EuBundle\\Controller\\NegocioController::indexAction',  '_route' => 'negocio_index',);
            }
            not_negocio_index:

            // negocio_show
            if (0 === strpos($pathinfo, '/negocio/show') && preg_match('#^/negocio/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_negocio_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'negocio_show')), array (  '_controller' => 'EuBundle\\Controller\\NegocioController::showAction',));
            }
            not_negocio_show:

            // negocio_new
            if ($pathinfo === '/negocio/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_negocio_new;
                }

                return array (  '_controller' => 'EuBundle\\Controller\\NegocioController::newAction',  '_route' => 'negocio_new',);
            }
            not_negocio_new:

            // negocio_edit
            if (0 === strpos($pathinfo, '/negocio/edit') && preg_match('#^/negocio/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_negocio_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'negocio_edit')), array (  '_controller' => 'EuBundle\\Controller\\NegocioController::editAction',));
            }
            not_negocio_edit:

            // negocio_delete
            if (0 === strpos($pathinfo, '/negocio/delete') && preg_match('#^/negocio/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_negocio_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'negocio_delete')), array (  '_controller' => 'EuBundle\\Controller\\NegocioController::deleteAction',));
            }
            not_negocio_delete:

        }

        // eu_homepage
        if ($pathinfo === '/insertar') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_eu_homepage;
            }

            return array (  '_controller' => 'EuBundle\\Controller\\EUController::insertAction',  '_route' => 'eu_homepage',);
        }
        not_eu_homepage:

        // eu_login
        if ($pathinfo === '/login') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_eu_login;
            }

            return array (  '_controller' => 'EuBundle\\Controller\\EUController::loginAction',  '_route' => 'eu_login',);
        }
        not_eu_login:

        if (0 === strpos($pathinfo, '/promo')) {
            // promo_index
            if (rtrim($pathinfo, '/') === '/promo') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_promo_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'promo_index');
                }

                return array (  '_controller' => 'EuBundle\\Controller\\PromoController::indexAction',  '_route' => 'promo_index',);
            }
            not_promo_index:

            // promo_show
            if (0 === strpos($pathinfo, '/promo/show') && preg_match('#^/promo/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_promo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'promo_show')), array (  '_controller' => 'EuBundle\\Controller\\PromoController::showAction',));
            }
            not_promo_show:

            // promo_new
            if (0 === strpos($pathinfo, '/promo/new') && preg_match('#^/promo/new/(?P<negocioId>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_promo_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'promo_new')), array (  '_controller' => 'EuBundle\\Controller\\PromoController::newAction',));
            }
            not_promo_new:

            // promo_edit
            if (0 === strpos($pathinfo, '/promo/edit') && preg_match('#^/promo/edit/(?P<promoId>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_promo_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'promo_edit')), array (  '_controller' => 'EuBundle\\Controller\\PromoController::editAction',));
            }
            not_promo_edit:

            // promo_delete
            if (0 === strpos($pathinfo, '/promo/delete') && preg_match('#^/promo/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_promo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'promo_delete')), array (  '_controller' => 'EuBundle\\Controller\\PromoController::deleteAction',));
            }
            not_promo_delete:

        }

        // eu_datos
        if (0 === strpos($pathinfo, '/eu') && preg_match('#^/eu/(?P<lang>es)(?:/(?P<uuid>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_eu_datos;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eu_datos')), array (  '_controller' => 'EuBundle\\Controller\\EUController::negociosAction',  'uuid' => 1,));
        }
        not_eu_datos:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
