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

        // gibbons_masques_core_homepage
        if (rtrim($pathinfo, '/') === '/gibbons') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gibbons_masques_core_homepage');
            }

            return array (  '_controller' => 'GibbonsMasques\\CoreBundle\\Controller\\IndexController::renderAction',  '_route' => 'gibbons_masques_core_homepage',);
        }

        // justsharecore_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'justsharecore_index');
            }

            return array (  '_controller' => 'JustShare\\CoreBundle\\Controller\\IndexController::renderAction',  '_route' => 'justsharecore_index',);
        }

        // justsharecore_create
        if ($pathinfo === '/creer') {
            return array (  '_controller' => 'JustShare\\CoreBundle\\Controller\\CreateController::renderAction',  '_route' => 'justsharecore_create',);
        }

        // justsharecore_join
        if ($pathinfo === '/participer') {
            return array (  '_controller' => 'JustShare\\CoreBundle\\Controller\\JoinController::renderAction',  '_route' => 'justsharecore_join',);
        }

        // justsharecore_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'JustShare\\CoreBundle\\Controller\\ContactController::renderAction',  '_route' => 'justsharecore_contact',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
