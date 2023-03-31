<?php

namespace ContainerSeN2D7U;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMainControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\Front\MainController' shared autowired service.
     *
     * @return \App\Controller\Front\MainController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Front/MainController.php';

        $container->services['App\\Controller\\Front\\MainController'] = $instance = new \App\Controller\Front\MainController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\Front\\MainController', $container));

        return $instance;
    }
}
