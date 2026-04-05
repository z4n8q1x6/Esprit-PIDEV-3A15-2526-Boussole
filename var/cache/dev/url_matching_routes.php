<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/entreprise' => [[['_route' => 'app_admin_entreprise', '_controller' => 'App\\Controller\\AdminEntrepriseController::index'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_admin_user', '_controller' => 'App\\Controller\\AdminUserController::index'], null, null, null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'app_admin_user_new', '_controller' => 'App\\Controller\\AdminUserController::new'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'app_front_home', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\SecurityController::home'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\SecurityController::forgotPassword'], null, null, null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/admin/(?'
                    .'|entreprise/([^/]++)/(?'
                        .'|edit\\-inline(*:87)'
                        .'|delete(*:100)'
                    .')'
                    .'|user/([^/]++)/(?'
                        .'|edit\\-inline(*:138)'
                        .'|delete(*:152)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        87 => [[['_route' => 'app_admin_entreprise_edit_inline', '_controller' => 'App\\Controller\\AdminEntrepriseController::editInline'], ['id'], ['POST' => 0], null, false, false, null]],
        100 => [[['_route' => 'app_admin_entreprise_delete', '_controller' => 'App\\Controller\\AdminEntrepriseController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        138 => [[['_route' => 'app_admin_user_edit_inline', '_controller' => 'App\\Controller\\AdminUserController::editInline'], ['id'], ['POST' => 0], null, false, false, null]],
        152 => [
            [['_route' => 'app_admin_user_delete', '_controller' => 'App\\Controller\\AdminUserController::delete'], ['id'], ['DELETE' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
