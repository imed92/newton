<?php

namespace ContainerVFYgrAW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PW8ZGOuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pW8ZGOu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pW8ZGOu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Api\\ApiGenresController::getCollection' => ['privates', '.service_locator.NN15POn', 'get_ServiceLocator_NN15POnService', true],
            'App\\Controller\\Api\\ApiGenresController::getItemAndMovies' => ['privates', '.service_locator.XLsihu8', 'get_ServiceLocator_XLsihu8Service', true],
            'App\\Controller\\Api\\ApiMovieController::createItem' => ['privates', '.service_locator._3l5DPD', 'get_ServiceLocator_3l5DPDService', true],
            'App\\Controller\\Api\\ApiMovieController::getCollection' => ['privates', '.service_locator.eWsEuD9', 'get_ServiceLocator_EWsEuD9Service', true],
            'App\\Controller\\Api\\ApiMovieController::getItemRandom' => ['privates', '.service_locator.eWsEuD9', 'get_ServiceLocator_EWsEuD9Service', true],
            'App\\Controller\\Back\\CastingController::delete' => ['privates', '.service_locator.K0j_RdX', 'get_ServiceLocator_K0jRdXService', true],
            'App\\Controller\\Back\\CastingController::edit' => ['privates', '.service_locator.K0j_RdX', 'get_ServiceLocator_K0jRdXService', true],
            'App\\Controller\\Back\\CastingController::index' => ['privates', '.service_locator.wumxNdW', 'get_ServiceLocator_WumxNdWService', true],
            'App\\Controller\\Back\\CastingController::new' => ['privates', '.service_locator.IP.7k9m', 'get_ServiceLocator_IP_7k9mService', true],
            'App\\Controller\\Back\\MovieController::delete' => ['privates', '.service_locator.IP.7k9m', 'get_ServiceLocator_IP_7k9mService', true],
            'App\\Controller\\Back\\MovieController::edit' => ['privates', '.service_locator.e26rzFN', 'get_ServiceLocator_E26rzFNService', true],
            'App\\Controller\\Back\\MovieController::index' => ['privates', '.service_locator.eWsEuD9', 'get_ServiceLocator_EWsEuD9Service', true],
            'App\\Controller\\Back\\MovieController::new' => ['privates', '.service_locator.hrb6f6n', 'get_ServiceLocator_Hrb6f6nService', true],
            'App\\Controller\\Back\\UserController::delete' => ['privates', '.service_locator.LruWq6u', 'get_ServiceLocator_LruWq6uService', true],
            'App\\Controller\\Back\\UserController::edit' => ['privates', '.service_locator.WF25WwK', 'get_ServiceLocator_WF25WwKService', true],
            'App\\Controller\\Back\\UserController::index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\Back\\UserController::new' => ['privates', '.service_locator.Dby0_1s', 'get_ServiceLocator_Dby01sService', true],
            'App\\Controller\\Front\\FavoritesController::favorite' => ['privates', '.service_locator.6HjDXbG', 'get_ServiceLocator_6HjDXbGService', true],
            'App\\Controller\\Front\\FavoritesController::purgeFavorites' => ['privates', '.service_locator.Sgeiuvg', 'get_ServiceLocator_SgeiuvgService', true],
            'App\\Controller\\Front\\LoginController::index' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\Front\\MainController::home' => ['privates', '.service_locator.eWsEuD9', 'get_ServiceLocator_EWsEuD9Service', true],
            'App\\Controller\\Front\\MainController::list' => ['privates', '.service_locator.eWsEuD9', 'get_ServiceLocator_EWsEuD9Service', true],
            'App\\Controller\\Front\\MainController::movieReviewAdd' => ['privates', '.service_locator.zEkbIUL', 'get_ServiceLocator_ZEkbIULService', true],
            'App\\Controller\\Front\\MainController::movieShow' => ['privates', '.service_locator.eyyzr.t', 'get_ServiceLocator_Eyyzr_TService', true],
            'App\\Controller\\TestController::create' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\TestController::delete' => ['privates', '.service_locator.s5OTHRU', 'get_ServiceLocator_S5OTHRUService', true],
            'App\\Controller\\TestController::list' => ['privates', '.service_locator.eWsEuD9', 'get_ServiceLocator_EWsEuD9Service', true],
            'App\\Controller\\TestController::seasonAdd' => ['privates', '.service_locator.s5OTHRU', 'get_ServiceLocator_S5OTHRUService', true],
            'App\\Controller\\TestController::show' => ['privates', '.service_locator.eWsEuD9', 'get_ServiceLocator_EWsEuD9Service', true],
            'App\\Controller\\TestController::update' => ['privates', '.service_locator.s5OTHRU', 'get_ServiceLocator_S5OTHRUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\Api\\ApiGenresController:getCollection' => ['privates', '.service_locator.NN15POn', 'get_ServiceLocator_NN15POnService', true],
            'App\\Controller\\Api\\ApiGenresController:getItemAndMovies' => ['privates', '.service_locator.XLsihu8', 'get_ServiceLocator_XLsihu8Service', true],
            'App\\Controller\\Api\\ApiMovieController:createItem' => ['privates', '.service_locator._3l5DPD', 'get_ServiceLocator_3l5DPDService', true],
            'App\\Controller\\Api\\ApiMovieController:getCollection' => ['privates', '.service_locator.eWsEuD9', 'get_ServiceLocator_EWsEuD9Service', true],
            'App\\Controller\\Api\\ApiMovieController:getItemRandom' => ['privates', '.service_locator.eWsEuD9', 'get_ServiceLocator_EWsEuD9Service', true],
            'App\\Controller\\Back\\CastingController:delete' => ['privates', '.service_locator.K0j_RdX', 'get_ServiceLocator_K0jRdXService', true],
            'App\\Controller\\Back\\CastingController:edit' => ['privates', '.service_locator.K0j_RdX', 'get_ServiceLocator_K0jRdXService', true],
            'App\\Controller\\Back\\CastingController:index' => ['privates', '.service_locator.wumxNdW', 'get_ServiceLocator_WumxNdWService', true],
            'App\\Controller\\Back\\CastingController:new' => ['privates', '.service_locator.IP.7k9m', 'get_ServiceLocator_IP_7k9mService', true],
            'App\\Controller\\Back\\MovieController:delete' => ['privates', '.service_locator.IP.7k9m', 'get_ServiceLocator_IP_7k9mService', true],
            'App\\Controller\\Back\\MovieController:edit' => ['privates', '.service_locator.e26rzFN', 'get_ServiceLocator_E26rzFNService', true],
            'App\\Controller\\Back\\MovieController:index' => ['privates', '.service_locator.eWsEuD9', 'get_ServiceLocator_EWsEuD9Service', true],
            'App\\Controller\\Back\\MovieController:new' => ['privates', '.service_locator.hrb6f6n', 'get_ServiceLocator_Hrb6f6nService', true],
            'App\\Controller\\Back\\UserController:delete' => ['privates', '.service_locator.LruWq6u', 'get_ServiceLocator_LruWq6uService', true],
            'App\\Controller\\Back\\UserController:edit' => ['privates', '.service_locator.WF25WwK', 'get_ServiceLocator_WF25WwKService', true],
            'App\\Controller\\Back\\UserController:index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\Back\\UserController:new' => ['privates', '.service_locator.Dby0_1s', 'get_ServiceLocator_Dby01sService', true],
            'App\\Controller\\Front\\FavoritesController:favorite' => ['privates', '.service_locator.6HjDXbG', 'get_ServiceLocator_6HjDXbGService', true],
            'App\\Controller\\Front\\FavoritesController:purgeFavorites' => ['privates', '.service_locator.Sgeiuvg', 'get_ServiceLocator_SgeiuvgService', true],
            'App\\Controller\\Front\\LoginController:index' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\Front\\MainController:home' => ['privates', '.service_locator.eWsEuD9', 'get_ServiceLocator_EWsEuD9Service', true],
            'App\\Controller\\Front\\MainController:list' => ['privates', '.service_locator.eWsEuD9', 'get_ServiceLocator_EWsEuD9Service', true],
            'App\\Controller\\Front\\MainController:movieReviewAdd' => ['privates', '.service_locator.zEkbIUL', 'get_ServiceLocator_ZEkbIULService', true],
            'App\\Controller\\Front\\MainController:movieShow' => ['privates', '.service_locator.eyyzr.t', 'get_ServiceLocator_Eyyzr_TService', true],
            'App\\Controller\\TestController:create' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\TestController:delete' => ['privates', '.service_locator.s5OTHRU', 'get_ServiceLocator_S5OTHRUService', true],
            'App\\Controller\\TestController:list' => ['privates', '.service_locator.eWsEuD9', 'get_ServiceLocator_EWsEuD9Service', true],
            'App\\Controller\\TestController:seasonAdd' => ['privates', '.service_locator.s5OTHRU', 'get_ServiceLocator_S5OTHRUService', true],
            'App\\Controller\\TestController:show' => ['privates', '.service_locator.eWsEuD9', 'get_ServiceLocator_EWsEuD9Service', true],
            'App\\Controller\\TestController:update' => ['privates', '.service_locator.s5OTHRU', 'get_ServiceLocator_S5OTHRUService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\Api\\ApiGenresController::getCollection' => '?',
            'App\\Controller\\Api\\ApiGenresController::getItemAndMovies' => '?',
            'App\\Controller\\Api\\ApiMovieController::createItem' => '?',
            'App\\Controller\\Api\\ApiMovieController::getCollection' => '?',
            'App\\Controller\\Api\\ApiMovieController::getItemRandom' => '?',
            'App\\Controller\\Back\\CastingController::delete' => '?',
            'App\\Controller\\Back\\CastingController::edit' => '?',
            'App\\Controller\\Back\\CastingController::index' => '?',
            'App\\Controller\\Back\\CastingController::new' => '?',
            'App\\Controller\\Back\\MovieController::delete' => '?',
            'App\\Controller\\Back\\MovieController::edit' => '?',
            'App\\Controller\\Back\\MovieController::index' => '?',
            'App\\Controller\\Back\\MovieController::new' => '?',
            'App\\Controller\\Back\\UserController::delete' => '?',
            'App\\Controller\\Back\\UserController::edit' => '?',
            'App\\Controller\\Back\\UserController::index' => '?',
            'App\\Controller\\Back\\UserController::new' => '?',
            'App\\Controller\\Front\\FavoritesController::favorite' => '?',
            'App\\Controller\\Front\\FavoritesController::purgeFavorites' => '?',
            'App\\Controller\\Front\\LoginController::index' => '?',
            'App\\Controller\\Front\\MainController::home' => '?',
            'App\\Controller\\Front\\MainController::list' => '?',
            'App\\Controller\\Front\\MainController::movieReviewAdd' => '?',
            'App\\Controller\\Front\\MainController::movieShow' => '?',
            'App\\Controller\\TestController::create' => '?',
            'App\\Controller\\TestController::delete' => '?',
            'App\\Controller\\TestController::list' => '?',
            'App\\Controller\\TestController::seasonAdd' => '?',
            'App\\Controller\\TestController::show' => '?',
            'App\\Controller\\TestController::update' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Api\\ApiGenresController:getCollection' => '?',
            'App\\Controller\\Api\\ApiGenresController:getItemAndMovies' => '?',
            'App\\Controller\\Api\\ApiMovieController:createItem' => '?',
            'App\\Controller\\Api\\ApiMovieController:getCollection' => '?',
            'App\\Controller\\Api\\ApiMovieController:getItemRandom' => '?',
            'App\\Controller\\Back\\CastingController:delete' => '?',
            'App\\Controller\\Back\\CastingController:edit' => '?',
            'App\\Controller\\Back\\CastingController:index' => '?',
            'App\\Controller\\Back\\CastingController:new' => '?',
            'App\\Controller\\Back\\MovieController:delete' => '?',
            'App\\Controller\\Back\\MovieController:edit' => '?',
            'App\\Controller\\Back\\MovieController:index' => '?',
            'App\\Controller\\Back\\MovieController:new' => '?',
            'App\\Controller\\Back\\UserController:delete' => '?',
            'App\\Controller\\Back\\UserController:edit' => '?',
            'App\\Controller\\Back\\UserController:index' => '?',
            'App\\Controller\\Back\\UserController:new' => '?',
            'App\\Controller\\Front\\FavoritesController:favorite' => '?',
            'App\\Controller\\Front\\FavoritesController:purgeFavorites' => '?',
            'App\\Controller\\Front\\LoginController:index' => '?',
            'App\\Controller\\Front\\MainController:home' => '?',
            'App\\Controller\\Front\\MainController:list' => '?',
            'App\\Controller\\Front\\MainController:movieReviewAdd' => '?',
            'App\\Controller\\Front\\MainController:movieShow' => '?',
            'App\\Controller\\TestController:create' => '?',
            'App\\Controller\\TestController:delete' => '?',
            'App\\Controller\\TestController:list' => '?',
            'App\\Controller\\TestController:seasonAdd' => '?',
            'App\\Controller\\TestController:show' => '?',
            'App\\Controller\\TestController:update' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
