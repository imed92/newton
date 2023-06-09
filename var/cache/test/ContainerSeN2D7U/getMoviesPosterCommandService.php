<?php

namespace ContainerSeN2D7U;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMoviesPosterCommandService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Command\MoviesPosterCommand' shared autowired service.
     *
     * @return \App\Command\MoviesPosterCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/MoviesPosterCommand.php';

        $container->privates['App\\Command\\MoviesPosterCommand'] = $instance = new \App\Command\MoviesPosterCommand(($container->privates['App\\Repository\\MovieRepository'] ?? $container->getMovieRepositoryService()), ($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->privates['App\\Service\\OmdbApi'] ?? $container->load('getOmdbApiService')));

        $instance->setName('app:movies:poster');
        $instance->setDescription('Get movies posters from omdbapi.com');

        return $instance;
    }
}
