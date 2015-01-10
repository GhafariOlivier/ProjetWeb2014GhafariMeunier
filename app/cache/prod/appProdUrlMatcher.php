<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/platform')) {
            // Savanna_platform_home
            if (preg_match('#^/platform(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Savanna_platform_home')), array (  '_controller' => 'Savanna\\PlatformBundle\\Controller\\AdvertController::indexAction',  'page' => 1,));
            }

            if (0 === strpos($pathinfo, '/platform/ad')) {
                // Savanna_platform_view
                if (0 === strpos($pathinfo, '/platform/advert') && preg_match('#^/platform/advert/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Savanna_platform_view')), array (  '_controller' => 'Savanna\\PlatformBundle\\Controller\\AdvertController::viewAction',));
                }

                // Savanna_platform_add
                if ($pathinfo === '/platform/add') {
                    return array (  '_controller' => 'Savanna\\PlatformBundle\\Controller\\AdvertController::addAction',  '_route' => 'Savanna_platform_add',);
                }

            }

            // Savanna_platform_edit
            if (0 === strpos($pathinfo, '/platform/edit') && preg_match('#^/platform/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Savanna_platform_edit')), array (  '_controller' => 'Savanna\\PlatformBundle\\Controller\\AdvertController::editAction',));
            }

            // Savanna_platform_delete
            if (0 === strpos($pathinfo, '/platform/delete') && preg_match('#^/platform/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Savanna_platform_delete')), array (  '_controller' => 'Savanna\\PlatformBundle\\Controller\\AdvertController::deleteAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
