<?php

namespace ContainerVFYgrAW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReviewRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\ReviewRepository' shared autowired service.
     *
     * @return \App\Repository\ReviewRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/ReviewRepository.php';

        return $container->privates['App\\Repository\\ReviewRepository'] = new \App\Repository\ReviewRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
