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

        if (0 === strpos($pathinfo, '/css/241d7ac')) {
            // _assetic_241d7ac
            if ($pathinfo === '/css/241d7ac.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '241d7ac',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_241d7ac',);
            }

            if (0 === strpos($pathinfo, '/css/241d7ac_')) {
                // _assetic_241d7ac_0
                if ($pathinfo === '/css/241d7ac_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '241d7ac',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_241d7ac_0',);
                }

                // _assetic_241d7ac_1
                if ($pathinfo === '/css/241d7ac_gibbons_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '241d7ac',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_241d7ac_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/f1b5a5a')) {
            // _assetic_f1b5a5a
            if ($pathinfo === '/js/f1b5a5a.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f1b5a5a',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f1b5a5a',);
            }

            if (0 === strpos($pathinfo, '/js/f1b5a5a_')) {
                // _assetic_f1b5a5a_0
                if ($pathinfo === '/js/f1b5a5a_jquery.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f1b5a5a',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_f1b5a5a_0',);
                }

                // _assetic_f1b5a5a_1
                if ($pathinfo === '/js/f1b5a5a_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f1b5a5a',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_f1b5a5a_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/fd4d3b4')) {
            // _assetic_fd4d3b4
            if ($pathinfo === '/css/fd4d3b4.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fd4d3b4',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_fd4d3b4',);
            }

            if (0 === strpos($pathinfo, '/css/fd4d3b4_')) {
                // _assetic_fd4d3b4_0
                if ($pathinfo === '/css/fd4d3b4_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fd4d3b4',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_fd4d3b4_0',);
                }

                // _assetic_fd4d3b4_1
                if ($pathinfo === '/css/fd4d3b4_datepicker_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fd4d3b4',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_fd4d3b4_1',);
                }

                // _assetic_fd4d3b4_2
                if ($pathinfo === '/css/fd4d3b4_color_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fd4d3b4',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_fd4d3b4_2',);
                }

                // _assetic_fd4d3b4_3
                if ($pathinfo === '/css/fd4d3b4_navbar-fixed-top_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fd4d3b4',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_fd4d3b4_3',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/d8375f7')) {
            // _assetic_d8375f7
            if ($pathinfo === '/js/d8375f7.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd8375f7',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_d8375f7',);
            }

            if (0 === strpos($pathinfo, '/js/d8375f7_')) {
                // _assetic_d8375f7_0
                if ($pathinfo === '/js/d8375f7_jquery.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd8375f7',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_d8375f7_0',);
                }

                if (0 === strpos($pathinfo, '/js/d8375f7_bootstrap')) {
                    // _assetic_d8375f7_1
                    if ($pathinfo === '/js/d8375f7_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd8375f7',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_d8375f7_1',);
                    }

                    // _assetic_d8375f7_2
                    if ($pathinfo === '/js/d8375f7_bootstrap-datepicker_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd8375f7',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_d8375f7_2',);
                    }

                }

            }

        }

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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_super_gibbons')) {
                // gibbons_masques_core_tableau_evenement
                if (rtrim($pathinfo, '/') === '/_super_gibbons') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'gibbons_masques_core_tableau_evenement');
                    }

                    return array (  '_controller' => 'GibbonsMasques\\CoreBundle\\Controller\\AdminController::indexAction',  '_route' => 'gibbons_masques_core_tableau_evenement',);
                }

                // gibbons_masques_core_ajouter_evenement
                if ($pathinfo === '/_super_gibbons/ajouter_evenement') {
                    return array (  '_controller' => 'GibbonsMasques\\CoreBundle\\Controller\\AdminController::ajouterAction',  '_route' => 'gibbons_masques_core_ajouter_evenement',);
                }

                // gibbons_masques_core_modifier_evenement
                if (0 === strpos($pathinfo, '/_super_gibbons/modifier_evenement') && preg_match('#^/_super_gibbons/modifier_evenement/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gibbons_masques_core_modifier_evenement')), array (  '_controller' => 'GibbonsMasques\\CoreBundle\\Controller\\AdminController::modifierAction',));
                }

                // gibbons_masques_core_supprimer_evenement
                if (0 === strpos($pathinfo, '/_super_gibbons/supprimer_evenement') && preg_match('#^/_super_gibbons/supprimer_evenement/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gibbons_masques_core_supprimer_evenement')), array (  '_controller' => 'GibbonsMasques\\CoreBundle\\Controller\\AdminController::supprimerAction',));
                }

            }

        }

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
