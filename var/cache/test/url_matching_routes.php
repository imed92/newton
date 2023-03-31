<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/genres' => [[['_route' => 'api_genres_get', '_controller' => 'App\\Controller\\Api\\ApiGenresController::getCollection'], null, ['GET' => 0], null, false, false, null]],
        '/api/movies' => [[['_route' => 'api_movies_get', '_controller' => 'App\\Controller\\Api\\ApiMovieController::getCollection'], null, ['GET' => 0], null, false, false, null]],
        '/api/movies/random' => [[['_route' => 'api_movies_get_item_random', '_controller' => 'App\\Controller\\Api\\ApiMovieController::getItemRandom'], null, ['GET' => 0], null, false, false, null]],
        '/api/secure/movies' => [[['_route' => 'api_movies_post', '_controller' => 'App\\Controller\\Api\\ApiMovieController::createItem'], null, ['POST' => 0], null, false, false, null]],
        '/back/movie' => [[['_route' => 'back_movie_index', '_controller' => 'App\\Controller\\Back\\MovieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/movie/new' => [[['_route' => 'back_movie_new', '_controller' => 'App\\Controller\\Back\\MovieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/user' => [[['_route' => 'back_user_index', '_controller' => 'App\\Controller\\Back\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/user/new' => [[['_route' => 'back_user_new', '_controller' => 'App\\Controller\\Back\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/favorites' => [[['_route' => 'favorites_list', '_controller' => 'App\\Controller\\Front\\FavoritesController::list'], null, null, null, false, false, null]],
        '/favorites/gestion/purge' => [[['_route' => 'favorites_purge', '_controller' => 'App\\Controller\\Front\\FavoritesController::purgeFavorites'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login_index', '_controller' => 'App\\Controller\\Front\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'login_logout', '_controller' => 'App\\Controller\\Front\\LoginController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main_home', '_controller' => 'App\\Controller\\Front\\MainController::home'], null, null, null, false, false, null]],
        '/movies/list' => [[['_route' => 'main_movies_list', '_controller' => 'App\\Controller\\Front\\MainController::list'], null, null, null, false, false, null]],
        '/theme/toggle' => [[['_route' => 'main_theme_switcher', '_controller' => 'App\\Controller\\Front\\MainController::themeSwitcher'], null, null, null, false, false, null]],
        '/test/movie/create' => [[['_route' => 'app_test_create', '_controller' => 'App\\Controller\\TestController::create'], null, null, null, false, false, null]],
        '/test/movie/list' => [[['_route' => 'app_test_list', '_controller' => 'App\\Controller\\TestController::list'], null, null, null, false, false, null]],
        '/test/season/add' => [[['_route' => 'app_test_seasonadd', '_controller' => 'App\\Controller\\TestController::seasonAdd'], null, null, null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/(?'
                    .'|genres/(\\d+)/movies(*:34)'
                    .'|movies/(\\d+)(*:53)'
                .')'
                .'|/back/(?'
                    .'|casting/(?'
                        .'|movie/([^/]++)(*:95)'
                        .'|new/movie/([^/]++)(*:120)'
                        .'|([^/]++)(?'
                            .'|/edit(*:144)'
                            .'|(*:152)'
                        .')'
                    .')'
                    .'|movie/([^/]++)(?'
                        .'|(*:179)'
                        .'|/edit(*:192)'
                        .'|(*:200)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:225)'
                        .'|/edit(*:238)'
                        .'|(*:246)'
                    .')'
                .')'
                .'|/favorites/gestion/(\\d+)(*:280)'
                .'|/movie/(?'
                    .'|([^/]++)(*:306)'
                    .'|(\\d+)/review/add(*:330)'
                .')'
                .'|/test/movie/(?'
                    .'|(\\d+)(*:359)'
                    .'|update/(\\d+)(*:379)'
                    .'|delete/(\\d+)(*:399)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'api_genres_get_movies', '_controller' => 'App\\Controller\\Api\\ApiGenresController::getItemAndMovies'], ['id'], ['GET' => 0], null, false, false, null]],
        53 => [[['_route' => 'api_movies_get_item', '_controller' => 'App\\Controller\\Api\\ApiMovieController::getItem'], ['id'], ['GET' => 0], null, false, true, null]],
        95 => [[['_route' => 'back_casting_index', '_controller' => 'App\\Controller\\Back\\CastingController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        120 => [[['_route' => 'back_casting_new', '_controller' => 'App\\Controller\\Back\\CastingController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        144 => [[['_route' => 'back_casting_edit', '_controller' => 'App\\Controller\\Back\\CastingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        152 => [[['_route' => 'back_casting_delete', '_controller' => 'App\\Controller\\Back\\CastingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        179 => [[['_route' => 'back_movie_show', '_controller' => 'App\\Controller\\Back\\MovieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        192 => [[['_route' => 'back_movie_edit', '_controller' => 'App\\Controller\\Back\\MovieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        200 => [[['_route' => 'back_movie_delete', '_controller' => 'App\\Controller\\Back\\MovieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        225 => [[['_route' => 'back_user_show', '_controller' => 'App\\Controller\\Back\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        238 => [[['_route' => 'back_user_edit', '_controller' => 'App\\Controller\\Back\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        246 => [[['_route' => 'back_user_delete', '_controller' => 'App\\Controller\\Back\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        280 => [[['_route' => 'favorite_gestion', '_controller' => 'App\\Controller\\Front\\FavoritesController::favorite'], ['id'], null, null, false, true, null]],
        306 => [[['_route' => 'main_movie_show', '_controller' => 'App\\Controller\\Front\\MainController::movieShow'], ['slug'], null, null, false, true, null]],
        330 => [[['_route' => 'main_movie_review_add', '_controller' => 'App\\Controller\\Front\\MainController::movieReviewAdd'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        359 => [[['_route' => 'app_test_show', '_controller' => 'App\\Controller\\TestController::show'], ['id'], null, null, false, true, null]],
        379 => [[['_route' => 'app_test_update', '_controller' => 'App\\Controller\\TestController::update'], ['id'], null, null, false, true, null]],
        399 => [
            [['_route' => 'app_test_delete', '_controller' => 'App\\Controller\\TestController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
