<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/api/(?'
                    .'|genres/(\\d+)/movies(*:195)'
                    .'|movies/(\\d+)(*:215)'
                .')'
                .'|/back/(?'
                    .'|casting/(?'
                        .'|movie/([^/]++)(*:258)'
                        .'|new/movie/([^/]++)(*:284)'
                        .'|([^/]++)(?'
                            .'|/edit(*:308)'
                            .'|(*:316)'
                        .')'
                    .')'
                    .'|movie/([^/]++)(?'
                        .'|(*:343)'
                        .'|/edit(*:356)'
                        .'|(*:364)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:389)'
                        .'|/edit(*:402)'
                        .'|(*:410)'
                    .')'
                .')'
                .'|/favorites/gestion/(\\d+)(*:444)'
                .'|/movie/(?'
                    .'|([^/]++)(*:470)'
                    .'|(\\d+)/review/add(*:494)'
                .')'
                .'|/test/movie/(?'
                    .'|(\\d+)(*:523)'
                    .'|update/(\\d+)(*:543)'
                    .'|delete/(\\d+)(*:563)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        195 => [[['_route' => 'api_genres_get_movies', '_controller' => 'App\\Controller\\Api\\ApiGenresController::getItemAndMovies'], ['id'], ['GET' => 0], null, false, false, null]],
        215 => [[['_route' => 'api_movies_get_item', '_controller' => 'App\\Controller\\Api\\ApiMovieController::getItem'], ['id'], ['GET' => 0], null, false, true, null]],
        258 => [[['_route' => 'back_casting_index', '_controller' => 'App\\Controller\\Back\\CastingController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        284 => [[['_route' => 'back_casting_new', '_controller' => 'App\\Controller\\Back\\CastingController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        308 => [[['_route' => 'back_casting_edit', '_controller' => 'App\\Controller\\Back\\CastingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        316 => [[['_route' => 'back_casting_delete', '_controller' => 'App\\Controller\\Back\\CastingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        343 => [[['_route' => 'back_movie_show', '_controller' => 'App\\Controller\\Back\\MovieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        356 => [[['_route' => 'back_movie_edit', '_controller' => 'App\\Controller\\Back\\MovieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        364 => [[['_route' => 'back_movie_delete', '_controller' => 'App\\Controller\\Back\\MovieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        389 => [[['_route' => 'back_user_show', '_controller' => 'App\\Controller\\Back\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        402 => [[['_route' => 'back_user_edit', '_controller' => 'App\\Controller\\Back\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        410 => [[['_route' => 'back_user_delete', '_controller' => 'App\\Controller\\Back\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        444 => [[['_route' => 'favorite_gestion', '_controller' => 'App\\Controller\\Front\\FavoritesController::favorite'], ['id'], null, null, false, true, null]],
        470 => [[['_route' => 'main_movie_show', '_controller' => 'App\\Controller\\Front\\MainController::movieShow'], ['slug'], null, null, false, true, null]],
        494 => [[['_route' => 'main_movie_review_add', '_controller' => 'App\\Controller\\Front\\MainController::movieReviewAdd'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        523 => [[['_route' => 'app_test_show', '_controller' => 'App\\Controller\\TestController::show'], ['id'], null, null, false, true, null]],
        543 => [[['_route' => 'app_test_update', '_controller' => 'App\\Controller\\TestController::update'], ['id'], null, null, false, true, null]],
        563 => [
            [['_route' => 'app_test_delete', '_controller' => 'App\\Controller\\TestController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
