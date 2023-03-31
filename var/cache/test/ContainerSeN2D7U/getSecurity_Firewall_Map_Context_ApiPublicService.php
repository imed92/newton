<?php

namespace ContainerSeN2D7U;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_ApiPublicService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.firewall.map.context.api_public' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';

        return $container->privates['security.firewall.map.context.api_public'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['debug.security.firewall.authenticator.api_public'] ?? $container->load('getDebug_Security_Firewall_Authenticator_ApiPublicService'));
            yield 2 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 3), ($container->privates['security.exception_listener.api_public'] ?? $container->load('getSecurity_ExceptionListener_ApiPublicService')), NULL, ($container->privates['security.firewall.map.config.api_public'] ?? $container->load('getSecurity_Firewall_Map_Config_ApiPublicService')));
    }
}
