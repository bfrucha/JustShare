<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'gibbons_masques_core_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GibbonsMasques\\CoreBundle\\Controller\\IndexController::renderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gibbons/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'justsharecore_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JustShare\\CoreBundle\\Controller\\IndexController::renderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'justsharecore_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JustShare\\CoreBundle\\Controller\\CreateController::renderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/creer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'justsharecore_join' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JustShare\\CoreBundle\\Controller\\JoinController::renderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/participer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'justsharecore_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JustShare\\CoreBundle\\Controller\\ContactController::renderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
