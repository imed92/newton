<?php

namespace ContainerSeN2D7U;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AccessMapService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMap.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcher.php';

        $container->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/back/(.*)/(new|edit)'), [0 => 'ROLE_ADMIN'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/back/(.*)/\\d+$', NULL, [0 => 'POST']), [0 => 'ROLE_ADMIN'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/back/'), [0 => 'ROLE_MANAGER'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/movie/\\d+/review/add'), [0 => 'ROLE_USER'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/favorites'), [0 => 'ROLE_USER'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/movies'), [0 => 'PUBLIC_ACCESS'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/genres'), [0 => 'PUBLIC_ACCESS'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/secure'), [0 => 'IS_AUTHENTICATED_FULLY'], NULL);

        return $instance;
    }
}
