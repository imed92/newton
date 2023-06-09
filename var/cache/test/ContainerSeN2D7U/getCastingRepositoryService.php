<?php

namespace ContainerSeN2D7U;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCastingRepositoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Repository\CastingRepository' shared autowired service.
     *
     * @return \App\Repository\CastingRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/CastingRepository.php';

        return $container->privates['App\\Repository\\CastingRepository'] = new \App\Repository\CastingRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
